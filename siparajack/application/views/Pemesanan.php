<body>
    <!-- mian-content -->
    <section class="mian-content">

        <!-- /header-top-->
        <div class="header-top">
            <!-- /banner-info-->
            <div class="banner-content text-center text-white">
                <h3 class="text-uppercase"> Konveksi</h3>
                <h3>Paramount Jacket</h3>

                <div class="banner-high-lights text-center">

                    <div class="ban-text text-center py-3">

                    </div>
                </div>
            </div>
            <!-- //banner-info-->
        </div>
        <!-- //header-top-->
    </section>
    <section class="banner-bottom py-lg-5 py-md-5 py-3" id="feature">
        <div class="container">
            <div class="inner-sec py-lg-5 py-3">
                <h2 class="tittle text-center"> Pemesanan</h2>

                <div class="card">
                    <div class="card-body">

                        <form method="POST" action="<?php echo base_url('pemesanan/tambah_pesanan') ?>" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Nama Lengkap</label>
                                        <input type=" text" name="nama" class="form-control">
                                        <?php echo form_error('nama', '<div class="text-small text-danger">', '</div>') ?>
                                    </div>

                                    <div class="form-group">
                                        <label>Nomor Kendaraan</label>
                                        <input type="text" name="nopol" class="form-control">
                                        <?php echo form_error('nopol', '<div class="text-small text-danger">', '</div>') ?>
                                    </div>

                                    <div class="form-group">
                                        <label>Alamat Lengkap</label>
                                        <input type="text" name="merk" class="form-control">
                                        <?php echo form_error('merk', '<div class="text-small text-danger">', '</div>') ?>
                                    </div>

                                    <div class="form-group">
                                        <label>Pilih Produk</label>
                                        <select name="status" class="form-control">
                                            <option value="">----------Pilih Produk----------</option>
                                            <option value="1">T-shirt</option>
                                            <option value="0">Jaket</option>
                                            <option value="0">Almamater</option>
                                        </select>
                                        <?php echo form_error('id_produk', '<div class="text-small text-danger">', '</div>') ?>
                                    </div>

                                    <div class="form-group">
                                        <label>Keperluan Produk</label>
                                        <input type="text" name="kep_produk" class="form-control">
                                        <?php echo form_error('kep_produk', '<div class="text-small text-danger">', '</div>') ?>
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Ukuran</label> <br>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                            <label class="form-check-label" for="inlineCheckbox1">1</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                            <label class="form-check-label" for="inlineCheckbox2">2</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3" disabled>
                                            <label class="form-check-label" for="inlineCheckbox3">3 (disabled)</label>
                                        </div>
                                        <?php echo form_error('ukuran', '<div class="text-small text-danger">', '</div>') ?>
                                    </div>

                                    <div class="form-group">
                                        <label>Jumlah</label>
                                        <input type="text" name="jumlah" class="form-control">
                                        <?php echo form_error('jumlah', '<div class="text-small text-danger">', '</div>') ?>
                                    </div>

                                    <div class="form-group">
                                        <label>Desain</label>
                                        <input type="file" name="gambar" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label>Pesan</label>
                                        <input type="text" name="jumlah" class="form-control">
                                        <?php echo form_error('pesan', '<div class="text-small text-danger">', '</div>') ?>
                                    </div>

                                    <button type="reset" class="btn btn-danger mt-4">Reset</button>
                                    <button type="submit" class="btn btn-primary mt-4">Simpan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="row mt-lg-5 mt-md-4 mt-4">
                </div>
            </div>
        </div>
    </section>