<?php
session_start();

$error = "";
isset($_POST['user_username']) ? $username = $_POST['user_username'] : $username = "";
isset($_POST['user_password']) ? $password = $_POST['user_password'] : $password = "";
if (!empty($username) && !empty($password)) {
    $c = mysqli_connect("localhost", "root", "qwerty@123", "db_admin");
    mysqli_query($c, "SET NAMES UTF8");
    $sql = " 
                SELECT * FROM user 
                WHERE 
                ( user_username = '{$username}' ) AND  
                ( user_password = '{$password}' ) 
               ";
    $q = mysqli_query($c, $sql);
    $f = mysqli_fetch_assoc($q);
    if (isset($f['id'])) {
        $_SESSION['id'] = $f['id'];
        $_SESSION['user_username'] = $f['user_username'];
    } else {
        $error = "Username หรือ Password ไม่ถูกต้อง";
    }
    mysqli_close($c);
}
?>

<?php
include('header.php');
?>


<div class="content-wrapper">
    <div class="row">
        <div class="col-sm-12">
            <div class="home-tab">

                <?php if (empty($_SESSION['id'])) { ?>
                    <form action="login.php" method="POST">
                        <fieldset>
                            <legend>เข้าสู่ระบบ</legend>
                            <input type="text" name="user_username" placeholder="Username" required>
                            <input type="password" name="user_password" placeholder="Password" required>
                            <input type="submit" value="Login">
                            <?= $error; ?>
                        </fieldset>
                    </form>
                <?php } else { ?>
                    <fieldset>
                        <legend>ยินดีต้อนรับ</legend>
                        <div>คุณ <b><?= $_SESSION['user_username']; ?></b> <a href="logout.php">ล็อกเอาท์</a></div>
                    </fieldset>
                <?php } ?>

            </div>
        </div>
    </div>
</div>


<?php
include('footer.php');
?>