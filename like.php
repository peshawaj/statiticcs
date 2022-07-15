<!DOCTYPE html>
<?php 

?>

<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <script src="https://kit.fontawesome.com/d751c8c0ed.js" crossorigin="anonymous"></script>
</head>
<style>
    body {
        margin: 0;
        padding: 0;
        height: 100vh;
    }
    .row{
        position: relative;
        display: flex;
        justify-content: space-evenly;
        height: 250px;
        padding: 10px 0;
    }
    .card{
        width: 15%;
        height: 100%;
        border-radius: 15px;
        border: 1px solid whitesmoke;
        box-shadow: 2px 2px 8px rgba(0,0,0,0.1);
        position: relative;
        overflow: hidden;
    }


    i{
    font-size: 25px;
  color: lightgrey;
  opacity: 1;
  position: absolute;
  left: 10px;
  bottom: 10px;
    }
 
    .animate {
            -webkit-animation: like 0.3s linear;
            animation: like 0.3s linear;
        }
        .card{
            background-position: center;
            background-size:cover;
        }
        .card:nth-child(1){
            background: url("https://i.pinimg.com/236x/27/44/47/2744472196208148af4788efb7bc13f6.jpg");
        }
        .card:nth-child(2){
            background: url("https://i.pinimg.com/236x/68/00/a4/6800a47e545787831981122c5f8fea39.jpg"); 
        }
        .card:nth-child(3){
            background: url("https://i.pinimg.com/236x/cb/08/1a/cb081a9b6f10a333f4499378ff2f93ca.jpg");   
        }
        .card:nth-child(4){
            background: url("https://i.pinimg.com/236x/20/5b/55/205b550f169aa3a3cae98c159b933aed.jpg");  
        }
        .card:nth-child(5){
            background: url("https://i.pinimg.com/236x/3e/1d/c8/3e1dc8ab45f43891f10845892e1c1970.jpg");
        }
        .card:nth-child(6){
            background: url("https://i.pinimg.com/236x/a8/57/43/a8574399833f7230f6cb509bf8316b89.jpg");
        }
    @-webkit-keyframes like {
            0% {
                -webkit-transform: scale(1);
            }
            50% {
                -webkit-transform: scale(1.5);
            }
            100% {
                -webkit-transform: scale(1);
            }
        }
        
        @keyframes like {
            0% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.5);
            }
            100% {
                transform: scale(1);
            }
        }
  
    @media (max-width:900px){
        .row{
            flex-wrap: wrap;
        }
        .card{
            width: 30%;
            margin-bottom: 15px;
        }
    }
    @media (max-width:600px){
        .row{
            flex-wrap: wrap;
        }
        .card{
            width: 40%;
        }
    }
</style>

<body>
    <?php 
  
    ?>
 <div class="row">
    <div class="card" ondblclick="like(this)">
        <i class="fa-regular fa-heart" onclick="unlike(this)"></i>
        <span></span>
    </div>
    <div class="card" ondblclick="like(this)">
        <i class="fa-regular fa-heart" onclick="unlike(this)"></i>
        <span></span>
    </div>
    <div class="card" ondblclick="like(this)">
        <i class="fa-regular fa-heart" onclick="unlike(this)"></i>
        <span></span>
    </div>
    <div class="card" ondblclick="like(this)">
        <i class="fa-regular fa-heart" onclick="unlike(this)"></i>
        <span></span>
    </div>
    <div class="card" ondblclick="like(this)">
        <i class="fa-regular fa-heart" onclick="unlike(this)"></i>
        <span></span>
    </div>
    <div class="card" ondblclick="like(this)">
        <i class="fa-regular fa-heart" onclick="unlike(this)"></i>
        <span></span>
    </div>

 </div>
 <script>
      function like(a) {
            var icon = a.querySelector("i");
            icon.classList.toggle("fa-solid");
            icon.classList.toggle("fa-regular");
            icon.classList.contains("fa-solid") ? icon.style.color = "white" : icon.style.color = "lightgrey";
            icon.classList.toggle("animate");
        }
        function unlike(a){
            a.classList.toggle("fa-regular");
            a.classList.toggle("fa-solid");
            a.classList.contains("fa-solid") ? a.style.color = "white" : a.style.color = "lightgrey";
            a.classList.toggle("animate");
        }
 </script>
 <?php

 ?>
</body>

</html>