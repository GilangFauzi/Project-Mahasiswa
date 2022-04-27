<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <ul class="list-group">
                <h3>Mahasiswa</h3>
                <?php foreach ($mahasiswa as $m) : ?>
                <li class="list-group-item"><?= $m['nama']; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>