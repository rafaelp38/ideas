<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_ccba3df7196ded9aae897a7d7c19ebd90421705e7f6a0c188887a0620ac20249 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_2beccef74a7b579fc89d2b91b86ec72447702389ca45d858dafac4ad781228b7 = $this->env->getExtension("native_profiler");
        $__internal_2beccef74a7b579fc89d2b91b86ec72447702389ca45d858dafac4ad781228b7->enter($__internal_2beccef74a7b579fc89d2b91b86ec72447702389ca45d858dafac4ad781228b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2beccef74a7b579fc89d2b91b86ec72447702389ca45d858dafac4ad781228b7->leave($__internal_2beccef74a7b579fc89d2b91b86ec72447702389ca45d858dafac4ad781228b7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1ab8d2998e860849b3ce23c10002778e28ae1db466e957a995162eb5f3ae8586 = $this->env->getExtension("native_profiler");
        $__internal_1ab8d2998e860849b3ce23c10002778e28ae1db466e957a995162eb5f3ae8586->enter($__internal_1ab8d2998e860849b3ce23c10002778e28ae1db466e957a995162eb5f3ae8586_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1ab8d2998e860849b3ce23c10002778e28ae1db466e957a995162eb5f3ae8586->leave($__internal_1ab8d2998e860849b3ce23c10002778e28ae1db466e957a995162eb5f3ae8586_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c12e5a24e7e99e7589a3ad46364bccf61164fccbdbe299c7acc46330339b939a = $this->env->getExtension("native_profiler");
        $__internal_c12e5a24e7e99e7589a3ad46364bccf61164fccbdbe299c7acc46330339b939a->enter($__internal_c12e5a24e7e99e7589a3ad46364bccf61164fccbdbe299c7acc46330339b939a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c12e5a24e7e99e7589a3ad46364bccf61164fccbdbe299c7acc46330339b939a->leave($__internal_c12e5a24e7e99e7589a3ad46364bccf61164fccbdbe299c7acc46330339b939a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4e6213871e2e9a843a494ff0534848a8f4730fdd52e1eebab865bcb56a6e638d = $this->env->getExtension("native_profiler");
        $__internal_4e6213871e2e9a843a494ff0534848a8f4730fdd52e1eebab865bcb56a6e638d->enter($__internal_4e6213871e2e9a843a494ff0534848a8f4730fdd52e1eebab865bcb56a6e638d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4e6213871e2e9a843a494ff0534848a8f4730fdd52e1eebab865bcb56a6e638d->leave($__internal_4e6213871e2e9a843a494ff0534848a8f4730fdd52e1eebab865bcb56a6e638d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
