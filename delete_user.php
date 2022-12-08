<?php
include('header.php');
?>

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Delete User</h4>



            <?php
            if (isset($_GET['id'])) {
                $id = $_GET['id'];


                $sql = " delete from tb_user";
                $sql .= " where";
                $sql .= " user_id='$id'";


                if ($cls_conn->write_base($sql) == true) {
                    echo $cls_conn->show_message('ลบข้อมูลสำเร็จ');
                    echo $cls_conn->goto_page(1, 'show_admin.php');
                    //echo $sql;
                } else {
                    echo $cls_conn->show_message('ลบข้อมูลไม่สำเร็จ');
                }
            }

            ?>


        </div>
    </div>
</div>



<?php
include('footer.php');
?>