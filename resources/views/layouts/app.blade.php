<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="/">Pinki Portfolio</a>
  </div>
</nav>

<div class="container mt-5">
    @yield('content')
</div>

<footer class="bg-dark text-white text-center p-3 mt-5">
    © {{ date('Y') }} My Portfolio
</footer>

</body>
</html>