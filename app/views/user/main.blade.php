@extends('main')

@section('head')
{{HTML::style('assets/css/header.css')}}

@endsection

@section('body')
<!--=== Header ===-->    
    <div class="header">
        <!-- Topbar -->
        <div class="topbar">
            <div class="container">
                <!-- Topbar Navigation -->
                <ul class="loginbar pull-right">
                    <li><a href="page_faq.html">Giới thiệu</a></li>  
                    <li class="topbar-devider"></li>   
                    <li><a href="page_faq.html">Trợ giúp</a></li>  
                    <li class="topbar-devider"></li>  
                    <li><a href="page_faq.html">Liên hệ</a></li>  
                    <li class="topbar-devider"></li>   
                    <?php
                    if(Session::has('user_login')){ 
                        $login_user = User::find(Session::get('user_id'));
                        ?>
                        <li class="languagesSelector">
                        <i class="fa fa-globe"></i>
                        <a>{{$login_user->fullname}}</a>
                        <ul class="languages">
                            <li class="active">
                                <a href="{{Asset('user/profile/'.$login_user->id)}}">Trang nhà</a> 
                            </li>
                            <li><a href="#">Khóa học</a></li>
                            <li><a href="#">nhật kí</a></li>
                            <li><a href="{{Asset('user/logout')}}">Đăng xuất</a></li>
                        </ul>
                    </li>

                        <?php
                    }
                    else{
                        ?>
                        <li><a href="{{Asset('user/login')}}">Đăng nhập</a></li> 
                        <li class="topbar-devider"></li>  
                        <li><a href="{{Asset('user/register')}}">Đăng kí</a></li>   
                        <?php
                    }
                    ?>
                    
                </ul>
                <!-- End Topbar Navigation -->
            </div>
        </div>
        <!-- End Topbar -->
    
        <!-- Navbar -->
        <div class="navbar navbar-default mega-menu" role="navigation">
            <div class="container" >
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="fa fa-bars"></span>
                    </button>
                    <a class="navbar-brand" href="index.html">
                        <img id="logo-header" src="{{Asset('logo.png')}}" alt="Logo">
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-responsive-collapse" >
                    <ul class="nav navbar-nav">
                        <!-- Home -->
                        <li class="dropdown active">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                                Trang chủ
                            </a>
                            <ul class="dropdown-menu">
                                <li class="active"><a href="index.html">Option 1: Default Page</a></li>

                                <!-- One Page -->
                                <li class="dropdown-submenu">
                                    <a href="javascript:void(0);">Option 2: One Page</a>
                                    <ul class="dropdown-menu">
                                        <li><a target="_blank" href="One-Page/index.html">- One Page Template</a></li>                                
                                        <li><a target="_blank" href="One-Page/dark-page-example.html">- One Page Dark Theme</a></li>                                
                                    </ul>                                
                                </li>
                                <!-- End One Page -->
                                
                                <!-- Shop UI Page -->
                                <li class="dropdown-submenu">
                                    <a href="javascript:void(0);">Option 3: Shop UI</a>
                                    <ul class="dropdown-menu">
                                        <li><a target="_blank" href="Shop-UI/index.html">- Home Page</a></li>
                                        <li><a target="_blank" href="Shop-UI/shop-ui-inner.html">- Product Page</a></li>
                                        <li><a target="_blank" href="Shop-UI/shop-ui-filter-grid.html">- Filter Grid Page</a></li>
                                        <li><a target="_blank" href="Shop-UI/shop-ui-filter-list.html.html">- Filter List Page</a></li>                   
                                        <li><a target="_blank" href="Shop-UI/shop-ui-add-to-cart.html">- Checkout Page</a></li>                            
                                        <li><a target="_blank" href="Shop-UI/shop-ui-login.html">- Login Page</a></li>                               
                                        <li><a target="_blank" href="Shop-UI/shop-ui-register.html">- Registration Page</a></li>
                                    </ul>                                
                                </li>
                                <!-- End Shop UI -->

                                <li><a href="page_home8.html">Option 4: Home Discover</a></li>
                                <li><a href="page_home9.html">Option 5: Home Creative</a></li>
                                <li><a href="page_home10.html">Option 6: Home Inspire</a></li>
                                <li><a href="page_home11.html">Option 7: Home Desire</a></li>
                                <li><a href="page_jobs.html">Option 8: Home Jobs</a></li>
                                <li><a href="page_home3.html">Option 9: Amazing Content</a></li>
                                <li><a href="page_home6.html">Option 10: Home Magazine</a></li>
                                <li><a href="page_home4.html">Option 11: Home Sidebar</a></li>
                                <li><a href="page_home7.html">Option 12: Home Portfolio</a></li>
                                <li><a href="page_home1.html">Option 13: Home Default v1</a></li>
                                <li><a href="page_home2.html">Option 14: Home Default v2</a></li>
                                <li><a href="page_home5.html">Option 15: Home Default v3</a></li>

                                <!-- Misc Pages -->
                                <li class="dropdown-submenu">
                                    <a href="javascript:void(0);">Options: Misc Pages</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="page_misc_blank.html">- Blank page</a></li>
                                        <li><a href="page_misc_boxed.html">- Boxed Page</a></li>
                                        <li><a href="page_misc_boxed_img.html">- Boxed Image Page</a></li>
                                        <li><a href="page_misc_boxed_fixed_header.html">- Boxed Fixed Menu</a></li>
                                        <li><a href="page_misc_fixed_header.html">- Fixed Menu</a></li>
                                        <li><a href="page_misc_dark.html">- Dark Page</a></li>
                                        <li><a href="page_misc_dark_boxed.html">- Dark Boxed Page</a></li>
                                        <li><a href="page_misc_dark_other_color.html">- Dark Page With Different Theme Color</a></li>
                                    </ul>                                
                                </li>
                                <!-- End Misc Pages -->                                
                            </ul>
                        </li>
                        <!-- End Home -->

                        <!-- Pages -->                        
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                                Khóa học
                            </a>
                            <ul class="dropdown-menu">
                                <?php
                                $menu_tuts = Tutorial::all();
                                foreach ($menu_tuts as $mt) {
                                    ?>
                                    <li><a href='{{Asset("khoa-hoc/".$mt->id."-".$mt->alias)}}'>{{$mt->title}}</a></li>
                                    <?php     
                                }
                               
                                 ?>
                                
                            </ul>
                        </li>
                        <!-- End Pages -->

                        <!-- Features -->
                        <li class="dropdown mega-menu-fullwidth">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                                Features
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <div class="mega-menu-content disable-icons">
                                        <div class="container">
                                            <div class="row equal-height">
                                                <div class="col-md-3 equal-height-in">
                                                    <ul class="list-unstyled equal-height-list">
                                                        <li><h3>Typography</h3></li>

                                                        <!-- Typography -->
                                                        <li><a href="feature_typo_general.html"><i class="fa fa-sort-alpha-asc"></i> General Typography</a></li>
                                                        <li><a href="feature_typo_headings.html"><i class="fa fa-magic"></i> Headings Options</a></li>
                                                        <li><a href="feature_typo_dividers.html"><i class="fa fa-ellipsis-h"></i> Dividers</a></li>
                                                        <li><a href="feature_typo_blockquote.html"><i class="fa fa-quote-left"></i> Blockquote Blocks</a></li>
                                                        <li><a href="feature_typo_boxshadows.html"><i class="fa fa-asterisk"></i> Box Shadows</a></li>
                                                        <li><a href="feature_typo_testimonials.html"><i class="fa fa-comments"></i> Testimonials</a></li>
                                                        <li><a href="feature_typo_tagline_boxes.html"><i class="fa fa-tasks"></i> Tagline Boxes</a></li>
                                                        <li><a href="feature_typo_grid.html"><i class="fa fa-align-justify"></i> Grid Layouts</a></li>
                                                        <!-- End Typography -->
                                                        
                                                        <!-- Components -->
                                                        <li><a href="feature_compo_messages.html"><i class="fa fa-comment"></i> Alerts &amp; Messages</a></li>
                                                        <li><a href="feature_compo_labels.html"><i class="fa fa-tags"></i> Labels &amp; Badges</a></li>
                                                        <li><a href="feature_compo_media.html"><i class="fa fa-volume-down"></i> Audio/Videos &amp; Images</a></li>
                                                        <li><a href="feature_compo_pagination.html"><i class="fa fa-arrows-h"></i> Paginations</a></li>
                                                        <!-- End Components -->
                                                    </ul>
                                                </div>
                                                <div class="col-md-3 equal-height-in">
                                                    <ul class="list-unstyled equal-height-list">
                                                        <li><h3>Header &amp; Footers</h3></li>
                                                   
                                                        <!-- Header & Footer -->
                                                        <li><a href="feature_headers.html"><i class="fa fa-navicon"></i> Headers</a></li>
                                                        <li><a href="feature_footers.html"><i class="fa fa-navicon"></i> Footers</a></li>
                                                        <!-- End Header & Footer -->

                                                        <li class="big-screen-space"></li>
                                                        
                                                        <li><h3>Buttons &amp; Icons</h3></li>
                                                    
                                                        <!-- Buttons -->
                                                        <li><a href="feature_btn_general.html"><i class="fa fa-flask"></i> General Buttons</a></li>
                                                        <li><a href="feature_btn_brands.html"><i class="fa fa-html5"></i> Brand &amp; Social Buttons</a></li>
                                                        <li><a href="feature_btn_effects.html"><i class="fa fa-bolt"></i> Loading &amp; Hover Effects</a></li>
                                                        <!-- End Buttons -->
                                                        
                                                        <!-- Icons -->
                                                        <li><a href="feature_icon_general.html"><i class="fa fa-chevron-circle-right"></i> General Icons</a></li>
                                                        <li><a href="feature_icon_fa.html"><i class="fa fa-chevron-circle-right"></i> Font Awesome Icons</a></li>
                                                        <li><a href="feature_icon_line.html"><i class="fa fa-chevron-circle-right"></i> Line Icons</a></li>
                                                        <li><a href="feature_icon_glyph.html"><i class="fa fa-chevron-circle-right"></i> Glyphicons Icons (Bootstrap)</a></li>
                                                        <li><a href="feature_icon_glyph_pro.html"><i class="fa fa-chevron-circle-right"></i> Glyphicons Icons Pro</a></li>  
                                                        <!-- End Icons -->
                                                    </ul>                                
                                                </div>
                                                <div class="col-md-3 equal-height-in">
                                                    <ul class="list-unstyled equal-height-list">
                                                        <li><h3>Common elements</h3></li>

                                                        <!-- Content Boxes -->
                                                        <li><a href="feature_box_general.html"><i class="fa fa-cog"></i> General Content Boxes</a></li>
                                                        <li><a href="feature_box_colored.html"><i class="fa fa-align-center"></i> Colored Boxes</a></li>
                                                        <li><a href="feature_box_funny.html"><i class="fa fa-bars"></i> Funny Boxes</a></li>
                                                        <li><a href="feature_thumbails.html"><i class="fa fa-image"></i> Thumbnails</a></li>
                                                        <li><a href="feature_accordion_and_tabs.html"><i class="fa fa-list-ol"></i> Accordion &amp; Tabs</a></li>
                                                        <li><a href="feature_timeline1.html"><i class="fa fa-dot-circle-o"></i> Timeline Option 1</a></li>
                                                        <li><a href="feature_timeline2.html"><i class="fa fa-dot-circle-o"></i> Timeline Option 2</a></li>
                                                        <li><a href="feature_table_general.html"><i class="fa fa-table"></i> Tables</a></li>
                                                        <li><a href="feature_compo_progress_bars.html"><i class="fa fa-align-left"></i> Progress Bars</a></li>
                                                        <li><a href="feature_compo_panels.html"><i class="fa fa-columns"></i> Panels</a></li>
                                                        <!-- End Common Elements -->
                                                    </ul>    
                                                </div>
                                                <div class="col-md-3 equal-height-in">
                                                    <ul class="list-unstyled equal-height-list">
                                                        <li><h3>Forms &amp; Infographics</h3></li>

                                                        <!-- Forms -->
                                                        <li><a href="feature_form_general.html"><i class="fa fa-bars"></i> Common Bootstrap Forms</a></li>
                                                        <li><a href="feature_form_general1.html"><i class="fa fa-bars"></i> General Unify Forms</a></li>
                                                        <li><a href="feature_form_advanced.html"><i class="fa fa-bars"></i> Advanced Forms</a></li>
                                                        <li><a href="feature_form_layouts.html"><i class="fa fa-bars"></i> Form Layouts</a></li>
                                                        <li><a href="feature_form_layouts_advanced.html"><i class="fa fa-bars"></i> Advanced Layout Forms</a></li>
                                                        <li><a href="feature_form_states.html"><i class="fa fa-bars"></i> Form States</a></li>
                                                        <li><a href="feature_form_sliders.html"><i class="fa fa-bars"></i> Form Sliders</a></li>
                                                        <li><a href="feature_form_modals.html"><i class="fa fa-bars"></i> Modals</a></li>
                                                        <!-- End Forms -->
                                                        
                                                        <!-- Infographics -->
                                                        <li><a href="feature_carousels.html"><i class="fa fa-sliders"></i> Carousel Examples</a></li>
                                                        <li><a href="feature_compo_charts.html"><i class="fa fa-pie-chart"></i> Charts &amp; Countdowns</a></li>
                                                        <li><a href="feature_maps_google.html"><i class="fa fa-map-marker"></i> Google Maps</a></li>
                                                        <li><a href="feature_maps_vector.html"><i class="fa fa-align-center"></i> Vector Maps</a></li>
                                                        <!-- End Infographics -->
                                                    </ul>                                
                                                </div>
                                            </div>
                                        </div>    
                                    </div>    
                                </li>
                            </ul>
                        </li>
                        <!-- End Features -->

                        <!-- Portfolio -->
                        <li class="dropdown mega-menu-fullwidth">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                                Portfolio
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <div class="mega-menu-content">
                                        <div class="container">
                                            <div class="row equal-height">
                                                <div class="col-md-3 equal-height-in">
                                                    <ul class="list-unstyled equal-height-list">
                                                        <li><h3>Default</h3></li>

                                                        <!-- Default -->
                                                        <li><a href="portfolio_single_item.html">Portfolio Item Option</a></li>
                                                        <li><a href="portfolio_item.html">Portfolio Item Option 1</a></li>
                                                        <li><a href="portfolio_item1.html">Portfolio Item Option 2</a></li>
                                                        <li><a href="portfolio_2_column.html">Portfolio 2 Columns</a></li>
                                                        <li><a href="portfolio_3_column.html">Portfolio 3 Columns</a></li>
                                                        <li><a href="portfolio_4_column.html">Portfolio 4 Columns</a></li>
                                                        <li><a href="portfolio_text_blocks.html">Portfolio 4 Columns With Text</a></li>
                                                        
                                                        <!-- End Default -->
                                                    </ul>
                                                </div>
                                                <div class="col-md-3 equal-height-in">
                                                    <ul class="list-unstyled equal-height-list">
                                                        <li><h3>2 Columns</h3></li>
                                                   
                                                        <!-- 2 Columns -->
                                                        <li><a href="portfolio_2_columns_grid_no_space.html">2 Columns No Sapce</a></li>
                                                        <li><a href="portfolio_2_columns_grid_text.html">2 Columns Grid Text</a></li>
                                                        <li><a href="portfolio_2_columns_grid.html">2 Columns Grid</a></li>

                                                        <!-- End 2 Columns -->

                                                        <li class="big-screen-space"></li>
                                                        
                                                        <li><h3>3 Columns</h3></li>
                                                    
                                                        <!-- 3 Columns -->
                                                        <li><a href="portfolio_3_columns_grid_no_space.html">3 Columns No Sapce</a></li>
                                                        <li><a href="portfolio_3_columns_grid_text.html">3 Columns Grid Text</a></li>
                                                        <li><a href="portfolio_3_columns_grid.html">3 Columns Grid</a></li>
                                                        <!-- End 3 Columns -->
                                                    </ul>                                
                                                </div>
                                                <div class="col-md-3 equal-height-in">
                                                    <ul class="list-unstyled equal-height-list">
                                                        <li><h3>4 Columns</h3></li>
                                                        <!-- 4 Columns -->
                                                        <li><a href="portfolio_4_columns_fullwidth_no_space.html">4 Columns Full Width No Sapce</a></li>
                                                        <li><a href="portfolio_4_columns_fullwidth_text.html">4 Columns Fullwidth Grid Text</a></li>
                                                        <li><a href="portfolio_4_columns_fullwidth.html">4 Columns Fullwidth Grid</a></li>
                                                        <li><a href="portfolio_4_columns_grid_no_space.html">4 Columns No Sapce</a></li>
                                                        <li><a href="portfolio_4_columns_grid_text.html">4 Columns Grid Text</a></li>
                                                        <li><a href="portfolio_4_columns_grid.html">4 Columns Grid</a></li>
                                                        <!-- End 4 Columns -->
                                                    </ul>                                
                                                </div>
                                                <div class="col-md-3 equal-height-in">
                                                    <ul class="list-unstyled equal-height-list">
                                                        <li><h3>5 Columns</h3></li>
                                                   
                                                        <!-- 5 Columns -->
                                                        <li><a href="portfolio_5_columns_fullwidth_no_space.html">5 Columns Fullwidth No Sapce</a></li>
                                                        <li><a href="portfolio_5_columns_fullwidth_text.html">5 Columns Fullwidth Grid Text</a></li>
                                                        <li><a href="portfolio_5_columns_fullwidth.html">5 Columns Fullwidth Grid</a></li>
                                                        <!-- End 5 Columns -->

                                                        <li class="big-screen-space"></li>
                                                        
                                                        <li><h3>6 Columns</h6></li>
                                                    
                                                        <!-- 6 Columns -->
                                                        <li><a href="portfolio_6_columns_fullwidth_no_space.html">6 Columns Fullwidth No Sapce</a></li>
                                                        <li><a href="portfolio_6_columns_fullwidth_text.html">6 Columns Fullwidth Grid Text</a></li>
                                                        <li><a href="portfolio_6_columns_fullwidth.html">6 Columns Fullwidth Grid</a></li>
                                                        <!-- End 6 Columns -->
                                                    </ul>                                
                                                </div>
                                            </div>
                                        </div>    
                                    </div>    
                                </li>
                            </ul>
                        </li>
                        <!-- Ens Portfolio -->

                        <!-- Blog -->
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                                Blog
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="blog_page.html">Blog Page</a></li>
                                <li><a href="blog_large.html">Blog Large</a></li>
                                <li><a href="blog_medium.html">Blog Medium</a></li>
                                <li><a href="blog_full_width.html">Blog Full Width</a></li>
                                <li><a href="blog_timeline.html">Blog Timeline</a></li>
                                <li><a href="blog_masonry_3col.html">Masonry Grid Blog</a></li>
                                <li><a href="blog_right_sidebar.html">Blog Right Sidebar</a></li>
                                <li><a href="blog_left_sidebar.html">Blog Left Sidebar</a></li>
                                <li><a href="blog_item_option1.html">Blog Item Option 1</a></li>
                                <li><a href="blog_item_option2.html">Blog Item Option 2</a></li>
                            </ul>
                        </li>
                        <!-- End Blog -->

                        <!-- Contacts -->
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                                Contacts
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="page_contact1.html">Contacts Default</a></li>
                                <li><a href="page_contact_advanced.php">Contacts Advanced</a></li>
                                <li><a href="page_contact2.html">Contacts Option 1</a></li>
                                <li><a href="page_contact3.html">Contacts Option 2</a></li>
                                <li><a href="page_contact4.html">Contacts Option 3</a></li>
                            </ul>
                        </li>                    
                        <!-- End Contacts -->

                        <!-- Search Block -->
                        <li>
                            <i class="search fa fa-search search-btn"></i>
                            <div class="search-open">
                                <div class="input-group animated fadeInDown">
                                    <input type="text" class="form-control" placeholder="Search">
                                    <span class="input-group-btn">
                                        <button class="btn-u" type="button">Go</button>
                                    </span>
                                </div>
                            </div>    
                        </li>
                        <!-- End Search Block -->
                    </ul>
                </div><!--/navbar-collapse-->
            </div>    
        </div>            
        <!-- End Navbar -->
    </div>
 <div class = "container">
 <div class= "row">
 	<div class = "col-md-8 col-lg-8">
 		@yield('content')
 	</div>
 	<div class = "col-md-4 col-lg-4">
        <h3>Code - Estudy</h3>
        <div class="panel panel-primary">
            <div class="panel-heading">Welcome</div>
           <div class="panel-body">
               <p>Wellcome to myste</p>
           </div>
        </div>
        <div class="panel panel-success">...</div>
        <div class="panel panel-info">...</div>
        <div class="panel panel-warning">...</div>
        <div class="panel panel-danger">...</div>
 	</div>
 </div>
 
</div>
@endsection