@extends('layout.master')
@section('content')
	<div class="row">
	<div class="col-md-4">
		<ol class="breadcrumb">
		  <li><a href="#">Home</a></li>
		  <li><a href="#">Library</a></li>
		  <li class="active">Data</li>
		</ol>
	</div>
	<div class="col-md-8">	
	</div>
	<div class="col-md-12">
		<div class="col-md-4">
		    <div class="input-group">
		      <input type="text" class="form-control" placeholder="Search for...">
		      <span class="input-group-btn">
		        <button class="btn btn-default" type="button"><span class="fa fa-search"></span> Cari</button>
		      </span>
		    </div>
	    </div>
		<div class="col-md-8">			
			@include('admin.akun.add')

		</div>
	</div>
	</div>

<div class="col-md-12">

			<table class="table table-hover">
				<thead>
					<th>						
						<tr class="info">
							<td>User Name</td>
							<td>Email</td>
							<td>Password</td>
							<td>Action</td>
						</tr>						
					</th>
				</thead>
					<tbody>
						@foreach ( $akuns as $akun )
							<tr>
								<td>{!! $akun->name !!}</td>
								<td>{!! $akun->email !!}</td>
								<td>{!! $akun->password !!}</td>
								<td><a href="{!! url('admin/akun/delete',[$akun->id]) !!}" class="text-danger"  data-toggle="tooltip" data-placement="top" title="Hapus Data"><span class="fa fa-trash-o"></span> hapus</a> <br>
									<a href="#" data-url="{!! url('admin/akun/edit',[$akun->id]) !!}"class="getedit text-info" data-toggle="tooltip" data-placement="top" title="Edit Data" ><span class="fa fa-edit"></span> Edit</a> </td>
							</tr>

						@endforeach

					</tbody>

			</table>
				<div class="text-center"><?php echo $akuns->render(); ?>  </div>
	</div>
</div>
<div id="tempat"></div>
<script>
	$(document).ready(function(){
		$(".getedit").click(function(){
			var alamat = $(this).data('url');
			$.get(alamat, function(data) {
				//console.log(data);
				$("#tempat").html(data);
				$("#editmodar").modal('show');
			});
		});
	});
	</script>
@endsection

