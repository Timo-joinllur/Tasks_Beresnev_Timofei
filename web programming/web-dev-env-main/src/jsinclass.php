<?php
$title = "JavaScript Events and form validations";
include "header.php"
?>
<h2> A simple button to display date </h2>
<button onclick="this.innerHTML = Date()"> Click to know date </button>
<h2>Make a button and a place holder as paragraph for date </h2>
<button onclick="getElementById('date').innerHTML = Date()"> Click to know date </button>
<p id="date"> </p>



<hr>
<h2>Change the background color</h2>
<hr>
<form>
<input type="color" id="background" onchange="changeColor()">
</form>
<hr>
<h2>Change the font color</h2>
<hr>
<form>
<input type="color" id="fcolor" onchange="changeFcolor()">
</form>

<h2> On mouse Over & On mouse Out </h2>
<span onmouseover="this.style.color='blue';
                   this.style.backgroundColor='yellow';
                   this.style.fontSize = '8em';"
    onmouseout="
                   this.style.color='red';
                   this.style.backgroundColor='white';
                   this.style.fontSize = '1.1em';
                   
                   
                   
                   "> some text</span> <br>

                   
     



<?php
include "footer.php"
?>