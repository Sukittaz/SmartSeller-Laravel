@extends('admin_template')

@section('content')
	<div style="padding-bottom: 10px;">
	  <a style="width: 110px;" href="user/add" class="btn btn-info">
	    <i class="fa fa-plus"></i> Criar
	  </a>  
	</div>

	<div class="box">
	  <div class="box-header">

	    <h3 class="box-title">Usuários</h3>
	  </div>
	  <!-- /.box-header -->
	  <div class="box-body">
	    <table id="data-table" class="table table-bordered">
	      <thead>
	      <tr>
	        <th>Nome</th>
	        <th>E-mail</th>
	        <th>Grupo</th>
	        <th>Ações</th>
	      </tr>
	      </thead>
	      <tbody>
          @foreach ($user as $item)
	      <tr>
	        <td>{{ $item->UserName }}</td>
	        <td>{{ $item->UserEmail }}</td>
	        <td>{{ $item->bunch->BunchName }}</td>
	        <td>
	          <a class='fa fa-search-plus' href="user/view/{{ $item->UserID }}"/>
	          <a class='fa fa-pencil-square' href="user/edit/{{ $item->UserID }}"/>
	        </td>   
	      </tr>
	      @endforeach
	      </tbody>
	    </table>
	  </div>
	  <!-- /.box-body -->
	</div>
@endsection