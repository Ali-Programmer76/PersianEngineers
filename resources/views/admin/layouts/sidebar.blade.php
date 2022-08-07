<div id="mySlideNav" class="slide-nav">
    <p class="logo">
        <span>P</span>ersianEngineers
    </p>

    <a href="{{ route('home') }}" class="sidebar-link" target="_blank">
        <span class="sidebar-icon"><i class="fas fa-eye"></i></span>
        نمایش وبسایت
    </a>
    <a href="{{ route('dashboard') }}" class="sidebar-link @if (request()->is('dashboard')) active @endif">
        <span class="sidebar-icon"><i class="fas fa-home"></i></span>
        داشبورد
    </a>
    @if (auth()->user()->role === 'admin')
        <a href="{{ route('seo.index') }}" class="sidebar-link  @if (request()->is('dashboard/seo')) active @endif">
            <span class="sidebar-icon"><i class="fas fa-magic"></i></span>
            سئو سایت
        </a>
        <a href="{{ route('category.index') }}" class="sidebar-link  @if (request()->is('dashboard/category')) active @endif">
            <span class="sidebar-icon"><i class="fas fa-chalkboard"></i></span>
            دسته بندی
        </a>
        <a href="{{ route('topHeader.index') }}" class="sidebar-link @if (request()->is('dashboard/topHeader')) active @endif">
            <span class="sidebar-icon"><i class="fas fa-ellipsis-h"></i></span>
            منوی بالایی سایت
        </a>
        <a href="{{ route('home.index') }}" class="sidebar-link @if (request()->is('dashboard/home')) active @endif">
            <span class="sidebar-icon"><i class="fas fa-laptop-house"></i></span>
            خانه
        </a>
        <a href="{{ route('about.index') }}" class="sidebar-link @if (request()->is('dashboard/about')) active @endif">
            <span class="sidebar-icon"><i class="fas fa-address-card"></i></span>
            درباره ما
        </a>
        <a href="{{ route('introduction.index') }}"
            class="sidebar-link @if (request()->is('dashboard/introduction')) active @endif">
            <span class="sidebar-icon"><i class="fas fa-book-open"></i></span>
            مقدمه
        </a>
        <a href="{{ route('service.index') }}" class="sidebar-link @if (request()->is('dashboard/service')) active @endif">
            <span class="sidebar-icon"><i class="fas fa-cogs"></i></span>
            خدمات
        </a>
        <a href="{{ route('counter.index') }}" class="sidebar-link  @if (request()->is('dashboard/counter')) active @endif">
            <span class="sidebar-icon"><i class="fas fa-sort-numeric-up-alt"></i></span>
            شمارنده
        </a>
        <a href="{{ route('team.index') }}" class="sidebar-link  @if (request()->is('dashboard/team')) active @endif">
            <span class="sidebar-icon"><i class="fas fa-user-friends"></i></span>
            تیم ما
        </a>
        <a href="{{ route('project.index') }}"
            class="sidebar-link  @if (request()->is('dashboard/project')) active @endif">
            <span class="sidebar-icon"><i class="fas fa-images"></i></span>
            پروژه ها
        </a>
        <a href="{{ route('testimonial.index') }}"
            class="sidebar-link @if (request()->is('dashboard/testimonial')) active @endif">
            <span class="sidebar-icon"><i class="fas fa-comment-alt"></i></span>
            نظرات مشتریان
        </a>
        <a href="{{ route('faq.index') }}" class="sidebar-link @if (request()->is('dashboard/faq')) active @endif">
            <span class="sidebar-icon"><i class="fas fa-headset"></i></span>
            سؤالات متداول
        </a>
        <a class="sidebar-link footer-menu">
            <span class="sidebar-icon"><i class="fas fa-clipboard-list"></i></span>
            فوتر سایت
            <i class="fas fa-chevron-down"></i>
        </a>
        <div class="footer-submenu">
            <a href="{{ route('footerAbout.index') }}" class="sidebar-link">
                <span class="sidebar-icon"><i class="fas fa-book"></i></span>
                فوتر سایت - بخش درباره ما
            </a>
            <a href="{{ route('footerService.index') }}" class="sidebar-link">
                <span class="sidebar-icon"><i class="fas fa-tasks"></i></span>
                فوتر سایت - بخش خدمات ما
            </a>
            <a href="{{ route('footerQuickAccess.index') }}" class="sidebar-link">
                <span class="sidebar-icon"><i class="fas fa-universal-access"></i></span>
                فوتر سایت - بخش دسترسی سریع
            </a>
            <a href="{{ route('footerContact.index') }}" class="sidebar-link">
                <span class="sidebar-icon"><i class="fas fa-coffee"></i></span>
                فوتر سایت - بخش ارتباط با ما
            </a>
        </div>
        <a href="{{ route('users.index') }}" class="sidebar-link  @if (request()->is('dashboard/users')) active @endif">
            <span class="sidebar-icon"><i class="fas fa-users"></i></span>
            کاربران سایت
        </a>
    @endif
    @if (auth()->user()->role === 'admin' || auth()->user()->role === 'author')
        <a href="{{ route('comment.index') }}"
            class="sidebar-link @if (request()->is('dashboard/comment')) active @endif">
            <span class="sidebar-icon"><i class="fas fa-comment"></i></span>
            نظرات
        </a>
        <a href="{{ route('contact.index') }}"
            class="sidebar-link  @if (request()->is('dashboard/contact')) active @endif">
            <span class="sidebar-icon"><i class="fas fa-users"></i></span>
            پیام کاربران
        </a>
        <a href="{{ route('blogs.index') }}" class="sidebar-link  @if (request()->is('dashboard/blogs')) active @endif">
            <span class="sidebar-icon"><i class="fas fa-blog"></i></span>
            بلاگ ها
        </a>
    @endif
</div>
