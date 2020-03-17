<?php


// $name = $_POST['name'];
// $name = htmlentities($_POST['name']);
// $name =  htmlspecialchars($_POST['name']);
// $name = $_POST['name'];
// // $name =  addcslashes($_POST['name']," ");
// // $name = stripslashes($_POST['name']);
// if(empty($name)){
//     die("required");
// }else{

//     echo "from Ajax Data --- $name"
// }

$name = $_POST['name'];
 function testinput($name)
{

if(!empty($name)){

$name = htmlentities($name);

$name = addcslashes($name," ");

$name = trim($name);

//$name =  mysqli_real_escape_string($name);
// $name = addcslashes($name," ");

// $name = strip_tags($name);

// $name = htmlspecialchars($name);

// $name = stripslashes($name);


return "data from AJAX -> ".$name;

}elseif(empty($name)){
    echo "Fill Out The Field";
}
}
echo testinput($name);
?>