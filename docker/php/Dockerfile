FROM php:7.2.30-fpm-alpine

WORKDIR /app

#VOLUME .:/app

#COPY . /app/

RUN set -ex \
#	&& docker-php-ext-install bcmath mysqli pcntl pdo_mysql \
#	&& apk add --no-cache su-exec \
	&& rm -f /var/cache/apk/* \
	&& deluser www-data \
	&& addgroup -g 1000 -S www-data \
	&& adduser -u 1000 -S -G www-data -s /bin/sh -D www-data \
	&& chown -R www-data:www-data /app \
#run as root because of mounted dir in virtual box
	&& sed -i -- 's/^user = www-data*/user = root/g' /usr/local/etc/php-fpm.d/www.conf \
	&& sed -i -- 's/^group = www-data*/group = root/g' /usr/local/etc/php-fpm.d/www.conf

CMD ["php-fpm", "-R"]

EXPOSE 9000
