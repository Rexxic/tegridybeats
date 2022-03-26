<?php
// Use in the “Post-Receive URLs” section of your GitHub repo.

error_reporting(-1);
ini_set('display_errors', 'On');
if ($_POST['payload']) {
    shell_exec("cd /var/www/tegridybeats && git reset –hard HEAD && git pull");
}

?>Pull excecuted i guess