<html>
<head>
<div class="header">
<style>
body
{
background-image:url("lens11.jpg");
background-position:center;
background-size:cover;
}

.header {
    overflow: hidden;
    padding: 20px 10px;
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
background-color:powderblue;
position:absolute;
width:100%;
}
navlist {
    float:left;
    display:block;
    color:#f2f2f2;
    text-align:center;
    padding:12px;
    text-decoration:none;
    font-size:15px;
}
navlist-right{
    float-right;
}
navlist a:hover{
    background-color:#ddd;
    color:black;
}
search input[type=text]{
    width:300px;
    height:25px;
    border radius:25px;
    border:none;
}
search{
    float:right;
    margin:7px;
}
search button{
    background-color:#0074D9;
    float:right;
    padding:5px 10px;
    margin-right:16px;
    font-size:12px;
    border:none;
    cursor:pointer;
}
wrapper{
    background-color:grey;
    min-height:100%;
    margin-bottom:-5opx;
}
wrapper:after{
    content:"";
    display:block;
    height:50px;
}
content{
    height:200%;
}
footer{
    height:50px;
}
footer-content{
    background-color:black;
    border:1px solid;
    height:32px;
    padding:8px;
}
img container{
    text.align:center;
    margin:12px 0 10px 0;

}
img{
    width: 200px;
    border-radius: 50%;
}
container{
    padding:15px;
}
span:passw{
    float:right;
    padding-top:16px;
}
@media screen and(max-width:100px){
    span:passw{
        display:block;
        float:none;
    }
}
.details{
    display:block;
    font-size:1.5em;
    text-align:right;
    color:black;
    font:arial;
}
img{
            text-align: center;
        }
        img {
            width:300px;
            border-radius:0;
            align:left;
            margin:0;
            display:flex;
        }
        Services     */
/********************/
.basic-2 {
	padding-top: 7.75rem;
	padding-bottom: 5.25rem;
}

.basic-2 .h2-heading {
	margin-bottom: 0.75rem;
	text-align: center;
}

.basic-2 .p-heading {
	margin-bottom: 4rem;
	text-align: center;
    text-color:black;
   font-size:1.2rem;
}

.basic-2 .text-box {
	margin-bottom: 3rem;
	padding: 3.5rem 1rem 2.125rem 1rem;
	border: 4px solid #cfd7de;
    color:black;
}

.basic-2 .fas,
.basic-2 .far {
	margin-bottom: 1.75rem;
	color: #0b36a8;
	font-size: 3.5rem;
}

.basic-2 h4 {
	letter-spacing: 1px;
}
p {
	color:black; 
	font: 400 1rem/1.625rem "Open Sans", sans-serif;
    font: size 1.2em;
}

h2 {
	color: #24262a;
	font-weight: 700;
	font-size: 2rem;
	line-height: 2.5rem;
	font-family: "Poppins"
}
  .col-lg-12 {
    -ms-flex: 0 0 100%;
    flex: 0 0 100%;
    max-width: 100%;
  }
  .row {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  margin-right: -15px;
  margin-left: -15px;
}

  .container,
.container-fluid,
.container-sm,
.container-md,
.container-lg,
.container-xl {
  width: 100%;
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto;
}

@media (min-width: 576px) {
  .container, .container-sm {
    max-width: 540px;
  }
}

@media (min-width: 768px) {
  .container, .container-sm, .container-md {
    max-width: 720px;
  }
}

@media (min-width: 992px) {
  .container, .container-sm, .container-md, .container-lg {
    max-width: 960px;
  }
}

@media (min-width: 1200px) {
  .container, .container-sm, .container-md, .container-lg, .container-xl {
    max-width: 1140px;
  }
}
.service-container {
    display: flex;
    align-items: center;
    padding: 20px;
    background: rgba(255, 255, 255, 0.8);
    margin: 20px;
    border-radius: 10px;
    }
</style>
</head>
<body> 
<h1><center>SERVICES</center></h1> 
    <!--Navbar items -->
    <div class="header">
    <div class="header-right"> 
<a href="home.php">HOME</a> 
<a href="services.php"class="active">SERVICES</a>
<a href="Project.php">PROJECTS</a>
<a href="contact.php">CONTACTS</a>
</div>
</div>
<div id="services" class="basic-2">
    <div class="details">
            <div class="row">
                <div class="col-lg-12">
                 <h2 class="h2-heading">Offered services</h2>
<p class="p-heading">Web design and development have been my bread and butter for 2years.</p>
<p class="p-heading">During that time I've discovered that I can help startups and companies with the following services</p>
</div> </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="service-container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="text-box">
                        <i class="far fa-gem"></i>
                        <h4>DESIGN</h4>
                        <p class="p">Successful online projects start with good designs.It establishes a solid foundation for future development and allows for long term growth</p>
                    </div> <!-- end of text-box -->
                </div> <!-- end of col -->
                <div class="col-lg-4">
                    <div class="text-box">
                        <i class="fas fa-code"></i>
                        <h4>DEVELOPMENT</h4>
                        <p class="p">I can code my own designs or even use the customer's design as base My focus is to generate clean code that's well structured for reliability</p>
                    </div> <!-- end of text-box -->
                </div> <!-- end of col -->
                <div class="col-lg-4">
                    <div class="text-box">
                        <i class="fas fa-tv"></i>
                        <h4>BASIC SEO</h4>
                            <p class="p">i can setup your project to use basic SEO principles which will push your project to the first page on search engines and save you ads money</p>
                    </div> <!-- end of text-box -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-2 -->
    <!-- end of services -->