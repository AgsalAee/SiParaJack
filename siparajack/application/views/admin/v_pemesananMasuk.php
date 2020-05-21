<!-- Navigation -->
<?php
$this->load->view('admin/templates/v_header');
$this->load->view('admin/templates/v_sidebar');
?>

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="https://localhost/konveksi/welcome\">
                    <em class="fa fa-home"></em>
                </a></li>
            <li class="active">Pemesanan Masuk</li>
        </ol>
    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Pemesanan Masuk</h1>
        </div>
    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <center><?php echo $this->session->flashdata('msg'); ?></center>
                <div class="panel-heading">
                    Update Pemesanan Masuk

                    <span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
                <div class="panel-body">
                    <div class="canvas-wrapper">

                        <div class="table-responsive">
                            <table class="table table-bordered" id="mydata" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th style="text-align:center;width:40px;">No</th>
                                        <th>ID Pemesanan</th>
                                        <th>Nama</th>
                                        <th>No Telephone</th>
                                        <th>Alamat</th>
                                        <th>Kep_Produk</th>
                                        <th>Ukuran</th>
                                        <th>Jumlah</th>
                                        <th>Pesan</th>
                                        <th style="width:200px;text-align:center;">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- <?php
                                            $no = 0;
                                            foreach ($data->result_array() as $a) :
                                                var_dump($a)
                                                // $no++;
                                                // $id = $a['id_Pemesanan'];
                                                // $nama = $a['nama'];
                                                // $no_telp = $a['no_telp'];
                                                // $alamat = $a['alamat'];
                                                // $kep_produk = $a['kep_produk'];
                                                // $ukuran = $a['ukuran'];
                                                // $jumlah = $a['jumlah'];
                                                // $pesan = $a['pesan']
                                            ?>
                                        <tr>
                                            <td style="text-align:center;">
                                                <a class="btn btn-xs btn-info" href="#modalEditPelanggan<?php echo $id ?>" data-toggle="modal" title="Edit"> Gunakan Bahan</a>
                                                <a class="btn btn-xs btn-danger" href="#modalHapusPelanggan<?php echo $id ?>" data-toggle="modal" title="Hapus">Hapus</a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?> -->
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/.row-->

    <!-- ============ GUNAKAN BAHAN =============== -->
    <?php
    foreach ($data2->result_array() as $a) {
        $no++;
        $id = $a['d_rencana_id'];
        $kode = $a['d_rencana_kode'];
        $produkid = $a['r_produk_id'];
        $produknama = $a['produk_nama'];
        $kainid = $a['d_rencana_kain_id'];
        $kainnm = $a['d_rencana_kain_nama'];
        $kainwarna = $a['d_rencana_kain_warna'];
        $kainsatuan = $a['d_rencana_kain_satuan'];
        $jumlah = $a['d_rencana_jumlah'];

    ?>
        <div id="modalEditPelanggan<?php echo $id ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h3 class="modal-title" id="myModalLabel">Gunakan Bahan</h3>
                    </div>
                    <form class="form-horizontal" method="post" action="<?php echo base_url() . 'admin/penggunaanbahan/gunakan_bahan' ?>">
                        <div class="modal-body">
                            <p>Gunakan Bahan Sekarang ?</p>
                            <input name="kode" type="hidden" value="<?php echo $id; ?>">
                            <input name="idkain" type="hidden" value="<?php echo $kainid; ?>">
                            <input name="jumlah" type="hidden" value="<?php echo $jumlah; ?>">
                            <input name="rencanakode" type="hidden" value="<?php echo $kode; ?>">
                        </div>
                        <div class="modal-footer">
                            <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                            <button type="submit" class="btn btn-primary">Gunakan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <?php
    }
    ?>

    <!-- ============ MODAL HAPUS =============== -->
    <?php
    foreach ($data2->result_array() as $a) {
        $no++;
        $id = $a['d_rencana_id'];
        $kode = $a['d_rencana_kode'];
        $produkid = $a['r_produk_id'];
        $produknama = $a['produk_nama'];
        $kainid = $a['d_rencana_kain_id'];
        $kainnm = $a['d_rencana_kain_nama'];
        $kainwarna = $a['d_rencana_kain_warna'];
        $kainsatuan = $a['d_rencana_kain_satuan'];
        $jumlah = $a['d_rencana_jumlah'];

    ?>
        <div id="modalHapusPelanggan<?php echo $id ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h3 class="modal-title" id="myModalLabel">Hapus Bahan Produksi</h3>
                    </div>
                    <form class="form-horizontal" method="post" action="<?php echo base_url() . 'admin/penggunaanbahan/hapus_bahan' ?>">
                        <div class="modal-body">
                            <p>Hapus data Bahan ini?</p>
                            <input name="kode" type="hidden" value="<?php echo $id; ?>">
                        </div>
                        <div class="modal-footer">
                            <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                            <button type="submit" class="btn btn-primary">Hapus</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <?php
    }
    ?>

    <!--END MODAL-->

    <?php
    $this->load->view('admin/templates/v_footer');
    ?>

    <script type="text/javascript">
        $(function() {
            $('#datetimepicker').datetimepicker({
                format: 'DD MMMM YYYY HH:mm',
            });

            $('#datepicker').datetimepicker({
                format: 'YYYY-MM-DD',
            });
            $('#datepicker2').datetimepicker({
                format: 'YYYY-MM-DD',
            });
            $('#datepicker3').datetimepicker({
                format: 'YYYY-MM-DD',
            });
            $('#datepicker4').datetimepicker({
                format: 'YYYY-MM-DD',
            });

            $('#timepicker').datetimepicker({
                format: 'HH:mm'
            });
        });
    </script>