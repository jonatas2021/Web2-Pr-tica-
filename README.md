# Biblioteca Laravel

Um aplicativo Laravel para gerenciamento de biblioteca com suporte para diferentes papéis de usuários.

## Instalação e Configuração

1. **Clone o repositório:**

    ```bash
    git clone https://github.com/seu-usuario/seu-repositorio.git
    cd seu-repositorio
    ```

2. **Instale as dependências:**

    ```bash
    composer install
    ```

3. **Configure o ambiente:**

    Copie `.env.example` para `.env`:

    ```bash
    cp .env.example .env
    ```

4. **Gere a chave de criptografia:**

    ```bash
    php artisan key:generate
    ```

5. **Crie o link simbólico para o armazenamento de arquivos públicos:**

    ```bash
    php artisan storage:link
    ```

6. **Prepare o banco de dados:**

    Execute migrações e seeders:

    ```bash
    php artisan migrate --seed
    ```

7. **Usuários padrão:**

    - **Admin**: `admin@biblioteca.com` / `admin123`
    - **Bibliotecario**: `bibliotecario@biblioteca.com` / `password123`
    - **Cliente**: `cliente@biblioteca.com` / `password123`

8. **Inicie o servidor:**

    ```bash
    php artisan serve
    ```

    Acesse o aplicativo em `http://localhost:8000`.

## Contribuição

Envie pull requests para contribuir.

## Licença

Licenciado sob a [Licença MIT](LICENSE).
