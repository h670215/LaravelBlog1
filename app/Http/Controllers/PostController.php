<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;
use Illuminate\Support\Facades\DB;


class PostController extends Controller
{

    function index(){
        $data = DB::table('posts')->get();
        return view('posts', ['data'=>$data]);
    }

}
