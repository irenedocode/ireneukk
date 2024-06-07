<?php
session_destroy();

echo "
    <script>
    alert('You have been logged out.');
    window.location.href = 'index.php';
    </script>
    ";
?>