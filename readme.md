## Wordpress Empty Custom Theme

## Requirements

```

You should have Node installed Globaly

```

## Setup in Local


```
Please create a database and update these lines in wp-config.php

/** The name of the database for WordPress */
define('DB_NAME', 'yourdbname');

/** MySQL database username */
define('DB_USER', 'yourusername');

/** MySQL database password */
define('DB_PASSWORD', 'yourpassword');

/** MySQL hostname */
define('DB_HOST', 'yourhost');

```

## Run Gulp

```
1. Open the project 
cd /path/to/your/directory

2. Init dependencies
npm install

3. Run watch task
gulp watch

```
