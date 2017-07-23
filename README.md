# Project Title

Ellee Bakery

## Project Description

This was my first PHP project. It primarily uses PHP for templating, but also is used to submit forms to email. The deployed site can be found at www.elleebakery.com

### Things to know

To test the site, a local server will need to be running, or the deployed version of this site can be found at www.elleebakery.com. Each page has a TITLE constant and a BODYID constant. The title constant is used in the title of each page. The body id helps determine which image is used as a background.

The header and footer is the the same for each page. The gallery images and social media icons are being rendered from the arrays.php file.

On the landing page, all of these gallery images are preloaded using the 'preload' function. This allows the gallery page to load very quickly, because the images are now cached. Additionally, the subsequent images on the landing page rendered upon load, but hidden, making the first time through the cycle of images transition smoothly.

The Frequently Asked Question categories are displayed on and off by click using jQuery. It is toggling the 'hide' class.

In the future, this page will be refactored to NodeJS and will have a blog section.
