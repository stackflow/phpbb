<?php

/* overall_header.html */
class __TwigTemplate_1d08cab2def70b30ba675d24e232594c extends Twig_Template
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
        echo "<!DOCTYPE html>
<html dir=\"";
        // line 2
        echo (isset($context["S_CONTENT_DIRECTION"]) ? $context["S_CONTENT_DIRECTION"] : null);
        echo "\" lang=\"";
        echo (isset($context["S_USER_LANG"]) ? $context["S_USER_LANG"] : null);
        echo "\">
<head>
<meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
";
        // line 6
        if ((isset($context["META"]) ? $context["META"] : null)) {
            echo (isset($context["META"]) ? $context["META"] : null);
        }
        // line 7
        echo "<title>";
        echo (isset($context["PAGE_TITLE"]) ? $context["PAGE_TITLE"] : null);
        echo "</title>

<link href=\"style/admin.css?assets_version=";
        // line 9
        echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\" />

<script type=\"text/javascript\">
// <![CDATA[
var jump_page = '";
        // line 13
        echo addslashes($this->env->getExtension('phpbb')->lang("JUMP_PAGE"));
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "';
var on_page = '";
        // line 14
        echo (isset($context["CURRENT_PAGE"]) ? $context["CURRENT_PAGE"] : null);
        echo "';
var per_page = '";
        // line 15
        echo (isset($context["PER_PAGE"]) ? $context["PER_PAGE"] : null);
        echo "';
var base_url = '";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["BASE_URL"]) ? $context["BASE_URL"] : null), "js");
        echo "';

/**
* Jump to page
*/
function jumpto()
{
\tvar page = prompt(jump_page, on_page);

\tif (page !== null && !isNaN(page) && page == Math.floor(page) && page > 0)
\t{
\t\tif (base_url.indexOf('?') == -1)
\t\t{
\t\t\tdocument.location.href = base_url + '?start=' + ((page - 1) * per_page);
\t\t}
\t\telse
\t\t{
\t\t\tdocument.location.href = base_url.replace(/&amp;/g, '&') + '&start=' + ((page - 1) * per_page);
\t\t}
\t}
}

/**
* Mark/unmark checkboxes
* id = ID of parent container, name = name prefix, state = state [true/false]
*/
function marklist(id, name, state)
{
\tvar parent = document.getElementById(id) || document[id];

\tif (!parent)
\t{
\t\treturn;
\t}

\tvar rb = parent.getElementsByTagName('input');
\t
\tfor (var r = 0; r < rb.length; r++)
\t{
\t\tif (rb[r].name.substr(0, name.length) == name)
\t\t{
\t\t\trb[r].checked = state;
\t\t}
\t}
}

/**
* Find a member
*/
function find_username(url)
{
\tpopup(url, 760, 570, '_usersearch');
\treturn false;
}

/**
* Window popup
*/
function popup(url, width, height, name)
{
\tif (!name)
\t{
\t\tname = '_popup';
\t}

\twindow.open(url.replace(/&amp;/g, '&'), name, 'height=' + height + ',resizable=yes,scrollbars=yes, width=' + width);
\treturn false;
}

// ]]>
</script>

";
        // line 88
        if ($this->env->getLoader()->exists('@nickvergessen_newspage/event/acp_overall_header_head_append.html')) {
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array('nickvergessen_newspage', '__main__'));
            $this->env->loadTemplate('@nickvergessen_newspage/event/acp_overall_header_head_append.html')->display($context);
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }

        if ($this->env->getLoader()->exists('@sarafan_guru/event/acp_overall_header_head_append.html')) {
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array('sarafan_guru', '__main__'));
            $this->env->loadTemplate('@sarafan_guru/event/acp_overall_header_head_append.html')->display($context);
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }

        if ($this->env->getLoader()->exists('@uloginteam_ulogin/event/acp_overall_header_head_append.html')) {
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array('uloginteam_ulogin', '__main__'));
            $this->env->loadTemplate('@uloginteam_ulogin/event/acp_overall_header_head_append.html')->display($context);
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }

        // line 89
        echo "
