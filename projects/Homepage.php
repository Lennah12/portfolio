<html>
<head>
<div class="header">
<h1><center>FOODVIBES RECIPES</center></h1>
<button><a href="Homepage.php"target="blank">FOOD VIBES</a></button>
<button><a href ="Login form.php"target="blank">LOGIN HERE</a></button>
<button><a href="Sign up form.php"target="blank">Signup HERE</a></button>
<button><a href="RECIPE.php"target="blank">RECIPES</a></button>
<button><a href="Authors.php"target="blank">AUTHORS</a></button><br></br>
<button><a href="contact us.php"target="blank">Contact us</a></button><br><br>
<style>
body
{
    background-color:purple;
}
h1{
color:pink;
font:40px;
align :right;
}
input [type=button]
{
background-color:powderblue;
position:center;
padding : 14px 20px;
margin:8px 0;
border:1px solid;
cursor:pointer
width:59%;
}
button:hover{
opacity:0.8;
}
search  input[type=text]
{
width:350px;
height:25px;
border radius:25px;
border:none;
}
search{
float:right;
margin:7px;
}
search button{
background-color:powderblue;
float:right;
padding:5px 10px;
margin-right:18px;
font-size:14px;
border:none;
cursor:pointer;
}
column{
    float:left;
    width:25%;
    padding:7px;
    row img{
        opacity:0.8;
        cursor:pointer;

    }
    column img:hover;
    opacity:1;
    row:after{
        content:"";
        display:table;
        clear:both;

    }
    container{
        position:relative;
        display:none;

    }
    imgtext{
        position:absolute;
        bottom:14px;
        left:14px;
        color:white;
        font:15px;
    }
    close button{
        position:absolute;
        top:18px;
        right:17px;
        color:grey;
        font:50px;
        cursor:pointer;
    }

}
</style>
<div class = "background">
<div class = "shape"></div>
<div class="row">
<div class = "column">
<img src="food4.jpg"
width="290px"height="300px"alt="food4.jpg"
Onclick="myFunction(this);">
<img src="food1.jpg"
width="300px"height="300px"alt="food1.jpg"
onclick="myFunction(this);">
<img src="food3.jpg"
width="300px"height="300px"alt="food3.jpg"
onclick="myFunction(this);">
<img src="food2.jpg"
width="290px"height="300px"alt="food2.jpg"
onclick="myFunction(this);">
<div class="container">
    <span
     onclick="this.parentElement.style.display='none'"class="closebutton">&times;</span>
    <img Id="enlarged img"style="width:100%"><div></div>
    <div Id="img text"></div><br>
</div>
<script>
    function myFunction(img){
        var
         enlargeimg=document.getElementById("enlarged img");
        var 
        imgtext=document.getElementById("img text");
        enalargeimg.src=img.src;
        imgtext.InnerHtml=img.alt;
        enlargeimg.parentElement.style.display ="block";
    }
</script>
<search bar right align>
<div class ="search">
<form action = "#"><button>
<input type="search" placeholder="search recipes"name="search">
</button>
<br></br>
    <button 
    <input type= "button" onclick="location.reload();">Refresh page</button>
</div>
</form>
