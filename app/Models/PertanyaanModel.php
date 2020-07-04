<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

/**
 *  PertanyaanModel.php
 */
class PertanyaanModel
{
	
	public static function get_all() 
	{
		$pertanyaan = DB::table('pertanyaan')->get();
		return $pertanyaan;
	}

	public static function save($data)
	{
		$save_pertanyaan = DB::table('pertanyaan')->insert($data);
		return $save_pertanyaan;
	}

	public static function detail_pertanyaan($id)
	{
		$pertanyaan = DB::table('pertanyaan')
		->where('id', $id)
		->first();

		return $pertanyaan;
	}

	public static function detail_jawaban($id)
	{

		$jawaban = DB::table('pertanyaan')
		->join('jawaban', 'pertanyaan.id', '=', 'jawaban.pertanyaan_id')
		->select('pertanyaan.id', 'jawaban.isi_jawaban', 'jawaban.created_at', 'jawaban.updated_at')
		->where('pertanyaan.id', $id)
		->get();

		return $jawaban;
	}

	public static function update($id, $request)
	{
		$pertanyaan = DB::table('pertanyaan')
		->where('id', $id)
		->update([
			'judul_pertanyaan' => $request['judul_pertanyaan'],
			'isi_pertanyaan' => $request['isi_pertanyaan'],
			'updated_at' => NOW()
		]);
		return $pertanyaan;
	}

	public static function delete_data($id)
	{
		$hapus_pertanyaan = DB::table('pertanyaan')
		->where('id', $id)
		->delete();
		return $hapus_pertanyaan;
	}
}