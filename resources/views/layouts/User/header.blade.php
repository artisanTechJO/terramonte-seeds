<!-- header section start -->
<div>
    <div class="tm-cover d-none d-lg-block d-xl-block">

    </div>
</div>
<header class="header">
    <div class="header-top" style="display: none">
        <div class="mobile-header d-flex justify-content-between align-items-center d-xl-none">
            <div class="all-catagory-option mobile-device" style="display: none">
                <a class="bar-btn"><i class="fas fa-bars"></i><span class="ml-2 d-none d-md-inline">All crops</span></a>
                <a class="close-btn"><i class="fas fa-times"></i><span class="ml-2 d-none d-md-inline">All crops</span></a>
            </div>
            <a href="{{url('/')}}" class="logo"><img style="max-width: 115px;    height: 127px;" src="/User/assets/images/TmLogo2.png" alt="logo"></a>
            <!-- search select -->
            <div class="text-center mobile-search">
                <button type="button" data-toggle="modal" data-target="#search-select-id"><i class="fas fa-search"></i></button>
            </div>
            <!-- menubar -->
            <div>
                <button class="menu-bar" type="button" data-toggle="modal" data-target="#menu-id">
                    Home<i class="fas fa-caret-down"></i>
                </button>
            </div>

        </div>
        <div class="d-none d-xl-flex row align-items-center" style="display: none">
            <div class="col-5 col-md-2">
                <a href="{{url('/')}}" class="logo"><img style="width: 170px;  height: 127px;" src="/User/assets/images/TmLogo2.png" alt="logo"></a>
            </div>
            <div class="col-5 col-md-9 col-lg-5">

