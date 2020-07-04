<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PertanyaanModel;
use App\Models\JawabanModel;

class PertanyaanController extends Controller
{
    public function index() 
    {
    	$pertanyaan = PertanyaanModel::get_all();
    	return view('index', compact('pertanyaan'));
    }

    public function create()
    {
    	return view('pertanyaan.form_pertanyaan');
    }

    public function jawab($pertanyaan_id)
    {
    	$data = JawabanModel::get_pertanyaan($pertanyaan_id);
    	return view('pertanyaan.jawab', compact('data'));
    }
    public function store(Request $request)
    {
    	$data = [
    				'judul_pertanyaan' => $request->judul_pertanyaan,
    				'isi_pertanyaan' => $request->isi_pertanyaan,
    				'created_at' => NOW(),
    				'updated_at' => NOW()
    	];

    	$tanya = PertanyaanModel::save($data);
    	return redirect('pertanyaan');
    }

    public function detail($id)
    {
    	$pertanyaan = PertanyaanModel::detail_pertanyaan($id);
    	$jawaban = PertanyaanModel::detail_jawaban($id);
    	// dd($pertanyaan);
    	return view('pertanyaan.detail_pertanyaan', compact('pertanyaan', 'jawaban'));
    }

    public function edit($id)
    {
    	$pertanyaan = PertanyaanModel::detail_pertanyaan($id);
    	return view('pertanyaan.edit_pertanyaan', compact('pertanyaan'));
    }

    public function update_data($id, Request $request)
    {
    	$pertanyaan = PertanyaanModel::update($id, $request->all());
    	return redirect('pertanyaan');
    }

    public function delete_data($id)
    {
    	$hapus_pertanyaan = PertanyaanModel::delete_data($id);
    	return redirect('pertanyaan');
    }
}
