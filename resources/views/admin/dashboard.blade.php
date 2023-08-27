@extends('admin.layout')
@section('content')
<div class="right_col" role="main">
          <div class="col-md-12" style="display: inline-block;">            
              <div class="top_tiles">

                <div class="animated flipInY col-sm-2 col-sm-1 col-sm-1 ">
                  <div class="tile-stats">
                    <div class="icon"><i class="fa fa-edit"></i></div>
                    <div class="count">179</div>
                    <h3>Pendaftar</h3>
                  </div>
                </div>
                <div class="animated flipInY col-sm-2 col-sm-1 col-sm-1 ">
                  <div class="tile-stats">
                    <div class="icon"><i class="fa fa-users"></i></div>
                    <div class="count">179</div>
                    <h3>Mahasantri</h3>
                  </div>
                </div>
                <div class="animated flipInY col-sm-2 col-sm-1 col-sm-1 ">
                  <div class="tile-stats">
                    <div class="icon"><i class="fa fa-user"></i></div>
                    <div class="count">179</div>
                    <h3>Mahaguru</h3>
                  </div>
                </div>
                <div class="animated flipInY col-sm-2 col-sm-1 col-sm-1 ">
                  <div class="tile-stats">
                    <div class="icon"><i class="fa fa-smile-o"></i></div>
                    <div class="count">179</div>
                    <h3>Tutor</h3>
                  </div>
                </div>
                <div class="animated flipInY col-sm-2 col-sm-1 col-sm-1 ">
                  <div class="tile-stats">
                    <div class="icon"><i class="fa fa-globe"></i></div>
                    <div class="count">179</div>
                    <h3>Blog</h3>
                  </div>
                </div>
                <!-- <div class="animated flipInY col-sm-2 col-sm-1 col-sm-1 ">
                  <div class="tile-stats">
                    <div class="icon"><i class="fa fa-building-o"></i></div>
                    <div class="count">179</div>
                    <h3>Fakultas</h3>
                  </div>
                </div> -->
                <!-- <div class="animated flipInY col-sm-2 col-sm-1 col-sm-1 ">
                  <div class="tile-stats">
                    <div class="icon"><i class="fa fa-image"></i></div>
                    <div class="count">179</div>
                    <h3>Galeri</h3>
                  </div>
                </div> -->
                <div class="animated flipInY col-sm-2 col-sm-1 col-sm-1 ">
                  <div class="tile-stats">
                    <div class="icon"><i class="fa fa-question-circle"></i></div>
                    <div class="count">179</div>
                    <h3>FAQ's Baru</h3>
                  </div>
                </div>               
              </div>            
          </div>
            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">                  
                  <div class="x_content">
                  <div class="col-md-9 col-sm-12 ">
                    <div class="demo-container" style="height:600px">
                      <img src="/assets/utama65.jpg" alt="">
                    </div>
                  </div>
                  <div class="col-md-3 col-sm-12 ">
                    <div>
                        <div class="x_title">
                          <h2>Top Profiles</h2>
                          <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li><a class="collapse-link"><i class="fa fa-chevron-down"></i></a>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                          </ul>
                          <div class="clearfix"></div>
                        </div>
                        <ul class="list-unstyled top_profiles scroll-view">
                          <li class="media event">
                            <a class="pull-left border-aero profile_thumb">
                              <i class="fa fa-user aero"></i>
                            </a>
                            <div class="media-body">
                              <a class="title" href="#">Pendaftar</a>
                              <p><strong>2300 </strong> Total Pendaftar Baru </p>
                              <p> <small>Lihat Data</small>
                              </p>
                            </div>
                          </li>
                          <li class="media event">
                            <a class="pull-left border-green profile_thumb">
                              <i class="fa fa-user green"></i>
                            </a>
                            <div class="media-body">
                              <a class="title" href="#">Mahasantri</a>
                              <p><strong>2300 </strong> Total Mahasantri </p>
                              <p> <small>Lihat Data</small>
                              </p>
                            </div>
                          </li>
                          <li class="media event">
                            <a class="pull-left border-blue profile_thumb">
                              <i class="fa fa-user blue"></i>
                            </a>
                            <div class="media-body">
                              <a class="title" href="#">Mahaguru</a>
                              <p><strong>2300 </strong> Total Mahaguru </p>
                              <p> <small>Lihat Data</small>
                              </p>
                            </div>
                          </li>
                          <li class="media event">
                            <a class="pull-left border-aero profile_thumb">
                              <i class="fa fa-user aero"></i>
                            </a>
                            <div class="media-body">
                              <a class="title" href="#">Tutor</a>
                              <p><strong>2300 </strong> Total Tutor </p>
                              <p> <small>Lihat Data</small>
                              </p>
                            </div>
                          </li>
                          <li class="media event">
                            <a class="pull-left border-green profile_thumb">
                              <i class="fa fa-user green"></i>
                            </a>
                            <div class="media-body">
                              <a class="title" href="#">Admin</a>
                              <p><strong>2300 </strong> Total Admin </p>
                              <p> <small>Lihat Data</small>
                              </p>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>                  
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection