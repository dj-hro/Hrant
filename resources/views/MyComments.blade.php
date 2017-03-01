@extends('home')
@section('himq')



@foreach($comments as $comment)

					


<div class="comments" id="{{$comment->id}}">


@if(!File::exists(public_path('/uploads/comments/') . $comment->image))


	<img src="/uploads/standarts/{{$comment->image}}" width="50px" height="50px" style="border-radius: 50%; float: left;">



@else 

	<img src="/uploads/comments/{{$comment->image}}" width="50px" height="50px" style="border-radius: 50%; float: left;">


@endif





	<div class="comment_writer_name">{{$comment->name}}</div>
	<div class="comment_writer_text"> {{$comment->comment}}</div>					
</div>  
					<div class="div_for_edit {{$comment->id}}" style="display: none;">
						<form method="post" action="{{route('editcomment')}}" enctype= "multipart/form-data">
						{{ csrf_field() }}

							    <div class="file-upload" id="file-upload">
     								<label>
          								<input type="file" name="photo">
          									<span>Choose your photo</span>
     								</label>
								</div>
								<span type="text" id="filename" class="filename"></span>

							<input type="hidden" name="id" value="{{$comment->id}}">
							<textarea class="edit_input_field" name="text" rows="5"> {{$comment->comment}} </textarea> <br>
							<button type="submit" class="edit_comment_save_button">Save</button>
						</form>
					</div>

					






<form method="post" action="{{route('deletecomment')}}">
{{ csrf_field() }}
 <input type="hidden" name="id" value="{{$comment->id}}"> 
<button class="delete_comment"><img width="10px" height="10px" src="image/jnjelu.png"></button>
</form>

<!-- <input type="hidden" name="_token" value="{{csrf_token()}}">
					
<button class="delete_comment" data-edite='{{$comment->id}}'><img width="10px" height="10px" src="image/jnjelu.png"></button>	
 -->

<button class="edit_comment" data-edite='{{$comment->id}}' id="edit_comment">Edit</button>


@endforeach

<!-- <script>
	$(document).ready(function(){
		$(".delete_comment").click(function(){
			var token = $("input[name=_token]").val();
			var id = $(this).attr("data-edite");

				$.ajax({
					url: "/deletecomment",
					type: "post",
					data: ({commentid:id, _token:token}),
					success: function(result){
							if(result == 1){
								$("."+id).hide();
							}
					}
				})	
					
			

					
		})
	})


</script> -->

<div>{{ $comments->links() }}</div>


@endsection