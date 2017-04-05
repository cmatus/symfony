<?php

/* GtSistemaBundle:Registrar:perfilRegistrar.html.twig */
class __TwigTemplate_c4d165f7067779194d92c1e4a0954ce3bb7e718628fea3db8f7d87fd70d1b4bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GtSistemaBundle::basePop.html.twig", "GtSistemaBundle:Registrar:perfilRegistrar.html.twig", 1);
        $this->blocks = array(
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
        $__internal_1a2a92471d9cde749bb06e2e1d10ced9713d7be66618f095fc4874289c7fad8d = $this->env->getExtension("native_profiler");
        $__internal_1a2a92471d9cde749bb06e2e1d10ced9713d7be66618f095fc4874289c7fad8d->enter($__internal_1a2a92471d9cde749bb06e2e1d10ced9713d7be66618f095fc4874289c7fad8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GtSistemaBundle:Registrar:perfilRegistrar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a2a92471d9cde749bb06e2e1d10ced9713d7be66618f095fc4874289c7fad8d->leave($__internal_1a2a92471d9cde749bb06e2e1d10ced9713d7be66618f095fc4874289c7fad8d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ace62b930ff008ded55f25dde8772584ce1d50e2056cd8ae38fc9838ef840e66 = $this->env->getExtension("native_profiler");
        $__internal_ace62b930ff008ded55f25dde8772584ce1d50e2056cd8ae38fc9838ef840e66->enter($__internal_ace62b930ff008ded55f25dde8772584ce1d50e2056cd8ae38fc9838ef840e66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <style>
        .popover-footer{
            padding: 6px 14px;
            background-color: #f7f7f7;
            border-top: 1px solid #ebebeb;
            text-align: right;
        }
                          
        .bootstrap-table .table,
        .bootstrap-table .table > tbody > tr > th,
        .bootstrap-table .table > tfoot > tr > th,            
        .bootstrap-table .table > tbody > tr > td,
        .bootstrap-table .table > tfoot > tr > td {            
            padding: 2px !important;
            vertical-align: top;
            overflow: hidden;
            text-overflow: ellipsis;
            //white-space: nowrap;
            font-size:11.5px;
           
        }
        
        .fixed-table-container thead th .th-inner {
            padding: 2px !important;        
            font-size:12px;
        }
        
        #editorObj {
                width: 100%;
                height: 100px;
                border: 1px solid #a4bed4;
        }
                 
        
\t\tdiv#layoutObj {
\t\t\tposition: relative;
\t\t\tmargin-top: 20px;
\t\t\tmargin-left: 20px;
\t\t\twidth: 600px;
\t\t\theight: 400px;
\t\t}
\t
                
    </style>


    <form ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" action=\"#\" >

    ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

    ";
        // line 55
        $context["guardado"] = false;
        // line 56
        echo "
        ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 58
            echo "            <div class=\"flash-notice\">                              
                <div class=\"alert alert-success alert-dismissible\" role=\"alert\" style=\"padding-bottom:0px; padding-top: 0px; margin-bottom: 3px\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\" ><span aria-hidden=\"true\">&times;</span></button>
                    ";
            // line 61
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                    ";
            // line 62
            $context["guardado"] = true;
            // line 63
            echo "                </div>                               
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "
                    ";
        // line 71
        echo "
                    
                   
                    <div class=\"container-fluid\">

          ";
        // line 81
        echo "
    
                <div id=\"dvDatosCargo\">    
                    ";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "id", array()), 'widget');
        echo "
                    ";
        // line 85
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "id", array()), 'errors');
        echo "
                    ";
        // line 91
        echo "                    <p>
                       <label for=\"tbxPerfilNombre\">Nombre del Cargo</label>                           
                       ";
        // line 93
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "perfilNombre", array()), 'widget');
        echo " 
                       ";
        // line 94
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "perfilNombre", array()), 'errors');
        echo "
                    </p>
                    <p>
                        <label for=\"tbxPerfilDefinicion\">Objetivo del Cargo</label>                        
                        ";
        // line 98
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "perfilObjetivo", array()), 'widget');
        echo " 
                        ";
        // line 99
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "perfilObjetivo", array()), 'errors');
        echo "
                    </p>
                    <p>
                       <label for=\"tbxPerfilNombre\">Reporta a:</label>    
                       ";
        // line 103
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "perfilReporta", array()), 'widget');
        echo " 
                       ";
        // line 104
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "perfilReporta", array()), 'errors');
        echo "
                    </p>
                </div>
 <label >Tareas o Responsabilidades</label>  
 ";
        // line 109
        echo " 
