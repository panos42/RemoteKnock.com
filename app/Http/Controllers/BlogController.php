<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('blog_posts.blog');
    }

    
    public function interview_tips()
    {
        return view('blog_posts.interview-tips');
    }
    public function job_tips()
    {
        return view('blog_posts.job-tips');
    }


}
