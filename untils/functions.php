<?php
    function alert($msg) {
        echo "<script>alert('$msg')</script>";
    }

    function href($url) {
        echo "<script>location.href='$url'</script>";
        // header("Location: $url");
    }
?>