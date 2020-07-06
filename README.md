## SSP

### 环境

+ `OS`: `CentOS 7.8`
+ `Docker`：`19.03.8`
+ `Docker Compose`：`1.26.0`

### 部署

+ 拷贝代码：

```bash
rsync -azPS --delete --exclude="*.git*" docker-self-service-password VPN:/root/
```

+ 构建镜像：

```bash
cd /root/docker-self-service-password
docker build --no-cache --tag docker-self-service-password .
```

+ 编辑配置文件：

```bash
vim /data/self-service-password/config.inc.php
```

+ 启动容器：

```bash
docker-compose up -d
```

+ 进入容器：

```bash
docker exec -it self-service-password bash
```

***
