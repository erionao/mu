
var app = angular.module('manjakos-landscape', ['ngFileUpload', 'ckeditor', 'datatables'], function($interpolateProvider) {
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
});

app.controller('ProjectList', function($scope, $timeout, $http, $window, $log){

    $http.get("/projects/all")
        .then(function (response) {
            $scope.projects = response.data;

        });




    $scope.findAll = function(){
        $http.get("/projects/all")
            .then(function (response) {
                $scope.projects = response.data;

            });
    }

    $scope.go = function ( path ) {
        var url = "http://" + $window.location.host + path;
        $log.log(url);
        $window.location.href = url;
    };

    $scope.edit = function(projectd){
        var path = '/projects/details/' + projectd
        var url = "http://" + $window.location.host + path;
        $log.log(url);
        $window.location.href = url;
    }

    $scope.delete = function(projectd){


        swal({
                title: "Are you sure?",
                text: "You will not be able to recover this project!",
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

                    $http.delete("/project/delete/"+projectd)
                        .then(function (response) {
                            swal("Deleted!", "Your project has been deleted.", "success");
                            $scope.findAll();
                        });

                } else {
                    swal("Cancelled", "Your project is safe :)", "error");
                }


            });
    }

});
app.controller('ProjectCtrl', function($scope, Upload, $window, $log, $http){


    $scope.options = {
        language: 'en',
        allowedContent: true,
        entities: false
    };



    $scope.images = [];

    $scope.removeImage = function(index){
        $scope.images.splice(index, 1)
    };

    $scope.saveImage = function(file){

        if(file === undefined){
            $.notify("You should upload an image", "warning");
        }
        $scope.images.push({
            files:file
        });


        //console.log($scope.images);
    };

    $http.get("/types/projects")
        .then(function (response) {

            $scope.types = response.data;


        });

    $scope.saveProject = function(project){
        console.log($scope.images.length);

        if(!("title" in project) || project.title === "" || project.content === ""  || !("type_id" in project) || project.type_id === ""){
            $.notify("You should fill all fields", "info");
            return false;
        }
        else if($scope.images.length ===0){
             $.notify("You should upload an image", "warning");
             return false;
            }
        console.log(project);

        $scope.loading = true;
        Upload.upload({
            url: '/projects',
            method: 'POST',
            file:  $scope.images,
            data: project
        }).then(function (response) {
            $scope.loading = false;
         $scope.finalize(response.data.id);
        });

    };

    $scope.go = function ( path ) {
        var url = "http://" + $window.location.host + path;
        $log.log(url);
        $window.location.href = url;
    };


    $scope.finalize = function(projectId){
        swal({
                title: "Save Successfully",
                type: "success",
                showCancelButton: false,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Ok",
                closeOnConfirm: false
            },
            function () {
                $scope.go('/projects/details/' + projectId );
            });
    };
});

app.controller('ProjectDetailsCtrl', function($scope, $location, $http, Upload){



    var paramValue = $location.absUrl();

    var prjId = paramValue.substring(paramValue.indexOf("details/") + "details/".length);

    $http.get("/projects/" + prjId)
        .then(function (response) {

            $scope.project = response.data;
            console.log($scope.project);

        });

    $scope.findById = function(id){
        $http.get("/projects/" + id)
            .then(function (response) {
                $scope.project = response.data;
            });
    };

    $scope.addImage = function(projectId, file){
        if(file === undefined){
            $.notify("You should upload an image", "warning");
            return false;
        }

        Upload.upload({
            url: '/project/image/add/' + projectId,
            method: 'POST',
            file:  file,
        }).then(function (response) {

            swal("Save successfully!", "", "success");
            $scope.findById(prjId);


        });
    };

    $scope.deleteImage = function(id){


        swal({
                title: "Are you sure?",
                text: "You will not be able to recover this image!",
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
                    $http.get("/project/image/" + id)
                        .then(function (response) {
                            swal("Deleted!", "Your blog has been deleted.", "success");
                            $scope.findById(prjId);
                        });

                } else {
                    swal("Cancelled", "Your blog is safe :)", "error");
                }


            });
    }
});

//app.controller('BlogAddCtrl', function($scope, Upload, $window, $log){
//    $scope.options = {
//        language: 'en',
//        allowedContent: true,
//        entities: false
//    };
//
//    $scope.saveBlog = function(blog, file){
//        Upload.upload({
//            url: '/blog/add',
//            method: 'POST',
//            file:  file,
//            data: blog
//        }).then(function (response) {
//
//            $scope.finalize(response.data.id);
//        });
//    };
//
//    $scope.go = function ( path ) {
//        var url = "http://" + $window.location.host + path;
//        $log.log(url);
//        $window.location.href = url;
//    };
//
//    $scope.finalize = function(blogId){
//        swal({
//                title: "Save Successfully",
//                type: "success",
//                showCancelButton: false,
//                confirmButtonColor: "#DD6B55",
//                confirmButtonText: "Ok",
//                closeOnConfirm: false
//            },
//            function () {
//                $scope.go('/blog/details/' + blogId );
//            });
//    };
//
//});

