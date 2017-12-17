<div class="modal fade" id="modal-costumer">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Buscar Clientes</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <div class="col-md-3">
            <label>Cliente:</label>
          </div>
          <div class="col-md-12">
            <input type="text" name="Costumer" class="form-control" autofocus>
            <button type="button" class="btn btn-block btn-default" id="searchCostumer" style="margin-top: 10px;">Buscar</button>
          </div>
        </div> 
        <div class="row">
          <div class="col-md-12">
            <table class="table table-bordered" style="margin-top: 10px; display: none;">
              <thead>
                  <tr>
                    <th>Nome</th>
                    <th>CPF/CNJP</th>
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
<script src="{{ asset ("/js/modal-costumer.js") }}" type="text/javascript"></script> 