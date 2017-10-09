<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Musichead Dashboard</title>
    <link href="/css/app.css" rel="stylesheet">
</head>
<body>
     @include('backend.layouts.partials.navbar')
    <div class="container-fluid">
      <div class="row">
        @include('backend.layouts.partials.sidebar')
         @yield('content')
      </div>
    </div>
    <script src="/js/app.js"></script>
</body>
</html>
