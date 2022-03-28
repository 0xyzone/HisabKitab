<?php
function url(){
    if(isset($_SERVER['HTTPS'])){
        $protocol = ($_SERVER['HTTPS'] && $_SERVER['HTTPS'] != "off") ? "https" : "http";
    }
    else{
        $protocol = 'http';
    }
    return $protocol . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
}
function site(){
    if(isset($_SERVER['HTTPS'])){
        $hprotocol = ($_SERVER['HTTPS'] && $_SERVER['HTTPS'] != "off") ? "https" : "http";
    }
    else{
        $hprotocol = 'http';
    }
    return $hprotocol . "://" . $_SERVER['HTTP_HOST'] .'/hisabkitab/public/';
}
?>

