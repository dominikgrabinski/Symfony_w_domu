# Symfony at home - preapare and practice in projects created in Symfony 2.8 #

Practice in terminal commands:
- symfony new project_name 2.8
- php app/console generate:bundle -> (delete AppBundle)
- php app/console server:start and ... server:stop
- php app/console generate:controller -> (with MyBundle and durring generate prepare useful ....Action)
- php app/console debug:router -> (useful f.e. generateURL() )
- php app/console assets:install adds Ours resources to web folder
- php app/console doctrine:database:create and ...drop
- php app/console doctrine:generate:entity -> in MyBundle
- php app/console doctrine:generate:entities MyBundle:Entity_name -> after set relations in Bundles
- php app/console doctrine:schema:update --force -> to send relation to databasee
- php app/console generate:doctrine:crud -> create form for Entity_name
