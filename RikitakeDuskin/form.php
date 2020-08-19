<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>お申し込みフォーム</title>
  <!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">


</head>
<body>
  <h1 div class="ml-5 mt-5">お申込みフォーム</h1>
  <div class="container mt-5">
    <form action="sent.php" method="POST">
      <div class="form-row">

        <h4 div class="mr-3">氏名</h4>
        <div class="col">
          <input type="text" class="form-control" placeholder="姓" name="familyName" required>
        </div>
        <div class="col">
          <input type="text" class="form-control" placeholder="名" name="givenName" required>
        </div>
      </div>

      <form>
        <div class="form-row mt-5">
          <div class="form-group col-md-6">
            <label for="inputEmail4">メールアドレス</label>
            <input type="email" class="form-control" id="inputEmail4" placeholder="○○○○○○@○○○○" name="email" required>
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">電話番号</label>
            <input type="text" class="form-control" id="inputPassword4" placeholder="000-0000-0000" name="telephoneNumber" required>
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-md-2">
            <label for="inputZip">郵便番号</label>
            <input type="text" class="form-control" id="inputZip" placeholder="000-0000" name="zip" required>
          </div>
          <div class="form-group col-md-4">
            <label for="inputState">都道府県</label>
            <select id="inputState" class="form-control" name="address1" required>
              <option selected>東京都</option>
              <option>神奈川県</option>
              <option>千葉県</option>
              <option>埼玉県</option>
            </select>
          </div>
          <div class="form-group col-md-6">
            <label for="inputCity">市区町名</label>
            <input type="text" class="form-control" id="inputCity" placeholder="○○区 もしくは ○○市" name="address2" required>
          </div>
        </div＞

          <div class="form-group">
            <label for="inputAddress">住所</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="市区名以下をご記入ください" name="address3" required>
          </div>
          <div class="form-group mt-2">
            <label for="inputAddress2">マンション名／号室（なしの場合は未記入で結構です）</label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="マンション／アパート名と号室" name="address4">

            <div class="form-group mt-3">
              <label for="inputState">清掃を依頼したいエアコンの台数</label>
              <select id="inputState" class="form-control" name="orderNumber" required>
                <option selected>1台：7000円（税込）</option>
                <option>2台：14000円（税込）</option>
                <option>3台：21000円（税込）</option>
                <option>4台以上：台数×7000円（税込）</option>
              </select>
            </div>
          </div>
        
        <button type="submit" class="btn btn-primary mt-5" >確認</button>
      </form>

      </div>
    </form>

  <!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

  </div>
</body>
  <footer class="bg-light py-5">
    <div class="container"><div class="small text-center text-muted">Copyright © 2020 - 2ndCommunity & DUSKIN</div></div>
  </footer>
</html>