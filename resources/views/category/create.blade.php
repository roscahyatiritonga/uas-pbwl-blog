@extends('main')

@section('content')

<div class="container">
	<h3>Tambah Data Category</h3>
	<a href="{{ url('category') }}">Data Category</a>
	<form action="{{ url('/category') }}" method="post">
		@csrf
		<table>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="category_name"></td>
			</tr>
			<tr>
				<td>Text</td>
				<td><input type="text" name="category_text"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>
		</table> 
	</form>
</div>
@endsection