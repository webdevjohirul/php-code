<!-- login-logout-start -->
<?php
// session_start();
if (!isset($_SESSION['user'])) {
    header("Location: http://localhost/php/php-code/login.php");
}
?>
<!-- login-logout-end -->


<?php echo '<h3 class="footer">Footer</h3>' ?>


</body>
</html>
