<?php

/* navbar_header.html */
class __TwigTemplate_bb32cc47b815980fcc2d0e954be164db extends Twig_Template
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

\t<ul id=\"nav-main\" class=\"linklist bulletin\" role=\"menubar\">

\t\t<li id=\"quick-links\" class=\"small-icon responsive-menu dropdown-container";
        // line 6
        if (((!(isset($context["S_DISPLAY_QUICK_LINKS"]) ? $context["S_DISPLAY_QUICK_LINKS"] : null)) && (!(isset($context["S_DISPLAY_SEARCH"]) ? $context["S_DISPLAY_SEARCH"] : null)))) {
            echo " hidden";
        }
        echo "\" data-skip-responsive=\"true\">
\t\t\t<a href=\"#\" class=\"responsive-menu-link dropdown-trigger\">";
        // line 7
        echo $this->env->getExtension('phpbb')->lang("QUICK_LINKS");
        echo "</a>
\t\t\t<div class=\"dropdown hidden\">
\t\t\t\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t\t\t\t<ul class=\"dropdown-contents\" role=\"menu\">
\t\t\t\t\t";
        // line 11
        if ($this->env->getLoader()->exists('@nickvergessen_newspage/event/navbar_header_quick_links_before.html')) {
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array('nickvergessen_newspage', '__main__'));
            $this->env->loadTemplate('@nickvergessen_newspage/event/navbar_header_quick_links_before.html')->display($context);
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }

        if ($this->env->getLoader()->exists('@sarafan_guru/event/navbar_header_quick_links_before.html')) {
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array('sarafan_guru', '__main__'));
            $this->env->loadTemplate('@sarafan_guru/event/navbar_header_quick_links_before.html')->display($context);
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }

        if ($this->env->getLoader()->exists('@uloginteam_ulogin/event/navbar_header_quick_links_before.html')) {
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array('uloginteam_ulogin', '__main__'));
            $this->env->loadTemplate('@uloginteam_ulogin/event/navbar_header_quick_links_before.html')->display($context);
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }

        // line 12
        echo "
\t\t\t\t\t";
        // line 13
        if ((isset($context["S_DISPLAY_SEARCH"]) ? $context["S_DISPLAY_SEARCH"] : null)) {
            // line 14
            echo "\t\t\t\t\t\t<li class=\"separator\"></li>
\t\t\t\t\t\t";
            // line 15
            if ((isset($context["S_REGISTERED_USER"]) ? $context["S_REGISTERED_USER"] : null)) {
                // line 16
                echo "\t\t\t\t\t\t\t<li class=\"small-icon icon-search-self\"><a href=\"";
                echo (isset($context["U_SEARCH_SELF"]) ? $context["U_SEARCH_SELF"] : null);
                echo "\" role=\"menuitem\">";
                echo $this->env->getExtension('phpbb')->lang("SEARCH_SELF");
                echo "</a></li>
\t\t\t\t\t\t";
            }
            // line 18
            echo "\t\t\t\t\t\t";
            if ((isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null)) {
                // line 19
                echo "\t\t\t\t\t\t\t<li class=\"small-icon icon-search-new\"><a href=\"";
                echo (isset($context["U_SEARCH_NEW"]) ? $context["U_SEARCH_NEW"] : null);
                echo "\" role=\"menuitem\">";
                echo $this->env->getExtension('phpbb')->lang("SEARCH_NEW");
                echo "</a></li>
\t\t\t\t\t\t";
            }
            // line 21
            echo "\t\t\t\t\t\t";
            if ((isset($context["S_LOAD_UNREADS"]) ? $context["S_LOAD_UNREADS"] : null)) {
                echo " 
\t\t\t\t\t\t\t<li class=\"small-icon icon-search-unread\"><a href=\"";
                // line 22
                echo (isset($context["U_SEARCH_UNREAD"]) ? $context["U_SEARCH_UNREAD"] : null);
                echo "\" role=\"menuitem\">";
                echo $this->env->getExtension('phpbb')->lang("SEARCH_UNREAD");
                echo "</a></li>
\t\t\t\t\t\t";
            }
            // line 24
            echo "\t\t\t\t\t\t<li class=\"small-icon icon-search-unanswered\"><a href=\"";
            echo (isset($context["U_SEARCH_UNANSWERED"]) ? $context["U_SEARCH_UNANSWERED"] : null);
            echo "\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb')->lang("SEARCH_UNANSWERED");
            echo "</a></li>
\t\t\t\t\t\t<li class=\"small-icon icon-search-active\"><a href=\"";
            // line 25
            echo (isset($context["U_SEARCH_ACTIVE_TOPICS"]) ? $context["U_SEARCH_ACTIVE_TOPICS"] : null);
            echo "\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb')->lang("SEARCH_ACTIVE_TOPICS");
            echo "</a></li>
\t\t\t\t\t\t<li class=\"separator\"></li>
\t\t\t\t\t\t<li class=\"small-icon icon-search\"><a href=\"";
            // line 27
            echo (isset($context["U_SEARCH"]) ? $context["U_SEARCH"] : null);
            echo "\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb')->lang("SEARCH");
            echo "</a></li>
\t\t\t\t\t";
        }
        // line 29
        echo "
