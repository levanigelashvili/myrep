<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}"><head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <title>@yield('title')</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport">


        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">






        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subse0 t=all" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admin/assets/global/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admin/assets/global/plugins/simple-line-icons/simple-line-icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admin/assets/global/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admin/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <link href="{{ asset('admin/assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="{{ asset('admin/assets/global/css/components.min.css') }}" rel="stylesheet" id="style_components" type="text/css" />
        <link href="{{ asset('admin/assets/global/css/plugins.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="{{ asset('admin/assets/layouts/layout/css/layout.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admin/assets/layouts/layout/css/themes/darkblue.min.css') }}" rel="stylesheet" type="text/css" id="style_color" />
        <link href="{{ asset('admin/assets/layouts/layout/css/custom.min.css') }}" rel="stylesheet" type="text/css" />
        @yield('style')
    </head>

    <body class="page-header-fixed page-content-white">

        <script src="{{asset("/vendor/unisharp/laravel-ckeditor/ckeditor.js")}}"></script>


        <div class="page-wrapper">
            <!-- ჰედერის დასაწყისი -->
            <div class="page-header navbar navbar-fixed-top">

                <div class="page-header-inner ">
                    <!-- ლოგო -->


                    <div class="page-logo">
                        <a href="{{ route('dashboard') }}" style="color:white"><h4>Scholarshipfund</h4></a>
                        <div class="menu-toggler sidebar-toggler">
                            <span></span>
                        </div>
                    </div>


                    <div class="top-menu">
                        <ul class="nav navbar-nav pull-right">
                            <li class="dropdown dropdown-user">
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                    <img alt="" class="img-circle" src="{{ asset("img/avatar3_small.jpg") }}">
                                    <span class="username username-hide-on-mobile">  {{ Auth::user()->name }} </span>
                                    <i class=" "></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-default">
                                    <li class="divider"> </li>
                                    <li>
                                        <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                            <i class="icon-key"></i>
                                            გასვლა
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
            <!-- ჰედერის დასასრული -->



            <div class="clearfix"> </div>
            <div class="page-container">



                <!-- გვერდითი პანელის დასაწყისი -->

                <div class="page-sidebar-wrapper">
                    <div class="page-sidebar navbar-collapse collapse">
                        <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">



                            <li class="heading">
                                <h3 class="uppercase">გვერდები</h3>
                            </li>

                            <li class="nav-item  ">
                                <a href="{{ route('dashboard') }}" class="nav-link ">
                                    <i class="icon-home"></i>
                                    <span class="title">დეშბორდი</span>
                                </a>
                            </li>

                            <li class="nav-item  ">
                                <a href="{{ route('admin.mainpage.index') }}" class="nav-link ">
                                    <i class="icon-home"></i>
                                    <span class="title">მთავარი გვერდი</span>
                                </a>
                            </li>

                            <li class="nav-item  ">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <i class="fa fa-money"></i>
                                    <span class="title">ტრანზაქციები</span>
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item  ">
                                        <a href="{{ route('admin.orders.index') }}" class="nav-link ">
                                            <i class="fa fa-money"></i>
                                            <span class="title">ტრანზაქციები</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="{{ route('admin.cards.index') }}" class="nav-link ">
                                            <i class="fa fa-credit-card"></i>
                                            <span class="title">ბარათები</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item  ">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <i class="fa fa-newspaper-o"></i>
                                    <span class="title">სიახლეები</span>
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item  ">
                                        <a href="{{ route('admin.news.index') }}" class="nav-link ">
                                            <i class="fa fa-list"></i>
                                            <span class="title">სრულად</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="{{ route('admin.news.create') }}" class="nav-link ">
                                            <i class="fa fa-plus"></i>
                                            <span class="title">დამატება</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item  ">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <i class="fa fa-hand-paper-o"></i>
                                    <span class="title">კონტრიბუტორები</span>
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item  ">
                                        <a href="{{ route('admin.contributors.index') }}" class="nav-link ">
                                            <i class="fa fa-list"></i>
                                            <span class="title">სრულად</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="{{ route('admin.contributors.create') }}" class="nav-link ">
                                            <i class="fa fa-plus"></i>
                                            <span class="title">დამატება</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item  ">
                                    <a href="javascript:;" class="nav-link nav-toggle">
                                        <i class="fa fa-graduation-cap"></i>
                                        <span class="title">სტუდენტები</span>
                                        <span class="arrow"></span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li class="nav-item  ">
                                            <a href="{{ route('admin.students.index') }}" class="nav-link ">
                                                <i class="fa fa-list"></i>
                                                <span class="title">სრულად</span>
                                            </a>
                                        </li>
                                        <li class="nav-item  ">
                                            <a href="{{ route('admin.students.create') }}" class="nav-link ">
                                                <i class="fa fa-plus"></i>
                                                <span class="title">დამატება</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                            <li class="nav-item  ">
                                    <a href="{{ route('admin.scholarship.index') }}" class="nav-link nav-toggle">
                                        <i class="fa fa-university "></i>
                                        <span class="title">სტიპენდიები</span>
                                    </a>
                                </li>


                                <li class="nav-item  ">
                                    <a href="javascript:;" class="nav-link nav-toggle">
                                        <i class="fa fa-image"></i>
                                        <span class="title">სურათების გალერეა</span>
                                        <span class="arrow"></span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li class="nav-item  ">
                                            <a href="{{ route('admin.gallery.index') }}" class="nav-link ">
                                                <i class="fa fa-list"></i>
                                                <span class="title">სრულად</span>
                                            </a>
                                        </li>
                                        <li class="nav-item  ">
                                            <a href="{{ route('admin.gallery.create') }}" class="nav-link ">
                                                <i class="fa fa-plus"></i>
                                                <span class="title">დამატება</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>


                                <li class="nav-item  ">
                                    <a href="javascript:;" class="nav-link nav-toggle">
                                        <i class="fa fa-youtube-square"></i>
                                        <span class="title">ვიდეოების გალერეა</span>
                                        <span class="arrow"></span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li class="nav-item  ">
                                            <a href="{{ route('admin.videos.index') }}" class="nav-link ">
                                                <i class="fa fa-list"></i>
                                                <span class="title">სრულად</span>
                                            </a>
                                        </li>
                                        <li class="nav-item  ">
                                            <a href="{{ route('admin.videos.create') }}" class="nav-link ">
                                                <i class="fa fa-plus"></i>
                                                <span class="title">დამატება</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                            <li class="nav-item  ">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <i class="fa fa-file-text"></i>
                                    <span class="title">ჩვენ შესახებ</span>
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item  ">
                                        <a href="{{ route('admin.about.index') }}" class="nav-link ">
                                            <i class="fa fa-list"></i>
                                            <span class="title">სრულად</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="{{ route('admin.about.create') }}" class="nav-link ">
                                            <i class="fa fa-plus"></i>
                                            <span class="title">დამატება</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item  ">
                                <a href="/{{ config('translation-manager.route.prefix') }}" class="nav-link nav-toggle">
                                    <i class="fa fa-globe"></i>
                                    <span class="title">სათაურები</span>
                                </a>
                            </li>


                        </ul>
                    </div>
                </div>
                <!-- გვერდითი პანელის დასასრული -->






                <!-- ვებგვერდის ტანი -->
                <div class="page-content-wrapper">
                    <div class="page-content" style="min-height: 556px;">

                        <div class="page-bar">
                            <ul class="page-breadcrumb">
                                <li>
                                    <a href="#">მთავარი</a>
                                    <i class="fa fa-circle"></i>
                                </li>
                                <li>
                                    <span>@yield('title')</span>
                                </li>
                            </ul>

                        </div>


                        @yield('main')


                        </div>



                    <div class="clearfix"></div>
                </div>
            </div>

            <!-- ვებგვერდის ტანი -->




            <!-- ვებგვერდის ბოლო დასაწყისი -->

            <div class="page-footer">
                <div class="page-footer-inner"> 2019 © Geolab</div>
            </div>

            <!-- ვებგვერდის ბოლოს დასასრული -->

        </div>

    </div>



    <script src="{{ asset('admin/assets/global/plugins/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/global/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/global/plugins/js.cookie.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/global/plugins/jquery.blockui.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}" type="text/javascript"></script>
    <!-- END CORE PLUGINS -->
    <!-- BEGIN THEME GLOBAL SCRIPTS -->

    <script src="{{ asset('admin/assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}" type="text/javascript"></script>

    <script src="{{ asset('admin/assets/global/scripts/app.min.js')}}" type="text/javascript"></script>

    <script src="{{ asset('admin/assets/pages/scripts/components-date-time-pickers.min.js')}}" type="text/javascript"></script>
    <!-- END THEME GLOBAL SCRIPTS -->
    <!-- BEGIN THEME LAYOUT SCRIPTS -->
    <script src="{{ asset('admin/assets/layouts/layout/scripts/layout.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/layouts/layout/scripts/demo.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/layouts/global/scripts/quick-sidebar.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/layouts/global/scripts/quick-nav.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('admin/js/admin/Modal.js')}}"></script>
    @yield('script')





</body>
</html>
