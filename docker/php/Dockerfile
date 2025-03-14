FROM php:apache
RUN docker-php-ext-install mysqli &&\
     cd ~ &&\
     curl -sS https://getcomposer.org/installer -o composer-setup.php && \
     php composer-setup.php --install-dir=/usr/local/bin --filename=composer &&\
 #зайти в контейнер и проверить что композер встал как следует, проверить командой - composer
 #должно вывести ман, если не встало, тогда выйти в ~ и испольнить команду
 #composer is aliased to 'php /usr/local/bin/composer.phar'
 #    cd /var/www/html/ &&\
 # тут надо создать файл composer.json
 #{
 #    "autoload": {
 #        "psr-4": {
 #            "classes\\": "classes/"
 #        }
 #    }
 #}
 #    composer install
