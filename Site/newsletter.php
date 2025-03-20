<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Newsletter - PDF Viewer</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- FontAwesome for Icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">

    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
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
        
            footer {
            background: #fff;
            color: black;
            padding: 15px 0;
            font-size: 14px;
            }
            .footer-content {
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
                gap: 15px;
                text-align: center;
            }
            .footer-content div {
                display: flex;
                align-items: center;
                gap: 8px;
            }
            .footer-content i {
                color: #f8d210;
            }
            .footer-bottom {
                border-top: 1px solid #555;
                padding-top: 10px;
                display: flex;
                justify-content: space-between;
                flex-wrap: wrap;
                text-align: center;
            }
            .footer-bottom .btn {
                font-size: 12px;
                padding: 5px 10px;
            }

        .logo-container {
            text-align: center;
            margin: 20px 0;
        }

        .logo-container img {
            max-width: 60%;
            height: auto;
        }

        .pdf-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 80vh;
            padding: 20px;
        }

        iframe {
            width: 80%;
            height: 100%;
            border: 1px solid #ddd;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }


        @media (max-width: 768px) {
            iframe {
                width: 95%;
                height: 85vh;
            }
        }
    </style>
</head>

<body>

    <div class="container">    
        <div class="row">
            <a class="col-12" href="index.php">
                <div class="card border border-0">
                <img src="assets/images/newsletter-logo.png" style="min-width: 350px; width: 20%; margin: auto;">
                </div>
            </a>
        </div>
    </div>
    <div class="row">
        <nav class="navbar bg-body-tertiary mb-5">
            <form action="index.php" method="post" class="container-fluid justify-content-center">
                <a href="index.php" class="btn btn-sm btn-primary m-2">Home</a>
                <a href="../WhiteHouse/index.php" class="btn btn-sm btn-primary m-2">The White House</a>
                <a href="../CommunityGardening/index.php" class="btn btn-sm btn-primary m-2">Community Gardening</a>
                <a href="../GreenhousePantry/index.php" class="btn btn-sm btn-primary m-2" >Greenhouse Pantry</a>
                <a href="AboutUs.html" class="btn btn-sm btn-primary m-2" >About Us</a>
                <button class="btn btn-sm btn-primary m-2" name="nav" value="MailingList">Mailing List</button>
                <button class="btn btn-sm btn-primary m-2" name="nav" value="CATEvents">Events</button>
                <button class="btn btn-sm btn-primary m-2" name="nav" value="ContactUs">Contact Us</button>
                <a href="newsletter.php" class="btn btn-sm btn-primary m-2">Newsletter</a>
            </form>
        </nav>
    </div>

    <!-- PDF Viewer -->
    <div class="pdf-container">
        <iframe src="assets/Newsletter/Newsletter_March_25.pdf"></iframe>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2025 Your Organization | All Rights Reserved</p>
    </footer>

</body>

</html>
