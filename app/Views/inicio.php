
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <title>Ingresar al sistema</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="<?=base_url()?>static/css/vendor/boostrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>static/css/flat-ui.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Inicio</title>
  </head>
  <body>

  <?php 
    if(!empty($message)):  ?>
  <p><?= $message?></p>
     <?php endif;  ?>  

  <div class="container">
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">

            <form action="<?=site_url('login')?>" method="POST">
            <h4 class="form-singnin-heading">Por favor, registrese</h4>
            <label for="usuario" class="sr-only">Usuario</label>
            <input type="email" name="usuario" class="form-control frm_login_email" placeholder="Ingrese su usuario">
  
            <label for="password" class="sr-only">Contraseña</label>
            <input type="password" name="password" id="password" class="form-control frm_login_pass" placeholder="Ingrese su contraseña">
           
            <br>
            <input type="submit" value="Ingresar"  class="btn btn-primary btn-block"></input>
            </form>
                        
        </div>
          <div class="col-log-4"></div>
    </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>