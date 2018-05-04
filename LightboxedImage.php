<?php
namespace d1soft\widgets;

use Yii;
use yii\helpers\BaseHtml;
use yii\helpers\ArrayHelper;
use yii\helpers\JsonHelper;
use d1soft\widgets\LightboxedImageAsset;

/**
 * LightboxedImage widget render image with lightbox. 
 * It's wrapper for lightbox on javascript coded by Lokesh Dhakar
 * @see http://lokeshdhakar.com/projects/lightbox2/
 * ```php
 *    LiteboxedImage::widget([
 *		 'options' => [
 *			'src' => '/path/to/image.jpg',
 *			'lightboxId' => 'lightBox',
 *			'lightboxClass' => 'lightBoxClass',
 *			'lightboxStyle' => 'max-height: 350px',
 *			'imageId' => 'imageId',
 *			'imageClass' => 'imageClass',
 *			'imageStyle' => 'max-width: 250px',
 *			'title' => 'Image title',
 *			'alt' => 'Some image',
 *		 ], 
 *		 'clientOptions' => [
 *			'resizeDuration' => 200,
            'wrapAround' => true
 *		 ]
 *   ]);
 * ```
 *
 * @author Lokesh Dhakar <lokesh.dhakar@gmail.com>
 * @author d1soft <cloudma001@yandex.ru>
 */
class LightboxedImage extends \yii\base\Widget
{
	/**
	 * @var array widget options list
	 * 
	 * Possible options: 
	 * @var string 'src' image source path
	 * @var string 'alt' alternate image specified text 
	 * @var string 'title' image title in lightbox
	 * @var string 'lightboxid' lightbox id
	 * @var string 'lightboxClass' lightbox class 
	 * @var string 'lightboxStyle' lightbox inline styles
	 * @var string 'imageId' image container id
	 * @var string 'imageClass' image container class
	 * @var string 'imageStyle' image container inline style
	 */
	public $options = [];
	
    /**
     * @var array client options 
     * @see http://lokeshdhakar.com/projects/lightbox2/#options
     */
    public $clientOptions;

    public function init()
    {		
        $view = $this->getView();
        LightboxedImageAsset::register($view);
		$options = Json::encode($this->clientOptions);
        $clientScript = "lightbox.option($options)";
        $view->registerJs($clientScript);
		parent::init();
    }
	
    /**
     * {@inheritdoc}
     */
    public function run()
    {
		$this->prepareOptions();
		
        $image =  BaseHtml::tag('img', '', [
            'id' => $this->options['imageId'],
            'src' => $this->options['src'],
            'class' => $this->options['imageClass'],
            'style' => $this->options['imageStyle']
        ]);

        return BaseHtml::tag('a', $image, [
            'data' => $this->options['data'],
            'href' => $this->options['src'],
            'class' => $this->options['lightboxClass'],
			'style' => $this->options['lightboxStyle']
        ]);
    }
	
	/**
     * Prepare widget options
	 *
	 * @param array $options widget options
	 * @return void
	 */
	private function prepareOptions()
	{
		$id = $this->getId();
		if(!isset($this->options['lightboxId'])){
			$this->options['lightboxId'] = $id;
		}
		
		if(isset($this->options['title']){
			$this->options['data']['title'] = $options['title'];
			unset($this->options['title'])
		}
		
		if(isset($this->options['alt']){
			$this->options['data']['alt'] = $options['alt'];
			unset($this->options['alt']);
		}
		
		$this->options['data']['lightbox'] = $id;
	}
}