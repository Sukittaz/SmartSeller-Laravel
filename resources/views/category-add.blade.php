@extends('admin_template')

@section('content')
  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Por favor, insira as informações.</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form role="form" method="POST">
      {{ csrf_field() }}
      <div class="box-body">
        <div class="form-group">
          <label>Nome</label>
          <input type="text" name="CategoryName" class="form-control">
        </div>          
      </div>
      <!-- /.box-body -->

      <div class="box-footer">
        <button type="submit" name="submit" class="btn btn-primary">Adicionar Categoria</button>
      </div>
    </form>
  </div>
@endsection