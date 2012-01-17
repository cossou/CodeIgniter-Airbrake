CodeIgniter Airbrake Library
============================

Just a small library for Airbrake based on [PHP Airbrake](https://raw.github.com/nodrew/php-airbrake/) from Drew Butler.

#Usage

Get the last version of https://github.com/nodrew/php-airbrake/ and put it in the third_party folder.
Put your API in the config/airbrake.php and then:

```php
<?php

$this->load->library('AirbrakeCI');

// Send a error message
$airbrakeci->notifyOnError('Error message'); 

// Or send an exception that may have been generated or caught.
try {
    throw new Exception('This is my exception');

} catch (Exception $exception) {
    $airbrakeci->notifyOnException($exception);
}

```

