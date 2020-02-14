<?php
  try
  {
	$payload = json_decode($_REQUEST['payload']);
  }catch(Exception $e) {
	echo $e;
    exit(0);
  }
  
  if ($payload->ref === 'refs/heads/master')
  {
	$output = shell_exec('/usr/share/nginx/scripts/presentaciones.sh');
	echo $output;
  }

?>
hi