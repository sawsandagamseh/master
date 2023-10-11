@extends('layout.master-home')

{{-- @include('layout.master') --}}
@section('content')
    

        <!-- STAR HEADER SEARCH -->
        <section id="hero-area" class="parallax-searchs home15 overlay thome-6 thome-1" data-stellar-background-ratio="0.5">
            <div class="hero-main">
                <div class="container" data-aos="zoom-in">
                    <div class="row">
                        <div class="col-12">
                            <div class="hero-inner">
                                <!-- Welcome Text -->
                                <div class="welcome-text">
                                    <h1 class="h1">Find Your Dream
                                    <br class="d-md-none">
                                    <span class="typed border-bottom"></span>
                                </h1>
                                    <p class="mt-4">We Have Over Million Properties For You.</p>
                                </div>
                                <!--/ End Welcome Text -->
                                <!-- Search Form -->
                                <div class="col-12">
                                    <div class="banner-search-wrap">
                                        <ul class="nav nav-tabs rld-banner-tab">
                                            <li class="nav-item">
                                                <!-- <a class="nav-link active" data-toggle="tab" href="#tabs_1">For Sale</a> -->
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#tabs_2">For Rent</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane fade show active" id="tabs_1">
                                                <div class="rld-main-search">
                                                    <div class="row">
                                                        <div class="rld-single-input">
                                                            <input type="text" placeholder="Enter Keyword...">
                                                        </div>
                                                        <div class="rld-single-select ml-22" >
                                                            <select class="select single-select">
                                                                <option value="1">Property Type</option>
                                                                <option value="2">Family House</option>
                                                                <option value="3">Apartment</option>
                                                                <option value="3">Condo</option>
                                                            </select>
                                                        </div>
                                                        <div class="rld-single-select">
                                                            <select class="select single-select mr-0">
                                                                <option value="1">Location</option>
                                                                <option value="2">Los Angeles</option>
                                                                <option value="3">Chicago</option>
                                                                <option value="3">Philadelphia</option>
                                                                <option value="3">San Francisco</option>
                                                                <option value="3">Miami</option>
                                                                <option value="3">Houston</option>
                                                            </select>
                                                        </div>
                                                        <div class="dropdown-filter"><span>Advanced Search</span></div>
                                                        <div class="col-xl-2 col-lg-2 col-md-4 pl-0">
                                                            <a class="btn btn-yellow" href="#">Search Now</a>
                                                        </div>
                                                        <div class="explore__form-checkbox-list full-filter">
                                                            <div class="row">
                                                              
                                                                <div class="col-lg-4 col-md-6 py-1 pr-30 pl-0 ">
                                                                    <!-- Form Bedrooms -->
                                                                    <div class="form-group beds">
                                                                        <div class="nice-select form-control wide" tabindex="0"><span class="current"><i class="fa fa-bed" aria-hidden="true"></i> Bedrooms</span>
                                                                            <ul class="list">
                                                                                <li data-value="1" class="option selected">1</li>
                                                                                <li data-value="2" class="option">2</li>
                                                                                <li data-value="3" class="option">3</li>
                                                                                <li data-value="3" class="option">4</li>
                                                                                <li data-value="3" class="option">5</li>
                                                                                <li data-value="3" class="option">6</li>
                                                                                <li data-value="3" class="option">7</li>
                                                                                <li data-value="3" class="option">8</li>
                                                                                <li data-value="3" class="option">9</li>
                                                                                <li data-value="3" class="option">10</li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <!--/ End Form Bedrooms -->
                                                                </div>
                                                                <div class="col-lg-4 col-md-6 py-1 pr-30 pl-0">
                                                                    <!-- Form Bathrooms -->
                                                                    <div class="form-group bath">
                                                                        <div class="nice-select form-control wide" tabindex="0"><span class="current"><i class="fa fa-bath" aria-hidden="true"></i> Bathrooms</span>
                                                                            <ul class="list">
                                                                                <li data-value="1" class="option selected">1</li>
                                                                                <li data-value="2" class="option">2</li>
                                                                                <li data-value="3" class="option">3</li>
                                                                                <li data-value="3" class="option">4</li>
                                                                                <li data-value="3" class="option">5</li>
                                                                                <li data-value="3" class="option">6</li>
                                                                                <li data-value="3" class="option">7</li>
                                                                                <li data-value="3" class="option">8</li>
                                                                                <li data-value="3" class="option">9</li>
                                                                                <li data-value="3" class="option">10</li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <!--/ End Form Bathrooms -->
                                                                </div>
                                                                <div class="col-lg-5 col-md-12 col-sm-12 py-1 pr-30 mr-5 sld d-none d-lg-none d-xl-flex">
                                                                    <!-- Price Fields -->
                                                                    <div class="main-search-field-2">
                                                                        <!-- Area Range -->
                                                                        <div class="range-slider">
                                                                            <label>Area Size</label>
                                                                            <div id="area-range" data-min="0" data-max="1300" data-unit="sq ft"></div>
                                                                            <div class="clearfix"></div>
                                                                        </div>
                                                                        <br>
                                                                        <!-- Price Range -->
                                                                        <div class="range-slider">
                                                                            <label>Price Range</label>
                                                                            <div id="price-range" data-min="0" data-max="600000" data-unit="$"></div>
                                                                            <div class="clearfix"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3 col-md-6 col-sm-12 py-1 pr-30 d-none d-lg-none d-xl-flex">
                                                                    <!-- Checkboxes -->
                                                                    <div class="checkboxes one-in-row margin-bottom-10 ch-1">
                                                                        <input id="check-2" type="checkbox" name="check">
                                                                        <label for="check-2">Air Conditioning</label>
                                                                        <input id="check-3" type="checkbox" name="check">
                                                                        <label for="check-3">Swimming Pool</label>
                                                                        <input id="check-4" type="checkbox" name="check">
                                                                        <label for="check-4">Central Heating</label>
                                                                        <input id="check-5" type="checkbox" name="check">
                                                                        <label for="check-5">Laundry Room</label>
                                                                        <input id="check-6" type="checkbox" name="check">
                                                                        <label for="check-6">Gym</label>
                                                                        <input id="check-7" type="checkbox" name="check">
                                                                        <label for="check-7">Alarm</label>
                                                                        <input id="check-8" type="checkbox" name="check">
                                                                        <label for="check-8">Window Covering</label>
                                                                    </div>
                                                                    <!-- Checkboxes / End -->
                                                                </div>
                                                                <div class="col-lg-3 col-md-6 col-sm-12 py-1 pr-30 d-none d-lg-none d-xl-flex">
                                                                    <!-- Checkboxes -->
                                                                    <div class="checkboxes one-in-row margin-bottom-10 ch-2">
                                                                        <input id="check-9" type="checkbox" name="check">
                                                                        <label for="check-9">WiFi</label>
                                                                        <input id="check-10" type="checkbox" name="check">
                                                                        <label for="check-10">TV Cable</label>
                                                                        <input id="check-11" type="checkbox" name="check">
                                                                        <label for="check-11">Dryer</label>
                                                                        <input id="check-12" type="checkbox" name="check">
                                                                        <label for="check-12">Microwave</label>
                                                                        <input id="check-13" type="checkbox" name="check">
                                                                        <label for="check-13">Washer</label>
                                                                        <input id="check-14" type="checkbox" name="check">
                                                                        <label for="check-14">Refrigerator</label>
                                                                        <input id="check-15" type="checkbox" name="check">
                                                                        <label for="check-15">Outdoor Shower</label>
                                                                    </div>
                                                                    <!-- Checkboxes / End -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="tabs_2">
                                                <div class="rld-main-search">
                                                    <div class="row">
                                                        <div class="rld-single-input">
                                                            <input type="text" placeholder="Enter Keyword...">
                                                        </div>
                                                        <div class="rld-single-select ml-22">
                                                            <select class="select single-select">
                                                                <option value="1">Property Type</option>
                                                                <option value="2">Family House</option>
                                                                <option value="3">Apartment</option>
                                                                <option value="3">Condo</option>
                                                            </select>
                                                        </div>
                                                        <div class="rld-single-select">
                                                            <select class="select single-select mr-0">
                                                                <option value="1">Location</option>
                                                                <option value="2">Los Angeles</option>
                                                                <option value="3">Chicago</option>
                                                                <option value="3">Philadelphia</option>
                                                                <option value="3">San Francisco</option>
                                                                <option value="3">Miami</option>
                                                                <option value="3">Houston</option>
                                                            </select>
                                                        </div>
                                                        <div class="dropdown-filter"><span>Advanced Search</span></div>
                                                        <div class="col-xl-2 col-lg-2 col-md-4 pl-0">
                                                            <a class="btn btn-yellow" href="#">Search Now</a>
                                                        </div>
                                                        <div class="explore__form-checkbox-list full-filter">
                                                            <div class="row">
                                                                <div class="col-lg-4 col-md-6 py-1 pr-30 pl-0">
                                                                    <!-- Form Property Status -->
                                                                    <div class="form-group categories">
                                                                        <div class="nice-select form-control wide" tabindex="0"><span class="current"><i class="fa fa-home"></i>Property Status</span>
                                                                            <ul class="list">
                                                                                <li data-value="1" class="option selected ">For Sale</li>
                                                                                <li data-value="2" class="option">For Rent</li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <!--/ End Form Property Status -->
                                                                </div>
                                                                <div class="col-lg-4 col-md-6 py-1 pr-30 pl-0 ">
                                                                    <!-- Form Bedrooms -->
                                                                    <div class="form-group beds">
                                                                        <div class="nice-select form-control wide" tabindex="0"><span class="current"><i class="fa fa-bed" aria-hidden="true"></i> Bedrooms</span>
                                                                            <ul class="list">
                                                                                <li data-value="1" class="option selected">1</li>
                                                                                <li data-value="2" class="option">2</li>
                                                                                <li data-value="3" class="option">3</li>
                                                                                <li data-value="3" class="option">4</li>
                                                                                <li data-value="3" class="option">5</li>
                                                                                <li data-value="3" class="option">6</li>
                                                                                <li data-value="3" class="option">7</li>
                                                                                <li data-value="3" class="option">8</li>
                                                                                <li data-value="3" class="option">9</li>
                                                                                <li data-value="3" class="option">10</li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <!--/ End Form Bedrooms -->
                                                                </div>
                                                                <div class="col-lg-4 col-md-6 py-1 pl-0 pr-0">
                                                                    <!-- Form Bathrooms -->
                                                                    <div class="form-group bath">
                                                                        <div class="nice-select form-control wide" tabindex="0"><span class="current"><i class="fa fa-bath" aria-hidden="true"></i> Bathrooms</span>
                                                                            <ul class="list">
                                                                                <li data-value="1" class="option selected">1</li>
                                                                                <li data-value="2" class="option">2</li>
                                                                                <li data-value="3" class="option">3</li>
                                                                                <li data-value="3" class="option">4</li>
                                                                                <li data-value="3" class="option">5</li>
                                                                                <li data-value="3" class="option">6</li>
                                                                                <li data-value="3" class="option">7</li>
                                                                                <li data-value="3" class="option">8</li>
                                                                                <li data-value="3" class="option">9</li>
                                                                                <li data-value="3" class="option">10</li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <!--/ End Form Bathrooms -->
                                                                </div>
                                                                <div class="col-lg-5 col-md-12 col-sm-12 py-1 pr-30 mr-5 sld">
                                                                    <!-- Price Fields -->
                                                                    <div class="main-search-field-2">
                                                                        <!-- Area Range -->
                                                                        <div class="range-slider">
                                                                            <label>Area Size</label>
                                                                            <div id="area-range-rent" data-min="0" data-max="1300" data-unit="sq ft"></div>
                                                                            <div class="clearfix"></div>
                                                                        </div>
                                                                        <br>
                                                                        <!-- Price Range -->
                                                                        <div class="range-slider">
                                                                            <label>Price Range</label>
                                                                            <div id="price-range-rent" data-min="0" data-max="600000" data-unit="$"></div>
                                                                            <div class="clearfix"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3 col-md-6 col-sm-12 py-1 pr-30">
                                                                    <!-- Checkboxes -->
                                                                    <div class="checkboxes one-in-row margin-bottom-10 ch-1">
                                                                        <input id="check-16" type="checkbox" name="check">
                                                                        <label for="check-16">Air Conditioning</label>
                                                                        <input id="check-17" type="checkbox" name="check">
                                                                        <label for="check-17">Swimming Pool</label>
                                                                        <input id="check-18" type="checkbox" name="check">
                                                                        <label for="check-18">Central Heating</label>
                                                                        <input id="check-19" type="checkbox" name="check">
                                                                        <label for="check-19">Laundry Room</label>
                                                                        <input id="check-20" type="checkbox" name="check">
                                                                        <label for="check-20">Gym</label>
                                                                        <input id="check-21" type="checkbox" name="check">
                                                                        <label for="check-21">Alarm</label>
                                                                        <input id="check-22" type="checkbox" name="check">
                                                                        <label for="check-22">Window Covering</label>
                                                                    </div>
                                                                    <!-- Checkboxes / End -->
                                                                </div>
                                                                <div class="col-lg-3 col-md-6 col-sm-12 py-1 pr-30">
                                                                    <!-- Checkboxes -->
                                                                    <div class="checkboxes one-in-row margin-bottom-10 ch-2">
                                                                        <input id="check-23" type="checkbox" name="check">
                                                                        <label for="check-23">WiFi</label>
                                                                        <input id="check-24" type="checkbox" name="check">
                                                                        <label for="check-24">TV Cable</label>
                                                                        <input id="check-25" type="checkbox" name="check">
                                                                        <label for="check-25">Dryer</label>
                                                                        <input id="check-26" type="checkbox" name="check">
                                                                        <label for="check-26">Microwave</label>
                                                                        <input id="check-27" type="checkbox" name="check">
                                                                        <label for="check-27">Washer</label>
                                                                        <input id="check-28" type="checkbox" name="check">
                                                                        <label for="check-28">Refrigerator</label>
                                                                        <input id="check-29" type="checkbox" name="check">
                                                                        <label for="check-29">Outdoor Shower</label>
                                                                    </div>
                                                                    <!-- Checkboxes / End -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--/ End Search Form -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END HEADER SEARCH -->
        
        <!-- START SECTION POPULAR PLACES -->
        <section class="feature-categories bg-white rec-pro">
            <div class="container-fluid">
                <div class="sec-title">
                    <h2><span>Popular </span>Places</h2>
                    <p>Most Popular Places.</p>
                </div>
                <div class="row">
                  
                    <!-- Single category -->
                    <div class="col-xl-4 col-lg-6 col-sm-6" data-aos="fade-up" data-aos-delay="350">
                        <div class="small-category-2">
                            <div class="small-category-2-thumb img-3">
                                <a href="properties-full-grid-2.html"><img src="images/popular-places/14.jpg" alt=""></a>
                            </div>
                            <div class="sc-2-detail">
                                <h4 class="sc-jb-title"><a href="properties-full-grid-2.html">ALhi AL shargi</a></h4>
                                <span>409 Properties</span>
                            </div>
                        </div>
                    </div>
                    <!-- Single category -->
                    <div class="col-xl-4 col-lg-6 col-sm-6" data-aos="fade-up" data-aos-delay="450">
                        <div class="small-category-2">
                            <div class="small-category-2-thumb img-3">
                                <a href="properties-full-grid-2.html"><img src="images/popular-places/9.jpg" alt=""></a>
                            </div>
                            <div class="sc-2-detail">
                                <h4 class="sc-jb-title"><a href="properties-full-grid-2.html">Aidoun</a></h4>
                                <span>409 Properties</span>
                            </div>
                        </div>
                    </div>
                    <!-- Single category -->
                    <div class="col-xl-4 col-lg-6 col-sm-6" data-aos="fade-up" data-aos-delay="150">
                        <div class="small-category-2 mob-mt">
                            <div class="small-category-2-thumb img-8">
                                <a href="properties-full-grid-2.html"><img src="images/popular-places/15.jpg" alt=""></a>
                            </div>
                            <div class="sc-2-detail">
                                <h4 class="sc-jb-title"><a href="properties-full-grid-2.html">ALhi Aljanoubi</a></h4>
                                <span>145 Properties</span>
                            </div>
                        </div>
                    </div>
                    <!-- Single category -->
                    <div class="col-xl-4 col-lg-6 col-sm-6" data-aos="fade-up" data-aos-delay="250">
                        <div class="small-category-2">
                            <div class="small-category-2-thumb img-10">
                                <a href="properties-full-grid-2.html"><img src="images/popular-places/10.jpg" alt=""></a>
                            </div>
                            <div class="sc-2-detail">
                                <h4 class="sc-jb-title"><a href="properties-full-grid-2.html">Yarmouk university street</a></h4>
                                <span>112 Properties</span>
                            </div>
                        </div>
                    </div>
                    <!-- Single category -->
                    <div class="col-xl-4 col-lg-6 col-sm-6" data-aos="fade-up" data-aos-delay="350">
                        <div class="small-category-2 si-mt">
                            <div class="small-category-2-thumb img-11">
                                <a href="properties-full-grid-2.html"><img src="images/popular-places/5.jpg" alt=""></a>
                            </div>
                            <div class="sc-2-detail">
                                <h4 class="sc-jb-title"><a href="properties-full-grid-2.html">Houston</a></h4>
                                <span>254 Properties</span>
                            </div>
                        </div>
                    </div>
                    <!-- Single category -->
                    <div class="col-xl-4 col-lg-6 col-sm-6" data-aos="fade-up" data-aos-delay="450">
                        <div class="small-category-2 no-mb si-mt">
                            <div class="small-category-2-thumb img-11">
                                <a href="properties-full-grid-2.html"><img src="images/popular-places/6.jpg" alt=""></a>
                            </div>
                            <div class="sc-2-detail">
                                <h4 class="sc-jb-title"><a href="properties-full-grid-2.html">Orlando</a></h4>
                                <span>254 Properties</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /row -->
            </div>
        </section>
        <!-- END SECTION POPULAR PLACES -->

        <!-- START SECTION FEATURED PROPERTIES -->
        <section class="featured portfolio bg-white-2 rec-pro full-l">
            <div class="container-fluid">
                <div class="sec-title">
                    <h2><span>Featured </span>Properties</h2>
                    <p>These are our featured properties</p>
                </div>
                <div class="row portfolio-items">
                    <div class="item col-xl-6 col-lg-12 col-md-12 col-xs-12 landscapes sale">
                        <div class="project-single" data-aos="fade-right">
                            <div class="project-inner project-head">
                                <div class="homes">
                                    <!-- homes img -->
                                    <a href="single-property-1.html" class="homes-img">
                                  
                                        <div class="homes-tag button alt sale">for Rent</div>
                                        <img src="images/blog/b-11.jpg" alt="home-1" class="img-responsive">
                                    </a>
                                </div>
                                <div class="button-effect">
                                    <a href="single-property-1.html" class="btn"><i class="fa fa-link"></i></a>
                                    <a href="https://www.youtube.com/watch?v=14semTlwyUY" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                    <a href="single-property-2.html" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                                </div>
                            </div>
                            <!-- homes content -->
                            <div class="homes-content">
                                <!-- homes address -->
                                <h3><a href="single-property-1.html">Real Luxury Family House Villa</a></h3>
                                <p class="homes-address mb-3">
                                    <a href="single-property-1.html">
                                        <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South, NYC</span>
                                    </a>
                                </p>
                                <!-- homes List -->
                                <ul class="homes-list clearfix pb-3">
                                    <li class="the-icons">
                                        <i class="flaticon-bed mr-2" ></i>
                                        <span>6 Bedrooms</span>
                                    </li>
                                    <li class="the-icons">
                                        <i class="flaticon-bathtub mr-2" ></i>
                                        <span>3 Bathrooms</span>
                                    </li>
                                    <li class="the-icons">
                                        <i class="flaticon-square mr-2" ></i>
                                        <span>720 sq ft</span>
                                    </li>
                                    <li class="the-icons">
                                        <i class="flaticon-car mr-2" ></i>
                                        <span>2 Garages</span>
                                    </li>
                                </ul>
                                <div class="price-properties footer pt-3 pb-0">
                                    <h3 class="title mt-3">
                                     <a href="single-property-1.html">$ 150,000</a>
                                    </h3>
                                    <!-- <div class="compare">
                                        <a href="#" title="Compare">
                                            <i class="flaticon-compare"></i>
                                        </a>
                                        <a href="#" title="Share">
                                            <i class="flaticon-share"></i>
                                        </a>
                                        <a href="#" title="Favorites">
                                            <i class="flaticon-heart"></i>
                                        </a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item col-xl-6 col-lg-12 col-md-12 col-xs-12 people rent">
                        <div class="project-single" data-aos="fade-left">
                            <div class="project-inner project-head">
                                <div class="homes">
                                    <!-- homes img -->
                                    <a href="single-property-1.html" class="homes-img">
                                        <div class="homes-tag button sale rent">For Rent</div>
                                        <img src="images/blog/b-12.jpg" alt="home-1" class="img-responsive">
                                    </a>
                                </div>
                                <div class="button-effect">
                                    <a href="single-property-1.html" class="btn"><i class="fa fa-link"></i></a>
                                    <a href="https://www.youtube.com/watch?v=14semTlwyUY" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                    <a href="single-property-2.html" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                                </div>
                            </div>
                            <!-- homes content -->
                            <div class="homes-content">
                                <!-- homes address -->
                                <h3><a href="single-property-1.html">Real Luxury Family House Villa</a></h3>
                                <p class="homes-address mb-3">
                                    <a href="single-property-1.html">
                                        <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South, NYC</span>
                                    </a>
                                </p>
                                <!-- homes List -->
                                <ul class="homes-list clearfix pb-3">
                                    <li class="the-icons">
                                        <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                        <span>6 Bedrooms</span>
                                    </li>
                                    <li class="the-icons">
                                        <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                        <span>3 Bathrooms</span>
                                    </li>
                                    <li class="the-icons">
                                        <i class="flaticon-square mr-2" aria-hidden="true"></i>
                                        <span>720 sq ft</span>
                                    </li>
                                    <li class="the-icons">
                                        <i class="flaticon-car mr-2" aria-hidden="true"></i>
                                        <span>2 Garages</span>
                                    </li>
                                </ul>
                                <div class="price-properties footer pt-3 pb-0">
                                    <h3 class="title mt-3">
                                     <a href="single-property-1.html">$ 150,000</a>
                                    </h3>
                                    <!-- <div class="compare">
                                        <a href="#" title="Compare">
                                            <i class="flaticon-compare"></i>
                                        </a>
                                        <a href="#" title="Share">
                                            <i class="flaticon-share"></i>
                                        </a>
                                        <a href="#" title="Favorites">
                                            <i class="flaticon-heart"></i>
                                        </a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item col-xl-6 col-lg-12 col-md-12 col-xs-12 people landscapes sale">
                        <div class="project-single" data-aos="fade-right">
                            <div class="project-inner project-head">
                                <div class="homes">
                                    <!-- homes img -->
                                    <a href="single-property-1.html" class="homes-img">
                                        <div class="homes-tag button alt sale">For Rent</div>
                                        <img src="images/blog/b-1.jpg" alt="home-1" class="img-responsive">
                                    </a>
                                </div>
                                <div class="button-effect">
                                    <a href="single-property-1.html" class="btn"><i class="fa fa-link"></i></a>
                                    <a href="https://www.youtube.com/watch?v=14semTlwyUY" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                    <a href="single-property-2.html" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                                </div>
                            </div>
                            <!-- homes content -->
                            <div class="homes-content">
                                <!-- homes address -->
                                <h3><a href="single-property-1.html">Real Luxury Family House Villa</a></h3>
                                <p class="homes-address mb-3">
                                    <a href="single-property-1.html">
                                        <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South, NYC</span>
                                    </a>
                                </p>
                                <!-- homes List -->
                                <ul class="homes-list clearfix pb-3">
                                    <li class="the-icons">
                                        <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                        <span>6 Bedrooms</span>
                                    </li>
                                    <li class="the-icons">
                                        <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                        <span>3 Bathrooms</span>
                                    </li>
                                    <li class="the-icons">
                                        <i class="flaticon-square mr-2" aria-hidden="true"></i>
                                        <span>720 sq ft</span>
                                    </li>
                                    <li class="the-icons">
                                        <i class="flaticon-car mr-2" aria-hidden="true"></i>
                                        <span>2 Garages</span>
                                    </li>
                                </ul>
                                <div class="price-properties footer pt-3 pb-0">
                                    <h3 class="title mt-3">
                                     <a href="single-property-1.html">$ 150,000</a>
                                    </h3>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item col-xl-6 col-lg-12 col-md-12 col-xs-12 people landscapes rent no-pb">
                        <div class="project-single no-mb" data-aos="fade-left">
                            <div class="project-inner project-head">
                                <div class="homes">
                                    <!-- homes img -->
                                    <a href="single-property-1.html" class="homes-img">
                                        <div class="homes-tag button alt featured">Featured</div>
                                        <div class="homes-tag button sale rent">For Rent</div>
                                        <img src="images/feature-properties/fp-10.jpg" alt="home-1" class="img-responsive">
                                    </a>
                                </div>
                                <div class="button-effect">
                                    <a href="single-property-1.html" class="btn"><i class="fa fa-link"></i></a>
                                    <a href="https://www.youtube.com/watch?v=14semTlwyUY" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                    <a href="single-property-2.html" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                                </div>
                            </div>
                            <!-- homes content -->
                            <div class="homes-content">
                                <!-- homes address -->
                                <h3><a href="single-property-1.html">Real Luxury Family House Villa</a></h3>
                                <p class="homes-address mb-3">
                                    <a href="properties-details.html">
                                        <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South, NYC</span>
                                    </a>
                                </p>
                                <!-- homes List -->
                                <ul class="homes-list clearfix pb-3">
                                    <li class="the-icons">
                                        <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                        <span>6 Bedrooms</span>
                                    </li>
                                    <li class="the-icons">
                                        <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                        <span>3 Bathrooms</span>
                                    </li>
                                    <li class="the-icons">
                                        <i class="flaticon-square mr-2" aria-hidden="true"></i>
                                        <span>720 sq ft</span>
                                    </li>
                                    <li class="the-icons">
                                        <i class="flaticon-car mr-2" aria-hidden="true"></i>
                                        <span>2 Garages</span>
                                    </li>
                                </ul>
                                <div class="price-properties footer pt-3 pb-0">
                                    <h3 class="title mt-3">
                                     <a href="single-property-1.html">$ 150,000</a>
                                    </h3>
                                    <!-- <div class="compare">
                                        <a href="#" title="Compare">
                                            <i class="flaticon-compare"></i>
                                        </a>
                                        <a href="#" title="Share">
                                            <i class="flaticon-share"></i>
                                        </a>
                                        <a href="#" title="Favorites">
                                            <i class="flaticon-heart"></i>
                                        </a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item col-xl-6 col-lg-12 col-md-12 col-xs-12 people sale no-pb">
                        <div class="project-single no-mb" data-aos="fade-right"> 
                            <div class="project-inner project-head">
                                <div class="homes">
                                    <!-- homes img -->
                                    <a href="single-property-1.html" class="homes-img">
                                        <div class="homes-tag button alt featured">Featured</div>
                                        <div class="homes-tag button sale rent">For Rent</div>
                                        <img src="images/feature-properties/fp-11.jpg" alt="home-1" class="img-responsive">
                                    </a>
                                </div>
                                <div class="button-effect">
                                    <a href="single-property-1.html" class="btn"><i class="fa fa-link"></i></a>
                                    <a href="https://www.youtube.com/watch?v=14semTlwyUY" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                    <a href="single-property-2.html" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                                </div>
                            </div>
                            <!-- homes content -->
                            <div class="homes-content">
                                <!-- homes address -->
                                <h3><a href="single-property-1.html">Real Luxury Family House Villa</a></h3>
                                <p class="homes-address mb-3">
                                    <a href="single-property-1.html">
                                        <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South, NYC</span>
                                    </a>
                                </p>
                                <!-- homes List -->
                                <ul class="homes-list clearfix pb-3">
                                    <li class="the-icons">
                                        <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                        <span>6 Bedrooms</span>
                                    </li>
                                    <li class="the-icons">
                                        <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                        <span>3 Bathrooms</span>
                                    </li>
                                    <li class="the-icons">
                                        <i class="flaticon-square mr-2" aria-hidden="true"></i>
                                        <span>720 sq ft</span>
                                    </li>
                                    <li class="the-icons">
                                        <i class="flaticon-car mr-2" aria-hidden="true"></i>
                                        <span>2 Garages</span>
                                    </li>
                                </ul>
                                <div class="price-properties footer pt-3 pb-0">
                                    <h3 class="title mt-3">
                                     <a href="single-property-1.html">$ 150,000</a>
                                    </h3>
                                    <!-- <div class="compare">
                                        <a href="#" title="Compare">
                                            <i class="flaticon-compare"></i>
                                        </a>
                                        <a href="#" title="Share">
                                            <i class="flaticon-share"></i>
                                        </a>
                                        <a href="#" title="Favorites">
                                            <i class="flaticon-heart"></i>
                                        </a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item col-xl-6 col-lg-12 col-md-12 col-xs-12 it2 web rent no-pb">
                        <div class="project-single no-mb last" data-aos="fade-left">
                            <div class="project-inner project-head">
                                <div class="homes">
                                    <!-- homes img -->
                                    <a href="single-property-1.html" class="homes-img">
                                        <div class="homes-tag button sale rent">For Rent</div>
                                        <img src="images/feature-properties/fp-12.jpg" alt="home-1" class="img-responsive">
                                    </a>
                                </div>
                                <div class="button-effect">
                                    <a href="single-property-1.html" class="btn"><i class="fa fa-link"></i></a>
                                    <a href="https://www.youtube.com/watch?v=14semTlwyUY" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                    <a href="single-property-2.html" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                                </div>
                            </div>
                            <!-- homes content -->
                            <div class="homes-content">
                                <!-- homes address -->
                                <h3><a href="single-property-1.html">Real Luxury Family House Villa</a></h3>
                                <p class="homes-address mb-3">
                                    <a href="single-property-1.html">
                                        <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South, NYC</span>
                                    </a>
                                </p>
                                <!-- homes List -->
                                <ul class="homes-list clearfix pb-3">
                                    <li class="the-icons">
                                        <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                        <span>6 Bedrooms</span>
                                    </li>
                                    <li class="the-icons">
                                        <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                        <span>3 Bathrooms</span>
                                    </li>
                                    <li class="the-icons">
                                        <i class="flaticon-square mr-2" aria-hidden="true"></i>
                                        <span>720 sq ft</span>
                                    </li>
                                    <li class="the-icons">
                                        <i class="flaticon-car mr-2" aria-hidden="true"></i>
                                        <span>2 Garages</span>
                                    </li>
                                </ul>
                                <div class="price-properties footer pt-3 pb-0">
                                    <h3 class="title mt-3">
                                     <a href="single-property-1.html">$ 150,000</a>
                                    </h3>
                                    <!-- <div class="compare">
                                        <a href="#" title="Compare">
                                            <i class="flaticon-compare"></i>
                                        </a>
                                        <a href="#" title="Share">
                                            <i class="flaticon-share"></i>
                                        </a>
                                        <a href="#" title="Favorites">
                                            <i class="flaticon-heart"></i>
                                        </a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-all">
                    <a href="properties-full-grid-2.html" class="btn btn-outline-light">View More</a>
                </div>
            </div>
        </section>
        <!-- END SECTION FEATURED PROPERTIES -->

        <!-- START SECTION WHY CHOOSE US -->
        <section class="how-it-works bg-white rec-pro">
            <div class="container-fluid">
                <div class="sec-title">
                    <h2><span>Why </span>Choose Us</h2>
                    <p>We provide full service at every step.</p>
                </div>
                <div class="row service-1">
                    <article class="col-lg-3 col-md-6 col-xs-12 serv" data-aos="fade-up" data-aos-delay="150">
                        <div class="serv-flex">
                            <div class="art-1 img-13">
                                <img src="images/icons/icon-4.svg" alt="">
                                <h3>Wide Renge Of Properties</h3>
                            </div>
                            <div class="service-text-p">
                                <p class="text-center">Join network of thousands agents and close deals faster than ever,And you will find many options and in the right place for you</p>
                            </div>
                        </div>
                    </article>
                    <article class="col-lg-3 col-md-6 col-xs-12 serv" data-aos="fade-up" data-aos-delay="250">
                        <div class="serv-flex">
                            <div class="art-1 img-14">
                                <img src="images/icons/icon-5.svg" alt="">
                                <h3>Trusted by thousands</h3>
                            </div>
                            <div class="service-text-p">
                                <p class="text-center">Many people have shown their trust in us and have been able to find suitable housing through us.</p>
                            </div>
                        </div>
                    </article>
                    <article class="col-lg-3 col-md-6 col-xs-12 serv mb-0 pt" data-aos="fade-up" data-aos-delay="350">
                        <div class="serv-flex arrow">
                            <div class="art-1 img-15">
                                <img src="images/icons/icon-6.svg" alt="">
                                <h3>Financing made easy</h3>
                            </div>
                            <div class="service-text-p">
                                <p class="text-center">Through us, you can find a tenant through us who increases your money and facilitates your work.</p>
                            </div>
                        </div>
                    </article>
                    <article class="col-lg-3 col-md-6 col-xs-12 serv mb-0 pt its-2" data-aos="fade-up" data-aos-delay="450">
                        <div class="serv-flex">
                            <div class="art-1 img-14">
                                <img src="images/icons/icon-15.svg" alt="">
                                <h3>We are here near you</h3>
                            </div>
                            <div class="service-text-p">
                                <p class="text-center">We are close to you and make a lot easier for you, and you will always find us when you have any questions.</p>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </section>
        <!-- END SECTION WHY CHOOSE US -->        

        <!-- START SECTION RECENTLY PROPERTIES -->
        <section class="featured portfolio rec-pro disc">
            <div class="container-fluid">
                <div class="sec-title discover">
                    <h2><span>Discover </span>Popular Properties</h2>
                    <p>We provide full service at every step.</p>
                </div>
                <div class="portfolio col-xl-12">
                    <div class="slick-lancers">
                        <div class="agents-grid" data-aos="fade-up" data-aos-delay="150">
                            <div class="landscapes">
                                <div class="project-single">
                                    <div class="project-inner project-head">
                                        <div class="homes">
                                            <!-- homes img -->
                                            <a href="single-property-1.html" class="homes-img">
                                                <div class="homes-tag button alt featured">Featured</div>
                                                <div class="homes-tag button alt sale">For Sale</div>
                                                <img src="images/blog/b-11.jpg" alt="home-1" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="button-effect">
                                            <a href="single-property-1.html" class="btn"><i class="fa fa-link"></i></a>
                                            <a href="https://www.youtube.com/watch?v=14semTlwyUY" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                            <a href="single-property-2.html" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                                        </div>
                                    </div>
                                    <!-- homes content -->
                                    <div class="homes-content">
                                        <!-- homes address -->
                                        <h3><a href="single-property-1.html">Real House Luxury Villa</a></h3>
                                        <p class="homes-address mb-3">
                                            <a href="single-property-1.html">
                                                <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South, NYC</span>
                                            </a>
                                        </p>
                                        <!-- homes List -->
                                        <ul class="homes-list clearfix pb-3">
                                            <li class="the-icons">
                                                <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                                <span>6 Bedrooms</span>
                                            </li>
                                            <li class="the-icons">
                                                <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                                <span>3 Bathrooms</span>
                                            </li>
                                            <li class="the-icons">
                                                <i class="flaticon-square mr-2" aria-hidden="true"></i>
                                                <span>720 sq ft</span>
                                            </li>
                                            <li class="the-icons">
                                                <i class="flaticon-car mr-2" aria-hidden="true"></i>
                                                <span>2 Garages</span>
                                            </li>
                                        </ul>
                                        <div class="price-properties footer pt-3 pb-0">
                                            <h3 class="title mt-3">
                                                <a href="single-property-1.html">$ 350,000</a>
                                            </h3>
                                            <!-- <div class="compare">
                                                <a href="#" title="Compare">
                                                    <i class="flaticon-compare"></i>
                                                </a>
                                                <a href="#" title="Share">
                                                    <i class="flaticon-share"></i>
                                                </a>
                                                <a href="#" title="Favorites">
                                                    <i class="flaticon-heart"></i>
                                                </a>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="agents-grid" data-aos="fade-up" data-aos-delay="250">
                            <div class="people">
                                <div class="project-single">
                                    <div class="project-inner project-head">
                                        <div class="homes">
                                            <!-- homes img -->
                                            <a href="single-property-1.html" class="homes-img">
                                                <div class="homes-tag button sale rent">For Rent</div>
                                                <img src="images/blog/b-12.jpg" alt="home-1" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="button-effect">
                                            <a href="single-property-1.html" class="btn"><i class="fa fa-link"></i></a>
                                            <a href="https://www.youtube.com/watch?v=14semTlwyUY" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                            <a href="single-property-2.html" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                                        </div>
                                    </div>
                                    <!-- homes content -->
                                    <div class="homes-content">
                                        <!-- homes address -->
                                        <h3><a href="single-property-1.html">Real House Luxury Villa</a></h3>
                                        <p class="homes-address mb-3">
                                            <a href="single-property-1.html">
                                                <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South, NYC</span>
                                            </a>
                                        </p>
                                        <!-- homes List -->
                                        <ul class="homes-list clearfix pb-3">
                                            <li class="the-icons">
                                                <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                                <span>6 Bedrooms</span>
                                            </li>
                                            <li class="the-icons">
                                                <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                                <span>3 Bathrooms</span>
                                            </li>
                                            <li class="the-icons">
                                                <i class="flaticon-square mr-2" aria-hidden="true"></i>
                                                <span>720 sq ft</span>
                                            </li>
                                            <li class="the-icons">
                                                <i class="flaticon-car mr-2" aria-hidden="true"></i>
                                                <span>2 Garages</span>
                                            </li>
                                        </ul>
                                        <div class="price-properties footer pt-3 pb-0">
                                            <h3 class="title mt-3">
                                                <a href="single-property-1.html">$ 150,000</a>
                                            </h3>
                                            <!-- <div class="compare">
                                                <a href="#" title="Compare">
                                                    <i class="flaticon-compare"></i>
                                                </a>
                                                <a href="#" title="Share">
                                                    <i class="flaticon-share"></i>
                                                </a>
                                                <a href="#" title="Favorites">
                                                    <i class="flaticon-heart"></i>
                                                </a>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="agents-grid" data-aos="fade-up" data-aos-delay="350">
                            <div class="people landscapes no-pb pbp-3">
                                <div class="project-single">
                                    <div class="project-inner project-head">
                                        <div class="homes">
                                            <!-- homes img -->
                                            <a href="single-property-1.html" class="homes-img">
                                                <div class="homes-tag button alt sale">For Sale</div>
                                                <img src="images/blog/b-1.jpg" alt="home-1" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="button-effect">
                                            <a href="single-property-1.html" class="btn"><i class="fa fa-link"></i></a>
                                            <a href="https://www.youtube.com/watch?v=14semTlwyUY" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                            <a href="single-property-2.html" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                                        </div>
                                    </div>
                                    <!-- homes content -->
                                    <div class="homes-content">
                                        <!-- homes address -->
                                        <h3><a href="single-property-1.html">Real House Luxury Villa</a></h3>
                                        <p class="homes-address mb-3">
                                            <a href="single-property-1.html">
                                                <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South, NYC</span>
                                            </a>
                                        </p>
                                        <!-- homes List -->
                                        <ul class="homes-list clearfix pb-3">
                                            <li class="the-icons">
                                                <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                                <span>6 Bedrooms</span>
                                            </li>
                                            <li class="the-icons">
                                                <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                                <span>3 Bathrooms</span>
                                            </li>
                                            <li class="the-icons">
                                                <i class="flaticon-square mr-2" aria-hidden="true"></i>
                                                <span>720 sq ft</span>
                                            </li>
                                            <li class="the-icons">
                                                <i class="flaticon-car mr-2" aria-hidden="true"></i>
                                                <span>2 Garages</span>
                                            </li>
                                        </ul>
                                        <div class="price-properties footer pt-3 pb-0">
                                            <h3 class="title mt-3">
                                                <a href="single-property-1.html">$ 350,000</a>
                                            </h3>
                                            <!-- <div class="compare">
                                                <a href="#" title="Compare">
                                                    <i class="flaticon-compare"></i>
                                                </a>
                                                <a href="#" title="Share">
                                                    <i class="flaticon-share"></i>
                                                </a>
                                                <a href="#" title="Favorites">
                                                    <i class="flaticon-heart"></i>
                                                </a>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="agents-grid" data-aos="fade-up" data-aos-delay="450">
                            <div class="landscapes">
                                <div class="project-single no-mb">
                                    <div class="project-inner project-head">
                                        <div class="homes">
                                            <!-- homes img -->
                                            <a href="single-property-1.html" class="homes-img">
                                                <div class="homes-tag button alt featured">Featured</div>
                                                <div class="homes-tag button sale rent">For Rent</div>
                                                <img src="images/feature-properties/fp-10.jpg" alt="home-1" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="button-effect">
                                            <a href="single-property-1.html" class="btn"><i class="fa fa-link"></i></a>
                                            <a href="https://www.youtube.com/watch?v=14semTlwyUY" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                            <a href="single-property-2.html" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                                        </div>
                                    </div>
                                    <!-- homes content -->
                                    <div class="homes-content">
                                        <!-- homes address -->
                                        <h3><a href="single-property-1.html">Real House Luxury Villa</a></h3>
                                        <p class="homes-address mb-3">
                                            <a href="properties-details.html">
                                                <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South, NYC</span>
                                            </a>
                                        </p>
                                        <!-- homes List -->
                                        <ul class="homes-list clearfix pb-3">
                                            <li class="the-icons">
                                                <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                                <span>6 Bedrooms</span>
                                            </li>
                                            <li class="the-icons">
                                                <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                                <span>3 Bathrooms</span>
                                            </li>
                                            <li class="the-icons">
                                                <i class="flaticon-square mr-2" aria-hidden="true"></i>
                                                <span>720 sq ft</span>
                                            </li>
                                            <li class="the-icons">
                                                <i class="flaticon-car mr-2" aria-hidden="true"></i>
                                                <span>2 Garages</span>
                                            </li>
                                        </ul>
                                        <div class="price-properties footer pt-3 pb-0">
                                            <h3 class="title mt-3">
                                                <a href="single-property-1.html">$ 150,000</a>
                                            </h3>
                                            <!-- <div class="compare">
                                                <a href="#" title="Compare">
                                                    <i class="flaticon-compare"></i>
                                                </a>
                                                <a href="#" title="Share">
                                                    <i class="flaticon-share"></i>
                                                </a>
                                                <a href="#" title="Favorites">
                                                    <i class="flaticon-heart"></i>
                                                </a>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="agents-grid" data-aos="fade-up">
                            <div class="people">
                                <div class="project-single no-mb">
                                    <div class="project-inner project-head">
                                        <div class="homes">
                                            <!-- homes img -->
                                            <a href="single-property-1.html" class="homes-img">
                                                <div class="homes-tag button alt sale">For Sale</div>
                                                <img src="images/feature-properties/fp-11.jpg" alt="home-1" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="button-effect">
                                            <a href="single-property-1.html" class="btn"><i class="fa fa-link"></i></a>
                                            <a href="https://www.youtube.com/watch?v=14semTlwyUY" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                            <a href="single-property-2.html" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                                        </div>
                                    </div>
                                    <!-- homes content -->
                                    <div class="homes-content">
                                        <!-- homes address -->
                                        <h3><a href="single-property-1.html">Real House Luxury Villa</a></h3>
                                        <p class="homes-address mb-3">
                                            <a href="single-property-1.html">
                                                <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South, NYC</span>
                                            </a>
                                        </p>
                                        <!-- homes List -->
                                        <ul class="homes-list clearfix pb-3">
                                            <li class="the-icons">
                                                <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                                <span>6 Bedrooms</span>
                                            </li>
                                            <li class="the-icons">
                                                <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                                <span>3 Bathrooms</span>
                                            </li>
                                            <li class="the-icons">
                                                <i class="flaticon-square mr-2" aria-hidden="true"></i>
                                                <span>720 sq ft</span>
                                            </li>
                                            <li class="the-icons">
                                                <i class="flaticon-car mr-2" aria-hidden="true"></i>
                                                <span>2 Garages</span>
                                            </li>
                                        </ul>
                                        <div class="price-properties footer pt-3 pb-0">
                                            <h3 class="title mt-3">
                                                <a href="single-property-1.html">$ 350,000</a>
                                            </h3>
                                            <!-- <div class="compare">
                                                <a href="#" title="Compare">
                                                    <i class="flaticon-compare"></i>
                                                </a>
                                                <a href="#" title="Share">
                                                    <i class="flaticon-share"></i>
                                                </a>
                                                <a href="#" title="Favorites">
                                                    <i class="flaticon-heart"></i>
                                                </a>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="agents-grid" data-aos="fade-up">
                            <div class="people landscapes no-pb pbp-3">
                                <div class="project-single no-mb last">
                                    <div class="project-inner project-head">
                                        <div class="homes">
                                            <!-- homes img -->
                                            <a href="single-property-1.html" class="homes-img">
                                                <div class="homes-tag button sale rent">For Rent</div>
                                                <img src="images/feature-properties/fp-12.jpg" alt="home-1" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="button-effect">
                                            <a href="single-property-1.html" class="btn"><i class="fa fa-link"></i></a>
                                            <a href="https://www.youtube.com/watch?v=14semTlwyUY" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                            <a href="single-property-2.html" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                                        </div>
                                    </div>
                                    <!-- homes content -->
                                    <div class="homes-content">
                                        <!-- homes address -->
                                        <h3><a href="single-property-1.html">Real House Luxury Villa</a></h3>
                                        <p class="homes-address mb-3">
                                            <a href="single-property-1.html">
                                                <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South, NYC</span>
                                            </a>
                                        </p>
                                        <!-- homes List -->
                                        <ul class="homes-list clearfix pb-3">
                                            <li class="the-icons">
                                                <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                                <span>6 Bedrooms</span>
                                            </li>
                                            <li class="the-icons">
                                                <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                                <span>3 Bathrooms</span>
                                            </li>
                                            <li class="the-icons">
                                                <i class="flaticon-square mr-2" aria-hidden="true"></i>
                                                <span>720 sq ft</span>
                                            </li>
                                            <li class="the-icons">
                                                <i class="flaticon-car mr-2" aria-hidden="true"></i>
                                                <span>2 Garages</span>
                                            </li>
                                        </ul>
                                        <div class="price-properties footer pt-3 pb-0">
                                            <h3 class="title mt-3">
                                                <a href="single-property-1.html">$ 150,000</a>
                                            </h3>
                                            <!-- <div class="compare">
                                                <a href="#" title="Compare">
                                                    <i class="flaticon-compare"></i>
                                                </a>
                                                <a href="#" title="Share">
                                                    <i class="flaticon-share"></i>
                                                </a>
                                                <a href="#" title="Favorites">
                                                    <i class="flaticon-heart"></i>
                                                </a>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="agents-grid" data-aos="fade-up">
                            <div class="landscapes">
                                <div class="project-single">
                                    <div class="project-inner project-head">
                                        <div class="homes">
                                            <!-- homes img -->
                                            <a href="single-property-1.html" class="homes-img">
                                                <div class="homes-tag button alt featured">Featured</div>
                                                <div class="homes-tag button alt sale">For Sale</div>
                                                <img src="images/blog/b-11.jpg" alt="home-1" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="button-effect">
                                            <a href="single-property-1.html" class="btn"><i class="fa fa-link"></i></a>
                                            <a href="https://www.youtube.com/watch?v=14semTlwyUY" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                            <a href="single-property-2.html" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                                        </div>
                                    </div>
                                    <!-- homes content -->
                                    <div class="homes-content">
                                        <!-- homes address -->
                                        <h3><a href="single-property-1.html">Real House Luxury Villa</a></h3>
                                        <p class="homes-address mb-3">
                                            <a href="single-property-1.html">
                                                <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South, NYC</span>
                                            </a>
                                        </p>
                                        <!-- homes List -->
                                        <ul class="homes-list clearfix pb-3">
                                            <li class="the-icons">
                                                <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                                <span>6 Bedrooms</span>
                                            </li>
                                            <li class="the-icons">
                                                <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                                <span>3 Bathrooms</span>
                                            </li>
                                            <li class="the-icons">
                                                <i class="flaticon-square mr-2" aria-hidden="true"></i>
                                                <span>720 sq ft</span>
                                            </li>
                                            <li class="the-icons">
                                                <i class="flaticon-car mr-2" aria-hidden="true"></i>
                                                <span>2 Garages</span>
                                            </li>
                                        </ul>
                                        <div class="price-properties footer pt-3 pb-0">
                                            <h3 class="title mt-3">
                                                <a href="single-property-1.html">$ 350,000</a>
                                            </h3>
                                            <!-- <div class="compare">
                                                <a href="#" title="Compare">
                                                    <i class="flaticon-compare"></i>
                                                </a>
                                                <a href="#" title="Share">
                                                    <i class="flaticon-share"></i>
                                                </a>
                                                <a href="#" title="Favorites">
                                                    <i class="flaticon-heart"></i>
                                                </a>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="agents-grid" data-aos="fade-up">
                            <div class="people">
                                <div class="project-single">
                                    <div class="project-inner project-head">
                                        <div class="homes">
                                            <!-- homes img -->
                                            <a href="single-property-1.html" class="homes-img">
                                                <div class="homes-tag button sale rent">For Rent</div>
                                                <img src="images/blog/b-12.jpg" alt="home-1" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="button-effect">
                                            <a href="single-property-1.html" class="btn"><i class="fa fa-link"></i></a>
                                            <a href="https://www.youtube.com/watch?v=14semTlwyUY" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                            <a href="single-property-2.html" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                                        </div>
                                    </div>
                                    <!-- homes content -->
                                    <div class="homes-content">
                                        <!-- homes address -->
                                        <h3><a href="single-property-1.html">Real House Luxury Villa</a></h3>
                                        <p class="homes-address mb-3">
                                            <a href="single-property-1.html">
                                                <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South, NYC</span>
                                            </a>
                                        </p>
                                        <!-- homes List -->
                                        <ul class="homes-list clearfix pb-3">
                                            <li class="the-icons">
                                                <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                                <span>6 Bedrooms</span>
                                            </li>
                                            <li class="the-icons">
                                                <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                                <span>3 Bathrooms</span>
                                            </li>
                                            <li class="the-icons">
                                                <i class="flaticon-square mr-2" aria-hidden="true"></i>
                                                <span>720 sq ft</span>
                                            </li>
                                            <li class="the-icons">
                                                <i class="flaticon-car mr-2" aria-hidden="true"></i>
                                                <span>2 Garages</span>
                                            </li>
                                        </ul>
                                        <div class="price-properties footer pt-3 pb-0">
                                            <h3 class="title mt-3">
                                                <a href="single-property-1.html">$ 150,000</a>
                                            </h3>
                                            <!-- <div class="compare">
                                                <a href="#" title="Compare">
                                                    <i class="flaticon-compare"></i>
                                                </a>
                                                <a href="#" title="Share">
                                                    <i class="flaticon-share"></i>
                                                </a>
                                                <a href="#" title="Favorites">
                                                    <i class="flaticon-heart"></i>
                                                </a>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END SECTION RECENTLY PROPERTIES -->

        <!-- START SECTION AGENTS -->
        <!-- <section class="team bg-white rec-pro">
            <div class="container-fluid">
                <div class="sec-title">
                    <h2><span>Meet Our </span>Agents</h2>
                    <p>Our Agents are here to help you</p>
                </div>
                <div class="row team-all"> -->
                    <!--Team Block-->
                    <!-- <div class="team-block col-sm-6 col-md-4 col-lg-4 col-xl-2" data-aos="fade-up" data-aos-delay="150">
                        <div class="inner-box team-details">
                            <div class="image team-head">
                                <a href="agents-listing-grid.html"><img src="images/team/t-5.jpg" alt="" /></a>
                                <div class="team-hover">
                                    <ul class="team-social">
                                        <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="lower-box">
                                <h3><a href="agents-listing-grid.html">hazem yosef</a></h3>
                                <div class="designation">Real Estate Agent</div>
                            </div>
                        </div>
                    </div> -->
                    <!--Team Block-->
                    <!-- <div class="team-block col-sm-6 col-md-4 col-lg-4 col-xl-2" data-aos="fade-up" data-aos-delay="250">
                        <div class="inner-box team-details">
                            <div class="image team-head">
                                <a href="agents-listing-grid.html"><img src="images/team/t-6.jpg" alt="" /></a>
                                <div class="team-hover">
                                    <ul class="team-social">
                                        <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="lower-box">
                                <h3><a href="agents-listing-grid.html">sereen ali</a></h3>
                                <div class="designation">Real Estate Agent</div>
                            </div>
                        </div>
                    </div> -->
                    <!--Team Block-->
                    <!-- <div class="team-block col-sm-6 col-md-4 col-lg-4 col-xl-2" data-aos="fade-up" data-aos-delay="350">
                        <div class="inner-box team-details">
                            <div class="image team-head">
                                <a href="agents-listing-grid.html"><img src="images/team/t-7.jpg" alt="" /></a>
                                <div class="team-hover">
                                    <ul class="team-social">
                                        <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="lower-box">
                                <h3><a href="agents-listing-grid.html">salah jmil</a></h3>
                                <div class="designation">Real Estate Agent</div>
                            </div>
                        </div>
                    </div> -->
                    <!--Team Block-->
                    <!-- <div class="team-block col-sm-6 col-md-4 col-lg-4 col-xl-2 pb-none" data-aos="fade-up" data-aos-delay="450">
                        <div class="inner-box team-details">
                            <div class="image team-head">
                                <a href="agents-listing-grid.html"><img src="images/team/t-8.jpg" alt="" /></a>
                                <div class="team-hover">
                                    <ul class="team-social">
                                        <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="lower-box">
                                <h3><a href="agents-listing-grid.html">sawsan jamil</a></h3>
                                <div class="designation">Real Estate Agent</div>
                            </div>
                        </div>
                    </div>
                    <div class="team-block col-sm-6 col-md-4 col-lg-4 col-xl-2 pb-none" data-aos="fade-up" data-aos-delay="550">
                        <div class="inner-box team-details">
                            <div class="image team-head">
                                <a href="agents-listing-grid.html"><img src="images/team/team-image-2.jpg" alt="" /></a>
                                <div class="team-hover">
                                    <ul class="team-social">
                                        <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="lower-box">
                                <h3><a href="agents-listing-grid.html">ali mohammed</a></h3>
                                <div class="designation">Real Estate Agent</div>
                            </div>
                        </div>
                    </div>
                    <div class="team-block col-sm-6 col-md-4 col-lg-4 col-xl-2 pb-none" data-aos="fade-up" data-aos-delay="650">
                        <div class="inner-box team-details">
                            <div class="image team-head">
                                <a href="agents-listing-grid.html"><img src="images/team/team-image-7.jpg" alt="" /></a>
                                <div class="team-hover">
                                    <ul class="team-social">
                                        <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="lower-box">
                                <h3><a href="agents-listing-grid.html">salam saleem</a></h3>
                                <div class="designation">Real Estate Agent</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- END SECTION AGENTS -->

        <!-- START SECTION TESTIMONIALS -->
        <section class="testimonials bg-white-2 rec-pro">
            <div class="container-fluid">
                <div class="sec-title">
                    <h2><span>Clients </span>Testimonials</h2>
                    <p>We collect reviews from our customers.</p>
                </div>
                <div class="owl-carousel job_clientSlide">
                    <div class="singleJobClinet" data-aos="zoom-in" data-aos-delay="150">
                        <p>
                            It took a lot of time and effort and I found the right home in the right place.
                        </p>
                        <div class="detailJC">
                            <span><img src="images/testimonials/ts-1.jpg" alt=""/></span>
                            <h5>sawsan jamil</h5>
                            <p>Irbid</p>
                        </div>
                    </div>
                    <div class="singleJobClinet" data-aos="zoom-in" data-aos-delay="250">
                        <p>
                            It took a lot of time and effort and I found the right home in the right place                        </p>
                        <div class="detailJC">
                            <span><img src="images/testimonials/ts-2.jpg" alt=""/></span>
                            <h5>Mohammed ali</h5>
                            <p>Los Angeles</p>
                        </div>
                    </div>
                    <div class="singleJobClinet" data-aos="zoom-in" data-aos-delay="350">
                        <p>
                            It took a lot of time and effort and I found the right home in the right place                        </p>
                        <div class="detailJC">
                            <span><img src="images/testimonials/ts-3.jpg" alt=""/></span>
                            <h5>Mary saleem</h5>
                            <p>Irbid</p>
                        </div>
                    </div>
                    <div class="singleJobClinet">
                        <p>
                            It took a lot of time and effort and I found the right home in the right place                        </p>
                        <div class="detailJC">
                            <span><img src="images/testimonials/ts-4.jpg" alt=""/></span>
                            <h5>sawsan jamil</h5>
                            <p>Irbid</p>
                        </div>
                    </div>
                    <div class="singleJobClinet">
                        <p>
                            It took a lot of time and effort and I found the right home in the right place,
                        </p>
                        <div class="detailJC">
                            <span><img src="images/testimonials/ts-5.jpg" alt=""/></span>
                            <h5>kamal ahmad</h5>
                            <p>Aidoun</p>
                        </div>
                    </div>
                    <div class="singleJobClinet">
                        <p>
                            It took a lot of time and effort and I found the right home in the right place
                        </p>
                        <div class="detailJC">
                            <span><img src="images/testimonials/ts-6.jpg" alt=""/></span>
                            <h5>mohammed jamil</h5>
                            <p>Irbid</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END SECTION TESTIMONIALS -->

        <!-- STAR SECTION PARTNERS -->
        <div class="partners bg-white rec-pro">
            <div class="container-fluid">
                <div class="sec-title">
                    <h2><span>Our </span>Partners</h2>
                    <p>The Companies That Represent Us.</p>
                </div>
                <div class="owl-carousel style2">
                    <div class="owl-item" data-aos="fade-up"><img src="images/partners/11.jpg" alt=""></div>
                    <div class="owl-item" data-aos="fade-up"><img src="images/partners/12.jpg" alt=""></div>
                    <div class="owl-item" data-aos="fade-up"><img src="images/partners/13.jpg" alt=""></div>
                    <div class="owl-item" data-aos="fade-up"><img src="images/partners/14.jpg" alt=""></div>
                    <div class="owl-item" data-aos="fade-up"><img src="images/partners/15.jpg" alt=""></div>
                    <div class="owl-item" data-aos="fade-up"><img src="images/partners/16.jpg" alt=""></div>
                    <div class="owl-item" data-aos="fade-up"><img src="images/partners/17.jpg" alt=""></div>
                    <div class="owl-item" data-aos="fade-up"><img src="images/partners/11.jpg" alt=""></div>
                    <div class="owl-item" data-aos="fade-up"><img src="images/partners/12.jpg" alt=""></div>
                    <div class="owl-item" data-aos="fade-up"><img src="images/partners/13.jpg" alt=""></div>
                </div>
            </div>
        </div>
        <!-- END SECTION PARTNERS -->

        @endsection

      @section('registration')
          
      

        <!--register form -->
        <div class="login-and-register-form modal">
            <div class="main-overlay"></div>
            <div class="main-register-holder">
                <div class="main-register fl-wrap">
                    <div class="close-reg"><i class="fa fa-times"></i></div>
                    <h3>Welcome to <span><strong>SAKAN</strong></span></h3>
                    <!-- <div class="soc-log fl-wrap">
                        <p>Login</p>
                        <a href="#" class="facebook-log"><i class="fa fa-facebook-official"></i>Log in with Facebook</a>
                        <a href="#" class="twitter-log"><i class="fa fa-twitter"></i> Log in with Twitter</a>
                    </div> -->
                    <!-- <div class="log-separator fl-wrap"><span>Or</span></div> -->
                    <div id="tabs-container">
                       
                        <div class="tab">
                            <div id="tab-1" class="tab-contents">
                                <div class="custom-form">
                                    <form method="post" name="registerform">
                                        <label>Username or Email Address * </label>
                                        <input name="email" type="text" onClick="this.select()" value="">
                                        <label>Password * </label>
                                        <input name="password" type="password" onClick="this.select()" value="">
                                        <p>Dont have account <a href="register.html">Register now</a></p>
                                        <button type="submit" class="log-submit-btn"><span>Log In</span></button>
                                        <div class="clearfix"></div>
                                        <div class="filter-tags">
                                            <input id="check-a" type="checkbox" name="check">
                                            <label for="check-a">Remember me</label>
                                        </div>
                                    </form>
                                    <div class="lost_password">
                                        <a href="#">Lost Your Password?</a>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="tab">
                                <div id="tab-2" class="tab-contents">
                                    <div class="custom-form">
                                        <form method="post" name="registerform" class="main-register-form" id="main-register-form2">
                                            <label>First Name * </label>
                                            <input name="name" type="text" onClick="this.select()" value="">
                                            <label>Second Name *</label>
                                            <input name="name2" type="text" onClick="this.select()" value="">
                                            <label>Email Address *</label>
                                            <input name="email" type="text" onClick="this.select()" value="">
                                            <label>Password *</label>
                                            <input name="password" type="password" onClick="this.select()" value="">
                                            <button type="submit" class="log-submit-btn"><span>Register</span></button>
                                        </form>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                     <div class="soc-log fl-wrap">
                        <p>Login</p>
                        <a href="#" class="facebook-log"><i class="fa fa-facebook-official"></i>Log in with Facebook</a>
                        <a href="#" class="twitter-log"><i class="fa fa-twitter"></i> Log in with Twitter</a>
                    </div>
                </div>
            </div>
        </div>
        <!--register form end -->

        <!-- START PRELOADER -->
        <div id="preloader">
            <div id="status">
                <div class="status-mes"></div>
            </div>
        </div>
        <!-- END PRELOADER -->

        @endsection

        <!-- ARCHIVES JS -->
      

        @section('script')
            
      
        <script>
            $(window).on('scroll load', function() {
                $("#header.cloned #logo img").attr("src", $('#header #logo img').attr('data-sticky-logo'));
            });

        </script>

        <!-- Slider Revolution scripts -->
        <script src={{ asset('revolution/js/jquery.themepunch.tools.min.js')}}></script>
        <script src={{ asset('revolution/js/jquery.themepunch.revolution.min.js')}}></script>

        <script>
            var typed = new Typed('.typed', {
                strings: ["House ^2000", "Apartment ^2000", "Plaza ^4000"],
                smartBackspace: false,
                loop: true,
                showCursor: true,
                cursorChar: "|",
                typeSpeed: 50,
                backSpeed: 30,
                startDelay: 800
            });

        </script>

        <script>
            $('.slick-lancers').slick({
                infinite: false,
                slidesToShow: 4,
                slidesToScroll: 1,
                dots: true,
                arrows: false,
                adaptiveHeight: true,
                responsive: [{
                    breakpoint: 1292,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        dots: true,
                        arrows: false
                    }
                }, {
                    breakpoint: 993,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        dots: true,
                        arrows: false
                    }
                }, {
                    breakpoint: 769,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        dots: true,
                        arrows: false
                    }
                }]
            });

        </script>

        <script>
            $('.job_clientSlide').owlCarousel({
                items: 2,
                loop: true,
                margin: 30,
                autoplay: false,
                nav: true,
                smartSpeed: 1000,
                slideSpeed: 1000,
                navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
                dots: false,
                responsive: {
                    0: {
                        items: 1
                    },
                    991: {
                        items: 3
                    }
                }
            });

        </script>

        <script>
            $('.style2').owlCarousel({
                loop: true,
                margin: 0,
                dots: false,
                autoWidth: false,
                autoplay: true,
                autoplayTimeout: 5000,
                responsive: {
                    0: {
                        items: 2,
                        margin: 20
                    },
                    400: {
                        items: 2,
                        margin: 20
                    },
                    500: {
                        items: 3,
                        margin: 20
                    },
                    768: {
                        items: 4,
                        margin: 20
                    },
                    992: {
                        items: 5,
                        margin: 20
                    },
                    1000: {
                        items: 7,
                        margin: 20
                    }
                }
            });

        </script>

        <script>
            $(".dropdown-filter").on('click', function() {

                $(".explore__form-checkbox-list").toggleClass("filter-block");

            });

        </script>
  @endsection
       
