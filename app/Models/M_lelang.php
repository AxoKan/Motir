<?php 

namespace App\Models;
use CodeIgniter\Model;
class M_lelang extends Model
{
	public function tampil($table){
		
		return $this->db
					->table($table)
					->get()
					->getResult();

	}
	public function tambah($table, $isi){
		return$this->db->table($table)
						->insert($isi);
	}
	public function hapus($table, $where){
		return $this->db->table($table)
						->delete($where);
						
	}
		public function edit($table, $isi, $where){
		return $this->db->table($table)
						->update($isi, $where);
		}
		public function getWhere($table,$where){
			return $this->db->table($table)
							->getWhere($where)
							->getRow();

		}
		public function join($table, $table2, $on){
			return $this->db->table($table)
							->join($table2,$on,'left')
							->get()
							->getResult();
							}
	public function joinWhere($table, $table2, $on, $where) {
    $result = $this->db->table($table)
                       ->join($table2, $on, 'left')
                       ->getWhere($where)
                       ->getRow();

}
	public function joinWheregetResult($table, $table2, $on, $where) {
    $result = $this->db->table($table)
                       ->join($table2, $on)
                       ->getWhere($where)
                       ->getResult();

}
public function joinThreeWhere($tabel, $tabel2, $tabel3, $on, $on2, $where){
        return $this->db->table($tabel)
                        ->join($tabel2, $on, 'left')
                        ->join($tabel3, $on2, 'left')
                        ->getWhere($where)
                        ->getRow();
    
    }
    public function joinThreeWhereM($tabel, $tabel2, $tabel3, $on, $on2, $where){
    return $this->db->table($tabel)
                    ->join($tabel2, $on, 'left')
                    ->join($tabel3, $on2, 'left')
                    ->getWhere($where)
                    ->getResult(); // Use getResult() to retrieve multiple rows
}


    public function joinThreeTables($tabel, $tabel2, $tabel3, $on1, $on2){
        return $this->db->table($tabel)
        ->join($tabel2, $on1, 'left')
        ->join($tabel3, $on2, 'left')
        ->get()
        ->getResult();
			}	
	 public function joinFourTable($tabel, $tabel2, $tabel3,$tabel4, $on1, $on2,$on3){
        return $this->db->table($tabel)
        ->join($tabel2, $on1, 'left')
        ->join($tabel3, $on2, 'left')
        ->join($tabel4, $on3, 'left')
        ->get()
        ->getResult();
			}	

	 public function joinFourWhere($tabel, $tabel2, $tabel3, $tabel4, $on1, $on2, $on3, $where)
{
    return $this->db->table($tabel)
        ->join($tabel2, $on1, 'left')
        ->join($tabel3, $on2, 'left')
        ->join($tabel4, $on3, 'left')
        ->getWhere($where) // Condition should be passed as the second parameter
        ->getRow();
}


		public function upload($photo)
		{
    		$imageName = $photo->getName();
    		$photo->move(ROOTPATH . 'public/img', $imageName);
}				
public function cari($table, $table2, $on, $awal, $akhir){
			return $this->db->table($table)
							->join($table2,$on,'left')
							->getWhere("tanggal BETWEEN '$awal' AND '$akhir'")
							->getResult();
}

    public function getProdukPrice($produk)
{
    $query = $this->db->table('produk')
                      ->select('harga')
                      ->where('id_produk', $produk)
                      ->get();
    
    $row = $query->getRow();

    if ($row) {
        return $row->harga;
    } else {
        // If product not found, return 0 or handle the situation as needed
        // For now, let's return 0
        return 0;
    }
}


    // Other methods in your model
}
