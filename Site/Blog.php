<?php session_start();
include_once('https/PostCleaning.php');
include 'https/Functions.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset=”utf-8″>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Community Alliance Trust</title>
    <meta name="description"
    content="" />
    <meta name="keywords"
    content="" />
    <meta name="resource-type" content="document" />
    <meta name="revisit-after" content="7 days" />
    <meta name="distribution" content="Global" />
    <meta name="rating" content="general" />
    <meta name="author" content="CommunityAllianceTrust.com" />
    <meta name="language" content="english" />
    <meta name="robots" content="index, follow" />
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css"
        integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
        crossorigin="anonymous"></script>
        <script src="https://cdn.ckeditor.com/ckeditor5/41.1.0/classic/ckeditor.js"></script>

</head>
<body>
<div class="container">
    <div class="row">
        <nav class="navbar bg-body-tertiary">
            <form action="index.php" method="post" class="container-fluid justify-content-center">
                    <a href="index.php" class="btn btn-sm btn-primary m-2">Home</a>
                    <a href="../WhiteHouse/index.php" class="btn btn-sm btn-primary m-2">The White House</a>
                    <a href="../CommunityGardening/index.php" class="btn btn-sm btn-primary m-2">Community Gardening</a>
                    <a href="../GreenhousePantry/index.php" class="btn btn-sm btn-primary m-2" >Greenhouse Pantry</a>
                    <a href="AboutUs.html" class="btn btn-sm btn-primary m-2" >About Us</a>
                    <a href="index.php?nav=CATBlog" class="btn btn-sm btn-primary m-2" >Blog</a>
                    <button class="btn btn-sm btn-primary m-2" name="nav" value="MailingList">Mailing List</button>
                    <button class="btn btn-sm btn-primary m-2" name="nav" value="CATEvents">Events</button>
                    <button class="btn btn-sm btn-primary m-2" name="nav" value="ContactUs">Contact Us</button>
                    <a href="../NewsletterApp/index.php" class="btn btn-sm btn-primary m-2">Newsletter</a>      
            </form>
        </nav>
    </div>                 
 
    <div class="container">    
        <div class="row">
            <a class="col-12" href="index.php">
                <div class="card border border-0">
                <img src="assets/images/logo.png" style="min-width: 350px; width: 40%; margin: auto;">
                </div>
            </a>
        </div>
    </div>

    <div class="row">
        <nav class="navbar bg-body-tertiary">
            <form class="container-fluid justify-content-center" method="post" action="index.php">
                <button class="btn btn-sm btn-success m-1" name="nav" value="ComingSoon">Housing</button>
                <button class="btn btn-sm btn-success m-1" name="nav" value="ComingSoon">Benefit</button>
                <button class="btn btn-sm btn-success m-1" name="nav" value="ComingSoon">Service</button>
                <button class="btn btn-sm btn-success m-1" name="nav" value="ComingSoon">Area Events</button>
                <button class="btn btn-sm btn-success m-1" name="nav" value="ComingSoon">Community Gardening</button>
                <button class="btn btn-sm btn-success m-1" name="nav" value="ComingSoon">Greenhouse Pantry</button>
                <button class="btn btn-sm btn-success m-1" name="nav" value="ComingSoon">The White House</button>
            
            </form>
        </nav>
    </div>

    <div class="card text-center p-5">
        <h3>Know Your Neighbourhood Event</h3>
        <p>29 June 2024, at 11am till 2pm, the ground Floor of the Library and the Neighbourhood Office will be taken over by 35 third sector organisations, community groups and statutory bodies.  So, if you want to know what is happening in your area or you need some help and advice, we know the people who will keep you informed.  Pop along and meet the groups and organisation delivering a power of work in this area.</p>
            <h3 class="card-title"><?php  echo $_SESSION["BlogMsg"];?></h3>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-3 mb-3 mb-sm-0">
                <div class="card border-primary mb-3" style="max-width: 18rem;">
                    <div class="card-header">Public Post</div>
                    <div class="card-body text-primary">
                        
                        <form action="index.php" method="post">
                            <button name="nav" value="Public_Blog_Form" class="btn btn-primary">Create a Post</button>
                        </form>
                    </div>
                </div>

                <div class="card border-primary mb-3 p-2" style="max-width: 18rem;">
                    <div class="card-header">Blog Catagories</div>
                    <form action="index.php" method="post">
                        <select name="nav">
                            <option class="btn btn-primary" value="Housing_Catagory">Housing</option>
                            <option class="btn btn-primary" value="Benefits_Catagory">Benefits</option>
                            <option class="btn btn-primary" value="Area_Services">Area Services</option>
                            <option class="btn btn-primary" value="Area_Identity">Area Identity</option>
                            <option class="btn btn-primary" value="Area_Event">Area Event</option>
                            <option class="btn btn-primary" value="Getting_About_Craigmilar">Getting About Craigmilar</option>
                            <option class="btn btn-primary" value="Craigmilar_Spaces">Craigmilar Spaces</option>
                            <option class="btn btn-primary" value="Area_Care">Area Care</option>
                            <option class="btn btn-primary" value="Key_Issues">Key Issues</option>
                        </select>
                        <input type="submit">
                    </form>
                </div>
            </div>
            <div class="col-sm-8 bg-primary p-3">
                <?php Blog(); ?>
            </div>
        </div>
    </div>
</div>
</body>

</html>