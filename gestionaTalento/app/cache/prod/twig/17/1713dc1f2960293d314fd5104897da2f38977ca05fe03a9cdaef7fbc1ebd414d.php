<?php

/* GtSistemaBundle:Registrar:actividadClave.html.twig */
class __TwigTemplate_406122292eba2bd8e33cbb3a2f5f08b05c246338c2776155f1a76d9e30ec0662 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GtSistemaBundle::basePop.html.twig", "GtSistemaBundle:Registrar:actividadClave.html.twig", 1);
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
        



      ";
        // line 24
        echo "                
               ";
        // line 37
        echo "                                           
                ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 39
            echo "        <div class=\"flash-notice\">                              
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
            echo "            </div>                               
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "        
                <div id=\"custom-toolbar\">
";
        // line 52
        echo "
                    <button id='btnCuentaBancoNuevo' type=\"button\" class=\"btn btn-sm btn-warning\" onclick=\"registrar(0)\">
                        Nueva Actividad Clave
                    </button>


                </div>
                
                <table id='tblActividadClave' data-classes=\"table table-condensed\" 
                       data-toggle=\"table\" 
                       data-cache=\"false\" 
                       data-height=\"370\" 
                       data-striped=\"true\"  
                       data-pagination=\"true\"
                       data-search=\"true\" 
                       data-show-refresh=\"true\"
                       data-toolbar=\"#custom-toolbar\"
                       data-show-export=\"true\" exportTypes=\"['excel', 'txt', 'csv']\"
                       data-url=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("actividadClaveTabla", array("competenciaId" => (isset($context["competenciaId"]) ? $context["competenciaId"] : null))), "html", null, true);
        echo "\">
                    <thead>
                    <tr>
                        <th data-field=\"id\" data-sortable=\"true\" data-visible=\"false\">#</th>                        
                        <th data-formatter=\"opciones\" data-events=\"operateEvents\">Opciones</th>
                        <th data-field=\"actividadClaveNombre\" data-sortable=\"true\" data-width=\"600\">Actividad Clave</th>
                        <th data-formatter=\"opcionesCriterios\" data-events=\"operateEvents\" data-align=\"center\">Criterios</th>
                    </tr>
                    </thead>                    
                </table>                
           ";
        // line 82
        echo "    ";
        // line 83
        echo "   

   
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
        // line 98
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


<form id=\"thisform\" name=\"thisform\" method=\"post\">
    <input type=\"hidden\" name=\"maeRegistroId\" id=\"maeRegistroId\">
</form>

