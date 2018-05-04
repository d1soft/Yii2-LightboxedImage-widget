yii2-lightboxedimage
===================

[![Latest Version](https://img.shields.io/github/release/wbraganca/yii2-dynamicform.svg?style=flat-square)](https://github.com/wbraganca/yii2-dynamicform/releases)
[![Software License](http://img.shields.io/badge/license-BSD3-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Total Downloads](https://img.shields.io/packagist/dt/wbraganca/yii2-dynamicform.svg?style=flat-square)](https://packagist.org/packages/wbraganca/yii2-dynamicform)


Yii2 framework widget for lightboxed images
It's extension is wrapper for javascript lightbox coded by [Lokesh Dakar](https://github.com/lokesh)

![yii2-lightboxedimage](https://image.ibb.co/j2p7Dn/image.png)

Installation
------------

The preferred way to install is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist d1soft/yii2-lightboxedimage "*"
```

or add

```
"d1soft/yii2-lightboxedimage": "*"
```

to the require section of your `composer.json` file.


Usage
-----

###View

```php
	<?= LiteboxedImage::widget([
		 'options' => [
			'src' => '/path/to/image.jpg',
			'lightboxId' => 'lightBox',
			'lightboxClass' => 'lightBoxClass',
			'lightboxStyle' => 'max-height: 350px',
			'imageId' => 'imageId',
			'imageClass' => 'imageClass',
			'imageStyle' => 'max-width: 250px',
			'title' => 'Image title',
			'alt' => 'Some image',
		 ], 
		 'clientOptions' => [
			'resizeDuration' => 200,
		   'wrapAround' => true
		 ]
	]); ?>
```

###Widget options 
	
	string src' image source path
	string alt' alternate image specified text 
	string title' image title in lightbox
	string lightboxid' lightbox id
	string lightboxClass' lightbox class 
	string lightboxStyle' lightbox inline styles
	string imageId' image container id
	string imageClass' image container class
	string imageStyle' image container inline style

Client options you can see [here](http://lokeshdhakar.com/projects/lightbox2/#options)
