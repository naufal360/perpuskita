<img src="<?= base_url('assets/img/logsig-img.png') ?>" class="col-12 d-flex align-items-center justify-content-center" style="position: absolute; opacity: 60%;">
<section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
    <div class="container justify-content-center">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-lg-12 col-md-6 d-flex flex-column align-items-center justify-content-center">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="pt-4 pb-2">
                            <h5 class="card-title text-center pb-0 fs-4 font-weight-bold">Update Data</h5>
                        </div>
                        <form class="row g-3 needs-validation" action="" method="POST" novalidate>
                            <input type="hidden" name="id" value="<?= $buku['id']; ?>">
                            <div class="col-12">
                                <label for="name" class="form-label">Nama Peminjam</label>
                                <div class="input-group has-validation">
                                    <input type="text" name="name" class="form-control" id="name" required value="<?= $buku['nama_peminjam']; ?>">
                                    <div class="invalid-feedback">Please enter your username.</div>
                                </div>
                            </div>
                            <div class="col-12">
                                <label for="datestart" class="form-label">Tanggal Pinjam</label>
                                <input type="text" name="datestart" class="form-control" id="datestart" placeholder="yyyy-mm-dd" required value="<?= $buku['tgl_peminjam']; ?>">
                                <div class="invalid-feedback">Please enter your Date!</div>
                            </div>
                            <div class="col-12">
                                <label for="buku" class="form-label">Buku</label>
                                <div class="input-group has-validation">
                                    <input type="text" name="buku" class="form-control" id="buku" required value="<?= $buku['nama_buku']; ?>">
                                    <div class="invalid-feedback">Please enter your username.</div>
                                </div>
                            </div>
                            <div class="col-12">
                                <label for="pengarang" class="form-label">Pengarang</label>
                                <div class="input-group has-validation">
                                    <input type="text" name="pengarang" class="form-control" id="pengarang" required value="<?= $buku['pengarang']; ?>">
                                    <div class="invalid-feedback">Please enter your username.</div>
                                </div>
                            </div>
                            <div class="col-12">
                                <label for="dateend" class="form-label">Tanggal Kembali</label>
                                <div class="input-group has-validation">
                                    <input type="text" name="dateend" class="form-control" id="dateend" placeholder="yyyy-mm-dd" required value="<?= $buku['tgl_pengembalian']; ?>">
                                    <div class="invalid-feedback">Please enter your username.</div>
                                </div>
                            </div>
                            <div class="col-12">
                                <label for="keterangan">Keterangan</label>
                                <select id="keterangan" name="keterangan" keterangan class="form-control" required>
                                    <option selected><?= $buku['keterangan']; ?></option>
                                    <option>Telat</option>
                                    <option>Tepat Waktu</option>
                                    <option>Tidak Kembali/Hilang</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <br>
                            </div>
                            <div class="col-12">
                                <button class="btn w-100" type="submit" name="edit" style="background-color: #52784F; color: white;">Update Data</button>
                            </div>
                        </form>
                        <div class="col-12">
                            <a href="<?= base_url('perpuskita/'); ?>" class="btn btn-link ml-0 pl-0 pb-0 pt-2" style="font-size: small;">Return Home</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>