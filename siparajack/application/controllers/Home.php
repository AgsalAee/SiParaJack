<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
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
    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('Home');
        $this->load->view('templates/footer');
    }

    public function berhasilloginuser()
    {
        $this->load->view('templates/header1');
        $this->load->view('Home');
        $this->load->view('templates/footer');
    }

    public function detail_keranjang()
    {
        if ($this->session->userdata('akses') == '3' || $this->session->userdata('akses') == '1') {
            $this->load->view('templates/header');
            $this->load->view('keranjang');
            $this->load->view('templates/footer');
        } else {
            echo "halaman tidak ada";
        }
    }

    public function tambah_ke_keranjang($id)
    {
        $produk = $this->M_produkbaju->find($id);
        $data = array(
            'id'      => $produk->id_produk,
            'qty'     => 1,
            'price'   => $produk->harga,
            'name'    => $produk->nama_brg

        );

        $this->cart->insert($data);

        redirect('Dashboard_akhir');
    }

    public function hapus_keranjang()
    {
        $this->cart->destroy();
        redirect('Home');
    }

    public function pembayaran()
    {
        $this->load->view('templates/header');
        $this->load->view('pembayaran');
        $this->load->view('templates/footer');
    }

    public function proses_pesanan()
    {
        $is_processed = $this->Model_invoice->index();
        if ($is_processed) {
            $this->cart->destroy();
            $this->load->view('templates/header');
            $this->load->view('proses_pesanan');
            $this->load->view('templates/footer');
        } else {
            echo "Maaf, Pesanan Anda Gagal diproses!";
        }
    }
}