app.controller('BlogListCtrl', function($scope, $timeout, $http, $window, $log){

    $http.get("/api/blogs")
        .then(function (response) {
            $scope.blogs = response.data;

        });

    $scope.findAll = function(){
        $http.get("/api/blogs")
            .then(function (response) {
                $scope.blogs = response.data;

            });
    }

    $scope.go = function ( path ) {
        var url = "http://" + $window.location.host + path;
        $log.log(url);
        $window.location.href = url;
    };

    $scope.edit = function(blogd){
        var path = '/blog/details/' + blogd
        var url = "http://" + $window.location.host + path;
        $log.log(url);
        $window.location.href = url;
    }

    $scope.delete = function(blogId){


        swal({
                title: "Are you sure?",
                text: "You will not be able to recover this blog!",
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

                    $http.delete("/api/blog/"+blogId)

                            swal("Deleted!", "Your blog has been deleted.", "success");
                            $scope.findAll();


                } else {
                    swal("Cancelled", "Your blog is safe :)", "error");
                }


            });
    }

});



app.controller('BlogDetailsCtrl', function($scope, Upload, $http, $location){

    var paramValue = $location.absUrl();

    var blogId = paramValue.substring(paramValue.indexOf("details/") + "details/".length);

    $http.get("/blog/" + blogId)
        .then(function (response) {

            $scope.blog = response.data;
            console.log($scope.blog);

        });

    $scope.findById = function(id){
        $http.get("/blog/" + id)
            .then(function (response) {

                $scope.blog = response.data;
                console.log($scope.blog);

            });
    };

    $scope.addImage = function(blogId, file){
        if(file === undefined){
            $.notify("You should upload an image", "warning");
            return false;
        }

        Upload.upload({
            url: '/blog/image/add/' + blogId,
            method: 'POST',
            file:  file,
        }).then(function (response) {

            swal("Save successfully!", "", "success");
            $scope.findById(blogId);


        });
    };

    $scope.blogUpdate = function (blogId, blog) {
        $http.post("/update/blog/"+ blogId, blog)
            .then(function (response) {

               $scope.finalize(blogId);
            });
    }

    $scope.deleteImage = function(id){


        swal({
                title: "Are you sure?",
                text: "You will not be able to recover this image!",
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
                    $http.delete("/blog/image/" + id)
                        .then(function (response) {
                            swal("Deleted!", "Your blog has been deleted.", "success");
                            $scope.findById(blogId);
                        });

                } else {
                    swal("Cancelled", "Your blog is safe :)", "error");
                }


            });
    }

    $scope.finalize = function (blogId) {
        swal("Update successfully!", "", "success");
        $scope.findById(blogId);
    }

});

app.controller('BlogAddCtrl', function($scope, Upload, $window, $log, $http){

    $scope.options = {
        language: 'en',
        allowedContent: true,
        entities: false
    };

    $scope.images = [];

    $scope.removeImage = function(index){
        $scope.images.splice(index, 1)
    };

    $scope.saveImage = function(file){
        $scope.images = [];
        $scope.images.push({
            files:file
        });
        //console.log($scope.images);
    };


    $scope.saveBlog = function(blog){

        if(!("title" in blog) || blog.title === "" || blog.content === ""){
            $.notify("You should fill all fields", "info");
            return false;
        }
        else if($scope.images.length ===0){
            $.notify("You should upload an image", "warning");
            return false;
        }

        Upload.upload({
            url: '/blog/save',
            method: 'POST',
            file:  $scope.images,
            data: blog
        }).then(function (response) {

            $scope.finalize(response.data.id);
        });

    };

    $scope.go = function ( path ) {
        var url = "http://" + $window.location.host + path;
        $log.log(url);
        $window.location.href = url;
    };


    $scope.finalize = function(blogId){
        swal({
                title: "Save Successfully",
                type: "success",
                showCancelButton: false,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Ok",
                closeOnConfirm: false
            },
            function () {
                $scope.go('/blog/details/' + blogId );
            });
    };
});

app.controller('UserCtrl', function($scope, Upload, $window, $log, $http){

    $http.get("/users")
        .then(function (response) {

            $scope.users = response.data;


        });

    $scope.saveUser = function(user){
        console.log(user);
        $http.post("/add/user", user)
            .then(function (response) {
                $scope.finalize("#myModal");
            });
    };

    $scope.findById= function(userId){
        $http.get("/users/"+ userId)
            .then(function (response) {

                $scope.user = response.data;


            });
    };

    $scope.editUser= function(user, userId){
        $http.post("/user/edit/"+ userId, user)
            .then(function (response) {

                $scope.finalize("#editModal");


            });
    };


    $scope.deleteUser= function(userId){
        swal({
                title: "Are you sure?",
                text: "You will not be able to recover this user!",
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
                    $http.delete("/user/delete/" + userId)
                        .then(function (response) {
                            swal("Deleted!", "Your user has been deleted.", "success");
                            $scope.findAll();
                        });

                } else {
                    swal("Cancelled", "Your user is safe :)", "error");
                }


            });
    };

    $scope.findAll = function(){
        $http.get("/users")
            .then(function (response) {

                $scope.users = response.data;


            });
    }

    $scope.finalize= function(modal){
        $(modal).modal('hide');
        swal("User Saved","", "success");
        $scope.findAll();
    };
});

