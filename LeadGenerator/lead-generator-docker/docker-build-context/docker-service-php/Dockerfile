FROM php:7.4-fpm

WORKDIR /var/www/lead-generator

RUN cp /usr/local/etc/php-fpm.d/www.conf.default /usr/local/etc/php-fpm.d/www.conf

RUN echo 'debconf debconf/frontend select Noninteractive' | debconf-set-selections

# Make sure apt is up to date
RUN apt-get -qq update -y --fix-missing

# Install packages
RUN apt-get -qq install -y --no-install-recommends \
    curl \
    unzip \
    build-essential \
    openssl \
    gcc make

# Cleanup
RUN apt-get -qq clean
RUN rm -fr /var/lib/apt/lists/* /tmp/* /var/tmp/*

# Install gd extension
RUN docker-php-ext-configure gd --with-freetype --with-jpeg
RUN docker-php-ext-install gd

# Install intl extension
RUN docker-php-ext-configure intl
RUN docker-php-ext-install intl
RUN docker-php-ext-enable intl

# Install pdo_mysql, bcmath, zip, pcntl extensions
RUN docker-php-ext-install pdo_mysql
RUN docker-php-ext-install bcmath
RUN docker-php-ext-install zip
RUN docker-php-ext-install pcntl
RUN docker-php-ext-install soap
RUN docker-php-ext-install sockets



# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

CMD [ "php-fpm" ]
