<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
//use App\Models\post;



class PostingController extends Controller{


    public function add(){
        return view('posting');
    }

    public function store(Request $request){
        request()->validate([
            'user'=>'required|max:30|min:4',
            'post'=>'required|max:400',
            'tag'=>'required|max:20'
        ]);

        $query =
            DB::table('posts')->insert([
                'user'=>$request->input('user'),
                'post'=>$request->input('post'),
                'tag' =>$request->input('tag')
            ]);

        if($query){
            return redirect()->back();
        } else{
            return redirect()->back()->with('fail', 'fail') ;
        }

        //dd('Sikeres bejegyzés!');
        //return redirect()->back();
    }

}
