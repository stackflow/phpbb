<?php

/* forumlist_body.html */
class __TwigTemplate_5d7b2f438b67ac89c84e6a444beec85b extends Twig_Template
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
        echo "
";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "forumrow"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["forumrow"]) {
            // line 3
            echo "\t";
            if ((($this->getAttribute((isset($context["forumrow"]) ? $context["forumrow"] : null), "S_IS_CAT") && (!$this->getAttribute((isset($context["forumrow"]) ? $context["forumrow"] : null), "S_FIRST_ROW"))) || $this->getAttribute((isset($context["forumrow"]) ? $context["forumrow"] : null), "S_NO_CAT"))) {
                // line 4
                echo "\t\t\t</ul>

\t\t\t</div>
\t\t</div>
\t";
            }
            // line 9
            echo "
\t";
            // line 10
            if ($this->env->getLoader()->exists('@nickvergessen_newspage/event/forumlist_body_category_header_before.html')) {
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array('nickvergessen_newspage', '__main__'));
                $this->env->loadTemplate('@nickvergessen_newspage/event/forumlist_body_category_header_before.html')->display($context);
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }

            if ($this->env->getLoader()->exists('@sarafan_guru/event/forumlist_body_category_header_before.html')) {
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array('sarafan_guru', '__main__'));
                $this->env->loadTemplate('@sarafan_guru/event/forumlist_body_category_header_before.html')->display($context);
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }

            if ($this->env->getLoader()->exists('@uloginteam_ulogin/event/forumlist_body_category_header_before.html')) {
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array('uloginteam_ulogin', '__main__'));
                $this->env->loadTemplate('@uloginteam_ulogin/event/forumlist_body_category_header_before.html')->display($context);
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }

            // line 11
            echo "\t";
            if ((($this->getAttribute((isset($context["forumrow"]) ? $context["forumrow"] : null), "S_IS_CAT") || $this->getAttribute((isset($context["forumrow"]) ? $context["forumrow"] : null), "S_FIRST_ROW")) || $this->getAttribute((isset($context["forumrow"]) ? $context["forumrow"] : null), "S_NO_CAT"))) {
                // line 12
                echo "\t\t<div class=\"forabg\">
\t\t\t<div class=\"inner\">
\t\t\t<ul class=\"topiclist\">
\t\t\t\t<li class=\"header\">
\t\t\t\t\t";
                // line 16
                if ($this->env->getLoader()->exists('@nickvergessen_newspage/event/forumlist_body_category_header_row_prepend.html')) {
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array('nickvergessen_newspage', '__main__'));
                    $this->env->loadTemplate('@nickvergessen_newspage/event/forumlist_body_category_header_row_prepend.html')->display($context);
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }

                if ($this->env->getLoader()->exists('@sarafan_guru/event/forumlist_body_category_header_row_prepend.html')) {
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array('sarafan_guru', '__main__'));
                    $this->env->loadTemplate('@sarafan_guru/event/forumlist_body_category_header_row_prepend.html')->display($context);
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }

                if ($this->env->getLoader()->exists('@uloginteam_ulogin/event/forumlist_body_category_header_row_prepend.html')) {
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array('uloginteam_ulogin', '__main__'));
                    $this->env->loadTemplate('@uloginteam_ulogin/event/forumlist_body_category_header_row_prepend.html')->display($context);
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }

                // line 17
                echo "\t\t\t\t\t<dl class=\"icon\">
\t\t\t\t\t\t<dt><div class=\"list-inner\">";
                // line 18
                if ($this->getAttribute((isset($context["forumrow"]) ? $context["forumrow"] : null), "S_IS_CAT")) {
                    echo "<a href=\"";
                    echo $this->getAttribute((isset($context["forumrow"]) ? $context["forumrow"] : null), "U_VIEWFORUM");
                    echo "\">";
                    echo $this->getAttribute((isset($context["forumrow"]) ? $context["forumrow"] : null), "FORUM_NAME");
                    echo "</a>";
                } else {
                    echo $this->env->getExtension('phpbb')->lang("FORUM");
                }
                echo "</div></dt>
