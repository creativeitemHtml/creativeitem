@extends('global.index')
@section('content')

<!-- Start Breadcrumb -->
<section class="breadcrumb-section">
    <div class="breadcrumb-one-graphic-1">
        <img src="{{ asset('assets/img/banner-graphic-1.png') }}" alt="" />
    </div>
    <div class="breadcrumb-one-graphic-2">
        <img src="{{ asset('assets/img/banner-graphic-2.png') }}" alt="" />
    </div>
</section>
<!-- End Breadcrumb -->


<!-- offcanvas -->
<div class="mobile-admin-offcanvas">
    <div class="container">
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-header">
                <!-- Admin Info -->
                <div class="admin_user_info d-flex flex-lg-column align-items-center" >
                    <div class="user_img">
                        <img src="{{ get_user_image(auth()->user()->id) }}" alt="" />
                    </div>
                    <div class="user_details d-flex flex-column align-items-lg-center">
                        <h3 class="title">{{ auth()->user()->name }}</h3>
                        <p class="info">{{ auth()->user()->email }}</p>
                    </div>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <div class="col-lg-3 ">
                    <div class="el_sideber_left el_sideber_left-2">
                        <!-- Start Tab -->
                        <div class="l_sidebar_tab_2 d-flex flex-column flex-wrap">
                            <div class="sidebar_customer_panel">
                                <h5 class="tab_title">{{ get_phrase('Customer Panel') }}</h5>
                                <div class="l_sidebarMenu l_sidebarMenu-2">
                                    <ul class="nav-links accordion-menu">
                                        <li class="nav-links-li-2 {{ request()->routeIs('customer.dashboard') ? 'active-submenu' : '' }}">
                                            <a href="{{ route('customer.dashboard') }}" class="nav-item d-flex align-items-center">
                                                <div class="sidebar_icon">
                                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M0 10.0588V1.91406C0 1.37915 0.185287 0.926453 0.555878 0.555908C0.926468 0.185303 1.37918 0 1.91403 0H7.94118V10.0588H0ZM10.0588 0H16.086C16.6208 0 17.0735 0.185303 17.4441 0.555908C17.8147 0.926453 18 1.38031 18 1.91742V5.82355H10.0588V0ZM10.0588 18V7.94116H18V16.0859C18 16.6208 17.8147 17.0735 17.4441 17.4441C17.0735 17.8147 16.6208 18 16.086 18H10.0588ZM0 12.1765H7.94118V18H1.91403C1.37918 18 0.926468 17.8147 0.555878 17.4441C0.185287 17.0735 0 16.6197 0 16.0826V12.1765ZM1.58821 8.47058H6.35297V1.5882H1.91403C1.81902 1.5882 1.74095 1.61877 1.67986 1.67987C1.61876 1.74097 1.58821 1.81903 1.58821 1.91406V8.47058ZM11.647 4.23535H16.4118V1.91406C16.4118 1.81903 16.3812 1.74097 16.3201 1.67987C16.259 1.61877 16.181 1.5882 16.086 1.5882H11.647V4.23535ZM11.647 9.52942V16.4118H16.086C16.181 16.4118 16.259 16.3812 16.3201 16.3201C16.3812 16.2591 16.4118 16.181 16.4118 16.0859V9.52942H11.647ZM1.58821 13.7646V16.0859C1.58821 16.181 1.61876 16.2591 1.67986 16.3201C1.74095 16.3812 1.81902 16.4118 1.91403 16.4118H6.35297V13.7646H1.58821Z" fill="#676C7D"/>
                                                    </svg>                          
                                                </div>
                                                <span class="link-name">{{ get_phrase('Dashboard') }}</span>
                                            </a>
                                        </li>
                                        <li class="nav-links-li-2 {{ request()->routeIs(['customer.subscription_details', 'customer.purchase_history', 'customer.purchase_invoice', 'customer.wishlists', 'customer.downloads']) ? 'active-submenu' : '' }}">
                                            <a href="javascript:void(0);" class="nav-item nav-item-have-sub d-flex align-items-center">
                                                <div class="sidebar_icon">
                                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0 10.0588V1.91406C0 1.37915 0.185287 0.926453 0.555878 0.555908C0.926468 0.185303 1.37918 0 1.91403 0H7.94118V10.0588H0ZM10.0588 0H16.086C16.6208 0 17.0735 0.185303 17.4441 0.555908C17.8147 0.926453 18 1.38031 18 1.91742V5.82355H10.0588V0ZM10.0588 18V7.94116H18V16.0859C18 16.6208 17.8147 17.0735 17.4441 17.4441C17.0735 17.8147 16.6208 18 16.086 18H10.0588ZM0 12.1765H7.94118V18H1.91403C1.37918 18 0.926468 17.8147 0.555878 17.4441C0.185287 17.0735 0 16.6197 0 16.0826V12.1765ZM1.58821 8.47058H6.35297V1.5882H1.91403C1.81902 1.5882 1.74095 1.61877 1.67986 1.67987C1.61876 1.74097 1.58821 1.81903 1.58821 1.91406V8.47058ZM11.647 4.23535H16.4118V1.91406C16.4118 1.81903 16.3812 1.74097 16.3201 1.67987C16.259 1.61877 16.181 1.5882 16.086 1.5882H11.647V4.23535ZM11.647 9.52942V16.4118H16.086C16.181 16.4118 16.259 16.3812 16.3201 16.3201C16.3812 16.2591 16.4118 16.181 16.4118 16.0859V9.52942H11.647ZM1.58821 13.7646V16.0859C1.58821 16.181 1.61876 16.2591 1.67986 16.3201C1.74095 16.3812 1.81902 16.4118 1.91403 16.4118H6.35297V13.7646H1.58821Z" fill="#676C7D"/>
                                                    </svg>                              
                                                </div>
                                                <span class="link-name">{{ get_phrase('Creative Elements') }}</span>
                                            </a>
                                            <ul class="sideBar-sub" style="display: {{ (request()->routeIs('customer.subscription_details') || request()->routeIs('customer.purchase_history') || request()->routeIs('customer.purchase_invoice') || request()->routeIs('customer.wishlists') || request()->routeIs('customer.downloads')) ? 'block' : 'none' }}">
                                                <li><a href="{{ route('customer.subscription_details') }}" class="{{ request()->routeIs('customer.subscription_details') ? 'active' : '' }}">{{ get_phrase('Subscription Details') }}</a></li>
                                                <li><a href="{{ route('customer.purchase_history') }}" class="{{ request()->routeIs('customer.purchase_history') || request()->routeIs('customer.purchase_invoice') ? 'active' : '' }}">{{ get_phrase('') }}Purchase History</a></li>
                                                <li><a href="{{ route('customer.wishlists') }}" class="{{ request()->routeIs('customer.wishlists') ? 'active' : '' }}">{{ get_phrase('Wishlists') }}</a></li>
                                                <li><a href="{{ route('customer.downloads') }}" class="{{ request()->routeIs('customer.downloads') ? 'active' : '' }}">{{ get_phrase('Downloads') }}</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-links-li-2 {{ (request()->routeIs('customer.projects') || request()->routeIs('customer.project_create') || request()->routeIs('customer.project_details') || request()->routeIs('customer.milestone_invoice')) ? 'active-submenu' : '' }}">
                                            <a href="{{ route('customer.projects') }}" class="nav-item d-flex align-items-center">
                                                <div class="sidebar_icon">
                                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M12.0163 14.4526L16.7639 9.70502C16.8918 9.57715 17.0524 9.51178 17.246 9.50879C17.4395 9.50586 17.6031 9.57129 17.7369 9.70502C17.8706 9.83875 17.9375 10.0009 17.9375 10.1915C17.9375 10.3821 17.8706 10.5442 17.7369 10.6779L12.6004 15.8143C12.4336 15.9813 12.2389 16.0647 12.0163 16.0647C11.7938 16.0647 11.5991 15.9813 11.4322 15.8143L8.89867 13.2808C8.77081 13.153 8.70543 12.9922 8.70247 12.7987C8.69949 12.6052 8.76489 12.4416 8.89867 12.3078C9.03241 12.1741 9.19455 12.1072 9.38512 12.1072C9.57567 12.1072 9.73782 12.1741 9.87158 12.3078L12.0163 14.4526ZM2.60643 17.2578C2.14748 17.2578 1.75459 17.0944 1.42775 16.7676C1.10091 16.4407 0.9375 16.0478 0.9375 15.5888V3.23169C0.9375 2.77277 1.10091 2.37982 1.42775 2.05298C1.75459 1.72614 2.14748 1.56274 2.60643 1.56274H6.67403C6.80185 1.11304 7.06314 0.740173 7.45787 0.444275C7.85262 0.148376 8.29498 0.000366211 8.785 0.000366211C9.29395 0.000366211 9.74344 0.148376 10.1335 0.444275C10.5235 0.740173 10.7824 1.11304 10.9102 1.56274H14.9636C15.4225 1.56274 15.8154 1.72614 16.1423 2.05298C16.4691 2.37982 16.6325 2.77277 16.6325 3.23169V6.8714C16.6325 7.06757 16.5661 7.23206 16.4333 7.36481C16.3006 7.49744 16.1361 7.56378 15.9398 7.56378C15.7435 7.56378 15.5791 7.49744 15.4465 7.36469C15.3139 7.23206 15.2477 7.06757 15.2477 6.8714V3.23169C15.2477 3.16071 15.2181 3.09558 15.1589 3.03632C15.0997 2.97717 15.0346 2.94763 14.9636 2.94763H12.9396V4.52771C12.9396 4.76416 12.8599 4.96234 12.7007 5.12231C12.5414 5.28223 12.3441 5.36218 12.1086 5.36218H5.4612C5.22578 5.36218 5.02847 5.28223 4.86925 5.12231C4.71007 4.96234 4.63045 4.76416 4.63045 4.52771V2.94763H2.60643C2.53542 2.94763 2.47029 2.97717 2.4111 3.03632C2.35191 3.09558 2.32233 3.16071 2.32233 3.23169V15.5888C2.32233 15.6599 2.35191 15.725 2.4111 15.7842C2.47029 15.8433 2.53542 15.8729 2.60643 15.8729H7.16937C7.36552 15.8729 7.52998 15.9393 7.66269 16.0721C7.79541 16.2049 7.86177 16.3694 7.86177 16.5657C7.86177 16.762 7.79541 16.9263 7.66269 17.0589C7.52998 17.1915 7.36552 17.2578 7.16937 17.2578H2.60643ZM8.78654 3.05408C9.02342 3.05408 9.22147 2.974 9.38066 2.81378C9.53987 2.65356 9.61948 2.45502 9.61948 2.21808C9.61948 1.98126 9.53935 1.7832 9.3791 1.62402C9.21886 1.46478 9.02032 1.38525 8.78346 1.38525C8.54659 1.38525 8.34854 1.46533 8.18936 1.62555C8.03014 1.78577 7.95052 1.98431 7.95052 2.22125C7.95052 2.45813 8.03065 2.65619 8.19089 2.81537C8.35114 2.97449 8.5497 3.05408 8.78654 3.05408Z" fill="#676C7D"/>
                                                    </svg>                            
                                                </div>
                                                <span class="link-name">{{ get_phrase('My Projects') }}</span>
                                            </a>
                                        </li>
                                        <li class="nav-links-li-2 {{ request()->routeIs('customer.profile') ? 'active-submenu' : '' }}">
                                            <a href="{{ route('customer.profile') }}" class="nav-item d-flex align-items-center">
                                                <div class="sidebar_icon">
                                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M3.33668 14.0138C4.14194 13.4161 5.01917 12.9443 5.96835 12.5982C6.91754 12.2521 7.92776 12.0789 8.99902 12.0789C10.0703 12.0789 11.0805 12.2521 12.0297 12.5982C12.9789 12.9443 13.8561 13.4161 14.6614 14.0138C15.2504 13.3664 15.7171 12.617 16.0615 11.7656C16.4058 10.9141 16.578 9.99225 16.578 9C16.578 6.89996 15.8398 5.11182 14.3635 3.6355C12.8872 2.15912 11.099 1.42096 8.99902 1.42096C6.89901 1.42096 5.11085 2.15912 3.63453 3.6355C2.1582 5.11182 1.42005 6.89996 1.42005 9C1.42005 9.99225 1.59222 10.9141 1.93655 11.7656C2.28089 12.617 2.7476 13.3664 3.33668 14.0138ZM8.9993 9.71045C8.13433 9.71045 7.40489 9.41364 6.81097 8.81995C6.21704 8.22614 5.92009 7.49683 5.92009 6.63177C5.92009 5.76685 6.21695 5.03741 6.81068 4.44354C7.40443 3.84961 8.13378 3.55261 8.99873 3.55261C9.8637 3.55261 10.5931 3.84949 11.1871 4.44318C11.781 5.03699 12.0779 5.7663 12.0779 6.63123C12.0779 7.49628 11.7811 8.22565 11.1873 8.81958C10.5936 9.41351 9.86425 9.71045 8.9993 9.71045ZM8.99902 18C7.74921 18 6.57685 17.765 5.48193 17.2949C4.38699 16.8248 3.43445 16.1848 2.62433 15.3747C1.81421 14.5646 1.17414 13.6119 0.704102 12.517C0.234047 11.4221 -0.000976562 10.2498 -0.000976562 9C-0.000976562 7.75018 0.234047 6.57782 0.704102 5.48291C1.17414 4.38794 1.81421 3.43542 2.62433 2.62531C3.43446 1.81512 4.38699 1.17511 5.48193 0.705078C6.57685 0.234985 7.74921 0 8.99902 0C10.2488 0 11.4212 0.234985 12.5161 0.705078C13.611 1.17511 14.5636 1.81512 15.3737 2.62531C16.1838 3.43542 16.8239 4.38794 17.2939 5.48291C17.764 6.57782 17.999 7.75018 17.999 9C17.999 10.2498 17.764 11.4221 17.2939 12.517C16.8239 13.6119 16.1838 14.5646 15.3737 15.3747C14.5636 16.1848 13.611 16.8248 12.5161 17.2949C11.4212 17.765 10.2488 18 8.99902 18ZM8.99902 16.5789C9.85408 16.5789 10.6785 16.4413 11.4722 16.1663C12.2659 15.8912 12.9707 15.5064 13.5865 15.0121C12.9707 14.536 12.275 14.165 11.4995 13.899C10.724 13.6329 9.89052 13.5 8.99902 13.5C8.10751 13.5 7.27248 13.6315 6.49393 13.8944C5.71538 14.1573 5.02125 14.53 4.41154 15.0121C5.02733 15.5064 5.73209 15.8912 6.52583 16.1663C7.31956 16.4413 8.14395 16.5789 8.99902 16.5789ZM8.99902 8.28949C9.47027 8.28949 9.86441 8.13098 10.1814 7.8139C10.4984 7.49695 10.6569 7.10278 10.6569 6.63153C10.6569 6.16034 10.4984 5.76617 10.1814 5.4491C9.86441 5.13214 9.47027 4.97363 8.99902 4.97363C8.52776 4.97363 8.13363 5.13214 7.8166 5.4491C7.4996 5.76617 7.34109 6.16034 7.34109 6.63153C7.34109 7.10278 7.4996 7.49695 7.8166 7.8139C8.13363 8.13098 8.52776 8.28949 8.99902 8.28949Z" fill="#676C7D"/>
                                                    </svg>                          
                                                </div>
                                                <span class="link-name">{{ get_phrase('Account') }}</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <a href="{{ route('logout') }}" class="sidebarLogoutBtn" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><path d="M502.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 224 192 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l210.7 0-73.4 73.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l128-128zM160 96c17.7 0 32-14.3 32-32s-14.3-32-32-32L96 32C43 32 0 75 0 128L0 384c0 53 43 96 96 96l64 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-64 0c-17.7 0-32-14.3-32-32l0-256c0-17.7 14.3-32 32-32l64 0z"/></svg>
                                <span>{{ get_phrase('Logout') }}</span>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- offcanvas -->

