<!DOCTYPE html>
<html>
<head>
    <title>Task manager</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <!-- Container wrapper -->
    <div class="container">
      <!-- Navbar brand -->
      <a class="navbar-brand me-2" href="/">
        <img
          src="data:image/jpeg;base64,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"
          height="16"
          alt="MDB Logo"
          loading="lazy"
          style="margin-top: -1px;"
        />
      </a>
  
      <!-- Toggle button -->
      <button
        class="navbar-toggler"
        type="button"
        data-mdb-toggle="collapse"
        data-mdb-target="#navbarButtonsExample"
        aria-controls="navbarButtonsExample"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <i class="fas fa-bars"></i>
      </button>
  
      <!-- Collapsible wrapper -->
      <div class="collapse navbar-collapse" id="navbarButtonsExample">
        <!-- Left links -->
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="/">Dashboard</a>
          </li>
        </ul>
        <!-- Left links -->
  
        <div class="d-flex align-items-center">
          
          <form method="POST" action="{{ route('logout') }}">
            @csrf
            <input type="submit" value="Logout">
            </form>
        </div>
      </div>
    </div>
  </nav>
  
<div class="container">
    @yield('content')
</div>
   
</body>

</html>