\t\t\t\t\t\t<dd class=\"topics\">";
                // line 19
                echo $this->env->getExtension('phpbb')->lang("TOPICS");
                echo "</dd>
\t\t\t\t\t\t<dd class=\"posts\">";
                // line 20
                echo $this->env->getExtension('phpbb')->lang("POSTS");
                echo "</dd>
\t\t\t\t\t\t<dd class=\"lastpost\"><span>";
                // line 21
                echo $this->env->getExtension('phpbb')->lang("LAST_POST");
                echo "</span></dd>
\t\t\t\t\t</dl>
\t\t\t\t\t";
                // line 23
                if ($this->env->getLoader()->exists('@nickvergessen_newspage/event/forumlist_body_category_header_row_append.html')) {
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array('nickvergessen_newspage', '__main__'));
                    $this->env->loadTemplate('@nickvergessen_newspage/event/forumlist_body_category_header_row_append.html')->display($context);
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }

                if ($this->env->getLoader()->exists('@sarafan_guru/event/forumlist_body_category_header_row_append.html')) {
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array('sarafan_guru', '__main__'));
                    $this->env->loadTemplate('@sarafan_guru/event/forumlist_body_category_header_row_append.html')->display($context);
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }

                if ($this->env->getLoader()->exists('@uloginteam_ulogin/event/forumlist_body_category_header_row_append.html')) {
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array('uloginteam_ulogin', '__main__'));
                    $this->env->loadTemplate('@uloginteam_ulogin/event/forumlist_body_category_header_row_append.html')->display($context);
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }

                // line 24
                echo "\t\t\t\t</li>
\t\t\t</ul>
\t\t\t<ul class=\"topiclist forums\">
\t";
            }
            // line 28
            echo "\t";
            if ($this->env->getLoader()->exists('@nickvergessen_newspage/event/forumlist_body_category_header_after.html')) {
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array('nickvergessen_newspage', '__main__'));
                $this->env->loadTemplate('@nickvergessen_newspage/event/forumlist_body_category_header_after.html')->display($context);
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }

            if ($this->env->getLoader()->exists('@sarafan_guru/event/forumlist_body_category_header_after.html')) {
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array('sarafan_guru', '__main__'));
                $this->env->loadTemplate('@sarafan_guru/event/forumlist_body_category_header_after.html')->display($context);
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }

            if ($this->env->getLoader()->exists('@uloginteam_ulogin/event/forumlist_body_category_header_after.html')) {
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array('uloginteam_ulogin', '__main__'));
                $this->env->loadTemplate('@uloginteam_ulogin/event/forumlist_body_category_header_after.html')->display($context);
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }

            // line 29
            echo "
\t";
            // line 30
            if ((!$this->getAttribute((isset($context["forumrow"]) ? $context["forumrow"] : null), "S_IS_CAT"))) {
                // line 31
                echo "\t\t";
                if ($this->env->getLoader()->exists('@nickvergessen_newspage/event/forumlist_body_forum_row_before.html')) {
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array('nickvergessen_newspage', '__main__'));
                    $this->env->loadTemplate('@nickvergessen_newspage/event/forumlist_body_forum_row_before.html')->display($context);
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }

                if ($this->env->getLoader()->exists('@sarafan_guru/event/forumlist_body_forum_row_before.html')) {
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array('sarafan_guru', '__main__'));
                    $this->env->loadTemplate('@sarafan_guru/event/forumlist_body_forum_row_before.html')->display($context);
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }

                if ($this->env->getLoader()->exists('@uloginteam_ulogin/event/forumlist_body_forum_row_before.html')) {
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array('uloginteam_ulogin', '__main__'));
                    $this->env->loadTemplate('@uloginteam_ulogin/event/forumlist_body_forum_row_before.html')->display($context);
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }

                // line 32
                echo "\t\t<li class=\"row\">
