<?php include_once '../Site/https/Functions.php';?>
<html lang="en" data-bs-theme="light">
<head>
    <script src="https://getbootstrap.com/docs/5.3/assets/js/color-modes.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.122.0">
    <title>The White House</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/offcanvas-navbar/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link href="https://getbootstrap.com/docs/5.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .card {
            border: none;
        }
    </style>
</head>

<body>

    <div class="container">
        <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
            <symbol id="check2" viewBox="0 0 16 16">
                <path
                    d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z">
                </path>
            </symbol>
            <symbol id="circle-half" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"></path>
            </symbol>
            <symbol id="moon-stars-fill" viewBox="0 0 16 16">
                <path
                    d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z">
                </path>
                <path
                    d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z">
                </path>
            </symbol>
            <symbol id="sun-fill" viewBox="0 0 16 16">
                <path
                    d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z">
                </path>
            </symbol>
        </svg>

        <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle" style="z-index:999">
            <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center" id="bd-theme"
                type="button" aria-expanded="false" data-bs-toggle="dropdown" aria-label="Toggle theme (light)">
                <svg class="bi my-1 theme-icon-active" width="1em" height="1em">
                    <use href="#sun-fill"></use>
                </svg>
                <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
            </button>
            <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
                <li>
                    <button type="button" class="dropdown-item d-flex align-items-center active"
                        data-bs-theme-value="light" aria-pressed="true">
                        <svg class="bi me-2 opacity-50" width="1em" height="1em">
                            <use href="#sun-fill"></use>
                        </svg>
                        Light
                        <svg class="bi ms-auto d-none" width="1em" height="1em">
                            <use href="#check2"></use>
                        </svg>
                    </button>
                </li>
                <li>
                    <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark"
                        aria-pressed="false">
                        <svg class="bi me-2 opacity-50" width="1em" height="1em">
                            <use href="#moon-stars-fill"></use>
                        </svg>
                        Dark
                        <svg class="bi ms-auto d-none" width="1em" height="1em">
                            <use href="#check2"></use>
                        </svg>
                    </button>
                </li>
                <li>
                    <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="auto"
                        aria-pressed="false">
                        <svg class="bi me-2 opacity-50" width="1em" height="1em">
                            <use href="#circle-half"></use>
                        </svg>
                        Auto
                        <svg class="bi ms-auto d-none" width="1em" height="1em">
                            <use href="#check2"></use>
                        </svg>
                    </button>
                </li>
            </ul>
        </div>

        <div class="container">
            <div class="row">
                <a class="col-12" href="index.php">
                    <div class="card h-100 border border-0">
                    <img src="../CATAssets/images/logo.png" style="min-width: 350px; width: 60%; margin: auto;">
                    </div>
                </a>
            </div>
        </div>

        <div class="row">
            <nav class="navbar bg-body-tertiary">
                <form action="../Site/index.php" method="post" class="container-fluid justify-content-center">
                    <a href="../Site/index.php" class="btn btn-sm btn-primary m-2">Home</a>
                    <a href="index.php" class="btn btn-sm btn-primary m-2">The White House</a>
                    <a href="../CommunityGardening/index.php" class="btn btn-sm btn-primary m-2">Community Gardening</a>
                    <a href="../GreenhousePantry/index.php" class="btn btn-sm btn-primary m-2" >Greenhouse Pantry</a>
                    <a href="../Site/AboutUs.html" class="btn btn-sm btn-primary m-2" >About Us</a>
                    <a href="../Site/index.php?nav=CATBlog" class="btn btn-sm btn-primary m-2" >Blog</a>
                    <button class="btn btn-sm btn-primary m-2" name="nav" value="MailingList">Mailing List</button>
                    <button class="btn btn-sm btn-primary m-2" name="nav" value="CATEvents">Events</button>
                    <button class="btn btn-sm btn-primary m-2" name="nav" value="ContactUs">Contact Us</button>
                    <a href="../NewsletterApp/index.php" class="btn btn-sm btn-primary m-2">Newsletter</a>    
                </form>
            </nav>
        </div>

        <!-- Slides -->
        <div class="container">
            <div id="carouselExampleDark" class="carousel carousel-dark slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">

                    <div class="carousel-item active" data-bs-interval="10000">
                        <div class="card" style="width: 60%; margin: auto;">
                            <img src="../CATAssets/images/WhiteHouseKitchenLogo.png" style="width: 55%; margin: auto;" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-center">The White House Kitchen</h5>
                                <p class="card-text text-center">The White House Kitchen is a unique Café in Craigmillar, Edinburgh
                                    that serves up a
                                    wholesome range of buttered Hot and Cold Rolls, plus fluffy American Pancakes and
                                    deliciously frothy Coffees, ideal for early morning feasting.
                                </p>
                                <p class="card-text text-center">There is also an indulgent array of All Day Brunch options with
                                    tasty vegetarian
                                    versions. Simply place your order online and let us handle the rest.
                                </p>
                                <a href="https://thewhitehousekitchen.co.uk/breakfast" class="btn btn-primary mb-5">View Our Breakfast Menu</a>
                                <a href="https://thewhitehousekitchen.co.uk/drinks-1" class="btn btn-primary mb-5">View Our Drinks Menu</a>
                                <a href="https://thewhitehousekitchen.co.uk/order-online" class="btn btn-primary mb-5">Order Online</a>
                            </div>
                        </div>
                    </div>


                    <div class="carousel-item" data-bs-interval="2000">
                        <div class="card" style="width: 60%; margin: auto;">
                            <img src="../CATAssets/images/WhiteHouseKitchenOffers.png" style="width: 55%; margin: auto;" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-center">White House Kitchen Offers</h5>
                                <p class="card-text text-center">
                                    Discover the White House Kitchen in Craigmillar, Edinburgh, where special offers on delicious food await you. Enjoy a variety of expertly crafted dishes at unbeatable prices, ensuring a delightful dining experience for everyone. Don't miss out on these fantastic culinary deals!
                                </p>
                                <a href="https://thewhitehousekitchen.co.uk/offers" class="btn btn-primary mb-5">Kitchen Offers</a>
                            </div>                    
                        </div>
                    </div>




                    <div class="carousel-item">
                        <div class="card" style="width: 60%; margin: auto;">
                            <img src="../CATAssets/images/WhiteHouseLiveMusic.png" style="width: 55%; margin: auto;"class="card-img-top" alt="...">
                       
                            <div class="card-body">
                            <h5 class="card-title text-center">White House Live Music - John Connor</h5>
                                <p class="card-text">Experience an unforgettable evening at The White House as you listen to live music with the talented guitar vocalist John Connor. Immerse yourself in the soulful sounds of blues, the energetic rhythms of rock, the heartfelt melodies of country, and much more. Join us for a night of exceptional music and captivating performances that will leave you wanting more.</p>
                                <a href="https://thewhitehousekitchen.co.uk/john-connor" class="btn btn-primary mb-5">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                    data-bs-slide="prev">
                    <span class="btn btn-primary">Previous</span>

                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                    data-bs-slide="next">
                    <span class="btn btn-primary">Next</span>
                </button>
            </div>
        </div>

        <!-- //Main Image & Notice Board  -->
        <div class="container mb-5">
            <div class="row">
                <div class="row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <h5 class="card-title text-center">Welcome to the White House</h5>
                        <div class="card text-center">
                            <div class="card-body">
                                <img src="../CATAssets/images/OldWhiteHouse.jpg" style="width: 80%;" class="card-img-top"
                                    alt="The White House old image">
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="col-sm-12 just">
                            <img src="../CATAssets/images/WhiteHouseNoticeBoard.png"
                                style="width: 50%; margin-left: 25%;">

                            <div class=" card">
                                <div class="card mx-5 pt-3">
                                    <div class="card-body">
                                        <?php WhiteHouseNoticeBoardGrab(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mb-5">
            <div class="row mb-5">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <div class="card">
                        <h3 class="card-title">The White House Re-opened</h3>
                        <div class="row">
                            <img src="../CATAssets/images/WhiteHouseTakeOver.png" style="width: 45%; float: left;"
                                alt="...">
                            <img src="../CATAssets/images/WhiteHouseTakeOver2.png" style="width: 45%; float: left;"
                                alt="...">
                        </div>
                        <div class="card-body">

                            <p class="card-text">The White House was officially re-opened by Alex Neil MSP on Wednesday the 18th of September 2013. Since then we have offered healthy food options through the White House Kitchen and space is also available for a variety of functions and event catering.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card text-center">
                        <div class="card-body">
                            <h3 class="card-title">Green-Fingered Volunteers</h3>
                            <img src="../CATAssets/images/Veg.png" style="width: 50%;" alt="...">
                            <p class="card-text">In early 2014 a joint landscaping project between Castlebrae Community
                                High School and Holy Rood RC High School saw raised planters being constructed in the
                                car park at the rear of the building. We are currently looking for a few green-fingered
                                volunteers who would be interested in helping to grow fresh herbs and vegetables that
                                can be used in our community food project. All volunteers will be given guidance CAT's
                                garden team and can take some of the produce home.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mb-5">
            <div class="row">
                <div class="col-sm-6 text-center">
                    <h4 class="card-title">Volunteers</h4>
                    <p>Since its inception, the work of the Community Alliance Trust has depended on the time and effort local volunteers.  Their enthusiastic endeavours have been greatly appreciated, whether digging and planting in the community gardens of simple offering someone a warm welcome in the Green House Pantry, CAT wouldn’t be the same without their commitment.  If you want to give a helping hand we want to hear from you, contact us on </p>
                    <p><b>0131 652 6320</b></p>
                    <p>Just remember your safety is paramount to us, all volunteers will be given guidance by CAT's garden or pantry teams.  If you are in the gardens, you are more that welcome to take some of your hard labours home with our thanks.</p>
                    </div>

                    <div class="col-sm-6 text-center">
                    <h4 class="card-title">Get in Touch</h4>
                    <p>If you would like to inquire about any CAT projects running from or in the Whitehouse or are interested in using our services then please feel free to contact us to discuss your requirements further.</p>
                    <form class="requires-validation" action="../Site/index.php" method="post">
                        <h5 class="card-title">White House Contact Form</h5>
                        <div class=" col-md-12 mb-2">
                            <input class="form-control" type="text" name="ContactPublicName" placeholder="Full Name" required>
                        </div>
                        <div class="col-md-12 mb-2">
                            <input class="form-control" type="email" name="ContactPublicEmail" placeholder="E-mail Address" required>
                        </div>
                        <div class="col-md-12 mb-2">
                            <textarea style="width: 90%;" class="rounded-4 p-2" name="PublicContactComment"
                                placeholder="Please give a short discription of your query"
                                style="height:10rem"></textarea>
                        </div>
                        <div class="form-button mt-3">
                            
                            <input type="hidden" name="nav" value="WhiteHouseEmail" />
                            <button id="submit" type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
                <div class="col-sm-12 text-center">
                    <img src="../CATAssets/images/WhiteHouseKitchenLogo.png" style="width: 50%;" alt="...">
                    <h4 class="card-title">Contact The White House Kitchen </h4>
                    <p>.</p>
                    <a href="https://thewhitehousekitchen.co.uk/contact-us" class="btn btn-primary">Get in
                        Touch</a>
                </div>
            </div>
        </div>

    </div>

    <script src="https://getbootstrap.com/docs/5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>