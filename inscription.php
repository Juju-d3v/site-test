<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inscription</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <h2 class="inscription">Inscription</h2>

  <form method="POST">
    <label for="nom">Nom :</label>
    <input type="text" id="nom" name="nom" required>

    <label for="email">Email :</label>
    <input type="email" id="email" name="email" required>

    <label for="motdepasse">Mot de passe :</label>
    <input type="password" id="motdepasse" name="motdepasse" required>

    <input type="submit" name="formsend" id="formsend">
  </form>

  <?php
    include 'database.php';
    global $db;

    $q = $db->prepare("INSERT INTO user(username,email,password) VALUES(:username,:email,:password)");
    $q->execute([
        'username' => $_POST['nom'],
        'email' => $_POST['email'],
        'password' => $_POST['motdepasse']
    ]);

  
    if(isset($_POST['formsend'])){
      echo "votre pseudo est: ".$_POST['nom'] . "<br/>";
      echo "votre email est: ".$_POST['email'] . "<br/>";
      echo "votre not de passe est: ".$_POST['motdepasse'] . "<br/>";
    }
  
    $nomUtilisateur = "";
    $email = "";
    $motDePasse = "";


  ?>
</body>
</html>
