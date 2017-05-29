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



</head>

<body ng-controller ="PagesCtrl">

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

                            <div class="col-md-6 input_text_page">
                                <form enctype="multipart/form-data" id="flavicon_form" role="form" method="POST">
                                    <div class="form-group">
                                        <label>Content of the Blog:</label>
                                        <div ckeditor="options" ng-model="content" ready="onReady()"></div>
                                        <button type="button" ng-show="flag" ng-click="updateSection(content)" class=" btn btn-success">Update <i class="fa fa-upload" aria-hidden="true"></i></button>
                                    </div>
                                </form>
                            </div>


                            <label for="exampleTextarea">Pages And Sections</label>
                            <div class="panel-group col-md-6" id="accordion" role="tablist" aria-multiselectable="true">
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

                                            <button ng-repeat="section in page.sections" class="btn btn-info" ng-click="getSection(page.name, section.name)"><%section.name%></button>&nbsp;

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
                        </div>
                    </div>
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
