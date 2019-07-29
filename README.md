# ArraySessionHandler
CustomSessionHandler for test. This handler store by array.

https://www.php.net/manual/en/session.customhandler.php

## Usage
```php
session_set_save_handler(new SessionHandlers\ArrayHandler(), true);
```
