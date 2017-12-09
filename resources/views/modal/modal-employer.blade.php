<div class="modal fade" id="modal-employer">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Buscar Funcionários</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <div class="col-md-3">
            <label>Funcionário:</label>
          </div>
          <div class="col-md-12">
            <input type="text" name="Employer" class="form-control" autofocus>
            <button type="button" class="btn btn-block btn-default" id="searchEmployer" style="margin-top: 10px;">Buscar</button>
          </div>
        </div> 
        <div class="row">
          <div class="col-md-12">
            <table class="table table-bordered" style="margin-top: 10px; display: none;">
              <thead>
                  <tr>
                    <th>Nome</th>
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

<!-- Modal Employer JS -->
<script src="{{ asset ("/js/modal-employer.js") }}" type="text/javascript"></script> 