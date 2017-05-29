<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Emirates Graphic CMS</title>
    <!-- Tab Logo -->
    <link rel="icon" href="img/es_logo.png">
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="{{URL::to('js/vendor/bootstrap/css/bootstrap.min.css')}}"/>
    <link rel="stylesheet" href="{{URL::to('js/vendor/metisMenu/metisMenu.min.css')}}"/>
    <link rel="stylesheet" href="{{URL::to('js/dist/css/sb-admin-2.css')}}"/>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css"/>

    <!-- Custom Fonts -->
    <link rel="stylesheet" href="{{URL::to('js/vendor/font-awesome/css/font-awesome.min.css')}}"/>

    <!-- Navigationbar Style -->
    <link rel="stylesheet" href="{{URL::to('js/dist/css/navigavbar-style.css')}}"/>

    <link rel="stylesheet" href="{{URL::to('js/dist/css/galery-cms.css')}}"/>

    <link rel="stylesheet" href="{{URL::to('js/dist/css/fileinput.css')}}"/>
    <link rel="stylesheet" href="{{URL::to('js/sweetalert.css')}}"/>


</head>

<body>

<div id="wrapper">

    <!-- Navigation Bar  -->

    @include('admin.layouts.navigation')
            <!-- End Of navigationbar  -->


    <!-- Page Content -->
    <div id="page-wrapper" class="galery-wrapper">
        <div class="container-fluid">
            <div class="kv-main col-md-12">
                <p>Upload Galery Images:</p>

                <div class="page-header">
                </div>
                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" onClick="store()">Add Gallery
                    Images
                </button>

                <!-- Modal -->
                <form enctype="multipart/form-data" id="store_form" role="form" method="POST" action="">
                    <div class="modal fade" id="storeModal" role="dialog">
                        <div class="modal-dialog">

                            <!-- Modal content-->

                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Modal Header</h4>
                                </div>

                                <div class="modal-body">
                                    <input type="file" class="form-control" name="image" placeholder="Add Image"
                                           required/>
                                    <select class="form-control" name="category">
                                        <option value="air">Air Place</option>
                                        <option value="places">Place</option>
                                    </select>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="submit" id="store" class="btn btn-primary">Add</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </form>


                <form enctype="multipart/form-data" id="edit_form" role="form" method="POST" action="">
                    <div class="modal fade" id="editModal" role="dialog">
                        <div class="modal-dialog">

                            <!-- Modal content-->

                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Modal Header</h4>
                                </div>

                                <div class="modal-body">
                                    <input type="file" class="form-control" name="image" required>
                                    <select class="form-control" name="category">
                                        <option value="air">Air Place</option>
                                        <option value="places">Place</option>
                                    </select>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="submit" id="edit" class="btn btn-primary">Add</button>
                                </div>

                            </div>

                        </div>
                    </div>
                </form>


                <div class="input_images_div">


                    @foreach($galleries as $gallery)


                        <div class="col-md-4 image_edit_panel">
                            <img src="{{URL::to('/uploads/gallery/'. $gallery->image)}}">
                            <button type="button" class="edit_btn" data-target="#editModal"
                                    onClick="modalEdit({{ $gallery->id}})">Edit
                            </button>
                                <button class="delete_btn"><i class="fa fa-trash" aria-hidden="true"  onClick="deleteImage({{ $gallery->id}})"></i></button>

                        </div>
                    @endforeach


                </div>
            </div>
        </div>
    </div>

</div>

<!-- jQuery -->
<script src="{{URL::to('/js/vendor/jquery/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{URL::to('/js/vendor/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{URL::to('/js/vendor/metisMenu/metisMenu.min.js')}}" type="text/javascript"></script>
<script src="{{URL::to('/js/dist/js/sb-admin-2.js')}}" type="text/javascript"></script>
<script src="{{URL::to('/js/dist/js/upload-image.js')}}" type="text/javascript"></script>
<script src="{{URL::to('/js/dist/js/fileinput.js')}}" type="text/javascript"></script>
<script src="{{URL::to('/js/sweetalert.min.js')}}" type="text/javascript"></script>

<script type="text/javascript">
    $(document).ready(function () {
        $('[data-toggle="tooltip"]').tooltip();
    });


    // Store Function
    function store() {

        $('#storeModal').modal('show');
        $("#store").click(function (e) {


            $.ajax({
                url: 'add',
                data: new FormData($("#store_form")[0]),
                dataType: 'json',
                async: false,
                type: 'post',
                processData: false,
                contentType: false,
                success: function (response) {

                },

            });
            $('#storeModal').modal('hide');
            $("#wrapper").load(location.href + " #wrapper");
            swal("Image Saved", "", "success");

            e.preventDefault();
        });
    }

    function modalEdit(id) {


        $('#editModal').modal('show');
        $("#edit").click(function (e) {


            $.ajax({
                url: 'edit/' + id,
                data: new FormData($("#edit_form")[0]),
                dataType: 'json',
                async: false,
                type: 'post',
                processData: false,
                contentType: false,
                success: function (response) {
                    console.log(response);
                },


            });
            $('#editModal').modal('hide');
            $("#wrapper").load(location.href + " #wrapper");
            swal("Image updated", "", "success");


            e.preventDefault();
        });
    }

    function deleteImage(id) {


        swal({
                    title: "Are you sure?",
                    text: "You will not be able to recover this image file!",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Yes, delete it!",
                    cancelButtonText: "No, cancel plx!",
                    closeOnConfirm: false,
                    closeOnCancel: false
                },
                function (isConfirm) {
                    if (isConfirm) {
                        $.ajax({
                            url: 'delete/' + id,
                            async: false,
                            type: 'get',
                            processData: false,
                            contentType: false,
                            success: function (response) {
                                console.log(response);
                            },


                        });
                        swal("Deleted!", "Your image has been deleted.", "success");
                        $("#wrapper").load(location.href + " #wrapper");
                    } else {
                        swal("Cancelled", "Your image file is safe :)", "error");
                    }


                });




        }

</script>


</body>

</html>
