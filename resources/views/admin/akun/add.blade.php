<button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#myModal">
       Add User     
</button>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
     <form action="{{url('admin/akun/save')}}" method="POST" role="form">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Isi Data User</h4>
      </div>
      <div class="modal-body">       
          <input type="hidden" name="_token" value="{{ csrf_token() }}">          
          <div class="form-group">
            <label for="name" class="text-success">N a m a</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="N A M A" required>
          </div>
          <div class="form-group">
            <label for="email" class="text-success">email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="E MAIL" required>
          </div>
          <div class="form-group">
            <label for="password" class="text-success">Password</label>
            <input type="password" class="form-control" id="Password" name="password" placeholder="Password" required>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>