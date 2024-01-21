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
                <h2>Data<small>Kategori</small></h2>
                <ul class="nav navbar-right panel_toolbox">
                  <li><a href="{{route('kategori.create')}}"><i class="fa fa-plus"></i></a>
                  </li>
                  </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                  </li>
                </ul>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="card-box table-responsive">
                      <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Nama kategori</th>
                            <th>Aksi</th>
                          </tr>
                        </thead>
                        @foreach($dataKat as $item)
                        <tbody>
                          <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->nama_kategori }}</td>
                            <td>
                              <form method="POST" action="{{ route('kategori.destroy', $item->id) }}">
                                @csrf
                                @method('DELETE')
                                <a href="{{ route('kategori.edit', $item->id) }}">edit <i class="fa fa-edit"></i> | </a>
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

