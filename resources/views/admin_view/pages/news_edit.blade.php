
@extends('admin_view.layouts.main')
<!--BEGIN HORIZONTAL MENU-->
@section('admin_view.content')
   
  <div class="page-content"><!--BEGIN TITLE & BREADCRUMB PAGE-->
                <div class="page-title-breadcrumb">
                    <div class="page-header pull-left">
                        <div class="page-title">News List</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb hidden-xs hidden">
                        <li><i class="fa fa-home"></i>&nbsp;<a href="index.html">Home</a>&nbsp;&nbsp;<i
                                class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li><a href="#">Tables</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="active">Advanced Tables</li>
                        <li><button type="button" class="btn btn-success">Success</button></li>
                    </ol>
                    <div class="view-code-wrapper pull-right">
                        <div id="setting-view-code" data-on="success" data-off="default" data-on-label="View"
                             data-text-label="Code" data-off-label="Off" class="make-switch switch-small"><input
                                type="checkbox" checked="checked" class="switch"/></div>
                    </div>
                </div>
                <!--END TITLE & BREADCRUMB PAGE-->
                <div class="box-content"><!--BEGIN CONTENT-->
                    <div class="content">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel">
                                  
                                    <div class="panel-heading">
                                        <div class="caption">Edit</div>
                                       
                                    </div>
                                    <div class="panel-body">
                                        <div class="row mbm">
                                            <div class="col-md12">
                                                <div id="viewcode-table-advanced" class="viewcode-example">
                                                    <div class="table-responsive">
                                                        {!!Form::model($model,['method'=>'PATCH','route'=>['news.list.update','id'=>$model->id]])!!}
                                                            @include('admin_view.pages._form')
                                                                {!!Form::submit('Save User',['class'=>"btn btn-success btn-md"])!!}
                                                        {!!Form::close() !!}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--END CONTENT--></div>
            </div>
         
@endsection
    <!--BEGIN FOOTER-->
 