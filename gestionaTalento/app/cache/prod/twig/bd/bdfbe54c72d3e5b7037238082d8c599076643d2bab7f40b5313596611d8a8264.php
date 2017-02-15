<?php

/* GtSistemaBundle:Registrar:competenciaRegistrar.html.twig */
class __TwigTemplate_02207ab4fa255648c35f4281b3db0a2ab3ee95ca684694b3a3151f4ab2b95244 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GtSistemaBundle::basePop.html.twig", "GtSistemaBundle:Registrar:competenciaRegistrar.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
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
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo " method=\"POST\" action=\"#\" >
    ";
        // line 36
        $context["guardado"] = false;
        // line 37
        echo "
        ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 39
            echo "            <div class=\"flash-notice\">                              
                <div class=\"alert alert-success alert-dismissible\" role=\"alert\" style=\"padding-bottom:0px; padding-top: 0px; margin-bottom: 3px\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\" ><span aria-hidden=\"true\">&times;</span></button>
                    ";
            // line 42
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                    ";
            // line 43
            $context["guardado"] = true;
            // line 44
            echo "                </div>                               
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "
                 

                    
                    ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id", array()), 'widget');
        echo "
                    ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id", array()), 'errors');
        echo "
                   
                    <p>
                       <label for=\"tbxPerfilNombre\">Nombre Competencia</label>    
                       
                       ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "competenciaNombre", array()), 'widget');
        echo " 
                       ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "competenciaNombre", array()), 'errors');
        echo "
                    </p>
                    <p>
                        <label for=\"tbxPerfilDefinicion\">Defincion Competencia</label>        
                        ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "competenciaDefinicion", array()), 'widget');
        echo " 
                        ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "competenciaDefinicion", array()), 'errors');
        echo "
                    </p>
                    
                    
                    <div class=\"row\">
        <div class=\"col-md-12 text-right\">                       
                        <button type=\"button\" class=\"btn btn-sm btn-default\" data-dismiss=\"modal\" onclick=\"parent.cerrar()\">Cerrar</button>
                        ";
        // line 70
        if ((isset($context["guardado"]) ? $context["guardado"] : null)) {
            // line 71
            echo "                            <script type=\"text/javascript\">
                                parent.refreshTabla();
                            </script>
                            
                        ";
        }
        // line 76
        echo "                        <button type=\"submit\" id=\"btnGuardar\" name=\"btnGuardar\" class=\"btn btn-sm btn-primary\">Guardar</button>
                        
        </div>
 </div>
       
";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
</form>   

        </div>
";
    }

    // line 87
    public function block_javascript($context, array $blocks = array())
    {
        echo " 
        <script type=\"text/javascript\">
            var wins;
            
           
            \$(document).ready(function() {
   
                                                                        
            });                                                      

        </script>  

        
        <script src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/comFunciones.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

    ";
    }

    public function getTemplateName()
    {
        return "GtSistemaBundle:Registrar:competenciaRegistrar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 100,  165 => 87,  156 => 81,  149 => 76,  142 => 71,  140 => 70,  130 => 63,  126 => 62,  119 => 58,  115 => 57,  107 => 52,  103 => 51,  97 => 47,  89 => 44,  87 => 43,  83 => 42,  78 => 39,  74 => 38,  71 => 37,  69 => 36,  65 => 35,  32 => 4,  29 => 3,  11 => 1,);
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
/* <div class="container-fluid">*/
/*     <form {{ form_enctype(form) }} method="POST" action="#" >*/
/*     {% set guardado=false %}*/
/* */
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
/*                  */
/* */
/*                     */
/*                     {{ form_widget(form.id) }}*/
/*                     {{ form_errors(form.id) }}*/
/*                    */
/*                     <p>*/
/*                        <label for="tbxPerfilNombre">Nombre Competencia</label>    */
/*                        */
/*                        {{ form_widget(form.competenciaNombre) }} */
/*                        {{ form_errors(form.competenciaNombre) }}*/
/*                     </p>*/
/*                     <p>*/
/*                         <label for="tbxPerfilDefinicion">Defincion Competencia</label>        */
/*                         {{ form_widget(form.competenciaDefinicion) }} */
/*                         {{ form_errors(form.competenciaDefinicion) }}*/
/*                     </p>*/
/*                     */
/*                     */
/*                     <div class="row">*/
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
/*        */
/* {{ form_rest(form) }}*/
/* </form>   */
/* */
/*         </div>*/
/* {% endblock %}*/
/* */
/*     {% block javascript %} */
/*         <script type="text/javascript">*/
/*             var wins;*/
/*             */
/*            */
/*             $(document).ready(function() {*/
/*    */
/*                                                                         */
/*             });                                                      */
/* */
/*         </script>  */
/* */
/*         */
/*         <script src="{{ asset('js/comFunciones.js') }}" type="text/javascript"></script>*/
/* */
/*     {% endblock %}    */
