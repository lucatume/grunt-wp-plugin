#WordPress plugin grunt-init template

A [grunt-init](http://gruntjs.com/project-scaffolding "Project Scaffolding - Grunt: The JavaScript Task Runner") template to quickly scaffold WordPress plugins with PHP 5.2 compatibility using [Composer](https://getcomposer.org/) and [Bower](http://bower.io/) to manage dependencies. 

## Usage
Presuming `grunt-init` installed clone the repository in the `~/.grunt-init` folder

    git clone https://github.com/lucatume/grunt-wp-plugin ~/.grunt-init

navigate to the plugins folder of the WordPress installation and create a new plugin folder

    mkdir my-plugin && cd $_

and scaffold the plugin into it

    grunt-init wp-plugin

`grunt-init` will make some questions and will generate the files, update node modules and [Composer](https://getcomposer.org/) to finish

    npm install && composer update

Keep managing dependencies using [Composer](https://getcomposer.org/) and [Bower](http://bower.io/), use `grunt watch` to have real-time compilation and clean dependencies before release

    grunt after-composer-update