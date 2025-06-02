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




    private function getSidebarData()
    {
        return [
            'categories' => BlogCategory::withCount('blogs')->get(),
            'recentPosts' => Blog::where('is_published', 1)
                ->whereNotNull('published_at')
                ->latest()
                ->take(5)
                ->get(),
            'tags' => BlogTag::withCount('blogs')->get(),
        ];
    }

    public function blog()
    {
        $blogs = Blog::with(['categories', 'tags', 'author'])
            ->where('is_published', 1)
            ->whereNotNull('published_at')
            ->latest()
            ->paginate(4);

        $data = $this->getSidebarData();

        return view('front.blog', array_merge(['blogs' => $blogs], $data));
    }

    public function categoryWiseBlog($id)
    {
        $category = BlogCategory::findOrFail($id);
        $blogs = $category->blogs()
            ->with(['categories', 'tags', 'author'])
            ->where('is_published', 1)
            ->whereNotNull('published_at')
            ->latest()
            ->paginate(4);
        $data = $this->getSidebarData();

        return view('front.blog', array_merge(['blogs' => $blogs, 'category' => $category], $data));
    }

    public function tagWiseBlog($id)
    {
        $tag = BlogTag::findOrFail($id);
        $blogs = $tag->blogs()
            ->with(['categories', 'tags', 'author'])
            ->where('is_published', 1)
            ->whereNotNull('published_at')
            ->latest()
            ->paginate(4);
        $data = $this->getSidebarData();

        return view('front.blog', array_merge(['blogs' => $blogs, 'tag' => $tag], $data));
    }


    public function searchBlog(Request $request)
    {
        $query = $request->input('q');

        $blogs = Blog::with(['categories', 'tags', 'author'])
            ->where(function ($qBuilder) use ($query) {
                $qBuilder->where('title', 'like', "%{$query}%")
                    ->orWhere('slug', 'like', "%{$query}%")
                    ->orWhere('content', 'like', "%{$query}%");
            })
            ->latest()
            ->paginate(4);


        $blogs->appends(['q' => $query]);



        $data = $this->getSidebarData();

        return view('front.blog', array_merge(['blogs' => $blogs, 'query' => $query], $data));
    }



    public function blogDetails($slug)
    {
        $blog = Blog::where('slug', $slug)
            ->where('is_published', true)
            ->whereNotNull('published_at')
            ->firstOrFail();

        $categories = BlogCategory::withCount('blogs')->get();

        $recentPosts = Blog::where('is_published', true)
            ->whereNotNull('published_at')
            ->latest()
            ->take(5)
            ->get();

        $tags = BlogTag::withCount('blogs')->get();

        $comments = $blog->comments()
            ->whereNull('parent_id')
            ->with('replies')
            ->get();

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
