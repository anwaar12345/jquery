<?php

//  $name = addcslashes($_POST['name']," ");
//  $name = strip_tags($_POST['name']);
// $name = $_POST['name'];
$name = htmlentities($_POST['name']);
// $name =  htmlspecialchars($_POST['name']);

// $name =  addcslashes($_POST['name']," ");
// $name = stripslashes($_POST['name']);
if(empty($name)){
    die("required");
}else{

    echo "from Ajax Data --- $name";

}



?>