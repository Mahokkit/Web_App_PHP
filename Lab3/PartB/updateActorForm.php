<!DOCTYPE html>
<html>
<head>
    <title>Updating Actors</title>
</head>
<body>
<?php
require_once("dbConn.php");
$conn = getDbConnection();
if(!$conn)
{
    die("Unable to connect to database: " . mysqli_connect_error());
}
$actorId = $_POST['actorIdUpdate'];
$sql = "SELECT first_name,last_name FROM actor WHERE actor_id = $actorId;";
$result = mysqli_query($conn, $sql);
if(!$result)
{
    die("Actor with id $actorId was not found");
}
else
{
    $data = mysqli_fetch_assoc($result);
    $firstName = $data['first_name'];
    $lastName = $data['last_name'];
}
?>
<form id="updateActor" name="updateActor" method="post" action="updateActor.php">
    <p><label>Actor Id: <input type="text" name="actorId" id="actorId" value="<?php echo $actorId; ?>" readonly/></label></p>
    <p><label>First Name: <input type="text" name="firstName" id="firstName" value="<?php echo $firstName; ?>" /></label></p>
    <p><label>Last Name: <input type="text" name="lastName" id="lastName" value="<?php echo $lastName; ?>" /></label></p>
    <p><input type="submit" id="submit" value="Update Actor" /></p>
</form>

</body>
</html>