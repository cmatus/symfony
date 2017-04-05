<?php

/* GtSistemaBundle:Registrar:criterioRegistrar.html.twig */
class __TwigTemplate_4c5c516000d7dce92890fc8755c1459cb6e0b2e68fdd13a7b4b00cbea7964a3d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GtSistemaBundle::basePop.html.twig", "GtSistemaBundle:Registrar:criterioRegistrar.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "GtSistemaBundle::basePop.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_59578697760e596e1b322f025d3027487c429ccfa9487254f9a6014d3ee6b187 = $this->env->getExtension("native_profiler");
        $__internal_59578697760e596e1b322f025d3027487c429ccfa9487254f9a6014d3ee6b187->enter($__internal_59578697760e596e1b322f025d3027487c429ccfa9487254f9a6014d3ee6b187_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GtSistemaBundle:Registrar:criterioRegistrar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_59578697760e596e1b322f025d3027487c429ccfa9487254f9a6014d3ee6b187->leave($__internal_59578697760e596e1b322f025d3027487c429ccfa9487254f9a6014d3ee6b187_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_36b8bfab00a1015fa540c0ccf824570d218d7227f8924b018eaab3a03c71fb75 = $this->env->getExtension("native_profiler");
        $__internal_36b8bfab00a1015fa540c0ccf824570d218d7227f8924b018eaab3a03c71fb75->enter($__internal_36b8bfab00a1015fa540c0ccf824570d218d7227f8924b018eaab3a03c71fb75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <style>
        .popover-footer{
            padding: 6px 14px;
            background-color: #f7f7f7;
            border-top: 1px solid #ebebeb;
            text-align: right;
        }
                          
        .bootstrap-table .table,
        .bootstrap-table .table > tbody > tr > th,
        .bootstrap-table .table > tfoot > tr > th,            
        .bootstrap-table .table > tbody > tr > td,
        .bootstrap-table .table > tfoot > tr > td {            
            padding: 2px !important;
            vertical-align: top;
            overflow: hidden;
            text-overflow: ellipsis;
            //white-space: nowrap;
            font-size:11.5px;
           
        }
        
        .fixed-table-container thead th .th-inner {
            padding: 2px !important;        
            font-size:12px;
        }
        
    </style>

    <div class=\"container-fluid\">

    <form ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" action=\"#\" >

  
        ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 40
            echo "            <div class=\"flash-notice\">                              
                <div class=\"alert alert-success alert-dismissible\" role=\"alert\" style=\"padding-bottom:0px; padding-top: 0px; margin-bottom: 3px\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\" ><span aria-hidden=\"true\">&times;</span></button>
                    ";
            // line 43
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                    ";
            // line 44
            $context["guardado"] = true;
            // line 45
            echo "                </div>                               
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "

                    ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "id", array()), 'widget');
        echo "
                    ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "id", array()), 'errors');
        echo "
                    <p>
                        <label >Criterio</label>        

                        ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "criterioDescripcion", array()), 'widget');
        echo " 
                        ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "criterioDescripcion", array()), 'errors');
        echo "

                    </p>
                    
 
 <div class=\"row\">
        <div class=\"col-md-12 text-right\">                       
                        <button type=\"button\" class=\"btn btn-sm btn-default\" data-dismiss=\"modal\" onclick=\"parent.cerrar()\">Cerrar</button>
                        ";
        // line 64
        if ((isset($context["guardado"]) ? $context["guardado"] : $this->getContext($context, "guardado"))) {
            // line 65
            echo "                            <script type=\"text/javascript\">
                                parent.refreshTabla();
                            </script>
                            
                        ";
        }
        // line 70
        echo "                        <button type=\"submit\" id=\"btnGuardar\" name=\"btnGuardar\" class=\"btn btn-sm btn-primary\">Guardar</button>
                        
        </div>
 </div>
                        
     
                        
    ";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "



</form>    

        </div>
