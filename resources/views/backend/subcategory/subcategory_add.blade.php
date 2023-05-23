@extends('admin.admin_dashboard')


@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<div class="content">

    <!-- Start Content-->
    <div class="container-fluid">
        
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item active">Add Sub Category</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Add Sub Category</h4>
                </div>
            </div>
        </div>     
        <!-- end page title --> 



        <!-- Form row -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <form id="myForm" method="post" action="{{ route('store.subcategory') }}">
                            @csrf
                            
                            <div class="row">

                            <div class="mb-3 form-group">
                                <label class="form-label">Category Name</label>
                                <select name="category_id" class="form-select" id="example-select">
                                    <option> Select One Category </option>
                                    @foreach ( $add_categories as $category)
                                        <option value="{{ $category->id }}"> {{ $category->category_name }} </option>
                                    @endforeach
                                    
                                </select>
                            </div>

                            <div class="mb-3 form-group">
                                <label class="form-label">Sub Category Name</label>
                                <input type="text" name="subcategory_name" class="form-control" id="inputAddress">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Category Slug</label>
                                <input type="text" name="subcategory_slug" class="form-control" id="inputAddress">
                            </div>

                            <div class="mb-3 form-group">
                                <label class="form-label">Category Description</label>
                                <textarea name="subcategory_description"></textarea>
                            </div>

                           

                            <div class="mb-3">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="customCheck11">
                                    <label class="form-check-label" for="customCheck11">Check this custom checkbox</label>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary waves-effect waves-light">Save Changes</button>
                            </div>

                        </form>

                    </div> <!-- end card-body -->
                </div> <!-- end card-->
            </div> <!-- end col -->
        </div>
        <!-- end row -->

        
    </div> <!-- container -->

</div> <!-- content -->

<script type="text/javascript">
    $(document).ready(function (){
        $('#myForm').validate({
            rules: {
                subcategory_name: {
                    required : true,
                }, 
                subcategory_description: {
                    required : true,
                }, 
            },
            messages :{
                subcategory_name: {
                    required : 'Please Enter Sub Category Name',
                },
                subcategory_description: {
                    required : 'Please Enter Sub Category Description',
                },
            },
            errorElement : 'span', 
            errorPlacement: function (error,element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight : function(element, errorClass, validClass){
                $(element).addClass('is-invalid');
            },
            unhighlight : function(element, errorClass, validClass){
                $(element).removeClass('is-invalid');
            },
        });
    });
    
</script>

@endsection