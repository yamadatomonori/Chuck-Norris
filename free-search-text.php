<html>
  <head>
    <link rel="stylesheet" href="https://cdn.gitcdn.link/cdn/angular/bower-material/v1.1.9/angular-material.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.10/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.7/angular-animate.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.7/angular-aria.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.7/angular-messages.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.10/angular-resource.min.js"></script>
    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/t-114/svg-assets-cache.js"></script>
    <script src="https://cdn.gitcdn.link/cdn/angular/bower-material/v1.1.9/angular-material.js"></script>
    
    <script type="module" src="free-search-text.js"></script>
  </head>
  <body>
    <h1>Free Search Text</h1>
    
    <div ng-controller="FreeSearchText as ctrl" layout="column" ng-cloak="" ng-app="MyApp">
      <md-content class="md-padding">
        <form ng-submit="$event.preventDefault()">
          <md-autocomplete
            md-no-cache="false"
            md-selected-item="ctrl.selectedItem"
            md-search-text-change="ctrl.searchTextChange(ctrl.searchText)"
            md-search-text="ctrl.searchText"
            md-selected-item-change="ctrl.selectedItemChange(item)"
            md-items="item in ctrl.querySearch(ctrl.searchText)"
            md-item-text="item.value"
            md-min-length="3"
            placeholder="Enter text here">
            
            <md-item-template>
              <span md-highlight-text="ctrl.searchText" md-highlight-flags="^i">{{item.value}}</span>
            </md-item-template>
            <md-not-found>
              No jokes matching "{{ctrl.searchText}}" were found.
            </md-not-found>
          </md-autocomplete>
        </form>
      </md-content>
    </div>
  </body>
</html>