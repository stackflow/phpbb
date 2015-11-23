<?php

/* navbar_footer.html */
class __TwigTemplate_708ab8357d3d667acbaa49fc77054ebc extends Twig_Template
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
        echo "<div class=\"navbar\" role=\"navigation\">
\t<div class=\"inner\">

\t<ul id=\"nav-footer\" class=\"linklist bulletin\" role=\"menubar\">
\t\t<li class=\"small-icon icon-home breadcrumbs\">
\t\t\t";
        // line 6
        if ((isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null)) {
            echo "<span class=\"crumb\"><a href=\"";
            echo (isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null);
            echo "\" data-navbar-reference=\"home\">";
            echo $this->env->getExtension('phpbb')->lang("SITE_HOME");
            echo "</a></span>";
        }
        // line 7
        echo "\t\t\t";
        if ($this->env->getLoader()->exists('@nickvergessen_newspage/event/overall_footer_breadcrumb_prepend.html')) {
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array('nickvergessen_newspage', '__main__'));
            $this->env->loadTemplate('@nickvergessen_newspage/event/overall_footer_breadcrumb_prepend.html')->display($context);
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }

        if ($this->env->getLoader()->exists('@sarafan_guru/event/overall_footer_breadcrumb_prepend.html')) {
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array('sarafan_guru', '__main__'));
            $this->env->loadTemplate('@sarafan_guru/event/overall_footer_breadcrumb_prepend.html')->display($context);
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }

        if ($this->env->getLoader()->exists('@uloginteam_ulogin/event/overall_footer_breadcrumb_prepend.html')) {
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array('uloginteam_ulogin', '__main__'));
            $this->env->loadTemplate('@uloginteam_ulogin/event/overall_footer_breadcrumb_prepend.html')->display($context);
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }

        // line 8
        echo "\t\t\t<span class=\"crumb\"><a href=\"";
        echo (isset($context["U_INDEX"]) ? $context["U_INDEX"] : null);
        echo "\" data-navbar-reference=\"index\">";
        echo $this->env->getExtension('phpbb')->lang("INDEX");
        echo "</a></span>
\t\t\t";
        // line 9
        if ($this->env->getLoader()->exists('@nickvergessen_newspage/event/overall_footer_breadcrumb_append.html')) {
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array('nickvergessen_newspage', '__main__'));
            $this->env->loadTemplate('@nickvergessen_newspage/event/overall_footer_breadcrumb_append.html')->display($context);
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }

        if ($this->env->getLoader()->exists('@sarafan_guru/event/overall_footer_breadcrumb_append.html')) {
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array('sarafan_guru', '__main__'));
            $this->env->loadTemplate('@sarafan_guru/event/overall_footer_breadcrumb_append.html')->display($context);
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }

        if ($this->env->getLoader()->exists('@uloginteam_ulogin/event/overall_footer_breadcrumb_append.html')) {
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array('uloginteam_ulogin', '__main__'));
            $this->env->loadTemplate('@uloginteam_ulogin/event/overall_footer_breadcrumb_append.html')->display($context);
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }

        // line 10
        echo "\t\t</li>
