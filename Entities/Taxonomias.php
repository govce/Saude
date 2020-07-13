<?php
namespace Saude\Entities;

use Doctrine\ORM\Mapping as ORM;
use MapasCulturais\Traits;
use MapasCulturais\App;

/** @ORM\PreUpdate */
public function preUpdate($args = null){ parent::preUpdate($args); }
/** @ORM\PostUpdate */
public function postUpdate($args = null){ parent::postUpdate($args); }