<?php
$title = "A simple CRUP app";
include "header1.php";
?>

<from method="post" action = "">
    <input type="text" name="fname" placeholder="First Name" required>
    <input type="text" name="lname" placeholder="last Name" required>
    <input type="text" name="city" placeholder="City" required>
    <select name="groupid">
        <option value="BBCAP22"> BBCAP22 </option>
        <option value="BBCAP22"> BBCAP21 </option>
        <option value="BBCAP22"> Others </option>
    </select><br>


    <button type ="submit" class="btn btn-primary " name="submit">Submit</button>


</form>


<?php
if (isset($_POST['submit'])) {
    echo "fucking deepak";
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $city = $_POST['city'];
    $groupid = $_POST['groupid'];
    include "db.php";
    $sql = "insert into studentinfo (fname, lname, city, groupid)
    values('$fname', '$lname', '$city', '$groupid')";

    if ($conn->query($sql) === TRUE) {
        echo "Your information us added sucsessfully";
    } 
    else {
        echo "Error:" . $conn->error;
    }
}
?>



<?php
include "footer1.php";
?>