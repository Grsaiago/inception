FROM debian:bullseye

LABEL "info.service"="mariadb"
LABEL "info.cadet"="gsaiago"

RUN apt-get update \
&& apt install -y mariadb-server

RUN mariadb-install-db --user=mysql --basedir=/usr --datadir=/database

COPY conf/50-server.cnf /etc/mysql/mariadb.conf.d/50-server.cnf

COPY ./tools/create-db.sh /bin

HEALTHCHECK --interval=10s --timeout=3s --start-period=10s --retries=2 \
    CMD mysqladmin ping -u root || exit 1

ENTRYPOINT [ "sh", "/bin/create-db.sh" ]