<div class="container">
    <br>
    <div class="row">
        <div class="col-12">
        <form method="POST" action="">
            <div class="row">
                <div class="col-md-12">
                    <label for=""><h3>Tambah Data Siswa</h3></label>
                    <?php if(validation_errors() ): ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo validation_errors(); ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" name="nama" id="nama"  placeholder="Nama siswa">
                    </div>
                    <div class="form-group">
                        <label for="kelas">Kelas</label>
                        <input type="text" class="form-control" name="kelas" id="kelas"  placeholder="Kelas">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <select name="jurusan" id="jurusan" class="form-control">
                            <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                            <option value="Teknik Mesin Otomotif">Teknik Mesin Otomotif</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" id="alamat" class="form-control" placeholder="alamat siswa"></textarea>
                    </div>
                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
            </div>
        </form>
        </div>
    </div>
</div>