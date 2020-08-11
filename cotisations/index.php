
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" sizes="96x96" href="/static/images/icons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="911x911" href="/static/images/icons/favicon-911x911.png">
    
    <title> Portet Gym | Cotisations </title>

    
    <link href="/static/css/base.css" rel="stylesheet">

    <link href="/static/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    
    <link href="/static/css/all.css" rel="stylesheet" type="text/css">
    <link href="/static/css/base.css" rel="stylesheet" type="text/css">
    <link href="/static/css/table.css" rel="stylesheet" type="text/css">


</head>
<body>
  <!-- Navigation -->
  <?php include('../common/header.php'); ?>


  <div id="page-wrapper">
    <div class="jumbotron">
      <div class="container">
        <div class="row">
          <h2 class="assos-title">COTISATIONS 2020 - 2021</h2>
          <p>Le montant de la cotisation comprend :
            <ul>
              <li>Licence</li>
              <li>Engagements en compétition</li>
              <li>Defraiements des juges et entraineurs</li>
              <li>Participation à la vie du club</li>
            </ul>
          </p>
        </div>
        <br>
        <div class="row">
          <table class="table table-bordered table-cotisations">
            <thead>
              <tr>
                <th scope="col">Age</th>
                <th scope="col">Cours</th>
                <th scope="col">Entrainements</th>
                <th scope="col">Tarifs</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>2 - 5 ans</th>
                <td>Babygym</td>
                <td>1 x 45 min</td>
                <td>140€</td>
              </tr>
              <tr>
                <td rowspan="2">6 - 17 ans</th>
                <td>Challenge</td>
                <td>1 x 1h30</td>
                <td>125€</td>
              </tr>
              <tr>
                <td>Compétition</td>
                <td>2 x 1h30</td>
                <td>145€</td>
              </tr>
              <tr>
                <td>17 ans et +</th>
                <td>Compétition</td>
                <td>2 x 1h30</td>
                <td>190€</td>
              </tr>
              <tr>
                <td>Tous ages</th>
                <td>Teamgym</td>
                <td>1 x 1h30</td>
                <td>150€</td>
              </tr>
            </tbody>
          </table>
        </div>
        <br>
        <div class="row">
          <p>Précisions :</p>
          <ul>
            <li>Réduction de 25€ proposée par le club pour les licenciés de la saison 2019-2020 qui le souhaitent, en compensation des entraînements et compétitions manqués.</li>
            <li>40€ supplémentaires seront demandés en cas de double licences (UFOLEP + FFGym) </li>
            <li>50€ en plus de la cotisation "Compétition" pour les gymnastes faisant Compétition + Teamgym</li>
            <li>Réglement par chèque à l'ordre de "Portet Gym" (Possibilité de régler en 2 ou 3 fois) ou en espèces</li>
            <li>Pour les Non Portésiens, 83€ seront demandés par chèque à l'ordre du "régie de recette activités ludiques" pour la mairie de Portet </li>
          </ul>
        </div>
        <div class="row">
          <p>Factures :</p>
            <ul>
              <li>Pour obtenir une facture, merci de remplir<a target="_blank" href="https://docs.google.com/forms/d/e/1FAIpQLSfxcuHR4AKtWeqZ7lopk1BW7d1NekEwUJ1GggPZz4TINmipaw/viewform"> <i class="fa fa-external-link" aria-hidden="true"></i>ce formulaire</a></li>
            </ul>
        </div>
        <br>
      </div>
    </div>
  </div>


  <!-- Footer -->
  <?php include('../common/footer.php'); ?> 

</body>

</html>
