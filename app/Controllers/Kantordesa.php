<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KantordesaModel;
use CodeIgniter\HTTP\ResponseInterface;

class Kantordesa extends BaseController
{
    protected $kantordesamodel;
    public function __construct()
    {
        $this->kantordesamodel = new KantordesaModel();

    }

    public function index()
    {
        $data['data'] = $this->kantordesamodel->findAll();

        echo view('templates/navbar');
        echo view('templates/main');
        echo view('beranda', $data);

    }

    public function kantordesa()
    {
        $data['data'] = $this->kantordesamodel->findAll();

        echo view('templates/navbar');
        echo view('templates/main');
        echo view('kantordesa', $data);

    }

    public function peta()
    {
        $data['data'] = $this->kantordesamodel->findAll();

        echo view('templates/navbar');
        echo view('peta', $data);
        echo view('templates/main');
        echo view('templates/footer', $data);
    }


    public function tambah()
    {

        echo view('templates/navbar');
        echo view('templates/main');
        echo view('tambah_kantordesa');

    }

    public function proses_tambah_data()
    {
        $id_kantordesa = $this->request->getPost('id_kantordesa');
        $nama_kantordesa = $this->request->getPost('nama_kantordesa');
        $alamat = $this->request->getPost('alamat');
        $lat = $this->request->getPost('lat');
        $lng = $this->request->getPost('lng');

        $file = $this->request->getFile('foto');
        if ($file->isValid() && !$file->hasMoved()) {
            $nama_file = $file->getName();
            $file->move('./file/', $nama_file);
        }

        $data = [
            'id_kantordesa' => $id_kantordesa,
            'nama_kantordesa' => $nama_kantordesa,
            'alamat' => $alamat,
            'lat' => $lat,
            'lng' => $lng,
            'foto' => $nama_file
        ];

        $this->kantordesamodel->insert($data);
        return redirect()->to('/kantordesa');
    }

    public function edit($id_kantordesa)
    {
        $data['data'] = $this->kantordesamodel->find($id_kantordesa);

        echo view('templates/navbar');
        echo view('templates/main');
        echo view('edit_kantordesa', $data);
       
    }


    public function proses_edit_data()
    {
        $id_kantordesa = $this->request->getPost('id_kantordesa');
        $nama_kantordesa = $this->request->getPost('nama_kantordesa');
        $alamat = $this->request->getPost('alamat');
        $lat = $this->request->getPost('lat');
        $lng = $this->request->getPost('lng');

        $data = [
            'nama_kantordesa' => $nama_kantordesa,
            'alamat' => $alamat,
            'lat' => $lat,
            'lng' => $lng
        ];

        $file = $this->request->getFile('foto');
        if ($file->isValid() && !$file->hasMoved()) {
            $nama_file = $file->getName();
            $file->move('./file/', $nama_file);
            $data['foto'] = $nama_file;
        }

        $this->kantordesamodel->update($id_kantordesa, $data);
        return redirect()->to('/kantordesa');
    }

    public function hapus($id)
    {
        $this->kantordesamodel->delete($id);
        return redirect()->to('/kantordesa');
    }
}
?>