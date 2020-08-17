<!DOCTYPE html>
<html>
  <head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="/"><img width="80px" src="https://www.smkn1-cmi.sch.id/wp-content/uploads/2017/05/logo-e1494606597209.png"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"    aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/inventaris/kiba">Inventaris</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/ruangan"> Daftar Ruangan</a>
          </li>
        </ul>
      </div>
    </nav>
  </head>
  <body>
    @yield('container')
  </body>
  <!-- Footer -->
<footer class="page-footer font-small bg-dark mt-5">
  <!-- Copyright -->
  <div class="footer-copyright text-center py-3 text-white">
    2020@SMKN 1 CIMAHI<br>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
</html>
