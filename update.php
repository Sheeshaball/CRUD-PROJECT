<?php
include('connect.php');


$EdID = $EdName = $EdAge = $EdAddress = '';

if(isset($_POST['edit'])){
    $EdID = $_POST['edId'] ?? '';
    $EdName = $_POST['edName'] ?? '';
    $EdAge = $_POST['edAge'] ?? '';
    $EdAddress = $_POST['edAddress'] ?? '';
}
if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $name = trim($_POST['name']);
    $age = trim($_POST['age']);
    $address = trim($_POST['address']);

    if(empty($name) || empty($age) || empty($address)) {
        echo "<script>alert('All fields are required!');</script>";
    } else {
        $update = "UPDATE hapagkainan SET NAME = ?, AGE = ?, ADDRESS = ? WHERE SID = ?";
        $stmt = mysqli_prepare($connect, $update);
        mysqli_stmt_bind_param($stmt, "sisi", $name, $age, $address, $id);
        
        if(mysqli_stmt_execute($stmt)) {
            echo "<script>alert('Data Updated');</script>";
            echo "<script>window.location.href='index.php';</script>";
        } else {
            echo "<script>alert('Error: " . mysqli_error($connect) . "');</script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(3, 21, 190, 0.75);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        a {
            text-decoration: none;
            color: #007bff;
            font-size: 16px;
            display: inline-block;
            margin-bottom: 20px;
            
        }

        h2 {
            margin-bottom: 20px;
            font-size: 24px;
            color: #333;
        }

        label {
            font-size: 18px;
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
            text-align: left; 

        }

        input:focus {
            border-color: #007bff;
            outline: none;
            box-shadow: 0 0 8px rgba(0, 123, 255, 0.5);
        }


        input[type="text"], input[type="number"] {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 2px solid #ccc;
            border-radius: 5px;
            margin-bottom: 15px;
            box-sizing: border-box;
        }

        #submit {
            width: 100%;
            padding: 12px;
            font-size: 18px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }

        #submit:hover {
            background-color: #218838;
            transform: scale(1.05);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>
    <div class="container">
        <a href="index.php">← Back</a>
        <h2>Update Record</h2>
        <form action="update.php" method="post">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" value="<?= htmlspecialchars($EdName) ?>">
   
            <label for="age">Age</label>
            <input type="number" name="age" id="age" value="<?= htmlspecialchars($EdAge) ?>">

            <label for="address">Address</label>
            <input type="text" name="address" id="address" value="<?= htmlspecialchars($EdAddress) ?>">

            <input type="hidden" name="id" id="id" value="<?= htmlspecialchars($EdID) ?>">

            <input type="submit" name="submit" id="submit" value="Update">
        </form>
    </div>
</body>
</html>
