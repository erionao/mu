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

<body ng-controller="UserCtrl">

<div id="wrapper">

    <!-- Navigation Bar  -->

    <!-- Navigation -->
    @include('admin.layouts.navigation')


            <!-- End Of navigationbar  -->


    <!-- Page Content -->
    <div id="page-wrapper" class="add_projects_page">
        <div class="container-fluid">

            <div class="row">
                <button class="btn btn-success pull-left" data-toggle="modal" data-target="#myModal">Add New User</button>
                <div class="col-md-12 table_section">
                    <table ng-if="users" datatable="" class="row-border hover">
                        <thead>
                        <tr>
                            <th>Email</th>
                            <th>Created_at</th>
                            <th>Updatet_at</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr ng-repeat="user in users">
                            <td ><%user.email%></td>
                            <td ><%user.created_at%></td>
                            <td ><%user.updated_at%></td>

                            <td><a href="">
                                    <button class="edit_btn_ta" ng-click="findById(user.id)" data-toggle="modal" data-target="#editModal" ><i class="fa fa-pencil"
                                                                                            aria-hidden="true"></i>&nbsp;Edit
                                    </button>
                                </a>
                                <button class="delete_btn delete_btn_ta" ng-click="deleteUser(user.id)"><i
                                            class="fa fa-trash" aria-hidden="true"></i></button>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


    </div>
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->

            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Save</h4>
                </div>

                <div class="modal-body">
                    <div class="form-group">
                        <label for="recipient-name" class="form-control-label">Email:</label>
                        <input type="text" class="form-control" ng-model="user.email" id="recipient-name">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="form-control-label">Passord:</label>
                        <input type="password" class="form-control" ng-model="user.password" id="recipient-name">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" id="flavicon" class="btn btn-primary" ng-click="saveUser(user)">Add</button>
                </div>
            </div>

        </div>
    </div>

    <div class="modal fade" id="editModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->

            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Edit</h4>
                </div>

                <div class="modal-body">
                    <div class="form-group">
                        <label for="recipient-name" class="form-control-label">Email:</label>
                        <input type="text" class="form-control"  ng-model="user.email" id="recipient-name">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="form-control-label">Passord:</label>
                        <input type="password" class="form-control"  ng-model="user.password" id="recipient-name">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" id="flavicon" class="btn btn-primary" ng-click="editUser(user, user.id)">Add</button>
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
