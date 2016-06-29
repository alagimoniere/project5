<?php include("top.html"); ?>

<?php

$input = $_POST["name"] ;

$file = fopen("singles.txt", "r");

$found = FALSE;
$person;
while(!feof($file) && $found == FALSE) {
    $inputInfo = fgets($file);
    $inputInfoArray = explode(",", $inputInfo);

    if(strcmp($input, $inputInfoArray[0]) == 0)
    {
        $found = TRUE;
        $person = $inputInfoArray;
        echo $inputInfo . "<br>";
    }
}

fclose($file);
$file = fopen("singles.txt", "r");

while(!feof($file)) {
    $matchInfo = fgets($file);
    $matchInfoArray = explode(",", $matchInfo);

    $oppositeGender = FALSE;
    $compatibleAges = FALSE;
    $favoriteOS = FALSE;
    $type = FALSE;

    if(strcmp($person[1],"M") == 0)
    {
        if(strcmp($matchInfoArray[1], "F") == 0)
        {
            $oppositeGender = TRUE;
        }
    }

    if(strcmp($person[1], "F") == 0)
    {
        if(strcmp($matchInfoArray[1], "M") == 0)
        {
            $oppositeGender = TRUE;
        }
    }

    if($matchInfoArray[2] >= $person[5] && $matchInfoArray[2] <= $person[6])
    {
        $compatibleAges = TRUE;
    }

    if($matchInfoArray[4] == $person[4])
    {
        $favoriteOS = TRUE;
    }

    $personType = str_split($person[4]);

    for($temp = 0; $temp < strlen($matchInfoArray[4]); $temp++)
    {
        if(stripos($matchInfoArray[4], $personType[$temp]) == $temp)
        {
            $type = TRUE;
            break;
        }
    } 

    //echo $matchInfo . "-------" . $oppositeGender . $compatibleAges . $favoriteOS . $type . "<br>";
    if($oppositeGender == TRUE && $compatibleAges == TRUE && $favoriteOS == TRUE && $type == TRUE)
    {
        echo "<br>Matches<br>";
        echo $matchInfo . "<br>";
    }
}
 
    ?>

<?php include("bottom.html"); ?>
