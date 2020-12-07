<?php

namespace App\Http\Controllers;
Use\App\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function show($id)
    {
$article=Article::find($id);
return view('articles.show',['article'=>$article]);
    }
    public function create()
    {
        return view('articles.create');
    }
    public function store()
    {
        $Article= new Article();

        $Article->title=request('title');
        $Article->captured=request('excerpt');
        $Article->body=request('body');
        $Article->save();

       

        echo '<script language="javascript">';
        echo 'alert("message successfully sent")';
        echo '</script>';
        return redirect('/');
    }
    public function edit()
    {
        $article =Article::take(1)->latest()->get();
     
        return view('YourReview',['article'=>$article]);
      
    }
    public function update()
    {
        $article =Article::first();

        $article->title=request('title');
        $article->captured=request('captured');
        $article->body=request('body');
       
        $article->save();
        return redirect('/');
    }
}
