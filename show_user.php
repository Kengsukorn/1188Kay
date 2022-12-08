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
                                Position
                            </th>
                            <th>
                                Username
                            </th>
                            <th>
                                Password
                            </th>
                            <th>
                                Edit
                            </th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php

                        $sql = " select * from tb_user";
                        $rs = $cls_conn->select_base($sql);
                        while ($row = mysqli_fetch_array($rs)) {
                        ?>
                            <tr>
                                <td><?= $row['user_id']; ?></td>
                                <td><?= $row['user_fname' . 'user_lname']; ?></td>
                                <td><?= $row['user_position']; ?></td>
                                <td><?= $row['user_username']; ?></td>
                                <td><?= $row['user_password']; ?></td>

                                <td>
                                    <a href="update_user.php?id=<?= $row['user_id']; ?>" onClick="return confirm('คุณต้องการแก้ไขหรือไม่?')">
                                        <button type="button" class="btn btn-sm btn-primary"><i class="fa fa-pencil"></i>แก้ไข</button>
                                    </a>
                                    <a href="delete_user.php?id=<?= $row['user_id']; ?>" onClick="return confirm('คุณต้องการลบหรือไม่?')">
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