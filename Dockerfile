FROM php:7.3-apache
LABEL maintainer 'Jair Montoia<jair montoia at gmail com>'

RUN apt-get update && \
	apt-get install -y locales && \
	sed -i 's/^# *\(pt_BR.UTF-8\)/\1/' /etc/locale.gen && \
	locale-gen && \
	docker-php-ext-install mysqli pdo pdo_mysql && \
	rm -rf /var/lib/apt/lists/*

ENV LANG pt_BR.UTF-8  
ENV LANGUAGE pt_BR:pt:en  
ENV LC_ALL pt_BR.UTF-8 

# docker build -t montoia/php:7.3-apache .