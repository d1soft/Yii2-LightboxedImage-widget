yii2-lightboxedimage
===================

Yii2 framework widget for lightboxed images.
It extension is wrapper for javascript lightbox coded by [Lokesh Dakar](https://github.com/lokesh)

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

### View

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

### Widget options 
	
	src image source path
	alt alternate image specified text 
	title image title in lightbox
	lightboxid lightbox id
	lightboxClass lightbox class 
	lightboxStyle lightbox inline styles
	imageId image container id
	imageClass image container class
	imageStyle image container inline style

Client options you can see [here](http://lokeshdhakar.com/projects/lightbox2/#options)
