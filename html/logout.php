<?php
session_start();
session_destroy();

?>
<script>
alert("logout successfully");
location.replace("../index.php");
</script>