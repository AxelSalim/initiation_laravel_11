<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {

        $posts = Post::latest()->paginate(6);

        return view('users.dashboard', ['posts' => $posts]);
    }
}
