<?php 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION["username"]) || $_SESSION["username"] == "") {
?>
    <script type="text/javascript">
        alert("Session Expired");
        document.location="../login/login.php";
    </script>
<?php  
    exit();
}
?>