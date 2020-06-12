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

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <center><?php echo $this->session->flashdata('msg'); ?></center>
                    <div class="panel-heading">

                        <div class="btn btn-sm btn-success" data-toggle="modal" data-target="#largeModal"><span class="fa fa-plus"></span> Tambah Produk Baju</a></div>

                        <span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span>
                    </div>
                    <div class="panel-body">
                        <div class="canvas-wrapper">

                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                                    <thead>
                                        <tr>
                                            <th style="text-align:center;width:50px;">No</th>
                                            <th>Nama Produk</th>
                                            <th>Gambar Produk</th>
                                            <th>Warna Produk</th>
                                            <th style="width:300px;text-align:center;">Deskripsi Produk</th>
                                            <th style="width:120px;text-align:center;">Harga</th>
                                            <th style="text-align:center;">Stok</th>
                                            <th style="width:140px;text-align:center;">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 0;
                                        foreach ($data->result_array() as $a) :
                                            $no++;
                                            $id = $a['produk_id'];
                                            $nm = $a['produk_nama'];
                                            $warna = $a['produk_warna'];
                                            $deskripsi = $a['produk_deskripsi'];
                                            $harga = $a['produk_harga'];
                                            $stok = $a['produk_stok'];
                                            $gambar = $a['gambar'];
                                        ?>
                                            <tr>
                                                <td style="text-align:center;"><?php echo $no; ?></td>
                                                <td><?php echo $nm; ?></td>
                                                <td style="text-align:center;"><img src="<?php echo base_url('upload/product/' . $gambar) ?>" width="100" /></td>
                                                <td><?php echo $warna; ?></td>
                                                <td><?php echo $deskripsi; ?></td>
                                                <td style="text-align:right;"><?php echo 'Rp ' . number_format($harga); ?></td>
                                                <td style="text-align:center;"><?php echo $stok; ?></td>

                                                <td style="text-align:center;">
                                                    <a class="btn btn-xs btn-warning" href="#modalEditPelanggan<?php echo $id ?>" data-toggle="modal" title="Edit">Edit</a>
                                                    <a class="btn btn-xs btn-danger" href="#modalHapusPelanggan<?php echo $id ?>" data-toggle="modal" title="Hapus">Hapus</a>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>