";
        // line 90
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "STYLESHEETS");
        echo "

";
        // line 92
        if ($this->env->getLoader()->exists('@nickvergessen_newspage/event/acp_overall_header_stylesheets_after.html')) {
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array('nickvergessen_newspage', '__main__'));
            $this->env->loadTemplate('@nickvergessen_newspage/event/acp_overall_header_stylesheets_after.html')->display($context);
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }

        if ($this->env->getLoader()->exists('@sarafan_guru/event/acp_overall_header_stylesheets_after.html')) {
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array('sarafan_guru', '__main__'));
            $this->env->loadTemplate('@sarafan_guru/event/acp_overall_header_stylesheets_after.html')->display($context);
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }

        if ($this->env->getLoader()->exists('@uloginteam_ulogin/event/acp_overall_header_stylesheets_after.html')) {
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array('uloginteam_ulogin', '__main__'));
            $this->env->loadTemplate('@uloginteam_ulogin/event/acp_overall_header_stylesheets_after.html')->display($context);
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }

        // line 93
        echo "
</head>

<body class=\"";
        // line 96
        echo (isset($context["S_CONTENT_DIRECTION"]) ? $context["S_CONTENT_DIRECTION"] : null);
        echo " ";
        echo (isset($context["BODY_CLASS"]) ? $context["BODY_CLASS"] : null);
        echo " nojs\">

";
        // line 98
        if ($this->env->getLoader()->exists('@nickvergessen_newspage/event/acp_overall_header_body_before.html')) {
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array('nickvergessen_newspage', '__main__'));
            $this->env->loadTemplate('@nickvergessen_newspage/event/acp_overall_header_body_before.html')->display($context);
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }

        if ($this->env->getLoader()->exists('@sarafan_guru/event/acp_overall_header_body_before.html')) {
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array('sarafan_guru', '__main__'));
            $this->env->loadTemplate('@sarafan_guru/event/acp_overall_header_body_before.html')->display($context);
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }

        if ($this->env->getLoader()->exists('@uloginteam_ulogin/event/acp_overall_header_body_before.html')) {
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array('uloginteam_ulogin', '__main__'));
            $this->env->loadTemplate('@uloginteam_ulogin/event/acp_overall_header_body_before.html')->display($context);
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }

        // line 99
        echo "
<div id=\"wrap\">
\t<div id=\"page-header\">
\t\t<h1>";
        // line 102
        echo $this->env->getExtension('phpbb')->lang("ADMIN_PANEL");
        echo "</h1>
\t\t<p><a href=\"";
        // line 103
        echo (isset($context["U_ADM_INDEX"]) ? $context["U_ADM_INDEX"] : null);
        echo "\">";
        echo $this->env->getExtension('phpbb')->lang("ADMIN_INDEX");
        echo "</a> &bull; <a href=\"";
        echo (isset($context["U_INDEX"]) ? $context["U_INDEX"] : null);
        echo "\">";
        echo $this->env->getExtension('phpbb')->lang("FORUM_INDEX");
        echo "</a></p>
\t\t<p id=\"skip\"><a href=\"#acp\">";
        // line 104
        echo $this->env->getExtension('phpbb')->lang("SKIP");
        echo "</a></p>