\t\t\t\t\t";
        // line 30
        if (((!(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) && ((isset($context["S_DISPLAY_MEMBERLIST"]) ? $context["S_DISPLAY_MEMBERLIST"] : null) || (isset($context["U_TEAM"]) ? $context["U_TEAM"] : null)))) {
            // line 31
            echo "\t\t\t\t\t\t<li class=\"separator\"></li>
\t\t\t\t\t\t";
            // line 32
            if ((isset($context["S_DISPLAY_MEMBERLIST"]) ? $context["S_DISPLAY_MEMBERLIST"] : null)) {
                echo "<li class=\"small-icon icon-members\"><a href=\"";
                echo (isset($context["U_MEMBERLIST"]) ? $context["U_MEMBERLIST"] : null);
                echo "\" role=\"menuitem\">";
                echo $this->env->getExtension('phpbb')->lang("MEMBERLIST");
                echo "</a></li>";
            }
            // line 33
            echo "\t\t\t\t\t\t";
            if ((isset($context["U_TEAM"]) ? $context["U_TEAM"] : null)) {
                echo "<li class=\"small-icon icon-team\"><a href=\"";
                echo (isset($context["U_TEAM"]) ? $context["U_TEAM"] : null);
                echo "\" role=\"menuitem\">";
                echo $this->env->getExtension('phpbb')->lang("THE_TEAM");
                echo "</a></li>";
            }
            // line 34
            echo "\t\t\t\t\t";
        }
        // line 35
        echo "\t\t\t\t\t<li class=\"separator\"></li>

\t\t\t\t\t";
        // line 37
        if ($this->env->getLoader()->exists('@nickvergessen_newspage/event/navbar_header_quick_links_after.html')) {
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array('nickvergessen_newspage', '__main__'));
            $this->env->loadTemplate('@nickvergessen_newspage/event/navbar_header_quick_links_after.html')->display($context);
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }

        if ($this->env->getLoader()->exists('@sarafan_guru/event/navbar_header_quick_links_after.html')) {
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array('sarafan_guru', '__main__'));
            $this->env->loadTemplate('@sarafan_guru/event/navbar_header_quick_links_after.html')->display($context);
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }

        if ($this->env->getLoader()->exists('@uloginteam_ulogin/event/navbar_header_quick_links_after.html')) {
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array('uloginteam_ulogin', '__main__'));
            $this->env->loadTemplate('@uloginteam_ulogin/event/navbar_header_quick_links_after.html')->display($context);
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }

        // line 38
        echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t</li>

