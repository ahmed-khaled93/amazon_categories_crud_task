
<div class="btn-group btn-group-sm" role="group" aria-label="actions">

    <a href="{{ route('categories.edit', $category) }}" class="btn btn-block btn-primary">Edit</a>

    <a href="#" class="btn btn-danger btn-sm" type="button" data-toggle="modal" data-target="#dangerModal-{{ $category->id }}">  Delete </a>
    {{-- <form action="{{ route('categories.destroy', $category ) }}" method="POST">
        @method('DELETE')
        @csrf --}}
        {{-- <button class="btn btn-block btn-danger " type="button" data-toggle="modal" data-target="#dangerModal"> Delete </button> --}}
    {{-- </form> --}}
</div>

<div class="modal fade" id="dangerModal-{{ $category->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-danger" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Delete Category</h4>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
      </div>
      <div class="modal-body">
        <p>Are you sure you want to delete this category ?</p>
      </div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>

        <form action="{{ route('categories.destroy', $category ) }}" method="POST">
          @method('DELETE')
          @csrf
            <button class="btn btn-danger" type="submit">Yes, Delete</button>
        </form>

      </div>
    </div>
    <!-- /.modal-content-->
  </div>
  <!-- /.modal-dialog-->
</div>
<!-- /.modal-->
