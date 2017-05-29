<!DOCTYPE html>
<html lang="en"ng-app="manjakos-landscape">

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
    <link rel="stylesheet" href="{{URL::to('js/dist/css/edit_pages_text.css')}}"/>
    <link rel="stylesheet" href="{{URL::to('js/sweetalert.css')}}"/>

    <style>
        .container {
            position: relative;
            width: 50%;

        }

        .image {
            opacity: 1;
            display: block;
            width: 100%;
            height: auto;
            transition: .5s ease;
            backface-visibility: hidden;
            margin: 0 auto;
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

<body ng-controller ="BackgroundCtrl">

<div id="wrapper">

    <!-- Navigation Bar  -->

    <!-- Navigation -->
@include('admin.layouts.navigation')

<!-- End Of navigationbar  -->


    <!-- Page Content -->
    <div id="page-wrapper" class="edit_page-wrapper">
        <div class="row">
            <div class="blog_page_content" style="text-align: center;">
                <div class="container-fluid">
                    <div class="row">
                        <!-- Nav tabs -->
                        <!-- Tab panes -->



                            <div class="panel-group col-md-6" id="accordion" role="tablist" aria-multiselectable="true">
                                <label for="exampleTextarea">Pages And Sections</label>
                                <div class="panel panel-default" ng-repeat = "page in pages">
                                    <div class="panel-heading" role="tab" id="heading<%$index+1%>">
                                        <h4 class="panel-title">
                                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#<%$index+1%>" aria-expanded="false" aria-controls="<%$index+1%>">
                                                <%page.name%>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="<%$index+1%>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading<%$index+1%>">
                                        <div class="panel-body" >

                                            <button ng-repeat="section in page.sections" class="btn btn-info" ng-click="getImage(section.id)"><%section.name%></button>&nbsp;

                                        </div>
                                    </div>
                                </div>
                                {{--<div class="panel panel-default">--}}
                                {{--<div class="panel-heading" role="tab" id="headingThree">--}}
                                {{--<h4 class="panel-title">--}}
                                {{--<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">--}}
                                {{--Contact Us--}}
                                {{--</a>--}}
                                {{--</h4>--}}
                                {{--</div>--}}
                                {{--<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">--}}
                                {{--<div class="panel-body">--}}
                                {{--<button class="btn btn-info" onclick="getSection('section/contact/information')">Information</button>--}}
                                {{--</div>--}}
                                {{--</div>--}}
                                {{--</div>--}}
                            </div>



                        <button class="btn btn-success pull-right" ng-show="flag" data-toggle="modal" data-target="#myModal">Add Photos</button>
                        <div class="panel-group col-md-6" id="accordion" role="tablist" aria-multiselectable="true">

                                <h5>Image:</h5>
                                <div class="col-md-6 container center-block" ng-repeat="image in section.images">
                                    <img ng-src="{{URL::to('/uploads/background/')}}/<% image.image %>" class="center-block image" >
                                    <div class="middle">
                                        <button class="btn btn-danger" ng-click="deleteImage(image.id)">Delete</button>
                                    </div>

                                </div>

                            {{--<div class="panel panel-default">--}}
                            {{--<div class="panel-heading" role="tab" id="headingThree">--}}
                            {{--<h4 class="panel-title">--}}
                            {{--<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">--}}
                            {{--Contact Us--}}
                            {{--</a>--}}
                            {{--</h4>--}}
                            {{--</div>--}}
                            {{--<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">--}}
                            {{--<div class="panel-body">--}}
                            {{--<button class="btn btn-info" onclick="getSection('section/contact/information')">Information</button>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                        </div>
                    </div>
                </div>
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
                <h4 class="modal-title">Modal Header</h4>
            </div>

            <div class="modal-body">
                <input type="file" ngf-select="" ng-model="file" name="file" ngf-accept="'image/*'" required="">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" id="flavicon" class="btn btn-primary" ng-click="addImage(file)">Add</button>
            </div>
        </div>

    </div>
</div>
<!-- jQuery -->
<!-- Angular -->
<script src="{{URL::to('/js/vendor/jquery/jquery.min.js')}}" type="text/javascript"></script>


<script src="{{URL::to('/js/vendor/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
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




<script src="{{URL::to('/js/ckeditor/ckeditor.js')}}"></script>

<script>



    function getSection(urlSection){

        console.log("Url Get" + urlSection);
        $.ajax({
            url: urlSection,
            async: false,
            type: 'get',
            processData: false,
            contentType: false,
            success: function (response) {
                console.log(response);
                CKEDITOR.instances['editor1'].setData(response.content);
                getUrl(urlSection);

            },


        });


        return false;
    }

    function getUrl(api) {

        console.log("Api URL " + api);
        $("#editPage").unbind('click').bind('click', function(e) {

            var data0 = {content: CKEDITOR.instances.editor1.getData()};

            var json = JSON.stringify(data0 );

            $.ajax({
                type: "POST",
                url: api,
                data: json,
                contentType: "application/json; charset=utf-8",
                success: function (response) {

                    swal("Section Updated", "", "success");
                },

            });

            e.preventDefault();
        });

        return false;
    }


</script>

</body>

</html>
