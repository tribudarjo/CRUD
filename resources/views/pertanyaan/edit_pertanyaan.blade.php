@extends('layouts.master');

@section('content')
<h1 class="card card-header">Edit Pertanyaan</h1>
<form action="{{ url('pertanyaan') }}/{{ $pertanyaan->id }}" method="post">
@csrf
@method('PUT')
<input type="hidden" name="id" value="{{ $pertanyaan->id }}">
	<table  class="table">
		<tr>
			<td style="width: 10%;"><label>Judul Pertanyaan</label></td>
			<td style="width: 2%;">:</td>
			<td><input class="form-control" type="text" name="judul_pertanyaan" value="{{ $pertanyaan->judul_pertanyaan }}"></td>
		</tr>
		<tr>
			<td style="width: 10%;"><label>Isi Pertanyaan</label></td>
			<td style="width: 2%;">:</td>
			<td><textarea class="form-control" name="isi_pertanyaan" rows="4">{{ $pertanyaan->isi_pertanyaan }}</textarea></td>
		</tr>
		<tr>
			<td><button type="submit" class="btn btn-primary">Update</button></td>
		</tr>
	</table>
	
</form>
@endsection