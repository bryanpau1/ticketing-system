<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "ticketing");
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM users 
  WHERE name LIKE '%".$search."%'
  OR username LIKE '%".$search."%' 
  OR level LIKE '%".$search."%' 
  OR id LIKE '%".$search."%' 
  OR email LIKE '%".$search."%'
 ";
}
else
{
 $query = "
  SELECT * FROM users ORDER BY id
 ";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table-responsive">
   <table class="table table bordered">
    <tr>
     <th>name</th>
     <th>username</th>
     <th>email</th>
     <th>level</th>
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    <td>'.$row["name"].'</td>
    <td>'.$row["username"].'</td>
    <td>'.$row["email"].'</td>
    <td>'.$row["level"].'</td>
   </tr>
  ';
 }
 echo $output;
}
else
{
 echo 'Data Not Found';
}

?>