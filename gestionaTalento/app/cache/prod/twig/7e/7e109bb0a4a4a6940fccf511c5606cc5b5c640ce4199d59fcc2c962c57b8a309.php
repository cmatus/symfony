<?php

/* GtSistemaBundle:Registrar:maeMenu.html.twig */
class __TwigTemplate_c4b976d9281357e2370a84932c1bdb8e28db129c1b85b7a6423ad86617f7cdb9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GtSistemaBundle::base.html.twig", "GtSistemaBundle:Registrar:maeMenu.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "GtSistemaBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo " gestionaTalento ";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
    <style>
                

                #undo {
                    text-align: center;
                    position: absolute;
                    white-space: nowrap;
                    border-width: 1px;
                    border-style: solid;
                    padding: 2em;
                    cursor: pointer;
                }

                @media screen and (max-width: 1023px) {
                    div.k-window {
                        display: none !important;
                    }
                }
            </style>
            
    <div class=\"container\">  
        
        
        
        <div class=\"center-block\" >

            <div class=\"panel panel-default\" >
                <div class=\"panel-heading\">Maestros</div>
                <div class=\"panel-body\">
                    <p class=\"text-warning\">Desde aqui podra mantener una base de datos de Cargos, Competencias, Conocimientos entre otros. Haga clic en el nombre de un maestro para ver un listado y podra agregar, modificar o eliminar. </p>


                </div>
            </div>

            <div class=\"row\">
                <div class=\"col-md-7\">

                    <div class=\"panel panel-primary\" >
                        <div class=\"panel-heading\">Maestros</div>
                        <div class=\"panel-body\"> 

                            
                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                    <div class=\"media\">
                                        <div class=\"media-left media-middle\">
                                          <a href=\"#\">
                                            <img class=\"media-object\" src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/perfiles.png"), "html", null, true);
        echo "\" alt=\"...\" style=\" height: 40px\">
                                          </a>
                                        </div>
                                        <div class=\"media-body\" style=\"vertical-align: middle\">
                                          ";
        // line 60
        echo "                                          ";
        // line 61
        echo "                                          <button type=\"button\" class=\"btn btn-link btn-xs\" onclick=\"mae('1', 'mae')\" data-toggle=\"modal\" >Perfiles de cargo</button>
                                        </div>
                                    </div>
                                </div>
                                          
                                <div class=\"col-md-4\">
                                    <div class=\"media\">
                                        <div class=\"media-left media-middle\">
                                          <a href=\"#\">
                                            <img class=\"media-object\" src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/cursos.png"), "html", null, true);
        echo "\" alt=\"...\" style=\" height: 40px\">
                                          </a>
                                        </div>
                                        <div class=\"media-body\" style=\"vertical-align: middle\">
                                          ";
        // line 75
        echo "                                          <button type=\"button\" class=\"btn btn-link btn-xs\" onclick=\"mae('9', 'mae')\" data-toggle=\"modal\" >Cursos</button>
                                        </div>
                                    </div>                                    
                                </div>   
                                          
                            </div>
                                      <br/>
                           <div class=\"row\">
                                <div class=\"col-md-6\">
                                <div class=\"media\">
                                    <div class=\"media-left media-middle\">
                                      <a href=\"#\">
                                        <img class=\"media-object\" src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/personas.png"), "html", null, true);
        echo "\" alt=\"...\" style=\" height: 40px\">
                                      </a>
                                    </div>
                                    <div class=\"media-body\" style=\"vertical-align: middle\">
                                      ";
        // line 92
        echo "                                      <button type=\"button\" class=\"btn btn-link btn-xs\" onclick=\"mae('2', 'mae')\" data-toggle=\"modal\" >Personas</button>
                                    </div>
                                  </div>
                                </div>
                                      
                                      
                              ";
        // line 111
        echo "                                                                                                  
                            </div>

                            <br/>    
                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                <div class=\"media\">
                                    <div class=\"media-left media-middle\">
                                      <a href=\"#\">
                                        <img class=\"media-object\" src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/competencias.png"), "html", null, true);
        echo "\" alt=\"...\" style=\" height: 40px\">
                                      </a>
                                    </div>
                                    <div class=\"media-body\" style=\"vertical-align: middle \">
                                      ";
        // line 125
        echo "                                      <button type=\"button\" class=\"btn btn-link btn-xs\" onclick=\"mae('3', 'mae')\" data-toggle=\"modal\" >UCL's</button>
                                    </div>
                                  </div>
                                </div>
                           
                                      
                            <div class=\"col-md-6\">
                                <div class=\"media\">
                                <div class=\"media-left media-middle\">
                                  <a href=\"#\">
                                    <img class=\"media-object\" src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/preguntas.png"), "html", null, true);
        echo "\" alt=\"...\" style=\" height: 40px\">
                                  </a>
                                </div>
                                <div class=\"media-body\" style=\"vertical-align: middle\">                                      
                                    ";
        // line 140
        echo "                                  <button type=\"button\" class=\"btn btn-link btn-xs\"  onclick=\"des()\"  data-toggle=\"modal\" >Cuestionario de Evaluacion</button>
                                </div>
                              </div>
                            </div>  
                                      
                           </div>            
                            
                       <br/>              
                        <div class=\"row\">
                                <div class=\"col-md-6\">
                                <div class=\"media\">
                                    <div class=\"media-left media-middle\">
                                      <a href=\"#\">
                                        <img class=\"media-object\" src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/conocimientos.png"), "html", null, true);
        echo "\" alt=\"...\" style=\" height: 40px\">
                                      </a>
                                    </div>
                                    <div class=\"media-body\" style=\"vertical-align: middle \">
                                      ";
        // line 158
        echo "                                      <button type=\"button\" class=\"btn btn-link btn-xs\" onclick=\"mae('6', 'mae')\" data-toggle=\"modal\" >Competencias Conductuales</button>
                                    </div>
                                  </div>
                                </div>
                                      
                            <div class=\"col-md-6\">
                                <div class=\"media\">
                                <div class=\"media-left media-middle\">
                                  <a href=\"#\">
                                    <img class=\"media-object\" src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/preguntas.png"), "html", null, true);
        echo "\" alt=\"...\" style=\" height: 40px\">
                                  </a>
                                </div>
                                <div class=\"media-body\" style=\"vertical-align: middle\">                                      
                                    ";
        // line 172
        echo "                                  <button type=\"button\" class=\"btn btn-link btn-xs\"  onclick=\"mae('11', 'mae')\"  data-toggle=\"modal\" >Evaluaciones</button>
                                </div>
                              </div>
                            </div> 
                                  
                                  
                            </div>
                                      
                        
                        </div>
                    </div>                        
                </div>
                
            </div>
            
        </div>        
    </div>
    
    
    <!-- window participantes -->
    <div class=\"modal fade\" id=\"vtnPregunta\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-lg\">
            <div class=\"modal-content modal-lg\" >
                <div class=\"modal-header bg-info\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                    <h4 class=\"modal-title\">Factura Electronica</h4>
                </div>
                <div class=\"modal-body\" id=\"myModalPersonasBody\" style=\"margin: 0px 0px 0px 0px;  padding: 0px 0px 0px 0px\">
                    <iframe id=\"frmPregunta\" src=\"\" frameborder=\"0\"  ></iframe>
                </div>
            </div> <!-- /.modal-content -->
        </div> <!-- /.modal-dialog -->
    </div> <!-- /.modal -->
    
    
     
            
            <div id=\"windowcontainer\"></div>
    
           <script>
               
               
               



                ";
        // line 244
        echo "            </script>

            <style>

                #example
                {
                    min-height:500px;
                }

                #undo {
                    text-align: center;
                    position: absolute;
                    white-space: nowrap;
                    padding: 1em;
                    cursor: pointer;
                }
                .armchair {
                \tfloat: left;
                \tmargin: 30px 30px 120px 30px;
                \ttext-align: center;
                }
                .armchair img {
                    display: block;
                    margin-bottom: 10px;
                }
                
                @media screen and (max-width: 1023px) {
                    div.k-window {
                        display: none !important;
                    }
                }
            </style>
    </div>
    
