<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

/**
 * JawabanModel.php
 */
class JawabanModel
{
	public static function get_all($pertanyaan_id){
      	$jawaban = DB::table('jawaban')
		  ->join('pertanyaan', 'pertanyaan.id', '=', 'jawaban.pertanyaan_id')
		  ->select('jawaban.isi_jawaban', 'pertanyaan.id', 'jawaban.created_at', 'jawaban.updated_at')
		  ->where('pertanyaan.id', $pertanyaan_id)
		  ->get();
		return $jawaban;
	}

	public static function get_pertanyaan($pertanyaan_id){
		$pertanyaan = DB::table('pertanyaan')
		->where('id',$pertanyaan_id)
		->get();
		return $pertanyaan;
	}

	public static function save($data){

		$save_jawaban = DB::table('jawaban')->insert($data);
		return $save_jawaban;
	}
}