{{--                <div class="select-search-option d-none d-md-flex">--}}
{{--                    <form action="#" class="search-form">--}}
{{--                        <input type="text" name="search" placeholder="Search for Products">--}}
{{--                        <button class="submit-btn"><i class="fas fa-search"></i></button>--}}
{{--                    </form>--}}
{{--                </div>--}}
            </div>
        </div>
    </div>
    <div class="modal fade" id="menu-id" tabindex="-1" aria-labelledby="menu-id" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <ul class="menu d-xl-flex flex-wrap pl-0 list-unstyled">
                        <li class="item-has-children"><a data-toggle="collapse" href="#mainmenuid1" role="button" aria-expanded="false" aria-controls="catagory-widget1"><span>Home</span> <i class="fas fa-angle-down"></i></a>
                            <ul class="submenu collapse" id="mainmenuid1">
                                <li><a href="home-default.html">Home Default</a></li>
                                <li><a href="index-icon.html">Home Default2</a></li>
                                <li><a href="index.html">Home Sticky Sidebar</a></li>
                                <li><a href="home-search.html">Home Search</a></li>
                                <li><a href="home-slider.html">Home Slider</a></li>
                                <li><a href="home-slider2.html">Home Slider2</a></li>
                                <li><a href="home7.html">Home Seven</a></li>
                            </ul>
                        </li>
                        <li><a href="#">New Products</a></li>
                        <li><a data-toggle="collapse" href="#megamenu-main" role="button" aria-expanded="false" aria-controls="catagory-widget1"><span>Featured Products</span> <i class="fas fa-angle-down"></i></a>
                            <ul class=" collapse" id="megamenu-main">
                                <li><a data-toggle="collapse" href="#megamenu-main01" role="button" aria-expanded="false" aria-controls="megamenu-main01"><span>Vegetables</span> <i class="fas fa-angle-down"></i></a>
                                    <ul class="submenu collapse" id="megamenu-main01">
                                        <li><a href="product-list.html">Artichoke.</a></li>
                                        <li><a href="product-list.html">Aubergune</a></li>
                                        <li><a href="product-list.html">Asparagus</a></li>
                                        <li><a href="product-list.html">Broccoflower</a></li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" href="#megamenu-main02" role="button" aria-expanded="false" aria-controls="megamenu-main02"><span>Fruits</span> <i class="fas fa-angle-down"></i></a>
                                    <ul class="submenu collapse" id="megamenu-main02">
                                        <li><a href="product-list.html">Artichoke.</a></li>
                                        <li><a href="product-list.html">Aubergune</a></li>
                                        <li><a href="product-list.html">Asparagus</a></li>
                                        <li><a href="product-list.html">Broccoflower</a></li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" href="#megamenu-main03" role="button" aria-expanded="false" aria-controls="megamenu-main03"><span>Salads</span> <i class="fas fa-angle-down"></i></a>
                                    <ul class="submenu collapse" id="megamenu-main03">
                                        <li><a href="product-list.html">Artichoke.</a></li>
                                        <li><a href="product-list.html">Aubergune</a></li>
                                        <li><a href="product-list.html">Asparagus</a></li>
                                        <li><a href="product-list.html">Broccoflower</a></li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" href="#megamenu-main04" role="button" aria-expanded="false" aria-controls="megamenu-main04"><span>Health Care</span> <i class="fas fa-angle-down"></i></a>
                                    <ul class="submenu collapse" id="megamenu-main04">
                                        <li><a href="product-list.html">Artichoke.</a></li>
                                        <li><a href="product-list.html">Aubergune</a></li>
                                        <li><a href="product-list.html">Asparagus</a></li>
                                        <li><a href="product-list.html">Broccoflower</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="item-has-children"><a data-toggle="collapse" href="#mainmenuid2" role="button" aria-expanded="false" aria-controls="mainmenuid2"><span>Pages</span> <i class="fas fa-angle-down"></i></a>
                            <ul class="submenu collapse" id="mainmenuid2">
                                <li><a href="about.html">About</a></li>
                                <li><a href="contact.html">Contact</a></li>
                                <li class="item-has-children"><a data-toggle="collapse" href="#mobile-product1" role="button" aria-expanded="false" aria-controls="mobile-product1"><span>Products</span> <i class="fas fa-angle-down"></i></a>
                                    <ul class="submenu collapse" id="mobile-product1">
                                        <li><a href="product-list.html">Product List</a></li>
                                        <li><a href="product-leftsidebar.html">Product leftsidebar</a></li>
                                        <li><a href="product-fullwidth.html">Product Fullwidth</a></li>
                                        <li><a href="brand-product.html">Brand Page</a></li>
                                        <li><a href="product-detail.html">Product Details</a></li>
                                    </ul>
                                </li>
                                <li class="item-has-children"><a data-toggle="collapse" href="#mobile-dashboard1" role="button" aria-expanded="false" aria-controls="mobile-dashboard1"><span>Dashboard1</span> <i class="fas fa-angle-down"></i></a>
                                    <ul class="submenu collapse" id="mobile-dashboard1">
                                        <li><a href="user-dashbord.html">User Dashboard</a></li>
                                        <li><a href="profile.html">Profile</a></li>
                                        <li><a href="track-order.html">Track Order</a></li>
                                        <li><a href="wishlist.html">Wish List</a></li>
                                    </ul>
                                </li>
                                <li class="item-has-children"><a data-toggle="collapse" href="#mobile-dashboard2" role="button" aria-expanded="false" aria-controls="mobile-dashboard2"><span>Dashboard2</span> <i class="fas fa-angle-down"></i></a>
                                    <ul class="submenu collapse" id="mobile-dashboard2">
                                        <li><a href="dashboard.html">My Orders</a></li>
                                        <li><a href="dashboard-account.html">Accounts</a></li>
                                        <li><a href="dashboard-address-book.html">Address Book</a></li>
                                        <li><a href="dashboard-order-cancel.html">Order Cancel</a></li>
                                        <li><a href="dashboard-order-process.html">Order Process</a></li>
                                        <li><a href="dashboard-password-change.html">Password Change</a></li>
                                        <li><a href="dashboard-wishlist.html">whistlist</a></li>
                                    </ul>
                                </li>
                                <li><a href="faq.html">FAQ</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                                <li><a href="singin.html">SignIn</a></li>
                                <li><a href="signup.html">SignUp</a></li>
                                <li><a href="product-order-success.html">Order Success</a></li>
                                <li><a href="comming-soon.html">Comming Soon</a></li>
                                <li><a href="404-page.html">404 page</a></li>
                            </ul>
                        </li>
                        <li class="item-has-children"><a data-toggle="collapse" href="#mainmenuid3" role="button" aria-expanded="false" aria-controls="mainmenuid3"><span>Blog</span> <i class="fas fa-angle-down"></i></a>
                            <ul class="submenu collapse" id="mainmenuid3">
                                <li><a href="blog.html">Blog full width</a></li>
                                <li><a href="blog-rightsidebar.html">Blog Rightsidebar</a></li>
                                <li><a href="single.html">Blog Single</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.html">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom">
        <div class="row m-0 align-items-center mega-menu-relative">
            <div class="col-md-2 p-0 d-none d-xl-block">
                <div class="all-catagory-option" style="display: none">
                    <a class="bar-btn"><i class="fas fa-bars"></i>All crops </a>
                    <a class="close-btn"><i class="fas fa-times"></i>All crops</a>
                </div>
                <img style="width: 170px;  height: 127px;" src="/User/assets/images/TmLogo2.png" alt="logo">
            </div>
            <div class="col-md-10">
                <div class="menu-area d-none d-xl-flex justify-content-between align-items-center">
                    <ul class="menu d-xl-flex flex-wrap list-unstyled">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li><a href="{{route('about-us.index')}}">About Us</a></li>
                        <li><a href="{{route('events')}}">Event's</a></li>
                        <li><a href="{{url('/crops')}}">crops</a></li>
                        <li><a href="{{url('/new-crops')}}">New crops</a></li>
                        <li><a href="{{url('/special-crops')}}">Special crops</a></li>
                        <li><a href="{{route('contact')}}">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header section end -->
