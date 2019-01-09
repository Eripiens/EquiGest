<?php
session_start();
session_destroy();
header('location: ../equigest/index.php?action=acceuil');
exit;
?>