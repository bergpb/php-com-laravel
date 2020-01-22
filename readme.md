### Projeto Livro PHP e Laravel

Aplicação de controle de estoque desenvolvida com os estudos através do livro PHP e Laravel.

##### Requisitos:  
1. PHP >= 7.1,
2. Módulo sqlite habilitado no `php.ini`,

##### Como rodar o projeto:  
1. Cria um arquivo chamado `database.sqlite` dentro de app/databases,
2. Execute as migrações: `php artisan migrate`,
3. Execute as seeds: `php artisan db:seed`,
4. Inicie o server: `php artisan serve`,
5. Acesse [http://localhost:8000](http://localhost:8000),