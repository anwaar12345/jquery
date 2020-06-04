<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bubble Sort</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="arr"  placeholder="Enter Comma Seperated Values..." style="width:200px;" required>
        <input type="submit" name="submit">
    </form>
</body>
</html>

<?php

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
 

    
 
if(isset($_POST['submit'])){
$arr = explode(",",$_POST['arr']);



 
//$arr = array(1,3,2,8,5,7,4,0);
 
print("Before sorting: ");
for($i = 0;$i < count($arr); $i++){
    echo $arr[$i]." , ";
 
}

$arrs = bubble_sort($arr);
print("After sorting by using bubble sort ");
for($i = 0;$i < count($arrs); $i++){
    echo $arrs[$i]." , ";
 
}
} 
?> 