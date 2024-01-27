FROM debian:bullseye

LABEL "info.service"="wordpress"
LABEL "info.cadet"="gsaiago"

RUN apt-get update \
&& apt install php-fpm php-mysql -y \
&& apt install wget -y \
&& apt install mariadb-client -y \
&& wget https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar -O /tmp/wp-cli.phar \
&& mv /tmp/wp-cli.phar /usr/local/bin/wp && chmod +x /usr/local/bin/wp

COPY ./conf/www.conf /etc/php/7.4/fpm/pool.d/
COPY ./tools/wp-install.sh /usr/local/bin

HEALTHCHECK NONE

ENTRYPOINT ["sh", "/usr/local/bin/wp-install.sh"]