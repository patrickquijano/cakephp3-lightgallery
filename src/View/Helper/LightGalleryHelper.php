<?php

namespace LightGallery\View\Helper;

use Cake\Core\Configure;
use Cake\View\Helper;

/**
 * @property \Cake\View\Helper\HtmlHelper $Html
 */
class LightGalleryHelper extends Helper {

    /**
     * @var array
     */
    protected $_defaultConfig = [
        'css' => [
            'url' => 'https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.6.12/css/lightgallery.min.css',
            'integrity' => 'sha256-8rfHbJr+ju3Oc099jFJMR1xAPu8CTPHU8uP5J3X/VAY=',
        ],
        'script' => [
            'url' => 'https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.6.12/js/lightgallery-all.min.js',
            'integrity' => 'sha256-w14QFJrxOYkUnF0hb8pVFCSgYcsF0hMIKrqGb8A7J8A=',
        ],
    ];

    /**
     * @var array
     */
    public $helpers = ['Html'];

    /**
     * @param array $options
     * @return string|null
     */
    public function css(array $options = []) {
        if (!isset($options['block'])) {
            $options['block'] = false;
        }
        $options['once'] = true;
        if (Configure::read('debug')) {
            return $this->Html->css('LightGallery.lightgallery.min', $options);
        } else {
            $options['integrity'] = $this->getConfig('css.integrity');
            $options['crossorigin'] = 'anonymous';
            return $this->Html->css($this->getConfig('css.url'), $options);
        }
    }

    /**
     * @param array $options
     * @return string|null
     */
    public function script(array $options = []) {
        if (!isset($options['block'])) {
            $options['block'] = false;
        }
        $options['once'] = true;
        if (Configure::read('debug')) {
            return $this->Html->script('LightGallery.lightgallery-all.min', $options);
        } else {
            $options['integrity'] = $this->getConfig('script.integrity');
            $options['crossorigin'] = 'anonymous';
            return $this->Html->script($this->getConfig('script.url'), $options);
        }
    }

}