\t\t";
        // line 42
        if ($this->env->getLoader()->exists('@nickvergessen_newspage/event/overall_header_navigation_prepend.html')) {
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array('nickvergessen_newspage', '__main__'));
            $this->env->loadTemplate('@nickvergessen_newspage/event/overall_header_navigation_prepend.html')->display($context);
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }

        if ($this->env->getLoader()->exists('@sarafan_guru/event/overall_header_navigation_prepend.html')) {
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array('sarafan_guru', '__main__'));
            $this->env->loadTemplate('@sarafan_guru/event/overall_header_navigation_prepend.html')->display($context);
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }

        if ($this->env->getLoader()->exists('@uloginteam_ulogin/event/overall_header_navigation_prepend.html')) {
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array('uloginteam_ulogin', '__main__'));
            $this->env->loadTemplate('@uloginteam_ulogin/event/overall_header_navigation_prepend.html')->display($context);
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }

        // line 43
        echo "\t\t<li class=\"small-icon icon-faq\" ";
        if ((!(isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null))) {
            echo "data-skip-responsive=\"true\"";
        } else {
            echo "data-last-responsive=\"true\"";
        }
        echo "><a href=\"";
        echo (isset($context["U_FAQ"]) ? $context["U_FAQ"] : null);
        echo "\" rel=\"help\" title=\"";
        echo $this->env->getExtension('phpbb')->lang("FAQ_EXPLAIN");
        echo "\" role=\"menuitem\">";
        echo $this->env->getExtension('phpbb')->lang("FAQ");
        echo "</a></li>
\t\t";
        // line 44
        if ($this->env->getLoader()->exists('@nickvergessen_newspage/event/overall_header_navigation_append.html')) {
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array('nickvergessen_newspage', '__main__'));
            $this->env->loadTemplate('@nickvergessen_newspage/event/overall_header_navigation_append.html')->display($context);
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }

        if ($this->env->getLoader()->exists('@sarafan_guru/event/overall_header_navigation_append.html')) {
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array('sarafan_guru', '__main__'));
            $this->env->loadTemplate('@sarafan_guru/event/overall_header_navigation_append.html')->display($context);
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }

        if ($this->env->getLoader()->exists('@uloginteam_ulogin/event/overall_header_navigation_append.html')) {
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array('uloginteam_ulogin', '__main__'));
            $this->env->loadTemplate('@uloginteam_ulogin/event/overall_header_navigation_append.html')->display($context);
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }

        // line 45
        echo "\t\t";
        if ((isset($context["U_ACP"]) ? $context["U_ACP"] : null)) {
            echo "<li class=\"small-icon icon-acp\" data-last-responsive=\"true\"><a href=\"";
            echo (isset($context["U_ACP"]) ? $context["U_ACP"] : null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("ACP");
            echo "\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb')->lang("ACP_SHORT");
            echo "</a></li>";
        }
        // line 46
        echo "\t\t";
        if ((isset($context["U_MCP"]) ? $context["U_MCP"] : null)) {
            echo "<li class=\"small-icon icon-mcp\" data-last-responsive=\"true\"><a href=\"";
            echo (isset($context["U_MCP"]) ? $context["U_MCP"] : null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("MCP");
            echo "\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb')->lang("MCP_SHORT");
            echo "</a></li>";
        }
        // line 47
        echo "
\t";
        // line 48
        if ((isset($context["S_REGISTERED_USER"]) ? $context["S_REGISTERED_USER"] : null)) {
            // line 49
            echo "\t\t<li id=\"username_logged_in\" class=\"rightside ";
            if ((isset($context["CURRENT_USER_AVATAR"]) ? $context["CURRENT_USER_AVATAR"] : null)) {
                echo " no-bulletin";
            }
            echo "\" data-skip-responsive=\"true\">
\t\t\t";
            // line 50
            if ($this->env->getLoader()->exists('@nickvergessen_newspage/event/navbar_header_username_prepend.html')) {
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array('nickvergessen_newspage', '__main__'));
                $this->env->loadTemplate('@nickvergessen_newspage/event/navbar_header_username_prepend.html')->display($context);
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }

            if ($this->env->getLoader()->exists('@sarafan_guru/event/navbar_header_username_prepend.html')) {
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array('sarafan_guru', '__main__'));
                $this->env->loadTemplate('@sarafan_guru/event/navbar_header_username_prepend.html')->display($context);
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }

            if ($this->env->getLoader()->exists('@uloginteam_ulogin/event/navbar_header_username_prepend.html')) {
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array('uloginteam_ulogin', '__main__'));
                $this->env->loadTemplate('@uloginteam_ulogin/event/navbar_header_username_prepend.html')->display($context);
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }

            // line 51
            echo "\t\t\t<div class=\"header-profile dropdown-container\">
