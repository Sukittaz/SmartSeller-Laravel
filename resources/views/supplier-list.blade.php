@extends('admin_template')

@section('content')
	<div style="padding-bottom: 10px;">
	  <a style="width: 110px;" href="/supplier/add" class="btn btn-info">
	    <i class="fa fa-plus"></i> Criar
	  </a>  
	</div>

	<div class="box">
	  <div class="box-header">

	    <h3 class="box-title">Fornecedores</h3>
	  </div>
	  <!-- /.box-header -->
	  <div class="box-body">
	    <table id="data-table" class="table table-bordered">
	      <thead>
	      <tr>
	        <th>Nome</th>
	        <th>E-mail</th>
	        <th>Telefone</th>
	        <th>CNPJ</th>
	        <th>Ações</th>
	      </tr>
	      </thead>
	      <tbody>
          @foreach ($supplier as $item)
		      <tr>
		        <td>{{ $item->SupplierName }}</td>
		        <td>{{ $item->SupplierEmail }}</td>
		        <td>{{ $item->SupplierPhone }}</td>
		        <td>{{ $item->SupplierCNPJ }}</td>
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