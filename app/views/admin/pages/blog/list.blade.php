<!DOCTYPE html>
<html lang="en" ng-app="manjakos-landscape">

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
    <link rel="stylesheet" href="{{URL::to('js/angular-datatable.css')}}"/>
    <link rel="stylesheet" href="{{URL::to('js/dist/css/datatable_style.css')}}"/>

    <link rel="stylesheet" href="{{URL::to('js/vendor/font-awesome/css/font-awesome.min.css')}}"/>

    <!-- Navigationbar Style -->
    <link rel="stylesheet" href="{{URL::to('js/dist/css/navigavbar-style.css')}}"/>

    <!-- Style For Details -->
    <link rel="stylesheet" href="{{URL::to('js/dist/css/add_project_style.css')}}"/>

    <link rel="stylesheet" href="{{URL::to('js/sweetalert.css')}}"/>


</head>

<body ng-controller="BlogListCtrl">

<div id="wrapper">

    <!-- Navigation Bar  -->

    <!-- Navigation -->
    @include('admin.layouts.navigation')


            <!-- End Of navigationbar  -->


    <!-- Page Content -->
    <div id="page-wrapper" class="add_projects_page">
        <div class="container-fluid">

            <div class="row">
                <button class="btn btn-success pull-left" ng-click="go('/blog/add')">Add New Blog</button>
                <div class="col-md-12 table_section">
                    <table ng-if="blogs" datatable="" class="row-border hover">
                        <thead>
                        <tr>
                            <th>Title</th>
                            <th>Created_at</th>
                            <th>Updatet_at</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr ng-repeat="blog in blogs">
                            <td style="cursor:pointer" ng-click="edit(blog.id)"><%blog.title%></td>
                            <td style="cursor:pointer" ng-click="edit(blog.id)"><%blog.created_at%></td>
                            <td style="cursor:pointer" ng-click="edit(blog.id)"><%blog.updated_at%></td>

                            <td><a href="">
                                    <button class="edit_btn_ta" ng-click="edit(blog.id)"><i class="fa fa-pencil"
                                                                                               aria-hidden="true"></i>&nbsp;Edit
                                    </button>
                                </a>
                                <button class="delete_btn delete_btn_ta" ng-click="delete(blog.id)"><i
                                            class="fa fa-trash" aria-hidden="true"></i></button>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


    </div>


    <!-- jQuery -->
    <script src="{{URL::to('/js/vendor/jquery/jquery.min.js')}}" type="text/javascript"></script>


    <script src="{{URL::to('/js/vendor/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>

    <!-- Angular -->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>
    <script src="{{URL::to('/js/angular-datatable.min.js')}}" type="text/javascript"></script>
    <script src="{{URL::to('/js/app.js')}}" type="text/javascript"></script>
    <script src="{{URL::to('/js/ng-file-upload/ng-file-upload.min.js')}}" type="text/javascript"></script>
    <script src="{{URL::to('/js/ng-file-upload/ng-file-upload-shim.min.js')}}" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
    <script src="{{URL::to('/js/ckeditor.min.js')}}" type="text/javascript"></script>
    <script src="{{URL::to('/js/sweetalert.min.js')}}" type="text/javascript"></script>



    <script src="{{URL::to('/js/vendor/metisMenu/metisMenu.min.js')}}" type="text/javascript"></script>
    <script src="{{URL::to('/js/dist/js/sb-admin-2.js')}}" type="text/javascript"></script>





</body>

</html>
