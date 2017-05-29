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

<!-- Header Section On homepage -->
<form id="video-landing" class="home_page_hero">
    <section class="video-holder">
        <section id="video-landing" class="hm-black-strong">
            <video autoplay="autoplay" loop="loop" id="bgvid" poster="{{URL::to('webassets/img/background/backg_1-01.png')}}" muted>
                <source src="{{URL::to('webassets/img/uaestaff1.mp4')}}" type="video/mp4" mute="muted" controls/>
                <!-- <source src="http://mdbootstrap.com/images/video/Agua-natural.mp4" type="video/mp4" /> -->
            </video>
        </section>
    </section>
</form>

<div class="home_cover_section main_covers_text">
    <div class="container">
        <div class="row">
            <p>JOIN US FOR SOME EXCITING OPPORTUNITIES</p>
            <h1>GOT WHAT IT TAKES?</h1>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting<br> industry. Lorem Ipsum has been the industry's standard dummy<br> text ever since the 1500s.</p>
            <button class="button_colored">Register with Us</button>
            <button class="button_transparent">Work with Us</button>
        </div>
    </div>
</div>

<!-- Our Event Staffing Solutions -->
@include('website.includes.event_solutions_section')
<!-- Choose N’Go -->
@include('website.includes.choose_n_go_section')


<!-- Beneftis Section Homepage -->

<section class="benefits_section_homepage">
    <section class="container">
        <div class="row">
            <h1>Benefits</h1>
            <hr>
            <div class="col-md-6">
                <p>Perspiciatis unde omnis iste natus sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quaeb illo inventore</p>
                <p>Perspiciatis unde omnis iste natus sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quaeb illo inventore.erspiciatis unde omnis iste natus sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quaeb illo inventore</p>
                <button class="button_colored">Contact</button>
            </div>
            <div class="col-md-5 col-md-offset-1">
                <h4><i class="fa fa-check" aria-hidden="true"></i> Benefits Will Be Here</h4>
                <h4><i class="fa fa-check" aria-hidden="true"></i> Benefits Will Be Here</h4>
                <h4><i class="fa fa-check" aria-hidden="true"></i> Benefits Will Be Here</h4>
                <h4><i class="fa fa-check" aria-hidden="true"></i> Benefits Will Be Here</h4>
            </div>
        </div>
    </section>
</section>


<!-- Add staff -->

<section class="add_staff_home_section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="{{URL::to('webassets/img/icons/add_staff1-01.svg')}}">
                <h2>I Need Staff</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.</p>
                <button class="button_colored_dark">Get a Quote</button>
            </div>
            <div class="col-md-6">
                <img src="{{URL::to('webassets/img/icons/add_staff2-01.svg')}}">
                <h2>I Want To Work</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.</p>
                <button class="button_colored">I want to work</button>
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
