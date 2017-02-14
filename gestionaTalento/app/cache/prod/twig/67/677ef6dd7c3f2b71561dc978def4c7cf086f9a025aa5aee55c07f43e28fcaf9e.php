<?php

/* GtSistemaBundle:Registrar:conocimientoRegistrar.html.twig */
class __TwigTemplate_3604a5a090d375869201049f89d2f0c704fc71ae4384cb9609ba54bd117bdffc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GtSistemaBundle::basePop.html.twig", "GtSistemaBundle:Registrar:conocimientoRegistrar.html.twig", 1);
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
        // line 37
        $context["guardado"] = false;
        // line 38
        echo "
        ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
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
        // line 53
        echo "
    <table style=\"border-collapse: collapse; width: 100%\">
       
    <tr>
        <td valign=\"top\">


          ";
        // line 65
        echo "
                    <div class=\"container-fluid\" style=\"padding-left:0px; padding-right: 0px; margin-right: 0px \">
                    
                    ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id", array()), 'widget');
        echo "
                    ";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id", array()), 'errors');
        echo "
                                       
                    ";
        // line 76
        echo "                    <p>
                       <label for=\"tbxPerfilNombre\">Nombre Conocimiento</label>    
                       ";
        // line 79
        echo "                       ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "conocimientoNombre", array()), 'widget');
        echo " 
                       ";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "conocimientoNombre", array()), 'errors');
        echo "
                    </p>
                    <p>
                    <label for=\"tbxPerfilDefinicion\">Defincion Conocimiento</label>        
                ";
        // line 85
        echo "
                        ";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "conocimientoDefinicion", array()), 'widget');
        echo " 
                        ";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "conocimientoDefinicion", array()), 'errors');
        echo "

                    </p>
                    
                                
                   
                        
                        
                    </div>
               ";
        // line 98
        echo "        </td>                             
    </tr>
     
    <tr>
        <td align=\"right\" colspan=\"1\"><br>
          
          
                        <button type=\"button\" class=\"btn btn-sm btn-default\" data-dismiss=\"modal\" onclick=\"parent.cerrar()\">Cerrar</button>
                        ";
        // line 106
        if ((isset($context["guardado"]) ? $context["guardado"] : null)) {
            // line 107
            echo "                            <button type=\"button\" id=\"btnOtro\" name=\"btnOtro\" class=\"btn btn-sm btn-primary\" onclick=\"formAccion(1, '0')\">Agregar Otro</button>
                            <script type=\"text/javascript\">
                                window.parent.refreshTabla();
                            </script>
                            
                        ";
        }
        // line 113
        echo "                        <input type=\"submit\" id=\"btnGuardar\" name=\"btnGuardar\" value=\"Guardar\" class=\"btn btn-sm btn-primary\">
        </td>    
    </tr>
</table>
                        
                      
<input type=\"hidden\" id=\"tbxAprendizaje\" name=\"tbxAprendizaje\" value=\"\">

";
        // line 121
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
</form>       

        </div>
";
    }

    // line 127
    public function block_javascript($context, array $blocks = array())
    {
        echo " 
        <script type=\"text/javascript\">
            var wins;
        
            
      
        </script>  


    ";
    }

    public function getTemplateName()
    {
        return "GtSistemaBundle:Registrar:conocimientoRegistrar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 127,  189 => 121,  179 => 113,  171 => 107,  169 => 106,  159 => 98,  147 => 87,  143 => 86,  140 => 85,  133 => 80,  128 => 79,  124 => 76,  119 => 69,  115 => 68,  110 => 65,  101 => 53,  98 => 48,  90 => 45,  88 => 44,  84 => 43,  79 => 40,  75 => 39,  72 => 38,  70 => 37,  65 => 35,  32 => 4,  29 => 3,  11 => 1,);
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
/* */
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
/*                     {# <ol class="breadcrumb">*/
/*                        <li><a href="#">Clientes</a></li>                      */
/*                        <li class="active">Nuevo</li>*/
/*                      </ol>#}*/
/* */
/*     <table style="border-collapse: collapse; width: 100%">*/
/*        */
/*     <tr>*/
/*         <td valign="top">*/
/* */
/* */
/*           {#  <div class="panel panel-primary" style="margin:0px; padding: 0px;">*/
/*                 <div class="panel-heading" style=" height: 20px; padding-top: 0px;">                    */
/*                     Datos básicos curso                */
/*                 </div>*/
/*                 <div class="panel-body" style="padding: 4px" >#}*/
/* */
/*                     <div class="container-fluid" style="padding-left:0px; padding-right: 0px; margin-right: 0px ">*/
/*                     */
/*                     {{ form_widget(form.id) }}*/
/*                     {{ form_errors(form.id) }}*/
/*                                        */
/*                     {#<p>*/
/*                     <label for="tbxConocimientoCodigo">Codigo Conocimiento</label><br>*/
/*                     {{ form_widget(form.conocimientoCodigo) }} */
/*                     {{ form_errors(form.conocimientoCodigo) }}*/
/*                     </p>#}*/
/*                     <p>*/
/*                        <label for="tbxPerfilNombre">Nombre Conocimiento</label>    */
/*                        {#<input type="text" id="tbxPerfilNombre" class="form-control input-sm" placeholder="Ingrese nombre">  #}*/
/*                        {{ form_widget(form.conocimientoNombre) }} */
/*                        {{ form_errors(form.conocimientoNombre) }}*/
/*                     </p>*/
/*                     <p>*/
/*                     <label for="tbxPerfilDefinicion">Defincion Conocimiento</label>        */
/*                 {#        <textarea class="form-control input-sm" rows="10" placeholder="Ingrese definicion" ></textarea>    #}*/
/* */
/*                         {{ form_widget(form.conocimientoDefinicion) }} */
/*                         {{ form_errors(form.conocimientoDefinicion) }}*/
/* */
/*                     </p>*/
/*                     */
/*                                 */
/*                    */
/*                         */
/*                         */
/*                     </div>*/
/*                {# </div>    */
/*             </div>#}*/
/*         </td>                             */
/*     </tr>*/
/*      */
/*     <tr>*/
/*         <td align="right" colspan="1"><br>*/
/*           */
/*           */
/*                         <button type="button" class="btn btn-sm btn-default" data-dismiss="modal" onclick="parent.cerrar()">Cerrar</button>*/
/*                         {% if guardado %}*/
/*                             <button type="button" id="btnOtro" name="btnOtro" class="btn btn-sm btn-primary" onclick="formAccion(1, '0')">Agregar Otro</button>*/
/*                             <script type="text/javascript">*/
/*                                 window.parent.refreshTabla();*/
/*                             </script>*/
/*                             */
/*                         {% endif %}*/
/*                         <input type="submit" id="btnGuardar" name="btnGuardar" value="Guardar" class="btn btn-sm btn-primary">*/
/*         </td>    */
/*     </tr>*/
/* </table>*/
/*                         */
/*                       */
/* <input type="hidden" id="tbxAprendizaje" name="tbxAprendizaje" value="">*/
/* */
/* {{ form_rest(form) }}*/
/* </form>       */
/* */
/*         </div>*/
/* {% endblock %}*/
/* */
/*     {% block javascript %} */
/*         <script type="text/javascript">*/
/*             var wins;*/
/*         */
/*             */
/*       */
/*         </script>  */
/* */
/* */
/*     {% endblock %}    */
