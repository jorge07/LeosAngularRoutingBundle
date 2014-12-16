/**
 * Created by jorge on 5/12/14.
 *
 * Debug Controlller
 *
 */
app.controller('routing', ['$scope', '$state', function ($scope, $state) {

    $scope.$on('$stateChangeSuccess', function(evt, toState) {
       console.log(toState);
    });

    /**
     * Force reload
     */
    $scope.reload = function(){
        $state.reload();
    }

}]);

