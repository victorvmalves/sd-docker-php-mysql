# sd-docker-php-mysql
Aplicação exemplo com Docker - Página PHP conectando ao Mysql (containers com docker compose)


## Instalação
Use o seguinte comando para rodar a aplicação


```bash
docker-compose up -d
```

## Configuração

Renomear o arquivo .env.exemplo para .env:
```bash
mv .env.exemplo .env
```

Preencher as variáveis do arquivo .env, por exemplo:
```bash
MYSQL_ROOT_PASSWORD=root_password
MYSQL_DATABASE=base_exemplo
MYSQL_USER=user
MYSQL_PASSWORD=user_password
MYSQL_HOST=mysql
```

```bash
export DOCKER_DEFAULT_PLATFORM=linux/amd64/v2
```
OU

```bash
export DOCKER_DEFAULT_PLATFORM=linux/amd64/v8
```
