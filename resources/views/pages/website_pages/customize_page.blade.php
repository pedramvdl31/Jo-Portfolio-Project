@extends($layout)
@section('stylesheets')
  <link rel="stylesheet" type="text/css" href="/assets/css/pages.css?ver0.2">
@stop
@section('scripts')

@stop

@section('content')
    <!--=== Breadcrumbs v3 ===-->
<!--     <div class="breadcrumbs-v3 img-v1">
      <div class="container text-center">
        <h1>{{$title}}</h1>
        <h1>&nbsp;</h1>
      </div>
    </div> -->
    <!--=== End Breadcrumbs v3 ===-->
    <style type="text/css">
      #top-bar{
        position: relative !important;
        margin-bottom: 50px !important;
      }
    </style>
    <!--=== Content Part ===-->
    <div class="container content main-cont">
      <div class="row">
        <div class="col-md-12">
          <!-- <h2 class="title-v2">{{$title}}</h2> -->
          {!!$page_content!!}
        </div>

      </div>
    </div><!--/container-->
    <!--=== End Content Part ===-->


@stop