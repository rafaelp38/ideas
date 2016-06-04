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
        $__internal_54885dbccca1c02e2969464960fdcf0084e53db0036106847071811b0cdcc587 = $this->env->getExtension("native_profiler");
        $__internal_54885dbccca1c02e2969464960fdcf0084e53db0036106847071811b0cdcc587->enter($__internal_54885dbccca1c02e2969464960fdcf0084e53db0036106847071811b0cdcc587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_54885dbccca1c02e2969464960fdcf0084e53db0036106847071811b0cdcc587->leave($__internal_54885dbccca1c02e2969464960fdcf0084e53db0036106847071811b0cdcc587_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_babce285cba925ca08dab1fb1cd5b0afd36784a48532a818b5394866afae4df3 = $this->env->getExtension("native_profiler");
        $__internal_babce285cba925ca08dab1fb1cd5b0afd36784a48532a818b5394866afae4df3->enter($__internal_babce285cba925ca08dab1fb1cd5b0afd36784a48532a818b5394866afae4df3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_babce285cba925ca08dab1fb1cd5b0afd36784a48532a818b5394866afae4df3->leave($__internal_babce285cba925ca08dab1fb1cd5b0afd36784a48532a818b5394866afae4df3_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d4af624dd5264b30306f918b79aab0c4e5e524e3bc71267b856d2ae5b36abb0c = $this->env->getExtension("native_profiler");
        $__internal_d4af624dd5264b30306f918b79aab0c4e5e524e3bc71267b856d2ae5b36abb0c->enter($__internal_d4af624dd5264b30306f918b79aab0c4e5e524e3bc71267b856d2ae5b36abb0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d4af624dd5264b30306f918b79aab0c4e5e524e3bc71267b856d2ae5b36abb0c->leave($__internal_d4af624dd5264b30306f918b79aab0c4e5e524e3bc71267b856d2ae5b36abb0c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6a63affece3bea9e211011c375c686a971428ccc33991156f6858dd00bef3190 = $this->env->getExtension("native_profiler");
        $__internal_6a63affece3bea9e211011c375c686a971428ccc33991156f6858dd00bef3190->enter($__internal_6a63affece3bea9e211011c375c686a971428ccc33991156f6858dd00bef3190_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6a63affece3bea9e211011c375c686a971428ccc33991156f6858dd00bef3190->leave($__internal_6a63affece3bea9e211011c375c686a971428ccc33991156f6858dd00bef3190_prof);

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
