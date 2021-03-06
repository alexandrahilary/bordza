<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'argument_resolver.service' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/HttpKernel/Controller/ArgumentValueResolverInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/HttpKernel/Controller/ArgumentResolver/ServiceValueResolver.php';

return $this->services['argument_resolver.service'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver(new \Symfony\Component\DependencyInjection\ServiceLocator(['AppBundle\\Controller\\ActuController:newAction' => function () {
    return ${($_ = isset($this->services['service_locator.o8rvmct']) ? $this->services['service_locator.o8rvmct'] : $this->load('getServiceLocator_O8rvmctService.php')) && false ?: '_'};
}, 'AppBundle\\Controller\\CatalogueController:newAction' => function () {
    return ${($_ = isset($this->services['service_locator.vvknubj']) ? $this->services['service_locator.vvknubj'] : $this->load('getServiceLocator_VvknubjService.php')) && false ?: '_'};
}, 'AppBundle\\Controller\\ContactController:newAction' => function () {
    return ${($_ = isset($this->services['service_locator.czemgza']) ? $this->services['service_locator.czemgza'] : $this->load('getServiceLocator_CzemgzaService.php')) && false ?: '_'};
}, 'AppBundle\\Controller\\DefaultController:contactAction' => function () {
    return ${($_ = isset($this->services['service_locator.rua9y9n']) ? $this->services['service_locator.rua9y9n'] : $this->load('getServiceLocator_Rua9y9nService.php')) && false ?: '_'};
}, 'AppBundle\\Controller\\ImageController:editImageAction' => function () {
    return ${($_ = isset($this->services['service_locator.nabs.x7']) ? $this->services['service_locator.nabs.x7'] : $this->load('getServiceLocator_Nabs_X7Service.php')) && false ?: '_'};
}, 'AppBundle\\Controller\\SessionController:newAction' => function () {
    return ${($_ = isset($this->services['service_locator.qqloyel']) ? $this->services['service_locator.qqloyel'] : $this->load('getServiceLocator_QqloyelService.php')) && false ?: '_'};
}, 'AppBundle\\Controller\\ActuController::newAction' => function () {
    return ${($_ = isset($this->services['service_locator.o8rvmct']) ? $this->services['service_locator.o8rvmct'] : $this->load('getServiceLocator_O8rvmctService.php')) && false ?: '_'};
}, 'AppBundle\\Controller\\CatalogueController::newAction' => function () {
    return ${($_ = isset($this->services['service_locator.vvknubj']) ? $this->services['service_locator.vvknubj'] : $this->load('getServiceLocator_VvknubjService.php')) && false ?: '_'};
}, 'AppBundle\\Controller\\ContactController::newAction' => function () {
    return ${($_ = isset($this->services['service_locator.czemgza']) ? $this->services['service_locator.czemgza'] : $this->load('getServiceLocator_CzemgzaService.php')) && false ?: '_'};
}, 'AppBundle\\Controller\\DefaultController::contactAction' => function () {
    return ${($_ = isset($this->services['service_locator.rua9y9n']) ? $this->services['service_locator.rua9y9n'] : $this->load('getServiceLocator_Rua9y9nService.php')) && false ?: '_'};
}, 'AppBundle\\Controller\\ImageController::editImageAction' => function () {
    return ${($_ = isset($this->services['service_locator.nabs.x7']) ? $this->services['service_locator.nabs.x7'] : $this->load('getServiceLocator_Nabs_X7Service.php')) && false ?: '_'};
}, 'AppBundle\\Controller\\SessionController::newAction' => function () {
    return ${($_ = isset($this->services['service_locator.qqloyel']) ? $this->services['service_locator.qqloyel'] : $this->load('getServiceLocator_QqloyelService.php')) && false ?: '_'};
}]));
