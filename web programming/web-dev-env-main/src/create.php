<?php
$title = "A simple CRUD app";
include "header1.php";
?>

<h2> Input your information below: </h2>
<form name= "form1" method="post" action="">
  <div class="row">
    <div class="col">
      <input type="text" class="form-control" placeholder="First name" name="fname" required>
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Last name" name="lname" required>
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col">
      <input type="text" class="form-control" placeholder="City" name="city" required>
    </div>
    <div class="col">
      <select class="form-control"  name="groupid">
    <option value="BBCAP21"> BBCAP21 </option>
    <option value="BBCAP22"> BBCAP22 </option>
    <option value="Others"> Others </option>
    </select>
    </div>
  </div>
<br><button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>


<?php
if (isset($_POST['submit'])) {
    $fname= $_POST['fname'];
    $lname= $_POST['lname'];
    $city= $_POST['city'];
    $groupid= $_POST['groupid'];
    include 'db.php';
    $sql="insert into studentsinfo (fname, lname, city, groupid)
    values('$fname', '$lname', '$city', '$groupid')";

    if($conn -> query($sql) === TRUE) {
        echo "New record added";
    }
    else {
      echo "Error: " . $sql . "<br>" . $conn -> error;
  }
    $conn->close();
}


?>



<?php
include "footer1.php";
?>



