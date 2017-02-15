<?php

/* GtSistemaBundle:Inicio:inicio.html.twig */
class __TwigTemplate_c381715f939861160cc0fa7ba5d18ec2970b09a9e7bfd1f3313181c979211770 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "GtSistemaBundle:Inicio:inicio.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_db1e65c90cb14ccef0f819a1141b307d1438d3a85726f9c404a5114129f679da = $this->env->getExtension("native_profiler");
        $__internal_db1e65c90cb14ccef0f819a1141b307d1438d3a85726f9c404a5114129f679da->enter($__internal_db1e65c90cb14ccef0f819a1141b307d1438d3a85726f9c404a5114129f679da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GtSistemaBundle:Inicio:inicio.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db1e65c90cb14ccef0f819a1141b307d1438d3a85726f9c404a5114129f679da->leave($__internal_db1e65c90cb14ccef0f819a1141b307d1438d3a85726f9c404a5114129f679da_prof);

    }

    public function getTemplateName()
    {
        return "GtSistemaBundle:Inicio:inicio.html.twig";
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
