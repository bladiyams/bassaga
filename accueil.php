<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Teacher'Mutation</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/shop-homepage.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Teacher'Mutation</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Accueil
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">
      
      <div class='row'>
          
          <div class='col-lg-4 col-md-4'>
              <br>
              <div class='alert alert-primary'>
                Teacher'Mutation est une application qui permet au fonctionnaire enseignant d'avoir tous les détails 
              </div>
          
          </div>
          
        <div class='col-lg-8 col-md-8'>
        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="img/slide1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="img/slide2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="img/slide3.jpg" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
            
          </div>
      </div>
      
      <div class="row">
        
          <div class="col-lg-3">
            
              <div class='card'>
                <div class="card-header text-center">Type de déplacement</div>
                  <div class="card-body">
                        <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class='form-check-input' name="typedep">Mutation
                        </label>
                        </div>
                        <div class='form-check'>
                        <label class="form-check-label">
          <input type="radio" name="typedep" class='form-check-input'>Affectation
                        </label>
                        </div>
                  </div>
              </div>
              
                          
              
          </div>
          
          <div class="col-lg-5">
            
                <div class="card">
                    <div class="card-header text-center">Zone de départ</div>
                    <div class="card-body">
                          <div class="form-group">
                      <label for="Rdepart">Région de départ</label>
                      <select class="form-control" id="Rdepart">
                        <option>ADAMOUA</option>
                        <option>LITTORAL</option>
                        <option>CENTRE</option>
                        <option>ADAMOUA</option>
                        <option>ADAMOUA</option>

                      </select>
                    </div>
                          <div class="form-group">
                      <label for="Ddepart">Departement de départ</label>
                      <select class="form-control" id="Ddepart">
                        <option>ADAMOUA</option>
                        <option>LITTORAL</option>
                        <option>CENTRE</option>
                        <option>ADAMOUA</option>
                        <option>ADAMOUA</option>

                      </select>
                    </div>
                    
              <div class="form-group">
                <label for="Edepart">Etablissement de départ</label>
                <select class="form-control" id="Edepart">
                  <option>ADAMOUA</option>
                  <option>LITTORAL</option>
                  <option>CENTRE</option>
                  <option>ADAMOUA</option>
                  <option>ADAMOUA</option>

                </select>
              </div>
                    </div>
                    
                  </div>
            
          </div>
          
          <div class="col-lg-4">
            
                <div class="card">
                    <div class="card-header text-center">Zone de destination </div>
                    <div class="card-body">
                          <div class="form-group">
                      <label for="Rdepart">Région de départ</label>
                      <select class="form-control" id="Rdepart">
                        <option>ADAMOUA</option>
                        <option>LITTORAL</option>
                        <option>CENTRE</option>
                        <option>ADAMOUA</option>
                        <option>ADAMOUA</option>

                      </select>
                    </div>
                        <label>Type d'établissement</label>
                        <br/>
                        <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="radio" class='form-check-input' name="typeets">Lycée Gen.
                        </label>
                            
                        </div>
                        <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="radio" class='form-check-input' name="typeets">Lycée Bil.
                        </label>
                            
                        </div>
                        <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="radio" class='form-check-input' name="typeets">LT
                        </label>
                        </div>
                        <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="radio" class='form-check-input' name="typeets">LTB
                        </label>
                        </div>
                        
                        <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="radio" class='form-check-input' name="typeets">CES
                        </label>
                            
                        </div>
                        <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="radio" class='form-check-input' name="typeets">CETIC
                        </label>
                        </div>
                        <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="radio" class='form-check-input' name="typeets">ENIET
                        </label>
                        </div>
                          
                <br/> 
                <br/> 
              <div class="form-group">
                <label for="Edepart">Etablissement de départ</label>
                <select class="form-control" id="Edepart">
                  <option>ADAMOUA</option>
                  <option>LITTORAL</option>
                  <option>CENTRE</option>
                  <option>ADAMOUA</option>
                  <option>ADAMOUA</option>

                </select>
              </div>
                    </div>
                    
                  </div>
            
          </div>
          
      </div>

 

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Byams <?php echo date('Y');?></p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
