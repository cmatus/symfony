<?php

/* MRFClientesBundle:Clientes:view.html.twig */
class __TwigTemplate_70db5bff94583302626b9811b73cb49c9c6ccfcc202a001979385e32d701aae0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "MRFClientesBundle:Clientes:view.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a629feee7a6b7db9cb5d8b0342e7a0d1769e2796f564f42db3e794a76e874319 = $this->env->getExtension("native_profiler");
        $__internal_a629feee7a6b7db9cb5d8b0342e7a0d1769e2796f564f42db3e794a76e874319->enter($__internal_a629feee7a6b7db9cb5d8b0342e7a0d1769e2796f564f42db3e794a76e874319_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MRFClientesBundle:Clientes:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a629feee7a6b7db9cb5d8b0342e7a0d1769e2796f564f42db3e794a76e874319->leave($__internal_a629feee7a6b7db9cb5d8b0342e7a0d1769e2796f564f42db3e794a76e874319_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b2fff367163f60b2f23a1c55a9c72cab06e7aa469b21d9cdc877205e77ebdf38 = $this->env->getExtension("native_profiler");
        $__internal_b2fff367163f60b2f23a1c55a9c72cab06e7aa469b21d9cdc877205e77ebdf38->enter($__internal_b2fff367163f60b2f23a1c55a9c72cab06e7aa469b21d9cdc877205e77ebdf38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    
    <div>
        <h2>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "nombre", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "apellidoP", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "apellidoM", array()), "html", null, true);
        echo "</h2>
        <br>
        <dl>
            <dt>";
        // line 10
        echo "Rut: ";
        echo "</dt>
            <dd>
                ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "rut", array()), "html", null, true);
        echo "
            </dd>
            <br>
            <dt>";
        // line 15
        echo "Direccion: ";
        echo "</dt>
            <dd>
                ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "direccion", array()), "html", null, true);
        echo "
            </dd>
            <br>
            <dt>";
        // line 20
        echo "Email: ";
        echo "</dt>
            <dd>
                ";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "email", array()), "html", null, true);
        echo "
            </dd>
            <br>
            <dt>";
        // line 25
        echo "Telefono: ";
        echo "</dt>
            <dd>
                ";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "fono", array()), "html", null, true);
        echo "
            </dd>
            <br>
        </dl>
    </div>
    <div >
\t    \t
\t\t\t
\t    </div>
<button><a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("mrf_clientes_list");
        echo "\"><b>Volver</b></a></button>
";
        
        $__internal_b2fff367163f60b2f23a1c55a9c72cab06e7aa469b21d9cdc877205e77ebdf38->leave($__internal_b2fff367163f60b2f23a1c55a9c72cab06e7aa469b21d9cdc877205e77ebdf38_prof);

    }

    public function getTemplateName()
    {
        return "MRFClientesBundle:Clientes:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 36,  95 => 27,  90 => 25,  84 => 22,  79 => 20,  73 => 17,  68 => 15,  62 => 12,  57 => 10,  47 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }
}
