<?php
if(isset($_GET['page'])){
    $page = $_GET['page'];
    if(($page !== 'studywork') && ($page !== 'otherprojects')){
        $page = 'aboutme';
    }
}else{
    $page = 'aboutme';
}

define('ROOT', $_SERVER['DOCUMENT_ROOT']);
ini_set('include_path', ROOT . '/subpages/');

?>
    
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style/reset.css">
        <link rel="stylesheet" type="text/css" href="style/stylesheet.css">
        <link rel="stylesheet" href="https://use.typekit.net/cbx2oqw.css">
        <title>Simon Gørtz</title>
    </head>
    
    
    <body>
        <div id="header" class="<?php echo $page;?>">
            <ul id="topMenu">
               
                <li><a class="orange" href="index.php">About me</a></li>
                <li><a class="green" href="index.php?page=studywork">Study work</a></li>
                <li><a class="blue" href="index.php?page=otherprojects">Other projects</a></li>
            </ul>
        </div>
        
        <div id="content">
            <?php
            
            include($page . '.php');
            
            ?>
        </div>
        <div id="footer">
            test
        </div>
        
        
    </body>
</html>