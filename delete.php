<?php
include 'connect.php';


// Get the ID of the record to delete
$id = $_GET['deleteid'];

// Construct SQL DELETE query
$sql = "DELETE FROM crud WHERE id = $id";

// Execute the query
if (mysqli_query($conn, $sql)) {
   // echo "Record deleted successfully";
   header('location:display.php');
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
?>