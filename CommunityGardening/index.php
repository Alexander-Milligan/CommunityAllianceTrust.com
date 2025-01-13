<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<head>
    <meta charset="UTF-8">
    <?php include_once '../Site/https/Functions.php'; CommunityGardeningPage();?>
    <script src="https://getbootstrap.com/docs/5.3/assets/js/color-modes.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.122.0">
    <title>Community Gardening</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/cover/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link href="https://getbootstrap.com/docs/5.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta name="theme-color" content="#712cf9">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css"
        integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
    <style>
        body {
            background-color: #f8f9fa; /* Light background for better contrast */
        }
        .card {
            border: none;
        }
        .custom-spliter {
            border: none;
            height: 1px;
            width: 100%;
            background-color: lightblue;
        }
        .navbar {
            margin-bottom: 20px; /* Spacing below the navbar */
        }
        .footer {
            color: white;
        }
        .btn-primary {
            background-color: #007bff; /* Bootstrap primary color */
            border-color: #007bff;
        }
        .btn-success {
            background-color: #28a745; /* Bootstrap success color */
            border-color: #28a745;
        }
        .form-control {
            border-radius: 0.25rem; /* Rounded corners for input fields */
        }
        .rounded-3 {
            border-radius: 0.5rem; /* More pronounced rounding for forms */
        }
        .icon-area {
            font-size: 2rem; /* Icon size */
            margin-bottom: 10px; /* Spacing below icons */
            color: #007bff; /* Icon color */
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <a class="col-12" href="index.php">
                <div class="card border border-0">
                    <img src="assets/images/logo.png" style="min-width: 350px; width: 60%; margin: auto;">
                </div>
            </a>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary">
            <form action="../Site/index.php" method="post" class="container-fluid justify-content-center">
                <a href="../Site/index.php" class="btn btn-sm btn-primary m-2">Home</a>
                <a href="../WhiteHouse/index.php" class="btn btn-sm btn-primary m-2">The White House</a>
                <a href="index.php" class="btn btn-sm btn-primary m-2">Community Gardening</a>
                <a href="../GreenhousePantry/index.php" class="btn btn-sm btn-primary m-2">Greenhouse Pantry</a>
                <a href="../Site/AboutUs.html" class="btn btn-sm btn-primary m-2">About Us</a>
                <a href="../Site/index.php?nav=CATBlog" class="btn btn-sm btn-primary m-2">Blog</a>
                <button class="btn btn-sm btn-primary m-2" name="nav" value="MailingList">Mailing List</button>
                <button class="btn btn-sm btn-primary m-2" name="nav" value="CATEvents">Events</button>
                <button class="btn btn-sm btn-primary m-2" name="nav" value="ContactUs">Contact Us</button>
                <a href="../NewsletterApp/index.php" class="btn btn-sm btn-primary m-2">Newsletter</a>
            </form>
        </nav>

        <div class="container mb-4">
            <div class="row">
                <div class="col-md-4">
                    <div class="card border-0">
                        
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="thumbnail">
                        <img src="../CATAssets/images/pdf-1.png" class="img-responsive" style="height: 250px; width: 100%;" alt="Craigmillar's Community Cookbook">
                        <div class="card-body">
                            <h5 class="card-title">Craigmillar's Community Cookbook</h5>
                            <p class="card-text">
                                I am delighted to share with you the Craigmillar's Community Cookbook, a collection of recipes from our vibrant community.
                            </p>
                            <a href="https://communityalliancetrust.com/GreenhousePantry/assets/pdfs/CraigmillarCommunityCookbook.pdf" class="btn btn-primary" download>Download Cookbook</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0">
                        
                    </div>
                </div>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary">
            <form class="container-fluid justify-content-center">
                <a href="../Site/ComingSoon.html" class="btn btn-sm btn-success p-1 m-2">Community Gardening Events</a>
                <a href="../Site/ComingSoon.html" class="btn btn-sm btn-success p-1 m-2">Recipes</a>
                <a href="assets/Craigmillar Growers Leaflet 2024.pdf" class="btn btn-sm btn-success p-1 m-2">Craigmillar Growers Leaflet 2024</a>
            </form>
        </nav>

        <div class="container mb-5">
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <!-- Craigmillar Growers -->
                <div class="col">
                    <div class="card border-0">
                        <img src="assets/images/CGrowersLogo.png" style="width: 50%; margin: auto;" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo stripslashes($_SESSION["CG_Title1"]);?></h5>
                            <p class="card-text"><?php echo $_SESSION["CG_Par1"]; ?></p>
                            <p class="card-text"><?php echo $_SESSION["CG_Par2"]; ?></p>
                        </div>
                    </div>
                </div>
                <!-- NoticeBoard -->
                <div class="col">
                    <div class="card border-0">
                        <img src="assets/images/Noticeboardlogo.png" style="width: 70%; margin: auto;" class="card-img-top" alt="...">
                        <div class="card mx-5 pt-3">
                            <div class="card-body">
                                <?php CommunityGardening_NoticeBoardGrab(); ?>
                                <a href="../Site/ComingSoon.html" class="btn btn-sm btn-primary m-1">Facebook link to event one</a>
                                <a href="../Site/ComingSoon.html" class="btn btn-sm btn-primary m-1">Instagram Link</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="custom-spliter btn btn-success mt-5 mb-5 p-1">
                    
                </div>
            </div>

            <div class="row row-cols-1 row-cols-md-2 g-4">
                <!-- Gardening Sessions -->
                <div class="col">
                    <div class="card border-0">
                        <div class="card-body">
                            <h5 class="card-title"><i class="fas fa-seedling icon-area"></i> Gardening Sessions</h5>
                            <p class="card-text"><?php echo $_SESSION["CG_Par3"]; ?></p>
                            <p class="card-text"><?php echo $_SESSION["CG_Par4"]; ?></p>
                            <p class="card-text"><?php echo $_SESSION["CG_Par5"]; ?></p>
                        </div>
                    </div>
                </div>
                <!-- White House Garden -->
                <div class="col">
                    <div class="card border-0">
                        <div class="card-body">
                            <h5 class="card-title"><i class="fas fa-tree icon-area"></i> White House Garden</h5>
                            <p class="card-text"><?php echo $_SESSION["CG_Par6"]; ?></p>
                            <p class="card-text"><?php echo $_SESSION["CG_Par10"]; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="custom-spliter btn btn-success mt-5 mb-5 p-1"></div>

        <div class="container mb-5">
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <!-- Neighbourhood Gardens -->
                <div class="col">
                    <div class="card border-0">
                        <img src="assets/images/NeighbourhoodGardenstitle.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text"><?php echo $_SESSION["CG_Par7"]; ?></p>
                            <p class="card-text"><?php echo $_SESSION["CG_Par8"]; ?></p>
                        </div>
                    </div>
                </div>
                
                <!-- Our Facebook -->
                <div class="col text-center mb-4">
                    <div class="bg-light p-4 rounded shadow"> 
                        <h5 class="mb-3">Community Gardening Facebook</h5>
                        <img src="assets/images/FacebookIcon.png" alt="Facebook Icon" class="mb-3" style="width: 100%; margin: auto;">
                        <a href="https://www.facebook.com/CraigmillarGrowers/" target="_blank" class="btn btn-primary btn-lg">
                            <i class="fab fa-facebook-f fa-3x"></i>  
                        </a>
                    </div>
                </div>
            </div>

            <div class="custom-spliter btn btn-success mt-5 mb-5 p-1"></div>

            <div class="row">
                <div class="col-12">
                    <form class="rounded-3 p-4 text-light" style="background-color: #488fb8;" action="../Site/index.php" method="post">
                        <h3 class="card-title text-center mb-2 mt-5">Get in Touch</h3>
                        <p class="card-text text-center"><?php echo htmlspecialchars($_SESSION["CG_Par9"], ENT_QUOTES, 'UTF-8'); ?></p>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="md-form mb-0 p-2">
                                    <label for="name" class="">Your name</label>
                                    <input type="text" name="ContactPublicName" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="md-form mb-0 p-2">
                                    <label for="email" class="">Your email</label>
                                    <input type="text" name="ContactPublicEmail" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="md-form"><label for="message">Your message</label>
                                    <textarea type="text" name="PublicContactComment" rows="2" class="form-control md-textarea p-2" required></textarea>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="nav" value="CommunityGardeningEmail" />
                        <button id="submit" type="submit" class="btn btn-primary m-3">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Community Alliance Trust Footer -->
    <div class="container mt-5 footer">
        <div class="row">
            <div class="col-4">
                <img src="../CATAssets/images/favicon.png" style="width: 100px; height: 100px; margin: auto;" alt="Community Alliance Trust Logo">
                <strong class="d-block text-dark p-2">Follow Us</strong>
                <a href="https://facebook.com/communityalliancetrust" target="_blank" class="text-decoration-none ms-2 me-2">
                    <i class="fab fa-facebook-f fs-5"></i>
                </a>
                <a href="https://twitter.com/communityalliancetrust" target="_blank" class="text-decoration-none ms-2 me-2">
                    <i class="fab fa-twitter fs-5"></i>
                </a>
                <a href="https://instagram.com/communityalliancetrust" target="_blank" class="text-decoration-none ms-2 me-2">
                    <i class="fab fa-instagram fs-5"></i>
                </a>
                <a href="https://linkedin.com/company/communityalliancetrust" target="_blank" class="text-decoration-none ms-2 me-2">
                    <i class="fab fa-linkedin-in fs-5"></i>
                </a>
            </div>
            <div class="col-4 text-center mt-5 text-dark">
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</body>
</html>
