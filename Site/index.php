<?php include 'https/Headers.php';
$Comma = ","; 
$Apostrophe = "'";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-8EXH35RLZP"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-8EXH35RLZP');
</script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Community Alliance Trust</title>
    <meta name="description"
    content="The Community Alliance Trust, commonly known locally, as CAT is a development trust or charity. Its role has evolved over time to meet growing needs in the area." />
    <meta name="keywords"
    content="Community Alliance Trust, Craigmillar, CAT Craigmillar, The White House, White House" />
    <meta name="resource-type" content="document" />
    <meta name="revisit-after" content="7 days" />
    <meta name="distribution" content="Global" />
    <meta name="rating" content="general" />
    <meta name="author" content="CommunityAllianceTrust.com" />
    <meta name="language" content="english" />
    <meta name="robots" content="index, follow" />
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
        <div id="fb-root"></div>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v19.0&appId=940327907601310" nonce="fkoFLT1q"></script>
        <script src="https://cdn.ckeditor.com/ckeditor5/41.1.0/classic/ckeditor.js"></script>
        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        <link href="../assets/css/popup.css" rel="stylesheet">
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
        <link rel="manifest" href="webmanifest">
        <script>
            $("#pop").on("click", function () {
                $('#imagepreview').attr('src', $('#imageresource').attr('src')); // here asign the image to the modal when the user click the enlarge link
                $('#imagemodal').modal('show'); // imagemodal is the id attribute assigned to the bootstrap modal, then i use the show function
                $('#imageclose').modal('close');
            });
        </script>       
        <style>
            .ck-editor__editable[role="textbox"] {
                /* Editing area */
                min-height: 200px;
                margin-left: 2%;

            }
            .img-wrapper::after {
                font-size: 12px;
                content: 'Click Image To View Full Size';
                display: block;
            }
            .nav {
                margin-bottom: 0px;
            }
            
            .bg-light {
                background-color: #f8f9fa; /* Light background for contrast */
            }

            .shadow {
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Soft shadow for depth */
            }

            .btn-primary {
                padding: 15px 30px; /* Increase padding for the button */
            }

            .fb-like {
                margin-top: 20px; /* Space between the icon and the like button */
            }
            .card {
                border: none;
            }
            .card:hover {
                transform: translateY(-5px);
                transition: 0.3s ease-in-out;
            }
            .btn:hover {
                background-color: #0056b3;
                transition: 0.2s ease-in-out;
            }
        </style>  
</head>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v10.0" nonce="YOUR_NONCE"></script>
<body>
    
<div id="fb-root"></div> 
<script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
    fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>

<div class="container">
    <?php include'https/Components/Header.php'; ?>
    <?php include'https/Conductor.php'; ?>
    <?php include'https/Components/Footer.php'; ?>
</div>

</body>

</html>