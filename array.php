<?php
// $cow = array("cow1","cow2","cow3","cow4","cow5","cow6","cow7","cow8","cow9","cow10",);

// for ($i=0; $i < count($cow) ; $i++) { 
//    echo"<li>$cow[$i]</li>";
// }

// echo"<table border='1'>
// <tr>
// <th>Product Name</th>
// </tr>";

// foreach ($cow as $coww ) {
//     echo"<tr>
//     <td>$coww</td>
//     </tr>";
// }
// echo"</table>";

$movie = [
    "movie1" => "hello world",
    "movie2" => "hello asia",
    "movie3" => "hello country",
    "movie4" => "hello city",
    "movie5" => "hello town"
];
// echo $movie["movie1"];

echo"<table border='1'>
 <tr>
<th>movie Name</th>
<th>movie dialogues</th>
</tr>";


foreach ($movie as $k=>$v ) {
   echo"<tr>
    <td>$k</td>
    <td>$v</td>
    </tr>";
 }
 echo"</table>";



?>