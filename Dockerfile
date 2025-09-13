FROM php:8.4.13RC1-zts-bookworm

WORKDIR /app

COPY package*.json ./

RUN npm install

COPY . .

ENV PORT=8080

EXPOSE 8080

CMD ["symfony server:stop","symfony server:start"]