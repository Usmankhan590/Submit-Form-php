<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<?php 
require_once("connection.php");

$fetch = "select * from medicalinfo";
$execute = mysqli_query($conn , $fetch);

$row_num = mysqli_num_rows($execute);

if ($row_num > 0) 
{
   echo' <div class="container">
    <div class="row">';
    while($d = mysqli_fetch_array($execute))
    {
        echo' <div class="mt-4 col-md-4">
        <div class="card">
        <div class="card-body">
        <h1 class="card-title">' . $d[0] . '</h1>
        <h1 class="card-title">' . $d[1] . '</h1>
        <p class="card-text">' . $d[2] . '</p>
        <p class="card-text">' . $d[3] . '</p>
        <p class="card-text">' . $d[4] . '</p>
        <p class="card-text">' . $d[5] . '</p>
        <p class="card-text">' . $d[6] . '</p>
        <a href="delete.php?deletewaliid='.$d[0].'"  class="btn border border-danger text-danger">Delete</a>
        <a href="edit.php?editwaliid='.$d[0].'"  class="btn border border-danger text-danger">Edit</a>
        </div>
        </div>
        </div>';
    }
    echo"</div>
</div>";
} 

else {
    header("location:form.php");
}




?>