debugr
======

Quick and easy debugging for laravel

## Usage

Add Debugr to your `composer.json`:

```
{ // composer.json
  ...
  "require": {
    "awareness/debugr": "dev-master"
  },
  ...
}
```

Add an alias in `app/config/app.php`:

```
<?php

return array(

  // ...

  'aliases' => array(
    // ...
    'Debug' => 'Awareness\Debugr\Debugr',
    // ...
  )

  // ...

);
```

Debug!!!

```
$stuff = 'things';
Debug::dump($stuff); //=> things
```
