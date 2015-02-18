/*
 * marceliotstein.js for new marceliotstein.com
 *
 */

(function() {
  var app = angular.module('projectStore', ['ui.bootstrap', 'angular-carousel']);

  // carousel

  app.controller('DemoCtrl', function($scope) {

      var allSlides = ["ivillage", "cdc", "vcn", "bobdylan", "pearljam",
                       "bruce", "aetv", "educationalmarketer", "elisteincartoons",
                       "litkicks", "foreignpolicy", "ghpprcticalhandbooks", "historychannel",
                       "inference-results", "lpgdivorce", "timedaily", "wellformative", "wwb"];

      function getSlide(target, style) {
          var i = target.length;
          return {
              id: (i + 1),
              label: 'slide #' + (i + 1),
              img: '/marceliotstein/images/' + allSlides[i] + "150.jpg",
              color: "#777777",
              odd: (i % 2 === 0)
          };
      }

      function addSlide(target, style) {
          target.push(getSlide(target, style));
      };

      $scope.carouselIndex2 = 1;

      function addSlides(target, style, qty) {
          for (var i=0; i < qty; i++) {
              addSlide(target, style);
          }
      }

      // 2nd ngRepeat demo
      $scope.slides2 = [];
      addSlides($scope.slides2, 'anything', 10);

  })

  // projectStore

  app.controller('projectController', function(){
    this.projects = projects;
  });

  app.controller('TabController', function(){
    this.tab = 1;

    this.setTab = function(newValue){
      this.tab = newValue;
    };

    this.isSet = function(tabName){
      return this.tab === tabName;
    };
  });

  var getMouseEventResult = function(mouseEvent, mouseEventDesc) {
    return ("A " + mouseEventDesc + " just happened to " + mouseEvent.target.src);
  }

  var getFeaturedImage = function(mouseEvent) {
    var lilImg = mouseEvent.target.src;
    var bigImg = lilImg.replace("150", "475");
    return bigImg;
  }

  app.controller('GalleryController', function($scope){
    $scope.onMouseOverResult = "";
    $scope.featuredImage = "";
    this.current = 0;
    this.setCurrent = function(newGallery){
      this.current = newGallery || 0;
    };

    $scope.onMouseOver = function($event) {
      $scope.onMouseOverResult = getMouseEventResult($event, "Mouse Over");
      $scope.featuredImage = getFeaturedImage($event);
    }

    $scope.onMouseLeave = function($event) {
      $scope.onMouseOverResult = "";
    }
  });

  var projects = [{
      name: 'Featured',
      images: [
        "images/aetv150.jpg",
        "images/bobdylan150.jpg",
        "images/elisteincartoons150.jpg",
        "images/timedaily150.jpg",
        "images/historychannel150.jpg",
        "images/wwb150.jpg",
        "images/ivillage150.jpg",
        "images/litkicks150.jpg",
        "images/bruce150.jpg",
      ],
    }, {
      name: 'Recent',
      images: [
        "images/cdc150.jpg",
        "images/vcn150.jpg",
        "images/educationalmarketer150.jpg",
        "images/lpgdivorce150.jpg",
        "images/wellformative150.jpg",
        "images/ghppracticalhandbooks150.jpg",
      ],
    }, {
      name: 'Music and Literature',
      images: [
        "images/bobdylan150.jpg",
        "images/wwb150.jpg",
        "images/elisteincartoons150.jpg",
        "images/litkicks150.jpg",
        "images/bruce150.jpg"
      ],
    }, {
      name: 'Media and Entertainment',
      images: [
        "images/timedaily150.jpg",
        "images/historychannel150.jpg",
        "images/aetv150.jpg",
      ],
    }];
})();
