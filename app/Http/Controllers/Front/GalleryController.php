<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;

use App\Gallery;


class GalleryController extends Controller{

    protected $galleries;

    public function __construct(Gallery $galleries){
        $this->galleries = $galleries;
    }

    public function index(){


        //dd($this->galleries->all();

        $data['galleries'] = $this->galleries->orderBy('id','desc')->paginate(12);

        //dd(count($data['galleries'][3]->images));
        $data['menu']= 4;


        return view('front/gallery/index',$data);
    }

    public function fullstory($id){
        $data['gallery'] = $this->galleries->where('id',$id)->first();
        $data['menu']= 4;


        return view('front/gallery/fullstory',$data);
    }

}
