<?php

/* GtSistemaBundle:Registrar:persona.html.twig */
class __TwigTemplate_541c1456ec237bc36568d0ee0fad6d9f4e1df0ccb703b43c1417f8371f26f2ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GtSistemaBundle::basePop.html.twig", "GtSistemaBundle:Registrar:persona.html.twig", 1);
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
        $__internal_ac8c1a460e8c2a4b83288f11dbdc7e93b265796ff4ba09693dbb566fd6141626 = $this->env->getExtension("native_profiler");
        $__internal_ac8c1a460e8c2a4b83288f11dbdc7e93b265796ff4ba09693dbb566fd6141626->enter($__internal_ac8c1a460e8c2a4b83288f11dbdc7e93b265796ff4ba09693dbb566fd6141626_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GtSistemaBundle:Registrar:persona.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac8c1a460e8c2a4b83288f11dbdc7e93b265796ff4ba09693dbb566fd6141626->leave($__internal_ac8c1a460e8c2a4b83288f11dbdc7e93b265796ff4ba09693dbb566fd6141626_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_e2c4b11c59bcef76c96048a9bf9fee1cdd1912479b946b3d106145e17f2204a9 = $this->env->getExtension("native_profiler");
        $__internal_e2c4b11c59bcef76c96048a9bf9fee1cdd1912479b946b3d106145e17f2204a9->enter($__internal_e2c4b11c59bcef76c96048a9bf9fee1cdd1912479b946b3d106145e17f2204a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Gestionatalento ";
        
        $__internal_e2c4b11c59bcef76c96048a9bf9fee1cdd1912479b946b3d106145e17f2204a9->leave($__internal_e2c4b11c59bcef76c96048a9bf9fee1cdd1912479b946b3d106145e17f2204a9_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a24288278c518250f7bf965e08a14354fa256ec73cce69b622cf37fd6a0eab27 = $this->env->getExtension("native_profiler");
        $__internal_a24288278c518250f7bf965e08a14354fa256ec73cce69b622cf37fd6a0eab27->enter($__internal_a24288278c518250f7bf965e08a14354fa256ec73cce69b622cf37fd6a0eab27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <style>
        
        .dhx_cell_wins {
            left:3px !important;
        }
    </style>

      
     
     
<div class=\"container-fluid\">     
    ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 19
            echo "        <div class=\"flash-notice\">                              
            <div class=\"alert alert-success alert-dismissible\" role=\"alert\" style=\"padding-bottom:0px; padding-top: 0px; margin-bottom: 3px\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\" ><span aria-hidden=\"true\">&times;</span></button>
                ";
            // line 22
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                ";
            // line 23
            $context["guardado"] = true;
            // line 24
            echo "            </div>                               
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "        
        
                <div id=\"custom-toolbar2\">                                        
                    <button id='btnPersona' type=\"button\" class=\"btn btn-sm btn-primary \" onclick=\"registrar(0)\">
                        Nueva Persona
                    </button>
                   ";
        // line 36
        echo "                                       
                </div>
               
                <table id='tblPersona' data-classes=\"table table-condensed\" 
                       data-toggle=\"table\" 
                       data-cache=\"false\" 
                       data-height=\"450\" 
                       data-striped=\"true\"  
                       data-pagination=\"true\"
                       data-search=\"true\" 
                       data-show-refresh=\"true\"
                       data-toolbar=\"#custom-toolbar2\"
                       data-show-export=\"true\" exportTypes=\"['excel', 'txt', 'csv']\"
                       data-url=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("personaTabla");
        echo "\">                      
                    <thead>
                    <tr>
                        <th data-field=\"id\" data-sortable=\"true\">#</th>
                        <th data-formatter=\"opciones\" data-events=\"operateEvents\">Opciones</th>
                        <th data-field=\"empresaId\" data-visible=\"false\"></th>                        
                        <th data-field=\"perfilId\" data-visible=\"false\"></th>                        
                        ";
        // line 57
        echo "                        <th data-field=\"personaNombre\" data-sortable=\"true\">Nombre</th>
                        <th data-field=\"personaCorreo\" data-sortable=\"true\">Correo</th>
                        <th data-field=\"perfilNombre\" data-sortable=\"true\">Perfil</th>                        
                        <th data-field=\"personaSuperior\" data-visible=\"true\">Superior</th>
                        
                        
                    </tr>
                    </thead>
                    
                </table>
                 
                
   ";
        // line 71
        echo "        ";
        // line 72
        echo "      ";
        echo "       
    <!-- start: Delete Coupon Modal -->
    <div class=\"modal fade\" id=\"winBorrar\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"vtnPersonaLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header bg-danger\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                     <h3 class=\"modal-title\" id=\"myModaBorrarlLabel\">Atencion!</h3>

                </div>
                <div class=\"modal-body\" id=\"vtnPersonaBodyBorrar\">
                     <h4> Esta seguro de borrar?</h4>
                     ";
        // line 85
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
        
        $__internal_a24288278c518250f7bf965e08a14354fa256ec73cce69b622cf37fd6a0eab27->leave($__internal_a24288278c518250f7bf965e08a14354fa256ec73cce69b622cf37fd6a0eab27_prof);

    }

    // line 110
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_b3fab6a128e84c48ad809aa9b1692869aca4aaf1bb22de4d2b8b26952d9b8f94 = $this->env->getExtension("native_profiler");
        $__internal_b3fab6a128e84c48ad809aa9b1692869aca4aaf1bb22de4d2b8b26952d9b8f94->enter($__internal_b3fab6a128e84c48ad809aa9b1692869aca4aaf1bb22de4d2b8b26952d9b8f94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        echo "   

    <script type=\"text/javascript\">
        
        function opciones(value, row, index) {
            return [
                '<div class=\"btn-group\" role=\"group\"><button type=\"button\" class=\"modificar btn btn-xs btn-default\" ><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span></button>',
                '<button type=\"button\" class=\"borrar btn btn-xs btn-default\" ><span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span></button>',
                '</div>'
            ].join('');
        }
        
        
        function registrar(personaId) {
                                            
            wins = new dhtmlXWindows();
            skin=\"dhx_terrace\";
            wins.setSkin(skin);

            winId=\"winPersonaRegistrar\";

            wins.createWindow(winId, 1, 1, 780, 400);
            wins.window(winId).setText(\"Persona\");

            wins.window(winId).setModal(true);
            wins.window(winId).button(\"minmax\").disable();                   
            wins.window(winId).centerOnScreen();                   
            wins.window(winId).progressOn();

            wins.window(winId).setIconCss(\"without_icon\");

            var url=Routing.generate('personaRegistrar', {'personaId':personaId});
            wins.window(winId).attachURL(url);

            wins.window(winId).attachEvent(\"onContentLoaded\", function(id){
               id.progressOff();        
              
            });     

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
        
        
       
        
        function cerrar() {
            winId=\"winPersonaRegistrar\";
            wins2.window(winId).close();
        }
        
        function progress() {
            winId=\"winPersonaRegistrar\";
            wins2.window(winId).progressOn();
        }
        
        function refreshTabla() {
            //alert(\"aca\");
            var \$table = \$('#tblPersona');
            \$table.bootstrapTable('refresh');
        }        
    </script>
        
    <script src=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/mae/maeFunciones.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/comFunciones.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        
";
        
        $__internal_b3fab6a128e84c48ad809aa9b1692869aca4aaf1bb22de4d2b8b26952d9b8f94->leave($__internal_b3fab6a128e84c48ad809aa9b1692869aca4aaf1bb22de4d2b8b26952d9b8f94_prof);

    }

    public function getTemplateName()
    {
        return "GtSistemaBundle:Registrar:persona.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  269 => 186,  265 => 185,  183 => 110,  155 => 85,  140 => 72,  138 => 71,  124 => 57,  114 => 49,  99 => 36,  91 => 27,  83 => 24,  81 => 23,  77 => 22,  72 => 19,  68 => 18,  54 => 6,  48 => 5,  36 => 2,  11 => 1,);
    }
}
/* {% extends 'GtSistemaBundle::basePop.html.twig' %}*/
/* {% block title %} Gestionatalento {% endblock %}*/
/* {#{% block dondeEstoy %}Empresa Cambiar{% endblock %}#}*/
/* */
/* {% block body %}*/
/* */
/*     <style>*/
/*         */
/*         .dhx_cell_wins {*/
/*             left:3px !important;*/
/*         }*/
/*     </style>*/
/* */
/*       */
/*      */
/*      */
/* <div class="container-fluid">     */
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
/*                 <div id="custom-toolbar2">                                        */
/*                     <button id='btnPersona' type="button" class="btn btn-sm btn-primary " onclick="registrar(0)">*/
/*                         Nueva Persona*/
/*                     </button>*/
/*                    {# */
/*                     <button id='btnPersonaImportar' type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#vtnPersona">*/
/*                         Importar*/
/*                     </button>  #}                                       */
/*                 </div>*/
/*                */
/*                 <table id='tblPersona' data-classes="table table-condensed" */
/*                        data-toggle="table" */
/*                        data-cache="false" */
/*                        data-height="450" */
/*                        data-striped="true"  */
/*                        data-pagination="true"*/
/*                        data-search="true" */
/*                        data-show-refresh="true"*/
/*                        data-toolbar="#custom-toolbar2"*/
/*                        data-show-export="true" exportTypes="['excel', 'txt', 'csv']"*/
/*                        data-url="{{path('personaTabla')}}">                      */
/*                     <thead>*/
/*                     <tr>*/
/*                         <th data-field="id" data-sortable="true">#</th>*/
/*                         <th data-formatter="opciones" data-events="operateEvents">Opciones</th>*/
/*                         <th data-field="empresaId" data-visible="false"></th>                        */
/*                         <th data-field="perfilId" data-visible="false"></th>                        */
/*                         {#<th data-field="personaRut" data-sortable="true">Rut</th>#}*/
/*                         <th data-field="personaNombre" data-sortable="true">Nombre</th>*/
/*                         <th data-field="personaCorreo" data-sortable="true">Correo</th>*/
/*                         <th data-field="perfilNombre" data-sortable="true">Perfil</th>                        */
/*                         <th data-field="personaSuperior" data-visible="true">Superior</th>*/
/*                         */
/*                         */
/*                     </tr>*/
/*                     </thead>*/
/*                     */
/*                 </table>*/
/*                  */
/*                 */
/*    {#        </div>*/
/*         </div>#}*/
/*         {#</div>          #}*/
/*       {#</div>#}       */
/*     <!-- start: Delete Coupon Modal -->*/
/*     <div class="modal fade" id="winBorrar" tabindex="-1" role="dialog" aria-labelledby="vtnPersonaLabel" aria-hidden="true">*/
/*         <div class="modal-dialog">*/
/*             <div class="modal-content">*/
/*                 <div class="modal-header bg-danger">*/
/*                     <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>*/
/*                      <h3 class="modal-title" id="myModaBorrarlLabel">Atencion!</h3>*/
/* */
/*                 </div>*/
/*                 <div class="modal-body" id="vtnPersonaBodyBorrar">*/
/*                      <h4> Esta seguro de borrar?</h4>*/
/*                      {#<input type="hidden" name="tbxPersonaId" id="tbxPersonaId">#}*/
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
/* */
/*        */
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
/*         */
/*         function opciones(value, row, index) {*/
/*             return [*/
/*                 '<div class="btn-group" role="group"><button type="button" class="modificar btn btn-xs btn-default" ><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>',*/
/*                 '<button type="button" class="borrar btn btn-xs btn-default" ><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>',*/
/*                 '</div>'*/
/*             ].join('');*/
/*         }*/
/*         */
/*         */
/*         function registrar(personaId) {*/
/*                                             */
/*             wins = new dhtmlXWindows();*/
/*             skin="dhx_terrace";*/
/*             wins.setSkin(skin);*/
/* */
/*             winId="winPersonaRegistrar";*/
/* */
/*             wins.createWindow(winId, 1, 1, 780, 400);*/
/*             wins.window(winId).setText("Persona");*/
/* */
/*             wins.window(winId).setModal(true);*/
/*             wins.window(winId).button("minmax").disable();                   */
/*             wins.window(winId).centerOnScreen();                   */
/*             wins.window(winId).progressOn();*/
/* */
/*             wins.window(winId).setIconCss("without_icon");*/
/* */
/*             var url=Routing.generate('personaRegistrar', {'personaId':personaId});*/
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
/*         window.operateEvents = {*/
/*         */
/*             'click .modificar': function (e, value, row, index) {*/
/*                 registrar(row.id);*/
/* */
/*             },*/
/*             'click .borrar': function (e, value, row, index) {*/
/* */
/*                 $('#winBorrar').modal('show');*/
/*                 $("#maeRegistroId").val(row.id);*/
/*             },*/
/*         };*/
/*         */
/*         */
/*        */
/*         */
/*         function cerrar() {*/
/*             winId="winPersonaRegistrar";*/
/*             wins2.window(winId).close();*/
/*         }*/
/*         */
/*         function progress() {*/
/*             winId="winPersonaRegistrar";*/
/*             wins2.window(winId).progressOn();*/
/*         }*/
/*         */
/*         function refreshTabla() {*/
/*             //alert("aca");*/
/*             var $table = $('#tblPersona');*/
/*             $table.bootstrapTable('refresh');*/
/*         }        */
/*     </script>*/
/*         */
/*     <script src="{{ asset('js/mae/maeFunciones.js') }}" type="text/javascript"></script>*/
/*     <script src="{{ asset('js/comFunciones.js') }}" type="text/javascript"></script>*/
/*         */
/* {% endblock %}*/
/* */
/* */