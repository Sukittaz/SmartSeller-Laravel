@extends('admin_template')

@section('content')
	<div class="box box-primary">
		<div class="box-header with-border">
		  <h3 class="box-title">Por favor, atualize as informações abaixo</h3>
		</div>
		<!-- /.box-header -->
		<!-- form start -->
		<form role="form" method="POST">
      	{{ csrf_field() }}
		  <div class="box-body">
		    <div class="form-group">
		      <label>Nome</label>
		      <input type="text" name="BunchName" class="form-control">
		    </div>
		    <div class="form-group">
		      <label>Permissões</label>
		      <select class="form-control select2" name="PermissionID[]" multiple="multiple" data-placeholder="Selecione as permissões" style="width: 100%;">
          		@foreach ($permission as $item)
			        <option value="{{ $item->PermissionID }}">{{ $item->PermissionName }}</option>
         		@endforeach
		      </select>
		    </div>              
		  </div>
		  <!-- /.box-body -->

		  <div class="box-footer">
		    <button type="submit" name="submit" class="btn btn-primary">Adicionar Grupo</button>
		  </div>
		</form>
	</div>
@endsection