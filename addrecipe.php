<?php


include('config.php');


if(isset($_POST['create']))
{

$id = $_POST['id'];
$name=$_POST['name'];
$ingredient = $_POST['ingredient'];
$method=$_POST['method'];




$sql = "INSERT INTO  addrecipe(`id`, `name`,`ingredient`,`method`) VALUES ('$id','$name','$ingredient','$method')";


$result = mysqli_query($conn, $sql);

if($result){
    // echo "insert data in database";
    header("location: Add Recipe.html   ");

   

}else{
    echo ' no insert data in database';
}
}
?>