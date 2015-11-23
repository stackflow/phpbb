<?php

/* notification_dropdown.html */
class __TwigTemplate_3324d21587bcdfa56f492c7c063d11bd extends Twig_Template
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
        echo "<div id=\"notification_list\" class=\"dropdown dropdown-extended notification_list\">
\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t<div class=\"dropdown-contents\">
\t\t<div class=\"header\">
\t\t\t";
        // line 5
        echo $this->env->getExtension('phpbb')->lang("NOTIFICATIONS");
        echo "
\t\t\t<span class=\"header_settings\">
\t\t\t\t<a href=\"";
        // line 7
        echo (isset($context["U_NOTIFICATION_SETTINGS"]) ? $context["U_NOTIFICATION_SETTINGS"] : null);
        echo "\">";
        echo $this->env->getExtension('phpbb')->lang("SETTINGS");
        echo "</a>
\t\t\t\t";
        // line 8
        if ((isset($context["NOTIFICATIONS_COUNT"]) ? $context["NOTIFICATIONS_COUNT"] : null)) {
            // line 9
            echo "\t\t\t\t\t<span id=\"mark_all_notifications\"> &bull; <a href=\"";
            echo (isset($context["U_MARK_ALL_NOTIFICATIONS"]) ? $context["U_MARK_ALL_NOTIFICATIONS"] : null);
            echo "\" data-ajax=\"notification.mark_all_read\">";
            echo $this->env->getExtension('phpbb')->lang("MARK_ALL_READ");
            echo "</a></span>
\t\t\t\t";
        }
        // line 11
        echo "\t\t\t</span>
\t\t</div>

