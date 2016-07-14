
<html>
<head>
    <title>
        <title>Book-O-Rama CataJog Search</title>
    </title>
</head>
<body>
<h1>Book-O-Rama CataJog Search</h1>
<?php
   $isbn = $_POST['isbn'];
$author = $_POST['author'];
$title = $_POST['title'];
$price = $_POST['price'];
if(!$isbn || !$author || !$title || !$price) {
    echo "You have not entered all the required details.<br>Please go back and try again";
    exit;
}
$isbn = addslashes($isbn);
$author = addslashes($author);
$title = addslashes($title);
$price = doubleval($price);

@ $db = new mysqli('localhost','bookorama','bookorama123','books');
if(mysqli_connect_errno()) {
    echo "Error:Could not to database.Please try again later";
    exit;
}
/*
$query = "insert into books VALUES ('$isbn','$author','$title','$price')";
$result = $db->query($query);
if($result) {
    echo $db->affected_rows."book inserted into database.";
}else {
    echo "An error has occurred.The item not added.";
}*/

$query = "insert into books VALUES (?,?,?,?)";
$stmt = $db-> prepare($query);
$stmt->bind_param("sssd",$isbn,$author,$title,$price);
$stmt->execute();
echo $stmt->affected_rows."book insert into database";
$stmt->close();

$db->close();

?>
</body>
</html>
