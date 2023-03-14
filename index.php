
<?php require('lib/app-required.php');
required('app-header');
//isset($_SERVER['PATH_INFO']) ? routers($Links = str_replace("/", "", $_SERVER['PATH_INFO'])) : index();
echo $_GET['page']; 
?>

    <div id="pageContent"></div>

    <script src="jquery.min.js"></script>
    <?php
    if (empty($_SERVER['PATH_INFO']))
       echo '<script type="text/javascript" src="redirect-ajax.js"></script>';
