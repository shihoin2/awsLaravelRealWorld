<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\User;
use App\Models\PostForm;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class RealWorldController extends Controller
{
    public function articles(Request $request)
    {
        Article::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title, '-'),
            'summary' => $request->summary,
            'body' => $request->body,
            'tagList' => $request->tagList,
        ]);
    }

    public function getArticles($id)
    {
        $article = Article::with('user')->find($id);
        $comments = PostForm::with('user')->where('article_id', '=', $id)->get();
        $data = [
            'article' => $article,
            'comments' => $comments,
        ];
        return response()->json($data);
    }

    public function getAllArticles()
    {
        $article = Article::with('user')->paginate(5);
        return response()->json($article);
    }

    public function editArticles(Request $request, $id)
    {
        $article = Article::findOrFail($id);

        if ($request->has('title')) {
            $article->title = $request->title;
        }
        if ($request->has('summary')) {
            $article->summary = $request->summary;
        }
        if ($request->has('body')) {
            $article->body = $request->body;
        }
        if ($request->has('tagList')) {
            $article->tagList = $request->tagList;
        }

        $article->save();

        return response()->json($article);
    }

    public function deleteArticles($id)
    {
        $article = Article::find($id);
        $article->delete();
    }

    public function addUsers(Request $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);
    }
}
