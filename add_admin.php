<?php
include('header.php');
?>

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Add Admin</h4>
            <form class="forms-sample" method="post">
                <div class="form-group">
                    <label for="admin_fullname">Name</label>
                    <input type="text" id="admin_fullname" name="admin_fullname" class="form-control" id="exampleInputName1" placeholder="Name">
                </div>
                <div class="form-group">
                    <label for="admin_email">Email</label>
                    <input type="email" id="admin_email" name="admin_email" class="form-control" id="exampleInputEmail3" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="admin_tel">Tel</label>
                    <input type="number" id="admin_tel" name="admin_tel" class="form-control" id="exampleInputPassword4" placeholder="Tel">
                </div>
                <div class="form-group">
                    <label for="admin_username">Username</label>
                    <input type="text" id="admin_username" name="admin_username" class="form-control" id="exampleInputPassword4" placeholder="Username">
                </div>
                <div class="form-group">
                    <label for="admin_password">Password</label>
                    <input type="password" id="admin_password" name="admin_password" class="form-control" id="exampleInputPassword4" placeholder="Password">
                </div>
                <button type="submit" name="submit" class="btn btn-primary me-2">Submit</button>
                <button type="reset" name="reset" class="btn btn-light">Cancel</button>
            </form>


            <?php
            if (isset($_POST['submit'])) {
                $admin_fullname = $_POST['admin_fullname'];
                $admin_email = $_POST['admin_email'];
                $admin_tel = $_POST['admin_tel'];
                $admin_username = $_POST['admin_username'];
                $admin_password = $_POST['admin_password'];

                $sql = " insert into tb_admin(admin_fullname,admin_email,admin_tel,admin_username,admin_password)";
                $sql .= " values ('$admin_fullname','$admin_email','$admin_tel','$admin_username','$admin_password');";

                if ($cls_conn->write_base($sql) == true) {
                    echo $cls_conn->show_message('บันทึกข้อมูลสำเร็จ');
                    echo $cls_conn->goto_page(1, 'show_admin.php');
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