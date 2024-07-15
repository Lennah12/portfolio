<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects</title>
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <!-- Lightbox CSS (Optional) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css">
    <style>
        body {
            background-image: url("lens11.jpg");
            background-position: center;
            background-size: cover;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            color: black;
        }
        .header {
            overflow: hidden;
            padding: 20px 10px;
            background: rgba(255, 255, 255, 0.8);
        }
        .header a {
            float: left;
            color: black;
            text-align: center;
            padding: 12px;
            text-decoration: none;
            font-size: 18px;
            line-height: 25px;
            border-radius: 4px;
        }
        .header a:hover {
            background-color: #ddd;
            color: black;
        }
        .header a.active {
            background-color: green;
            color: white;
        }
        .header-right {
            float: right;
        }
        .img {
            text-align: center;
            margin: 20px auto;
        }
        .img a {
            display: inline-block;
            width: 30%;
            margin: 10px;
        }
        .img img {
            width: 50%;
            border-radius: 8px;
            margin: 20px;
            cursor: pointer;
            transition: transform 0.2s

        }
        .img img:hover {
            transform: scale(1.05);
        }
    </style>
</head>
<body>
    <h1><center>MY PROJECTS</center></h1> 
    <!-- Navbar items -->
    <div class="header">
        <div class="header-right">
            <a href="home.php">HOME</a>
            <a href="achievements.php">ACHIEVEMENTS</a>
            <a href="about.php">ABOUT</a>
            <a href="services.php">SERVICES</a>
            <a href="projects.php" class="active">PROJECTS</a>
            <a href="contact.php">CONTACT</a>
        </div>
    </div>
    <p><center>Here are some of my projects!</center></p>
    <div class="img">
        <!-- Wrap each image in a link to project pages -->
        <a href="projects\Homepage.php" target="_blank">
            <img src="Capture 1.jpg" alt="Capture 1">
            <div class="caption">Project 1</div>
        </a>
        
        <a href="projects\project 1\MOTHER LOGIN.php" target="_blank">
            <img src="Capture 3.jpg" alt="Capture 3">
            <div class="caption">Project 3</div>
        </a>
    </div>
    <!-- Lightbox JS (Optional) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
</body>
</html>
