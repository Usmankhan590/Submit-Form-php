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
    <div class="container">
    <div class="container">
    <h1>Medical Information</h1>
    <hr>
    <form action="insert.php" method="post">
    <label for="medname">Medicine Name</label>
    <input type="text" class="form-control" name="medname">
    <br/>
    <br/>
    <label for="quantity">Quantity</label>
    <input type="text" class="form-control" name="quantity" >
    <br/>
    <br/>
    <label for="brand">Brand Name</label>
    <input type="text" class="form-control" name="brand" >
    <br/>
    <br/>
    <label for="expirydate">Expiry Date</label>
    <input type="date" class="form-control" name="expirydate" >
    <br/>
    <br/>
    <label for="price">Price</label>
    <input type="text" class="form-control" name="price" >
    <br/>
    <br/>
    <label for="fordecease">For Decease</label>
    <select class="form-control" name="fordecease">
        <option value="">For Decease</option>
        <option value="bloodcancer">bloodcancer</option>
        <option value="chestpain">chestpain</option>
        <option value="fever">fever</option>
        <option value="heartpain">heartpain</option>
    </select>
    <br/>
    <br/>
    <button type="submit" name="btn" class="btn btn-danger">click here</button>
    </form>
    </div>
</div>
</body>
</html>