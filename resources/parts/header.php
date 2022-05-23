<?php



function activeIf($url)  {
    
    $currentUrl = $_SERVER['REQUEST_URI'];
    if($currentUrl == $url){
        return 'class="nav-link scrollto active"';
    }
    return '';
}

function render_header() {
    echo '  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

 
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class=""></a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a ' .  activeIf("project_php/index.php") . ' style="color: rgb(11, 126, 9);" href="index.php">Faqja Kyresore</a></li>
          <li><a ' .  activeIf("project_php/about.php") . ' href="about.php" style="color: rgb(11, 126, 9);">Rreth Nesh</a></li>
          <li><a href="login.php" style="color: rgb(11, 126, 9);">SEMS</a></li>
        
         
      </nav>

    </div>
  </header>';
}

?>