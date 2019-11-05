
<?php
$probabilities = array(
    "Dallas" => 50,
    "Toronto" => 25,
    "Green Bay" => 15,
    "St Louis" => 10,
    
);


$random = array_unique($probabilities);

foreach($probabilities as $key => $value) {
    for($i = 0; $i < $value; $i++) {

        $random[] = $key;
    }
}

shuffle($random);

foreach($random as $value){
    
        if ( $random == $value) {
           
          break;
        }

    echo $value . "<br>";
}

?>
