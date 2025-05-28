<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogAuthor;
use App\Models\BlogCategory;
use App\Models\BlogTag;
use App\Models\Category;
use App\Models\Client;
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
        // $authors = BlogAuthor::withCount('authors')->get();

        return view('front.blog', compact('blogs', 'categories', 'recentPosts', 'tags', ));
    }



    public function blogDetails($slug)
    {
        $blog = Blog::where('slug', $slug)->firstOrFail();
        return view('front.blog-details', compact('blog'));
    }




    public function contact()
    {
        return view('front.contact');
    }
}
