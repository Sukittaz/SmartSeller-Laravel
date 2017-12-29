FROM php:7.1-fpm

# Install nginx
RUN apt-key adv --keyserver hkp://pgp.mit.edu:80 --recv-keys 573BFD6B3D8FBC641079A6ABABF5BD827BD9BF62 \
    && echo "deb http://nginx.org/packages/mainline/debian/ jessie nginx" >> /etc/apt/sources.list \
    && apt-get update \
    && apt-get install --no-install-recommends --no-install-suggests -y \
        ca-certificates \
        nginx \
        nginx-module-xslt \
        nginx-module-geoip \
        nginx-module-image-filter \
        nginx-module-perl \
        nginx-module-njs \
        gettext-base \
    && rm -rf /var/lib/apt/lists/*

# forward request and error logs to docker-config-files log collector
RUN ln -sf /dev/stdout /var/log/nginx/access.log \
    && ln -sf /dev/stderr /var/log/nginx/error.log

# Declare some Envs variables
ENV APPLICATION_ENV prod
ENV SERVER_NAME acl.lojaskd.com.br
ENV INDEX_FILE app.php

# Set default workdir
WORKDIR /var/www/smartseller

# Install php libs
RUN docker-php-ext-install -j$(nproc) \
    bcmath \
    mbstring \
    opcache \
    pdo_mysql  \
    pdo

COPY docker-config-files/nginx.conf /etc/nginx/nginx.conf
COPY docker-config-files/default.conf /etc/nginx/conf.d/default.conf.template

CMD /bin/bash -c "envsubst '\$SERVER_NAME \$APPLICATION_ENV \$INDEX_FILE' < /etc/nginx/conf.d/default.conf.template > /etc/nginx/conf.d/default.conf" \
    && nginx -g 'daemon off;' & php-fpm
