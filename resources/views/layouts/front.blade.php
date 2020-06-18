<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('front/assets/images/favicon.png') }}">
	<title>@yield('title')</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="{{ asset('front/assets/css/style.css') }}">
  <link rel="stylesheet"  href="{{ asset('front/assets/css/fonts.css') }}">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subse0 t=all" rel="stylesheet" type="text/css" />
  <link href="{{ asset('admin/assets/global/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('admin/assets/global/plugins/simple-line-icons/simple-line-icons.min.css') }}" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="{{ asset('front/assets/css/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('front/assets/css/owl.theme.default.min.css') }}">

  @yield('style')
</head>
<body>
	<div id="fb-root"></div>
	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/ka_GE/sdk.js#xfbml=1&version=v7.0"></script>
<header>
<div class = "container-fluid">
	<div class = "row d-flex justify-content-center">
	<div class ="col-3 text-center">
    <a class="brand" href="{{ route('index') }}"><img src="{{ asset('front/assets/images/benebrand.png') }}"></a>
	</div>
	<div class = "col-5 text-center">
			<i class="fas fa-search search_btn"></i>
      <input class="search_input" type="search" placeholder="ძიება სახელით, თარიღით, ადგილით..." aria-label="Search">
	</div>

	<div class = "col-3 text-center">

      <button class="cart_btn" type="submit"><a href ="{{route('user.cart')}}"><i class="fas fa-shopping-cart"></i></a><a href ="{{route('user.login')}}">{!! Auth::user() ? Auth::user()->email : '<span>შესვლა</span>'!!}</a></button>


  </div>
 </div>
</div>

  <div class="container-fluid">
    <div class="row">
      <div class="col-9 col-sm-10 p-0">
				<nav>

					<div class="toggle">
		              <span></span>
		              <span></span>
		              <span></span>
		              <span></span>
		         </div>



			<ul id="" class="menu_list p-0">
				<li class=" @if($menu == 1) active @endif"><a href="{{ route('index') }}">მთავარი</a></li>
				<li class=" @if($menu == 2) active @endif"><a href="{{ route('news.index') }}">ტრანსპორტი</a></li>
				<li class=" @if($menu == 3) active @endif"><a href="{{ route('donation.index') }}">ივენთი</a></li>
				<li class=" @if($menu == 4) active @endif"><a href="{{ route('gallery.index') }}">კონცერტი</a></li>
				<li class=" @if($menu == 5) active @endif"><a href="{{ route('contributors.index') }}">სპორტი</a></li>
				<li class=" @if($menu == 6) active @endif"><a href="{{ route('about.index') }}">სხვა</a></li>
	    </ul>
</div>
</nav>


        </div>

      <!--  enis archeva
			  <div class="col-2 col-sm-1">
          @if(app()->getLocale() === 'en')
            <a href="{{langUrl('ka')}}" class="lang_href">KA</a>
          @else
            <a href="{{langUrl('en')}}" class="lang_href">EN</a>
          @endif
        </div>
			-->

    </div>
  </div>
</header>

@yield('main')


<div class="container-fluid bg">
<div class="container footer one">
	<div class="row justify-content-between">

<div class = "col-4">
	<h5>სოციალური ქსელი</h5>
	 <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fbeneexclusive&tabs=timeline&width=221&height=84&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="221" height="64" style="border:none;overflow:hidden;margin-bottom:0;height:80px;" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
	<div class ="col-6 d-flex justify-content-around pl-0 pt-1 fblink_icon">
		<div class = "col-3">
			<i class="fab fa-instagram fa-2x text-secondary"></i>
		</div>
		<div class = "col-3">
		  <i class="fab fa-twitter fa-2x text-secondary"></i>
		</div>
		<div class = "col-3">
		  <i class="fab fa-linkedin-square fa-2x text-secondary"></i>
		</div>
	</div>

</div>

<div class = "col-4">
	<h5>ჩვენს შესახებ</h5>
	<ul>
		<li><a href="">ვინ ვართ ჩვენ</a></li>
		<li><a href="">წესები და პირობები</a></li>
		<li><a href="">სხვა სერვისები</a></li>
	</ul>
</div>

<div class = "col-4">
<h5>კონტაქტი</h5>
<ul>
	<li><a href=""><i class="fab fa-facebook-messenger mx-1"></i>ონლაინ დახმარება</a></li>
	<li><a href=""><i class="fas fa-envelope mx-1"></i>bene@bene-exclusive.com</a></li>
	<li><a href=""><i class="fas fa-phone-volume mx-1 pl-1"></i>(+995) 322 052 100</a></li>
</ul>
	</div>
</div>
</div>
</div>

<footer>
  <div class="container footer">
    <div class="row">
    <div class="col-5 col-sm-5 col-lg-4 soc_icon">
      <span class = "copy_span"><span ="copy_icon"><i class="far fa-copyright"></i></span>ყველა უფლება დაცულია.</span>
    </div>
    <div class="col-7 col-sm-7 col-lg-8  mail_block">
      <a class="footer_brand" href="#"><img src="{{ asset('front/assets/images/benebrand.png') }}"></a></a>
    </div>
  </div>
</div>
</footer>



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.0.0/magnific-popup.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.0.0/jquery.magnific-popup.min.js"></script>
<script src="{{ asset('front/assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('front/assets/js/owl.carousel.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('front/assets/js/main.js') }}"></script>
<link rel="stylesheet"  href="{{ asset('front/assets/css/video_popup.css') }}">

@yield('script')

</body>
</html>
