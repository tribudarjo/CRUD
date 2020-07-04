<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JawabanModel;

class JawabanController extends Controller
{
    public function index($pertanyaan_id) 
    {
    	$jawaban = JawabanModel::get_all($pertanyaan_id);
    	$pertanyaan = JawabanModel::get_pertanyaan($pertanyaan_id);
     	return view('jawaban.jawaban_pertanyaan', compact('jawaban','pertanyaan'));
    }

    public function store(Request $request)
    {
    	$data = [
    		'isi_jawaban' => $request->isi_jawaban,
    		'pertanyaan_id' => $request->pertanyaan_id,
    		'created_at' => NOW(),
    		'updated_at' => NOW()
    	];
    	$store = JawabanModel::save($data);
    	return back();
    }
}
