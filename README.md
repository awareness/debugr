debugr
======

Quick and easy debugging for laravel

## Usage

Add Debugr to your `composer.json`:

```js
{ // composer.json
  ...
  "require": {
    "awareness/debugr": "dev-master"
  },
  ...
}
```

Add an alias in `app/config/app.php`:

```php
<?php

return array(
  // ...
  'aliases' => array(
    // ...
    'Debugr' => 'Awareness\Debugr\Facades',
    // ...
  )
  // ...
);
```

... and the service provider (also in `app/config/app.php`):

```php
<?php

return array(
  // ...
  'providers' => array(
    // ...
    'Awareness\Debugr\DebugrServiceProvider',
    // ...
  )
  // ...
);
```

Debug!!!

```php
$stuff = 'things';
Debug::dump($stuff); //=> things
```

