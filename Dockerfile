FROM alpine:latest

LABEL maintainer="YuXiao(xiao.950901@gmail.com)"

ENV SSP_VERSION 1.3

RUN \
  echo 'http://dl-cdn.alpinelinux.org/alpine/edge/testing/' >> /etc/apk/repositories && \
  sed -i 's/dl-cdn.alpinelinux.org/mirrors.aliyun.com/g' /etc/apk/repositories && \
  apk update && apk upgrade && \
  apk add -u bash gettext curl php7 php7-apache2 php7-openssl php7-xml php7-mbstring php7-mcrypt php7-ldap php7-curl && \
  curl -fsSLO --compressed https://github.com/ltb-project/self-service-password/archive/v${SSP_VERSION}.tar.gz && \
  rm -rf /var/www/localhost/htdocs/* && \
  tar -zxf v${SSP_VERSION}.tar.gz -C /var/www/localhost/htdocs --strip-components=1 --no-same-owner && \
  rm -f v${SSP_VERSION}.tar.gz && \
  rm -rf /tmp/* /var/tmp/* /var/cache/apk/* /var/cache/distfiles/*

EXPOSE 80

STOPSIGNAL SIGTERM

CMD ["httpd", "-D", "FOREGROUND"]