";
    }

    // line 280
    public function block_javascript($context, array $blocks = array())
    {
        echo "   

    <script type=\"text/javascript\">
    
        function des() {
            alert(\"opcion en desarrollo\");
        }
        
    </script>
    <script src=\"";
        // line 289
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/mae/maeFunciones.js?ver=1.2"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 290
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/comFunciones.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    
            
            
";
    }

    public function getTemplateName()
    {
        return "GtSistemaBundle:Registrar:maeMenu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  326 => 290,  322 => 289,  309 => 280,  271 => 244,  223 => 172,  216 => 167,  205 => 158,  198 => 153,  183 => 140,  176 => 135,  164 => 125,  157 => 120,  146 => 111,  138 => 92,  131 => 87,  117 => 75,  110 => 70,  99 => 61,  97 => 60,  90 => 55,  39 => 6,  36 => 5,  30 => 2,  11 => 1,);
    }
}
/* {% extends 'GtSistemaBundle::base.html.twig' %}*/
/* {% block title %} gestionaTalento {% endblock %}*/
/* */
/* */
/* {% block body %}*/
/* */
/*     <style>*/
/*                 */
/* */
/*                 #undo {*/
/*                     text-align: center;*/
/*                     position: absolute;*/
/*                     white-space: nowrap;*/
/*                     border-width: 1px;*/
/*                     border-style: solid;*/
/*                     padding: 2em;*/
/*                     cursor: pointer;*/
/*                 }*/
/* */
/*                 @media screen and (max-width: 1023px) {*/
/*                     div.k-window {*/
/*                         display: none !important;*/
/*                     }*/
/*                 }*/
/*             </style>*/
/*             */
/*     <div class="container">  */
/*         */
/*         */
/*         */
/*         <div class="center-block" >*/
/* */
/*             <div class="panel panel-default" >*/
/*                 <div class="panel-heading">Maestros</div>*/
/*                 <div class="panel-body">*/
/*                     <p class="text-warning">Desde aqui podra mantener una base de datos de Cargos, Competencias, Conocimientos entre otros. Haga clic en el nombre de un maestro para ver un listado y podra agregar, modificar o eliminar. </p>*/
/* */
/* */
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="row">*/
/*                 <div class="col-md-7">*/
/* */
/*                     <div class="panel panel-primary" >*/
/*                         <div class="panel-heading">Maestros</div>*/
/*                         <div class="panel-body"> */
/* */
/*                             */
/*                             <div class="row">*/
/*                                 <div class="col-md-6">*/
/*                                     <div class="media">*/
/*                                         <div class="media-left media-middle">*/
/*                                           <a href="#">*/
/*                                             <img class="media-object" src="{{ asset('images/perfiles.png') }}" alt="..." style=" height: 40px">*/
/*                                           </a>*/
/*                                         </div>*/
/*                                         <div class="media-body" style="vertical-align: middle">*/
/*                                           {#<h4 class="media-heading">Middle aligned media</h4>#}*/
/*                                           {#<button type="button" class="btn btn-link btn-xs" onclick="javascript:location.href='{{path('perfilRegistrar')}}'" data-toggle="modal" >Perfiles de cargo</button>#}*/
/*                                           <button type="button" class="btn btn-link btn-xs" onclick="mae('1', 'mae')" data-toggle="modal" >Perfiles de cargo</button>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                           */
/*                                 <div class="col-md-4">*/
/*                                     <div class="media">*/
/*                                         <div class="media-left media-middle">*/
/*                                           <a href="#">*/
/*                                             <img class="media-object" src="{{ asset('images/cursos.png') }}" alt="..." style=" height: 40px">*/
/*                                           </a>*/
/*                                         </div>*/
/*                                         <div class="media-body" style="vertical-align: middle">*/
/*                                           {#<h4 class="media-heading">Middle aligned media</h4>#}*/
/*                                           <button type="button" class="btn btn-link btn-xs" onclick="mae('9', 'mae')" data-toggle="modal" >Cursos</button>*/
/*                                         </div>*/
/*                                     </div>                                    */
/*                                 </div>   */
/*                                           */
/*                             </div>*/
/*                                       <br/>*/
/*                            <div class="row">*/
/*                                 <div class="col-md-6">*/
/*                                 <div class="media">*/
/*                                     <div class="media-left media-middle">*/
/*                                       <a href="#">*/
/*                                         <img class="media-object" src="{{ asset('images/personas.png') }}" alt="..." style=" height: 40px">*/
/*                                       </a>*/
/*                                     </div>*/
/*                                     <div class="media-body" style="vertical-align: middle">*/
/*                                       {#<h4 class="media-heading">Middle aligned media</h4>#}*/
/*                                       <button type="button" class="btn btn-link btn-xs" onclick="mae('2', 'mae')" data-toggle="modal" >Personas</button>*/
/*                                     </div>*/
/*                                   </div>*/
/*                                 </div>*/
/*                                       */
/*                                       */
/*                               {#  <div class="col-md-4">*/
/*                                     <div class="media">*/
/*                                     <div class="media-left media-middle">*/
/*                                       <a href="#">*/
/*                                         <img class="media-object" src="{{ asset('images/clientes.png') }}" alt="..." style=" height: 40px">*/
/*                                       </a>*/
/*                                     </div>*/
/*                                     <div class="media-body" style="vertical-align: middle">                                      */
/*                                       <button type="button" class="btn btn-link btn-xs" onclick="mae('8', 'mae')" data-toggle="modal" >Clientes</button>*/
/*                                     </div>*/
/*                                   </div>*/
/*                                 </div>*/
/*                                 #}*/
/*                                                                                                   */
/*                             </div>*/
/* */
/*                             <br/>    */
/*                             <div class="row">*/
/*                                 <div class="col-md-6">*/
/*                                 <div class="media">*/
/*                                     <div class="media-left media-middle">*/
/*                                       <a href="#">*/
/*                                         <img class="media-object" src="{{ asset('images/competencias.png') }}" alt="..." style=" height: 40px">*/
/*                                       </a>*/
/*                                     </div>*/
/*                                     <div class="media-body" style="vertical-align: middle ">*/
/*                                       {#<h4 class="media-heading">Middle aligned media</h4>#}*/
/*                                       <button type="button" class="btn btn-link btn-xs" onclick="mae('3', 'mae')" data-toggle="modal" >UCL's</button>*/
/*                                     </div>*/
/*                                   </div>*/
/*                                 </div>*/
/*                            */
/*                                       */
/*                             <div class="col-md-6">*/
/*                                 <div class="media">*/
/*                                 <div class="media-left media-middle">*/
/*                                   <a href="#">*/
/*                                     <img class="media-object" src="{{ asset('images/preguntas.png') }}" alt="..." style=" height: 40px">*/
/*                                   </a>*/
/*                                 </div>*/
/*                                 <div class="media-body" style="vertical-align: middle">                                      */
/*                                     {# onclick="javascript:location.href='{{path('pregunta', {'preguntaTipoId':'1'})}}'"#}*/
/*                                   <button type="button" class="btn btn-link btn-xs"  onclick="des()"  data-toggle="modal" >Cuestionario de Evaluacion</button>*/
/*                                 </div>*/
/*                               </div>*/
/*                             </div>  */
/*                                       */
/*                            </div>            */
/*                             */
/*                        <br/>              */
/*                         <div class="row">*/
/*                                 <div class="col-md-6">*/
/*                                 <div class="media">*/
/*                                     <div class="media-left media-middle">*/
/*                                       <a href="#">*/
/*                                         <img class="media-object" src="{{ asset('images/conocimientos.png') }}" alt="..." style=" height: 40px">*/
/*                                       </a>*/
/*                                     </div>*/
/*                                     <div class="media-body" style="vertical-align: middle ">*/
/*                                       {#<h4 class="media-heading">Middle aligned media</h4>#}*/
/*                                       <button type="button" class="btn btn-link btn-xs" onclick="mae('6', 'mae')" data-toggle="modal" >Competencias Conductuales</button>*/
/*                                     </div>*/
/*                                   </div>*/
/*                                 </div>*/
/*                                       */
/*                             <div class="col-md-6">*/
/*                                 <div class="media">*/
/*                                 <div class="media-left media-middle">*/
/*                                   <a href="#">*/
/*                                     <img class="media-object" src="{{ asset('images/preguntas.png') }}" alt="..." style=" height: 40px">*/
/*                                   </a>*/
/*                                 </div>*/
/*                                 <div class="media-body" style="vertical-align: middle">                                      */
/*                                     {# onclick="javascript:location.href='{{path('pregunta', {'preguntaTipoId':'1'})}}'"#}*/
/*                                   <button type="button" class="btn btn-link btn-xs"  onclick="mae('11', 'mae')"  data-toggle="modal" >Evaluaciones</button>*/
/*                                 </div>*/
/*                               </div>*/
/*                             </div> */
/*                                   */
/*                                   */
/*                             </div>*/
/*                                       */
/*                         */
/*                         </div>*/
/*                     </div>                        */
/*                 </div>*/
/*                 */
/*             </div>*/
/*             */
/*         </div>        */
/*     </div>*/
/*     */
/*     */
/*     <!-- window participantes -->*/
/*     <div class="modal fade" id="vtnPregunta" tabindex="-1" role="dialog" aria-hidden="true">*/
/*         <div class="modal-dialog modal-lg">*/
/*             <div class="modal-content modal-lg" >*/
/*                 <div class="modal-header bg-info">*/
/*                     <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>*/
/*                     <h4 class="modal-title">Factura Electronica</h4>*/
/*                 </div>*/
/*                 <div class="modal-body" id="myModalPersonasBody" style="margin: 0px 0px 0px 0px;  padding: 0px 0px 0px 0px">*/
/*                     <iframe id="frmPregunta" src="" frameborder="0"  ></iframe>*/
/*                 </div>*/
/*             </div> <!-- /.modal-content -->*/
/*         </div> <!-- /.modal-dialog -->*/
/*     </div> <!-- /.modal -->*/
/*     */
/*     */
/*      */
/*             */
/*             <div id="windowcontainer"></div>*/
/*     */
/*            <script>*/
/*                */
/*                */
/*                */
/* */
/* */
/* */
/*                 {#$(document).ready(function() {*/
/*                     var myWindow = $("#window"),*/
/*                         undo = $("#undo");*/
/* */
/*                     undo.click(function() {*/
/*                         myWindow.data("kendoWindow").open();*/
/*                         undo.fadeOut();*/
/*                     });*/
/* */
/*                     function onClose() {*/
/*                         undo.fadeIn();*/
/*                     }*/
/* */
/*                     myWindow.kendoWindow({*/
/*                         width: "600px",*/
/*                         title: "About Alvar Aalto",*/
/*                         visible: false,*/
/*                         actions: [*/
/*                             "Pin",*/
/*                             "Minimize",*/
/*                             "Maximize",*/
/*                             "Close"*/
/*                         ],*/
/*                         close: onClose*/
/*                     }).data("kendoWindow").center().open();*/
/*                 });#}*/
/*             </script>*/
/* */
/*             <style>*/
/* */
/*                 #example*/
/*                 {*/
/*                     min-height:500px;*/
/*                 }*/
/* */
/*                 #undo {*/
/*                     text-align: center;*/
/*                     position: absolute;*/
/*                     white-space: nowrap;*/
/*                     padding: 1em;*/
/*                     cursor: pointer;*/
/*                 }*/
/*                 .armchair {*/
/*                 	float: left;*/
/*                 	margin: 30px 30px 120px 30px;*/
/*                 	text-align: center;*/
/*                 }*/
/*                 .armchair img {*/
/*                     display: block;*/
/*                     margin-bottom: 10px;*/
/*                 }*/
/*                 */
/*                 @media screen and (max-width: 1023px) {*/
/*                     div.k-window {*/
/*                         display: none !important;*/
/*                     }*/
/*                 }*/
/*             </style>*/
/*     </div>*/
/*     */
/* {% endblock %}*/
/* */
/* {% block javascript %}   */
/* */
/*     <script type="text/javascript">*/
/*     */
/*         function des() {*/
/*             alert("opcion en desarrollo");*/
/*         }*/
/*         */
/*     </script>*/
/*     <script src="{{ asset('js/mae/maeFunciones.js?ver=1.2') }}" type="text/javascript"></script>*/
/*     <script src="{{ asset('js/comFunciones.js') }}" type="text/javascript"></script>*/
/*     */
/*             */
/*             */
/* {% endblock %}*/
/* */
/* */
/* */
/* */
/* */
