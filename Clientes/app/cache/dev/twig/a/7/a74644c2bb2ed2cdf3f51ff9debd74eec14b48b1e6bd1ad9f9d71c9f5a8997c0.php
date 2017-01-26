<?php

/* MRFClientesBundle:Clientes:delete.html.twig */
class __TwigTemplate_a74644c2bb2ed2cdf3f51ff9debd74eec14b48b1e6bd1ad9f9d71c9f5a8997c0 extends Twig_Template
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
        $__internal_106efa03594426f8b326e6a20fb2501847f59cef94d4661cd1657d2c2b85c37b = $this->env->getExtension("native_profiler");
        $__internal_106efa03594426f8b326e6a20fb2501847f59cef94d4661cd1657d2c2b85c37b->enter($__internal_106efa03594426f8b326e6a20fb2501847f59cef94d4661cd1657d2c2b85c37b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MRFClientesBundle:Clientes:delete.html.twig"));

        // line 1
        echo "


";
        // line 4
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($context["form"]);
        foreach ($context['_seq'] as $context["_key"] => $context["form"]) {
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["form"], 'widget');
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['form'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_106efa03594426f8b326e6a20fb2501847f59cef94d4661cd1657d2c2b85c37b->leave($__internal_106efa03594426f8b326e6a20fb2501847f59cef94d4661cd1657d2c2b85c37b_prof);

    }

    public function getTemplateName()
    {
        return "MRFClientesBundle:Clientes:delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
