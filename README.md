LeosAngularRoutingBundle
========================

Adapting Angular UI-ROUTER to use it with Symfony

Based on: https://github.com/angular-ui/ui-router

To configure:

On your template:
========================
Add the link on your JS Block and replace "my-mode" for your module name, like this:

  The angular ui router
  - @LeosAngularRoutingBundle/Resources/public/js/vendor/angular-ui-router.js

  The custom configuration JS
  <script src="{{ path('leos_angular_routing_v1', {"module": "my-mode"}) }}"></script>


On your config.yml or config_%env%.yml 
Define your configuration site:
========================


  #The config:
  leos_angular_routing:
    routes:#Layout Parameters
        home:                                   #The State Name
            url: ''                             #The url name (Not prefix with "/")
            #The template to include
            template: home                      #The symfony route name
            #The childs
            views:
                partial1:                       #The partial name(unique)
                    column: slider              #The column to insert the view
                    templateUrl: slider         #The symfony route name
                #Other examamples
                partial2:
                    column: aside
                    templateUrl: todo
                    
                partial3:
                    column: content
                    templateUrl: todoDisplay
                    
Extra Content:
========================

  The Routing controller for test your application:
========================
  Add it only if you want debug the router
  - @LeosAngularRoutingBundle/Resources/public/js/Controller/RoutingController.js

  Use it with: ng-controller="routing"
  
  The Loading Bar:
========================
  Based on: https://github.com/chieffancypants/angular-loading-bar
  
  - @LeosAngularRoutingBundle/Resources/public/js/vendor/angular-loading-bar.js
