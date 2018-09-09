<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OnlineArticleController extends Controller
{

    public function index()
    {
        return view('Online.Article.index');
    }

    public function create()
    {
        return view('Online.Article.create');
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        return view('Online.Article.edit');
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
