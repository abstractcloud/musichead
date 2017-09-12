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
                    <th class="col-md-4">
                        Description
                    </th>
                    <th class="col-md-1">
                        Genre
                    </th>
                    <th class="col-md-1">
                        Year
                    </th>
                    <th class="col-md-1">
                        <span class="line"></span>Last Update
                    </th>
                    <th class="col-md-1">
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
                <tr>
                    <td>
                      1
                    </td>
                    <td>
                        <img src="/img/artist2.png" alt="artist" class="img avatar hidden-phone" />
                        <a href="/dashboard/artist/{id}" class="name">Rita Ora</a>
                    </td>
                    <td>
                        "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                    </td>
                    <td>
                        POP
                    </td>
                    <td>
                        2017
                    </td>
                    <td>
                        11.09.2017 14:00
                    </td>
                    <td>
                        <i class="fa fa-heart" aria-hidden="true"></i>&nbsp 1152
                    </td>
                    <td>
                        <a href="/dashboard/artist/{id}" class="edit" title="Edit"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                    </td>
                    <td>
                        <a href="/dashboard/{id}" class="delit" title="Delete"><i class="fa fa-times" aria-hidden="true"></i></a>
                    </td>
                </tr>  
                 
                <tr>
                    <td>
                      2
                    </td>
                    <td>
                        <img src="/img/artist1.png" alt="artist" class="img avatar hidden-phone" />
                        <a href="/dashboard/artist/{id}" class="name">Vasya z Dnipra</a>
                    </td>
                    <td>
                        "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                    </td>
                    <td>
                        POP
                    </td>
                    <td>
                        2017
                    </td>
                    <td>
                        11.09.2017 14:00
                    </td>
                    <td>
                        <i class="fa fa-heart" aria-hidden="true"></i>&nbsp 100
                    </td>
                    <td>
                        <a href="/dashboard/artist/{id}" class="edit" title="Edit"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                    </td>
                    <td>
                        <a href="/dashboard/{id}" class="delit" title="Delete"><i class="fa fa-times" aria-hidden="true"></i></a>
                    </td>
                </tr>           
            </tbody>
        </table>
    </div>


@endsection