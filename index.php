<?php
include('connect.php');

$select = "SELECT * FROM hapagkainan";
$sqlSelect = mysqli_query($connect, $select) or die("Query failed: " . mysqli_error($connect));

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project</title>
    <style>
       
        table, th, td{
            border: 1px solid black;
            font-size: 50px;
        }
        button, .btn {
            font-size: 30px;
            cursor: pointer;
            border: none;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            margin: 20px;
        }
        

       table {
         width: 80%;
         margin: auto;
         border-collapse: collapse;
         background-color: white;
         border-radius: 8px;
         overflow: hidden;
         box-shadow: 0 10px 15px rgba(3, 21, 190, 0.75); 
         transition: all 0.3s ease-in-out; 
        }

        th, td {
            padding: 12px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #007bff;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
            transition: 0.3s;
        }

        .btn {
            font-size: 14px;
            padding: 8px 12px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            color: white;
        }

        .edit {
            background-color: #ffc107;
            
        }

        .edit:hover {
            background-color: #e0a800;
            transform: scale(1.1);
        }

        .delete {
            background-color: #dc3545;
        }

        .delete:hover {
            background-color: #c82333;
            transform: scale(1.1);
        }
        a#add {
         display: inline-block;
         font-size: 18px;
         font-weight: bold;
         background-color: #28a745; 
         color: white;
         padding: 12px 20px;
         text-decoration: none;
         border-radius: 25px;
         box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
         transition: all 0.3s ease-in-out;
         position: relative;
         top: 10px;
}
         a#add:hover {
         background-color: #218838; 
         transform: scale(1.5); 
         box-shadow: 0 6px 10px rgba(0, 0, 0, 0.3);
}


    </style>
</head>
<body>
    <a type="button" id="add" href="add.php">Add+</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Age</th>
            <th>Address</th>
            <th colspan="2">Action</th>
        </tr>
        <?php while ($value = mysqli_fetch_assoc($sqlSelect)) { ?>
    <tr>
        <td><?php echo isset($value['SID']) ? $value['SID'] : 'No ID'; ?></td>
        <td><?php echo isset($value['NAME']) ? $value['NAME'] : 'No Name'; ?></td>
        <td><?php echo isset($value['AGE']) ? $value['AGE'] : 'No Age'; ?></td>
        <td><?php echo isset($value['ADDRESS']) ? $value['ADDRESS'] : 'No Address'; ?></td>
        <td>
            <form action="update.php" method="post">
                <input class="btn edit" type="submit" value="Edit" name="edit">
                <input type="hidden" name="edId" value="<?= isset($value['SID']) ? $value['SID'] : ''; ?>">
                <input type="hidden" name="edName" value="<?= isset($value['NAME']) ? $value['NAME'] : ''; ?>">
                <input type="hidden" name="edAge" value="<?= isset($value['AGE']) ? $value['AGE'] : ''; ?>">
                <input type="hidden" name="edAddress" value="<?= isset($value['ADDRESS']) ? $value['ADDRESS'] : ''; ?>">
            </form>
        </td>
        <td> 
            <form action="delete.php" method="post">
                <input type="hidden" name="delID" value="<?= isset($value['SID']) ? $value['SID'] : ''; ?>">
                <input class="btn delete" type="submit" value="Delete" name="delete">
            </form>
        </td>
    </tr>
<?php } ?>

    </table>
</body>
</html>
