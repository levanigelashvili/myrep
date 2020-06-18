<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;

use App\News;
use App\NewsStatus;

class mainController extends Controller{

    protected $news;
    protected $newsStatus;

    public function __construct(News $news, NewsStatus $newsStatus){
        $this->news = $news;
        $this->newsStatus = $newsStatus;
    }

    public function index(){

        $status = $this->newsStatus->all();
        $getNews['first'] = $status[0]->news_id;
        $getNews['second'] = $status[1]->news_id;
        $getNews['third'] = $status[2]->news_id;

        $data['first'] = $getNews['first'] != null ? $this->news->where('id', $getNews['first'])->first() : null;
        $data['second'] = $getNews['second'] != null ? $this->news->where('id', $getNews['second'])->first() : null;
        $data['third'] = $getNews['third'] != null ? $this->news->where('id', $getNews['third'])->first() : null;

        $data['menu']= 1;

        return view('front/index',$data);
    }

    public function showcart(){

        $status = $this->newsStatus->all();
        $getNews['first'] = $status[0]->news_id;
        $getNews['second'] = $status[1]->news_id;
        $getNews['third'] = $status[2]->news_id;

        $data['first'] = $getNews['first'] != null ? $this->news->where('id', $getNews['first'])->first() : null;
        $data['second'] = $getNews['second'] != null ? $this->news->where('id', $getNews['second'])->first() : null;
        $data['third'] = $getNews['third'] != null ? $this->news->where('id', $getNews['third'])->first() : null;

        $data['menu']= 1;

        return view('front/cart',$data);
    }


}
