@extends('layout/main')
@section('content')
        
   

  
<div id="map"></div>

        <div class="container sitecontainer bgw">
            <div class="row">
                <div class="col-md-12 m22 single-post">
                    <div class="widget">
                        <div class="large-widget m30">
                            <div class="post-desc">

                                <div class="row">
                                    <div class="col-md-7 col-sm-12">
                                        <div class="row">
                                            <div class="col-md-12 col-xs-12">
                                                <div class="widget">
                                                    <div class="widget-title">
                                                        <h4>Contact Form</h4>
                                                        <hr>
                                                    </div>
                                                    <!-- end widget-title -->

                                                    <div class="commentform">
                                                        <form class="row">
                                                          <div class="col-md-4 col-sm-12">
                                                                <label>Name <span class="required">*</span></label>
                                                                <input type="text" class="form-control" placeholder="">
                                                            </div>
                                                            <div class="col-md-4 col-sm-12">
                                                                <label>Email <span class="required">*</span></label>
                                                                <input type="email" class="form-control" placeholder="">
                                                            </div>

                                                            <div class="col-md-4 col-sm-12">
                                                                <label>Subject</label>
                                                                <input type="text" class="form-control" placeholder="">
                                                            </div>
                                                            <div class="col-md-12 col-sm-12">
                                                                <label>Your Message <span class="required">*</span></label>
                                                                <textarea class="form-control" placeholder=""></textarea>
                                                            </div>
                                                            <div class="col-md-12 col-sm-12">
                                                                <input type="submit" value="Send Message" class="btn btn-primary" />
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <!-- end newsletter -->
                                                </div>
                                                <!-- end form-container -->
                                            </div>
                                            <!-- end col -->
                                        </div>
                                        <!-- end row -->
                                    </div>
                                    <!-- end col -->

                                    <div class="col-md-3 col-sm-12">
                                        <div class="widget">
                                            <div class="widget-title">
                                                <h4>Contact Details</h4>
                                                <hr>
                                            </div>
                                            <!-- end widget-title -->

                                            <div class="links-widget m30">
                                                <p>Etiam sit amet orci eget eros faucibus tincidunt. Pellentesque commodo eros a enim. Etiam rhoncus. Nulla facilisi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras sagittis. </p>

                                                <p>Vestibulum turpis sem, aliquet eget, lobortis pellentesque.</p>
                                            </div>
                                            <!-- end links -->
                                        </div>
                                        <!-- end widget -->

                                    </div>

                                    <div class="col-md-2 col-sm-12">
                                        <div class="widget">
                                            <div class="widget-title">
                                                <h4>Social Profiles</h4>
                                                <hr>
                                            </div>
                                            <!-- end widget-title -->

                                            <div class="links-widget darkcolor m30">
                                                <ul class="sociallinks">
                                                    <li><a href="#"><i class="fa fa-facebook"></i> Facebook</a></li>
                                                    <li><a href="#"><i class="fa fa-twitter"></i> Twitter</a></li>
                                                    <li><a href="#"><i class="fa fa-pinterest"></i> Pinterest</a></li>
                                                    <li><a href="#"><i class="fa fa-google-plus"></i> Google Plus</a></li>
                                                    <li><a href="#"><i class="fa fa-vimeo"></i> Vimeo</a></li>
                                                    <li><a href="#"><i class="fa fa-youtube"></i> YouTube</a></li>
                                                    <li><a href="#"><i class="fa fa-maxcdn"></i> MaxCDN</a></li>
                                                </ul>
                                            </div>
                                            <!-- end links -->
                                        </div>
                                        <!-- end widget -->
                                    </div>

                                </div>
                                <!-- end row -->

                            </div>
                            <!-- end post-desc -->
                        </div>
                        <!-- end large-widget -->
                    </div>
                    <!-- end widget -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
       
@endsection('content')