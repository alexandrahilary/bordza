<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'fos_ck_editor.configuration' shared service.

include_once $this->targetDirs[3].'/vendor/friendsofsymfony/ckeditor-bundle/src/Config/CKEditorConfigurationInterface.php';
include_once $this->targetDirs[3].'/vendor/friendsofsymfony/ckeditor-bundle/src/Config/CKEditorConfiguration.php';

return $this->services['fos_ck_editor.configuration'] = new \FOS\CKEditorBundle\Config\CKEditorConfiguration(['configs' => ['my_config_1' => ['toolbar' => 'my_toolbar_1', 'uiColor' => '#cccccc']], 'toolbars' => ['configs' => ['my_toolbar_1' => [0 => [0 => 'Cut', 1 => '-', 2 => 'Copy', 3 => '-', 4 => 'Paste', 5 => '-', 6 => 'Undo', 7 => '-', 8 => 'Redo'], 1 => [0 => 'Format', 1 => '-', 2 => 'FontSize', 3 => '-', 4 => 'Colors'], 2 => [0 => 'Link', 1 => '-', 2 => 'Unlink', 3 => '-', 4 => 'Table', 5 => '-', 6 => 'HorizontalRule', 7 => '-', 8 => 'Smiley', 9 => '-', 10 => 'SpecialChar'], 3 => '/', 4 => [0 => 'Bold', 1 => '-', 2 => 'Italic', 3 => '-', 4 => 'Underline', 5 => '-', 6 => 'Strike', 7 => '-', 8 => 'Subscript', 9 => '-', 10 => 'Superscript', 11 => '-', 12 => 'RemoveFormat'], 5 => [0 => 'Outdent', 1 => '-', 2 => 'Indent', 3 => '-', 4 => 'JustifyLeft', 5 => '-', 6 => 'JustifyCenter', 7 => '-', 8 => 'JustifyRight', 9 => '-', 10 => 'JustifyBlock', 11 => '-', 12 => 'Maximize']]], 'items' => []], 'enable' => true, 'async' => false, 'auto_inline' => true, 'inline' => false, 'autoload' => true, 'jquery' => false, 'require_js' => false, 'input_sync' => false, 'base_path' => 'bundles/fosckeditor/', 'js_path' => 'bundles/fosckeditor/ckeditor.js', 'jquery_path' => 'bundles/fosckeditor/adapters/jquery.js', 'default_config' => NULL, 'plugins' => [], 'styles' => [], 'templates' => [], 'filebrowsers' => []]);