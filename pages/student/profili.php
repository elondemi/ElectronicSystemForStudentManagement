<?php

$html = '<!DOCTYPE html>
<html>
    <head>
        <title>Studentpage</title>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
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
.profili{
  position: relative;
  left: -20px;
    background-color: rgba(16, 52, 77, 0.644);
    width:501px;
    height:589px;
    margin-left:100px;
    margin-bottom: 100px;
    border-style:solid;
    border-color: rgb(1, 15, 53);
    color:white;
}
.profili2{
  position: relative;
  top: -695px;
  left: 40%;
    color:white;
    background-color: rgba(16, 52, 77, 0.644);
    margin-right:8px;
     width: 890px;
     height:589px;
     margin-bottom: 100px;
     border-style:solid;
    border-color: rgb(1, 15, 53);
}
.foto{
     margin-left:179px;
     border-radius: 15%;
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
          <h1 style="margin-left:300px;">Profili</h1>
          <hr>
          <br>
                
          <div class="profili">  
              <br>
              <br>
            <img class="foto" src="../../assets/images/slide/prof_img1.jpg" alt="foto" style="width: 150px">

            <p style="text-align: center;color:rgb(253, 253, 253)">Emri i studentit</p>
            <p style="text-align: center;color:rgb(250, 246, 246);font-size: 12px;">200716100003 Fakulteti i Inxhinierisë Elektrike dhe Kompjuterike</p>
            <hr>
            <br>

            <p style="text-align: left;color:#ffffff">Nr.Personal</p>
            <p style="text-align: left;color:#ffffff">1234567</p>
            

            <p style="text-align: left;color:#ffffff">Datelindja</p>
            <p style="text-align: left;color:#ffffff">1.1.2002</p>
            

            <p style="text-align: left;color:#ffffff">Gjinia</p>
            <p style="text-align: left;color:#ffffff">Mashkull</p>


          </div>
          <div class="profili2">
            <p style="text-align: left;color:rgb(255, 246, 246);margin-left:35px;margin-top:15px;font-weight: bold;font-size: 25px;">Te Dhenat e Studentit </p>
            <hr>
            <br>
            <br>
            <div style="margin-left:100px;margin-top: 60px;">
            <form action="/xxxxx.php" method="post">
              <label for="username">Username:</label>
              <input type="text" id="username" name="username"><br><br>
              <label for="email_z">E-mail Zyratar:</label>
              <input type="text" id="email_z" name="email_z"><br><br>
              <label for="email">E-mail :</label>
              <input type="text" id="email" name="email"><br><br>
              <label for="telefoni">Telefoni :</label>
              <input type="text" id="telefoni" name="telefoni"><br><br>
              <label for="adresa">Adresa :</label>
              <input type="text" id="adresa" name="adresa"><br><br>
              <input type="radio" id="show" name="Ndysho" value="Ndysho">
                <label for="Ndysho">Ndysho</label><br>
                  <p>Fjalekalimi juaj i ri</p>
              <button>Modifiko </button>
              
            </form>
            </div>
            </div>
          </div>

         


         
       
          
          <script>
          function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
          }
          
          function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
          }
          </script>
          <script>
            $(document).ready(function(){
              $("button").click(function(){
                 alert("Te dhenat u modifkuan me sukses");
                });
              });
            </script>

    </body>
</html>';

echo $html;

?>