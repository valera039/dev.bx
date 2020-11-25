<?php

function readFromConsole($input){
    if ($input === 'stop'){
        return null;
    }
    else if($input === 'true'){
        $input = true;
    }
    else if($input === 'false'){
        $input = false;
    }
    else if(is_numeric($input)){
        $input = +$input;
    }
    else{
        $input = (string)$input;
    }
    return $input;
}

