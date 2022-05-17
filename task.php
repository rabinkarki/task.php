<?php
$students=[["name" => "rabin", "email" => "rabin.karki@hazesoft.co", "phone" => "9815349260", "class" => "higher", "course" => "bachelor" ],
["name" => "pawan", "email" => "rabinkarki@gmail.com", "phone" => "98826377232", "class" => "lower", "course" => "science" ] ];


    
    function passarray(){
        global $students;
        for($i=0;$i<10;$i++){
            
    if ( $students[1]["email"]=="rabinkarkigmail.com"){
        echo "email is valid<br>";}
        else{
            echo "email is invalid <br>";
            break;
        }}
    
        
       
    if($students[0]["email"]=="rabin.karki@hazesoft.co"){
        echo "<pre>";
        print_r($students[0]);
        echo "</pre>";

    }
        else{
            echo "email is incorrect";
        }
    }
    passarray();
?>
