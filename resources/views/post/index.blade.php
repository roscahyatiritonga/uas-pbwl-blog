@extends('main')

@section('content')

<div class="container">
<h3>Daftar Post</h3>
<a class="btn btn-success" href="{{ url('post/create') }}">Tambah Data</a>

<table class="table table-bordered table-striped table-hover mt-2">
	<tr>
		<td>Date</td>
		<td>Slug</td>
		<td>Title</td>
		<td>Txt</td>
		<td>ID Category</td>
		<td>Hapus</td>
		<td>Edit</td>
	</tr> 
@foreach($rows as $row)
	<tr>
		<td>{{ $row->post_date }}</td>
		<td>{{ $row->post_slug }}</td>
		<td>{{ $row->post_title }}</td>
		<td>{{ $row->post_text }}</td>
		<td>{{ $row->category_id }}</td>
		<td>
				<form action="{{url('post/'.$row->post_id)}}" method="POST">
					<input name="_method" type="hidden" value="DELETE">
					@csrf
					<button class="btn btn-danger"> HAPUS </button>
				</form>
			</td>
		<td><a href="{{ url('post/'.$row->post_id.'/edit') }}"><button>Edit</button></a></td>
	</tr>
@endforeach
</table>
</div>
@endsection 