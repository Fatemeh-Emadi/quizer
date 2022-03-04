<?php
include "database.php";

$porsesh_ha = $db->query("SELECT * FROM question");
$total = $porsesh_ha->num_rows;

?>



<html>

<head>

  <link type="text/css" rel="stylesheet" href="css/style.css">
  <link type="text/css" rel="stylesheet" href="css/bootstrap.css">
</head>

<body>

  <div class="container bg-dark" style="height: 100%;">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Quiz</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          </ul>
        </div>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>

    </nav>
    <div class="row mt-5">
      <div class="col-md-6">

        <div class="card">
          <h5 class="card-header">Quiz</h5>
          <div class="card-body">
            <h5 class="card-title">welcome to quizer</h5>
            <p class="card-text">
              <?php echo $total; ?>
              questions</p>
            <p class="card-text">
              <?php echo $total / 2; ?>
              minutes</p>
            <a href="question.php" class="btn btn-primary">start</a>
          </div>
        </div>
      </div>
    </div>
  </div>



  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="js\bootstrap.js"></script>
</body>

</html>