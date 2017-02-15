<?php

/* GtSistemaBundle::base.html.twig */
class __TwigTemplate_772639397d1e862c0a3be17dd0d28b8404b4b16e391e614b9dc5f2184eead720 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "GtSistemaBundle::base.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_419416ed8cf6f10cffc1dee56f0ce4c8f51a678036c3e110d5e629bc388ca9cd = $this->env->getExtension("native_profiler");
        $__internal_419416ed8cf6f10cffc1dee56f0ce4c8f51a678036c3e110d5e629bc388ca9cd->enter($__internal_419416ed8cf6f10cffc1dee56f0ce4c8f51a678036c3e110d5e629bc388ca9cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GtSistemaBundle::base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_419416ed8cf6f10cffc1dee56f0ce4c8f51a678036c3e110d5e629bc388ca9cd->leave($__internal_419416ed8cf6f10cffc1dee56f0ce4c8f51a678036c3e110d5e629bc388ca9cd_prof);

    }

    public function getTemplateName()
    {
        return "GtSistemaBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
