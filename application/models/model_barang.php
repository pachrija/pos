<?php
class model_barang extends CI_model
{

	function tampil_data()
	{
		$query= "SELECT b.barang_id,b.nama_barang,b.harga,kb.nama_kategori
				FROM barang as b,kategori_barang as kb
				WHERE B.kategori_id=kb.kategori_id";
		return  $this->db->query($query);
	}


	function post($data)
	{
		$this->db->insert('barang',$data);
	}

	function get_one($id)
	 {
	 	$param	=	array('barang_id'=>$id);
	 	return $this->db->get_where('barang',$param);
	 }
}

	