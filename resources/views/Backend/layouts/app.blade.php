<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Musichead Dashboard</title>
    @include('backend.layouts.partials.style')
</head>
<body>
     @include('backend.layouts.partials.navbar')
    <div class="container-fluid">
      <div class="row">
        @include('backend.layouts.partials.sidebar')
         @yield('content')
      </div>
    </div>
    @include('backend.layouts.partials.scripts')
</body>
</html>
