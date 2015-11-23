<?php

/* @uloginteam_ulogin/ulogin_panel1.html */
class __TwigTemplate_13931e52580d7bdf90d07170dbc6fd3b extends Twig_Template
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
        $asset_file = "//ulogin.ru/js/ulogin.js";
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
        // line 2
        $asset_file = "ulogin.js";
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
        // line 3
        echo "
<div class=\"ulogin_form\">
    <div data-uloginid=\"";
        // line 5
        echo (isset($context["DATA_ULOGINID1"]) ? $context["DATA_ULOGINID1"] : null);
        echo "\" data-ulogin=\"";
        echo (isset($context["DATA_ULOGIN1"]) ? $context["DATA_ULOGIN1"] : null);
        echo "\"></div>
</div>";
    }

    public function getTemplateName()
    {
        return "@uloginteam_ulogin/ulogin_panel1.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 5,  49 => 3,  259 => 68,  254 => 65,  243 => 59,  232 => 57,  228 => 56,  224 => 55,  218 => 51,  216 => 50,  210 => 46,  207 => 45,  193 => 44,  191 => 43,  181 => 38,  175 => 35,  172 => 34,  165 => 31,  159 => 30,  156 => 29,  153 => 28,  150 => 27,  136 => 26,  132 => 25,  130 => 24,  127 => 23,  124 => 22,  115 => 21,  106 => 20,  104 => 19,  98 => 18,  91 => 17,  81 => 14,  74 => 13,  71 => 12,  65 => 11,  57 => 10,  48 => 8,  34 => 2,  31 => 2,  19 => 1,);
    }
}
