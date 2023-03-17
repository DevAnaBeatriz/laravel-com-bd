<!DOCTYPE HTML>
<html lang="pt-br">

@vite(['resources/css/app.css',
'resources/js/app.js',
'node_modules/bootstrap/dist/css/bootstrap.min.css',
'node_modules/bootstrap/dist/js/bootstrap.bundle.js'])

<head>
	<style>
		body {
			background-color: #CCCCCC;
		}
	</style>
	<meta charset="UTF-8">
	<title>PRJ-Cadastrar</title>

</head>

<body>
	<div class="container">
		<div class="row">
			<nav class="navbar navbar-expand-lg navbar-dark bg-primary col-12">
				<div class="container-fluid">
					<a class="navbar-brand" href="#">&nbsp;&nbsp;&nbsp;SISTEMA WEB</a>
					<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
						<div class="navbar-nav">
							<a class="nav-link" href="#" style="color: white;">Cadastrar</a>
							<a class="nav-link disabled">Consultar</a>
						</div>
					</div>
				</div>
			</nav>
		</div>
		<div class="row">
			<div class="card mb-3 col-12">
				<div class="card-body">
					<h5 class="card-title">Cadastrar - Agendamento de Potenciais Clientes</h5>
					<p class="card-text">Sistema utilizado para agendamento de serviços.</p>
					<p>
					<form>
						<div class="mb-3">
							<label for="exampleFormControlInput1" class="form-label">Nome:</label>
							<input type="text" class="form-control" required id="txtNome">
						</div>

						<div class="mb-3">
							<label for="exampleFormControlInput1" class="form-label">Telefone:</label>
							<input type="tel" class="form-control" required name="txtTelefone" id="txtTelefone" placeholder="(xx)xxxxx-xxxx">
						</div>

						<div class="mb-3">
							<label for="exampleFormControlSelect1" class="form-label">Origem:</label>
							<select class="form-select" aria-label="Default select example">
								<option selected value="2">Celular</option>
								<option value="2">Fixo</option>
							</select>
						</div>

						<div class="mb-3">
							<label for="exampleFormControlInput1" class="form-label">Data do Contato:</label>
							<input type="date" class="form-control" required name="txtDataContato" id="txtDataContato">
						</div>

						<div class="mb-3">
							<label for="exampleFormControlTextarea1" class="form-label">Observação</label>
							<textarea class="form-control" name="txtObservacao" id="txtObservacao" rows="3"></textarea>
						</div>

						<button type="submit" id="btnInserir" class="btn btn-primary">Cadastrar</button>
					</form>
					</p>
				</div>
			</div>
		</div>
	</div>
</body>

</html>