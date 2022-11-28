FROM alpine:3.16

RUN apk update \
    && apk add --update nodejs npm

WORKDIR /home/

RUN mkdir express
WORKDIR /express/


COPY package.json ./

RUN npm install express

COPY . .

EXPOSE 4000

CMD ["node", "index.js"]