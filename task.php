<?php
$students=["name" => "rabin", "email" => "rabin.karki@hazesoft.co", "phone" => "9815349260", "class" => "higher", "course" => "bachelor" ];

$email="rabinkarki-gmail.com";
for($i=0;$i<10;$i++){
    if ($email=="rabinkarki@gmail.com"){
        echo "email is valid<br>";}
        else{
            echo "email is invalid <br>";
            break;
        }
    }
    
    function passarray(){
        $students=["name" => "rabin", "email" => "rabin.karki@hazesoft.co", "phone" => "9815349260", "class" => "higher", "course" => "bachelor" ];
    if ($students["email"]=="rabin.karki@hazesoft.co"){
        echo "<pre>";
        print_r($students);
        echo "</pre>";

    }
        else{
            echo "email is incorrect";
        }
    }
    passarray();

?>