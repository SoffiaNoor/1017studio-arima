<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Arima</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    {{--
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;700;800&display=swap" rel="stylesheet">
    --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
    <link href="{{asset('assets/css/styles.css')}}" rel="stylesheet" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        .btn:hover {
            color: #4a00e0 !important;
        }

        .navbar::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 20px;
            /* Adjust the height of the red padding */
            background-color: #ec1e22;
            /* Set the color of the padding */
            z-index: -1;
            /* Ensure the pseudo-element is behind the navbar content */
        }

        .flag-icon {
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background-image: url('https://upload.wikimedia.org/wikipedia/commons/thumb/9/9f/Flag_of_Indonesia.svg/1280px-Flag_of_Indonesia.svg.png');
            background-size: cover;
            background-position: center;
        }

        .flag-icon2 {
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background-image: url('https://upload.wikimedia.org/wikipedia/en/thumb/a/a4/Flag_of_the_United_States.svg/1280px-Flag_of_the_United_States.svg.png');
            background-size: cover;
            background-position: center;
        }
    </style>
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top pt-4 pb-3" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="/"><img src="{{env('APP_URL')}}{{$information->logo_favicon}}"
                    style="max-width:150px;width:140px;" /></a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto my-2 my-lg-0">
                    <li class="nav-item" style="place-content: center;"><a class="nav-link" href="#home">Home</a></li>
                    <li class="nav-item" style="place-content: center;"><a class="nav-link" href="#about">Service
                            Solution</a></li>
                    <li class="nav-item" style="place-content: center;"><a class="nav-link" href="#products">Method</a>
                    </li>
                    <li class="nav-item" style="place-content: center;"><a class="nav-link" href="#portfolio">Pest</a>
                    </li>
                    <li class="nav-item" style="place-content: center;"><a class="nav-link" href="#contact">Contact
                            Us</a></li>
                    <li class="nav-item" style="place-content: center;"><a class="nav-link" href="#news">News</a></li>
                    <li class="nav-item" style="place-content: center;">
                        <a class="nav-link" style="background-color: #676566;padding:3px!important">
                            <div class="flag-icon"></div>
                        </a>
                    </li>
                    <li class="nav-item" style="place-content: center;">
                        <a class="nav-link" style="background-color: #b6b6b6;padding:3px!important">
                            <div class="flag-icon2"></div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            @foreach($slider as $s)
            <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                <header class="masthead" id="home"
                    style="background: linear-gradient(to bottom, rgba(26, 26, 26, 0.1) 0%, rgba(33, 33, 33, 0.1) 100%), url('{{env('APP_URL')}}{{$s->image}}'); background-size: cover">
                    <div class="container px-4 px-lg-5 h-100">
                    </div>
                </header>
            </div>
            @endforeach
        </div>
    </div>

    {{-- Contact Us --}}
    <div style="background-color:#111111;height:100px;align-content: center;">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 py-auto">
                    <div class="m-auto p-auto text-center"
                        style="background:white;width:260px;height:50px;border-radius:40px;align-content: center;">
                        <a class="fw-bold">{{$information->phone}}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Service Solution Area --}}
    <div class="h-auto py-5" style="background-color:#ec1e22;align-content: center;">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="row py-auto">
                        <div class="col-md-3 py-auto" style="text-align: -webkit-center;">
                            <div class="card"
                                style="width: auto;max-width:18rem;border: none;border-radius: 0;background:#e6e6e6">
                                <img class="card-img-top"
                                    style="border-top-left-radius:0%!important;border-top-right-radius:0%!important"
                                    src="{{env('APP_URL')}}{{$commercial->background}}" alt="Card image cap">
                                <div class="card-body" style="padding:2px!important">
                                    <h5 class="card-title text-center fw-bold">COMMERCIAL</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3" style="text-align: -webkit-center;">
                            <div class="card"
                                style="width: auto;max-width:18rem;border: none;border-radius: 0;background:#e6e6e6">
                                <img class="card-img-top"
                                    style="border-top-left-radius:0%!important;border-top-right-radius:0%!important"
                                    src="{{env('APP_URL')}}{{$residential->background}}" alt="Card image cap">
                                <div class="card-body" style="padding:2px!important">
                                    <h5 class="card-title text-center fw-bold">RESIDENTIAL</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3" style="text-align: -webkit-center;">
                            <div class="card"
                                style="width: auto;max-width:18rem;border: none;border-radius: 0;background:#e6e6e6">
                                <img class="card-img-top"
                                    style="border-top-left-radius:0%!important;border-top-right-radius:0%!important"
                                    src="{{env('APP_URL')}}{{$factory->background}}" alt="Card image cap">
                                <div class="card-body" style="padding:2px!important">
                                    <h5 class="card-title text-center fw-bold">FACTORY</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3" style="text-align: -webkit-center;">
                            <div class="card"
                                style="width: auto;max-width:18rem;border: none;border-radius: 0;background:#e6e6e6">
                                <img class="card-img-top"
                                    style="border-top-left-radius:0%!important;border-top-right-radius:0%!important"
                                    src="{{env('APP_URL')}}{{$disinfection->background}}" alt="Card image cap">
                                <div class="card-body" style="padding:2px!important">
                                    <h5 class="card-title text-center fw-bold">DISINFECTION</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="h-auto py-5" style="background-color:#e6e6e6;align-content: center;">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <img src="assets/img/why choose us.png" style="width:100%" />
                </div>
            </div>
        </div>
    </div>

    <div class="h-auto py-5" style="background-color:#ffffff;align-content: center;">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="fw-bold">About Us</h3>
                    <p style="text-align: justify">{{$information->description}}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="h-auto py-5" style="background-color:#e6e6e6;align-content: center;">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="text-center fw-bold">Sebaran Wilayah</h3>
                    <hr class="text-center mx-auto mt-0 pt-0 pb-4 mb-4" style="color: red;
                    border-width: 3px;
                    opacity: 100%;
                    width: 10%;">
                    <img src="assets/img/sebaran.png" style="width:100%" />
                </div>
            </div>
        </div>
    </div>

    <div class="h-auto py-5" style="background-color:#ffffff;align-content: center;">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="text-center fw-bold">Pest Management Quality</h3>
                    <hr class="text-center mx-auto mt-0 pt-0 pb-4 mb-4" style="color: red;
                    border-width: 3px;
                    opacity: 100%;
                    width: 10%;">
                    <div class="row">
                        <div class="col-sm-4" style="text-align: -webkit-center;">
                            <div class="card" style="width: auto;max-width:25rem;border: none;border-radius: 0;">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold text-white py-2 px-4"
                                        style="background:#ec1e22;border-top-left-radius:20px!important;border-top-right-radius:20px!important;margin-bottom:-2px">
                                        Chemical</h5>
                                    <div style="background:#e6e6e6">
                                        <p class="card-text py-2 px-4">Kami menerapkan bahan
                                            kimia dalam jumlah yang cukup pada sasaran hama atau sumber perkembangbiakan
                                            hama. Semua bahan kimia yang kami gunakan mematuhi program HACCP dan
                                            disediakan
                                            MSDS</p>
                                        <div class="py-2">
                                            <img class="p-4" src="assets/img/BASF-Logo_bw.svg.png" style="width:70%" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4" style="text-align: -webkit-center;">
                            <div class="card" style="width: auto;max-width:25rem;border: none;border-radius: 0;">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold text-white py-2 px-4"
                                        style="background:#ec1e22;border-top-left-radius:20px!important;border-top-right-radius:20px!important;margin-bottom:-2px">
                                        Chemical</h5>
                                    <div style="background:#e6e6e6">
                                        <p class="card-text py-2 px-4">Kami menerapkan bahan
                                            kimia dalam jumlah yang cukup pada sasaran hama atau sumber perkembangbiakan
                                            hama. Semua bahan kimia yang kami gunakan mematuhi program HACCP dan
                                            disediakan
                                            MSDS</p>
                                        <div class="py-2">
                                            <img class="p-4" src="assets/img/Sumitomo_Chemical.svg.png"
                                                style="width:70%" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4" style="text-align: -webkit-center;">
                            <div class="card" style="width: auto;max-width:25rem;border: none;border-radius: 0;">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold text-white py-2 px-4"
                                        style="background:#ec1e22;border-top-left-radius:20px!important;border-top-right-radius:20px!important;margin-bottom:-2px">
                                        Chemical</h5>
                                    <div style="background:#e6e6e6">
                                        <p class="card-text py-2 px-4">Kami menerapkan bahan
                                            kimia dalam jumlah yang cukup pada sasaran hama atau sumber perkembangbiakan
                                            hama. Semua bahan kimia yang kami gunakan mematuhi program HACCP dan
                                            disediakan
                                            MSDS</p>
                                        <div class="py-2">
                                            <img class="p-4" src="assets/img/Syngenta_Logo.svg.png" style="width:70%" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="h-auto py-5" style="background-color:#ffffff;align-content: center;">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="text-center fw-bold">Latest Post</h3>
                    <hr class="text-center mx-auto mt-0 pt-0 pb-4 mb-4" style="color: red;
                    border-width: 3px;
                    opacity: 100%;
                    width: 10%;">
                    <div class="row">
                        <div class="col-sm-4" style="text-align: -webkit-center;">
                            <div class="card"
                                style="width: auto;max-width:25rem;border: none;border-radius: 0;background:#e6e6e6">
                                <img class="card-img-top"
                                    style="border-top-left-radius:0%!important;border-top-right-radius:0%!important;height:100%"
                                    src="assets/img/tekos.png" alt="Card image cap">
                            </div>
                        </div>
                        <div class="col-sm-4" style="text-align: -webkit-center;">
                            <div class="card"
                                style="width: auto;max-width:25rem;border: none;border-radius: 0;background:#e6e6e6">
                                <img class="card-img-top"
                                    style="border-top-left-radius:0%!important;border-top-right-radius:0%!important;height:100%"
                                    src="assets/img/coak.png" alt="Card image cap">
                            </div>
                        </div>
                        <div class="col-sm-4" style="text-align: -webkit-center;">
                            <div class="card"
                                style="width: auto;max-width:25rem;border: none;border-radius: 0;background:#e6e6e6">
                                <img class="card-img-top"
                                    style="border-top-left-radius:0%!important;border-top-right-radius:0%!important;height:100%"
                                    src="assets/img/semut.png" alt="Card image cap">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer style="background:#1a1a1a">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-sm-5">
                            <img src="assets/img/logo arima putih.png" class="p-5" style="width:60%" />
                        </div>
                        <div class="col-sm-7">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="text-white fw-bold py-5 px-2">
                                        <p>Jl. Raya Wiyung Indah No. 7 Surabaya 60228</p>
                                        <p>Telp. : +62 31 766 1422</p>
                                        <p>info@greenpestcontrol.co.id<br>www.greenpestcontrol.co.id</p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <img src="assets/img/logo ISO.png" style="width:100%" class="py-5 px-2" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
    <script src="{{asset('assets/js/scripts.js')}}"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();

