@extends('admin_template')

@section('content')
	<div class="nav-tabs-custom">
	  <ul class="nav nav-tabs">
	    <li class="tab-1 active"><a href="#tab_1" data-toggle="tab">Editar</a></li>
	    <li class="tab-2"><a href="#tab_2" data-toggle="tab">Alterar senha</a></li>
	  </ul>
	    <div class="tab-content">
	      <div class="tab-pane active" id="tab_1">
	          <div class="box-header with-border">
	            <h3 class="box-title">Por favor, atualize as informações abaixo</h3>
	          </div>
	          <!-- /.box-header -->
	          <!-- form start -->
	          <form role="form" method="POST">
	            <div class="box-body">
	              <div class="form-group">
	                <label>Nome</label>
	                <input type="text" name="UserName" value="{{ $user->UserName }}" class="form-control">
	              </div>  
	              <div class="form-group">
	                <label>Login</label>
	                <input type="text" name="UserLogin" value="{{ $user->UserLogin }}" class="form-control">
	              </div> 
	              <div class="form-group">
	                <label>E-mail</label>
	                <input type="email" name="UserEmail" value="{{ $user->UserEmail }}" class="form-control">
	              </div> 
	              <div class="form-group">
	                <label>Grupo</label>
	                <select class="form-control" name="BunchID">
	                  <option value=""></option>
	                </select>
	              </div>                                      
	            </div>
	            <!-- /.box-body -->
	            <div class="box-footer">
	              <button type="submit" name="submit" class="btn btn-primary">Atualizar Usuário</button>
	            </div>
	          </form>
	      </div>
	      <!-- /.tab-pane -->
	      <div class="tab-pane" id="tab_2">
	        <form role="form" method="POST">
	          <div class="box-body">    
	            <div class="form-group">
	              <label>Nova Senha</label>
	              <input type="password" name="UserPass" class="form-control">
	            </div> 
	            <!-- /.box-body -->
	            <div class="box-footer">
	              <button type="submit" name="alter-pass" class="btn btn-primary">Alterar Senha</button>
	            </div>                                
	          </div>
	        </form>  
	      </div>
	    </div>
	  <!-- /.tab-content -->
	</div>
@endsection