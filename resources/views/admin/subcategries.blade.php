@extends('admin.content.layout')
@section('linkcss')
<link rel="stylesheet" type="text/css" href="{{asset('assets/extra-libs/multicheck/multicheck.css')}}" />
<link href="{{asset('assets/libs/select2/dist/css/select2.min.css')}}" rel="stylesheet" />
<link href="{{asset('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css')}}" rel="stylesheet" />
@endsection
@section('pagesection')
<div class="page-wrapper">
    <!-- Bread crumb and right sidebar toggle -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center justify-content-between">
                <h4 class="page-title">Sub Categories</h4>
                <button data-bs-toggle="modal" data-bs-target="#addsubcat" class="btn btn-primary">Add SubCategories</a>
            </div>
        </div>
    </div>
    <!-- End Bread crumb and right sidebar toggle -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Sales Cards  -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Basic Datatable</h5>
                    <div class="table-responsive">
                        <table id="zero_config" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th class="fw-bold">Id</th>
                                    <th class="fw-bold">Categories</th>
                                    <th class="fw-bold">Sub Categories</th>
                                    <th class="fw-bold">action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $counter=1; ?>
                                @if(isset($subcat))
                                @foreach($subcat as $sublist)
                                <tr>
                                    <td>{{$counter++}}</td>
                                    <td>{{$sublist->id}}</td>
                                    <td>{{$sublist->cat_name}}</td>
                                    <td>{{$sublist->subcategory_name}}</td>
                                </tr>
                                @endforeach
                                @endif
                                </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<form method="POST" action="{{route('addsubcat')}}">
    <div class="modal fade" id="addsubcat" tabindex="-1" aria-labelledby="addsubcat" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addcatLabel">Enter SubCategory
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        @csrf
                        <label>Enter subcategorie</label>
                        <input type="text" class="form-control mb-3" name="subname" placeholder="Enter subcategorie name">
                        <label>Select categorie</label>
                        <select class="form-select shadow-none" name="catname">
                            <option value="0">Select</option>
                            @if(isset($categories))
                            @foreach($categories as $cate)
                            <option value="{{$cate->id}}">{{$cate->category_name}}</option>
                            @endforeach
                            @endif
                        </select>
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
<script src="{{asset('assets/libs/select2/dist/js/select2.min.js')}}"></script>
    <script src="{{asset('assets/extra-libs/multicheck/datatable-checkbox-init.js')}}"></script>
    <script src="{{asset('assets/extra-libs/multicheck/jquery.multicheck.js')}}"></script>
    <script src="{{asset('assets/extra-libs/DataTables/datatables.min.js')}}"></script>
    <script>
        $("#zero_config").DataTable();
$(document).ready(function() {
    $('.js-example-basic-single').select2({
        placeholder: "Select SubCategory",
        allowClear: true,
        dropdownParent: $('#addsubcat')
    });
});
    </script>
@endsection