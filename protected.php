<?php
require_once 'engine/init.php';
// To direct users here, add: protect_page(); Here before loading header.
include 'layout/overall/header.php';
if (user_logged_in() === true) {
?>
<div style="width:775px">
<h1 style="color:black">STOP!</h1>
<p>Ummh... Why are you sniffing around here?</p>
</div>
<?php
} else {
?>
<div style="width:775px">
<h1 style="color:black">Sorry, you need to be logged in to do that!</h1>
<p>Please register or log in.</p>
</div>
<?php
}
include 'layout/overall/footer.php'; ?>
