@extends('layout.master')
@section('content')
	<div class="row">
	<div class="col-md-4">
		<ol class="breadcrumb">
		  <li><a href="#">Home</a></li>
		  <li><a href="#">Library</a></li>
		  <li class="active">Data Penduduk</li>
		</ol>
	</div>
</div>
<div class="col-md-12">
	@include('penduduk.addPenduduk')
</div>
	@if ( $penduduk->count() > 0)
		<table class="table table-hover">
			<thead>
				<th>
					<tr>
						<td> N I K</td>
						<td> N A M A</td>
						<td> Jenis Kelamin</td>
						<td> Tempat, Tanggal Lahir</td>
						<td> Status</td>
						<td> Agama</td>
						<td> Pekerjaan</td>
						<td> Golongan Darah</td>
						<td> Alamat</td>
						<td> Action</th>
					</tr>
				</th>
			</thead>
			<tbody>
				
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				
			</tbody>
		</table>
		
	@endif
@endsection