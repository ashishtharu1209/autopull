<?php
$output = shell_exec('git pull origin main');
echo "<pre>$output</pre>";
?>