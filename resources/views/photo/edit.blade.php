 @extends('main')

@section('content')

<div class="container">
	<h3>Edit Data Photo</h3>
	<a href="{{ url('photo') }}">Data Photos</a>
		<form action="{{ url('/photo/' . $row->photo_id) }}" method="POST">
		<input name="_method" type="hidden" value="PATCH">
	@csrf
	<table>
		<tr>
			<td>Date</td>
			<td><input type="text" name="photo_date" value="{{ $row->photo_date }}"></td>
		</tr>
		<tr>
			<td>Title</td>
			<td><input type="text" name="photo_title" value="{{ $row->photo_title }}"></td>
		</tr>
		<tr>
			<td>Text</td>
			<td><input type="text" name="photo_text" value="{{ $row->photo_text }}"></td>
		</tr>
		<tr>
			<td>Upload</td>
			<td><input type="file" name="photo_upload" value="{{ $row->photo_upload }}"></td>
		</tr>
		<tr>
			<td>ID Post</td>
			<td><input type="text" name="post_id" value="{{ $row->post_id }}"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="UPDATE"></td>
		</tr>
	</table>
</form>
</div>
@endsection 