<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pemesanan extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('Pemesanan');
        $this->load->view('templates/footer');
    }

    public function tambah_pesanan()
    {

        if ($this->form_validation->run() == FALSE) {
            $this->index();
        } else {
            $id_pemesanan = $this->input->POST('id_pemesanan');
            $nama = $this->input->POST('nama');
            $no_telp = $this->input->POST('no_telp');
            $alamat = $this->input->POST('alamat');
            $produk = $this->input->POST('produk');
            $kep_produk = $this->input->POST('kep_produk');
            $ukuran = $this->input->POST('ukuran');
            $jumlah = $this->input->POST('jumlah');
            $gambar = $this->input->POST('gambar');
            $pesan = $this->input->POST('pesan');

            //konfigurasi untuk gambar
            $gambar = $_FILES['gambar']['name'];
            if ($gambar = '') {
            } else {
                $config['upload_path'] = './assets/upload';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';

                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('gambar')) {
                    echo "Gambar Gagal Diupload! (Format Gambar:jpg/jpeg/png/gif)";
                } else {
                    $gambar = $this->upload->data('file_name');
                }
            }
        }
    }
}