\t\t\t\t<a href=\"";
            // line 52
            echo (isset($context["U_PROFILE"]) ? $context["U_PROFILE"] : null);
            echo "\" class=\"header-avatar dropdown-trigger\">";
            if ((isset($context["CURRENT_USER_AVATAR"]) ? $context["CURRENT_USER_AVATAR"] : null)) {
                echo (isset($context["CURRENT_USER_AVATAR"]) ? $context["CURRENT_USER_AVATAR"] : null);
                echo " ";
            }
            echo (isset($context["CURRENT_USERNAME_SIMPLE"]) ? $context["CURRENT_USERNAME_SIMPLE"] : null);
            echo "</a>
\t\t\t\t<div class=\"dropdown hidden\">
\t\t\t\t\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t\t\t\t\t<ul class=\"dropdown-contents\" role=\"menu\">
\t\t\t\t\t\t";
            // line 56
            if ((isset($context["U_RESTORE_PERMISSIONS"]) ? $context["U_RESTORE_PERMISSIONS"] : null)) {
                echo "<li class=\"small-icon icon-restore-permissions\"><a href=\"";
                echo (isset($context["U_RESTORE_PERMISSIONS"]) ? $context["U_RESTORE_PERMISSIONS"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("RESTORE_PERMISSIONS");
                echo "</a></li>";
            }
            // line 57
            echo "\t
\t\t\t\t\t\t";
            // line 58
            if ($this->env->getLoader()->exists('@nickvergessen_newspage/event/navbar_header_profile_list_before.html')) {
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array('nickvergessen_newspage', '__main__'));
                $this->env->loadTemplate('@nickvergessen_newspage/event/navbar_header_profile_list_before.html')->display($context);
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }

            if ($this->env->getLoader()->exists('@sarafan_guru/event/navbar_header_profile_list_before.html')) {
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array('sarafan_guru', '__main__'));
                $this->env->loadTemplate('@sarafan_guru/event/navbar_header_profile_list_before.html')->display($context);
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }

            if ($this->env->getLoader()->exists('@uloginteam_ulogin/event/navbar_header_profile_list_before.html')) {
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array('uloginteam_ulogin', '__main__'));
                $this->env->loadTemplate('@uloginteam_ulogin/event/navbar_header_profile_list_before.html')->display($context);
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }

            // line 59
            echo "\t
\t\t\t\t\t\t<li class=\"small-icon icon-ucp\"><a href=\"";
            // line 60
            echo (isset($context["U_PROFILE"]) ? $context["U_PROFILE"] : null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("PROFILE");
            echo "\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb')->lang("PROFILE");
            echo "</a></li>
\t\t\t\t\t\t<li class=\"small-icon icon-profile\"><a href=\"";
            // line 61
            echo (isset($context["U_USER_PROFILE"]) ? $context["U_USER_PROFILE"] : null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("READ_PROFILE");
            echo "\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb')->lang("READ_PROFILE");
            echo "</a></li>
\t
\t\t\t\t\t\t";
            // line 63
            if ($this->env->getLoader()->exists('@nickvergessen_newspage/event/navbar_header_profile_list_after.html')) {
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array('nickvergessen_newspage', '__main__'));
                $this->env->loadTemplate('@nickvergessen_newspage/event/navbar_header_profile_list_after.html')->display($context);
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }

            if ($this->env->getLoader()->exists('@sarafan_guru/event/navbar_header_profile_list_after.html')) {
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array('sarafan_guru', '__main__'));
                $this->env->loadTemplate('@sarafan_guru/event/navbar_header_profile_list_after.html')->display($context);
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }

            if ($this->env->getLoader()->exists('@uloginteam_ulogin/event/navbar_header_profile_list_after.html')) {
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array('uloginteam_ulogin', '__main__'));
                $this->env->loadTemplate('@uloginteam_ulogin/event/navbar_header_profile_list_after.html')->display($context);
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }

            // line 64
            echo "\t
