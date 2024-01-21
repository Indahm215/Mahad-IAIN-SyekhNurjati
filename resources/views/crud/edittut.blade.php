@extends('admin.layout')
@section('content')
<body class="nav-md">
	<div class="container body">
		<div class="main_container">			
			<!-- page content -->
			<div class="right_col" role="main">
				<div class="">
					<div class="page-title">
						<div class="title_left">
							<h3>Formulir Edit Data</h3>
						</div>
					</div>
					<div class="clearfix"></div>
					<div class="row">
						<div class="col-md-12 col-sm-12 ">
							<div class="x_panel">
								<div class="x_title">
									<h2>Edit <small>Tutor</small></h2>
									
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<br />
									<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST" action="{{ route('tutor.update', $dataTut->id) }}">
										@csrf
                    @method('PUT')
                    <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="foto">Foto <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
                        <img src="{{ asset('gambargaleri/'.$dataTut->foto) }}" height="250px">
												{{-- <input type="text" class="form-control" name="nama_gambar"  value="{{ $dataTut->nama_gambar }}"> --}}
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="nama">Nama<span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" class="form-control" name="nama" value="{{ $dataTut->nama }}">
											</div>
										</div>                    
                    <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="jenis_kelamin">Jenis Kelamin <span class="required">*</span>
											</label>
                      <div class="col-md-6 col-sm-6 ">
											  <input type="radio" id="wanita" name="jenis_kelamin" value="wanita">
                        <label for="wanita">Wanita</label><br>
                        <input type="radio" id="pria" name="jenis_kelamin" value="pria">
                        <label for="pria">Pria</label><br>
                      </div>  
										</div>

										<div class="ln_solid"></div>
										<div class="item form-group">
											<div class="col-md-6 col-sm-6 offset-md-3">
												<button class="btn btn-primary" type="reset">Batal</button>
												<button type="submit" class="btn btn-success">Kirim</button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
					
				</div>
			</div>
			<!-- /page content -->
		</div>
	</div>

@endsection