 @extends('main')

@section('content')

<div class="container">
	<h3>Edit Data Post</h3>
	<a href="{{ url('post') }}">Data Post</a>
		<form action="{{ url('/post/' . $row->post_id) }}" method="POST">
		<input name="_method" type="hidden" value="PATCH">
	@csrf
	<table>
		<tr>
			<td>Date</td>
			<td><input type="text" name="post_date" value="{{ $row->post_date }}"></td>
		</tr>
		<tr>
			<td>Slug</td>
			<td><input type="text" name="post_slug" value="{{ $row->post_slug }}"></td>
		</tr>
		<tr>
			<td>Title</td>
			<td><input type="text" name="post_title" value="{{ $row->post_title }}"></td>
		</tr>
		<tr>
			<td>Text</td>
			<td><input type="text" name="post_text" value="{{ $row->post_text }}"></td>
		</tr>
		<tr>
			<td>ID Category</td>
			<td><input type="text" name="category_id" value="{{ $row->category_id }}"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="UPDATE"></td>
		</tr>
	</table>
</form>
</div>
@endsection 