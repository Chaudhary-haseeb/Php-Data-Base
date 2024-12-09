<?php

include "Controller/Index.php";









$page = isset($_GET['page']) ? $_GET['page'] : 'home';

if ($page === 'home') {
    include "include/home.php";
} 
elseif ($page === 'navbar') {
    include "include/navbar.php";
}
 elseif ($page === 'about') {
    include "pages/about.php";
}
elseif ($page === 'footer') {
    include "include/footer.php";
}

 else {
    include "include/404.php";
    }




?>
 


