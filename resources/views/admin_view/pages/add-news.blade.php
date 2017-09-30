
@extends('admin_view.layouts.main')
<!--BEGIN HORIZONTAL MENU-->
@section('admin_view.content')
   
  <div class="page-content"><!--BEGIN TITLE & BREADCRUMB PAGE-->
        <div class="page-title-breadcrumb">
            <div class="page-header pull-left">
                <div class="page-title">Add News</div>
            </div>
            <ol class="breadcrumb page-breadcrumb hidden-xs hidden">
                <li><i class="fa fa-home"></i>&nbsp;<a href="index.html">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                <li><a href="#">Forms</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                <li class="active">Form Editor</li>
            </ol>
          
        </div>
        <!--END TITLE & BREADCRUMB PAGE-->
        <div class="box-content"><!--BEGIN CONTENT-->
            <div class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <div class="caption">Markdown</div>
                            </div>
                            <div class="panel-body">
                                <div id="viewcode-editor-markdown" class="viewcode-example">

                                  {!!Form::open(['url'=>'news/submit'])!!}
                                        {!!Form::text('title',Null,['class'=>'form-control mbm','placeholder'=>'Enter a title']) !!}
                                        @if($errors->has('title'))
                                            {{$errors->first('title')}}
                                        @endif
                                       
                                        <!--editor-->
                                        <div class="md-editor" id="1506531621515">

                                        <div class="md-header btn-toolbar"><div class="btn-group"><button class="btn-default btn-sm btn" type="button" title="Bold" tabindex="-1" data-provider="bootstrap-markdown" data-handler="bootstrap-markdown-cmdBold" data-hotkey="Ctrl+B"><span class="glyphicon glyphicon-bold"></span> </button><button class="btn-default btn-sm btn" type="button" title="Italic" tabindex="-1" data-provider="bootstrap-markdown" data-handler="bootstrap-markdown-cmdItalic" data-hotkey="Ctrl+I"><span class="glyphicon glyphicon-italic"></span> </button><button class="btn-default btn-sm btn" type="button" title="Heading" tabindex="-1" data-provider="bootstrap-markdown" data-handler="bootstrap-markdown-cmdHeading" data-hotkey="Ctrl+H"><span class="glyphicon glyphicon-header"></span> </button></div><div class="btn-group"><button class="btn-default btn-sm btn" type="button" title="URL/Link" tabindex="-1" data-provider="bootstrap-markdown" data-handler="bootstrap-markdown-cmdUrl" data-hotkey="Ctrl+L"><span class="glyphicon glyphicon-link"></span> </button><button class="btn-default btn-sm btn" type="button" title="Image" tabindex="-1" data-provider="bootstrap-markdown" data-handler="bootstrap-markdown-cmdImage" data-hotkey="Ctrl+G"><span class="glyphicon glyphicon-picture"></span> </button></div><div class="btn-group"><button class="btn-default btn-sm btn" type="button" title="Unordered List" tabindex="-1" data-provider="bootstrap-markdown" data-handler="bootstrap-markdown-cmdList" data-hotkey="Ctrl+U"><span class="glyphicon glyphicon-list"></span> </button><button class="btn-default btn-sm btn" type="button" title="Ordered List" tabindex="-1" data-provider="bootstrap-markdown" data-handler="bootstrap-markdown-cmdListO" data-hotkey="Ctrl+O"><span class="glyphicon glyphicon-th-list"></span> </button><button class="btn-default btn-sm btn" type="button" title="Code" tabindex="-1" data-provider="bootstrap-markdown" data-handler="bootstrap-markdown-cmdCode" data-hotkey="Ctrl+K"><span class="glyphicon glyphicon-asterisk"></span> </button><button class="btn-default btn-sm btn" type="button" title="Quote" tabindex="-1" data-provider="bootstrap-markdown" data-handler="bootstrap-markdown-cmdQuote" data-hotkey="Ctrl+Q"><span class="glyphicon glyphicon-comment"></span> </button></div><div class="btn-group"><button class="btn-sm btn btn-primary" type="button" title="Preview" tabindex="-1" data-provider="bootstrap-markdown" data-handler="bootstrap-markdown-cmdPreview" data-hotkey="Ctrl+P" data-toggle="button"><span class="glyphicon glyphicon-search"></span> Preview</button></div><div class="md-controls"><a class="md-control md-control-fullscreen" href="#"><span class="glyphicon glyphicon-fullscreen"></span></a></div>
                                        </div>
            
                                     
                                        {!!Form::textarea('desc',Null,['class'=>'form-control mbm']) !!}
                                        @if($errors->has('desc'))
                                            {{$errors->first('desc')}}
                                        @endif
                                        </div><br>
                                        <!--end of editor-->
                                        {!!Form::file('img') !!}
                                        @if($errors->has('img'))
                                            {{$errors->first('img',['class'=>'form-control mbm'])}}
                                        @endif

                                         <hr>
                                        <button type="submit" class="btn btn-info">Submit</button>
                                        

                                   {!!Form::close()!!}

                                <a href="javascript:;" class="btn-view-code" style="display: none;"><i class="fa fa-code"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
             
                
            </div>
            <!--END CONTENT-->
            </div>
    </div>
         
@endsection
    <!--BEGIN FOOTER-->
 