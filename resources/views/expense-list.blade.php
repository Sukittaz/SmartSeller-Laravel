@extends('admin_template')

@section('content')
	<div style="padding-bottom: 10px;">
	  <a style="width: 110px;" href="/expense/add" class="btn btn-info">
	    <i class="fa fa-plus"></i> Criar
	  </a>  
	</div>

	<div class="box">
	  <div class="box-header">

	    <h3 class="box-title">Despesas</h3>
	  </div>
	  <!-- /.box-header -->
	  <div class="box-body">
	    <table id="data-table" class="table table-bordered">
	      <thead>
	      <tr>
	        <th>Referência</th>
	        <th>Data</th>
	        <th>Valor Pago</th>
	        <th>Ações</th>
	      </tr>
	      </thead>
	      <tbody>
          @foreach ($expense as $item)
		      <tr>
		        <td>{{ $item->ExpenseRef }}</td>
		        <td>{{ $item->ExpenseDate }}</td>
		        <td>{{ $item->ExpenseValue }}</td>
		        <td style='width: 80px;'>
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