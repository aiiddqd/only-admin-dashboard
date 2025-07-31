# turcraft.ru

- адрес демо/тест сервера https://turcraft.wpcraft.ru/
- адрес локального сервера https://turcraft.local
- потенциальный адрес https://turcraft.ru


## платформа для локального сервера разработки
- https://localbyflywheel.com/
- инструкция по запуску https://localbyflywheel.com/community/t/how-can-i-restore-a-site-from-a-local-site-folder/1791
- для локальной работы надо создать пустой файл app/public/wp-content/.local - чтобы загружался конфиг для локальной среды


## первый запуск

- клонируем репо в рабочую папку
- запускаем Local
- файлы из рабочей папки временно куда нибудь переносим
- создаем новый сайт в Local в рабочей папке с доменом turcraft.local
- Local создаст контейнеры
- далее новые файлы из рабочей папки удаляем, возвращаем туда наши файлы с GIT
- включаем поддержку SSL/HTTPS чтобы работал адрес https://turcraft.local
- создаем пустой файл в папке app/public/wp-content/.local - чтобы система понимала что это локальный сервер для разработки
- обновляем БД с тест/демо стенда https://turcraft.wpcraft.ru/wp-admin/tools.php?page=wp-migrate-db
- форма авторизации https://turcraft.local/wp-login.php 
- логин/пароль: dev/dev (но можно использовать свой с тест сервера)


# тест/демо сервер/стенд

- https://turcraft.wpcraft.ru/
- вход и регистрация https://turcraft.wpcraft.ru/my/
- ftp логин/пароль: cl36462_tc/s1sBMaJn
- db логин_бд/пароль: cl36462_tc/3tYt9sX7