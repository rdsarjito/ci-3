<div class="content-wrapper">
    <section class="content-header">
        <h1>Data Mahasiswa</h1>
        <small>Control Panel</small>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Data Mahasiswa</li>
            </ol>
    </section>

    <section class="content">
        <section>
            <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                <i class="fa fa-plus"></i>
                Tambah Data Mahasiswa
            </button>
            <a class="btn btn-danger" href="<?php echo base_url('mahasiswa/print') ?>">
                <i class="fa fa-print">Print</i>
            </a>
        </section>
        <table class="table">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>NAMA MAHASISWA</th>
                    <th>NIM</th>
                    <th>TANGGAL</th>
                    <th>JURUSAN</th>
                    <th>ALAMAT</th>
                    <th>EMAIL</th>
                    <th>NO TELEPON</th>
                    <th colspan="2">AKSI</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach($mahasiswa as $mhs) : ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $mhs->nama ?></td>
                        <td><?php echo $mhs->nim ?></td>
                        <td><?php echo $mhs->tgl_lahir ?></td>
                        <td><?php echo $mhs->jurusan ?></td>
                        <td><?php echo $mhs->alamat ?></td>
                        <td><?php echo $mhs->email ?></td>
                        <td><?php echo $mhs->no_telp ?></td>
                        <td><?php echo anchor('mahasiswa/detail/'.$mhs->id,'<div class="btn btn-success btn-sm"><i class="fa fa-search-plus"></i></div>')?></td>
                        <td onclick="javascript: return confirm('Anda Yakin Hapus?')"><?php echo anchor('mahasiswa/hapus/'.$mhs->id, 
                        '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>')?></td>    
                        <td><?php echo anchor('mahasiswa/edit/'.$mhs->id, 
                        '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>    
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </section>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">FORM INPUT DATA MAHASISWA</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <?php echo form_open_multipart ('mahasiswa/tambah_aksi')?>
                <div class="form-group">
                    <label for="">Nama Mahasiswa</label>
                    <input type="text" name="nama" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">NIM</label>
                    <input type="text" name="nim" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Tanggal</label>
                    <input type="date" name="tgl_lahir" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Jurusan</label>
                    <select name="jurusan" class="form-control">
                        <option value="Sistem Informasi">Sistem Informasi</option>
                        <option value="Teknik Informatika">Teknik Informatika</option>
                        <option value="Teknik Komputer">Teknik Komputer</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Alamat</label>
                    <textarea class="form-control" name="alamat" id="alamat" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">No Telepon</label>
                    <input type="text" name="no_telp" class="form-control">
                </div>
                <div class="from-group">
                    <label>Upload Foto</label>
                    <input type="file" name="foto" class="from-control">
                </div>
                <button type="reset" class="btn btn-secondary" data-dismiss="modal">Reset</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            <?php echo form_close(); ?>
        </div>
        </div>
    </div>
</div>  