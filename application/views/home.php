<header class="px-5 mb-3" style="background-color: #52784F;">
    <nav class="navbar sticky-top navbar-expand px-5">
        <a class="navbar-brand logo" href="#">PERPUSKITA</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse py-2" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto py-1">
            </ul>
            <ul class="navbar-nav mr-2">
                <li class="mx-2">
                    <a class="btn btn-light" href="<?= base_url('perpuskita/add') ?>" role="button">Tambah Data</a>
                </li>
                <li class="mx-2">
                    <a class="btn" style="background-color: #bcbf1dc9; color: white;" href="<?= base_url('perpuskita/logout') ?>" role="button">Sign Out</a>
                </li>
            </ul>
        </div>
    </nav>
</header>

<section class="mb-5">
    <div class="pricing-header px-3 py-1 pt-md-3 pb-md-4 mx-auto text-center">
        <h1 class="display-4 pt-0">Daftar Peminjam Buku</h1>
        <?php if ($this->session->flashdata('pesan') == 'Ditambah') { ?>
            <div class="alert alert-success" role="alert">
                A New Data Successfully Added!
            </div>
        <?php } elseif ($this->session->flashdata('pesan') == 'Diubah') { ?>
            <div class="alert alert-success" role="alert">
                A Data Successfully Changed!
            </div>
        <?php } elseif ($this->session->flashdata('pesan') == 'Dihapus') { ?>
            <div class="alert alert-success" role="alert">
                A Data Has Been Deleted!
            </div>
        <?php } ?>
    </div>

    <div class="container">
        <table class="table table-hover mb-5">
            <thead class="thead-light align-middle">
                <tr>
                    <th rowspan="2" class="align-middle text-center">No.</th>
                    <th rowspan="2" class="align-middle text-center">Nama Peminjam</th>
                    <th rowspan="2" class="align-middle text-center">Tanggal Pinjam</th>
                    <th rowspan="2" class="align-middle text-center">Buku</th>
                    <th rowspan="2" class="align-middle text-center">Pengarang</th>
                    <th rowspan="2" class="align-middle text-center">Tanggal Kembali</th>
                    <th rowspan="2" class="align-middle text-center">Keterangan</th>
                    <th rowspan="2" class="align-middle text-center">Edit</th>
                    <th rowspan="2" class="align-middle text-center">Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($buku as $data) {
                ?>
                    <tr <?php if ($data['keterangan'] == "Tidak Kembali/Hilang") {
                            echo "class = 'bg-danger'";
                        } elseif ($data['keterangan'] == "Telat") {
                            echo "class = 'bg-warning'";
                        }
                        ?>>
                        <th class="align-middle text-center"><?= $no++ ?></th>
                        <td class="align-middle"><?= $data['nama_peminjam'] ?></td>
                        <td class="align-middle text-center"><?= $data['tgl_peminjam'] ?></td>
                        <td class="align-middle text-center"><?= $data['nama_buku'] ?></td>
                        <td class="align-middle text-center"><?= $data['pengarang'] ?></td>
                        <td class="align-middle text-center"><?= $data['tgl_pengembalian'] ?></td>
                        <td class="align-middle text-center"><?= $data['keterangan'] ?></td>
                        <td class="align-middle text-center">
                            <a href="<?= base_url('perpuskita/edit/' . $data['id']) ?>" class="align-middle"><img src="<?= base_url('assets/img/edit.png') ?>" style="width: 30px; height: 30px;"></a>
                        </td>
                        <td class="align-middle text-center">
                            <a href="<?= base_url('perpuskita/remove/' . $data['id']) ?>" onclick="return confirm('Are you sure want to delete this data?')" class="align-middle"><img src="<?= base_url('assets/img/bin.png') ?>" style="width: 30px; height: 30px;"></a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</section>