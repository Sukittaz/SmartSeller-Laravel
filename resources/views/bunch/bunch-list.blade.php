@extends('admin_template')

@section('content')
	<div style="padding-bottom: 10px;">
	  <a style="width: 110px;" href="bunch/add" class="btn btn-info">
	    <i class="fa fa-plus"></i> Criar
	  </a>  
	</div>

	<div class="box">
	  <div class="box-header">

	    <h3 class="box-title">Grupos</h3>
	  </div>
	  <!-- /.box-header -->
	  <div class="box-body">
	    <table id="data-table" class="table table-bordered">
	      <thead>
	      <tr>
	        <th>Nome</th>
	        <th>Ações</th>
	      </tr>
	      </thead>
	      <tbody>
          @foreach ($bunch as $item)
		      <tr>
		        <td>{{ $item->BunchName }}</td>
		        <td>
		          <a class='fa fa-search-plus ' href="bunch/view/{{ $item->BunchID }}"/>
		          <a class='fa fa-pencil-square' href="bunch/edit/{{ $item->BunchID }}"/>
		        </td>   
		      </tr>
          @endforeach
	      </tbody>
	    </table>
	  </div>
	  <!-- /.box-body -->
	</div>
@endsection