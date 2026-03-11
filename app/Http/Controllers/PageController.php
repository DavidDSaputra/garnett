<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Project;
use App\Models\Post;
use App\Models\Testimonial;
use App\Models\Statistic;
use App\Models\Client;

class PageController extends Controller
{
    public function home()
    {
        $services = Service::latest()->take(6)->get();
        $projects = Project::latest()->take(3)->get();
        $posts = Post::latest()->take(3)->get();
        $testimonials = Testimonial::all();
        $statistics = Statistic::all();
        $clients = Client::where('is_active', true)->get();

        return view('home', compact('services', 'projects', 'posts', 'testimonials', 'statistics', 'clients'));
    }

    public function about()
    {
        return view('pages.about');
    }

    public function services()
    {
        $services = Service::all();
        return view('pages.services', compact('services'));
    }

    public function serviceDetail($slug)
    {
        $service = Service::where('slug', $slug)->firstOrFail();
        return view('pages.service-detail', compact('service'));
    }

    public function projects()
    {
        $projects = Project::latest()->get();
        return view('pages.projects', compact('projects'));
    }

    public function blog()
    {
        $posts = Post::latest()->paginate(9);
        return view('pages.blog', compact('posts'));
    }

    public function blogDetail($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        $relatedPosts = Post::where('id', '!=', $post->id)->latest()->take(3)->get();
        return view('pages.blog-detail', compact('post', 'relatedPosts'));
    }

    public function contact()
    {
        return view('pages.contact');
    }
}
