@extends('backend.layouts.app') 
@section('content')
<div class="col-sm-10 col-md-10 col-md-offset-2 main">
    <h1 class="page-header">Create</h1>
    
            <div class="row form-wrapper">
            <div class="col-md-9 with-sidebar">
                <form class="form-horizontal" role="form" method="POST" action="/dashboard/artists/{{$artist->id}}">
                    <div class="form-group">
                        <label for="name" class="col-md-2 control-label">Name</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" id="name" placeholder="Artist Name" name="name" value="{{ $artist->name }}" required autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="description" class="col-md-2 control-label">Description</label>
                        <div class="col-md-8">
                            <textarea class="form-control" id="description" placeholder="Description" name="description" required autofocus>{{ $artist->description }}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="preview" class="col-md-2 control-label">Preview</label>
                        <div class="col-md-8">
                            <input type="file" id="preview" name="preview" accept="image/*">
                            <div><img src="/img/{{ $artist->preview }}" alt="{{ $artist->preview }}" id="image_preview"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="cities" class="col-md-2 control-label">Cities</label>
                        <div class="col-md-8">
                           <select name="city_id" id="city_id" class="form-control">
                                @foreach($cities as $city)
                                    <option value="{{ $city->id }}" {{ $artist->city_id == $city->id ? 'selected="selected"' : '' }}> {{ $city->name }} </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-offset-2 col-md-8">
                            <button type="submit" class="btn btn-success">Edit</button>
                        </div>
                    </div>
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                </form>
            </div>
        </div>
</div>

@endsection