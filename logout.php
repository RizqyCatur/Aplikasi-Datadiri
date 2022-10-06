<?php
    include('./input-config.php');

    session_destroy();

    echo "
        <script>
            alert('Logout Bethasil');
            window.location='login.php';
        </script>
    ";
?>