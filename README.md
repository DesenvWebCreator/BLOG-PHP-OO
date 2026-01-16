# BLOG-PHP-OO
PHP MYSQL DOCKER POO
# Meu Blog Pessoal (PHP OO)

Este projeto é um sistema de blog dinâmico desenvolvido em PHP utilizando o paradigma de Orientação a Objetos. A aplicação consome dados de um banco MySQL externo e foi containerizada com Docker para facilitar o deploy em nuvem.

## 🛠 Tecnologias Utilizadas

As principais ferramentas e linguagens aplicadas neste projeto foram:

- **PHP 8.2**: Linguagem de back-end utilizada com extensão `mysqli` e Orientação a Objetos.
- **MySQL**: Banco de dados relacional (Hospedado no Aiven).
- **Docker**: Utilizado para criar a imagem do servidor (Apache + PHP) garantindo que o ambiente de produção (Render) seja idêntico ao de desenvolvimento.
- **HTML5 & CSS3**: Estrutura semântica e estilização.
- **W3.CSS**: Framework CSS utilizado para agilizar o design responsivo e componentes visuais (cards, botões, grid).
- **Apache**: Servidor web configurado via Dockerfile.
- **Git**: Controle de versão.

## 🚀 Funcionalidades

- **Conexão Segura**: Utiliza variáveis de ambiente (`ENV`) para proteger as credenciais do banco de dados.
- **Renderização Dinâmica**: O conteúdo (postagens, apresentações) é carregado diretamente do banco de dados.
- **Arquitetura Modular**: O código é dividido em componentes (Header, Body, Footer) para facilitar a manutenção.

## ☁️ Deploy

O projeto está hospedado no **Render**, conectado a um banco de dados **Aiven**, utilizando integração contínua via GitHub.

---

_Desenvolvido para fins de estudo e portfólio._
