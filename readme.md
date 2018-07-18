## Wordpress Empty Custom Theme

## Requirements

```

You should have Node installed Globaly

```

## Setup in Local


```
Please create a database and add wp-config.php file with these lines :

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

Some bugs can be present with gulp-autoprefixer when you launch gulp.
If is your case, juste remove "gulp-autoprefixer": "^3.1.1", in the package.json file
and npm install again

```

## Refract Blank Theme

```
1. Rename the project directory wp-content/themes/blank = wp-content/themes/your_project_name
2. Edit the params of the theme in wp-content/themes/your_project_name/style.css
3. Update the gulpfile.js, add your theme dirctory name in 

var theme = path.join(__dirname, 'wp-content/themes/yourtheme');

```

