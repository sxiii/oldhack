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

Строки - лоты.

Обязательные поля: name, price, email (имя, цена, email)
Система автоматически выдаёт: timestamp (дата и время добавления)
Дополнительные поля:
desc - описание
date_from - дата начала размещения объявления (для функции планирования)
date_to - дата скрытия объявления
condition - состояние лота, работает или нет (working / broken / unknown)
picture_url - ссылка на фото товара
yandex_money - кошелёк Я.Д.
btc - кошелёк BTC
ltc - кошелёк LTC
eth - кошелёк ETH


# Example screenshot
![Img](https://i.imgur.com/uXtd9EB.png)

