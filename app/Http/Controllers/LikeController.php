<?php

namespace App\Http\Controllers;

use App\Models\Like;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    

    /**
     * Display the specified resource.
     */
    public function show(Like $like)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Like $like)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Like $like)
    {
        //
    }
    public function store(Post $post)
    {
        $like = new Like;
        $like->user_id = auth()->user()->id;
        $post->likes()->save($like);
        
        return redirect()->back();
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Like $like)
    {
        //
        
    $like->delete();

    return redirect()->back();
    }
}
