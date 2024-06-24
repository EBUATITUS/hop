<<<<<<<< Update Guide >>>>>>>>>>>

Immediate Older Version: 3.5.0
Current Version: 3.5.1

Feature Update:
1. CDN Link Update
2. QrCode Issues Solved
3. StroWallet Virtual Card(Live & Sandbox Mode Added)



Please User Those Command On Your Terminal To Update Full System

1. To Run project Please Run This Command On Your Terminal
    composer update && composer dump-autoload  && php artisan migrate

2. To Update Web & App Version Please Run This Command On Your Terminal
    php artisan db:seed --class=Database\\Seeders\\Update\\AppSettingsSeeder
    php artisan db:seed --class=Database\\Seeders\\Update\\BasicSettingsSeeder
