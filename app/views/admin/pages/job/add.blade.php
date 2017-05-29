<!DOCTYPE html>
<html lang="en" ng-app = "manjakos-landscape">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Tab Logo -->
    <link rel="icon" href="img/es_logo.png">

    <title>Emirates Graphic CMS</title>
    <!-- Tab Logo -->
    <link rel="icon" href="img/es_logo.png">
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="{{URL::to('js/vendor/bootstrap/css/bootstrap.min.css')}}"/>
    <link rel="stylesheet" href="{{URL::to('js/vendor/metisMenu/metisMenu.min.css')}}"/>
    <link rel="stylesheet" href="{{URL::to('js/dist/css/sb-admin-2.css')}}"/>
    <!-- DataTable Style -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css"/>
    <link rel="stylesheet" href="{{URL::to('js/dist/css/datatable_style.css')}}"/>

    <link rel="stylesheet" href="{{URL::to('js/vendor/font-awesome/css/font-awesome.min.css')}}"/>

    <!-- Navigationbar Style -->
    <link rel="stylesheet" href="{{URL::to('js/dist/css/navigavbar-style.css')}}"/>

    <!-- Style For Details -->
    <link rel="stylesheet" href="{{URL::to('js/dist/css/add_project_style.css')}}"/>

    <link rel="stylesheet" href="{{URL::to('js/sweetalert.css')}}"/>

    <style>
        .container {
            position: relative;
            width: 25%;
        }

        .image {
            opacity: 1;
            display: block;
            width: 100%;
            height: auto;
            transition: .5s ease;
            backface-visibility: hidden;
        }

        .middle {
            transition: .5s ease;
            opacity: 0;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%)
        }

        .container:hover .image {
            opacity: 0.3;
        }

        .container:hover .middle {
            opacity: 1;
        }

        .text {
            background-color: #4CAF50;
            color: white;
            font-size: 16px;
            padding: 16px 32px;
        }
    </style>




</head>

<body ng-controller="JobAddCtrl">

<div id="wrapper">

    <!-- Navigation Bar  -->

    <!-- Navigation -->
@include('admin.layouts.navigation')


