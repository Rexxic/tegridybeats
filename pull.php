<?php
// Use in the “Post-Receive URLs” section of your GitHub repo.

if ($_POST['payload']) {
    shell_exec("cd /var/www/tegridybeats && git reset –hard HEAD && git pull");
}

?>Pull excecuted i guess