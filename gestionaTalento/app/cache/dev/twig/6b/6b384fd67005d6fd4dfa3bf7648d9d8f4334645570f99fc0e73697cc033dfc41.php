<?php

/* GtSistemaBundle::basePop.html.twig */
class __TwigTemplate_057fa8a5321ab3db4e13afd5b48ccb03b3404c5d08448ff63ef31d7343e709ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::basePop.html.twig", "GtSistemaBundle::basePop.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "::basePop.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6f348299a3f55fa938034795daf3bb516f9143edd6632aeb75912afb5e3a7c03 = $this->env->getExtension("native_profiler");
        $__internal_6f348299a3f55fa938034795daf3bb516f9143edd6632aeb75912afb5e3a7c03->enter($__internal_6f348299a3f55fa938034795daf3bb516f9143edd6632aeb75912afb5e3a7c03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GtSistemaBundle::basePop.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f348299a3f55fa938034795daf3bb516f9143edd6632aeb75912afb5e3a7c03->leave($__internal_6f348299a3f55fa938034795daf3bb516f9143edd6632aeb75912afb5e3a7c03_prof);

    }

    public function getTemplateName()
    {
        return "GtSistemaBundle::basePop.html.twig";
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
/* {% extends '::basePop.html.twig' %}*/
/* */
