@extends('admin.layout')
@section('content')

    <body class="nav-md">
        <div class="container body">
            <div class="main_container">
                <!-- page content -->
                <div class="right_col" role="main">
                    <div class="">
                        <div class="col-md-12 col-sm-12 ">
                            <div class="x_panel">
                                <div class="x_title d-flex justify-content-start">
                                    <h2>Data
                                        <small>Mahaguru</small>
                                    </h2>
                                    
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li>
                                            <a href="{{ route('mahaguru.create') }}" class="btn btn-primary">
                                                <i class="fa fa-plus"></i>
                                                Tambah
                                            </a>
                                        </li>

                                    </ul>


                                    <div class="clearfix"></div>

                                </div>

                                <div class="x_content">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="card-box table-responsive">
                                                <table id="datatable-buttons" class="table table-striped table-bordered"
                                                    style="width:100%">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
																														<th>Foto</th>
                                                            <th>Nama Lengkap</th>
                                                            <th>Gender</th>
                                                            <th>Jabatan Fungsional</th>
                          																	<th>NIDN</th>
                          																	<th>Tempat,Tanggal Lahir</th>
                          																	<th>Email</th>
                          																	<th>Telepon</th>
                          																	<th>Agama</th>
                          																	<th>Bidang Keahlian</th>
                          																	<th>Matkul yang diampu</th>
                          																	<th>Status</th>
                                                            <th>Aksi</th>
                                                        </tr>
                                                    </thead>
                                                    @foreach ($dataGur as $item)
                                                        <tbody>
                                                            <tr>
                                                                <td>{{ $loop->iteration }}</td>
                                                                <td>
                                                                    <img src="{{ asset('fotomahaguru/' . $item->foto) }}"
                                                                        height="40px">
                                                                </td>
                                                                <td>{{ $item->nama_lengkap }}</td>
                                                                <td>{{ $item->jenis_kelamin }}</td>
                                																<td>{{ $item->jabatan_fungsional }}</td>
                                																<td>{{ $item->nidn }}</td>
                                																<td>{{ $item->ttl }}</td>
                                																<td>{{ $item->email }}</td>
                                																<td>{{ $item->no_telpon }}</td>
                                																<td>{{ $item->agama }}</td>
                                																<td>{{ $item->bidang_keahlian }}</td>
                                																<td>{{ $item->matkul_diampu }}</td>
                                																<td>{{ $item->status }}</td>
                                                                <td>
                                                                    <form method="POST"
                                                                    action="{{ route('mahaguru.destroy', $item->id) }}">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <a href="{{ route('mahaguru.edit', $item->id) }}">edit
                                                                        <i class="fa fa-edit"></i> | </a>
                                                                    <input type="submit" class="no-outline" value="hapus">
                                                                    </form>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    @endforeach
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /page content -->
            </div>
        </div>
    </body>
@endsection
