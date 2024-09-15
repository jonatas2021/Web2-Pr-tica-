# Gerar Chave de Criptografia do Laravel

Este documento fornece um guia sobre como gerar e configurar a chave de criptografia para um aplicativo Laravel.

## O Que É a Chave de Criptografia?

A chave de criptografia do Laravel é uma chave secreta usada para criptografar dados sensíveis, como sessões e cookies. É crucial para a segurança do seu aplicativo, pois garante que os dados criptografados não possam ser lidos por terceiros.

## Gerando a Chave de Criptografia

Para gerar uma chave de criptografia para seu aplicativo Laravel, siga os passos abaixo:

1. **Acesse o Terminal**

   Abra o terminal na raiz do seu projeto Laravel.

2. **Execute o Comando para Gerar a Chave**

   Digite o seguinte comando para gerar uma nova chave de criptografia:

   ```bash
   php artisan key:generate

## Configuração do Armazenamento de Arquivos Públicos

Para garantir que arquivos armazenados no diretório de armazenamento sejam acessíveis publicamente, você precisa criar um link simbólico entre o diretório de armazenamento e o diretório público do seu projeto Laravel.

### Comando Necessário

Para criar esse link simbólico, execute o seguinte comando:

```bash
php artisan storage:link
