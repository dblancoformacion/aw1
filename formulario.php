Quiero crear un formulario que sume los datos que introduzco a través de dos input.

php html


<form>
	<input name="dato1">
	<input name="dato2">
</form>

<?php

if(isset($_GET['dato1']))
	echo $_GET['dato1']+$_GET['dato2']
