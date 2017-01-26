<?php

/* MRFClientesBundle:Clientes:index.html.twig */
class __TwigTemplate_e54d6a0f154488533ed63b85cc34aa39c4a1153e0cfd173b4bd76b4fe4e5b0f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "MRFClientesBundle:Clientes:index.html.twig", 1);
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
        $__internal_58443b2b0b6c08e58925944140448bac043096b8c896f27255c2ff289ba57d47 = $this->env->getExtension("native_profiler");
        $__internal_58443b2b0b6c08e58925944140448bac043096b8c896f27255c2ff289ba57d47->enter($__internal_58443b2b0b6c08e58925944140448bac043096b8c896f27255c2ff289ba57d47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MRFClientesBundle:Clientes:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_58443b2b0b6c08e58925944140448bac043096b8c896f27255c2ff289ba57d47->leave($__internal_58443b2b0b6c08e58925944140448bac043096b8c896f27255c2ff289ba57d47_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_6de97535484e72c3a59be4a2a231b55d37f3d16c8a939ff16d8981a27e8cca99 = $this->env->getExtension("native_profiler");
        $__internal_6de97535484e72c3a59be4a2a231b55d37f3d16c8a939ff16d8981a27e8cca99->enter($__internal_6de97535484e72c3a59be4a2a231b55d37f3d16c8a939ff16d8981a27e8cca99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <h2>Clientes</h2>
    
    ";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "mensaje"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 8
            echo "        <div class=\"alert\" role=\"alert\">
            <div class =\"container\">";
            // line 9
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "</div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "    
<table border=\"1\">
    <tr>
        <td>Rut</td>
        <td>Nombre</td>
        <td>Apellido Paterno</td>
        <td>Apellido Materno</td>
        <td>Dirección</td>
        <td>Email</td>
        <td>Telefono</td>
        <td>Acciones</td>
        
    </tr>
    ";
        // line 25
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clientes"]) ? $context["clientes"] : $this->getContext($context, "clientes")));
        foreach ($context['_seq'] as $context["_key"] => $context["cliente"]) {
            // line 26
            echo "    <tr>
        <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "rut", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "nombre", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "apellidoP", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "apellidoM", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "direccion", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "email", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "fono", array()), "html", null, true);
            echo "</td>
        <td>
            <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mrf_clientes_view", array("id" => $this->getAttribute($context["cliente"], "id", array()))), "html", null, true);
            echo "\">Ver</a>
            <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mrf_clientes_edit", array("id" => $this->getAttribute($context["cliente"], "id", array()))), "html", null, true);
            echo "\">Editar</a>
            <a href=\"\">Editar</a>
            
            
        </td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cliente'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "</table>
<br />
<button><a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("mrf_clientes_add");
        echo "\"><b>Agregar Nuevo Cliente</b></a></button>
";
        
        $__internal_6de97535484e72c3a59be4a2a231b55d37f3d16c8a939ff16d8981a27e8cca99->leave($__internal_6de97535484e72c3a59be4a2a231b55d37f3d16c8a939ff16d8981a27e8cca99_prof);

    }

    public function getTemplateName()
    {
        return "MRFClientesBundle:Clientes:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 45,  128 => 43,  115 => 36,  111 => 35,  106 => 33,  102 => 32,  98 => 31,  94 => 30,  90 => 29,  86 => 28,  82 => 27,  79 => 26,  75 => 25,  60 => 12,  51 => 9,  48 => 8,  44 => 7,  40 => 5,  34 => 4,  11 => 1,);
    }
}
