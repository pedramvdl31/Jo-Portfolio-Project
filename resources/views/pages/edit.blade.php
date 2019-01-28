@extends($layout)
@section('stylesheets')
  <link rel="stylesheet" href="/packages/jQuery-File-Upload-master/css/style.css">
  <!-- blueimp Gallery styles -->
  <link rel="stylesheet" href="//blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
  <!-- CSS to style the file input field as button and adjust the Bootstrap progress bars -->
  <link rel="stylesheet" href="/packages/jQuery-File-Upload-master/css/jquery.fileupload.css">
  <link rel="stylesheet" href="/packages/jQuery-File-Upload-master/css/jquery.fileupload-ui.css">
  <!-- CSS adjustments for browsers with JavaScript disabled -->
  <noscript><link rel="stylesheet" href="/packages/jQuery-File-Upload-master/css/jquery.fileupload-noscript.css"></noscript>
  <noscript><link rel="stylesheet" href="/packages/jQuery-File-Upload-master/css/jquery.fileupload-ui-noscript.css"></noscript>
@stop
@section('scripts')
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <script src="/packages/tinymce/js/tinymce/tinymce.min.js"></script>

  <!-- The template to display files available for upload -->
  <script id="template-upload" type="text/x-tmpl">
  {% for (var i=0, file; file=o.files[i]; i++) { %}
      <tr class="template-upload fade">
          <td>
              <span class="preview"></span>
          </td>
          <td>
              <p class="name">{%=file.name%}</p>
              <strong class="error text-danger"></strong>
          </td>
          <td>
              <p class="size">Processing...</p>
              <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0"><div class="progress-bar progress-bar-success" style="width:0%;"></div></div>
          </td>
          <td>
              {% if (!i && !o.options.autoUpload) { %}
                  <button class="btn btn-primary start" disabled>
                      <i class="glyphicon glyphicon-upload"></i>
                      <span>Start</span>
                  </button>
              {% } %}
              {% if (!i) { %}
                  <button class="btn btn-warning cancel">
                      <i class="glyphicon glyphicon-ban-circle"></i>
                      <span>Cancel</span>
                  </button>
              {% } %}
          </td>
      </tr>
  {% } %}
  </script>
  <!-- The template to display files available for download -->
  <script id="template-download" type="text/x-tmpl">
  {% for (var i=0, file; file=o.files[i]; i++) { %}
      <tr class="template-download fade">
          <td>
              <span class="preview">
                  {% if (file.thumbnailUrl) { %}
                      <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" data-gallery><img src="{%=file.thumbnailUrl%}"></a>
                  {% } %}
              </span>
          </td>
          <td>
              <p class="name">
                  {% if (file.url) { %}
                      <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" {%=file.thumbnailUrl?'data-gallery':''%}>{%=file.name%}</a>
                  {% } else { %}
                      <span>{%=file.name%}</span>
                  {% } %}
              </p>
              {% if (file.error) { %}
                  <div><span class="label label-danger">Error</span> {%=file.error%}</div>
              {% } %}
          </td>
          <td>
              <span class="size">{%=o.formatFileSize(file.size)%}</span>
          </td>
          <td>
              {% if (file.deleteUrl) { %}
                  <button class="btn btn-danger delete" data-type="{%=file.deleteType%}" data-url="{%=file.deleteUrl%}"{% if (file.deleteWithCredentials) { %} data-xhr-fields='{"withCredentials":true}'{% } %}>
                      <i class="glyphicon glyphicon-trash"></i>
                      <span>Delete</span>
                  </button>
                  <input type="checkbox" name="delete" value="1" class="toggle">
              {% } else { %}
                  <button class="btn btn-warning cancel">
                      <i class="glyphicon glyphicon-ban-circle"></i>
                      <span>Cancel</span>
                  </button>
              {% } %}
          </td>
      </tr>
  {% } %}
  </script>

  <!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->
  <script src="/packages/jQuery-File-Upload-master/js/vendor/jquery.ui.widget.js"></script>
  <!-- The Templates plugin is included to render the upload/download listings -->
  <script src="//blueimp.github.io/JavaScript-Templates/js/tmpl.min.js"></script>
  <!-- The Load Image plugin is included for the preview images and image resizing functionality -->
  <script src="//blueimp.github.io/JavaScript-Load-Image/js/load-image.all.min.js"></script>
  <!-- The Canvas to Blob plugin is included for image resizing functionality -->
  <script src="//blueimp.github.io/JavaScript-Canvas-to-Blob/js/canvas-to-blob.min.js"></script>
  <!-- Bootstrap JS is not required, but included for the responsive demo navigation -->
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  <!-- blueimp Gallery script -->
  <script src="//blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
  <!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
  <script src="/packages/jQuery-File-Upload-master/js/jquery.iframe-transport.js"></script>
  <!-- The basic File Upload plugin -->
  <script src="/packages/jQuery-File-Upload-master/js/jquery.fileupload.js"></script>
  <!-- The File Upload processing plugin -->
  <script src="/packages/jQuery-File-Upload-master/js/jquery.fileupload-process.js"></script>
  <!-- The File Upload image preview & resize plugin -->
  <script src="/packages/jQuery-File-Upload-master/js/jquery.fileupload-image.js"></script>
  <!-- The File Upload audio preview plugin -->
  <script src="/packages/jQuery-File-Upload-master/js/jquery.fileupload-audio.js"></script>
  <!-- The File Upload video preview plugin -->
  <script src="/packages/jQuery-File-Upload-master/js/jquery.fileupload-video.js"></script>
  <!-- The File Upload validation plugin -->
  <script src="/packages/jQuery-File-Upload-master/js/jquery.fileupload-validate.js"></script>
  <!-- The File Upload user interface plugin -->
  <script src="/packages/jQuery-File-Upload-master/js/jquery.fileupload-ui.js"></script>
  <!-- The main application script -->
  <script type="text/javascript" src="/assets/js/pages/add-edit.js"></script>
  <script src="/assets/js/pages/add.js"></script>