\t\t\t";
                // line 33
                if ($this->env->getLoader()->exists('@nickvergessen_newspage/event/forumlist_body_forum_row_prepend.html')) {
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array('nickvergessen_newspage', '__main__'));
                    $this->env->loadTemplate('@nickvergessen_newspage/event/forumlist_body_forum_row_prepend.html')->display($context);
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }

                if ($this->env->getLoader()->exists('@sarafan_guru/event/forumlist_body_forum_row_prepend.html')) {
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array('sarafan_guru', '__main__'));
                    $this->env->loadTemplate('@sarafan_guru/event/forumlist_body_forum_row_prepend.html')->display($context);
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }

                if ($this->env->getLoader()->exists('@uloginteam_ulogin/event/forumlist_body_forum_row_prepend.html')) {
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array('uloginteam_ulogin', '__main__'));
                    $this->env->loadTemplate('@uloginteam_ulogin/event/forumlist_body_forum_row_prepend.html')->display($context);
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }

                // line 34
                echo "\t\t\t<dl class=\"icon ";
                echo $this->getAttribute((isset($context["forumrow"]) ? $context["forumrow"] : null), "FORUM_IMG_STYLE");
                echo "\">
\t\t\t\t<dt title=\"";
                // line 35
                echo $this->getAttribute((isset($context["forumrow"]) ? $context["forumrow"] : null), "FORUM_FOLDER_IMG_ALT");
                echo "\">
\t\t\t\t\t";
                // line 36
                if ($this->getAttribute((isset($context["forumrow"]) ? $context["forumrow"] : null), "S_UNREAD_FORUM")) {
                    echo "<a href=\"";
                    echo $this->getAttribute((isset($context["forumrow"]) ? $context["forumrow"] : null), "U_VIEWFORUM");
                    echo "\" class=\"icon-link\"></a>";
                }
                // line 37
                echo "\t\t\t\t\t<div class=\"list-inner\">
\t\t\t\t\t\t";
                // line 38
                if (((isset($context["S_ENABLE_FEEDS"]) ? $context["S_ENABLE_FEEDS"] : null) && $this->getAttribute((isset($context["forumrow"]) ? $context["forumrow"] : null), "S_FEED_ENABLED"))) {
                    echo "<!-- <a class=\"feed-icon-forum\" title=\"";
                    echo $this->env->getExtension('phpbb')->lang("FEED");
                    echo " - ";
                    echo $this->getAttribute((isset($context["forumrow"]) ? $context["forumrow"] : null), "FORUM_NAME");
                    echo "\" href=\"";
                    echo (isset($context["U_FEED"]) ? $context["U_FEED"] : null);
                    echo "?f=";
                    echo $this->getAttribute((isset($context["forumrow"]) ? $context["forumrow"] : null), "FORUM_ID");
                    echo "\"><img src=\"";
                    echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
                    echo "/images/feed.gif\" alt=\"";
                    echo $this->env->getExtension('phpbb')->lang("FEED");
                    echo " - ";
                    echo $this->getAttribute((isset($context["forumrow"]) ? $context["forumrow"] : null), "FORUM_NAME");
                    echo "\" /></a> -->";
                }
                // line 39
                echo "
\t\t\t\t\t\t";
                // line 40
                if ($this->getAttribute((isset($context["forumrow"]) ? $context["forumrow"] : null), "FORUM_IMAGE")) {
                    echo "<span class=\"forum-image\">";
                    echo $this->getAttribute((isset($context["forumrow"]) ? $context["forumrow"] : null), "FORUM_IMAGE");
                    echo "</span>";
                }
                // line 41
                echo "\t\t\t\t\t\t<a href=\"";
                echo $this->getAttribute((isset($context["forumrow"]) ? $context["forumrow"] : null), "U_VIEWFORUM");
                echo "\" class=\"forumtitle\">";
                echo $this->getAttribute((isset($context["forumrow"]) ? $context["forumrow"] : null), "FORUM_NAME");
                echo "</a>
