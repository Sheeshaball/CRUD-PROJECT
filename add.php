<?php
  
if(isset($_POST['submit'])){
    $connect = mysqli_connect("localhost", "root", "", "LeLeidb"); 
    if (!$connect) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $name = mysqli_real_escape_string($connect, $_POST['name']);
    $age = intval($_POST['age']);  
    $address = mysqli_real_escape_string($connect, $_POST['address']);

   
    $insert = "INSERT INTO `hapagkainan` (NAME, AGE, ADDRESS) VALUES ('$name', $age, '$address')";

    $insertSQL = mysqli_query($connect, $insert);

    if ($insertSQL) {
        echo "<script>alert('Data Added')</script>";
    } else {
        echo "<script>alert('Error: " . mysqli_error($connect) . "')</script>";
    }
    echo "<script>window.location.href='index.php'</script>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Data</title>
    <style>
       
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        body {
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(3, 21, 190, 0.75);
            width: 400px;
            text-align: center;
        }

        a {
            display: inline-block;
            text-decoration: none;
            color: #007bff;
            font-size: 16px;
            margin-bottom: 15px;
            transition: 0.3s;
        }

        a:hover {
            color: #0056b3;
        }

        h2 {
            margin-bottom: 20px;
            color: #333;
        }

        label {
            font-size: 16px;
            font-weight: bold;
            display: block;
            margin: 10px 0 5px;
            text-align: left;
        }

        input {
            width: 100%;
    max-width: 300px; 
    padding: 10px;
    font-size: 18px;
    border: 2px solid #ccc;
    border-radius: 5px;
    display: block;
    margin: 10px auto;
        }

        input:focus {
            border-color: #007bff;
            outline: none;
            box-shadow: 0 0 8px rgba(0, 123, 255, 0.5);
        }

        button {
            width: 100%;
            background-color: #28a745;
            color: white;
            padding: 12px;
            font-size: 18px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 15px;
            transition: 0.3s;
        }

        button:hover {
            background-color: #218838;
            transform: scale(1.05);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

         #submit {
         width: 100%; 
         max-width: 300px; 
         padding: 15px 0; 
         font-size: 20px; 
         background-color: #28a745; 
         color: white;
         border: none;
         border-radius: 8px;
         cursor: pointer;
         margin-top: 15px;
         display: block; 
         text-align: center;
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
        <h2>Add New Record</h2>
        <form action="add.php" method="post">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" required>

            <label for="age">Age</label>
            <input type="number" name="age" id="age" required>

            <label for="address">Address</label>
            <input type="text" name="address" id="address" required>

            <button type="submit" name="submit">Submit</button>
        </form>
    </div>

</body>
</html>
