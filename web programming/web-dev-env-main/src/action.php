<?php include "header1.php";
    $firstname = $_POST['firstname'];
    $secondname = $_POST['secondname'];



echo "<h3>Your Name is $firstname $secondname.</h3>";
?>
<?php include "footer1.php";
echo "Last modified: " . date ("F d Y H:i:s.", getlastmod());
?>