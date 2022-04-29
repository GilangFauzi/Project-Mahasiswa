<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Add Mahasiswa
                </div>
                <div class="card-body">
                    <?php if (validation_errors()) : ?>
                    <div class="alert alert-danger" role="alert">
                        <?= validation_errors(); ?>
                    </div>
                    <?php endif; ?>
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama">
                        </div>
                        <div class="form-group">
                            <label for="nim">Nim</label>
                            <input type="text" class="form-control" id="nim" name="nim" placeholder="Masukan nim">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="Masukan email">
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <select class="form-control" id="jurusan" name="jurusan">
                                <option>---Select Jurusan---</option>
                                <option value="Teknik Informatika">Teknik Informatika</option>
                                <option value="Keperawatan">Keperawatan</option>
                                <option value="Teknik Industri">Teknik Industri</option>
                                <option value="Teknik Elektro">Teknik Elektro</option>
                                <option value="Sastra Inggris">Sastra Inggris</option>
                            </select>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-5">
                                <button type="submit" name="tambah" class="btn btn-primary">Add Data</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>