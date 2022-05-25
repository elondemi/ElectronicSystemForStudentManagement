<?php
require "../../resources/parts/header_student.php";
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Studentpage</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <link href="../../resources/assets/css/student.css" rel="stylesheet">
    <script src="../../resources/assets/js/student.js"></script>
  </head>  
  <body>     
    <?php render_header() ?>
     <h1 style="margin-left:300px;margin-bottom: 40px;">Dorëzo Detyrën</h1><hr>
        <form action="xxxx.php" method="POST">
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
                   <option value="Baza e te dhenave" name ="Baza_te_dhenave">Baza e te dhenave</option>
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
    </body>
</html>
