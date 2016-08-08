
<html>

<head>

    <title> Browse Directorise</title>
</head>
<body>
<h1>Browsing</h1>
<?php
$currentDir = "../uploads/";
$dir = opendir($currentDir);
echo "<p> Upload directory is $currentDir</p>";
echo "<p>Directory Listing:</p><u1>";
while(false !== ($file = readdir($dir))) {
    if($file != "." && $file != "..") {
        echo "<li>$file</li><br>";
    }
}
echo "</u>";
closedir($dir);

?>
</body>

</html>

