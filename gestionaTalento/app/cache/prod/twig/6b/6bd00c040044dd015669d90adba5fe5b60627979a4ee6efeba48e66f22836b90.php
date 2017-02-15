<?php

/* GtSistemaBundle:Registrar:personaRegistrar.html.twig */
class __TwigTemplate_5026ba42a71b15610ee8d486f90ebc67fb2843bd7a30a697da4f992e6281d909 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GtSistemaBundle::basePop.html.twig", "GtSistemaBundle:Registrar:personaRegistrar.html.twig", 1);
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

    <form ";
        // line 34
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
        // line 52
        echo "
    <table style=\"border-collapse: collapse; width: 100%\">
       
    <tr>
        <td valign=\"top\">


          ";
        // line 64
        echo "
                    <div class=\"container-fluid\" style=\"padding-left:0px; padding-right: 0px; margin-right: 0px \">
                    
                    ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id", array()), 'widget');
        echo "
                    ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id", array()), 'errors');
        echo "
                   
                    ";
        // line 75
        echo "                    <p>
                       <label>Nombre</label>    
                       ";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "personaNombre", array()), 'widget');
        echo " 
                       ";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "personaNombre", array()), 'errors');
        echo "
                    </p>
                    
                     <p>
                       <label>Correo</label>    
                       ";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "personaCorreo", array()), 'widget');
        echo " 
                       ";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "personaCorreo", array()), 'errors');
        echo "
                    </p>
                    
                    <p>
                       <label>Perfil</label>    
                       ";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "perfilId", array()), 'widget');
        echo " 
                       ";
        // line 90
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "perfilId", array()), 'errors');
        echo "
                    </p> 
                    
                    <p>
                       <label>Evaluador</label>    
                       ";
        // line 95
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "personaId", array()), 'widget');
        echo " 
                       ";
        // line 96
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "personaId", array()), 'errors');
        echo "
                    </p>
                                                            
                    </div>
               ";
        // line 102
        echo "        </td>                             
    </tr>
     
    <tr>
        <td align=\"right\" colspan=\"2\">
            <button type=\"button\" class=\"btn btn-sm btn-default\" data-dismiss=\"modal\" onclick=\"parent.cerrar()\">Cerrar</button>
            ";
        // line 108
        if ((isset($context["guardado"]) ? $context["guardado"] : null)) {
            // line 109
            echo "                <button type=\"button\" id=\"btnOtro\" name=\"btnOtro\" class=\"btn btn-sm btn-primary\" onclick=\"formAccion(1, '0')\">Agregar Otro</button>
                <script type=\"text/javascript\">
                    window.parent.refreshTabla();
                </script>

            ";
        }
        // line 115
        echo "            <button type=\"submit\" id=\"btnGuardar\" name=\"btnGuardar\" class=\"btn btn-sm btn-primary\" >Guardar</button>

        </td>    
    </tr>
</table>
                        

";
        // line 122
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
</form>

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
        return "GtSistemaBundle:Registrar:personaRegistrar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 127,  201 => 122,  192 => 115,  184 => 109,  182 => 108,  174 => 102,  167 => 96,  163 => 95,  155 => 90,  151 => 89,  143 => 84,  139 => 83,  131 => 78,  127 => 77,  123 => 75,  118 => 68,  114 => 67,  109 => 64,  100 => 52,  97 => 47,  89 => 44,  87 => 43,  83 => 42,  78 => 39,  74 => 38,  71 => 37,  69 => 36,  64 => 34,  32 => 4,  29 => 3,  11 => 1,);
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
/*                    */
/*                     {#<p>*/
/*                         <label>Rut</label>*/
/*                         {{ form_widget(form.personaRut) }} */
/*                         {{ form_errors(form.personaRut) }}*/
/*                     </p>#}*/
/*                     <p>*/
/*                        <label>Nombre</label>    */
/*                        {{ form_widget(form.personaNombre) }} */
/*                        {{ form_errors(form.personaNombre) }}*/
/*                     </p>*/
/*                     */
/*                      <p>*/
/*                        <label>Correo</label>    */
/*                        {{ form_widget(form.personaCorreo) }} */
/*                        {{ form_errors(form.personaCorreo) }}*/
/*                     </p>*/
/*                     */
/*                     <p>*/
/*                        <label>Perfil</label>    */
/*                        {{ form_widget(form.perfilId) }} */
/*                        {{ form_errors(form.perfilId) }}*/
/*                     </p> */
/*                     */
/*                     <p>*/
/*                        <label>Evaluador</label>    */
/*                        {{ form_widget(form.personaId) }} */
/*                        {{ form_errors(form.personaId) }}*/
/*                     </p>*/
/*                                                             */
/*                     </div>*/
/*                {# </div>    */
/*             </div>#}*/
/*         </td>                             */
/*     </tr>*/
/*      */
/*     <tr>*/
/*         <td align="right" colspan="2">*/
/*             <button type="button" class="btn btn-sm btn-default" data-dismiss="modal" onclick="parent.cerrar()">Cerrar</button>*/
/*             {% if guardado %}*/
/*                 <button type="button" id="btnOtro" name="btnOtro" class="btn btn-sm btn-primary" onclick="formAccion(1, '0')">Agregar Otro</button>*/
/*                 <script type="text/javascript">*/
/*                     window.parent.refreshTabla();*/
/*                 </script>*/
/* */
/*             {% endif %}*/
/*             <button type="submit" id="btnGuardar" name="btnGuardar" class="btn btn-sm btn-primary" >Guardar</button>*/
/* */
/*         </td>    */
/*     </tr>*/
/* </table>*/
/*                         */
/* */
/* {{ form_rest(form) }}*/
/* </form>*/
/* */
/* {% endblock %}*/
/* */
/*     {% block javascript %} */
/*         <script type="text/javascript">*/
/*             var wins;*/
/* */
/*         </script>  */
/* */
/* */
/*     {% endblock %}    */
