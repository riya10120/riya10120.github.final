<?php
// Assuming login validation is successful

// Get the redirect URL
$redirect = isset($_POST['redirect']) ? $_POST['redirect'] : 'index.html';

// Redirect the user
header("Location: $redirect");
exit();
?>