\t\t\t\t\t\t<li class=\"separator\"></li>
\t\t\t\t\t\t<li class=\"small-icon icon-logout\"><a href=\"";
            // line 66
            echo (isset($context["U_LOGIN_LOGOUT"]) ? $context["U_LOGIN_LOGOUT"] : null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("LOGIN_LOGOUT");
            echo "\" accesskey=\"x\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb')->lang("LOGIN_LOGOUT");
            echo "</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
            // line 70
            if ($this->env->getLoader()->exists('@nickvergessen_newspage/event/navbar_header_username_append.html')) {
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array('nickvergessen_newspage', '__main__'));
                $this->env->loadTemplate('@nickvergessen_newspage/event/navbar_header_username_append.html')->display($context);
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }

            if ($this->env->getLoader()->exists('@sarafan_guru/event/navbar_header_username_append.html')) {
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array('sarafan_guru', '__main__'));
                $this->env->loadTemplate('@sarafan_guru/event/navbar_header_username_append.html')->display($context);
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }

            if ($this->env->getLoader()->exists('@uloginteam_ulogin/event/navbar_header_username_append.html')) {
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array('uloginteam_ulogin', '__main__'));
                $this->env->loadTemplate('@uloginteam_ulogin/event/navbar_header_username_append.html')->display($context);
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }

            // line 71
            echo "\t\t</li>
\t\t";
            // line 72
            if ((isset($context["S_DISPLAY_PM"]) ? $context["S_DISPLAY_PM"] : null)) {
                // line 73
                echo "\t\t\t<li class=\"small-icon icon-pm rightside\" data-skip-responsive=\"true\">
\t\t\t\t<a href=\"";
                // line 74
                echo (isset($context["U_PRIVATEMSGS"]) ? $context["U_PRIVATEMSGS"] : null);
                echo "\" role=\"menuitem\"><span>";
                echo $this->env->getExtension('phpbb')->lang("PRIVATE_MESSAGES");
                echo " [</span><strong>";
                echo (isset($context["PRIVATE_MESSAGE_COUNT"]) ? $context["PRIVATE_MESSAGE_COUNT"] : null);
                echo "</strong><span>]</span></a>
\t\t\t</li>
\t\t";
            }
            // line 77
            echo "\t\t";
            if ((isset($context["S_NOTIFICATIONS_DISPLAY"]) ? $context["S_NOTIFICATIONS_DISPLAY"] : null)) {
                // line 78
                echo "\t\t\t<li class=\"small-icon icon-notification dropdown-container dropdown-";
                echo (isset($context["S_CONTENT_FLOW_END"]) ? $context["S_CONTENT_FLOW_END"] : null);
                echo " rightside\" data-skip-responsive=\"true\">
\t\t\t\t<a href=\"";
                // line 79
                echo (isset($context["U_VIEW_ALL_NOTIFICATIONS"]) ? $context["U_VIEW_ALL_NOTIFICATIONS"] : null);
                echo "\" id=\"notification_list_button\" class=\"dropdown-trigger\"><span>";
                echo $this->env->getExtension('phpbb')->lang("NOTIFICATIONS");
                echo " [</span><strong>";
                echo (isset($context["NOTIFICATIONS_COUNT"]) ? $context["NOTIFICATIONS_COUNT"] : null);
                echo "</strong><span>]</span></a>
\t\t\t\t";
                // line 80
                $location = "notification_dropdown.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->env->loadTemplate("notification_dropdown.html")->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 81
                echo "\t\t\t</li>
\t\t";
            }
            // line 83
            echo "\t";
        } else {
            // line 84
            echo "\t\t<li class=\"small-icon icon-logout rightside\"  data-skip-responsive=\"true\"><a href=\"";
            echo (isset($context["U_LOGIN_LOGOUT"]) ? $context["U_LOGIN_LOGOUT"] : null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("LOGIN_LOGOUT");
            echo "\" accesskey=\"x\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb')->lang("LOGIN_LOGOUT");
            echo "</a></li>
\t\t";
            // line 85
            if (((isset($context["S_REGISTER_ENABLED"]) ? $context["S_REGISTER_ENABLED"] : null) && (!((isset($context["S_SHOW_COPPA"]) ? $context["S_SHOW_COPPA"] : null) || (isset($context["S_REGISTRATION"]) ? $context["S_REGISTRATION"] : null))))) {
                // line 86
                echo "\t\t\t<li class=\"small-icon icon-register rightside\" data-skip-responsive=\"true\"><a href=\"";
                echo (isset($context["U_REGISTER"]) ? $context["U_REGISTER"] : null);
                echo "\" role=\"menuitem\">";
                echo $this->env->getExtension('phpbb')->lang("REGISTER");
                echo "</a></li>
\t\t";
            }
            // line 88
            echo "\t\t";
            if ($this->env->getLoader()->exists('@nickvergessen_newspage/event/navbar_header_logged_out_content.html')) {
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array('nickvergessen_newspage', '__main__'));
                $this->env->loadTemplate('@nickvergessen_newspage/event/navbar_header_logged_out_content.html')->display($context);
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }

            if ($this->env->getLoader()->exists('@sarafan_guru/event/navbar_header_logged_out_content.html')) {
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array('sarafan_guru', '__main__'));
                $this->env->loadTemplate('@sarafan_guru/event/navbar_header_logged_out_content.html')->display($context);
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }

            if ($this->env->getLoader()->exists('@uloginteam_ulogin/event/navbar_header_logged_out_content.html')) {
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array('uloginteam_ulogin', '__main__'));
                $this->env->loadTemplate('@uloginteam_ulogin/event/navbar_header_logged_out_content.html')->display($context);
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }

            // line 89
            echo "\t";
        }
        // line 90
        echo "\t</ul>