\t\t\t\t\t\t";
                // line 42
                if ($this->getAttribute((isset($context["forumrow"]) ? $context["forumrow"] : null), "FORUM_DESC")) {
                    echo "<br />";
                    echo $this->getAttribute((isset($context["forumrow"]) ? $context["forumrow"] : null), "FORUM_DESC");
                }
                // line 43
                echo "\t\t\t\t\t\t";
                if ($this->getAttribute((isset($context["forumrow"]) ? $context["forumrow"] : null), "MODERATORS")) {
                    // line 44
                    echo "\t\t\t\t\t\t\t<br /><strong>";
                    echo $this->getAttribute((isset($context["forumrow"]) ? $context["forumrow"] : null), "L_MODERATOR_STR");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "</strong> ";
                    echo $this->getAttribute((isset($context["forumrow"]) ? $context["forumrow"] : null), "MODERATORS");
                    echo "
\t\t\t\t\t\t";
                }
                // line 46
                echo "\t\t\t\t\t\t";
                if ((twig_length_filter($this->env, $this->getAttribute((isset($context["forumrow"]) ? $context["forumrow"] : null), "subforum")) && $this->getAttribute((isset($context["forumrow"]) ? $context["forumrow"] : null), "S_LIST_SUBFORUMS"))) {
                    // line 47
                    echo "\t\t\t\t\t\t\t";
                    if ($this->env->getLoader()->exists('@nickvergessen_newspage/event/forumlist_body_subforums_before.html')) {
                        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                        $this->env->setNamespaceLookUpOrder(array('nickvergessen_newspage', '__main__'));
                        $this->env->loadTemplate('@nickvergessen_newspage/event/forumlist_body_subforums_before.html')->display($context);
                        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                    }

                    if ($this->env->getLoader()->exists('@sarafan_guru/event/forumlist_body_subforums_before.html')) {
                        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                        $this->env->setNamespaceLookUpOrder(array('sarafan_guru', '__main__'));
                        $this->env->loadTemplate('@sarafan_guru/event/forumlist_body_subforums_before.html')->display($context);
                        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                    }

                    if ($this->env->getLoader()->exists('@uloginteam_ulogin/event/forumlist_body_subforums_before.html')) {
                        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                        $this->env->setNamespaceLookUpOrder(array('uloginteam_ulogin', '__main__'));
                        $this->env->loadTemplate('@uloginteam_ulogin/event/forumlist_body_subforums_before.html')->display($context);
                        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                    }

                    // line 48
                    echo "\t\t\t\t\t\t\t<br /><strong>";
                    echo $this->getAttribute((isset($context["forumrow"]) ? $context["forumrow"] : null), "L_SUBFORUM_STR");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "</strong>
\t\t\t\t\t\t\t";
                    // line 49
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["forumrow"]) ? $context["forumrow"] : null), "subforum"));
                    foreach ($context['_seq'] as $context["_key"] => $context["subforum"]) {
                        // line 50
                        echo "\t\t\t\t\t\t\t\t<a href=\"";
                        echo $this->getAttribute((isset($context["subforum"]) ? $context["subforum"] : null), "U_SUBFORUM");
                        echo "\" class=\"subforum";
                        if ($this->getAttribute((isset($context["subforum"]) ? $context["subforum"] : null), "S_UNREAD")) {
                            echo " unread";
                        } else {
                            echo " read";
                        }
                        echo "\" title=\"";
                        if ($this->getAttribute((isset($context["subforum"]) ? $context["subforum"] : null), "S_UNREAD")) {
                            echo $this->env->getExtension('phpbb')->lang("UNREAD_POSTS");
                        } else {
                            echo $this->env->getExtension('phpbb')->lang("NO_UNREAD_POSTS");
                        }
                        echo "\">";
                        echo $this->getAttribute((isset($context["subforum"]) ? $context["subforum"] : null), "SUBFORUM_NAME");
                        echo "</a>";
                        if ((!$this->getAttribute((isset($context["subforum"]) ? $context["subforum"] : null), "S_LAST_ROW"))) {
                            echo $this->env->getExtension('phpbb')->lang("COMMA_SEPARATOR");
                        }
                        // line 51
                        echo "\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subforum'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 52
                    echo "\t\t\t\t\t\t\t";
                    if ($this->env->getLoader()->exists('@nickvergessen_newspage/event/forumlist_body_subforums_after.html')) {
                        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                        $this->env->setNamespaceLookUpOrder(array('nickvergessen_newspage', '__main__'));
                        $this->env->loadTemplate('@nickvergessen_newspage/event/forumlist_body_subforums_after.html')->display($context);
                        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                    }

                    if ($this->env->getLoader()->exists('@sarafan_guru/event/forumlist_body_subforums_after.html')) {
                        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                        $this->env->setNamespaceLookUpOrder(array('sarafan_guru', '__main__'));
                        $this->env->loadTemplate('@sarafan_guru/event/forumlist_body_subforums_after.html')->display($context);
                        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                    }

                    if ($this->env->getLoader()->exists('@uloginteam_ulogin/event/forumlist_body_subforums_after.html')) {
                        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                        $this->env->setNamespaceLookUpOrder(array('uloginteam_ulogin', '__main__'));
                        $this->env->loadTemplate('@uloginteam_ulogin/event/forumlist_body_subforums_after.html')->display($context);
                        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                    }

                    // line 53
                    echo "\t\t\t\t\t\t";
                }
                // line 54
                echo "
