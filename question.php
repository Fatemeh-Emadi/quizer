<?php
include "database.php";
$questions = $db->query("SELECT * FROM question");
$question_no = $questions->num_rows;


$porsesh_table = $db->query("SELECT * FROM question WHERE id=1");

$porsesh = $porsesh_table->fetch_assoc();
$pasokh_ha = $db->query("SELECT * FROM answer WHERE question_id=1");
?>


<html lang="fa" dir="rtl">

<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link type="text/css" rel="stylesheet" href="css/bootstrap.rtl.css">
</head>

<body>

    <div class="container bg-dark" style="height: 100%;">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Quiz</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>

        </nav>

        <div class="container">
            <div class="row mt-5">
                <div class="col-md-6">

                    <div class="card">
                        <h5 class="card-header">question
                            <?php echo $porsesh["id"]; ?>/<?php echo $question_no; ?>
                        </h5>
                        <div class="card-body">

                            <p class="card-text">
                                <?php echo $porsesh["text"]; ?>

                            </p>



                            <?php foreach ($pasokh_ha as $pasokh) : ?>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        <?php echo $pasokh["text"]; ?>
                                    </label>
                                </div>
                            <?php endforeach; ?>
                            <a href="question.php" class="btn btn-primary">next</a>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>


        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="js\bootstrap.js"></script>
</body>

</html>