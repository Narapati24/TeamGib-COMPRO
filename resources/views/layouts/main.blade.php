<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{ $title }}</title>
  <link rel="stylesheet" href="/css/style.css">
</head>
<body>
  @include('partials.navbar')
  <main>
  
    @yield('container')
  </main>
  <script src="https://unpkg.com/typeit@8.7.1/dist/index.umd.js"></script>
  <script src="/js/app.js"></script>

  @yield('script')
</body>
</html>