FROM alpine:3.16

LABEL org.opencontainers.image.authors="rochefeuille.ophelie@gmail.com / elodiejolo@gmail.com"

# Install Node js & NPM
RUN apk update \
    && apk add --update nodejs npm

# Move to home's folder & create and move to express's folder
WORKDIR /home/

RUN mkdir express
WORKDIR /express/

# Copy package.json's file in folder express for good functional express js
COPY package.json ./

# NPM install express js
RUN npm install express

# Copy code machine to folder container
COPY . .

#NPM install nodemon with params global for start express js
RUN npm install nodemon -g

# Open port 4000 for express js
EXPOSE 4000

# start serve nodemon for express js
CMD ["nodemon"]