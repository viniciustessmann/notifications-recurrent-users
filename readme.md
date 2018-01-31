## Notificação de usuários

## Problema
Você precisa fazer um programa que envie uma notificação em determinados dias da semana para determinados
usuários.

## Instalação
- cd "FOLDER PROJET"
- Execute o comando "mv .env.example .env"
- Editar .env com as configurações do seu banco de dados
- Execute o comando "composer install"
- Execute o comando "php artisan migrate" para migrar as tabelas do banco de dados
- Executeo o comando "php artisan serve" para levantar o servidor 
- Acesse a url http://127.0.0.1:8000/

## Cronjob
Para a notificação funcionar é preciso configurar uma cronjob.
- 0 14 * * * php /path-to-your-project/artisan Notification:run


Essa crontab está programada para rodas todos os dias as 14:00h, e serve para buscar no banco de dados as entradas para as notificações do dia atual.

## Como adicionar um registro
- Acesse http://127.0.0.1:8000/new-notification

Onde o campo name é o nome para a notificação, campo date é para o dia para a primeira notificação e o campo repeat é o número de vezes que a notificação deve ocorrer.

## Informações do desenvolver
- Nome: Vinícius Schlee Tessmann
- Email: viniciusschleetessmann@gmail.com