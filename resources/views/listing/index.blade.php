@extends('layout')

<head>
    <meta charset="utf-8">
    <title>Homelengo - Real Estate HTML Template</title>
    <meta name="keywords" content="HTML, CSS, JavaScript, Bootstrap">
    <meta name="description" content="Real Estate HTML Template">

    <meta name="author" content="themesflat.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

   <!-- font -->
   <link rel="stylesheet" href="fonts/fonts.css">
   <!-- Icons -->
   <link rel="stylesheet" href="fonts/font-icons.css">
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="css/swiper-bundle.min.css">
   <link rel="stylesheet" href="css/animate.css">
   <link rel="stylesheet" type="text/css" href="css/styles.css"/>

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="images/logo/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="images/logo/favicon.png">

</head>

<body class="body">

    <!-- RTL -->
   <a href="javascript:void(0);" id="toggle-rtl" class="tf-btn primary">RTL</a>
   <!-- /RTL  -->
    
    <!-- preload -->
    <div class="preload preload-container">
        <div class="preload-logo">
            <div class="spinner"></div>
            <span class="icon icon-villa-fill"></span>
        </div>
    </div>
    <!-- /preload -->

    <div id="wrapper">
        <div id="pagee" class="clearfix">
            <!-- Main Header -->
            <header class="main-header fixed-header">
                <!-- Header Lower -->
                <div class="header-lower">
                    <div class="row">                      
                        <div class="col-lg-12">         
                            <div class="inner-header">
                                <div class="inner-header-left">
                                    <div class="logo-box flex">
                                        <div class="logo"><a href="index-2.html"><img src="images/logo/logo%402x.png" alt="logo" width="166" height="48"></a></div>
                                    </div>
                                    <div class="nav-outer flex align-center">
                                            <!-- Main Menu -->
                                            <nav class="main-menu show navbar-expand-md">
                                                <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                                                    <ul class="navigation clearfix">
                                                        <li class="dropdown2 home"><a href="#">Home</a>
                                                            <ul>
                                                                <li><a href="index-2.html">Homepage 01</a></li>
                                                                <li><a href="home-02.html">Homepage 02</a></li>
                                                                <li><a href="home-03.html">Homepage 03</a></li>
                                                                <li><a href="home-04.html">Homepage 04</a></li>
                                                                <li><a href="home-05.html">Homepage 05</a></li>
                                                                <li><a href="home-06.html">Homepage 06</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="dropdown2 current"><a href="#">Listing</a>
                                                            <ul>
                                                                <li><a href="property-halfmap-grid.html">Property Half Map Grid</a></li>
                                                                <li><a href="property-halfmap-list.html">Property Half Map List</a></li>
                                                                <li><a href="topmap-grid.html">Find Topmap Grid</a></li>
                                                                <li><a href="topmap-list.html">Find Topmap List</a></li>
                                                                <li><a href="sidebar-grid.html">Find Sidebar Grid</a></li>
                                                                <li class="current"><a href="sidebar-list.html">Find Sidebar List</a></li>
    
                                                            </ul>
                                                        </li>
                                                        <li class="dropdown2"><a href="#">Properties</a>
                                                            <ul>
                                                                <li><a href="property-details-v1.html">Property Details 1</a></li>
                                                                <li><a href="property-details-v2.html">Property Details 2</a></li>
                                                                <li><a href="property-details-v3.html">Property Details 3</a></li>
                                                                <li><a href="property-details-v4.html">Property Details 4</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="dropdown2"><a href="#">Pages</a>
                                                            <ul>
                                                                <li><a href="about-us.html">About Us</a></li>
                                                                <li><a href="our-service.html">Our Services</a></li>
                                                                <li><a href="pricing.html">Pricing</a></li>
                                                                <li><a href="contact.html">Contact Us</a></li>
                                                                <li><a href="faq.html">FAQs</a></li>
                                                                <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                                                
                                                            </ul>
                                                        </li>
                                                        <li class="dropdown2"><a href="#">Blog</a>
                                                            <ul>
                                                                <li><a href="blog.html">Blog Default</a></li>
                                                                <li><a href="blog-grid.html">Blog Grid</a></li>
                                                                <li><a href="blog-detail.html">Blog Post Details</a></li>
                                                            </ul>
                                                        </li>
                                                        
                                                        <li class="dropdown2"><a href="#">Dashboard</a>
                                                            <ul>
                                                                <li><a href="dashboard.html">Dashboard</a></li>
                                                                <li><a href="my-property.html">My Properties</a></li>
                                                                <li><a href="message.html">Message</a></li>
                                                                <li><a href="my-favorites.html">My Favorites</a></li>
                                                                <li><a href="reviews.html">Reviews</a></li>
                                                                <li><a href="my-profile.html">My Profile</a></li>
                                                                <li><a href="add-property.html">Add Property</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </nav>
                                            <!-- Main Menu End-->
                                    </div>
                                </div>
                                <div class="inner-header-right header-account">
                                        <a href="#modalLogin" data-bs-toggle="modal" class="tf-btn btn-line btn-login">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M13.1251 5C13.1251 5.8288 12.7959 6.62366 12.2099 7.20971C11.6238 7.79576 10.8289 8.125 10.0001 8.125C9.17134 8.125 8.37649 7.79576 7.79043 7.20971C7.20438 6.62366 6.87514 5.8288 6.87514 5C6.87514 4.1712 7.20438 3.37634 7.79043 2.79029C8.37649 2.20424 9.17134 1.875 10.0001 1.875C10.8289 1.875 11.6238 2.20424 12.2099 2.79029C12.7959 3.37634 13.1251 4.1712 13.1251 5ZM3.75098 16.765C3.77776 15.1253 4.44792 13.5618 5.61696 12.4117C6.78599 11.2616 8.36022 10.6171 10.0001 10.6171C11.6401 10.6171 13.2143 11.2616 14.3833 12.4117C15.5524 13.5618 16.2225 15.1253 16.2493 16.765C14.2888 17.664 12.1569 18.1279 10.0001 18.125C7.77014 18.125 5.65348 17.6383 3.75098 16.765Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                            Sign in  
                                        </a>
                                        <div class="flat-bt-top">
                                            <a class="tf-btn primary" href="add-property.html">
                                                <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M13.625 14.375V17.1875C13.625 17.705 13.205 18.125 12.6875 18.125H4.5625C4.31386 18.125 4.0754 18.0262 3.89959 17.8504C3.72377 17.6746 3.625 17.4361 3.625 17.1875V6.5625C3.625 6.045 4.045 5.625 4.5625 5.625H6.125C6.54381 5.62472 6.96192 5.65928 7.375 5.72834M13.625 14.375H16.4375C16.955 14.375 17.375 13.955 17.375 13.4375V9.375C17.375 5.65834 14.6725 2.57417 11.125 1.97834C10.7119 1.90928 10.2938 1.87472 9.875 1.875H8.3125C7.795 1.875 7.375 2.295 7.375 2.8125V5.72834M13.625 14.375H8.3125C8.06386 14.375 7.8254 14.2762 7.64959 14.1004C7.47377 13.9246 7.375 13.6861 7.375 13.4375V5.72834M17.375 11.25V9.6875C17.375 8.94158 17.0787 8.22621 16.5512 7.69876C16.0238 7.17132 15.3084 6.875 14.5625 6.875H13.3125C13.0639 6.875 12.8254 6.77623 12.6496 6.60041C12.4738 6.4246 12.375 6.18614 12.375 5.9375V4.6875C12.375 4.31816 12.3023 3.95243 12.1609 3.6112C12.0196 3.26998 11.8124 2.95993 11.5512 2.69876C11.2901 2.4376 10.98 2.23043 10.6388 2.08909C10.2976 1.94775 9.93184 1.875 9.5625 1.875H8.625" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                                Submit Property
                                            </a>
                                        </div>  
                                </div>
                                    
                                <div class="mobile-nav-toggler mobile-button"><span></span></div>
                                    
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Header Lower -->
            
                <!-- Mobile Menu  -->
                <div class="close-btn"><span class="icon flaticon-cancel-1"></span></div>    
                <div class="mobile-menu">
                    <div class="menu-backdrop"></div>                            
                    <nav class="menu-box">
                        <div class="nav-logo"><a href="index-2.html"><img src="images/logo/logo%402x.png" alt="nav-logo" width="174" height="44"></a></div>
                        <div class="bottom-canvas">
                            <div class="login-box flex align-center">
                                <a href="#modalLogin" data-bs-toggle="modal">Login</a>
                                <span>/</span>
                                <a href="#modalRegister" data-bs-toggle="modal">Register</a>
                            </div>
                            <div class="menu-outer"></div>
                            <div class="button-mobi-sell">
                                <a class="tf-btn primary" href="add-property.html">Submit Property</a>
                            </div> 
                            <div class="mobi-icon-box">
                                <div class="box d-flex align-items-center">
                                    <span class="icon icon-phone2"></span>
                                    <div>1-333-345-6868</div>
                                </div>
                                <div class="box d-flex align-items-center">
                                    <span class="icon icon-mail"></span>
                                    <div>themesflat@gmail.com</div>
                                </div>
                            </div>
                        </div>
                    </nav>                
                </div>
                <!-- End Mobile Menu -->
            
            </header>
            <!-- End Main Header -->
           
            <section class="flat-section flat-recommended flat-sidebar">
                <div class="container">
                    <div class="box-title-listing">
                        <div class="box-left">
                            <h3 class="fw-8">Property Listing</h3>
                            <p class="text">There are currently 164,814 properties.</p>
                        </div>
                        <div class="box-filter-tab">
                            <ul class="nav-tab-filter" role="tablist">
                                <li class="nav-tab-item" role="presentation">   
                                    <a href="#gridLayout" class="nav-link-item"  data-bs-toggle="tab">
                                        <svg class="icon" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4.54883 5.90508C4.54883 5.1222 5.17272 4.5 5.91981 4.5C6.66686 4.5 7.2908 5.12221 7.2908 5.90508C7.2908 6.68801 6.66722 7.3101 5.91981 7.3101C5.17241 7.3101 4.54883 6.68801 4.54883 5.90508Z" stroke="#A3ABB0"/>
                                            <path d="M10.6045 5.90508C10.6045 5.12221 11.2284 4.5 11.9755 4.5C12.7229 4.5 13.3466 5.1222 13.3466 5.90508C13.3466 6.68789 12.7227 7.3101 11.9755 7.3101C11.2284 7.3101 10.6045 6.68794 10.6045 5.90508Z" stroke="#A3ABB0"/>
                                            <path d="M19.4998 5.90514C19.4998 6.68797 18.8757 7.31016 18.1288 7.31016C17.3818 7.31016 16.7578 6.68794 16.7578 5.90508C16.7578 5.12211 17.3813 4.5 18.1288 4.5C18.8763 4.5 19.4998 5.12215 19.4998 5.90514Z" stroke="#A3ABB0"/>
                                            <path d="M7.24249 12.0098C7.24249 12.7927 6.61849 13.4148 5.87133 13.4148C5.12411 13.4148 4.5 12.7926 4.5 12.0098C4.5 11.2268 5.12419 10.6045 5.87133 10.6045C6.61842 10.6045 7.24249 11.2267 7.24249 12.0098Z" stroke="#A3ABB0"/>
                                            <path d="M13.2976 12.0098C13.2976 12.7927 12.6736 13.4148 11.9266 13.4148C11.1795 13.4148 10.5557 12.7928 10.5557 12.0098C10.5557 11.2266 11.1793 10.6045 11.9266 10.6045C12.6741 10.6045 13.2976 11.2265 13.2976 12.0098Z" stroke="#A3ABB0"/>
                                            <path d="M19.4516 12.0098C19.4516 12.7928 18.828 13.4148 18.0807 13.4148C17.3329 13.4148 16.709 12.7926 16.709 12.0098C16.709 11.2268 17.3332 10.6045 18.0807 10.6045C18.8279 10.6045 19.4516 11.2266 19.4516 12.0098Z" stroke="#A3ABB0"/>
                                            <path d="M4.54297 18.0945C4.54297 17.3116 5.16709 16.6895 5.9143 16.6895C6.66137 16.6895 7.28523 17.3114 7.28523 18.0945C7.28523 18.8776 6.66139 19.4996 5.9143 19.4996C5.16714 19.4996 4.54297 18.8771 4.54297 18.0945Z" stroke="#A3ABB0"/>
                                            <path d="M10.5986 18.0945C10.5986 17.3116 11.2227 16.6895 11.97 16.6895C12.7169 16.6895 13.3409 17.3115 13.3409 18.0945C13.3409 18.8776 12.7169 19.4996 11.97 19.4996C11.2225 19.4996 10.5986 18.8772 10.5986 18.0945Z" stroke="#A3ABB0"/>
                                            <path d="M16.752 18.0945C16.752 17.3115 17.376 16.6895 18.1229 16.6895C18.8699 16.6895 19.4939 17.3115 19.4939 18.0945C19.4939 18.8776 18.8702 19.4996 18.1229 19.4996C17.376 19.4996 16.752 18.8772 16.752 18.0945Z" stroke="#A3ABB0"/>
                                        </svg>
                                            
                                    </a>
                                </li>
                                <li class="nav-tab-item" role="presentation">
                                    <a href="#listLayout" class="nav-link-item active" data-bs-toggle="tab">
                                        <svg class="icon" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M19.2016 17.8316H8.50246C8.0615 17.8316 7.7041 17.4742 7.7041 17.0332C7.7041 16.5923 8.0615 16.2349 8.50246 16.2349H19.2013C19.6423 16.2349 19.9997 16.5923 19.9997 17.0332C19.9997 17.4742 19.6426 17.8316 19.2016 17.8316Z" fill="#A3ABB0"/>
                                            <path d="M19.2016 12.8199H8.50246C8.0615 12.8199 7.7041 12.4625 7.7041 12.0215C7.7041 11.5805 8.0615 11.2231 8.50246 11.2231H19.2013C19.6423 11.2231 19.9997 11.5805 19.9997 12.0215C20 12.4625 19.6426 12.8199 19.2016 12.8199Z" fill="#A3ABB0"/>
                                            <path d="M19.2016 7.80913H8.50246C8.0615 7.80913 7.7041 7.45173 7.7041 7.01077C7.7041 6.5698 8.0615 6.2124 8.50246 6.2124H19.2013C19.6423 6.2124 19.9997 6.5698 19.9997 7.01077C19.9997 7.45173 19.6426 7.80913 19.2016 7.80913Z" fill="#A3ABB0"/>
                                            <path d="M5.0722 8.1444C5.66436 8.1444 6.1444 7.66436 6.1444 7.0722C6.1444 6.48004 5.66436 6 5.0722 6C4.48004 6 4 6.48004 4 7.0722C4 7.66436 4.48004 8.1444 5.0722 8.1444Z" fill="#A3ABB0"/>
                                            <path d="M5.0722 13.0941C5.66436 13.0941 6.1444 12.6141 6.1444 12.0219C6.1444 11.4297 5.66436 10.9497 5.0722 10.9497C4.48004 10.9497 4 11.4297 4 12.0219C4 12.6141 4.48004 13.0941 5.0722 13.0941Z" fill="#A3ABB0"/>
                                            <path d="M5.0722 18.0433C5.66436 18.0433 6.1444 17.5633 6.1444 16.9711C6.1444 16.379 5.66436 15.8989 5.0722 15.8989C4.48004 15.8989 4 16.379 4 16.9711C4 17.5633 4.48004 18.0433 5.0722 18.0433Z" fill="#A3ABB0"/>
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                            <div class="nice-select select-filter list-page" tabindex="0"><span class="current">Show: 50</span>
                                <ul class="list">  
                                    <li data-value="1" class="option">Show: 50</li>                                                        
                                    <li data-value="2" class="option">Show: 30</li>
                                    <li data-value="3" class="option selected">Show: 10</li>
                                </ul>
                            </div>
                            <div class="nice-select select-filter list-sort" tabindex="0"><span class="current">Sort by (Default)</span>
                                <ul class="list">  
                                    <li data-value="default" class="option selected">Sort by (Default)</li>                                                        
                                    <li data-value="new" class="option">Newest</li>
                                    <li data-value="old" class="option">Oldest</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-4 col-lg-5">
                            <div class="widget-sidebar fixed-sidebar">
                                <div class="flat-tab flat-tab-form widget-filter-search widget-box">
                                    <ul class="nav-tab-form" role="tablist">
                                        <li class="nav-tab-item" role="presentation">   
                                            <a href="#forRent" class="nav-link-item active"  data-bs-toggle="tab">For Rent</a>
                                        </li>
                                        <li class="nav-tab-item" role="presentation">
                                            <a href="#forSale" class="nav-link-item" data-bs-toggle="tab">For Sale</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane fade active show" role="tabpanel">
                                            <div class="form-sl">
                                                <form method="post">
                                                    <div class="wd-filter-select">
                                                        <div class="inner-group">
                                                            <div class="box">
                                                                <div class="form-style">
                                                                    <input type="text" class="form-control" placeholder="Type keyword...." value="" name="s" title="Search for" required="">
                                                                </div>
                                                                <div class="form-style">
                                                                    <div class="group-ip ip-icon">
                                                                        <input type="text" class="form-control" placeholder="Location" value="" name="s" title="Search for" required="">
                                                                        <a href="#" class="icon-right icon-location"></a>
                                                                    </div>
                                                                </div>
                                                                <div class="form-style">
                                                             
                                                                    <div class="group-select">
                                                                        <div class="nice-select" tabindex="0"><span class="current">Property type</span>
                                                                            <ul class="list">                                                       
                                                                                <li data-value="villa" class="option">Villa</li>
                                                                                <li data-value="studio" class="option">Studio</li>
                                                                                <li data-value="office" class="option">Office</li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>                                                    
                                                                </div>
                                                                <div class="form-style box-select">
                                                                    <div class="nice-select" tabindex="0"><span class="current">Room</span>
                                                                        <ul class="list"> 
                                                                            <li data-value="2" class="option">1</li>
                                                                            <li data-value="2" class="option selected">2</li>
                                                                            <li data-value="3" class="option">3</li>
                                                                            <li data-value="4" class="option">4</li>
                                                                            <li data-value="5" class="option">5</li>
                                                                            <li data-value="6" class="option">6</li>
                                                                            <li data-value="7" class="option">7</li>
                                                                            <li data-value="8" class="option">8</li>
                                                                            <li data-value="9" class="option">9</li>
                                                                            <li data-value="10" class="option">10</li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="form-style box-select">
                                                                    <div class="nice-select" tabindex="0"><span class="current">Bathrooms</span>
                                                                        <ul class="list"> 
                                                                            <li data-value="all" class="option">All</li>
                                                                            <li data-value="1" class="option">1</li>
                                                                            <li data-value="2" class="option">2</li>
                                                                            <li data-value="3" class="option">3</li>
                                                                            <li data-value="4" class="option selected">4</li>
                                                                            <li data-value="5" class="option">5</li>
                                                                            <li data-value="6" class="option">6</li>
                                                                            <li data-value="7" class="option">7</li>
                                                                            <li data-value="8" class="option">8</li>
                                                                            <li data-value="9" class="option">9</li>
                                                                            <li data-value="10" class="option">10</li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="form-style box-select">
                                                                    <div class="nice-select" tabindex="0"><span class="current">Bedroomsrooms</span>
                                                                        <ul class="list"> 
                                                                            <li data-value="1" class="option">All</li>
                                                                            <li data-value="1" class="option">1</li>
                                                                            <li data-value="2" class="option">2</li>
                                                                            <li data-value="3" class="option">3</li>
                                                                            <li data-value="4" class="option selected">4</li>
                                                                            <li data-value="5" class="option">5</li>
                                                                            <li data-value="6" class="option">6</li>
                                                                            <li data-value="7" class="option">7</li>
                                                                            <li data-value="8" class="option">8</li>
                                                                            <li data-value="9" class="option">9</li>
                                                                            <li data-value="10" class="option">10</li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="box">
                                                                <div class="form-style widget-price">
                                                                    <div class="box-title-price">
                                                                        <span class="title-price fw-6">Price:</span>
                                                                            <div class="caption-price">
                                                                                <span id="slider-range-value1" class="fw-6"></span>
                                                                                <span class="fw-6">-</span>
                                                                                <span id="slider-range-value2" class="fw-6"></span>
                                                                            </div>
                                                                    </div>
                                                                    <div id="slider-range"></div>
                                                                    <div class="slider-labels">
                                                                        <input type="hidden" name="min-value" value="">
                                                                        <input type="hidden" name="max-value" value="">                                                                                  
                                                                    </div>
                                                                </div>
                                                                <div class="form-style widget-price wd-price-2">
                                                                    <div class="box-title-price">
                                                                        <span class="title-price fw-6">Size:</span>
                                                                        <div class="caption-price">
                                                                            <span id="slider-range-value01" class="fw-6"></span>
                                                                            <span class="fw-6">to</span>
                                                                            <span id="slider-range-value02" class="fw-6"></span>
                                                                        </div>
                                                                    </div>
                                                                    <div id="slider-range2"></div>
                                                                    <div class="slider-labels">
                                                                        <input type="hidden" name="min-value2" value="">
                                                                        <input type="hidden" name="max-value2" value="">      
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="box">
                                                                <div class="form-style wd-amenities">
                                                                    <div class="group-checkbox">
                                                                        <h6 class="title text-black-2">Amenities:</h6>
                                                                        <div class="group-amenities">
                                                                            <fieldset class="amenities-item">
                                                                                <input type="checkbox" class="tf-checkbox style-1" id="cb1" checked> 
                                                                                <label for="cb1" class="text-cb-amenities">Air Condition</label>
                                                                            </fieldset>
                                                                            <fieldset class="amenities-item">
                                                                                <input type="checkbox" class="tf-checkbox style-1" id="cb2"> 
                                                                                <label for="cb2" class="text-cb-amenities">Disabled Access</label>
                                                                            </fieldset>
                                                                            <fieldset class="amenities-item">
                                                                                <input type="checkbox" class="tf-checkbox style-1" id="cb3"> 
                                                                                <label for="cb3" class="text-cb-amenities">Ceiling Height</label>
                                                                            </fieldset>
                                                                            <fieldset class="amenities-item">
                                                                                <input type="checkbox" class="tf-checkbox style-1" id="cb4" checked> 
                                                                                <label for="cb4" class="text-cb-amenities">Floor</label>
                                                                            </fieldset>
                                                                            <fieldset class="amenities-item">
                                                                                <input type="checkbox" class="tf-checkbox style-1" id="cb5"> 
                                                                                <label for="cb5" class="text-cb-amenities">Heating</label>
                                                                            </fieldset>
                                                                            <fieldset class="amenities-item">
                                                                                <input type="checkbox" class="tf-checkbox style-1" id="cb6"> 
                                                                                <label for="cb6" class="text-cb-amenities">Renovation</label>
                                                                            </fieldset>
                                                                            <fieldset class="amenities-item">
                                                                                <input type="checkbox" class="tf-checkbox style-1" id="cb7"> 
                                                                                <label for="cb7" class="text-cb-amenities">Window Type</label>
                                                                            </fieldset>
                                                                            <fieldset class="amenities-item">
                                                                                <input type="checkbox" class="tf-checkbox style-1" id="cb8"> 
                                                                                <label for="cb8" class="text-cb-amenities">Cable TV</label>
                                                                            </fieldset>
                                                                            <fieldset class="amenities-item">
                                                                                <input type="checkbox" class="tf-checkbox style-1" id="cb9" checked> 
                                                                                <label for="cb9" class="text-cb-amenities">Elevator</label>
                                                                            </fieldset>
                                                                            <fieldset class="amenities-item">
                                                                                <input type="checkbox" class="tf-checkbox style-1" id="cb10"> 
                                                                                <label for="cb10" class="text-cb-amenities">Furnishing</label>
                                                                            </fieldset>
                                                                            <fieldset class="amenities-item">
                                                                                <input type="checkbox" class="tf-checkbox style-1" id="cb11"> 
                                                                                <label for="cb11" class="text-cb-amenities">Intercom</label>
                                                                            </fieldset>
                                                                            <fieldset class="amenities-item">
                                                                                <input type="checkbox" class="tf-checkbox style-1" id="cb12"> 
                                                                                <label for="cb12" class="text-cb-amenities">Security</label>
                                                                            </fieldset>
                                                                            <fieldset class="amenities-item">
                                                                                <input type="checkbox" class="tf-checkbox style-1" id="cb13"> 
                                                                                <label for="cb13" class="text-cb-amenities">Search property</label>
                                                                            </fieldset>
                                                                            <fieldset class="amenities-item">
                                                                                <input type="checkbox" class="tf-checkbox style-1" id="cb14"> 
                                                                                <label for="cb14" class="text-cb-amenities">Ceiling Height</label>
                                                                            </fieldset>
                                                                            <fieldset class="amenities-item">
                                                                                <input type="checkbox" class="tf-checkbox style-1" id="cb15"> 
                                                                                <label for="cb15" class="text-cb-amenities">Fence</label>
                                                                            </fieldset>
                                                                            <fieldset class="amenities-item">
                                                                                <input type="checkbox" class="tf-checkbox style-1" id="cb16"> 
                                                                                <label for="cb16" class="text-cb-amenities">Fence</label>
                                                                            </fieldset>
                                                                            <fieldset class="amenities-item">
                                                                                <input type="checkbox" class="tf-checkbox style-1" id="cb17" checked> 
                                                                                <label for="cb17" class="text-cb-amenities">Garage</label>
                                                                            </fieldset>
                                                                            <fieldset class="amenities-item">
                                                                                <input type="checkbox" class="tf-checkbox style-1" id="cb18"> 
                                                                                <label for="cb18" class="text-cb-amenities">Parking</label>
                                                                            </fieldset>
                                                                            <fieldset class="amenities-item">
                                                                                <input type="checkbox" class="tf-checkbox style-1" id="cb19"> 
                                                                                <label for="cb19" class="text-cb-amenities">Swimming Pool</label>
                                                                            </fieldset>
                                                                            <fieldset class="amenities-item">
                                                                                <input type="checkbox" class="tf-checkbox style-1" id="cb20"> 
                                                                                <label for="cb20" class="text-cb-amenities">Construction Year</label>
                                                                            </fieldset>
                                                                            <fieldset class="amenities-item">
                                                                                <input type="checkbox" class="tf-checkbox style-1" id="cb21"> 
                                                                                <label for="cb21" class="text-cb-amenities">Fireplace</label>
                                                                            </fieldset>
                                                                            <fieldset class="amenities-item">
                                                                                <input type="checkbox" class="tf-checkbox style-1" id="cb22"> 
                                                                                <label for="cb22" class="text-cb-amenities">Garden</label>
                                                                            </fieldset>
                                                                            <fieldset class="amenities-item">
                                                                                <input type="checkbox" class="tf-checkbox style-1" id="cb23"> 
                                                                                <label for="cb23" class="text-cb-amenities">Pet Friendly</label>
                                                                            </fieldset>
                                                                            <fieldset class="amenities-item">
                                                                                <input type="checkbox" class="tf-checkbox style-1" id="cb24"> 
                                                                                <label for="cb24" class="text-cb-amenities">WiFi</label>
                                                                            </fieldset>
                                                                        </div>
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="form-style">
                                                                <button type="submit" class="tf-btn btn-view primary hover-btn-view">Find Properties <span class="icon icon-arrow-right2"></span></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="widget-box box-latest-property">
                                    <h5 class="fw-6 title">Latest Propeties</h5>
                                    <ul>
                                        <li class="latest-property-item">
                                            <a href="property-details-v1.html" class="images-style">
                                                <img src="images/home/house-8.jpg" alt="img">
                                            </a>
                                            <div class="content">
                                                <div class="text-capitalize text-btn"><a href="property-details-v1.html" class="link">Casa Lomas de Machalí Machas</a></div>
                                                <ul class="meta-list mt-6">
                                                    <li class="item">
                                                        <i class="icon icon-bed"></i>
                                                        <span class="text-variant-1">Beds:</span>
                                                        <span class="fw-6">3</span>
                                                    </li>
                                                    <li class="item">
                                                        <i class="icon icon-bath"></i>
                                                        <span class="text-variant-1">Baths:</span>
                                                        <span class="fw-6">2</span>
                                                    </li>
                                                    <li class="item">
                                                        <i class="icon icon-sqft"></i>
                                                        <span class="text-variant-1">Sqft:</span>
                                                        <span class="fw-6">1150</span>
                                                    </li>
                                                </ul>
                                                <div class="mt-10 text-btn">$7250,00</div>
                                            </div>
                                        </li>
                                        <li class="latest-property-item">
                                            <a href="property-details-v1.html" class="images-style">
                                                <img src="images/home/house-3.jpg" alt="img">
                                            </a>
                                            <div class="content">
                                                <div class="text-capitalize text-btn"><a href="property-details-v1.html" class="link">Casa Lomas de Machalí Machas</a></div>
                                                <ul class="meta-list mt-6">
                                                    <li class="item">
                                                        <i class="icon icon-bed"></i>
                                                        <span class="text-variant-1">Beds:</span>
                                                        <span class="fw-6">3</span>
                                                    </li>
                                                    <li class="item">
                                                        <i class="icon icon-bath"></i>
                                                        <span class="text-variant-1">Baths:</span>
                                                        <span class="fw-6">2</span>
                                                    </li>
                                                    <li class="item">
                                                        <i class="icon icon-sqft"></i>
                                                        <span class="text-variant-1">Sqft:</span>
                                                        <span class="fw-6">1150</span>
                                                    </li>
                                                </ul>
                                                <div class="mt-10 text-btn">$7250,00</div>
                                            </div>
                                        </li>
                                        <li class="latest-property-item">
                                            <a href="property-details-v1.html" class="images-style">
                                                <img src="images/home/house-28.jpg" alt="img">
                                            </a>
                                            <div class="content">
                                                <div class="text-capitalize text-btn"><a href="property-details-v1.html" class="link">Casa Lomas de Machalí Machas</a></div>
                                                <ul class="meta-list mt-6">
                                                    <li class="item">
                                                        <i class="icon icon-bed"></i>
                                                        <span class="text-variant-1">Beds:</span>
                                                        <span class="fw-6">3</span>
                                                    </li>
                                                    <li class="item">
                                                        <i class="icon icon-bath"></i>
                                                        <span class="text-variant-1">Baths:</span>
                                                        <span class="fw-6">2</span>
                                                    </li>
                                                    <li class="item">
                                                        <i class="icon icon-sqft"></i>
                                                        <span class="text-variant-1">Sqft:</span>
                                                        <span class="fw-6">1150</span>
                                                    </li>
                                                </ul>
                                                <div class="mt-10 text-btn">$7250,00</div>
                                            </div>
                                        </li>
                                        <li class="latest-property-item">
                                            <a href="property-details-v1.html" class="images-style">
                                                <img src="images/home/house-29.jpg" alt="img">
                                            </a>
                                            <div class="content">
                                                <div class="text-capitalize text-btn"><a href="property-details-v1.html" class="link">Casa Lomas de Machalí Machas</a></div>
                                                <ul class="meta-list mt-6">
                                                    <li class="item">
                                                        <i class="icon icon-bed"></i>
                                                        <span class="text-variant-1">Beds:</span>
                                                        <span class="fw-6">3</span>
                                                    </li>
                                                    <li class="item">
                                                        <i class="icon icon-bath"></i>
                                                        <span class="text-variant-1">Baths:</span>
                                                        <span class="fw-6">2</span>
                                                    </li>
                                                    <li class="item">
                                                        <i class="icon icon-sqft"></i>
                                                        <span class="text-variant-1">Sqft:</span>
                                                        <span class="fw-6">1150</span>
                                                    </li>
                                                </ul>
                                                <div class="mt-10 text-btn">$7250,00</div>
                                            </div>
                                        </li>
                                        <li class="latest-property-item">
                                            <a href="property-details-v1.html" class="images-style">
                                                <img src="images/home/house-19.jpg" alt="img">
                                            </a>
                                            <div class="content">
                                                <div class="text-capitalize text-btn"><a href="property-details-v1.html" class="link">Casa Lomas de Machalí Machas</a></div>
                                                <ul class="meta-list mt-6">
                                                    <li class="item">
                                                        <i class="icon icon-bed"></i>
                                                        <span class="text-variant-1">Beds:</span>
                                                        <span class="fw-6">3</span>
                                                    </li>
                                                    <li class="item">
                                                        <i class="icon icon-bath"></i>
                                                        <span class="text-variant-1">Baths:</span>
                                                        <span class="fw-6">2</span>
                                                    </li>
                                                    <li class="item">
                                                        <i class="icon icon-sqft"></i>
                                                        <span class="text-variant-1">Sqft:</span>
                                                        <span class="fw-6">1150</span>
                                                    </li>
                                                </ul>
                                                <div class="mt-10 text-btn">$7250,00</div>
                                            </div>
                                        </li>
                                    </ul>
                                    
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-7 flat-animate-tab">
                            <div class="tab-content">
                                <div class="tab-pane" id="gridLayout" role="tabpanel">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="homelengo-box">
                                                <div class="archive-top">
                                                    <a href="property-details-v1.html" class="images-group">
                                                        <div class="images-style">
                                                            <img class="lazyload" data-src="images/home/house-7.jpg" src="images/home/house-7.jpg" alt="img">
                                                        </div>
                                                        <div class="top">
                                                            <ul class="d-flex gap-6">
                                                                <li class="flag-tag primary">Featured</li>
                                                                <li class="flag-tag style-1">For Sale</li>
                                                            </ul>
                                                            
                                                        </div>
                                                        <div class="bottom">
                                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M10 7C10 7.53043 9.78929 8.03914 9.41421 8.41421C9.03914 8.78929 8.53043 9 8 9C7.46957 9 6.96086 8.78929 6.58579 8.41421C6.21071 8.03914 6 7.53043 6 7C6 6.46957 6.21071 5.96086 6.58579 5.58579C6.96086 5.21071 7.46957 5 8 5C8.53043 5 9.03914 5.21071 9.41421 5.58579C9.78929 5.96086 10 6.46957 10 7Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                                <path d="M13 7C13 11.7613 8 14.5 8 14.5C8 14.5 3 11.7613 3 7C3 5.67392 3.52678 4.40215 4.46447 3.46447C5.40215 2.52678 6.67392 2 8 2C9.32608 2 10.5979 2.52678 11.5355 3.46447C12.4732 4.40215 13 5.67392 13 7Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                            </svg>
                                                            145 Brooklyn Ave, Califonia, New York   
                                                        </div>
                                                    </a>
                                                    
                                                </div>
                                                <div class="archive-bottom">
                                                    <div class="content-top">
                                                        <h6 class="text-capitalize"><a href="property-details-v1.html" class="link"> Casa Lomas de Machalí Machas</a></h6>
                                                            <ul class="meta-list">
                                                                <li class="item">
                                                                    <i class="icon icon-bed"></i>
                                                                    <span class="text-variant-1">Beds:</span>
                                                                    <span class="fw-6">3</span>
                                                                </li>
                                                                <li class="item">
                                                                    <i class="icon icon-bath"></i>
                                                                    <span class="text-variant-1">Baths:</span>
                                                                    <span class="fw-6">2</span>
                                                                </li>
                                                                <li class="item">
                                                                    <i class="icon icon-sqft"></i>
                                                                    <span class="text-variant-1">Sqft:</span>
                                                                    <span class="fw-6">1150</span>
                                                                </li>
                                                            </ul>
                                                        
                                                    </div>
                                                    
                                                    <div class="content-bottom">
                                                        <div class="d-flex gap-8 align-items-center">
                                                            <div class="avatar avt-40 round">
                                                                <img src="images/avatar/avt-png1.png" alt="avt">
                                                            </div>
                                                            <span>Arlene McCoy</span>
                                                        </div>
                                                        <h6 class="price">$7250,00</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="homelengo-box">
                                                <div class="archive-top">
                                                    <a href="property-details-v1.html" class="images-group">
                                                        <div class="images-style">
                                                            <img class="lazyload" data-src="images/home/house-8.jpg" src="images/home/house-8.jpg" alt="img">
                                                        </div>
                                                        <div class="top">
                                                            <ul class="d-flex gap-6">
                                                                <li class="flag-tag primary">Featured</li>
                                                                <li class="flag-tag style-1">For Sale</li>
                                                            </ul>
                                                            
                                                        </div>
                                                        <div class="bottom">
                                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M10 7C10 7.53043 9.78929 8.03914 9.41421 8.41421C9.03914 8.78929 8.53043 9 8 9C7.46957 9 6.96086 8.78929 6.58579 8.41421C6.21071 8.03914 6 7.53043 6 7C6 6.46957 6.21071 5.96086 6.58579 5.58579C6.96086 5.21071 7.46957 5 8 5C8.53043 5 9.03914 5.21071 9.41421 5.58579C9.78929 5.96086 10 6.46957 10 7Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                                <path d="M13 7C13 11.7613 8 14.5 8 14.5C8 14.5 3 11.7613 3 7C3 5.67392 3.52678 4.40215 4.46447 3.46447C5.40215 2.52678 6.67392 2 8 2C9.32608 2 10.5979 2.52678 11.5355 3.46447C12.4732 4.40215 13 5.67392 13 7Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                            </svg>
                                                            145 Brooklyn Ave, Califonia, New York   
                                                        </div>
                                                    </a>
                                                    
                                                </div>
                                                <div class="archive-bottom">
                                                    <div class="content-top">
                                                        <h6 class="text-capitalize"><a href="property-details-v1.html" class="link"> Casa Lomas de Machalí Machas</a></h6>
                                                            <ul class="meta-list">
                                                                <li class="item">
                                                                    <i class="icon icon-bed"></i>
                                                                    <span class="text-variant-1">Beds:</span>
                                                                    <span class="fw-6">3</span>
                                                                </li>
                                                                <li class="item">
                                                                    <i class="icon icon-bath"></i>
                                                                    <span class="text-variant-1">Baths:</span>
                                                                    <span class="fw-6">2</span>
                                                                </li>
                                                                <li class="item">
                                                                    <i class="icon icon-sqft"></i>
                                                                    <span class="text-variant-1">Sqft:</span>
                                                                    <span class="fw-6">1150</span>
                                                                </li>
                                                            </ul>
                                                        
                                                    </div>
                                                    
                                                    <div class="content-bottom">
                                                        <div class="d-flex gap-8 align-items-center">
                                                            <div class="avatar avt-40 round">
                                                                <img src="images/avatar/avt-png2.png" alt="avt">
                                                            </div>
                                                            <span>Arlene McCoy</span>
                                                        </div>
                                                        <h6 class="price">$7250,00</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="homelengo-box">
                                                <div class="archive-top">
                                                    <a href="property-details-v1.html" class="images-group">
                                                        <div class="images-style">
                                                            <img class="lazyload" data-src="images/home/house-11.jpg" src="images/home/house-11.jpg" alt="img">
                                                        </div>
                                                        <div class="top">
                                                            <ul class="d-flex gap-6">
                                                                <li class="flag-tag primary">Featured</li>
                                                                <li class="flag-tag style-1">For Sale</li>
                                                            </ul>
                                                            
                                                        </div>
                                                        <div class="bottom">
                                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M10 7C10 7.53043 9.78929 8.03914 9.41421 8.41421C9.03914 8.78929 8.53043 9 8 9C7.46957 9 6.96086 8.78929 6.58579 8.41421C6.21071 8.03914 6 7.53043 6 7C6 6.46957 6.21071 5.96086 6.58579 5.58579C6.96086 5.21071 7.46957 5 8 5C8.53043 5 9.03914 5.21071 9.41421 5.58579C9.78929 5.96086 10 6.46957 10 7Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                                <path d="M13 7C13 11.7613 8 14.5 8 14.5C8 14.5 3 11.7613 3 7C3 5.67392 3.52678 4.40215 4.46447 3.46447C5.40215 2.52678 6.67392 2 8 2C9.32608 2 10.5979 2.52678 11.5355 3.46447C12.4732 4.40215 13 5.67392 13 7Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                            </svg>
                                                            145 Brooklyn Ave, Califonia, New York   
                                                        </div>
                                                    </a>
                                                    
                                                </div>
                                                <div class="archive-bottom">
                                                    <div class="content-top">
                                                        <h6 class="text-capitalize"><a href="property-details-v1.html" class="link"> Casa Lomas de Machalí Machas</a></h6>
                                                            <ul class="meta-list">
                                                                <li class="item">
                                                                    <i class="icon icon-bed"></i>
                                                                    <span class="text-variant-1">Beds:</span>
                                                                    <span class="fw-6">3</span>
                                                                </li>
                                                                <li class="item">
                                                                    <i class="icon icon-bath"></i>
                                                                    <span class="text-variant-1">Baths:</span>
                                                                    <span class="fw-6">2</span>
                                                                </li>
                                                                <li class="item">
                                                                    <i class="icon icon-sqft"></i>
                                                                    <span class="text-variant-1">Sqft:</span>
                                                                    <span class="fw-6">1150</span>
                                                                </li>
                                                            </ul>
                                                        
                                                    </div>
                                                    
                                                    <div class="content-bottom">
                                                        <div class="d-flex gap-8 align-items-center">
                                                            <div class="avatar avt-40 round">
                                                                <img src="images/avatar/avt-png3.png" alt="avt">
                                                            </div>
                                                            <span>Arlene McCoy</span>
                                                        </div>
                                                        <h6 class="price">$7250,00</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="homelengo-box">
                                                <div class="archive-top">
                                                    <a href="property-details-v1.html" class="images-group">
                                                        <div class="images-style">
                                                            <img class="lazyload" data-src="images/home/house-9.jpg" src="images/home/house-9.jpg" alt="img">
                                                        </div>
                                                        <div class="top">
                                                            <ul class="d-flex gap-6">
                                                                <li class="flag-tag primary">Featured</li>
                                                                <li class="flag-tag style-1">For Sale</li>
                                                            </ul>
                                                            
                                                        </div>
                                                        <div class="bottom">
                                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M10 7C10 7.53043 9.78929 8.03914 9.41421 8.41421C9.03914 8.78929 8.53043 9 8 9C7.46957 9 6.96086 8.78929 6.58579 8.41421C6.21071 8.03914 6 7.53043 6 7C6 6.46957 6.21071 5.96086 6.58579 5.58579C6.96086 5.21071 7.46957 5 8 5C8.53043 5 9.03914 5.21071 9.41421 5.58579C9.78929 5.96086 10 6.46957 10 7Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                                <path d="M13 7C13 11.7613 8 14.5 8 14.5C8 14.5 3 11.7613 3 7C3 5.67392 3.52678 4.40215 4.46447 3.46447C5.40215 2.52678 6.67392 2 8 2C9.32608 2 10.5979 2.52678 11.5355 3.46447C12.4732 4.40215 13 5.67392 13 7Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                            </svg>
                                                            145 Brooklyn Ave, Califonia, New York   
                                                        </div>
                                                    </a>
                                                    
                                                </div>
                                                <div class="archive-bottom">
                                                    <div class="content-top">
                                                        <h6 class="text-capitalize"><a href="property-details-v1.html" class="link"> Casa Lomas de Machalí Machas</a></h6>
                                                            <ul class="meta-list">
                                                                <li class="item">
                                                                    <i class="icon icon-bed"></i>
                                                                    <span class="text-variant-1">Beds:</span>
                                                                    <span class="fw-6">3</span>
                                                                </li>
                                                                <li class="item">
                                                                    <i class="icon icon-bath"></i>
                                                                    <span class="text-variant-1">Baths:</span>
                                                                    <span class="fw-6">2</span>
                                                                </li>
                                                                <li class="item">
                                                                    <i class="icon icon-sqft"></i>
                                                                    <span class="text-variant-1">Sqft:</span>
                                                                    <span class="fw-6">1150</span>
                                                                </li>
                                                            </ul>
                                                        
                                                    </div>
                                                    
                                                    <div class="content-bottom">
                                                        <div class="d-flex gap-8 align-items-center">
                                                            <div class="avatar avt-40 round">
                                                                <img src="images/avatar/avt-png4.png" alt="avt">
                                                            </div>
                                                            <span>Arlene McCoy</span>
                                                        </div>
                                                        <h6 class="price">$7250,00</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="homelengo-box">
                                                <div class="archive-top">
                                                    <a href="property-details-v1.html" class="images-group">
                                                        <div class="images-style">
                                                            <img class="lazyload" data-src="images/home/house-3.jpg" src="images/home/house-3.jpg" alt="img">
                                                        </div>
                                                        <div class="top">
                                                            <ul class="d-flex gap-6">
                                                                <li class="flag-tag primary">Featured</li>
                                                                <li class="flag-tag style-1">For Sale</li>
                                                            </ul>
                                                            
                                                        </div>
                                                        <div class="bottom">
                                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M10 7C10 7.53043 9.78929 8.03914 9.41421 8.41421C9.03914 8.78929 8.53043 9 8 9C7.46957 9 6.96086 8.78929 6.58579 8.41421C6.21071 8.03914 6 7.53043 6 7C6 6.46957 6.21071 5.96086 6.58579 5.58579C6.96086 5.21071 7.46957 5 8 5C8.53043 5 9.03914 5.21071 9.41421 5.58579C9.78929 5.96086 10 6.46957 10 7Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                                <path d="M13 7C13 11.7613 8 14.5 8 14.5C8 14.5 3 11.7613 3 7C3 5.67392 3.52678 4.40215 4.46447 3.46447C5.40215 2.52678 6.67392 2 8 2C9.32608 2 10.5979 2.52678 11.5355 3.46447C12.4732 4.40215 13 5.67392 13 7Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                            </svg>
                                                            145 Brooklyn Ave, Califonia, New York   
                                                        </div>
                                                    </a>
                                                    
                                                </div>
                                                <div class="archive-bottom">
                                                    <div class="content-top">
                                                        <h6 class="text-capitalize"><a href="property-details-v1.html" class="link"> Casa Lomas de Machalí Machas</a></h6>
                                                            <ul class="meta-list">
                                                                <li class="item">
                                                                    <i class="icon icon-bed"></i>
                                                                    <span class="text-variant-1">Beds:</span>
                                                                    <span class="fw-6">3</span>
                                                                </li>
                                                                <li class="item">
                                                                    <i class="icon icon-bath"></i>
                                                                    <span class="text-variant-1">Baths:</span>
                                                                    <span class="fw-6">2</span>
                                                                </li>
                                                                <li class="item">
                                                                    <i class="icon icon-sqft"></i>
                                                                    <span class="text-variant-1">Sqft:</span>
                                                                    <span class="fw-6">1150</span>
                                                                </li>
                                                            </ul>
                                                        
                                                    </div>
                                                    
                                                    <div class="content-bottom">
                                                        <div class="d-flex gap-8 align-items-center">
                                                            <div class="avatar avt-40 round">
                                                                <img src="images/avatar/avt-png5.png" alt="avt">
                                                            </div>
                                                            <span>Arlene McCoy</span>
                                                        </div>
                                                        <h6 class="price">$7250,00</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="homelengo-box">
                                                <div class="archive-top">
                                                    <a href="property-details-v1.html" class="images-group">
                                                        <div class="images-style">
                                                            <img class="lazyload" data-src="images/home/house-30.jpg" src="images/home/house-30.jpg" alt="img">
                                                        </div>
                                                        <div class="top">
                                                            <ul class="d-flex gap-6">
                                                                <li class="flag-tag primary">Featured</li>
                                                                <li class="flag-tag style-1">For Sale</li>
                                                            </ul>
                                                            
                                                        </div>
                                                        <div class="bottom">
                                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M10 7C10 7.53043 9.78929 8.03914 9.41421 8.41421C9.03914 8.78929 8.53043 9 8 9C7.46957 9 6.96086 8.78929 6.58579 8.41421C6.21071 8.03914 6 7.53043 6 7C6 6.46957 6.21071 5.96086 6.58579 5.58579C6.96086 5.21071 7.46957 5 8 5C8.53043 5 9.03914 5.21071 9.41421 5.58579C9.78929 5.96086 10 6.46957 10 7Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                                <path d="M13 7C13 11.7613 8 14.5 8 14.5C8 14.5 3 11.7613 3 7C3 5.67392 3.52678 4.40215 4.46447 3.46447C5.40215 2.52678 6.67392 2 8 2C9.32608 2 10.5979 2.52678 11.5355 3.46447C12.4732 4.40215 13 5.67392 13 7Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                            </svg>
                                                            145 Brooklyn Ave, Califonia, New York   
                                                        </div>
                                                    </a>
                                                    
                                                </div>
                                                <div class="archive-bottom">
                                                    <div class="content-top">
                                                        <h6 class="text-capitalize"><a href="property-details-v1.html" class="link"> Casa Lomas de Machalí Machas</a></h6>
                                                            <ul class="meta-list">
                                                                <li class="item">
                                                                    <i class="icon icon-bed"></i>
                                                                    <span class="text-variant-1">Beds:</span>
                                                                    <span class="fw-6">3</span>
                                                                </li>
                                                                <li class="item">
                                                                    <i class="icon icon-bath"></i>
                                                                    <span class="text-variant-1">Baths:</span>
                                                                    <span class="fw-6">2</span>
                                                                </li>
                                                                <li class="item">
                                                                    <i class="icon icon-sqft"></i>
                                                                    <span class="text-variant-1">Sqft:</span>
                                                                    <span class="fw-6">1150</span>
                                                                </li>
                                                            </ul>
                                                        
                                                    </div>
                                                    
                                                    <div class="content-bottom">
                                                        <div class="d-flex gap-8 align-items-center">
                                                            <div class="avatar avt-40 round">
                                                                <img src="images/avatar/avt-png6.png" alt="avt">
                                                            </div>
                                                            <span>Arlene McCoy</span>
                                                        </div>
                                                        <h6 class="price">$7250,00</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="homelengo-box">
                                                <div class="archive-top">
                                                    <a href="property-details-v1.html" class="images-group">
                                                        <div class="images-style">
                                                            <img class="lazyload" data-src="images/home/house-2.jpg" src="images/home/house-2.jpg" alt="img">
                                                        </div>
                                                        <div class="top">
                                                            <ul class="d-flex gap-6">
                                                                <li class="flag-tag primary">Featured</li>
                                                                <li class="flag-tag style-1">For Sale</li>
                                                            </ul>
                                                            
                                                        </div>
                                                        <div class="bottom">
                                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M10 7C10 7.53043 9.78929 8.03914 9.41421 8.41421C9.03914 8.78929 8.53043 9 8 9C7.46957 9 6.96086 8.78929 6.58579 8.41421C6.21071 8.03914 6 7.53043 6 7C6 6.46957 6.21071 5.96086 6.58579 5.58579C6.96086 5.21071 7.46957 5 8 5C8.53043 5 9.03914 5.21071 9.41421 5.58579C9.78929 5.96086 10 6.46957 10 7Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                                <path d="M13 7C13 11.7613 8 14.5 8 14.5C8 14.5 3 11.7613 3 7C3 5.67392 3.52678 4.40215 4.46447 3.46447C5.40215 2.52678 6.67392 2 8 2C9.32608 2 10.5979 2.52678 11.5355 3.46447C12.4732 4.40215 13 5.67392 13 7Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                            </svg>
                                                            145 Brooklyn Ave, Califonia, New York   
                                                        </div>
                                                    </a>
                                                    
                                                </div>
                                                <div class="archive-bottom">
                                                    <div class="content-top">
                                                        <h6 class="text-capitalize"><a href="property-details-v1.html" class="link"> Casa Lomas de Machalí Machas</a></h6>
                                                            <ul class="meta-list">
                                                                <li class="item">
                                                                    <i class="icon icon-bed"></i>
                                                                    <span class="text-variant-1">Beds:</span>
                                                                    <span class="fw-6">3</span>
                                                                </li>
                                                                <li class="item">
                                                                    <i class="icon icon-bath"></i>
                                                                    <span class="text-variant-1">Baths:</span>
                                                                    <span class="fw-6">2</span>
                                                                </li>
                                                                <li class="item">
                                                                    <i class="icon icon-sqft"></i>
                                                                    <span class="text-variant-1">Sqft:</span>
                                                                    <span class="fw-6">1150</span>
                                                                </li>
                                                            </ul>
                                                        
                                                    </div>
                                                    
                                                    <div class="content-bottom">
                                                        <div class="d-flex gap-8 align-items-center">
                                                            <div class="avatar avt-40 round">
                                                                <img src="images/avatar/avt-png6.png" alt="avt">
                                                            </div>
                                                            <span>Arlene McCoy</span>
                                                        </div>
                                                        <h6 class="price">$7250,00</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="homelengo-box">
                                                <div class="archive-top">
                                                    <a href="property-details-v1.html" class="images-group">
                                                        <div class="images-style">
                                                            <img class="lazyload" data-src="images/home/house-5.jpg" src="images/home/house-5.jpg" alt="img">
                                                        </div>
                                                        <div class="top">
                                                            <ul class="d-flex gap-6">
                                                                <li class="flag-tag primary">Featured</li>
                                                                <li class="flag-tag style-1">For Sale</li>
                                                            </ul>
                                                            
                                                        </div>
                                                        <div class="bottom">
                                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M10 7C10 7.53043 9.78929 8.03914 9.41421 8.41421C9.03914 8.78929 8.53043 9 8 9C7.46957 9 6.96086 8.78929 6.58579 8.41421C6.21071 8.03914 6 7.53043 6 7C6 6.46957 6.21071 5.96086 6.58579 5.58579C6.96086 5.21071 7.46957 5 8 5C8.53043 5 9.03914 5.21071 9.41421 5.58579C9.78929 5.96086 10 6.46957 10 7Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                                <path d="M13 7C13 11.7613 8 14.5 8 14.5C8 14.5 3 11.7613 3 7C3 5.67392 3.52678 4.40215 4.46447 3.46447C5.40215 2.52678 6.67392 2 8 2C9.32608 2 10.5979 2.52678 11.5355 3.46447C12.4732 4.40215 13 5.67392 13 7Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                            </svg>
                                                            145 Brooklyn Ave, Califonia, New York   
                                                        </div>
                                                    </a>
                                                    
                                                </div>
                                                <div class="archive-bottom">
                                                    <div class="content-top">
                                                        <h6 class="text-capitalize"><a href="property-details-v1.html" class="link"> Casa Lomas de Machalí Machas</a></h6>
                                                            <ul class="meta-list">
                                                                <li class="item">
                                                                    <i class="icon icon-bed"></i>
                                                                    <span class="text-variant-1">Beds:</span>
                                                                    <span class="fw-6">3</span>
                                                                </li>
                                                                <li class="item">
                                                                    <i class="icon icon-bath"></i>
                                                                    <span class="text-variant-1">Baths:</span>
                                                                    <span class="fw-6">2</span>
                                                                </li>
                                                                <li class="item">
                                                                    <i class="icon icon-sqft"></i>
                                                                    <span class="text-variant-1">Sqft:</span>
                                                                    <span class="fw-6">1150</span>
                                                                </li>
                                                            </ul>
                                                        
                                                    </div>
                                                    
                                                    <div class="content-bottom">
                                                        <div class="d-flex gap-8 align-items-center">
                                                            <div class="avatar avt-40 round">
                                                                <img src="images/avatar/avt-png6.png" alt="avt">
                                                            </div>
                                                            <span>Arlene McCoy</span>
                                                        </div>
                                                        <h6 class="price">$7250,00</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="homelengo-box">
                                                <div class="archive-top">
                                                    <a href="property-details-v1.html" class="images-group">
                                                        <div class="images-style">
                                                            <img class="lazyload" data-src="images/home/house-31.jpg" src="images/home/house-31.jpg" alt="img">
                                                        </div>
                                                        <div class="top">
                                                            <ul class="d-flex gap-6">
                                                                <li class="flag-tag primary">Featured</li>
                                                                <li class="flag-tag style-1">For Sale</li>
                                                            </ul>
                                                            
                                                        </div>
                                                        <div class="bottom">
                                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M10 7C10 7.53043 9.78929 8.03914 9.41421 8.41421C9.03914 8.78929 8.53043 9 8 9C7.46957 9 6.96086 8.78929 6.58579 8.41421C6.21071 8.03914 6 7.53043 6 7C6 6.46957 6.21071 5.96086 6.58579 5.58579C6.96086 5.21071 7.46957 5 8 5C8.53043 5 9.03914 5.21071 9.41421 5.58579C9.78929 5.96086 10 6.46957 10 7Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                                <path d="M13 7C13 11.7613 8 14.5 8 14.5C8 14.5 3 11.7613 3 7C3 5.67392 3.52678 4.40215 4.46447 3.46447C5.40215 2.52678 6.67392 2 8 2C9.32608 2 10.5979 2.52678 11.5355 3.46447C12.4732 4.40215 13 5.67392 13 7Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                            </svg>
                                                            145 Brooklyn Ave, Califonia, New York   
                                                        </div>
                                                    </a>
                                                    
                                                </div>
                                                <div class="archive-bottom">
                                                    <div class="content-top">
                                                        <h6 class="text-capitalize"><a href="property-details-v1.html" class="link"> Casa Lomas de Machalí Machas</a></h6>
                                                            <ul class="meta-list">
                                                                <li class="item">
                                                                    <i class="icon icon-bed"></i>
                                                                    <span class="text-variant-1">Beds:</span>
                                                                    <span class="fw-6">3</span>
                                                                </li>
                                                                <li class="item">
                                                                    <i class="icon icon-bath"></i>
                                                                    <span class="text-variant-1">Baths:</span>
                                                                    <span class="fw-6">2</span>
                                                                </li>
                                                                <li class="item">
                                                                    <i class="icon icon-sqft"></i>
                                                                    <span class="text-variant-1">Sqft:</span>
                                                                    <span class="fw-6">1150</span>
                                                                </li>
                                                            </ul>
                                                        
                                                    </div>
                                                    
                                                    <div class="content-bottom">
                                                        <div class="d-flex gap-8 align-items-center">
                                                            <div class="avatar avt-40 round">
                                                                <img src="images/avatar/avt-png6.png" alt="avt">
                                                            </div>
                                                            <span>Arlene McCoy</span>
                                                        </div>
                                                        <h6 class="price">$7250,00</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="homelengo-box">
                                                <div class="archive-top">
                                                    <a href="property-details-v1.html" class="images-group">
                                                        <div class="images-style">
                                                            <img class="lazyload" data-src="images/home/house-7.jpg" src="images/home/house-7.jpg" alt="img">
                                                        </div>
                                                        <div class="top">
                                                            <ul class="d-flex gap-6">
                                                                <li class="flag-tag primary">Featured</li>
                                                                <li class="flag-tag style-1">For Sale</li>
                                                            </ul>
                                                            
                                                        </div>
                                                        <div class="bottom">
                                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M10 7C10 7.53043 9.78929 8.03914 9.41421 8.41421C9.03914 8.78929 8.53043 9 8 9C7.46957 9 6.96086 8.78929 6.58579 8.41421C6.21071 8.03914 6 7.53043 6 7C6 6.46957 6.21071 5.96086 6.58579 5.58579C6.96086 5.21071 7.46957 5 8 5C8.53043 5 9.03914 5.21071 9.41421 5.58579C9.78929 5.96086 10 6.46957 10 7Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                                <path d="M13 7C13 11.7613 8 14.5 8 14.5C8 14.5 3 11.7613 3 7C3 5.67392 3.52678 4.40215 4.46447 3.46447C5.40215 2.52678 6.67392 2 8 2C9.32608 2 10.5979 2.52678 11.5355 3.46447C12.4732 4.40215 13 5.67392 13 7Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                            </svg>
                                                            145 Brooklyn Ave, Califonia, New York   
                                                        </div>
                                                    </a>
                                                    
                                                </div>
                                                <div class="archive-bottom">
                                                    <div class="content-top">
                                                        <h6 class="text-capitalize"><a href="property-details-v1.html" class="link"> Casa Lomas de Machalí Machas</a></h6>
                                                            <ul class="meta-list">
                                                                <li class="item">
                                                                    <i class="icon icon-bed"></i>
                                                                    <span class="text-variant-1">Beds:</span>
                                                                    <span class="fw-6">3</span>
                                                                </li>
                                                                <li class="item">
                                                                    <i class="icon icon-bath"></i>
                                                                    <span class="text-variant-1">Baths:</span>
                                                                    <span class="fw-6">2</span>
                                                                </li>
                                                                <li class="item">
                                                                    <i class="icon icon-sqft"></i>
                                                                    <span class="text-variant-1">Sqft:</span>
                                                                    <span class="fw-6">1150</span>
                                                                </li>
                                                            </ul>
                                                        
                                                    </div>
                                                    
                                                    <div class="content-bottom">
                                                        <div class="d-flex gap-8 align-items-center">
                                                            <div class="avatar avt-40 round">
                                                                <img src="images/avatar/avt-png1.png" alt="avt">
                                                            </div>
                                                            <span>Arlene McCoy</span>
                                                        </div>
                                                        <h6 class="price">$7250,00</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="wd-navigation mt-20">
                                        <li><a href="#" class="nav-item"><i class="icon icon-arr-l"></i></a></li>
                                        <li><a href="#" class="nav-item">1</a></li>
                                        <li><a href="#" class="nav-item">2</a></li>
                                        <li><a href="#" class="nav-item active">3</a></li>
                                        <li><a href="#" class="nav-item">4</a></li>
                                        <li><a href="#" class="nav-item">...</a></li>
                                        <li><a href="#" class="nav-item"><i class="icon icon-arr-r"></i></a></li>
                                    </ul>
                                </div>
                                <div class="tab-pane active show" id="listLayout" role="tabpanel">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="homelengo-box list-style-1 list-style-2 line">
                                                <div class="archive-top">
                                                    <a href="property-details-v1.html" class="images-group">
                                                        <div class="images-style">
                                                            <img class="lazyload" data-src="images/home/house-sm-11.jpg" src="images/home/house-sm-11.jpg" alt="img-property">
                                                        </div>
                                                        <div class="top">
                                                            <ul class="d-flex gap-6 flex-wrap">
                                                                <li class="flag-tag primary">Featured</li>
                                                                <li class="flag-tag style-1">For Sale</li>
                                                            </ul>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="archive-bottom">
                                                    <div class="content-top">
                                                        <h6 class="text-capitalize"><a href="property-details-v1.html" class="link text-line-clamp-1"> Ritma Perdana (Townhouse), LBS Alam Perdana</a></h6>
                                                        <ul class="meta-list">
                                                            <li class="item">
                                                                <i class="icon icon-bed"></i>
                                                                <span class="text-variant-1">Beds:</span>
                                                                <span class="fw-6">3</span>
                                                            </li>
                                                            <li class="item">
                                                                <i class="icon icon-bath"></i>
                                                                <span class="text-variant-1">Baths:</span>
                                                                <span class="fw-6">2</span>
                                                            </li>
                                                            <li class="item">
                                                                <i class="icon icon-sqft"></i>
                                                                <span class="text-variant-1">Sqft:</span>
                                                                <span class="fw-6">1150</span>
                                                            </li>
                                                        </ul>
                                                        <div class="location">
                                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M10 7C10 7.53043 9.78929 8.03914 9.41421 8.41421C9.03914 8.78929 8.53043 9 8 9C7.46957 9 6.96086 8.78929 6.58579 8.41421C6.21071 8.03914 6 7.53043 6 7C6 6.46957 6.21071 5.96086 6.58579 5.58579C6.96086 5.21071 7.46957 5 8 5C8.53043 5 9.03914 5.21071 9.41421 5.58579C9.78929 5.96086 10 6.46957 10 7Z" stroke="#A3ABB0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                                <path d="M13 7C13 11.7613 8 14.5 8 14.5C8 14.5 3 11.7613 3 7C3 5.67392 3.52678 4.40215 4.46447 3.46447C5.40215 2.52678 6.67392 2 8 2C9.32608 2 10.5979 2.52678 11.5355 3.46447C12.4732 4.40215 13 5.67392 13 7Z" stroke="#A3ABB0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                            </svg>
                                                            <span class="text-line-clamp-1"> 145 Brooklyn Ave, Califonia, New York </span>
                                                        </div>
                                                        <p class="description mt-20 text-line-clamp-2 text-variant-1">Sited on the 470-acre township of LBS Alam Perdana, Ritma Perdana is...</p>
                                                    </div>
                                                    
                                                    <div class="content-bottom">
                                                        <div class="d-flex gap-8 align-items-center">
                                                            <div class="avatar avt-40 round">
                                                                <img src="images/avatar/avt-png3.png" alt="avt">
                                                            </div>
                                                            <span>Arlene McCoy</span>
                                                        </div>
                                                        <h6 class="price">$7250,00</h6>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="homelengo-box list-style-1 list-style-2 line">
                                                <div class="archive-top">
                                                    <a href="property-details-v1.html" class="images-group">
                                                        <div class="images-style">
                                                            <img class="lazyload" data-src="images/home/house-sm-12.jpg" src="images/home/house-sm-12.jpg" alt="img-property">
                                                        </div>
                                                        <div class="top">
                                                            <ul class="d-flex gap-6 flex-wrap">
                                                                <li class="flag-tag primary">Featured</li>
                                                                <li class="flag-tag style-1">For Sale</li>
                                                            </ul>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="archive-bottom">
                                                    <div class="content-top">
                                                        <h6 class="text-capitalize"><a href="property-details-v1.html" class="link text-line-clamp-1"> Casa Lomas de Machalí Machas</a></h6>
                                                        <ul class="meta-list">
                                                            <li class="item">
                                                                <i class="icon icon-bed"></i>
                                                                <span class="text-variant-1">Beds:</span>
                                                                <span class="fw-6">3</span>
                                                            </li>
                                                            <li class="item">
                                                                <i class="icon icon-bath"></i>
                                                                <span class="text-variant-1">Baths:</span>
                                                                <span class="fw-6">2</span>
                                                            </li>
                                                            <li class="item">
                                                                <i class="icon icon-sqft"></i>
                                                                <span class="text-variant-1">Sqft:</span>
                                                                <span class="fw-6">1150</span>
                                                            </li>
                                                        </ul>
                                                        <div class="location">
                                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M10 7C10 7.53043 9.78929 8.03914 9.41421 8.41421C9.03914 8.78929 8.53043 9 8 9C7.46957 9 6.96086 8.78929 6.58579 8.41421C6.21071 8.03914 6 7.53043 6 7C6 6.46957 6.21071 5.96086 6.58579 5.58579C6.96086 5.21071 7.46957 5 8 5C8.53043 5 9.03914 5.21071 9.41421 5.58579C9.78929 5.96086 10 6.46957 10 7Z" stroke="#A3ABB0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                                <path d="M13 7C13 11.7613 8 14.5 8 14.5C8 14.5 3 11.7613 3 7C3 5.67392 3.52678 4.40215 4.46447 3.46447C5.40215 2.52678 6.67392 2 8 2C9.32608 2 10.5979 2.52678 11.5355 3.46447C12.4732 4.40215 13 5.67392 13 7Z" stroke="#A3ABB0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                            </svg>
                                                            <span class="text-line-clamp-1"> 145 Brooklyn Ave, Califonia, New York </span>
                                                        </div>
                                                        <p class="description mt-20 text-line-clamp-2 text-variant-1">Sited on the 470-acre township of LBS Alam Perdana, Ritma Perdana is...</p>

                                                    </div>
                                                    
                                                    <div class="content-bottom">
                                                        <div class="d-flex gap-8 align-items-center">
                                                            <div class="avatar avt-40 round">
                                                                <img src="images/avatar/avt-png3.png" alt="avt">
                                                            </div>
                                                            <span>Arlene McCoy</span>
                                                        </div>
                                                        <h6 class="price">$7250,00</h6>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="homelengo-box list-style-1 list-style-2 line">
                                                <div class="archive-top">
                                                    <a href="property-details-v1.html" class="images-group">
                                                        <div class="images-style">
                                                            <img class="lazyload" data-src="images/home/house-sm-13.jpg" src="images/home/house-sm-13.jpg" alt="img-property">
                                                        </div>
                                                        <div class="top">
                                                            <ul class="d-flex gap-6 flex-wrap">
                                                                <li class="flag-tag primary">Featured</li>
                                                                <li class="flag-tag style-1">For Sale</li>
                                                            </ul>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="archive-bottom">
                                                    <div class="content-top">
                                                        <h6 class="text-capitalize"><a href="property-details-v1.html" class="link text-line-clamp-1"> Casa Lomas de Machalí Machas</a></h6>
                                                        <ul class="meta-list">
                                                            <li class="item">
                                                                <i class="icon icon-bed"></i>
                                                                <span class="text-variant-1">Beds:</span>
                                                                <span class="fw-6">3</span>
                                                            </li>
                                                            <li class="item">
                                                                <i class="icon icon-bath"></i>
                                                                <span class="text-variant-1">Baths:</span>
                                                                <span class="fw-6">2</span>
                                                            </li>
                                                            <li class="item">
                                                                <i class="icon icon-sqft"></i>
                                                                <span class="text-variant-1">Sqft:</span>
                                                                <span class="fw-6">1150</span>
                                                            </li>
                                                        </ul>
                                                        <div class="location">
                                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M10 7C10 7.53043 9.78929 8.03914 9.41421 8.41421C9.03914 8.78929 8.53043 9 8 9C7.46957 9 6.96086 8.78929 6.58579 8.41421C6.21071 8.03914 6 7.53043 6 7C6 6.46957 6.21071 5.96086 6.58579 5.58579C6.96086 5.21071 7.46957 5 8 5C8.53043 5 9.03914 5.21071 9.41421 5.58579C9.78929 5.96086 10 6.46957 10 7Z" stroke="#A3ABB0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                                <path d="M13 7C13 11.7613 8 14.5 8 14.5C8 14.5 3 11.7613 3 7C3 5.67392 3.52678 4.40215 4.46447 3.46447C5.40215 2.52678 6.67392 2 8 2C9.32608 2 10.5979 2.52678 11.5355 3.46447C12.4732 4.40215 13 5.67392 13 7Z" stroke="#A3ABB0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                            </svg>
                                                            <span class="text-line-clamp-1"> 145 Brooklyn Ave, Califonia, New York </span>
                                                        </div>
                                                        <p class="description mt-20 text-line-clamp-2 text-variant-1">Sited on the 470-acre township of LBS Alam Perdana, Ritma Perdana is...</p>

                                                    </div>
                                                    
                                                    <div class="content-bottom">
                                                        <div class="d-flex gap-8 align-items-center">
                                                            <div class="avatar avt-40 round">
                                                                <img src="images/avatar/avt-png3.png" alt="avt">
                                                            </div>
                                                            <span>Arlene McCoy</span>
                                                        </div>
                                                        <h6 class="price">$7250,00</h6>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="homelengo-box list-style-1 list-style-2 line">
                                                <div class="archive-top">
                                                    <a href="property-details-v1.html" class="images-group">
                                                        <div class="images-style">
                                                            <img class="lazyload" data-src="images/home/house-sm-14.jpg" src="images/home/house-sm-14.jpg" alt="img-property">
                                                        </div>
                                                        <div class="top">
                                                            <ul class="d-flex gap-6 flex-wrap">
                                                                <li class="flag-tag primary">Featured</li>
                                                                <li class="flag-tag style-1">For Sale</li>
                                                            </ul>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="archive-bottom">
                                                    <div class="content-top">
                                                        <h6 class="text-capitalize"><a href="property-details-v1.html" class="link text-line-clamp-1"> Casa Lomas de Machalí Machas</a></h6>
                                                        <ul class="meta-list">
                                                            <li class="item">
                                                                <i class="icon icon-bed"></i>
                                                                <span class="text-variant-1">Beds:</span>
                                                                <span class="fw-6">3</span>
                                                            </li>
                                                            <li class="item">
                                                                <i class="icon icon-bath"></i>
                                                                <span class="text-variant-1">Baths:</span>
                                                                <span class="fw-6">2</span>
                                                            </li>
                                                            <li class="item">
                                                                <i class="icon icon-sqft"></i>
                                                                <span class="text-variant-1">Sqft:</span>
                                                                <span class="fw-6">1150</span>
                                                            </li>
                                                        </ul>
                                                        <div class="location">
                                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M10 7C10 7.53043 9.78929 8.03914 9.41421 8.41421C9.03914 8.78929 8.53043 9 8 9C7.46957 9 6.96086 8.78929 6.58579 8.41421C6.21071 8.03914 6 7.53043 6 7C6 6.46957 6.21071 5.96086 6.58579 5.58579C6.96086 5.21071 7.46957 5 8 5C8.53043 5 9.03914 5.21071 9.41421 5.58579C9.78929 5.96086 10 6.46957 10 7Z" stroke="#A3ABB0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                                <path d="M13 7C13 11.7613 8 14.5 8 14.5C8 14.5 3 11.7613 3 7C3 5.67392 3.52678 4.40215 4.46447 3.46447C5.40215 2.52678 6.67392 2 8 2C9.32608 2 10.5979 2.52678 11.5355 3.46447C12.4732 4.40215 13 5.67392 13 7Z" stroke="#A3ABB0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                            </svg>
                                                            <span class="text-line-clamp-1"> 145 Brooklyn Ave, Califonia, New York </span>
                                                        </div>
                                                        <p class="description mt-20 text-line-clamp-2 text-variant-1">Sited on the 470-acre township of LBS Alam Perdana, Ritma Perdana is...</p>

                                                    </div>
                                                    
                                                    <div class="content-bottom">
                                                        <div class="d-flex gap-8 align-items-center">
                                                            <div class="avatar avt-40 round">
                                                                <img src="images/avatar/avt-png3.png" alt="avt">
                                                            </div>
                                                            <span>Arlene McCoy</span>
                                                        </div>
                                                        <h6 class="price">$7250,00</h6>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="homelengo-box list-style-1 list-style-2 line">
                                                <div class="archive-top">
                                                    <a href="property-details-v1.html" class="images-group">
                                                        <div class="images-style">
                                                            <img class="lazyload" data-src="images/home/house-sm-15.jpg" src="images/home/house-sm-15.jpg" alt="img-property">
                                                        </div>
                                                        <div class="top">
                                                            <ul class="d-flex gap-6 flex-wrap">
                                                                <li class="flag-tag primary">Featured</li>
                                                                <li class="flag-tag style-1">For Sale</li>
                                                            </ul>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="archive-bottom">
                                                    <div class="content-top">
                                                        <h6 class="text-capitalize"><a href="property-details-v1.html" class="link text-line-clamp-1"> Casa Lomas de Machalí Machas</a></h6>
                                                        <ul class="meta-list">
                                                            <li class="item">
                                                                <i class="icon icon-bed"></i>
                                                                <span class="text-variant-1">Beds:</span>
                                                                <span class="fw-6">3</span>
                                                            </li>
                                                            <li class="item">
                                                                <i class="icon icon-bath"></i>
                                                                <span class="text-variant-1">Baths:</span>
                                                                <span class="fw-6">2</span>
                                                            </li>
                                                            <li class="item">
                                                                <i class="icon icon-sqft"></i>
                                                                <span class="text-variant-1">Sqft:</span>
                                                                <span class="fw-6">1150</span>
                                                            </li>
                                                        </ul>
                                                        <div class="location">
                                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M10 7C10 7.53043 9.78929 8.03914 9.41421 8.41421C9.03914 8.78929 8.53043 9 8 9C7.46957 9 6.96086 8.78929 6.58579 8.41421C6.21071 8.03914 6 7.53043 6 7C6 6.46957 6.21071 5.96086 6.58579 5.58579C6.96086 5.21071 7.46957 5 8 5C8.53043 5 9.03914 5.21071 9.41421 5.58579C9.78929 5.96086 10 6.46957 10 7Z" stroke="#A3ABB0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                                <path d="M13 7C13 11.7613 8 14.5 8 14.5C8 14.5 3 11.7613 3 7C3 5.67392 3.52678 4.40215 4.46447 3.46447C5.40215 2.52678 6.67392 2 8 2C9.32608 2 10.5979 2.52678 11.5355 3.46447C12.4732 4.40215 13 5.67392 13 7Z" stroke="#A3ABB0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                            </svg>
                                                            <span class="text-line-clamp-1"> 145 Brooklyn Ave, Califonia, New York </span>
                                                        </div>
                                                        <p class="description mt-20 text-line-clamp-2 text-variant-1">Sited on the 470-acre township of LBS Alam Perdana, Ritma Perdana is...</p>

                                                    </div>
                                                    
                                                    <div class="content-bottom">
                                                        <div class="d-flex gap-8 align-items-center">
                                                            <div class="avatar avt-40 round">
                                                                <img src="images/avatar/avt-png3.png" alt="avt">
                                                            </div>
                                                            <span>Arlene McCoy</span>
                                                        </div>
                                                        <h6 class="price">$7250,00</h6>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="homelengo-box list-style-1 list-style-2 line">
                                                <div class="archive-top">
                                                    <a href="property-details-v1.html" class="images-group">
                                                        <div class="images-style">
                                                            <img class="lazyload" data-src="images/home/house-sm-16.jpg" src="images/home/house-sm-16.jpg" alt="img-property">
                                                        </div>
                                                        <div class="top">
                                                            <ul class="d-flex gap-6 flex-wrap">
                                                                <li class="flag-tag primary">Featured</li>
                                                                <li class="flag-tag style-1">For Sale</li>
                                                            </ul>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="archive-bottom">
                                                    <div class="content-top">
                                                        <h6 class="text-capitalize"><a href="property-details-v1.html" class="link text-line-clamp-1"> Casa Lomas de Machalí Machas</a></h6>
                                                        <ul class="meta-list">
                                                            <li class="item">
                                                                <i class="icon icon-bed"></i>
                                                                <span class="text-variant-1">Beds:</span>
                                                                <span class="fw-6">3</span>
                                                            </li>
                                                            <li class="item">
                                                                <i class="icon icon-bath"></i>
                                                                <span class="text-variant-1">Baths:</span>
                                                                <span class="fw-6">2</span>
                                                            </li>
                                                            <li class="item">
                                                                <i class="icon icon-sqft"></i>
                                                                <span class="text-variant-1">Sqft:</span>
                                                                <span class="fw-6">1150</span>
                                                            </li>
                                                        </ul>
                                                        <div class="location">
                                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M10 7C10 7.53043 9.78929 8.03914 9.41421 8.41421C9.03914 8.78929 8.53043 9 8 9C7.46957 9 6.96086 8.78929 6.58579 8.41421C6.21071 8.03914 6 7.53043 6 7C6 6.46957 6.21071 5.96086 6.58579 5.58579C6.96086 5.21071 7.46957 5 8 5C8.53043 5 9.03914 5.21071 9.41421 5.58579C9.78929 5.96086 10 6.46957 10 7Z" stroke="#A3ABB0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                                <path d="M13 7C13 11.7613 8 14.5 8 14.5C8 14.5 3 11.7613 3 7C3 5.67392 3.52678 4.40215 4.46447 3.46447C5.40215 2.52678 6.67392 2 8 2C9.32608 2 10.5979 2.52678 11.5355 3.46447C12.4732 4.40215 13 5.67392 13 7Z" stroke="#A3ABB0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                            </svg>
                                                            <span class="text-line-clamp-1"> 145 Brooklyn Ave, Califonia, New York </span>
                                                        </div>
                                                        <p class="description mt-20 text-line-clamp-2 text-variant-1">Sited on the 470-acre township of LBS Alam Perdana, Ritma Perdana is...</p>

                                                    </div>
                                                    
                                                    <div class="content-bottom">
                                                        <div class="d-flex gap-8 align-items-center">
                                                            <div class="avatar avt-40 round">
                                                                <img src="images/avatar/avt-png3.png" alt="avt">
                                                            </div>
                                                            <span>Arlene McCoy</span>
                                                        </div>
                                                        <h6 class="price">$7250,00</h6>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="homelengo-box list-style-1 list-style-2 line">
                                                <div class="archive-top">
                                                    <a href="property-details-v1.html" class="images-group">
                                                        <div class="images-style">
                                                            <img class="lazyload" data-src="images/home/house-sm-17.jpg" src="images/home/house-sm-17.jpg" alt="img-property">
                                                        </div>
                                                        <div class="top">
                                                            <ul class="d-flex gap-6 flex-wrap">
                                                                <li class="flag-tag primary">Featured</li>
                                                                <li class="flag-tag style-1">For Sale</li>
                                                            </ul>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="archive-bottom">
                                                    <div class="content-top">
                                                        <h6 class="text-capitalize"><a href="property-details-v1.html" class="link text-line-clamp-1"> Casa Lomas de Machalí Machas</a></h6>
                                                        <ul class="meta-list">
                                                            <li class="item">
                                                                <i class="icon icon-bed"></i>
                                                                <span class="text-variant-1">Beds:</span>
                                                                <span class="fw-6">3</span>
                                                            </li>
                                                            <li class="item">
                                                                <i class="icon icon-bath"></i>
                                                                <span class="text-variant-1">Baths:</span>
                                                                <span class="fw-6">2</span>
                                                            </li>
                                                            <li class="item">
                                                                <i class="icon icon-sqft"></i>
                                                                <span class="text-variant-1">Sqft:</span>
                                                                <span class="fw-6">1150</span>
                                                            </li>
                                                        </ul>
                                                        <div class="location">
                                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M10 7C10 7.53043 9.78929 8.03914 9.41421 8.41421C9.03914 8.78929 8.53043 9 8 9C7.46957 9 6.96086 8.78929 6.58579 8.41421C6.21071 8.03914 6 7.53043 6 7C6 6.46957 6.21071 5.96086 6.58579 5.58579C6.96086 5.21071 7.46957 5 8 5C8.53043 5 9.03914 5.21071 9.41421 5.58579C9.78929 5.96086 10 6.46957 10 7Z" stroke="#A3ABB0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                                <path d="M13 7C13 11.7613 8 14.5 8 14.5C8 14.5 3 11.7613 3 7C3 5.67392 3.52678 4.40215 4.46447 3.46447C5.40215 2.52678 6.67392 2 8 2C9.32608 2 10.5979 2.52678 11.5355 3.46447C12.4732 4.40215 13 5.67392 13 7Z" stroke="#A3ABB0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                            </svg>
                                                            <span class="text-line-clamp-1"> 145 Brooklyn Ave, Califonia, New York </span>
                                                        </div>
                                                        <p class="description mt-20 text-line-clamp-2 text-variant-1">Sited on the 470-acre township of LBS Alam Perdana, Ritma Perdana is...</p>

                                                    </div>
                                                    
                                                    <div class="content-bottom">
                                                        <div class="d-flex gap-8 align-items-center">
                                                            <div class="avatar avt-40 round">
                                                                <img src="images/avatar/avt-png3.png" alt="avt">
                                                            </div>
                                                            <span>Arlene McCoy</span>
                                                        </div>
                                                        <h6 class="price">$7250,00</h6>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="homelengo-box list-style-1 list-style-2 line">
                                                <div class="archive-top">
                                                    <a href="property-details-v1.html" class="images-group">
                                                        <div class="images-style">
                                                            <img class="lazyload" data-src="images/home/house-sm-18.jpg" src="images/home/house-sm-18.jpg" alt="img-property">
                                                        </div>
                                                        <div class="top">
                                                            <ul class="d-flex gap-6 flex-wrap">
                                                                <li class="flag-tag primary">Featured</li>
                                                                <li class="flag-tag style-1">For Sale</li>
                                                            </ul>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="archive-bottom">
                                                    <div class="content-top">
                                                        <h6 class="text-capitalize"><a href="property-details-v1.html" class="link text-line-clamp-1"> Casa Lomas de Machalí Machas</a></h6>
                                                        <ul class="meta-list">
                                                            <li class="item">
                                                                <i class="icon icon-bed"></i>
                                                                <span class="text-variant-1">Beds:</span>
                                                                <span class="fw-6">3</span>
                                                            </li>
                                                            <li class="item">
                                                                <i class="icon icon-bath"></i>
                                                                <span class="text-variant-1">Baths:</span>
                                                                <span class="fw-6">2</span>
                                                            </li>
                                                            <li class="item">
                                                                <i class="icon icon-sqft"></i>
                                                                <span class="text-variant-1">Sqft:</span>
                                                                <span class="fw-6">1150</span>
                                                            </li>
                                                        </ul>
                                                        <div class="location">
                                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M10 7C10 7.53043 9.78929 8.03914 9.41421 8.41421C9.03914 8.78929 8.53043 9 8 9C7.46957 9 6.96086 8.78929 6.58579 8.41421C6.21071 8.03914 6 7.53043 6 7C6 6.46957 6.21071 5.96086 6.58579 5.58579C6.96086 5.21071 7.46957 5 8 5C8.53043 5 9.03914 5.21071 9.41421 5.58579C9.78929 5.96086 10 6.46957 10 7Z" stroke="#A3ABB0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                                <path d="M13 7C13 11.7613 8 14.5 8 14.5C8 14.5 3 11.7613 3 7C3 5.67392 3.52678 4.40215 4.46447 3.46447C5.40215 2.52678 6.67392 2 8 2C9.32608 2 10.5979 2.52678 11.5355 3.46447C12.4732 4.40215 13 5.67392 13 7Z" stroke="#A3ABB0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                            </svg>
                                                            <span class="text-line-clamp-1"> 145 Brooklyn Ave, Califonia, New York </span>
                                                        </div>
                                                        <p class="description mt-20 text-line-clamp-2 text-variant-1">Sited on the 470-acre township of LBS Alam Perdana, Ritma Perdana is...</p>

                                                    </div>
                                                    
                                                    <div class="content-bottom">
                                                        <div class="d-flex gap-8 align-items-center">
                                                            <div class="avatar avt-40 round">
                                                                <img src="images/avatar/avt-png3.png" alt="avt">
                                                            </div>
                                                            <span>Arlene McCoy</span>
                                                        </div>
                                                        <h6 class="price">$7250,00</h6>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="homelengo-box list-style-1 list-style-2 line">
                                                <div class="archive-top">
                                                    <a href="property-details-v1.html" class="images-group">
                                                        <div class="images-style">
                                                            <img class="lazyload" data-src="images/home/house-sm-19.jpg" src="images/home/house-sm-19.jpg" alt="img-property">
                                                        </div>
                                                        <div class="top">
                                                            <ul class="d-flex gap-6 flex-wrap">
                                                                <li class="flag-tag primary">Featured</li>
                                                                <li class="flag-tag style-1">For Sale</li>
                                                            </ul>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="archive-bottom">
                                                    <div class="content-top">
                                                        <h6 class="text-capitalize"><a href="property-details-v1.html" class="link text-line-clamp-1"> Casa Lomas de Machalí Machas</a></h6>
                                                        <ul class="meta-list">
                                                            <li class="item">
                                                                <i class="icon icon-bed"></i>
                                                                <span class="text-variant-1">Beds:</span>
                                                                <span class="fw-6">3</span>
                                                            </li>
                                                            <li class="item">
                                                                <i class="icon icon-bath"></i>
                                                                <span class="text-variant-1">Baths:</span>
                                                                <span class="fw-6">2</span>
                                                            </li>
                                                            <li class="item">
                                                                <i class="icon icon-sqft"></i>
                                                                <span class="text-variant-1">Sqft:</span>
                                                                <span class="fw-6">1150</span>
                                                            </li>
                                                        </ul>
                                                        <div class="location">
                                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M10 7C10 7.53043 9.78929 8.03914 9.41421 8.41421C9.03914 8.78929 8.53043 9 8 9C7.46957 9 6.96086 8.78929 6.58579 8.41421C6.21071 8.03914 6 7.53043 6 7C6 6.46957 6.21071 5.96086 6.58579 5.58579C6.96086 5.21071 7.46957 5 8 5C8.53043 5 9.03914 5.21071 9.41421 5.58579C9.78929 5.96086 10 6.46957 10 7Z" stroke="#A3ABB0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                                <path d="M13 7C13 11.7613 8 14.5 8 14.5C8 14.5 3 11.7613 3 7C3 5.67392 3.52678 4.40215 4.46447 3.46447C5.40215 2.52678 6.67392 2 8 2C9.32608 2 10.5979 2.52678 11.5355 3.46447C12.4732 4.40215 13 5.67392 13 7Z" stroke="#A3ABB0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                            </svg>
                                                            <span class="text-line-clamp-1"> 145 Brooklyn Ave, Califonia, New York </span>
                                                        </div>
                                                        <p class="description mt-20 text-line-clamp-2 text-variant-1">Sited on the 470-acre township of LBS Alam Perdana, Ritma Perdana is...</p>

                                                    </div>
                                                    
                                                    <div class="content-bottom">
                                                        <div class="d-flex gap-8 align-items-center">
                                                            <div class="avatar avt-40 round">
                                                                <img src="images/avatar/avt-png3.png" alt="avt">
                                                            </div>
                                                            <span>Arlene McCoy</span>
                                                        </div>
                                                        <h6 class="price">$7250,00</h6>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="homelengo-box list-style-1 list-style-2 line">
                                                <div class="archive-top">
                                                    <a href="property-details-v1.html" class="images-group">
                                                        <div class="images-style">
                                                            <img class="lazyload" data-src="images/home/house-sm-11.jpg" src="images/home/house-sm-11.jpg" alt="img-property">
                                                        </div>
                                                        <div class="top">
                                                            <ul class="d-flex gap-6 flex-wrap">
                                                                <li class="flag-tag primary">Featured</li>
                                                                <li class="flag-tag style-1">For Sale</li>
                                                            </ul>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="archive-bottom">
                                                    <div class="content-top">
                                                        <h6 class="text-capitalize"><a href="property-details-v1.html" class="link text-line-clamp-1"> Casa Lomas de Machalí Machas</a></h6>
                                                        <ul class="meta-list">
                                                            <li class="item">
                                                                <i class="icon icon-bed"></i>
                                                                <span class="text-variant-1">Beds:</span>
                                                                <span class="fw-6">3</span>
                                                            </li>
                                                            <li class="item">
                                                                <i class="icon icon-bath"></i>
                                                                <span class="text-variant-1">Baths:</span>
                                                                <span class="fw-6">2</span>
                                                            </li>
                                                            <li class="item">
                                                                <i class="icon icon-sqft"></i>
                                                                <span class="text-variant-1">Sqft:</span>
                                                                <span class="fw-6">1150</span>
                                                            </li>
                                                        </ul>
                                                        <div class="location">
                                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M10 7C10 7.53043 9.78929 8.03914 9.41421 8.41421C9.03914 8.78929 8.53043 9 8 9C7.46957 9 6.96086 8.78929 6.58579 8.41421C6.21071 8.03914 6 7.53043 6 7C6 6.46957 6.21071 5.96086 6.58579 5.58579C6.96086 5.21071 7.46957 5 8 5C8.53043 5 9.03914 5.21071 9.41421 5.58579C9.78929 5.96086 10 6.46957 10 7Z" stroke="#A3ABB0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                                <path d="M13 7C13 11.7613 8 14.5 8 14.5C8 14.5 3 11.7613 3 7C3 5.67392 3.52678 4.40215 4.46447 3.46447C5.40215 2.52678 6.67392 2 8 2C9.32608 2 10.5979 2.52678 11.5355 3.46447C12.4732 4.40215 13 5.67392 13 7Z" stroke="#A3ABB0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                            </svg>
                                                            <span class="text-line-clamp-1"> 145 Brooklyn Ave, Califonia, New York </span>
                                                        </div>
                                                        <p class="description mt-20 text-line-clamp-2 text-variant-1">Sited on the 470-acre township of LBS Alam Perdana, Ritma Perdana is...</p>

                                                    </div>
                                                    
                                                    <div class="content-bottom">
                                                        <div class="d-flex gap-8 align-items-center">
                                                            <div class="avatar avt-40 round">
                                                                <img src="images/avatar/avt-png3.png" alt="avt">
                                                            </div>
                                                            <span>Arlene McCoy</span>
                                                        </div>
                                                        <h6 class="price">$7250,00</h6>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="wd-navigation mt-20">
                                        <li><a href="#" class="nav-item"><i class="icon icon-arr-l"></i></a></li>
                                        <li><a href="#" class="nav-item">1</a></li>
                                        <li><a href="#" class="nav-item">2</a></li>
                                        <li><a href="#" class="nav-item active">3</a></li>
                                        <li><a href="#" class="nav-item">4</a></li>
                                        <li><a href="#" class="nav-item">...</a></li>
                                        <li><a href="#" class="nav-item"><i class="icon icon-arr-r"></i></a></li>
                                    </ul>
                                </div>
                            </div> 
                        </div>
                    </div>

                    
                    
                </div>
            </section>

            <!-- footer -->
            <footer class="footer">
                <div class="top-footer">
                  <div class="container">
                    <div class="content-footer-top">
                        <div class="footer-logo"><a href="index-2.html"><img src="images/logo/logo-footer%402x.png" alt="logo" width="166" height="48"></a></div>
                        <div class="wd-social">
                          <span>Follow Us:</span>
                          <ul class="list-social d-flex align-items-center">
                            <li>
                                <a href="#" class="box-icon w-40 social">
                                    <svg class="icon" width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7.60547 9L8.00541 6.10437H5.50481V4.22531C5.50481 3.43313 5.85413 2.66094 6.97406 2.66094H8.11087V0.195625C8.11087 0.195625 7.07925 0 6.09291 0C4.03359 0 2.68753 1.38688 2.68753 3.8975V6.10437H0.398438V9H2.68753V16H5.50481V9H7.60547Z" fill="white"/>
                                    </svg>
                                </a>
                            </li>
                            <li><a href="#" class="box-icon w-40 social">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3.58151 16H0.264292V5.31762H3.58151V16ZM1.92111 3.86044C0.860376 3.86044 0 2.98185 0 1.92111C7.59231e-09 1.4116 0.202403 0.92296 0.562681 0.562681C0.92296 0.202403 1.4116 0 1.92111 0C2.43063 0 2.91927 0.202403 3.27955 0.562681C3.63983 0.92296 3.84223 1.4116 3.84223 1.92111C3.84223 2.98185 2.98149 3.86044 1.92111 3.86044ZM15.9968 16H12.6867V10.7999C12.6867 9.56057 12.6617 7.97125 10.962 7.97125C9.23735 7.97125 8.97306 9.31771 8.97306 10.7106V16H5.65941V5.31762H8.84091V6.77479H8.88734C9.33021 5.93549 10.412 5.04976 12.026 5.04976C15.3832 5.04976 16.0004 7.26052 16.0004 10.132V16H15.9968Z" fill="white"/>
                                </svg>
                                    
                            </a></li>
                            <li><a href="#" class="box-icon w-40 social">
                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.30314 5.92804L13.4029 0H12.1944L7.7663 5.14724L4.22958 0H0.150391L5.4986 7.78354L0.150391 14H1.35894L6.03514 8.56434L9.77017 14H13.8494L8.30284 5.92804H8.30314ZM6.64787 7.85211L6.10598 7.07705L1.79439 0.909771H3.65065L7.13015 5.88696L7.67204 6.66202L12.195 13.1316H10.3387L6.64787 7.85241V7.85211Z" fill="white"/>
                                </svg>
                                    
                            </a></li>
                            <li><a href="#" class="box-icon w-40 social">
                                <svg width="13" height="16" viewBox="0 0 13 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.53967 0C3.2506 0 0 2.19271 0 5.74145C0 7.99827 1.26947 9.28056 2.03884 9.28056C2.3562 9.28056 2.53893 8.39578 2.53893 8.14574C2.53893 7.8476 1.77918 7.21287 1.77918 5.97226C1.77918 3.39486 3.74108 1.5676 6.28001 1.5676C8.4631 1.5676 10.0788 2.80821 10.0788 5.08748C10.0788 6.78972 9.39597 9.98261 7.18402 9.98261C6.3858 9.98261 5.70298 9.40558 5.70298 8.57851C5.70298 7.36675 6.54929 6.19345 6.54929 4.94322C6.54929 2.82103 3.53912 3.20572 3.53912 5.7703C3.53912 6.30886 3.60644 6.90512 3.84686 7.3956C3.40448 9.2998 2.50046 12.1369 2.50046 14.0988C2.50046 14.7046 2.58702 15.3009 2.64472 15.9068C2.75371 16.0286 2.69922 16.0158 2.86591 15.9549C4.4816 13.7429 4.42389 13.3102 5.1548 10.4154C5.5491 11.1655 6.56852 11.5694 7.37636 11.5694C10.7808 11.5694 12.31 8.25152 12.31 5.26059C12.31 2.07731 9.55946 0 6.53967 0Z" fill="white"/>
                                </svg>
                                    
                            </a></li>
                            <li><a href="#" class="box-icon w-40 social">
                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.99812 4.66567C5.71277 4.66567 4.66383 5.71463 4.66383 7C4.66383 8.28537 5.71277 9.33433 6.99812 9.33433C8.28346 9.33433 9.3324 8.28537 9.3324 7C9.3324 5.71463 8.28346 4.66567 6.99812 4.66567ZM13.9992 7C13.9992 6.03335 14.008 5.07545 13.9537 4.11055C13.8994 2.98979 13.6437 1.99512 12.8242 1.17556C12.0029 0.35426 11.01 0.100338 9.88927 0.0460516C8.92263 -0.00823506 7.96475 0.000520879 6.99987 0.000520879C6.03323 0.000520879 5.07536 -0.00823506 4.11047 0.0460516C2.98973 0.100338 1.99508 0.356011 1.17554 1.17556C0.354253 1.99687 0.100336 2.98979 0.0460508 4.11055C-0.00823491 5.0772 0.00052087 6.0351 0.00052087 7C0.00052087 7.9649 -0.00823491 8.92455 0.0460508 9.88945C0.100336 11.0102 0.356004 12.0049 1.17554 12.8244C1.99683 13.6457 2.98973 13.8997 4.11047 13.9539C5.07711 14.0082 6.03499 13.9995 6.99987 13.9995C7.9665 13.9995 8.92438 14.0082 9.88927 13.9539C11.01 13.8997 12.0047 13.644 12.8242 12.8244C13.6455 12.0031 13.8994 11.0102 13.9537 9.88945C14.0097 8.92455 13.9992 7.96665 13.9992 7ZM6.99812 10.5917C5.01056 10.5917 3.40651 8.98759 3.40651 7C3.40651 5.01241 5.01056 3.40832 6.99812 3.40832C8.98567 3.40832 10.5897 5.01241 10.5897 7C10.5897 8.98759 8.98567 10.5917 6.99812 10.5917ZM10.7368 4.10004C10.2728 4.10004 9.89802 3.72529 9.89802 3.26122C9.89802 2.79716 10.2728 2.42241 10.7368 2.42241C11.2009 2.42241 11.5756 2.79716 11.5756 3.26122C11.5758 3.37142 11.5542 3.48056 11.5121 3.58239C11.47 3.68422 11.4082 3.77675 11.3303 3.85467C11.2523 3.93258 11.1598 3.99437 11.058 4.03647C10.9562 4.07858 10.847 4.10018 10.7368 4.10004Z" fill="white"/>
                                </svg>
                                    
                            </a></li>
                            <li><a href="#" class="box-icon w-40 social">
                                <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.6657 1.76024C15.4817 1.06737 14.9395 0.521689 14.2511 0.336504C13.0033 0 8 0 8 0C8 0 2.99669 0 1.7489 0.336504C1.06052 0.521718 0.518349 1.06737 0.334336 1.76024C0 3.01611 0 5.63636 0 5.63636C0 5.63636 0 8.25661 0.334336 9.51248C0.518349 10.2053 1.06052 10.7283 1.7489 10.9135C2.99669 11.25 8 11.25 8 11.25C8 11.25 13.0033 11.25 14.2511 10.9135C14.9395 10.7283 15.4817 10.2053 15.6657 9.51248C16 8.25661 16 5.63636 16 5.63636C16 5.63636 16 3.01611 15.6657 1.76024ZM6.36363 8.01535V3.25737L10.5454 5.63642L6.36363 8.01535Z" fill="white"/>
                                </svg>
                                    
                            </a></li>
                          </ul>
                        </div>
                    </div>
                  </div>
                </div>
                <div class="inner-footer">
                  <div class="container">
                    <div class="row">
                      <div class="col-lg-4 col-md-6">
                        <div class="footer-cl-1">
                          <p class="text-variant-2">Specializes in providing high-class tours for those in need. Contact Us</p>
                          <ul class="mt-12">
                            <li class="mt-12 d-flex align-items-center gap-8">
                                <i class="icon icon-mapPinLine fs-20 text-variant-2"></i>
                                <p class="text-white">101 E 129th St, East Chicago, IN 46312, US</p>
                            </li>
                            <li class="mt-12 d-flex align-items-center gap-8">
                                <i class="icon icon-phone2 fs-20 text-variant-2"></i>
                                <a href="tel:1-333-345-6868" class="text-white caption-1">1-333-345-6868</a>
                            </li>
                            <li class="mt-12 d-flex align-items-center gap-8">
                                <i class="icon icon-mail fs-20 text-variant-2"></i>
                                <p class="text-white">themesflat@gmail.com</p>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <div class="col-lg-2 col-md-6">
                        <div class="footer-cl-2 footer-col-block">
                            <div class="fw-7 text-white footer-heading-mobile">Categories</div>
                            <div class="tf-collapse-content">
                                <ul class="mt-10 navigation-menu-footer">
                                    <li> <a href="pricing.html" class="caption-1 text-variant-2">Pricing Plans</a> </li>
    
                                    <li> <a href="our-service.html" class="caption-1 text-variant-2">Our Services</a> </li>
    
                                    <li> <a href="about-us.html" class="caption-1 text-variant-2">About Us</a> </li>
    
                                    <li> <a href="contact.html" class="caption-1 text-variant-2">Contact Us</a> </li>
                                </ul>
                            </div>
                            
                        </div>
                      </div>
                      <div class="col-lg-2 col-md-6">
                        <div class="footer-cl-3 footer-col-block">
                            <div class="fw-7 text-white footer-heading-mobile">Our Company</div>
                            <div class="tf-collapse-content">
                                <ul class="mt-10 navigation-menu-footer">
                                    <li> <a href="topmap-list.html" class="caption-1 text-variant-2">Property For Sale</a> </li>
                                    <li> <a href="topmap-grid.html" class="caption-1 text-variant-2">Property For Rent</a> </li>
                                    <li> <a href="topmap-grid.html" class="caption-1 text-variant-2">Property For Buy</a> </li>
                                    <li> <a href="topmap-grid.html" class="caption-1 text-variant-2">Our Agents</a> </li>
                                </ul>
                            </div>
                            
                        </div>
                      </div>
                      <div class="col-lg-4 col-md-6">
                        <div class="footer-cl-4 footer-col-block">
                            <div class="fw-7 text-white footer-heading-mobile">Newsletter</div>
                            <div class="tf-collapse-content">
                                <p class="mt-12 text-variant-2">Your Weekly/Monthly Dose of Knowledge and Inspiration</p>
                                <form class="mt-12" id="subscribe-form" action="#" method="post" accept-charset="utf-8" data-mailchimp="true">
                                    <div id="subscribe-content">
                                        <input type="email" name="email-form" id="subscribe-email" placeholder="Your email address"/>
                                        <button type="button" id="subscribe-button" class="button-subscribe">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5.00044 9.99935L2.72461 2.60352C8.16867 4.18685 13.3024 6.68806 17.9046 9.99935C13.3027 13.3106 8.16921 15.8118 2.72544 17.3952L5.00044 9.99935ZM5.00044 9.99935H11.2504" stroke="#1563DF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </button>
                                    </div>
                                    <div id="subscribe-msg"></div>
                                </form>
                            </div>
                        </div>
                      </div>
                      
                    </div>
                  </div>
                </div>
                <div class="bottom-footer">
                  <div class="container">
                    <div class="content-footer-bottom">
                        <div class="copyright">©2024 Homelengo. All Rights Reserved.</div>
                          
                        <ul class="menu-bottom">
                          <li><a href="our-service.html">Terms Of Services</a> </li>

                          <li><a href="pricing.html">Privacy Policy</a> </li>
                          <li><a href="contact.html">Cookie Policy</a> </li>

                        </ul>
                    </div>
                  </div>
                </div>
            </footer>
            <!-- end footer -->
        </div>
        <!-- /#page -->

    </div>
    
    <!-- go top -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 286.138;"></path>
        </svg>
    </div>


    <!-- popup login -->
    <div class="modal modal-account fade" id="modalLogin">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="flat-account">
                    <div class="banner-account">
                        <img src="images/banner/banner-account1.jpg" alt="banner">
                    </div>
                    <form class="form-account">
                        <div class="title-box">
                            <h4>Login</h4>
                            <span class="close-modal icon-close2" data-bs-dismiss="modal"></span>
                        </div>
                        <div class="box">
                            <fieldset class="box-fieldset">
                                <label>Account</label>
                                <div class="ip-field">
                                    <svg class="icon" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13.4869 14.0435C12.9628 13.3497 12.2848 12.787 11.5063 12.3998C10.7277 12.0126 9.86989 11.8115 9.00038 11.8123C8.13086 11.8115 7.27304 12.0126 6.49449 12.3998C5.71594 12.787 5.03793 13.3497 4.51388 14.0435M13.4869 14.0435C14.5095 13.1339 15.2307 11.9349 15.5563 10.6056C15.8818 9.27625 15.7956 7.87934 15.309 6.60014C14.8224 5.32093 13.9584 4.21986 12.8317 3.44295C11.7049 2.66604 10.3686 2.25 9 2.25C7.63137 2.25 6.29508 2.66604 5.16833 3.44295C4.04158 4.21986 3.17762 5.32093 2.69103 6.60014C2.20443 7.87934 2.11819 9.27625 2.44374 10.6056C2.76929 11.9349 3.49125 13.1339 4.51388 14.0435M13.4869 14.0435C12.2524 15.1447 10.6546 15.7521 9.00038 15.7498C7.3459 15.7523 5.74855 15.1448 4.51388 14.0435M11.2504 7.31228C11.2504 7.90902 11.0133 8.48131 10.5914 8.90327C10.1694 9.32523 9.59711 9.56228 9.00038 9.56228C8.40364 9.56228 7.83134 9.32523 7.40939 8.90327C6.98743 8.48131 6.75038 7.90902 6.75038 7.31228C6.75038 6.71554 6.98743 6.14325 7.40939 5.72129C7.83134 5.29933 8.40364 5.06228 9.00038 5.06228C9.59711 5.06228 10.1694 5.29933 10.5914 5.72129C11.0133 6.14325 11.2504 6.71554 11.2504 7.31228Z" stroke="#A3ABB0" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    <input type="text" class="form-control" placeholder="Your name">   
                                </div>
                            </fieldset>
                            <fieldset class="box-fieldset">
                                <label>Password</label>
                                <div class="ip-field">
                                    <svg class="icon" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12.375 7.875V5.0625C12.375 4.16739 12.0194 3.30895 11.3865 2.67601C10.7535 2.04308 9.89511 1.6875 9 1.6875C8.10489 1.6875 7.24645 2.04308 6.61351 2.67601C5.98058 3.30895 5.625 4.16739 5.625 5.0625V7.875M5.0625 16.3125H12.9375C13.3851 16.3125 13.8143 16.1347 14.1307 15.8182C14.4472 15.5018 14.625 15.0726 14.625 14.625V9.5625C14.625 9.11495 14.4472 8.68573 14.1307 8.36926C13.8143 8.05279 13.3851 7.875 12.9375 7.875H5.0625C4.61495 7.875 4.18573 8.05279 3.86926 8.36926C3.55279 8.68573 3.375 9.11495 3.375 9.5625V14.625C3.375 15.0726 3.55279 15.5018 3.86926 15.8182C4.18573 16.1347 4.61495 16.3125 5.0625 16.3125Z" stroke="#A3ABB0" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    <input type="text" class="form-control" placeholder="Your password">   
                                </div>
                                <div class="text-forgot text-end"><a href="#">Forgot password</a></div>

                            </fieldset>
                        </div>
                        <div class="box box-btn">
                            <a href="dashboard.html" class="tf-btn primary w-100">Login</a>
                            <div class="text text-center">Don’t you have an account? <a href="#modalRegister" data-bs-toggle="modal" class="text-primary">Register</a></div>
                        </div>
                        <p class="box text-center caption-2">or login with</p>
                        <div class="group-btn">
                            <a href="#" class="btn-social">
                                <img src="images/logo/google.jpg" alt="img">
                                Google
                            </a>
                            <a href="#" class="btn-social">
                                <img src="images/logo/fb.jpg" alt="img">
                                Facebook
                            </a>
                            
                        </div>
                    </form>
                   
                  
                </div>
            </div> 
        </div>
    </div>
    <!-- popup register -->
    <div class="modal modal-account fade" id="modalRegister">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="flat-account">
                    <div class="banner-account">
                        <img src="images/banner/banner-account2.jpg" alt="banner">
                    </div>
                    <form class="form-account">
                        <div class="title-box">
                            <h4>Register</h4>
                            <span class="close-modal icon-close2" data-bs-dismiss="modal"></span>
                        </div>
                        <div class="box">
                            <fieldset class="box-fieldset">
                                <label>User name</label>
                                <div class="ip-field">
                                    <svg class="icon" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13.4869 14.0435C12.9628 13.3497 12.2848 12.787 11.5063 12.3998C10.7277 12.0126 9.86989 11.8115 9.00038 11.8123C8.13086 11.8115 7.27304 12.0126 6.49449 12.3998C5.71594 12.787 5.03793 13.3497 4.51388 14.0435M13.4869 14.0435C14.5095 13.1339 15.2307 11.9349 15.5563 10.6056C15.8818 9.27625 15.7956 7.87934 15.309 6.60014C14.8224 5.32093 13.9584 4.21986 12.8317 3.44295C11.7049 2.66604 10.3686 2.25 9 2.25C7.63137 2.25 6.29508 2.66604 5.16833 3.44295C4.04158 4.21986 3.17762 5.32093 2.69103 6.60014C2.20443 7.87934 2.11819 9.27625 2.44374 10.6056C2.76929 11.9349 3.49125 13.1339 4.51388 14.0435M13.4869 14.0435C12.2524 15.1447 10.6546 15.7521 9.00038 15.7498C7.3459 15.7523 5.74855 15.1448 4.51388 14.0435M11.2504 7.31228C11.2504 7.90902 11.0133 8.48131 10.5914 8.90327C10.1694 9.32523 9.59711 9.56228 9.00038 9.56228C8.40364 9.56228 7.83134 9.32523 7.40939 8.90327C6.98743 8.48131 6.75038 7.90902 6.75038 7.31228C6.75038 6.71554 6.98743 6.14325 7.40939 5.72129C7.83134 5.29933 8.40364 5.06228 9.00038 5.06228C9.59711 5.06228 10.1694 5.29933 10.5914 5.72129C11.0133 6.14325 11.2504 6.71554 11.2504 7.31228Z" stroke="#A3ABB0" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    <input type="text" class="form-control" placeholder="User name">   
                                </div>
                            </fieldset>
                            <fieldset class="box-fieldset">
                                <label>Email address</label>
                                <div class="ip-field">
                                    <svg class="icon" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M16.3125 5.0625V12.9375C16.3125 13.3851 16.1347 13.8143 15.8182 14.1307C15.5018 14.4472 15.0726 14.625 14.625 14.625H3.375C2.92745 14.625 2.49822 14.4472 2.18176 14.1307C1.86529 13.8143 1.6875 13.3851 1.6875 12.9375V5.0625M16.3125 5.0625C16.3125 4.61495 16.1347 4.18573 15.8182 3.86926C15.5018 3.55279 15.0726 3.375 14.625 3.375H3.375C2.92745 3.375 2.49822 3.55279 2.18176 3.86926C1.86529 4.18573 1.6875 4.61495 1.6875 5.0625M16.3125 5.0625V5.24475C16.3125 5.53286 16.2388 5.81618 16.0983 6.06772C15.9578 6.31926 15.7553 6.53065 15.51 6.68175L9.885 10.143C9.61891 10.3069 9.31252 10.3937 9 10.3937C8.68748 10.3937 8.38109 10.3069 8.115 10.143L2.49 6.6825C2.24469 6.5314 2.04215 6.32001 1.90168 6.06847C1.7612 5.81693 1.68747 5.53361 1.6875 5.2455V5.0625" stroke="#A3ABB0" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    <input type="text" class="form-control" placeholder="Email address">   
                                </div>

                            </fieldset>
                            <fieldset class="box-fieldset">
                                <label>Password</label>
                                <div class="ip-field">
                                    <svg class="icon" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12.375 7.875V5.0625C12.375 4.16739 12.0194 3.30895 11.3865 2.67601C10.7535 2.04308 9.89511 1.6875 9 1.6875C8.10489 1.6875 7.24645 2.04308 6.61351 2.67601C5.98058 3.30895 5.625 4.16739 5.625 5.0625V7.875M5.0625 16.3125H12.9375C13.3851 16.3125 13.8143 16.1347 14.1307 15.8182C14.4472 15.5018 14.625 15.0726 14.625 14.625V9.5625C14.625 9.11495 14.4472 8.68573 14.1307 8.36926C13.8143 8.05279 13.3851 7.875 12.9375 7.875H5.0625C4.61495 7.875 4.18573 8.05279 3.86926 8.36926C3.55279 8.68573 3.375 9.11495 3.375 9.5625V14.625C3.375 15.0726 3.55279 15.5018 3.86926 15.8182C4.18573 16.1347 4.61495 16.3125 5.0625 16.3125Z" stroke="#A3ABB0" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    <input type="password" class="form-control" placeholder="Your password">   
                                </div>
                            </fieldset>
                            <fieldset class="box-fieldset">
                                <label>Confirm password</label>
                                <div class="ip-field">
                                    <svg class="icon" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12.375 7.875V5.0625C12.375 4.16739 12.0194 3.30895 11.3865 2.67601C10.7535 2.04308 9.89511 1.6875 9 1.6875C8.10489 1.6875 7.24645 2.04308 6.61351 2.67601C5.98058 3.30895 5.625 4.16739 5.625 5.0625V7.875M5.0625 16.3125H12.9375C13.3851 16.3125 13.8143 16.1347 14.1307 15.8182C14.4472 15.5018 14.625 15.0726 14.625 14.625V9.5625C14.625 9.11495 14.4472 8.68573 14.1307 8.36926C13.8143 8.05279 13.3851 7.875 12.9375 7.875H5.0625C4.61495 7.875 4.18573 8.05279 3.86926 8.36926C3.55279 8.68573 3.375 9.11495 3.375 9.5625V14.625C3.375 15.0726 3.55279 15.5018 3.86926 15.8182C4.18573 16.1347 4.61495 16.3125 5.0625 16.3125Z" stroke="#A3ABB0" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    <input type="password" class="form-control" placeholder="Confirm password">   
                                </div>
                            </fieldset>
                        </div>
                        <div class="box box-btn">
                            <a href="dashboard.html" class="tf-btn primary w-100">Sign Up</a>
                            <div class="text text-center">Don’t you have an account? <a href="#modalLogin" data-bs-toggle="modal" class="text-primary">Sign In</a></div>
                        </div>
                        <p class="box text-center caption-2">or login with</p>
                        <div class="group-btn">
                            <a href="#" class="btn-social">
                                <img src="images/logo/google.jpg" alt="img">
                                Google
                            </a>
                            <a href="#" class="btn-social">
                                <img src="images/logo/fb.jpg" alt="img">
                                Facebook
                            </a>
                        </div>
                    </form>
                </div>
            </div> 
        </div>
    </div>

    <!-- Javascript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/swiper-bundle.min.js"></script>
    <script type="text/javascript" src="js/carousel.js"></script>
    <script type="text/javascript" src="js/plugin.js"></script>
    <script type="text/javascript" src="js/jquery.nice-select.min.js"></script>
    <script type="text/javascript" src="js/rangle-slider.js"></script>
    <script type="text/javascript" src="js/shortcodes.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
</body>


<!-- Mirrored from homelengohtml.vercel.app/sidebar-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Apr 2025 18:14:41 GMT -->
</html>