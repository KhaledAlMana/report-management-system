# Slim 4 MVC Skeleton

This is a report management system project upon request and it uses the [Slim4 Framework](http://www.slimframework.com/):

* [Slim-4-MVC-Skeleton] (https://github.com/semhoun/slim-skeleton-mvc) with a little bit of modifications
* [PHP-DI](http://php-di.org/) as dependency injection container
* [Slim-Psr7](https://github.com/slimphp/Slim-Psr7) as PSR-7 implementation
* [Twig](https://twig.symfony.com/) as template engine
* [Flash messages](https://github.com/slimphp/Slim-Flash)
* [Monolog](https://github.com/Seldaek/monolog)
* [Console](https://github.com/symfony/console)

## CAUTION

**The Slim Twig-View is still in active development and can introduce breaking changes. It is 
an beta release. Of course you can use this skeleton, but be warned. As soon as
you update the Slim Twig-View, you might have to modify your code.**

## Prepare

1. Create your project:


   ```bash
   composer create-project semhoun/slim-skeleton-mvc [your-app]
   ```
2. Create database: `./bin/console.php app:init-db`


## Run it:

1. `cd [your-app]`
2. `php -S 0.0.0.0:8888 -t public/`
3. Browse to http://localhost:8888


### Notice

- Set `var` folder permission to writable when deploy to production environment
- Default login/password is *admin*/*admin*
- To generate Doctrine entities:`./bin/entities_generator.php`
  :warning: *Delete all entities before re-generate to update entities.*