<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAATIAA</title>
    <link rel="stylesheet" href="/assets/css/vendors/bootstrap.rtl.min.css">
    <link rel="stylesheet" href="/assets/css/vendors/swiper-bundle.min.css">
    <link rel="stylesheet" href="/assets/css/styles.css">
</head>

<body class="{{ app()->getLocale() == 'en' ? 'ltr' : '' }}">
    <header>

        <nav class="navbar navbar-expand-lg dir-ltr">
            <div class="d-flex justify-content-between align-items-center w-100 flex-ltr-row-reverse">
                <a class="navbar-brand" href="/">
                    <img src="/assets/img/square-logo.png" alt="saatiyaa">
                </a>
                <button class="btn d-lg-none" type="button" id="navbarShow">
                    <span>
                        <svg class="rotate180-ltr" width="24" height="24" viewBox="0 0 16 12" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 11H15M4 6H15M1 1H15" stroke="#1D264A" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div id="navbarClose">X</div>
                    <ul class="navbar-nav me-rtl-auto mb-2 mb-lg-0 {{ app()->getLocale() == 'fa' ? 'dir-rtl' : '' }}">
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is(app()->getLocale()) ? 'active' : '' }}"
                                aria-current="page" href="/">{{ __('Home') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is(app()->getLocale() . '/products') || request()->is(app()->getLocale() . '/product') ? 'active' : '' }}"
                                aria-current="page" href="/products">{{ __('Products') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is(app()->getLocale() . '/about') ? 'active' : '' }}"
                                aria-current="page" href="/about">{{ __('About us') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is(app()->getLocale() . '/contatc') ? 'active' : '' }}"
                                aria-current="page" href="/contact">{{ __('Contact us') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is(app()->getLocale() . '/blogs') || request()->is(app()->getLocale() . '/blog') ? 'active' : '' }}"
                                aria-current="page" href="/blogs">{{ __('Blogs') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is(app()->getLocale() . '/services') ? 'active' : '' }}"
                                aria-current="page"
                                href="{{ app()->getLocale() == 'fa' ? '/en' : '/fa' }}">{{ app()->getLocale() == 'fa' ? 'English' : 'فارسی' }}</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        @yield('extraHeader')
    </header>
    <main>
        @yield('content')
    </main>
    <footer class="position-relative d-flex align-items-center justify-content-center px-5 px-lg-0">
        <div class="position-absolute end-50" id="backToTop">
            <svg width="152" height="85" viewBox="0 0 152 85" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M152 16.7319L120.664 16.7319L120.664 46.85C120.664 30.422 134.907 16.7319 152 16.7319Z"
                    fill="#F2F2F2" />
                <path d="M152 16.7319L120.664 16.7319L120.664 46.85C120.664 30.422 134.907 16.7319 152 16.7319Z"
                    fill="#F2F2F2" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M152 16.7319L120.664 16.7319L120.664 46.85C120.664 30.422 134.907 16.7319 152 16.7319Z"
                    fill="#F2F2F2" />
                <path d="M64.2589 16.7319L32.2261 16.7319L32.2261 46.85C32.2261 30.422 46.7864 16.7319 64.2589 16.7319Z"
                    fill="#F2F2F2" />
                <path d="M64.2589 16.7319L32.2261 16.7319L32.2261 46.85C32.2261 30.422 46.7864 16.7319 64.2589 16.7319Z"
                    fill="#F2F2F2" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M64.2589 16.7319L32.2261 16.7319L32.2261 46.85C32.2261 30.422 46.7864 16.7319 64.2589 16.7319Z"
                    fill="#F2F2F2" />
                <path d="M88.6308 16.7319L120.664 16.7319L120.664 46.85C120.664 30.422 106.103 16.7319 88.6308 16.7319Z"
                    fill="#F2F2F2" />
                <path d="M88.6308 16.7319L120.664 16.7319L120.664 46.85C120.664 30.422 106.103 16.7319 88.6308 16.7319Z"
                    fill="#F2F2F2" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M88.6308 16.7319L120.664 16.7319L120.664 46.85C120.664 30.422 106.103 16.7319 88.6308 16.7319Z"
                    fill="#F2F2F2" />
                <path
                    d="M0.889629 16.7319L32.2261 16.7319L32.2261 46.85C32.2261 30.422 17.9822 16.7319 0.889629 16.7319Z"
                    fill="#F2F2F2" />
                <path
                    d="M0.889629 16.7319L32.2261 16.7319L32.2261 46.85C32.2261 30.422 17.9822 16.7319 0.889629 16.7319Z"
                    fill="#F2F2F2" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M0.889629 16.7319L32.2261 16.7319L32.2261 46.85C32.2261 30.422 17.9822 16.7319 0.889629 16.7319Z"
                    fill="#F2F2F2" />
                <ellipse cx="76.4444" cy="42.5" rx="44.2192" ry="42.5"
                    transform="rotate(-180 76.4444 42.5)" fill="#F2F2F2" />
                <circle cx="76.4458" cy="43.1745" r="25.6349" fill="#323232" />
                <path d="M81.7943 45.3968L76.3974 40L71.0006 45.3968" stroke="white" stroke-width="1.5"
                    stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </div>
        <div
            class="footer-wrapper d-flex w-100 flex-md-row{{ app()->getLocale() == 'en' ? '-reverse' : '' }}  flex-column justify-content-center">
            <div class=" mb-md-0 mb-5">
                <div class="footer-box first position-relative">
                    <h4>{{ __('Useful Links') }}</h4>
                    <div class="footer-box-content text-14">
                        <div class="row mt-2">
                            <div class="col"><a href="#">{{ __('Home') }}</a></div>
                            <div class="col"><a href="#">{{ __('Services') }}</a></div>
                        </div>
                        <div class="row mt-2">
                            <div class="col"><a
                                    href="{{ route('products', ['locale' => app()->getLocale()]) }}">{{ __('Products') }}</a>
                            </div>
                            <div class="col"><a href="#">{{ __('About us') }}</a></div>
                        </div>
                        <div class="row mt-2">
                            <div class="col"><a href="#">{{ __('Blogs') }}</a></div>
                            <div class="col"><a href="#">{{ __('Contact us') }}</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5 col-12 mb-md-0 mb-5 order-first order-md-2">
                <div class="d-flex align-items-center justify-content-center flex-column mt-2">
                    <div class="saatiaa"><img src="/assets/img/square-logo.png" alt="SAATIAA"></div>
                    <div
                        class="social-icons justify-content-between  mt-5 d-flex position-md-static position-absolute bottom-0 start-50">
                        <div class="social-icon-wrapper">
                            <a class="social-icon" href="#">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M7.5 3H16.5C17.6935 3 18.8381 3.47411 19.682 4.31802C20.5259 5.16193 21 6.30653 21 7.5V16.5C21 17.6935 20.5259 18.8381 19.682 19.682C18.8381 20.5259 17.6935 21 16.5 21H7.5C6.30653 21 5.16193 20.5259 4.31802 19.682C3.47411 18.8381 3 17.6935 3 16.5V7.5C3 6.30653 3.47411 5.16193 4.31802 4.31802C5.16193 3.47411 6.30653 3 7.5 3V3Z"
                                        stroke="#323232" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M11.1 12.8999H16.5" stroke="#323232" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path
                                        d="M16.5 8.3999H15.555C14.8509 8.3999 14.1756 8.67963 13.6777 9.17753C13.1797 9.67544 12.9 10.3508 12.9 11.0549V20.9999"
                                        stroke="#323232" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </a>
                        </div>
                        <div class="social-icon-wrapper">
                            <a class="social-icon" href="#">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M11.8002 16.9066L9.7302 18.9156C9.64826 18.9949 9.54734 19.0518 9.43711 19.0809C9.32687 19.11 9.21102 19.1103 9.10063 19.0818C8.99024 19.0533 8.88901 18.9969 8.80664 18.9181C8.72427 18.8393 8.66352 18.7406 8.6302 18.6316L7.2522 14.1006"
                                        stroke="#323232" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M14.0998 10.9273L10.1828 14.4623C10.09 14.5462 10.0169 14.6496 9.96906 14.7652C9.92117 14.8808 9.8996 15.0055 9.90592 15.1305C9.91224 15.2554 9.94629 15.3774 10.0056 15.4875C10.0649 15.5977 10.148 15.6932 10.2488 15.7673L15.6268 19.7403C15.7482 19.8314 15.8907 19.8903 16.041 19.9116C16.1913 19.9328 16.3446 19.9157 16.4865 19.8618C16.6284 19.8079 16.7543 19.719 16.8527 19.6033C16.951 19.4877 17.0185 19.349 17.0488 19.2003L19.6938 6.7533C19.7228 6.61678 19.7143 6.47496 19.6694 6.34282C19.6245 6.21069 19.5447 6.09314 19.4385 6.0026C19.3322 5.91205 19.2035 5.85187 19.066 5.82841C18.9284 5.80495 18.787 5.81908 18.6568 5.8693L3.14179 11.8533C3.04151 11.8916 2.95568 11.9603 2.89627 12.0497C2.83685 12.1392 2.80681 12.2449 2.81034 12.3522C2.81386 12.4595 2.85076 12.563 2.91591 12.6484C2.98106 12.7337 3.07121 12.7966 3.17379 12.8283L7.25079 14.1003"
                                        stroke="#323232" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </a>
                        </div>
                        <div class="social-icon-wrapper">
                            <a class="social-icon" href="#">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M7.5 3H16.5C17.6935 3 18.8381 3.47411 19.682 4.31802C20.5259 5.16193 21 6.30653 21 7.5V16.5C21 17.6935 20.5259 18.8381 19.682 19.682C18.8381 20.5259 17.6935 21 16.5 21H7.5C6.30653 21 5.16193 20.5259 4.31802 19.682C3.47411 18.8381 3 17.6935 3 16.5V7.5C3 6.30653 3.47411 5.16193 4.31802 4.31802C5.16193 3.47411 6.30653 3 7.5 3V3Z"
                                        stroke="#323232" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M8.12 11.1001V16.5001" stroke="#323232" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path
                                        d="M11.719 16.5001V13.3501C11.719 12.7534 11.956 12.1811 12.378 11.7591C12.8 11.3371 13.3723 11.1001 13.969 11.1001V11.1001C14.5657 11.1001 15.138 11.3371 15.56 11.7591C15.9819 12.1811 16.219 12.7534 16.219 13.3501V16.5001"
                                        stroke="#323232" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M8.11798 7.8379C8.07352 7.8381 8.03012 7.85146 7.99325 7.8763C7.95638 7.90115 7.9277 7.93636 7.91082 7.97749C7.89395 8.01862 7.88963 8.06382 7.89843 8.1074C7.90722 8.15098 7.92873 8.19098 7.96024 8.22235C7.99174 8.25372 8.03183 8.27505 8.07545 8.28365C8.11907 8.29225 8.16426 8.28773 8.20531 8.27068C8.24637 8.25362 8.28145 8.22478 8.30613 8.1878C8.33081 8.15082 8.34398 8.10736 8.34398 8.0629C8.34412 8.03323 8.33835 8.00383 8.32703 7.97641C8.31571 7.94898 8.29905 7.92408 8.27802 7.90315C8.257 7.88222 8.23202 7.86567 8.20455 7.85447C8.17708 7.84327 8.14765 7.83763 8.11798 7.8379"
                                        stroke="#323232" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </a>
                        </div>
                        <div class="social-icon-wrapper">
                            <a class="social-icon" href="#">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M7.5 3H16.5C17.6935 3 18.8381 3.47411 19.682 4.31802C20.5259 5.16193 21 6.30653 21 7.5V16.5C21 17.6935 20.5259 18.8381 19.682 19.682C18.8381 20.5259 17.6935 21 16.5 21H7.5C6.30653 21 5.16193 20.5259 4.31802 19.682C3.47411 18.8381 3 17.6935 3 16.5V7.5C3 6.30653 3.47411 5.16193 4.31802 4.31802C5.16193 3.47411 6.30653 3 7.5 3V3Z"
                                        stroke="#323232" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M16.6471 6.60791C16.6063 6.60812 16.5666 6.62045 16.5329 6.64332C16.4993 6.6662 16.4732 6.69858 16.4579 6.73635C16.4427 6.77412 16.4391 6.81556 16.4476 6.85539C16.456 6.89522 16.4761 6.93163 16.5053 6.95999C16.5345 6.98835 16.5715 7.00737 16.6116 7.01463C16.6516 7.02188 16.693 7.01704 16.7303 7.00073C16.7676 6.98442 16.7992 6.95737 16.821 6.92303C16.8429 6.88869 16.854 6.84861 16.8531 6.80791C16.8515 6.75432 16.8291 6.70345 16.7906 6.66611C16.7522 6.62877 16.7007 6.60789 16.6471 6.60791"
                                        stroke="#323232" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M14.546 9.45375C15.0495 9.95721 15.3924 10.5987 15.5313 11.297C15.6702 11.9953 15.599 12.7192 15.3265 13.377C15.054 14.0348 14.5926 14.5971 14.0006 14.9927C13.4086 15.3883 12.7125 15.5994 12.0005 15.5994C11.2885 15.5994 10.5925 15.3883 10.0004 14.9927C9.40841 14.5971 8.94699 14.0348 8.67453 13.377C8.40206 12.7192 8.33078 11.9953 8.4697 11.297C8.60863 10.5987 8.95152 9.95721 9.45501 9.45375C10.1301 8.77867 11.0458 8.39941 12.0005 8.39941C12.9553 8.39941 13.8709 8.77867 14.546 9.45375"
                                        stroke="#323232" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="order-last">
                <div class="footer-box position-relative">
                    <h4>{{ __('Contact') }}</h4>
                    <div class="footer-box-content">
                        <p class="text-14">
                            {{ __('Factory Address: Tehran Province - After Malard Safadasht Police Station, Bidganeh Industrial Zone,') }}
                        </p>
                        <p class="text-14">{{ __('Office Address: Rasalat Square, Navy St., Shahid Jajroodi Alley') }}
                        </p>
                        <p class="dir-ltr text-rtl-start text-14">
                            <a href="#">+98-9128449935</a><br>
                            <a href="#">+98-9912100881</a><br>
                            <a href="#">+98-9127687085</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- <script src="/assets/js/libs/bootstrap.min.js"></script> -->
    <!-- <script src="/assets/js/libs/swiper-bundle.min.js"></script> -->
    <script>
        document.getElementById("navbarShow").addEventListener("click", toggleNavbar);
        document.getElementById("navbarClose").addEventListener("click", toggleNavbar);

        function toggleNavbar() {
            document.querySelector('.navbar').classList.toggle('show');
        }
        document.getElementById("backToTop").addEventListener("click", () => {
            scroll(0, 0)
        })
    </script>
    @yield('customScripts')
</body>

</html>
