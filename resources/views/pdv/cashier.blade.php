@extends('admin_template')

@section('content')
  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Abrir Caixa</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form role="form" method="POST">
      {{ csrf_field() }}
      <div class="box-body">
        <div class="col-md-5" style="left: 30%;">
          <div class="small-box bg-green">
            <div class="inner">
              <div class="form-group">
                <label>Caixa</label>
                <select class="form-control" name="CategoryID">
                  <option>Selecione</option>
                </select>
              </div> 
              <div class="form-group">
                <label>Funcionário</label>
                <select class="form-control" name="CategoryID">
                  <option>Selecione</option>
                  @foreach ($user as $item)
                    <option value="{{ $item->UserID }}">{{ $item->UserName }}</option>
                  @endforeach
                </select>
              </div>                                
            </div>
            <a href="/pdv" class="small-box-footer">
             Abrir Caixa <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>           
      </div>
      <!-- /.box-body -->
    </form>
  </div>
@endsection