<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'PrestaShop\Module\PsEventbus\Service\ApiAuthorizationService' shared service.

return $this->services['PrestaShop\\Module\\PsEventbus\\Service\\ApiAuthorizationService'] = new \PrestaShop\Module\PsEventbus\Service\ApiAuthorizationService(${($_ = isset($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\EventbusSyncRepository']) ? $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\EventbusSyncRepository'] : $this->load('getEventbusSyncRepositoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsEventbus\\Api\\EventBusSyncClient']) ? $this->services['PrestaShop\\Module\\PsEventbus\\Api\\EventBusSyncClient'] : $this->load('getEventBusSyncClientService.php')) && false ?: '_'});
