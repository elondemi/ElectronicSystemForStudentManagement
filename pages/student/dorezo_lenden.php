<?php
$html = '
<!DOCTYPE html>
<html>
    <head>
        <title>Studentpage</title>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
        <link href="../../resources/assets/css/student.css" rel="stylesheet">


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
            <a href="dorezo_lenden.php">Dorëzo detyrën</a>
            <a href="vleresimet.html">Vlerësimet</a>
            <a href="FAQ.html">FAQ</a>
            <a href="profili.html">Profili</a>
          </div>
          
          
          <h1 style="margin-left:300px;">Dorëzo Detyrën</h1><hr>
 <br><br><br><br>
          
                  <form action="xxxx.php" method="post">
                    <table id="customers">
                      <tr>
                        <th><label for="lenda">Zgjedh Lenda</label></th>
                        <th><label for="semestri">Zgjedh  Semestrin</label></th>
                        <th><label for="detyra">Zgjedh  Detyren</label></th>
                        <th><label for="detyra">Ngarko Detyren</label></th>
                        <th><label for="dorezo">Dorezo</label></th>
                        
                      </tr>  
                       <tr>
                         <td>
                          <select name="lenda" id="lenda">
                            <option value="Programimi" name="Programimi">Programimi</option>
                           <option value="Baza e te dhenave" name ="Baza_ete_dhenave">Baza e te dhenave</option>
                           <option value="Sistemet Operative" name="Sisteme_Operative">Sistemet Operative</option>
                           <option value="Algoritme" name="Algoritme">Algorimte</option>
                           </select>
                         </td>
                         <td>
                          <select name="semestri" id="semestri">
                            <option value="sems 3" name="semestri_3">Semestri-3</option>
                           <option value="sems 4"  name="semestri_4">Semestri-4</option>
                           <option value="sems 5"  name="semestri_5">Semestri-5</option>
                           <option value="sems 6"  name="semestri_6">Semestri-6</option>
                           </select>
                         </td>
                         <td>
                          <select name="detyra" id="detyra">
                            <option value="detyra1" name="detyra_1">Detyra 1</option>
                           <option value="detyra2"  name="detyra_2">Detyra 2</option>
                           <option value="detyra3"  name="detyra_3">Detyra 3</option>
                           <option value="detyra4"  name="detyra_4">Detyra 4</option>
                           </select>

                         </td>
                         <td>
                          <input type="file" id="myFile" name="filename">
                         </td>
                         <td>
                            <input type="submit" id="dorezo" name="dorezo" value="Dorezo">
                         </td>
                       </tr>
                
                   
                  </form>
                
          <script>
          function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
          }
          
          function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
          }
          </script>

    </body>
</html>
';

echo $html;

?>