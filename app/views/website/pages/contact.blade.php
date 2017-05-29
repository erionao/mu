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
@include('website.includes.navigation_bar_colored')

<section class="map_section_contact">
    <div id="map"></div>
</section>

<!-- Contact Form Section -->
@include('website.includes.contact_section_input')


<!-- Footer all Pages -->
@include('website.includes.footer_all')

<!-- jQuery -->

<script type="text/javascript" src="{{URL::to('webassets/build/scripts.js')}}"></script>
<script>
    function initMap() {
        var uluru = {lat: 25.0779267, lng: 55.1527393};
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 12,
            scrollwheel: false,
            center: uluru,styles: [{"featureType":"all","elementType":"all","stylers":[{"hue":"#ff0000"},{"saturation":-100},{"lightness":-30}]},{"featureType":"all","elementType":"labels.text.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"color":"#353535"}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#656565"}]},{"featureType":"poi","elementType":"geometry.fill","stylers":[{"color":"#505050"}]},{"featureType":"poi","elementType":"geometry.stroke","stylers":[{"color":"#808080"}]},{"featureType":"road","elementType":"geometry","stylers":[{"color":"#454545"}]},{"featureType":"transit","elementType":"labels","stylers":[{"hue":"#000000"},{"saturation":100},{"lightness":-40},{"invert_lightness":true},{"gamma":1.5}]}]
        });
        var marker = new google.maps.Marker({
            position: uluru,
            map: map
        });
    }
</script>

<script type="text/javascript">
    $("#em_contact").submit(function(e) {

        var url = "mail.php"; // the script where you handle the form input

        $.ajax({
            type: "POST",
            url: url,
            data: $("#em_contact").serialize()+ "&type=" + "special", // serializes the form's elements.
            beforeSend: function()
            {

            },
            complete: function(data)
            {
                $.notify(data.responseText, "success");

            }

        });

        e.preventDefault(); // avoid to execute the actual submit of the form.
    });

</script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDhmfWVygyGZ8A48limX8LVDNl08gqlM_Q&callback=initMap">
</script>
</body>

</html>
