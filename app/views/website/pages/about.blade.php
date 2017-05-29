<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>UAE STAFF</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" type="text/css" href="{{URL::to('webassets/build/styles.css')}}">
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">


<!-- NavigationBar -->
@include('website.includes.navigation_bar')

<!-- Homepage First Section -->

<section class="about_cover_section main_covers_text">
    <div class="container">
        <div class="row">
            <p>JOIN US FOR SOME EXCITING OPPORTUNITIES</p>
            <h1>A LITTLE ABOUT US</h1>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting<br> industry. Lorem Ipsum has been the industry's standard dummy<br> text ever since the 1500s.</p>
            <button class="button_colored">Register with Us</button>
            <button class="button_transparent">Work with Us</button>
        </div>
    </div>
</section>

<!-- Second section with logo and text on UAE About -->
<section class="section_two_about_p">
    <div class="container">
        <div class="row">
            <img src="{{URL::to('webassets/img/logo/logo_colored_logo-01.svg')}}">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting.</p>
        </div>
    </div>
</section>

<!-- Our Event Staffing Solutions -->
@include('website.includes.event_solutions_section')


<!-- Forth Section on about us page -->
<section class="forth_section_about_p">
    <div class="container">
        <div class="row">
            <div class="col-md-4 no_padding">
                <img src="{{URL::to('webassets/img/mission_s-01.svg')}}">
            </div>
            <div class="col-md-4 no_padding">
                <img src="{{URL::to('webassets/img/logo/uae_white_logo-01.svg')}}" class="logo_section_b"><br>
                <img src="{{URL::to('webassets/img/vision_s-01.svg')}}">
            </div>
            <div class="col-md-4 no_padding">
                <img src="{{URL::to('webassets/img/values_s-01.svg')}}">
            </div>
        </div>
    </div>
</section>


<!-- Managment Section About page -->
<section class="managment_section_about_p">
    <div class="container">
        <div class="row">
            <h1>Managment Team</h1>
            <div class="row">
                <div class="col-md-4">
                    <h2>Sacha Christe</h2>
                    <p>FOUNDER/CEO</p>
                </div>
                <div class="col-md-8">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                </div>
            </div>
            <hr>
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-4">
                    <h2>Jeffrey Henseler</h2>
                    <p>FOUNDER/CEO</p>
                </div>
                <div class="col-md-8">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- testimonial Section Homepage -->

@include('website.includes.testimonial_section_home_ab')

<!-- Contact Form Section -->
@include('website.includes.contact_section_input')

<!-- Footer all Pages -->
@include('website.includes.footer_all')

<!-- jQuery -->

<script type="text/javascript" src="{{URL::to('webassets/build/scripts.js')}}"></script>
</body>

</html>
