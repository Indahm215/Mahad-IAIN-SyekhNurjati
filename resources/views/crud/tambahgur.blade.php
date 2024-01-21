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
							<h3>Formulir Tambah Data</h3>
						</div>
					</div>
					<div class="clearfix"></div>
					<div class="row">
						<div class="col-md-12 col-sm-12 ">
							<div class="x_panel">
								<div class="x_title">
									<h2>Tambah <small>Mahaguru</small></h2>
									<ul class="nav navbar-right panel_toolbox">
										<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
										</li>
										<li><a class="close-link"><i class="fa fa-close"></i></a>
										</li>
									</ul>
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<br />
									<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST" action="{{ route('mahaguru.store') }}" enctype="multipart/form-data">
										@csrf								
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="foto">Foto <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="file" name="foto" required="required" class="form-control ">
											</div>
										</div>
                    <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="nama_lengkap">Nama Lengkap <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" name="nama_lengkap" required="required" class="form-control">
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
                    <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="jabatan_fungsional">Jabatan <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" name="jabatan_fungsional" required="required" class="form-control">
											</div>
										</div>
                    <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="nidn">NIDN <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" name="nidn" required="required" class="form-control">
											</div>
										</div>
                    <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="ttl">Tempat, Tanggal Lahir <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" name="ttl" required="required" class="form-control">
											</div>
										</div>
                    <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="email">Nama Lengkap <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="email" name="email" required="required" class="form-control">
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