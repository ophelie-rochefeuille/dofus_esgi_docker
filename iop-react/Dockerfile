FROM alpine:latest

RUN apk update \
    && apk add --update nodejs npm

WORKDIR /home/

RUN mkdir react

WORKDIR /react/



COPY . .

RUN npm install

CMD ["npm", "start"]