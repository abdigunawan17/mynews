<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\NewsPost;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Intervention\Image\Facades\Image;

class IndexController extends Controller
{
    public function Index()
    {
        $newnewspost = NewsPost::orderBy('id', 'DESC')->limit(8)->get();
        $newspopular = NewsPost::orderBy('view_count', 'DESC')->limit(8)->get();

        return view('frontend.index', compact('newnewspost', 'newspopular'));
    }

    public function NewsDetail($id, $slug)
    {
        $get_news = NewsPost::findOrFail($id);

        $get_tags = $get_news->tags;
        $tags = explode(',', $get_tags);
        $cat_id =  $get_news->category_id;
        $relatedNews = NewsPost::where('category_id', $cat_id)->where('id', '!=', $id)->orderBy('id', 'DESC')->limit(6)->get();

        $newsKey = 'blog' . $get_news->id;
        if( !Session::has($newsKey) ) {
            $get_news->increment('view_count');
            Session::put($newsKey,1);
        }

        $newnewspost = NewsPost::orderBy('id', 'DESC')->limit(8)->get();
        $newspopular = NewsPost::orderBy('view_count', 'DESC')->limit(8)->get();

        return view('frontend.news.news_details', compact('get_news', 'tags', 'relatedNews', 'newnewspost', 'newspopular'));
    }

    public function CatWiseNews($id, $slug)
    {
        
    }
}
