<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&family=SUSE:wght@100..800&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Car</title>
    <style>
        body {
            font-family: 'Cairo', sans-serif;
        }
        .table {
            margin-top: 20px;
            width: 80%;
            border-collapse: collapse;
            box-shadow:1px 1px 10px silver;
        }
        .table th, .table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
            background:gray;
        }
        .btn {
            padding: 5px 10px;
            color: #fff;
            background-color: red;
            text-decoration: none;
        }
        .table td{
            background-color:white;
        }
        
    </style>
</head>
<body>
    <center>
        <h3>
            your products our boy
        </h3>
    </center>
<?php
include('config.php');
$result = mysqli_query($con,"SELECT * FROM addcard");
while($row=mysqli_fetch_array($result)){
echo"    <center>
        <main>
            <table class='table'>
                <thead>
                    <tr>
                        <th scope='col'>Product Name</th>
                        <th scope='col'>Product Price</th>
                        <th scope='col'>Delete Product</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>$row[name]</td>
                        <td>$row[price]</td>
                        <td><a href='del_car.php? id=$row[id]' class='btn btn-danger'>delete</a></td>
                    </tr>
                </tbody>
            </table>
        </main>
    </center>";
}
?>
<center>
    <a href="shop.php">back to products</a>
</center>
</body>
</html>