<!DOCTYPE html>
<html lang="pt-BR" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <title>Tela de Cadastro</title>
  </head>
  <body class="bg-dark">
    <div class="d-flex h-100 m-4 position-absolute justify-content-center align-items-center">
      <div class="p-4 w-75 bg-light">

        <form class="row g-3">
          <h1>Cadastro de Empresas </h1>
          <div class="col-6">
            <label for="inputAddress2" class="form-label">CNPJ</label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="">
          </div>
          <div class="col-md-6">
            <label for="inputCity" class="form-label">Razão Social</label>
            <input type="text" class="form-control" id="inputCity">
          </div>
          <div class="col-6">
            <label for="inputAddress2" class="form-label">Nome Fantasia</label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="">
          </div>
          <div class="col-md-6">
            <label for="inputCity" class="form-label">Telefone</label>
            <input type="text" class="form-control" id="inputCity">
          </div>
          <div class="col-12">
            <label for="inputAddress2" class="form-label">Gerente responsável</label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="">
          </div>
          <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Email</label>
            <input type="email" class="form-control" id="inputEmail4">
          </div>
          <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Password</label>
            <input type="password" class="form-control" id="inputPassword4">
          </div>
          <div class="col-12">
            <label for="inputAddress" class="form-label">Endereço</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="">
          </div>

          <div class="col-md-6">
            <label for="inputCity" class="form-label">Cidade</label>
            <input type="text" class="form-control" id="inputCity">
          </div>
          <div class="col-md-4">
            <label for="inputState" class="form-label">UF</label>
            <select id="inputState" class="form-select">
              <option selected>Escolha...</option>
              <option>AC</option>
              <option>AL</option>
              <option>AP</option>
              <option>AM</option>
              <option>BA</option>
              <option>CE</option>
              <option>PR</option>
              <option>SP</option>
              <option>RJ</option>
            </select>
          </div>
          <div class="col-md-2">
            <label for="inputZip" class="form-label">CEP</label>
            <input type="text" class="form-control" id="inputZip">
          </div>
          <div class="col-12">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="gridCheck">
              <label class="form-check-label" for="gridCheck">
                Check me out
              </label>
            </div>
          </div>
          <div class="col-12">
            <button type="submit" class="btn btn-primary">Cadastrar</button>
          </div>
        </form>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>