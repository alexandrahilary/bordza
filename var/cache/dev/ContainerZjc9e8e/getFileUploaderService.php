<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'AppBundle\Service\FileUploader' shared autowired service.

include_once $this->targetDirs[3].'/src/AppBundle/Service/FileUploader.php';

return $this->services['AppBundle\Service\FileUploader'] = new \AppBundle\Service\FileUploader(($this->targetDirs[3].'/web/uploads/images'));
