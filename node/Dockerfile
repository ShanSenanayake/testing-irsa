FROM node:12.13.0-slim
LABEL maintainer "shan.senanayake@jayway.com"

ENV INTERVAL_TIMER="1000"

RUN mkdir -p /usr/src && chown -R node:node /usr/src

WORKDIR /usr/src

USER node
COPY --chown=node:node package.json yarn.lock index.js ./

RUN yarn install --non-interactive --silent --frozen-lockfile --production=false && \
    yarn cache clean

CMD ["yarn", "start"]