\t<ul id=\"nav-breadcrumbs\" class=\"linklist navlinks\" role=\"menubar\">
\t\t";
        // line 93
        $value = " itemtype=\"http://data-vocabulary.org/Breadcrumb\" itemscope=\"\"";
        $context['definition']->set('MICRODATA', $value);
        // line 94
        echo "\t\t";
        if ($this->env->getLoader()->exists('@nickvergessen_newspage/event/overall_header_breadcrumbs_before.html')) {
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array('nickvergessen_newspage', '__main__'));
            $this->env->loadTemplate('@nickvergessen_newspage/event/overall_header_breadcrumbs_before.html')->display($context);
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }

        if ($this->env->getLoader()->exists('@sarafan_guru/event/overall_header_breadcrumbs_before.html')) {
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array('sarafan_guru', '__main__'));
            $this->env->loadTemplate('@sarafan_guru/event/overall_header_breadcrumbs_before.html')->display($context);
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }

        if ($this->env->getLoader()->exists('@uloginteam_ulogin/event/overall_header_breadcrumbs_before.html')) {
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array('uloginteam_ulogin', '__main__'));
            $this->env->loadTemplate('@uloginteam_ulogin/event/overall_header_breadcrumbs_before.html')->display($context);
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }

        // line 95
        echo "\t\t<li class=\"small-icon icon-home breadcrumbs\">
\t\t\t";
        // line 96
        if ((isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null)) {
            echo "<span class=\"crumb\"";
            echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "MICRODATA");
            echo "><a href=\"";
            echo (isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null);
            echo "\" data-navbar-reference=\"home\" itemprop=\"url\"><span itemprop=\"title\">";
            echo $this->env->getExtension('phpbb')->lang("SITE_HOME");
            echo "</span></a></span>";
        }
        // line 97
        echo "\t\t\t";
        if ($this->env->getLoader()->exists('@nickvergessen_newspage/event/overall_header_breadcrumb_prepend.html')) {
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array('nickvergessen_newspage', '__main__'));
            $this->env->loadTemplate('@nickvergessen_newspage/event/overall_header_breadcrumb_prepend.html')->display($context);
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }

        if ($this->env->getLoader()->exists('@sarafan_guru/event/overall_header_breadcrumb_prepend.html')) {
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array('sarafan_guru', '__main__'));
            $this->env->loadTemplate('@sarafan_guru/event/overall_header_breadcrumb_prepend.html')->display($context);
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }

        if ($this->env->getLoader()->exists('@uloginteam_ulogin/event/overall_header_breadcrumb_prepend.html')) {
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array('uloginteam_ulogin', '__main__'));
            $this->env->loadTemplate('@uloginteam_ulogin/event/overall_header_breadcrumb_prepend.html')->display($context);
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }

        // line 98
        echo "\t\t\t<span class=\"crumb\"";
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "MICRODATA");
        echo "><a href=\"";
        echo (isset($context["U_INDEX"]) ? $context["U_INDEX"] : null);
        echo "\" accesskey=\"h\" data-navbar-reference=\"index\" itemprop=\"url\"><span itemprop=\"title\">";
        echo $this->env->getExtension('phpbb')->lang("INDEX");
        echo "</span></a></span>
