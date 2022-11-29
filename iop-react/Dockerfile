FROM alpine:3.16

LABEL org.opencontainers.image.authors="rochefeuille.ophelie@gmail.com / elodiejolo@gmail.com"

# update system & install Node js and NPM
RUN apk update \
    && apk add --update nodejs npm

# Move in home's folder and create with move to react's folder
WORKDIR /home/
RUN mkdir react
WORKDIR /react/

# Copy code machine to folder container
COPY . .

# Command npm install in folder with our react's app
RUN npm install

# Run server npm
CMD ["npm", "start"]