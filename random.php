<!doctype html>
<html>
  <head>
      <meta charset="utf-8">
      <title>Random</title>

      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,400italic">
      <link rel="stylesheet" href="https://cdn.gitcdn.link/cdn/angular/bower-material/v1.1.9/angular-material.css">
      <link rel="stylesheet" href="https://material.angularjs.org/1.1.9/docs.css">
      <link rel="stylesheet" href="random.css">

      <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.10/angular.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.7/angular-animate.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.7/angular-aria.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.7/angular-messages.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.10/angular-resource.min.js"></script>
      <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/t-114/svg-assets-cache.js"></script>
      <script src="https://cdn.gitcdn.link/cdn/angular/bower-material/v1.1.9/angular-material.js"></script>
      <script type="module" src="random.js"></script>
  </head>
  <body>
    <div ng-controller="AppCtrl" class="sample tabsdemoDynamicTabs" layout="column" ng-cloak="" ng-app="MyApp">
      <md-content class="md-padding">
        <md-tabs md-selected="selectedIndex" md-border-bottom="" md-autoselect="false" md-swipe-content="">
          <md-tab ng-repeat="tab in tabs" ng-disabled="tab.disabled" label="{{tab.title}}">
            <div class="demo-tab tab{{$index%4}}" style="padding: 25px; text-align: center;">
              <div><a href="{{tab.content.url}}" target="_blank">{{tab.content.value}}</a></div>
            </div>
          </md-tab>
        </md-tabs>
      </md-content>
    </div>
  </body>
</html>
