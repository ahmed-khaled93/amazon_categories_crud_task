@extends('dashboard.base')

@section('content')

  <div class="container-fluid">
    <div class="fade-in">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header"><i class="fa fa-align-justify"></i> Categories Table
              <div class="card-header-actions">
                  <a href="{{route('categories.create')}}" class="card-header-action"><i class="c-icon cil-plus"></i> Create Category</a>
              </div>
            </div>
            <div class="card-body">

              <table class="table table-responsive-sm">
                <thead>
                  <tr>
                    <th>Title</th>
                    <th>Parent Category</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($categories as $category)
                    <tr>
                      <td>{{ $category->title }}</td>
                      <td>{{ $category->parent != null ? $category->parent->title : null }}</td>
                      <td>@include('categories.includes.actions', ['category' => $category])</td>
                    </tr>
                  @endforeach
                </tbody>
              </table>

              <div class="row">
                  <div class="col-7">
                      <div class="float-left">
                          {!! $categories->total() !!} {{ trans_choice('total', $categories->total()) }}
                      </div>
                  </div><!--col-->

                  <div class="col-5">
                      <div class="float-right">
                          {!! $categories->render() !!}
                      </div>
                  </div><!--col-->
              </div><!--row-->
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
