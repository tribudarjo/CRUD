@extends('layouts.master');

@section('content')
<table class="table table-bordered">
                  <thead>                  
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Judul Pertanyaan</th>
                      <th>Isi pertanyaan</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  	<?php
                  	if(count($pertanyaan) != 0){
                  		?>
                  	@foreach($pertanyaan as $p)
                    <tr>
                      <td>{{ $p->id }}</td>
                      <td>{{ $p->judul_pertanyaan }}</td>
                      <td>{{ $p->isi_pertanyaan }}</td>
                      <td>
                      	<a href="jawaban/{{ $p->id }}" class="btn btn-sm btn-primary m-1" name="jawab">Jawab</a> 
                      	<a href="pertanyaan/{{ $p->id }}" class="btn btn-sm btn-success m-1">Detail</a>
                      	<a href="pertanyaan/{{ $p->id }}/edit" class="btn btn-sm btn-warning m-1" name="edit">Edit</a>
                      	<form action="{{ url('pertanyaan') }}/{{ $p->id }}" method="POST" style="display: inline;">
                      		@csrf
                      		@method('DELETE')
                      		<button type="submit" class="btn btn-sm btn-danger m-1">delete</button>
                      	</form>
                      </td>
                    </tr>
                    @endforeach
                    <?php
                  	}
              		else {
              			?>
              			<tr><td span="3">No Data</td></tr>
              		<?php
              	}?>
                  </tbody>
                </table>
@endsection