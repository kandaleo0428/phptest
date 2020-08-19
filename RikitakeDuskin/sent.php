<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>送信完了</title>
</head>
<body>
  
    <h1>確認画面</h1>
    

  <div class="main">
    <div class="thanks-message">上記の内容でメールを送信します。よろしいでしょうか？</div>
    <div class="display-contact">
      <div class="form-title">入力内容</div>

      <div class="form-item">■ 姓</div>
      <?php echo $_POST['familyName']; ?>

      <div class="form-item">■ 名</div>
      <?php echo $_POST['givenName']; ?>

      <div class="form-item">■ メールアドレス</div>
      <?php echo $_POST['email']; ?>

      <div class="form-item">■ 電話番号</div>
      <?php echo $_POST['telephoneNumber']; ?>

      <div class="form-item">■ 郵便番号</div>
      <?php echo $_POST['zip'] ?>
      
      <div class="form-item">■ 都道府県</div>
      <?php echo $_POST['address1']; ?>

      <div class="form-item">■ 市区町名</div>
      <?php echo $_POST['address2']; ?>

      <div class="form-item">■ 住所</div>
      <?php echo $_POST['address3']; ?>

      <div class="form-item">■ マンション名／号室</div>
      <?php echo $_POST['address4']; ?>

      <div class="form-item">■ 依頼台数</div>
      <?php echo $_POST['orderNumber']; ?>

      <div class="form-item">
      <button type="submit"><a href="phpinfo.php">送信</a></button>
      </div>
    </div>
  </div>

  
  <!-- Bootstrap core JS-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
  <!-- Third party plugin JS-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
  <!-- Core theme JS-->
  <script src="js/scripts.js"></script>
</body>
</html>