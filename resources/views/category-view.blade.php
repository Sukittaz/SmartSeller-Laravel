@extends('admin_template')

@section('content')
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Visualização</h3>
      </div>
      <!-- /.box-header -->
      <!-- form start -->
      <form role="form" method="POST">
        <div class="box-body">
          <div class="form-group">
            <label>Nome</label>
            <input type="text" name="CategoryName" value="{{ $category->CategoryName }}" class="form-control" readonly>
          </div>          
        </div>
        <!-- /.box-body -->
      </form>
    </div>
@endsection