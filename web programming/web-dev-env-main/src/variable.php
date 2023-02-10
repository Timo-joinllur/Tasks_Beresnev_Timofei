<?php $title = "PHP is interesting";
include "header1.php" ?>
<h>1,2)</h>
<form action="action.php" method="post">
    <div class="row">
    <div class="col-md">
        <label for="firstName" class="sr-only">First Name</label>
        <input type="text" name="firstname" class="form-control" id="firstName" placeholder="John" required>
    </div>
    <div class="col-md">
        <label for="secondName" class="sr-only">Second Name</label>
        <input type="text" name="secondname" class="form-control" id="secondName" placeholder="Viking" required>
    </div>
    </div>
<button type="submit" class="btn btn-primary mb-2">Confirm identity</button>
</form>

<h>3)</h>
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">S.N</th>
      <th scope="col">Name</th>
      <th scope="col">grade</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Pekka</td>
      <td>5</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Johanna</td>
      <td>4</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>John</td>
      <td>5</td>
    </tr>
  </tbody>
</table>
<h>4)</h><br>
<?php $str1 = "Carousel";
$str2 = "Honor";
$result = $str1 . $str2;
echo "
first variable: $str1 <br>
second variable: $str2 <br>
result: $result <br>
amount of signs: ";
echo strlen($result);
?>
<br>
<h>5)</h>
<br>
<?php
$num1 = 298;
$num2 = 234;
$num3 = 46;
$res = $num1 + $num2 + $num3;

echo "298+234+46 = $res"
?>
<br>
<h>6)</h>
<br>
<?php
   $user_agent = $_SERVER['HTTP_USER_AGENT'];
echo $user_agent;
?>

<?php include "footer1.php";
?>