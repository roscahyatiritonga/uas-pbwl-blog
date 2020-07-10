@extends('main')

@section('content')

<div class="container">
<h3>Daftar Category</h3>
<a class="btn btn-success" href="{{ url('category/create') }}">Tambah Data</a>

<table class="table table-bordered table-striped table-hover mt-2">
	<tr>
		<td>Nama</td>
		<td>Text</td>
		<td>Hapus</td>
		<td>Edit</td>
	</tr> 
@foreach($rows as $row)
	<tr>
		<td>{{ $row->category_name }}</td>
		<td>{{ $row->category_text }}</td>
		<td><form action="{{ url('category/'.$row->category_id) }}" method="post">
			<input type="hidden" name="_method" value="DELETE">
			@csrf
			<button class="btn btn-danger">Hapus</button>
		</form></td>
		<td><a href="{{ url('category/'.$row->category_id.'/edit') }}"><button>Edit</button></a></td>
	</tr>
@endforeach
</table>
</div>
@endsection 