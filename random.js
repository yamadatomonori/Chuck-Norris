/* global angular */

angular
  .module('MyApp', ['ngMaterial', 'ngMessages', 'ngResource', 'material.svgAssetsCache'])
  .controller('AppCtrl', Random);

function Random ($resource, $scope) {
  $resource(
    'https://api.chucknorris.io/jokes/categories',
    {
      'query': {
        isArray: true
      }
    }
  ).query().$promise.then(categories => {
    $scope.tabs = categories.map(e => {
      return {'title': e};
    });
   
    $scope.selectedIndex = 0;
    
    $scope.$watch('selectedIndex', function(current, old) {
      let currentTab = $scope.tabs[current];
      
      if (!currentTab.content) {
        $resource(
                `https://api.chucknorris.io/jokes/random?category=${currentTab.title}`)
            .get().$promise.then(joke => currentTab.content = joke);
      }
      
      delete $scope.tabs[old].content;
    });
    
    $scope.alert = (tab) => {
      console.log(tab);
    };
  });
}