";
    }

    // line 121
    public function block_javascript($context, array $blocks = array())
    {
        echo "   

    <script type=\"text/javascript\">
        
        function frmBorrar() {            
            //var objPanelFiltroAno = document.querySelector(\"#panelFiltroAno\");            
            var idActividadClave= document.getElementById(\"tbxIdActividadClave\").value ;                        
            url = Routing.generate('actividadClaveRegistrar');
            document.thisform.action=url
            document.thisform.submit();            
        }
                    
        function operateFormatter(value, row, index) {
            return [
                '<button id=\"btnModificar\" name=\"btnModificar\" type=\"button\" class=\"modificar btn btn-primary btn-xs\">Modificar</button>',
                '<button id=\"btnBorrar\" name=\"btnBorrar\" type=\"button\" class=\"borrar btn btn-primary btn-xs\">Borrar</button>',
            ].join('');
        }
        
        function opcionesCriterios(value, row, index) {
            return [
                '<button id=\"btnActividadClave\" name=\"btnActividadClave\" type=\"button\" class=\"criterios btn btn-success btn-xs\" style=\"margin-top:3px;margin-bottom:3px;\">Ver Criterios</button>',
            ].join('');
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
            'click .criterios': function (e, value, row, index) {
                criterios(row.id);
            }
        };
    

        \$(document).ready(function() {

        });                                            
            
    </script>
    
    
    <script type=\"text/javascript\">
        var wins;
        
        function registrar(actividadClaveId) {
            
            var competenciaId=\"";
        // line 182
        echo twig_escape_filter($this->env, (isset($context["competenciaId"]) ? $context["competenciaId"] : null), "html", null, true);
        echo "\";
            wins = new dhtmlXWindows();
            skin=\"dhx_terrace\";
            wins.setSkin(skin);

            winId=\"winActividadClaveRegistrar\";

            wins.createWindow(winId, 1, 1, 650, 400);
            wins.window(winId).setText(\"Registrar - Actividad Clave\");

            wins.window(winId).setModal(true);
            wins.window(winId).button(\"minmax\").disable();                   
            wins.window(winId).centerOnScreen();                   
            wins.window(winId).progressOn();

            wins.window(winId).setIconCss(\"without_icon\");

            var url=Routing.generate('actividadClaveRegistrar', {'competenciaId':competenciaId,'actividadClaveId':actividadClaveId});
            wins.window(winId).attachURL(url);

            wins.window(winId).attachEvent(\"onContentLoaded\", function(id){
               id.progressOff();        
              
            });     

        }
        
        
        function criterios(actividadClaveId) {           
            
            var url=Routing.generate('criterio',{'actividadClaveId':actividadClaveId});
            
            wins = new dhtmlXWindows();
            skin=\"dhx_terrace\";
            wins.setSkin(skin);

            winId=\"winActividadClaveCriterio\";

            wins.createWindow(winId, 1, 1, 650, 450);
            wins.window(winId).setText(\"<h5>Criterio - Actividad Clave</h5>\");

            wins.window(winId).setModal(true);
            wins.window(winId).button(\"minmax\").disable();                   
            wins.window(winId).centerOnScreen();                   
            wins.window(winId).progressOn();

            wins.window(winId).setIconCss(\"without_icon\");

            wins.window(winId).attachURL(url);

            wins.window(winId).attachEvent(\"onContentLoaded\", function(id){
               id.progressOff();        
           });  
                   
        }
        
        function cerrar() {
            winId=\"winActividadClaveRegistrar\";
            wins.window(winId).close();
        }
        
        function progress() {
            winId=\"winActividadClaveRegistrar\";
            wins.window(winId).progressOn();
        }
        
        function refreshTabla() {
            //alert(\"aca\");
            var \$table = \$('#tblActividadClave');
            \$table.bootstrapTable('refresh');
        }
        
    </script>    
    
    
    <script src=\"";
        // line 257
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/comFunciones.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
    }

    public function getTemplateName()
    {
        return "GtSistemaBundle:Registrar:actividadClave.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  304 => 257,  226 => 182,  161 => 121,  138 => 98,  122 => 83,  120 => 82,  107 => 70,  87 => 52,  83 => 47,  75 => 44,  73 => 43,  69 => 42,  64 => 39,  60 => 38,  57 => 37,  54 => 24,  39 => 6,  36 => 5,  30 => 2,  11 => 1,);
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
/* */
/*       {#  <div class="panel panel-primary" >*/
/*             <div class="panel-heading">*/
/*                 <h3 class="panel-title">ActividadClaves</h3>*/
/*             </div>*/
/*             <div class="panel-body" >#}*/
/*                 */
/*                {#                                                */
/*                     <table class="table table-fixed" data-toggle="table" data-url="{{path('actividadClaveTabla')}}" data-cache="false" data-height="250">*/
/*                         <thead>*/
/*                             <tr>*/
/*                                 <th data-field="id">Item ID</th>*/
/*                                 <th data-field="name">Item Name</th>*/
/*                                 <th data-field="price">Item Price</th>*/
/*                             </tr>*/
/*                         </thead>*/
/*                         <tbody>*/
/*                         </tbody>*/
/*                     </table>#}*/
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
/* {#                    <button id='btnActividadClave' type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">*/
/*                         Nueva Actividad Clave*/
/*                     </button>#}*/
/* */
/*                     <button id='btnCuentaBancoNuevo' type="button" class="btn btn-sm btn-warning" onclick="registrar(0)">*/
/*                         Nueva Actividad Clave*/
/*                     </button>*/
/* */
/* */
/*                 </div>*/
/*                 */
/*                 <table id='tblActividadClave' data-classes="table table-condensed" */
/*                        data-toggle="table" */
/*                        data-cache="false" */
/*                        data-height="370" */
/*                        data-striped="true"  */
/*                        data-pagination="true"*/
/*                        data-search="true" */
/*                        data-show-refresh="true"*/
/*                        data-toolbar="#custom-toolbar"*/
/*                        data-show-export="true" exportTypes="['excel', 'txt', 'csv']"*/
/*                        data-url="{{path('actividadClaveTabla', {'competenciaId':competenciaId})}}">*/
/*                     <thead>*/
/*                     <tr>*/
/*                         <th data-field="id" data-sortable="true" data-visible="false">#</th>                        */
/*                         <th data-formatter="opciones" data-events="operateEvents">Opciones</th>*/
/*                         <th data-field="actividadClaveNombre" data-sortable="true" data-width="600">Actividad Clave</th>*/
/*                         <th data-formatter="opcionesCriterios" data-events="operateEvents" data-align="center">Criterios</th>*/
/*                     </tr>*/
/*                     </thead>                    */
/*                 </table>                */
/*            {# </div>    */
/*         </div>#}*/
/*     {#</div>#}*/
/*    */
/* */
/*    */
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
/*                      {#<input type="hidden" name="tbxIdActividadClave" id="tbxIdActividadClave">#}*/
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
/* */
/* */
/* <form id="thisform" name="thisform" method="post">*/
/*     <input type="hidden" name="maeRegistroId" id="maeRegistroId">*/
/* </form>*/
/* */
/* {% endblock %}*/
/* */
/* */
/* */
/* {% block javascript %}   */
/* */
/*     <script type="text/javascript">*/
/*         */
/*         function frmBorrar() {            */
/*             //var objPanelFiltroAno = document.querySelector("#panelFiltroAno");            */
/*             var idActividadClave= document.getElementById("tbxIdActividadClave").value ;                        */
/*             url = Routing.generate('actividadClaveRegistrar');*/
/*             document.thisform.action=url*/
/*             document.thisform.submit();            */
/*         }*/
/*                     */
/*         function operateFormatter(value, row, index) {*/
/*             return [*/
/*                 '<button id="btnModificar" name="btnModificar" type="button" class="modificar btn btn-primary btn-xs">Modificar</button>',*/
/*                 '<button id="btnBorrar" name="btnBorrar" type="button" class="borrar btn btn-primary btn-xs">Borrar</button>',*/
/*             ].join('');*/
/*         }*/
/*         */
/*         function opcionesCriterios(value, row, index) {*/
/*             return [*/
/*                 '<button id="btnActividadClave" name="btnActividadClave" type="button" class="criterios btn btn-success btn-xs" style="margin-top:3px;margin-bottom:3px;">Ver Criterios</button>',*/
/*             ].join('');*/
/*         }*/
/*         */
/*         function opciones(value, row, index) {*/
/*             return [*/
/*                 '<div class="btn-group" role="group"><button type="button" class="modificar btn btn-xs btn-default" ><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>',*/
/*                 '<button type="button" class="borrar btn btn-xs btn-default" ><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>',*/
/*                 '</div>'*/
/*             ].join('');*/
/*         }*/
/*         */
/* */
/*         window.operateEvents = {*/
/*             'click .modificar': function (e, value, row, index) {*/
/*                 registrar(row.id);*/
/*             },*/
/*             'click .borrar': function (e, value, row, index) {*/
/*                 $('#winBorrar').modal('show');*/
/*                 $("#maeRegistroId").val(row.id);*/
/* */
/*             },*/
/*             'click .criterios': function (e, value, row, index) {*/
/*                 criterios(row.id);*/
/*             }*/
/*         };*/
/*     */
/* */
/*         $(document).ready(function() {*/
/* */
/*         });                                            */
/*             */
/*     </script>*/
/*     */
/*     */
/*     <script type="text/javascript">*/
/*         var wins;*/
/*         */
/*         function registrar(actividadClaveId) {*/
/*             */
/*             var competenciaId="{{competenciaId}}";*/
/*             wins = new dhtmlXWindows();*/
/*             skin="dhx_terrace";*/
/*             wins.setSkin(skin);*/
/* */
/*             winId="winActividadClaveRegistrar";*/
/* */
/*             wins.createWindow(winId, 1, 1, 650, 400);*/
/*             wins.window(winId).setText("Registrar - Actividad Clave");*/
/* */
/*             wins.window(winId).setModal(true);*/
/*             wins.window(winId).button("minmax").disable();                   */
/*             wins.window(winId).centerOnScreen();                   */
/*             wins.window(winId).progressOn();*/
/* */
/*             wins.window(winId).setIconCss("without_icon");*/
/* */
/*             var url=Routing.generate('actividadClaveRegistrar', {'competenciaId':competenciaId,'actividadClaveId':actividadClaveId});*/
/*             wins.window(winId).attachURL(url);*/
/* */
/*             wins.window(winId).attachEvent("onContentLoaded", function(id){*/
/*                id.progressOff();        */
/*               */
/*             });     */
/* */
/*         }*/
/*         */
/*         */
/*         function criterios(actividadClaveId) {           */
/*             */
/*             var url=Routing.generate('criterio',{'actividadClaveId':actividadClaveId});*/
/*             */
/*             wins = new dhtmlXWindows();*/
/*             skin="dhx_terrace";*/
/*             wins.setSkin(skin);*/
/* */
/*             winId="winActividadClaveCriterio";*/
/* */
/*             wins.createWindow(winId, 1, 1, 650, 450);*/
/*             wins.window(winId).setText("<h5>Criterio - Actividad Clave</h5>");*/
/* */
/*             wins.window(winId).setModal(true);*/
/*             wins.window(winId).button("minmax").disable();                   */
/*             wins.window(winId).centerOnScreen();                   */
/*             wins.window(winId).progressOn();*/
/* */
/*             wins.window(winId).setIconCss("without_icon");*/
/* */
/*             wins.window(winId).attachURL(url);*/
/* */
/*             wins.window(winId).attachEvent("onContentLoaded", function(id){*/
/*                id.progressOff();        */
/*            });  */
/*                    */
/*         }*/
/*         */
/*         function cerrar() {*/
/*             winId="winActividadClaveRegistrar";*/
/*             wins.window(winId).close();*/
/*         }*/
/*         */
/*         function progress() {*/
/*             winId="winActividadClaveRegistrar";*/
/*             wins.window(winId).progressOn();*/
/*         }*/
/*         */
/*         function refreshTabla() {*/
/*             //alert("aca");*/
/*             var $table = $('#tblActividadClave');*/
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
