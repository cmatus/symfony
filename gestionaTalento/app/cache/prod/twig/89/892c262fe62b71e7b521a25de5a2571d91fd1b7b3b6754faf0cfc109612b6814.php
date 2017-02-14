<?php

/* GtSistemaBundle:Registrar:aprendizaje.html.twig */
class __TwigTemplate_23a2cf2c2a308a99ab961d0c947208a6381f46cba8f9880412bb438ef80b3f91 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GtSistemaBundle::basePop.html.twig", "GtSistemaBundle:Registrar:aprendizaje.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo " Gestionatalento ";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
    <style>
        .popover-footer{
            padding: 6px 14px;
            background-color: #f7f7f7;
            border-top: 1px solid #ebebeb;
            text-align: right;
        }
    </style>
        


  <div class=\"container\">     
    <div class=\"center-block\" >
      ";
        // line 25
        echo "                
           
                                           
                ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 29
            echo "        <div class=\"flash-notice\">                              
            <div class=\"alert alert-success alert-dismissible\" role=\"alert\" style=\"padding-bottom:0px; padding-top: 0px; margin-bottom: 3px\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\" ><span aria-hidden=\"true\">&times;</span></button>
                ";
            // line 32
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                ";
            // line 33
            $context["guardado"] = true;
            // line 34
            echo "            </div>                               
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        
                <div id=\"custom-toolbar\">
";
        // line 42
        echo "
                    <button id='btnCuentaBancoNuevo' type=\"button\" class=\"btn btn-sm btn-warning\" onclick=\"registrar(0)\">
                        Nuevo Indicador
                    </button>


                </div>
                                
                <table id='tblAprendizaje' data-classes=\"table table-condensed\" 
                       data-toggle=\"table\" 
                       data-cache=\"false\" 
                       data-height=\"400\" 
                       data-striped=\"true\"  
                       data-pagination=\"true\"
                       data-search=\"true\" 
                       data-show-refresh=\"true\"
                       data-toolbar=\"#custom-toolbar\"
                       data-show-export=\"true\" exportTypes=\"['excel', 'txt', 'csv']\"
                       data-url=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("aprendizajeTabla", array("conocimientoId" => (isset($context["conocimientoId"]) ? $context["conocimientoId"] : null))), "html", null, true);
        echo "\">
                    <thead>
                    <tr>
                        <th data-formatter=\"opciones\" data-events=\"operateEvents\">Opciones</th>
                        <th data-field=\"id\" data-sortable=\"true\" data-visible=\"false\">#</th>                                                
                        <th data-field=\"aprendizajeNombre\" data-sortable=\"true\" data-width=\"600\">Indicador Competencia Conductual</th>                        
                        
                    </tr>
                    </thead>                    
                </table>                
   



    <!-- start: Delete Coupon Modal -->
    <div class=\"modal fade\" id=\"winBorrar\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header bg-danger\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                     <h3 class=\"modal-title\" id=\"myModaBorrarlLabel\">Atencion!</h3>

                </div>
                <div class=\"modal-body\" id=\"myModalBodyBorrar\">
                     <h4> Esta seguro de borrar?</h4>
                     ";
        // line 86
        echo "                </div>
                <!--/modal-body-collapse -->
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-danger\" id=\"btnConfirmaBorrar\" onclick=\"formAccion(2)\">Si</button>
                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">No</button>
                </div>
                <!--/modal-footer-collapse -->
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->    
</div>

<form id=\"thisform\" name=\"thisform\" method=\"post\">
    <input type=\"hidden\" name=\"aprendizajeId\" id=\"aprendizajeId\">
</form>

