<?php
$title = "A simple CRUD app";
include "header.php";
?>

<h2> Input your information below: </h2>
<form  method="post" action="" onsubmit="return crud()" name= "form1">
  <div class="row">
    <div class="col">
      <input type="text" class="form-control" placeholder="First name" name="fname" onblur="fname()" required>
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
    $sql="insert into studentinfo (fname, lname, city, groupid)
    values('$fname', '$lname', '$city', '$groupid')";

    if($conn -> query($sql) === TRUE) {
        echo "Your information was added successfully";
    }   
    else {
      echo "Error: " . $sql . "<br>" . $conn -> error;
  }
    $conn->close();
}


?>



<?php
include "footer.php";
?>



