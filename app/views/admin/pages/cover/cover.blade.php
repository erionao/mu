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

    <link rel="stylesheet" href="{{URL::to('js/vendor/font-awesome/css/font-awesome.min.css')}}"/>

    <!-- Navigationbar Style -->
    <link rel="stylesheet" href="{{URL::to('js/dist/css/navigavbar-style.css')}}"/>


    <!-- Main style -->
    <link rel="stylesheet" href="{{URL::to('js/dist/css/cover-page.css')}}"/>
    <link rel="stylesheet" href="{{URL::to('js/sweetalert.css')}}"/>



</head>

<body>

<div id="wrapper">

    <!-- Navigation Bar  -->

    <!-- Navigation -->
    @include('admin.layouts.navigation')
<!-- End Of navigationbar  -->


        <!-- Page Content -->
        <div id="page-wrapper" class="cover-wrapper">
            <div class="container">
            
                <div class="kv-main col-md-4">
                <p>Upload Cover Photo:</p>
                    <div class="page-header">
                    </div>

                    {{Form::open(array('url' => 'cover/cover', 'method' => 'post', 'files' => true))}}

                    <button type="button" class="btn btn-info " data-toggle="flaviconModal" onClick="storeImage('cover/cover')">Edit Cover
                    </button>
                    {{Form::close()}}

                    <div class="image_section">
                        @foreach($cover as $cv)
                        <div class="image_edit_panel">
                            <img src="{{URL::to('uploads/cover/'. $cv->image)}}" alt="..." class="..">
                            <button type="button" class="edit_btn" data-target="#editModal"
                                    onClick="storeImage('cover/cover/{{ $cv->id}}')">Edit
                            </button>
                            <button class="delete_btn"><i class="fa fa-trash" aria-hidden="true"  onClick="deleteCover({{ $cv->id}})"></i></button>
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="kv-main col-md-4">
                <p>Upload Logo:</p>
                    <div class="page-header">
                    </div>


                    <button type="button" class="btn btn-info " data-toggle="flaviconModal" onClick="storeImage('cover/logo')">Edit Logo
                    </button>


                    <div class="image_section">
                        @foreach($logo as $lg)
                            <div class="image_edit_panel">
                                <img src="{{URL::to('uploads/cover/'. $lg->image)}}" alt="..." class="..">
                                <button type="button" class="edit_btn" data-target="#editModal"
                                        onClick="storeImage('cover/logo/{{ $lg->id}}')">Edit
                                </button>
                                <button class="delete_btn"><i class="fa fa-trash" aria-hidden="true"  onClick="deleteCover({{ $lg->id}})"></i></button>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="kv-main col-md-4">
                <p>Upload Flaticon:</p>
                    <div class="page-header">
                    </div>


                    <button type="button" class="btn btn-info " data-toggle="flaviconModal" onClick="storeImage('cover/flaticon')">Edit Flavicon
                    </button>

                    <form enctype="multipart/form-data" id="flavicon_form" role="form" method="POST" action="">
                        <div class="modal fade" id="flaviconModal" role="dialog">
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
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        <button type="submit" id="flavicon" class="btn btn-primary">Add</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </form>




                    <div class="image_section">
                        @foreach($flaticon as $fl)
                            <div class="image_edit_panel">
                                <img src="{{URL::to('uploads/cover/'. $fl->image)}}" alt="..." class="..">
                                <button type="button" class="edit_btn" data-target="#editModal"
                                        onClick="storeImage('cover/flaticon/{{ $fl->id}}')">Edit
                                </button>
                                <button class="delete_btn"><i class="fa fa-trash" aria-hidden="true"  onClick="deleteCover({{ $fl->id}})"></i></button>
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>




    </div>    


    <!-- <script type="text/javascript" src="../dist/upload-image.js"></script> -->

<!-- jQuery -->
<script src="{{URL::to('/js/vendor/jquery/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{URL::to('/js/vendor/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{URL::to('/js/vendor/metisMenu/metisMenu.min.js')}}" type="text/javascript"></script>
<script src="{{URL::to('/js/dist/js/sb-admin-2.js')}}" type="text/javascript"></script>
<script type="text/javascript" src="{{URL::to('/js/dist/js/upload-image.js')}}"></script>
<script type="text/javascript" src="{{URL::to('/js/dist/js/fileinput.js')}}"></script>
<script src="{{URL::to('/js/sweetalert.min.js')}}" type="text/javascript"></script>


<script type="text/javascript">

    function storeImage(type) {

        console.log(type);

        $('#flaviconModal').modal('show');
        $("#flavicon").click(function (e) {


            $.ajax({
                url: type,
                data: new FormData($("#flavicon_form")[0]),
                dataType: 'json',
                async: false,
                type: 'post',
                processData: false,
                contentType: false,
                success: function (response) {

                },

            });
            $('#flaviconModal').modal('hide');
            swal("Image Saved", "", "success");
            $("#wrapper").load(location.href);



            e.preventDefault();
        });
    }



    function deleteCover(id) {


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
                            url: 'cover/delete/' + id,
                            async: false,
                            type: 'get',
                            processData: false,
                            contentType: false,
                            success: function (response) {

                            },


                        });
                        swal("Deleted!", "Your image has been deleted.", "success");
                        $("#wrapper").load(location.href);
                    } else {
                        swal("Cancelled", "Your image file is safe :)", "error");
                    }


                });




    }


    </script>

</body>

</html>

