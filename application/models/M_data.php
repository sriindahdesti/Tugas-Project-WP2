<?php

class M_data extends CI_Model
{

	// dashboard
	function getWisata()
	{
		$query = $this->db->query("SELECT * FROM wisata ");
		return $query;
	}


	// detail wisata
	function selectWisata($id)
	{
		$query = $this->db->query("SELECT * FROM wisata WHERE id = $id");
		return $query;
	}


	// home - wisata (ketika tambah wisata bertambah juga)
	function getList()
	{
		$query = $this->db->query("SELECT * FROM wisata ORDER BY id ASC LIMIT 6  ");
		return $query;
	}

	// telusuri
	function fillWisata($key)
	{
		$query = $this->db->query("SELECT * FROM wisata WHERE kategori = '$key'  ");
		return $query;
	}


	// tampil profile
	public function getTotalCart($id)
	{
		$query = $this->db->query("SELECT COUNT(id) AS mycart FROM keranjang where id_user = $id");
		return $query;
	}


	// detail pesan
	public function getDetailPesan($id)
	{
		$query = $this->db->query("SELECT * FROM pesan WHERE id = $id ");
		return $query;
	}
}
