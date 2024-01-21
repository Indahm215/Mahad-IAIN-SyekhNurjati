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
              <div class="x_title">
                <h2>Data<small>FAQ</small></h2>
                {{-- <ul class="nav navbar-right panel_toolbox">
                  <li><a href="{{route('faq.create')}}"><i class="fa fa-plus"></i></a>
                  </li>
                  </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                  </li>
                </ul> --}}
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <div class="row">
                  <div class="col-sm-8">
                    <div class="card-box table-responsive">
                      <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Nama Penanya</th>
                            
                            <th>Pertanyaan</th>
                            <th>Jawaban</th>
                            <th>Aksi</th>
                            {{-- <th>Aksi</th> --}}
                          </tr>
                        </thead>
                        @foreach($dataFaq as $item)
                        <tbody>
                          <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->nama }}</td>
                            
                            <td>{{ $item->pertanyaan }}</td>
                            <td>{{ $item->jawaban }}</td>
                            <td>
                              <form method="POST" action="{{ route('faq.destroy', $item->id) }}">
                                @csrf
                                @method('DELETE')
                                <a href="{{ route('faq.edit', $item->id) }}">Jawab <i class="fa fa-edit"></i> | </a>
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

