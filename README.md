# PersonalSite
Последняя вариация моего сайта. React.js + Node.js

http://sololink.site

## Рабочий стэк
+ React.js
+ Redux
+ ~~Node.js(Express)~~
+ ~~MongoDB(Облачная)~~
+ ~~Python/Django~~
+ ~~SQlite3~~
+ ~~PHP/Laravel~~
+ ~~MySQL~~
+ ~~Sleepingowl Admin~~
+ Node.js
+ ~~Express~~
+ ~~MongoDB~~
+ Nest.js
+ MySQL

### Изменения проекта можно отследить по веткам
## Последние изменения (14.12.21)
Проект переведен на другой стэк технологий (Python/Django)
Также изменениям подверглась база данных

## Update 21.12.21
### Переход на PHP
После долгих раздумий я решил дополнить проект ещё одной серверной частью, которая и станет в последствии основной.
Чтобы посмотреть текущее состояние проекта загляните в ветку "DevPHP"

## Переход на PHP/Laravel 22.12.21
Вся серверная часть прокта перенесена на PHP/Laravel + MySQL + Sleepingowl Admin

## Какие проблемы возникали по ходу разработки?
Первые проблемы возникли на этапе верстки, нужно было продумать архитектуру.
Также до сих пор я не пофиксил один баг, на странице TODO. Верстка немного сужается, могу предположить, что это из-за верстки todo-шек
Бэк не доставлял много проблем, единственное, админ-панель, её нужно было прикрутить к сайту.  Изначально я настроил редирект, но после деплоя, фича перестала работать, поэтому пришлось сделать просто ссылку.
Куда же без проблем с nginx. Сервер очень любит вставлять палки в колеса, конечно может быть я просто его плохо настроил. Но проблемы были. Хотя и их я исправил 

## Update 24.01.22
### Возвращение на Node.js
Я переписал серверную часть на Node.js + Express + MongoDB. Также я убрал готовую админку от команды Laravel и добавил кастомную админку.
Она также, как и сайт будет улучшаться. Переход оказался достаточно прост, но работы ещё много. Админка сделана не до конца, только основные функции:
Новости и Todo.

## Update 01.02.22
### Небольшой эксперемент
Решил написать логику todo на чистом PHP. Вышло вроде бы неплохо. Для просмотра обратитесь к ветке dev7

## Update 06.04.22
### Переделывание приложения
Я решил именить дизайн сайта, архитектуру клиента и полностью переписать серверную часть на TypeScript

## Update 13.04.22
### Изменение стека
В связи с возросшей сложностью приложения, я поменял стек сервера на Nest.js
