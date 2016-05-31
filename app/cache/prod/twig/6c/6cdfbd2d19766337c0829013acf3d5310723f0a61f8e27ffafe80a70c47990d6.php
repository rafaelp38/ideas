<?php

/* APIBundle:Default:index.html.twig */
class __TwigTemplate_318a8b071ce21ddb7de953d3066b8a7f9b822852c60cdb43f8f762c05a28cc63 extends Twig_Template
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
        // line 1
        echo "<html>
  <body>
    Hello ";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo "!
  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "APIBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  19 => 1,);
    }
}
/* <html>*/
/*   <body>*/
/*     Hello {{ name }}!*/
/*   </body>*/
/* </html>*/
/* */
