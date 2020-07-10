@extends('main')

@section('content')

	<h3>Tambah Data Album</h3>
	<a href="{{ url('album') }}">Data Album</a>
	<form action="{{ url('/album') }}" method="post">
		@csrf
		<table>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="album_name"></td>
			</tr>
			<tr>
				<td>Text</td>
				<td><input type="text" name="album_text"></td>
			</tr>
			<tr>
				<td>ID Photo</td>
				<td><input type="text" name="photo_id"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>
		</table> 
	</form>
</div>
@endsection