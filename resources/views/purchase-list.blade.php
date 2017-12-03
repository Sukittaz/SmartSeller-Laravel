@extends('admin_template')

@section('content')
	<div style="padding-bottom: 10px;">
	  <a style="width: 110px;" href="purchase/add" class="btn btn-info">
	    <i class="fa fa-plus"></i> Criar
	  </a>  
	</div>

	<div class="box">
	  <div class="box-header">

	    <h3 class="box-title">Compras</h3>
	  </div>
	  <!-- /.box-header -->
	  <div class="box-body">
	    <table id="data-table" class="table table-bordered">
	      <thead>
	      <tr>
	        <th>Referência</th>
	        <th>Data</th>
	        <th>Fornecedor</th>
	        <th>Status</th>
	        <th>Ações</th>
	      </tr>
	      </thead>
	      <tbody>
          @foreach ($purchase as $item)
			<tr>
			  <td>{{ $item->PurchaseRef }}</td>
			  <td>{{ $item->PurchaseData }}</td>
			  <td>{{ $item->supplier->SupplierName }}</td>
			  <td>{{ ($item->PurchaseStatus == 1)? "Recebido" : "Não Recebido" }}</td>
			  <td>
			    <a class='fa fa-search-plus' href="purchase/view/"/>
			  </td>   
			</tr>
          @endforeach
	      </tbody>
	    </table>
	  </div>
	  <!-- /.box-body -->
	</div>
@endsection