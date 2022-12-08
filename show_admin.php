<?php
include('header.php');
?>

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Striped Table</h4>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>
                                ID
                            </th>
                            <th>
                                Name
                            </th>
                            <th>
                                Email
                            </th>
                            <th>
                                Tell
                            </th>
                            <th>
                                Username
                            </th>
                            <th>
                                Edit
                            </th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php

                        $sql = " select * from tb_admin";
                        $rs = $cls_conn->select_base($sql);
                        while ($row = mysqli_fetch_array($rs)) {
                        ?>
                            <tr>
                                <td><?= $row['admin_id']; ?></td>
                                <td><?= $row['admin_fullname']; ?></td>
                                <td><?= $row['admin_email']; ?></td>
                                <td><?= $row['admin_tel']; ?></td>
                                <td><?= $row['admin_username']; ?></td>

                                <td>
                                    <a href="update_admin.php?id=<?= $row['admin_id']; ?>" onClick="return confirm('คุณต้องการแก้ไขหรือไม่?')">
                                        <button type="button" class="btn btn-sm btn-primary"><i class="fa fa-pencil"></i>แก้ไข</button>
                                    </a>
                                    <a href="delete_admin.php?id=<?= $row['admin_id']; ?>" onClick="return confirm('คุณต้องการลบหรือไม่?')">
                                        <button type="button" class="btn btn-sm btn-secondary"><i class="fa fa-pencil"></i>ลบ</button>
                                    </a>
                                </td>

                            </tr>
                        <?php } ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php
include('footer.php');
?>