<div class="modal fade" id="editmodar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    @foreach($akuns as $akuns)
	<form action="{{url('admin/akun/update')}}" method="post">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Edit Data User</h4>
      </div>
      <div class="modal-body">
		<input type="hidden" name="_token" value="{{ csrf_token() }}"> 
		<input type="hidden" value="{{ $akuns->id  }}" name="id">         
        <div class="form-group">
        <label for="name" class="text-success">N a m a</label>
            <input type="text" class="form-control" value="{{ $akuns->name }}" id="name" name="name" placeholder="N A M A" required>
        </div>
        <div class="form-group">
            <label for="email" class="text-success">email</label>
            <input type="email" class="form-control" value="{{ $akuns->email }}" id="email" name="email" placeholder="E MAIL" required>
        </div>
        <div class="form-group">
            <label for="password" class="text-success">Password</label>
            <input type="password" class="form-control" value="{{ $akuns->password }}" id="password" name="password" placeholder="Password" required>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>    
   </form>
	 @endforeach  	
   </div>
  </div>
</div>