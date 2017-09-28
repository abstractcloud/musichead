<div class="profile"></div>
<ul class="nav nav-sidebar">
    <li><a href="{{ url('/') }}"> <i class="fa fa-th-large"></i> Albums</a></li>
    <li><a href=""> <i class="fa fa-microphone"></i> Artists</a></li>
    <li><a href=""> <i class="fa fa-line-chart"></i> Charts</a></li>
</ul>
<ul class="nav nav-sidebar">
    <li><a href=""> <i class="fa fa-bars"></i> Tracks</a></li>
    <li><a href=""> <i class="fa fa-play-circle-o"></i> Playlist</a></li>
    <li><a href="/profile"> <i class="fa fa-user-o"></i> Profile</a></li>
    
    @if(Auth::check())
    <li><a href="{{ url('/logout') }}"> <i class="fa fa-sign-out"></i> Logout</a></li>
    @else
    <li><a href="{{ url('/login') }}"> <i class="fa fa-sign-in"></i> Login</a></li>
    @endif
</ul>