<!-- Start Elements -->
<section class="elements-section elements-section-2 breadcrumb-under">
    <div class="container">
        <!-- Start Textual Inputs -->
        <div class="row justify-content-center">
            <!-- Left side -->
            <div class="col-lg-3 admin-d-none">
                <div class="el_sideber_left el_sideber_left-2">
                    <!-- Admin Info -->
                    <div class="admin_user_info d-flex flex-lg-column align-items-center">
                        <div class="user_img">
                            <img src="{{ get_user_image(auth()->user()->id) }}" alt="" />
                        </div>
                        <div class="user_details d-flex flex-column align-items-lg-center">
                            <h3 class="title">{{ auth()->user()->name }}</h3>
                            <p class="info">{{ auth()->user()->email }}</p>
                        </div>
                    </div>
                    <!-- Start Tab -->
                    <div class="l_sidebar_tab_2 d-flex flex-column flex-wrap">
                        <div class="sidebar_customer_panel">
                            <h5 class="tab_title">{{ get_phrase('Customer Panel') }}</h5>
                            <div class="l_sidebarMenu l_sidebarMenu-2">
                                <ul class="nav-links accordion-menu">
                                    <li class="nav-links-li-2 {{ request()->routeIs('customer.dashboard') ? 'active-submenu' : '' }}">
                                        <a href="{{ route('customer.dashboard') }}" class="nav-item d-flex align-items-center">
                                            <div class="sidebar_icon">
                                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0 10.0588V1.91406C0 1.37915 0.185287 0.926453 0.555878 0.555908C0.926468 0.185303 1.37918 0 1.91403 0H7.94118V10.0588H0ZM10.0588 0H16.086C16.6208 0 17.0735 0.185303 17.4441 0.555908C17.8147 0.926453 18 1.38031 18 1.91742V5.82355H10.0588V0ZM10.0588 18V7.94116H18V16.0859C18 16.6208 17.8147 17.0735 17.4441 17.4441C17.0735 17.8147 16.6208 18 16.086 18H10.0588ZM0 12.1765H7.94118V18H1.91403C1.37918 18 0.926468 17.8147 0.555878 17.4441C0.185287 17.0735 0 16.6197 0 16.0826V12.1765ZM1.58821 8.47058H6.35297V1.5882H1.91403C1.81902 1.5882 1.74095 1.61877 1.67986 1.67987C1.61876 1.74097 1.58821 1.81903 1.58821 1.91406V8.47058ZM11.647 4.23535H16.4118V1.91406C16.4118 1.81903 16.3812 1.74097 16.3201 1.67987C16.259 1.61877 16.181 1.5882 16.086 1.5882H11.647V4.23535ZM11.647 9.52942V16.4118H16.086C16.181 16.4118 16.259 16.3812 16.3201 16.3201C16.3812 16.2591 16.4118 16.181 16.4118 16.0859V9.52942H11.647ZM1.58821 13.7646V16.0859C1.58821 16.181 1.61876 16.2591 1.67986 16.3201C1.74095 16.3812 1.81902 16.4118 1.91403 16.4118H6.35297V13.7646H1.58821Z" fill="#676C7D"/>
                                                </svg>                              
                                            </div>
                                            <span class="link-name">{{ get_phrase('Dashboard') }}</span>
                                        </a>
                                    </li>
                                    <li class="nav-links-li-2 {{ request()->routeIs(['customer.subscription_details', 'customer.purchase_history', 'customer.wishlists', 'customer.downloads', 'customer.purchase_invoice']) ? 'active-submenu' : '' }}">
                                        <a href="javascript:void(0);" class="nav-item nav-item-have-sub d-flex align-items-center">
                                            <div class="sidebar_icon">
                                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M0 10.0588V1.91406C0 1.37915 0.185287 0.926453 0.555878 0.555908C0.926468 0.185303 1.37918 0 1.91403 0H7.94118V10.0588H0ZM10.0588 0H16.086C16.6208 0 17.0735 0.185303 17.4441 0.555908C17.8147 0.926453 18 1.38031 18 1.91742V5.82355H10.0588V0ZM10.0588 18V7.94116H18V16.0859C18 16.6208 17.8147 17.0735 17.4441 17.4441C17.0735 17.8147 16.6208 18 16.086 18H10.0588ZM0 12.1765H7.94118V18H1.91403C1.37918 18 0.926468 17.8147 0.555878 17.4441C0.185287 17.0735 0 16.6197 0 16.0826V12.1765ZM1.58821 8.47058H6.35297V1.5882H1.91403C1.81902 1.5882 1.74095 1.61877 1.67986 1.67987C1.61876 1.74097 1.58821 1.81903 1.58821 1.91406V8.47058ZM11.647 4.23535H16.4118V1.91406C16.4118 1.81903 16.3812 1.74097 16.3201 1.67987C16.259 1.61877 16.181 1.5882 16.086 1.5882H11.647V4.23535ZM11.647 9.52942V16.4118H16.086C16.181 16.4118 16.259 16.3812 16.3201 16.3201C16.3812 16.2591 16.4118 16.181 16.4118 16.0859V9.52942H11.647ZM1.58821 13.7646V16.0859C1.58821 16.181 1.61876 16.2591 1.67986 16.3201C1.74095 16.3812 1.81902 16.4118 1.91403 16.4118H6.35297V13.7646H1.58821Z" fill="#676C7D"/>
                                                </svg>                              
                                            </div>
                                            <span class="link-name">{{ get_phrase('Creative Elements') }}</span>
                                        </a>
                                        <ul class="sideBar-sub" style="display: {{ (request()->routeIs('customer.subscription_details') || request()->routeIs(['customer.purchase_history', 'customer.purchase_invoice']) || request()->routeIs('customer.wishlists') || request()->routeIs('customer.downloads')) ? 'block' : 'none' }}">
                                            <li><a href="{{ route('customer.subscription_details') }}" class="{{ request()->routeIs('customer.subscription_details') ? 'active' : '' }}">{{ get_phrase('Subscription Details') }}</a></li>
                                            <li><a href="{{ route('customer.purchase_history') }}" class="{{ request()->routeIs(['customer.purchase_history', 'customer.purchase_invoice']) ? 'active' : '' }}">{{ get_phrase('Purchase History') }}</a></li>
                                            <li><a href="{{ route('customer.wishlists') }}" class="{{ request()->routeIs('customer.wishlists') ? 'active' : '' }}">{{ get_phrase('Wishlists') }}</a></li>
                                            <li><a href="{{ route('customer.downloads') }}" class="{{ request()->routeIs('customer.downloads') ? 'active' : '' }}">{{ get_phrase('Downloads') }}</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-links-li-2 {{ (request()->routeIs('customer.projects') || request()->routeIs('customer.project_create') || request()->routeIs('customer.project_details') || request()->routeIs('customer.milestone_invoice')) ? 'active-submenu' : '' }}">
                                        <a href="{{ route('customer.projects') }}" class="nav-item d-flex align-items-center">
                                            <div class="sidebar_icon">
                                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12.0163 14.4526L16.7639 9.70502C16.8918 9.57715 17.0524 9.51178 17.246 9.50879C17.4395 9.50586 17.6031 9.57129 17.7369 9.70502C17.8706 9.83875 17.9375 10.0009 17.9375 10.1915C17.9375 10.3821 17.8706 10.5442 17.7369 10.6779L12.6004 15.8143C12.4336 15.9813 12.2389 16.0647 12.0163 16.0647C11.7938 16.0647 11.5991 15.9813 11.4322 15.8143L8.89867 13.2808C8.77081 13.153 8.70543 12.9922 8.70247 12.7987C8.69949 12.6052 8.76489 12.4416 8.89867 12.3078C9.03241 12.1741 9.19455 12.1072 9.38512 12.1072C9.57567 12.1072 9.73782 12.1741 9.87158 12.3078L12.0163 14.4526ZM2.60643 17.2578C2.14748 17.2578 1.75459 17.0944 1.42775 16.7676C1.10091 16.4407 0.9375 16.0478 0.9375 15.5888V3.23169C0.9375 2.77277 1.10091 2.37982 1.42775 2.05298C1.75459 1.72614 2.14748 1.56274 2.60643 1.56274H6.67403C6.80185 1.11304 7.06314 0.740173 7.45787 0.444275C7.85262 0.148376 8.29498 0.000366211 8.785 0.000366211C9.29395 0.000366211 9.74344 0.148376 10.1335 0.444275C10.5235 0.740173 10.7824 1.11304 10.9102 1.56274H14.9636C15.4225 1.56274 15.8154 1.72614 16.1423 2.05298C16.4691 2.37982 16.6325 2.77277 16.6325 3.23169V6.8714C16.6325 7.06757 16.5661 7.23206 16.4333 7.36481C16.3006 7.49744 16.1361 7.56378 15.9398 7.56378C15.7435 7.56378 15.5791 7.49744 15.4465 7.36469C15.3139 7.23206 15.2477 7.06757 15.2477 6.8714V3.23169C15.2477 3.16071 15.2181 3.09558 15.1589 3.03632C15.0997 2.97717 15.0346 2.94763 14.9636 2.94763H12.9396V4.52771C12.9396 4.76416 12.8599 4.96234 12.7007 5.12231C12.5414 5.28223 12.3441 5.36218 12.1086 5.36218H5.4612C5.22578 5.36218 5.02847 5.28223 4.86925 5.12231C4.71007 4.96234 4.63045 4.76416 4.63045 4.52771V2.94763H2.60643C2.53542 2.94763 2.47029 2.97717 2.4111 3.03632C2.35191 3.09558 2.32233 3.16071 2.32233 3.23169V15.5888C2.32233 15.6599 2.35191 15.725 2.4111 15.7842C2.47029 15.8433 2.53542 15.8729 2.60643 15.8729H7.16937C7.36552 15.8729 7.52998 15.9393 7.66269 16.0721C7.79541 16.2049 7.86177 16.3694 7.86177 16.5657C7.86177 16.762 7.79541 16.9263 7.66269 17.0589C7.52998 17.1915 7.36552 17.2578 7.16937 17.2578H2.60643ZM8.78654 3.05408C9.02342 3.05408 9.22147 2.974 9.38066 2.81378C9.53987 2.65356 9.61948 2.45502 9.61948 2.21808C9.61948 1.98126 9.53935 1.7832 9.3791 1.62402C9.21886 1.46478 9.02032 1.38525 8.78346 1.38525C8.54659 1.38525 8.34854 1.46533 8.18936 1.62555C8.03014 1.78577 7.95052 1.98431 7.95052 2.22125C7.95052 2.45813 8.03065 2.65619 8.19089 2.81537C8.35114 2.97449 8.5497 3.05408 8.78654 3.05408Z" fill="#676C7D"/>
                                                </svg>                            
                                            </div>
                                            <span class="link-name">{{ get_phrase('My Projects') }}</span>
                                        </a>
                                    </li>
                                    <li class="nav-links-li-2 {{ request()->routeIs('customer.profile') ? 'active-submenu' : '' }}">
                                        <a href="{{ route('customer.profile') }}" class="nav-item d-flex align-items-center">
                                            <div class="sidebar_icon">
                                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M3.33668 14.0138C4.14194 13.4161 5.01917 12.9443 5.96835 12.5982C6.91754 12.2521 7.92776 12.0789 8.99902 12.0789C10.0703 12.0789 11.0805 12.2521 12.0297 12.5982C12.9789 12.9443 13.8561 13.4161 14.6614 14.0138C15.2504 13.3664 15.7171 12.617 16.0615 11.7656C16.4058 10.9141 16.578 9.99225 16.578 9C16.578 6.89996 15.8398 5.11182 14.3635 3.6355C12.8872 2.15912 11.099 1.42096 8.99902 1.42096C6.89901 1.42096 5.11085 2.15912 3.63453 3.6355C2.1582 5.11182 1.42005 6.89996 1.42005 9C1.42005 9.99225 1.59222 10.9141 1.93655 11.7656C2.28089 12.617 2.7476 13.3664 3.33668 14.0138ZM8.9993 9.71045C8.13433 9.71045 7.40489 9.41364 6.81097 8.81995C6.21704 8.22614 5.92009 7.49683 5.92009 6.63177C5.92009 5.76685 6.21695 5.03741 6.81068 4.44354C7.40443 3.84961 8.13378 3.55261 8.99873 3.55261C9.8637 3.55261 10.5931 3.84949 11.1871 4.44318C11.781 5.03699 12.0779 5.7663 12.0779 6.63123C12.0779 7.49628 11.7811 8.22565 11.1873 8.81958C10.5936 9.41351 9.86425 9.71045 8.9993 9.71045ZM8.99902 18C7.74921 18 6.57685 17.765 5.48193 17.2949C4.38699 16.8248 3.43445 16.1848 2.62433 15.3747C1.81421 14.5646 1.17414 13.6119 0.704102 12.517C0.234047 11.4221 -0.000976562 10.2498 -0.000976562 9C-0.000976562 7.75018 0.234047 6.57782 0.704102 5.48291C1.17414 4.38794 1.81421 3.43542 2.62433 2.62531C3.43446 1.81512 4.38699 1.17511 5.48193 0.705078C6.57685 0.234985 7.74921 0 8.99902 0C10.2488 0 11.4212 0.234985 12.5161 0.705078C13.611 1.17511 14.5636 1.81512 15.3737 2.62531C16.1838 3.43542 16.8239 4.38794 17.2939 5.48291C17.764 6.57782 17.999 7.75018 17.999 9C17.999 10.2498 17.764 11.4221 17.2939 12.517C16.8239 13.6119 16.1838 14.5646 15.3737 15.3747C14.5636 16.1848 13.611 16.8248 12.5161 17.2949C11.4212 17.765 10.2488 18 8.99902 18ZM8.99902 16.5789C9.85408 16.5789 10.6785 16.4413 11.4722 16.1663C12.2659 15.8912 12.9707 15.5064 13.5865 15.0121C12.9707 14.536 12.275 14.165 11.4995 13.899C10.724 13.6329 9.89052 13.5 8.99902 13.5C8.10751 13.5 7.27248 13.6315 6.49393 13.8944C5.71538 14.1573 5.02125 14.53 4.41154 15.0121C5.02733 15.5064 5.73209 15.8912 6.52583 16.1663C7.31956 16.4413 8.14395 16.5789 8.99902 16.5789ZM8.99902 8.28949C9.47027 8.28949 9.86441 8.13098 10.1814 7.8139C10.4984 7.49695 10.6569 7.10278 10.6569 6.63153C10.6569 6.16034 10.4984 5.76617 10.1814 5.4491C9.86441 5.13214 9.47027 4.97363 8.99902 4.97363C8.52776 4.97363 8.13363 5.13214 7.8166 5.4491C7.4996 5.76617 7.34109 6.16034 7.34109 6.63153C7.34109 7.10278 7.4996 7.49695 7.8166 7.8139C8.13363 8.13098 8.52776 8.28949 8.99902 8.28949Z" fill="#676C7D"/>
                                                </svg>                          
                                            </div>
                                            <span class="link-name">{{ get_phrase('Account') }}</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <a href="{{ route('logout') }}" class="sidebarLogoutBtn" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><path d="M502.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 224 192 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l210.7 0-73.4 73.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l128-128zM160 96c17.7 0 32-14.3 32-32s-14.3-32-32-32L96 32C43 32 0 75 0 128L0 384c0 53 43 96 96 96l64 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-64 0c-17.7 0-32-14.3-32-32l0-256c0-17.7 14.3-32 32-32l64 0z"/></svg>
                            <span>{{ get_phrase('Logout') }}</span>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
            <!-- Right Side -->
            <div class="col-lg-9">
                <!-- Main Content -->
				@if(isset($sub_folder) && $sub_folder != '')
					@include('backend.customer.'.$sub_folder.'.'.$file_name)
				@else
		        	@include('backend.customer.'.$file_name)
				@endif
            </div>
        </div>
        <!-- End Textual Inputs -->
    </div>
</section>
<!-- End Elements -->

@endsection