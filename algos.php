




<?php
error_reporting(0);
if(isset($_POST['submit'])){

$option = $_POST['option'];
$arr = explode(",",$_POST['arr']);

//bubble sort

function bubble_sort($arr) {
    $size = count($arr);
    for ($step=0; $step < $size; $step++) {
        for ($j=0; $j < $size - 1 - $step; $j++) {
            if ($arr[$j+1] < $arr[$j]) {
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
            }
        }
    }
    return $arr;
}


//insertion sort

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
      
   
if($option === "bubble"){
    $start_time = microtime(true); 
 
   echo "<h4> Bubble Sort </h4>";
    print("Before sorting: ");
for($i = 0;$i < count($arr); $i++){
    echo $arr[$i]." , ";
 
}

$arrs = bubble_sort($arr);
print("After sorting by using bubble sort ");
for($i = 0;$i < count($arrs); $i++){
    echo $arrs[$i]." , ";
} 
$end_time = microtime(true); 
$execution_time = ($end_time - $start_time)/60; 
echo "<br/> Execution time of string = ".$execution_time." sec"; 

}


if($option === "insertion"){
    $start_time = microtime(true); 

    $n = count($arr); 
    insertionSort($arr, $n);

    echo "<h4> Insertion Sort </h4>";
    echo "<h4> After sorting by using Insertion sort </h4>";
    for ($i = 0; $i < $n; $i++) {
    echo $arr[$i]." , "; 
}    
$end_time = microtime(true); 
$execution_time = ($end_time - $start_time)/60;  
echo "<br/><br/> Execution time of string = ".$execution_time." sec"; 

}



}else{
    $option = "";
    $arr = "";
    
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Algorithms</title>
</head>
<body>
<form action="" method="post" style="margin:60px;">
        <input type="text" name="arr"  placeholder="Enter Comma Seperated Values..." style="width:200px;" required value="<?php echo implode(",",$arr); ?>">
        <input type="radio" value="bubble" name="option" <?php if($option==="bubble") echo "checked";?>> Buble Sort Algorithm | <input type="radio" value="insertion" name="option" <?php if($option==="insertion") echo "checked";?>> Insertion Sort Algorithm
        <input type="submit" name="submit">
    </form>
</body>
</html>