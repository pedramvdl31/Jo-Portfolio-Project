<!DOCTYPE html>
<html class="no-js">
    <head>
        <!-- Basic Page Needs
        ================================================== -->
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="apple-touch-icon" sizes="57x57" href="/assets/favicons/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="/assets/favicons/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/assets/favicons/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="/assets/favicons/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/assets/favicons/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="/assets/favicons/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="/assets/favicons/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="/assets/favicons/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="/assets/favicons/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="/assets/favicons/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/assets/favicons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="/assets/favicons/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/assets/favicons/favicon-16x16.png">
        <title>Wendy Morrison</title>
        <meta name="description" content="Wendy Morrison, NON-PROFIT FOUNDER AND ADVOCATE IN MICHIGAN">
        <meta name="keywords" content="Wendy Morrison, ubutoday">
        <meta name="author" content="webprinciples">
        <meta property="og:title" content="Wendy Morrison" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="http://wendyjomorrison.com" />
        <meta property="og:image" content="http://wendyjomorrison.com/assets/images/icons/icon4.jpg" />
        <!-- Mobile Specific Metas
        ================================================== -->
        <meta name="format-detection" content="telephone=no">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Template CSS Files
        ================================================== -->
        <!-- Twitter Bootstrs CSS -->
        <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="/assets/css/ionicons.min.css">
        <link rel="stylesheet" href="/assets/css/animate.css">
        <link rel="stylesheet" href="/assets/css/slider.css">
        <link rel="stylesheet" href="/assets/css/owl.carousel.css">
        <link rel="stylesheet" href="/assets/css/owl.theme.css">
        <link rel="stylesheet" href="/assets/css/jquery.fancybox.css">
        <link href="/packages/bootstrap-submenu/dist/css/bootstrap-submenu.css" rel="stylesheet">
        <link rel="stylesheet" href="/assets/css/main.css?ver1.5">
        <link rel="stylesheet" href="/assets/css/responsive.css?ver1.0">
        <link rel="stylesheet" href="/assets/css/overwrites.css?ver1.1">
        @yield('stylesheets')
        
        <!-- Template Javascript Files
        ================================================== -->
        <!-- modernizr js -->
        <script src="/assets/js/vendor/modernizr-2.6.2.min.js"></script>
        <!-- jquery -->
        <script type="text/javascript" src="/assets/js/jquery.js"></script>
        <script type="text/javascript" src="/assets/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="/packages/bootstrap-submenu/dist/js/bootstrap-submenu.min.js"></script>
        <script src="/assets/js/owl.carousel.min.js"></script>
        <script src="/assets/js/wow.min.js"></script>
        <script src="/assets/js/slider.js?ver1.0"></script>
        <script src="/assets/js/jquery.fancybox.js"></script>
        <script src="/assets/js/main.js?ver1.3"></script>
        @yield('scripts')

        <!--Start of Zendesk Chat Script-->
        <script type="text/javascript">
        window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
        d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
        _.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
        $.src="https://v2.zopim.com/?3guFuLi0Br6htBSprOZ8jXpwZs1FmEa0";z.t=+new Date;$.
        type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
        </script>
        <!--End of Zendesk Chat Script-->
        <!-- like buttons Go to www.addthis.com/dashboard to customize your tools --> <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-58b952021eec664c"></script> 
    </head>
    <body>
        <!--
        ==================================================
        Header Section Start
        ================================================== -->
        <header id="top-bar" class="navbar-fixed-top animated-header" style="">
            <div class="container">
                <div class="navbar-header">
                    <!-- responsive nav button -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <!-- /responsive nav button -->
                    
                    <!-- logo -->
                    <div class="navbar-brand">
                        <a href="/" style="margin-top: -10px;">
                            <img width="75px" src="/assets/images/icons/logont.png" alt="">
                        </a>
                    </div>
                    <!-- /logo -->
                </div>
                <!-- main menu -->
                <nav class="collapse navbar-collapse navbar-right" role="navigation">
                    <div class="main-menu">
                        <ul class="nav navbar-nav navbar-right">
                            
                            <!-- End Blog -->
                            @foreach($menus as $menukey => $menuvalue)

                                @if($menuvalue['type']==2)
                                    <li class="dropdown" style="cursor: pointer;">
                                        <a tabindex="0" data-toggle="dropdown" data-submenu="" aria-expanded="true">
                                          {!!$menuvalue['title']!!}
                                        </a>
                                        <ul class="dropdown-menu">
                                            @foreach($menus as $menukeys => $menuvalues)
                                                @if($menuvalues['type']==3 && $menuvalues['parent_id']==$menuvalue['id'])
                                                    <li class="dropdown-submenu">
                                                        <a tabindex="0">{!!$menuvalues['title']!!}</a>
                                                        <ul class="dropdown-menu ">
                                                            @foreach($menus as $menukeyt => $menuvaluet)
                                                                @if($menuvaluet['type']==1 && $menuvaluet['parent_id']==$menuvalues['id'])
                                                                    
                                                                    @if($menuvaluet['out_link']==0)
                                                                        <li class="d2b"><a href="/view/{!!$menuvaluet['param_one']!!}/{!!$menuvaluet['param_two']!!}" tabindex="0">{!!$menuvaluet['title']!!}</a></li>
                                                                    @elseif($menuvaluet['out_link']==1)
                                                                        <li class="d2b"><a href="{!!$menuvaluet['param_two']!!}" tabindex="0">{!!$menuvaluet['title']!!}</a></li>
                                                                    @endif

                                                                @endif
                                                            @endforeach
                                                        </ul>
                                                    </li>
                                                @elseif($menuvalues['type']==1 && $menuvalues['parent_id']==$menuvalue['id'])
                                                    @if($menuvalues['out_link']==0)
                                                        <li><a tabindex="0" href="/view/{!!$menuvalues['param_one']!!}/{!!$menuvalues['param_two']!!}">{!!$menuvalues['title']!!}</a></li>
                                                    @elseif($menuvalues['out_link']==1)
                                                        <li><a tabindex="0" href="{!!$menuvalues['param_two']!!}">{!!$menuvalues['title']!!}</a></li>
                                                    @endif
                                                @endif
                                            @endforeach
                                        </ul>
                                    </li>
                                @elseif($menuvalue['type']==1 && $menuvalue['parent_id']==0 || $menuvalue['parent_id']==null)
                                    <li>
                                        @if($menuvalue['out_link']==0)
                                            <a href="/view/{!!$menuvalue['param_two']!!}">{!!$menuvalue['title']!!}</a>
                                        @elseif($menuvalue['out_link']==1)
                                            <a href="{!!$menuvalue['param_two']!!}">{!!$menuvalue['title']!!}</a>
                                        @endif
                                    </li>
                                @endif

                            @endforeach

                        </ul>
                    </div>
                </nav>
                <!-- /main nav -->
            </div>
        </header>

        @yield('content')

            <!--
            ==================================================
            Footer Section Start
            ================================================== -->
            <footer id="footer">
                <div class="container">
                    <div class="col-md-8">
                        <p class="copyright">Copyright: <span>2017</span> . Design and Developed by <a href="http://www.webprinciples.com/">Webprinciples</a></p>
                    </div>
                    <div class="col-md-4">
                        <!-- Social Media -->
                        <ul class="social">
                            <li>
                                <a href="https://www.facebook.com/ubutoday/" class="Facebook">
                                    <i class="ion-social-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://twitter.com/ubutoday" class="Twitter">
                                    <i class="ion-social-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/in/wendy-morrison-aka-jo-morris-17956211a" class="Linkedin">
                                    <i class="ion-social-linkedin"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://plus.google.com/+UBUTODAYCocoonMoiUS/posts" class="Google Plus">
                                    <i class="ion-social-googleplus"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </footer> <!-- /#footer -->
                
        </body>
    </html>