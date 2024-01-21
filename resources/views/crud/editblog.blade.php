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
									<h2>Edit <small>Blog</small></h2>
									
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<br />
									<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST" action="{{ route('blog.update', $dataBlog->id) }}">
										@csrf
                    @method('PUT')
                    <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="gambar">Gambar <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
                        <img src="{{ asset('gambargaleri/'.$dataBlog->gambar) }}" height="250px">
												{{-- <input type="text" class="form-control" name="nama_gambar"  value="{{ $dataBlog->nama_gambar }}"> --}}
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="judul">Judul <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" class="form-control" name="judul" value="{{ $dataBlog->judul }}">
											</div>
										</div>
                    <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="link"> Link <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" class="form-control" name="link" value="{{ $dataBlog->link }}">
											</div>
										</div>                    
                    <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="kategori"> Kategori <span class="required">*</span>
											</label>
											<div class="dropdown col-md-6 col-sm-6 ">
												<select name="kategori" id="kategori" class="form-control" value="{{ $dataBlog->kategori }}">
                          <option value="pengumuman">Pengumuman</option>
                          <option value="Berita">Berita</option>
                          <option value="Informasi Penting">Informasi Penting</option>
                        </select>
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