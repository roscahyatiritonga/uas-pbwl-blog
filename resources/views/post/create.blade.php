@extends('main')

@section('content')

<div class="container">
	<h3>Tambah Data Post</h3>
	<a href="{{ url('post') }}">Data Post</a>
	<form action="{{ url('/post') }}" method="post">
		@csrf
		<table>
			<tr>
				<td>Date</td>
				<td><input type="date" name="post_date"></td>
			</tr>
			<tr>
				<td>Slug</td>
				<td><input type="text" name="post_slug"></td>
			</tr>
			<tr>
				<td>Title</td>
				<td><input type="text" name="post_title"></td>
			</tr>
			<tr>
				<td>Text</td>
				<td><input type="text" name="post_text"></td>
			</tr>
			<tr>
				<td>ID Category</td>
				<td><input type="text" name="category_id"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>
		</table> 
	</form>
</div>
@endsection