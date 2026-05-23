<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    public function index()
    {
        // Eager loading relasi category & user untuk performa optimal
        $articles = Article::with(['category', 'user'])->latest()->get();
        return view('admin.articles.index', compact('articles'));
    }

    public function create()
    {
        $categories = Category::all();
        if ($categories->isEmpty()) {
            return redirect()->route('categories.create')->with('info', 'Silakan buat kategori terlebih dahulu sebelum menulis berita.');
        }
        return view('admin.articles.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'content' => 'required|string',
        ]);

        Article::create([
            'user_id' => Auth::id(),
            'category_id' => $request->input('category_id'),
            'title' => $request->input('title'),
            'slug' => Str::slug($request->input('title')) . '-' . time(),
            'content' => $request->input('content'),
        ]);

        return redirect()->route('articles.index')->with('success', 'Berita berhasil ditambahkan!');
    }

    public function edit(Article $article)
    {
        $categories = Category::all();
        return view('admin.articles.edit', compact('article', 'categories'));
    }

    public function update(Request $request, Article $article)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'content' => 'required|string',
        ]);

        $article->update([
            'category_id' => $request->input('category_id'),
            'title' => $request->input('title'),
            'slug' => Str::slug($request->input('title')) . '-' . $article->id,
            'content' => $request->input('content'),
        ]);

        return redirect()->route('articles.index')->with('success', 'Berita berhasil diperbarui!');
    }

    public function destroy(Article $article)
    {
        $article->delete();
        return redirect()->route('articles.index')->with('success', 'Berita berhasil dihapus!');
    }
}
