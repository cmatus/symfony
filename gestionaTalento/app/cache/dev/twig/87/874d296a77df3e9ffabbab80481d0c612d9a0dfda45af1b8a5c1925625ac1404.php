<?php

/* GtSistemaBundle:Registrar:evaluacionRegistrar.html.twig */
class __TwigTemplate_4a929fd714f65718c486ffa937714c209399456609a0a43e8d4a5ef15085eec8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GtSistemaBundle::basePop.html.twig", "GtSistemaBundle:Registrar:evaluacionRegistrar.html.twig", 1);
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
        $__internal_3ddd19feebd6ce7b859fa0f6c07ca0082388af4a27436479a08a22995a976fbf = $this->env->getExtension("native_profiler");
        $__internal_3ddd19feebd6ce7b859fa0f6c07ca0082388af4a27436479a08a22995a976fbf->enter($__internal_3ddd19feebd6ce7b859fa0f6c07ca0082388af4a27436479a08a22995a976fbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GtSistemaBundle:Registrar:evaluacionRegistrar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ddd19feebd6ce7b859fa0f6c07ca0082388af4a27436479a08a22995a976fbf->leave($__internal_3ddd19feebd6ce7b859fa0f6c07ca0082388af4a27436479a08a22995a976fbf_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8679e7d74824e81f2353badd568e714d2eac36bce3d3802b6f7fcf9daa7c9fa3 = $this->env->getExtension("native_profiler");
        $__internal_8679e7d74824e81f2353badd568e714d2eac36bce3d3802b6f7fcf9daa7c9fa3->enter($__internal_8679e7d74824e81f2353badd568e714d2eac36bce3d3802b6f7fcf9daa7c9fa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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


    <form ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" action=\"#\" >
        
    ";
        // line 37
        $context["guardado"] = false;
        // line 38
        echo "
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
             

    <table style=\"border-collapse: collapse; width: 100%\">
       
    <tr>
        <td valign=\"top\">



                    <div class=\"container-fluid\" style=\"padding-left:0px; padding-right: 0px; margin-right: 0px \">
                    
                    ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "id", array()), 'widget');
        echo "
                    ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "id", array()), 'errors');
        echo "
                   
                    
                    <p>
                       <label>Nombre</label>    
                       ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "evaluacionNombre", array()), 'widget');
        echo " 
                       ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "evaluacionNombre", array()), 'errors');
        echo "
                    </p>
                    
                  
                    <p>
                       <label>Definicion</label>    
                       ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "evaluacionDefinicion", array()), 'widget');
        echo " 
                       ";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "evaluacionDefinicion", array()), 'errors');
        echo "
                    </p>
                    
                    
                                                            
                    </div>
               ";
        // line 82
        echo "        </td>                             
    </tr>
     
    <tr>
        <td align=\"right\" colspan=\"2\">
          ";
        // line 88
        echo "                        
                        <button type=\"button\" class=\"btn btn-sm btn-default\" data-dismiss=\"modal\" onclick=\"parent.cerrar()\">Cerrar</button>
                        ";
        // line 90
        if ((isset($context["guardado"]) ? $context["guardado"] : $this->getContext($context, "guardado"))) {
            // line 91
            echo "                            <button type=\"button\" id=\"btnOtro\" name=\"btnOtro\" class=\"btn btn-sm btn-primary\" onclick=\"formAccion(1, '0')\">Agregar Otro</button>
                            <script type=\"text/javascript\">
                                window.parent.refreshTabla();
                            </script>
                            
                        ";
        }
        // line 97
        echo "                        <button type=\"submit\" id=\"btnGuardar\" name=\"btnGuardar\" class=\"btn btn-sm btn-primary\" >Guardar</button>

        </td>    
    </tr>
</table>
    
