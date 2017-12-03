@extends('admin_template')

@section('content')
	<div class="box box-primary">
		<div class="box-header with-border">
		  <h3 class="box-title">Por favor, insira as informações abaixo</h3>
		</div>
		<!-- /.box-header -->
		<!-- form start -->
		<form role="form" method="POST">
	    {{ csrf_field() }}
		  <div class="box-body">
		    <div class="form-group">
		      <label>Nome</label>
		      <input type="text" name="SupplierName" class="form-control">
		    </div>   
		    <div class="form-group">
		      <label>E-mail</label>
		      <input type="email" name="SupplierEmail" class="form-control">
		    </div> 
		    <div class="form-group">
		      <label>Telefone</label>
		      <input type="text" name="SupplierPhone" class="form-control">
		    </div> 
		    <div class="form-group">
		      <label>CNPJ</label>
		      <input type="text" name="SupplierCNPJ" class="form-control">
		    </div>
		    <div class="form-group">
		      <label>Detalhes</label>
		      <textarea class="textarea" name="SupplierDetail" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
		    </div>                         
		  </div>
		  <!-- /.box-body -->

		  <div class="box-footer">
		    <button type="submit" name="submit" class="btn btn-primary">Adicionar Fornecedor</button>
		  </div>
		</form>
	</div>
@endsection