\t\t\t\t\t\t";
                // line 55
                if ((!(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null))) {
                    // line 56
                    echo "\t\t\t\t\t\t<div class=\"responsive-show\" style=\"display: none;\">
\t\t\t\t\t\t\t";
                    // line 57
                    if ($this->getAttribute((isset($context["forumrow"]) ? $context["forumrow"] : null), "CLICKS")) {
                        // line 58
                        echo "\t\t\t\t\t\t\t\t";
                        echo $this->env->getExtension('phpbb')->lang("REDIRECTS");
                        echo $this->env->getExtension('phpbb')->lang("COLON");
                        echo " <strong>";
                        echo $this->getAttribute((isset($context["forumrow"]) ? $context["forumrow"] : null), "CLICKS");
                        echo "</strong>
\t\t\t\t\t\t\t";
                    } elseif (((!$this->getAttribute((isset($context["forumrow"]) ? $context["forumrow"] : null), "S_IS_LINK")) && $this->getAttribute((isset($context["forumrow"]) ? $context["forumrow"] : null), "TOPICS"))) {
                        // line 60
                        echo "\t\t\t\t\t\t\t\t";
                        echo $this->env->getExtension('phpbb')->lang("TOPICS");
                        echo $this->env->getExtension('phpbb')->lang("COLON");
                        echo " <strong>";
                        echo $this->getAttribute((isset($context["forumrow"]) ? $context["forumrow"] : null), "TOPICS");
                        echo "</strong>
\t\t\t\t\t\t\t";
                    }
                    // line 62
                    echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 64
                echo "\t\t\t\t\t</div>
\t\t\t\t</dt>
\t\t\t\t";
                // line 66
                if ($this->getAttribute((isset($context["forumrow"]) ? $context["forumrow"] : null), "CLICKS")) {
                    // line 67
                    echo "\t\t\t\t\t<dd class=\"redirect\"><span>";
                    echo $this->env->getExtension('phpbb')->lang("REDIRECTS");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo " ";
                    echo $this->getAttribute((isset($context["forumrow"]) ? $context["forumrow"] : null), "CLICKS");
                    echo "</span></dd>
\t\t\t\t";
                } elseif ((!$this->getAttribute((isset($context["forumrow"]) ? $context["forumrow"] : null), "S_IS_LINK"))) {
                    // line 69
                    echo "\t\t\t\t\t<dd class=\"topics\">";
                    echo $this->getAttribute((isset($context["forumrow"]) ? $context["forumrow"] : null), "TOPICS");
                    echo " <dfn>";
                    echo $this->env->getExtension('phpbb')->lang("TOPICS");
                    echo "</dfn></dd>
\t\t\t\t\t<dd class=\"posts\">";
                    // line 70
                    echo $this->getAttribute((isset($context["forumrow"]) ? $context["forumrow"] : null), "POSTS");
                    echo " <dfn>";
                    echo $this->env->getExtension('phpbb')->lang("POSTS");
                    echo "</dfn></dd>
\t\t\t\t\t<dd class=\"lastpost\"><span>
\t\t\t\t\t\t";
                    // line 72
                    if ($this->getAttribute((isset($context["forumrow"]) ? $context["forumrow"] : null), "U_UNAPPROVED_TOPICS")) {
                        // line 73
                        echo "\t\t\t\t\t\t\t<a href=\"";
                        echo $this->getAttribute((isset($context["forumrow"]) ? $context["forumrow"] : null), "U_UNAPPROVED_TOPICS");
                        echo "\">";
                        echo (isset($context["UNAPPROVED_IMG"]) ? $context["UNAPPROVED_IMG"] : null);
                        echo "</a>
\t\t\t\t\t\t";
                    } elseif ($this->getAttribute((isset($context["forumrow"]) ? $context["forumrow"] : null), "U_UNAPPROVED_POSTS")) {
                        // line 75
                        echo "\t\t\t\t\t\t\t<a href=\"";
                        echo $this->getAttribute((isset($context["forumrow"]) ? $context["forumrow"] : null), "U_UNAPPROVED_POSTS");
                        echo "\">";
                        echo (isset($context["UNAPPROVED_POST_IMG"]) ? $context["UNAPPROVED_POST_IMG"] : null);
                        echo "</a>
\t\t\t\t\t\t";
                    }
                    // line 77
                    echo "\t\t\t\t\t\t";
                    if ($this->getAttribute((isset($context["forumrow"]) ? $context["forumrow"] : null), "LAST_POST_TIME")) {
                        echo "<dfn>";
                        echo $this->env->getExtension('phpbb')->lang("LAST_POST");
                        echo "</dfn>
\t\t\t\t\t\t";
                        // line 78
                        if ($this->getAttribute((isset($context["forumrow"]) ? $context["forumrow"] : null), "S_DISPLAY_SUBJECT")) {
                            // line 79
                            echo "\t\t\t\t\t\t\t";
                            if ($this->env->getLoader()->exists('@nickvergessen_newspage/event/forumlist_body_last_post_title_prepend.html')) {
                                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                                $this->env->setNamespaceLookUpOrder(array('nickvergessen_newspage', '__main__'));
                                $this->env->loadTemplate('@nickvergessen_newspage/event/forumlist_body_last_post_title_prepend.html')->display($context);
                                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                            }

                            if ($this->env->getLoader()->exists('@sarafan_guru/event/forumlist_body_last_post_title_prepend.html')) {
                                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                                $this->env->setNamespaceLookUpOrder(array('sarafan_guru', '__main__'));
                                $this->env->loadTemplate('@sarafan_guru/event/forumlist_body_last_post_title_prepend.html')->display($context);
                                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                            }

                            if ($this->env->getLoader()->exists('@uloginteam_ulogin/event/forumlist_body_last_post_title_prepend.html')) {
                                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                                $this->env->setNamespaceLookUpOrder(array('uloginteam_ulogin', '__main__'));
                                $this->env->loadTemplate('@uloginteam_ulogin/event/forumlist_body_last_post_title_prepend.html')->display($context);
                                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                            }

                            // line 80
                            echo "\t\t\t\t\t\t\t<a href=\"";
                            echo $this->getAttribute((isset($context["forumrow"]) ? $context["forumrow"] : null), "U_LAST_POST");
                            echo "\" title=\"";
                            echo $this->getAttribute((isset($context["forumrow"]) ? $context["forumrow"] : null), "LAST_POST_SUBJECT");
                            echo "\" class=\"lastsubject\">";
                            echo $this->getAttribute((isset($context["forumrow"]) ? $context["forumrow"] : null), "LAST_POST_SUBJECT_TRUNCATED");
                            echo "</a> <br />
\t\t\t\t\t\t";
                        }
                        // line 81
                        echo " 
\t\t\t\t\t\t";
                        // line 82
                        echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
                        echo " ";
                        echo $this->getAttribute((isset($context["forumrow"]) ? $context["forumrow"] : null), "LAST_POSTER_FULL");
                        echo "
\t\t\t\t\t\t";
                        // line 83
                        if ((!(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null))) {
                            echo "<a href=\"";
                            echo $this->getAttribute((isset($context["forumrow"]) ? $context["forumrow"] : null), "U_LAST_POST");
                            echo "\">";
                            echo (isset($context["LAST_POST_IMG"]) ? $context["LAST_POST_IMG"] : null);
                            echo "</a> ";
                        }
                        echo "<br />";
                        echo $this->getAttribute((isset($context["forumrow"]) ? $context["forumrow"] : null), "LAST_POST_TIME");
                    } else {
                        echo $this->env->getExtension('phpbb')->lang("NO_POSTS");
                        echo "<br />&nbsp;";
                    }
                    echo "</span>
\t\t\t\t\t</dd>
\t\t\t\t";
                } else {
                    // line 86
                    echo "\t\t\t\t\t<dd>&nbsp;</dd>
\t\t\t\t";
                }
                // line 88
                echo "\t\t\t</dl>
\t\t\t";
                // line 89
                if ($this->env->getLoader()->exists('@nickvergessen_newspage/event/forumlist_body_forum_row_append.html')) {
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array('nickvergessen_newspage', '__main__'));
                    $this->env->loadTemplate('@nickvergessen_newspage/event/forumlist_body_forum_row_append.html')->display($context);
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }

                if ($this->env->getLoader()->exists('@sarafan_guru/event/forumlist_body_forum_row_append.html')) {
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array('sarafan_guru', '__main__'));
                    $this->env->loadTemplate('@sarafan_guru/event/forumlist_body_forum_row_append.html')->display($context);
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }

                if ($this->env->getLoader()->exists('@uloginteam_ulogin/event/forumlist_body_forum_row_append.html')) {
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array('uloginteam_ulogin', '__main__'));
                    $this->env->loadTemplate('@uloginteam_ulogin/event/forumlist_body_forum_row_append.html')->display($context);
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }

                // line 90
                echo "\t\t</li>
