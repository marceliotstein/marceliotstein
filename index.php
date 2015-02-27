<?php
/*
* Angular implementation of MarcEliotStein.com
*
* optional d=* parameter for debug
*
*/

// get optional param

$debug = false;
if (!empty($_GET['d'])) {
  $debug = true;
}
?>
<!DOCTYPE html>
<html ng-app="projectStore">
<head>
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="angular-carousel/angular-carousel.css" />
  <link rel="stylesheet" type="text/css" href="marceliotstein.css" />
  <script type="text/javascript" src="angular/angular.js"></script>
  <script type="text/javascript" src="angular/angular-touch.js"></script>
  <script type="text/javascript" src="ui-bootstrap/ui-bootstrap-tpls-0.12.0.js"></script>
  <script type="text/javascript" src="angular-carousel/angular-carousel.js"></script>
  <script type="text/javascript" src="marceliotstein.js"></script>
</head>
<body class="mes-body container-fluid"

<div class="row">

  <!-- MAIN THEATRE -->
  <div class="mes-main-theatre col-xs-12 col-sm-12 col-md-12">

    <!-- HEADER NARROW (FLUID) -->
    <div class="mes-center-title hidden-lg hidden-xl text-center center-block">
      <img src="images/meslogo1200.png" class="img-responsive" alt="Marc Eliot Stein. Advanced website development. Specialty in Drupal, Angular, Bootstrap.">
      <div class="mes-hr"></div>
    </div>
    <!-- HEADER WIDE (FIXED) -->
    <div class="mes-left-title hidden-xs hidden-sm hidden-md col-lg-12 col-xl-12">
      <img src="images/meslogo1200.png" class="mes-title-fixed-wide" alt="Marc Eliot Stein. Advanced website development. Specialty in Drupal, Angular, Bootstrap.">
      <div class="mes-hr mes-title-fixed-wide"></div>
    </div>

    <!-- MAIN CONTENT -->
    <div class="ng-cloak col-xs-12 list-group center-block">
      <div ng-controller="DemoCtrl">

        <!-- NARROW XS -->
        <div class="col-xs-12 hidden-sm hidden-md hidden-lg hidden-xl">
          <div class="carousel-demo">
            <div class="mes-project-box col-xs-12">
              <ul rn-carousel mes-carousel-xs rn-carousel-index="carouselIndex2" rn-carousel-auto-slide rn-carousel-pause-on-hover rn-carousel-buffered class="carousel2">
                <li ng-repeat="slide in slides2 track by slide.id" ng-class="'id-' + slide.id">


                  <img class="mes-project-img img-responsive" ng-src={{slide.imgmedium}} />

                  <table class="mes-table">
                    <tr><td class="mes-narrow-td">
                      <p class="mes-project-title">{{slide.label}}</p>
                      <p>{{slide.blurb}} {{slide.tech}}. {{slide.year}}.</p>
                      <p><a class="mes-anchor" ng-href="{{slide.projlink}}">{{slide.projlink}}</a></p>
                    </td></tr>
                  </table>
                </li>
              </ul>
              <div rn-carousel-indicators ng-if="slides2.length > 1" slides="slides2" rn-carousel-index="carouselIndex2">
              </div>

            </div>
          </div>

          <div class="mes-narrow-blurb col-xs-12 center-block">
            <img src="images/mesblurb600.png" class="img-responsive" alt="Advanced web development. Social + Responsive" />
          </div>
        </div>

        <!-- NARROW SM -->
        <div class="hidden-xs col-sm-12 hidden-md hidden-lg hidden-xl">
          <div class="carousel-demo">
            <div class="mes-project-box col-xs-12">
              <ul rn-carousel mes-carousel-sm rn-carousel-index="carouselIndex2" rn-carousel-auto-slide rn-carousel-pause-on-hover rn-carousel-buffered class="carousel2">
                <li ng-repeat="slide in slides2 track by slide.id" ng-class="'id-' + slide.id">
                  <img class="mes-project-img img-responsive" ng-src={{slide.imgmedium}} />
                  <table class="mes-table">
                    <tr><td class="mes-narrow-td">
                      <p class="mes-project-title">{{slide.label}}</p>
                      <p>{{slide.blurb}} {{slide.tech}}. {{slide.year}}.</p>
                      <p><a class="mes-anchor" ng-href="{{slide.projlink}}">{{slide.projlink}}</a></p>
                    </td></tr>
                  </table>
                </li>
              </ul>
              <div rn-carousel-indicators ng-if="slides2.length > 1" slides="slides2" rn-carousel-index="carouselIndex2">
              </div>
            </div>
          </div>

          <div class="mes-narrow-blurb col-sm-12 center-block">
            <img src="images/mesblurb600.png" alt="Advanced web development. Social + Responsive" />
          </div>
        </div>

        <!-- WIDE MD -->
        <div class="hidden-xs hidden-sm col-md-12 hidden-lg hidden-xl">
          <table class="mes-table">
            <tr>
              <td class="mes-wide-md-td">
                <div class="mes-feature-box">
                  <div class="carousel-demo">
                    <ul rn-carousel mes-carousel-md rn-carousel-index="carouselIndex2" rn-carousel-auto-slide rn-carousel-pause-on-hover rn-carousel-buffered class="carousel2">
                      <li ng-repeat="slide in slides2 track by slide.id" ng-class="'id-' + slide.id">
                        <img class="mes-project-img img-responsive" ng-src={{slide.imgsmall}} />
                        <p class="mes-project-title">{{slide.label}}</p>
                        <p><b><i>{{slide.blurb}}</i></b></p>
                        <p>{{slide.tech}}</p>
                        <p>{{slide.year}}</p>
                        <p><a class="mes-anchor" ng-href="{{slide.projlink}}">{{slide.projlink}}</a></p>
                      </li>
                    </ul>
                    <div rn-carousel-indicators ng-if="slides2.length > 1" slides="slides2" rn-carousel-index="carouselIndex2">
                    </div>
                  </div>
                </div>
              </td>
              <td class="mes-wide-md-td">
                <div class="mes-wide-blurb center-block">
                  <img src="images/mesblurb600.png" class="img-responsive" alt="Advanced web development for arts,
                  media, music, business, books, law, government. Social + Responsive (LG)" />
                </div>
              </td>
            </tr>
          </table>
        </div>

        <!-- WIDE LG AND XL -->
        <div class="hidden-xs hidden-sm hidden-md col-lg-12 col-xl-12">
          <table class="mes-lg-table">
            <tr>
              <td class="mes-wide-lg-td">
                <div class="mes-feature-box">
                  <div class="carousel-demo">
                    <ul rn-carousel mes-carousel-md rn-carousel-index="carouselIndex2" rn-carousel-auto-slide rn-carousel-pause-on-hover rn-carousel-buffered class="carousel2">
                      <li ng-repeat="slide in slides2 track by slide.id" ng-class="'id-' + slide.id">
                        <img class="mes-project-img img-responsive" ng-src={{slide.imgsmall}} />
                        <p class="mes-project-title">{{slide.label}}</p>
                        <p><b><i>{{slide.blurb}}</i></b></p>
                        <p>{{slide.tech}}</p>
                        <p>{{slide.year}}</p>
                        <p><a class="mes-anchor" ng-href="{{slide.projlink}}">{{slide.projlink}}</a></p>
                      </li>
                    </ul>
                    <div rn-carousel-indicators ng-if="slides2.length > 1" slides="slides2" rn-carousel-index="carouselIndex2">
                    </div>
                  </div>
                </div>
              </td>
              <td class="mes-wide-lg-td">
                <div class="mes-wide-blurb center-block">
                  <img src="images/mesblurb600.png" class="img-responsive" alt="Advanced web development for arts,
                  media, music, business, books, law, government. Social + Responsive (XL)" />
                </div>
              </td>
            </tr>
          </table>
        </div>
        <!-- END OF WIDE LG -->

      </div>
    </div>

    <!-- FOOTER -->
    <div class="ng-cloak col-xs-12 row mes-footer center-block">
      <!-- NARROW -->
      <div class="mes-footer-box col-xs-12 hidden-sm hidden-md hidden-lg hidden-xl">
        <img class="mes-selfie img-responsive" src="images/mesbooks600.jpg" />
      </div>
      <div class="mes-footer-box hidden-xs col-sm-12 hidden-md hidden-lg hidden-xl">
        <img class="mes-selfie" src="images/mesbooks600.jpg" />
      </div>
      <div class="mes-footer-box col-xs-12 col-sm-12 hidden-md hidden-lg hidden-xl text-center">
        <table class="mes-table">
          <tr><td class="mes-narrow-footer-td">
            <p>Contact: <b>marc.eliot.stein@gmail.com</b></p>
            <p>Specialties: <b>Drupal, PHP, Angular.JS, JQuery, Bootstrap, MySQL, Solr, OOP, Agile</b></p>
            <p>Availability: <b>Washington DC - New York City - Anywhere</b></p>
            <p><a class="mes-anchor" target="_blank" href="https://www.linkedin.com/profile/view?id=3629296">LinkedIn</a></p>
            <p><a class="mes-anchor" target="_blank" href="https://github.com/marceliotstein">GitHub</a></p>
          </td></tr>
        </table>
      </div>
      <!-- WIDE -->
      <div class="mes-footer-box hidden-xs hidden-sm col-md-12">
        <div class="mes-footer-wide-box">
          <img class="mes-selfie" src="images/mesbooks600.jpg" />
        </div>
        <div class="mes-footer-wide-box">
          <p>Contact: <b>marc.eliot.stein@gmail.com</b></p>
          <p>Specialties: <b>Drupal, PHP, Angular.JS, JQuery, Bootstrap, MySQL, Solr, OOP, Agile</b></p>
          <p>Availability: <b>Washington DC - New York City - Anywhere</b></p>
          <p><a class="mes-anchor" target="_blank" href="https://www.linkedin.com/profile/view?id=3629296">LinkedIn</a></p>
          <p><a class="mes-anchor" target="_blank" href="https://github.com/marceliotstein">GitHub</a></p>
        </div>
      </div>
    </div>
    <?php if ($debug): ?>
      <div class="showbreaks">
        <div class="col-xs-12 hidden-sm hidden-md hidden-lg hidden-xl">
          XS
        </div>
        <div class="hidden-xs col-sm-12 hidden-md hidden-lg hidden-xl">
          SM
        </div>
        <div class="hidden-xs hidden-sm col-md-12 hidden-lg hidden-xl">
          MD
        </div>
        <div class="hidden-xs hidden-sm hidden-md col-lg-12 hidden-xl">
          LG
        </div>
        <div class="hidden-xs hidden-sm hidden-md hidden-lg col-xl-12">
          XL
        </div>
      </div>
    <?php endif; ?>
  </div>
</div>

<script>
angular.bootstrap(document, ['DemoApp']);
</script>
</body>
</html>
