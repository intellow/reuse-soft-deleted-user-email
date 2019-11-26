# Very short description of the package

[![Latest Version on Packagist](https://img.shields.io/packagist/v/intellow/reuse-soft-deleted-user-email.svg?style=flat-square)](https://packagist.org/packages/intellow/reuse-soft-deleted-user-email)
[![Build Status](https://img.shields.io/travis/intellow/reuse-soft-deleted-user-email/master.svg?style=flat-square)](https://travis-ci.org/intellow/reuse-soft-deleted-user-email)
[![Quality Score](https://img.shields.io/scrutinizer/g/intellow/reuse-soft-deleted-user-email.svg?style=flat-square)](https://scrutinizer-ci.com/g/intellow/reuse-soft-deleted-user-email)
[![Total Downloads](https://img.shields.io/packagist/dt/intellow/reuse-soft-deleted-user-email.svg?style=flat-square)](https://packagist.org/packages/intellow/reuse-soft-deleted-user-email)

This is where your description should go. Try and limit it to a paragraph or two, and maybe throw in a mention of what PSRs you support to avoid any confusion with users and contributors.

## Installation

You can install the package via composer:

```bash
composer require intellow/reuse-soft-deleted-user-email
```

## Usage
In a Laravel app with users and SoftDeletes, add the trait to your User model
``` php
class User extends Authenticatable
{
    use SoftDeletes;
    use ReuseSoftDeletedEmails;
```

Now when a user is deleted, their email in the database will change from `user@email.com` to `user@email.com1574789049_deleted` where 1574789049 is the timestamp when the user was deleted.

This allows another user to be registered with the email `user@email.com` while retaining the record of the old deleted user.

The package adds an accessor to the User model, so if you access the trashed user and get their email, you will see `user@email.com` without the appended timestamp_deleted string.

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email kevin@intellow.com instead of using the issue tracker.

## Credits

- [Intellow](https://github.com/intellow)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Laravel Package Boilerplate

This package was generated using the [Laravel Package Boilerplate](https://laravelpackageboilerplate.com).
