<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_ccba3df7196ded9aae897a7d7c19ebd90421705e7f6a0c188887a0620ac20249 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_011fd56c77b695c985c5cfffa0fbab7c0990329d067365929e0adf1d463786d3 = $this->env->getExtension("native_profiler");
        $__internal_011fd56c77b695c985c5cfffa0fbab7c0990329d067365929e0adf1d463786d3->enter($__internal_011fd56c77b695c985c5cfffa0fbab7c0990329d067365929e0adf1d463786d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_011fd56c77b695c985c5cfffa0fbab7c0990329d067365929e0adf1d463786d3->leave($__internal_011fd56c77b695c985c5cfffa0fbab7c0990329d067365929e0adf1d463786d3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_826915a74a086c452032257640dd54fd2a5e5b43fbc943266ebafd2c51c0a6a9 = $this->env->getExtension("native_profiler");
        $__internal_826915a74a086c452032257640dd54fd2a5e5b43fbc943266ebafd2c51c0a6a9->enter($__internal_826915a74a086c452032257640dd54fd2a5e5b43fbc943266ebafd2c51c0a6a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_826915a74a086c452032257640dd54fd2a5e5b43fbc943266ebafd2c51c0a6a9->leave($__internal_826915a74a086c452032257640dd54fd2a5e5b43fbc943266ebafd2c51c0a6a9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_69c20cab9a49869b56530b02958623a37561f1da792aaf6a613b8ef9fc244026 = $this->env->getExtension("native_profiler");
        $__internal_69c20cab9a49869b56530b02958623a37561f1da792aaf6a613b8ef9fc244026->enter($__internal_69c20cab9a49869b56530b02958623a37561f1da792aaf6a613b8ef9fc244026_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_69c20cab9a49869b56530b02958623a37561f1da792aaf6a613b8ef9fc244026->leave($__internal_69c20cab9a49869b56530b02958623a37561f1da792aaf6a613b8ef9fc244026_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_58cf04505f949f38b01caa98a7ffbc434009e787bcc306efff2ca44d397771de = $this->env->getExtension("native_profiler");
        $__internal_58cf04505f949f38b01caa98a7ffbc434009e787bcc306efff2ca44d397771de->enter($__internal_58cf04505f949f38b01caa98a7ffbc434009e787bcc306efff2ca44d397771de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_58cf04505f949f38b01caa98a7ffbc434009e787bcc306efff2ca44d397771de->leave($__internal_58cf04505f949f38b01caa98a7ffbc434009e787bcc306efff2ca44d397771de_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
