<?php

namespace App\Models;

use CodeIgniter\Model;

class KantordesaModel extends Model
{
    protected $table = 'kantordesa';
    protected $primaryKey = 'id_kantordesa';
    protected $allowedFields = ['id_kantordesa', 'nama_kantordesa', 'alamat', 'lat', 'lng', 'foto'];

    public function tambah($data)
    {
        return $this->insert($data);
    }

    public function getdata()
    {
        return $this->findAll();
    }

    public function getdataid($id)
    {
        return $this->find($id);
    }

    public function edit($data, $id_kantordesa)
    {
        return $this->update($id_kantordesa, $data);
    }

    public function hapus($id)
    {
        return $this->delete($id);
    }
}
?>