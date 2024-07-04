# sd-docker-php-mysql
Aplicação exemplo com Docker - Página PHP conectando ao Mysql (containers com docker compose)

## Configuração

1. Renomear o arquivo .env.exemplo para .env:
```bash
mv .env.example .env
```

2. Preencher as variáveis do arquivo .env, por exemplo:
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

## Instalação
1. Use o seguinte comando para rodar a aplicação

```bash
docker-compose up -d
```
