<?php

if(isset($_SESSION["id"])){ // User connected personalized navbar
  echo "
    <nav class='navbar navbar-expand-lg navbar-light sticky-top'>
      <a class='brandstyle' href='/'>Booklet</a>
      <div class='collapse navbar-collapse justify-content-end' id='navbarNav'>
        <ul class='navbar-nav mr-auto'>
          <li class='nav-item active'>
            <a class='linknav' href='/library.php'>BIBLIOTHEQUE</a>
          </li>
          <li class='nav-item'>
            <a class='linknav' href='#'>MON FIL</a>
          </li>
          <li class='nav-item'>
            <a class='linknav' href='backend/auth/logout.php'>DECONNEXION</a>
          </li>
        </ul>
      </div>
    </nav>
    ";} 

else { // User not connected navbar
  echo "
    <nav class='navbar navbar-expand-lg navbar-light sticky-top'>
      <a class='brandstyle' href='/'>Booklet</a>
      <div class='collapse navbar-collapse justify-content-end' id='navbarNav'>
        <ul class='navbar-nav mr-auto'>
          <li class='nav-item active'>
            <a class='linknav' href='/login.php'>CONNEXION</a>
          </li>
          <li class='nav-item'>
            <a class='linknav' href='/signup.php'>INSCRIPTION</a>
          </li>
        </ul>
      </div>
    </nav>
    ";}
?>