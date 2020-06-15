FROM php:7.4-cli

COPY . ./

RUN ["apt-get","update"]
RUN ["chmod", "777","install.sh"]
RUN ["./install.sh"]
# RUN ["composer", "require", "aws/aws-sdk-php"]
RUN ["php", "composer.phar", "install"]

CMD ["php", "index.php"]