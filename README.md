LeosAngularRoutingBundle
========================

Adapting Angular UI-ROUTER to use it with Symfony

Based on: https://github.com/angular-ui/ui-router

To configure:

Add on AppKernel in the array bundles:
========================

new Leos\AngularRoutingBundle\LeosAngularRoutingBundle()


On your template:
========================
Add the link on your JS Block and replace **"my-mode"** for your module name, like this:

  The angular ui router
  - @LeosAngularRoutingBundle/Resources/public/js/vendor/angular-ui-router.js


  Add to the routing.yml:
  
  leos_angular_routing:
  
      resource: "@LeosAngularRoutingBundle/Resources/config/routing.yml"

      prefix:   /your-prefix
  
  The custom configuration JS:
  
  `<script src="{{ path('leos_angular_routing_v1', {"module": "my-mode"}) }}"></script>`


On your config.yml or config_%env%.yml 
Define your configuration site:
========================


#The config:

  leos_angular_routing:
  
    routes:                                     
    
        home:                                   #The State Name
            url: ''                             #The url name (Not prefix with "/")
            
            #The template to include
            templateUrl: home                      #The symfony route name
            #Add parameters to the route
            urlParams:
                offer: wellcome
            #The childs
            views:
                partial1:                       #The partial name(unique)
                    column: slider              #The column to insert the view
                    viewParent: parnetSate      #Optional config to set nestead views
                    templateUrl: slider         #The symfony route name
                #Other examamples
                partial2:
                    column: aside
                    templateUrl: todo
                    
                partial3:
                    column: content
                    templateUrl: todoDisplay

        #To add Sub States
        testContainer:
            url: lobby
            templateUrl: testContainer

        testContainer.subrute:
            url: my-list
            templateUrl: todoDisplay

        testContainer.account:
            url: my-account
            templateUrl: testContainer.account
        #OR
        testContainer:
            url: lobby
            templateUrl: testContainer
            childs:
                subrute:
                    url: my-list
                    templateUrl: todoDisplay
                    childs:
                          cagada:
                              url: cagada
                              templateUrl: todoDisplay
                account:
                    url: my-account
                    templateUrl: testContainer.account
            
        #To add states with parameters
        play:
            url: 'play/:gameId'
            templateUrl: game
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
