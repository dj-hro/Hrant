@extends('home')
@section('himq')
<div class="div_for_button_for_add_picture">
	<button class="standart_knopka" id="show_picture_add_field">Add picture</button>
</div>
<div class="div_for_adding_picture_form">
	<form method="post" action="{{route('addandviewpictures')}}" enctype= "multipart/form-data">
		{{ csrf_field() }}
			<div class="div_for_adding_picture_input">
				<input type="file" name="picture" class="form-control">
			</div> 
				<input type="text" name="explain" class="add_photo_explain_input" value="."><br>
				<input type="hidden" name="id" value="{{Auth::user()->id}}">
			<button type="submit" class="standart_knopka">Save</button>
		
</form>
</div>



@foreach($userpics as $userpics)
<!-- <div class="div_for_users_all_pics">
<img src="/uploads/UsersPictures/{{$userpics->picture}}" width="200px"  style="border-radius: 10px; float: left;">
</div> -->


<div class="div_for_users_all_pics {{$userpics->id}}">

	
		<img src="/image/close.png" name="{{$userpics->id}}" class="delete_user_picture" width="20px" height="20px" 
		style="position: absolute; right: 0; top: 0; cursor: pointer;">
	

	<a href="/uploads/UsersPictures/{{$userpics->picture}}" data-lightbox="{{$userpics->picture}}" data-title="{{$userpics->explains}}">	
		<img src="/uploads/UsersPictures/{{$userpics->picture}}" width="200px"  style="border-radius: 10px; float: left;">
	</a>
		<div class="div_for_picture_explain">{{$userpics->explains}}</div>
</div> 
@endforeach



@endsection
