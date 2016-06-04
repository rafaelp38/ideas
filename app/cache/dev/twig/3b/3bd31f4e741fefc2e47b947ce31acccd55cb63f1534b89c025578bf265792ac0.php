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
        $__internal_4dc1c6fc3c272297145c3b518aad8bb87698920182248dc7748e83408715e181 = $this->env->getExtension("native_profiler");
        $__internal_4dc1c6fc3c272297145c3b518aad8bb87698920182248dc7748e83408715e181->enter($__internal_4dc1c6fc3c272297145c3b518aad8bb87698920182248dc7748e83408715e181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "APIRestBundle:Default:index.html.twig"));

        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
";
        
        $__internal_4dc1c6fc3c272297145c3b518aad8bb87698920182248dc7748e83408715e181->leave($__internal_4dc1c6fc3c272297145c3b518aad8bb87698920182248dc7748e83408715e181_prof);

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
