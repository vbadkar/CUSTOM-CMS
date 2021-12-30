<?php

namespace Cms\Controllers;

use Cms\Models\Database;

class ControllerBase{
    protected $page = [];
    protected function preprocessPage(){

        $this->page['nav_links'] = $this->getNavLinks();
        $this->page['base_tag'] = $database['base'];
        return $this->page;
    }
    protected function getNavLinks(){

        $displayMenu = new Database();
        $result = $displayMenu->displayMenu();
        return $result;

    }
} 