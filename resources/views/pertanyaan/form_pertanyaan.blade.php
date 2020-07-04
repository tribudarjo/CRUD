@extends('layouts.master');

@section('content')
<h1 class="card card-header">Form Pertanyaan</h1>
<form action="{{ url('/pertanyaan') }}" method="post">
@csrf
	<table  class="table">
		<tr>
			<td style="width: 10%;"><label>Judul Pertanyaan</label></td>
			<td style="width: 2%;">:</td>
			<td><input class="form-control" type="text" name="judul_pertanyaan" placeholder="Ketik Judul Disini"></td>
		</tr>
		<tr>
			<td style="width: 10%;"><label>Isi Pertanyaan</label></td>
			<td style="width: 2%;">:</td>
			<td><textarea class="form-control" name="isi_pertanyaan" rows="4" placeholder="Ketik Pertanyaan Disini"></textarea></td>
		</tr>
		<tr>
			<td><button type="submit" class="btn btn-primary">Submit</button></td>
		</tr>
	</table>
	
</form>
@endsection