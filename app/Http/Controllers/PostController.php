<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        //jangan lupa import model Post dengan cara klik kanan untuk import
        $post = Post::all();
        //berfungsi untuk mengatur jenis data yang akan ditampilkan
        return response()->json(['data' => $post]);
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        return new PostDetailResource($post);
    }

    public function show2($id)
    {
        $post = Post::with('writer:id,username')->findOrFail($id);
        return new PostDetailResource($post);
    }



}
