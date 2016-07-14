
<head>
    <meta charset="UTF-8">
    <title>Book-O-Rama CataJog Search</title>
</head>
<body>
<h1>Book-O-Rama CataJog Search</h1>

<?php

$searchtype = $_POST['searchtype'];
$searchterm = trim($_POST['searchterm']);
if (!$searchterm || !$searchtype) {
    echo 'You have not entered search details. Please go back and try again.';
    exit;
}

$searchtype = addslashes($searchtype);
$searchterm = addslashes($searchterm);
@ $db = new mysqli('localhost','bookorama','bookorama123','books');
//@ $db = mysqli_connect('localhost','bookorama','bookorama123','books');

if(mysqli_connect_errno()) {
    echo 'Error: Could not connect to database. Please try again';
    exit;
}

$query = "select * from books where $searchtype like '%$searchterm%' ";

$result = $db->query($query);
$num_result = $result -> num_rows;

//$results = mysqli_query($db,$query);
//$num_result = mysqli_num_rows($results);

echo "<p>Number of books found:$num_result</p>";


for ($i = 0; $i < $num_result; $i ++) {
    $row = $result -> fetch_assoc();
    echo "<p><strong>". ($i +1)."Title:";
    echo htmlspecialchars(stripslashes($row['title']));
    echo "</strong><br/>Author:";
    echo stripslashes($row['author']);
    echo "<br/>ISBN:";
    echo stripslashes($row['isbn']);
    echo "<br/>Price:";
    echo stripslashes($row['price']);
    echo "</p>";
}


$result->free();
$db->close();
?>

</body>
</html>


