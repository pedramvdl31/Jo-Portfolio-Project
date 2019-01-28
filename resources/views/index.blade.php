@extends($layout)
@section('stylesheets')

@stop
@section('scripts')

@stop

@section('content')
<!--
==================================================
Slider Section Start
================================================== -->
<section id="hero-area" >
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="block wow fadeInUp" data-wow-delay=".3s">
                    
                    <!-- Slider -->
                    <section class="cd-intro">
                        <h1 class="wow fadeInUp animated cd-headline slide" data-wow-delay=".4s" >
                        <span class="my-font">Wendy Morrison</span><br>
                        <span class="cd-words-wrapper">
                            <b class="is-visible">Crime Victim Rights Advocate</b>
                            <b>UBU Today Founder</b>
                            <b>Multiple System Atrophy Survivor</b>
                        </span>
                        </h1>
                        </section> <!-- cd-intro -->
                        <!-- /.slider -->
                        <h2 class="wow fadeInUp animated" data-wow-delay=".6s" >
                            Non-Profit Founder and Advocate in Michigan
                        </h2>
                        <a class="btn-lines dark light wow fadeInUp animated smooth-scroll btn btn-default btn-green" data-wow-delay=".9s" href="#works" data-section="#works" >View More</a>
                        
                    </div>
                </div>
            </div>
        </div>
    </section><!--/#main-slider-->
    <!--
    ==================================================
    Slider Section Start
    ================================================== -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="block wow fadeInLeft" data-wow-delay=".3s" data-wow-duration="500ms">
                        <h2>
                        ABOUT ME
                        </h2>
                        <p>
                            Wendy Jo Morrison, also known as Jo Morris, is the founder of UBU Today. Wendy is an avid Crime Victims Rights advocate. She promotes increased victim rights and empowering victims to use their voices. Her assailant remains in prison today.  
                        </p>
                        <p>
                            Wendy is a passionate advocate for alternative healing modalities specifically related to trauma resolution and disease management. She has been studying and practicing multiple forms of breath-work, somatic experiencing, therapeutic touch, energetic bodywork and meditation. 
                        </p>
                        <p>
                            In 2010, Wendy was diagnosed with Multiple System Atrophy (MSA), a terminal and degenerative brain disease with no known cause, treatment OR remission. Since then, Wendy has been seeking and practicing alternative healing modalities. This has led to defying medical understanding and her MSA diagnosis. Wendy is grateful to be an example that a terminal diagnosis does NOT always equate a death sentence. 
                        </p>
                        <p>
                            A life without hope is not living. 
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="block wow fadeInRight" data-wow-delay=".3s" data-wow-duration="500ms">
                        <img src="/assets/images/wendy/1.jpg" alt="">
                        <p>&nbsp;</p>
                        <img src="/assets/images/wendy/4.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- /#about -->
    <!--
    ==================================================
    Portfolio Section Start
    ================================================== -->
    <section id="works" class="works">
        <div class="container">
            <div class="section-heading">
                <h1 class="title wow fadeInDown" data-wow-delay=".3s">Latest Works</h1>
                <p class="wow fadeInDown" data-wow-delay=".5s">
                    Wendy Jo Morrison is the founder of UBU Today, an avid Crime Victims Rights advocate as well as a passionate advocate for alternative healing modalities.
                </p>
            </div>
            <div class="row text-center">
                @if(isset($all_pages))
                    @foreach($all_pages as $all_ps)
                        <div class="col-sm-4 col-xs-12">
                            <figure class="wow fadeInLeft animated portfolio-item" data-wow-duration="500ms" data-wow-delay="0ms">
                                <div class="img-wrapper">
                                    <img src="/assets/images/pages/single/prm/{{$all_ps['image_src']}}" class="img-responsive" alt="this is a title" >
                                    <div class="overlay">
                                        <div class="buttons">
                                            <a href="/view/{{$all_ps['param_one']}}">Details</a>
                                            <a rel="gallery" class="fancybox" href="/assets/images/pages/single/prm/{{$all_ps['image_src']}}">View Image</a>
                                        </div>
                                    </div>
                                </div>
                                <figcaption>
                                <h4>
                                <a href="/view/{{$all_ps['param_one']}}">
                                    {{$all_ps["title"]}}
                                </a>
                                </h4>
                                <p>
                                    {{$all_ps["description"]}}
                                </p>
                                </figcaption>
                            </figure>
                        </div>
                    @endforeach
                @endif

                <hr>

                <div class="col-md-12 col-sm-12">
                    <video id="my-vid" width="50%" height="440" controls>
                      <source src="/assets/videos/WEBM-UBU-VID.webm" type="video/webm">
                        11 My Sister's Keeper (1080p HD)
                    </video>
                </div>




            </div>
        </div>
    </section> <!-- #works -->
  
    <!--
    ==================================================
    Call To Action Section Start
    ================================================== -->
    <section id="call-to-action">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <h2 class="title wow fadeInDown" data-wow-delay=".3s" data-wow-duration="500ms">Get In Touch</h1>
                        <p class="wow fadeInDown" data-wow-delay=".5s" data-wow-duration="500ms">If you would like to get in touch, feel free to say hello by pressing the contact button.</p>
                        <a  href="javascript:$zopim.livechat.window.show();" class="btn btn-default btn-contact wow fadeInDown" data-wow-delay=".7s" data-wow-duration="500ms">Contact</a>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
@stop