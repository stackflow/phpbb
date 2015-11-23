<?php

/* @nickvergessen_newspage/event/overall_header_head_append.html */
class __TwigTemplate_b1a085c83607ab702df7976e3bb6ccf2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $asset_file = "@nickvergessen_newspage/newspage.css";
        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            $asset->add_assets_version('32');
            $asset_file = $asset->get_url();
            }
        }
        $context['definition']->append('STYLESHEETS', '<link href="' . $asset_file . '" rel="stylesheet" type="text/css" media="screen" />
');
    }

    public function getTemplateName()
    {
        return "@nickvergessen_newspage/event/overall_header_head_append.html";
    }

    public function getDebugInfo()
    {
        return array (  544 => 119,  541 => 118,  531 => 114,  527 => 112,  525 => 111,  520 => 108,  498 => 107,  494 => 105,  481 => 104,  459 => 103,  454 => 100,  446 => 95,  438 => 94,  432 => 93,  424 => 92,  419 => 90,  416 => 89,  413 => 88,  391 => 87,  385 => 84,  381 => 83,  361 => 81,  351 => 73,  329 => 72,  320 => 70,  316 => 68,  289 => 65,  286 => 64,  264 => 63,  256 => 60,  244 => 56,  242 => 55,  239 => 54,  231 => 52,  229 => 51,  222 => 49,  218 => 48,  213 => 47,  196 => 32,  194 => 31,  184 => 23,  178 => 21,  176 => 20,  173 => 19,  149 => 17,  106 => 14,  95 => 13,  73 => 11,  62 => 10,  60 => 9,  35 => 7,  22 => 2,  532 => 74,  529 => 73,  507 => 72,  504 => 71,  499 => 68,  477 => 67,  466 => 66,  444 => 65,  439 => 63,  436 => 62,  434 => 61,  431 => 60,  426 => 57,  403 => 56,  377 => 82,  355 => 54,  350 => 52,  347 => 51,  345 => 50,  342 => 49,  337 => 46,  314 => 45,  305 => 44,  294 => 67,  272 => 42,  269 => 41,  257 => 40,  254 => 39,  252 => 58,  249 => 37,  227 => 36,  224 => 35,  217 => 31,  212 => 30,  206 => 28,  203 => 27,  195 => 25,  193 => 24,  186 => 23,  179 => 22,  164 => 20,  159 => 19,  157 => 18,  154 => 17,  132 => 16,  129 => 15,  117 => 15,  114 => 13,  92 => 12,  84 => 12,  81 => 8,  79 => 7,  57 => 6,  54 => 5,  48 => 4,  34 => 3,  31 => 6,  19 => 1,);
    }
}
