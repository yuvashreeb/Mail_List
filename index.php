<?php 
require 'connect.php';
echo '<h1>Mailing list</h1>Send to<p>';

$mailcount=0;
$namecount=0;
$get=mysqli_query($link,"SELECT * FROM mailinglist WHERE send='1'");
echo "<form action='send.php' method='get'>";
while ($getrow=mysqli_fetch_assoc($get))
{
  echo "<input type='checkbox' name=''mail_" . $mailcount++ . "' value='" . $getrow['email'] . "' CHECKED>" . $getrow['firstname'] . " " . $getrow['lastname'] . " (" . $getrow['email'] . ")
<input type='hidden' name='name_'" . $namecount++ . " value=" . $getrow['firstname'] . "'>        
<br>";
}

echo "<p>
    Message:<br>
    <textarea name='message'></textarea><p>
    <input type='submit' name='submit' value='send'>
</form>";
?>