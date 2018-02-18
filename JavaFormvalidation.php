<html>
<head>
<title> Display the result in HTML Table </title>
</head>
< body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bookswala";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO user (UID,Name,Address,EmailID,Mobile,Password)
VALUES('$_POST[UID]','$_POST[Name]','$_POST[Address]','$_POST[EmailID]','$_POST[Mobile]','$_POST[Password]')";
if ($conn->query($sql) === TRUE) {
echo "New record created successfully";

}
else
{
echo "Error: " . $sql . "<br>" . $conn->error;
}

/*$sql = "DELETE FROM user where UID ='$_POST[UID]'";
if ($conn->query($sql) === TRUE) {
echo "Record successfully Deleted";
}
else
{
echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql = "SELECT * FROM user";
$result = $conn->query($sql);
if ($result->num_rows >0) {
echo "<table border=1><caption> Details of User Table
</caption><tr><th<User Name</th><th>Name Along With Their UID</th></tr>";
// output data of each row
while($row = mysqli_fetch_assoc($result)) {
echo "<tr><td>" . $row["Name"]. "</td><td>" . $row["UID"].
"</td></tr>";
}
echo "</table>";
mysqli_free_result($result);
} else {
echo "0 results";
}*/

/*$sql = "SELECT UID,Name,Address,Emailid,Mobile,Password From user";
if ($conn->query($sql) === TRUE) {
echo "User Found";
}
else
{
echo "Error: User not Found" . "<br>" . $conn->error;
}*/

//<a href="http://localhost/1511011/updateform.html">CLick Here to Update any Field</a>

mysqli_close($conn);
?>
</body>
</html>