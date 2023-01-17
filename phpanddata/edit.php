<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <?php 
    require_once("Connection.php");
    $id = $_GET["editwaliid"];
    $data_itho ="Select * from medicalinfo where id =$id";
    $run = mysqli_query($conn,$data_itho);
    $meriarray = mysqli_fetch_array($run);

   
    ?>
    <div class="container">
    <div class="container">
    <h1>Medical Information</h1>
    <hr>
    <form action="" method="post">
    <label for="medname">Medicine Name</label>
    <input type="text" class="form-control" name="medname" value="<?php echo  $meriarray[5];?>">
    <br/>
    <br/>
    <label for="quantity">Quantity</label>
    <input type="text" class="form-control" name="quantity" value="<?php echo  $meriarray[1];?>" >
    <br/>
    <br/>
    <label for="brand">Brand Name</label>
    <input type="text" class="form-control" name="brand" value="<?php echo  $meriarray[2];?>" >
    <br/>
    <br/>
    <label for="expirydate">Expiry Date</label>
    <input type="date" class="form-control" name="expirydate" value="<?php echo  $meriarray[3];?>" >
    <br/>
    <br/>
    <label for="price">Price</label>
    <input type="text" class="form-control" name="price" value="<?php echo  $meriarray[4];?>">
    <br/>
    <br/>
    <label for="fordecease">For Decease</label>
    <select class="form-control" name="fordecease">
        <option value="">For Decease</option>
        <option value="bloodcancer"<?php if($meriarray[6] == "bloodcancer"){echo"selected";}?>>bloodcancer</option>
        <option value="chestpain"<?php if($meriarray[6] == "chestpain"){echo"selected";}?>>chestpain</option>
        <option value="fever"<?php if($meriarray[6] == "fever"){echo"selected";}?>>fever</option>
        <option value="heartpain"<?php if($meriarray[6] == "heartpain"){echo"selected";}?>>heartpain</option>
    </select>
    <br/>
    <br/>
    <button type="submit" name="btn" class="btn btn-danger">Update</button>
    </form>
    </div>
</div>


<?php



if (isset($_POST["btn"])) {

    $name = $_POST["medname"];
    $quantity = $_POST["quantity"];
    $brandname = $_POST["brand"];
    $expirydate = $_POST["expirydate"];
    $price = $_POST["price"];
    $fordecease = $_POST["fordecease"];

    $update_Query = "UPDATE `medicalinfo` SET `quantity`='$quantity',`brand`='$brandname',`expirydate`='$expirydate',`price`='$nameprice',`medname`='$name',`fordecease`='$fordecease' WHERE  id =$id";

    $run1 =mysqli_query($conn,$update_Query);

    if ($run1 == true) {
        echo "<script>
        alert('data update successfully');
        window.location.href='read.php';
        </script>
        ";
    } else {
        echo " Error is " . mysqli_error($conn);
    }
    
} 
else {
    header("location = read.php");
}
   





?>
</body>
</html>