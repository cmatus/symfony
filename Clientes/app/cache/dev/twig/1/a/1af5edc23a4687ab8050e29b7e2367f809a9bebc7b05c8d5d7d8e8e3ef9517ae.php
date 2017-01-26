<?php

/* MRFClientesBundle:Clientes:add.html.twig */
class __TwigTemplate_1af5edc23a4687ab8050e29b7e2367f809a9bebc7b05c8d5d7d8e8e3ef9517ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "MRFClientesBundle:Clientes:add.html.twig", 1);
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
        $__internal_f34c6b14ae48c72c27ea6c153ca01d83abcc7d3309d622c3de089ca3a6b6289a = $this->env->getExtension("native_profiler");
        $__internal_f34c6b14ae48c72c27ea6c153ca01d83abcc7d3309d622c3de089ca3a6b6289a->enter($__internal_f34c6b14ae48c72c27ea6c153ca01d83abcc7d3309d622c3de089ca3a6b6289a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MRFClientesBundle:Clientes:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f34c6b14ae48c72c27ea6c153ca01d83abcc7d3309d622c3de089ca3a6b6289a->leave($__internal_f34c6b14ae48c72c27ea6c153ca01d83abcc7d3309d622c3de089ca3a6b6289a_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_a7648e2f4148ebb50718a7d4c390a6cc1e9e7dc83e896f1ab22a0879cb252715 = $this->env->getExtension("native_profiler");
        $__internal_a7648e2f4148ebb50718a7d4c390a6cc1e9e7dc83e896f1ab22a0879cb252715->enter($__internal_a7648e2f4148ebb50718a7d4c390a6cc1e9e7dc83e896f1ab22a0879cb252715_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <h2>Nuevo Cliente</h2>
    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    <div class=\"form_group\">
        ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "rut", array()), 'label');
        echo "
        ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "rut", array()), 'widget', array("attr" => array("placeholder" => "Rut")));
        echo "
        <span class=\"text-danger\">";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "rut", array()), 'errors');
        echo "</span>
        </div>
        <div class=\"form_group\">
        ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'label');
        echo "
        ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'widget', array("attr" => array("placeholder" => "Nombre")));
        echo "
        <span class=\"text-danger\">";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'errors');
        echo "</span>
        </div>
        <div class=\"form_group\">
        ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "apellidoP", array()), 'label');
        echo "
        ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "apellidoP", array()), 'widget', array("attr" => array("placeholder" => "Apellido Paterno")));
        echo "
        <span class=\"text-danger\">";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "apellidoP", array()), 'errors');
        echo "</span>
        </div>
        <div class=\"form_group\">
        ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "apellidoM", array()), 'label');
        echo "
        ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "apellidoM", array()), 'widget', array("attr" => array("placeholder" => "Apellido materno")));
        echo "
        <span class=\"text-danger\">";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "apellidoM", array()), 'errors');
        echo "</span>
        </div>
        <div class=\"form_group\">
        ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "direccion", array()), 'label');
        echo "
        ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "direccion", array()), 'widget', array("attr" => array("placeholder" => "Direccion")));
        echo "
        <span class=\"text-danger\">";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "direccion", array()), 'errors');
        echo "</span>
        </div>
        <div class=\"form_group\">
        ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label');
        echo "
        ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("placeholder" => "Email")));
        echo "
        <span class=\"text-danger\">";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "</span>
        </div>
        <div class=\"form_group\">
        ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fono", array()), 'label');
        echo "
        ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fono", array()), 'widget', array("attr" => array("placeholder" => "Telefono")));
        echo "
        <span class=\"text-danger\">";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "rut", array()), 'errors');
        echo "</span>
        </div>
        <p>
            ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("label" => "Crear Cliente", "attr" => array("class" => "btn")));
        echo "
        </p>
    
    ";
        // line 46
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
<button><a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("mrf_clientes_list");
        echo "\"><b>Volver</b></a></button>
";
        
        $__internal_a7648e2f4148ebb50718a7d4c390a6cc1e9e7dc83e896f1ab22a0879cb252715->leave($__internal_a7648e2f4148ebb50718a7d4c390a6cc1e9e7dc83e896f1ab22a0879cb252715_prof);

    }

    public function getTemplateName()
    {
        return "MRFClientesBundle:Clientes:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 47,  152 => 46,  146 => 43,  140 => 40,  136 => 39,  132 => 38,  126 => 35,  122 => 34,  118 => 33,  112 => 30,  108 => 29,  104 => 28,  98 => 25,  94 => 24,  90 => 23,  84 => 20,  80 => 19,  76 => 18,  70 => 15,  66 => 14,  62 => 13,  56 => 10,  52 => 9,  48 => 8,  43 => 6,  40 => 5,  34 => 4,  11 => 1,);
    }
}