";
        // line 110
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "perfilTareas", array()), 'widget');
        echo " 
";
        // line 111
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "perfilTareas", array()), 'errors');
        echo "
 
 <label >UCL's y Competencias Conductuales</label>  
 
 <table style=\"\"><tr><td>
                    ";
        // line 117
        echo "                    
                        <table id=\"tblCompetencia\"
                               data-toggle=\"table\" 
                               data-cache=\"false\" 
                               data-height=\"200\" 
                               data-show-header=\"true\" 
                               data-checkbox-header=\"false\"
                               data-url=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("perfilCompetenciaTabla", array("perfilId" => (isset($context["perfilId"]) ? $context["perfilId"] : $this->getContext($context, "perfilId")))), "html", null, true);
        echo "\">
                            <thead class=\"bg-info\">
                                <tr>                                                                
                                    <th data-field=\"perfilCompetenciaAsociada\" data-checkbox=\"true\" data-formatter=\"stateFormatter\" ></th>
                                    <th data-field=\"id\" data-visible=\"false\" ></th>
                                    <th data-field=\"competenciaCodigo\" data-sortable=\"true\" data-visible=\"false\" data-width=\"100\">Codigo</th>
                                    <th data-field=\"competenciaNombre\" data-sortable=\"true\" data-width=\"330\">UCL</th>
                                </tr>                                
                            </thead>                         
                        </table>
                        <input type=\"hidden\" name=\"tbxCompetenciaIds\" id=\"tbxCompetenciaIds\" >
                            </td><td>&nbsp;</td><td>
                           
                           
                               ";
        // line 139
        echo "                                <table id=\"tblConocimiento\" 
                                       data-toggle=\"table\" 
                                        data-cache=\"false\"
                                       data-height=\"200\" 
                                       data-show-header=\"true\" 
                                       data-checkbox-header=\"false\"
                                       data-url=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("perfilConocimientoTabla", array("perfilId" => (isset($context["perfilId"]) ? $context["perfilId"] : $this->getContext($context, "perfilId")))), "html", null, true);
        echo "\">
                            <thead class=\"bg-info\">
                                <tr>                                                                
                                    <th data-field=\"perfilConocimientoAsociada\" data-checkbox=\"true\" data-formatter=\"stateFormatter\" ></th>
                                    <th data-field=\"id\" data-visible=\"false\" ></th>
                                    <th data-field=\"conocimientoCodigo\" data-sortable=\"true\" data-visible=\"false\" data-width=\"100\">Codigo</th>
                                    <th data-field=\"conocimientoNombre\" data-sortable=\"true\" data-width=\"330\">Competencia</th>
                                </tr>                                
                            </thead>                         
                        </table>
                        <input type=\"hidden\" name=\"tbxConocimientoIds\" id=\"tbxConocimientoIds\" >
                            </td>
                        </tr>
                    </table>
                            
                            
                    
                       
                    
                      

               ";
        // line 168
        echo "  

               <br>
               <div style=\"float:right\">
                <button type=\"button\" class=\"btn btn-sm btn-default\" data-dismiss=\"modal\" onclick=\"parent.cerrar()\">Cerrar</button>
                ";
        // line 173
        if ((isset($context["guardado"]) ? $context["guardado"] : $this->getContext($context, "guardado"))) {
            // line 174
            echo "                    <button type=\"button\" id=\"btnOtro\" name=\"btnOtro\" class=\"btn btn-sm btn-primary\" onclick=\"formAccion(1, '0')\">Agregar Otro</button>
                    <script type=\"text/javascript\">
                        window.parent.refreshTabla();
                    </script>

                ";
        }
        // line 180
        echo "                <button type=\"submit\" id=\"btnGuardar\" name=\"btnGuardar\" class=\"btn btn-sm btn-primary\">Guardar</button>
               </div>
               
                        </div>
                       



