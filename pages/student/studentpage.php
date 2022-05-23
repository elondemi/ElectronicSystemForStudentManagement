<?php

require "../../resources/parts/header_student.php";


$html = '<!DOCTYPE html>
<html>
    <head>
        <title>Studentpage</title>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
        <link href="../../resources/assets/css/student.css" rel="stylesheet">
    </head>  
    <body>'     
      
          
         $html2='
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

echo $html1;
render_header();
echo $html2;

?>