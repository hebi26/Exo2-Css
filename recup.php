<!DOCTYPE html>
<html>
  <head>
        <meta charset="utf-8">
        <html lang="fr">
        <title>Maquette-2</title>
        <link  href="font.css" rel="stylesheet" type="text/css"/>
        <link  href="styleform.css" rel="stylesheet" type="text/css"/>

  </head>
  <body>

    <main>
      <header>
          <img id="back" src="img/image1.jpg" alt="fond1"/>
          <div class="logo">
            <img src="img/logo.png" alt="logo"/>
          </div>
          <div class="titre">
          <h1>A Flexible one page portfolio theme,</br>
              for a full on user experience</h1>

          <h2> We implement awesome ideas into full-scale Projects.</h2>
          </div>
        </header>

        <section>
            <div class="intform">
            <div class="stitre">
              <h3>Boite de dialogue</h3>
                <div class="ligne">
                  <hr>
                </div>
            </div>

      <div class="contentf">

        <h4>Message de : </h4>

        <p>
        <?php

        // $_POST['name']= htmlentities($_POST['name']);

          if (isset($_POST['name']) AND strlen($_POST['name'])<=30 AND $_POST['name'] != NULL){
          // AND preg_match('/^[a-z]$/', $_POST['name'])){

              echo strtolower(strip_tags($_POST['name']));



            }
          else{
            echo 'NON VALIDE';
          }


        ?>
      </p>
        <h4>Mail : </h4>
        <p><?php

        // $_POST['usermail']=htmlentities($_POST['usermail']);

          if (isset($_POST['usermail']) AND strlen($_POST['usermail'])<=30 AND $_POST['usermail'] != NULL){
          // AND preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/', $_POST['usermail'])){

            echo strtolower(strip_tags($_POST['usermail']));
          }
          else {
            echo 'NON VALIDE';
          }

        ?>
    </p>

    <p>
      <?php

        // $_POST['describe']=htmlentities($_POST['describe']);

          if (isset($_POST['describe']) AND strlen($_POST['describe'])<=1000 AND $_POST['describe'] != NULL) {

            echo strtolower(strip_tags($_POST['describe']));

          }
          else{
            echo 'NON VALIDE';
          }
        ?>
    </p>
    </div>
    <a href="index.html">Retour au site</a>

  </section>

  <footer>
    <p>© 2016 <span>Meth </span>- A WordPress Theme made with passion by <span>Codestag</span></p>
  </footer>

  </main>
</body>
</html>
