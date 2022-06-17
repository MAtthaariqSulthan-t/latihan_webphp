<?php
	require_once "../config/koneksi_db.php";
	require_once "../config/config.php";
?>
<div class="container pt-1">
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Email</th>
            <th>Nama</th>
            <th>Iformasi</th>
            <th>Keterangan</th>
        </tr>
        <?php
        $dakor = mysqli_query($connect_db, "SELECT * FROM mst_responden order by id desc");
        while($row = mysqli_fetch_array($dakor)){
        ?>
        <tr>
            <td><?=$row['id'];?></td>
            <td><?=$row['Email'];?></td>
            <td><?=$row['Nama'];?></td>
            <td><?=$row['informasi'];?></td>
            <td><?=$row['keterangan'];?></td>
        </tr>
        <?php }?>
    </table>
</div>