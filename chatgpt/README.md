# ChatGPT

## **部署**

```bash
docker-compose up -d
```
命令行部署
```
docker run --name openai -e PANDORA_CLOUD=cloud -e PANDORA_SERVER=0.0.0.0:8899 -p 8899:8899 -d pengzhile/pandora restart=always

```
## **获取accessToken**
```
https://chat.openai.com/api/auth/session
```

## **浏览器访问**
使用浏览器访问：`http://localhost:8899`,然后点击"**Continue with Access Token**"使用accessToken登录


## **停止并移除容器**

```bash
docker-compose down
```