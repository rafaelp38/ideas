<?php

/* APIRestBundle:Default:index.html.twig */
class __TwigTemplate_7cfc4f50e1e83cf92118b540ce10c0d17c6f3375f5c0d405de7edea7bfb1975d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("APIRestBundle::layout.html.twig", "APIRestBundle:Default:index.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "APIRestBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b0755cda4dc2d30997d5b81401088b149f2237d737b6a1a140f47dd40ed28bf5 = $this->env->getExtension("native_profiler");
        $__internal_b0755cda4dc2d30997d5b81401088b149f2237d737b6a1a140f47dd40ed28bf5->enter($__internal_b0755cda4dc2d30997d5b81401088b149f2237d737b6a1a140f47dd40ed28bf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "APIRestBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b0755cda4dc2d30997d5b81401088b149f2237d737b6a1a140f47dd40ed28bf5->leave($__internal_b0755cda4dc2d30997d5b81401088b149f2237d737b6a1a140f47dd40ed28bf5_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_db4fb6ce565b9164d725c416c7ee48ae4f0d52b5b8e388a8e34d8e2bdb371756 = $this->env->getExtension("native_profiler");
        $__internal_db4fb6ce565b9164d725c416c7ee48ae4f0d52b5b8e388a8e34d8e2bdb371756->enter($__internal_db4fb6ce565b9164d725c416c7ee48ae4f0d52b5b8e388a8e34d8e2bdb371756_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_db4fb6ce565b9164d725c416c7ee48ae4f0d52b5b8e388a8e34d8e2bdb371756->leave($__internal_db4fb6ce565b9164d725c416c7ee48ae4f0d52b5b8e388a8e34d8e2bdb371756_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_347dd3e5a52bb443581ecb4b95636540bd00ae7fb72ea3304a6c0498723256d8 = $this->env->getExtension("native_profiler");
        $__internal_347dd3e5a52bb443581ecb4b95636540bd00ae7fb72ea3304a6c0498723256d8->enter($__internal_347dd3e5a52bb443581ecb4b95636540bd00ae7fb72ea3304a6c0498723256d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 10
        echo "
    <h2>Liste des idées</h2>

    <ul>
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listAdverts"]) ? $context["listAdverts"] : $this->getContext($context, "listAdverts")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 15
            echo "            <li>
                <a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("oc_platform_view", array("id" => $this->getAttribute($context["advert"], "id", array()))), "html", null, true);
            echo "\">
                    ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "title", array()), "html", null, true);
            echo "
                </a>
                par ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "author", array()), "html", null, true);
            echo ",
                le ";
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["advert"], "date", array()), "d/m/Y"), "html", null, true);
            echo "
            </li>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 23
            echo "            <li>Pas (encore !) d'idées</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "    </ul>

    <ul>
        ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listUsers"]) ? $context["listUsers"] : $this->getContext($context, "listUsers")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 29
            echo "            <li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "prenom", array()), "html", null, true);
            echo "</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "    </ul>

";
        
        $__internal_347dd3e5a52bb443581ecb4b95636540bd00ae7fb72ea3304a6c0498723256d8->leave($__internal_347dd3e5a52bb443581ecb4b95636540bd00ae7fb72ea3304a6c0498723256d8_prof);

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
        return array (  119 => 31,  108 => 29,  104 => 28,  99 => 25,  92 => 23,  84 => 20,  80 => 19,  75 => 17,  71 => 16,  68 => 15,  63 => 14,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/APIRestBundle/Resources/views/Default/index.html.twig #}*/
/* */
/* {% extends "APIRestBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*     Accueil - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block ocplatform_body %}*/
/* */
/*     <h2>Liste des idées</h2>*/
/* */
/*     <ul>*/
/*         {% for advert in listAdverts %}*/
/*             <li>*/
/*                 <a href="{{ path('oc_platform_view', {'id': advert.id}) }}">*/
/*                     {{ advert.title }}*/
/*                 </a>*/
/*                 par {{ advert.author }},*/
/*                 le {{ advert.date|date('d/m/Y') }}*/
/*             </li>*/
/*         {% else %}*/
/*             <li>Pas (encore !) d'idées</li>*/
/*         {% endfor %}*/
/*     </ul>*/
/* */
/*     <ul>*/
/*         {% for user in listUsers %}*/
/*             <li>{{ user.nom }} {{ user.prenom }}</li>*/
/*         {% endfor %}*/
/*     </ul>*/
/* */
/* {% endblock %}*/
/* */
/* */
/* */
