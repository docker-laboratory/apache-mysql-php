![Last Commit][github-last-commit-image]
[![Issues][issues-image]][issues-url]

# Apache MySQL PHP Stack

Docker compose template to run Apache, MySQL, and PHP.

<!-- TABLE OF CONTENTS -->
<details open="open">
  <summary>Table of contents</summary>
  <ol>
    <li>
      <a href="#services">Services</a>
      <ul>
        <li>
          <a href="database-server">Database server</a>
        </li>
        <li>
          <a href="#web-server">Web server</a>
        </li>
      </ul>
    </li>
    <li>
      <a href="#contact">Contact</a>
    </li>
  </ol>
  
</details>

## Services

### Database server

|                |                |
| -------------- | -------------- |
| Name:          | `db-server`    |
| Port:          | `3306`         |
| Image:         | `mysql:latest` |
| Root username: | `root`         |
| Root password: | `password`     |

### Web server

|                           |                  |
| ------------------------- | ---------------- |
| Name:                     | `web-server`     |
| Port:                     | `80`             |
| Image:                    | `php:apache`     |
| Installed PHP extensions: | `mysqli`         |
| Apache entry point:       | `/php/index.php` |

## Contact

Wai Chung Wong - [Github](https://github.com/WaiChungWong) | [johnwongwwc@gmail.com](mailto:johnwongwwc@gmail.com)

[github-last-commit-image]: https://img.shields.io/github/last-commit/docker-laboratory/apache-mysql-php?style=for-the-badge
[issues-image]: https://img.shields.io/github/issues/docker-laboratory/apache-mysql-php.svg?style=for-the-badge
[issues-url]: https://github.com/docker-laboratory/apache-mysql-php/issues
