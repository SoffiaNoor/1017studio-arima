<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Arima</title>
    <link rel="icon" type="image/x-icon" href="{{env('APP_URL')}}{{$information->logo_favicon}}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <!--Font Awesome / Icon -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        type='text/css'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
    <link href="{{asset('assets/css/styles.css')}}" rel="stylesheet" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .btn:hover {
            color: #ffffff !important;
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

        .dropdown-menu {
            display: block;
            opacity: 0;
            padding: 0;
            max-height: 0;
            overflow: hidden;
            transition: all .3s ease-in;
            left: 50%;
            text-align: center;
            background: #ec1e22;
            border: none;
            border-radius: 0%;
        }

        .dropdown-menu.show {
            max-height: 500px;
            opacity: 1;
            padding: 0.5rem 0;
        }

        .overlayer {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.9);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
        }

        .loader {
            text-align: center;
            display: block;
        }

        .logoloader {
            width: 100px;
            animation: bounce 2s infinite;
        }

        @keyframes bounce {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-20px);
            }
        }

        #content {
            display: none;
        }

        #btn-back-to-top {
            display: none;
            position: fixed;
            bottom: 20px;
            left: 20px;
            z-index: 9999;
        }
    </style>
</head>

<body id="page-top">
    <div id="overlayer" class="overlayer">
        <div class="loader" id="loader">
            <img src="{{env('APP_URL')}}{{$information->logo_header}}" alt="Logo" class="logoloader">
        </div>
    </div>

    <button type="button" class="btn btn-floating btn-lg rounded-5"
        style="background-color:red;color:white;width: 50px;height: 50px;" id="btn-back-to-top">
        <i class="fas fa-arrow-up"></i>
    </button>

    <nav class="navbar navbar-expand-lg navbar-light fixed-top pt-4 pb-3" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="/eng"><img src="{{env('APP_URL')}}{{$information->logo_company}}"
                    style="max-width:150px;width:140px;" /></a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse"
                style="border: none" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive"
                aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto my-2 my-lg-0">
                    <li class="nav-item" style="place-content: center;"><a class="nav-link" href="/eng">Home</a></li>
                    <li class="nav-item dropdown" style="place-content: center;">
                        <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            Service Solution
                        </a>
                        <div class="dropdown-menu text-white fw-bold" aria-labelledby="navbarDropdown" style="">
                            <a class="dropdown-item" href="/commercial_eng">Commercial Protection</a>
                            <a class="dropdown-item" href="/residential_eng">Residential Protection</a>
                            <a class="dropdown-item" href="/industrial_eng">Industrial Protection</a>
                            <a class="dropdown-item" href="/disinfection_eng">Disinfection Protection</a>
                            <a class="dropdown-item" href="/cleaning_eng">Cleaning Service</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown" style="place-content: center;">
                        <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            Method
                        </a>
                        <div class="dropdown-menu text-white fw-bold" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/generalpest_eng">General Pest</a>
                            <a class="dropdown-item" href="/termitebaiting_eng">Termite Baiting</a>
                            <a class="dropdown-item" href="/fumigation_eng">Fumigation</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown" style="place-content: center;">
                        <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            Pest
                        </a>
                        <div class="dropdown-menu dropdown-menu-end animate slideIn text-white fw-bold"
                            aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/pest_eng">Bugs</a>
                            <a class="dropdown-item" href="/otherpest_eng">Other</a>
                        </div>
                    </li>
                    <li class="nav-item" style="place-content: center;"><a class="nav-link" href="/contact_us">Contact
                            Us</a></li>
                    <li class="nav-item" style="place-content: center;"><a class="nav-link" href="/news">News</a></li>
                    <li class="nav-item" style="place-content: center;">
                        <a href="/" class="nav-link" style="background-color: #676566;padding:3px!important">
                            <div class="flag-icon"></div>
                        </a>
                    </li>
                    <li class="nav-item" style="place-content: center;">
                        <a href="/eng" class="nav-link" style="background-color: #b6b6b6;padding:3px!important">
                            <div class="flag-icon2"></div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="position-fixed bottom-0 end-0 mb-3 me-3" style="z-index: 999">
        <a title="Chat Whatsapp" href="{{$information->link_wa}}" target="_blank"
            class="d-inline-block rounded-full transition-all transform hover:scale-110 hover:rotate-12">
            <img class="object-cover object-center" style="width:100px;height:100px"
                src="{{ asset('assets/img/whatsapp.png') }}" alt="Saya mau pesan">
        </a>
    </div>

    @yield('content')

    <footer style="background:#1a1a1a">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-sm-3">
                            <img src="{{env('APP_URL')}}{{$information->logo_header}}" class="p-5" style="width:100%" />
                        </div>
                        <div class="col-sm-9">
                            <div class="row">
                                <div class="col-sm-8 px-3 py-4">
                                    <div class="text-white fw-bold" style="font-size:12pt">
                                        <table>
                                            <tr>
                                                <td style="vertical-align: top;">
                                                    <img src="{{asset('assets/img/loct.png')}}"
                                                        style="width: 30px; margin-right: 10px;" />
                                                </td>
                                                <td style="padding-left: 10px;">
                                                    <p>{{$information->address}}</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: top;">
                                                    <img src="{{asset('assets/img/telp.png')}}"
                                                        style="width: 30px; margin-right: 10px;" />
                                                </td>
                                                <td style="padding-left: 10px;">
                                                    <table>
                                                        <tr>
                                                            <td style="align-content: baseline;">
                                                                <p>Telp. :</p>
                                                            </td>
                                                            <td>
                                                                <p>{{$information->phone_1}}</p>
                                                                <p>{{$information->phone_2}}</p>
                                                                <p>{{$information->phone_sms}} (SMS Only)</p>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: top;">
                                                    <img src="{{asset('assets/img/email.png')}}"
                                                        style="width: 30px; margin-right: 10px;" />
                                                </td>
                                                <td style="padding-left: 10px;">
                                                    <p>{{$information->email}}<br>{{$information->website_link}}</p>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <img src="{{asset('assets/img/logo ISO.png')}}" style="width:100%"
                                        class="py-5 px-2" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    @yield('jquery')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
    <script src="{{asset('assets/js/scripts.js')}}"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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

    <script>
        let mybutton = document.getElementById("btn-back-to-top");

    window.onscroll = function() {
        scrollFunction();
    };

    function scrollFunction() {
        if (
            document.body.scrollTop > 20 ||
            document.documentElement.scrollTop > 20
        ) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }

    mybutton.addEventListener("click", backToTop);

    function backToTop() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }

    setTimeout(function() {
        document.getElementById('overlayer').style.display = 'none';
        document.getElementById('content').style.display = 'block';
        mybutton.style.display = "block"; // Show the back to top button when content is loaded
    }, 3000);
    </script>
</body>

</html>