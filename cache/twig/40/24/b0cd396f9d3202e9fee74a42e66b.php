<?php

/* overall_footer.html */
class __TwigTemplate_4024b0cd396f9d3202e9fee74a42e66b extends Twig_Template
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
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div><!-- /#main -->
\t\t\t\t</div>
\t\t</div><!-- /#acp -->
\t</div>

\t<div id=\"page-footer\">
\t\t<div class=\"copyright\">
\t\t\t";
        // line 9
        if ((isset($context["S_COPYRIGHT_HTML"]) ? $context["S_COPYRIGHT_HTML"] : null)) {
            // line 10
            echo "\t\t\t\t";
            echo (isset($context["CREDIT_LINE"]) ? $context["CREDIT_LINE"] : null);
            echo "
\t\t\t\t";
            // line 11
            if ((isset($context["TRANSLATION_INFO"]) ? $context["TRANSLATION_INFO"] : null)) {
                echo "<br />";
                echo (isset($context["TRANSLATION_INFO"]) ? $context["TRANSLATION_INFO"] : null);
            }
            // line 12
            echo "\t\t\t";
        }
        // line 13
        echo "
\t\t\t";
        // line 14
        if ((isset($context["DEBUG_OUTPUT"]) ? $context["DEBUG_OUTPUT"] : null)) {
            // line 15
            echo "\t\t\t\t";
            if ((isset($context["S_COPYRIGHT_HTML"]) ? $context["S_COPYRIGHT_HTML"] : null)) {
                echo "<br />";
            }
            // line 16
            echo "\t\t\t\t";
            echo (isset($context["DEBUG_OUTPUT"]) ? $context["DEBUG_OUTPUT"] : null);
            echo "
\t\t\t";
        }
        // line 18
        echo "\t\t</div>

\t\t<div id=\"darkenwrapper\" data-ajax-error-title=\"";
        // line 20
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
\t\t\t<div id=\"darken\">&nbsp;</div>
\t\t</div>
\t\t<div id=\"loading_indicator\"></div>

\t\t<div id=\"phpbb_alert\" class=\"phpbb_alert\" data-l-err=\"";
        // line 25
        echo $this->env->getExtension('phpbb')->lang("ERROR");
        echo "\" data-l-timeout-processing-req=\"";
        echo $this->env->getExtension('phpbb')->lang("TIMEOUT_PROCESSING_REQ");
        echo "\">
\t\t\t<a href=\"#\" class=\"alert_close\"></a>
\t\t\t<h3 class=\"alert_title\"></h3><p class=\"alert_text\"></p>
\t\t</div>
\t\t<div id=\"phpbb_confirm\" class=\"phpbb_alert\">
\t\t\t<a href=\"#\" class=\"alert_close\"></a>
\t\t\t<div class=\"alert_text\"></div>
\t\t</div>
\t</div>
</div>

<script type=\"text/javascript\" src=\"";
        // line 36
        echo (isset($context["T_JQUERY_LINK"]) ? $context["T_JQUERY_LINK"] : null);
        echo "\"></script>
";
        // line 37
        if ((isset($context["S_ALLOW_CDN"]) ? $context["S_ALLOW_CDN"] : null)) {
            echo "<script type=\"text/javascript\">window.jQuery || document.write(unescape('%3Cscript src=\"";
            echo (isset($context["T_ASSETS_PATH"]) ? $context["T_ASSETS_PATH"] : null);
            echo "/javascript/jquery.min.js?assets_version=";
            echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
            echo "\" type=\"text/javascript\"%3E%3C/script%3E'));</script>";
        }
        // line 38
        echo "<script type=\"text/javascript\" src=\"";
        echo (isset($context["T_ASSETS_PATH"]) ? $context["T_ASSETS_PATH"] : null);
        echo "/javascript/core.js?assets_version=";
        echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
        echo "\"></script>
";
        // line 39
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
        // line 40
        $asset_file = "admin.js";
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
        // line 41
        echo "
