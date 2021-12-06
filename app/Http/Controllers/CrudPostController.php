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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function add() /*Ez itt jelenleg nincs route-olva, mert a PostingController van helyette*/
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /*public function show(Product $product)
    {
        return view('products.show', compact('product'));
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
    public function update(Request $request, $post)
    {
        $post->id = $request->input('id');
        $post->user = $request->input('user');
        $post->post = $request->input('post');
        $post->tag = $request->input('tag');

        $post->update();
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
        $post = Post::find($id);
        $post->delete();

        return redirect()->back()->with('success', 'Post deleted successfully');
    }
}
