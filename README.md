
perfume-shop é um sistema WEB de vendas de perfume desenvolvido para a disciplina de Laboratório de Programação WEB II do curso Tecnologia em Análise e Desenvolvimentos de Sistemas no Instituto Federal de Educação, Ciência e Tecnologia Baiano - Campus Guanambi.

<div align="center">

  #### [Tecnologias](#tecnologias) │ [Layout](#layout) │ [Funcionalidades](#funcionalidades) │ [Acesso](#acesso-ao-sistema) │ [Sistema Hospedado](#sistema-hospedado) 

</div>

> ## Tecnologias

As tecnologias abaixo foram utilizadas para o desenvolvimento do projeto: 

<img src="https://github.com/roberiofagundes2021/atividade_web2_2021/blob/ProjetoII-backend/public/images/boostrap.png"/>
<img src="https://github.com/roberiofagundes2021/atividade_web2_2021/blob/ProjetoII-backend/public/images/php.jpeg"/>  
<img src="https://github.com/roberiofagundes2021/atividade_web2_2021/blob/ProjetoII-backend/public/images/html.png"/> 
<img src="https://github.com/roberiofagundes2021/atividade_web2_2021/blob/ProjetoII-backend/public/images/heroku.png"/>
<img src="https://github.com/roberiofagundes2021/atividade_web2_2021/blob/ProjetoII-backend/public/images/css.png"/>  <img src="https://github.com/roberiofagundes2021/atividade_web2_2021/blob/ProjetoII-backend/public/images/posgres.jpeg"/>  



> ## Layout

* Tela de Login
<img src="https://github.com/roberiofagundes2021/atividade_web2_2021/blob/ProjetoII-backend/public/images/login.PNG" width="800">
* Tela de Dashboard
<img src="https://github.com/roberiofagundes2021/atividade_web2_2021/blob/ProjetoII-backend/public/images/tela_dashboard.png" width="800">
* Tela de Vendas
<img src="https://github.com/roberiofagundes2021/atividade_web2_2021/blob/ProjetoII-backend/public/images/mostrar_vendas.PNG" width="800">
* tela de exibir clientes
<img src="https://github.com/roberiofagundes2021/atividade_web2_2021/blob/ProjetoII-backend/public/images/mostrar_clientes.PNG" width="800">
* tela de exibir marcas
<img src="https://github.com/roberiofagundes2021/atividade_web2_2021/blob/ProjetoII-backend/public/images/Mostrar_marcas.PNG" width="800">
* tela de cadastro de categoria
<img src="https://github.com/roberiofagundes2021/atividade_web2_2021/blob/ProjetoII-backend/public/images/cadastro_categoria.PNG" width="800">
* tela de exibir itens de vendas
<img src="hhttps://github.com/roberiofagundes2021/atividade_web2_2021/blob/ProjetoII-backend/public/images/Mostra_itensvendas.PNG" width="800">
* tela de exibir  categoria
<img src="https://github.com/roberiofagundes2021/atividade_web2_2021/blob/ProjetoII-backend/public/images/mostrar_categoria.PNG" width="800">







> ## Funcionalidades


:heavy_check_mark: Login, cadastro de usuario

:heavy_check_mark: exibir informações sobre marcas

:heavy_check_mark: exibir informações sobre clientes

:heavy_check_mark: exibir informações sobre vendas

:heavy_check_mark: exibir informações sobre categorias

:heavy_check_mark: informações sobre entradas de produtos

:heavy_check_mark: informações sobre itens de entradas de produtos



> ## Acesso ao Sistema

#### Para acessar é necessário:

- Ter instalado em sua máquina o PHP 7.0.0 ou versão superior: <a href="https://www.php.net/downloads">Download PHP</a>.
- laravel ui :<a https://www.keniaferreira.com/2020/05/ativar-sistema-de-login-laravel-70.html</a>

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
