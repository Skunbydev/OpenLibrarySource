<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="./style.css">
</head>

<body>
  <div class="login-container">
    <div class="login-form-container">
      <img class="login-image" src="https://via.placeholder.com/200x400" alt="Image">
      <div class="login-form">
        <h2>Login</h2>
        <form>
          <div class="form-group">
            <input type="email" class="form-control" placeholder="Email" required="required">
          </div>
          <div class="form-group">
            <input type="password" class="form-control" placeholder="Password" required="required">
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block btn-login">Login</button>
          </div>
          <div class="clearfix">
            <label class="float-left form-check-label"><input type="checkbox"> Lembre-me</label>
            <a href="#" class="float-right">Esqueceu a senha?</a>
          </div>
        </form>
        <p class="text-center mt-3">Você não tem uma conta? <a href="./cadastro.html">Cadastre-se aqui</a></p>
      </div>
    </div>
  </div>
</body>

</html>