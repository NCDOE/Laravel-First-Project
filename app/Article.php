<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public function show($id)
    {
$article=Article::find($id);
return view('articles.show',['article'=>$article]);
    }
}
