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
<div class="col-12 col-lg-6 pt-5">
<div class="card">
<img class="card-img-top image " src="{{ asset('front/assets/images/turi1.jpg') }}"  height="377" alt="Card image cap">
<div class="card-body main_card_body p-0">
  <h5 class="card-title text-center m-1"><a href="">მოიარე რაჭა</a></h5>
  <div class="row align-items-end m-0 py-2">

  <div class="col-7"> <span class="card_main_price">110</span><span class="card_main_valut"> ლ</span><span class="news_data">-დან</span></div>
  <div class="col-5 no_padding text-center"><a href="{{route('donation.fullstory')}}"><span class="news_more"><button class = "btn btn-primary py-2 px-4">მეტი</button></span></a></div>

  </div>
</div>
</div>
</div>


<div class="col-12 col-lg-6 pt-5">
<div class="card">
<img class="card-img-top image img-fluid" src="{{ asset('front/assets/images/fari.jpg') }}" height="377" alt="Card image cap">
<div class="card-body main_card_body p-0">
  <h5 class="card-title text-center m-1"><a href="">მოიარე სვანეთი</a></h5>
  <div class="row align-items-end m-0 py-2">

  <div class="col-7"> <span class="card_main_price">99</span><span class="card_main_valut"> ლ</span><span class="news_data">-დან</span></div>
  <div class="col-5 no_padding text-center"> <span class="news_more"><button class = "btn btn-primary py-2 px-4">მეტი</button></span></div>

  </div>
</div>
</div>
</div>


<div class="col-12 col-lg-6 pt-5">
<div class="card" >
<img class="card-img-top image img-fluid" src="{{ asset('front/assets/images/mogzauroba.jpg') }}" height="377" alt="Card image cap">
<div class="card-body main_card_body p-0">
  <h5 class="card-title text-center m-1"><a href="">მოიარე ბახმარო</a></h5>
  <div class="row align-items-end m-0 py-2">

  <div class="col-7"> <span class="card_main_price">75</span><span class="card_main_valut"> ლ</span><span class="news_data">-დან</span></div>
  <div class="col-5 no_padding text-center"> <span class="news_more"><button class = "btn btn-primary py-2 px-4">მეტი</button></span></div>

  </div>
</div>
</div>
</div>


<div class="col-12 col-lg-6 pt-5">
<div class="card">
<img class="card-img-top image img-fluid" src="{{ asset('front/assets/images/fari.jpg') }}" height="377" alt="Card image cap">
<div class="card-body main_card_body p-0">
  <h5 class="card-title text-center m-1"><a href="">მოიარე კახეთი</a></h5>
  <div class="row align-items-end m-0 py-2">

  <div class="col-7"> <span class="card_main_price">95</span><span class="card_main_valut">ლ</span><span class="news_data">-დან</span></div>
  <div class="col-5 no_padding text-center"> <span class="news_more"><button class = "btn btn-primary py-2 px-4">მეტი</button></span></div>

  </div>
</div>
</div>
</div>




</div>
</div>

</section>
@endsection
