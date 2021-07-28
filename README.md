# CodeIgniter 4 Framework

``` sh
 > git clone https://github.com/margensis/codeigniter4-crud.git
 > cd codeigniter4-crud
 > composer install
 > php spark serve
```
## Reminders: Don't forget to update php.ini

In `php.ini` just enable the `extension=intl`

## Important Change with index.php

`index.php` is no longer in the root of the project! It has been moved inside the *public* folder,
for better security and separation of components.

This means that you should configure your web server to "point" to your project's *public* folder, and
not to the project root. A better practice would be to configure a virtual host to point there. A poor practice would be to point your web server to the project root and expect to enter *public/...*, as the rest of your logic and the
framework are exposed.

The user guide corresponding to this version of the framework can be found
[here](https://codeigniter4.github.io/userguide/).

**Please** read the user guide for a better explanation of how CI4 works!

