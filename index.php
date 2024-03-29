<?php

  include_once('viacep.php');

?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TopImoveis</title>
    <link rel="stylesheet" href="css/styles.css"/>
    <link rel="sortcut icon" href="images/logo.jpg" type="image/jpg" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
  </head>
  <body>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <header>
      <div class="content">
        <nav>
          <p class="brand">Top<strong>Imoveis</strong></p>
          <ul>
            <li><a href="#catalog">Catalog</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </nav>
    
        <div class="header-block">        
          <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="images/carrossel1.jpg" class="d-block w-100" alt="img1" height="430px">
              </div>
              <div class="carousel-item">
                <img src="images/carrossel2.jpg" class="d-block w-100" alt="img2" height="430px">
              </div>
              <div class="carousel-item">
                <img src="images/carrossel3.jpg" class="d-block w-100" alt="img3" height="430px">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
            <div class="text">
              <h2>The perfect <strong>House</strong> for you</h2>
              <p>
                Here on our website you will find the perfect property and the way you've always dreamed of
              </p>
            </div>
          </div>
        </div>
      </div>
    </header>
    <section class="catalog" id="catalog">
      <div class="content">
        <div class="title-wrapper-catalog">
          <p>Find what you want</p>
          <h3>Catalog</h3>
        </div>
        <div class="grad">

        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Property Form</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <form action="form.php" method="POST">  
                <div class="modal-body">
                    <div class="mb-3">
                      <label for="exampleInputName" class="form-label">Complete Name</label>
                      <input type="text" class="form-control" name="nome" id="exampleInputName">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail" class="form-label">Email address</label>
                      <input type="email" class="form-control" name="email" id="exampleInputEmail" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPhone" class="form-label">Phone</label>
                      <input type="tel" class="form-control" name="phone" id="exampleInputPhone">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputCEP" class="form-label">CEP</label>
                      <input type="text" class="form-control" name="cep" id="exampleInputCEP" value="<?php echo $address->cep ?>">
                      <button type="submit" class="btn btn-primary" name="bcep">Submit</button>
                    </div>
                    <br>
                    <div class="mb-3">
                      <label for="exampleInputStreet" class="form-label">Street</label>
                      <input type="text" class="form-control" name="rua" id="exampleInputStreet" value="<?php echo $address->logradouro ?>">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputDistrict" class="form-label">Deistrict</label>
                      <input type="text" class="form-control" name="bairro" id="exampleInputDistrict" value="<?php echo $address->bairro ?>">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputCity" class="form-label">City</label>
                      <input type="text" class="form-control" name="cidade" id="exampleInputCity" value="<?php echo $address->localodade ?>">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputState" class="form-label">State</label>
                      <input type="text" class="form-control" name="estado" id="exampleInputState" value="<?php echo $address->uf ?>">
                    </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="card-wrapper">
          <div class="card-item">
            <img src="images/carrossel1.jpg" alt="Car" />
            <div class="card-content">
              <h3>Modern House 1</h3>
              <p>
                3,8 KM do centro
                <br>
                CEP: 32456-567
              </p>
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
               I Want This
              </button>
            </div>
          </div>
          <div class="card-item">
            <img src="images/carrossel2.jpg" alt="Car" />
            <div class="card-content">
              <h3>Modern House 2</h3>
              <p>
                4,2 KM do centro
                <br>
                CEP: 32765-890
              </p>
              <button type="button" data-toggle="modal" data-target="#exampleModal">I want this!</button>
            </div>
          </div>
          <div class="card-item">
            <img src="images/carrossel3.jpg" alt="Car" />
            <div class="card-content">
              <h3>Modern House 3</h3>
              <p>
                7,5 KM do centro
                <br>
                CEP: 32280-540
              </p>
              <button type="button" data-toggle="modal" data-target="#exampleModal">I want this!</button>
            </div>
          </div>
          <div class="card-item">
            <img src="images/carrossel4.jpg" alt="Car" />
            <div class="card-content">
              <h3>Modern House 4</h3>
              <p>
                12,8 KM do centro
                <br>
                CEP: 32940-975
              </p>
              <button type="button" data-toggle="modal" data-target="#exampleModal">I want this!</button>
            </div>
          </div>
          <div class="card-item">
            <img src="images/carrossel5.jpg" alt="Car" />
            <div class="card-content">
              <h3>Modern House 5</h3>
              <p>
                1,3 KM do centro
                <br>
                CEP: 32245-743
              </p>
              <button type="button"data-toggle="modal" data-target="#exampleModal">I want this!</button>
            </div>
          </div>
          <div class="card-item">
            <img src="images/carrossel6.jpg" alt="Car" />
            <div class="card-content">
              <h3>Modern House 6</h3>
              <p>
                19,0 KM do centro
                <br>
                CEP: 32924-097
              </p>
              <button type="button" data-toggle="modal" data-target="#exampleModal">I want this!</button>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="about" id="about">
      <div class="content">
        <div class="title-wrapper-about">
          <p>Know about us</p>
          <h3>About</h3>
        </div>
        <div class="grad">

        </div>
        <div class="about-content">
          <div class="left">
            <img src="images/about.jpg" alt="About"/>
          </div>
          <div class="right">
            <h3>Join technology and mobility</h3>
            <p>
              We are a company that thinks in the first place to make it easier for customers to get their property, without bureaucracy and without spending a lot, we came to facilitate contact with agencies and streamline this entire process
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="contact" id="contact">
      <div class="content">
        <div class="title-wrapper-contact">
          <p>What you can do</p>
          <h3>contact</h3>
        </div>
        <div class="contact-card-block">
          <form action="enviar.php" method="POST">
            <div class="mb-3">
              <label for="exampleInputName" class="form-label">Complete Name</label>
              <input type="text" class="form-control" id="exampleInputName" name="name">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail" class="form-label">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp" name="email">
            </div>
            <div class="mb-3">
              <label for="exampleInputPhone" class="form-label">Phone</label>
              <input type="tel" class="form-control" id="exampleInputPhone" name="phone">
            </div>
            <div class="mb-3">
              <label for="exampleInputMessage" class="form-label">Message</label>
              <<textarea class="form-control" id="exampleFormControlMessage" rows="3" name="message"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </section>

    <footer>
      <div class="main">
        <div class="content footer-links">
          <div class="footer-company">
            <h4>Company</h4>
            <h6>About</h6>
            <h6>Contact</h6>
          </div>
          <div class="footer-rental">
            <h4>Rental</h4>
            <h6>Self-Drive</h6>
            <h6>Chauffer-Driven</h6>
            <h6>Help</h6>
          </div>
          <div class="footer-social">
            <h4>Stay connected</h4>
            <div class="social-icons">
              <img src="images/instagram.png" alt="Instagram" />
              <img src="images/facebook.png" alt="Facebook" />
            </div>
          </div>
          <div class="footer-contact">
            <h4>Contact US</h4>
            <h6>+55 35 999123619</h6>
            <h6>contato@topimoveis.com.br</h6>
            <h6>Nome da Rua, belo horizonte MG</h6>
          </div>
        </div>
      </div>
      <div class="last">Copyright © 2021 Top Imoveis - Todos os direitos reservados</div>
    </footer>
  </body>
</html>
