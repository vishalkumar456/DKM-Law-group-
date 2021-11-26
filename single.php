<?php
require 'includes/config_inc.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Single -- DKM Law Group</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="DKM Law Group" name="keywords">
        <meta content="DKM Law Group" name="description">

        <!-- Favicon -->
        <link href="img/incon.png" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@1,600;1,700;1,800&family=Roboto:wght@400;500&display=swap" rel="stylesheet"> 
        
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
        <div class="wrapper">
            <!-- top bar and navbar starts here  -->          
            <?php 
                require 'topbar.php';
                require 'header.php';
            ?>
            <!-- top bar and navbar ends here  -->
            
            
            <!-- Page Header Start -->
            <div class="page-header">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2>Single Page</h2>
                        </div>
                        <div class="col-12">
                            <a href="">Home</a>
                            <a href="">Single Page</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page Header End -->


            <!-- Single Page Start -->
            <div class="single">
                <div class="container">
                    <div class="section-header">
                        <h2>This is Page Title</h2>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <img class="img-fluid rounded" src="img/single.jpg" alt="Image">
                            <h1>This is heading 1</h1>
                            <h2>This is heading 2</h2>
                            <h3>This is heading 3</h3>
                            <h4>This is heading 4</h4>
                            <h5>This is heading 5</h5>
                            <h6>This is heading 6</h6>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus. Aenean consectetur convallis porttitor. Aliquam interdum at lacus non blandit. Nam congue molestie nibh in venenatis. Etiam non dui vel purus mollis consectetur. Sed at cursus lectus, sed iaculis lorem. Suspendisse venenatis est eu neque elementum, a accumsan tortor scelerisque. Nullam id erat arcu. Morbi suscipit commodo tortor non efficitur. Ut pretium sollicitudin lorem quis laoreet. Nulla vestibulum ante ut tellus hendrerit, ac condimentum sapien vehicula. Fusce dapibus, nulla non venenatis pretium, purus mauris vehicula elit, at posuere leo elit id augue. Donec ullamcorper tortor et tellus convallis maximus.
                            </p>
                            <ul class="ul-group">
                                <li>First list item</li>
                                <li>Second list item</li>
                                <li>Third list item</li>
                                <li>Fourth list item</li>
                                <li>Fifth list item</li>
                            </ul>
                            <p>
                                Mauris tempor et odio ut condimentum. Donec eleifend magna eu hendrerit lacinia. Praesent luctus diam ut rhoncus vulputate. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed ut metus efficitur, volutpat eros et, mollis enim. Sed quis tortor id erat iaculis sagittis. Aenean at pretium lorem. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Etiam sollicitudin vitae lacus id fermentum. Nullam sit amet tortor arcu. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque elementum nibh in dui congue, id faucibus lectus auctor. Nunc quis tincidunt odio, id finibus massa. Phasellus tincidunt libero est, in blandit turpis malesuada a. Quisque congue, mauris non consectetur tempus, arcu urna blandit arcu, ac finibus dolor ante ut nibh. Etiam congue dignissim sollicitudin. 
                            </p>
                            <ol class="ol-group">
                                <li>First list item</li>
                                <li>Second list item</li>
                                <li>Third list item</li>
                                <li>Fourth list item</li>
                                <li>Fifth list item</li>
                            </ol>
                            <p>
                                Donec vel euismod tortor. Aenean euismod risus ac enim hendrerit, ac sagittis erat porta. Donec ultrices et massa at ullamcorper. Nam faucibus mattis mattis. Etiam a metus condimentum, pretium elit a, accumsan dui. Donec ipsum erat, ultricies ut ante vel, consequat elementum nibh. Vestibulum egestas id nunc lobortis bibendum. Aliquam odio ex, efficitur vitae risus vitae, iaculis suscipit justo. Nam eleifend orci nulla, in pulvinar risus eleifend sit amet
                            </p>
                            <ul class="list-group">
                                <li class="list-group-item">Firsttt list item</li>
                                <li class="list-group-item">Second list item</li>
                                <li class="list-group-item">Third list item</li>
                                <li class="list-group-item">Fourth list item</li>
                                <li class="list-group-item">Fifth list item</li>
                            </ul>
                            <p>
                                Aenean dolor nisi, ultrices vitae urna vitae, tristique auctor tortor. Cras eu aliquet metus. Nunc volutpat est nec convallis vulputate. Maecenas quis tortor molestie, maximus arcu mattis, vehicula orci. Curabitur consequat eu orci vel vulputate. In mollis purus in tellus consectetur, at tristique lacus gravida. Integer tempor mattis elit, eu mollis tellus pretium in. Duis id iaculis ipsum, eu tempus purus. Fusce euismod lacus quis felis eleifend egestas. Nam at dolor vitae risus varius mattis sed ut tortor. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque diam nisl, interdum sit amet congue efficitur, ultrices id dolor. 
                            </p>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Table Head</th>
                                        <th>Table Head</th>
                                        <th>Table Head</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Table Cell</td>
                                        <td>Table Cell</td>
                                        <td>Table Cell</td>
                                    </tr>
                                    <tr>
                                        <td>Table Cell</td>
                                        <td>Table Cell</td>
                                        <td>Table Cell</td>
                                    </tr>
                                    <tr>
                                        <td>Table Cell</td>
                                        <td>Table Cell</td>
                                        <td>Table Cell</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Page End -->


            <!-- News letter and footer  start -->
            <?php
            require 'newsletter.php';
                require 'footer.php';
            ?>
                <!-- News letter and footer  start -->
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/isotope/isotope.pkgd.min.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>