";
    }

    // line 109
    public function block_javascript($context, array $blocks = array())
    {
        echo "   

    <script type=\"text/javascript\">
        var wins;
        
        
        function registrar(aprendizajeId) {
            
            var conocimientoId=\"";
        // line 117
        echo twig_escape_filter($this->env, (isset($context["conocimientoId"]) ? $context["conocimientoId"] : null), "html", null, true);
        echo "\";
            wins = new dhtmlXWindows();
            skin=\"dhx_terrace\";
            wins.setSkin(skin);

            winId=\"winAprendizajeRegistrar\";

            wins.createWindow(winId, 1, 1, 650, 400);
            wins.window(winId).setText(\"Registrar - Indicador\");

            wins.window(winId).setModal(true);
            wins.window(winId).button(\"minmax\").disable();                   
            wins.window(winId).centerOnScreen();                   
            wins.window(winId).progressOn();

            wins.window(winId).setIconCss(\"without_icon\");

            var url=Routing.generate('aprendizajeRegistrar', {'conocimientoId':conocimientoId,'aprendizajeId':aprendizajeId});
            wins.window(winId).attachURL(url);

            wins.window(winId).attachEvent(\"onContentLoaded\", function(id){
               id.progressOff();        
              
            });     

        }
        
        function frmBorrar() {            
            var aprendizajeId= \$(\"#aprendizajeId\").val();
            url = Routing.generate('aprendizajeBorrar', {'aprendizajeId':aprendizajeId});
            document.thisform.action=url
            document.thisform.submit();            
        }            
        
        function opciones(value, row, index) {
            return [
                '<div class=\"btn-group\" role=\"group\"><button type=\"button\" class=\"modificar btn btn-xs btn-default\" ><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span></button>',
                '<button type=\"button\" class=\"borrar btn btn-xs btn-default\" ><span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span></button>',
                '</div>'
            ].join('');
        }


        window.operateEvents = {
            'click .modificar': function (e, value, row, index) {                                                                    
                registrar(row.id);
            },
            'click .borrar': function (e, value, row, index) {
                \$('#winBorrar').modal('show');
                \$(\"#maeRegistroId\").val(row.id);
            },
           
        };
    
        \$(document).ready(function() {

        });

                
        function cerrar() {
            winId=\"winAprendizajeRegistrar\";
            wins.window(winId).close();
        }
        
        function progress() {
            winId=\"winAprendizajeRegistrar\";
            wins.window(winId).progressOn();
        }
        
        function refreshTabla() {
            //alert(\"aca\");
            var \$table = \$('#tblAprendizaje');
            \$table.bootstrapTable('refresh');
        }
        
    </script>    
    
    
    <script src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/comFunciones.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
    }

    public function getTemplateName()
    {
        return "GtSistemaBundle:Registrar:aprendizaje.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  251 => 195,  170 => 117,  158 => 109,  135 => 86,  107 => 60,  87 => 42,  83 => 37,  75 => 34,  73 => 33,  69 => 32,  64 => 29,  60 => 28,  55 => 25,  39 => 6,  36 => 5,  30 => 2,  11 => 1,);
    }
}
/* {% extends 'GtSistemaBundle::basePop.html.twig' %}*/
/* {% block title %} Gestionatalento {% endblock %}*/
/* {#{% block dondeEstoy %}Empresa Cambiar{% endblock %}#}*/
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
/*     </style>*/
/*         */
/* */
/* */
/*   <div class="container">     */
/*     <div class="center-block" >*/
/*       {#  <div class="panel panel-primary" >*/
/*             <div class="panel-heading">*/
/*                 <h3 class="panel-title">Aprendizajes</h3>*/
/*             </div>*/
/*             <div class="panel-body" >#}*/
/*                 */
/*            */
/*                                            */
/*                 {% for flashMessage in app.session.flashbag.get('notice') %}*/
/*         <div class="flash-notice">                              */
/*             <div class="alert alert-success alert-dismissible" role="alert" style="padding-bottom:0px; padding-top: 0px; margin-bottom: 3px">*/
/*                 <button type="button" class="close" data-dismiss="alert" aria-label="Close" ><span aria-hidden="true">&times;</span></button>*/
/*                 {{ flashMessage }}*/
/*                 {% set guardado=true %}*/
/*             </div>                               */
/*         </div>*/
/*     {% endfor %}*/
/*         */
/*                 <div id="custom-toolbar">*/
/* {#                    <button id='btnAprendizaje' type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">*/
/*                         Nueva Actividad Clave*/
/*                     </button>#}*/
/* */
/*                     <button id='btnCuentaBancoNuevo' type="button" class="btn btn-sm btn-warning" onclick="registrar(0)">*/
/*                         Nuevo Indicador*/
/*                     </button>*/
/* */
/* */
/*                 </div>*/
/*                                 */
/*                 <table id='tblAprendizaje' data-classes="table table-condensed" */
/*                        data-toggle="table" */
/*                        data-cache="false" */
/*                        data-height="400" */
/*                        data-striped="true"  */
/*                        data-pagination="true"*/
/*                        data-search="true" */
/*                        data-show-refresh="true"*/
/*                        data-toolbar="#custom-toolbar"*/
/*                        data-show-export="true" exportTypes="['excel', 'txt', 'csv']"*/
/*                        data-url="{{path('aprendizajeTabla', {'conocimientoId':conocimientoId})}}">*/
/*                     <thead>*/
/*                     <tr>*/
/*                         <th data-formatter="opciones" data-events="operateEvents">Opciones</th>*/
/*                         <th data-field="id" data-sortable="true" data-visible="false">#</th>                                                */
/*                         <th data-field="aprendizajeNombre" data-sortable="true" data-width="600">Indicador Competencia Conductual</th>                        */
/*                         */
/*                     </tr>*/
/*                     </thead>                    */
/*                 </table>                */
/*    */
/* */
/* */
/* */
/*     <!-- start: Delete Coupon Modal -->*/
/*     <div class="modal fade" id="winBorrar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">*/
/*         <div class="modal-dialog">*/
/*             <div class="modal-content">*/
/*                 <div class="modal-header bg-danger">*/
/*                     <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>*/
/*                      <h3 class="modal-title" id="myModaBorrarlLabel">Atencion!</h3>*/
/* */
/*                 </div>*/
/*                 <div class="modal-body" id="myModalBodyBorrar">*/
/*                      <h4> Esta seguro de borrar?</h4>*/
/*                      {#<input type="hidden" name="tbxIdAprendizaje" id="tbxIdAprendizaje">#}*/
/*                 </div>*/
/*                 <!--/modal-body-collapse -->*/
/*                 <div class="modal-footer">*/
/*                     <button type="button" class="btn btn-danger" id="btnConfirmaBorrar" onclick="formAccion(2)">Si</button>*/
/*                     <button type="button" class="btn btn-default" data-dismiss="modal">No</button>*/
/*                 </div>*/
/*                 <!--/modal-footer-collapse -->*/
/*             </div>*/
/*             <!-- /.modal-content -->*/
/*         </div>*/
/*         <!-- /.modal-dialog -->*/
/*     </div>*/
/*     <!-- /.modal -->    */
/* </div>*/
/* */
/* <form id="thisform" name="thisform" method="post">*/
/*     <input type="hidden" name="aprendizajeId" id="aprendizajeId">*/
/* </form>*/
/* */
/* {% endblock %}*/
/* */
/* */
/* */
/* {% block javascript %}   */
/* */
/*     <script type="text/javascript">*/
/*         var wins;*/
/*         */
/*         */
/*         function registrar(aprendizajeId) {*/
/*             */
/*             var conocimientoId="{{conocimientoId}}";*/
/*             wins = new dhtmlXWindows();*/
/*             skin="dhx_terrace";*/
/*             wins.setSkin(skin);*/
/* */
/*             winId="winAprendizajeRegistrar";*/
/* */
/*             wins.createWindow(winId, 1, 1, 650, 400);*/
/*             wins.window(winId).setText("Registrar - Indicador");*/
/* */
/*             wins.window(winId).setModal(true);*/
/*             wins.window(winId).button("minmax").disable();                   */
/*             wins.window(winId).centerOnScreen();                   */
/*             wins.window(winId).progressOn();*/
/* */
/*             wins.window(winId).setIconCss("without_icon");*/
/* */
/*             var url=Routing.generate('aprendizajeRegistrar', {'conocimientoId':conocimientoId,'aprendizajeId':aprendizajeId});*/
/*             wins.window(winId).attachURL(url);*/
/* */
/*             wins.window(winId).attachEvent("onContentLoaded", function(id){*/
/*                id.progressOff();        */
/*               */
/*             });     */
/* */
/*         }*/
/*         */
/*         function frmBorrar() {            */
/*             var aprendizajeId= $("#aprendizajeId").val();*/
/*             url = Routing.generate('aprendizajeBorrar', {'aprendizajeId':aprendizajeId});*/
/*             document.thisform.action=url*/
/*             document.thisform.submit();            */
/*         }            */
/*         */
/*         function opciones(value, row, index) {*/
/*             return [*/
/*                 '<div class="btn-group" role="group"><button type="button" class="modificar btn btn-xs btn-default" ><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>',*/
/*                 '<button type="button" class="borrar btn btn-xs btn-default" ><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>',*/
/*                 '</div>'*/
/*             ].join('');*/
/*         }*/
/* */
/* */
/*         window.operateEvents = {*/
/*             'click .modificar': function (e, value, row, index) {                                                                    */
/*                 registrar(row.id);*/
/*             },*/
/*             'click .borrar': function (e, value, row, index) {*/
/*                 $('#winBorrar').modal('show');*/
/*                 $("#maeRegistroId").val(row.id);*/
/*             },*/
/*            */
/*         };*/
/*     */
/*         $(document).ready(function() {*/
/* */
/*         });*/
/* */
/*                 */
/*         function cerrar() {*/
/*             winId="winAprendizajeRegistrar";*/
/*             wins.window(winId).close();*/
/*         }*/
/*         */
/*         function progress() {*/
/*             winId="winAprendizajeRegistrar";*/
/*             wins.window(winId).progressOn();*/
/*         }*/
/*         */
/*         function refreshTabla() {*/
/*             //alert("aca");*/
/*             var $table = $('#tblAprendizaje');*/
/*             $table.bootstrapTable('refresh');*/
/*         }*/
/*         */
/*     </script>    */
/*     */
/*     */
/*     <script src="{{ asset('js/comFunciones.js') }}" type="text/javascript"></script>*/
/* {% endblock %}*/
/* */
/* */
