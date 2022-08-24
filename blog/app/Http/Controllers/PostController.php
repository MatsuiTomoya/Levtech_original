<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Schedule;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function top(Schedule $schedule)
    {
        return view('top')->with(['schedules' => $schedule->get()]);
    }
    
    public function mypage(Post $post)
    {
        return view('mypage');
    }
    
    public function newregister(Post $post)
    {
        return view('newregister');
    }
    
    public function create()
    {
        return view('create');
    }
}
