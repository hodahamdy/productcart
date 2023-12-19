<?php 
session_start();

$carts=$_SESSION['cart'];
foreach($carts as $cart){

    ?> 

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <title>Document</title>
    </head>
    <body>
    <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="<?php echo "upload/".$cart['imageName']; ?>" >
  <div class="card-body">
    <h5 > <?php echo $cart['productname']  ; ?> </h5>
    <h5><?php echo $cart['price'] ?> </h5>
    <p class="card-text"> </p>
  </div>
</div>
    </body>
    </html>
    <?php
}