";
        // line 103
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
</form>
";
        
        $__internal_8679e7d74824e81f2353badd568e714d2eac36bce3d3802b6f7fcf9daa7c9fa3->leave($__internal_8679e7d74824e81f2353badd568e714d2eac36bce3d3802b6f7fcf9daa7c9fa3_prof);

    }

    // line 107
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_eca180540ac19359d2237f42085ff6c97d33dfa6598129dffe97d92d525a873d = $this->env->getExtension("native_profiler");
        $__internal_eca180540ac19359d2237f42085ff6c97d33dfa6598129dffe97d92d525a873d->enter($__internal_eca180540ac19359d2237f42085ff6c97d33dfa6598129dffe97d92d525a873d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        echo " 
        <script type=\"text/javascript\">
            var wins;

        </script>  
    ";
        
        $__internal_eca180540ac19359d2237f42085ff6c97d33dfa6598129dffe97d92d525a873d->leave($__internal_eca180540ac19359d2237f42085ff6c97d33dfa6598129dffe97d92d525a873d_prof);

    }

    public function getTemplateName()
    {
        return "GtSistemaBundle:Registrar:evaluacionRegistrar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 107,  188 => 103,  180 => 97,  172 => 91,  170 => 90,  166 => 88,  159 => 82,  150 => 74,  146 => 73,  137 => 67,  133 => 66,  125 => 61,  121 => 60,  107 => 48,  99 => 45,  97 => 44,  93 => 43,  88 => 40,  84 => 39,  81 => 38,  79 => 37,  74 => 35,  41 => 4,  35 => 3,  11 => 1,);
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
/* */
/*     <form {{ form_enctype(form) }} method="POST" action="#" >*/
/*         */
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
/*              */
/* */
/*     <table style="border-collapse: collapse; width: 100%">*/
/*        */
/*     <tr>*/
/*         <td valign="top">*/
/* */
/* */
/* */
/*                     <div class="container-fluid" style="padding-left:0px; padding-right: 0px; margin-right: 0px ">*/
/*                     */
/*                     {{ form_widget(form.id) }}*/
/*                     {{ form_errors(form.id) }}*/
/*                    */
/*                     */
/*                     <p>*/
/*                        <label>Nombre</label>    */
/*                        {{ form_widget(form.evaluacionNombre) }} */
/*                        {{ form_errors(form.evaluacionNombre) }}*/
/*                     </p>*/
/*                     */
/*                   */
/*                     <p>*/
/*                        <label>Definicion</label>    */
/*                        {{ form_widget(form.evaluacionDefinicion) }} */
/*                        {{ form_errors(form.evaluacionDefinicion) }}*/
/*                     </p>*/
/*                     */
/*                     */
/*                                                             */
/*                     </div>*/
/*                {# </div>    */
/*             </div>#}*/
/*         </td>                             */
/*     </tr>*/
/*      */
/*     <tr>*/
/*         <td align="right" colspan="2">*/
/*           {#  <div class="panel panel-primary" style="margin:0px; padding: 0px;">                        */
/*                 <div class="panel-body" style="padding: 5px" >    #}                        */
/*                         <button type="button" class="btn btn-sm btn-default" data-dismiss="modal" onclick="parent.cerrar()">Cerrar</button>*/
/*                         {% if guardado %}*/
/*                             <button type="button" id="btnOtro" name="btnOtro" class="btn btn-sm btn-primary" onclick="formAccion(1, '0')">Agregar Otro</button>*/
/*                             <script type="text/javascript">*/
/*                                 window.parent.refreshTabla();*/
/*                             </script>*/
/*                             */
/*                         {% endif %}*/
/*                         <button type="submit" id="btnGuardar" name="btnGuardar" class="btn btn-sm btn-primary" >Guardar</button>*/
/* */
/*         </td>    */
/*     </tr>*/
/* </table>*/
/*     */
/* {{ form_rest(form) }}*/
/* </form>*/
/* {% endblock %}*/
/* */
/*     {% block javascript %} */
/*         <script type="text/javascript">*/
/*             var wins;*/
/* */
/*         </script>  */
/*     {% endblock %}    */
