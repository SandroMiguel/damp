# docker-web-dev

[![license](https://img.shields.io/badge/License-MIT-blue.svg?style=flat)](LICENSE)

Docker container with PHP, Apache, MySQL and phpMyAdmin

## Table of Contents

1. [Installation](#installation)
1. [Usage](#usage)

## Installation

Docker + Docker Compose

```sh
sudo apt install docker docker-compose
docker image ls <<<--- error
```

```sh
sudo groupadd docker
sudo usermod -aG docker $USER
newgrp docker
docker image ls <<<--- ok
```

## Usage

Start the container

```sh
docker-compose up
```

### Apps

http://localhost:8000/

#### My Dashboard

http://localhost:8000/my-dashboard/index.htm

#### Specific app

http://localhost:8000/sapatrilhas.pt/

#### phpMyAdmin

http://localhost:8080/
