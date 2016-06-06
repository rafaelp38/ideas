<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_b69a5ca8dbbb94e9bb478740ffb29d0137805e8255221de06d7c4426eea4099b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_63f5ced44cac7a5f238a0e3aeea0b40fe7897fa3808a0c562c8d9e118bb69f59 = $this->env->getExtension("native_profiler");
        $__internal_63f5ced44cac7a5f238a0e3aeea0b40fe7897fa3808a0c562c8d9e118bb69f59->enter($__internal_63f5ced44cac7a5f238a0e3aeea0b40fe7897fa3808a0c562c8d9e118bb69f59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_63f5ced44cac7a5f238a0e3aeea0b40fe7897fa3808a0c562c8d9e118bb69f59->leave($__internal_63f5ced44cac7a5f238a0e3aeea0b40fe7897fa3808a0c562c8d9e118bb69f59_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_28fc5f58a5c0cc6d6c63f4eb20cb6908de18fc92aca2ba0a71cfc8b94d1cee9e = $this->env->getExtension("native_profiler");
        $__internal_28fc5f58a5c0cc6d6c63f4eb20cb6908de18fc92aca2ba0a71cfc8b94d1cee9e->enter($__internal_28fc5f58a5c0cc6d6c63f4eb20cb6908de18fc92aca2ba0a71cfc8b94d1cee9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 27
        echo "
    ";
        // line 28
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_28fc5f58a5c0cc6d6c63f4eb20cb6908de18fc92aca2ba0a71cfc8b94d1cee9e->leave($__internal_28fc5f58a5c0cc6d6c63f4eb20cb6908de18fc92aca2ba0a71cfc8b94d1cee9e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 28,  71 => 27,  53 => 9,  50 => 8,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}*/
/*     {% set icon %}*/
/*         {{ include('@WebProfiler/Icon/ajax.svg') }}*/
/*         <span class="sf-toolbar-value sf-toolbar-ajax-requests">0</span>*/
/*     {% endset %}*/
/* */
/*     {% set text %}*/
/*         <div class="sf-toolbar-info-piece">*/
/*             <b class="sf-toolbar-ajax-info"></b>*/
/*         </div>*/
/*         <div class="sf-toolbar-info-piece">*/
/*             <table class="sf-toolbar-ajax-requests">*/
/*                 <thead>*/
/*                     <tr>*/
/*                         <th>Method</th>*/
/*                         <th>URL</th>*/
/*                         <th>Time</th>*/
/*                         <th>Profile</th>*/
/*                     </tr>*/
/*                 </thead>*/
/*                 <tbody class="sf-toolbar-ajax-request-list"></tbody>*/
/*             </table>*/
/*         </div>*/
/*     {% endset %}*/
/* */
/*     {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}*/
/* {% endblock %}*/
/* */
