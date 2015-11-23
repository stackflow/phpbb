<?php

/* overall_footer.html */
class __TwigTemplate_8fdaa6cea29c5ad349e7e83894d603c2 extends Twig_Template
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
        echo "\t\t";
        if ($this->env->getLoader()->exists('@nickvergessen_newspage/event/overall_footer_content_after.html')) {
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array('nickvergessen_newspage', '__main__'));
            $this->env->loadTemplate('@nickvergessen_newspage/event/overall_footer_content_after.html')->display($context);
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }

        if ($this->env->getLoader()->exists('@sarafan_guru/event/overall_footer_content_after.html')) {
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array('sarafan_guru', '__main__'));
            $this->env->loadTemplate('@sarafan_guru/event/overall_footer_content_after.html')->display($context);
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }

        if ($this->env->getLoader()->exists('@uloginteam_ulogin/event/overall_footer_content_after.html')) {
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array('uloginteam_ulogin', '__main__'));
            $this->env->loadTemplate('@uloginteam_ulogin/event/overall_footer_content_after.html')->display($context);
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }

        // line 2
        echo "\t</div>

";
        // line 4
        if ($this->env->getLoader()->exists('@nickvergessen_newspage/event/overall_footer_page_body_after.html')) {
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array('nickvergessen_newspage', '__main__'));
            $this->env->loadTemplate('@nickvergessen_newspage/event/overall_footer_page_body_after.html')->display($context);
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }

        if ($this->env->getLoader()->exists('@sarafan_guru/event/overall_footer_page_body_after.html')) {
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array('sarafan_guru', '__main__'));
            $this->env->loadTemplate('@sarafan_guru/event/overall_footer_page_body_after.html')->display($context);
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }

        if ($this->env->getLoader()->exists('@uloginteam_ulogin/event/overall_footer_page_body_after.html')) {
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array('uloginteam_ulogin', '__main__'));
            $this->env->loadTemplate('@uloginteam_ulogin/event/overall_footer_page_body_after.html')->display($context);
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }

        // line 5
        echo "
<div id=\"page-footer\" role=\"contentinfo\">
\t";
        // line 7
        $location = "navbar_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->env->loadTemplate("navbar_footer.html")->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 8
        echo "
\t<div class=\"copyright\">
\t\t";
        // line 10
        if ($this->env->getLoader()->exists('@nickvergessen_newspage/event/overall_footer_copyright_prepend.html')) {
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array('nickvergessen_newspage', '__main__'));
            $this->env->loadTemplate('@nickvergessen_newspage/event/overall_footer_copyright_prepend.html')->display($context);
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }

        if ($this->env->getLoader()->exists('@sarafan_guru/event/overall_footer_copyright_prepend.html')) {
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array('sarafan_guru', '__main__'));
            $this->env->loadTemplate('@sarafan_guru/event/overall_footer_copyright_prepend.html')->display($context);
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }

        if ($this->env->getLoader()->exists('@uloginteam_ulogin/event/overall_footer_copyright_prepend.html')) {
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array('uloginteam_ulogin', '__main__'));
            $this->env->loadTemplate('@uloginteam_ulogin/event/overall_footer_copyright_prepend.html')->display($context);
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }

        // line 11
        echo "\t\t";
        echo (isset($context["CREDIT_LINE"]) ? $context["CREDIT_LINE"] : null);
        echo "
