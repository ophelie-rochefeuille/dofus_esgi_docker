FROM alpine:3.16

RUN apk update \
    && apk add --update nodejs npm

WORKDIR /home/

RUN mkdir react

WORKDIR /react/



COPY . .

RUN npm install

CMD ["npm", "start"]