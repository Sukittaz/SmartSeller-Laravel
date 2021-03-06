<html>
<head>
    <meta charset="UTF-8">
    <title>Frente de Caixa</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.2 -->
    <link href="/css/bootstrap.css" rel="stylesheet" type="text/css">
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Ionicons -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css">
    <!-- Theme style -->
    <link href="/css/adminlte-app.css" rel="stylesheet" type="text/css">
    <!-- PDV CSS -->
    <link href="/css/pdv.css" rel="stylesheet" type="text/css">
    <link href="/css/skins/_all-skins.css" rel="stylesheet" type="text/css">
</head>
<body class="skin-blue" >
	<header class="main-header">
	    <!-- Logo -->
	    <a href="/product" class="logo"><b>Admin</b>LTE</a>
	    <!-- Header Navbar -->
	    <nav class="navbar navbar-static-top" role="navigation">
	        <div class="navbar-custom-menu">
	            <ul class="nav navbar-nav">
	                <li class="dropdown user user-menu">
	                    <a href="login/logout/">
	                        <span class="hidden-xs">Sair do sistema</span>
	                    </a>
	                </li>
	            </ul>
	        </div>
	    </nav>
	</header>
	<div class="container-fluid">
		<div class="row row-one text-center line-space">
		  	<div class="col-md-1">
		  		<p>Caixa: 001</p>
		  	</div>		  	
		  	<div class="col-md-3">
		  		<p userID="{{ $userID }}">Usuário: {{ $userName }}</p>
		  	</div>		  	
		  	<div class="col-md-3">
		  		<p userID="{{ $userID }}">Vendedor(F1): {{ $userName }}</p>
		  	</div>
		  	<div class="col-md-3">
		  		<p>Cliente(F2): CLIENTE BALCÃO</p>
		  	</div>		  	
		</div>
		<div class="row row-two line-space">
			COCA COLA
		</div>	
		<div class="row row-three line-space-min">
		  	<div class="col-md-4">
			    <div class="form-group">
			      <label>Código Produto:</label>
			      <input type="text" name="ProductCode" quantit="1" class="form-control">
			    </div>
		  		<div class="row">
				    <div class="form-group">
					    <div class="col-md-3">
					    	<label>Qtde:</label>
					    </div>
					    <div class="col-md-6">
					    	<input type="text" name="ProductQtd" class="form-control">
	       				</div>
				    </div>		  			
		  		</div>
		  		<div class="row line-space-min">
				    <div class="form-group">
					    <div class="col-md-3">
					    	<label>Vlr Unit:</label>
					    </div>
					    <div class="col-md-6">
					    	<input type="text" name="VlrUnit" class="form-control">
	       				</div>
				    </div>		  			
		  		</div>
		  		<div class="row line-space-min">
				    <div class="form-group">
					    <div class="col-md-3">
					    	<label>Vlr Total:</label>
					    </div>
					    <div class="col-md-6">
					    	<input type="text" name="VlrTotal" class="form-control">
	       				</div>
				    </div>		  			
		  		</div>
		  		<div class="row line-space-min">
				    <div class="form-group">
					    <div class="col-md-3">
					    	<label>Estoque:</label>
					    </div>
					    <div class="col-md-6">
					    	<input type="text" name="ProductEstoque" class="form-control" readonly="readonly">
	       				</div>
				    </div>		  			
		  		</div>
		  		<div class="col-md-9 line-space-min">
		  			<div class="row shortcuts">
		  				<ul>
		  					<li>(F1) Buscar Clientes</li>
		  					<li>(F2) Buscar Produto</li>
		  				</ul>
		  			</div>
		  		</div>		  				  				    			    			    
			</div>
			<div class="col-md-8">
				<div class="row products-list">

					<div class="col-md-12">
						<div class="row linetop">
							<div class="col-md-6 text-left">dasdsa</div>
							<div class="col-md-6 text-right">dasdsads</div>

						</div>
						<div class="row">
							<div class="col-md-12">
								<table class="table products-list-table">
									<thead>
								      <tr>
								        <th>CÓDIGO</th>
								        <th>PRODUTO</th>
								        <th>QTDE.</th>
								        <th>VLR. UNIT.</th>
								        <th>TOTAL</th>
								      </tr>							
									</thead>
								      <tbody>
								      </tbody>
								</table>	
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-12 line-space-max">
					<div class="row">
						<div class="col-md-4 col-md-offset-8">
							<div class="row text-center">
								<div class="col-md-12 sale-price">
									<p>R$: <span>0.00</span></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- JQuery -->
	<script src="{{ asset ("/plugins/jquery-2.2.3.min.js") }}"></script>
	<!-- Bootstrap 3.3.2 JS -->
	<script src="{{ asset ("/plugins/bootstrap.min.js") }}" type="text/javascript"></script>	
	<!-- PDV JS -->
	<script src="{{ asset ("/js/pdv.js") }}" type="text/javascript"></script>
	<!-- Modals Includes -->
	@include('modal/modal-costumer')
	@include('modal/modal-employer')
	@include('modal/modal-product')
</body>
</html>