<?php

/* MRFClientesBundle:Clientes:forms/form.html.twig */
class __TwigTemplate_0782152c2cb7cf2c4a200026dfca820a99a73b7111129e50c1d27293bba47ef4 extends Twig_Template
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
        $__internal_58e88ceabbfca2e98cbd92d776ab391d09f412afcb7cd2f51b41f316b828d819 = $this->env->getExtension("native_profiler");
        $__internal_58e88ceabbfca2e98cbd92d776ab391d09f412afcb7cd2f51b41f316b828d819->enter($__internal_58e88ceabbfca2e98cbd92d776ab391d09f412afcb7cd2f51b41f316b828d819_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MRFClientesBundle:Clientes:forms/form.html.twig"));

        // line 1
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    
    ";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    
    <input type=\"submit\" value=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Borrar Cliente"), "html", null, true);
        echo "\" onclick=\"return confirm('Estas seguro?')\" >
        
";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        
        $__internal_58e88ceabbfca2e98cbd92d776ab391d09f412afcb7cd2f51b41f316b828d819->leave($__internal_58e88ceabbfca2e98cbd92d776ab391d09f412afcb7cd2f51b41f316b828d819_prof);

    }

    public function getTemplateName()
    {
        return "MRFClientesBundle:Clientes:forms/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 7,  32 => 5,  27 => 3,  22 => 1,);
    }
}