";
        // line 42
        if ($this->env->getLoader()->exists('@nickvergessen_newspage/event/acp_overall_footer_after.html')) {
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array('nickvergessen_newspage', '__main__'));
            $this->env->loadTemplate('@nickvergessen_newspage/event/acp_overall_footer_after.html')->display($context);
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }

        if ($this->env->getLoader()->exists('@sarafan_guru/event/acp_overall_footer_after.html')) {
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array('sarafan_guru', '__main__'));
            $this->env->loadTemplate('@sarafan_guru/event/acp_overall_footer_after.html')->display($context);
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }

        if ($this->env->getLoader()->exists('@uloginteam_ulogin/event/acp_overall_footer_after.html')) {
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array('uloginteam_ulogin', '__main__'));
            $this->env->loadTemplate('@uloginteam_ulogin/event/acp_overall_footer_after.html')->display($context);
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }

        // line 43
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "SCRIPTS");
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
        return array (  170 => 43,  115 => 39,  108 => 38,  100 => 37,  96 => 36,  80 => 25,  64 => 20,  54 => 16,  49 => 15,  47 => 14,  44 => 13,  29 => 9,  382 => 145,  377 => 142,  374 => 141,  368 => 140,  364 => 138,  358 => 137,  349 => 135,  338 => 134,  334 => 133,  331 => 132,  328 => 131,  325 => 130,  320 => 128,  317 => 127,  309 => 125,  305 => 124,  302 => 123,  294 => 121,  277 => 119,  269 => 113,  250 => 110,  241 => 104,  227 => 102,  222 => 99,  200 => 98,  193 => 96,  188 => 93,  161 => 90,  158 => 89,  136 => 88,  61 => 16,  57 => 15,  53 => 14,  48 => 13,  35 => 7,  22 => 2,  871 => 291,  868 => 290,  864 => 288,  859 => 285,  850 => 282,  847 => 281,  840 => 278,  835 => 277,  831 => 276,  826 => 274,  822 => 273,  818 => 272,  815 => 271,  802 => 270,  798 => 269,  794 => 267,  789 => 266,  782 => 262,  778 => 261,  774 => 260,  770 => 259,  766 => 258,  756 => 253,  751 => 251,  745 => 249,  743 => 248,  740 => 247,  735 => 244,  726 => 241,  722 => 240,  718 => 239,  714 => 238,  711 => 237,  707 => 236,  700 => 232,  696 => 231,  692 => 230,  688 => 229,  678 => 224,  673 => 222,  667 => 220,  665 => 219,  662 => 218,  658 => 216,  636 => 215,  629 => 211,  623 => 210,  618 => 208,  615 => 207,  608 => 203,  602 => 202,  596 => 200,  594 => 199,  587 => 195,  581 => 194,  576 => 192,  569 => 188,  563 => 187,  558 => 185,  551 => 181,  545 => 180,  540 => 178,  533 => 174,  529 => 173,  524 => 171,  517 => 167,  513 => 166,  508 => 164,  503 => 162,  500 => 161,  498 => 160,  492 => 156,  487 => 153,  482 => 151,  476 => 150,  474 => 149,  455 => 147,  449 => 145,  443 => 142,  438 => 141,  434 => 140,  429 => 139,  423 => 136,  418 => 135,  414 => 134,  409 => 133,  403 => 130,  398 => 129,  394 => 128,  389 => 127,  381 => 122,  376 => 121,  372 => 120,  367 => 119,  361 => 116,  356 => 115,  352 => 136,  347 => 113,  341 => 110,  336 => 109,  332 => 108,  327 => 107,  321 => 104,  316 => 103,  312 => 126,  307 => 101,  299 => 122,  295 => 95,  291 => 120,  287 => 93,  280 => 89,  276 => 87,  254 => 111,  251 => 85,  245 => 82,  242 => 81,  240 => 80,  237 => 79,  231 => 103,  228 => 75,  226 => 74,  223 => 73,  220 => 72,  214 => 69,  210 => 68,  207 => 67,  205 => 66,  202 => 65,  196 => 62,  192 => 61,  189 => 60,  187 => 59,  184 => 58,  178 => 55,  174 => 54,  171 => 53,  169 => 52,  166 => 92,  160 => 48,  156 => 47,  153 => 46,  150 => 45,  148 => 42,  145 => 41,  139 => 40,  135 => 39,  132 => 38,  130 => 40,  127 => 36,  121 => 33,  117 => 32,  114 => 31,  112 => 30,  109 => 29,  97 => 26,  93 => 25,  90 => 24,  78 => 21,  74 => 20,  70 => 19,  67 => 18,  65 => 17,  60 => 18,  55 => 13,  52 => 12,  46 => 9,  41 => 12,  38 => 6,  36 => 11,  31 => 10,  19 => 1,);
    }
}
