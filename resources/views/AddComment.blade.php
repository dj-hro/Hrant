@extends('home')
@section('himq')


<div class="add_comment_div">

<form method="post" action="{{route('addcomment')}}" enctype= "multipart/form-data">
	{{ csrf_field() }}
	

    <div class="file-upload">
     <label>
          <input type="file" name="photo">
          <span>Choose your photo</span>
     </label>
	</div>
	<span type="text" id="filename" class="filename"></span>

	

	
	<input type="hidden" name="name" class="add_comment_input_name" value="{{Auth::user()->name}}"><br>
	<input type="hidden" name="id" value="{{Auth::user()->id}}">
	<label>Text</label><br>
	<textarea name="text" class="add_comment_input_text" rows="10"></textarea><br>

	

	<button type="submit" class="add_comment_button">Add Comment</button>

</form>
</div>

@endsection