\t</div>
\t
\t<div id=\"page-body\">
\t\t<div id=\"tabs\">
\t\t\t<ul>
\t\t\t";
        // line 110
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "t_block1"));
        foreach ($context['_seq'] as $context["_key"] => $context["t_block1"]) {
            // line 111
            echo "\t\t\t\t<li class=\"tab";
            if ($this->getAttribute((isset($context["t_block1"]) ? $context["t_block1"] : null), "S_SELECTED")) {
                echo " activetab";
            }
            echo "\"><a href=\"";
            echo $this->getAttribute((isset($context["t_block1"]) ? $context["t_block1"] : null), "U_TITLE");
            echo "\">";
            echo $this->getAttribute((isset($context["t_block1"]) ? $context["t_block1"] : null), "L_TITLE");
            echo "</a></li>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t_block1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        echo "\t\t\t</ul>
\t\t</div>

\t\t<div id=\"acp\">
\t\t\t\t<div id=\"content\">
\t\t\t\t\t<div id=\"menu\">
\t\t\t\t\t\t<p>";
        // line 119
        echo $this->env->getExtension('phpbb')->lang("LOGGED_IN_AS");
        echo "<br /><strong>";
        echo (isset($context["USERNAME"]) ? $context["USERNAME"] : null);
        echo "</strong> [&nbsp;<a href=\"";
        echo (isset($context["U_LOGOUT"]) ? $context["U_LOGOUT"] : null);
        echo "\">";
        echo $this->env->getExtension('phpbb')->lang("LOGOUT");
        echo "</a>&nbsp;][&nbsp;<a href=\"";
        echo (isset($context["U_ADM_LOGOUT"]) ? $context["U_ADM_LOGOUT"] : null);
        echo "\">";
        echo $this->env->getExtension('phpbb')->lang("ADM_LOGOUT");
        echo "</a>&nbsp;]&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
\t\t\t\t\t\t";
        // line 120
        $value = 0;
        $context['definition']->set('LI_USED', $value);
        // line 121
        echo "\t\t\t\t\t\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "l_block1"));
        foreach ($context['_seq'] as $context["_key"] => $context["l_block1"]) {
            // line 122
            echo "\t\t\t\t\t\t\t";
            if ($this->getAttribute((isset($context["l_block1"]) ? $context["l_block1"] : null), "S_SELECTED")) {
                // line 123
                echo "\t
\t\t\t\t\t\t";
                // line 124
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["l_block1"]) ? $context["l_block1"] : null), "l_block2"));
                foreach ($context['_seq'] as $context["_key"] => $context["l_block2"]) {
                    // line 125
                    echo "\t\t\t\t\t\t\t";
                    if (twig_length_filter($this->env, $this->getAttribute((isset($context["l_block2"]) ? $context["l_block2"] : null), "l_block3"))) {
                        // line 126
                        echo "\t\t\t\t\t\t\t";
                        if ($this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "LI_USED")) {
                            echo "</ul></div>";
                        }
                        // line 127
                        echo "\t\t\t\t\t\t\t<div class=\"menu-block\">
\t\t\t\t\t\t\t\t<a class=\"header\" href=\"javascript:void(0);\">";
                        // line 128
                        echo $this->getAttribute((isset($context["l_block2"]) ? $context["l_block2"] : null), "L_TITLE");
                        echo "</a>
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t";
                        // line 130
                        $value = 1;
                        $context['definition']->set('LI_USED', $value);
                        // line 131
                        echo "\t\t\t\t\t\t\t";
                    }
                    // line 132
                    echo "\t
