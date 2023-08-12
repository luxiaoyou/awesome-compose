# php lamp 开发环境

## **构建新镜像**

因为php:7.4-apache镜像默认没有`mysqli`，如果你不需要`mysqli`只需要将`php:7.4-apache-mysqli`修改成`php:7.4-apache`,

**下载PHP源码**

```bash
wget https://www.php.net/distributions/php-7.4.33.tar.gz
```
**构建镜像**

```bash
docker build --no-cache -t php:7.4-apache-mysqli .
```
## **部署**

```bash
docker-compose up -d
```

## **测试**

```bash
curl http://localhost:8000
```

## **停止并移除容器**

```bash
docker-compose down
```