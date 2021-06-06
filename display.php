<style type="text/css">
table, td, th {  
  border: 1px solid #ddd;
  text-align: left;
}

table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 15px;
}
</style>
<?php
session_start();

$con = mysqli_connect('localhost','root','1234567');

error_reporting(0);
mysqli_select_db($con, 'misk');
$query = 'select * from profile';
$data = mysqli_query($con , $query);
$total = mysqli_num_rows($data);
// $result = mysqli_fetch_assoc($data);
// echo $result['first_name'];

if($total !=0){

	?>
   <table>
   	<tr>
   		<th>profile_id</th>
   		<th>First_Name</th>
   		<th>Last_Name</th>
   		<th>Email</th>
   		<th>Headline</th>
   		<th>Summary</th>
   		<th>Update</th>
   		<th>Delete</th>
   	</tr>

	<?php
	while($result = mysqli_fetch_assoc($data))
	{
    echo "   	<tr>
   		<td>".$result['profile_id']."</td>
   		<td>".$result['first_name']."</td>
   		<td>".$result['last_name']."</td>
   		<td>".$result['email']."</td>
   		<td>".$result['headline']."</td>
   		<td>".$result['summary']."</td>
   		<td><a href='update.php?id=$result[profile_id]&fname=$result[first_name]&lname=$result[last_name]&email=$result[email]&headline=$result[headline]&summary=$result[summary]'>Update</a></td>

   		<td><a href='delete.php?id=$result[profile_id]' onclick='return checkdelete()'>Delete</a></td>
   	</tr>
          ";
	}
}else{
	echo "No record found";
}

?>
   </table>
   <script type="text/javascript">
     function checkdelete() {
       return confirm('Are you sure you want to delete this record??');
     }
   </script>