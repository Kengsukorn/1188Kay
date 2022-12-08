<?php
include('header.php');
?>

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Update Information Admin</h4>


            <?php
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $sqlu = " select * from tb_admin";
                $sqlu .= " where ";
                $sqlu .= " admin_id='$id'";
                $rsu = $cls_conn->select_base($sqlu);
                while ($rowu = mysqli_fetch_array($rsu)) {
                    $admin_id = $rowu['admin_id'];
                    $admin_fullname = $rowu['admin_fullname'];
                    $admin_email = $rowu['admin_email'];
                    $admin_tel = $rowu['admin_tel'];
                    $admin_username = $rowu['admin_username'];
                    $admin_password = $rowu['admin_password'];
                }
            }

            ?>


            <form class="forms-sample" method="post">
                <input type="hidden" name="admin_id" value="<?= $admin_id; ?>">
                <div class="form-group">
                    <label for="admin_fullname">Name</label>
                    <input type="text" id="admin_fullname" name="admin_fullname" class="form-control" id="exampleInputName1" placeholder="Name" value="<?= $admin_fullname; ?>">
                </div>
                <div class="form-group">
                    <label for="admin_email">Email</label>
                    <input type="email" id="admin_email" name="admin_email" class="form-control" id="exampleInputEmail3" placeholder="Email" value="<?= $admin_email; ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="admin_tel">Tel</label>
                    <input type="number" id="admin_tel" name="admin_tel" class="form-control" id="exampleInputPassword4" placeholder="Tel" value="<?= $admin_tel; ?>">
                </div>
                <div class="form-group">
                    <label for="admin_username">Username</label>
                    <input type="text" id="admin_username" name="admin_username" class="form-control" id="exampleInputPassword4" placeholder="Username" value="<?= $admin_username; ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="admin_password">Password</label>
                    <input type="password" id="admin_password" name="admin_password" class="form-control" id="exampleInputPassword4" placeholder="Password" value="<?= $admin_password; ?>">
                </div>
                <button type="submit" name="submit" class="btn btn-primary me-2">Submit</button>
                <button type="reset" name="reset" class="btn btn-light">Cancel</button>
            </form>


            <?php
            if (isset($_POST['submit'])) {
                $admin_id = $_POST['admin_id'];
                $admin_fullname = $_POST['admin_fullname'];
                $admin_email = $_POST['admin_email'];
                $admin_tel = $_POST['admin_tel'];
                $admin_username = $_POST['admin_username'];
                $admin_password = $_POST['admin_password'];

                $sql = " update tb_admin";
                $sql .= " set";
                $sql .= " admin_fullname='$admin_fullname'";
                $sql .= " ,admin_email='$admin_email'";
                $sql .= " ,admin_tel='$admin_tel'";
                $sql .= " ,admin_username='$admin_username'";
                $sql .= " ,admin_password='$admin_password'";
                $sql .= " where";
                $sql .= " admin_id='$admin_id'";




                if ($cls_conn->write_base($sql) == true) {
                    echo $cls_conn->show_message('แก้ไขข้อมูลสำเร็จ');
                    echo $cls_conn->goto_page(1, 'show_admin.php');
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