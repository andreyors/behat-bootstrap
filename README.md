# Behat Bootstrap

[![Latest Stable Version](https://poser.pugx.org/andreyors/behat-bootstrap/v/stable)](https://packagist.org/packages/andreyors/behat-bootstrap)
[![Build Status](https://travis-ci.org/andreyors/behat-bootstrap.svg?branch=master)](https://travis-ci.org/andreyors/behat-bootstrap)
[![Downloads](https://poser.pugx.org/andreyors/behat-bootstrap/downloads)](https://packagist.org/packages/andreyors/behat-bootstrap)
[![codecov](https://codecov.io/gh/andreyors/behat-bootstrap/branch/master/graph/badge.svg)](https://codecov.io/gh/andreyors/behat-bootstrap)
![Deps](https://img.shields.io/badge/dependencies-up%20to%20date-brightgreen.svg)
[![License](https://img.shields.io/badge/license-MIT-blue.svg)](https://opensource.org/licenses/MIT)
[![M score](https://api.codeclimate.com/v1/badges/159fabcb277903962edb/maintainability)](https://codeclimate.com/github/andreyors/behat-bootstrap/maintainability)
[![PHP 7 ready](http://php7ready.timesplinter.ch/andreyors/behat-bootstrap/badge.svg)](https://travis-ci.org/andreyors/behat-bootstrap)


A Behat extension to automate init scripts for behat environment within Symfony 3 projects, i.e. preparing initial database state, cleaning redis cache and warming composer cache

## Getting started

### Prerequisites
 - Behat 3
 - Composer

### Installing
`composer require --dev andreyors/behat-bootstrap`

### Configuration
```  
extensions:
    AndreyOrs\BehatBootstrap\Loader:
      bootstrap:
        - bin/console cache:clear
        - bin/console cache:warmup
        - bin/console doctrine:schema:create        
```

