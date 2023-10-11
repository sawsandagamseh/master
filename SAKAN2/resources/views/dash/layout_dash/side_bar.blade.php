{{-- <div class="col-lg-3 col-md-12 col-xs-12 pl-0 pr-0 user-dash">
    <div class="user-profile-box mb-0">
        <div class="sidebar-header"><img src="images/logo-blue.svg" alt="header-logo2.png"> </div>
        <div class="header clearfix">
            <img src="images/testimonials/ts-1.jpg" alt="avatar" class="img-fluid profile-img">
        </div>
        <div class="active-user">
            <h2>Mary Smith</h2>
        </div>
        <div class="detail clearfix">
            <ul class="mb-0">
                <li>
                    <a class="active" href="dashboard.html">
                        <i class="fa fa-map-marker"></i> Dashboard
                    </a>
                </li>
                <li>
                    <a href="user-profile.html">
                        <i class="fa fa-user"></i>Profile
                    </a>
                </li>
                <li>
                    <a href="my-listings.html">
                        <i class="fa fa-list" aria-hidden="true"></i>My Properties
                    </a>
                </li>
                <li>
                    <a href="favorited-listings.html">
                        <i class="fa fa-heart" aria-hidden="true"></i>Favorited Properties
                    </a>
                </li>
                <li>
                    <a href="add-property.html">
                        <i class="fa fa-list" aria-hidden="true"></i>Add Property
                    </a>
                </li>
                <li>
                    <a href="payment-method.html">
                        <i class="fas fa-credit-card"></i>Payments
                    </a>
                </li>
                <li>
                    <a href="invoice.html">
                        <i class="fas fa-paste"></i>Invoices
                    </a>
                </li>
                <li>
                    <a href="change-password.html">
                        <i class="fa fa-lock"></i>Change Password
                    </a>
                </li>
                <li>
                    <a href="index.html">
                        <i class="fas fa-sign-out-alt"></i>Log Out
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div> --}}


<div class="user-profile-box mb-0">
    <div class="sidebar-header"><img src="images/logo-blue.svg" alt="header-logo2.png"> </div>
    <div class="header clearfix">
        <img src="images/testimonials/ts-1.jpg" alt="avatar" class="img-fluid profile-img">
    </div>
    <div class="active-user">
        <h2>Mary Smith</h2>
    </div>
    <div class="detail clearfix">
        <ul class="mb-0">
            <li>
                <a class="active" href="dashboard_admin">
                
                    <i class="fa fa-map-marker"></i> Dashboard
                </a>
            </li>
            <li>
                <a href="admin_profile">
                    <i class="fa fa-user"></i>Profile
                </a>
            </li>
            <li>
                <a href="admin_my_listings">
                    <i class="fa fa-list" aria-hidden="true"></i>My Properties
                </a>
            </li>
            <li>
                <a href="all_subscription">
                    <i class="fa fa-list" aria-hidden="true"></i>Subscription
                </a>
            </li>
            {{-- <li>
                <a href="favorited-listings">
                    <i class="fa fa-heart" aria-hidden="true"></i>Favorited Properties
                </a>
            </li> --}}
            <li>
                <a href="{{ route('admin.index2') }}">
                    <i class="fa fa-user"></i>Admin
                </a>
            </li>
            <li>
                <a href="{{ route('customer.index') }}">
                    <i class="fa fa-user"></i>Customer
                </a>
            </li>
            <li>
                <a href="{{ route('agent.index') }}">
                    <i class="fa fa-user"></i>Agent
                </a>
            </li>
            {{-- <li>
                <a href="admin_add_property">
                    <i class="fa fa-list" aria-hidden="true"></i>Add Property
                </a>
            </li> --}}
            <li>
                <a href="admin_payment">
                    <i class="fas fa-credit-card"></i>Payments
                </a>
            </li>
            <li>
                <a href="admin_invoice">
                    <i class="fas fa-paste"></i>Invoices
                </a>
            </li>
            <li>
                <a href="admin_chang_password">
                    <i class="fa fa-lock"></i>Change Password
                </a>
            </li>
            <li>
                <a href="index.html">
                    <i class="fas fa-sign-out-alt"></i>Log Out
                </a>
            </li>
        </ul>
    </div>
</div>