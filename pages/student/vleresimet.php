<?php
$html ='<!DOCTYPE html>
<html>
    <head>
        <title>Studentpage</title>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
        <style>
            img {
              border-radius: 50%;
              margin-left: 80px;
              
            }
            .sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: rgba(16, 52, 77, 0.644);
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 18px;
  color: #f3f3f3;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
p{
    color:white;
    font-size: 18px;
    text-align: center;
    margin-bottom: 20px;
}
body{
    background-color: rgb(168, 167, 167);
}
.top{
     height:100px;
     background-color:rgba(16, 52, 77, 0.644);
     
}
.logo{
    float:right;
}
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
  color:white;
  font-weight: bold;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr{background-color: rgba(16, 52, 77, 0.644);}



#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: rgba(16, 52, 77, 0.644);
  color: white;
}



            </style>
    </head>  
    <body>     
        <div class="top">
          <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>
          <!-- e ueb sajtit duhet të përmbaj patjetër këto meny: Home,
          Lëndët, Detyrat e mia, Vlerësimet, Dorëzo detyrën, FAQ. Profili, -->
          <img class="logo" src="assets/img/logo.png" alt="Logo" style="width:110px">
        </div>    
         <br><br>
         <div id="mySidenav" class="sidenav">
            <img src="assets/img/slide/prof_img1.jpg" alt="Avatar" style="width: 100px">
            <br><br>
            <form action="xxxx.php" method="post">
              <span style="margin-left:25px"><input type="text" name="name_student"><br></form></span>
            <p>Fakulteti i Inxhinierisë Elektrike dhe Kompjuterike</p>
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="studentpage.html">Home</a>
            <br><br>
            <p class="asd">Menyte</p>
          
            <a href="lendet.html">Lëndët</a>
            <a href="detyrat.html">Detyrat e mia</a>
            <a href="dorezodet.html">Dorëzo detyrën</a>
            <a href="vleresimet.html">Vlerësimet</a>
            <a href="FAQ.html">FAQ</a>
            <a href="profili.html">Profili</a>
          </div>
  <!-- Tek menyja “Vlerësimet” studenti do të ketë mundësi të shohë vlerësimin që i është bërë për
secilën detyrë (edhe këtu të implementohen filterat sipas lëndës dhe semestrit). -->
          
          <h1 style="margin-left:300px;">Vlerësimet</h1><hr><br>
          <table id="customers">
            <tr>
              <th>Detyra</th>
              <th>Lënda</th>
              <th>Semestri</th>
              <th>Vlerësimi</th>
            </tr>
           
          
          </table>




       


         
       
          
          <script>
          function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
          }
          
          function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
          }
          </script>

    </body>
</html>';

echo $html;

?>