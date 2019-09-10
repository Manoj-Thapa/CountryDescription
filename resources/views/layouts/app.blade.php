<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" crossorigin="anonymous">
    <title>Global</title>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNav">
  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="/todos">Country<span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="/new-todos">Create Country<span class="sr-only">(current)</span></a>
    </li
</ul>
<div class="author m-1">
    <a class="lead" style="text-decoration: none; color: black;" href="https://github.com/Manoj-Thapa">Developed by Manoj Kumar Thapa</a>
</div>
</div>
</nav>

    <div class="container font-weight-normal">

        @if(session()->has('success'))

          <div class="alert alert-success text-center m-5">

            {{ session()->get('success') }}

          </div>

        @endif

        @yield('content')

    </div>

</body>

</html>
