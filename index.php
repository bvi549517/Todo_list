<?php
require_once("db_connect.php"); ?>
<html>
<head>
 <title>my todos</title>
 <link rel="stylesheet"  href="style.css">
</head>
<body>
<div id="box">
<h2>
 Next on my agenda
</h2>
<p><a href="create.php">add todo</a></p>
<?php
db();
global $link;
$query = "SELECT id, todoTitle, todoDescription, date FROM todo";
$result = mysqli_query($link, $query);
//check if there’s any data inside the table
if(mysqli_num_rows($result) >= 1){
 while($row = mysqli_fetch_array($result)){
 $id = $row['id'];
 $title = $row['todoTitle'];
 $date = $row['date'];
?>
<ul>
 <li><a href="detail.php?id=<?php echo $id?>"><?php echo $title ?></a></li> <?php echo "[[ $date ]]";?>
 </ul>
<?php
 }
}
?>
</div>
</body>
</html>