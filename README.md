# Mezzio Skeleton and Installer

## Getting Started

###Installation Project

```bash
$ docker-compose up -d --build
$ docker-compose exec api composer install
$ docker-compose exec api ./vendor/bin/laminas mezzio:swoole:start
```

### Urls
```
 http://localhost:8083/
 http://localhost:8083/test
 http://localhost:8083/api/ping
```
