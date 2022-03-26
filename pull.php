<?php
// Use in the “Post-Receive URLs” section of your GitHub repo.

if ($_POST['payload']) {
    shell_exec('cd /var/www/tegridybeats && git fetch origin && git reset --hard origin/master');
}

?>Pull excecuted i guess