# Behat Bootstrap

![PHP](	https://img.shields.io/packagist/php-v/andreyors/behat-boostrap.svg)
[![Build Status](https://travis-ci.org/andreyors/behat-boostrap.svg?branch=master)](https://travis-ci.org/andreyors/behat-bootstrap)
[![Coverage Status](https://coveralls.io/repos/github/andreyors/behat-bootstrap/badge.svg?branch=master)](https://coveralls.io/github/andreyors/behat-bootstrap?branch=master)
![Dependencies](https://img.shields.io/badge/dependencies-up%20to%20date-brightgreen.svg)
[![GitHub Issues](https://img.shields.io/github/issues/andreyors/behat-bootstrap.svg)](https://github.com/andreyors/behat-bootstrap/issues)
![Contributions welcome](https://img.shields.io/badge/contributions-welcome-orange.svg)
[![License](https://img.shields.io/badge/license-MIT-blue.svg)](https://opensource.org/licenses/MIT)

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

