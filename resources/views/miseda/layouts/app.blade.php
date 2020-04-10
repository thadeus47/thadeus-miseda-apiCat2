<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="stylesheet" href="('css/app.css') ">
     <link rel="stylesheet" href="('css/signin.css')">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <title>API CAT II</title>
</head>
<body>
    <div id="main">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
        <a class="navbar-brand" href="/">Home</a>
         </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/feePayments">View Payments <span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
        </div>
     </nav>
     <main class="py-5">
         @include('miseda.layouts.notify')
         @yield('content')
     </main>
    </div>
    <script src="('js/app.js')"></script>
</body>
</html>
