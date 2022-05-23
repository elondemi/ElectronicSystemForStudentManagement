<?php
$html = '<!DOCTYPE html>
<html>
    <head>
        <title>Studentpage</title>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
        <link href="../../resources/assets/css/student.css" rel="stylesheet">
    </head>  
    <body>     
        <div class="top">
          <!-- e ueb sajtit duhet të përmbaj patjetër këto meny: Home,
          Lëndët, Detyrat e mia, Vlerësimet, Dorëzo detyrën, FAQ. Profili, -->
          <img class="logo" src="../../resources/assets/images/logo.png" alt="Logo" style="width:110px">
        </div>    
         <br><br>
         <div id="mySidenav" class="sidenav">
            <img src="../../resources/assets/images/slide/prof_img1.jpg" alt="Avatar" style="width: 100px">
            <br><br>
            <form action="xxxx.php" method="post">
               <input type="text" name="name_student"><br></form>
            <p>Fakulteti i Inxhinierisë Elektrike dhe Kompjuterike</p>
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="#">Home</a>
            <br><br>
            <p class="asd">Menyte</p>
          
            <a href="lendet.php">Lëndët</a>
            <a href="detyrat.php">Detyrat e mia</a>
            <a href="dorezo_lenden.php">Dorëzo detyrën</a>
            <a href="vleresimet.php">Vlerësimet</a>
            <a href="../../FAQ.php">FAQ</a>
            <a href="profili.php">Profili</a>


          </div>
          
         
          <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>
          
          <script>
          function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
          }
          
          function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
          }
          </script>
<div class="GrafikuN">
    <h1>...Grafika e Notav</h1>
    <hr>
    <br><br>
<canvas id="myChart" style="width:100%;max-width:800px"></canvas>

<script>
    var xValues = ["10", "9", "8", "7", "6"];
    var yValues = [4, 2, 3, 1,0];
    var barColors = [
      "#b91d47",
      "#00aba9",
      "#2b5797",
      "#e8c3b9",
      "#1e7145"
    ];
    
    new Chart("myChart", {
      type: "pie",
      data: {
        labels: xValues,
        datasets: [{
          backgroundColor: barColors,
          data: yValues
        }]
      },
      options: {
        title: {
          display: true,
          text: "Rrjedhshmeria e Notave"
        }
      }
    });
    </script>
    </div>
    </body>
</html>';

echo $html;

?>