<div class="div_for_user_dates">
	<div class="div_for_user_picture">
		<img src="/uploads/comments/1488176028.jpg"  class="style_for_user_img" >

		<div class="div_for_user_name">{{Auth::user()->name}}</div>
	</div>


	<div class="div_for_user_control">
		
			<a class="a_for_user_control" href="#">My friends</a>					
			<a class="a_for_user_control" href="{{route('addandviewpictures')}}">My pictures</a>
			<a class="a_for_user_control" href="#">Comments</a>
			<a class="a_for_user_control" href="#">Events</a>
		
	</div>



</div>

