# Dummy makefile to trigger the build script
all:
	php build.php 

redo:
	php build.php clean
	php build.php

clean:
	php build.php clean
