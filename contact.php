<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        body {
            background-image: url("lens11.jpg");
            background-position: center;
            background-size: cover;
            font-family: Arial, sans-serif;
        }
        .header {
            overflow: hidden;
            padding: 20px 10px;
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
        search input[type=text] {
            width: 300px;
            height: 25px;
            border-radius: 25px;
            border: none;
        }
        search {
            float: right;
            margin: 7px;
        }
        search button {
            background-color: #0074D9;
            float: right;
            padding: 5px 10px;
            margin-right: 16px;
            font-size: 12px;
            border: none;
            cursor: pointer;
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
        img container {
            text-align: center;
            margin: 12px 0 10px 0;
        }
        .details {
            padding: 3px;
            border: 10px;
            background: transparent;
            border-radius: 8px;
            margin: 20px;
        }
        img {
            width: 20%;
            border-radius: 20%;
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
        container {
            width: 80%;
            margin: 10px auto;
            padding: 20px;
            background: transparent;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            font-weight: bold;
        }
        .icon {
            margin-right: 10px;
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
    </style>
</head>
<body>
    <h1><center>MY CONTACT</center></h1> 
    <!--Navbar items -->
    <div class="header">
        <div class="header-right">
            <a href="idex.html">HOME</a>
            <a href="services.html">SERVICES</a>
            <a href="Project.html">PROJECTS</a>
            <a href="contact.html" class="active">CONTACTS</a>
        </div>
    </div>
    <div class="details">   
        <p><center><i class="fas fa-envelope icon"></i>MY EMAIL: mwelu.lennah5@gmail.com</center></p><br>
        <p><center><i class="fas fa-phone icon"></i>PHONE NUMBER: 0703456773</center></p><br>
        <p><center><i class="fas fa-map-marker-alt icon"></i>Location</center></p>
        <center>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63826.51066746909!2d37.01098680496218!3d-1.0432787359742937!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f4e8a37b81443%3A0xb87cb37c8630203!2sZiwani%20Garage%20Estates!5e0!3m2!1sen!2ske!4v1720429047181!5m2!1sen!2ske" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </center>
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
</html>