\t\t";
        // line 11
        if (((isset($context["U_WATCH_FORUM_LINK"]) ? $context["U_WATCH_FORUM_LINK"] : null) && (!(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)))) {
            echo "<li class=\"small-icon icon-";
            if ((isset($context["S_WATCHING_FORUM"]) ? $context["S_WATCHING_FORUM"] : null)) {
                echo "unsubscribe";
            } else {
                echo "subscribe";
            }
            echo "\" data-last-responsive=\"true\"><a href=\"";
            echo (isset($context["U_WATCH_FORUM_LINK"]) ? $context["U_WATCH_FORUM_LINK"] : null);
            echo "\" title=\"";
            echo (isset($context["S_WATCH_FORUM_TITLE"]) ? $context["S_WATCH_FORUM_TITLE"] : null);
            echo "\" data-ajax=\"toggle_link\" data-toggle-class=\"small-icon icon-";
            if ((!(isset($context["S_WATCHING_FORUM"]) ? $context["S_WATCHING_FORUM"] : null))) {
                echo "unsubscribe";
            } else {
                echo "subscribe";
            }
            echo "\" data-toggle-text=\"";
            echo (isset($context["S_WATCH_FORUM_TOGGLE"]) ? $context["S_WATCH_FORUM_TOGGLE"] : null);
            echo "\" data-toggle-url=\"";
            echo (isset($context["U_WATCH_FORUM_TOGGLE"]) ? $context["U_WATCH_FORUM_TOGGLE"] : null);
            echo "\">";
            echo (isset($context["S_WATCH_FORUM_TITLE"]) ? $context["S_WATCH_FORUM_TITLE"] : null);
            echo "</a></li>";
        }
        // line 12
        echo "
\t\t";
        // line 13
        if ($this->env->getLoader()->exists('@nickvergessen_newspage/event/overall_footer_timezone_before.html')) {
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array('nickvergessen_newspage', '__main__'));
            $this->env->loadTemplate('@nickvergessen_newspage/event/overall_footer_timezone_before.html')->display($context);
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }

        if ($this->env->getLoader()->exists('@sarafan_guru/event/overall_footer_timezone_before.html')) {
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array('sarafan_guru', '__main__'));
            $this->env->loadTemplate('@sarafan_guru/event/overall_footer_timezone_before.html')->display($context);
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }

        if ($this->env->getLoader()->exists('@uloginteam_ulogin/event/overall_footer_timezone_before.html')) {
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array('uloginteam_ulogin', '__main__'));
            $this->env->loadTemplate('@uloginteam_ulogin/event/overall_footer_timezone_before.html')->display($context);
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }

        // line 14
        echo "\t\t<li class=\"rightside\">";
        echo (isset($context["S_TIMEZONE"]) ? $context["S_TIMEZONE"] : null);
        echo "</li>
