# Course - Modeling Data with WordPress

It uses 🐳 [Docker](http://docker.com/) for running.

## 🔧 Prerequisites
* PHP 8
* Docker
* Docker Compose

## 🐳 Docker Install

### Docker setup

```bash
cp docker-compose.override-example.yml docker-compose.override.yml
```

Update any values as needed, example when you already have a local MySQL server using port 3306:

```yml
# Database
db:
  ports:
    - "13306:3306"
```

### Project bootstrap

    docker compose up --build -d

### Project setup

Once the project up and running via Docker, you may need to install WordPress and enable your theme.

## 🎨 Build the theme

Your own theme must be in the `./themes` directory.

```bash
cp ./themes/example ./themes/your-theme-name
```
