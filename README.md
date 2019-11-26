# Reuse Soft Deleted Emails

[![Latest Version on Packagist](https://img.shields.io/packagist/v/intellow/reuse-soft-deleted-user-email.svg?style=flat-square)](https://packagist.org/packages/intellow/reuse-soft-deleted-user-email)
[![Build Status](https://img.shields.io/travis/intellow/reuse-soft-deleted-user-email/master.svg?style=flat-square)](https://travis-ci.org/intellow/reuse-soft-deleted-user-email)
[![Quality Score](https://img.shields.io/scrutinizer/g/intellow/reuse-soft-deleted-user-email.svg?style=flat-square)](https://scrutinizer-ci.com/g/intellow/reuse-soft-deleted-user-email)
[![Total Downloads](https://img.shields.io/packagist/dt/intellow/reuse-soft-deleted-user-email.svg?style=flat-square)](https://packagist.org/packages/intellow/reuse-soft-deleted-user-email)

When you soft delete a user in Laravel, that email cannot be registered again since the email field on the users table must be unique.

This package solves this problem and allows you to soft delete a user record, retain the original email as history, and still register a new user account with the same email address.

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

### Expiration Date

Please note this package will cease to work on Sat 20 Nov 2286 05:46:40 PM UTC when the unix timestamp adds an 11th digit.

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
