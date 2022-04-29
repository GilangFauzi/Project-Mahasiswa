<div class="container">
    <?php if ($this->session->flashdata('flash')) : ?>
    <div class="row mt-3">
        <div class="col-md-5">

            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data Mahasiswa <strong>Berhasil</strong> <?= $this->session->flashdata('flash'); ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    </div>
    <?php endif; ?>
    <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?= base_url(); ?>mahasiswa/tambah" class="btn btn-primary">Add Mahasiswa</a>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-6">
            <ul class="list-group">
                <h3>Mahasiswa</h3>
                <?php foreach ($mahasiswa as $m) : ?>
                <li class="list-group-item"><?= $m['nama']; ?>
                    <a href="<?= base_url(); ?>mahasiswa/hapus/<?= $m['id'] ?>"
                        class="badge rounded-pill bg-danger float-end me-1" onclick="confirm('Do You Sure?')">Delete</a>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>