<?php
  include 'data.php'
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/favicon.png">
    <title>COVID-19 Tracker India</title>
    <!--    BootStrap   -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--  Sass Files  -->
    <link rel="stylesheet" href="css/main0.css">
    <!--    Main CSS    -->
    <link rel="stylesheet" href="css/main.css">
  </head>
  <body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#" id="ind"><img src="img/logo.png" alt="INDIA"></a>
            <!--  Mobile View Nav-BAr-->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <!--  Desktop View Nav-Bar-->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="overview.html">Overview</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="symptoms.html">Symptoms</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="helpline.html">Helpline</a>
                </li>
              </ul>
            </div>
          </nav>
    </header>
    <main>
      <section class="section-index section">
        <!--  Cases Information Boxes   -->
        <div class="container">
          <div class="row div-box">
          <div class="col border shadow-lg bg-warning" > <strong><?php echo $statewise[0]["confirmed"]?></strong> <br> <span>Confirmed</span></div>
            <div class="col border shadow-lg bg-info"> <strong><?php echo $statewise[0]["active"]?></strong> <br> <span>Active</span></div>
            <div class="col border shadow-lg bg-success"> <strong><?php echo $statewise[0]["recovered"]?></strong> <br> <span>Cured</span></div>
            <div class="col border shadow-lg bg-danger"> <strong><?php echo $statewise[0]["deaths"]?></strong> <br> <span>Deaths</span></div>
          </div>
        </div>
      </section>
      <hr>
      <!--  Map TO Be Used With API's  -->
      <section class="section-map section">
        <div class="container-fluid table-responsive">
          <table class="table table-sm table-hover">
            <thead class="thead-dark">
              <tr>
              <th scope="col">States/UT</th>
              <th scope="col">Confirmed</th>
              <th scope="col">Active</th>
              <th scope="col">Recovered</th>
              <th scope="col">Deceased</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach($statewise as $index => $val){?>
                  <?php if ($index == 0){continue;}  ?>
                    <tr>
                     <td class="text-secondary"><?php echo $statewise[$index]["state"]?></td> 
                     <td class="text-primary"><?php echo $statewise[$index]["confirmed"]?></td> 
                     <td class="text-info"><?php echo $statewise[$index]["active"]?></td> 
                     <td class="text-success"><?php echo $statewise[$index]["recovered"]?></td> 
                     <td class="text-danger"><?php echo $statewise[$index]["deaths"]?></td> 
                     </tr>
              <?php }?>
            </tbody>
          </table>
        </div>
      </section>
    </main>
    <footer>
                
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>