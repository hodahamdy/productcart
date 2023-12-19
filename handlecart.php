<?php 
session_start();
 if(isset($_POST['submit'])){ 
    if(!isset($_SESSION['cart'])){
       $_SESSION['cart']=[]; 
    }
    

//catch data

  $productname=$_POST['productname'];
  $productprice=$_POST['price'];

  $image=$_FILES['image'];
  $imageName=$image['name'];
  $tmpName=$image['tmp_name'];
  move_uploaded_file($tmpName,"upload/$imageName");


  $product=[
    "productname"=>$productname,
    "price"=>$productprice,
    "imageName"=>$imageName
  ];
  array_push($_SESSION['cart'],$product);
print_r($_SESSION['cart']);


 }
 header('location:displayproduct.php');

?>