<html
<body>
<?php
$con=mysqli_connect("localhost","root","admin","webproj");
//check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$sql="SELECT * FROM blog_posts";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

?>
<p><?php echo $row['post_title'];?></p>
<p> by <?php echo $row['author_name'];?> on <?php echo $row['post_date'];?></p>
<p><?php echo $row['content']; ?></p>
<?php } ?>

</body>
</html>