\t\t";
        // line 15
        if ($this->env->getLoader()->exists('@nickvergessen_newspage/event/overall_footer_timezone_after.html')) {
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array('nickvergessen_newspage', '__main__'));
            $this->env->loadTemplate('@nickvergessen_newspage/event/overall_footer_timezone_after.html')->display($context);
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }

        if ($this->env->getLoader()->exists('@sarafan_guru/event/overall_footer_timezone_after.html')) {
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array('sarafan_guru', '__main__'));
            $this->env->loadTemplate('@sarafan_guru/event/overall_footer_timezone_after.html')->display($context);
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }

        if ($this->env->getLoader()->exists('@uloginteam_ulogin/event/overall_footer_timezone_after.html')) {
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array('uloginteam_ulogin', '__main__'));
            $this->env->loadTemplate('@uloginteam_ulogin/event/overall_footer_timezone_after.html')->display($context);
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }

        // line 16
        echo "\t\t";
        if ((!(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null))) {
            // line 17
            echo "\t\t\t<li class=\"small-icon icon-delete-cookies rightside\"><a href=\"";
            echo (isset($context["U_DELETE_COOKIES"]) ? $context["U_DELETE_COOKIES"] : null);
            echo "\" data-ajax=\"true\" data-refresh=\"true\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb')->lang("DELETE_COOKIES");
            echo "</a></li>
\t\t\t";
            // line 18
            if ((isset($context["S_DISPLAY_MEMBERLIST"]) ? $context["S_DISPLAY_MEMBERLIST"] : null)) {
                echo "<li class=\"small-icon icon-members rightside\" data-last-responsive=\"true\"><a href=\"";
                echo (isset($context["U_MEMBERLIST"]) ? $context["U_MEMBERLIST"] : null);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("MEMBERLIST_EXPLAIN");
                echo "\" role=\"menuitem\">";
                echo $this->env->getExtension('phpbb')->lang("MEMBERLIST");
                echo "</a></li>";
            }
            // line 19
            echo "\t\t";
        }
        // line 20
        echo "\t\t";
        if ($this->env->getLoader()->exists('@nickvergessen_newspage/event/overall_footer_teamlink_before.html')) {
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array('nickvergessen_newspage', '__main__'));
            $this->env->loadTemplate('@nickvergessen_newspage/event/overall_footer_teamlink_before.html')->display($context);
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }

        if ($this->env->getLoader()->exists('@sarafan_guru/event/overall_footer_teamlink_before.html')) {
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array('sarafan_guru', '__main__'));
            $this->env->loadTemplate('@sarafan_guru/event/overall_footer_teamlink_before.html')->display($context);
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }

        if ($this->env->getLoader()->exists('@uloginteam_ulogin/event/overall_footer_teamlink_before.html')) {
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array('uloginteam_ulogin', '__main__'));
            $this->env->loadTemplate('@uloginteam_ulogin/event/overall_footer_teamlink_before.html')->display($context);
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }

        // line 21
        echo "\t\t";
        if ((isset($context["U_TEAM"]) ? $context["U_TEAM"] : null)) {
            echo "<li class=\"small-icon icon-team rightside\" data-last-responsive=\"true\"><a href=\"";
            echo (isset($context["U_TEAM"]) ? $context["U_TEAM"] : null);
            echo "\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb')->lang("THE_TEAM");
            echo "</a></li>";
        }
        // line 22
        echo "\t\t";
        if ($this->env->getLoader()->exists('@nickvergessen_newspage/event/overall_footer_teamlink_after.html')) {
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array('nickvergessen_newspage', '__main__'));
            $this->env->loadTemplate('@nickvergessen_newspage/event/overall_footer_teamlink_after.html')->display($context);
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }

        if ($this->env->getLoader()->exists('@sarafan_guru/event/overall_footer_teamlink_after.html')) {
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array('sarafan_guru', '__main__'));
            $this->env->loadTemplate('@sarafan_guru/event/overall_footer_teamlink_after.html')->display($context);
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }

        if ($this->env->getLoader()->exists('@uloginteam_ulogin/event/overall_footer_teamlink_after.html')) {
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array('uloginteam_ulogin', '__main__'));
            $this->env->loadTemplate('@uloginteam_ulogin/event/overall_footer_teamlink_after.html')->display($context);
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }

        // line 23
        echo "\t\t";
        if ((isset($context["U_CONTACT_US"]) ? $context["U_CONTACT_US"] : null)) {
            echo "<li class=\"small-icon icon-contact rightside\" data-last-responsive=\"true\"><a href=\"";
            echo (isset($context["U_CONTACT_US"]) ? $context["U_CONTACT_US"] : null);
            echo "\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb')->lang("CONTACT_US");
            echo "</a></li>";
        }
        // line 24
        echo "\t</ul>

