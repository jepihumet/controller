<?php

namespace Jepi\Controller;

use DI\Container;
use Jepi\Config\ConfigInterface;
use Jepi\Router\RouterInterface;
use Jepi\Storage\Session;
use Jepi\View\ViewInterface;

/**
 * Controller.php
 *
 * @author      Jepi Humet Alsius <jepihumet@gmail.com>
 * @link        http://jepihumet.com
 */
class Controller implements ControllerInterface {

    /**
     * @var RouterInterface
     */
    protected $router;
    /**
     * @var ConfigInterface
     */
    protected $config;

    /**
     * @var Session
     */
    protected $session;
    /**
     * @var Container
     */
    private $container;

    /**
     * @var ViewInterface
     */
    protected $view;


    public function __construct(RouterInterface $router, ConfigInterface $config, Session $session, Container $container, ViewInterface $view) {
        $this->router = $router;
        $this->config = $config;
        $this->session = $session;
        $this->container = $container;
        $this->view = $view;
    }
}
