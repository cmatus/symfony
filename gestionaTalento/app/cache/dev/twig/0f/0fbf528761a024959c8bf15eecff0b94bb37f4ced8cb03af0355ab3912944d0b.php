<?php

/* GtSistemaBundle:Registrar:competencia.html.twig */
class __TwigTemplate_f700fd0a1210ef466a5efc3d984dc2fe83944194a02d3ff9b7a8d2f5550bb969 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GtSistemaBundle::basePop.html.twig", "GtSistemaBundle:Registrar:competencia.html.twig", 1);
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
        $__internal_54e163ebfcf0fc78d3b5d54de7d1cc10a556c4a9db590df85690ad11fe206b4c = $this->env->getExtension("native_profiler");
        $__internal_54e163ebfcf0fc78d3b5d54de7d1cc10a556c4a9db590df85690ad11fe206b4c->enter($__internal_54e163ebfcf0fc78d3b5d54de7d1cc10a556c4a9db590df85690ad11fe206b4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GtSistemaBundle:Registrar:competencia.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_54e163ebfcf0fc78d3b5d54de7d1cc10a556c4a9db590df85690ad11fe206b4c->leave($__internal_54e163ebfcf0fc78d3b5d54de7d1cc10a556c4a9db590df85690ad11fe206b4c_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_3e11791c2a6b8d20d52ee7e7eddf1e701d34eeba6a4a945838a367f0625e38e6 = $this->env->getExtension("native_profiler");
        $__internal_3e11791c2a6b8d20d52ee7e7eddf1e701d34eeba6a4a945838a367f0625e38e6->enter($__internal_3e11791c2a6b8d20d52ee7e7eddf1e701d34eeba6a4a945838a367f0625e38e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Gestionatalento ";
        
        $__internal_3e11791c2a6b8d20d52ee7e7eddf1e701d34eeba6a4a945838a367f0625e38e6->leave($__internal_3e11791c2a6b8d20d52ee7e7eddf1e701d34eeba6a4a945838a367f0625e38e6_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_3223d8096dd8b835df5db9d07a34ab3fb7bade0c57df25eed5776f746ca5075b = $this->env->getExtension("native_profiler");
        $__internal_3223d8096dd8b835df5db9d07a34ab3fb7bade0c57df25eed5776f746ca5075b->enter($__internal_3223d8096dd8b835df5db9d07a34ab3fb7bade0c57df25eed5776f746ca5075b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
    <style>
        .popover-footer{
            padding: 6px 14px;
            background-color: #f7f7f7;
            border-top: 1px solid #ebebeb;
            text-align: right;
        }
    </style>
        

   
<div class=\"container-fluid\">
    
    ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 20
            echo "        <div class=\"flash-notice\">                              
            <div class=\"alert alert-success alert-dismissible\" role=\"alert\" style=\"padding-bottom:0px; padding-top: 0px; margin-bottom: 3px\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\" ><span aria-hidden=\"true\">&times;</span></button>
                ";
            // line 23
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                ";
            // line 24
            $context["guardado"] = true;
            // line 25
            echo "            </div>                               
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "        
        
            <div id=\"custom-toolbar\">
                <button id='btnCompetencia' type=\"button\" class=\"btn btn-sm btn-warning\" onclick=\"registrar(0)\">
                    Nueva Competencia
                </button>
            </div>
                                
                <table id='tblCompetencia' data-classes=\"table table-condensed\" 
                       data-toggle=\"table\" 
                       data-cache=\"false\" 
                       data-height=\"450\" 
                       data-striped=\"true\"  
                       data-pagination=\"true\"
                       data-search=\"true\" 
                       data-show-refresh=\"true\"
                       data-toolbar=\"#custom-toolbar\"
                       data-show-export=\"true\" exportTypes=\"['excel', 'txt', 'csv']\"
                       data-url=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("competenciaTabla");
        echo "\">
                    
                    <thead>
                    <tr>
                        <th data-field=\"id\" data-sortable=\"true\" data-visible=\"false\">#</th>                        
                        <th data-formatter=\"opciones\" data-events=\"operateEvents\">Opciones</th>
                        ";
        // line 53
        echo "                        <th data-field=\"competenciaNombre\" data-sortable=\"true\">Nombre Competencia</th>
                        <th data-formatter=\"opcionesInfo\" data-events=\"operateEvents\" data-align=\"center\">Definicion</th>
                        ";
        // line 56
        echo "                        <th data-formatter=\"opcionesActividadClave\" data-events=\"operateEvents\" data-align=\"center\">Actividades Claves</th>
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
        // line 74
        echo "                </div>
                <!--/modal-body-collapse -->
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-danger\" id=\"btnConfirmaBorrar\" onclick=\"borrar()\">Si</button>
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
        <input type=\"hidden\" name=\"competenciaId\" id=\"competenciaId\">
    </form>
         
    </div>
";
        
        $__internal_3223d8096dd8b835df5db9d07a34ab3fb7bade0c57df25eed5776f746ca5075b->leave($__internal_3223d8096dd8b835df5db9d07a34ab3fb7bade0c57df25eed5776f746ca5075b_prof);

    }

    // line 95
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_c09b05dfb9219fe0877373a6902015454a0452863330581560ff4862c6ee9ce4 = $this->env->getExtension("native_profiler");
        $__internal_c09b05dfb9219fe0877373a6902015454a0452863330581560ff4862c6ee9ce4->enter($__internal_c09b05dfb9219fe0877373a6902015454a0452863330581560ff4862c6ee9ce4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        echo "   

    <script type=\"text/javascript\">
        
        var wins;
        
        function borrar() {            
            //var objPanelFiltroAno = document.querySelector(\"#panelFiltroAno\");            
            var competenciaId= document.getElementById(\"competenciaId\").value ;                        
            url = Routing.generate('competenciaBorrar', {'competenciaId':competenciaId});
            document.thisform.action=url
            document.thisform.submit();            
        }
            
        function opcionesInfo(value, row, index) {
            return ['<button id=\"btnInfo',index,'\" name=\"btnInfo',index,'\" type=\"button\" class=\"info btn btn-success btn-xs\" style=\"margin-top:3px;margin-bottom:3px;\" data-toggle=\"popover\"><span class=\"glyphicon glyphicon-info-sign\" aria-hidden=\"true\"></span></button>'].join('');
        }
        
        function opciones(value, row, index) {
            return [
                '<div class=\"btn-group\" role=\"group\"><button type=\"button\" class=\"modificar btn btn-xs btn-default\" ><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span></button>',
                '<button type=\"button\" class=\"borrar btn btn-xs btn-default\" ><span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span></button>',
                '</div>'
            ].join('');
        }        
        
        function opcionesActividadClave(value, row, index) {
            return [
                '<button id=\"btnActividadClave\" name=\"btnActividadClave\" type=\"button\" class=\"actividad btn btn-success btn-xs\" style=\"margin-top:3px;margin-bottom:3px;\">Ver Actvidades Claves</button>',
            ].join('');
        }

        window.operateEvents = {
        
            'click .info': function (e, value, row, index) {                
                    info(row, index);
                },


            'click .modificar': function (e, value, row, index) {
                registrar(row.id);

            },
            'click .borrar': function (e, value, row, index) {
                \$('#winBorrar').modal('show');
                \$(\"#competenciaId\").val(row.id);
            },


            'click .actividad': function (e, value, row, index) {
                actividadClave(row.id);
            }                                
        };
                
        
    
        \$(document).ready(function() {
      
        })

        function registrar(competenciaId) {
                                            
            wins = new dhtmlXWindows();
            skin=\"dhx_terrace\";
            wins.setSkin(skin);

            winId=\"winCompetenciaRegistrar\";

            wins.createWindow(winId, 1, 1, 780, 530);
            wins.window(winId).setText(\"Competencia\");

            wins.window(winId).setModal(true);
            wins.window(winId).button(\"minmax\").disable();                   
            wins.window(winId).centerOnScreen();                   
            wins.window(winId).progressOn();

            wins.window(winId).setIconCss(\"without_icon\");

            var url=Routing.generate('competenciaRegistrar', {'competenciaId':competenciaId});
            wins.window(winId).attachURL(url);

            wins.window(winId).attachEvent(\"onContentLoaded\", function(id){
               id.progressOff();        
              
            });     

        }
        
        function actividadClave(competenciaId) {
            wins = new dhtmlXWindows();
            skin=\"dhx_terrace\";
            wins.setSkin(skin);

            winId=\"winActividadClave\";

            wins.createWindow(winId, 1, 1, 780, 530);
            wins.window(winId).setText(\"Actividad Clave\");

            wins.window(winId).setModal(true);
            wins.window(winId).button(\"minmax\").disable();                   
            wins.window(winId).centerOnScreen();                   
            wins.window(winId).progressOn();

            wins.window(winId).setIconCss(\"without_icon\");
            
            var url = Routing.generate('actividadClave', {'competenciaId':competenciaId});
            wins.window(winId).attachURL(url);

            wins.window(winId).attachEvent(\"onContentLoaded\", function(id){
               id.progressOff();        
       
            });        
        }
                
        function cerrar() {
            winId=\"winCompetenciaRegistrar\";
            wins.window(winId).close();
        }
        
        function progress() {
            winId=\"winCompetenciaRegistrar\";
            wins.window(winId).progressOn();
        }
        
        function refreshTabla() {
            //alert(\"aca\");
            var \$table = \$('#tblCompetencia');
            \$table.bootstrapTable('refresh');
        }
        
        
        function info(row, index) {
                                    
            var objBtnInfo='#btnInfo'+index;
            //alert(\$(objBtnInfo).attr('id'));
            var competenciaNombre=row.competenciaNombre;
            var competenciaDefinicion=row.competenciaDefinicion;
                     
            \$(objBtnInfo).popover({
            //\$('#btnEntidadCont=actoHabilitadoInfo').popover({                
                title: competenciaNombre,
                content: [  \"<table>\",
                                \"<tr><td><b>Definición:<b></td></tr><tr><td>\" +  competenciaDefinicion + \"</td></tr>\",
                            \"</table>\"
                            ].join(''),
                html: true,
                template: '<div class=\"popover\"><div class=\"arrow\"></div><h3 class=\"popover-title\"></h3><div class=\"popover-content\"></div><div class=\"popover-footer\"><a href=\"#\" class=\"btn btn-info btn-sm\">Cerrar</a></div></div>',
                placement: 'left',
                container: 'body',
                trigger: 'focus'
            });

            //\$(\"#btnEntidadContactoHabilitadoInfo\").popover('toggle');
            \$(objBtnInfo).popover('toggle');

        }
                
    </script>
                        
    <script src=\"";
        // line 254
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/mae/maeFunciones.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 255
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/comFunciones.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    
";
        
        $__internal_c09b05dfb9219fe0877373a6902015454a0452863330581560ff4862c6ee9ce4->leave($__internal_c09b05dfb9219fe0877373a6902015454a0452863330581560ff4862c6ee9ce4_prof);

    }

    public function getTemplateName()
    {
        return "GtSistemaBundle:Registrar:competencia.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  341 => 255,  337 => 254,  171 => 95,  145 => 74,  126 => 56,  122 => 53,  113 => 46,  93 => 28,  85 => 25,  83 => 24,  79 => 23,  74 => 20,  70 => 19,  54 => 5,  48 => 4,  36 => 2,  11 => 1,);
    }
}
/* {% extends 'GtSistemaBundle::basePop.html.twig' %}*/
/* {% block title %} Gestionatalento {% endblock %}*/
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
/*    */
/* <div class="container-fluid">*/
/*     */
/*     {% for flashMessage in app.session.flashbag.get('notice') %}*/
/*         <div class="flash-notice">                              */
/*             <div class="alert alert-success alert-dismissible" role="alert" style="padding-bottom:0px; padding-top: 0px; margin-bottom: 3px">*/
/*                 <button type="button" class="close" data-dismiss="alert" aria-label="Close" ><span aria-hidden="true">&times;</span></button>*/
/*                 {{ flashMessage }}*/
/*                 {% set guardado=true %}*/
/*             </div>                               */
/*         </div>*/
/*     {% endfor %}*/
/*         */
/*         */
/*             <div id="custom-toolbar">*/
/*                 <button id='btnCompetencia' type="button" class="btn btn-sm btn-warning" onclick="registrar(0)">*/
/*                     Nueva Competencia*/
/*                 </button>*/
/*             </div>*/
/*                                 */
/*                 <table id='tblCompetencia' data-classes="table table-condensed" */
/*                        data-toggle="table" */
/*                        data-cache="false" */
/*                        data-height="450" */
/*                        data-striped="true"  */
/*                        data-pagination="true"*/
/*                        data-search="true" */
/*                        data-show-refresh="true"*/
/*                        data-toolbar="#custom-toolbar"*/
/*                        data-show-export="true" exportTypes="['excel', 'txt', 'csv']"*/
/*                        data-url="{{path('competenciaTabla')}}">*/
/*                     */
/*                     <thead>*/
/*                     <tr>*/
/*                         <th data-field="id" data-sortable="true" data-visible="false">#</th>                        */
/*                         <th data-formatter="opciones" data-events="operateEvents">Opciones</th>*/
/*                         {#<th data-field="competenciaCodigo" data-sortable="true">Codigo</th>#}*/
/*                         <th data-field="competenciaNombre" data-sortable="true">Nombre Competencia</th>*/
/*                         <th data-formatter="opcionesInfo" data-events="operateEvents" data-align="center">Definicion</th>*/
/*                         {#<th data-field="competenciaDefinicion" data-width="600">Definicion</th>#}*/
/*                         <th data-formatter="opcionesActividadClave" data-events="operateEvents" data-align="center">Actividades Claves</th>*/
/*                     </tr>*/
/*                     </thead>                    */
/*                 </table>               */
/* */
/*     */
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
/*                      {#<input type="hidden" name="tbxIdCompetencia" id="tbxIdCompetencia">#}*/
/*                 </div>*/
/*                 <!--/modal-body-collapse -->*/
/*                 <div class="modal-footer">*/
/*                     <button type="button" class="btn btn-danger" id="btnConfirmaBorrar" onclick="borrar()">Si</button>*/
/*                     <button type="button" class="btn btn-default" data-dismiss="modal">No</button>*/
/*                 </div>*/
/*                 <!--/modal-footer-collapse -->*/
/*             </div>*/
/*             <!-- /.modal-content -->*/
/*         </div>*/
/*         <!-- /.modal-dialog -->*/
/*     </div>*/
/*     <!-- /.modal -->*/
/*  */
/*     <form id="thisform" name="thisform" method="post">*/
/*         <input type="hidden" name="competenciaId" id="competenciaId">*/
/*     </form>*/
/*          */
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block javascript %}   */
/* */
/*     <script type="text/javascript">*/
/*         */
/*         var wins;*/
/*         */
/*         function borrar() {            */
/*             //var objPanelFiltroAno = document.querySelector("#panelFiltroAno");            */
/*             var competenciaId= document.getElementById("competenciaId").value ;                        */
/*             url = Routing.generate('competenciaBorrar', {'competenciaId':competenciaId});*/
/*             document.thisform.action=url*/
/*             document.thisform.submit();            */
/*         }*/
/*             */
/*         function opcionesInfo(value, row, index) {*/
/*             return ['<button id="btnInfo',index,'" name="btnInfo',index,'" type="button" class="info btn btn-success btn-xs" style="margin-top:3px;margin-bottom:3px;" data-toggle="popover"><span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span></button>'].join('');*/
/*         }*/
/*         */
/*         function opciones(value, row, index) {*/
/*             return [*/
/*                 '<div class="btn-group" role="group"><button type="button" class="modificar btn btn-xs btn-default" ><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>',*/
/*                 '<button type="button" class="borrar btn btn-xs btn-default" ><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>',*/
/*                 '</div>'*/
/*             ].join('');*/
/*         }        */
/*         */
/*         function opcionesActividadClave(value, row, index) {*/
/*             return [*/
/*                 '<button id="btnActividadClave" name="btnActividadClave" type="button" class="actividad btn btn-success btn-xs" style="margin-top:3px;margin-bottom:3px;">Ver Actvidades Claves</button>',*/
/*             ].join('');*/
/*         }*/
/* */
/*         window.operateEvents = {*/
/*         */
/*             'click .info': function (e, value, row, index) {                */
/*                     info(row, index);*/
/*                 },*/
/* */
/* */
/*             'click .modificar': function (e, value, row, index) {*/
/*                 registrar(row.id);*/
/* */
/*             },*/
/*             'click .borrar': function (e, value, row, index) {*/
/*                 $('#winBorrar').modal('show');*/
/*                 $("#competenciaId").val(row.id);*/
/*             },*/
/* */
/* */
/*             'click .actividad': function (e, value, row, index) {*/
/*                 actividadClave(row.id);*/
/*             }                                */
/*         };*/
/*                 */
/*         */
/*     */
/*         $(document).ready(function() {*/
/*       */
/*         })*/
/* */
/*         function registrar(competenciaId) {*/
/*                                             */
/*             wins = new dhtmlXWindows();*/
/*             skin="dhx_terrace";*/
/*             wins.setSkin(skin);*/
/* */
/*             winId="winCompetenciaRegistrar";*/
/* */
/*             wins.createWindow(winId, 1, 1, 780, 530);*/
/*             wins.window(winId).setText("Competencia");*/
/* */
/*             wins.window(winId).setModal(true);*/
/*             wins.window(winId).button("minmax").disable();                   */
/*             wins.window(winId).centerOnScreen();                   */
/*             wins.window(winId).progressOn();*/
/* */
/*             wins.window(winId).setIconCss("without_icon");*/
/* */
/*             var url=Routing.generate('competenciaRegistrar', {'competenciaId':competenciaId});*/
/*             wins.window(winId).attachURL(url);*/
/* */
/*             wins.window(winId).attachEvent("onContentLoaded", function(id){*/
/*                id.progressOff();        */
/*               */
/*             });     */
/* */
/*         }*/
/*         */
/*         function actividadClave(competenciaId) {*/
/*             wins = new dhtmlXWindows();*/
/*             skin="dhx_terrace";*/
/*             wins.setSkin(skin);*/
/* */
/*             winId="winActividadClave";*/
/* */
/*             wins.createWindow(winId, 1, 1, 780, 530);*/
/*             wins.window(winId).setText("Actividad Clave");*/
/* */
/*             wins.window(winId).setModal(true);*/
/*             wins.window(winId).button("minmax").disable();                   */
/*             wins.window(winId).centerOnScreen();                   */
/*             wins.window(winId).progressOn();*/
/* */
/*             wins.window(winId).setIconCss("without_icon");*/
/*             */
/*             var url = Routing.generate('actividadClave', {'competenciaId':competenciaId});*/
/*             wins.window(winId).attachURL(url);*/
/* */
/*             wins.window(winId).attachEvent("onContentLoaded", function(id){*/
/*                id.progressOff();        */
/*        */
/*             });        */
/*         }*/
/*                 */
/*         function cerrar() {*/
/*             winId="winCompetenciaRegistrar";*/
/*             wins.window(winId).close();*/
/*         }*/
/*         */
/*         function progress() {*/
/*             winId="winCompetenciaRegistrar";*/
/*             wins.window(winId).progressOn();*/
/*         }*/
/*         */
/*         function refreshTabla() {*/
/*             //alert("aca");*/
/*             var $table = $('#tblCompetencia');*/
/*             $table.bootstrapTable('refresh');*/
/*         }*/
/*         */
/*         */
/*         function info(row, index) {*/
/*                                     */
/*             var objBtnInfo='#btnInfo'+index;*/
/*             //alert($(objBtnInfo).attr('id'));*/
/*             var competenciaNombre=row.competenciaNombre;*/
/*             var competenciaDefinicion=row.competenciaDefinicion;*/
/*                      */
/*             $(objBtnInfo).popover({*/
/*             //$('#btnEntidadCont=actoHabilitadoInfo').popover({                */
/*                 title: competenciaNombre,*/
/*                 content: [  "<table>",*/
/*                                 "<tr><td><b>Definición:<b></td></tr><tr><td>" +  competenciaDefinicion + "</td></tr>",*/
/*                             "</table>"*/
/*                             ].join(''),*/
/*                 html: true,*/
/*                 template: '<div class="popover"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content"></div><div class="popover-footer"><a href="#" class="btn btn-info btn-sm">Cerrar</a></div></div>',*/
/*                 placement: 'left',*/
/*                 container: 'body',*/
/*                 trigger: 'focus'*/
/*             });*/
/* */
/*             //$("#btnEntidadContactoHabilitadoInfo").popover('toggle');*/
/*             $(objBtnInfo).popover('toggle');*/
/* */
/*         }*/
/*                 */
/*     </script>*/
/*                         */
/*     <script src="{{ asset('js/mae/maeFunciones.js') }}" type="text/javascript"></script>*/
/*     <script src="{{ asset('js/comFunciones.js') }}" type="text/javascript"></script>*/
/*     */
/* {% endblock %}*/
/* */
/* */
