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

## Active Blank Theme


```
Please launch the project and active the 'blank' custom theme
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

## Refract Blank Theme

```
1. Rename the project directory wp-content/themes/blank = wp-content/themes/your_project_name
2. Edit the params of the theme in wp-content/themes/your_project_name/style.css
```