\t\t\t";
        // line 99
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "navlinks"));
        foreach ($context['_seq'] as $context["_key"] => $context["navlinks"]) {
            // line 100
            echo "\t\t\t\t";
            if ($this->env->getLoader()->exists('@nickvergessen_newspage/event/overall_header_navlink_prepend.html')) {
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array('nickvergessen_newspage', '__main__'));
                $this->env->loadTemplate('@nickvergessen_newspage/event/overall_header_navlink_prepend.html')->display($context);
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }

            if ($this->env->getLoader()->exists('@sarafan_guru/event/overall_header_navlink_prepend.html')) {
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array('sarafan_guru', '__main__'));
                $this->env->loadTemplate('@sarafan_guru/event/overall_header_navlink_prepend.html')->display($context);
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }

            if ($this->env->getLoader()->exists('@uloginteam_ulogin/event/overall_header_navlink_prepend.html')) {
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array('uloginteam_ulogin', '__main__'));
                $this->env->loadTemplate('@uloginteam_ulogin/event/overall_header_navlink_prepend.html')->display($context);
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }

            // line 101
            echo "\t\t\t\t<span class=\"crumb\"";
            echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "MICRODATA");
            if ($this->getAttribute((isset($context["navlinks"]) ? $context["navlinks"] : null), "MICRODATA")) {
                echo " ";
                echo $this->getAttribute((isset($context["navlinks"]) ? $context["navlinks"] : null), "MICRODATA");
            }
            echo "><a href=\"";
            echo $this->getAttribute((isset($context["navlinks"]) ? $context["navlinks"] : null), "U_VIEW_FORUM");
            echo "\" itemprop=\"url\"><span itemprop=\"title\">";
            echo $this->getAttribute((isset($context["navlinks"]) ? $context["navlinks"] : null), "FORUM_NAME");
            echo "</span></a></span>
\t\t\t\t";
            // line 102
            if ($this->env->getLoader()->exists('@nickvergessen_newspage/event/overall_header_navlink_append.html')) {
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array('nickvergessen_newspage', '__main__'));
                $this->env->loadTemplate('@nickvergessen_newspage/event/overall_header_navlink_append.html')->display($context);
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }

            if ($this->env->getLoader()->exists('@sarafan_guru/event/overall_header_navlink_append.html')) {
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array('sarafan_guru', '__main__'));
                $this->env->loadTemplate('@sarafan_guru/event/overall_header_navlink_append.html')->display($context);
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }

            if ($this->env->getLoader()->exists('@uloginteam_ulogin/event/overall_header_navlink_append.html')) {
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array('uloginteam_ulogin', '__main__'));
                $this->env->loadTemplate('@uloginteam_ulogin/event/overall_header_navlink_append.html')->display($context);
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }

            // line 103
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['navlinks'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "\t\t\t";
        if ($this->env->getLoader()->exists('@nickvergessen_newspage/event/overall_header_breadcrumb_append.html')) {
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array('nickvergessen_newspage', '__main__'));
            $this->env->loadTemplate('@nickvergessen_newspage/event/overall_header_breadcrumb_append.html')->display($context);
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }

        if ($this->env->getLoader()->exists('@sarafan_guru/event/overall_header_breadcrumb_append.html')) {
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array('sarafan_guru', '__main__'));
            $this->env->loadTemplate('@sarafan_guru/event/overall_header_breadcrumb_append.html')->display($context);
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }

        if ($this->env->getLoader()->exists('@uloginteam_ulogin/event/overall_header_breadcrumb_append.html')) {
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array('uloginteam_ulogin', '__main__'));
            $this->env->loadTemplate('@uloginteam_ulogin/event/overall_header_breadcrumb_append.html')->display($context);
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }

        // line 105
        echo "\t\t</li>
\t\t";
        // line 106
        if ($this->env->getLoader()->exists('@nickvergessen_newspage/event/overall_header_breadcrumbs_after.html')) {
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array('nickvergessen_newspage', '__main__'));
            $this->env->loadTemplate('@nickvergessen_newspage/event/overall_header_breadcrumbs_after.html')->display($context);
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }

        if ($this->env->getLoader()->exists('@sarafan_guru/event/overall_header_breadcrumbs_after.html')) {
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array('sarafan_guru', '__main__'));
            $this->env->loadTemplate('@sarafan_guru/event/overall_header_breadcrumbs_after.html')->display($context);
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }

        if ($this->env->getLoader()->exists('@uloginteam_ulogin/event/overall_header_breadcrumbs_after.html')) {
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array('uloginteam_ulogin', '__main__'));
            $this->env->loadTemplate('@uloginteam_ulogin/event/overall_header_breadcrumbs_after.html')->display($context);
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }

        // line 107
        echo "
