<?php
if (isset($_POST["btn"]))
 {
    $name = $_POST["medname"];
    $quantity = $_POST["quantity"];
    $brandname = $_POST["brand"];
    $expirydate = $_POST["expirydate"];
    $price = $_POST["price"];
    $fordecease = $_POST["fordecease"];

    require_once("connection.php");
    $insert_query = "INSERT INTO `medicalinfo`( `medname`, `quantity`, `brand`, `expirydate`, `price`, `fordecease`) 
    VALUES ('$name','$quantity' ,'$brandname','$expirydate','$price' ,'$fordecease') ";
    $run = mysqli_query($conn,$insert_query );

    if ($run == true) {
        echo "<script>
        alert('data save successfully');
        window.location.href='form.php';
        </script>
        ";
    } else {
        echo " Error is " . mysqli_error($conn);
    }
    
} 
else {
    header("location = form.php");
}

?>