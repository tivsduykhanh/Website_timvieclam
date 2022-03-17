<header id="header" id="home">
    <div class="container">
        <div class="row align-items-center justify-content-between d-flex">
            <div id="logo">
                <a href="/user"><img src="/template/img/logo.png" alt="" title="" /></a>
            </div>
            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li class="menu-active"><a href="/user">Home</a></li>
                    <li><a href="/user/job">Việc làm</a></li>
                    <li><a href="/user/hoso">Hồ sơ</a></li>
                    <li><a href="/user/applied">applied</a></li>
                    <li><a href="/user/contact">Liên hệ</a></li>
                    <li><a href="/user/aboutus">Về chúng tôi</a></li>
                    {{-- <li class="menu-has-children"><a href="">Pages</a>
                        <ul>
                            <li><a href="elements.html">elements</a></li>
                            <li><a href="search.html">search</a></li>
                            <li><a href="single.html">single</a></li>
                        </ul>
                    </li> --}}
                    <li class="menu-has-children"><a class="ticker-btn" href="#">
                        <?php
                            $name = Session::get('name');
                            if ($name) {
                                echo $name;
                            }
                            
                        ?>
                    </a>
                        <ul>
                            <li><a href="/user/logout">Đăng xuất</a></li>
                        </ul>
                    </li>

                </ul>
            </nav><!-- #nav-menu-container -->
        </div>
    </div>
</header><!-- #header -->