<?php

namespace App\Http\Controllers\Admin;

use App\Models\News;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Admin\CreateNewsRequest;
use App\Http\Requests\Admin\UpdateNewsRequest;

class DashboardNewsController extends Controller
{
    public function index()
    {
        $news = News::with('author')->filters(request('search'))->paginate(10);

        return view('dashboard.pages.news.index', compact('news'));
    }

    public function getNews(News $news)
    {
        if (!Auth::check()) {
            return response()->json(['message' => 'Forbidden'], 403);
        }

        $news->load('author');

        $news = $news->only(['id', 'user_id', 'title', 'slug', 'content', 'image', 'is_published']);


        if ($news) {
            return response()->json([
                'message' => 'News found!',
                'news' => $news,
            ], 200);
        } else {
            return response()->json([
                'message' => 'News found!',
                'news' => null,
            ], 200);
        }
    }

    public function show(News $news)
    {
        return view('dashboard.pages.news.detail', compact('news'));
    }

    public function store(CreateNewsRequest $request)
    {
        $data = $request->validated();

        $data['description'] = $this->cleanText($data['content']);
        $data['slug'] = Str::slug($data['title']);
        $data['user_id'] = Auth::user()->id;
        $data['image'] = $this->handleNewsImage($request, $data);

        News::create($data);

        return redirect()->back()->with('success', 'Berhasil Menambah Berita!');
    }

    public function update(UpdateNewsRequest $request, News $news)
    {
        $data = $request->validated();

        $data['description'] = $this->cleanText($data['content']);
        $data['slug'] = Str::slug($data['title']);
        $data['user_id'] = Auth::user()->id;
        $data['image'] = $this->handleNewsImage($request, $data, $news->image);
        $data['is_published'] = empty($data['is_published']) ? 0 : 1;

        $news->update($data);

        return redirect()->back()->with('success', 'Berhasil Mengubah Berita!');
    }

    public function destroy(News $news)
    {
        $news->delete();

        return redirect()->back()->with('success', 'Berhasil menghapus berita!');
    }

    private function cleanText($input)
    {
        $cleanedText = strip_tags($input);
        $cleanedText = htmlspecialchars_decode($cleanedText);
        $cleanedText = preg_replace('/&[a-z]+;/i', ' ', $cleanedText);
        $cleanedText = substr($cleanedText, 0, 100);

        return $cleanedText;
    }

    private function handleNewsImage($request, $data, $existingImage = null)
    {
        if ($request->hasFile('image')) {
            $this->deleteNewsImageIfExists($existingImage);

            $document = $request->file('image');
            $filename = 'news-image-' . time() . '.' . $document->extension();
            $path = $this->uploadNewsImage($document, $filename, $data);

            return Storage::url($path);
        }
    }

    private function uploadNewsImage($document, $filename, $data)
    {
        return Storage::putFileAs(
            '/public/upload/news/news-' . $data['slug'],
            $document,
            $filename
        );
    }

    private function deleteNewsImageIfExists($existingImagePath)
    {
        $image = str_replace('/storage', '/public', $existingImagePath);

        if ($existingImagePath && Storage::exists($image)) {
            Storage::delete($image);
        }
    }
}