\t\t<ul>
\t\t\t";
        // line 15
        if ((!twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "notifications")))) {
            // line 16
            echo "\t\t\t\t<li class=\"no_notifications\">
\t\t\t\t\t";
            // line 17
            echo $this->env->getExtension('phpbb')->lang("NO_NOTIFICATIONS");
            echo "
\t\t\t\t</li>
\t\t\t";
        }
        // line 20
        echo "\t\t\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "notifications"));
        foreach ($context['_seq'] as $context["_key"] => $context["notifications"]) {
            // line 21
            echo "\t\t\t\t<li class=\"";
            if ($this->getAttribute((isset($context["notifications"]) ? $context["notifications"] : null), "UNREAD")) {
                echo " bg2";
            }
            if ($this->getAttribute((isset($context["notifications"]) ? $context["notifications"] : null), "STYLING")) {
                echo " ";
                echo $this->getAttribute((isset($context["notifications"]) ? $context["notifications"] : null), "STYLING");
            }
            if ((!$this->getAttribute((isset($context["notifications"]) ? $context["notifications"] : null), "URL"))) {
                echo " no-url";
            }
            echo "\">
\t\t\t\t\t";
            // line 22
            if ($this->getAttribute((isset($context["notifications"]) ? $context["notifications"] : null), "URL")) {
                // line 23
                echo "\t\t\t\t\t\t<a class=\"notification-block\" href=\"";
                if ($this->getAttribute((isset($context["notifications"]) ? $context["notifications"] : null), "UNREAD")) {
                    echo $this->getAttribute((isset($context["notifications"]) ? $context["notifications"] : null), "U_MARK_READ");
                    echo "\" data-real-url=\"";
                    echo $this->getAttribute((isset($context["notifications"]) ? $context["notifications"] : null), "URL");
                } else {
                    echo $this->getAttribute((isset($context["notifications"]) ? $context["notifications"] : null), "URL");
                }
                echo "\">
\t\t\t\t\t";
            }
            // line 25
            echo "\t\t\t\t\t\t";
            if ($this->getAttribute((isset($context["notifications"]) ? $context["notifications"] : null), "AVATAR")) {
                echo $this->getAttribute((isset($context["notifications"]) ? $context["notifications"] : null), "AVATAR");
            } else {
                echo "<img src=\"";
                echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
                echo "/images/no_avatar.gif\" alt=\"\" />";
            }
            // line 26
            echo "\t\t\t\t\t\t<div class=\"notification_text\">
\t\t\t\t\t\t\t<p class=\"notification-title\">";
            // line 27
            echo $this->getAttribute((isset($context["notifications"]) ? $context["notifications"] : null), "FORMATTED_TITLE");
            echo "</p>
\t\t\t\t\t\t\t";
            // line 28
            if ($this->getAttribute((isset($context["notifications"]) ? $context["notifications"] : null), "REFERENCE")) {
                echo "<p class=\"notification-reference\">";
                echo $this->getAttribute((isset($context["notifications"]) ? $context["notifications"] : null), "REFERENCE");
                echo "</p>";
            }
            // line 29
            echo "\t\t\t\t\t\t\t";
            if ($this->getAttribute((isset($context["notifications"]) ? $context["notifications"] : null), "FORUM")) {
                echo "<p class=\"notification-forum\">";
                echo $this->getAttribute((isset($context["notifications"]) ? $context["notifications"] : null), "FORUM");
                echo "</p>";
            }
            // line 30
            echo "\t\t\t\t\t\t\t";
            if ($this->getAttribute((isset($context["notifications"]) ? $context["notifications"] : null), "REASON")) {
                echo "<p class=\"notification-reason\">";
                echo $this->getAttribute((isset($context["notifications"]) ? $context["notifications"] : null), "REASON");
                echo "</p>";
            }
            // line 31
            echo "\t\t\t\t\t\t\t<p class=\"notification-time\">";
            echo $this->getAttribute((isset($context["notifications"]) ? $context["notifications"] : null), "TIME");
            echo "</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            // line 33
            if ($this->getAttribute((isset($context["notifications"]) ? $context["notifications"] : null), "URL")) {
                echo "</a>";
            }
            // line 34
            echo "\t\t\t\t\t";
            if ($this->getAttribute((isset($context["notifications"]) ? $context["notifications"] : null), "UNREAD")) {
                // line 35
                echo "\t\t\t\t\t\t<a href=\"";
                echo $this->getAttribute((isset($context["notifications"]) ? $context["notifications"] : null), "U_MARK_READ");
                echo "\" class=\"mark_read icon-mark\" data-ajax=\"notification.mark_read\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("MARK_READ");
                echo "\"></a>
\t\t\t\t\t";
            }
            // line 37
            echo "\t\t\t\t</li>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notifications'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "\t\t</ul>

\t\t<div class=\"footer\">
\t\t\t<a href=\"";
        // line 42
        echo (isset($context["U_VIEW_ALL_NOTIFICATIONS"]) ? $context["U_VIEW_ALL_NOTIFICATIONS"] : null);
        echo "\"><span>";
        echo $this->env->getExtension('phpbb')->lang("SEE_ALL");
        echo "</span></a>
\t\t</div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "notification_dropdown.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 42,  160 => 39,  153 => 37,  145 => 35,  142 => 34,  138 => 33,  125 => 30,  118 => 29,  112 => 28,  108 => 27,  105 => 26,  96 => 25,  68 => 21,  63 => 20,  52 => 15,  46 => 11,  38 => 9,  30 => 7,  25 => 5,  36 => 8,  24 => 3,  21 => 2,  731 => 111,  721 => 109,  719 => 108,  716 => 107,  694 => 106,  691 => 105,  668 => 104,  662 => 103,  640 => 102,  627 => 101,  604 => 100,  600 => 99,  591 => 98,  568 => 97,  558 => 96,  555 => 95,  524 => 90,  521 => 89,  490 => 86,  488 => 85,  479 => 84,  476 => 83,  472 => 81,  460 => 80,  452 => 79,  447 => 78,  429 => 72,  404 => 70,  393 => 66,  389 => 64,  367 => 63,  358 => 61,  325 => 58,  322 => 57,  301 => 52,  298 => 51,  276 => 50,  267 => 48,  253 => 46,  220 => 44,  205 => 43,  183 => 42,  177 => 38,  155 => 37,  151 => 35,  148 => 34,  139 => 33,  131 => 32,  128 => 31,  126 => 30,  123 => 29,  116 => 27,  109 => 25,  102 => 24,  90 => 21,  82 => 22,  71 => 16,  69 => 15,  66 => 14,  64 => 13,  61 => 12,  39 => 11,  32 => 7,  26 => 6,  544 => 119,  541 => 118,  531 => 114,  527 => 112,  525 => 111,  520 => 108,  498 => 88,  494 => 105,  481 => 104,  459 => 103,  454 => 100,  446 => 95,  438 => 94,  432 => 93,  424 => 92,  419 => 90,  416 => 89,  413 => 88,  391 => 87,  385 => 84,  381 => 83,  361 => 81,  351 => 73,  329 => 72,  320 => 70,  316 => 68,  289 => 65,  286 => 64,  264 => 47,  256 => 60,  244 => 56,  242 => 45,  239 => 54,  231 => 52,  229 => 51,  222 => 49,  218 => 48,  213 => 47,  196 => 32,  194 => 31,  184 => 23,  178 => 21,  176 => 20,  173 => 19,  149 => 17,  106 => 14,  95 => 22,  73 => 11,  62 => 10,  60 => 9,  35 => 7,  22 => 2,  532 => 94,  529 => 93,  507 => 72,  504 => 71,  499 => 68,  477 => 67,  466 => 66,  444 => 77,  439 => 63,  436 => 62,  434 => 74,  431 => 73,  426 => 71,  403 => 56,  377 => 82,  355 => 54,  350 => 60,  347 => 59,  345 => 50,  342 => 49,  337 => 46,  314 => 56,  305 => 44,  294 => 67,  272 => 42,  269 => 49,  257 => 40,  254 => 39,  252 => 58,  249 => 37,  227 => 36,  224 => 35,  217 => 31,  212 => 30,  206 => 28,  203 => 27,  195 => 25,  193 => 24,  186 => 23,  179 => 22,  164 => 20,  159 => 19,  157 => 18,  154 => 17,  132 => 31,  129 => 15,  117 => 15,  114 => 13,  92 => 12,  84 => 23,  81 => 8,  79 => 18,  57 => 17,  54 => 16,  48 => 4,  34 => 3,  31 => 6,  19 => 1,);
    }
}