app.controller('PagesCtrl', function ($scope, $http) {


    $scope.url = undefined;

    // This variable should be true only when a section is click (show update button)
    $scope.flag = false;

    $scope.options = {
        language: 'en',
        allowedContent: true,
        entities: false
    };

    $http.get("/get/pages")
        .then(function (response) {

            $scope.pages = response.data;
        });

    $scope.getSection = function (page, section) {
        $scope.url = '/section/' + page+'/'+section;
        $scope.flag = true;
        $http.get($scope.url)
            .then(function (response) {

                $scope.content = response.data.content;


            });
    }

    $scope.updateSection = function (content) {
        console.log(content);

        $http.post($scope.url, {content:content})
            .then(function (response) {

                console.log("asdsad");
                swal("Save successfully!", "", "success");

                $scope.content = response.data.content;




            });
    }


});

app.controller('BackgroundCtrl', function ($scope, $http, Upload) {

    $scope.sectionId = undefined;

    // This variable should be true only when a section is click (show add photo button)
    $scope.flag = false;


    $http.get("/get/pages")
        .then(function (response) {

            $scope.pages = response.data;

            console.log( $scope.pages);


        });

    $scope.getImage = function (sectionId) {
        $scope.sectionId = sectionId;
        $scope.flag = true;

        $http.get("/background/section/"+ $scope.sectionId)
            .then(function (response) {

                $scope.section = response.data;

                console.log( $scope.section);


            });


    }
    $scope.addImage = function(file){
        if(file === undefined){
            $.notify("You should upload an image", "warning");
            return false;
        }

        Upload.upload({
            url: '/background/image/' + $scope.sectionId,
            method: 'POST',
            file:  file,
        }).then(function (response) {

            swal("Save successfully!", "", "success");
            $scope.getImage($scope.sectionId);


        });
    };

    $scope.deleteImage = function(id){


        swal({
                title: "Are you sure?",
                text: "You will not be able to recover this background!",
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
                    $http.delete("/background/delete/" + id)
                        .then(function (response) {
                            swal("Deleted!", "Your bacground has been deleted.", "success");
                            $scope.getImage($scope.sectionId);
                        });

                } else {
                    swal("Cancelled", "Your background is safe :)", "error");
                }


            });
    };

});

app.controller('JobListCtrl', function($scope, $timeout, $http, $window, $log){

    $http.get("/api/jobs")
        .then(function (response) {
            $scope.jobs = response.data;

        });

    $scope.findAll = function(){
        $http.get("/api/jobs")
            .then(function (response) {
                $scope.jobs = response.data;

            });
    }

    $scope.go = function ( path ) {
        var url = "http://" + $window.location.host + path;
        $log.log(url);
        $window.location.href = url;
    };

    $scope.edit = function(blogd){
        var path = '/job/details/' + blogd
        var url = "http://" + $window.location.host + path;
        $log.log(url);
        $window.location.href = url;
    }

    $scope.delete = function(blogId){


        swal({
                title: "Are you sure?",
                text: "You will not be able to recover this blog!",
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

                    $http.delete("/api/job/"+blogId)

                    swal("Deleted!", "Your blog has been deleted.", "success");
                    $scope.findAll();


                } else {
                    swal("Cancelled", "Your blog is safe :)", "error");
                }


            });
    }

});

app.controller('JobAddCtrl', function($scope, Upload, $window, $log, $http){

    $scope.options = {
        language: 'en',
        allowedContent: true,
        entities: false
    };


    $scope.saveJob = function(job){

        if(!("title" in job) || job.title === "" || job.content === ""){
            $.notify("You should fill all fields", "info");
            return false;
        }

        $http.post("/api/job", job)
            .then(function (response) {

                $scope.job = response.data;

                $scope.finalize($scope.job.id);


            });

    };

    $scope.go = function ( path ) {
        var url = "http://" + $window.location.host + path;
        $log.log(url);
        $window.location.href = url;
    };


    $scope.finalize = function(jobId){
        swal({
                title: "Save Successfully",
                type: "success",
                showCancelButton: false,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Ok",
                closeOnConfirm: false
            },
            function () {
                $scope.go('/job/details/' + jobId );
            });
    };
});

app.controller('JobDetailsCtrl', function($scope, $window, $log, $http, $location){

    var paramValue = $location.absUrl();

    var jobId = paramValue.substring(paramValue.indexOf("details/") + "details/".length);

    $http.get("/job/" + jobId)
        .then(function (response) {

            $scope.job = response.data;
            console.log($scope.job);

        });

    $scope.findById = function(id){
        $http.get("/job/" + id)
            .then(function (response) {

                $scope.job = response.data;
                console.log($scope.job);

            });
    };

    $scope.updateJob = function (jobId, job) {
        $http.post("/update/job/"+ jobId, job)
            .then(function (response) {

                $scope.finalize(jobId);
            });
    };

    $scope.finalize = function (jobId) {
        swal("Update successfully!", "", "success");
        $scope.findById(jobId);
    }
});



