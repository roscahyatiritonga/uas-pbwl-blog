@extends('main')

@section('content')

<div class="container">
	<h3>Tambah Data Photo</h3>
	<a href="{{ url('photo') }}">Data Photos</a>
	<form action="{{ url('/photo') }}" method="post">
		@csrf
		<table>
			<tr>
				<td>Date</td>
				<td><input type="date" name="photo_date"></td>
			</tr>
			<tr>
				<td>Title</td>
				<td><input type="text" name="photo_title"></td>
			</tr>
			<tr>
				<td>Text</td>
				<td><input type="text" name="photo_text"></td>
			</tr>
			<tr>
				<td>Upload</td>
				<td><input type="file" name="photo_upload"></td>
			</tr>

			<tr>
				<td>ID Post</td>
				<td><input type="text" name="post_id"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>
		</table> 
	</form>
</div>
@endsection