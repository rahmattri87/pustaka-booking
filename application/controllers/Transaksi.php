<?php
class Transaksi extends CI_Controller
{

    public function index()

    {

          $this->load->view('view-input-sepatu');
    }

    public function cetak()
    {
      $this->form_validation->set_rules('nama', 'Nama Pembeli',
        'required|min_length[3]',[
          'required' => 'Nama Pembeli harus diisi',
          'min_length' => 'Nama terlalalu pendek'
        ]);

      $this->form_validation->set_rules('nomor', 'No Telp',
        'required|min_length[3]',[
          'required' => 'No Telp harus diisi',
          'min_length' => 'No Telp terlalalu pendek'
        ]);

      if ($this->form_validation->run() != true) {
        $this->load->view('view-input-beli');
      } else {
          $merk = $this->input->post('merk');
          if ($merk == "Nike") {
            $harga = 375000;
          }
          else if ($merk == "Adidas") {
            $harga = 300000;
          }
          else if ($merk == "Kickers") {
            $harga = 250000;
          }
          else if ($merk == "Eiger") {
            $harga = 270000;
          }
          else if ($merk == "Bucherri") {
            $harga = 400000;
          }

          $data =[
            'nama' => $this -> input -> post('nama'),
            'nomor' => $this -> input -> post('nomor'),
            'merk' => $this -> input -> post('merk'),
            'harga' => $harga,
            'size' => $this -> input -> post('size')
          ];
          $this->load->view('view-data-sepatu' , $data);
         }
    }
}
?>