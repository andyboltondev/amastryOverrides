# amastryOverrides
This is a Simple Magento 2 module to fix a bug with [Amasty Shipping Table Rates module](https://amasty.com/shipping-table-rates-for-magento-2.html) where the variable inside the shipping name field would just render as "{0}" both on frontend and backend.

### Error on backend
![Error on backend](/media/error_backend.png)


### Error on frontend
![Error on frontend](/media/error_frontend.png)


## The Fix
This module overides a Magento 2 core file in a non destructive way.
After installing the module the issue is will now be resolved and things render as expeted.

### Fixed backend
![Fixed backend](/media/fixed_backend.png)

### Fixed frontend
![Fixed frontend](/media/fixed_frontend.png)

## Installation
1. Uploade the ABDev directory to the app/code directory of your magento store
2. In the command line navigate to the root magento directory and run the following commands
   1. php bun/magento module:enable ABDev_AmastryOverrides
   2. php bin/magento setup:upgrade
   3. php bin/magento setup:di:compile
   4. php bin/magento setup:static-content:deploy
  
