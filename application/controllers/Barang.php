<?php
defined('BASEPATH') or exit('Not Allowed Direct Access');

class Barang extends CI_Controller {

    public function __construct() {
        parent:: __construct();
        $this->load->model('Barang_model');
        $this->load->model('Ukuran_model');
        $this->load->model('Warna_model');
    }
    public function index() {
        $this->data['active'] = 'barang';
        $this->data['title'] = 'Daftar Barang';
        $this->data['barang'] = $this->Barang_model->getData();
        $this->template->load('admin/barang/list-barang', $this->data);
    }
    
    public function add() {
        $this->data['title'] = 'Tambah Data Barang';
        $this->data['active'] = 'barang';
        $this->data['ukuran'] = $this->Ukuran_model->getData();
        $this->data['warna'] = $this->Warna_model->getData();
        $this->template->load('admin/barang/add', $this->data);
    }

    public function add_save() {
        
                $config['upload_path']          = './assets/dataimg/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg';
                $config['max_size']             = 10000;
                $config['max_width']            = 10000;
                $config['max_height']           = 10000;

                $this->upload->initialize($config);
                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('gambar1'))
                {
                        // echo('ada yg error');
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('upload_form', $error);
                }
                else
                {
                    $gambar= $this->upload->data();
                    $gambar = $gambar['file_name'];

                    $ukuran = $this->input->post('uk_list');
                    $uk = implode(",", $ukuran);
                    $warna = $this->input->post('warna_list');
                    $war = implode(",", $warna);

                    $data =array(
                        'judul' => $this->input->post('judul'),
                        'gambar1' => $gambar,
                        'harga' => $this->input->post('harga'),
                        'deskripsi' => $this->input->post('deskripsi'),
                        'ukuran' => $uk,
                        'warna' => $war,
                        'kategori' => $this->input->post('kategori'),
                    );
            
                    $simpan = $this->db->insert('barang',$data);
            
                    if($simpan) {
                        redirect('Barang');
                    }else {
                        echo('data tidak dapat dimasukan');
                    }
                }
        
    }

    public function edit($id) {
        $this->data['title'] = 'Edit Data';
        $this->data['active'] = 'barang';
        $this->data['barang'] = $this->Barang_model->edit($id);
        $this->data['ukuran'] = $this->Ukuran_model->getData();
        $this->data['warna'] = $this->Warna_model->getData();
        $this->template->load('admin/barang/edit', $this->data);
    }

    public function edit_save() {
                $config['upload_path']          = './assets/dataimg';
                $config['allowed_types']        = 'gif|jpg|png|jpeg';
                $config['max_size']             = 10000;
                $config['max_width']            = 10000;
                $config['max_height']           = 10000;
                $this->upload->initialize($config);
                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('gambar1'))
                {
                        echo('ada yg error');
                }
                else
                {
                    $gambar= $this->upload->data();
                    $gambar = $gambar['file_name'];

                    $ukuran = $this->input->post('uk_list');
                    $uk = implode(",", $ukuran);
                    $warna = $this->input->post('warna_list');
                    $war = implode(",", $warna);

                    $data =array(
                        'judul' => $this->input->post('judul'),
                        'gambar1' => $gambar,
                        'harga' => $this->input->post('harga'),
                        'deskripsi' => $this->input->post('deskripsi'),
                        'ukuran' => $uk,
                        'warna' => $war,
                        'kategori' => $this->input->post('kategori')
                    );
            
                    $update = $this->Barang_model->edit_save($data, $this->input->post('id'));
                    if($update) {
                        redirect('Barang');
                    }else{
                        echo('gagal update data');
                    }
                }
    }

    public function barang_ready($id) {
            $this->db->set('status', 0);
            $this->db->where('id', $id);
            $simpan = $this->db->update('barang');
            if($simpan) {
                redirect('Barang');
            }else {
                redirect('Barang/edit/<?=$id?>');
}

}
public function barang_habis($id) {
$this->db->set('status', 1);
$this->db->where('id', $id);
$simpan = $this->db->update('barang');
if($simpan) {
redirect('Barang');
}else {
redirect('Barang/edit/<?=$id?>');
}

}

public function unggulan($id) {
$this->db->set('unggulan', 1);
$this->db->where('id', $id);
$simpan = $this->db->update('barang');
if($simpan) {
redirect('Barang');
}else {
redirect('Barang/edit/<?=$id?>');
}
}
public function no_unggulan($id) {
$this->db->set('unggulan', 0);
$this->db->where('id', $id);
$simpan = $this->db->update('barang');
if($simpan) {
redirect('Barang');
}else {
redirect('Barang/edit/<?=$id?>');
}
}

public function hapus($id) {
$delete = $this->Barang_model->delete($id);

if($delete) {
redirect('Barang');
}else {
echo('data gabisa dihapus');
}
}
}

?>