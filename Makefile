all:

FILES = sign1-en.html style.css sign1-ship1-1920.png \
	sign1-ship1-600.png \
	sign1-portrait-600.png \
	sign1-ad3-600.png \
	sign1-model-600.png \
	background1-1180.png \
	background1-600.png \
	index.php

publish:
	rsync $(FILES) willisson.org:/var/www/fbhw/
