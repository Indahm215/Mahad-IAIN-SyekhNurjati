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
                                <div class="x_title">
                                    <h2>Data<small>Faq</small></h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li>
                                            <a href="{{ route('faq.create') }}" class="btn btn-primary">
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
                                                            <th>Kode Faq</th>
                                                            <th>Nama Faq</th>
                                                            <th>Aksi</th>
                                                        </tr>
                                                    </thead>
                                                    @foreach ($dataFak as $item)
                                                        <tbody>
                                                            <tr>
                                                                <td>{{ $loop->iteration }}</td>
                                                                <td>{{ $item->kode_faq }}</td>
                                                                <td>{{ $item->nama_faq }}</td>
                                                                <td>
                                                                    <form method="POST"
                                                                        action="{{ route('faq.destroy', $item->id) }}">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <a href="{{ route('faq.edit', $item->id) }}">edit
                                                                            <i class="fa fa-edit"></i> | </a>
                                                                        <input type="submit" onclick="return confirm('Are you sure you want to delete this item?');" value="hapus">
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
