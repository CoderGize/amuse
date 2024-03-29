<div class="min-height-300 bg-dark position-absolute w-100"></div>
<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 "
    id="sidenav-main">
    <div class="sidenav-header mb-3">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="" href="{{ url('/') }}">
            <img src="/logo/codergize.svg" width="250px" class="d-block mx-auto p-3" alt="main_logo">
        </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
        <ul class="navbar-nav">

            <li class="nav-item">
                <a class="nav-link rounded-3 {{ 'admin' == request()->path() ? 'main-color' : '' }}"
                    href="{{ url('/admin') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link rounded-3 {{ 'admin/show_user' == request()->path() ? 'main-color' : '' }}"
                    href="{{ url('/admin/show_user') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa-solid fa-users text-warning text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Users</span>
                </a>
            </li>


            <li class="nav-item">
                <a class="nav-link rounded-3 {{ 'admin/show_landing' == request()->path() ? 'main-color' : '' }}"
                    href="{{ url('/admin/show_landing') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="bi bi-house-door-fill text-primary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Landing</span>
                </a>
            </li>


            <li class="nav-item">
                <a class="nav-link rounded-3 {{ 'admin/show_about' == request()->path() ? 'main-color' : '' }}"
                    href="{{ url('/admin/show_about') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="bi bi-info-circle text-primary text-sm opacity-10"></i>

                    </div>
                    <span class="nav-link-text ms-1">About</span>
                </a>
            </li>




            <li class="nav-item">
                <a class="nav-link rounded-3 {{ 'admin/show_counter' == request()->path() ? 'main-color' : '' }}"
                    href="{{ url('/admin/show_counter') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="bi bi-kanban-fill text-success text-sm opacity-10"></i>

                    </div>
                    <span class="nav-link-text ms-1">Counter</span>
                </a>
            </li>


            <li class="nav-item">
                <a class="nav-link rounded-3 {{ 'admin/show_wedding' == request()->path() ? 'main-color' : '' }}"
                    href="{{ url('/admin/show_wedding') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="bi bi-postcard-heart text-danger text-sm opacity-10"></i>

                    </div>
                    <span class="nav-link-text ms-1">Wedding</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link rounded-3 {{ 'admin/show_club' == request()->path() ? 'main-color' : '' }}"
                    href="{{ url('/admin/show_club') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="bi bi-boombox text-warning text-sm opacity-10"></i>

                    </div>
                    <span class="nav-link-text ms-1">Club</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link rounded-3 {{ 'admin/show_interactive' == request()->path() ? 'main-color' : '' }}"
                    href="{{ url('/admin/show_interactive') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="bi bi-card-text text-success text-sm opacity-10"></i>

                    </div>
                    <span class="nav-link-text ms-1">Interactive</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link rounded-3 {{ 'admin/show_special' == request()->path() ? 'main-color' : '' }}"
                    href="{{ url('/admin/show_special') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="bi bi-box-seam-fill text-primary text-sm opacity-10"></i>

                    </div>
                    <span class="nav-link-text ms-1">Special</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link rounded-3 {{ 'admin/show_musical' == request()->path() ? 'main-color' : '' }}"
                    href="{{ url('/admin/show_musical') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="bi bi-file-earmark-music-fill text-danger text-sm opacity-10"></i>

                    </div>
                    <span class="nav-link-text ms-1">Musical</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link rounded-3 {{ 'admin/show_kid' == request()->path() ? 'main-color' : '' }}"
                    href="{{ url('/admin/show_kid') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="bi bi-file-earmark-person-fill text-success text-sm opacity-10"></i>

                    </div>
                    <span class="nav-link-text ms-1">Kid</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link rounded-3 {{ 'admin/show_occasion' == request()->path() ? 'main-color' : '' }}"
                    href="{{ url('/admin/show_occasion') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="bi bi-calendar2-date-fill text-primary text-sm opacity-10"></i>

                    </div>
                    <span class="nav-link-text ms-1">Occasion</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link rounded-3 {{ 'admin/show_testimonial' == request()->path() ? 'main-color' : '' }}"
                    href="{{ url('/admin/show_testimonial') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="bi bi-sliders2 text-primary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Testimonial</span>
                </a>
            </li>




            <li class="nav-item">
                <a class="nav-link rounded-3 {{ 'admin/show_partner' == request()->path() ? 'main-color' : '' }}"
                    href="{{ url('/admin/show_partner') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        {{-- <i class="bi bi-collection text-danger text-sm opacity-10"></i> --}}
                        <i class="bi bi-people-fill text-primary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Partners</span>
                </a>
            </li>
{{--
            <li class="nav-item">
                <a class="nav-link rounded-3 {{ 'admin/show_portfolio' == request()->path() ? 'main-color' : '' }}"
                    href="{{ url('/admin/show_portfolio') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="bi bi-person-fill text-success text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Portfolio</span>
                </a>
            </li> --}}





            <li class="nav-item">
                <a class="nav-link rounded-3 {{ 'admin/show_social' == request()->path() ? 'main-color' : '' }}"
                    href="{{ url('/admin/show_social') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="bi bi-share fs-6 text-sm opacity-10" style="color:rgb(47, 194, 182)"></i>
                    </div>
                    <span class="nav-link-text ms-1">Social Media</span>
                </a>
            </li>

        </ul>
    </div>

    <div class="sidenav-footer mx-3 ">
        <div class="card card-plain shadow-none" id="sidenavCard">
            <div class="card-body text-center p-3 w-100 pt-0">
                <div class="docs-info">
                    <p class="text-xs font-weight-bold mt-2 mb-5">
                        <i class="bi bi-arrow-down"></i>
                        Scroll down for more
                        <i class="bi bi-arrow-down"></i>
                    </p>
                    <h6 class="mb-0">Need help?</h6>
                    <p class="text-xs font-weight-bold mb-0">Don't hesitate to contact us</p>
                </div>
            </div>
        </div>
        <a href="" target="_blank" class="btn btn-dark btn-sm w-100 mb-3">
            <i class="bi bi-telephone fs-6 me-1"></i>
            Call
        </a>
    </div>
</aside>
