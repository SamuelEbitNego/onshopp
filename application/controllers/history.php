<?php

class History extends CI_Controller
{
    public function user()
    {
        $user = $this->session->userdata('user');
        $user = $this->db->where('username', $user)->get('user')->row();
        $user = $this->user();
        $data['user'] = $user;

        return $user;
    }

    public function bukti()
    {
        // Ambil data user yang sedang login
        $user = $this->session->userdata('user');
        $user = $this->db->where('user', $user)->get('user')->row();

        // Jika user ditemukan
        if ($user) {
            // Ambil data pembelian dari model M_barang berdasarkan id_user
            $data['pesanan'] = $this->model_barang->get_pesanan_by_user($user->id_user)->result();

            // Tampilkan halaman riwayat belanja
            $this->load->view('bukti-pdf', $data);
        } else {
            // Tampilkan halaman login jika user tidak ditemukan
            $this->load->view('login');
        }
    }

    public function generate_dompdf()
    {
        // Ambil data transaksi pembayaran dari database
        $data['tb_pesanan'] = $this->db->get('tb_pesanan')->result();
        $data['user'] = $this->db->get('user')->result();


        // Load library DOMPDF
        $this->load->library('dompdf_gen');

        // Buat template HTML untuk file PDF
        $html = $this->load->view('bukti-pdf', $data, true);

        // Konfigurasi DOMPDF
        $this->dompdf->set_paper('A4', 'portrait');
        $this->dompdf->load_html($html);

        // Render file PDF
        $this->dompdf->render();

        // Simpan file PDF ke server
        $filename = 'domp.pdf';
        $this->dompdf->stream($filename, array("Attachment" => false));
    }
}
