<?php
include('header.php');
?>

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Add User</h4>
            <form class="forms-sample" method="post">
                <div class="form-group">
                    <label for="user_fullname">First Name</label>
                    <input type="text" id="user_fname" name="user_fname" class="form-control" id="exampleInputName1" placeholder="Name">
                </div>
                <div class="form-group">
                    <label for="admin_fullname">Last Name</label>
                    <input type="text" id="user_lname" name="user_lname" class="form-control" id="exampleInputName1" placeholder="Name">
                </div>
                <div class="form-group">
                    <label for="admin_email">Position</label>
                    <input type="text" id="user_position" name="user_position" class="form-control" id="exampleInputEmail3" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="admin_username">Username</label>
                    <input type="text" id="user_username" name="user_username" class="form-control" id="exampleInputPassword4" placeholder="Username">
                </div>
                <div class="form-group">
                    <label for="admin_password">Password</label>
                    <input type="password" id="user_password" name="user_password" class="form-control" id="exampleInputPassword4" placeholder="Password">
                </div>
                <div class="form-group">
                    <label>สถานะ</label>
                    <select class="js-example-basic-single w-100" name="user_status">
                        <option value="1">โสด</option>
                        <option value="2">คบซ้อน</option>
                        <option value="3">เลิกรา</option>
                        <option value="4">อยู่คนเดียว</option>
                    </select>
                </div>
                <button type="submit" name="submit" class="btn btn-primary me-2">Submit</button>
                <button type="reset" name="reset" class="btn btn-light">Cancel</button>
            </form>


            <?php

            if (isset($_POST['submit'])) {
                $user_fname = $_POST['user_fname'];
                $user_lname = $_POST['user_lname'];
                $user_position = $_POST['user_position'];
                $user_username = $_POST['user_username'];
                $user_password = $_POST['user_password'];
                $user_datereg = date("Y-m-d h:i:sa");
                $user_status = $_POST['user_status'];

                    $sql = " insert into tb_user(user_fname,user_lname,user_position,user_username,user_password,user_datereg,user_status)";
                $sql .= " values ('$user_fname','$user_lname','$user_position','$user_username','$user_password','$user_datereg','$user_status');";


                

                if ($cls_conn->write_base($sql) == true) {
                    echo $cls_conn->show_message('บันทึกข้อมูลสำเร็จ');
                    echo $cls_conn->goto_page(1, 'show_user.php');
                    //echo $sql;
                } else {
                    echo $cls_conn->show_message('บันทึกข้อมูลไม่สำเร็จ');
                }
            }
            ?>


        </div>
    </div>
</div>



<?php
include('footer.php');
?>