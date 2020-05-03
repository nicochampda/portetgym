
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" sizes="96x96" href="/images/icons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="911x911" href="/images/icons/favicon-911x911.png">

    <title> Portet Gym | Contact </title>

    <link href="/static/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    
    <link href="/static/css/all.css" rel="stylesheet" type="text/css">
    <link href="/static/css/base.css" rel="stylesheet" type="text/css">

</head>
<body>
  <!-- Navigation -->
  <?php include('../common/header.php'); ?>


<div id="page-wrapper">
    
<div class="container">
<h2 class="page-header">Nous contacter</h2>
    <div class="row">

        <div class="col-md-6">
            <form action="" method="post">
                <!-- <input type='hidden' name='csrfmiddlewaretoken' value='4vc6Xm8mNyHSQ5LQN3VdSehE42FVZ3VJKWNtaDzHWbyZRlKFNoUOmDxiUGo0hGG9' /> -->
                
                <fieldset class="form-group">
                    <label>Votre nom</label>
                    <input type="text" name="nom" required class="form-control" id="id_nom" />
                    
                </fieldset>
                
                <fieldset class="form-check">
                  <label>Etes-vous adhérant ?</label>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                    <label class="form-check-label" for="inlineRadio1">oui</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                    <label class="form-check-label" for="inlineRadio2">non</label>
                  </div>
                </fieldset>
                
                <fieldset class="form-group">
                    <label>Votre adresse mail</label>
                    <input type="text" name="mail" required class="form-control" id="id_mail" />
                    
                </fieldset>
                
                <fieldset class="form-group">
                    <label>Votre message</label>
                    <textarea name="demande" id="id_demande" cols="40" rows="10" required style="resize:none;" class="form-control">
                    </textarea>
                    
                </fieldset>
                
                <fieldset class="form-group">
                    <label></label>
                    <input type="hidden" name="uid" id="id_uid" />
                    
                </fieldset>
                
                <div class="form-group text-center">
                    <input type="submit" class="btn btn-info" value="Envoyer">
                </div>
            </form>
        </div>

        <div class="col-md-offset-1 col-md-5">
            <h2>Autrement</h2>

            <p>Vous pouvez également nous contacter</p>
            <ul>
                <li>Par e-mail : <a href="mailto:contact@portetgym.fr">contact@portetgym.fr</a></li>
                <li>Par messenger : <a href="https://www.facebook.com/PortetGym/"><span class="fab fa-facebook social"></a></li>
            </ul>
            <h3>Passer a la salle</h3>

            <p>
               Hors vacances scolaires, il y a du monde a la salle qui pourra vous renseigner tous les jours a partir de 17h en semaine et le samedi toute la journée.
              Attention tout de même a ne pas perturber les entraînements </p>
            
            <h3>Adresse</h3>
            <p>Portet Gym <br />
                3 rue pierre de Coubertin<br />
                31120, Portet-sur-Garonne<br />
            </p>
        </div>
    </div> <!-- /.row -->
</div> <!-- /.container -->

</div>



<!-- Bootstrap Core JavaScript -->
<!-- <script src="/static/boostrap/js/bootstrap.min.js"></script> -->

<!-- Custom Theme JavaScript -->


<!-- Custom Javascript -->


 <!-- Footer -->
 <?php include('../common/footer.php'); ?>


</body>

</html>
