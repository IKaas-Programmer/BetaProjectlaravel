<?php

namespace App\Http\Controllers;
use App\Models\Articles;
use App\Models\ArticlesComment;
use Illuminate\Support\Facades\Http;
use App\Models\User;
use App\Models\Page;
use App\Models\Comments;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function articles()
    {
        // Fetch articles from the database
        $articles = Articles::all();
        return view('articles', compact('articles'));
    }

    public function api()
    {
        $response = Http::get('https://api.escuelajs.co/api/v1/users');

        $data = $response->successful() ? $response->object() : ['message' => 'Error fetching data from API'];

        return view('api', compact('data'));
    }

    public function page()
    {
        $pages = Page::all();
        return view('page', compact('pages'));
    }
}