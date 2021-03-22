<div class="boxed">
		<!-- Preloader -->
	    <div id="loading-overlay">
            <div class="loader"></div>
        </div>

		<div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-6 col-6">
                        <div id="logo" class="logo">
                            <a href="#" title="">
                                <img src="logo.png" alt="logo Finance Business" style="width:65px;">
                            </a>
                        </div><!-- /#logo -->
                    </div>
                    <div class="col-lg-3 col-sm-6 col-6">
                        <div class="iconbox style2 v2">
                            <div class="iconbox-icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="iconbox-content">
                                <h4>+62-22 7319408</h4>
                                <p>Fax : +62-22 7319408</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-6">
                        <div class="iconbox style2 v2">
                            <div class="iconbox-icon">
                                <i class="fa fa-map-marker"></i>
                            </div>
                            <div class="iconbox-content">
                                <h4>Graha Beunteur,</h4>
                                <p>Jl. Beunteur No.1, Buah Batu, Bandung</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-6">
                        <div class="iconbox style2 v2">
                            <div class="iconbox-icon">
                                <i class="fa fa-envelope-o"></i>
                            </div>
                            <div class="iconbox-content">
                                <h4>info@pt-trijasa.com</h4>
                                <p>Keep in touch</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.top -->

        <header id="header" class="header style1 bg-color">
            <div class="container">
                <div class="row">
                    <div class="header-wrap">
                        <div class="col-md-12">
                            <div class="flat-header-wrap">
                                <div class="flat-show-search">
                                    <div class="show-search">
                                        <i class="fa fa-search"></i>                                             
                                    </div>
                                    <div class="top-search">                        
                                        <form action="#" id="searchform-all" method="get">
                                            <div>
                                                <input type="text" id="s" class="sss" placeholder="Search...">
                                                <input type="submit" value="" id="searchsubmit">
                                            </div>
                                        </form>
                                    </div> <!-- /.top-search -->
                                </div>  <!-- /.flat-show-search -->                      
                                <div class="nav-wrap">
                                    <div class="btn-menu">
                                        <span></span>
                                    </div><!-- //mobile menu button -->
                                    <nav id="mainnav" class="mainnav">
                                        <ul class="menu">
                                            <li class=" {{ Request::is('/') ? 'active' : '' }}">
                                                <a href="/" title="">Home</a>
                                            </li>
                                            <li class=" {{ Request::is('about-us') ? 'active' : '' }}">
                                                <a href="/about-us" title="">About Us</a>
                                            </li>
                                            <li class=" {{ Request::is('our-projects') ? 'active' : '' }}">
                                                <a href="/our-projects" title="">Our Projects</a>
                                            </li>
                                            <li class=" {{ Request::is('contact-us') ? 'active' : '' }}">
                                                <a href="/contact-us" title="">Contact Us</a>
                                            </li>
                                        </ul><!-- /.menu -->
                                    </nav><!-- /#mainnav -->
                                </div><!-- /.nav-wrap -->
                            </div>
                        </div><!-- /.col-md-9 -->
                    </div><!-- /.header-wrap -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </header><!-- /header -->