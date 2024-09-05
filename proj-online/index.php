<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&family=SUSE:wght@100..800&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shop online | محل بالنت يا اخو</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
<center> 
           <div class="main">
            <form action="insert.php" method = 'post' enctype='multipart/form-data'>
                 <h2>
                    marketshop online
                 </h2>
                 <img src="logo.jpg" alt="logo" width = '400px'>
                 <br>
                 <input type="text" name="name" id="">
                 <br>
                 <input type="text" name="price" id="">
                 <br>
                 <input type="file" name="image" id="file" style='display:none;'>
                 <label for="file">image of product</label>
                 <button name="upload">press here </button>
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