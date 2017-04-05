<?php

/* GtSistemaBundle:Registrar:participante.html.twig */
class __TwigTemplate_690ab096701f22538864e4baaba14f7e50cdb033dbc4be9575016afa5d7f6ffd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GtSistemaBundle::basePop.html.twig", "GtSistemaBundle:Registrar:participante.html.twig", 1);
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
        $__internal_f581068bd6581da9479ec453ee63443e388a9f6eb3b41f0f1762f0f1a7041529 = $this->env->getExtension("native_profiler");
        $__internal_f581068bd6581da9479ec453ee63443e388a9f6eb3b41f0f1762f0f1a7041529->enter($__internal_f581068bd6581da9479ec453ee63443e388a9f6eb3b41f0f1762f0f1a7041529_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GtSistemaBundle:Registrar:participante.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f581068bd6581da9479ec453ee63443e388a9f6eb3b41f0f1762f0f1a7041529->leave($__internal_f581068bd6581da9479ec453ee63443e388a9f6eb3b41f0f1762f0f1a7041529_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_8411d29608d11598dbd895f1c34765b0ab39ba7e1a7701d2de4b9fd3a76bfb16 = $this->env->getExtension("native_profiler");
        $__internal_8411d29608d11598dbd895f1c34765b0ab39ba7e1a7701d2de4b9fd3a76bfb16->enter($__internal_8411d29608d11598dbd895f1c34765b0ab39ba7e1a7701d2de4b9fd3a76bfb16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Gestionatalento ";
        
        $__internal_8411d29608d11598dbd895f1c34765b0ab39ba7e1a7701d2de4b9fd3a76bfb16->leave($__internal_8411d29608d11598dbd895f1c34765b0ab39ba7e1a7701d2de4b9fd3a76bfb16_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8195bce03e74cf8710577d65f79ab3e37163e2df188ef993b9c787dd172d1b6e = $this->env->getExtension("native_profiler");
        $__internal_8195bce03e74cf8710577d65f79ab3e37163e2df188ef993b9c787dd172d1b6e->enter($__internal_8195bce03e74cf8710577d65f79ab3e37163e2df188ef993b9c787dd172d1b6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    ";
        // line 9
        echo "<div style=\"margin: 0px 10px 0px 10px\">
";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

           
    ";
        // line 14
        echo "     ";
        // line 19
        echo "      
      
              ";
        // line 26
        echo "   
                               
     <table><tr><td valign=\"top\">
                <table id='tblParticipante' data-classes=\"table table-condensed\" 
                       data-toggle=\"table\" 
                       data-cache=\"false\" 
                       data-height=\"400\" 
                       data-striped=\"true\"  
                       data-pagination=\"true\"
                       data-search=\"true\" 
                       data-show-refresh=\"true\"                       
                       data-show-export=\"true\" exportTypes=\"['excel', 'txt', 'csv']\">
                    <thead>
                    <tr>
                        <th data-field=\"participante_id\" data-sortable=\"false\">#</th>                        
                        <th data-field=\"personaAsociada\" data-checkbox=\"true\" data-formatter=\"stateFormatter\" ></th>
                        <th data-field=\"empresaId\" data-visible=\"false\"></th>                        
                        <th data-field=\"perfilId\" data-visible=\"false\"></th>
                        ";
        // line 45
        echo "                        <th data-field=\"personaNombre\" data-sortable=\"true\" data-width=\"150\">Nombre</th>                        
                        <th data-field=\"perfilNombre\" data-sortable=\"true\" data-width=\"200\">Perfil</th>                        
                    </tr>
                    </thead>
                    <input type=\"hidden\" name=\"tbxParticipanteIds\" id=\"tbxParticipanteIds\" >
                </table>
            </td>
            <td>
                <table>
                    <tr>
                        <td><input type=\"button\" value=\"<< Agregar\" onclick=\"frmSubmit('1');\"></td>
                    </tr>
                    <tr><td><br/></td></tr>
                    <tr>
                        <td><input type=\"button\" value=\"Eliminar >>\" onclick=\"frmSubmit('1');\"></td>
                    </tr>
                </table>    
            </td>                
            <td valign=\"top\">
                <table id='tblPersona' data-classes=\"table table-condensed\" 
                       data-toggle=\"table\" 
                       data-cache=\"false\" 
                       data-height=\"400\" 
                       data-striped=\"true\"  
                       data-pagination=\"true\"
                       data-search=\"true\" 
                       data-show-refresh=\"true\"
                      ";
        // line 73
        echo "                       data-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("evaluacionPersonaTabla", array("evaluacionId" => (isset($context["evaluacionId"]) ? $context["evaluacionId"] : $this->getContext($context, "evaluacionId")))), "html", null, true);
        echo "\"
                       data-show-export=\"true\" exportTypes=\"['excel', 'txt', 'csv']\">
                    <thead>
                    <tr>
                        <th data-field=\"id\" data-sortable=\"false\">#</th>
                        <th data-field=\"empresaId\" data-visible=\"false\"></th>                        
                        <th data-field=\"perfilId\" data-visible=\"false\"></th>
                        <th data-field=\"state\" data-checkbox=\"true\" ></th>
                        ";
        // line 82
        echo "                        <th data-field=\"personaNombre\" data-sortable=\"true\" data-width=\"150\">Nombre</th>                        
                        <th data-field=\"perfilNombre\" data-sortable=\"true\" data-width=\"200\">Perfil</th>                        
                       ";
        // line 85
        echo "                    </tr>
                    </thead>
                    <input type=\"hidden\" name=\"tbxPersonaIds\" id=\"tbxPersonaIds\" >
                </table>
            </td>
         </tr>
     </table>
          ";
        // line 94
        echo "        ";
        // line 95
        echo "      ";
        echo "       
    <!-- start: Delete Coupon Modal -->
    <div class=\"modal fade\" id=\"vtnParticipanteBorrar\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"vtnParticipanteLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header bg-danger\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                     <h3 class=\"modal-title\" id=\"myModaBorrarlLabel\">Atencion!</h3>

                </div>
                <div class=\"modal-body\" id=\"vtnParticipanteBodyBorrar\">
                     <h4> Esta seguro de borrar?</h4>
                     <input type=\"hidden\" name=\"tbxParticipanteId\" id=\"tbxParticipanteId\">
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
    <div class=\"modal fade\" id=\"vtnParticipante\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"vtnParticipanteLabel\">
        <div class=\"modal-dialog modal-lg\" role=\"document\">
            <div class=\"modal-content modal-lg\">
                <div class=\"modal-header bg-primary\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                    <h4 class=\"modal-title\" id=\"vtnParticipanteLabel\">Nueva Persona</h4>
                </div>
                <div class=\"modal-body\" id=\"vtnParticipanteBody\">                
                    ";
        // line 132
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "id", array()), 'widget');
        echo "
                    ";
        // line 133
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "id", array()), 'errors');
        echo "
                                        
                   ";
        // line 140
        echo "                    <p>
                       <label>Nombre</label>    
                       ";
        // line 142
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "personaNombre", array()), 'widget');
        echo " 
                       ";
        // line 143
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "personaNombre", array()), 'errors');
        echo "
                    </p>
                    <p>
                       <label>Perfil</label>    
                       ";
        // line 147
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "perfilId", array()), 'widget');
        echo " 
                       ";
        // line 148
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "perfilId", array()), 'errors');
        echo "
                    </p> 
                    <p>
                       <label>Superior</label>    
                       ";
        // line 152
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "personaId", array()), 'widget');
        echo " 
                       ";
        // line 153
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "personaId", array()), 'errors');
        echo "
                    </p>                    
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancelar</button>
                    <button type=\"submit\" class=\"btn btn-primary\" >Guardar Persona</button>
                </div>
            </div> <!-- /.modal-content -->
        </div> <!-- /.modal-dialog -->
    </div> <!-- /.modal -->

    <input type=\"hidden\" name=\"tbxEvaluacionId\" id=\"tbxEvaluacionId\" value=\"";
        // line 164
        echo twig_escape_filter($this->env, (isset($context["evaluacionId"]) ? $context["evaluacionId"] : $this->getContext($context, "evaluacionId")), "html", null, true);
        echo "\" />
    
