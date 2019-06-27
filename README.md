# Разработка информационной системы для поддержки маркетинговых исследований
## Этапы разработки
1. Написание миграций для формирования БД
1. Верстка недостающих элементов системы: форма создания заявок, профили пользователей, пагинация и фильтрация, форма авторизации в ИС.
1. Реализация  базового АПИ: на данном этапе создается бекенд-приложение с возможностями работы с пользователями
1. Создание базового фронтенд-приложения: на этапе создается основа приложения, разделяется на разделы для гостя и авторизованных пользователей, а также подключение к АПИ.
1. Итерационное наращивание функционала (Continuous Integration): Расширение функциональности приложения небольшими частями, включающими разработку моделей и контроллеров на бек и соответствующие формы на фронт.
### Пользователи
* Магнит magnit@magnit.ru
* Пятерочка pyaterochka@pyaterochka.ru
* Магазин Пассаж passaj@passaj.ru

* Сергей Патутин Сергеевич sergey@mail.ru
* Никита Скробов Вячеславович test@test.ru
* Антон Павлов Викторович anton@mail.ru

### пароль 12345678
## Vagrant
### Установить
* [VirtualBox](https://www.virtualbox.org/wiki/Downloads)
* [Vagrant](https://www.vagrantup.com/downloads.html)

### Склонировать репозиторий
```
git clone https://github.com/raikeeen/diplom
```
### Поднять локальный сервер на Vagrant
```
vagrant up
```
### Предустановленные роуты
Зарегистрировать нового пользователя и сегенерировать для него пароль можно используя командную строку
`php artisan passport:client --password`.

* `POST api/auth/login`, Авторизация и обновление токена;
* `POST api/auth/register`, Регистрация;
* `POST api/auth/recovery`, Восстановление пароля;
* `POST api/auth/reset`, Сброс пароля;
* `POST api/auth/logout`, "выход" - стереть данные по токену авторизации ;

### Сгенерировать ключи
```
php artisan passport:keys
```
