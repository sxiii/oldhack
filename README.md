If you want to post a classified on your website fast and easy, or if you're having to post a lot of them, google sheets can help. Just add this code to your server and you're ready to go.

# Dependencies of the project
* [Physical] Ubuntu Server with LAMP
* This repository
* Handlebars.js (included in /js)
* TableTop.js (included in /js)
* jQuery (included in /js)
* [Google Sheets table](https://docs.google.com/spreadsheets/d/1NYdb6n9KsJab7rF2QXvuz3HvonXkuxMKVPBg3qZYsbs) with db structure like below

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

# Installation
`git clone https://github.com/sxiii/oldhack`

# Example project
* http://oldhack.ml
* http://oldhack.cf
* http://oldhack.gq
* http://oldhack.ga

# ToDo / Help needed
* Implement registration and ads editing
* Implement a working Cryptocompare API to calculate price for ads
* Clean javascript libraries, maybe rewrite everything

# Tested web browsers
![Imgur](https://i.imgur.com/auM2BLC.png)
