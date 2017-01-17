<!DOCTYPE html>
<html lang="us">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
<body background="background.jpg">
<div class="container">
  <h2 class="form-signing-heading">ÜYE GİRİSİ</h2>
  <form action="signin.php" method="POST">
    <div class="form-group">
      <label for="email">Kullanıcı Adı:</label>
      <input type="email" class="form-control" name="email" placeholder="E-mail adresinizi giriniz.">
    </div>
    <div class="form-group">
      <label for="pwd">Şifre:</label>
      <input type="password" class="form-control" name="sifre" placeholder="Şifre">
    </div>
	<button type="submit" name="kaydet" class="btn btn-default">Kayıt ol</button>
  </form>
</div> 
</body>
</html>
