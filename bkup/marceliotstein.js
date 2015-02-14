/*
 * app.js for new marceliotstein.com
 *
 */ 

(function() {
  var app = angular.module('projectStore', []);

  app.controller('StoreController', function(){
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

  app.controller('GalleryController', function(){
    this.current = 0;
    this.setCurrent = function(newGallery){
      this.current = newGallery || 0;
    };
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
        "images/bruce150.jpg"
      ],
    }];
})();
