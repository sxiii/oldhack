OldHack is self-hosted Google Spreadsheet-database driven classifieds engine

# Dependencies of the project
* [Physical] Ubuntu Server with LAMP
* This repository
* Handlebars.js
* TableTop.js
* jQuery
* Google Sheets table with db structure like below

# Database structure
timestamp | name | desc | price | email | date_from | date_to | condition | picture_url | yandex_money | btc | ltc | eth
| - | - | - | - | - | - | - | - | - | - | - | - | - |

The rows are lots (sale items).

Required fields: name, price, email
Automatically given: timestamp
Optional fields:
* desc - description
* date_from - date to start publishing an add/classified (for scheduling purposes)
* date_to - date to hide the add/classified
* condition - lot condition (working / broken / unknown)
* picture_url - link to lot image
* yandex_money - yandex.money wallet
* btc - BTC wallet
* ltc - LTC wallet
* eth - ETH wallet

# Example screenshot
![Img](https://i.imgur.com/uXtd9EB.png)

# Project presentation (in Russian)
* https://docs.google.com/presentation/d/1zzrE7dnpU0The2fRIoAqnYidcbumPj6UxriMQI-lsow/edit?usp=sharing
