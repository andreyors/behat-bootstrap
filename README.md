# Behat Bootstrap

[![Latest Stable Version](https://poser.pugx.org/andreyors/behat-bootstrap/v/stable)](https://packagist.org/packages/andreyors/behat-bootstrap)
[![Build Status](https://travis-ci.org/andreyors/behat-bootstrap.svg?branch=master)](https://travis-ci.org/andreyors/behat-bootstrap)
[![Downloads](https://poser.pugx.org/andreyors/behat-bootstrap/downloads)](https://packagist.org/packages/andreyors/behat-bootstrap)
[![codecov](https://codecov.io/gh/andreyors/behat-bootstrap/branch/master/graph/badge.svg)](https://codecov.io/gh/andreyors/behat-bootstrap)
![Deps](https://img.shields.io/badge/dependencies-up%20to%20date-brightgreen.svg)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/andreyors/behat-bootstrap/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/andreyors/behat-bootstrap/?branch=master)
[![License](https://img.shields.io/badge/license-MIT-blue.svg)](https://opensource.org/licenses/MIT)
[![PHP 7 ready](http://php7ready.timesplinter.ch/andreyors/behat-bootstrap/badge.svg)](https://travis-ci.org/andreyors/behat-bootstrap)

A Behat extension to automate console operations in order to prepare environment within Symfony 3/4, i.e. preparing initial database state, cleaning redis cache and warming composer cache

## Getting started

### Prerequisites
 - Behat 3
 - Composer

### Installing
`composer require --dev andreyors/behat-bootstrap`

### Usage
We usually need to prepare behat environment (create a fresh copy of db, clear the cache before, set up rabbitmq queues and exchanges)

### Copy and paste `behat.yaml` configuration
```yaml
extensions:
    AndreyOrs\BehatBootstrap\Loader:
      bootstrap:
        - bin/console cache:clear -e test
        - bin/console cache:warmup -e test         
        - bin/console doctrine:schema:create -e test
        - bin/console rabbitmq:setup-fabric -e test        
```

### Tests
```sh
composer test
```

### License
This library is released under the MIT license.
