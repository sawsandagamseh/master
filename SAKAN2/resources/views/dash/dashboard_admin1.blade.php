@extends('dash\layout_dash\master_dash')
       @section('content')
        <!-- START SECTION DASHBOARD -->
        <section class="user-page section-padding">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-12 col-xs-12 pl-0 pr-0 user-dash">
                        @endsection
                        {{-- sid bar --}}

                        @section('content2')
                    </div>
                    <div class="col-lg-9 col-md-12 col-xs-12 pl-0 user-dash2">
                       <div class="col-lg-12 mobile-dashbord dashbord">
                            <div class="dashboard_navigationbar dashxl">
                       @endsection
                                {{-------------Dropdown  ------------}}
                        @section('content3')
                            </div>
                        </div>
                        <div class="dashborad-box stat bg-white">
                            <h4 class="title">Manage Dashboard</h4>
                            <div class="section-body">
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 col-xs-12 dar pro mr-3">
                                        <div class="item">
                                            <div class="icon">
                                                <i class="fa fa-list" aria-hidden="true"></i>
                                            </div>
                                            <div class="info">
                                                <h6 class="number">345</h6>
                                                <p class="type ml-1">Published Property</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-xs-12 dar rev mr-3">
                                        <div class="item">
                                            <div class="icon">
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <div class="info">
                                                <h6 class="number">116</h6>
                                                <p class="type ml-1">Total Reviews</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 dar com mr-3">
                                        <div class="item mb-0">
                                            <div class="icon">
                                                <i class="fas fa-comments"></i>
                                            </div>
                                            <div class="info">
                                                <h6 class="number">223</h6>
                                                <p class="type ml-1">Messages</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 dar booked">
                                        <div class="item mb-0">
                                            <div class="icon">
                                                <i class="fas fa-heart"></i>
                                            </div>
                                            <div class="info">
                                                <h6 class="number">432</h6>
                                                <p class="type ml-1">Times Bookmarked</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dashborad-box">
                            <h4 class="title">Listing</h4>
                            <div class="section-body listing-table">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Listing Name</th>
                                                <th>Date</th>
                                                <th>Rating</th>
                                                <th>Status</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Luxury Restaurant</td>
                                                <td>23 Jan 2020</td>
                                                <td class="rating"><span>5.0</span></td>
                                                <td class="status"><span class=" active">Active</span></td>
                                                <td class="edit"><a href="#"><i class="fa fa-pencil"></i></a></td>
                                                <td><a href="#"><i class="far fa-trash-alt"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>Gym in Town</td>
                                                <td>11 Feb 2020</td>
                                                <td class="rating"><span>4.5</span></td>
                                                <td class="status"><span class="active">Active</span></td>
                                                <td class="edit"><a href="#"><i class="fa fa-pencil"></i></a></td>
                                                <td><a href="#"><i class="far fa-trash-alt"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>Cafe in Boston</td>
                                                <td>09 Jan 2020</td>
                                                <td class="rating"><span>5.0</span></td>
                                                <td class="status"><span class="non-active">Non-Active</span></td>
                                                <td class="edit"><a href="#"><i class="fa fa-pencil"></i></a></td>
                                                <td><a href="#"><i class="far fa-trash-alt"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="pb-0">Car Dealer in New York</td>
                                                <td class="pb-0">24 Feb 2018</td>
                                                <td class="rating pb-0"><span>4.5</span></td>
                                                <td class="status pb-0"><span class="active">Active</span></td>
                                                <td class="edit pb-0"><a href="#"><i class="fa fa-pencil"></i></a></td>
                                                <td><a href="#"><i class="far fa-trash-alt"></i></a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="dashborad-box">
                            <h4 class="title">Message</h4>
                            <div class="section-body">
                                <div class="messages">
                                    <div class="message">
                                        <div class="thumb">
                                            <img class="img-fluid" src="images/testimonials/ts-1.jpg" alt="">
                                        </div>
                                        <div class="body">
                                            <h6>Mary Smith</h6>
                                            <p class="post-time">22 Minutes ago</p>
                                            <p class="content mb-0 mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
                                            <div class="controller">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                                    <li><a href="#"><i class="far fa-trash-alt"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="message">
                                        <div class="thumb">
                                            <img class="img-fluid" src="images/testimonials/ts-2.jpg" alt="">
                                        </div>
                                        <div class="body">
                                            <h6>Karl Tyron</h6>
                                            <p class="post-time">23 Minutes ago</p>
                                            <p class="content mb-0 mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
                                            <div class="controller">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                                    <li><a href="#"><i class="far fa-trash-alt"></i></a>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="message">
                                        <div class="thumb">
                                            <img class="img-fluid" src="images/testimonials/ts-3.jpg" alt="">
                                        </div>
                                        <div class="body">
                                            <h6>Lisa Willis</h6>
                                            <p class="post-time">53 Minutes ago</p>
                                            <p class="content mb-0 mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
                                            <div class="controller">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                                    <li><a href="#"><i class="far fa-trash-alt"></i></a>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dashborad-box">
                            <h4 class="title">Review</h4>
                            <div class="section-body">
                                <div class="reviews">
                                    <div class="review">
                                        <div class="thumb">
                                            <img class="img-fluid" src="images/testimonials/ts-4.jpg" alt="">
                                        </div>
                                        <div class="body">
                                            <h5>Family House</h5>
                                            <h6>Mary Smith</h6>
                                            <p class="post-time">10 hours ago</p>
                                            <p class="content mb-0 mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
                                            <ul class="starts mb-0">
                                                <li><i class="fa fa-star"></i>
                                                </li>
                                                <li><i class="fa fa-star"></i>
                                                </li>
                                                <li><i class="fa fa-star"></i>
                                                </li>
                                                <li><i class="fa fa-star"></i>
                                                </li>
                                                <li><i class="fa fa-star-o"></i>
                                                </li>
                                            </ul>
                                            <div class="controller">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                                    <li><a href="#"><i class="far fa-trash-alt"></i></a>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="review">
                                        <div class="thumb">
                                            <img class="img-fluid" src="images/testimonials/ts-5.jpg" alt="">
                                        </div>
                                        <div class="body">
                                            <h5>Bay Apartment</h5>
                                            <h6>Karl Tyron</h6>
                                            <p class="post-time">22 hours ago</p>
                                            <p class="content mb-0 mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
                                            <ul class="starts mb-0">
                                                <li><i class="fa fa-star"></i>
                                                </li>
                                                <li><i class="fa fa-star"></i>
                                                </li>
                                                <li><i class="fa fa-star"></i>
                                                </li>
                                                <li><i class="fa fa-star"></i>
                                                </li>
                                                <li><i class="fa fa-star-o"></i>
                                                </li>
                                            </ul>
                                            <div class="controller">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                                    <li><a href="#"><i class="far fa-trash-alt"></i></a>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="review">
                                        <div class="thumb">
                                            <img class="img-fluid" src="images/testimonials/ts-6.jpg" alt="">
                                        </div>
                                        <div class="body">
                                            <h5>Family House Villa</h5>
                                            <h6>Lisa Willis</h6>
                                            <p class="post-time">51 hours ago</p>
                                            <p class="content mb-0 mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
                                            <ul class="starts mb-0">
                                                <li><i class="fa fa-star"></i>
                                                </li>
                                                <li><i class="fa fa-star"></i>
                                                </li>
                                                <li><i class="fa fa-star"></i>
                                                </li>
                                                <li><i class="fa fa-star"></i>
                                                </li>
                                                <li><i class="fa fa-star-o"></i>
                                                </li>
                                            </ul>
                                            <div class="controller">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                                    <li><a href="#"><i class="far fa-trash-alt"></i></a>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dashborad-box mb-0">
                            <h4 class="heading pt-0">Personal Information</h4>
                            <div class="section-inforamation">
                                <form>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>First Name</label>
                                                <input type="text" class="form-control" placeholder="Enter your First name">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Last Name</label>
                                                <input type="text" class="form-control" placeholder="Enter your Last name">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Email Address</label>
                                                <input type="text" class="form-control" placeholder="Ex: example@domain.com">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Phone Number</label>
                                                <input type="text" class="form-control" placeholder="Ex: +1-800-7700-00">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label>Address</label>
                                                <textarea name="address" class="form-control" placeholder="Write your address here"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label>About Yourself</label>
                                                <textarea name="address" class="form-control" placeholder="Write about userself"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label>ID numder</label>
                                                <input type="number" name="ID" class="form-control" placeholder="Write Your Id"></input>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="password-section">
                                        <h6>Update Password</h6>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>New Password</label>
                                                    <input type="password" class="form-control" placeholder="Write new password">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Repeat Password</label>
                                                    <input type="password" class="form-control" placeholder="Write same password again">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-lg mt-2">Submit</button>
                                </form>
                            </div>
                        </div>
                        <!-- START FOOTER -->
        @endsection              
        @section('script')
            
     
        <script>
            $(".header-user-name").on("click", function() {
                $(".header-user-menu ul").toggleClass("hu-menu-vis");
                $(this).toggleClass("hu-menu-visdec");
            });

        </script>

        <!-- MAIN JS -->
        <script src="js/script.js"></script>

    </div>
    <!-- Wrapper / End -->
</body>


<!-- Mirrored from code-theme.com/html/findhouses/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 06 Aug 2023 08:00:27 GMT -->
</html>
@endsection