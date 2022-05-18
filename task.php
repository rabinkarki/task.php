<?php
$students=[["name" => "rabin", "email" => "rabin.karki@hazesoft.co", "phone" => "9815349260", "class" => "higher", "course" => "bachelor" ],
["name" => "pawan", "email" => "rabinkarki@gmail.com", "phone" => "98826377232", "class" => "lower", "course" => "science" ] ];

// $lens=count($students);
    

    function passarray($students){

        echo "<table border='2px'> <tr>";


    
 foreach($students as $key=>$value){
    
    if (!filter_var($value['email'], FILTER_VALIDATE_EMAIL)) {
        echo "email is invalid";
    break;

    }
    
            //  if( $value['email'] != 'rabin.karkigv@hazesoft.co' ){
            //      break;
            //  }
            if($value['email'] == 'rabin.karki@hazesoft.co'){
                echo "<td>".$value['name']."</td>";
                echo "<td>".$value['email']."</td>";
                echo "<td>".$value['phone']."</td>";
                echo "<td>".$value['class']."</td>";
                echo "<td>".$value['course']."</td>";     
            }
                //        else{
                //  echo "email is incorrect";
    
            }
            
        
        echo "</tr>";
        echo "</table>";
    }
        
        
       
     passarray($students);

?>
