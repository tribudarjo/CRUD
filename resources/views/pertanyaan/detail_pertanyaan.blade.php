@extends('layouts.master');

@section('content')
<div class="container">
	<?php
		$id = $pertanyaan->id;
		?>
	<h1>{{ $pertanyaan->judul_pertanyaan }}</h1><br>
	<h3>{{ $pertanyaan->isi_pertanyaan }}</h3>
	<small>Dibuat pada {{ $pertanyaan->created_at }}</small><br>
	<small>Diupdate pada {{ $pertanyaan->updated_at }}</small><br><br><hr><br>
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
		</ol>
</div>
@endsection