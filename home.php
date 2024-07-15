<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
    <style>
        body {
            background-image:url("lens11.jpg");
            background-position: center;
            background-size: cover;
            margin: 0;
            font-family: Arial, sans-serif;
        }
        .header {
            overflow: hidden;
            padding: 20px 10px;
            position: relative;
            background: transparent;
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
        .header-right {
            float: right;
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
        navlist {
            background-color: powderblue;
            position: absolute;
            width: 100%;
        }
        navlist {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 12px;
            text-decoration: none;
            font-size: 15px;
        }
        navlist-right {
            float-right;
        }
        navlist a:hover {
            background-color: #ddd;
            color: black;
        }
        .search-container {
            float: left;
            margin: 7px;
        }
        .search-container input[type=text] {
            width: 300px;
            height: 25px;
            border-radius: 25px;
            border: 1px solid #ddd;
            padding: 5px 10px;
            transition: width 0.4s ease-in-out;
        }
        .search-container input[type=text]:focus {
            width: 400px; /* Expand width on focus */
        }
        .search-container button {
            background-color: #0074D9;
            color: white;
            padding: 5px 10px;
            margin-left: -5px;
            font-size: 14px;
            border: none;
            cursor: pointer;
            border-radius: 25px;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }
        .search-container button:hover {
            background-color: #005bb5;
            transform: scale(1.1); /* Scale up on hover */
        }
        wrapper {
            background-color: grey;
            min-height: 100%;
            margin-bottom: -50px;
        }
        wrapper:after {
            content: "";
            display: block;
            height: 50px;
        }
        content {
            height: 200%;
        }
        footer {
            height: 50px;
        }
        footer-content {
            background-color: black;
            border: 1px solid;
            height: 32px;
            padding: 8px;
        }
        img{
            text-align: center;
        }
        img {
            width: 300px;
            border-radius:50%;
            margin-left:auto;
            margin-right:auto;
            display:block;
        }
        container {
            padding: 15px;
        }
        span:passw {
            float: right;
            padding-top: 16px;
        }
        @media screen and (max-width: 100px) {
            span:passw {
                display: block;
                float: none;
            }
        }

        /* Sliding Text Animation */
        .sliding-text {
            width: 100%;
            text-align: center;
            font-size: 1.4em;
            color: black;
            top: 50%;
            transform: translateY(-50%);
            animation: slide-in 5s infinite;
            justify-content:center;
        }
        .details{
            font-size:1.0em;
            text-align:left;
            color:black;
            font:arial;
        }

        @keyframes slide-in {
            0% {
                left: -100%;
            }
            50% {
                left: 50%;
                transform: translateX(-50%) translateY(-50%);
            }
            100% {
                left: 100%;
            }
        }
        .social-links {
            list-style: none;
            padding: 0;
            display: flex;
            gap: 20px;  /* Adjust gap between icons */
            justify-content: center;
            margin: 20px 0;  /* Adjust spacing around the list */
        }
        .icon-box {
            display: inline-block;
            width: 40px;  /* Adjust this value to change icon size */
            height: 40px; /* Adjust this value to change icon size */
            transition: transform 0.3s ease, background-color 0.3s ease;
            border-radius: 50%; /* Make the icon box circular */
            overflow: hidden;  /* Ensure icon fits within the box */
            background: white; /* Set a background color to make icons visible */
        }
        .icon {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .icon-box:hover {
            transform: scale(1.1);
            background-color: lightgray; /* Change background color on hover */
        }
        .contact-section {
            text-align: center;
            padding: 20px;
            background-color:transparent; /* Light background for better visibility */
        }
        .contact-message {
            font-size: 1.2em;
            margin-bottom: 20px;
        }
    .about-container {
    display: flex;
    align-items: center;
    padding: 20px;
    background:rgba(255, 255, 255, 0.8) ;
    margin: 20px;
    border-radius: 10px;
}
.details {
    flex: 1;
    font-size: 1.2em;
}

.more-details {
    padding: 20px;
    background: rgba(255, 255, 255, 0.9);
    margin: 20px;
    border-radius: 8px;
}

.more-details h2 {
    font-size: 1.5em;
    margin-bottom: 10px;
}

.more-details ul {
    list-style-type: disc;
    padding-left: 20px;
}

.more-details ul li {
    margin-bottom: 10px;
}

    </style>
</head>
<body>
    <div class="header">
        <h1><center class="sliding-text">Hi there!am lennah,am a web developer!</center></h1>
        <!--Navbar items -->
        <div class="header-right"> 
            <a href="home.php"class="active">HOME</a> 
            <a href="services.php">SERVICES</a>
            <a href="Project.php">PROJECTS</a>
            <a href="contact.php">CONTACTS</a>
        </div>
        <br></br>
    </div>
    <div class="details">
    </div>    
    <!-- Other content -->
    <div class ="img"></div>
<div class="row">
<div class = "column">
<img src="image.jpg"alt="image.jpg">
<div class="about-container">
        <div class="details">
            <p>Welcome! My name is Lennah.</p>
            <p>I am a skilled web developer.</p>
            <p>I love creating beautiful and efficient websites,</p>
            <p>Websites that capture my customer's needs effectively.</p>
        </div>
    </div>

    <!-- More Details -->
    <div class="more-details">
        <h2>Skills & Expertise</h2>
        <ul>
            <li>Front-End Development: HTML, CSS, JavaScript</li>
            <li>Back-End Development: PHP, Node.js</li>
            <li>SEO Optimization</li>
            <li>Database expert</li>
        </ul>
        <h2>Experience</h2>
        <p>Worked on various projects ranging from small business websites to large e-commerce platforms.</p>
        <h2>Background</h2>
        <p>waiting to graduate in bachelor of business in information technology. Passionate about coding and design.</p>
    
    <h2>languages Learnt</h2>
            <ol>PHP</ol>
            <ol>HTML</ol>
            <ol>CSS</ol>
            <ol>JS</ol>
            <p class="date">may 2023</p>
        

    
    
            <h2>highschool</h2>
            <p>finished highschool in 2021.</p>
            <p class="date">april 2021</p>
        
    
            <h2>Community Service Award</h2>
            <p>Awarded for exceptional contributions to the local community through volunteer work.</p>
            <p class="date">May 2021</p>
        

        
            <h2>basketball awards</h2>
            <p>Received an award for the best basketball player.</p>
            <p class="date">March 2020</p>
        </div>


<div class="contact-section">

        <ul class="social-links">
            <li>
                <a href="https://twitter.com/messages/compose?recipient_id=@lens_mwelu1" class="icon-box" target="_blank" rel="noopener noreferrer">
                    <img src="x.jpg" alt="Twitter" class="icon">
                </a>
            </li>
            <li>
                <a href="https://ig.me/m/mwelu.lennah5" class="icon-box" target="_blank" rel="">
                    <img src="instagram.jpg" alt="Instagram" class="icon">
                </a>
            </li>
            <li>
                <a href="tel:+254703456773" class="icon-box">
                    <img src="phone.jpg" alt="Phone" class="icon">
                </a>
            </li>
            <li>
                <a href="https://mail.google.com/mail/?view=cm&fs=1&to=mwelu.lennah5@gmail.com" class="icon-box" target="_blank" rel="">
                    <img src="gmail.jpg" alt="Email" class="icon">
                </a>
            </li>
            <li>
                <a href="https://wa.me/254703456773?text=Hello%20Ivy,%20I'm%20interested%20in%20your%20web%20development%20services." class="icon-box" target="_blank" rel="">
                    <img src="whatsapp.jpg" alt="WhatsApp" class="icon">
                </a>
            </li>
        </ul>
    </div>
</body>
<script>
    let currentIndex = 0;
    const images = document.querySelectorAll('.header img');
    const totalImages = images.length;

    function showNextImage() {
        images[currentIndex].classList.remove('active');
        currentIndex = (currentIndex + 1) % totalImages;
        images[currentIndex].classList.add('active');
    }

    setInterval(showNextImage, 5000); // Change image every 5 seconds
</script>
</html>
