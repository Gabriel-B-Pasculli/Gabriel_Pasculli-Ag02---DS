# Gabriel_Pasculli-Ag02---DS
# Cadastro de Colaboradores

Projeto desenvolvido para realizar o cadastro de novos colaboradores das **Lojas Brincos e Companhia**.

O sistema possui um formulário em HTML que coleta os dados do colaborador e envia as informações para um arquivo PHP utilizando o método `POST`. Após o envio, os dados são apresentados em uma página de confirmação.

## Tecnologias utilizadas

* HTML
* CSS
* PHP
* XAMPP
* Apache

## Funcionalidades

O formulário permite cadastrar:

* Nome completo
* Idade
* Profissão
* Salário pretendido
* Experiência anterior

Após o envio, o sistema:

* Recebe os dados pelo método `POST`
* Armazena os dados em variáveis PHP
* Exibe as informações cadastradas
* Mostra uma mensagem personalizada
* Permite retornar ao formulário

## Estrutura do projeto

```text
agenda02/
├── cadastro.html
├── processaCadastro.php
├── estilo.css
└── README.md
```

## Como executar

1. Instale o XAMPP.
2. Coloque a pasta `agenda02` dentro de:

```text
C:\xampp\htdocs\
```

3. Abra o XAMPP Control Panel.
4. Inicie o servidor Apache.
5. Abra o navegador e acesse:

```text
http://localhost/agenda02/cadastro.html
```

## Dificuldade encontrada

Durante os testes, o projeto apresentava o erro **404 - Not Found**, mesmo com o Apache funcionando corretamente.

Após verificar as configurações do XAMPP e realizar alguns testes, a pasta do projeto foi renomeada de `Agenda_02_DS` para `agenda02`.

Depois dessa alteração, o projeto passou a ser acessado normalmente pelo servidor local.

## Uso de Inteligência Artificial

A Inteligência Artificial foi utilizada como apoio durante o desenvolvimento, principalmente para compreender o envio de dados pelo método `POST`, o processamento das informações com PHP e a organização do formulário com CSS.

O código recebido foi analisado, testado e adaptado durante o desenvolvimento.

## Autor

Gabriel Pasculli

