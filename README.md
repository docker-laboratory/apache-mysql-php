# Apache MySQL PHP Stack

Docker running Apache, MySQL, and PHP.

## Services

| Service     | Description            | Container name | Port   | Image used     |
| ----------- | ---------------------- | -------------- | ------ | -------------- |
| Web Service | Apache server with PHP | `web-server`   | `80`   | `php:apache`   |
| Database    | MySQL server           | `db-server`    | `3306` | `mysql:latest` |
