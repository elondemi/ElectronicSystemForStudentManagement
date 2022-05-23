<?php 

$html = '<!DOCTYPE html>
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
            <a href="studentpage.php">Home</a>
            <br><br>
            <p class="asd">Menyte</p>
          
            <a href="lendet.php">Lëndët</a>
            <a href="detyrat.php">Detyrat e mia</a>
            <a href="dorezo_detyren.php">Dorëzo detyrën</a>
            <a href="vleresimet.php">Vlerësimet</a>
            <a href="../../FAQ.php">FAQ</a>
            <a href="profili.php">Profili</a>
          </div>
          <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>
          
          <!-- Programimi në internet, DB, SO, Algoritmet. -->
          <h1 style="text-align: center;">Lëndët e Studentit</h1>
          <hr>
          <br><br><br>

          <table id="customers">
            <tr>
              <th>Lëndët</th>
              <th>Profesori</th>
              <th>Lista e Detyrave</th>
            </tr>
            <tr>
              <td>Programimi në internet</td>
              <td>Dhurate Hyseni</td>
              <th><a href="lista.php" style="color:white;">Detyrat </a></th>
              
            </tr>
            <tr>
              <td>Baza e të Dhënave</td>
              <td>Dhurate Hyseni</td>
              <th><a href="lista.php"style="color:white;">Detyrat </a></th>
            </tr>
            <tr>
              <td>Programimi në Objekte</td>
              <td>Dhurate Hyseni</td>
              <th><a href="lista.php"style="color:white;">Detyrat </a></th>
            </tr>
            <tr>
              <td>Algoritmet dhe Struktura</td>
              <td>Dhurate Hyseni</td>
              <th><a href="lista.php"style="color:white;">Detyrat </a></th>
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