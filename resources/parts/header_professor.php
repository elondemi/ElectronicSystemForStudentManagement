<?php



function activeIf($url)  {
    
  $currentUrl = $_SERVER['REQUEST_URI'];
  if($currentUrl == $url){
      return 'class="nav-link scrollto active"';
  }
  return '';
}



function render_header($professor) {
    echo '   <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

 
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="../../index.php" class="logo"><img src="../../resources/assets/images/logo.png" alt="" class=""></a>
      <form >
      <label name="emri_profesorit" >  ' . $professor->getProfessor_name() . " " . $professor->getProfessor_surname() . ' </label>
      </form>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a ' .  activeIf("/projekti_PI/pages/professor/lendet.php") . ' style="color: rgb(11, 126, 9);" href="lendet.php">Lendet </a></li>
          <li><a ' .  activeIf("/projekti_PI/pages/professor/dorezimet.php") . 'href="dorezimet.php" style="color: rgb(11, 126, 9);">Dorezimet</a></li>
          <li><a ' .  activeIf("/projekti_PI/pages/professor/vleresimet.php") . ' href="vleresimet.php" style="color: rgb(11, 126, 9);">Vleresimet</a></0li>
          <li><a ' .  activeIf("/projekti_PI/FAQ.php") . ' href="../../FAQ.php" style="color: rgb(11, 126, 9);">FAQ</a></li>
          <li><a  href="/projekti_PI/logout.php" style="color: rgb(11, 126, 9);">Logout</a></li>


        
         
      </nav>

    </div>
  </header>';
}

?>