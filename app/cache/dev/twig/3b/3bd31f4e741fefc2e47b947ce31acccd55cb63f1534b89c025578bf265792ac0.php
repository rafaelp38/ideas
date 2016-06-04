<?php

/* APIRestBundle:Default:index.html.twig */
class __TwigTemplate_7cfc4f50e1e83cf92118b540ce10c0d17c6f3375f5c0d405de7edea7bfb1975d extends Twig_Template
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
        $__internal_12bc7f7e5829058e7bbcaee6b3b67d113a7440a8738393294e69a1c745233f0a = $this->env->getExtension("native_profiler");
        $__internal_12bc7f7e5829058e7bbcaee6b3b67d113a7440a8738393294e69a1c745233f0a->enter($__internal_12bc7f7e5829058e7bbcaee6b3b67d113a7440a8738393294e69a1c745233f0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "APIRestBundle:Default:index.html.twig"));

        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
";
        
        $__internal_12bc7f7e5829058e7bbcaee6b3b67d113a7440a8738393294e69a1c745233f0a->leave($__internal_12bc7f7e5829058e7bbcaee6b3b67d113a7440a8738393294e69a1c745233f0a_prof);

    }

    public function getTemplateName()
    {
        return "APIRestBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* Hello {{name}}!*/
/* */
