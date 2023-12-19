<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="handlecart.php" method="POST" enctype="multipart/form-data" >
       <input type="file" name="image"><br>  
     <input type="text" name="productname" placeholder=" product name" >
    <input type="text" name="price" placeholder="price">
        <button type="submit" name="submit" > add to cart</button>


    </form>
</body>
</html>