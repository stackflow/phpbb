<?php

namespace sarafan\guru\controller;

use phpbb\config\config;
use phpbb\controller\helper;
use phpbb\request\request;
use phpbb\request\request_interface;
use phpbb\template\template;
use sarafan\guru\controller\payment\bisys\Response;
use sarafan\guru\helper\Database;

class Payment
{
    protected $config;
    protected $db;
    protected $request;
    protected $template;
    protected $helper;
    protected $root_path;
    protected $php_ext;

    protected $container;

    /**
     * Constructor
     * NOTE: The parameters of this method must match in order and type with
     * the dependencies defined in the services.yml file for this service.
     *
     * @param config $config Config object
     * @param request $request The request object
     * @param template $template Template object
     * @param helper $helper Controller helper object
     * @param Database $db Database helper
     * @param string $root_path phpBB root path
     * @param string $php_ext phpEx
     */
    public function __construct(config $config, request $request, template $template, helper $helper, Database $db, $root_path, $php_ext)
    {
        global $phpbb_container;
        $this->config = $config;
        $this->db = $db;
        $this->request = $request;
        $this->template = $template;
        $this->helper = $helper;
        $this->root_path = $root_path;
        $this->php_ext = $php_ext;
        $this->container = $phpbb_container;
    }

    /**
     * Base controller to be accessed with the URL /sarafan/guru/api/payment/bisys
     *
     * @return Symfony\Component\HttpFoundation\Response A Symfony Response object
     */
    public function bisys()
    {
        $bisys = $this->container->get('sarafan.guru.helper.payment.bisys');
        $response = $bisys->parse($this->request->variable('params', '', true, request_interface::POST));

        $this->template->assign_vars([
            'sarafan' => $response
//            'sarafan' => [
//                'error_code' => $response->getCode(),
//                'error_text' => $response->getMessage(),
//                'sign' => $response->getSign()
//            ]
        ]);

        return $this->helper->render('/payment/bisys/response.xml');
    }
}
