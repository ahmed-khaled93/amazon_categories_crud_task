@extends('dashboard.base')

@section('content')

  <div class="container-fluid">
              <div class="fade-in">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="card">
                      <div class="card-header"><i class="fa fa-align-justify"></i> Simple Table
                        <div class="card-header-actions">
                            <a href="{{route('categories.create')}}" class="card-header-action"><i class="c-icon cil-plus"></i> Create Category</a>
                        </div>
                      </div>
                      <div class="card-body">
                        <table class="table table-responsive-sm">
                          <thead>
                            <tr>
                              <th>Title</th>
                              <th>Date registered</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>Samppa Nori</td>
                              <td>2012/01/01</td>
                            </tr>
                            <tr>
                              <td>Estavan Lykos</td>
                              <td>2012/02/01</td>
                            </tr>
                            <tr>
                              <td>Chetan Mohamed</td>
                              <td>2012/02/01</td>
                            </tr>
                            <tr>
                              <td>Derick Maximinus</td>
                              <td>2012/03/01</td>
                            </tr>
                            <tr>
                              <td>Friderik Dávid</td>
                              <td>2012/01/21</td>
                            </tr>
                          </tbody>
                        </table>
                        <ul class="pagination">
                          <li class="page-item"><a class="page-link" href="#">Prev</a></li>
                          <li class="page-item active"><a class="page-link" href="#">1</a></li>
                          <li class="page-item"><a class="page-link" href="#">2</a></li>
                          <li class="page-item"><a class="page-link" href="#">3</a></li>
                          <li class="page-item"><a class="page-link" href="#">4</a></li>
                          <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!-- /.col-->

                </div>

              </div>
            </div>


@endsection

@section('javascript')

    <script src="{{ asset('js/Chart.min.js') }}"></script>
    <script src="{{ asset('js/coreui-chartjs.bundle.js') }}"></script>
    <script src="{{ asset('js/main.js') }}" defer></script>
@endsection
