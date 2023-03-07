<?php $title = "PHP is interesting";
include "header.php" ?>
<?php 
//opening tag
echo "Timofei Beresnev";
echo " BBCAP22A3";

echo "<br> Hello world! My name is David <br>";

echo "Today is " . date("Y/m/d") . "<br>";

?>

<script>
    //window.alert
    //window.alert("This will triger an alert box")
    //window.alert(5+10)
    /*document.write('\n Hello World');*/
    document.write("Hello this is interesting")
</script>
<noscript>
please enable JavaScript to view this content,
</noscript>

<button onclick="add()">Click to Add</button>
<hr>
<p id="place1" style="color:brown; background-color:black;"> </p>
<span id="place2" style="color:brown; background-color:black;"> </span>

<script>
document.getElementById("place1").innerHTML = "This will go to place1";
document.getElementById("place2").innerHTML = "This will go to span";

</script>

<hr>

<?php $g1 = 5; $g2=4; $g3=5;
echo "<table>
<tr>
    <td>S.N</td>
    <td>Name</td>
    <td>Grade</td>
</tr>
<tr>
    <td>1</td>
    <td>Pekka</td>
    <td>5</td>
</tr>
<tr>
    <td>2</td>
    <td>Johanna</td>
    <td>4</td>
</tr>
<tr>
    <td>3</td>
    <td>John</td>
    <td>5</td>
</tr>
</table>        
"
?>

<img src= ' images/screenshot.png ' width="500" height="228" > ;
<h2>changing background-color</h2>
<form>
<input type="color" name="background" onchange="changeColor('background',this.value)">
</form>


<!-- <select id="bgchoice" onchange="changeBG()">
<option></option>
<option value="red">Red</option>
<option value="ivory">Ivory</option>
<option value="pink">Pink</option>
</select> -->

<?php include "footer.php";

?>

