@extends('backend.layouts.app') @section('content')


    <div class="col-sm-10 col-md-10 col-md-offset-2 main">
       <div class="header"><h1>Artists</h1></div>
           <div class="new-artist">
               <a href="/dashboard/artists/create" class="btn btn-success" role="button">Add New</a>
           </div>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th class="col-md-1">
                        id
                    </th>
                    <th class="col-md-1">
                        Name
                    </th>
                    <th class="col-md-6">
                        Description
                    </th>
                    <th class="col-md-2">
                        Rate
                    </th>
                    <th class="col-md-1">
                        Edit
                    </th>
                    <th class="col-md-1">
                        Delete
                    </th>
                    
                </tr>
            </thead>
            <tbody>
               
                <!-- row -->
                @foreach($artists as $artist)
                <tr>
                    <td>
                          {{ $artist->id }}
                    </td>
                    <td>
                        <img src="/img/{{$artist->preview}}" alt="preview" class="img avatar hidden-phone" />
                        <a href="{{ url('dashboard/artists', $artist->id) }}" class="name">{{ $artist->name }}</a>
                    </td>
                    <td>
                        {{ $artist->description }}
                    </td>
                    <td>
                        <i class="fa fa-heart" aria-hidden="true"></i>&nbsp {{ $artist->rate }}
                    </td>
                    <td>
                        <a href="/dashboard/artists/{{$artist->id}}/edit" class="edit" title="Edit"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                    </td>
                    <td>
                        <a href="#" class="delit" data-id="{{ $artist->id }}" data-token="{{ csrf_token() }}" title="Delete"><i class="fa fa-times" aria-hidden="true"></i></a>
                    </td>
                </tr>  
                @endforeach         
            </tbody>
        </table>
    </div>
<script src="/js/app.js"></script>
<script src="/js/dashboard/js.js"></script>


@endsection