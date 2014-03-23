## Sleepy web application starter template

### Introduction

This is a starter template for making your own web application based on Sleepy.

The template uses parts of the HTML5 Boilerplate project for the default layout
file and a couple of other parts, Bootstrap 3 as a front-end framework, jQuery and
Require.js for Javascript. Of course, you are free to rip everything out and do
your own thing. We don't judge.

### Installation/Configuration

Applications based on the starter template can be installed just like any other
PHP-based webpage. Assuming you've already set up your web-server to serve PHP
files properly, simply copy the template into the appropriate directory and set
the root to the *"webroot"* subdirectory.

To run requests against the server, you will need to assign the application an
**authorization key**. Cecil creates a unique authkey along with the database when
creating a new user, which can be used for authenticating an application.
Otherwise, you can obtain an authkey by running ```sleepyd user -a``` on the server
hosting the Sleepy server daemon.

Once you have obtained an authkey, simply set it in the *"authkey"* field of the
**"config.php"** configuration file, and you're good to go!

## Documentation

More documentation on creating a simple Sleepy web application, along with more
information on Sleepy's internals will follow.

## License

The starter template is licensed under the Public Domain, or the CC0, if your
country doesn't recognize works under the Public Domain.
