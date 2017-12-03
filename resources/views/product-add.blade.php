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
	      <input type="text" name="ProductName" class="form-control">
	    </div>
	    <div class="form-group">
	      <label>Código</label> você pode usar o código de barras do produto como código
	      <input type="text" name="ProductCode" class="form-control">
	    </div>   
	    <div class="form-group">
	      <label>Categoria</label>
	      <select class="form-control" name="CategoryID">
	        <option>Selecione</option>
	      	@foreach ($category as $item)
	        <option value="{{ $item->CategoryID }}">{{ $item->CategoryName }}</option>
	        @endforeach
	      </select>
	    </div>   
	    <div class="form-group">
	      <label>Tipo do cálculo</label>
	      <select class="form-control" name="ProductTypeCalc">
	        <option>Selecione</option>
	        <option value="Peso">Peso</option>
	        <option value="Quantidade">Quantidade</option>
	      </select>
	    </div>       
	    <div class="form-group">
	      <label>Custo</label>
	      <input type="text" name="ProductCost" class="form-control">
	    </div>     
	    <div class="form-group">
	      <label>Preço</label>
	      <input type="text" name="ProductPrice" class="form-control">
	    </div>
	    <div class="form-group">
	      <label>Quantidade</label>
	      <input type="text" name="ProductQtd" class="form-control">
	    </div>
	    <div class="form-group">
	      <label>Alerta de quantidade mínima</label>
	      <input type="text" name="ProductAlert" class="form-control">
	    </div>  
	  	<div class="form-group">
	  		<label>Detalhes</label>
	  		<textarea class="textarea" name="ProductDetail" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
	  	</div>     
	  </div>
	  <!-- /.box-body -->

	  <div class="box-footer">
	    <button type="submit" name="submit" class="btn btn-primary">Adicionar Produto</button>
	  </div>
	</form>
	</div>
@endsection