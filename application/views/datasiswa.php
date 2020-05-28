<div class="container">
    <br>
    <div class="row ">
        <h3>Data Siswa <a href="<?php base_url() ?>tambah-data-siswa "><button class="btn btn-success">Tambah </button></a></h3>
        
        <div class="col-md-12">   
            <?php if ($this->session->flashdata() ) :?>
                <div class="alert alert-success" role="alert">
                    Data Siswa <strong>Berhasil</strong> 
                    <?php echo $this->session->flashdata('data') ?>
                </div>
            <?php endif; ?>
        </div>
        <table class="table table-striped ">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Alamat</th>
                <th scope="col">Jurusan</th>
                <th scope="col">Kelas</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $no =1;
            foreach($siswa as $swa):
                ?>
                <tr>
                    <th scope="row"><?php echo $no ?></th>
                    <td><?php echo $swa['nama'] ?></td>
                    <td><?php echo $swa['alamat'] ?></td>
                    <td><?php echo $swa['jurusan'] ?></td>
                    <td><?php echo $swa['kelas'] ?></td>
                    <td>
                        <a href="<?php base_url() ?>edit-data-siswa/<?php echo $swa['id']  ?>"><button class="badge badge-primary">Edit</button></a> |
                        <a href="<?php base_url() ?>hapus-data-siswa/<?php echo $swa['id']  ?>"><button class="badge badge-danger">Hapus</button></a>
                    </td>
                </tr>
            <?php 
            $no++;
            endforeach; ?>
        </tbody>
        </table>
    </div>
</div>