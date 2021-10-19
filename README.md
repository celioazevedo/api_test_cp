# API Teste para a Connect Plub

Instalando
-------
1 - Baixe o projeto:
```sh
git clone https://github.com/celioazevedo/api_test_cp.git
```

2 - Crie um banco de dados MySQL
```sh
create database nome_base;
```

3 - Configure o arquivo .env

```sh
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nome_base
DB_USERNAME=root
DB_PASSWORD=123456
```

4 - Crie o Secret JWT

```sh
$ cd pasta_do_projeto
$ php artisan jwt:secret
```
Testando
-------
1 - Rodando o projeto
```sh
$ cd pasta_do_projeto
$ php artisan serve
```
2 - Utilze o Postman ou o Insomnia para testar os métodos:
2.1 - Utilize os Headers:

```sh
Content-Type: application/json
Accept: application/json
```

-------
2.2 - Registrar um usuario:

POST - http://localhost:8000/api/register

Use o JSON abaixo:
```sh
{
	"name" : "Admin",
	"email" : "admin@test.com",
	"password" : "abc@123",
	"password_confirmation" : "abc@123"
}
```

2.3 - Login

POST - http://localhost:8000/api/login

Use o JSON abaixo:
```sh
{
	"email" : "admin@test.com",
	"password" : "abc@123"
}
```
> Nota: apartir daqui é necessário usar o Header Authorization com o Token retornado no login.

Ex:

```sh
{
	Authorization: Bearer abcdefghijklmnopq...
}
```
2.4 - Insere um produto

POST - http://localhost:8000/api/products/add

Use o JSON abaixo:
```sh
{
	"name" : "Suco de Laranja",
	"barcode" : "78933",
	"price" : "9.99",
	"created_at" : "2021-10-13 23:50:56",
	"updated_at" : "2021-10-13 23:50:56"
}
```

2.5 - Retorna um produto por Id

GET - http://localhost:8000/api/product/id/1

2.6 - Retorna um produto por Código de Barras

GET - http://localhost:8000/api/product/barcode/78922

2.7 - Retorna todos os produtos

GET - http://localhost:8000/api/products/all
