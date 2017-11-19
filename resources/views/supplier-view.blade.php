@extends('admin_template')

@section('content')
	<div class="box box-primary">
		<div class="box-header with-border">
		  <h3 class="box-title">Visualização</h3>
		</div>
		<!-- /.box-header -->
		<!-- form start -->
		<form role="form" method="POST">
		  <div class="box-body">
		    <div class="form-group">
		      <label>Nome</label>
		      <input type="text" name="SupplierName" value="{{ $supplier->SupplierName }}" class="form-control" readonly>
		    </div>   
		    <div class="form-group">
		      <label>E-mail</label>
		      <input type="email" name="SupplierName" value="{{ $supplier->SupplierEmail }}" class="form-control" readonly>
		    </div> 
		    <div class="form-group">
		      <label>Telefone</label>
		      <input type="text" name="SupplierPhone" value="{{ $supplier->SupplierPhone }}" class="form-control" readonly>
		    </div> 
		    <div class="form-group">
		      <label>CNPJ</label>
		      <input type="text" name="SupplierCNPJ" value="{{ $supplier->SupplierCNPJ }}" class="form-control" readonly>
		    </div>
		    <div class="form-group">
		      <label>Detalhes</label>
		      <textarea class="textarea" name="SupplierDetail" disabled="disabled" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ $supplier->SupplierDetail }}</textarea>
		    </div>                         
		  </div>
		  <!-- /.box-body -->
		</form>
	</div>
@endsection