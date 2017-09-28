@extends('layouts.app')
@section('content')

<div class="container-fluid usrProfile">
    <div class="row usrProfile_header">

        <div class="col-sm-228 usrAvatarCont">
            <img src="/img/Ivan self-crop.jpg" alt="..." class="img-rounded usrAvatar">
        </div>

        <div class="col-sm-228add usrInfoCont">

            <h1 class="usrName">user name</h1>
            <p class="usrTitle">Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Proin eget tortor risus.</p>

            <div class="container-fluid usrFunctBtn">
                <a href="#" class="btn btn-info" role="button">Upload</a>
                <a href="#" class="btn btn-info" role="button">Profile</a>
            </div>

            <div class="row usrLibInf">
                <p class="col-xs-6 col-sm-108 usrTracksN"><strong>6</strong>&nbsp;tracks</p>
                <p class="col-xs-6 col-sm-108 usrPlaylistN"><strong>6</strong>&nbsp;Playlists</p>
            </div>

        </div>

    </div>

    <div class="row usrProfile_body">

        <div class="col-sm-368add ">

            <ul class="nav nav-tabs">
                <li role="presentation" class="active"><a href="#">Tracks</a></li>
                <li role="presentation"><a href="#">Playlists</a></li>
                <li role="presentation"><a href="#">Messages</a></li>
            </ul>

        </div>

        <div class="col-sm-368">

            <ul class="nav nav-tabs">
                <li role="presentation" class="active"><a href="#">newest</a></li>
                <li role="presentation"><a href="#">top rated</a></li>
            </ul>

        </div>

    </div>

</div>

@endsection('content')