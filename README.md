
*Installation*

`composer require --dev andreyors/behat-bootstrap`

*Configuration*
```  
extensions:
    AndreyOrs\BehatBootstrap\Loader:
      bootstrap:
        - bin/console cache:clear
        - bin/console cache:warmup
        - bin/console doctrine:schema:create        
```