\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "navbar_footer.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 23,  190 => 20,  187 => 19,  170 => 17,  167 => 16,  140 => 14,  89 => 11,  86 => 10,  300 => 50,  295 => 48,  281 => 47,  278 => 46,  238 => 43,  223 => 42,  216 => 41,  208 => 40,  204 => 39,  162 => 18,  158 => 16,  120 => 13,  115 => 12,  110 => 11,  88 => 10,  72 => 7,  42 => 2,  634 => 105,  630 => 103,  624 => 101,  621 => 100,  599 => 99,  593 => 95,  588 => 93,  585 => 92,  563 => 91,  560 => 90,  538 => 89,  535 => 88,  513 => 83,  471 => 79,  469 => 78,  462 => 77,  437 => 70,  430 => 69,  421 => 67,  415 => 64,  411 => 62,  402 => 60,  388 => 56,  386 => 55,  383 => 54,  380 => 53,  357 => 52,  330 => 50,  326 => 49,  297 => 47,  285 => 44,  282 => 43,  277 => 42,  270 => 41,  261 => 39,  243 => 38,  240 => 37,  234 => 36,  230 => 35,  225 => 34,  200 => 37,  175 => 30,  172 => 29,  143 => 14,  121 => 23,  93 => 17,  65 => 12,  40 => 10,  37 => 9,  27 => 3,  165 => 42,  160 => 39,  153 => 37,  145 => 15,  142 => 34,  138 => 33,  125 => 30,  118 => 13,  112 => 20,  108 => 19,  105 => 26,  96 => 18,  68 => 5,  63 => 20,  52 => 15,  46 => 4,  38 => 9,  30 => 4,  25 => 5,  36 => 8,  24 => 3,  21 => 2,  731 => 111,  721 => 109,  719 => 108,  716 => 107,  694 => 106,  691 => 105,  668 => 104,  662 => 103,  640 => 102,  627 => 101,  604 => 100,  600 => 99,  591 => 94,  568 => 97,  558 => 96,  555 => 95,  524 => 90,  521 => 89,  490 => 86,  488 => 85,  479 => 84,  476 => 83,  472 => 81,  460 => 80,  452 => 79,  447 => 78,  429 => 72,  404 => 70,  393 => 58,  389 => 64,  367 => 63,  358 => 61,  325 => 58,  322 => 51,  301 => 52,  298 => 51,  276 => 50,  267 => 48,  253 => 44,  220 => 44,  205 => 43,  183 => 42,  177 => 18,  155 => 37,  151 => 35,  148 => 34,  139 => 33,  131 => 32,  128 => 31,  126 => 30,  123 => 29,  116 => 21,  109 => 25,  102 => 24,  90 => 21,  82 => 22,  71 => 16,  69 => 15,  66 => 14,  64 => 9,  61 => 12,  39 => 11,  32 => 7,  26 => 6,  544 => 119,  541 => 118,  531 => 86,  527 => 112,  525 => 111,  520 => 108,  498 => 88,  494 => 80,  481 => 104,  459 => 103,  454 => 75,  446 => 73,  438 => 94,  432 => 93,  424 => 92,  419 => 66,  416 => 89,  413 => 88,  391 => 57,  385 => 84,  381 => 83,  361 => 81,  351 => 51,  329 => 72,  320 => 48,  316 => 68,  289 => 65,  286 => 64,  264 => 40,  256 => 45,  244 => 56,  242 => 45,  239 => 54,  231 => 52,  229 => 51,  222 => 22,  218 => 48,  213 => 21,  196 => 36,  194 => 31,  184 => 23,  178 => 21,  176 => 20,  173 => 19,  149 => 15,  106 => 14,  95 => 22,  73 => 11,  62 => 11,  60 => 9,  35 => 7,  22 => 2,  532 => 94,  529 => 93,  507 => 82,  504 => 81,  499 => 68,  477 => 67,  466 => 66,  444 => 72,  439 => 63,  436 => 62,  434 => 74,  431 => 73,  426 => 71,  403 => 56,  377 => 82,  355 => 54,  350 => 60,  347 => 59,  345 => 50,  342 => 49,  337 => 46,  314 => 56,  305 => 44,  294 => 46,  272 => 42,  269 => 49,  257 => 40,  254 => 24,  252 => 58,  249 => 37,  227 => 36,  224 => 35,  217 => 31,  212 => 30,  206 => 28,  203 => 33,  195 => 25,  193 => 24,  186 => 23,  179 => 22,  164 => 20,  159 => 19,  157 => 18,  154 => 17,  132 => 31,  129 => 15,  117 => 15,  114 => 13,  92 => 12,  84 => 8,  81 => 8,  79 => 18,  57 => 8,  54 => 16,  48 => 4,  34 => 7,  31 => 6,  19 => 1,);
    }
}
