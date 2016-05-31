<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_b91d284cdc603f74c797b6b3bf4379cdbda6281153a9f5a1bdb6dcf2d8cab779 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3bab3f343ef9a6ca93250e52efc5fb2dea5cca048f11d12c9da79839ca183099 = $this->env->getExtension("native_profiler");
        $__internal_3bab3f343ef9a6ca93250e52efc5fb2dea5cca048f11d12c9da79839ca183099->enter($__internal_3bab3f343ef9a6ca93250e52efc5fb2dea5cca048f11d12c9da79839ca183099_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3bab3f343ef9a6ca93250e52efc5fb2dea5cca048f11d12c9da79839ca183099->leave($__internal_3bab3f343ef9a6ca93250e52efc5fb2dea5cca048f11d12c9da79839ca183099_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9e3409290e9dbb95f4bafc261a28c41ae3e4ba84f2b5eec1ffb2b58bde2f04e0 = $this->env->getExtension("native_profiler");
        $__internal_9e3409290e9dbb95f4bafc261a28c41ae3e4ba84f2b5eec1ffb2b58bde2f04e0->enter($__internal_9e3409290e9dbb95f4bafc261a28c41ae3e4ba84f2b5eec1ffb2b58bde2f04e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_9e3409290e9dbb95f4bafc261a28c41ae3e4ba84f2b5eec1ffb2b58bde2f04e0->leave($__internal_9e3409290e9dbb95f4bafc261a28c41ae3e4ba84f2b5eec1ffb2b58bde2f04e0_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d7de6b59afb443341ec68b5e249983bf9a95435c202adda26c19cbddeb718131 = $this->env->getExtension("native_profiler");
        $__internal_d7de6b59afb443341ec68b5e249983bf9a95435c202adda26c19cbddeb718131->enter($__internal_d7de6b59afb443341ec68b5e249983bf9a95435c202adda26c19cbddeb718131_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d7de6b59afb443341ec68b5e249983bf9a95435c202adda26c19cbddeb718131->leave($__internal_d7de6b59afb443341ec68b5e249983bf9a95435c202adda26c19cbddeb718131_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_febe93d27aaee70dc2a365fbc554cafc82a6726f3069cf942af5cadd56061e02 = $this->env->getExtension("native_profiler");
        $__internal_febe93d27aaee70dc2a365fbc554cafc82a6726f3069cf942af5cadd56061e02->enter($__internal_febe93d27aaee70dc2a365fbc554cafc82a6726f3069cf942af5cadd56061e02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_febe93d27aaee70dc2a365fbc554cafc82a6726f3069cf942af5cadd56061e02->leave($__internal_febe93d27aaee70dc2a365fbc554cafc82a6726f3069cf942af5cadd56061e02_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
