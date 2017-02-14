<?php

/* GtSistemaBundle:Registrar:maeMenu.html.twig */
class __TwigTemplate_c9dc3fb50204cf118acb18fbf197dadb7b3bf2c41628178085894e85542e2c16 extends Twig_Template
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
        $__internal_30ad63b8b4d993418b1cc3862eaa7fa73893e6f522fe3cb85be6ec80ba07ae13 = $this->env->getExtension("native_profiler");
        $__internal_30ad63b8b4d993418b1cc3862eaa7fa73893e6f522fe3cb85be6ec80ba07ae13->enter($__internal_30ad63b8b4d993418b1cc3862eaa7fa73893e6f522fe3cb85be6ec80ba07ae13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GtSistemaBundle:Registrar:maeMenu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30ad63b8b4d993418b1cc3862eaa7fa73893e6f522fe3cb85be6ec80ba07ae13->leave($__internal_30ad63b8b4d993418b1cc3862eaa7fa73893e6f522fe3cb85be6ec80ba07ae13_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_4c82b1bced3958a8daf21ab72eaf88de182532f09fef59922110e386a174099f = $this->env->getExtension("native_profiler");
        $__internal_4c82b1bced3958a8daf21ab72eaf88de182532f09fef59922110e386a174099f->enter($__internal_4c82b1bced3958a8daf21ab72eaf88de182532f09fef59922110e386a174099f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " gestionaTalento ";
        
        $__internal_4c82b1bced3958a8daf21ab72eaf88de182532f09fef59922110e386a174099f->leave($__internal_4c82b1bced3958a8daf21ab72eaf88de182532f09fef59922110e386a174099f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b7bac1db6d71c17a6e4a8c7799e17202a9075f71029d10c16adc09157300f85e = $this->env->getExtension("native_profiler");
        $__internal_b7bac1db6d71c17a6e4a8c7799e17202a9075f71029d10c16adc09157300f85e->enter($__internal_b7bac1db6d71c17a6e4a8c7799e17202a9075f71029d10c16adc09157300f85e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b7bac1db6d71c17a6e4a8c7799e17202a9075f71029d10c16adc09157300f85e->leave($__internal_b7bac1db6d71c17a6e4a8c7799e17202a9075f71029d10c16adc09157300f85e_prof);

    }

    // line 280
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_ac091bf1cde71b3cc933f0963c6ede65ffeaa9d93da85fcb5f69aa54cf053571 = $this->env->getExtension("native_profiler");
        $__internal_ac091bf1cde71b3cc933f0963c6ede65ffeaa9d93da85fcb5f69aa54cf053571->enter($__internal_ac091bf1cde71b3cc933f0963c6ede65ffeaa9d93da85fcb5f69aa54cf053571_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

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
        
        $__internal_ac091bf1cde71b3cc933f0963c6ede65ffeaa9d93da85fcb5f69aa54cf053571->leave($__internal_ac091bf1cde71b3cc933f0963c6ede65ffeaa9d93da85fcb5f69aa54cf053571_prof);

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
        return array (  347 => 290,  343 => 289,  327 => 280,  286 => 244,  238 => 172,  231 => 167,  220 => 158,  213 => 153,  198 => 140,  191 => 135,  179 => 125,  172 => 120,  161 => 111,  153 => 92,  146 => 87,  132 => 75,  125 => 70,  114 => 61,  112 => 60,  105 => 55,  54 => 6,  48 => 5,  36 => 2,  11 => 1,);
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
