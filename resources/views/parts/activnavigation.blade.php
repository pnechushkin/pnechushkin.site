<div id="navigation">
    <nav class="navbar navbar-custom" role="navigation">
        <div class="container">
            <div class="row">
                <div class="col-md-2 ">
                    <div class="site-logo">
                        <a href="/" class="brand">{{config('app.name','test')}}</a>
                    </div>
                </div>


                <div class="col-md-10 col-sm-12">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle glyphicon glyphicon-menu-hamburger"
                                data-toggle="collapse" data-target="#menu">
                            <i class="fa fa-bars"></i>
                        </button>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="menu">
                        <ul class="nav navbar-nav navbar-right">
                            <li ><a href="/">Home</a></li>
                            <li><a href="/about">About Us</a></li>
                            <li><a href="/service">Services</a></li>
                            <li><a href="/works">Works</a></li>
                            <li><a href="/contact">Contact</a></li>
                            @if (Auth::user())
                                <li><a class="blog-nav-item" href="{{ url('/logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a></li>
                                <form id="logout-form" action="{{ url('/logout') }}" method="POST"
                                      style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            @endif
                        </ul>
                    </div>
                    <!-- /.Navbar-collapse -->

                </div>
            </div>
        </div>
        <!-- /.container -->
    </nav>
</div>
