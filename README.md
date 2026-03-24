## 🚀 API REST com Laravel

## API desenvolvida com o framework Laravel, com o objetivo de praticar construção de APIs RESTful utilizando boas práticas de back-end.

## 📌 Tecnologias utilizadas
PHP
Laravel
MySQL
Eloquent ORM
Thunder Client / Postman

## ⚙️ Funcionalidades
✅ Criar registros (POST)
📄 Listar registros (GET)
✏️ Atualizar registros (PUT / PATCH)
❌ Deletar registros (DELETE)

## 🗄️ Configuração do Banco de Dados
1. Criar o banco de dados
CREATE DATABASE api_laravel;

## ⚙️ Configuração do Projeto
1. Clonar o repositório
git clone <url-do-repositorio>

2. Acessar o diretório
cd nome-do-projeto

3. Instalar dependências
composer install

4. Configurar o arquivo .env
Copie o arquivo de exemplo:
cp .env.example .env

5. Edite as variáveis de banco de dados:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=api_laravel
DB_USERNAME=root
DB_PASSWORD=sua_senha

6. Gerar a chave da aplicação
php artisan key:generate

8. Executar as migrations
php artisan migrate

## ▶️ Rodando o projeto
php artisan serve

A aplicação estará disponível em:
http://127.0.0.1:8000

## 🔗 Endpoints da API
Método	   Endpoint	         Descrição
GET	     /api/index	         Lista todos os registros
GET	     /api/show/{id}      Exibe um registro
POST	 /api/store 	     Cria um novo registro
PUT      /api/update/{id}	 Atualiza um registro
DELETE	 /api/delete/{id}    Remove um registro

## 🧪 Testes
A API pode ser testada utilizando:
Thunder Client (VS Code)
Postman
Insomnia
cURL

## 📂 Estrutura relevante
app/
 ├── Models/
 │    └── Personagem.php
 │
 ├── Http/
 │    ├── Controllers/
 │    │    └── Api/
 │    │         └── PersonagemController.php
 │    │
 │    └── Requests/
 │
database/
 ├── migrations/
 │    └── create_personagens_table.php
 │
routes/
 └── api.php
 
## ⚠️ Observações
Projeto focado em aprendizado
Utiliza padrão MVC do Laravel
Estrutura preparada para evolução

## 🎯 Objetivo
Praticar:

Criação de APIs REST com Laravel
Uso do Eloquent ORM
Estruturação em MVC
Migrations e versionamento de banco
Boas práticas de desenvolvimento

## 📈 Possíveis melhorias
Implementar validação com Form Requests
Adicionar autenticação (JWT ou Laravel Sanctum)
Paginação de resultados
Filtros e buscas avançadas
Tratamento global de exceções
Versionamento de API (/api/v1)
