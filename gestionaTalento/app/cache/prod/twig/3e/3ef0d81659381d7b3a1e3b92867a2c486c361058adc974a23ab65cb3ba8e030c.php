<?php

/* GtSistemaBundle:Registrar:perfil.html.twig */
class __TwigTemplate_3e0894833bb12a533f7964c8051c5f770d9da291aa29411c3d2f9f9d723ff22b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GtSistemaBundle::basePop.html.twig", "GtSistemaBundle:Registrar:perfil.html.twig", 1);
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


  <div class=\"container-fluid\">
";
        // line 16
        echo "                                    
                <div id=\"custom-toolbar\">
                    ";
        // line 21
        echo "                    
                    <button id='btnPersona' type=\"button\" class=\"btn btn-sm btn-primary \" onclick=\"registrar(0)\">
                        Nuevo Perfil
                    </button>
                </div>                
                
                <table id='tblPerfil' data-classes=\"table table-condensed\" 
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
        echo $this->env->getExtension('routing')->getPath("perfilTabla");
        echo "\">     
                    <thead>
                    <tr>
                        <th data-field=\"id\" data-sortable=\"true\" data-visible=\"false\">#</th>
                        <th data-formatter=\"opciones\" data-events=\"operateEvents\">Opciones</th>
                        <th data-field=\"perfilNombre\" data-sortable=\"true\">Nombre del Cargo</th>
                        <th data-field=\"perfilObjetivo\"data-width=\"600\">Objetivo</th>                                   
                    </tr>
                    </thead>
                  
                </table>
                
            ";
        // line 51
        echo "   ";
        // line 52
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
    <div class=\"modal fade\" id=\"myModalBorrar\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header bg-danger\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                     <h3 class=\"modal-title\" id=\"myModaBorrarlLabel\">Atencion!</h3>

                </div>
                <div class=\"modal-body\" id=\"myModalBodyBorrar\">
                     <h4> Esta seguro de borrar?</h4>
                     <input type=\"hidden\" name=\"tbxIdPerfil\" id=\"tbxIdPerfil\">
                </div>
                <!--/modal-body-collapse -->
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-danger\" id=\"btnConfirmaBorrar\" onclick=\"frmBorrar()\">Si</button>
                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">No</button>
                </div>
                <!--/modal-footer-collapse -->
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->


    <!-- Modal -->
    <div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
        <div class=\"modal-dialog modal-lg\" role=\"document\">
            <div class=\"modal-content modal-lg\">
                <div class=\"modal-header bg-primary\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                    <h4 class=\"modal-title\" id=\"myModalLabel\">Perfil</h4>
                </div>
                <div class=\"modal-body\" id=\"myModalBody\">                
                    
                            
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancelar</button>
                    <button type=\"button\" class=\"btn btn-primary\" onclick=\"frmSubmit()\"  >Guardar Perfil</button>
                </div>
            </div> <!-- /.modal-content -->
        </div> <!-- /.modal-dialog -->
    </div> <!-- /.modal -->
</div>




</form>

