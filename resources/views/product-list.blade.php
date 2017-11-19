@extends('admin_template')

@section('content')
	<div style="padding-bottom: 10px;">
	  <a style="width: 110px;" href="/product/add" class="btn btn-info">
	    <i class="fa fa-plus"></i> Criar
	  </a>  
	</div>

	<div class="box">
	  <div class="box-header">
	    <h3 class="box-title">Produtos</h3>
	  </div>
	  <!-- /.box-header -->
	  <div class="box-body">
	    <table id="data-table" class="table table-bordered">
	      <thead>
	      <tr>
	        <th>Nome</th>
	        <th>Preço</th>
	        <th>Custo</th>
	        <th>Categoria</th>
	        <th>Código</th>
	        <th>Ações</th>
	      </tr>
	      </thead>
	      <tbody>
          @foreach ($product as $item)
		      <tr>
		        <td>{{ $item->ProductName }}</td>
		        <td>{{ $item->ProductPrice }}</td>
		        <td>{{ $item->ProductCost }}</td>
		        <td>{{ $item->category->CategoryName }}</td>
		        <td>{{ $item->ProductCode }}</td>
		        <td>
		          <a class='fa fa-search-plus' href=""/>
		          <a class='fa fa-pencil-square' href=""/>
		        </td>   
		      </tr>
          @endforeach
	      </tbody>
	    </table>
	  </div>
	  <!-- /.box-body -->
	</div>
@endsection