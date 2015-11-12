Software 3308 - Group 1
======

Here lies our site.

## Image Compression
**Every time** you add an image, perform a lossless compression. Until this is put into a build script you need to do it manually with the following.

    optipng  img/*.png
    jpegoptim img/*.jpg

## Install and Run Locally

    git clone https://github.com/leif-waldner/Software3308-Group1.git
    cd Software3308-Group1
    python -m SimpleHTTPServer

Then go to http://localhost:8080

## Style Guidelines

In addition, all links should contain the HTML target attribute "_blank".

