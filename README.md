# Инструкция по запуску
<p align="center">
В терминале вашей IDE:

1) cd example-app
2) php artisan serve

P.s. на windows php должен быть указан в PATH
  
  
Получение пакетов и настройка:
  
 php composer.phar install
  
 mv .env.example .env
  
 php composer.phar dump-autoload
  
 php artisan key:generate
</p>
