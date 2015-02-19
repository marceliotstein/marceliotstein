/*
* marceliotstein.js for new marceliotstein.com
*
*/

(function() {
  var app = angular.module('projectStore', ['ui.bootstrap', 'angular-carousel']);

  // carousel

  app.controller('DemoCtrl', function($scope) {

    var allSlides = [
    ["Center for Disease Control", "cdc", "2014",
  "Drupal, Bootstrap, JQuery",
  "Launched new CDC web resource for health professionals, 'The Community Guide', with Price Waterhouse",
  "http://daiss.thecommunityguide.org"
    ],
["Virtual Career Network", "vcn", "2011 to 2012",
"Drupal 6, Drupal 7, JQuery, Bootstrap",
"Lead developer for Department of Labor initiative.",
"http://vcn.org"
],
["Wellformative", "wellformative", "2010 to 2012",
"Drupal, Ubercart, Drupal Commerce",
"Lead developer for alternative health website and online store.",
"http://wellformative.com"
],
["Foreign Policy Magazine", "foreignpolicy", "2009",
"Drupal, Acquia",
"Website and blog redesign. Social media strategy.",
"http://foreignpolicy.com"
],
["Pearl Jam", "pearljam", 2006,
"WordPress, AJAX, MySQL",
"Redesigned web presence and launched complete concert history database.",
"http://pearljam.com"
],
["Educational Marketer", "educationalmarketer", "2010 to 2012",
"Drupal 6, Drupal 7, Multisite, JQuery",
"Built 5 premium content sites for Market Research Corporation",
"http://educationalmarketer.net"
],

];
/*var allSlides = ["ivillage", "cdc", "vcn", "bobdylan", "pearljam",
"bruce", "aetv", "educationalmarketer", "elisteincartoons",
"litkicks", "foreignpolicy", "ghpprcticalhandbooks", "historychannel",
"inference-results", "lpgdivorce", "timedaily", "wellformative", "wwb"];
*/
function getSlide(target, style) {
  var i = target.length;
  return {
    id: (i + 1),
    label: allSlides[i][0],
    img: '/marceliotstein/images/' + allSlides[i][1] + "300.jpg",
    year: allSlides[i][2],
    tech: allSlides[i][3],
    blurb: allSlides[i][4],
    projlink: allSlides[i][5],
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
addSlides($scope.slides2, 'anything', 6);

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
