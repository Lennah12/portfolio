<html>
<head>
<button><a href="Homepage.php"target="blank">FOOD VIBES</a></button>
<button><a href ="Login form.php"target="blank">LOGIN HERE</a></button>
<button><a href="Sign up form.php"target="blank">Signup HERE</a></button>
<button><a href="RECIPE.php"target="blank">RECIPES</a></button>
<button><a href="Authors.php"target="blank">AUTHORS</a></button><br></br>
<style>
body{
    background-image:url("cook2.jpg");
background-position: center;
background-size:contain;
}
h1{
color:pink;
font:40px;
position :center;
}
input [type=button]
{
background-color:white
padding : 14px 20px;
margin:8px 0;
border:1px solid;
cursor:pointer;
width:59%;
}
button:hover{
opacity:0.8;
}
form{
height:520px;
width :400px;
background-color:grey;
position:absolute;
transform:translate(-50% , -50%)
top:50%;
left:50%;
border-radius : 10px;
backdrop-filter : blur(10px)
border :2px solid;
box-shadow :0 0 40px;
padding:50px 35px;
}
input [type=text,number]
{
display:block;
height :50px;
width:100%;
border-radius:3px;
padding:0 10px;
margin-top:8px;
font-size : 14px;
font-weight:300;
}
input [type=Longtext]
{
width:59%;
padding:50px 30px;
margin:7px 0;
box-sizing:border-box;
}
</style>
<body>
<form>
<div class="header">
<h1>CONTACT US</h1>
YOUR EMAIL:<center></center>
<input type="text"name"Email"value="@gmail.com"><br></br>
YOUR NUMBER:<center></center>
<input type="NUmber"name"Your Number"><br></br>
TYPE HERE:<center></center>
<input type="Longtext"name"Type Here"value="type here..."><br></br>
</form>
<footer id="wrapper">
    <div id ="footer-content">Contacts:pnc@gmail.com 2022</div>
</footer>
</html>