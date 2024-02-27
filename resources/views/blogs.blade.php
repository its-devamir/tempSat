@extends('layout')

@section('extraHeader')
    @foreach ($blogs as $blog)
        <div>
            <p>Name: {{ $blog->name }}</p>
            {{-- <p>Name: {{ $blog->name }} </p> --}}
        </div>
        <hr>
    @endforeach
@endsection

@section('contents')
    <section class="about-product mt-4">
        <div class="row gx-5">
            <div class="col-xxl-8 col-xl-7 col-lg-6">
                <div>
                    <div class="radius-25 overflow-hidden">
                        <img src="/assets/img/hero-image.jpg" alt="" class="w-100">
                    </div>
                    <h1 class="text-heavy mt-5">ریخته گری و فرآیند آن</h1>
                    <p>ه منظور شکل دادن فلزات و تهیه قطعات از آنها ابتدا فلز را ذوب کرده سپس در قالب، تزریق کرده و
                        پس از سفت
                        شدن
                        فلز در حین سرد شدن، قطعه از قالب خارج می شود. رایج ترین فلزات برای ریخته گری آلومینیوم و چدن
                        هستند.
                        فلزات دیگر مانند برنز، استیل، منگنز و روی نیز می توانند ریخته گری شوند...</p>
                </div>
                <div class="blog-statics d-flex justify-content-between align-items-center">
                    <div class=" d-flex">
                        <div class="ms-4">
                            <span>
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8 2V5" stroke="#686E86" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M16 2V5" stroke="#686E86" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M3.5 9.08984H20.5" stroke="#686E86" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M21 8.5V17C21 20 19.5 22 16 22H8C4.5 22 3 20 3 17V8.5C3 5.5 4.5 3.5 8 3.5H16C19.5 3.5 21 5.5 21 8.5Z"
                                        stroke="#686E86" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M15.6953 13.7002H15.7003" stroke="#686E86" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M15.6953 16.7002H15.7003" stroke="#686E86" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M11.996 13.7002H12.001" stroke="#686E86" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M11.996 16.7002H12.001" stroke="#686E86" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M8.29501 13.7002H8.30001" stroke="#686E86" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M8.29501 16.7002H8.30001" stroke="#686E86" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </span>
                            <span class="me-2">16 اسفند 1401</span>
                        </div>
                        <div class="ms-4">
                            <span><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M22 12C22 13.9778 21.4135 15.9112 20.3147 17.5557C19.2159 19.2002 17.6541 20.4819 15.8268 21.2388C13.9996 21.9957 11.9889 22.1937 10.0491 21.8079C8.10929 21.422 6.32746 20.4696 4.92894 19.0711C3.53041 17.6725 2.578 15.8907 2.19215 13.9509C1.8063 12.0111 2.00433 10.0004 2.76121 8.17317C3.51809 6.3459 4.79981 4.78412 6.4443 3.6853C8.08879 2.58649 10.0222 2 12 2C14.6522 2 17.1957 3.05357 19.0711 4.92893C20.9464 6.8043 22 9.34784 22 12Z"
                                        stroke="#686E86" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M15.71 15.1798L12.61 13.3298C12.3244 13.1387 12.0873 12.8839 11.9172 12.5853C11.7471 12.2868 11.6488 11.9528 11.63 11.6098V7.50977"
                                        stroke="#686E86" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </span>
                            <span>4 دقیقه</span>
                        </div>
                        <div class="ms-4">
                            <span>
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M3.5868 13.7788C5.36623 15.5478 8.46953 17.9999 12.0002 17.9999C15.5308 17.9999 18.6335 15.5478 20.413 13.7788C20.8823 13.3123 21.1177 13.0782 21.2671 12.6201C21.3738 12.2933 21.3738 11.7067 21.2671 11.3799C21.1177 10.9218 20.8823 10.6877 20.413 10.2211C18.6335 8.45208 15.5308 6 12.0002 6C8.46953 6 5.36623 8.45208 3.5868 10.2211C3.11714 10.688 2.88229 10.9216 2.7328 11.3799C2.62618 11.7067 2.62618 12.2933 2.7328 12.6201C2.88229 13.0784 3.11714 13.3119 3.5868 13.7788Z"
                                        stroke="#686E86" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M10 12C10 13.1046 10.8954 14 12 14C13.1046 14 14 13.1046 14 12C14 10.8954 13.1046 10 12 10C10.8954 10 10 10.8954 10 12Z"
                                        stroke="#686E86" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </span>
                            <span>1.341</span>
                        </div>
                    </div>
                    <div>
                        <div class="d-flex justify-content-ltr-end justify-self-start">
                            <button type="button" class="btn p-0 dir-rtl-ltr">
                                <svg class="rotate180-ltr" width="45" height="44" viewBox="0 0 45 44" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect x="40" width="5" height="44" rx="2.5" fill="#323232" />
                                    <path d="M4.99969 22H18.9997" stroke="#323232" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M9.99994 17L4.99994 22" stroke="#323232" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M9.99969 27L4.99969 22" stroke="#323232" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <span class="mx-4 text-bold opacity-75">مطالعه بیشتر</span>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-xl-5 col-lg-6 d-none d-lg-block">
                <div class="latest-blog-card mb-4 d-flex justify-content-between gap-3">
                    <div class="lbc-image">
                        <img src="/assets/img/blogs/blog1.png" alt="">
                    </div>
                    <div class="lbc-content">
                        <h5>تمیز کردن سطح (Surface Cleaning)</h5>
                        <p class="text-14 opacity-75 text-justify">پس از عملیات حرارتی، ماسه یا دیگر مواد قالب ممکن
                            است به قطعه چسبیده باشند. بدین منظور
                            قطعه توسط سندبلاست تمیز می شود...</p>
                        <div class="lbc-more d-flex justify-content-between align-items-center">
                            <span class="text-12 opacity-75">16 اسفند 1401</span>
                            <a href="#">
                                <svg class="rotate180-ltr" width="40" height="40" viewBox="0 0 40 40"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="40" height="40" rx="10" fill="#323232" />
                                    <path d="M11 20L18.5 27.5M11 20L18.5 12.5M11 20H29" stroke="white" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="latest-blog-card mb-4 d-flex justify-content-between gap-3">
                    <div class="lbc-image">
                        <img src="/assets/img/blogs/blog1.png" alt="">
                    </div>
                    <div class="lbc-content">
                        <h5>تمیز کردن سطح (Surface Cleaning)</h5>
                        <p class="text-14 opacity-75 text-justify">پس از عملیات حرارتی، ماسه یا دیگر مواد قالب ممکن
                            است به قطعه چسبیده باشند. بدین منظور
                            قطعه توسط سندبلاست تمیز می شود...</p>
                        <div class="lbc-more d-flex justify-content-between align-items-center">
                            <span class="text-12 opacity-75">16 اسفند 1401</span>
                            <a href="#">
                                <svg class="rotate180-ltr" width="40" height="40" viewBox="0 0 40 40"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="40" height="40" rx="10" fill="#323232" />
                                    <path d="M11 20L18.5 27.5M11 20L18.5 12.5M11 20H29" stroke="white" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="latest-blog-card mb-4 d-flex justify-content-between gap-3">
                    <div class="lbc-image">
                        <img src="/assets/img/blogs/blog1.png" alt="">
                    </div>
                    <div class="lbc-content">
                        <h5>تمیز کردن سطح (Surface Cleaning)</h5>
                        <p class="text-14 opacity-75 text-justify">پس از عملیات حرارتی، ماسه یا دیگر مواد قالب ممکن
                            است به قطعه چسبیده باشند. بدین منظور
                            قطعه توسط سندبلاست تمیز می شود...</p>
                        <div class="lbc-more d-flex justify-content-between align-items-center">
                            <span class="text-12 opacity-75">16 اسفند 1401</span>
                            <a href="#">
                                <svg class="rotate180-ltr" width="40" height="40" viewBox="0 0 40 40"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="40" height="40" rx="10" fill="#323232" />
                                    <path d="M11 20L18.5 27.5M11 20L18.5 12.5M11 20H29" stroke="white" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="d-flex">
            <div class="btn">All</div>
            <div class="btn">test1</div>
            <div class="btn">test2</div>
            <div class="btn">test3</div>
        </div>
        <div class="sample">
            <div class="mix test1" data-order="1">test1</div>
            <div class="mix test2" data-order="2">test2</div>
            <div class="mix test3" data-order="3">test2</div>
            <div class="mix test2" data-order="4">test3</div>
        </div>
    </section>

    <section class="my-5 d-lg-none">
        <h2 class="text-bold">جدیدترین مقالات</h2>
        <div class="swiper swiper-latest-blogs">
            <div class="swiper-wrapper align-items-center">
                <div class="swiper-slide">
                    <div class="d-flex flex-column align-items-center justify-content-between h-100">
                        <img src="/assets/img/products/product1.png" alt="">
                        <div class="content mt-2">
                            <div class="tag position-relative d-flex align-items-center"><span>آموزش ریخته
                                    گری</span></div>
                            <h5 class="mt-2">ریخته گری و فرآیند آن چگونه است؟</h5>
                            <div class="d-flex nt-2 justify-content-between align-items-between text-12">
                                <div>
                                    <span>
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 2V5" stroke="#686E86" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M16 2V5" stroke="#686E86" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M3.5 9.08984H20.5" stroke="#686E86" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path
                                                d="M21 8.5V17C21 20 19.5 22 16 22H8C4.5 22 3 20 3 17V8.5C3 5.5 4.5 3.5 8 3.5H16C19.5 3.5 21 5.5 21 8.5Z"
                                                stroke="#686E86" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M15.6953 13.7002H15.7003" stroke="#686E86" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M15.6953 16.7002H15.7003" stroke="#686E86" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M11.996 13.7002H12.001" stroke="#686E86" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M11.996 16.7002H12.001" stroke="#686E86" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M8.29504 13.7002H8.30004" stroke="#686E86" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M8.29504 16.7002H8.30004" stroke="#686E86" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                    <span class="ms-2">16 اسفند 1401</span>
                                </div>
                                <div>
                                    <span>
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M3.5868 13.7788C5.36623 15.5478 8.46953 17.9999 12.0002 17.9999C15.5308 17.9999 18.6335 15.5478 20.413 13.7788C20.8823 13.3123 21.1177 13.0782 21.2671 12.6201C21.3738 12.2933 21.3738 11.7067 21.2671 11.3799C21.1177 10.9218 20.8823 10.6877 20.413 10.2211C18.6335 8.45208 15.5308 6 12.0002 6C8.46953 6 5.36623 8.45208 3.5868 10.2211C3.11714 10.688 2.88229 10.9216 2.7328 11.3799C2.62618 11.7067 2.62618 12.2933 2.7328 12.6201C2.88229 13.0784 3.11714 13.3119 3.5868 13.7788Z"
                                                stroke="#686E86" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M10 12C10 13.1046 10.8954 14 12 14C13.1046 14 14 13.1046 14 12C14 10.8954 13.1046 10 12 10C10.8954 10 10 10.8954 10 12Z"
                                                stroke="#686E86" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                    <span>1.341</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="d-flex flex-column align-items-center justify-content-between h-100">
                        <img src="/assets/img/products/product2.png" alt="">
                        <div class="content mt-2">
                            <div class="tag position-relative d-flex align-items-center"><span>آموزش ریخته
                                    گری</span></div>
                            <h5 class="mt-2">ریخته گری و فرآیند آن چگونه است؟</h5>
                            <div class="d-flex nt-2 justify-content-between align-items-between text-12">
                                <div>
                                    <span>
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 2V5" stroke="#686E86" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M16 2V5" stroke="#686E86" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M3.5 9.08984H20.5" stroke="#686E86" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path
                                                d="M21 8.5V17C21 20 19.5 22 16 22H8C4.5 22 3 20 3 17V8.5C3 5.5 4.5 3.5 8 3.5H16C19.5 3.5 21 5.5 21 8.5Z"
                                                stroke="#686E86" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M15.6953 13.7002H15.7003" stroke="#686E86" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M15.6953 16.7002H15.7003" stroke="#686E86" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M11.996 13.7002H12.001" stroke="#686E86" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M11.996 16.7002H12.001" stroke="#686E86" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M8.29504 13.7002H8.30004" stroke="#686E86" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M8.29504 16.7002H8.30004" stroke="#686E86" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                    <span class="ms-2">16 اسفند 1401</span>
                                </div>
                                <div>
                                    <span>
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M3.5868 13.7788C5.36623 15.5478 8.46953 17.9999 12.0002 17.9999C15.5308 17.9999 18.6335 15.5478 20.413 13.7788C20.8823 13.3123 21.1177 13.0782 21.2671 12.6201C21.3738 12.2933 21.3738 11.7067 21.2671 11.3799C21.1177 10.9218 20.8823 10.6877 20.413 10.2211C18.6335 8.45208 15.5308 6 12.0002 6C8.46953 6 5.36623 8.45208 3.5868 10.2211C3.11714 10.688 2.88229 10.9216 2.7328 11.3799C2.62618 11.7067 2.62618 12.2933 2.7328 12.6201C2.88229 13.0784 3.11714 13.3119 3.5868 13.7788Z"
                                                stroke="#686E86" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M10 12C10 13.1046 10.8954 14 12 14C13.1046 14 14 13.1046 14 12C14 10.8954 13.1046 10 12 10C10.8954 10 10 10.8954 10 12Z"
                                                stroke="#686E86" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                    <span>1.341</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="d-flex flex-column align-items-center justify-content-between h-100">
                        <img src="/assets/img/products/product3.png" alt="">
                        <div class="content mt-2">
                            <div class="tag position-relative d-flex align-items-center"><span>آموزش ریخته
                                    گری</span></div>
                            <h5 class="mt-2">ریخته گری و فرآیند آن چگونه است؟</h5>
                            <div class="d-flex nt-2 justify-content-between align-items-between text-12">
                                <div>
                                    <span>
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 2V5" stroke="#686E86" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M16 2V5" stroke="#686E86" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M3.5 9.08984H20.5" stroke="#686E86" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path
                                                d="M21 8.5V17C21 20 19.5 22 16 22H8C4.5 22 3 20 3 17V8.5C3 5.5 4.5 3.5 8 3.5H16C19.5 3.5 21 5.5 21 8.5Z"
                                                stroke="#686E86" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M15.6953 13.7002H15.7003" stroke="#686E86" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M15.6953 16.7002H15.7003" stroke="#686E86" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M11.996 13.7002H12.001" stroke="#686E86" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M11.996 16.7002H12.001" stroke="#686E86" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M8.29504 13.7002H8.30004" stroke="#686E86" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M8.29504 16.7002H8.30004" stroke="#686E86" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                    <span class="ms-2">16 اسفند 1401</span>
                                </div>
                                <div>
                                    <span>
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M3.5868 13.7788C5.36623 15.5478 8.46953 17.9999 12.0002 17.9999C15.5308 17.9999 18.6335 15.5478 20.413 13.7788C20.8823 13.3123 21.1177 13.0782 21.2671 12.6201C21.3738 12.2933 21.3738 11.7067 21.2671 11.3799C21.1177 10.9218 20.8823 10.6877 20.413 10.2211C18.6335 8.45208 15.5308 6 12.0002 6C8.46953 6 5.36623 8.45208 3.5868 10.2211C3.11714 10.688 2.88229 10.9216 2.7328 11.3799C2.62618 11.7067 2.62618 12.2933 2.7328 12.6201C2.88229 13.0784 3.11714 13.3119 3.5868 13.7788Z"
                                                stroke="#686E86" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M10 12C10 13.1046 10.8954 14 12 14C13.1046 14 14 13.1046 14 12C14 10.8954 13.1046 10 12 10C10.8954 10 10 10.8954 10 12Z"
                                                stroke="#686E86" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                    <span>1.341</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="d-flex flex-column align-items-center justify-content-between h-100">
                        <img src="/assets/img/products/product1.png" alt="">
                        <div class="content mt-2">
                            <div class="tag position-relative d-flex align-items-center"><span>آموزش ریخته
                                    گری</span></div>
                            <h5 class="mt-2">ریخته گری و فرآیند آن چگونه است؟</h5>
                            <div class="d-flex nt-2 justify-content-between align-items-between text-12">
                                <div>
                                    <span>
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 2V5" stroke="#686E86" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M16 2V5" stroke="#686E86" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M3.5 9.08984H20.5" stroke="#686E86" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path
                                                d="M21 8.5V17C21 20 19.5 22 16 22H8C4.5 22 3 20 3 17V8.5C3 5.5 4.5 3.5 8 3.5H16C19.5 3.5 21 5.5 21 8.5Z"
                                                stroke="#686E86" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M15.6953 13.7002H15.7003" stroke="#686E86" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M15.6953 16.7002H15.7003" stroke="#686E86" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M11.996 13.7002H12.001" stroke="#686E86" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M11.996 16.7002H12.001" stroke="#686E86" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M8.29504 13.7002H8.30004" stroke="#686E86" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M8.29504 16.7002H8.30004" stroke="#686E86" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                    <span class="ms-2">16 اسفند 1401</span>
                                </div>
                                <div>
                                    <span>
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M3.5868 13.7788C5.36623 15.5478 8.46953 17.9999 12.0002 17.9999C15.5308 17.9999 18.6335 15.5478 20.413 13.7788C20.8823 13.3123 21.1177 13.0782 21.2671 12.6201C21.3738 12.2933 21.3738 11.7067 21.2671 11.3799C21.1177 10.9218 20.8823 10.6877 20.413 10.2211C18.6335 8.45208 15.5308 6 12.0002 6C8.46953 6 5.36623 8.45208 3.5868 10.2211C3.11714 10.688 2.88229 10.9216 2.7328 11.3799C2.62618 11.7067 2.62618 12.2933 2.7328 12.6201C2.88229 13.0784 3.11714 13.3119 3.5868 13.7788Z"
                                                stroke="#686E86" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M10 12C10 13.1046 10.8954 14 12 14C13.1046 14 14 13.1046 14 12C14 10.8954 13.1046 10 12 10C10.8954 10 10 10.8954 10 12Z"
                                                stroke="#686E86" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                    <span>1.341</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="d-flex flex-column align-items-center justify-content-between h-100">
                        <img src="/assets/img/products/product2.png" alt="">
                        <div class="content mt-2">
                            <div class="tag position-relative d-flex align-items-center"><span>آموزش ریخته
                                    گری</span></div>
                            <h5 class="mt-2">ریخته گری و فرآیند آن چگونه است؟</h5>
                            <div class="d-flex nt-2 justify-content-between align-items-between text-12">
                                <div>
                                    <span>
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 2V5" stroke="#686E86" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M16 2V5" stroke="#686E86" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M3.5 9.08984H20.5" stroke="#686E86" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path
                                                d="M21 8.5V17C21 20 19.5 22 16 22H8C4.5 22 3 20 3 17V8.5C3 5.5 4.5 3.5 8 3.5H16C19.5 3.5 21 5.5 21 8.5Z"
                                                stroke="#686E86" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M15.6953 13.7002H15.7003" stroke="#686E86" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M15.6953 16.7002H15.7003" stroke="#686E86" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M11.996 13.7002H12.001" stroke="#686E86" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M11.996 16.7002H12.001" stroke="#686E86" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M8.29504 13.7002H8.30004" stroke="#686E86" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M8.29504 16.7002H8.30004" stroke="#686E86" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                    <span class="ms-2">16 اسفند 1401</span>
                                </div>
                                <div>
                                    <span>
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M3.5868 13.7788C5.36623 15.5478 8.46953 17.9999 12.0002 17.9999C15.5308 17.9999 18.6335 15.5478 20.413 13.7788C20.8823 13.3123 21.1177 13.0782 21.2671 12.6201C21.3738 12.2933 21.3738 11.7067 21.2671 11.3799C21.1177 10.9218 20.8823 10.6877 20.413 10.2211C18.6335 8.45208 15.5308 6 12.0002 6C8.46953 6 5.36623 8.45208 3.5868 10.2211C3.11714 10.688 2.88229 10.9216 2.7328 11.3799C2.62618 11.7067 2.62618 12.2933 2.7328 12.6201C2.88229 13.0784 3.11714 13.3119 3.5868 13.7788Z"
                                                stroke="#686E86" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M10 12C10 13.1046 10.8954 14 12 14C13.1046 14 14 13.1046 14 12C14 10.8954 13.1046 10 12 10C10.8954 10 10 10.8954 10 12Z"
                                                stroke="#686E86" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                    <span>1.341</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="d-flex flex-column align-items-center justify-content-between h-100">
                        <img src="/assets/img/products/product3.png" alt="">
                        <div class="content mt-2">
                            <div class="tag position-relative d-flex align-items-center"><span>آموزش ریخته
                                    گری</span></div>
                            <h5 class="mt-2">ریخته گری و فرآیند آن چگونه است؟</h5>
                            <div class="d-flex nt-2 justify-content-between align-items-between text-12">
                                <div>
                                    <span>
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 2V5" stroke="#686E86" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M16 2V5" stroke="#686E86" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M3.5 9.08984H20.5" stroke="#686E86" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path
                                                d="M21 8.5V17C21 20 19.5 22 16 22H8C4.5 22 3 20 3 17V8.5C3 5.5 4.5 3.5 8 3.5H16C19.5 3.5 21 5.5 21 8.5Z"
                                                stroke="#686E86" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M15.6953 13.7002H15.7003" stroke="#686E86" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M15.6953 16.7002H15.7003" stroke="#686E86" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M11.996 13.7002H12.001" stroke="#686E86" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M11.996 16.7002H12.001" stroke="#686E86" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M8.29504 13.7002H8.30004" stroke="#686E86" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M8.29504 16.7002H8.30004" stroke="#686E86" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                    <span class="ms-2">16 اسفند 1401</span>
                                </div>
                                <div>
                                    <span>
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M3.5868 13.7788C5.36623 15.5478 8.46953 17.9999 12.0002 17.9999C15.5308 17.9999 18.6335 15.5478 20.413 13.7788C20.8823 13.3123 21.1177 13.0782 21.2671 12.6201C21.3738 12.2933 21.3738 11.7067 21.2671 11.3799C21.1177 10.9218 20.8823 10.6877 20.413 10.2211C18.6335 8.45208 15.5308 6 12.0002 6C8.46953 6 5.36623 8.45208 3.5868 10.2211C3.11714 10.688 2.88229 10.9216 2.7328 11.3799C2.62618 11.7067 2.62618 12.2933 2.7328 12.6201C2.88229 13.0784 3.11714 13.3119 3.5868 13.7788Z"
                                                stroke="#686E86" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M10 12C10 13.1046 10.8954 14 12 14C13.1046 14 14 13.1046 14 12C14 10.8954 13.1046 10 12 10C10.8954 10 10 10.8954 10 12Z"
                                                stroke="#686E86" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                    <span>1.341</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('customScripts')
@endsection
