<?php

namespace Bulaq\AliOssForm;

use Encore\Admin\Form\Field;

class Image extends Field
{
    protected $view = 'alioss-form::image';
    protected static $css = [
        'vendor/bulaq/alioss-form/style.css',
    ];
    protected static $js = [
        'vendor/bulaq/alioss-form/Sortable.min.js',
        'vendor/bulaq/alioss-form/plupload-2.1.2/js/plupload.full.min.js',
        'vendor/bulaq/alioss-form/upload.js',
    ];
    public function render()
    {
        $name = $this->formatName($this->column);
        $token = csrf_token();
        $this->script = <<<EOT
init_upload('{$name}_upload',true,'{$token}');
EOT;
        return parent::render();
    }
}