@extends('admin_template')

@section('content')
	<div style="padding-bottom: 10px;">
	  <a style="width: 110px;" href="/costumer/add" class="btn btn-info">
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
	        <th>E-mail</th>
	        <th>Telefone</th>
	        <th>Endereço</th>
	        <th>Nº</th>
	        <th>Ações</th>
	      </tr>
	      </thead>
	      <tbody>
          @foreach ($costumer as $item)
		      <tr>
		        <td>{{ $item->CostumerName }}</td>
		        <td>{{ $item->CostumerEmail }}</td>
		        <td>{{ $item->CostumerPhone }}</td>
		        <td>{{ $item->CostumerAddres }}</td>
		        <td>{{ $item->CostumerAddresNumber }}</td>
		        <td>
		          <a class='fa fa-search-plus' href=""/>
		          <a class='fa fa-pencil-square' href=""/>
		          <a class='fa fa-trash' href=""/>
		        </td>   
		      </tr>
          @endforeach
	      </tbody>
	    </table>
	  </div>
	  <!-- /.box-body -->
	</div>
@endsection