<?php

namespace App\Http\Controllers;

use App\Models\News;

class HomeController extends Controller
{
    public function index()
    {
        $news = News::published()->limit(4)->get();

        return view('home.index', compact('news'));
    }

    public function news()
    {
        $news = News::published()->paginate(20);

        return view('home.pages.news.index', compact('news'));
    }

    public function newsDetail(News $news)
    {
        return view('home.pages.news.detail', compact('news'));
    }

    public function organizationStructure()
    {
        return view('home.pages.profiles.organization-structure');
    }

    public function members()
    {
        return view('home.pages.members.index');
    }
}
