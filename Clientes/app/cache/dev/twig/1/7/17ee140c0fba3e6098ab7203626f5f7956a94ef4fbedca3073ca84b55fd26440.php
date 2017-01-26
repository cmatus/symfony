<?php

/* layout.html.twig */
class __TwigTemplate_17ee140c0fba3e6098ab7203626f5f7956a94ef4fbedca3073ca84b55fd26440 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d6b14f5d7bee0b2694cdeec9c408accd71e2b44dee426bc5fd42c6284ec01815 = $this->env->getExtension("native_profiler");
        $__internal_d6b14f5d7bee0b2694cdeec9c408accd71e2b44dee426bc5fd42c6284ec01815->enter($__internal_d6b14f5d7bee0b2694cdeec9c408accd71e2b44dee426bc5fd42c6284ec01815_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 13
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 14
        echo "    </body>
</html>
";
        
        $__internal_d6b14f5d7bee0b2694cdeec9c408accd71e2b44dee426bc5fd42c6284ec01815->leave($__internal_d6b14f5d7bee0b2694cdeec9c408accd71e2b44dee426bc5fd42c6284ec01815_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_59b5fad61560e031b7888e4766f977199ac1acc89e720f56acd61f03aaf1f6fa = $this->env->getExtension("native_profiler");
        $__internal_59b5fad61560e031b7888e4766f977199ac1acc89e720f56acd61f03aaf1f6fa->enter($__internal_59b5fad61560e031b7888e4766f977199ac1acc89e720f56acd61f03aaf1f6fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Clientes Registrados";
        
        $__internal_59b5fad61560e031b7888e4766f977199ac1acc89e720f56acd61f03aaf1f6fa->leave($__internal_59b5fad61560e031b7888e4766f977199ac1acc89e720f56acd61f03aaf1f6fa_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7f0a45267ed3f127890c0a3556d73d8a833d646ae829dbe2b44cb7eb36c7e184 = $this->env->getExtension("native_profiler");
        $__internal_7f0a45267ed3f127890c0a3556d73d8a833d646ae829dbe2b44cb7eb36c7e184->enter($__internal_7f0a45267ed3f127890c0a3556d73d8a833d646ae829dbe2b44cb7eb36c7e184_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/style.css"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_7f0a45267ed3f127890c0a3556d73d8a833d646ae829dbe2b44cb7eb36c7e184->leave($__internal_7f0a45267ed3f127890c0a3556d73d8a833d646ae829dbe2b44cb7eb36c7e184_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_eaaf6ea384402adf4a12d1a7085b35960a7b69a48e54a0fba3fc05df696a6cef = $this->env->getExtension("native_profiler");
        $__internal_eaaf6ea384402adf4a12d1a7085b35960a7b69a48e54a0fba3fc05df696a6cef->enter($__internal_eaaf6ea384402adf4a12d1a7085b35960a7b69a48e54a0fba3fc05df696a6cef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_eaaf6ea384402adf4a12d1a7085b35960a7b69a48e54a0fba3fc05df696a6cef->leave($__internal_eaaf6ea384402adf4a12d1a7085b35960a7b69a48e54a0fba3fc05df696a6cef_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_36b310d7aeb8f2d51aa77fed36dc6348b3a7e258940c211f9497fb6e6151f43c = $this->env->getExtension("native_profiler");
        $__internal_36b310d7aeb8f2d51aa77fed36dc6348b3a7e258940c211f9497fb6e6151f43c->enter($__internal_36b310d7aeb8f2d51aa77fed36dc6348b3a7e258940c211f9497fb6e6151f43c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_36b310d7aeb8f2d51aa77fed36dc6348b3a7e258940c211f9497fb6e6151f43c->leave($__internal_36b310d7aeb8f2d51aa77fed36dc6348b3a7e258940c211f9497fb6e6151f43c_prof);

    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 13,  87 => 12,  77 => 7,  71 => 6,  59 => 5,  50 => 14,  47 => 13,  45 => 12,  38 => 9,  36 => 6,  32 => 5,  26 => 1,);
    }
}
