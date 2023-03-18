FROM yourls:1.9-apache

RUN mkdir -p /usr/src/yourls/user/plugins/discourse/; \
  curl -o /usr/src/yourls/user/plugins/discourse/plugin.php https://raw.githubusercontent.com/paroga/yourls-discourse/v1.0/plugin.php

COPY background.jpg index.php /usr/src/yourls/