\t\t";
        // line 108
        if (((isset($context["S_DISPLAY_SEARCH"]) ? $context["S_DISPLAY_SEARCH"] : null) && (!(isset($context["S_IN_SEARCH"]) ? $context["S_IN_SEARCH"] : null)))) {
            // line 109
            echo "\t\t\t<li class=\"rightside responsive-search\" style=\"display: none;\"><a href=\"";
            echo (isset($context["U_SEARCH"]) ? $context["U_SEARCH"] : null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("SEARCH_ADV_EXPLAIN");
            echo "\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb')->lang("SEARCH");
            echo "</a></li>
\t\t";
        }
        // line 111
        echo "\t</ul>

\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "navbar_header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  731 => 111,  721 => 109,  719 => 108,  716 => 107,  694 => 106,  691 => 105,  668 => 104,  662 => 103,  640 => 102,  627 => 101,  604 => 100,  600 => 99,  591 => 98,  568 => 97,  558 => 96,  555 => 95,  524 => 90,  521 => 89,  490 => 86,  488 => 85,  479 => 84,  476 => 83,  472 => 81,  460 => 80,  452 => 79,  447 => 78,  429 => 72,  404 => 70,  393 => 66,  389 => 64,  367 => 63,  358 => 61,  325 => 58,  322 => 57,  301 => 52,  298 => 51,  276 => 50,  267 => 48,  253 => 46,  220 => 44,  205 => 43,  183 => 42,  177 => 38,  155 => 37,  151 => 35,  148 => 34,  139 => 33,  131 => 32,  128 => 31,  126 => 30,  123 => 29,  116 => 27,  109 => 25,  102 => 24,  90 => 21,  82 => 19,  71 => 16,  69 => 15,  66 => 14,  64 => 13,  61 => 12,  39 => 11,  32 => 7,  26 => 6,  544 => 119,  541 => 118,  531 => 114,  527 => 112,  525 => 111,  520 => 108,  498 => 88,  494 => 105,  481 => 104,  459 => 103,  454 => 100,  446 => 95,  438 => 94,  432 => 93,  424 => 92,  419 => 90,  416 => 89,  413 => 88,  391 => 87,  385 => 84,  381 => 83,  361 => 81,  351 => 73,  329 => 72,  320 => 70,  316 => 68,  289 => 65,  286 => 64,  264 => 47,  256 => 60,  244 => 56,  242 => 45,  239 => 54,  231 => 52,  229 => 51,  222 => 49,  218 => 48,  213 => 47,  196 => 32,  194 => 31,  184 => 23,  178 => 21,  176 => 20,  173 => 19,  149 => 17,  106 => 14,  95 => 22,  73 => 11,  62 => 10,  60 => 9,  35 => 7,  22 => 2,  532 => 94,  529 => 93,  507 => 72,  504 => 71,  499 => 68,  477 => 67,  466 => 66,  444 => 77,  439 => 63,  436 => 62,  434 => 74,  431 => 73,  426 => 71,  403 => 56,  377 => 82,  355 => 54,  350 => 60,  347 => 59,  345 => 50,  342 => 49,  337 => 46,  314 => 56,  305 => 44,  294 => 67,  272 => 42,  269 => 49,  257 => 40,  254 => 39,  252 => 58,  249 => 37,  227 => 36,  224 => 35,  217 => 31,  212 => 30,  206 => 28,  203 => 27,  195 => 25,  193 => 24,  186 => 23,  179 => 22,  164 => 20,  159 => 19,  157 => 18,  154 => 17,  132 => 16,  129 => 15,  117 => 15,  114 => 13,  92 => 12,  84 => 12,  81 => 8,  79 => 18,  57 => 6,  54 => 5,  48 => 4,  34 => 3,  31 => 6,  19 => 1,);
    }
}