@stop

@section('content')
<div class="jumbotron">
  <h1>Pages Add</h1>
</div>
<div class="panel panel-default">

  <div class="panel-body">
  {!! Form::open(array('action' => 'PagesController@postEdit','id'=>'fileupload', 'class'=>'','role'=>"form")) !!}
    <input type="hidden" name="page_id" value="{!!$page_data['id']!!}">
    <div class="section-wrapper">
    <h3 class="group-title">SEO</h3>
    <hr>
    <div class="form-group {{ $errors->has('title') ? 'has-error' : false }}">
      <label class="control-label" for="title">Title</label>
      @if(isset($page_data['page_title']))
        {!! Form::text('title', $page_data['page_title'], array('class'=>'form-control', 'placeholder'=>'Title')) !!}
      @else
        {!! Form::text('title', null, array('class'=>'form-control', 'placeholder'=>'Title')) !!}
      @endif
        @foreach($errors->get('title') as $message)
            <span class='help-block'>{{ $message }}</span>
        @endforeach
    </div>


    <div class="form-group {{ $errors->has('title') ? 'has-error' : false }}">
      <label class="control-label" for="title">Description</label>
        @if(isset($page_data['page_description']))
          {!! Form::text('description', $page_data['page_description'], array('class'=>'form-control', 'placeholder'=>'Short Description')) !!}
        @else
          {!! Form::text('description', null, array('class'=>'form-control', 'placeholder'=>'Short Description')) !!}
        @endif
          @foreach($errors->get('description') as $message)
              <span class='help-block'>{{ $message }}</span>
          @endforeach
    </div>
    <div class="form-group">
      <label class="control-label" for="">Image Upload</label>
    </div>    
    <div class="panel panel-default">
      
      <div class="panel-heading"><h4>Image</h4></div>
          <!-- The global progress state -->
          <div class="col-lg-12 fileupload-progress fade">
              <!-- The global progress bar -->
              <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                  <div class="progress-bar progress-bar-success" style="width:0%;"></div>
              </div>
              <!-- The extended global progress state -->
              <div class="progress-extended">&nbsp;</div>
          </div>
      <div id="step1_panel" class="panel-body">
        <!-- The table listing the files available for upload/download -->
            <table id="displayImagesTable" role="presentation" class="table table-striped"><tbody class="files">
              
              @if(isset($page_data['page_image']))
                <tr class="template-upload fade in">
                    <td>
                        <span class="preview"><img width="80px" src="/assets/images/pages/single/prm/{!!$page_data['page_image']!!}"></span>
                    </td>
                </tr>
              @endif



            </tbody></table>
      </div>
      <div class="panel-footer clearfix">
        <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
            <div class="fileupload-buttonbar">
                <div class="col-lg-7">
                    <!-- The fileinput-button span is used to style the file input field as button -->
                    <span class="btn btn-success fileinput-button">
                        <i class="glyphicon glyphicon-plus"></i>
                        <span>Add Image</span>
                        <input type="file" name="files">
                    </span>
                    <!-- The global file processing state -->
                    <span class="fileupload-process"></span>
                </div>
            </div>
        </div>
    </div>  
    <div id="imageDiv" class="hide">
      @if(isset($page_data['page_image']))
        <input class="images" name="files[0][path]" type="hidden" value="{!!$page_data['page_image']!!}">
      @endif
    </div>

    <div class="third_section" id="keywordss">
      <div class="blackout wrapper">
        <label class="control-label" for="description">Keywords</label>
        <i type="button" class="glyphicon glyphicon-info-sign" data-toggle="tooltip"
         data-placement="top" title="Keywords ..."></i>
        <div class="input-group">
          <span class="input-group-addon">Enter a keywords</span>
          <input type="text" class="form-control keyword-text">
          <span class="input-group-addon add-keyword">Add</span>
        </div>
        <div class="alert alert-danger hide" id="keyword-dup" role="alert">Duplicate data</div>
        <div class="panel panel-default">
          <div class="panel-body" id="keyword-group-wrapper">
            @if(isset($page_data['page_keywords']))
              @foreach($page_data['page_keywords'] as $keyskey => $keysval)
                  <span class="label label-success label-keyword new-zip {!! $keysval !!}"> 
                    <span class="this-keyword-t">{!! $keysval !!}</span> 
                    <i class="glyphicon glyphicon-trash delete-keyword"></i>
                  </span>
                  <input class="{!! $keysval !!}" type="hidden" name="keywords[{!! $keyskey !!}]" value="{!! $keysval !!}">
              @endforeach
            @endif
          </div>
        </div>
      </div>
    </div>
    </div>

  <!-- ##### -->
  <div class="section-wrapper">
    <h3 class="group-title">Contents</h3>
    <hr>
     {!! Form::textarea('content', $page_data['page_section_content'], ['class' => 'des field form-control','size' => '30x8', 'placeholder'=>'Description']) !!}

  </div>
  </div>
  <div class="panel-footer clearfix">
    <a href="{!! route('pages_index') !!} " class="btn btn-info">Back</a>
    <button class="btn btn-primary pull-right">Save</button>
  </div>
    <input type="hidden" name="page_id" value="{{$page_data['id']}}">
    {!! Form::close() !!}
</div>
@stop