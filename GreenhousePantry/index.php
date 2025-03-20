<?php ini_set('default_charset', 'UTF-8');
header('Content-Type: text/html; charset=utf-8');
include '../Site/https/Functions.php'; GreenHousePage();?>
<html lang="en" data-bs-theme="light">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.122.0">
    <title>Greenhouse Pantry</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/offcanvas-navbar/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link href="https://getbootstrap.com/docs/5.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="carousel.css" rel="stylesheet">
</head>

<body>
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

    <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
        <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center" id="bd-theme" type="button"
            aria-expanded="false" data-bs-toggle="dropdown" aria-label="Toggle theme (light)">
            <svg class="bi my-1 theme-icon-active" width="1em" height="1em">
                <use href="#sun-fill"></use>
            </svg>
            <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
        </button>
        <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
            <li>
                <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="light"
                    aria-pressed="true">
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
                <div class="card border border-0">
                    <img src="../CATAssets/images/logo.png" style="min-width: 300px; width: 50%; margin: auto;">
                </div>
            </a>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <nav class="navbar bg-body-tertiary">
                <form action="../Site/index.php" method="post" class="container-fluid justify-content-center">
                    <a href="../Site/index.php" class="btn btn-sm btn-primary m-2">Home</a>
                    <a href="../WhiteHouse/index.php" class="btn btn-sm btn-primary m-2">The White House</a>
                    <a href="../CommunityGardening/index.php" class="btn btn-sm btn-primary m-2">Community Gardening</a>
                    <a href="index.php" class="btn btn-sm btn-primary m-2">Greenhouse Pantry</a>
                    <a href="../Site/AboutUs.html" class="btn btn-sm btn-primary m-2">About Us</a>
                    <button class="btn btn-sm btn-primary m-2" name="nav" value="MailingList">Mailing List</button>
                    <button class="btn btn-sm btn-primary m-2" name="nav" value="CATEvents">Events</button>
                    <button class="btn btn-sm btn-primary m-2" name="nav" value="ContactUs">Contact Us</button>
                    <a href="ComingSoon.html" class="btn btn-sm btn-primary m-2">Newsletter</a>
                </form>
            </nav>
        </div>

        <img src="<?php echo $_SESSION['GreenHouse_Img1']; ?>" style="width: 100%;">

       <div class="container">
    <div class="row mt-5">
        
        <div class="col-md-4">
            <div class="thumbnail">
                <img src="<?php echo $_SESSION['GreenHouse_Img3']; ?>" class="img-responsive" style="height: 150px; width: 100%;" alt="Image 3">
                <div class="caption">
                    <p style="background-color: red;"></p>
                    <p class="text-dark"><?php echo $_SESSION['GreenHouse_Par3']; ?></p>
                </div>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="thumbnail">
                <img src="assets/images/pdf-1.png" class="img-responsive" style="height: 250px; width: 100%;" alt="Craigmillar's Community Cookbook">
                <div class="card-body">
                    <h5 class="card-title">Craigmillar's Community Cookbook</h5>
                    <p class="card-text">
                        I am delighted to share with you the Craigmillar's Community Cookbook, a collection of recipes from our vibrant community.
                    </p>
                    <a href="assets/pdfs/CraigmillarCommunityCookbook.pdf" class="btn btn-primary" download>Download Cookbook</a>
                </div>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="thumbnail">
                <img src="<?php echo $_SESSION['GreenHouse_Img2']; ?>" class="img-responsive" style="height: 150px; width: 100%;" alt="Image 2">
                <div class="caption">
                    <p class="text-dark"><?php echo $_SESSION['GreenHouse_Par2']; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>


        <div class="container marketing mt-5">
            <div class="row">
                <div class="col-lg-6 text-center">
                    <img src="assets/images/RoundLogo1.png" style="width: 30%;">
                    <h2 class="fw-normal"><?php echo $_SESSION["GreenHouse_Title1"]; ?></h2>
                    <p class="mt-5">
                    <?php echo $_SESSION["GreenHouse_Par4"]; ?>
                    <?php echo $_SESSION["GreenHouse_Par5"]; ?>
                    </p>
                    <p class="mt-5">
                    <?php echo $_SESSION["GreenHouse_Par6"]; ?>
                    </p>
                    <p><a class="btn btn-primary" href="../Site/ComingSoon.html">View details</a></p>
                </div>

                <div class="col-lg-6 text-center">
                    <img src="assets/images/FoodDon.png" style="width: 30%;">
                    <h2 class="fw-normal"><?php echo $_SESSION["GreenHouse_Title2"]; ?></h2>
                    <p class="mt-5"><?php echo $_SESSION["GreenHouse_Par7"]; ?></p>
                    <p class="mt-5"><?php echo $_SESSION["GreenHouse_Par8"]; ?></p>
                    <p></p>
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="container">
                <div class="row text-center">
                    <div class="col-12 col-md-6 mb-4">
                        <div class="card h-100">
                            <img src="assets/images/CatDog.gif" class="card-img-top img-fluid" alt="Cat and Dog">
                            <div class="card-body">
                                <h2 class="card-title"><?php echo $_SESSION["GreenHouse_Title3"]; ?></h2>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 mb-4">
                        <div class="card h-100">
                            <img src="assets/images/cookingclasses.gif" class="card-img-top img-fluid" alt="Cooking Classes">
                            <div class="card-body">
                                <h2 class="card-title"><?php echo $_SESSION["GreenHouse_Title4"]; ?></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading fw-normal lh-1"><?php echo $_SESSION["GreenHouse_Title5"]; ?><span
                            class="text-body-secondary"></span></h2>
                    <p class="lead"><?php echo $_SESSION["GreenHouse_Par9"]; ?></p>
                </div>
                <div class="col-md-5">
                    <img src="assets/images/CraigmillarCommunityFoodHub.png" style="width: 60%;">
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading fw-normal lh-1"><?php echo $_SESSION["GreenHouse_Title6"]; ?><span
                            class="text-body-secondary"></span></h2>
                    <p class="lead"><?php echo $_SESSION["GreenHouse_Par10"]; ?></p>
                </div>
                <div class="col-md-5 order-md-1">
                    <img src="assets/images/pantryMembership.png" style="width: 60%;">
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-6">
                    <h2 class="featurette-heading fw-normal lh-1 m-5"><?php echo $_SESSION["GreenHouse_Title7"]; ?><span
                            class="text-body-secondary"></span></h2>
                    <p class="lead">You can find the Greenhouse Pantry at: </p>
                    <p class="m-2 mb-5">64 Niddrie Mains Road Edinburgh, EH16 4BG</p>
                    <p class="lead">Normal Opening times are:</p>
                    <li>Thursday: 10.00am - 2.00pm</li>
                    <li>Friday: 9.30am - 12.00noon</li>

                </div>
                <div class="col-md-6 rounded-5">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2898.3966657641427!2d-3.14189351667827!3d55.93256913076374!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4887b8f17d82dcbb%3A0x76927faaacd553d3!2s64%20Niddrie%20Mains%20Rd%2C%20Craigmillar%2C%20Edinburgh%20EH16%204BG!5e0!3m2!1sen!2suk!4v1715860703125!5m2!1sen!2suk"
                        width="400" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="container">
                <div class="row featurette">
                    <div class="col-md-6">
                        <h2 class="featurette-heading fw-normal lh-1 mt-5 mb-5"><?php echo $_SESSION["GreenHouse_Title8"]; ?><span class="text-body-secondary"></span></h2>
                        <p class="lead"><?php echo $_SESSION["GreenHouse_Pa11"]; ?></p>
                        <p class="mt-2 lead"><?php echo $_SESSION["GreenHouse_Par12"]; ?></p>
                        
                        <a href="https://www.instagram.com/ylpgreenhouse/?hl=en" class="btn btn-primary">Our Instagram</a>
                        <img src="assets/images/Greenhouseinstagram.png" class="img-fluid mt-3" alt="Greenhouse Instagram">
                    </div>
                    <div class="col-md-6 text-center rounded-5">
                        <h2 class="featurette-heading fw-normal lh-1 mt-5 mb-5"><?php echo $_SESSION["GreenHouse_Title9"]; ?><span class="text-body-secondary"></span></h2>
                        <img src="assets/images/FacebookIcon.png" class="img-fluid" alt="Facebook Area" style="width: 80%;">
                        
                        <div class="mt-4">
                            <button id="likeButton" class="btn btn-primary me-2" onclick="likePage()">
                                <i class="fab fa-facebook-f"></i> Like <span id="likeCount">0</span> <!-- Initial count -->
                            </button>
                            <button id="shareButton" class="btn btn-primary me-2" onclick="sharePage()">
                                <i class="fas fa-share"></i> Share
                            </button>
                            <a href="https://www.facebook.com/ylpgreenhouse" class="btn btn-primary">
                                <i class="fas fa-user-plus"></i> Follow <span id="followCount">8</span> <!-- Initial count -->
                            </a>
                        </div>
                    </div>
                </div>
            </div>
    </div>

    <!-- Community Alliance Trust Footer -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-4">
                <img src="../CATAssets/images/favicon.png" style="width: 100px; height: 100px; margin: auto;"
                    alt="Community Alliance Trust Logo">
                <strong class="d-block text-gray-dark p-2">Follow Us</strong>
                <a href="https://facebook.com/communityalliancetrust" target="_blank"
                    class="text-decoration-none ms-2 me-2">
                    <i class="fab fa-facebook-f fs-5"></i>
                </a>
                <a href="https://twitter.com/communityalliancetrust" target="_blank"
                    class="text-decoration-none ms-2 me-2">
                    <i class="fab fa-twitter fs-5"></i>
                </a>
                <a href="https://instagram.com/communityalliancetrust" target="_blank"
                    class="text-decoration-none ms-2 me-2">
                    <i class="fab fa-instagram fs-5"></i>
                </a>
                <a href="https://linkedin.com/company/communityalliancetrust" target="_blank"
                    class="text-decoration-none ms-2 me-2">
                    <i class="fab fa-linkedin-in fs-5"></i>
                </a>

            </div>
            <div class="col-4 text-center mt-5">
                &copy; 2024 Community Alliance Trust. All rights reserved.
            </div>
            <div class="col-4 text-end mt-5">
                <form action="../Site/index.php" method="post">
                    <button class="btn btn-sm btn-primary m-2" name="nav" value="ContactUs">Contact Us</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://getbootstrap.com/docs/5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script>
        window.fbAsyncInit = function() {
            FB.init({
            appId      : 'YOUR_APP_ID', // Replace with your Facebook App ID
            xfbml      : true,
            version    : 'v12.0' // Use the latest version
            });
        };

        (function(d, s, id){
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) {return;}
            js = d.createElement(s); js.id = id;
            js.src = "https://connect.facebook.net/en_US/sdk.js";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
        // Initialize counts from local storage
        let likeCount = localStorage.getItem('likeCount') ? parseInt(localStorage.getItem('likeCount')) : 0;
        document.getElementById('likeCount').textContent = likeCount; // Display initial count

        // Function to like the page and update the count
        function likePage() {
            likeCount++;
            localStorage.setItem('likeCount', likeCount); // Store updated count in local storage
            document.getElementById('likeCount').textContent = likeCount; // Update displayed count
            alert('Thanks for liking!'); // Feedback to the user
        }

        // Function to share the page using Facebook's share dialog
        function sharePage() {
            const urlToShare = 'https://www.facebook.com/ylpgreenhouse'; // URL to share
            const shareWindow = window.open(
                `https://www.facebook.com/sharer/sharer.php?u=${encodeURIComponent(urlToShare)}`,
                'popup',
                'width=600,height=400'
            );
            shareWindow.focus();
            alert('Thanks for sharing!'); // Feedback to the user
        }
    </script>
</body>

</html>