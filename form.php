<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form action ="thanks.php" method="post">
   <div>
      <label  for="firstname">Name :</label>
      <input  type="text"  id="firstname"  name="firstname">
    </div>
    <div>
      <label  for="lastname">Last Name :</label>
      <input  type="text"  id="lastname"  name="lastname">
    </div>
    <div>
      <label  for="number">Number :</label>
      <input  type="text"  id="number"  name="number">
    </div>
    <div>
      <label  for="courriel">Courriel :</label>
        <input  type="email"  id="courriel"  name="email">
    </div>
   
      <label  for="subject">Subject :</label>
      <select  id="subject"  name="subject">
        <?php $subject= ['demande', 'rdv', 'questions', 'reponses'];
            foreach ($subject as $subjects) : ?>
                <option value="<?php echo strtolower ($subjects);?>">
                    <?php echo ($subjects);?>
            </option>
            <?php endforeach ?>
    <div>
      <label  for="message">Message :</label>
      <textarea  id="message"  name="message"></textarea>
    </div>
    <div  class="button">
      <button  type="submit">Envoyer votre message</button>  
</body>
</html>