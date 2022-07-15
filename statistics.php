<!DOCTYPE html>
<html>

<head>
    <style>
        .container {
            border-width: 0 0 1px 1px;
            border-style: solid;
            border-color: lightgrey;
            position: relative;
            width: 250px;
            height: 200px;
            margin: 100px;
            display: flex;
            align-items: flex-end;
            justify-content: space-around;
        }
        
        .red,
        .green,
        .blue,
        .black {
            width: 15%;
            height: 100px;
            color: white;
            box-sizing: border-box;
            text-align: center;
            padding: 10px;
        }
        
        .red {
            background-color: red;
        }
        
        .green {
            background-color: green;
        }
        
        .blue {
            background-color: blue;
        }
        
        .black {
            background-color: black;
        }
        .color{
            text-align: center;
            box-sizing: border-box;
            color: white;
        }
        .container div {
            animation: gro 1s ease-in-out;
        }
        @keyframes grow{
            from{height: 0%;}
            to{height: 100%;}
        }
        .pointers{
            position: absolute;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            text-align: end;
            align-items: center;
            width: 10px;
            font-size: 14px;
            color: grey;
            left: -10%;
        }
    </style>
</head>

<body>
    <?php
   $conn = new mysqli("localhost:3307","root","","statistics");
   $sql = "select * from colors";
   $result = $conn->query($sql);
   $conn->close();
 ?>
    <div class="container">
        <div class="pointers">100 90 80 70 60 50 40 30 20 10 0</div>
        <?php while(  $row = $result->fetch_assoc()){ ?>   
        <div class="color"><span><?= $row['name']."<br>".$row['level'].'%'; ?></span></div>
        <?php } ?>
    </div>
    <script>
   var col =  document.getElementsByClassName("color");
   col[0].style.height= "100px";
   col[0].style.backgroundColor="red";
   col[1].style.height="200px";
   col[1].style.backgroundColor="green";
   col[2].style.height="200px";
   col[2].style.backgroundColor="blue";
   col[3].style.height="80px";
   col[3].style.backgroundColor="black";
   </script>
</body>

</html>