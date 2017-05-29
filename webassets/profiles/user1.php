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
    <link rel="stylesheet" type="text/css" href="../build/styles.css">
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">


<!-- NavigationBar -->
    <?php include 'navigation_bar_colored.php';?>

<!-- Profile gallery -->

<section class="profile_gallery">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 no_padding gallery_user_section">    
              <section class="slider-for slider right">
                <div>
                  <img src="../img/model/model1-01.png">
                </div>
                <div>
                  <img src="../img/model/model1-01.png">
                </div>
                <div>
                  <img src="../img/model/model1-01.png">
                </div>
                <div>
                  <img src="../img/model/model1-01.png">
                </div>
                <div>
                  <img src="../img/model/model1-01.png">
                </div>
              </section>

              <section class="slider-nav left">
                <div>
                  <img src="../img/model/model1_sm-01.png">
                </div>
                <div>
                  <img src="../img/model/model1_sm-01.png">
                </div>
                <div>
                  <img src="../img/model/model1_sm-01.png">
                </div>
                <div>
                  <img src="../img/model/model1_sm-01.png">
                </div>
                <div>
                  <img src="../img/model/model1_sm-01.png">
                </div>
              </section>
            </div>  
            <div class="col-md-6 details_informations_section_user">
                <div class="col-md-7 no_padding">
                    <h1>Anabelle Brown</h1>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the indus try's standard dummy text ever since the 1500s</p>   
                </div>    
                <div class="col-md-5 no_padding">
                    <h4>ITALIAN</h4>
                </div>
                <div class="clearfix"></div>
                <h3>Measurements</h3>
                <table class="details_table_user">
                  <tr>
                    <td><h5>Height</h5></td>
                    <td style="float: right;">5.8”</td>
                  </tr>
                  <tr>
                    <td><h5>Bust</h5></td>
                    <td style="float: right;"><p>5.8”</p></td>
                  </tr>
                  <tr>
                    <td><h5>Waist</h5></td>
                    <td style="float: right;"><p>5.8”</p></td>
                  </tr>
                  <tr>
                    <td><h5>Hip</h5></td>
                    <td style="float: right;"><p>5.8”</p></td>
                  </tr>
                  <tr>
                    <td><h5>Dress</h5></td>
                    <td style="float: right;"><p>5.8”</p></td>
                  </tr>
                  <tr>
                    <td><h5>Shoe</h5></td>
                    <td style="float: right;"><p>5.8”</p></td>
                  </tr>
                  <tr>
                    <td><h5>Hair</h5></td>
                    <td style="float: right;"><p>5.8”</p></td>
                  </tr>
                  <tr>
                    <td><h5>Eyes</h5></td>
                    <td style="float: right;"><p>5.8”</p></td>
                  </tr>
                </table>
            </div>
        </div>
    </div>
</section>



<!-- Contact Form Section -->
    <?php include '../contact_section_input.php';?>

<!-- Footer all Pages -->    
    <?php include '../footer_all.php';?>

<!-- jQuery -->

    <script type="text/javascript" src="../build/scripts.js"></script>
      <script type="text/javascript">
 
 $('.slider-for').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  fade: false,
  asNavFor: '.slider-nav'
});
$('.slider-nav').slick({
  slidesToScroll: 1,
  asNavFor: '.slider-for',
  dots: false,
  arrows: false,
  autoplay: true,
  focusOnSelect: false,
  centerMode: false,
  centerPadding: '0px',
  slidesToShow: 4,
  responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 3
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    }
  ]
});

  </script>
</body>

</html>
