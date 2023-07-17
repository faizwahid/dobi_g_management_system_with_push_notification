Hi,

this file need to be edited since it was deploy.

Step.
1.app/config/config.php
- change the database connection host, user, pass and database name.
- change the URL root = http://localhost/dobiG
- if you want to run on a hosting please on ssl certificaste and change http into https.
- the URL should be based on where you want to run it.

2.public/.htaccess
-change the RewriteBase = /dobi/public to run on localhost
-if you want to run on a hosting please edit this RewriteBase= /public
