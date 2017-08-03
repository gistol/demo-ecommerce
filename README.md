# Ecommerce-Demo for Pimcore 5

E-Commerce Demo Application for Pimcore 5.

## Caveats (will be improved)

**Important** : in order to install this profile, your DB and DB user needs to support the `LOAD DATA INFILE` command. See
the following issues for details:

* https://github.com/pimcore/demo-ecommerce/issues/1 
* https://github.com/pimcore/demo-ecommerce/issues/5

## Installation

* Download latest [Pimcore 5 build](https://www.pimcore.org/download-5/pimcore-unstable.zip)
* Install this package via composer:

  ```
  $ composer require pimcore/demo-ecommerce --no-scripts
  ```

* Install pimcore (via web or CLI installer) - it should now list this install profile as available