\t\t";
        // line 12
        if ((isset($context["TRANSLATION_INFO"]) ? $context["TRANSLATION_INFO"] : null)) {
            echo "<br />";
            echo (isset($context["TRANSLATION_INFO"]) ? $context["TRANSLATION_INFO"] : null);
        }
        // line 13
        echo "\t\t";
        if ($this->env->getLoader()->exists('@nickvergessen_newspage/event/overall_footer_copyright_append.html')) {
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array('nickvergessen_newspage', '__main__'));
            $this->env->loadTemplate('@nickvergessen_newspage/event/overall_footer_copyright_append.html')->display($context);
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }

        if ($this->env->getLoader()->exists('@sarafan_guru/event/overall_footer_copyright_append.html')) {
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array('sarafan_guru', '__main__'));
            $this->env->loadTemplate('@sarafan_guru/event/overall_footer_copyright_append.html')->display($context);
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }

        if ($this->env->getLoader()->exists('@uloginteam_ulogin/event/overall_footer_copyright_append.html')) {
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array('uloginteam_ulogin', '__main__'));
            $this->env->loadTemplate('@uloginteam_ulogin/event/overall_footer_copyright_append.html')->display($context);
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }

        // line 14
        echo "\t\t";
        if ((isset($context["DEBUG_OUTPUT"]) ? $context["DEBUG_OUTPUT"] : null)) {
            echo "<br />";
            echo (isset($context["DEBUG_OUTPUT"]) ? $context["DEBUG_OUTPUT"] : null);
        }
        // line 15
        echo "\t\t";
        if ((isset($context["U_ACP"]) ? $context["U_ACP"] : null)) {
            echo "<br /><strong><a href=\"";
            echo (isset($context["U_ACP"]) ? $context["U_ACP"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("ACP");
            echo "</a></strong>";
        }
        // line 16
        echo "\t</div>

\t<div id=\"darkenwrapper\" data-ajax-error-title=\"";
        // line 18
        echo $this->env->getExtension('phpbb')->lang("AJAX_ERROR_TITLE");
        echo "\" data-ajax-error-text=\"";
        echo $this->env->getExtension('phpbb')->lang("AJAX_ERROR_TEXT");
        echo "\" data-ajax-error-text-abort=\"";
        echo $this->env->getExtension('phpbb')->lang("AJAX_ERROR_TEXT_ABORT");
        echo "\" data-ajax-error-text-timeout=\"";
        echo $this->env->getExtension('phpbb')->lang("AJAX_ERROR_TEXT_TIMEOUT");
        echo "\" data-ajax-error-text-parsererror=\"";
        echo $this->env->getExtension('phpbb')->lang("AJAX_ERROR_TEXT_PARSERERROR");
        echo "\">
\t\t<div id=\"darken\">&nbsp;</div>
\t</div>

\t<div id=\"phpbb_alert\" class=\"phpbb_alert\" data-l-err=\"";
        // line 22
        echo $this->env->getExtension('phpbb')->lang("ERROR");
        echo "\" data-l-timeout-processing-req=\"";
        echo $this->env->getExtension('phpbb')->lang("TIMEOUT_PROCESSING_REQ");
        echo "\">
\t\t<a href=\"#\" class=\"alert_close\"></a>
\t\t<h3 class=\"alert_title\">&nbsp;</h3><p class=\"alert_text\"></p>
\t</div>
\t<div id=\"phpbb_confirm\" class=\"phpbb_alert\">
\t\t<a href=\"#\" class=\"alert_close\"></a>
\t\t<div class=\"alert_text\"></div>
\t</div>
</div>

</div>

<div>
\t<a id=\"bottom\" class=\"anchor\" accesskey=\"z\"></a>
\t";
        // line 36
        if ((!(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null))) {
            echo (isset($context["RUN_CRON_TASK"]) ? $context["RUN_CRON_TASK"] : null);
        }
        // line 37
        echo "</div>

<script type=\"text/javascript\" src=\"";
        // line 39
        echo (isset($context["T_JQUERY_LINK"]) ? $context["T_JQUERY_LINK"] : null);
        echo "\"></script>
";
        // line 40
        if ((isset($context["S_ALLOW_CDN"]) ? $context["S_ALLOW_CDN"] : null)) {
            echo "<script type=\"text/javascript\">window.jQuery || document.write(unescape('%3Cscript src=\"";
            echo (isset($context["T_ASSETS_PATH"]) ? $context["T_ASSETS_PATH"] : null);
            echo "/javascript/jquery.min.js?assets_version=";
            echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
            echo "\" type=\"text/javascript\"%3E%3C/script%3E'));</script>";
        }
        // line 41
        echo "<script type=\"text/javascript\" src=\"";
        echo (isset($context["T_ASSETS_PATH"]) ? $context["T_ASSETS_PATH"] : null);
        echo "/javascript/core.js?assets_version=";
        echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
        echo "\"></script>
";
        // line 42
        $asset_file = "forum_fn.js";
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
        $context['definition']->append('SCRIPTS', '<script type="text/javascript" src="' . $asset_file. '"></script>

');
        // line 43
        $asset_file = "ajax.js";
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
        $context['definition']->append('SCRIPTS', '<script type="text/javascript" src="' . $asset_file. '"></script>

');
        // line 44
        echo "
";
        // line 45
        if ($this->env->getLoader()->exists('@nickvergessen_newspage/event/overall_footer_after.html')) {
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array('nickvergessen_newspage', '__main__'));
            $this->env->loadTemplate('@nickvergessen_newspage/event/overall_footer_after.html')->display($context);
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }

        if ($this->env->getLoader()->exists('@sarafan_guru/event/overall_footer_after.html')) {
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array('sarafan_guru', '__main__'));
            $this->env->loadTemplate('@sarafan_guru/event/overall_footer_after.html')->display($context);
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }

        if ($this->env->getLoader()->exists('@uloginteam_ulogin/event/overall_footer_after.html')) {
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array('uloginteam_ulogin', '__main__'));
            $this->env->loadTemplate('@uloginteam_ulogin/event/overall_footer_after.html')->display($context);
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }

        // line 46
        echo "
";
        // line 47
        if ((isset($context["S_PLUPLOAD"]) ? $context["S_PLUPLOAD"] : null)) {
            $location = "plupload.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->env->loadTemplate("plupload.html")->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 48
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "SCRIPTS");
        echo "

";
        // line 50
        if ($this->env->getLoader()->exists('@nickvergessen_newspage/event/overall_footer_body_after.html')) {
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array('nickvergessen_newspage', '__main__'));
            $this->env->loadTemplate('@nickvergessen_newspage/event/overall_footer_body_after.html')->display($context);
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }

        if ($this->env->getLoader()->exists('@sarafan_guru/event/overall_footer_body_after.html')) {
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array('sarafan_guru', '__main__'));
            $this->env->loadTemplate('@sarafan_guru/event/overall_footer_body_after.html')->display($context);
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }

        if ($this->env->getLoader()->exists('@uloginteam_ulogin/event/overall_footer_body_after.html')) {
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array('uloginteam_ulogin', '__main__'));
            $this->env->loadTemplate('@uloginteam_ulogin/event/overall_footer_body_after.html')->display($context);
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }

        // line 51
        echo "
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "overall_footer.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  300 => 50,  295 => 48,  281 => 47,  278 => 46,  238 => 43,  223 => 42,  216 => 41,  208 => 40,  204 => 39,  162 => 18,  158 => 16,  120 => 13,  115 => 12,  110 => 11,  88 => 10,  72 => 7,  42 => 2,  634 => 105,  630 => 103,  624 => 101,  621 => 100,  599 => 99,  593 => 95,  588 => 93,  585 => 92,  563 => 91,  560 => 90,  538 => 89,  535 => 88,  513 => 83,  471 => 79,  469 => 78,  462 => 77,  437 => 70,  430 => 69,  421 => 67,  415 => 64,  411 => 62,  402 => 60,  388 => 56,  386 => 55,  383 => 54,  380 => 53,  357 => 52,  330 => 50,  326 => 49,  297 => 47,  285 => 44,  282 => 43,  277 => 42,  270 => 41,  261 => 39,  243 => 38,  240 => 37,  234 => 36,  230 => 35,  225 => 34,  200 => 37,  175 => 30,  172 => 29,  143 => 14,  121 => 23,  93 => 17,  65 => 12,  40 => 10,  37 => 9,  27 => 3,  165 => 42,  160 => 39,  153 => 37,  145 => 35,  142 => 34,  138 => 33,  125 => 30,  118 => 29,  112 => 20,  108 => 19,  105 => 26,  96 => 18,  68 => 5,  63 => 20,  52 => 15,  46 => 4,  38 => 9,  30 => 4,  25 => 5,  36 => 8,  24 => 3,  21 => 2,  731 => 111,  721 => 109,  719 => 108,  716 => 107,  694 => 106,  691 => 105,  668 => 104,  662 => 103,  640 => 102,  627 => 101,  604 => 100,  600 => 99,  591 => 94,  568 => 97,  558 => 96,  555 => 95,  524 => 90,  521 => 89,  490 => 86,  488 => 85,  479 => 84,  476 => 83,  472 => 81,  460 => 80,  452 => 79,  447 => 78,  429 => 72,  404 => 70,  393 => 58,  389 => 64,  367 => 63,  358 => 61,  325 => 58,  322 => 51,  301 => 52,  298 => 51,  276 => 50,  267 => 48,  253 => 44,  220 => 44,  205 => 43,  183 => 42,  177 => 22,  155 => 37,  151 => 35,  148 => 34,  139 => 33,  131 => 32,  128 => 31,  126 => 30,  123 => 29,  116 => 21,  109 => 25,  102 => 24,  90 => 21,  82 => 22,  71 => 16,  69 => 15,  66 => 14,  64 => 13,  61 => 12,  39 => 11,  32 => 7,  26 => 6,  544 => 119,  541 => 118,  531 => 86,  527 => 112,  525 => 111,  520 => 108,  498 => 88,  494 => 80,  481 => 104,  459 => 103,  454 => 75,  446 => 73,  438 => 94,  432 => 93,  424 => 92,  419 => 66,  416 => 89,  413 => 88,  391 => 57,  385 => 84,  381 => 83,  361 => 81,  351 => 51,  329 => 72,  320 => 48,  316 => 68,  289 => 65,  286 => 64,  264 => 40,  256 => 45,  244 => 56,  242 => 45,  239 => 54,  231 => 52,  229 => 51,  222 => 49,  218 => 48,  213 => 47,  196 => 36,  194 => 31,  184 => 23,  178 => 21,  176 => 20,  173 => 19,  149 => 15,  106 => 14,  95 => 22,  73 => 11,  62 => 11,  60 => 9,  35 => 7,  22 => 2,  532 => 94,  529 => 93,  507 => 82,  504 => 81,  499 => 68,  477 => 67,  466 => 66,  444 => 72,  439 => 63,  436 => 62,  434 => 74,  431 => 73,  426 => 71,  403 => 56,  377 => 82,  355 => 54,  350 => 60,  347 => 59,  345 => 50,  342 => 49,  337 => 46,  314 => 56,  305 => 44,  294 => 46,  272 => 42,  269 => 49,  257 => 40,  254 => 39,  252 => 58,  249 => 37,  227 => 36,  224 => 35,  217 => 31,  212 => 30,  206 => 28,  203 => 33,  195 => 25,  193 => 24,  186 => 23,  179 => 22,  164 => 20,  159 => 19,  157 => 18,  154 => 17,  132 => 31,  129 => 15,  117 => 15,  114 => 13,  92 => 12,  84 => 8,  81 => 8,  79 => 18,  57 => 17,  54 => 16,  48 => 4,  34 => 3,  31 => 6,  19 => 1,);
    }
}
