@extends('layouts/front')

@section('title')
@lang('front.donation')
@endsection


@section('main')


<section id="main" class="container">
 <div class="row main_banner_colage">


<div class="row">
  <div class = "reklama col-12">
    <img class = "mt-0" src="{{ asset('front/assets/images/reklama2.png') }} "  />
  </div>
</div>


<div class = "row">
<div class = "row">
<div class="col-12 col-lg-4 pt-5">
<div class="card">
<img class="card-img-top image img-fluid" src="{{ asset('front/assets/images/turi1.jpg') }}" alt="Card image cap">
<div class="card-body main_card_body p-0">
  <h5 class="card-title text-center m-1"><a href="">ტური ბათუმში</a></h5>
  <div class="row align-items-end m-0 py-2">

  <div class="col-7"> <span class="card_main_price">30</span><span class="card_main_valut">ლ</span><span class="news_data">-დან</span></div>
  <div class="col-5 no_padding text-center"> <span class="news_more"><button class = "btn btn-primary py-2 px-4">მეტი</button></span></div>

  </div>
</div>
</div>
</div>


<div class="col-12 col-lg-4 pt-5">
<div class="card">
<img class="card-img-top image img-fluid" src="{{ asset('front/assets/images/fari.jpg') }}" alt="Card image cap">
<div class="card-body main_card_body p-0">
  <h5 class="card-title text-center m-1"><a href="">მარტვილის კანიონი</a></h5>
  <div class="row align-items-end m-0 py-2">

  <div class="col-7"> <span class="card_main_price">15</span><span class="card_main_valut">ლ</span><span class="news_data">-დან</span></div>
  <div class="col-5 no_padding text-center"> <span class="news_more"><button class = "btn btn-primary py-2 px-4">მეტი</button></span></div>

  </div>
</div>
</div>
</div>


<div class="col-12 col-lg-4 pt-5">
<div class="card" >
<img class="card-img-top image img-fluid" src="{{ asset('front/assets/images/mogzauroba.jpg') }}" alt="Card image cap">
<div class="card-body main_card_body p-0">
  <h5 class="card-title text-center m-1"><a href="">ტური ვაშლოვანში</a></h5>
  <div class="row align-items-end m-0 py-2">

  <div class="col-7"> <span class="card_main_price">655</span><span class="card_main_valut">ლ</span><span class="news_data">-დან</span></div>
  <div class="col-5 no_padding text-center"> <span class="news_more"><button class = "btn btn-primary py-2 px-4">მეტი</button></span></div>

  </div>
</div>
</div>
</div>


<div class="col-12 col-lg-4 pt-5">
<div class="card">
<img class="card-img-top image img-fluid" src="{{ asset('front/assets/images/fari.jpg') }}" alt="Card image cap">
<div class="card-body main_card_body p-0">
  <h5 class="card-title text-center m-1"><a href="">მარტვილის კანიონი</a></h5>
  <div class="row align-items-end m-0 py-2">

  <div class="col-7"> <span class="card_main_price">15</span><span class="card_main_valut">ლ</span><span class="news_data">-დან</span></div>
  <div class="col-5 no_padding text-center"> <span class="news_more"><button class = "btn btn-primary py-2 px-4">მეტი</button></span></div>

  </div>
</div>
</div>
</div>


</div>
</div>
</div>
</section>
@endsection