\t\t\t\t\t\t\t";
                    // line 133
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["l_block2"]) ? $context["l_block2"] : null), "l_block3"));
                    foreach ($context['_seq'] as $context["_key"] => $context["l_block3"]) {
                        // line 134
                        echo "\t\t\t\t\t\t\t\t<li";
                        if ($this->getAttribute((isset($context["l_block3"]) ? $context["l_block3"] : null), "S_SELECTED")) {
                            echo " id=\"activemenu\"";
                        }
                        echo "><a href=\"";
                        echo $this->getAttribute((isset($context["l_block3"]) ? $context["l_block3"] : null), "U_TITLE");
                        echo "\"><span>";
                        echo $this->getAttribute((isset($context["l_block3"]) ? $context["l_block3"] : null), "L_TITLE");
                        echo "</span></a></li>
\t\t\t\t\t\t\t\t";
                        // line 135
                        $value = 1;
                        $context['definition']->set('LI_USED', $value);
                        // line 136
                        echo "\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l_block3'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 137
                    echo "\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l_block2'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 138
                echo "\t\t\t\t\t\t
\t\t\t\t\t\t\t";
            }
            // line 140
            echo "\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l_block1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 141
        echo "\t\t\t\t\t\t";
        if ($this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "LI_USED")) {
            // line 142
            echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 145
        echo "\t\t\t\t\t</div>
\t
\t\t\t\t\t<div id=\"main\">
\t\t\t\t\t\t<div class=\"main\">
";
    }

    public function getTemplateName()
    {
        return "overall_header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  382 => 145,  377 => 142,  374 => 141,  368 => 140,  364 => 138,  358 => 137,  349 => 135,  338 => 134,  334 => 133,  331 => 132,  328 => 131,  325 => 130,  320 => 128,  317 => 127,  309 => 125,  305 => 124,  302 => 123,  294 => 121,  277 => 119,  269 => 113,  250 => 110,  241 => 104,  227 => 102,  222 => 99,  200 => 98,  193 => 96,  188 => 93,  161 => 90,  158 => 89,  136 => 88,  61 => 16,  57 => 15,  53 => 14,  48 => 13,  35 => 7,  22 => 2,  871 => 291,  868 => 290,  864 => 288,  859 => 285,  850 => 282,  847 => 281,  840 => 278,  835 => 277,  831 => 276,  826 => 274,  822 => 273,  818 => 272,  815 => 271,  802 => 270,  798 => 269,  794 => 267,  789 => 266,  782 => 262,  778 => 261,  774 => 260,  770 => 259,  766 => 258,  756 => 253,  751 => 251,  745 => 249,  743 => 248,  740 => 247,  735 => 244,  726 => 241,  722 => 240,  718 => 239,  714 => 238,  711 => 237,  707 => 236,  700 => 232,  696 => 231,  692 => 230,  688 => 229,  678 => 224,  673 => 222,  667 => 220,  665 => 219,  662 => 218,  658 => 216,  636 => 215,  629 => 211,  623 => 210,  618 => 208,  615 => 207,  608 => 203,  602 => 202,  596 => 200,  594 => 199,  587 => 195,  581 => 194,  576 => 192,  569 => 188,  563 => 187,  558 => 185,  551 => 181,  545 => 180,  540 => 178,  533 => 174,  529 => 173,  524 => 171,  517 => 167,  513 => 166,  508 => 164,  503 => 162,  500 => 161,  498 => 160,  492 => 156,  487 => 153,  482 => 151,  476 => 150,  474 => 149,  455 => 147,  449 => 145,  443 => 142,  438 => 141,  434 => 140,  429 => 139,  423 => 136,  418 => 135,  414 => 134,  409 => 133,  403 => 130,  398 => 129,  394 => 128,  389 => 127,  381 => 122,  376 => 121,  372 => 120,  367 => 119,  361 => 116,  356 => 115,  352 => 136,  347 => 113,  341 => 110,  336 => 109,  332 => 108,  327 => 107,  321 => 104,  316 => 103,  312 => 126,  307 => 101,  299 => 122,  295 => 95,  291 => 120,  287 => 93,  280 => 89,  276 => 87,  254 => 111,  251 => 85,  245 => 82,  242 => 81,  240 => 80,  237 => 79,  231 => 103,  228 => 75,  226 => 74,  223 => 73,  220 => 72,  214 => 69,  210 => 68,  207 => 67,  205 => 66,  202 => 65,  196 => 62,  192 => 61,  189 => 60,  187 => 59,  184 => 58,  178 => 55,  174 => 54,  171 => 53,  169 => 52,  166 => 92,  160 => 48,  156 => 47,  153 => 46,  150 => 45,  148 => 44,  145 => 43,  139 => 40,  135 => 39,  132 => 38,  130 => 37,  127 => 36,  121 => 33,  117 => 32,  114 => 31,  112 => 30,  109 => 29,  97 => 26,  93 => 25,  90 => 24,  78 => 21,  74 => 20,  70 => 19,  67 => 18,  65 => 17,  60 => 15,  55 => 13,  52 => 12,  46 => 9,  41 => 9,  38 => 6,  36 => 5,  31 => 6,  19 => 1,);
    }
}
