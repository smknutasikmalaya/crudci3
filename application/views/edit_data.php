<div class="container">
    <br>
    <div class="row">
        <div class="col-12">
        <form method="POST" action="">
            <div class="row">
                <div class="col-md-12">
                    <label for=""><h3>Edit Data Siswa</h3></label>
                    <?php if(validation_errors() ): ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo validation_errors(); ?>
                        </div>
                    <?php endif; ?>
                </div>
                
                <?php
                    foreach($siswa as $sis):
                ?>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" name="nama"  value="<?php  echo $sis['nama']; ?>" id="nama"  placeholder="Nama siswa">
                    </div>
                    <div class="form-group">
                        <label for="kelas">Kelas</label>
                        <input type="text" class="form-control" name="kelas" id="kelas" value="<?php  echo $sis['kelas']; ?>" placeholder="Kelas">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <select name="jurusan" id="jurusan" class="form-control">
                            <option value="<?php  echo $sis['jurusan']; ?>"><?php  echo $sis['jurusan']; ?></option>
                            <?php 
                                $jurusan = $sis['jurusan'];
                                if ($jurusan == "Rekayasa Perangkat Lunak"):
                            ?>
                                <option value="Teknik Mesin Otomotif">Teknik Mesin Otomotif</option>
                            <?php 
                                else:
                            ?>
                            <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                            <?php 
                                endif;
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" id="alamat" class="form-control" placeholder="alamat siswa"><?php  echo $sis['alamat']; ?></textarea>
                    </div>
                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">Perbarui Data</button>
                </div>
                <?php    
                    endforeach;
                ?>
            </div>
        </form>
        </div>
    </div>
</div>