var toTopButton = document.getElementById("to-top-button");

window.onscroll = function () {
    if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
        toTopButton.classList.remove("d-none");
    } else {
        toTopButton.classList.add("d-none");
    }
}

function goToTop() {
    window.scrollTo({ top: 0, behavior: 'smooth' });
}

document.addEventListener("DOMContentLoaded", function () {
    var myCarousel = document.querySelector('#carouselExampleSlidesOnly')
    var carousel = new bootstrap.Carousel(myCarousel, {
        interval: 3000, // Adjust the interval as needed (in milliseconds)
        wrap: true
    })
});

document.addEventListener('DOMContentLoaded', function () {
    const portfolioItems = document.querySelectorAll('.portfolio-item');
    const loadMoreBtn = document.getElementById('loadMoreBtn');
    let visibleItems = 6;
    let totalDisplayedItems = 0;

    // Initially hide all items beyond visibleItems
    portfolioItems.forEach((item, index) => {
        if (index >= visibleItems) {
            item.style.display = 'none';
        } else {
            totalDisplayedItems++;
        }
    });
         // Initially hide the Load More button if there are 6 or fewer portfolio items
         if (portfolioItems.length <= 6) {
            loadMoreBtn.style.display = 'none';
        }

    loadMoreBtn.addEventListener('click', function () {
        let newlyDisplayedItems = 0;

        // Show next batch of items or remaining items if less than a full batch
        for (let i = totalDisplayedItems; i < portfolioItems.length && newlyDisplayedItems < 6; i++) {
            portfolioItems[i].style.display = 'block';
            totalDisplayedItems++;
            newlyDisplayedItems++;
        }

        // Hide Load More button if all items are displayed
        if (totalDisplayedItems >= portfolioItems.length) {
            loadMoreBtn.style.display = 'none';
        }
    });
});

document.addEventListener('DOMContentLoaded', function () {
    const checkbox = document.getElementById('flexCheckChecked');
    const submitButton = document.getElementById('submitButton');

    checkbox.addEventListener('change', function () {
        if (checkbox.checked) {
            submitButton.disabled = false;
        } else {
            submitButton.disabled = true;
        }
    });
});
    </script>
</body>

</html>