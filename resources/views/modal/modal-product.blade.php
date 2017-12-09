<div class="modal fade" id="modal-product">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Buscar Produtos</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <div class="col-md-3">
            <label>Produto:</label>
          </div>
          <div class="col-md-12">
            <input type="text" name="Product" class="form-control" autofocus>
            <button type="button" class="btn btn-block btn-default" id="searchProduct" style="margin-top: 10px;">Buscar</button>
          </div>
        </div> 
        <div class="row">
          <div class="col-md-12">
            <table class="table table-bordered" style="margin-top: 10px; display: none;">
              <thead>
                  <tr>
                    <th>Código</th>
                    <th>Nome</th>
                    <th>Categoria</th>
                    <th></th>
                  </tr>             
              </thead>
              <tbody class="tbody">
              </tbody>            
            </table>  
          </div>
        </div>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>

<!-- Modal Product JS -->
<script src="{{ asset ("/js/modal-product.js") }}" type="text/javascript"></script> 