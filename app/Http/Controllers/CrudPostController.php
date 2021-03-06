<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CrudPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    function index(){
        $data = DB::table('posts')->get();
        return view('posts', ['data'=>$data]);
    }

    function tagindex(){
        $listedtag = DB::table('tags')->get();
        return view('crud.listing', ['listedtag'=>$listedtag]);
    }

    function listindex(){

        $listedpost = DB::table('posts')->where('tag', '$tag');
        return view('crud.listing', ['listedpost'=>$listedpost]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function add() /*create volt eredetileg*/
    {
        return view('posting');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request){
        request()->validate([
            'user'=>'required|max:30|min:4',
            'post'=>'required|max:1000',
            'tag'=>'required|max:20'
        ]);

        $query =
            DB::table('posts')->insert([
                'user'=>$request->input('user'),
                'post'=>$request->input('post'),
                'tag' =>$request->input('tag')
            ]);
        $query2 =
            DB::table('tags')->insert([
                'tag'=>$request->input('tag')
            ]);

        if($query && $query2){
            return redirect()->back();
        } else{
            return redirect()->back()->with('fail', 'fail') ;
        }

        //dd('Sikeres bejegyzés!');
        //return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */

     /*public function show($post){ //még nincs megírva

        return view('crud.show', compact('post'));
    }*/

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $post = post::find($id);
        return view('crud.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        request()->validate([
            'user'=>'required|max:30|min:4',
            'post'=>'required|max:1000',
            'tag'=>'required|max:20'
        ]);
        $posts = post::all();
        $post = $posts->find($id);
        $post->user = $request->get('user'); //eredetileg get helyett input volt
        $post->post = $request->get('post');
        $post->tag = $request->get('tag');

        //$post->update();
        return redirect()->back()->with('success', 'Post updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $post = post::find($id);
        $post->delete();

        return redirect()->back()->with('success', 'Post deleted successfully');
    }
}
