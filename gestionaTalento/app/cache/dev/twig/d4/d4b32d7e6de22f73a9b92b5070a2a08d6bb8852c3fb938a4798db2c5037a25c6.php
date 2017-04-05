<?php

/* GtSistemaBundle:Registrar:evaluacion.html.twig */
class __TwigTemplate_a1337c73205940269df3463454f1992f3df94524cc3241e84d042f7522a97e4e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GtSistemaBundle::basePop.html.twig", "GtSistemaBundle:Registrar:evaluacion.html.twig", 1);
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
        $__internal_21ab0f86040fc86505fb5c0ea7a2a939de41a89dcfc43ee390aada0d24092928 = $this->env->getExtension("native_profiler");
        $__internal_21ab0f86040fc86505fb5c0ea7a2a939de41a89dcfc43ee390aada0d24092928->enter($__internal_21ab0f86040fc86505fb5c0ea7a2a939de41a89dcfc43ee390aada0d24092928_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GtSistemaBundle:Registrar:evaluacion.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_21ab0f86040fc86505fb5c0ea7a2a939de41a89dcfc43ee390aada0d24092928->leave($__internal_21ab0f86040fc86505fb5c0ea7a2a939de41a89dcfc43ee390aada0d24092928_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_cd5ccd1b6789ab9e29bbbbd85fc43959cf8a7025f8bc86f55d9f50a72960fa94 = $this->env->getExtension("native_profiler");
        $__internal_cd5ccd1b6789ab9e29bbbbd85fc43959cf8a7025f8bc86f55d9f50a72960fa94->enter($__internal_cd5ccd1b6789ab9e29bbbbd85fc43959cf8a7025f8bc86f55d9f50a72960fa94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Gestionatalento ";
        
        $__internal_cd5ccd1b6789ab9e29bbbbd85fc43959cf8a7025f8bc86f55d9f50a72960fa94->leave($__internal_cd5ccd1b6789ab9e29bbbbd85fc43959cf8a7025f8bc86f55d9f50a72960fa94_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_42e021d69faa917cc70dc599cbc2b47d03f090c2b98cbe930afabd4cb19f0d17 = $this->env->getExtension("native_profiler");
        $__internal_42e021d69faa917cc70dc599cbc2b47d03f090c2b98cbe930afabd4cb19f0d17->enter($__internal_42e021d69faa917cc70dc599cbc2b47d03f090c2b98cbe930afabd4cb19f0d17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "

 <div class=\"container-fluid\">     
    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 10
            echo "        <div class=\"flash-notice\">                              
            <div class=\"alert alert-success alert-dismissible\" role=\"alert\" style=\"padding-bottom:0px; padding-top: 0px; margin-bottom: 3px\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\" ><span aria-hidden=\"true\">&times;</span></button>
                ";
            // line 13
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                ";
            // line 14
            $context["guardado"] = true;
            // line 15
            echo "            </div>                               
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "                
                    
                <div id=\"custom-toolbar\">
                    <button id='btnEvaluacion' type=\"button\" class=\"btn btn-sm btn-primary \" onclick=\"registrar(0)\">
                        Nueva Evaluacion
                    </button>
                </div>
                
                
                <table id='tblEvaluacion' data-classes=\"table table-condensed\" 
                        data-toggle=\"table\" 
                        data-cache=\"false\" 
                        data-height=\"500\" 
                        data-striped=\"true\"  
                        data-pagination=\"true\"
                        data-search=\"true\" 
                        data-show-refresh=\"true\"
                        data-toolbar=\"#custom-toolbar\"
                        data-show-export=\"true\" exportTypes=\"['excel', 'txt', 'csv']\"
                        data-url=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("evaluacionTabla");
        echo "\"> 
                    <thead>
                    <tr>
                        <th data-field=\"id\" data-sortable=\"true\" data-visible=\"false\">#</th>                                                
                        ";
        // line 42
        echo "                        <th data-formatter=\"opciones\" data-events=\"operateEvents\">Opciones</th>
                        <th data-field=\"evaluacionNombre\" data-sortable=\"true\">Nombre Evaluacion</th>
                        <th data-field=\"evaluacionDefinicion\"data-width=\"400\">Definicion</th>
                        <th data-formatter=\"operateFormatter\" data-events=\"operateEvents\">Opciones</th>
                    </tr>
                    </thead>                    
                </table>
                
                
       


     <div class=\"modal fade\" id=\"winBorrar\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"vtnEvaluacionLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header bg-danger\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                     <h3 class=\"modal-title\" id=\"myModaBorrarlLabel\">Atencion!</h3>

                </div>
                <div class=\"modal-body\" id=\"vtnEvaluacionBodyBorrar\">
                     <h4> Esta seguro de borrar?</h4>
                     ";
        // line 65
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
    

</div>
";
        
        $__internal_42e021d69faa917cc70dc599cbc2b47d03f090c2b98cbe930afabd4cb19f0d17->leave($__internal_42e021d69faa917cc70dc599cbc2b47d03f090c2b98cbe930afabd4cb19f0d17_prof);

    }

    // line 88
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_ac882a4a490eb1accf0194ac5c15155aea346fee164a6dd72b2a2fe8f9750dc4 = $this->env->getExtension("native_profiler");
        $__internal_ac882a4a490eb1accf0194ac5c15155aea346fee164a6dd72b2a2fe8f9750dc4->enter($__internal_ac882a4a490eb1accf0194ac5c15155aea346fee164a6dd72b2a2fe8f9750dc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

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
        
        window.operateEvents = {
        
            'click .modificar': function (e, value, row, index) {
                registrar(row.id);
                
            },
            'click .borrar': function (e, value, row, index) {

                \$('#winBorrar').modal('show');
                \$(\"#maeRegistroId\").val(row.id);
            },
            
            'click .participantes': function (e, value, row, index) {  
                participantes(row.id)            
            }
        
        };
                
        function registrar(evaluacionId) {
                                            
            wins = new dhtmlXWindows();
            skin=\"dhx_terrace\";
            wins.setSkin(skin);

            winId=\"winEvaluacionRegistrar\";

            wins.createWindow(winId, 1, 1, 780, 530);
            wins.window(winId).setText(\"Evaluacion\");

            wins.window(winId).setModal(true);
            wins.window(winId).button(\"minmax\").disable();                   
            wins.window(winId).centerOnScreen();                   
            wins.window(winId).progressOn();

            wins.window(winId).setIconCss(\"without_icon\");

            var url=Routing.generate('evaluacionRegistrar', {'evaluacionId':evaluacionId});
            wins.window(winId).attachURL(url);

            wins.window(winId).attachEvent(\"onContentLoaded\", function(id){
               id.progressOff();        
              
            });     

        }
        function participantes(evaluacionId) {
            
            
          
            wins = new dhtmlXWindows();
            skin=\"dhx_terrace\";
            wins.setSkin(skin);

            winId=\"winEvaluacionRegistrar\";

            wins.createWindow(winId, 1, 1, 780, 530);
            wins.window(winId).setText(\"Evaluacion\");

            wins.window(winId).setModal(true);
            wins.window(winId).button(\"minmax\").disable();                   
            wins.window(winId).centerOnScreen();                   
            wins.window(winId).progressOn();

            wins.window(winId).setIconCss(\"without_icon\");

            var parametro = {'evaluacionId':evaluacionId};
            var url = Routing.generate('participanteRegistrar', parametro);
            
            wins.window(winId).attachURL(url);

            wins.window(winId).attachEvent(\"onContentLoaded\", function(id){
               id.progressOff();        
              
            });     
            
            
        }
        
        
        function cerrar() {
            winId=\"winEvaluacionRegistrar\";
            wins2.window(winId).close();
        }
        
        function progress() {
            winId=\"winEvaluacionRegistrar\";
            wins2.window(winId).progressOn();
        }
        
        function refreshTabla() {
            //alert(\"aca\");
            var \$table = \$('#tblEvaluacion');
            \$table.bootstrapTable('refresh');
        }        
        
        
       
        
        function operateFormatter(value, row, index) {
            return [
                '<button id=\"btnParticipantes\" name=\"btnParticipantes\" type=\"button\" class=\"participantes btn btn-info btn-xs\">Participantes </button>&nbsp;',
                
            ].join('');
        }

    
            
    </script>
";
        
        $__internal_ac882a4a490eb1accf0194ac5c15155aea346fee164a6dd72b2a2fe8f9750dc4->leave($__internal_ac882a4a490eb1accf0194ac5c15155aea346fee164a6dd72b2a2fe8f9750dc4_prof);

    }

    public function getTemplateName()
    {
        return "GtSistemaBundle:Registrar:evaluacion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 88,  134 => 65,  110 => 42,  103 => 37,  82 => 18,  74 => 15,  72 => 14,  68 => 13,  63 => 10,  59 => 9,  54 => 6,  48 => 5,  36 => 2,  11 => 1,);
    }
}
/* {% extends 'GtSistemaBundle::basePop.html.twig' %}*/
/* {% block title %} Gestionatalento {% endblock %}*/
/* {#{% block dondeEstoy %}Empresa Cambiar{% endblock %}#}*/
/* */
/* {% block body %}*/
/* */
/* */
/*  <div class="container-fluid">     */
/*     {% for flashMessage in app.session.flashbag.get('notice') %}*/
/*         <div class="flash-notice">                              */
/*             <div class="alert alert-success alert-dismissible" role="alert" style="padding-bottom:0px; padding-top: 0px; margin-bottom: 3px">*/
/*                 <button type="button" class="close" data-dismiss="alert" aria-label="Close" ><span aria-hidden="true">&times;</span></button>*/
/*                 {{ flashMessage }}*/
/*                 {% set guardado=true %}*/
/*             </div>                               */
/*         </div>*/
/*     {% endfor %}*/
/*                 */
/*                     */
/*                 <div id="custom-toolbar">*/
/*                     <button id='btnEvaluacion' type="button" class="btn btn-sm btn-primary " onclick="registrar(0)">*/
/*                         Nueva Evaluacion*/
/*                     </button>*/
/*                 </div>*/
/*                 */
/*                 */
/*                 <table id='tblEvaluacion' data-classes="table table-condensed" */
/*                         data-toggle="table" */
/*                         data-cache="false" */
/*                         data-height="500" */
/*                         data-striped="true"  */
/*                         data-pagination="true"*/
/*                         data-search="true" */
/*                         data-show-refresh="true"*/
/*                         data-toolbar="#custom-toolbar"*/
/*                         data-show-export="true" exportTypes="['excel', 'txt', 'csv']"*/
/*                         data-url="{{path('evaluacionTabla')}}"> */
/*                     <thead>*/
/*                     <tr>*/
/*                         <th data-field="id" data-sortable="true" data-visible="false">#</th>                                                */
/*                         {#<th data-field="evaluacionCodigo" data-sortable="true">Codigo</th>#}*/
/*                         <th data-formatter="opciones" data-events="operateEvents">Opciones</th>*/
/*                         <th data-field="evaluacionNombre" data-sortable="true">Nombre Evaluacion</th>*/
/*                         <th data-field="evaluacionDefinicion"data-width="400">Definicion</th>*/
/*                         <th data-formatter="operateFormatter" data-events="operateEvents">Opciones</th>*/
/*                     </tr>*/
/*                     </thead>                    */
/*                 </table>*/
/*                 */
/*                 */
/*        */
/* */
/* */
/*      <div class="modal fade" id="winBorrar" tabindex="-1" role="dialog" aria-labelledby="vtnEvaluacionLabel" aria-hidden="true">*/
/*         <div class="modal-dialog">*/
/*             <div class="modal-content">*/
/*                 <div class="modal-header bg-danger">*/
/*                     <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>*/
/*                      <h3 class="modal-title" id="myModaBorrarlLabel">Atencion!</h3>*/
/* */
/*                 </div>*/
/*                 <div class="modal-body" id="vtnEvaluacionBodyBorrar">*/
/*                      <h4> Esta seguro de borrar?</h4>*/
/*                      {#<input type="hidden" name="tbxEvaluacionId" id="tbxEvaluacionId">#}*/
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
/*     */
/* */
/*     <form id="thisform" name="thisform" method="post">*/
/*         <input type="hidden" name="maeRegistroId" id="maeRegistroId">*/
/*     </form>*/
/*     */
/* */
/* </div>*/
/* {% endblock %}*/
/* */
/* {% block javascript %}   */
/* */
/*     <script type="text/javascript">*/
/*         */
/*         var wins;*/
/*          function opciones(value, row, index) {*/
/*             return [*/
/*                 '<div class="btn-group" role="group"><button type="button" class="modificar btn btn-xs btn-default" ><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>',*/
/*                 '<button type="button" class="borrar btn btn-xs btn-default" ><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>',*/
/*                 '</div>'*/
/*             ].join('');*/
/*         }*/
/*         */
/*         window.operateEvents = {*/
/*         */
/*             'click .modificar': function (e, value, row, index) {*/
/*                 registrar(row.id);*/
/*                 */
/*             },*/
/*             'click .borrar': function (e, value, row, index) {*/
/* */
/*                 $('#winBorrar').modal('show');*/
/*                 $("#maeRegistroId").val(row.id);*/
/*             },*/
/*             */
/*             'click .participantes': function (e, value, row, index) {  */
/*                 participantes(row.id)            */
/*             }*/
/*         */
/*         };*/
/*                 */
/*         function registrar(evaluacionId) {*/
/*                                             */
/*             wins = new dhtmlXWindows();*/
/*             skin="dhx_terrace";*/
/*             wins.setSkin(skin);*/
/* */
/*             winId="winEvaluacionRegistrar";*/
/* */
/*             wins.createWindow(winId, 1, 1, 780, 530);*/
/*             wins.window(winId).setText("Evaluacion");*/
/* */
/*             wins.window(winId).setModal(true);*/
/*             wins.window(winId).button("minmax").disable();                   */
/*             wins.window(winId).centerOnScreen();                   */
/*             wins.window(winId).progressOn();*/
/* */
/*             wins.window(winId).setIconCss("without_icon");*/
/* */
/*             var url=Routing.generate('evaluacionRegistrar', {'evaluacionId':evaluacionId});*/
/*             wins.window(winId).attachURL(url);*/
/* */
/*             wins.window(winId).attachEvent("onContentLoaded", function(id){*/
/*                id.progressOff();        */
/*               */
/*             });     */
/* */
/*         }*/
/*         function participantes(evaluacionId) {*/
/*             */
/*             */
/*           */
/*             wins = new dhtmlXWindows();*/
/*             skin="dhx_terrace";*/
/*             wins.setSkin(skin);*/
/* */
/*             winId="winEvaluacionRegistrar";*/
/* */
/*             wins.createWindow(winId, 1, 1, 780, 530);*/
/*             wins.window(winId).setText("Evaluacion");*/
/* */
/*             wins.window(winId).setModal(true);*/
/*             wins.window(winId).button("minmax").disable();                   */
/*             wins.window(winId).centerOnScreen();                   */
/*             wins.window(winId).progressOn();*/
/* */
/*             wins.window(winId).setIconCss("without_icon");*/
/* */
/*             var parametro = {'evaluacionId':evaluacionId};*/
/*             var url = Routing.generate('participanteRegistrar', parametro);*/
/*             */
/*             wins.window(winId).attachURL(url);*/
/* */
/*             wins.window(winId).attachEvent("onContentLoaded", function(id){*/
/*                id.progressOff();        */
/*               */
/*             });     */
/*             */
/*             */
/*         }*/
/*         */
/*         */
/*         function cerrar() {*/
/*             winId="winEvaluacionRegistrar";*/
/*             wins2.window(winId).close();*/
/*         }*/
/*         */
/*         function progress() {*/
/*             winId="winEvaluacionRegistrar";*/
/*             wins2.window(winId).progressOn();*/
/*         }*/
/*         */
/*         function refreshTabla() {*/
/*             //alert("aca");*/
/*             var $table = $('#tblEvaluacion');*/
/*             $table.bootstrapTable('refresh');*/
/*         }        */
/*         */
/*         */
/*        */
/*         */
/*         function operateFormatter(value, row, index) {*/
/*             return [*/
/*                 '<button id="btnParticipantes" name="btnParticipantes" type="button" class="participantes btn btn-info btn-xs">Participantes </button>&nbsp;',*/
/*                 */
/*             ].join('');*/
/*         }*/
/* */
/*     */
/*             */
/*     </script>*/
/* {% endblock %}*/
/* */
/* */
