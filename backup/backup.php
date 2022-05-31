<?php
    include_once ('anggota_ctrl.php');
    if(isset($_GET['act'])){
?>
<a href="" class="btn btn-outline-primary my-4">Tambah Data</a>
<table class="table table-bordered">
    <tr>
        <th>ID anggota</th>
        <th>nama anggota</th>
        <th>status anggota</th>
    </tr>
        <?php
            $qry_listagt =mysqli_query ($koneksi_db, "select * from mst_dataagt order by id_anggota ASC")
            or die("gagal mengakses table user".mysqli_error($koneksi_db));
            while($row =mysqli_fetch_row($qry_listagt)){
        ?>
    <tr>
        <td><?=$row ['id_anggota'];?></td>
        <td><?=$row ['nm_anggota'];?></td>
        <td><?=$row ['status_anggota'];?></td>  
        <td>
            <a href="?modul =mod_anggota&act=adit&id=<?=$row ['id_anggota']?>" class="btn btn-outline-primary">
                <i class="bi bi-pencil-fill">edit</i>
            </a>
            <a href="?modul =mod_anggota&act=delete&id=<?=$row['id_anggota']?>" class="btn btn-outline-danger">
                <i class="bi bi-trash-fill">delete</i>
            </a>
        </td>
    </tr>
    <?php
        }
    ?>
</table>
<?php
    }
    else if(isset($_GET['act']) && ($_GET['act']=="add")){
?>
<div class="container-fluid my-4">
    <h3><?= $judula ?></h3>
    <form action="mod_anggota/anggota_ctrl.php?modul=mod_anggota&act=save" method="POST">
        <div class="row my-2">
            <div class="col-md-2">
                <label for="txt_user" class="form-label">username</label>
            </div>
            <div class="col-md-6">
                <input type="text" name="txt_user" id="txt_user" class="form-control">
            </div>
        </div>
        <div class="row my-2">
            <div class="col-md-2">
                <label for="txt_pass" class="form-label">password</label>
            </div>
            <div class="col-md-6">
                <input type="password" name="txt_pass" id="txt_user" class="form-control"><br>
                <input type="checkbox" name="ck_aktif" id="ck_aktif" class="form-check-input">aktif <br>
                <button type="submit" class="btn btn-outline-success">
                    <i class="bi bi-check-circle-fill"> submit</i>
                </button>
                <button type="cancel" class="btn btn-outline-danger">
                    <i class="bi bi-x-circle-fill"> reset</i> 
                </button>
            </div>
        </div>
    </form>
</div>
<?php
    }
    // if(isset($_GET['act']) && ($_GET['act']=="edit")){}
?>