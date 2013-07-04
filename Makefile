# Dummy makefile to trigger the build script
all:
	php build.php 

redo:
	rm -rf web/
	php build.php

clean:
	rm -rf web/
