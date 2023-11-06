<?php

include('config.php');



// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the record ID is set and not empty
    if (isset($_POST["id"]) && !empty($_POST["id"])) {
        // Database connection parameters
     
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Sanitize the input to prevent SQL injection (consider using prepared statements for security)
        $id = $_POST["id"];

        // SQL query to delete the record
        $sql = "DELETE FROM addrecipe WHERE id = $id";

        if ($conn->query($sql) === TRUE) {
        //   /  echo "Record with ID $id deleted successfully ";
        header("location: Delete Recipe.html   ");
        } else {
            echo "Error deleting record: " . $conn->error;
        }

        $conn->close();
    } else {
        echo "Please enter a valid record ID to delete.";
    }
}
?>



