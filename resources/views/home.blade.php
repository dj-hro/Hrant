@extends('layouts.app')

@section('content')
<nav>
<ul class="ul_for_navbar">
  <li class="li_for_navbar"><a href="{{route('home')}}">Home</a></li>
  <li class="li_for_navbar"><a href="#news">Search Users</a></li>
  <li id="menu" class="li_for_navbar"><a style="cursor: pointer;">Comments</a>
    <ul id="sub-menu" class="ul_for_navbar">
          <li><a href="{{route('comments')}}">All Comments</a></li>
          <li><a href="{{route('mycomments')}}">My Comments</a></li>
          <li><a href="{{route('addcomment')}}">Add Comment</a></li>
    </ul>
  </li>
  <li class="li_for_navbar"><a href="#about">About</a></li>
  <li style="float: right;" class="li_for_navbar"><a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        Logout
                            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form></li>
</ul>
</nav>

<div class="div1" >
    <div class="div2">
     <!--  Useri hamar tvyalneri artaberman tex -->  @include('UserField')
    </div>
    <div class="div3">
        

<!-- Ay stexic sksum es grel mnacac@ -->@yield('himq')


    </div>
    <div class="div4"></div>
</div>
<!-- <script>
  $('#menu').on('click', function(){
    $('#sub-menu').slideToggle();
  })

</script> -->

<footer><div class="footer"><address>Created by Dj Hro</address></div></footer>


























             
   
@endsection
