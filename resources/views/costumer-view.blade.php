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
		      <input type="text" name="CostumerName" value="{{ $costumer->CostumerName }}" class="form-control" readonly>
		    </div>
		    <div class="form-group">
		      <label>CPF</label>
		      <input type="text" name="CostumerCPF" value="{{ $costumer->CostumerCPF }}" class="form-control" readonly>
		    </div>       
		    <div class="form-group">
		      <label>E-mail</label>
		      <input type="email" name="CostumerEmail" value="{{ $costumer->CostumerEmail }}" class="form-control" readonly>
		    </div>
		    <div class="form-group">
		      <label>Telefone</label>
		      <input type="text" name="CostumerPhone" value="{{ $costumer->CostumerPhone }}" class="form-control" readonly>
		    </div>
		    <div class="form-group">
		      <label>CEP</label>
		      <input type="text" name="CostumerCEP" value="{{ $costumer->CostumerCEP }}" class="form-control" readonly>
		    </div>
		    <div class="form-group">
		      <label>Endereço</label>
		      <input type="text" name="CostumerAddres" value="{{ $costumer->CostumerAddres }}" class="form-control" readonly>
		    </div>  
		    <div class="form-group">
		      <label>Nº</label>
		      <input type="text" name="CostumerAddresNumber" value="{{ $costumer->CostumerAddresNumber }}" class="form-control" readonly>
		    </div>  
		    <div class="form-group">
		      <label>Bairro</label>
		      <input type="text" name="CostumerNeigh" value="{{ $costumer->CostumerNeigh }}" class="form-control" readonly>
		    </div>      
		    <div class="form-group">
		      <label>Cidade</label>
		      <input type="text" name="CostumerCity" value="{{ $costumer->CostumerCity }}" class="form-control" readonly>
		    </div>           
		    <div class="form-group">
		      <label>Detalhes</label>
		      <textarea class="textarea" disabled="disabled" name="CostumerDetail" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ $costumer->CostumerDetail }}</textarea>
		    </div>     
		  </div>
		  <!-- /.box-body -->
		</form>
	</div>
@endsection