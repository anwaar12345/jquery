<?php
if(isset($_POST['submit'])){

    class Node {

          public $info;
          public $left;
          public $right;
        

          public function __construct($info) {
                 $this->info = $info;
                 $this->left = NULL;
                 $this->right = NULL;
               
          }

          public function __toString() {

                 return "$this->info";
          }
    }  


    class SearchBinaryTree {

          public $root;

          public function  __construct() {
                 $this->root =  new Node(null);
                 

          }
  
          public function create($info) {
              
                 if($this->root == NULL) {

                    $this->root = new Node($info);

                 } else {
  
                    $current = $this->root;

                    while(true) {

                          if($info < $current->info) {
                         
                                if($current->left) {
                                   $current = $current->left;
                                } else {
                                   $current->left = new Node($info);
                                   break; 
                                }

                          } else if($info > $current->info){

                                if($current->right) {
                                   $current = $current->right;
                                } else {
                                   $current->right = new Node($info);
                                   break; 
                                }

                          } else {

                            break;
                          }
                    } 
                 }
          }

          public function traverse() {

            $this->inorder($this->root);
               
          } 

          private function inorder($node) {

                          if($node->left) {
                             $this->inorder($node->left); 
                          } 

                          echo $node. " ";

                          if($node->right) {
                             $this->inorder($node->right); 
                          } 
          }
          public function hasNode() {
            return (bool)$this->root->right;

         }
          public function printTree() {
            if ($this->hasNode()) {
               $current_level[] = $this->root->right;
               
               $next_level = array();
               while (!empty($current_level)) {
                  $node = array_shift($current_level);
                  if ($node) {
                     array_push($next_level, $node->left, $node->right);
                     echo $node . ' ';
                  }
                  if (empty($current_level) && !empty($next_level)) {
                     echo "\n";
                     list($current_level, $next_level) = array($next_level, $current_level);
                  }
               }
            }
         }


          

    } 
               $arr = explode(",",$_POST['arr']);

               $tree = new SearchBinaryTree();
               for($i=0,$n=count($arr);$i<$n;$i++) {
                   $tree->create($arr[$i]);
               }


    echo "<h2>Input: ", implode(",",$arr), "</h2>";

    

    echo"<h1>Inorder</h1>"; 
    $tree->traverse();

echo "<h1>Binary Tree</h1>";
$tree->printTree(); 
}
  
?>




<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Tree Sort</title>
</head>
<body>
<h3>In Tree Sort We always Follow Binary Search Tree and for Travesing we always Do Inorder Traversing</h3>
<p><b>What is In-Order Traversing ?</p><br>In order traversing is a Technique For Traversing Tree in this we do visit our left node and the node and then the Right Node.<br/>in this we always check if There is a left node if no we print root node.</p>
<form action="" method="post">
<input type="text" name="arr" placeholder="Enter Numbers to make tree and traverse ...!" required>  
<input type="submit" name="submit">
</form> 
</body>
</html>