\t\t";
                // line 91
                if ($this->env->getLoader()->exists('@nickvergessen_newspage/event/forumlist_body_forum_row_after.html')) {
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array('nickvergessen_newspage', '__main__'));
                    $this->env->loadTemplate('@nickvergessen_newspage/event/forumlist_body_forum_row_after.html')->display($context);
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }

                if ($this->env->getLoader()->exists('@sarafan_guru/event/forumlist_body_forum_row_after.html')) {
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array('sarafan_guru', '__main__'));
                    $this->env->loadTemplate('@sarafan_guru/event/forumlist_body_forum_row_after.html')->display($context);
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }

                if ($this->env->getLoader()->exists('@uloginteam_ulogin/event/forumlist_body_forum_row_after.html')) {
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array('uloginteam_ulogin', '__main__'));
                    $this->env->loadTemplate('@uloginteam_ulogin/event/forumlist_body_forum_row_after.html')->display($context);
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }

                // line 92
                echo "\t";
            }
            // line 93
            echo "
\t";
            // line 94
            if ($this->getAttribute((isset($context["forumrow"]) ? $context["forumrow"] : null), "S_LAST_ROW")) {
                // line 95
                echo "\t\t\t</ul>

\t\t\t</div>
\t\t</div>
\t";
                // line 99
                if ($this->env->getLoader()->exists('@nickvergessen_newspage/event/forumlist_body_last_row_after.html')) {
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array('nickvergessen_newspage', '__main__'));
                    $this->env->loadTemplate('@nickvergessen_newspage/event/forumlist_body_last_row_after.html')->display($context);
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }

                if ($this->env->getLoader()->exists('@sarafan_guru/event/forumlist_body_last_row_after.html')) {
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array('sarafan_guru', '__main__'));
                    $this->env->loadTemplate('@sarafan_guru/event/forumlist_body_last_row_after.html')->display($context);
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }

                if ($this->env->getLoader()->exists('@uloginteam_ulogin/event/forumlist_body_last_row_after.html')) {
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array('uloginteam_ulogin', '__main__'));
                    $this->env->loadTemplate('@uloginteam_ulogin/event/forumlist_body_last_row_after.html')->display($context);
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }

                // line 100
                echo "\t";
            }
            // line 101
            echo "
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 103
            echo "\t<div class=\"panel\">
