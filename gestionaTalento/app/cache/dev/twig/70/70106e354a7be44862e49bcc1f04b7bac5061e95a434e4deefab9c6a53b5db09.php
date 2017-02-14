<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_86e8801d39ca25b59ae80afbc90694dd043b6b9d2fb7253c90e174a9358c8589 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::baseLogin.html.twig", "FOSUserBundle::layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::baseLogin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_88777a5cb5a82d37339f4113ea2bbabba2449aa0857135072c886603b3ee4c6a = $this->env->getExtension("native_profiler");
        $__internal_88777a5cb5a82d37339f4113ea2bbabba2449aa0857135072c886603b3ee4c6a->enter($__internal_88777a5cb5a82d37339f4113ea2bbabba2449aa0857135072c886603b3ee4c6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_88777a5cb5a82d37339f4113ea2bbabba2449aa0857135072c886603b3ee4c6a->leave($__internal_88777a5cb5a82d37339f4113ea2bbabba2449aa0857135072c886603b3ee4c6a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_02a91d23f7a01fbc1292ec4632dc8b9a8ad414d0c2128a92ee3252819a6b1c93 = $this->env->getExtension("native_profiler");
        $__internal_02a91d23f7a01fbc1292ec4632dc8b9a8ad414d0c2128a92ee3252819a6b1c93->enter($__internal_02a91d23f7a01fbc1292ec4632dc8b9a8ad414d0c2128a92ee3252819a6b1c93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayBlock("fos_user_content", $context, $blocks);
        echo "
";
        
        $__internal_02a91d23f7a01fbc1292ec4632dc8b9a8ad414d0c2128a92ee3252819a6b1c93->leave($__internal_02a91d23f7a01fbc1292ec4632dc8b9a8ad414d0c2128a92ee3252819a6b1c93_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::baseLogin.html.twig' %}*/
/* */
/* {% block body  %}*/
/*     {{ block('fos_user_content') }}*/
/* {% endblock %}    */
/* */
/* */