";
        
        $__internal_36b8bfab00a1015fa540c0ccf824570d218d7227f8924b018eaab3a03c71fb75->leave($__internal_36b8bfab00a1015fa540c0ccf824570d218d7227f8924b018eaab3a03c71fb75_prof);

    }

    // line 86
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_83f83402630d2660e3ec9aaf520a0b485dacd5b400391e121090494e95c72b30 = $this->env->getExtension("native_profiler");
        $__internal_83f83402630d2660e3ec9aaf520a0b485dacd5b400391e121090494e95c72b30->enter($__internal_83f83402630d2660e3ec9aaf520a0b485dacd5b400391e121090494e95c72b30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        echo " 
        <script type=\"text/javascript\">
            var wins;
            \$(document).ready(function() {
                    
            });

        </script>  

    ";
        
        $__internal_83f83402630d2660e3ec9aaf520a0b485dacd5b400391e121090494e95c72b30->leave($__internal_83f83402630d2660e3ec9aaf520a0b485dacd5b400391e121090494e95c72b30_prof);

    }

    public function getTemplateName()
    {
        return "GtSistemaBundle:Registrar:criterioRegistrar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 86,  152 => 77,  143 => 70,  136 => 65,  134 => 64,  123 => 56,  119 => 55,  112 => 51,  108 => 50,  104 => 48,  96 => 45,  94 => 44,  90 => 43,  85 => 40,  81 => 39,  75 => 36,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'GtSistemaBundle::basePop.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/*     <style>*/
/*         .popover-footer{*/
/*             padding: 6px 14px;*/
/*             background-color: #f7f7f7;*/
/*             border-top: 1px solid #ebebeb;*/
/*             text-align: right;*/
/*         }*/
/*                           */
/*         .bootstrap-table .table,*/
/*         .bootstrap-table .table > tbody > tr > th,*/
/*         .bootstrap-table .table > tfoot > tr > th,            */
/*         .bootstrap-table .table > tbody > tr > td,*/
/*         .bootstrap-table .table > tfoot > tr > td {            */
/*             padding: 2px !important;*/
/*             vertical-align: top;*/
/*             overflow: hidden;*/
/*             text-overflow: ellipsis;*/
/*             //white-space: nowrap;*/
/*             font-size:11.5px;*/
/*            */
/*         }*/
/*         */
/*         .fixed-table-container thead th .th-inner {*/
/*             padding: 2px !important;        */
/*             font-size:12px;*/
/*         }*/
/*         */
/*     </style>*/
/* */
/*     <div class="container-fluid">*/
/* */
/*     <form {{ form_enctype(form) }} method="POST" action="#" >*/
/* */
/*   */
/*         {% for flashMessage in app.session.flashbag.get('notice') %}*/
/*             <div class="flash-notice">                              */
/*                 <div class="alert alert-success alert-dismissible" role="alert" style="padding-bottom:0px; padding-top: 0px; margin-bottom: 3px">*/
/*                     <button type="button" class="close" data-dismiss="alert" aria-label="Close" ><span aria-hidden="true">&times;</span></button>*/
/*                     {{ flashMessage }}*/
/*                     {% set guardado=true %}*/
/*                 </div>                               */
/*             </div>*/
/*         {% endfor %}*/
/* */
/* */
/*                     {{ form_widget(form.id) }}*/
/*                     {{ form_errors(form.id) }}*/
/*                     <p>*/
/*                         <label >Criterio</label>        */
/* */
/*                         {{ form_widget(form.criterioDescripcion) }} */
/*                         {{ form_errors(form.criterioDescripcion) }}*/
/* */
/*                     </p>*/
/*                     */
/*  */
/*  <div class="row">*/
/*         <div class="col-md-12 text-right">                       */
/*                         <button type="button" class="btn btn-sm btn-default" data-dismiss="modal" onclick="parent.cerrar()">Cerrar</button>*/
/*                         {% if guardado %}*/
/*                             <script type="text/javascript">*/
/*                                 parent.refreshTabla();*/
/*                             </script>*/
/*                             */
/*                         {% endif %}*/
/*                         <button type="submit" id="btnGuardar" name="btnGuardar" class="btn btn-sm btn-primary">Guardar</button>*/
/*                         */
/*         </div>*/
/*  </div>*/
/*                         */
/*      */
/*                         */
/*     {{ form_rest(form) }}*/
/* */
/* */
/* */
/* </form>    */
/* */
/*         </div>*/
/* {% endblock %}*/
/* */
/*     {% block javascript %} */
/*         <script type="text/javascript">*/
/*             var wins;*/
/*             $(document).ready(function() {*/
/*                     */
/*             });*/
/* */
/*         </script>  */
/* */
/*     {% endblock %}    */