\t\t<div class=\"inner\">
\t\t<strong>";
            // line 105
            echo $this->env->getExtension('phpbb')->lang("NO_FORUMS");
            echo "</strong>
\t\t</div>
\t</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['forumrow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "forumlist_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  634 => 105,  630 => 103,  624 => 101,  621 => 100,  599 => 99,  593 => 95,  588 => 93,  585 => 92,  563 => 91,  560 => 90,  538 => 89,  535 => 88,  513 => 83,  471 => 79,  469 => 78,  462 => 77,  437 => 70,  430 => 69,  421 => 67,  415 => 64,  411 => 62,  402 => 60,  388 => 56,  386 => 55,  383 => 54,  380 => 53,  357 => 52,  330 => 50,  326 => 49,  297 => 47,  285 => 44,  282 => 43,  277 => 42,  270 => 41,  261 => 39,  243 => 38,  240 => 37,  234 => 36,  230 => 35,  225 => 34,  200 => 32,  175 => 30,  172 => 29,  143 => 24,  121 => 23,  93 => 17,  65 => 12,  40 => 10,  37 => 9,  27 => 3,  165 => 42,  160 => 39,  153 => 37,  145 => 35,  142 => 34,  138 => 33,  125 => 30,  118 => 29,  112 => 20,  108 => 19,  105 => 26,  96 => 18,  68 => 21,  63 => 20,  52 => 15,  46 => 11,  38 => 9,  30 => 4,  25 => 5,  36 => 8,  24 => 3,  21 => 2,  731 => 111,  721 => 109,  719 => 108,  716 => 107,  694 => 106,  691 => 105,  668 => 104,  662 => 103,  640 => 102,  627 => 101,  604 => 100,  600 => 99,  591 => 94,  568 => 97,  558 => 96,  555 => 95,  524 => 90,  521 => 89,  490 => 86,  488 => 85,  479 => 84,  476 => 83,  472 => 81,  460 => 80,  452 => 79,  447 => 78,  429 => 72,  404 => 70,  393 => 58,  389 => 64,  367 => 63,  358 => 61,  325 => 58,  322 => 57,  301 => 52,  298 => 51,  276 => 50,  267 => 48,  253 => 46,  220 => 44,  205 => 43,  183 => 42,  177 => 31,  155 => 37,  151 => 35,  148 => 34,  139 => 33,  131 => 32,  128 => 31,  126 => 30,  123 => 29,  116 => 21,  109 => 25,  102 => 24,  90 => 21,  82 => 22,  71 => 16,  69 => 15,  66 => 14,  64 => 13,  61 => 12,  39 => 11,  32 => 7,  26 => 6,  544 => 119,  541 => 118,  531 => 86,  527 => 112,  525 => 111,  520 => 108,  498 => 88,  494 => 80,  481 => 104,  459 => 103,  454 => 75,  446 => 73,  438 => 94,  432 => 93,  424 => 92,  419 => 66,  416 => 89,  413 => 88,  391 => 57,  385 => 84,  381 => 83,  361 => 81,  351 => 51,  329 => 72,  320 => 48,  316 => 68,  289 => 65,  286 => 64,  264 => 40,  256 => 60,  244 => 56,  242 => 45,  239 => 54,  231 => 52,  229 => 51,  222 => 49,  218 => 48,  213 => 47,  196 => 32,  194 => 31,  184 => 23,  178 => 21,  176 => 20,  173 => 19,  149 => 28,  106 => 14,  95 => 22,  73 => 11,  62 => 11,  60 => 9,  35 => 7,  22 => 2,  532 => 94,  529 => 93,  507 => 82,  504 => 81,  499 => 68,  477 => 67,  466 => 66,  444 => 72,  439 => 63,  436 => 62,  434 => 74,  431 => 73,  426 => 71,  403 => 56,  377 => 82,  355 => 54,  350 => 60,  347 => 59,  345 => 50,  342 => 49,  337 => 46,  314 => 56,  305 => 44,  294 => 46,  272 => 42,  269 => 49,  257 => 40,  254 => 39,  252 => 58,  249 => 37,  227 => 36,  224 => 35,  217 => 31,  212 => 30,  206 => 28,  203 => 33,  195 => 25,  193 => 24,  186 => 23,  179 => 22,  164 => 20,  159 => 19,  157 => 18,  154 => 17,  132 => 31,  129 => 15,  117 => 15,  114 => 13,  92 => 12,  84 => 23,  81 => 8,  79 => 18,  57 => 17,  54 => 16,  48 => 4,  34 => 3,  31 => 6,  19 => 1,);
    }
}
