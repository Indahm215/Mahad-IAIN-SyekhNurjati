@extends('admin.layout')
@section('content')

    <body class="nav-md">
        <div class="container body">
            <div class="main_container">

                <!-- page content -->
                <div class="right_col" role="main">
                    <div class="">
                        <div class="col-md-9 col-sm-9 ">
                            <div class="x_panel">
                                <div class="x_title ">
                                    <h2>Data
                                        <small>Tutor</small>
                                    </h2>
                                    
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li>
                                            <a href="{{ route('tutor.create') }}" class="btn btn-primary">
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
                                                            <th>Nama</th>
                                                            <th>Jenis Kelamin</th>
                                                            <th>Aksi</th>
                                                        </tr>
                                                    </thead>
                                                    @foreach ($dataTut as $item)
                                                        <tbody>
                                                            <tr>
                                                                <td>{{ $loop->iteration }}</td>
                                                                <td>
                                                                  <img src="{{ asset('gambargaleri/'.$item->foto) }}" height="60px">    
                                                                </td> 
                                                                <td>{{ $item->nama }}</td>
                                                                <td>{{ $item->jenis_kelamin }}</td>
                                                                <td>
                                                                    <form method="POST"
                                                                        action="{{ route('tutor.destroy', $item->id) }}">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <a href="{{ route('tutor.edit', $item->id) }}">edit
                                                                            <i class="fa fa-edit"></i> | </a>
                                                                        <input type="submit" class="no-outline"
                                                                            value="hapus">
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
