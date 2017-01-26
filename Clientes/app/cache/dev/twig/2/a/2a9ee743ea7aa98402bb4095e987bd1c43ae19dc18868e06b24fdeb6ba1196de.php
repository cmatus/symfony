<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_2a9ee743ea7aa98402bb4095e987bd1c43ae19dc18868e06b24fdeb6ba1196de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0d6da92260e07f4ae61e6ff2a0e0c137741978320c5e0cc8abc16b54a5ca7397 = $this->env->getExtension("native_profiler");
        $__internal_0d6da92260e07f4ae61e6ff2a0e0c137741978320c5e0cc8abc16b54a5ca7397->enter($__internal_0d6da92260e07f4ae61e6ff2a0e0c137741978320c5e0cc8abc16b54a5ca7397_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d6da92260e07f4ae61e6ff2a0e0c137741978320c5e0cc8abc16b54a5ca7397->leave($__internal_0d6da92260e07f4ae61e6ff2a0e0c137741978320c5e0cc8abc16b54a5ca7397_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_71576fb62cd85b98bf33be0fcc763130d70e7aedd6d42356f2d6e4fe1cee6122 = $this->env->getExtension("native_profiler");
        $__internal_71576fb62cd85b98bf33be0fcc763130d70e7aedd6d42356f2d6e4fe1cee6122->enter($__internal_71576fb62cd85b98bf33be0fcc763130d70e7aedd6d42356f2d6e4fe1cee6122_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_71576fb62cd85b98bf33be0fcc763130d70e7aedd6d42356f2d6e4fe1cee6122->leave($__internal_71576fb62cd85b98bf33be0fcc763130d70e7aedd6d42356f2d6e4fe1cee6122_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a39af3935d26beb6d9092bb6c00b35b3c1c7107ddcaea2d69b1ace8161f54e60 = $this->env->getExtension("native_profiler");
        $__internal_a39af3935d26beb6d9092bb6c00b35b3c1c7107ddcaea2d69b1ace8161f54e60->enter($__internal_a39af3935d26beb6d9092bb6c00b35b3c1c7107ddcaea2d69b1ace8161f54e60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a39af3935d26beb6d9092bb6c00b35b3c1c7107ddcaea2d69b1ace8161f54e60->leave($__internal_a39af3935d26beb6d9092bb6c00b35b3c1c7107ddcaea2d69b1ace8161f54e60_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_6fee126361abba2c8f7903cfa7135fec3ed5cef1e875faeb2c8276a125f29b1a = $this->env->getExtension("native_profiler");
        $__internal_6fee126361abba2c8f7903cfa7135fec3ed5cef1e875faeb2c8276a125f29b1a->enter($__internal_6fee126361abba2c8f7903cfa7135fec3ed5cef1e875faeb2c8276a125f29b1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_6fee126361abba2c8f7903cfa7135fec3ed5cef1e875faeb2c8276a125f29b1a->leave($__internal_6fee126361abba2c8f7903cfa7135fec3ed5cef1e875faeb2c8276a125f29b1a_prof);

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
