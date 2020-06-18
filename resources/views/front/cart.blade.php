@extends('layouts/front')



@section('title')
@lang('front.main')
@endsection



@section('main')


<section id="main" class="container">

  <div class="container" style="padding-top:100px;">
     <div class="card shopping-cart">
              <div class="card-header bg-dark text-light">
                  <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                  კალათა
                  <a href="" class="btn btn-outline-info btn-sm pull-right">განაგრძე შოპინგი</a>
                  <div class="clearfix"></div>
              </div>
              <div class="card-body">
                      <!-- PRODUCT -->
                      <div class="row">
                          <div class="col-12 col-sm-12 col-md-2 text-center">
                                  <img class="img-responsive" src="{{ asset('front/assets/images/auto.png') }}" alt="prewiew" width="120" height="80">
                          </div>
                          <div class="col-12 text-sm-center col-sm-12 text-md-left col-md-6">
                              <h4 class="product-name"><strong>შატლი</strong></h4>
                              <h4>
                                  <small>დიდუბე,სანზონა,გლდანი</small>
                              </h4>
                          </div>
                          <div class="col-12 col-sm-12 text-sm-center col-md-4 text-md-right row">
                              <div class="col-3 col-sm-3 col-md-6 text-md-right" style="padding-top: 5px">
                                  <h6><strong>10.00 <span class="text-muted">x</span></strong></h6>
                              </div>
                              <div class="col-4 col-sm-4 col-md-4">
                                  <div class="quantity">
                                      <input type="button" value="+" class="plus">
                                      <input type="number" step="1" max="99" min="1" value="1" title="Qty" class="qty"
                                             size="4">
                                      <input type="button" value="-" class="minus">
                                  </div>
                              </div>
                              <div class="col-2 col-sm-2 col-md-2 text-right">
                                  <button type="button" class="btn btn-outline-danger btn-xs">
                                      <i class="fa fa-trash" aria-hidden="true"></i>
                                  </button>
                              </div>
                          </div>
                      </div>
                      <hr>
                      <!-- END PRODUCT -->
                      <!-- PRODUCT -->
                      <div class="row">
                          <div class="col-12 col-sm-12 col-md-2 text-center">
                                  <img class="img-responsive" src="{{ asset('front/assets/images/turi1.jpg') }}" alt="prewiew" width="120" height="80">
                          </div>
                          <div class="col-12 text-sm-center col-sm-12 text-md-left col-md-6">
                              <h4 class="product-name"><strong>მოგზაურობა</strong></h4>
                              <h4>
                                  <small>ტური ბათუმში</small>
                              </h4>
                          </div>
                          <div class="col-12 col-sm-12 text-sm-center col-md-4 text-md-right row">
                              <div class="col-3 col-sm-3 col-md-6 text-md-right" style="padding-top: 5px">
                                  <h6><strong>95.00 <span class="text-muted">x</span></strong></h6>
                              </div>
                              <div class="col-4 col-sm-4 col-md-4">
                                  <div class="quantity">
                                      <input type="button" value="+" class="plus">
                                      <input type="number" step="1" max="99" min="1" value="1" title="Qty" class="qty"
                                             size="4">
                                      <input type="button" value="-" class="minus">
                                  </div>
                              </div>
                              <div class="col-2 col-sm-2 col-md-2 text-right">
                                  <button type="button" class="btn btn-outline-danger btn-xs">
                                      <i class="fa fa-trash" aria-hidden="true"></i>
                                  </button>
                              </div>
                          </div>
                      </div>
                      <hr>
                      <!-- END PRODUCT -->
                  <div class="pull-right">
                      <a href="" class="btn btn-outline-secondary pull-right">
                          კალათას განახლება
                      </a>
                  </div>
              </div>
              <div class="card-footer" style="border-radius:25px;;">
                  <div class="coupon col-md-5 col-sm-5 no-padding-left pull-left">
                      <div class="row">
                          <div class="col-6">
                              <input type="text" class="form-control" placeholder="შეიყვანეთ კუპონის კოდი">
                          </div>
                          <div class="col-6">
                              <input type="submit" class="btn btn-default" value="გამოყენება">
                          </div>
                      </div>
                  </div>
                  <div class="pull-right" style="margin: 10px">
                      <a href="" class="btn btn-success pull-right">გადახდა</a>
                      <div class="pull-right" style="margin: 5px">
                          გადასახდელი თანხა: <b>50.00ლ</b>
                      </div>
                  </div>
              </div>
          </div>
  </div>


<div class = "row  p-5 shuttle_row bg-white">
  <div class = "card_heading d-flex justify-content-between">
    <span class="bebas_neue">თქვენთვის რეკომენდებული</span>
    <img src="{{ asset('front/assets/images/arrow_down.png') }}" />

  </div>
<div class = "row justify-content-around">
<div class="col-12 col-lg-4">
<div class="card">
<img class="card-img-top image img-fluid" src="{{ asset('front/assets/images/bus.png') }}" alt="Card image cap">
<div class="card-body main_card_body p-0">
  <h5 class="card-title text-center m-1"><a href="{{ route('news.fullstory',['id'=>$third->id]) }}">ავტო ტრანსფერი</a></h5>
  <div class="row align-items-end m-0 py-2">

  <div class="col-7"> <span class="card_main_price">3</span><span class="card_main_valut">ლ</span><span class="news_data">-დან</span></div>
      <a href="news/shuttlle"> <div class="col-5 no_padding text-center"> <span class="news_more"><button class = "btn btn-primary py-2 px-4">მეტი</button></span></div></a>

  </div>
</div>
</div>
</div>


<div class="col-12 col-lg-4">
<div class="card">
<img class="card-img-top image img-fluid" src="{{ asset('front/assets/images/concert4.jpg') }}" alt="Card image cap">
<div class="card-body main_card_body p-0">
  <h5 class="card-title text-center m-1"><a href="{{ route('news.fullstory',['id'=>$third->id]) }}">კონცერტი</a></h5>
  <div class="row align-items-end m-0 py-2">

  <div class="col-7"> <span class="card_main_price">15</span><span class="card_main_valut">ლ</span><span class="news_data">-დან</span></div>
  <div class="col-5 no_padding text-center"> <span class="news_more"><button class = "btn btn-primary py-2 px-4">მეტი</button></span></div>


  </div>
</div>
</div>
</div>


<div class="col-12 col-lg-4">
<div class="card" >
<img class="card-img-top image img-fluid" src="{{ asset('front/assets/images/corona.jpg') }}" alt="Card image cap">
<div class="card-body main_card_body p-0">
  <h5 class="card-title text-center m-1"><a href="{{ route('news.fullstory',['id'=>$third->id]) }}">ფილმი</a></h5>
  <div class="row align-items-end m-0 py-2">

  <div class="col-7"> <span class="card_main_price">9</span><span class="card_main_valut">ლ</span><span class="news_data">-დან</span></div>
  <div class="col-5 no_padding text-center"> <span class="news_more"><button class = "btn btn-primary py-2 px-4">მეტი</button></span></div>

  </div>
</div>
</div>
</div>

</div>
</div>








</section>


@endsection
