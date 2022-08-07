<header>
    <div class="header-overlay-menu"></div>
    <nav class="navbar navbar-expand-lg">
        <div class="container-lg">
            <div class="hamburger-menu">
                <i class="fas fa-bars"></i>
            </div>
            <div class="navbar-nav-menu">
                <ul class="navbar-nav">
                    <div class="close-menu">
                        <i class="fas fa-times-circle"></i>
                    </div>
                    <li class="nav-item">
                        <a class="nav-link @if (Request::url() == url('/')) active @endif"
                            href="{{ route('home') }}">خانه</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if (Request::url() == url('/blog')) active @endif"
                            href="{{ route('blog') }}">بلاگ ها</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">پروژه ها</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">خدمات</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">درباره ما</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">تماس با ما</a>
                    </li>
                </ul>
            </div>
            <div class="logo">
                <a href="">PersianEngineers</a>
            </div>
        </div>
    </nav>
</header>

<div class="auth-user">
    @guest
        <div class="auth-user-guest">
            <a href="{{ route('register') }}">ثبت نام</a>
            <span>/</span>
            <a href="{{ route('login') }}">ورود</a>
        </div>
    @else
        <div class="auth-user-logged d-flex justify-content-center align-items-center">
            <div class="auth-user-logged-profile">
                <a href="{{ route('dashboard') }}">پروفایل</a>
            </div>
            <span class="px-1">/</span>
            <div class="auth-user-logged-exit">
                <span onclick="logoutUser()">خروج</span>
            </div>
        </div>
        <form action="{{ route('logout') }}" method="post" id="logout-form">
            @csrf
        </form>
    @endguest
    <div class="auth-user-icon">
        <i class="fas fa-cog fa-spin"></i>
    </div>
</div>
