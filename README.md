# Agenda Eletrônica

Este projeto é uma aplicação web para gerenciamento de atividades. Os usuários podem se registrar, fazer login, cadastrar atividades e visualizar essas atividades em um calendário. Embora algumas funcionalidades não tenham sido implementadas devido ao tempo, as principais estão operacionais. Existem alguns erros (fatal errors) que aparecem durante a execução, mas eles não influenciam no resultado final da aplicação, tanto na interface quanto no banco de dados.

## Índice

- [Tecnologias Utilizadas](#tecnologias-utilizadas)
- [Instalação](#instalação)
- [Uso](#uso)
- [Estrutura do Banco de Dados](#estrutura-do-banco-de-dados)
- [Funcionalidades](#funcionalidades)

## Tecnologias Utilizadas
- **PHP**: 8.2.12
- **MySQL**: 10.4.32-MariaDB
- **Apache**: 2.4.58
- **Bootstrap**: 4.0.0
- **jQuery**: 3.6.0
- **CodeIgniter**: 4.5.5

## Instalação

1. **Clone o repositório:**
   ```bash
   git clone <URL do repositório>
   ```
2. **Coloque o diretório `agenda-eletronica` dentro da pasta `htdocs` do XAMPP.**
3. **Crie o banco de dados:**
   - Nome do banco de dados: `agenda_db`
4. **Importe o arquivo SQL de criação de tabelas, se necessário.**
5. **Inicie o servidor Apache e MySQL no XAMPP.**
6. **Acesse a aplicação através do navegador:**
   ```plaintext
   http://localhost/agenda-eletronica/public/
   ```

## Uso

- **Registrar Usuário**: Acesse a página de registro e preencha os campos necessários.
- **Login**: Após o registro, faça login com suas credenciais.
- **Gerenciar Atividades**: Você poderá criar, visualizar, editar e deletar atividades.

## Estrutura do Banco de Dados

### Tabelas

- **Tabela: `users`**
  - `id` (INT, AUTO_INCREMENT, PRIMARY KEY)
  - `login` (VARCHAR)
  - `password` (VARCHAR)

- **Tabela: `activities`**
  - `id` (INT, AUTO_INCREMENT, PRIMARY KEY)
  - `user_id` (INT, FOREIGN KEY)
  - `name` (VARCHAR)
  - `description` (TEXT)
  - `start_datetime` (DATETIME)
  - `end_datetime` (DATETIME)
  - `status` (VARCHAR)

## Funcionalidades

- Cadastro e autenticação de usuários. (FEITO)
- CRUD (Criar, Ler, Atualizar, Deletar) de atividades. (FEITO)
- Exibição de atividades em um calendário. (NÂO REALIZADO)

