@extends('admin_template')

@section('content')
    <div style="padding-bottom: 10px;">
      <a style="width: 110px;" href="" class="btn btn-info">
        <i class="fa fa-plus"></i> Criar
      </a>  
    </div>

    <div class="box">
      <div class="box-header">

        <h3 class="box-title">Categorias</h3>
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
          @foreach ($category as $item)
            <tr>
              <td>{{ $item->CategoryName }}</td>
              <td>
                <a class='fa fa-search-plus' href=""/>
                <a class='fa fa-pencil-square' href=""/>
              </td>   
            </tr>
          @endforeach
          </tbody>
        </table>
      </div>
      <!-- /.box-body -->
    </div>
@endsection