@extends('dashboard.base')

@section('content')

  <div class="container-fluid">
      <div class="fade-in">
          <form method="post" action="{{route('categories.update', $category)}}" class="form-horizontal">
              @csrf
            <div class="card">
              <div class="card-header">
                Update Category
                  <div class="card-header-actions">
                      <a href="{{route('categories')}}" class="card-header-action">Cancel</a>
                  </div><!--card-header-actions-->
              </div><!--card-header-->

              <div class="card-body">
              <div >
                  <div class="form-group row">
                      <label for="category_id" class="col-md-2 col-form-label">Category</label>
                      <div class="col-md-10">
                          <select name="category_id" class="form-control" >
                            <option value="" >Choose Category</option>
                            @foreach($categories as $subcategory)
                              <option value="{{$subcategory->id}}" {{ ($subcategory->id == $category->category_id) ? 'selected' : '' }}>{{$subcategory->title}}</option>
                            @endforeach
                          </select>
                      </div>
                  </div><!--form-group-->

                  <div class="form-group row">
                      <label for="title" class="col-md-2 col-form-label">Title</label>


                      <div class="col-md-10">
                          <input type="text" name="title" class="form-control" placeholder="{{ $category->title }}" value="{{ $category->title }}" maxlength="100" required="">
                      </div>
                  </div><!--form-group-->

              </div>
          </div><!--card-body-->

              <div class="card-footer">
              <button class="btn btn-sm btn-primary float-right" type="submit">Update Category</button>
          </div><!--card-footer-->
      </div><!--card-->
  </form>
    </div><!--fade-in-->
  </div>

@endsection

@section('javascript')

    <script src="{{ asset('js/Chart.min.js') }}"></script>
    <script src="{{ asset('js/coreui-chartjs.bundle.js') }}"></script>
    <script src="{{ asset('js/main.js') }}" defer></script>
@endsection
