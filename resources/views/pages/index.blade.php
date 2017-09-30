@extends('layout/main')
@section('content')
        
   

        <div class="container sitecontainer bgw">
            <div class="row hidden-xs">
                <div class="col-md-12">
                    <div class="news-ticker clearfix">
                        <div class="news-title">
                            <h3>Trending News</h3>
                        </div>
                        <ul id="ticker">
                            <li><a href="single.html" title="">ThePhone thriller will change the way film [..] - <span>March 01, 2016</span></a></li>
                            <li><a href="single.html" title="">User details can reportedly be [..]  - <span>March 01, 2016</span></a></li>
                            <li><a href="single.html" title="">Outstanding Office Design and Workspace [..]  - <span>March 01, 2016</span></a></li>
                        </ul>
                        <div class="random clearfix">
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Random">
                                <span class="random-article">
                                <i class="fa fa-random"></i>
                            </span>
                            </a>
                        </div>
                        <!-- end random -->
                    </div>
                    <!-- end news-ticker -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->

            <div class="row">
                <div class="col-md-9 col-sm-12">
                    <div id="property-slider" class="clearfix">
                        <div class="flexslider">
                            <ul class="slides">
                                <li>
                                    <div class="psdesc hidden-xs">
                                        <div class="ps-desc">
                                            <h3><a href="javascript:;"> JOIN </a></h3>
                                            <p>The Nation Buillding Association serving DNH </p>
                                           
                                        </div>
                                    </div>
                                    <a href="#"><img src="{{asset('frontend/slider/first-slider.jpg')}}" alt="" class="img-responsive"></a>
                                </li>
                                <li>
                                    <div class="psdesc hidden-xs">
                                        <div class="ps-desc">
                                            <h3><a href="#"> LEAD </a></h3>
                                            <p>Membership has its Privileges</p>
                                           {{--  <span class="type">Web Design</span>
                                            <a href="#" class="status"><i class="fa fa-comment-o"></i> 12</a> --}}
                                        </div>
                                    </div>
                                    <a href="#"><img src="{{asset('frontend/slider/second-slider.jpg')}}" alt="" class="img-responsive"></a>
                                </li>
                                 <li>
                                    <div class="psdesc hidden-xs">
                                        <div class="ps-desc">
                                            <h3><a href="#"> COLLABORATE</a></h3>
                                            <p>Govt. &amp; CSR Support Enhance Impact</p>
                                         
                                        </div>
                                    </div>
                                    <a href="#"><img src="{{asset('frontend/slider/third-slider.jpg')}}" alt="" class="img-responsive"></a>
                                </li>
                                 <li>
                                    <div class="psdesc hidden-xs">
                                        <div class="ps-desc">
                                            <h3><a href="#">  IMPACT </a></h3>
                                            <p>500+ Industries are part of the Assocition</p>
                                           
                                        </div>
                                    </div>
                                    <a href="#"><img src="{{asset('frontend/slider/fourth-slider.jpg')}}" alt="" class="img-responsive"></a>
                                </li>
                                 <li>
                                    <div class="psdesc hidden-xs">
                                        <div class="ps-desc">
                                            <h3><a href="#"> GET INVOLVE</a></h3>
                                            <p>Involve in our nation building activities</p>
                                            
                                        </div>
                                    </div>
                                    <a href="#"><img src="{{asset('frontend/slider/fifth-slider.jpg')}}" alt="" class="img-responsive"></a>
                                </li>
                            </ul>
                            <!-- end slides -->
                        </div>
                        <!-- end flexslider -->
                    </div>
                    <!-- end property-slider -->

                    <div class="widget searchwidget indexslider">
                        <div class="large-widget m30">
                            <div class="post row clearfix">

                                <div class="col-md-5">

                                    <div class="post-media">
                                        <a href="single.html">
                                            <img alt="" src="{{asset('frontend/images/list-1.jpg')}}" class="img-responsive">
                                        </a>
                                    </div>
                                </div>

                                <div class="col-md-7">
                                    <div class="title-area">
                                        
                                        <h3>BLOOD DONATION CAMP</h3>
                                         <h4 class="text-desc">More than 100 blood donation camp organized by SIA. Organizing blood donation camps is the perfect way to cater to the demand of blood. Everyone wants to contribute</h4>
                                        <div class="colorfulcats">
                                            <a href="javascript:;"><span class="label label-primary">Read More</span></a>
                                        </div>
                                       
                                        <!-- end meta -->
                                    </div>
                                    <!-- /.pull-right -->
                                </div>
                            </div>
                            <!-- end post -->
                        </div>
                        <!-- end large-widget -->


                         <div class="large-widget m30">
                            <div class="post row clearfix">

                                <div class="col-md-5">

                                    <div class="post-media">
                                        <a href="single.html">
                                            <img alt="" src="{{asset('frontend/images/list-2.jpg')}}" class="img-responsive">
                                        </a>
                                    </div>
                                </div>

                                <div class="col-md-7">
                                    <div class="title-area">
                                        
                                        <h3>FIRST AID TRAINING</h3>
                                         <h4 class="text-desc">This basic one-day first aid course is the standard training recommended for workplace first aid providers. It’s also good for anybody who wants to be able to help during a medical emergency. Medical emergencies related to ill health or an accident can</h4>
                                        <div class="colorfulcats">
                                            <a href="javascript:;"><span class="label label-primary">Read More</span></a>
                                        </div>
                                       
                                        <!-- end meta -->
                                    </div>
                                    <!-- /.pull-right -->
                                </div>
                            </div>
                            <!-- end post -->
                        </div>
                        <!-- end large-widget -->


                         <div class="large-widget m30">
                            <div class="post row clearfix">

                                <div class="col-md-5">

                                    <div class="post-media">
                                        <a href="single.html">
                                            <img alt="" src="{{asset('frontend/images/list-3.jpg')}}" class="img-responsive">
                                        </a>
                                    </div>
                                </div>

                                <div class="col-md-7">
                                    <div class="title-area">
                                        
                                        <h3>FREE EYE CHECK UP CAMP</h3>
                                         <h4 class="text-desc">Eyes are the windows of the soul. Eyes play a vital role in our day to day lives and are perhaps the most precious gift we have. We are immensely thankful to our donors for their continual support, which helped restore the eye sight of many individuals</h4>
                                        <div class="colorfulcats">
                                            <a href="javascript:;"><span class="label label-primary">Read More</span></a>
                                        </div>
                                       
                                        <!-- end meta -->
                                    </div>
                                    <!-- /.pull-right -->
                                </div>
                            </div>
                            <!-- end post -->
                        </div>
                        <!-- end large-widget -->

                        <div class="large-widget m30">
                            <div class="post row clearfix">

                                <div class="col-md-5">

                                    <div class="post-media">
                                        <a href="single.html">
                                            <img alt="" src="{{asset('frontend/images/list-4.jpg')}}" class="img-responsive">
                                        </a>
                                    </div>
                                </div>

                                <div class="col-md-7">
                                    <div class="title-area">
                                        
                                        <h3>GST TRAINING</h3>
                                         <h4 class="text-desc">SIA in collaboration with UT Govt has organized many training and Interactive Sessions on GST for Industries. The Sessions gave an in-depth about practical aspects of GST. FAQ</h4>
                                        <div class="colorfulcats">
                                            <a href="javascript:;"><span class="label label-primary">Read More</span></a>
                                        </div>
                                       
                                        <!-- end meta -->
                                    </div>
                                    <!-- /.pull-right -->
                                </div>
                            </div>
                            <!-- end post -->
                        </div>
                        <!-- end large-widget -->


                         <div class="large-widget m30">
                            <div class="post row clearfix">

                                <div class="col-md-5">

                                    <div class="post-media">
                                        <a href="single.html">
                                            <img alt="" src="{{asset('frontend/images/list-5.png')}}" class="img-responsive">
                                        </a>
                                    </div>
                                </div>

                                <div class="col-md-7">
                                    <div class="title-area">
                                        
                                        <h3>BETI BACHAO BETI PADHAO</h3>
                                         <h4 class="text-desc">Sir has taken an initiative to promote Beti Bachao-Beti Padhao, We took the social welfare cause through the society and put into the needful girls and needy to promote them. It is a tri-ministerial effort of Ministries</h4>
                                        <div class="colorfulcats">
                                            <a href="javascript:;"><span class="label label-primary">Read More</span></a>
                                        </div>
                                       
                                        <!-- end meta -->
                                    </div>
                                    <!-- /.pull-right -->
                                </div>
                            </div>
                            <!-- end post -->
                        </div>
                        <!-- end large-widget -->

                         

                    
                    </div>
                    <!-- end widget -->

                    <br>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="widget">
                                <div class="ads-widget">
                                    <a href="#"><img src="upload/banner_02.jpg" alt="" class="img-responsive"></a>
                                </div>
                                <!-- end ads-widget -->
                            </div>
                            <!-- end widget -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                </div>
                <!-- end col -->

                <div class="col-md-3 col-sm-12 col-xs-12">
                    <div class="widget">
                        <div class="widget-title">
                            <h4>Social Media</h4>
                            <hr>
                        </div>
                        <!-- end widget-title -->

                        <div class="social-media-widget m30">
                            <ul class="list-social clearfix">
                                <li class="facebook"><a href="#"><i class="fa fa-facebook"></i> <small>12.042</small></a></li>
                                <li class="twitter"><a href="#"><i class="fa fa-twitter"></i> <small>67.221</small></a></li>
                                <li class="googleplus"><a href="#"><i class="fa fa-google-plus"></i> <small>44.213</small></a></li>
                                <li class="rss"><a href="#"><i class="fa fa-rss"></i> <small>22.551</small></a></li>
                                <li class="pinterest"><a href="#"><i class="fa fa-pinterest"></i> <small>33.122</small></a></li>
                                <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i> <small>55.123</small></a></li>
                                <li class="youtube"><a href="#"><i class="fa fa-youtube"></i> <small>44.112</small></a></li>
                                <li class="instagram"><a href="#"><i class="fa fa-instagram"></i> <small>12.441</small></a></li>
                            </ul>
                        </div>
                        <!-- end social -->
                    </div>

                   

                    <div class="widget">
                        <div class="widget-title">
                            <h4>Latest News</h4>
                            <hr>
                        </div>
                        <!-- end widget-title -->

                        <div class="review-posts m30">
                            <div class="post-review">
                                <div class="post-media entry">
                                    <a href="single-review.html" title="">
                                        <img src="upload/review_01.jpg" alt="" class="img-responsive">
                                        <div class="magnifier">
                                            <div class="review-stat">
                                                <div class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                            </div>
                                            <!-- end review-stat -->
                                            <div class="hover-title">
                                                <span>Tech Reviews</span>
                                            </div>
                                            <!-- end title -->
                                        </div>
                                        <!-- end magnifier -->
                                    </a>
                                </div>
                                <!-- end media -->
                                <div class="post-title">
                                    <h3><a href="javascript:;">New DIG Welcomed* Sh. B K Singh took over as DIG on 05.08.2017.</a></h3>
                                </div>
                                <!-- end post-title -->
                            </div>
                            <!-- end post-review -->

                            <hr>

                            <div class="post-review">
                                <div class="post-media entry">
                                    <a href="single-review.html" title="">
                                        <img src="upload/review_02.jpg" alt="" class="img-responsive">
                                        <div class="magnifier">
                                            <div class="review-stat">
                                                <div class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                            </div>
                                            <!-- end review-stat -->
                                            <div class="hover-title">
                                                <span>Tech Reviews</span>
                                            </div>
                                            <!-- end title -->
                                        </div>
                                        <!-- end magnifier -->
                                    </a>
                                </div>
                                <!-- end media -->
                                <div class="post-title">
                                    <h3><a href="javascript:;">Trade Notice No- 06/2017-18 dtd 16.08.17 issued</a></h3>
                                </div>
                                <!-- end post-title -->
                            </div>
                            <!-- end post-review -->

                            <hr>

                            <div class="post-review">
                                <div class="post-media entry">
                                    <a href="single-review.html" title="">
                                        <img src="upload/review_03.jpg" alt="" class="img-responsive">
                                        <div class="magnifier">
                                            <div class="review-stat">
                                                <div class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                            </div>
                                            <!-- end review-stat -->
                                            <div class="hover-title">
                                                <span>Tech Reviews</span>
                                            </div>
                                            <!-- end title -->
                                        </div>
                                        <!-- end magnifier -->
                                    </a>
                                </div>
                                <!-- end media -->
                                <div class="post-title">
                                    <h3><a href="javascript:;">Invitation for “Workshop on NATS Web Portal” by BOAT (WR).</a></h3>
                                </div>
                                <!-- end post-title -->
                            </div>
                            <!-- end post-review -->


                            <hr>

                            <div class="post-review">
                                <div class="post-media entry">
                                    <a href="single-review.html" title="">
                                        <img src="upload/review_03.jpg" alt="" class="img-responsive">
                                        <div class="magnifier">
                                            <div class="review-stat">
                                                <div class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                            </div>
                                            <!-- end review-stat -->
                                            <div class="hover-title">
                                                <span>Tech Reviews</span>
                                            </div>
                                            <!-- end title -->
                                        </div>
                                        <!-- end magnifier -->
                                    </a>
                                </div>
                                <!-- end media -->
                                <div class="post-title">
                                    <h3><a href="javascript:;">5th Open House on Vat Refund</a></h3>
                                </div>
                                <!-- end post-title -->
                            </div>
                            <!-- end post-review -->


                            <hr>

                            <div class="post-review">
                                <div class="post-media entry">
                                    <a href="single-review.html" title="">
                                        <img src="upload/review_03.jpg" alt="" class="img-responsive">
                                        <div class="magnifier">
                                            <div class="review-stat">
                                                <div class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                            </div>
                                            <!-- end review-stat -->
                                            <div class="hover-title">
                                                <span>Tech Reviews</span>
                                            </div>
                                            <!-- end title -->
                                        </div>
                                        <!-- end magnifier -->
                                    </a>
                                </div>
                                <!-- end media -->
                                <div class="post-title">
                                    <h3><a href="javascript:;">Feedback / Queries on Industrial Policy</a></h3>
                                </div>
                                <!-- end post-title -->
                            </div>
                            <!-- end post-review -->
                        </div>
                        <!-- end review-posts -->
                    </div>
                    <!-- end widget -->

                  

                </div>
                <!-- end col -->

            </div>
            <!-- end row -->
        </div>
        <!-- end container -->

       
@endsection('content')