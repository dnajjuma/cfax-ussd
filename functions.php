<?php

function main_menu(){
    $text = "Welcome to CFA\nPlease Reply with\n1. My PIN\n2. Check balances\n3. Request Statement";
    ussd_proceed($text);
}

//tell app that the session is continuing so accept user input
function ussd_proceed($text){
    echo "🖐".$text;
}

function ussd_stop($text){
    echo "END".$text;
}

?>