var myApp = angular.module('myApp',[]);

myApp.controller('assurCtrl', ['$scope', function($scope) {

  $scope.clients = [
    {
      name:'Roger',
      cars: {
        name:''
      }
    }, {
      name:'Melusine',
      cars: {
        name: 'Opel',
        assuree: 'oui'
      }
    }, {
      name:'Billy',
      cars: [{
        name:'Aston Martin',
        assuree: 'oui'
      }, {
        name: 'Audi',
        assuree: 'non'
      }]
    }, {
      name:'Gertrude',
      cars: [{
        name: 'Merco',
        assuree: 'oui'
      }, {
        name: 'Honda',
        assuree: 'oui'
      }, {
        name: 'Peugeot',
        assuree: 'non'
      }]
    }, {
      name:'Dominique',
      cars: {
        name:'Tesla',
        assuree: 'non'
      }
    }
  ]
}])
