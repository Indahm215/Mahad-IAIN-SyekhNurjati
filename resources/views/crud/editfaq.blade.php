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
									<h2>Edit <small>FAQ</small></h2>
									
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<br />
									<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST" action="{{ route('faq.update', $dataFaq->id) }}">
										@csrf
                                        @method('PUT')
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="nama">Nama Penanya<span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" disabled="disabled" class="form-control" name="nama" value="{{ $dataFaq->nama }}">
											</div>
										</div>
										{{-- <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="email">Email <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="email" disabled="disabled" class="form-control" name="email" value="{{ $dataFaq->email }}">
											</div>
										</div> --}}
                                        <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="pertanyaan">Pertanyaan <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" disabled="disabled" class="form-control" name="pertanyaan" value="{{ $dataFaq->pertanyaan }}">
											</div>
										</div>
                                        <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="jawaban">Jawaban <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" class="form-control" name="jawaban" value="{{ $dataFaq->jawaban }}">
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