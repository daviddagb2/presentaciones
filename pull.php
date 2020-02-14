<?php

if(function_exists('shell_exec')) {
    echo "exec is enabled";
}else{
	echo "exec NOT enabled";
}


$decodedJson = json_decode($POST['payload']);
echo $decodedJson;
// Use in the “Post-Receive URLs” section of your GitHub repo.
if ( $decodedJson ) {
	echo "Payload";
	//shell_exec( "cd /usr/share/nginx/presentaciones/ && git reset --hard && git pull" );
	$output = shell_exec('/usr/share/nginx/scripts/presentaciones.sh');
	echo "<pre>$output</pre>";
	
}

?>
hi