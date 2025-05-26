<?php

namespace App\Http\Controllers;

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
        return view('front.blog');
    }
    public function contact()
    {
        return view('front.contact');
    }

}
