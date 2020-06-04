<?php

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
                 $this->root = NULL;
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




          

    } 
               $arr = array(8,3,1,6,4,7,10,14,13);

               $tree = new SearchBinaryTree();
               for($i=0,$n=count($arr);$i<$n;$i++) {
                   $tree->create($arr[$i]);
               }


    echo "<h2>Input: ", join($arr," "), "</h2>";

    

    echo"<h1>Inorder</h1>"; 
    $tree->traverse();


 
  
?>