";
        // line 166
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
";
        // line 167
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

";
        // line 170
        echo "</div>
       

";
        
        $__internal_8195bce03e74cf8710577d65f79ab3e37163e2df188ef993b9c787dd172d1b6e->leave($__internal_8195bce03e74cf8710577d65f79ab3e37163e2df188ef993b9c787dd172d1b6e_prof);

    }

    // line 177
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_638fef59c56edb45aedd5e87358f07b9cdf48a1c2167cbb5bae866f44d02bb9c = $this->env->getExtension("native_profiler");
        $__internal_638fef59c56edb45aedd5e87358f07b9cdf48a1c2167cbb5bae866f44d02bb9c->enter($__internal_638fef59c56edb45aedd5e87358f07b9cdf48a1c2167cbb5bae866f44d02bb9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        echo "   

    <script type=\"text/javascript\">
        
        var id = 0,
        getRows2 = function () {
            var rows = [];

            for (var i = 0; i < 0; i++) {
                rows.push({
                    xxx: '',
                    xxx2: '',
                });
                id++;
            }
            return rows;
        }
    
        function frmSubmit(accion) {
            
            var data = JSON.stringify(\$(\"#tblPersona\").bootstrapTable('getSelections'))
                        
            var json = JSON.parse(data);
 
            var arr = [];
            var ids=\"\";
            for(var row in json){               
                //alert(json[row][\"id\"]);
                ids+=json[row][\"id\"]+\",\";
            }
            

            switch (accion) {
                case \"1\": //Agregar Participante
                    document.getElementById(\"tbxPersonaIds\").value=ids;
                    document.getElementById(\"tbxParticipanteIds\").value=\"\";
                    //document.getElementById(\"thisform_conocimientoId\").value=\"\";
                    break;
                case \"2\": //Eliminar Participantes
                    document.getElementById(\"tbxPersonaIds\").value=\"\";
                    document.getElementById(\"tbxParticipanteIds\").value=ids;
                    //document.getElementById(\"thisform_competenciaId\").value=\"\";
                    
                    break;
            }
                        
            var evaluacionId=document.getElementById(\"tbxEvaluacionId\").value;
            
            var parametro = {'evaluacionId':evaluacionId};
            var url = Routing.generate('participanteRegistrar',parametro);
            alert(ids +  \" \" + url);
            document.thisform.action=url;
            document.thisform.submit();
            
            
        }
        function participanteNuevo() {
            document.getElementById(\"dvPersona\").style.display=\"block\";            
        }
        
        function frmBorrar() {            
            //var objPanelFiltroAno = document.querySelector(\"#panelFiltroAno\");            
            var participanteId= document.getElementById(\"tbxParticipanteId\").value ;            
            var url = Routing.generate('participanteBorrar',{\"participanteId\": participanteId});
                      
            document.thisform.action=url
            document.thisform.submit();            
        }
            
        
        function operateFormatter(value, row, index) {
            return [
                '<button id=\"btnModificar\" name=\"btnModificar\" type=\"button\" class=\"modificar btn btn-primary btn-xs\">Modificar</button>&nbsp;',
                '<button id=\"btnBorrar\" name=\"btnBorrar\" type=\"button\" class=\"borrar btn btn-primary btn-xs\">Borrar</button>&nbsp;',                
                
            ].join('');
        }

    window.operateEvents = {
        'click .modificar': function (e, value, row, index) {
            //alert('You click modificar icon, row: ' + JSON.stringify(row));
            //console.log(value, row, index);
            \$('#vtnParticipante').data('registro', {id: row.id, 
                                            empresaId: row.empresaId, 
                                            personaRut: row.personaRut, 
                                            personaNombre: row.personaNombre, 
                                            perfilId: row.perfilId}).modal('show');
        },
        'click .borrar': function (e, value, row, index) {
            \$('#vtnParticipanteBorrar').data('id', row.id).modal('show');
            //alert('You click borrar icon, row: ' + JSON.stringify(row));
            //console.log(value, row, index);
        },
        'click .remove': function (e, value, row, index) {
            alert('You click remove icon, row: ' + JSON.stringify(row));
            console.log(value, row, index);
        }
    };
    
    
    

        ";
        // line 283
        echo "
        \$('#vtnParticipante').on('show.bs.modal', function(event) {
            //var button = \$(event.relatedTarget) // Button that triggered the modal
            //var recipient = button.data('whatever') // Extract info from data-* attributes
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = \$(this)
            //modal.find('.modal-title').text('xxxx')
            var participanteId=\$('#vtnParticipante').data(\"registro\").id;
            var empresaId=\$('#vtnParticipante').data(\"registro\").empresaId;                            
            var personaRut=\$('#vtnParticipante').data(\"registro\").personaRut;
            var personaNombre=\$('#vtnParticipante').data(\"registro\").personaNombre;
            var perfilId=\$('#vtnParticipante').data(\"registro\").perfilId;
                        
            if (participanteId>0) {                    
                modal.find('.modal-body #thisform_id').val(participanteId);
                modal.find('.modal-body #thisform_empresaId').val(empresaId);                
                modal.find('.modal-body #thisform_personaRut').val(personaRut);
                modal.find('.modal-body #thisform_personaNombre').val(personaNombre);
                modal.find('.modal-body #thisform_perfilId').val(perfilId);
                
            } else {
                modal.find('.modal-body #thisform_id').val(\"\");
                modal.find('.modal-body #thisform_personaRut').val(\"\");
                modal.find('.modal-body #thisform_personaNombre').val(\"\");
                modal.find('.modal-body #thisform_perfilId').val(\"\");                
            }
        });

        \$('#vtnParticipanteBorrar').on('show.bs.modal', function(event) {
            var modal = \$(this)
            modal.find('.modal-body #tbxParticipanteId').val(\$('#vtnParticipanteBorrar').data(\"id\"));
        });
        
        \$(document).ready(function() {
            \$('#btnParticipante').on('click', function() {
                \$('#vtnParticipante').data('registro', {id: 0});
            });               
            
            var parametro = {'evaluacionId':'";
        // line 322
        echo twig_escape_filter($this->env, (isset($context["evaluacionId"]) ? $context["evaluacionId"] : $this->getContext($context, "evaluacionId")), "html", null, true);
        echo "'};
            //\$('#tableActividadClave').bootstrapTable('destroy');
            \$('#tblParticipante').bootstrapTable('showLoading');
            var url = Routing.generate('participanteTabla', parametro);
            
";
        // line 328
        echo "                    
            \$.ajax({
                url: url,                        
                type: 'post',                        
                dataType: 'json',
                success: function(respuesta) {
                    \$('#tblParticipante').bootstrapTable('destroy');                                
                    \$('#tblParticipante').bootstrapTable({data: respuesta});
                    padre = \$(window.parent.document); 
                    \$(padre).find(\"#myModalPersonasProgres\").attr(\"style\", \"display:none\");
                    //\$('div#myModalPersonasProgres', window.parent.document).hide();
                    //window.parent.document.getElementById('myModalPersonasProgres').style.display=\"none\";
                    
                },
                // código a ejecutar si la petición falla;
                error: function(xhr, status) {
                    alert('Disculpe, existió un problema');
                },
            });
                        
                        
            //\$('#tblParticipante').bootstrapTable('destroy');
           ";
        // line 351
        echo "                      
        });
           
        function stateFormatter(value, row, index) {            
            if (row.personaAsociada==\"1\") {
                return { checked: true };
            }                        
        }
        
        
    </script>
";
        
        $__internal_638fef59c56edb45aedd5e87358f07b9cdf48a1c2167cbb5bae866f44d02bb9c->leave($__internal_638fef59c56edb45aedd5e87358f07b9cdf48a1c2167cbb5bae866f44d02bb9c_prof);

    }

    public function getTemplateName()
    {
        return "GtSistemaBundle:Registrar:participante.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  447 => 351,  423 => 328,  415 => 322,  374 => 283,  265 => 177,  255 => 170,  250 => 167,  246 => 166,  241 => 164,  227 => 153,  223 => 152,  216 => 148,  212 => 147,  205 => 143,  201 => 142,  197 => 140,  192 => 133,  188 => 132,  148 => 95,  146 => 94,  137 => 85,  133 => 82,  121 => 73,  92 => 45,  72 => 26,  68 => 19,  66 => 14,  60 => 10,  57 => 9,  54 => 6,  48 => 5,  36 => 2,  11 => 1,);
    }
}
/* {% extends 'GtSistemaBundle::basePop.html.twig' %}*/
/* {% block title %} Gestionatalento {% endblock %}*/
/* {#{% block dondeEstoy %}Empresa Cambiar{% endblock %}#}*/
/* */
/* {% block body %}*/
/* */
/*     {#<div class="container"> #}*/
/* {#        <div class="center-block" >#}*/
/* <div style="margin: 0px 10px 0px 10px">*/
/* {{ form_start(form) }}*/
/* */
/*            */
/*     {#<div class="center-block" >#}*/
/*      {#   <div class="panel panel-primary">*/
/*             <div class="panel-heading">*/
/*                 <h3 class="panel-title">Personas</h3>*/
/*             </div>*/
/*             <div class="panel-body"  >#}*/
/*       */
/*       */
/*               {#  <div id="custom-toolbar2">                */
/*                     <button id='btnParticipante' type="button" class="btn btn-primary" data-toggle="modal" data-target="#vtnParticipante">*/
/*                         Nueva Persona*/
/*                     </button>                                       */
/*                 </div>#}*/
/*    */
/*                                */
/*      <table><tr><td valign="top">*/
/*                 <table id='tblParticipante' data-classes="table table-condensed" */
/*                        data-toggle="table" */
/*                        data-cache="false" */
/*                        data-height="400" */
/*                        data-striped="true"  */
/*                        data-pagination="true"*/
/*                        data-search="true" */
/*                        data-show-refresh="true"                       */
/*                        data-show-export="true" exportTypes="['excel', 'txt', 'csv']">*/
/*                     <thead>*/
/*                     <tr>*/
/*                         <th data-field="participante_id" data-sortable="false">#</th>                        */
/*                         <th data-field="personaAsociada" data-checkbox="true" data-formatter="stateFormatter" ></th>*/
/*                         <th data-field="empresaId" data-visible="false"></th>                        */
/*                         <th data-field="perfilId" data-visible="false"></th>*/
/*                         {#<th data-field="personaRut" data-sortable="true">Rut</th>#}*/
/*                         <th data-field="personaNombre" data-sortable="true" data-width="150">Nombre</th>                        */
/*                         <th data-field="perfilNombre" data-sortable="true" data-width="200">Perfil</th>                        */
/*                     </tr>*/
/*                     </thead>*/
/*                     <input type="hidden" name="tbxParticipanteIds" id="tbxParticipanteIds" >*/
/*                 </table>*/
/*             </td>*/
/*             <td>*/
/*                 <table>*/
/*                     <tr>*/
/*                         <td><input type="button" value="<< Agregar" onclick="frmSubmit('1');"></td>*/
/*                     </tr>*/
/*                     <tr><td><br/></td></tr>*/
/*                     <tr>*/
/*                         <td><input type="button" value="Eliminar >>" onclick="frmSubmit('1');"></td>*/
/*                     </tr>*/
/*                 </table>    */
/*             </td>                */
/*             <td valign="top">*/
/*                 <table id='tblPersona' data-classes="table table-condensed" */
/*                        data-toggle="table" */
/*                        data-cache="false" */
/*                        data-height="400" */
/*                        data-striped="true"  */
/*                        data-pagination="true"*/
/*                        data-search="true" */
/*                        data-show-refresh="true"*/
/*                       {# data-toolbar="#custom-toolbar2"#}*/
/*                        data-url="{{path('evaluacionPersonaTabla', {'evaluacionId': evaluacionId })}}"*/
/*                        data-show-export="true" exportTypes="['excel', 'txt', 'csv']">*/
/*                     <thead>*/
/*                     <tr>*/
/*                         <th data-field="id" data-sortable="false">#</th>*/
/*                         <th data-field="empresaId" data-visible="false"></th>                        */
/*                         <th data-field="perfilId" data-visible="false"></th>*/
/*                         <th data-field="state" data-checkbox="true" ></th>*/
/*                         {#<th data-field="personaRut" data-sortable="true">Rut</th>#}*/
/*                         <th data-field="personaNombre" data-sortable="true" data-width="150">Nombre</th>                        */
/*                         <th data-field="perfilNombre" data-sortable="true" data-width="200">Perfil</th>                        */
/*                        {# <th data-field="operate" data-formatter="operateFormatter" data-events="operateEvents">Opciones</th>#}*/
/*                     </tr>*/
/*                     </thead>*/
/*                     <input type="hidden" name="tbxPersonaIds" id="tbxPersonaIds" >*/
/*                 </table>*/
/*             </td>*/
/*          </tr>*/
/*      </table>*/
/*           {# </div>*/
/*         </div>#}*/
/*         {#</div>          #}*/
/*       {#</div>#}       */
/*     <!-- start: Delete Coupon Modal -->*/
/*     <div class="modal fade" id="vtnParticipanteBorrar" tabindex="-1" role="dialog" aria-labelledby="vtnParticipanteLabel" aria-hidden="true">*/
/*         <div class="modal-dialog">*/
/*             <div class="modal-content">*/
/*                 <div class="modal-header bg-danger">*/
/*                     <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>*/
/*                      <h3 class="modal-title" id="myModaBorrarlLabel">Atencion!</h3>*/
/* */
/*                 </div>*/
/*                 <div class="modal-body" id="vtnParticipanteBodyBorrar">*/
/*                      <h4> Esta seguro de borrar?</h4>*/
/*                      <input type="hidden" name="tbxParticipanteId" id="tbxParticipanteId">*/
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
/*     <div class="modal fade" id="vtnParticipante" tabindex="-1" role="dialog" aria-labelledby="vtnParticipanteLabel">*/
/*         <div class="modal-dialog modal-lg" role="document">*/
/*             <div class="modal-content modal-lg">*/
/*                 <div class="modal-header bg-primary">*/
/*                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>*/
/*                     <h4 class="modal-title" id="vtnParticipanteLabel">Nueva Persona</h4>*/
/*                 </div>*/
/*                 <div class="modal-body" id="vtnParticipanteBody">                */
/*                     {{ form_widget(form.id) }}*/
/*                     {{ form_errors(form.id) }}*/
/*                                         */
/*                    {# <p>*/
/*                         <label>Rut</label>*/
/*                         {{ form_widget(form.personaRut) }} */
/*                         {{ form_errors(form.personaRut) }}*/
/*                     </p>#}*/
/*                     <p>*/
/*                        <label>Nombre</label>    */
/*                        {{ form_widget(form.personaNombre) }} */
/*                        {{ form_errors(form.personaNombre) }}*/
/*                     </p>*/
/*                     <p>*/
/*                        <label>Perfil</label>    */
/*                        {{ form_widget(form.perfilId) }} */
/*                        {{ form_errors(form.perfilId) }}*/
/*                     </p> */
/*                     <p>*/
/*                        <label>Superior</label>    */
/*                        {{ form_widget(form.personaId) }} */
/*                        {{ form_errors(form.personaId) }}*/
/*                     </p>                    */
/*                 </div>*/
/*                 <div class="modal-footer">*/
/*                     <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>*/
/*                     <button type="submit" class="btn btn-primary" >Guardar Persona</button>*/
/*                 </div>*/
/*             </div> <!-- /.modal-content -->*/
/*         </div> <!-- /.modal-dialog -->*/
/*     </div> <!-- /.modal -->*/
/* */
/*     <input type="hidden" name="tbxEvaluacionId" id="tbxEvaluacionId" value="{{ evaluacionId }}" />*/
/*     */
/* {{ form_rest(form) }}*/
/* {{ form_end(form) }}*/
/* */
/* {#       </div>#}*/
/* </div>*/
/*        */
/* */
/* {% endblock %}*/
/* */
/* */
/* */
/* {% block javascript %}   */
/* */
/*     <script type="text/javascript">*/
/*         */
/*         var id = 0,*/
/*         getRows2 = function () {*/
/*             var rows = [];*/
/* */
/*             for (var i = 0; i < 0; i++) {*/
/*                 rows.push({*/
/*                     xxx: '',*/
/*                     xxx2: '',*/
/*                 });*/
/*                 id++;*/
/*             }*/
/*             return rows;*/
/*         }*/
/*     */
/*         function frmSubmit(accion) {*/
/*             */
/*             var data = JSON.stringify($("#tblPersona").bootstrapTable('getSelections'))*/
/*                         */
/*             var json = JSON.parse(data);*/
/*  */
/*             var arr = [];*/
/*             var ids="";*/
/*             for(var row in json){               */
/*                 //alert(json[row]["id"]);*/
/*                 ids+=json[row]["id"]+",";*/
/*             }*/
/*             */
/* */
/*             switch (accion) {*/
/*                 case "1": //Agregar Participante*/
/*                     document.getElementById("tbxPersonaIds").value=ids;*/
/*                     document.getElementById("tbxParticipanteIds").value="";*/
/*                     //document.getElementById("thisform_conocimientoId").value="";*/
/*                     break;*/
/*                 case "2": //Eliminar Participantes*/
/*                     document.getElementById("tbxPersonaIds").value="";*/
/*                     document.getElementById("tbxParticipanteIds").value=ids;*/
/*                     //document.getElementById("thisform_competenciaId").value="";*/
/*                     */
/*                     break;*/
/*             }*/
/*                         */
/*             var evaluacionId=document.getElementById("tbxEvaluacionId").value;*/
/*             */
/*             var parametro = {'evaluacionId':evaluacionId};*/
/*             var url = Routing.generate('participanteRegistrar',parametro);*/
/*             alert(ids +  " " + url);*/
/*             document.thisform.action=url;*/
/*             document.thisform.submit();*/
/*             */
/*             */
/*         }*/
/*         function participanteNuevo() {*/
/*             document.getElementById("dvPersona").style.display="block";            */
/*         }*/
/*         */
/*         function frmBorrar() {            */
/*             //var objPanelFiltroAno = document.querySelector("#panelFiltroAno");            */
/*             var participanteId= document.getElementById("tbxParticipanteId").value ;            */
/*             var url = Routing.generate('participanteBorrar',{"participanteId": participanteId});*/
/*                       */
/*             document.thisform.action=url*/
/*             document.thisform.submit();            */
/*         }*/
/*             */
/*         */
/*         function operateFormatter(value, row, index) {*/
/*             return [*/
/*                 '<button id="btnModificar" name="btnModificar" type="button" class="modificar btn btn-primary btn-xs">Modificar</button>&nbsp;',*/
/*                 '<button id="btnBorrar" name="btnBorrar" type="button" class="borrar btn btn-primary btn-xs">Borrar</button>&nbsp;',                */
/*                 */
/*             ].join('');*/
/*         }*/
/* */
/*     window.operateEvents = {*/
/*         'click .modificar': function (e, value, row, index) {*/
/*             //alert('You click modificar icon, row: ' + JSON.stringify(row));*/
/*             //console.log(value, row, index);*/
/*             $('#vtnParticipante').data('registro', {id: row.id, */
/*                                             empresaId: row.empresaId, */
/*                                             personaRut: row.personaRut, */
/*                                             personaNombre: row.personaNombre, */
/*                                             perfilId: row.perfilId}).modal('show');*/
/*         },*/
/*         'click .borrar': function (e, value, row, index) {*/
/*             $('#vtnParticipanteBorrar').data('id', row.id).modal('show');*/
/*             //alert('You click borrar icon, row: ' + JSON.stringify(row));*/
/*             //console.log(value, row, index);*/
/*         },*/
/*         'click .remove': function (e, value, row, index) {*/
/*             alert('You click remove icon, row: ' + JSON.stringify(row));*/
/*             console.log(value, row, index);*/
/*         }*/
/*     };*/
/*     */
/*     */
/*     */
/* */
/*         {#        $('#vtnParticipante').on('hidden.bs.modal', function (e) {*/
/*                     alert("aca");*/
/*                   })*/
/*         #}*/
/* */
/*         $('#vtnParticipante').on('show.bs.modal', function(event) {*/
/*             //var button = $(event.relatedTarget) // Button that triggered the modal*/
/*             //var recipient = button.data('whatever') // Extract info from data-* attributes*/
/*             // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).*/
/*             // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.*/
/*             var modal = $(this)*/
/*             //modal.find('.modal-title').text('xxxx')*/
/*             var participanteId=$('#vtnParticipante').data("registro").id;*/
/*             var empresaId=$('#vtnParticipante').data("registro").empresaId;                            */
/*             var personaRut=$('#vtnParticipante').data("registro").personaRut;*/
/*             var personaNombre=$('#vtnParticipante').data("registro").personaNombre;*/
/*             var perfilId=$('#vtnParticipante').data("registro").perfilId;*/
/*                         */
/*             if (participanteId>0) {                    */
/*                 modal.find('.modal-body #thisform_id').val(participanteId);*/
/*                 modal.find('.modal-body #thisform_empresaId').val(empresaId);                */
/*                 modal.find('.modal-body #thisform_personaRut').val(personaRut);*/
/*                 modal.find('.modal-body #thisform_personaNombre').val(personaNombre);*/
/*                 modal.find('.modal-body #thisform_perfilId').val(perfilId);*/
/*                 */
/*             } else {*/
/*                 modal.find('.modal-body #thisform_id').val("");*/
/*                 modal.find('.modal-body #thisform_personaRut').val("");*/
/*                 modal.find('.modal-body #thisform_personaNombre').val("");*/
/*                 modal.find('.modal-body #thisform_perfilId').val("");                */
/*             }*/
/*         });*/
/* */
/*         $('#vtnParticipanteBorrar').on('show.bs.modal', function(event) {*/
/*             var modal = $(this)*/
/*             modal.find('.modal-body #tbxParticipanteId').val($('#vtnParticipanteBorrar').data("id"));*/
/*         });*/
/*         */
/*         $(document).ready(function() {*/
/*             $('#btnParticipante').on('click', function() {*/
/*                 $('#vtnParticipante').data('registro', {id: 0});*/
/*             });               */
/*             */
/*             var parametro = {'evaluacionId':'{{evaluacionId}}'};*/
/*             //$('#tableActividadClave').bootstrapTable('destroy');*/
/*             $('#tblParticipante').bootstrapTable('showLoading');*/
/*             var url = Routing.generate('participanteTabla', parametro);*/
/*             */
/* {#           {{path('participanteTabla', {'empresaId':'2', 'clienteId':'1'})}}#}*/
/*                     */
/*             $.ajax({*/
/*                 url: url,                        */
/*                 type: 'post',                        */
/*                 dataType: 'json',*/
/*                 success: function(respuesta) {*/
/*                     $('#tblParticipante').bootstrapTable('destroy');                                */
/*                     $('#tblParticipante').bootstrapTable({data: respuesta});*/
/*                     padre = $(window.parent.document); */
/*                     $(padre).find("#myModalPersonasProgres").attr("style", "display:none");*/
/*                     //$('div#myModalPersonasProgres', window.parent.document).hide();*/
/*                     //window.parent.document.getElementById('myModalPersonasProgres').style.display="none";*/
/*                     */
/*                 },*/
/*                 // código a ejecutar si la petición falla;*/
/*                 error: function(xhr, status) {*/
/*                     alert('Disculpe, existió un problema');*/
/*                 },*/
/*             });*/
/*                         */
/*                         */
/*             //$('#tblParticipante').bootstrapTable('destroy');*/
/*            {# $('#tblParticipante').bootstrapTable('showLoading');*/
/*             $('#tblParticipante').bootstrapTable({data: getRows2()})  #}                      */
/*         });*/
/*            */
/*         function stateFormatter(value, row, index) {            */
/*             if (row.personaAsociada=="1") {*/
/*                 return { checked: true };*/
/*             }                        */
/*         }*/
/*         */
/*         */
/*     </script>*/
/* {% endblock %}*/
/* */
/* */
