## About

Actions are pieces of code you want to execute at certain points in your code. Actions never return anything but merely serve as the option to hook in to your existing code without having to mess things up.

Filters are made to modify entities. They always return some kind of value. By default they return their first parameter and you should too. 


## Installation

1. Install using Composer

```
composer require lchhieu/do_action
```

If you're using Laravel 5.5 or later you can start using the package at this point. Eventy is auto-discovered by the Laravel framework.

2. Add the service provider to the providers array in your `config/app.php`.

```php
    'Lchhieu\DoAction\Providers\DoActionServiceProvider', 
```

3. Add the facade in `config/app.php`

```php
    'Actions'      => Lchhieu\DoAction\Facades\Actions::class,
    'Filters'      => Lchhieu\DoAction\Facades\Filters::class,
```

