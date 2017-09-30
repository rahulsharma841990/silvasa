
@extends('admin_view.layouts.main')
<!--BEGIN HORIZONTAL MENU-->
@section('admin_view.content')
   
  <div class="page-content"><!--BEGIN TITLE & BREADCRUMB PAGE-->
        <div class="page-title-breadcrumb">
            <div class="page-header pull-left">
                <div class="page-title">Add Slider</div>
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
                                    <form action="#"><input name="title" type="text" placeholder="Enter a title" class="form-control mbm"><div class="md-editor" id="1506531621515"><div class="md-header btn-toolbar"><div class="btn-group"><button class="btn-default btn-sm btn" type="button" title="Bold" tabindex="-1" data-provider="bootstrap-markdown" data-handler="bootstrap-markdown-cmdBold" data-hotkey="Ctrl+B"><span class="glyphicon glyphicon-bold"></span> </button><button class="btn-default btn-sm btn" type="button" title="Italic" tabindex="-1" data-provider="bootstrap-markdown" data-handler="bootstrap-markdown-cmdItalic" data-hotkey="Ctrl+I"><span class="glyphicon glyphicon-italic"></span> </button><button class="btn-default btn-sm btn" type="button" title="Heading" tabindex="-1" data-provider="bootstrap-markdown" data-handler="bootstrap-markdown-cmdHeading" data-hotkey="Ctrl+H"><span class="glyphicon glyphicon-header"></span> </button></div><div class="btn-group"><button class="btn-default btn-sm btn" type="button" title="URL/Link" tabindex="-1" data-provider="bootstrap-markdown" data-handler="bootstrap-markdown-cmdUrl" data-hotkey="Ctrl+L"><span class="glyphicon glyphicon-link"></span> </button><button class="btn-default btn-sm btn" type="button" title="Image" tabindex="-1" data-provider="bootstrap-markdown" data-handler="bootstrap-markdown-cmdImage" data-hotkey="Ctrl+G"><span class="glyphicon glyphicon-picture"></span> </button></div><div class="btn-group"><button class="btn-default btn-sm btn" type="button" title="Unordered List" tabindex="-1" data-provider="bootstrap-markdown" data-handler="bootstrap-markdown-cmdList" data-hotkey="Ctrl+U"><span class="glyphicon glyphicon-list"></span> </button><button class="btn-default btn-sm btn" type="button" title="Ordered List" tabindex="-1" data-provider="bootstrap-markdown" data-handler="bootstrap-markdown-cmdListO" data-hotkey="Ctrl+O"><span class="glyphicon glyphicon-th-list"></span> </button><button class="btn-default btn-sm btn" type="button" title="Code" tabindex="-1" data-provider="bootstrap-markdown" data-handler="bootstrap-markdown-cmdCode" data-hotkey="Ctrl+K"><span class="glyphicon glyphicon-asterisk"></span> </button><button class="btn-default btn-sm btn" type="button" title="Quote" tabindex="-1" data-provider="bootstrap-markdown" data-handler="bootstrap-markdown-cmdQuote" data-hotkey="Ctrl+Q"><span class="glyphicon glyphicon-comment"></span> </button></div><div class="btn-group"><button class="btn-sm btn btn-primary" type="button" title="Preview" tabindex="-1" data-provider="bootstrap-markdown" data-handler="bootstrap-markdown-cmdPreview" data-hotkey="Ctrl+P" data-toggle="button"><span class="glyphicon glyphicon-search"></span> Preview</button></div><div class="md-controls"><a class="md-control md-control-fullscreen" href="#"><span class="glyphicon glyphicon-fullscreen"></span></a></div></div><textarea name="content" data-provide="markdown" rows="10" class="md-input" style="resize: none;"></textarea>          <div class="md-fullscreen-controls">            <a href="#" class="exit-fullscreen" title="Exit fullscreen"><span class="glyphicon glyphicon-fullscreen"></span></a>          </div></div><Br>
																		<input name="title" type="file" placeholder="Enter a title" class="form-control mbm"><br>
																	

                                        <div class="checkbox"><label><div class="icheckbox_square-blue" style="position: relative;"><input name="publish" type="checkbox" class="form-control" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>&nbsp;
                                            Publish</label></div>
                                        <hr>
                                        <button type="submit" class="btn btn-info">Submit</button>
                                    </form>
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
 