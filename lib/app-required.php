<?php
    if(!empty($_GET['page'])){
        $page= trim($_GET['page']);
        if(file_exists($page)){
        require($page);
        }else{
        require('404.php');
        }
    }
    else{
    echo "This anchor tage has no url";
    }
    

function routers($Links)
{
    $ary = scandir('lib');
    echo '<div id="pageContent"></div>';
    for ($i = 2; $i < count($ary); $i++) {
        $SmString = strtolower($ary[$i]);
        $ExFile = str_replace('.php', '', $SmString);
        if (!$ExFile) {
            required('error-404');
        } else {
            switch ($Links) {
                case $ExFile:
                    required($ExFile);
                    break;
                default:
                    break;
            }
        }
    }
}

function required($file)
{
    $dir = "lib";
    $ary = scandir($dir);
    $arylength = count($ary);
    for ($i = 2; $i < $arylength; $i++) {
        $SmString = strtolower($ary[$i]);
        $ExFile = str_replace('.php', '', $SmString);
        switch ($file) {
            case $ExFile:
                require($dir . "/" . $ary[$i]);
                break;
            default:
                break;
        }
    }
}

function index()
{
   echo 'index';
}