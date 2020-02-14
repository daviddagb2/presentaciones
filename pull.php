<?php

// Use in the “Post-Receive URLs” section of your GitHub repo.

if ( $_POST['payload'] ) {
	shell_exec( "cd /usr/share/nginx/presentaciones/ && git reset --hard && git pull" );
}

?>
hi