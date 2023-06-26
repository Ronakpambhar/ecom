@extends('admin.content.layout')
@section('linkcss')
<link rel="stylesheet" type="text/css" href="{{asset('assets/extra-libs/multicheck/multicheck.css')}}" />
<link href="{{asset('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css')}}" rel="stylesheet" />
@endsection
@section('pagesection')
<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row ">
            <div class="col-12">
                <form action="{{route('addproductform')}}" method="POST"enctype="multipart/form-data">
                    <div class="row g-4">
                        <div class="col-4">
                            <label>Enter Product Name</label>
                            <input type="text" class="form-control mb-3"name="p_name" placeholder="Enter product name">
                        </div>
                        <div class="col-4">
                            <label>Enter Product Price</label>
                            <input type="text" class="form-control mb-3"name="p_name" placeholder="Enter product price">
                        </div>
                        <div class="col-4">
                            <label>Select categorie</label>
                            <select class="form-select shadow-none" name="category">
                                <option value="0">Select</option>
                                <option value=""></option>
                            </select>
                        </div>
                        <div class="col-4">
                            <label>Select categorie</label>
                            <textarea name="description" class="form-control" id="" cols="30" rows="4"></textarea>
                        </div>
                        <div class="col-4">
                            <label>Upload product thumb</label>
                            <input type="file" name="thumb" placeholder="upload thumb">
                        </div>
                        <div class="col-4">
                            <label>Upload product images</label>
                            <input type="file" name="pimg[]" placeholder="upload" multiple>
                        </div>
                        <div class="col-4">
                        <button type="submit" class="btn btn-info">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@section('linkjs')
    <script src="{{asset('assets/extra-libs/multicheck/datatable-checkbox-init.js')}}"></script>
    <script src="{{asset('assets/extra-libs/multicheck/jquery.multicheck.js')}}"></script>
    <script src="{{asset('assets/extra-libs/DataTables/datatables.min.js')}}"></script>
    <script>
        $("#zero_config").DataTable();

    </script>
@endsection