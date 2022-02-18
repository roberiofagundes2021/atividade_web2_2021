
perfume-shop é um sistema WEB de vendas de perfume desenvolvido para a disciplina de Laboratório de Programação WEB II do curso Tecnologia em Análise e Desenvolvimentos de Sistemas no Instituto Federal de Educação, Ciência e Tecnologia Baiano - Campus Guanambi.

<div align="center">

  #### [Tecnologias](#tecnologias) │ [Layout](#layout) │ [Funcionalidades](#funcionalidades) │ [Acesso](#acesso-ao-sistema) │ [Sistema Hospedado](#sistema-hospedado) 

</div>

> ## Tecnologias

As tecnologias abaixo foram utilizadas para o desenvolvimento do projeto: 

<img src="https://img.shields.io/static/v1?label=&message=PHP&color=black&style=for-the-badge&logo=PHP"/> <img src="https://img.shields.io/static/v1?label=&message=LARAVEL &color=black&style=for-the-badge&logo=LARAVEL"/>  <img src="https://img.shields.io/static/v1?label=&message=BOOTSTRAP &color=black&style=for-the-badge&logo=BOOTSTRAP"/> <img src="https://img.shields.io/static/v1?label=&message=JAVASCRIPT&color=black&style=for-the-badge&logo=JAVASCRIPT"/> <img src="https://img.shields.io/static/v1?label=&message=HTML &color=black&style=for-the-badge&logo=HTML"/>  <img src="https://img.shields.io/static/v1?label=&message=CSS &color=black&style=for-the-badge&logo=CSS3"/>  <img src="https://img.shields.io/static/v1?label=&message=MYSQL &color=black&style=for-the-badge&logo=MYSQL"/>  



> ## Layout

* Tela de Login

<img src="https://github.com/MonalyzaLima/web2-2021.1-1/blob/projetoII-backend/codigo/public/img/login.png" width="800">


* Tela de Vendas

<img src="https://github.com/MonalyzaLima/web2-2021.1-1/blob/projetoII-backend/codigo/public/img/index.png" width="800">


* Tela de Cadastro de Vendas

<img src="https://github.com/MonalyzaLima/web2-2021.1-1/blob/projetoII-backend/codigo/public/img/create.png" width="800">



> ## Funcionalidades


:heavy_check_mark: Login, cadastro de usuario

:heavy_check_mark: Cadastro de marcas

:heavy_check_mark: Cadastro, consulta e remoção de Venda

:heavy_check_mark: Cadastro, consulta e remoção de Compra

:heavy_check_mark: Cadastro, consulta, edição e remoção de Produtos

:heavy_check_mark: Cadastro, consulta, edição e remoção de Clientes

:heavy_check_mark: Cadastro, consulta, edição e remoção de Fornecedores



> ## Acesso ao Sistema

#### Para acessar é necessário:

- Ter instalado em sua máquina o PHP 7.0.0 ou versão superior: <a href="https://www.php.net/downloads">Download PHP</a>.

- Clonar este repositório em sua máquina:

```
https://github.com/roberiofagundes2021/atividade_web2_2021/tree/main
```

- Abrir o diretório do projeto

```
  cd web2-2021.1
```

- Selecionar a branch Projeto1-1Unidade

```
  git checkout projetoII-backend
```

- Instalar as dependencias

```
   composer install
```

- Por fim, executar os seguintes comandos no terminal:

```
  # Adiciona todas as permissões na pasta storage
  $ chmod -R 777 storage 
  # Gera a chave da aplicação
  $ php artisan key:generate 
  # Cria um link simbólico entre as pastas /public/storage -> /storage/app/public
  $ php artisan storage:link
  # Cria todas as tabelas do banco de dados SQL
  $ php artisan migrate
  # Cria um servidor em sua localhost na porta 8000 a partir do próprio php
  $ php -S localhost:8000 public/index.php

```


> ## Sistema Hospedado

* Link para acessar o sistema hospeado:
https://perfumeshop2022.herokuapp.com/


* Login
  o usuario pode fazer o cadastro para testar o login 

  E-mail: 
  
  Senha: 
