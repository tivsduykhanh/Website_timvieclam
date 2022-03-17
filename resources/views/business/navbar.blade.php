<header id="header" id="home">
    <div class="container">
        <div class="row align-items-center justify-content-between d-flex">
            <div id="logo">
                <a href="/business/home"><img src="/template/img/logo.png" alt="" title="" /></a>
            </div>
            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li class="menu-active"><a href="/business/home">Home</a></li>
                    <li><a href="/business/listjob">Việc làm</a></li>
                    <li><a href="/business/job">Đăng tin</a></li>
                    <li><a href="/business/applied">Applying</a></li>
                    <li><a href="/business/contact">Liên hệ</a></li>
                    <li><a href="/business/aboutus">Về chúng tôi</a></li>
                    <li class="menu-has-children">
                        <a class="ticker-btn" ><?php $name = Session::get('name'); if($name){echo $name;} ?></a>
                        <ul>
                            <li><a href="/business/logout">{{ __('Đăng xuất') }}</a></li>
                        </ul>
                    </li>
                </ul>
            </nav><!-- #nav-menu-container -->
        </div>
    </div>
</header><!-- #header -->