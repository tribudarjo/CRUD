@extends('layouts.master');

@section('content')
<div class="container">
	@foreach($pertanyaan as $p)
	<?php
		$id = $p->id;
		?>
	<h1>{{ $p->judul_pertanyaan }}</h1><br>
	<h3>{{ $p->isi_pertanyaan }}</h3>
	<small>Dibuat pada {{ $p->created_at }}</small><br>
	<small>Diupdate pada {{ $p->updated_at }}</small><br><br><hr><br>
	@endforeach	
	<h4>Form Tambah Jawaban</h4>
	<form method="POST" action="{{ url('jawaban/'.$id) }}">
		@csrf
		<textarea class="form-control" name="isi_jawaban" placeholder="Ketik Disini"></textarea>
		<input type="hidden" name="pertanyaan_id" value="{{ $id }}">
		<button class="btn btn-sm btn-primary mt-2" type="submit" name="jawab">Tambah Jawaban</button>
	</form><hr>
<h3>Jawaban</h3><hr>
		<ol>
			<?php 
			if((count($jawaban)) != 0){

			?>
		@foreach($jawaban as $j)
		
		<li>{{ $j->isi_jawaban }}<br>
			<small>Dibuat pada {{ $j->created_at }}</small><br>
			<small>Diupdate pada {{ $j->updated_at }}</small><hr></li>
		@endforeach
		<?php
			} else {
				?>
				No Data
				<?php
			}
			?>
		</ol><hr>
	
</div>
@endsection