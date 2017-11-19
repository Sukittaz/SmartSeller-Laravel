@extends('admin_template')

@section('content')
	<div class="box box-primary">
		<div class="box-header with-border">
		  <h3 class="box-title">Por favor, atualize as informações abaixo</h3>
		</div>
		<!-- /.box-header -->
		<!-- form start -->
		<form role="form" method="POST">
		  <div class="box-body">
		    <div class="form-group">
		      <label>Nome</label>
		      <input type="text" name="UserName" value="{{ $user->UserName }}" class="form-control" readonly>
		    </div>  
		    <div class="form-group">
		      <label>Login</label>
		      <input type="text" name="UserLogin" value="{{ $user->UserLogin }}" class="form-control" readonly>
		    </div> 
		    <div class="form-group">
		      <label>E-mail</label>
		      <input type="email" name="UserEmail" value="{{ $user->UserEmail }}" class="form-control" readonly>
		    </div> 
		    <div class="form-group">
		      <label>Grupo</label>
		        <input type="text" name="BunchName" value="{{ $user->bunch->BunchName }}" class="form-control" readonly>
		    </div>                        
		  </div>
		  <!-- /.box-body -->
		</form>
	</div>
@endsection