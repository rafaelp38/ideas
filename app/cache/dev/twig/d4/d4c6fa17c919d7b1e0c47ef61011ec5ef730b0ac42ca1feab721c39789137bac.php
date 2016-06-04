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
        $__internal_95e7642c4d0d3d16286d3c31c6627a71d4b92bdbfe59254350d00814e1b9f939 = $this->env->getExtension("native_profiler");
        $__internal_95e7642c4d0d3d16286d3c31c6627a71d4b92bdbfe59254350d00814e1b9f939->enter($__internal_95e7642c4d0d3d16286d3c31c6627a71d4b92bdbfe59254350d00814e1b9f939_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_95e7642c4d0d3d16286d3c31c6627a71d4b92bdbfe59254350d00814e1b9f939->leave($__internal_95e7642c4d0d3d16286d3c31c6627a71d4b92bdbfe59254350d00814e1b9f939_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ff27651e5f8f71e213e58f64580fff38c913e17644178290b225497c89bdc87b = $this->env->getExtension("native_profiler");
        $__internal_ff27651e5f8f71e213e58f64580fff38c913e17644178290b225497c89bdc87b->enter($__internal_ff27651e5f8f71e213e58f64580fff38c913e17644178290b225497c89bdc87b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_ff27651e5f8f71e213e58f64580fff38c913e17644178290b225497c89bdc87b->leave($__internal_ff27651e5f8f71e213e58f64580fff38c913e17644178290b225497c89bdc87b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5997a0d44b79bd3ffc784839aa0e78315d8b1c5c1d15ff252706d81a0e03faf2 = $this->env->getExtension("native_profiler");
        $__internal_5997a0d44b79bd3ffc784839aa0e78315d8b1c5c1d15ff252706d81a0e03faf2->enter($__internal_5997a0d44b79bd3ffc784839aa0e78315d8b1c5c1d15ff252706d81a0e03faf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5997a0d44b79bd3ffc784839aa0e78315d8b1c5c1d15ff252706d81a0e03faf2->leave($__internal_5997a0d44b79bd3ffc784839aa0e78315d8b1c5c1d15ff252706d81a0e03faf2_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_8d92fe5f4bb2da4757d34f7c4157ae56e7f5862cc352f2a0be7d32a93bbf495f = $this->env->getExtension("native_profiler");
        $__internal_8d92fe5f4bb2da4757d34f7c4157ae56e7f5862cc352f2a0be7d32a93bbf495f->enter($__internal_8d92fe5f4bb2da4757d34f7c4157ae56e7f5862cc352f2a0be7d32a93bbf495f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_8d92fe5f4bb2da4757d34f7c4157ae56e7f5862cc352f2a0be7d32a93bbf495f->leave($__internal_8d92fe5f4bb2da4757d34f7c4157ae56e7f5862cc352f2a0be7d32a93bbf495f_prof);

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
