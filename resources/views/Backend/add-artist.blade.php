@extends('backend.layouts.app') 
@section('content')

<div class="col-sm-10 col-md-10 col-md-offset-2 main">
    <h1 class="page-header">Create</h1>
    
            <div class="row form-wrapper">
            <div class="col-md-9 with-sidebar">
                <form class="form-horizontal" role="form" method="POST" action="/dashboard/artist">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="name" class="col-md-2 control-label">Name</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" id="name" placeholder="Artist Name" name="name" value="{{ old('name') }}" required autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="description" class="col-md-2 control-label">Description</label>
                        <div class="col-md-8">
                            <textarea class="form-control" id="description" placeholder="Description" name="description" value="{{ old('description') }}" required autofocus></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="year" class="col-md-2 control-label">Year</label>
                        <div class="col-md-8">
                            <input type="number" class="form-control" id="year" placeholder="Year" name="year" value="{{ old('year') }}" required autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="img" class="col-md-2 control-label">Preview</label>
                        <div class="col-md-8">
                            <input type="file" id="img" name="img" accept="image/*">
                            <div><img alt="" id="image_preview"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="cities" class="col-md-2 control-label">Cities</label>
                        <div class="col-md-8">
                           <select name="" id="" class="form-control">
                            <option value="">Dnepr</option>
                            <option value="">Lviv</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-offset-2 col-md-8">
                            <button type="submit" class="btn btn-success">Add New</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
</div>

@endsection