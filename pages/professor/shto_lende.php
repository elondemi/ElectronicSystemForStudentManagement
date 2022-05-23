<?php 

    require "../../resources/utils/db.php";

    $html = '<!DOCTYPE html>
    <html>
    <head>
        <title></title>
        <link rel="stylesheet" type="text/css" href="../../resources/assets/css/login.css">
    </head>
    <body>
        <div id="login-box">
            <div class="left-box">
                <h1>Shto lëndë</h1>
                <form action="../../resources/utils/db.php"  method="post">
                    <input type="text" name="emri_lendes" placeholder="Emri i lëndës"/>
                    <input type="text" name="pershkrimi_lendes" placeholder="Pershkrimi i lëndës"/>
                    <input type="text" name="ects" placeholder="ECTS"/>
                    <input type="text" name="semestri" placeholder="Semestri"/>
            </div>		
            <div class="right-box">
                <span class="signinwith">Ketu mund te shtoni </br> lenden! </span>
                <input type="submit" name="shto_lenden" class="social facebook"  value="Shto lëndën"></input> 
            </form>
            </div>
        </div>
    </body>
    </html>';

    echo $html;


?>