<!-- End Of navigationbar  -->


    <!-- Page Content -->
    <div id="page-wrapper" class="add_projects_page">
        <div class="container-fluid">
            {{--<div class="row">--}}
            {{--<div class="col-md-9 title_details_page">--}}
            {{--<label>Title of the Project:</label>--}}
            {{--<input type="" placeholder="Title" name="" ng-model="project.title" required>--}}
            {{--<label for="sel1">Project Type:</label>--}}
            {{--<select class="form-control"ng-model="project.type_id" >--}}
            {{--<option ng-repeat="type in types" value="<%type.id%>"><%type.name%></option>--}}
            {{--</select>--}}
            {{--<label>Content of the Project:</label>--}}
            {{--<div ckeditor="options" ng-model="project.content" ready="onReady()"></div>--}}

            {{--<div class="col-md-12 " style="margin-top: 20px;">--}}
            {{--<button class="edit_content_btn"  ng-click="saveProject(project)">Save</button> <button class="cancel_content_btn" >Cancel</button>--}}
            {{--</div>--}}
            {{--<table id="examples" class="display" cellspacing="0" width="100%">--}}
            {{--<thead>--}}
            {{--<tr>--}}
            {{--<th>Name</th>--}}
            {{--<th>Position</th>--}}
            {{--<th>Office</th>--}}
            {{--<th>Age</th>--}}
            {{--<th>Start date</th>--}}
            {{--<th>Salary</th>--}}
            {{--</tr>--}}
            {{--</thead>--}}
            {{--<tbody>--}}
            {{--<tr>--}}
            {{--<td>Tiger Nixon</td>--}}
            {{--<td>System Architect</td>--}}
            {{--<td>Edinburgh</td>--}}
            {{--<td>61</td>--}}
            {{--<td>2011/04/25</td>--}}
            {{--<td>$320,800</td>--}}
            {{--</tr>--}}
            {{--<tr>--}}
            {{--<td>Donna Snider</td>--}}
            {{--<td>Customer Support</td>--}}
            {{--<td>New York</td>--}}
            {{--<td>27</td>--}}
            {{--<td>2011/01/25</td>--}}
            {{--<td>$112,000</td>--}}
            {{--</tr>--}}
            {{--</tbody>--}}
            {{--</table>--}}
            {{--</div>--}}



            {{--<div class="col-md-3 upload_buttons_add">--}}
            {{--<div class="col-md-12 no_padding">--}}
            {{--<label type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">--}}
            {{--<i class="fa fa-file-image-o" aria-hidden="true"></i>&nbsp; Add Images--}}
            {{--</label>--}}
            {{--</div>--}}




            {{--<div class="col-md-12 no_padding" ng-repeat="i in images">--}}
            {{--<img ngf-src="i.files" class="img-rounded" width="400" height="100">--}}
            {{--<button class="delete_btn"><i class="fa fa-trash" aria-hidden="true" ng-click="removeImage($index)" ></i></button>--}}
            {{--</div>    --}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</div>--}}


            <div class="row">
                <div class="col-md-12 title_details_page">
                    <label>Title:</label>
                    <input type="" ng-model="job.title" name="">
                    <label>Job Content:</label>
                    <div ckeditor="options" ng-model="job.content" ready="onReady()"></div>

                    <div class="col-md-6 " style="margin-top: 20px;">
                        <button class="edit_content_btn" ng-click="saveJob(job)">Save</button> <button class="cancel_content_btn">Cancel</button>
                    </div>

                </div>
                {{--<div class="col-md-6">--}}
                {{--<img src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22200%22%20height%3D%22200%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20200%20200%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_15b201ecec8%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A10pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_15b201ecec8%22%3E%3Crect%20width%3D%22200%22%20height%3D%22200%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2275.5%22%20y%3D%22104.5%22%3E200x200%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E">--}}
                {{--</div>--}}
                {{--<div class="col-md-6">--}}
                {{--<img src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22200%22%20height%3D%22200%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20200%20200%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_15b201ecec8%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A10pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_15b201ecec8%22%3E%3Crect%20width%3D%22200%22%20height%3D%22200%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2275.5%22%20y%3D%22104.5%22%3E200x200%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E">--}}
                {{--</div>--}}
                {{--<div class="col-md-6">--}}
                {{--<img src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22200%22%20height%3D%22200%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20200%20200%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_15b201ecec8%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A10pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_15b201ecec8%22%3E%3Crect%20width%3D%22200%22%20height%3D%22200%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2275.5%22%20y%3D%22104.5%22%3E200x200%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E">--}}
                {{--</div>--}}
                {{--<div class="col-md-6">--}}
                {{--<img src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22200%22%20height%3D%22200%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20200%20200%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_15b201ecec8%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A10pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_15b201ecec8%22%3E%3Crect%20width%3D%22200%22%20height%3D%22200%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2275.5%22%20y%3D%22104.5%22%3E200x200%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E">--}}
                {{--</div>--}}
            </div>
        </div>
    </div>
</div>

</div>



<!-- jQuery -->
<script src="{{URL::to('/js/vendor/jquery/jquery.min.js')}}" type="text/javascript"></script>
<script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
<script src="{{URL::to('/js/vendor/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>

<!-- Angular -->
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>
<script src="{{URL::to('/js/angular-datatable.min.js')}}" type="text/javascript"></script>
<script src="{{URL::to('/js/app.js')}}" type="text/javascript"></script>
<script src="{{URL::to('/js/ng-file-upload/ng-file-upload.min.js')}}" type="text/javascript"></script>
<script src="{{URL::to('/js/ng-file-upload/ng-file-upload-shim.min.js')}}" type="text/javascript"></script>


<!-- Ckeditor -->
<script src="{{URL::to('/js/ckeditor/ckeditor.js')}}"></script>
<script src="{{URL::to('/js/ckeditor.min.js')}}" type="text/javascript"></script>


<script src="{{URL::to('/js/vendor/metisMenu/metisMenu.min.js')}}" type="text/javascript"></script>
<script src="{{URL::to('/js/dist/js/sb-admin-2.js')}}" type="text/javascript"></script>


<script src="{{URL::to('/js/sweetalert.min.js')}}" type="text/javascript"></script>
<script src="{{URL::to('/js/notify.min.js')}}" type="text/javascript"></script>


<script>
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.





</script>

</body>

</html>
