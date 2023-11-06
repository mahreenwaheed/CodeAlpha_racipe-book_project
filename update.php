<?php








// Using prepared statements to prevent SQL injection

    
    // Check if the update was successful


include('config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the record ID is set and not empty
    if (isset($_POST["id"]) && !empty($_POST["id"])) {
        // Database connection parameters
      

        // Check connection
      
        // Sanitize and validate the input
        $id = $_POST["id"];
        $name = $_POST["name"];
        $ingredient = $_POST["ingredient"];
        $method = $_POST["method"];

        // SQL query to update the record
        $sql = "UPDATE addrecipe SET name = '$name', ingredient = '$ingredient' , method = '$method' WHERE id = '$id'";

        if ($conn->query($sql) === TRUE) {
         
            header("location: Edit Recipe.html   ");
            // echo "Record with ID $id updated successfully";
        } else {
            echo "Error updating record: " . $conn->error;
        }

        $conn->close();
    } else {
        echo "Please enter a valid record ID to update.";
    }
}

// if(isset($_POST['create']))
// {

//     $id = $_POST['id'];
//     $name = $_POST['name'];
//     $ingredient=$_POST['ingredient'];
//     $method = $_POST['method'];
   
// //     $id = 1;
// // $name = "rice";
// //    $ingredient=$_POST['onion,water,tomato,potato'];
// //     $method = $_POST['Rinse the rice.
// //     Use the right ratio of water. Add 2 parts water and 1 part rice to a large pot. ...
// //     Bring the water to a boil. Once it'];

   



// $sql = "UPDATE `updaterecipe` SET `name`='$name',`ingredient`='$ingredient',`method`='$method' WHERE `id`= 1";
   
   




// $result = mysqli_query($conn, $sql);

// if($result){
//     header("location: Edit Recipe.html");
   

// }else{
//     echo ' no insert data in database';
// }
// }






?>