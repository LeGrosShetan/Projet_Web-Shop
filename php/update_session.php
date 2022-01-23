<?php
    session_start();
    $_SESSION['add_id']         = $_POST['add_id'];
    $_SESSION['delete_id']      = $_POST['delete_id'];
    $_SESSION['decremente_key'] = $_POST['decremente_key'];
    $_SESSION['incremente_key'] = $_POST['incremente_key'];
?>