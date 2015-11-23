<?php

/* @uloginteam_ulogin/event/overall_header_navigation_prepend.html */
class __TwigTemplate_32c0cdef4dbf2d44b308d484c518a60b extends Twig_Template
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
        if (((((!(isset($context["S_REGISTERED_USER"]) ? $context["S_REGISTERED_USER"] : null)) && (isset($context["S_REGISTER_ENABLED"]) ? $context["S_REGISTER_ENABLED"] : null)) && (!(isset($context["S_SHOW_COPPA"]) ? $context["S_SHOW_COPPA"] : null))) && (!(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)))) {
            // line 2
            echo "<li style=\"margin-top: 3px;\" class=\"rightside small-icon\">
    ";
            // line 3
            $location = "ulogin_panel1.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->env->loadTemplate("ulogin_panel1.html")->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 4
            echo "</li>
";
        }
    }

    public function getTemplateName()
    {
        return "@uloginteam_ulogin/event/overall_header_navigation_prepend.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 4,  24 => 3,  21 => 2,  731 => 111,  721 => 109,  719 => 108,  716 => 107,  694 => 106,  691 => 105,  668 => 104,  662 => 103,  640 => 102,  627 => 101,  604 => 100,  600 => 99,  591 => 98,  568 => 97,  558 => 96,  555 => 95,  524 => 90,  521 => 89,  490 => 86,  488 => 85,  479 => 84,  476 => 83,  472 => 81,  460 => 80,  452 => 79,  447 => 78,  429 => 72,  404 => 70,  393 => 66,  389 => 64,  367 => 63,  358 => 61,  325 => 58,  322 => 57,  301 => 52,  298 => 51,  276 => 50,  267 => 48,  253 => 46,  220 => 44,  205 => 43,  183 => 42,  177 => 38,  155 => 37,  151 => 35,  148 => 34,  139 => 33,  131 => 32,  128 => 31,  126 => 30,  123 => 29,  116 => 27,  109 => 25,  102 => 24,  90 => 21,  82 => 19,  71 => 16,  69 => 15,  66 => 14,  64 => 13,  61 => 12,  39 => 11,  32 => 7,  26 => 6,  544 => 119,  541 => 118,  531 => 114,  527 => 112,  525 => 111,  520 => 108,  498 => 88,  494 => 105,  481 => 104,  459 => 103,  454 => 100,  446 => 95,  438 => 94,  432 => 93,  424 => 92,  419 => 90,  416 => 89,  413 => 88,  391 => 87,  385 => 84,  381 => 83,  361 => 81,  351 => 73,  329 => 72,  320 => 70,  316 => 68,  289 => 65,  286 => 64,  264 => 47,  256 => 60,  244 => 56,  242 => 45,  239 => 54,  231 => 52,  229 => 51,  222 => 49,  218 => 48,  213 => 47,  196 => 32,  194 => 31,  184 => 23,  178 => 21,  176 => 20,  173 => 19,  149 => 17,  106 => 14,  95 => 22,  73 => 11,  62 => 10,  60 => 9,  35 => 7,  22 => 2,  532 => 94,  529 => 93,  507 => 72,  504 => 71,  499 => 68,  477 => 67,  466 => 66,  444 => 77,  439 => 63,  436 => 62,  434 => 74,  431 => 73,  426 => 71,  403 => 56,  377 => 82,  355 => 54,  350 => 60,  347 => 59,  345 => 50,  342 => 49,  337 => 46,  314 => 56,  305 => 44,  294 => 67,  272 => 42,  269 => 49,  257 => 40,  254 => 39,  252 => 58,  249 => 37,  227 => 36,  224 => 35,  217 => 31,  212 => 30,  206 => 28,  203 => 27,  195 => 25,  193 => 24,  186 => 23,  179 => 22,  164 => 20,  159 => 19,  157 => 18,  154 => 17,  132 => 16,  129 => 15,  117 => 15,  114 => 13,  92 => 12,  84 => 12,  81 => 8,  79 => 18,  57 => 6,  54 => 5,  48 => 4,  34 => 3,  31 => 6,  19 => 1,);
    }
}
