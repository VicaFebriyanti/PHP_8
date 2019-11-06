<?php 
include ('koneksi.php');  
?>

<div class="container">
<h1>Daftar Siswa SMKN 1 SUBANG</h1>

<a href="add_siswa.php" class="btn btn-primary">(+) Tambah Data Siswa</a><br><br>

<table id="tabel_siswa" class="table table-bordered table-striped table-hover"> 
    <thead>
        <tr>
            <th>NO</th>
            <th>NIS</th>
            <th>NAMA</th>
            <th>JK</th>
            <th>TEMPAT LAHIR</th>
            <th>TANGGAL LAHIR</th>
            <th>ALAMAT</th>
            <th>NO HP</th>
            <th>TANGGAL ENTRI</th>
            <th width="138px">AKSI</th>
        </tr>
    </thead>

    <tbody>
        <?php 
            $sql = "SELECT * FROM siswa ORDER BY nama_lengkap ASC"; //Query SQL
            $result = $db->query($sql); //Execute Query SQL
            $no = 1;
            while( $row = $result->fetch_assoc() ) //menampilkan bentuk array
            {
                echo "
                    <tr>
                        <td>".$no."</td>
                        <td>".$row["nis"]."</td>
                        <td>".$row["nama_lengkap"]."</td>
                        <td>".$row["jk"]."</td>
                        <td>".$row["tmp_lahir"]."</td>
                        <td>".$row["tgl_lahir"]."</td>
                        <td>".$row["alamat"]."</td>
                        <td>".$row["no_hp"]."</td>
                        <td>".$row["tanggal_entri"]."</td>
                        <td>
                            <a href='edit_siswa.php?id=".$row["id_siswa"]."' class='btn btn-success btn-sm'>Edit</a>
                            |
                            <a href='delete_siswa.php?id=".$row["id_siswa"]."'
                            onclick='return confirm(\"Yakin Ingin Menghapus ?\";' class='btn btn-danger btn-sm')>Delete</a>
                        </td>
                    </tr>
                ";

                $no++;
            }
        ?>
    </tbody>
</table>
</div>