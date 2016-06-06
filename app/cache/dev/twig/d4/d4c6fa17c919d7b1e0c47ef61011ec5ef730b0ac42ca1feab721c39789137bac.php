<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_b91d284cdc603f74c797b6b3bf4379cdbda6281153a9f5a1bdb6dcf2d8cab779 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_9a83527bb87fe56f84ad96af3e5a405f8b56b067a326783e8488b98795f4b4ba = $this->env->getExtension("native_profiler");
        $__internal_9a83527bb87fe56f84ad96af3e5a405f8b56b067a326783e8488b98795f4b4ba->enter($__internal_9a83527bb87fe56f84ad96af3e5a405f8b56b067a326783e8488b98795f4b4ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a83527bb87fe56f84ad96af3e5a405f8b56b067a326783e8488b98795f4b4ba->leave($__internal_9a83527bb87fe56f84ad96af3e5a405f8b56b067a326783e8488b98795f4b4ba_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_49ae2692afadc6c2adf8044f3de01462c9d15a3742b8d4eba116a333bf00fa30 = $this->env->getExtension("native_profiler");
        $__internal_49ae2692afadc6c2adf8044f3de01462c9d15a3742b8d4eba116a333bf00fa30->enter($__internal_49ae2692afadc6c2adf8044f3de01462c9d15a3742b8d4eba116a333bf00fa30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_49ae2692afadc6c2adf8044f3de01462c9d15a3742b8d4eba116a333bf00fa30->leave($__internal_49ae2692afadc6c2adf8044f3de01462c9d15a3742b8d4eba116a333bf00fa30_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_54679db73258e344a0c0fa3c4287cca5df9704b95165eebaa955a012dded8c75 = $this->env->getExtension("native_profiler");
        $__internal_54679db73258e344a0c0fa3c4287cca5df9704b95165eebaa955a012dded8c75->enter($__internal_54679db73258e344a0c0fa3c4287cca5df9704b95165eebaa955a012dded8c75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_54679db73258e344a0c0fa3c4287cca5df9704b95165eebaa955a012dded8c75->leave($__internal_54679db73258e344a0c0fa3c4287cca5df9704b95165eebaa955a012dded8c75_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_3886ac7023d4674a632c83ac98e5ddb93dd0d917ccef3cf061646e7afc3113ec = $this->env->getExtension("native_profiler");
        $__internal_3886ac7023d4674a632c83ac98e5ddb93dd0d917ccef3cf061646e7afc3113ec->enter($__internal_3886ac7023d4674a632c83ac98e5ddb93dd0d917ccef3cf061646e7afc3113ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_3886ac7023d4674a632c83ac98e5ddb93dd0d917ccef3cf061646e7afc3113ec->leave($__internal_3886ac7023d4674a632c83ac98e5ddb93dd0d917ccef3cf061646e7afc3113ec_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