";
    }

    // line 131
    public function block_javascript($context, array $blocks = array())
    {
        echo "   

    <script type=\"text/javascript\">                                         
        
        var wins;
         
        function frmBorrar() {            
            //var objPanelFiltroAno = document.querySelector(\"#panelFiltroAno\");            
            var idPerfil= document.getElementById(\"tbxIdPerfil\").value ;                        
            url = Routing.generate('perfilRegistrar');            
            document.thisform.action=url
            document.thisform.submit();            
        }
            
        
        function operateFormatter(value, row, index) {
            return [
                '<button id=\"btnModificar\" name=\"btnModificar\" type=\"button\" class=\"modificar btn btn-primary btn-xs\">Modificar</button>&nbsp;',
                '<button id=\"btnBorrar\" name=\"btnBorrar\" type=\"button\" class=\"borrar btn btn-primary btn-xs\">Borrar</button>&nbsp;',
                '<br><button id=\"btnActividadClave\" name=\"btnActividadClave\" type=\"button\" class=\"actividad btn btn-info btn-xs\">Actvidades Claves</button>',
                
            ].join('');
        }

        function opciones(value, row, index) {
            return [
                '<div class=\"btn-group\" role=\"group\"><button type=\"button\" class=\"modificar btn btn-xs btn-default\" ><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span></button>',
                '<button type=\"button\" class=\"borrar btn btn-xs btn-default\" ><span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span></button>',
                '</div>'
            ].join('');
            
            //'<button id=\"btnModificar\" name=\"btnModificar\" type=\"button\" class=\"btn btn-link btn-xs\">Modificar</button>',
            //'<button id=\"btnBorrar\" name=\"btnBorrar\" type=\"button\" class=\"btn btn-link btn-xs\">Borrar</button>&nbsp;',
        }  
        
        function registrar(perfilId) {
                                            
            wins = new dhtmlXWindows();
            skin=\"dhx_terrace\";
            wins.setSkin(skin);

            winId=\"winPerfilRegistrar\";

            wins.createWindow(winId, 1, 1, 780, 530);
            wins.window(winId).setText(\"Perfil\");

            wins.window(winId).setModal(true);
            wins.window(winId).button(\"minmax\").disable();                   
            wins.window(winId).centerOnScreen();                   
            wins.window(winId).progressOn();

            wins.window(winId).setIconCss(\"without_icon\");

            var url=Routing.generate('perfilRegistrar', {'perfilId':perfilId});
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
                \$('#myModalBorrar').data('id', row.id).modal('show');
                //alert('You click borrar icon, row: ' + JSON.stringify(row));
                //console.log(value, row, index);
            },
            'click .remove': function (e, value, row, index) {
                alert('You click remove icon, row: ' + JSON.stringify(row));
                console.log(value, row, index);
            }
        };

        function cerrar() {
            winId=\"winPerfilRegistrar\";
            wins.window(winId).close();
        }
        
        function progress() {
            winId=\"winPerfilRegistrar\";
            wins.window(winId).progressOn();
        }
        
        function refreshTabla() {
            //alert(\"aca\");
            var \$table = \$('#tblPerfil');
            \$table.bootstrapTable('refresh');
        }
        
        
        
    </script>
";
    }

    public function getTemplateName()
    {
        return "GtSistemaBundle:Registrar:perfil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 131,  84 => 52,  82 => 51,  67 => 37,  49 => 21,  45 => 16,  39 => 6,  36 => 5,  30 => 2,  11 => 1,);
    }
}
/* {% extends 'GtSistemaBundle::basePop.html.twig' %}*/
/* {% block title %} Gestionatalento {% endblock %}*/
/* {#{% block dondeEstoy %}Empresa Cambiar{% endblock %}#}*/
/* */
/* {% block body %}*/
/* */
/* */
/* */
/*   <div class="container-fluid">*/
/* {#    <div class="center-block" >*/
/*         <div class="panel panel-primary" >*/
/*             <div class="panel-heading">*/
/*                 <h3 class="panel-title">Perfiles</h3>*/
/*             </div>*/
/*             <div class="panel-body" >#}*/
/*                                     */
/*                 <div id="custom-toolbar">*/
/*                     {#<button id='btnPerfil' type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">*/
/*                         Nuevo Perfil*/
/*                     </button>#}*/
/*                     */
/*                     <button id='btnPersona' type="button" class="btn btn-sm btn-primary " onclick="registrar(0)">*/
/*                         Nuevo Perfil*/
/*                     </button>*/
/*                 </div>                */
/*                 */
/*                 <table id='tblPerfil' data-classes="table table-condensed" */
/*                         data-toggle="table" */
/*                         data-cache="false" */
/*                         data-height="500" */
/*                         data-striped="true"  */
/*                         data-pagination="true"*/
/*                         data-search="true" */
/*                         data-show-refresh="true"*/
/*                         data-toolbar="#custom-toolbar"*/
/*                         data-show-export="true" exportTypes="['excel', 'txt', 'csv']"                       */
/*                         data-url="{{path('perfilTabla')}}">     */
/*                     <thead>*/
/*                     <tr>*/
/*                         <th data-field="id" data-sortable="true" data-visible="false">#</th>*/
/*                         <th data-formatter="opciones" data-events="operateEvents">Opciones</th>*/
/*                         <th data-field="perfilNombre" data-sortable="true">Nombre del Cargo</th>*/
/*                         <th data-field="perfilObjetivo"data-width="600">Objetivo</th>                                   */
/*                     </tr>*/
/*                     </thead>*/
/*                   */
/*                 </table>*/
/*                 */
/*             {#</div>    */
/*         </div>#}*/
/*    {# </div>#}*/
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
/*     <div class="modal fade" id="myModalBorrar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">*/
/*         <div class="modal-dialog">*/
/*             <div class="modal-content">*/
/*                 <div class="modal-header bg-danger">*/
/*                     <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>*/
/*                      <h3 class="modal-title" id="myModaBorrarlLabel">Atencion!</h3>*/
/* */
/*                 </div>*/
/*                 <div class="modal-body" id="myModalBodyBorrar">*/
/*                      <h4> Esta seguro de borrar?</h4>*/
/*                      <input type="hidden" name="tbxIdPerfil" id="tbxIdPerfil">*/
/*                 </div>*/
/*                 <!--/modal-body-collapse -->*/
/*                 <div class="modal-footer">*/
/*                     <button type="button" class="btn btn-danger" id="btnConfirmaBorrar" onclick="frmBorrar()">Si</button>*/
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
/*     <!-- Modal -->*/
/*     <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">*/
/*         <div class="modal-dialog modal-lg" role="document">*/
/*             <div class="modal-content modal-lg">*/
/*                 <div class="modal-header bg-primary">*/
/*                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>*/
/*                     <h4 class="modal-title" id="myModalLabel">Perfil</h4>*/
/*                 </div>*/
/*                 <div class="modal-body" id="myModalBody">                */
/*                     */
/*                             */
/*                 </div>*/
/*                 <div class="modal-footer">*/
/*                     <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>*/
/*                     <button type="button" class="btn btn-primary" onclick="frmSubmit()"  >Guardar Perfil</button>*/
/*                 </div>*/
/*             </div> <!-- /.modal-content -->*/
/*         </div> <!-- /.modal-dialog -->*/
/*     </div> <!-- /.modal -->*/
/* </div>*/
/* */
/* */
/* */
/* */
/* </form>*/
/* */
/* {% endblock %}*/
/* */
/* */
/* */
/* {% block javascript %}   */
/* */
/*     <script type="text/javascript">                                         */
/*         */
/*         var wins;*/
/*          */
/*         function frmBorrar() {            */
/*             //var objPanelFiltroAno = document.querySelector("#panelFiltroAno");            */
/*             var idPerfil= document.getElementById("tbxIdPerfil").value ;                        */
/*             url = Routing.generate('perfilRegistrar');            */
/*             document.thisform.action=url*/
/*             document.thisform.submit();            */
/*         }*/
/*             */
/*         */
/*         function operateFormatter(value, row, index) {*/
/*             return [*/
/*                 '<button id="btnModificar" name="btnModificar" type="button" class="modificar btn btn-primary btn-xs">Modificar</button>&nbsp;',*/
/*                 '<button id="btnBorrar" name="btnBorrar" type="button" class="borrar btn btn-primary btn-xs">Borrar</button>&nbsp;',*/
/*                 '<br><button id="btnActividadClave" name="btnActividadClave" type="button" class="actividad btn btn-info btn-xs">Actvidades Claves</button>',*/
/*                 */
/*             ].join('');*/
/*         }*/
/* */
/*         function opciones(value, row, index) {*/
/*             return [*/
/*                 '<div class="btn-group" role="group"><button type="button" class="modificar btn btn-xs btn-default" ><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>',*/
/*                 '<button type="button" class="borrar btn btn-xs btn-default" ><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>',*/
/*                 '</div>'*/
/*             ].join('');*/
/*             */
/*             //'<button id="btnModificar" name="btnModificar" type="button" class="btn btn-link btn-xs">Modificar</button>',*/
/*             //'<button id="btnBorrar" name="btnBorrar" type="button" class="btn btn-link btn-xs">Borrar</button>&nbsp;',*/
/*         }  */
/*         */
/*         function registrar(perfilId) {*/
/*                                             */
/*             wins = new dhtmlXWindows();*/
/*             skin="dhx_terrace";*/
/*             wins.setSkin(skin);*/
/* */
/*             winId="winPerfilRegistrar";*/
/* */
/*             wins.createWindow(winId, 1, 1, 780, 530);*/
/*             wins.window(winId).setText("Perfil");*/
/* */
/*             wins.window(winId).setModal(true);*/
/*             wins.window(winId).button("minmax").disable();                   */
/*             wins.window(winId).centerOnScreen();                   */
/*             wins.window(winId).progressOn();*/
/* */
/*             wins.window(winId).setIconCss("without_icon");*/
/* */
/*             var url=Routing.generate('perfilRegistrar', {'perfilId':perfilId});*/
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
/*             'click .modificar': function (e, value, row, index) {*/
/*                 registrar(row.id);*/
/* */
/*             },*/
/*             'click .borrar': function (e, value, row, index) {*/
/*                 $('#myModalBorrar').data('id', row.id).modal('show');*/
/*                 //alert('You click borrar icon, row: ' + JSON.stringify(row));*/
/*                 //console.log(value, row, index);*/
/*             },*/
/*             'click .remove': function (e, value, row, index) {*/
/*                 alert('You click remove icon, row: ' + JSON.stringify(row));*/
/*                 console.log(value, row, index);*/
/*             }*/
/*         };*/
/* */
/*         function cerrar() {*/
/*             winId="winPerfilRegistrar";*/
/*             wins.window(winId).close();*/
/*         }*/
/*         */
/*         function progress() {*/
/*             winId="winPerfilRegistrar";*/
/*             wins.window(winId).progressOn();*/
/*         }*/
/*         */
/*         function refreshTabla() {*/
/*             //alert("aca");*/
/*             var $table = $('#tblPerfil');*/
/*             $table.bootstrapTable('refresh');*/
/*         }*/
/*         */
/*         */
/*         */
/*     </script>*/
/* {% endblock %}*/
/* */
/* */
