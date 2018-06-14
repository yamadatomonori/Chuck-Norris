/* global angular */

angular
  .module('MyApp', ['ngMaterial', 'ngMessages', 'ngResource', 'material.svgAssetsCache'])
  .controller('FreeSearchText', FreeSearchText);
  
function FreeSearchText($log, $resource, $window) {
  this.querySearch = querySearch;
  this.selectedItemChange = selectedItemChange;
  this.searchTextChange = searchTextChange;

  function querySearch(query) {
    return $resource(
        `https://api.chucknorris.io/jokes/search?query=${query}`)
      .get().$promise.then(joke => joke.result);
  }

  function searchTextChange(text) {
    $log.info('Text changed to ' + text);
  }

  function selectedItemChange(item) {
    $log.info('Item changed to ' + JSON.stringify(item));
    
    if (item.url) {
      $window.open(item.url, '_blank');
    }
  }
}
