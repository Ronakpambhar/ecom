@extends('admin.content.layout')
@section('linkcss')
<link rel="stylesheet" type="text/css" href="{{asset('assets/extra-libs/multicheck/multicheck.css')}}" />
<link href="{{asset('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css')}}" rel="stylesheet" />
<link rel="stylesheet" href="dist/css/sweetalert2.min.css">
@endsection
@section('pagesection')
<div class="page-wrapper">
    <!-- Bread crumb and right sidebar toggle -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center justify-content-between">
                <h4 class="page-title">Categories</h4>
                <a href="" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addcat">Add Categories</a>
            </div>
        </div>
    </div>
    <!-- End Bread crumb and right sidebar toggle -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Sales Cards  -->
        <!-- ============================================================== -->
        <div class="row">
            <div cass="card">
                <div class="card-body">
                    <h5 class="card-title">Basic Datatable</h5>
                    <div class="table-responsive">
                        <table id="cattbl" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th class="fw-bold">Sr No</th>
                                    <th class="fw-bold">Id</th>
                                    <th class="fw-bold">Categories</th>
                                    <th class="fw-bold">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $counter=1; ?>
                                @if(isset($categories))
                                @foreach($categories as $data)
                                <tr>
                                    <td>{{$counter++}}</td>
                                    <td>{{$data->id}}</td>
                                    <td>{{$data->category_name}}</td>
                                    <td>
                                        <a href="" class="btn btn-info px-2 py-1"><i
                                                class="mdi mdi-grease-pencil"></i></a>
                                        <button data-id="{{$data->id}}" class="btn btn-danger px-2 py-1 delcat"><i class="mdi mdi-delete"></i></button>
                                    </td>
                                </tr>
                                @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <form method="POST" action="{{route('addcategory')}}">
        <div class="modal fade" id="addcat" tabindex="-1" aria-labelledby="addcat" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addcatLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        {{ csrf_field() }}
                        <label>Enter categorie</label>
                        <input type="text" class="form-control" name="categories" placeholder="Enter categorie name">
                        <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    @endsection
    @section('linkjs')
    <script src="{{asset('assets/extra-libs/multicheck/datatable-checkbox-init.js')}}"></script>
    <script src="{{asset('assets/extra-libs/multicheck/jquery.multicheck.js')}}"></script>
    <script src="{{asset('assets/extra-libs/DataTables/datatables.min.js')}}"></script>
    <script src="{{asset('dist/js/sweetalert2@11.js')}}"></script>
    <script>
        $("#cattbl").DataTable();
        $(document).on('click', '.delcat', function (e) {
    e.preventDefault();
    var id = $(this).data('id');
    
    Swal.fire({
    title: 'Are you sure?',
    text: "You won't be able to revert this!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
    if (result.isConfirmed) {

        $.ajax({
                url: "{{ route('delcat') }}",
                type: 'GET',
                data: {
                id: id,
            },
            success: function (result){
               
                if((typeof result.status != 'undefined') && result.status == 'success'){
                    Swal.fire({
                    title: "Deleted!",
                    text: "You have successfully deleted!",
                    icon: "success",
                    button: "Yes!",
                    });
                }
                 window.setTimeout(function(){location.reload()},2000)
                //  location.reload();
            }
        });
    }
    });
});
    </script>
    @endsection
