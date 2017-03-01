<div class="porc">
@foreach($comments as $comment)

<div class="comments">


@if(!File::exists(public_path('/uploads/comments/') . $comment->image))


	<img src="/uploads/standarts/{{$comment->image}}" width="50px" height="50px" style="border-radius: 50%; float: left;">



@else 

	<img src="/uploads/comments/{{$comment->image}}" width="50px" height="50px" style="border-radius: 50%; float: left;">


@endif
	
	<div class="comment_writer_name">{{$comment->name}}</div>
	<div class="comment_writer_text"> {{$comment->comment}}</div>
</div>  
@endforeach
{{ $comments->links() }}
</div>