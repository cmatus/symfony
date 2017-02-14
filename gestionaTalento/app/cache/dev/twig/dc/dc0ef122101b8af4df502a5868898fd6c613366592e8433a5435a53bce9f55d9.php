<?php

/* GtSistemaBundle:Registrar:personaRegistrar.html.twig */
class __TwigTemplate_ffdbfd1cadeade658b3b6bfd9fe78a79386336b19cfc4d41805bcf7f469d876f extends Twig_Template
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
        $__internal_a3b113ec97893e632be7cfc56ab55f65d74536b427fbbf253ca83425af03549e = $this->env->getExtension("native_profiler");
        $__internal_a3b113ec97893e632be7cfc56ab55f65d74536b427fbbf253ca83425af03549e->enter($__internal_a3b113ec97893e632be7cfc56ab55f65d74536b427fbbf253ca83425af03549e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GtSistemaBundle:Registrar:personaRegistrar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a3b113ec97893e632be7cfc56ab55f65d74536b427fbbf253ca83425af03549e->leave($__internal_a3b113ec97893e632be7cfc56ab55f65d74536b427fbbf253ca83425af03549e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ce7bdc01b66a3685397cfdc0510d3168eb1e4010d1421bbe8182b349feb51cdf = $this->env->getExtension("native_profiler");
        $__internal_ce7bdc01b66a3685397cfdc0510d3168eb1e4010d1421bbe8182b349feb51cdf->enter($__internal_ce7bdc01b66a3685397cfdc0510d3168eb1e4010d1421bbe8182b349feb51cdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" action=\"#\" >

    ";
        // line 36
        $context["guardado"] = false;
        // line 37
        echo "
        ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "id", array()), 'widget');
        echo "
                    ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "id", array()), 'errors');
        echo "
                   
                    ";
        // line 75
        echo "                    <p>
                       <label>Nombre</label>    
                       ";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "personaNombre", array()), 'widget');
        echo " 
                       ";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "personaNombre", array()), 'errors');
        echo "
                    </p>
                    
                     <p>
                       <label>Correo</label>    
                       ";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "personaCorreo", array()), 'widget');
        echo " 
                       ";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "personaCorreo", array()), 'errors');
        echo "
                    </p>
                    
                    <p>
                       <label>Perfil</label>    
                       ";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "perfilId", array()), 'widget');
        echo " 
                       ";
        // line 90
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "perfilId", array()), 'errors');
        echo "
                    </p> 
                    
                    <p>
                       <label>Evaluador</label>    
                       ";
        // line 95
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "personaId", array()), 'widget');
        echo " 
                       ";
        // line 96
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "personaId", array()), 'errors');
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
        if ((isset($context["guardado"]) ? $context["guardado"] : $this->getContext($context, "guardado"))) {
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
</form>

";
        
        $__internal_ce7bdc01b66a3685397cfdc0510d3168eb1e4010d1421bbe8182b349feb51cdf->leave($__internal_ce7bdc01b66a3685397cfdc0510d3168eb1e4010d1421bbe8182b349feb51cdf_prof);

    }

    // line 127
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_2aae8841c01a09e600cb6079cf30ac3ce14c53e89d4de97c9b1565f000b1b75f = $this->env->getExtension("native_profiler");
        $__internal_2aae8841c01a09e600cb6079cf30ac3ce14c53e89d4de97c9b1565f000b1b75f->enter($__internal_2aae8841c01a09e600cb6079cf30ac3ce14c53e89d4de97c9b1565f000b1b75f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        echo " 
        <script type=\"text/javascript\">
            var wins;

        </script>  


    ";
        
        $__internal_2aae8841c01a09e600cb6079cf30ac3ce14c53e89d4de97c9b1565f000b1b75f->leave($__internal_2aae8841c01a09e600cb6079cf30ac3ce14c53e89d4de97c9b1565f000b1b75f_prof);

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
        return array (  221 => 127,  210 => 122,  201 => 115,  193 => 109,  191 => 108,  183 => 102,  176 => 96,  172 => 95,  164 => 90,  160 => 89,  152 => 84,  148 => 83,  140 => 78,  136 => 77,  132 => 75,  127 => 68,  123 => 67,  118 => 64,  109 => 52,  106 => 47,  98 => 44,  96 => 43,  92 => 42,  87 => 39,  83 => 38,  80 => 37,  78 => 36,  73 => 34,  41 => 4,  35 => 3,  11 => 1,);
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
