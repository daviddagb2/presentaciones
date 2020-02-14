<?php

if(function_exists('shell_exec')) {
    echo "exec is enabled";
}else{
	echo "exec NOT enabled";
}

// Use in the “Post-Receive URLs” section of your GitHub repo.
if ( $_POST['payload'] ) {
	shell_exec( "cd /usr/share/nginx/presentaciones/ && git reset --hard && git pull" );
	echo "done";
}

?>
hi