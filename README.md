INTRODUCTION
------------
This modules created for SPH Products shop, you can purchase using QR code scanner link


IMPLEMENTATION
--------------
- I have tried to created custom content types. please look on config folder under our sph_products folder
- created custom module, declare routes & controller & write logic for fetch products using Drupal standard way.
- attached library which i was planned to use for converting url into QR code. 

PENDING
--------
- UI part is pending.

REQUIREMENTS
------------
Drupal 8.x

INSTALLATION
------------

Install the Country state and city module:
  Using DRUSH: drush en sph_products
  -or-
  Install it from Admin panel on below path
  PROJECT_URL/admin/modules

  For image of products
  attached folder name - 2022-12, you move on web\sites\default\files under project folder

NOTE
----
if throwing error regarding content type creating then please remove config folder from custom module
and then manually import content type.

- i have attached folder for configuration file of content type, please import using below command
   command for importing content type file -> drush cim

- as referance here generated on my system
Configuration successfully exported to sites/default/files/config_Hp3qYtiBPKkH11tgrxuW2gVWP11S3wt50HBNgGAEuFsMsQMIepJ00wXReFuZRX8qPbPGU7FwFw/sync