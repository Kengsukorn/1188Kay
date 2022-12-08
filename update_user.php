<?php
include('header.php');
?>

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Update Information User</h4>


            <?php
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $sqlu = " select * from tb_user";
                $sqlu .= " where ";
                $sqlu .= " user_id='$id'";
                $rsu = $cls_conn->select_base($sqlu);
                while ($rowu = mysqli_fetch_array($rsu)) {
                    $user_id = $rowu['user_id'];
                    $user_fname = $rowu['user_fname'];
                    $user_lname = $rowu['user_lname'];
                    $user_position = $rowu['user_position'];
                    $user_username = $rowu['user_username'];
                    $user_password = $rowu['user_password'];
                    $user_status = $rowu['user_status'];
                }
            }

            ?>


            <form class="forms-sample" method="post">
                <input type="hidden" name="user_id" value="<?= $user_id; ?>">
                <div class="form-group">
                    <label for="user_fullname">First Name</label>
                    <input type="text" id="user_fname" name="user_fname" class="form-control" id="exampleInputName1" placeholder="Name" value="<?= $user_fname; ?>">
                </div>
                <div class="form-group">
                    <label for="user_lname">Last Name</label>
                    <input type="text" id="user_lname" name="user_lname" class="form-control" id="exampleInputName1" placeholder="Name" value="<?= $user_lname; ?>">
                </div>
                <div class="form-group">
                    <label for="user_position">Position</label>
                    <input type="text" id="user_position" name="user_position" class="form-control" id="exampleInputEmail3" placeholder="Email" value="<?= $user_position; ?>">
                </div>
                <div class="form-group">
                    <label for="user_username">Username</label>
                    <input type="text" id="user_username" name="user_username" class="form-control" id="exampleInputPassword4" placeholder="Username" value="<?= $user_username; ?>">
                </div>
                <div class="form-group">
                    <label for="user_password">Password</label>
                    <input type="password" id="user_password" name="user_password" class="form-control" id="exampleInputPassword4" placeholder="Password" value="<?= $user_password; ?>">
                </div>
                <div class="form-group">
                    <label>สถานะ</label>
                    <select class="js-example-basic-single w-100" name="user_status" placeholder="Password">

                        <?php
                        if ($user_status == 1) {
                            echo '<option value="1">โสด</option>
                        <option value="2">คบซ้อน</option>
                        <option value="3">เลิกรา</option>
                        <option value="4">อยู่คนเดียว</option>';
                        } elseif ($user_status == 2) {
                            echo '<option value="2">คบซ้อน</option>
                            <option value="1">โสด</option>
                            <option value="3">เลิกรา</option>
                        <option value="4">อยู่คนเดียว</option>';
                        } elseif ($user_status == 3) {
                            echo '<option value="3">เลิกรา</option>
                            <option value="1">โสด</option>
                        <option value="2">คบซ้อน</option>
                        <option value="4">อยู่คนเดียว</option>';
                        } elseif ($user_status == 4) {
                            echo '<option value="4">อยู่คนเดียว</option>
                            <option value="1">โสด</option>
                        <option value="2">คบซ้อน</option>
                        <option value="3">เลิกรา</option>';
                        } else {
                            echo '<option value="">test</option>';
                        }
                        ?>

                        <!--
                        <option value="1">โสด</option>
                        <option value="2">คบซ้อน</option>
                        <option value="3">เลิกรา</option>
                        <option value="4">อยู่คนเดียว</option>
                    -->

                    </select>
                </div>
                <button type="submit" name="submit" class="btn btn-primary me-2">Submit</button>
                <button type="reset" name="reset" class="btn btn-light">Cancel</button>
            </form>


            <?php
            if (isset($_POST['submit'])) {
                $user_id = $_POST['user_id'];
                $user_fname = $_POST['user_fname'];
                $user_lname = $_POST['user_lname'];
                $user_position = $_POST['user_position'];
                $user_username = $_POST['user_username'];
                $user_password = $_POST['user_password'];
                $user_status = $_POST['user_status'];

                $sql = " update tb_user";
                $sql .= " set";
                $sql .= " user_fname='$user_fname'";
                $sql .= " ,user_lname='$user_lname'";
                $sql .= " ,user_position='$user_position'";
                $sql .= " ,user_username='$user_username'";
                $sql .= " ,user_password='$user_password'";
                $sql .= " ,user_status='$user_status'";
                $sql .= " where";
                $sql .= " user_id='$user_id'";




                if ($cls_conn->write_base($sql) == true) {
                    echo $cls_conn->show_message('แก้ไขข้อมูลสำเร็จ');
                    echo $cls_conn->goto_page(1, 'show_user.php');
                    //echo $sql;
                } else {
                    echo $cls_conn->show_message('แก้ไขข้อมูลไม่สำเร็จ');
                }
            }

            ?>


        </div>
    </div>
</div>



<?php
include('footer.php');
?>