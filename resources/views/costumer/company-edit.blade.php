@extends('admin_template')

@section('content')
	<div class="box box-primary">
		<div class="box-header with-border">
		  <h3 class="box-title">Por favor, atualize as informações abaixo</h3>
		</div>
		<!-- /.box-header -->
		<!-- form start -->
		<form role="form" method="POST" enctype="multipart/form-data">
		  <div class="box-body">
		    <div class="form-group">
		      <label>Nome</label>
		      <input type="text" name="CompanyName" value="" class="form-control">
		    </div>          
		  </div>
		  <div class="box-body">
		    <div class="form-group">
		      <label>CNPJ</label>
		      <input type="text" name="CompanyCNPJ" value="" class="form-control">
		    </div>          
		  </div>  
		  <div class="row">
		    <div class="col-md-6">
		      <div class="box-body">
		        <div class="form-group">
		          <label>Endereço</label>
		          <input type="text" name="CompanyAddres" value="" class="form-control">
		        </div>          
		      </div> 
		    </div>
		    <div class="col-md-6">
		      <div class="box-body">
		        <div class="form-group">
		          <label>Nº</label>
		          <input type="text" name="CompanyAddresNumber" value="" class="form-control">
		        </div>          
		      </div> 
		    </div>
		  </div>  
		  <div class="box-body">
		    <div class="form-group">
		      <label>Complemento</label>
		      <input type="text" name="CompanyComplement" value="" class="form-control">
		    </div>          
		  </div> 
		  <div class="box-body">
		    <div class="form-group">
		      <label>Bairro</label>
		      <input type="text" name="CompanyNeigh" value="" class="form-control">
		    </div>          
		  </div>  
		  <div class="row">
		    <div class="col-md-6">
		      <div class="box-body">
		        <div class="form-group">
		          <label>Cidade</label>
		          <input type="text" name="CompanyCity" value="" class="form-control">
		        </div>          
		      </div> 
		    </div>
		    <div class="col-md-6">
		      <div class="box-body">
		        <div class="form-group">
		          <label>UF</label>
		          <input type="text" name="CompanyUF" value="" class="form-control">
		        </div>          
		      </div> 
		    </div>
		  </div>     
		  <div class="box-body">
		    <div class="form-group">
		      <label>CEP</label>
		      <input type="text" name="CompanyCep" value="" class="form-control">
		    </div>          
		  </div>   
		  <div class="box-body">
		    <div class="form-group">
		      <label>Telefone</label>
		      <input type="text" name="CompanyPhone" value="" class="form-control">
		    </div>          
		  </div>   
		  <div class="box-body">
		    <div class="form-group">
		      <label>Nome Fantasia</label>
		      <input type="text" name="CompanySocialName" value="" class="form-control">
		    </div>          
		  </div> 
		  <div class="box-body">  
		    <div class="form-group">
		      <label for="attachment">Foto Perfil</label>                            
		      <input type="file" name="CompanyImage" class="form-control tip" id="attachment">
		    </div> 
		  </div>    
		  <div class="row">
		    <div class="col-md-6">
		      <div class="box-body">
		        <div class="form-group">
		          <label>Inscrição Estadual</label>
		          <input type="text" name="CompanyIE" value="" class="form-control">
		        </div>          
		      </div> 
		    </div>
		    <div class="col-md-6">
		      <div class="box-body">
		        <div class="form-group">
		          <label>IE do Substituto Tributário</label>
		          <input type="text" name="CompanyIEST" value="" class="form-control">
		        </div>          
		      </div> 
		    </div>
		  </div>
		  <div class="box-body">
		    <div class="form-group">
		      <label>Inscrição Municipal</label>
		      <input type="text" name="CompanyIM" value="" class="form-control">
		    </div>          
		  </div>     
		  <div class="box-body">
		    <div class="form-group">
		      <label>CNAE Fiscal</label>
		      <input type="text" name="CompanyCNAE" value="" class="form-control">
		    </div>          
		  </div>        
		  <!-- /.box-body -->
		  <div class="box-footer">
		    <button type="submit" name="submit" class="btn btn-primary">Editar Empresa</button>
		  </div>
		</form>
	</div>
@endsection