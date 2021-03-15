<div class="boxed">
		<!-- Preloader -->
	    <div id="loading-overlay">
            <div class="loader"></div>
        </div>

		<div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div id="logo" class="logo">
                            <a href="#" title="">
                                <img src="logo.png" alt="logo Finance Business" style="width:65px;">
                            </a>
                        </div><!-- /#logo -->
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="iconbox style2 v2">
                            <div class="iconbox-icon">
                                <i class="fa fa-paper-plane-o"></i>
                            </div>
                            <div class="iconbox-content">
                                <h4>+61 3 8376 6284</h4>
                                <p>themesflat@gmail.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="iconbox style2 v2">
                            <div class="iconbox-icon">
                                <i class="fa fa-map-marker"></i>
                            </div>
                            <div class="iconbox-content">
                                <h4>4946 Marmora Road,</h4>
                                <p>Central New, UK</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="iconbox style2 v2">
                            <div class="iconbox-icon">
                                <i class="fa fa-clock-o"></i>
                            </div>
                            <div class="iconbox-content">
                                <h4>Mon - Sat: 8 am - 5 pm</h4>
                                <p>Sunday: CLOSED</p>
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
                                            <li class=" {{ Request::is('tentang-kami') ? 'active' : '' }}">
                                                <a href="/tentang-kami" title="">Tentang Kami</a>
                                            </li>
                                            <li class=" {{ Request::is('portfolio') ? 'active' : '' }}">
                                                <a href="/portfolio" title="">Portfolio</a>
                                            </li>
                                            <li class=" {{ Request::is('hubungi-kami') ? 'active' : '' }}">
                                                <a href="/hubungi-kami" title="">Hubungi Kami</a>
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