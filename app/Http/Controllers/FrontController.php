<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogAuthor;
use App\Models\BlogCategory;
use App\Models\BlogTag;
use App\Models\Category;
use App\Models\Client;
use App\Models\Comment;
use App\Models\HomeFirstSection;
use App\Models\HomeServicesSection;
use App\Models\Service;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {

        $home_first_section = HomeFirstSection::all();
        $data['home_first_section'] = $home_first_section;

        $clients = Client::all();
        $data['clients'] = $clients;

        $testimonials = Testimonial::all();
        $data['testimonials'] = $testimonials;

        $services = Service::all();
        $data['services'] = $services;

        $home_services_section = HomeServicesSection::all();
        $data['home_services_section'] = $home_services_section;



        return view('front.home', $data);
    }


    public function pricing()
    {
        return view('front.pricing');
    }




    public function blog()
    {
        $blogs = Blog::latest()->paginate(4); // Paginate 4 per page
        $categories = BlogCategory::withCount('blogs')->get(); // Assuming relationship exists
        $recentPosts = Blog::latest()->take(5)->get();
        $tags = BlogTag::withCount('blogs')->get(); // Assuming tags are stored in comma-separated format or JSON
        

        return view('front.blog', compact('blogs', 'categories', 'recentPosts', 'tags',));
    }


    public function categoryWiseBlog($id)
    {
        $category = BlogCategory::findOrFail($id);
        $blogs = $category->blogs()->latest()->paginate(4); // Adjust per-page as needed
        $categories = BlogCategory::withCount('blogs')->get();
        $recentPosts = Blog::latest()->take(5)->get();
        $tags = BlogTag::withCount('blogs')->get();

        return view('front.blog', compact('blogs', 'categories', 'recentPosts', 'tags', 'category'));
    }

    public function tagWiseBlog($id)
    {
        $tag = BlogTag::findOrFail($id);
        $blogs = $tag->blogs()->latest()->paginate(4);
        $categories = BlogCategory::withCount('blogs')->get();
        $recentPosts = Blog::latest()->take(5)->get();
        $tags = BlogTag::withCount('blogs')->get();

        return view('front.blog', compact('blogs', 'categories', 'recentPosts', 'tags', 'tag'));
    }


    public function searchBlog(Request $request)
    {
        $query = $request->input('q');

        $blogs = Blog::where(function ($q) use ($query) {
            $q->where('title', 'like', "%{$query}%")
                ->orWhere('slug', 'like', "%{$query}%")
                ->orWhere('content', 'like', "%{$query}%");
        })
            ->latest()
            ->paginate(4);

        // Preserve search term in pagination links
        $blogs->appends(['q' => $query]);

        // Sidebar data
        $categories = BlogCategory::withCount('blogs')->get();
        $recentPosts = Blog::latest()->take(5)->get();
        $tags = BlogTag::withCount('blogs')->get();

        return view('front.blog', compact('blogs', 'categories', 'recentPosts', 'tags', 'query'));
    }





    public function blogDetails($slug)
    {
        $blog = Blog::where('slug', $slug)->where('is_published', true)->firstOrFail();

        $categories = BlogCategory::withCount('blogs')->get();
        $recentPosts = Blog::latest()->take(5)->get();
        $tags = BlogTag::withCount('blogs')->get();

        $comments = $blog->comments()->with('replies')->get();

        return view('front.blog-details', compact('blog', 'categories', 'recentPosts', 'tags', 'comments'));
    }



    public function storeComment(Request $request)
    {
        $validated = $request->validate([
            'blog_id' => 'required|exists:blogs,id',
            'name' => 'required|string|max:255',
            'email' => 'nullable|email',
            'website' => 'nullable|url',
            'comment' => 'required|string',
            'parent_id' => 'nullable|exists:comments,id',


        ]);

        Comment::create($validated);

        return back()->with('success', 'Your comment has been posted.');
    }








    public function contact()
    {
        return view('front.contact');
    }
}
