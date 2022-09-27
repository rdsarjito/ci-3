<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Data Mahasiswa
            <small>Control Panel</small>
        </h1>
        <small>Control Panel</small>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
    </section>
    <section class="section">
        <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i>Tambah Data Mahasiswa</button>
    </section>
    <section class="content">
        <table class="table">
            <tr>
                <td>NO</td>
                <td>NAMA MAHASISWA</td>
                <td>NIM</td>
                <td>TANGGAL</td>
                <td>JURUSAN</td>
            </tr>
            <?php
            $no = 1;
            foreach($mahasiswa as $mhs) : ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $mhs->nama ?></td>
                    <td><?php echo $mhs->nim ?></td>
                    <td><?php echo $mhs->tgl_lahir ?></td>
                    <td><?php echo $mhs->jurusan ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form method="post" action="<?php echo base_url().'mahasiswa/tambah_aksi' ?>">
                <div class="form-group">
                    <label>Nama Mahasiswa</label>
                    <input type="text" name="nama" class="form-control">
                </div>

                <div class="form-group">
                    <label>NIM</label>
                    <input type="text" name="nim" class="form-control">
                </div>

                <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <input type="date" name="tgl_lahir" class="form-control">
                </div>

                <div class="form-group">
                    <label>Jurusan</label>
                    <select class="form-control" name="jurusan">
                        <option>Sistem Informasi</option>
                        <option>Teknik Informamtika</option>
                        <option>Teknik Komputer</option>
                    </select>

                </div>
                <button type="reset" class="btn btn-secondary" data-dismiss="modal">Reset</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
        </div>
    </div>
    </div>

</div>