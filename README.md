# DAMP

[![license](https://img.shields.io/badge/License-MIT-blue.svg?style=flat)](LICENSE)

Docker setup with Apache, MySQL and PHP plus phpMyAdmin

## Table of Contents

1. [Installation](#installation)
1. [Usage](#usage)
1. [Contributing](#contributing)
1. [Questions](#questions)

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

#### Specific app

http://localhost:8000/some-website.com/

### phpMyAdmin

http://localhost:8080/

## Contributing

Want to contribute? All contributions are welcome. Please read the [contributing guide](CONTRIBUTING.md).

## Questions

If you have questions tweet me at [@sandro_m_m](https://twitter.com/sandro_m_m) or [open an issue](../../issues/new).

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details

**~ sharing is caring ~**
