# Laravel Mail Test

This package provides handy commands to quickly test the mailer connection.

## Installation

```
composer require webhubworks/laravel-mail-test
```

## Usage

To send a test mail to the specified address immediatly run the following command:
```
php artisan mail-test:send-now hello@example.com
```

To queue a mail that should be sent to the specified address run the following command:
```
php artisan mail-test:queue hello@example.com
```

## Feedback

If you have any feedback, please reach out to us at hello@webhub.de or use a GitHub issue.


## License

[MIT](https://choosealicense.com/licenses/mit/)


## Authors

Brought to you by [@webhubworks](https://github.com/webhubworks).
