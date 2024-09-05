<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&family=SUSE:wght@100..800&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update ur product </title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <?php
    include('config.php');
    $ID = $_GET['id'];
    $UPDATE=mysqli_query($con,"SELECT * from product WHERE id = $ID ");
    $data=mysqli_fetch_array($UPDATE)
    ?>
<center> 
           <div class="main">
            <form action="up.php" method = 'post' enctype='multipart/form-data'>
                 <h2>
                    update products
                 </h2>
                 <input type="text" name="id" value=<?php echo $data['id'];?>>
                 <br>
                 <input type="text" name="name" value=<?php echo $data['name'];?>>
                 <br>
                 <input type="text" name="price" value=<?php echo $data['price'];?>>
                 <br>
                 <input type="file" name="image" id="file" style='display:none;  '>
                 <label for="file">update image of product</label>
                 <button name="update">press here </button>
                 <br><br>
                 <a href="products.php">all products (nice ya bro)</a>
            </form>
        </div>
        <p>
            developed by omar
        </p>
</center>

</body>
</html>