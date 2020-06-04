<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertion Sort</title>
</head>
<body>
    <h4>Insertion Sort</h4>
    <form action="" method="post">
        <input type="text" name="arr" placeholder="Enter Comma Seperated Values..." style="width:200px;" required>
        <input type="submit" name="submit">
    </form>
</body>
</html>
<?php

if(isset($_POST['submit'])){
$arr = explode(",",$_POST['arr']);
    function insertionSort(&$arr, $n) 
    { 
        for ($i = 1; $i < $n; $i++) 
        { 
            $key = $arr[$i]; 
            $j = $i-1; 
          
            while ($j >= 0 && $arr[$j] > $key) 
            { 
                $arr[$j + 1] = $arr[$j]; 
                $j = $j - 1; 
            } 
              
            $arr[$j + 1] = $key; 
        }

    } 
      
   
    $n = count($arr); 
    insertionSort($arr, $n); 
    for ($i = 0; $i < $n; $i++) {
    echo $arr[$i]." , "; 
}    


}


?> 
