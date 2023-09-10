 <!-- php code -->
 <?php
 include 'connection.php';

if(isset($_POST['add'])){
$TITLE = $_POST['title'];
$PRICE = $_POST['price'];
$CATEGORY = $_POST['category'];

// IMAGE
$IMAGE_NAME =$_FILES['image']['name'];
$IMAGE_TMP =$_FILES['image']['tmp_name'];

if(empty($PRICE) || empty($TITLE) || empty($CATEGORY)){
echo '<div class="msg_info"  role="alert">Fill In All Fields</div>';
}else{
$post_image = rand(0,1000)."_".$IMAGE_NAME;
move_uploaded_file($IMAGE_TMP,"imgs/{$post_image}");

$insert_product = $conn->prepare("insert into `products`(image,title,price,category) values('$post_image','$TITLE','$PRICE','$CATEGORY')");
$insert_product->execute();
if($insert_product){
echo '<div class="msg_success" role="alert">The Project Has Been Added</div>';
?>
 <script>
setTimeout(() => {
    window.location.href = 'addProduct.php';
}, 2000);
 </script>
 <?php
}else{
echo '<div class="msg_error">Something went wrong</div>';

}
}
}
?>
 <!-- php code -->

 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="dash.css">
     <title>Dashboard Market</title>
 </head>

 <style>
<?php include 'dash.css';
?>
 </style>

 <body>
     <section className="formSec">
         <form method="post" className="form" enctype="multipart/form-data">
             <img src="" alt />
             <input type="file" name="image" placeholder="Image Product" />
             <input type="text" name="title" placeholder="title Product" />
             <input type="number" name="price" placeholder="price Product" />
             <input type="text" name="category" placeholder="Category Product" />
             <button type="submit" name="add">Submit</button>
         </form>
     </section>
 </body>

 </html>