<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Simple Sidebar - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/simple-sidebar.css" rel="stylesheet">

</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">Data Structures And Algoritms</div>
      <div class="list-group list-group-flush">
        <a href="videos.php" class="list-group-item list-group-item-action bg-light"><span>Videos</span></a>
        <a href="#stacks" class="list-group-item list-group-item-action bg-light">Stacks</a>
        <a href="#queues" class="list-group-item list-group-item-action bg-light">Queues</a>
        <a href="#lists" class="list-group-item list-group-item-action bg-light">Lists</a>
        <a href="#sorting" class="list-group-item list-group-item-action bg-light">Sorting</a>
        <a href="#searching" class="list-group-item list-group-item-action bg-light">Seaching</a>
        <a href="#graphs" class="list-group-item list-group-item-action bg-light">Graphs</a>

      </div>
      <div class="list-group list-group-flush">
        <a href="#" class="list-group-item list-group-item-action bg-light"><span>Notes</span></a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Stack </a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Queues</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">lists</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Sorting</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Searching</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Graphs</a>

      </div>
      
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="btn btn-primary" id="menu-toggle">Toggle Menu</button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php">Notes</a>
              <a class="nav-link" href="videos.php">Videos</a>
              <a class="nav-link" href="#">Implementation</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>

      <div class="container-fluid">
        <h1 class="mt-4">Data Structures</h1>
        <p>Data structures deals with the study of methods, techniques
and tools to organize or structure data.</p>
<p>An Algorithm may be loosely defined as a process or
procedure or method or recipe. It is a specific set of rules
to obtain a definite output from specific inputs provided to
the problem.</p>
<p>An algorithm may be defined as a finite sequence of instructions
each of which has a clear meaning and can be performed with a
finite amount of effort in a finite length of time</p>

<h2>Structure And Properties of an algorithm</h2>
<li>Input step</li>
<li>Assignment step</li>
<li>Decision step</li>
<li>Repetitive step</li>
<li>Output step</li>

<h2>Properties And Characteristics of algorithms</h2>
<p> <span>Finiteness</span> -an algorithm must terminate after a finite number of
steps</p>
<p> <span>Definiteness</span> - the steps of the algorithm must be precisely defined
or unambiguously specified.</p>
<p> <span>Generality</span> -an algorithm must be generic enough to solve all
problems of a particular class</p>
<p> <span>Effectiveness</span> – the operations of the algorithm must be basic
enough to be put down on pencil and paper. They should not be too
complex to warrant writing another algorithm for the operation</p>
<p> <span>Input-Output</span> – the algorithm must have certain initial and precise
inputs and outputs that may be generated both at its intermediate
and final steps.</p>


      </div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>

</html>
