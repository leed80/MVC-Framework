<html>

<?php

echo 'Requested URL = "' . $_SERVER['QUERY_STRING'] . '"';

?>

<h1>Destination Selector</h1>


<h2>Pick a destination from the list below</h2>
<form action="/DestinationPickerApp/Controllers/destinationPickerController.php" method="get">
    <select name="destination">
        <option value="Edinburgh">Edinburgh</option>
        <option value="Glasgow">Glasgow</option>
        <option value="Aberdeen">Aberdeen</option>
    </select>
    <input type="Submit" value="Submit">



</form>



</html>

