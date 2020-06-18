<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Contributor;

use App\Gallery;

use App\News;

use App\Scholarship;

use App\Video;

use App\Text;


class DashboardController extends Controller
{
    protected $contributor;
    protected $gallery;
    protected $news;
    protected $scholarship;
    protected $video;
    protected $text;


    public function __construct(Contributor $contributor, Gallery $gallery, News $news, Scholarship $scholarship, Video $video, Text $text){
        $this->contributor = $contributor;
        $this->gallery = $gallery;
        $this->news = $news;
        $this->scholarship = $scholarship;
        $this->video = $video;
        $this->text = $text;
        $this->middleware('auth')->except('logout');
    }




    public function index()
    {
        return view('admin/dashboard',[
            'contributor_num'=>$this->contributor->count(),
            'gallery_num'=>$this->gallery->count(),
            'news_num'=>$this->news->count(),
            'scholarship_num'=>$this->scholarship->count(),
            'video_num'=>$this->video->count(),
            'about_num'=>$this->text->count()
        ]);
    }
}