";
        // line 188
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
</form>
";
        
        $__internal_ace62b930ff008ded55f25dde8772584ce1d50e2056cd8ae38fc9838ef840e66->leave($__internal_ace62b930ff008ded55f25dde8772584ce1d50e2056cd8ae38fc9838ef840e66_prof);

    }

    // line 192
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_95421cb895b80a015c1bc87fc6b3451e786f44fdafdb1acc2aa66bbf949cf675 = $this->env->getExtension("native_profiler");
        $__internal_95421cb895b80a015c1bc87fc6b3451e786f44fdafdb1acc2aa66bbf949cf675->enter($__internal_95421cb895b80a015c1bc87fc6b3451e786f44fdafdb1acc2aa66bbf949cf675_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        echo " 
        <script type=\"text/javascript\">
            var wins;
            
            
            \$( \"form\" ).submit(function( event ) {
                try{                  
                        var form = \$('form')[0];
                        if (form.checkValidity()) {
                            //winFac.progressOn();
                            console.log('valid');
                            var  perfilId=\"";
        // line 203
        echo twig_escape_filter($this->env, (isset($context["perfilId"]) ? $context["perfilId"] : $this->getContext($context, "perfilId")), "html", null, true);
        echo "\";
                            var data = JSON.stringify(\$(\"#tblCompetencia\").bootstrapTable('getSelections')) 
                            var json = JSON.parse(data);
                            var arr = [];
                            var ids=\"\";
                            for(var row in json){               
                                //alert(json[row][\"id\"]);
                                ids+=json[row][\"id\"]+\",\";
                            }
                            
                            document.getElementById(\"tbxCompetenciaIds\").value=ids;
                            
                            var data = JSON.stringify(\$(\"#tblConocimiento\").bootstrapTable('getSelections')) 
                            var json = JSON.parse(data);
                            var arr = [];
                            var ids=\"\";
                            for(var row in json){               
                                //alert(json[row][\"id\"]);
                                ids+=json[row][\"id\"]+\",\";
                            }
                            
                            document.getElementById(\"tbxConocimientoIds\").value=ids;
                           
                            url=Routing.generate('perfilRegistrar', {'perfilId': perfilId});
                            form.action=url;
                            form.submit();
                            
                        } else {
                            //alert(form.checkValidity());
                            //\$( \"#btnTimbrar\" ).trigger( \"click\" );
                        }
                        
                    /*if ( \$( \"input:first\" ).val() === \"correct\" ) {
                      \$( \"span\" ).text( \"Validated...\" ).show();
                      return;
                    }

                    \$( \"span\" ).text( \"Not valid!\" ).show().fadeOut( 1000 );*/
                    event.preventDefault();

                } catch(err) {
                    alert(\"Error\" + err.description)
                    event.preventDefault();
                }

              });
                                  
                                  
                                  
            function formAccion(accionId, maeRegistroId) {
                objParametros = [{
                                 
                    }];

                var jsnParametros = JSON.stringify(objParametros);
                
                var parametros = {'maeParametros': jsnParametros};

                switch (accionId) {
                    case 1:
                        window.parent.winProgress(wins, \"winPersonaRegistrar\", 1);
                        var url = Routing.generate('maestroRegistrar', parametros);
                        document.location.href = url;
                        break
                    case 2:
                        var form = \$('form')[0];
                        if (form.checkValidity()) {
                            window.parent.progress(); //winProgress(wins, \"winPersonaRegistrar\", 1);
                            console.log('valid');
                                                        
                            var data = JSON.stringify(\$(\"#tblCompetencia\").bootstrapTable('getSelections')) 
                            var json = JSON.parse(data);
                            var arr = [];
                            var ids=\"\";
                            for(var row in json){               
                                //alert(json[row][\"id\"]);
                                ids+=json[row][\"id\"]+\",\";
                            }
                            document.getElementById(\"tbxCompetenciaIds\").value=ids;
                            
                            var data = JSON.stringify(\$(\"#tblConocimiento\").bootstrapTable('getSelections')) 
                            var json = JSON.parse(data);
                            var arr = [];
                            var ids=\"\";
                            for(var row in json){               
                                //alert(json[row][\"id\"]);
                                ids+=json[row][\"id\"]+\",\";
                            }
                            document.getElementById(\"tbxConocimientoIds\").value=ids;


                            var url = Routing.generate('maestroRegistrar', parametros);
                            form.action=url;
                            form.submit();
                        }
                }

            }
            
            function stateFormatter(value, row, index) {
            
                if (row.perfilCompetenciaAsociada==\"1\") {
                    return { checked: true };
                }

                if (row.perfilConocimientoAsociada==\"1\") {
                    return { checked: true };
                }                    
            }
      
      
      
            var myEditor;
            
            function doOnLoad() {
                   //alert(\"aca 3\");
                    var myEditorSkin = \"dhx_skyblue\";
                    myEditor = new dhtmlXEditor({
                            parent: \"editorObj\",
                            toolbar: true, // force dhtmlxToolbar using
                            iconsPath: \"";
        // line 323
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/skins/skyblue/imgs"), "html", null, true);
        echo "\", // path for toolbar icons
                            skin: myEditorSkin,
                            content: 'xxxxxx'
                    });
            }
            
            
            \t";
        // line 335
        echo "\t\t
\t\tfunction doOnLoadLayout() {
\t\t\t
\t\t\tskin = \"dhx_terrace\";
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\tmyLayout = new dhtmlXLayoutObject({
\t\t\t\tparent: \"layoutObj\",
\t\t\t\tpattern: \"4J\",
\t\t\t\tskin: skin,
\t\t\t\tcells: [{id: \"a\", header: true}]
\t\t\t});
\t\t\t
                        myLayout.cells(\"a\").setText(\"Descriptor de Cargo\");
                        myLayout.cells(\"b\").setText(\"Tareas o Responsabilidades\");
                        myLayout.cells(\"c\").setText(\"Competencias\");
                        myLayout.cells(\"d\").setText(\"Conocimientos\");
                        
                        myEditor = myLayout.cells(\"b\").attachEditor({ toolbar: true, // force dhtmlxToolbar using
                            iconsPath: \"";
        // line 353
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/skins/tarrace/imgs"), "html", null, true);
        echo "\", // path for toolbar icons
                            skin: skin});
                        
\t\t\t//\t\t\t\t\t\t
                        
                        myLayout.cells(\"a\").appendObject(\"dvDatosCargo\");
\t\t\t//myLayout.cells(\"c\").appendObject(\"tblCompetencia\");
                        //myLayout.cells(\"d\").appendObject(\"tblConocimiento\");
                        
                        myLayout.attachStatusBar({text: \"Status bar can be here\"});
                        
                        
\t\t}
                
                
                
            \$( document ).ready(function() {
                //doOnLoad();
                //doOnLoadLayout();
            });
            
                
        </script>  

        <script src=\"";
        // line 377
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/mae/maeFunciones.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 378
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/comFunciones.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

    ";
        
        $__internal_95421cb895b80a015c1bc87fc6b3451e786f44fdafdb1acc2aa66bbf949cf675->leave($__internal_95421cb895b80a015c1bc87fc6b3451e786f44fdafdb1acc2aa66bbf949cf675_prof);

    }

    public function getTemplateName()
    {
        return "GtSistemaBundle:Registrar:perfilRegistrar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  500 => 378,  496 => 377,  469 => 353,  449 => 335,  439 => 323,  316 => 203,  298 => 192,  288 => 188,  278 => 180,  270 => 174,  268 => 173,  261 => 168,  237 => 145,  229 => 139,  212 => 124,  203 => 117,  195 => 111,  191 => 110,  188 => 109,  181 => 104,  177 => 103,  170 => 99,  166 => 98,  159 => 94,  155 => 93,  151 => 91,  147 => 85,  143 => 84,  138 => 81,  131 => 71,  128 => 66,  120 => 63,  118 => 62,  114 => 61,  109 => 58,  105 => 57,  102 => 56,  100 => 55,  95 => 53,  90 => 51,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'GtSistemaBundle::basePop.html.twig' %}*/
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
/*                           */
/*         .bootstrap-table .table,*/
/*         .bootstrap-table .table > tbody > tr > th,*/
/*         .bootstrap-table .table > tfoot > tr > th,            */
/*         .bootstrap-table .table > tbody > tr > td,*/
/*         .bootstrap-table .table > tfoot > tr > td {            */
/*             padding: 2px !important;*/
/*             vertical-align: top;*/
/*             overflow: hidden;*/
/*             text-overflow: ellipsis;*/
/*             //white-space: nowrap;*/
/*             font-size:11.5px;*/
/*            */
/*         }*/
/*         */
/*         .fixed-table-container thead th .th-inner {*/
/*             padding: 2px !important;        */
/*             font-size:12px;*/
/*         }*/
/*         */
/*         #editorObj {*/
/*                 width: 100%;*/
/*                 height: 100px;*/
/*                 border: 1px solid #a4bed4;*/
/*         }*/
/*                  */
/*         */
/* 		div#layoutObj {*/
/* 			position: relative;*/
/* 			margin-top: 20px;*/
/* 			margin-left: 20px;*/
/* 			width: 600px;*/
/* 			height: 400px;*/
/* 		}*/
/* 	*/
/*                 */
/*     </style>*/
/* */
/* */
/*     <form {{ form_enctype(form) }} method="POST" action="#" >*/
/* */
/*     {{ form_errors(form) }}*/
/* */
/*     {% set guardado=false %}*/
/* */
/*         {% for flashMessage in app.session.flashbag.get('notice') %}*/
/*             <div class="flash-notice">                              */
/*                 <div class="alert alert-success alert-dismissible" role="alert" style="padding-bottom:0px; padding-top: 0px; margin-bottom: 3px">*/
/*                     <button type="button" class="close" data-dismiss="alert" aria-label="Close" ><span aria-hidden="true">&times;</span></button>*/
/*                     {{ flashMessage }}*/
/*                     {% set guardado=true %}*/
/*                 </div>                               */
/*             </div>*/
/*         {% endfor %}*/
/* */
/*                     {# <ol class="breadcrumb">*/
/*                        <li><a href="#">Clientes</a></li>                      */
/*                        <li class="active">Nuevo</li>*/
/*                      </ol>#}*/
/* */
/*                     */
/*                    */
/*                     <div class="container-fluid">*/
/* */
/*           {#  <div class="panel panel-primary" style="margin:0px; padding: 0px;">*/
/*                 <div class="panel-heading" style=" height: 20px; padding-top: 0px;">                    */
/*                     Datos básicos curso                */
/*                 </div>*/
/*                 <div class="panel-body" style="padding: 4px" >#}*/
/* */
/*     */
/*                 <div id="dvDatosCargo">    */
/*                     {{ form_widget(form.id) }}*/
/*                     {{ form_errors(form.id) }}*/
/*                     {#<p>*/
/*                     <label for="tbxPerfilCodigo">Codigo Perfil</label><br>*/
/*                     {{ form_widget(form.perfilCodigo) }} */
/*                     {{ form_errors(form.perfilCodigo) }}*/
/*                     </p>#}*/
/*                     <p>*/
/*                        <label for="tbxPerfilNombre">Nombre del Cargo</label>                           */
/*                        {{ form_widget(form.perfilNombre) }} */
/*                        {{ form_errors(form.perfilNombre) }}*/
/*                     </p>*/
/*                     <p>*/
/*                         <label for="tbxPerfilDefinicion">Objetivo del Cargo</label>                        */
/*                         {{ form_widget(form.perfilObjetivo) }} */
/*                         {{ form_errors(form.perfilObjetivo) }}*/
/*                     </p>*/
/*                     <p>*/
/*                        <label for="tbxPerfilNombre">Reporta a:</label>    */
/*                        {{ form_widget(form.perfilReporta) }} */
/*                        {{ form_errors(form.perfilReporta) }}*/
/*                     </p>*/
/*                 </div>*/
/*  <label >Tareas o Responsabilidades</label>  */
/*  {#<div id="editorObj" style="width:100%; height:200px; border:#909090 1px solid;"></div>#}*/
/*  */
/* {{ form_widget(form.perfilTareas) }} */
/* {{ form_errors(form.perfilTareas) }}*/
/*  */
/*  <label >UCL's y Competencias Conductuales</label>  */
/*  */
/*  <table style=""><tr><td>*/
/*                     {#<label>Competencias</label>#}*/
/*                     */
/*                         <table id="tblCompetencia"*/
/*                                data-toggle="table" */
/*                                data-cache="false" */
/*                                data-height="200" */
/*                                data-show-header="true" */
/*                                data-checkbox-header="false"*/
/*                                data-url="{{path('perfilCompetenciaTabla', {'perfilId': perfilId})}}">*/
/*                             <thead class="bg-info">*/
/*                                 <tr>                                                                */
/*                                     <th data-field="perfilCompetenciaAsociada" data-checkbox="true" data-formatter="stateFormatter" ></th>*/
/*                                     <th data-field="id" data-visible="false" ></th>*/
/*                                     <th data-field="competenciaCodigo" data-sortable="true" data-visible="false" data-width="100">Codigo</th>*/
/*                                     <th data-field="competenciaNombre" data-sortable="true" data-width="330">UCL</th>*/
/*                                 </tr>                                */
/*                             </thead>                         */
/*                         </table>*/
/*                         <input type="hidden" name="tbxCompetenciaIds" id="tbxCompetenciaIds" >*/
/*                             </td><td>&nbsp;</td><td>*/
/*                            */
/*                            */
/*                                {#<label>Conocimientos</label>#}*/
/*                                 <table id="tblConocimiento" */
/*                                        data-toggle="table" */
/*                                         data-cache="false"*/
/*                                        data-height="200" */
/*                                        data-show-header="true" */
/*                                        data-checkbox-header="false"*/
/*                                        data-url="{{path('perfilConocimientoTabla', {'perfilId': perfilId})}}">*/
/*                             <thead class="bg-info">*/
/*                                 <tr>                                                                */
/*                                     <th data-field="perfilConocimientoAsociada" data-checkbox="true" data-formatter="stateFormatter" ></th>*/
/*                                     <th data-field="id" data-visible="false" ></th>*/
/*                                     <th data-field="conocimientoCodigo" data-sortable="true" data-visible="false" data-width="100">Codigo</th>*/
/*                                     <th data-field="conocimientoNombre" data-sortable="true" data-width="330">Competencia</th>*/
/*                                 </tr>                                */
/*                             </thead>                         */
/*                         </table>*/
/*                         <input type="hidden" name="tbxConocimientoIds" id="tbxConocimientoIds" >*/
/*                             </td>*/
/*                         </tr>*/
/*                     </table>*/
/*                             */
/*                             */
/*                     */
/*                        */
/*                     */
/*                       */
/* */
/*                {# </div>    */
/*             </div>#}*/
/*   */
/* */
/*                <br>*/
/*                <div style="float:right">*/
/*                 <button type="button" class="btn btn-sm btn-default" data-dismiss="modal" onclick="parent.cerrar()">Cerrar</button>*/
/*                 {% if guardado %}*/
/*                     <button type="button" id="btnOtro" name="btnOtro" class="btn btn-sm btn-primary" onclick="formAccion(1, '0')">Agregar Otro</button>*/
/*                     <script type="text/javascript">*/
/*                         window.parent.refreshTabla();*/
/*                     </script>*/
/* */
/*                 {% endif %}*/
/*                 <button type="submit" id="btnGuardar" name="btnGuardar" class="btn btn-sm btn-primary">Guardar</button>*/
/*                </div>*/
/*                */
/*                         </div>*/
/*                        */
/* */
/* */
/* */
/* {{ form_rest(form) }}*/
/* </form>*/
/* {% endblock %}*/
/* */
/*     {% block javascript %} */
/*         <script type="text/javascript">*/
/*             var wins;*/
/*             */
/*             */
/*             $( "form" ).submit(function( event ) {*/
/*                 try{                  */
/*                         var form = $('form')[0];*/
/*                         if (form.checkValidity()) {*/
/*                             //winFac.progressOn();*/
/*                             console.log('valid');*/
/*                             var  perfilId="{{perfilId}}";*/
/*                             var data = JSON.stringify($("#tblCompetencia").bootstrapTable('getSelections')) */
/*                             var json = JSON.parse(data);*/
/*                             var arr = [];*/
/*                             var ids="";*/
/*                             for(var row in json){               */
/*                                 //alert(json[row]["id"]);*/
/*                                 ids+=json[row]["id"]+",";*/
/*                             }*/
/*                             */
/*                             document.getElementById("tbxCompetenciaIds").value=ids;*/
/*                             */
/*                             var data = JSON.stringify($("#tblConocimiento").bootstrapTable('getSelections')) */
/*                             var json = JSON.parse(data);*/
/*                             var arr = [];*/
/*                             var ids="";*/
/*                             for(var row in json){               */
/*                                 //alert(json[row]["id"]);*/
/*                                 ids+=json[row]["id"]+",";*/
/*                             }*/
/*                             */
/*                             document.getElementById("tbxConocimientoIds").value=ids;*/
/*                            */
/*                             url=Routing.generate('perfilRegistrar', {'perfilId': perfilId});*/
/*                             form.action=url;*/
/*                             form.submit();*/
/*                             */
/*                         } else {*/
/*                             //alert(form.checkValidity());*/
/*                             //$( "#btnTimbrar" ).trigger( "click" );*/
/*                         }*/
/*                         */
/*                     /*if ( $( "input:first" ).val() === "correct" ) {*/
/*                       $( "span" ).text( "Validated..." ).show();*/
/*                       return;*/
/*                     }*/
/* */
/*                     $( "span" ).text( "Not valid!" ).show().fadeOut( 1000 );*//* */
/*                     event.preventDefault();*/
/* */
/*                 } catch(err) {*/
/*                     alert("Error" + err.description)*/
/*                     event.preventDefault();*/
/*                 }*/
/* */
/*               });*/
/*                                   */
/*                                   */
/*                                   */
/*             function formAccion(accionId, maeRegistroId) {*/
/*                 objParametros = [{*/
/*                                  */
/*                     }];*/
/* */
/*                 var jsnParametros = JSON.stringify(objParametros);*/
/*                 */
/*                 var parametros = {'maeParametros': jsnParametros};*/
/* */
/*                 switch (accionId) {*/
/*                     case 1:*/
/*                         window.parent.winProgress(wins, "winPersonaRegistrar", 1);*/
/*                         var url = Routing.generate('maestroRegistrar', parametros);*/
/*                         document.location.href = url;*/
/*                         break*/
/*                     case 2:*/
/*                         var form = $('form')[0];*/
/*                         if (form.checkValidity()) {*/
/*                             window.parent.progress(); //winProgress(wins, "winPersonaRegistrar", 1);*/
/*                             console.log('valid');*/
/*                                                         */
/*                             var data = JSON.stringify($("#tblCompetencia").bootstrapTable('getSelections')) */
/*                             var json = JSON.parse(data);*/
/*                             var arr = [];*/
/*                             var ids="";*/
/*                             for(var row in json){               */
/*                                 //alert(json[row]["id"]);*/
/*                                 ids+=json[row]["id"]+",";*/
/*                             }*/
/*                             document.getElementById("tbxCompetenciaIds").value=ids;*/
/*                             */
/*                             var data = JSON.stringify($("#tblConocimiento").bootstrapTable('getSelections')) */
/*                             var json = JSON.parse(data);*/
/*                             var arr = [];*/
/*                             var ids="";*/
/*                             for(var row in json){               */
/*                                 //alert(json[row]["id"]);*/
/*                                 ids+=json[row]["id"]+",";*/
/*                             }*/
/*                             document.getElementById("tbxConocimientoIds").value=ids;*/
/* */
/* */
/*                             var url = Routing.generate('maestroRegistrar', parametros);*/
/*                             form.action=url;*/
/*                             form.submit();*/
/*                         }*/
/*                 }*/
/* */
/*             }*/
/*             */
/*             function stateFormatter(value, row, index) {*/
/*             */
/*                 if (row.perfilCompetenciaAsociada=="1") {*/
/*                     return { checked: true };*/
/*                 }*/
/* */
/*                 if (row.perfilConocimientoAsociada=="1") {*/
/*                     return { checked: true };*/
/*                 }                    */
/*             }*/
/*       */
/*       */
/*       */
/*             var myEditor;*/
/*             */
/*             function doOnLoad() {*/
/*                    //alert("aca 3");*/
/*                     var myEditorSkin = "dhx_skyblue";*/
/*                     myEditor = new dhtmlXEditor({*/
/*                             parent: "editorObj",*/
/*                             toolbar: true, // force dhtmlxToolbar using*/
/*                             iconsPath: "{{ asset('css/skins/skyblue/imgs') }}", // path for toolbar icons*/
/*                             skin: myEditorSkin,*/
/*                             content: 'xxxxxx'*/
/*                     });*/
/*             }*/
/*             */
/*             */
/*             	{#var iconsPath = {*/
/* 			dhx_skyblue: "imgs",*/
/* 			dhx_web: "icons_web",*/
/* 			dhx_terrace: "icons_terrace"*/
/* 		};#}*/
/* 		*/
/* 		function doOnLoadLayout() {*/
/* 			*/
/* 			skin = "dhx_terrace";*/
/* 												*/
/* 			myLayout = new dhtmlXLayoutObject({*/
/* 				parent: "layoutObj",*/
/* 				pattern: "4J",*/
/* 				skin: skin,*/
/* 				cells: [{id: "a", header: true}]*/
/* 			});*/
/* 			*/
/*                         myLayout.cells("a").setText("Descriptor de Cargo");*/
/*                         myLayout.cells("b").setText("Tareas o Responsabilidades");*/
/*                         myLayout.cells("c").setText("Competencias");*/
/*                         myLayout.cells("d").setText("Conocimientos");*/
/*                         */
/*                         myEditor = myLayout.cells("b").attachEditor({ toolbar: true, // force dhtmlxToolbar using*/
/*                             iconsPath: "{{ asset('css/skins/tarrace/imgs') }}", // path for toolbar icons*/
/*                             skin: skin});*/
/*                         */
/* 			//						*/
/*                         */
/*                         myLayout.cells("a").appendObject("dvDatosCargo");*/
/* 			//myLayout.cells("c").appendObject("tblCompetencia");*/
/*                         //myLayout.cells("d").appendObject("tblConocimiento");*/
/*                         */
/*                         myLayout.attachStatusBar({text: "Status bar can be here"});*/
/*                         */
/*                         */
/* 		}*/
/*                 */
/*                 */
/*                 */
/*             $( document ).ready(function() {*/
/*                 //doOnLoad();*/
/*                 //doOnLoadLayout();*/
/*             });*/
/*             */
/*                 */
/*         </script>  */
/* */
/*         <script src="{{ asset('js/mae/maeFunciones.js') }}" type="text/javascript"></script>*/
/*         <script src="{{ asset('js/comFunciones.js') }}" type="text/javascript"></script>*/
/* */
/*     {% endblock %}    */
