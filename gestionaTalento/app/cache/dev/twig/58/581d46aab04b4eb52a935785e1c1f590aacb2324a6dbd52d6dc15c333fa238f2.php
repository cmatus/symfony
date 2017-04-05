<?php

/* GtSistemaBundle:Registrar:conocimiento.html.twig */
class __TwigTemplate_bc737470e74e77e727453f812a5d8cc6f9ae65d79e7af6bda2674518000397ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GtSistemaBundle::basePop.html.twig", "GtSistemaBundle:Registrar:conocimiento.html.twig", 1);
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
        $__internal_8e8e64a6676c6a220b911e1beda2c2bf921feebad80fb89982a77f19c10b2df8 = $this->env->getExtension("native_profiler");
        $__internal_8e8e64a6676c6a220b911e1beda2c2bf921feebad80fb89982a77f19c10b2df8->enter($__internal_8e8e64a6676c6a220b911e1beda2c2bf921feebad80fb89982a77f19c10b2df8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GtSistemaBundle:Registrar:conocimiento.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e8e64a6676c6a220b911e1beda2c2bf921feebad80fb89982a77f19c10b2df8->leave($__internal_8e8e64a6676c6a220b911e1beda2c2bf921feebad80fb89982a77f19c10b2df8_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_c422d489775246c0ae72639303d8c2bcb2bc7ea649502bbd8f8355ab9116a5ee = $this->env->getExtension("native_profiler");
        $__internal_c422d489775246c0ae72639303d8c2bcb2bc7ea649502bbd8f8355ab9116a5ee->enter($__internal_c422d489775246c0ae72639303d8c2bcb2bc7ea649502bbd8f8355ab9116a5ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " gestionaTalento ";
        
        $__internal_c422d489775246c0ae72639303d8c2bcb2bc7ea649502bbd8f8355ab9116a5ee->leave($__internal_c422d489775246c0ae72639303d8c2bcb2bc7ea649502bbd8f8355ab9116a5ee_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6c9e1b40512fa2cee2c8ba55f955e49653dc744f2d98bdd9659bd1f3cf002a76 = $this->env->getExtension("native_profiler");
        $__internal_6c9e1b40512fa2cee2c8ba55f955e49653dc744f2d98bdd9659bd1f3cf002a76->enter($__internal_6c9e1b40512fa2cee2c8ba55f955e49653dc744f2d98bdd9659bd1f3cf002a76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        // line 22
        echo "<div class=\"container-fluid\">
       ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 24
            echo "        <div class=\"flash-notice\">                              
            <div class=\"alert alert-success alert-dismissible\" role=\"alert\" style=\"padding-bottom:0px; padding-top: 0px; margin-bottom: 3px\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\" ><span aria-hidden=\"true\">&times;</span></button>
                ";
            // line 27
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                ";
            // line 28
            $context["guardado"] = true;
            // line 29
            echo "            </div>                               
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "        
                <div id=\"custom-toolbar\">
                
                  
                    <button id='btnConocimiento' type=\"button\" class=\"btn btn-sm btn-warning \" onclick=\"registrar(0)\">
                        Nueva Competencia Conductual
                    </button>                  
                  
                </div>
                
                
                <table id='tblConocimiento' data-classes=\"table table-condensed\" 
                       data-toggle=\"table\" 
                       data-cache=\"false\" 
                       data-height=\"550\" 
                       data-striped=\"true\"  
                       data-pagination=\"true\"
                       data-search=\"true\" 
                       data-show-refresh=\"true\"
                       data-toolbar=\"#custom-toolbar\"
                       data-show-export=\"true\" exportTypes=\"['excel', 'txt', 'csv']\"
                       data-url=\"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("conocimientoTabla");
        echo "\">
                    <thead>
                    <tr>
                        <th data-field=\"id\" data-sortable=\"true\" data-visible=\"true\">#</th>                        
                        <th data-formatter=\"opciones\" data-events=\"operateEvents\">Opciones</th>
                        ";
        // line 59
        echo "                        <th data-field=\"conocimientoNombre\" data-sortable=\"true\" data-width=\"600\">Competencia Conductual</th>
                        <th data-field=\"conocimientoDefinicion\" data-width=\"600\" data-visible=\"false\">Definicion</th>
                        <th data-formatter=\"opcionesInfo\" data-events=\"operateEvents\" data-align=\"center\">Definicion</th>
                        <th data-formatter=\"opcionesAprendizajes\" data-events=\"operateEvents\" data-align=\"center\">Indicadores</th>
                    </tr>
                    </thead>
                    
                </table>
                
           ";
        // line 71
        echo "   

    <!-- Modal -->
    <div class=\"modal fade\" id=\"myModal2\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                    <h4 class=\"modal-title\">Modal title</h4>
                </div>
                <div class=\"modal-body\" id=\"myModal2Body\">                

                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
                    <button type=\"button\" class=\"btn btn-primary\">Save changes</button>
                </div>
            </div> <!-- /.modal-content -->
        </div> <!-- /.modal-dialog -->
    </div> <!-- /.modal -->


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
                    
                </div>
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


";
        // line 144
        echo "
    <form id=\"thisform\" name=\"thisform\" method=\"post\">
        <input type=\"hidden\" name=\"maeRegistroId\" id=\"maeRegistroId\">
    </form>
    </div>
";
        
        $__internal_6c9e1b40512fa2cee2c8ba55f955e49653dc744f2d98bdd9659bd1f3cf002a76->leave($__internal_6c9e1b40512fa2cee2c8ba55f955e49653dc744f2d98bdd9659bd1f3cf002a76_prof);

    }

    // line 153
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_6b64c57e398d8b926fc8c485c34ddd157cbc8eea8f287352f6ab9392ed35ae0a = $this->env->getExtension("native_profiler");
        $__internal_6b64c57e398d8b926fc8c485c34ddd157cbc8eea8f287352f6ab9392ed35ae0a->enter($__internal_6b64c57e398d8b926fc8c485c34ddd157cbc8eea8f287352f6ab9392ed35ae0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        echo "   

    <script type=\"text/javascript\">
       var wins;
        
       function opciones(value, row, index) {
            return [
                '<div class=\"btn-group\" role=\"group\"><button type=\"button\" class=\"modificar btn btn-xs btn-default\" ><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span></button>',
                '<button type=\"button\" class=\"borrar btn btn-xs btn-default\" ><span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span></button>',
                '</div>'
            ].join('');
        }
        
        function opcionesInfo(value, row, index) {
           return ['<button id=\"btnInfo',index,'\" name=\"btnInfo',index,'\" type=\"button\" class=\"info btn btn-info btn-xs\" style=\"margin-top:3px;margin-bottom:3px;\" data-toggle=\"popover\"><span class=\"glyphicon glyphicon-info-sign\" aria-hidden=\"true\"></span></button>'].join('');
        }
        
        function opcionesAprendizajes(value, row, index) {
            return [
                '<button id=\"btnAprendizaje\" name=\"btnActividadClave\" type=\"button\" class=\"aprendizaje btn btn-info btn-xs\" style=\"margin-top:3px;margin-bottom:3px;\">Indicadores</button>',
            ].join('');
        }
        
        
        window.operateEvents = {
        
            'click .info': function (e, value, row, index) {                    
                info(row, index);
            },
            
            'click .modificar': function (e, value, row, index) {
                alert(row.id);
                registrar(row.id);

            },
            'click .borrar': function (e, value, row, index) {

                \$('#winBorrar').modal('show');
                \$(\"#maeRegistroId\").val(row.id);
            },
            
            'click .aprendizaje': function (e, value, row, index) {                
                indicador(row.id)
            }  
        
        };
        function registrar(conocimientoId) {
                                            
            wins = new dhtmlXWindows();
            skin=\"dhx_terrace\";
            wins.setSkin(skin);

            winId=\"winConocimientoRegistrar\";

            wins.createWindow(winId, 1, 1, 780, 530);
            wins.window(winId).setText(\"Conocimiento\");

            wins.window(winId).setModal(true);
            wins.window(winId).button(\"minmax\").disable();                   
            wins.window(winId).centerOnScreen();                   
            wins.window(winId).progressOn();

            wins.window(winId).setIconCss(\"without_icon\");

            var url=Routing.generate('conocimientoRegistrar', {'conocimientoId':conocimientoId});
            wins.window(winId).attachURL(url);

            wins.window(winId).attachEvent(\"onContentLoaded\", function(id){
               id.progressOff();        
              
            });     

        }
        
        function indicador(conocimientoId) {
            wins = new dhtmlXWindows();
            skin=\"dhx_terrace\";
            wins.setSkin(skin);

            winId=\"winActividadClave\";

            wins.createWindow(winId, 1, 1, 780, 530);
            wins.window(winId).setText(\"Indicador\");

            wins.window(winId).setModal(true);
            wins.window(winId).button(\"minmax\").disable();                   
            wins.window(winId).centerOnScreen();                   
            wins.window(winId).progressOn();

            wins.window(winId).setIconCss(\"without_icon\");
            
            var url = Routing.generate('aprendizaje', {'conocimientoId':conocimientoId});           
            wins.window(winId).attachURL(url);

            wins.window(winId).attachEvent(\"onContentLoaded\", function(id){
               id.progressOff();        
       
            });        
        }
        
        function cerrar() {
            winId=\"winConocimientoRegistrar\";
            wins.window(winId).close();
        }
        
        function progress() {
            winId=\"winConocimientoRegistrar\";
            wins.window(winId).progressOn();
        }
        
        function refreshTabla() {
            //alert(\"aca\");
            var \$table = \$('#tblConocimiento');
            \$table.bootstrapTable('refresh');
        }        
        
        function info(row, index) {
            
            var objBtnInfo='#btnInfo'+index;
            //alert(\$(objBtnInfo).attr('id'));
            var conocimientoNombre=row.conocimientoNombre;
            var conocimientoDefinicion=row.conocimientoDefinicion;
         
            
            \$(objBtnInfo).popover({
            //\$('#btnEntidadCont=actoHabilitadoInfo').popover({                
                title: conocimientoNombre,
                content: [  \"<table>\",
                                \"<tr><td><b>Definición:<b></td></tr><tr><td>\" +  conocimientoDefinicion + \"</td></tr>\",
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
        // line 298
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/mae/maeFunciones.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 299
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/comFunciones.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        
";
        
        $__internal_6b64c57e398d8b926fc8c485c34ddd157cbc8eea8f287352f6ab9392ed35ae0a->leave($__internal_6b64c57e398d8b926fc8c485c34ddd157cbc8eea8f287352f6ab9392ed35ae0a_prof);

    }

    public function getTemplateName()
    {
        return "GtSistemaBundle:Registrar:conocimiento.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  354 => 299,  350 => 298,  198 => 153,  186 => 144,  135 => 71,  124 => 59,  116 => 53,  93 => 32,  85 => 29,  83 => 28,  79 => 27,  74 => 24,  70 => 23,  67 => 22,  54 => 6,  48 => 5,  36 => 2,  11 => 1,);
    }
}
/* {% extends 'GtSistemaBundle::basePop.html.twig' %}*/
/* {% block title %} gestionaTalento {% endblock %}*/
/* {#{% block dondeEstoy %}Empresa Cambiar{% endblock %}#}*/
/* */
/* {% block body %}*/
/* */
/* */
/*     <style>*/
/*         .popover-footer{*/
/*             padding: 6px 14px;*/
/*             background-color: #f7f7f7;*/
/*             border-top: 1px solid #ebebeb;*/
/*             text-align: right;*/
/*         }*/
/*     </style>*/
/* */
/*       {#  <div class="panel panel-primary" >*/
/*             <div class="panel-heading">*/
/*                 <h3 class="panel-title">Conocimientos</h3>*/
/*             </div>*/
/*             <div class="panel-body" >#}*/
/* <div class="container-fluid">*/
/*        {% for flashMessage in app.session.flashbag.get('notice') %}*/
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
/*                 */
/*                   */
/*                     <button id='btnConocimiento' type="button" class="btn btn-sm btn-warning " onclick="registrar(0)">*/
/*                         Nueva Competencia Conductual*/
/*                     </button>                  */
/*                   */
/*                 </div>*/
/*                 */
/*                 */
/*                 <table id='tblConocimiento' data-classes="table table-condensed" */
/*                        data-toggle="table" */
/*                        data-cache="false" */
/*                        data-height="550" */
/*                        data-striped="true"  */
/*                        data-pagination="true"*/
/*                        data-search="true" */
/*                        data-show-refresh="true"*/
/*                        data-toolbar="#custom-toolbar"*/
/*                        data-show-export="true" exportTypes="['excel', 'txt', 'csv']"*/
/*                        data-url="{{path('conocimientoTabla')}}">*/
/*                     <thead>*/
/*                     <tr>*/
/*                         <th data-field="id" data-sortable="true" data-visible="true">#</th>                        */
/*                         <th data-formatter="opciones" data-events="operateEvents">Opciones</th>*/
/*                         {#<th data-field="conocimientoCodigo" data-sortable="true">Codigo</th>#}*/
/*                         <th data-field="conocimientoNombre" data-sortable="true" data-width="600">Competencia Conductual</th>*/
/*                         <th data-field="conocimientoDefinicion" data-width="600" data-visible="false">Definicion</th>*/
/*                         <th data-formatter="opcionesInfo" data-events="operateEvents" data-align="center">Definicion</th>*/
/*                         <th data-formatter="opcionesAprendizajes" data-events="operateEvents" data-align="center">Indicadores</th>*/
/*                     </tr>*/
/*                     </thead>*/
/*                     */
/*                 </table>*/
/*                 */
/*            {# </div>    */
/*         </div>*/
/*     </div>#}*/
/*    */
/* */
/*     <!-- Modal -->*/
/*     <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">*/
/*         <div class="modal-dialog">*/
/*             <div class="modal-content">*/
/*                 <div class="modal-header">*/
/*                     <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>*/
/*                     <h4 class="modal-title">Modal title</h4>*/
/*                 </div>*/
/*                 <div class="modal-body" id="myModal2Body">                */
/* */
/*                 </div>*/
/*                 <div class="modal-footer">*/
/*                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>*/
/*                     <button type="button" class="btn btn-primary">Save changes</button>*/
/*                 </div>*/
/*             </div> <!-- /.modal-content -->*/
/*         </div> <!-- /.modal-dialog -->*/
/*     </div> <!-- /.modal -->*/
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
/*                     */
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
/*     <!-- /.modal -->*/
/* */
/* */
/* {#    <!-- Modal -->*/
/*     <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">*/
/*         <div class="modal-dialog modal-lg" role="document">*/
/*             <div class="modal-content modal-lg">*/
/*                 <div class="modal-header bg-primary">*/
/*                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>*/
/*                     <h4 class="modal-title" id="myModalLabel">Nueva Conocimiento</h4>*/
/*                 </div>*/
/*                 <div class="modal-body" id="myModalBody">                */
/*                     {{ form_widget(form.id) }}*/
/*                     {{ form_errors(form.id) }}*/
/*                    */
/*                     */
/*                     */
/*                    */
/*     */
/*                 </div>*/
/*                 <div class="modal-footer">*/
/*                     <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>*/
/*                     <button type="submit" class="btn btn-primary" >Guardar Conocimiento</button>*/
/*                 </div>*/
/*             </div> <!-- /.modal-content -->*/
/*         </div> <!-- /.modal-dialog -->*/
/*     </div> <!-- /.modal -->#}*/
/* */
/*     <form id="thisform" name="thisform" method="post">*/
/*         <input type="hidden" name="maeRegistroId" id="maeRegistroId">*/
/*     </form>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* */
/* */
/* {% block javascript %}   */
/* */
/*     <script type="text/javascript">*/
/*        var wins;*/
/*         */
/*        function opciones(value, row, index) {*/
/*             return [*/
/*                 '<div class="btn-group" role="group"><button type="button" class="modificar btn btn-xs btn-default" ><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>',*/
/*                 '<button type="button" class="borrar btn btn-xs btn-default" ><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>',*/
/*                 '</div>'*/
/*             ].join('');*/
/*         }*/
/*         */
/*         function opcionesInfo(value, row, index) {*/
/*            return ['<button id="btnInfo',index,'" name="btnInfo',index,'" type="button" class="info btn btn-info btn-xs" style="margin-top:3px;margin-bottom:3px;" data-toggle="popover"><span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span></button>'].join('');*/
/*         }*/
/*         */
/*         function opcionesAprendizajes(value, row, index) {*/
/*             return [*/
/*                 '<button id="btnAprendizaje" name="btnActividadClave" type="button" class="aprendizaje btn btn-info btn-xs" style="margin-top:3px;margin-bottom:3px;">Indicadores</button>',*/
/*             ].join('');*/
/*         }*/
/*         */
/*         */
/*         window.operateEvents = {*/
/*         */
/*             'click .info': function (e, value, row, index) {                    */
/*                 info(row, index);*/
/*             },*/
/*             */
/*             'click .modificar': function (e, value, row, index) {*/
/*                 alert(row.id);*/
/*                 registrar(row.id);*/
/* */
/*             },*/
/*             'click .borrar': function (e, value, row, index) {*/
/* */
/*                 $('#winBorrar').modal('show');*/
/*                 $("#maeRegistroId").val(row.id);*/
/*             },*/
/*             */
/*             'click .aprendizaje': function (e, value, row, index) {                */
/*                 indicador(row.id)*/
/*             }  */
/*         */
/*         };*/
/*         function registrar(conocimientoId) {*/
/*                                             */
/*             wins = new dhtmlXWindows();*/
/*             skin="dhx_terrace";*/
/*             wins.setSkin(skin);*/
/* */
/*             winId="winConocimientoRegistrar";*/
/* */
/*             wins.createWindow(winId, 1, 1, 780, 530);*/
/*             wins.window(winId).setText("Conocimiento");*/
/* */
/*             wins.window(winId).setModal(true);*/
/*             wins.window(winId).button("minmax").disable();                   */
/*             wins.window(winId).centerOnScreen();                   */
/*             wins.window(winId).progressOn();*/
/* */
/*             wins.window(winId).setIconCss("without_icon");*/
/* */
/*             var url=Routing.generate('conocimientoRegistrar', {'conocimientoId':conocimientoId});*/
/*             wins.window(winId).attachURL(url);*/
/* */
/*             wins.window(winId).attachEvent("onContentLoaded", function(id){*/
/*                id.progressOff();        */
/*               */
/*             });     */
/* */
/*         }*/
/*         */
/*         function indicador(conocimientoId) {*/
/*             wins = new dhtmlXWindows();*/
/*             skin="dhx_terrace";*/
/*             wins.setSkin(skin);*/
/* */
/*             winId="winActividadClave";*/
/* */
/*             wins.createWindow(winId, 1, 1, 780, 530);*/
/*             wins.window(winId).setText("Indicador");*/
/* */
/*             wins.window(winId).setModal(true);*/
/*             wins.window(winId).button("minmax").disable();                   */
/*             wins.window(winId).centerOnScreen();                   */
/*             wins.window(winId).progressOn();*/
/* */
/*             wins.window(winId).setIconCss("without_icon");*/
/*             */
/*             var url = Routing.generate('aprendizaje', {'conocimientoId':conocimientoId});           */
/*             wins.window(winId).attachURL(url);*/
/* */
/*             wins.window(winId).attachEvent("onContentLoaded", function(id){*/
/*                id.progressOff();        */
/*        */
/*             });        */
/*         }*/
/*         */
/*         function cerrar() {*/
/*             winId="winConocimientoRegistrar";*/
/*             wins.window(winId).close();*/
/*         }*/
/*         */
/*         function progress() {*/
/*             winId="winConocimientoRegistrar";*/
/*             wins.window(winId).progressOn();*/
/*         }*/
/*         */
/*         function refreshTabla() {*/
/*             //alert("aca");*/
/*             var $table = $('#tblConocimiento');*/
/*             $table.bootstrapTable('refresh');*/
/*         }        */
/*         */
/*         function info(row, index) {*/
/*             */
/*             var objBtnInfo='#btnInfo'+index;*/
/*             //alert($(objBtnInfo).attr('id'));*/
/*             var conocimientoNombre=row.conocimientoNombre;*/
/*             var conocimientoDefinicion=row.conocimientoDefinicion;*/
/*          */
/*             */
/*             $(objBtnInfo).popover({*/
/*             //$('#btnEntidadCont=actoHabilitadoInfo').popover({                */
/*                 title: conocimientoNombre,*/
/*                 content: [  "<table>",*/
/*                                 "<tr><td><b>Definición:<b></td></tr><tr><td>" +  conocimientoDefinicion + "</td></tr>",*/
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
/*         */
/*     <script src="{{ asset('js/mae/maeFunciones.js') }}" type="text/javascript"></script>*/
/*     <script src="{{ asset('js/comFunciones.js') }}" type="text/javascript"></script>*/
/*         */
/* {% endblock %}*/
/* */
/* */
