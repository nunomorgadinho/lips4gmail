<?php

/*
 * This script will receive the message sent by the gadget
 * and send it as an email.
 */

$to = $_REQUEST['to'];
$from = $_REQUEST['from'];
$message = $_REQUEST['msg'];

if (empty($to)) {
	$to = 'nuno.morgadinho@gmail.com';
}
if (empty($from)) {
	$from = 'nuno.morgadinho@gmail.com';
}
if (empty($message)) {
	$message = 'I was just testing the send button..';
}
mail($to, 'You have a new message from..'.$from, $message);

?>
<script type="text/javascript">
history.go(-1);
</script>
