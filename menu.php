<?php
    $curpage = basename ($_SERVER['PHP_SELF']);
?> 

<header>
<link rel="stylesheet" type="text/css" href="css/styles.css">
</header>
<nav>
    <a href="home.php" <?php 
                        // hvis den nuværende side er home.php, aktiveres class'en kaldt "active"
                        if ($curpage == 'home.php'){echo 'class="active"';} ?>>Home</a>
    <a href="about.php" <?php if ($curpage == 'about.php'){echo 'class="active"';} ?>>About</a>
    <a href="projects.php" <?php if ($curpage == 'projects.php'){echo 'class="active"';} ?>>Projects</a>
</nav>
