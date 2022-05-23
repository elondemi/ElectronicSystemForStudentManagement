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
#change_p{
  display:none;
}

           </style>
    </head>  
    <body>     
        <div class="top">
          <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>
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
            <a href="dorezo_lenden.php">Dorëzo detyrën</a>
            <a href="vleresimet.php">Vlerësimet</a>
            <a href="../../FAQ.php">FAQ</a>
            <a href="profili.php">Profili</a>
          </div>
          
          
          <!-- Programimi në internet, DB, SO, Algoritmet. -->
          <h1 style="margin-left:300px;">Profili</h1>
          <hr>
          <br>
                
          <div class="profili">  
              <br>
              <br>
            <img class="foto" src="assets/img/slide/prof_img1.jpg" alt="foto" style="width: 150px"><br>
              <br>
            <form action="/xxxxx.php" method="post">
              <span style="margin-left: 165px;"><label for="name_student"></label>
              <input type="text" id="name_student" name="name_student"><br></span>
              <p style="color:rgb(207, 204, 204);font-size:14px;">Fakulteti i Inxhinierisë Elektrike dhe Kompjuterike </p><br><br>
             <span style="margin-left:50px;"><label for="nr_personal">Nr Personal</label><hr>
              <input type="text" id="nr_personal" name="nr_personal"><br><br></span>
              <span style="margin-left:50px;"> <label for="datelindja">Datelindja</label><hr>
              <input type="text" id="datelindja" name="datelindja"><br><br></span>
              <span style="margin-left:50px;"><label for="Gjinia">Gjinia</label><hr>
              <input type="text" id="Gjinia" name="Gjinia"><br><br></span>
            
            </form>


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


              <button id="show">Ndysho Fjalekalimin</button>
             <input type="text" id="change_p" name="change_p"><br><br>
              
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
      
          $("#show").click(function(){
            $("change_p").show();
          });
        
        </script>

    </body>
</html>';

echo $html;

?>