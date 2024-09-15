## Configuração do Armazenamento de Arquivos Públicos

Para garantir que arquivos armazenados no diretório de armazenamento sejam acessíveis publicamente, você precisa criar um link simbólico entre o diretório de armazenamento e o diretório público do seu projeto Laravel.

### Comando Necessário

Para criar esse link simbólico, execute o seguinte comando:

```bash
php artisan storage:link
