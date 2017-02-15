<?php

/* GtSistemaBundle:Registrar:criterio.html.twig */
class __TwigTemplate_f2d3e7a934cd9b34fab3f15dcc0eff294bd9e0feb081f3eda9535a792ce5cb97 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GtSistemaBundle::basePop.html.twig", "GtSistemaBundle:Registrar:criterio.html.twig", 1);
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
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 19
            echo "        <div class=\"flash-notice\">                              
            <div class=\"alert alert-success alert-dismissible\" role=\"alert\" style=\"padding-bottom:0px; padding-top: 0px; margin-bottom: 3px\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\" ><span aria-hidden=\"true\">&times;</span></button>
                ";
            // line 22
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                </div>                               
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "
                <div id=\"custom-toolbar\">

                    <button id='btnCriterioNuevo' type=\"button\" class=\"btn btn-sm btn-warning\" onclick=\"registrar(0)\">
                        Nuevo Criterio
                    </button>


                </div>

                <table id='tblCriterio' data-classes=\"table table-condensed\" 
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
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("criterioTabla", array("actividadClaveId" => (isset($context["actividadClaveId"]) ? $context["actividadClaveId"] : null))), "html", null, true);
        echo "\">
                    <thead>
                        <tr>
                            <th data-field=\"id\" data-sortable=\"true\">#</th>                        
                            <th data-formatter=\"opciones\" data-events=\"operateEvents\">Opciones</th>                                
                            <th data-field=\"criterioDescripcion\" data-sortable=\"true\" data-width=\"600\">Criterio</th>
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
        // line 68
        echo "                            </div>
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
                    <input type=\"hidden\" name=\"criterioId\" id=\"criterioId\">
                </form>

                ";
    }

    // line 88
    public function block_javascript($context, array $blocks = array())
    {
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
        
                        function registrar(criterioId) {
                            var actividadClaveId=\"";
        // line 102
        echo twig_escape_filter($this->env, (isset($context["actividadClaveId"]) ? $context["actividadClaveId"] : null), "html", null, true);
        echo "\";
                            wins = new dhtmlXWindows();
                            skin=\"dhx_terrace\";
                            wins.setSkin(skin);

                            winId=\"winCriterioRegistrar\";

                            wins.createWindow(winId, 1, 1, 600, 350);
                            wins.window(winId).setText(\"Registrar - Actividad Clave - Criterio\");

                            wins.window(winId).setModal(true);
                            wins.window(winId).button(\"minmax\").disable();                   
                            wins.window(winId).centerOnScreen();                   
                            wins.window(winId).progressOn();

                            wins.window(winId).setIconCss(\"without_icon\");

                            var url=Routing.generate('criterioRegistrar', {'actividadClaveId':actividadClaveId, 'criterioId':criterioId});
                            wins.window(winId).attachURL(url);

                            wins.window(winId).attachEvent(\"onContentLoaded\", function(id){
                               id.progressOff();        

                            });
                        }
                        
                        function cerrar() {
                            winId=\"winCriterioRegistrar\";
                            wins.window(winId).close();
                        }

                        function progress() {
                            winId=\"winCriterioRegistrar\";
                            wins.window(winId).progressOn();
                        }

                        function refreshTabla() {
                            var \$table = \$('#tblCriterio');
                            \$table.bootstrapTable('refresh');
                        }

                    </script>    

                    <script src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/comFunciones.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
                ";
    }

    public function getTemplateName()
    {
        return "GtSistemaBundle:Registrar:criterio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 145,  158 => 102,  140 => 88,  118 => 68,  94 => 46,  72 => 26,  62 => 22,  57 => 19,  53 => 18,  39 => 6,  36 => 5,  30 => 2,  11 => 1,);
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
/* */
/* */
/* */
/*     {% for flashMessage in app.session.flashbag.get('notice') %}*/
/*         <div class="flash-notice">                              */
/*             <div class="alert alert-success alert-dismissible" role="alert" style="padding-bottom:0px; padding-top: 0px; margin-bottom: 3px">*/
/*                 <button type="button" class="close" data-dismiss="alert" aria-label="Close" ><span aria-hidden="true">&times;</span></button>*/
/*                 {{ flashMessage }}*/
/*                 </div>                               */
/*             </div>*/
/*             {% endfor %}*/
/* */
/*                 <div id="custom-toolbar">*/
/* */
/*                     <button id='btnCriterioNuevo' type="button" class="btn btn-sm btn-warning" onclick="registrar(0)">*/
/*                         Nuevo Criterio*/
/*                     </button>*/
/* */
/* */
/*                 </div>*/
/* */
/*                 <table id='tblCriterio' data-classes="table table-condensed" */
/*                        data-toggle="table" */
/*                        data-cache="false" */
/*                        data-height="370" */
/*                        data-striped="true"  */
/*                        data-pagination="true"*/
/*                        data-search="true" */
/*                        data-show-refresh="true"*/
/*                        data-toolbar="#custom-toolbar"*/
/*                        data-show-export="true" exportTypes="['excel', 'txt', 'csv']"*/
/*                        data-url="{{path('criterioTabla', {'actividadClaveId': actividadClaveId})}}">*/
/*                     <thead>*/
/*                         <tr>*/
/*                             <th data-field="id" data-sortable="true">#</th>                        */
/*                             <th data-formatter="opciones" data-events="operateEvents">Opciones</th>                                */
/*                             <th data-field="criterioDescripcion" data-sortable="true" data-width="600">Criterio</th>*/
/*                         </tr>*/
/*                     </thead>                    */
/*                 </table>                */
/* */
/*                 <!-- start: Delete Coupon Modal -->*/
/*                 <div class="modal fade" id="winBorrar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">*/
/*                     <div class="modal-dialog">*/
/*                         <div class="modal-content">*/
/*                             <div class="modal-header bg-danger">*/
/*                                 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>*/
/*                                 <h3 class="modal-title" id="myModaBorrarlLabel">Atencion!</h3>*/
/* */
/*                             </div>*/
/*                             <div class="modal-body" id="myModalBodyBorrar">*/
/*                                 <h4> Esta seguro de borrar?</h4>*/
/*                                 {#<input type="hidden" name="tbxIdActividadClave" id="tbxIdActividadClave">#}*/
/*                             </div>*/
/*                             <!--/modal-body-collapse -->*/
/*                             <div class="modal-footer">*/
/*                                 <button type="button" class="btn btn-danger" id="btnConfirmaBorrar" onclick="formAccion(2)">Si</button>*/
/*                                 <button type="button" class="btn btn-default" data-dismiss="modal">No</button>*/
/*                             </div>*/
/*                             <!--/modal-footer-collapse -->*/
/*                         </div>*/
/*                         <!-- /.modal-content -->*/
/*                     </div>*/
/*                     <!-- /.modal-dialog -->*/
/*                 </div>*/
/*                 <!-- /.modal -->    */
/* */
/*                 <form id="thisform" name="thisform" method="post">*/
/*                     <input type="hidden" name="criterioId" id="criterioId">*/
/*                 </form>*/
/* */
/*                 {% endblock %}*/
/* */
/*                 {% block javascript %}   */
/* */
/*                     <script type="text/javascript">*/
/*                         var wins;*/
/* */
/*                         function opciones(value, row, index) {*/
/*                             return [*/
/*                                 '<div class="btn-group" role="group"><button type="button" class="modificar btn btn-xs btn-default" ><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>',*/
/*                                 '<button type="button" class="borrar btn btn-xs btn-default" ><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>',*/
/*                                 '</div>'*/
/*                             ].join('');*/
/*                         } */
/*         */
/*                         function registrar(criterioId) {*/
/*                             var actividadClaveId="{{actividadClaveId}}";*/
/*                             wins = new dhtmlXWindows();*/
/*                             skin="dhx_terrace";*/
/*                             wins.setSkin(skin);*/
/* */
/*                             winId="winCriterioRegistrar";*/
/* */
/*                             wins.createWindow(winId, 1, 1, 600, 350);*/
/*                             wins.window(winId).setText("Registrar - Actividad Clave - Criterio");*/
/* */
/*                             wins.window(winId).setModal(true);*/
/*                             wins.window(winId).button("minmax").disable();                   */
/*                             wins.window(winId).centerOnScreen();                   */
/*                             wins.window(winId).progressOn();*/
/* */
/*                             wins.window(winId).setIconCss("without_icon");*/
/* */
/*                             var url=Routing.generate('criterioRegistrar', {'actividadClaveId':actividadClaveId, 'criterioId':criterioId});*/
/*                             wins.window(winId).attachURL(url);*/
/* */
/*                             wins.window(winId).attachEvent("onContentLoaded", function(id){*/
/*                                id.progressOff();        */
/* */
/*                             });*/
/*                         }*/
/*                         */
/*                         function cerrar() {*/
/*                             winId="winCriterioRegistrar";*/
/*                             wins.window(winId).close();*/
/*                         }*/
/* */
/*                         function progress() {*/
/*                             winId="winCriterioRegistrar";*/
/*                             wins.window(winId).progressOn();*/
/*                         }*/
/* */
/*                         function refreshTabla() {*/
/*                             var $table = $('#tblCriterio');*/
/*                             $table.bootstrapTable('refresh');*/
/*                         }*/
/* */
/*                     </script>    */
/* */
/*                     <script src="{{ asset('js/comFunciones.js') }}" type="text/javascript"></script>*/
/*                 {% endblock %}*/
/* */
/* */