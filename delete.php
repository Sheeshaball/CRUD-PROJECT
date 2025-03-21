<?php
    include('connect.php');

    if(isset($_POST['delete'])){
        if(isset($_POST['delete'])){
            $delID = intval($_POST['delID']);
        
            $delete = "DELETE FROM hapagkainan WHERE SID=$delID"; 
            $sqlDel = mysqli_query($connect, $delete);
        
            if ($sqlDel) {
                echo "<script>alert('Data Deleted')</script>";
            } else {
                echo "<script>alert('Error: " . mysqli_error($connect) . "')</script>";
            }
            echo "<script>window.location.href='index.php'</script>";
        }
        
    }
?>