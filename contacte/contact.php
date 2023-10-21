
<!DOCTYPE html>
<html lang="en">
<head>

    <title>Contact</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="contacts.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>   
    
		<nav class="top-navbar">
  <ul>
  <li><a class = "navlink" href="../logout.php">IESIRE</a></li>
    <li><a class = "navlink" href="../contacte/contact.php">CONTACTE</a></li>
    <li><a class = "navlink" href="../crud/display.php">CRUD</a></li>
    <li><a class = "navlink" href="../myaccount.php">CONTUL MEU</a></li>
    <li><a class = "navlink" href="../catalog.php">LISTA CASE</a></li>
    <li><a class = "navlink" href="../index.php">ACASA</a></li>
    
  </ul>
  </nav>  

  <div>
  <h1> &nbsp</h1>
  </div>
      
  <div class="container mt-5" class="background">
    <!-- Contact form -->
    <form name="contactForm" method="post"  id="formValidation" enctype="multipart/form-data" >
      <div class="form-group">
        <label for="fname" id="demo">Nume</label>
        <input type="text" class="form-control" name="fname" id="fname" placeholder="Nume">
      </div>

      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" name="email" id="email" placeholder="Email">
      </div>

      <div class="form-group">
        <label for="textarea">Mesaj</label>
        <textarea class="form-control" name="comment" id="comment" rows="4" placeholder="Mesajul:"></textarea>
      </div>

      <input id="send" type="submit" name="submit_con" value="Trimite" class="btn btn-dark btn-block">
      
      <div class="msg" id="msg"> </div>

    </form>
    
  </div>

    <script type="text/javascript"  src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript"  src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
    <script src="submit_con.js"></script>

</body>
</html>
