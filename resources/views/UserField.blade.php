<div class="div_for_user_dates">
	<div class="div_for_user_picture">
		<a href="/uploads/UsersPictures/1488366446.jpg" data-lightbox="1488366446.jpg" data-title="{{Auth::user()->name}}">
			<img src="/uploads/UsersPictures/1488366446.jpg"  class="style_for_user_img" >
		</a>
		<div class="div_for_user_name">{{Auth::user()->name}}</div>
	</div>


	<div class="div_for_user_control">
		
			<a class="a_for_user_control" href="#">My friends</a>					
			<a class="a_for_user_control" href="{{route('addandviewpictures')}}">My pictures</a>
			<span class="a_for_user_control" id="span_for_comment_dropdown" style="cursor: pointer;">Comments</span>
			<div class="div_for_working_with_comments">
			<a class="span_for_user_control" href="{{route('comments')}}">All comments</a>
			<a class="span_for_user_control" href="{{route('mycomments')}}">My comments</a>
			<a class="span_for_user_control" href="{{route('addcomment')}}">Add comment</a>
			</div>
			<a class="a_for_user_control" href="#">Events</a>
		
	</div>

<script>
	$(document).ready(function(){
		$('#span_for_comment_dropdown').on('click', function(){
			$('.div_for_working_with_comments').slideToggle();
		})
	})
</script>

</div>

