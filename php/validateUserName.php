<?php

function validateUserName($username){
    //length validation
    $length = strlen($username);
    if($length < 6 || $length > 16){
        echo "The username is not in the right length";
        return false;
    }
    //- validation
    $occurrences = substr_count($username, "-");
    if($occurrences !== 1){
        echo "The username must have at least one -";
        return false;
    }
    //start with a letter
    if(!ctype_alpha($username[0])){
        echo "The username does not starts with a letter";
        return false;
    }
    //Not end with -
    if($username[strlen($username) - 1] === "-"){
        echo "The username should not fisnish with -";
        return false;
    }
    $username = str_replace("-","",$username);
    //aphanumeric validation
    if(!ctype_alnum($username)){        
        echo "The username is not alphanumeric";
        return false;
    }

    echo "<b>$username</b> is a valid username \o/";
    return true;
}

$result = validateUserName("h-olaaa123422256");
echo $result;

?>