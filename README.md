# Magento2_PaymentMethods

Набор модулей обеспечивает возможность выбора одного из методов оплаты пользователем при оформлении заказа.

Модули разрабатывались для конкретного заказчика и проекта  и больше не поддерживаются.

# Установка

## Вручную
Создайте в произвольно месте пустой каталог. Скопируйте и распакуйте туда архив модуля.
После распаковки архива с созданном вами каталоге должна появиться папка Magento2-PaymentMethods,
в которой будут файлы модулей с сохранением путей от корня сайта (то  есть app/code/Smartceo/Quiwi | Sberbank | Webmoney | YandexMoney ).

## С помощью git
Перейдите в корневой каталог вашего сайта. Если в корневой папке сайта имеются каталог .git и файл Readme.md, содержащие нужную вам информацию, сделайте из резервную копию.
Выполните команду ```git clone https://github.com/e-v-medvedev/Magento2_PaymentMethods``` . После окончании выполнения команды восстановите файлы из резервной копии или просто удалите появившиеся, если они вам не нужны.

После установки файлов модуля необходимо добавить в файл app/etc/config.php в возвращаемый им массив строку 
`
'Smartceo_Quiwi' => 1, 
'Smartceo_Sberbank' => 1, 
'Smartceo_Webmoney' => 1, 
'Smartceo_YandexMoney' => 1, 
` .
