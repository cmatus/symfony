<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_e227daabb2e75f50adf62450179e9b37b9c628767cc5a4a25adc3555a4d891cd extends Twig_Template
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
        $__internal_22e1716cc5ad1591f6d6b0bdfd52c70b398840e9309dad3ad54cfee3725172d2 = $this->env->getExtension("native_profiler");
        $__internal_22e1716cc5ad1591f6d6b0bdfd52c70b398840e9309dad3ad54cfee3725172d2->enter($__internal_22e1716cc5ad1591f6d6b0bdfd52c70b398840e9309dad3ad54cfee3725172d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("TwigBundle:Exception:trace.txt.twig", "TwigBundle:Exception:traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_22e1716cc5ad1591f6d6b0bdfd52c70b398840e9309dad3ad54cfee3725172d2->leave($__internal_22e1716cc5ad1591f6d6b0bdfd52c70b398840e9309dad3ad54cfee3725172d2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  28 => 3,  24 => 2,  22 => 1,);
    }
}