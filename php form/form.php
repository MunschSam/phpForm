<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form  action="info.php"  method="post">
    <div>
      <label  for="nom">Nom :</label>
      <input  type="text"  id="nom"  name="user_name">
    </div>
    <div>
      <label  for="prenom">Prenom :</label>
      <input  type="text"  id="prenom"  name="user_surname">
    </div>
    <div>
      <label  for="courriel">Courriel :</label>
        <input  type="email"  id="courriel"  name="user_email">
    </div>
    <div>
      <label  for="telephone">Telephone :</label>
      <input  type="number"  id="telephone"  name="telephone">
    </div>
    <div>
      <label  for="sujet">Sujet :</label>
      <select name="sujet" id="sujet">
    <option value="">--Please choose an option--</option>
    <option value="rdv">RDV</option>
    <option value="visio">Visio</option>
    <option value="contact">Contact</option>
      

    </div>
    <div>
      <label  for="message">Message :</label>
      <textarea  id="message"  name="user_message"></textarea>
    </div>
    <div  class="button">
      <button  type="submit">Envoyer votre message</button>
    </div>
  </form> 


  <?php
   var_dump($_POST);
  ?>
</body>
</html>

