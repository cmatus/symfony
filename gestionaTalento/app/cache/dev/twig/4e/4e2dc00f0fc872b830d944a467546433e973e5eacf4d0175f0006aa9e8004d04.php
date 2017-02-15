<?php

/* GtSistemaBundle:Evaluacion:participantes.html.twig */
class __TwigTemplate_b9261b4d94b3b4044bac43ef4ef6ac1b19fa7b84baefcbefa0fbaa4cfeda6eb6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GtSistemaBundle::base.html.twig", "GtSistemaBundle:Evaluacion:participantes.html.twig", 1);
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
        $__internal_04e3b3a375185b55d45c2d15a60f488ed3d8a0cfe14127090496d71e1ec0f136 = $this->env->getExtension("native_profiler");
        $__internal_04e3b3a375185b55d45c2d15a60f488ed3d8a0cfe14127090496d71e1ec0f136->enter($__internal_04e3b3a375185b55d45c2d15a60f488ed3d8a0cfe14127090496d71e1ec0f136_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GtSistemaBundle:Evaluacion:participantes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_04e3b3a375185b55d45c2d15a60f488ed3d8a0cfe14127090496d71e1ec0f136->leave($__internal_04e3b3a375185b55d45c2d15a60f488ed3d8a0cfe14127090496d71e1ec0f136_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_22f913ea15161ca5712c25024760ff580966ac52b22b12bd9b328ab066c1b4cf = $this->env->getExtension("native_profiler");
        $__internal_22f913ea15161ca5712c25024760ff580966ac52b22b12bd9b328ab066c1b4cf->enter($__internal_22f913ea15161ca5712c25024760ff580966ac52b22b12bd9b328ab066c1b4cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Gestionatalento ";
        
        $__internal_22f913ea15161ca5712c25024760ff580966ac52b22b12bd9b328ab066c1b4cf->leave($__internal_22f913ea15161ca5712c25024760ff580966ac52b22b12bd9b328ab066c1b4cf_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b8c2c0fd5970e0563d92935c3b374c8689b8ed237e35e546690f3356387dd228 = $this->env->getExtension("native_profiler");
        $__internal_b8c2c0fd5970e0563d92935c3b374c8689b8ed237e35e546690f3356387dd228->enter($__internal_b8c2c0fd5970e0563d92935c3b374c8689b8ed237e35e546690f3356387dd228_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    ";
        // line 9
        echo "

    <div class=\"container\">     
";
        // line 13
        echo "
           
<div class=\"center-block\" >    
        <div class=\"panel panel-primary\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\">Participantes Evaluacion</h3>
            </div>
            <div class=\"panel-body\"  >
      
              ";
        // line 30
        echo "                             
                ";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("evaluacionParticipantesTabla", array("evaluacionId" => (isset($context["evaluacionId"]) ? $context["evaluacionId"] : $this->getContext($context, "evaluacionId")))), "html", null, true);
        echo "
                <table id='tblParticipante' data-classes=\"table table-condensed\" 
                       data-toggle=\"table\" 
                       data-cache=\"false\" 
                       data-height=\"400\" 
                       data-striped=\"true\"  
                       data-pagination=\"true\"
                       data-search=\"true\" 
                       data-show-refresh=\"true\"
                       ";
        // line 41
        echo "                       data-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("evaluacionParticipantesTabla", array("evaluacionId" => (isset($context["evaluacionId"]) ? $context["evaluacionId"] : $this->getContext($context, "evaluacionId")))), "html", null, true);
        echo "\">
                    <thead>
                    <tr>
                        <th data-field=\"id\" data-sortable=\"true\" data-visible=\"false\">#</th>
                        <th data-field=\"empresa_id\" data-visible=\"false\">Emp</th>                        
                        <th data-field=\"evaluacion_id\" data-visible=\"false\">Eva</th>
                        <th data-field=\"perfil_id\" data-visible=\"false\">Per</th>                        
                        <th data-field=\"participante_id\" data-visible=\"false\">Par</th>   
                        ";
        // line 50
        echo "                        <th data-field=\"personaNombre\" data-sortable=\"true\">Nombre</th>                        
                        <th data-field=\"perfilNombre\" data-sortable=\"true\">Cargo</th>                        
                        ";
        // line 53
        echo "                        <th data-field=\"evaluacionEstado\" data-formatter=\"operateAvance\"  data-visible=\"true\" data-sortable=\"true\" data-width=\"100\">% Avance</th>
                        <th data-formatter=\"operateFormatter\" data-events=\"operateEvents\" data-width=\"300\">Evaluaciones</th>
                        <th data-formatter=\"opcionesPdf\" data-events=\"operateEvents\" data-align=\"center\" >Informe DNC</th>
                        
                    </tr>
                    </thead>
                    
                </table>
                 
                
           </div>
        </div>
                        
                        
<!-- window evaluacion participante -->
    <div class=\"modal fade\" id=\"vtnParticipantes\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-lg\">
            <div class=\"modal-content modal-lg\" >
                <div class=\"modal-header bg-info\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                    <h4 class=\"modal-title\">Evaluando a: </h4>
                </div>
                <div class=\"modal-body\" id=\"myModalPersonasBody\" style=\"margin: 0px 0px 0px 0px;  padding: 0px 0px 0px 0px\">
                    <iframe id=\"frmParticipante\" src=\"\" frameborder=\"0\"  ></iframe>
                </div>
                <div class=\"modal-footer\">
                    ";
        // line 80
        echo "                    <nav>
                        <ul class=\"pagination\">
                          <li>
                            <a href=\"#\" aria-label=\"Previous\">
                              <span aria-hidden=\"true\">&laquo;</span>
                            </a>
                          </li>
                          <li><a href=\"#\">Inicio</a></li>
                          <li class=\"active\"><a href=\"#\" onclick=\"competenciaEvaluar(6)\">1</a></li>
                          <li><a href=\"#\" onclick=\"competenciaEvaluar(7)\">2</a></li>
                          <li><a href=\"#\">3</a></li>
                          <li><a href=\"#\">4</a></li>
                          <li><a href=\"#\">5</a></li>
                          <li><a href=\"#\">6</a></li>
                          <li><a href=\"#\">7</a></li>
                          <li><a href=\"#\">8</a></li>
                          <li><a href=\"#\">9</a></li>
                          <li>
                            <a href=\"#\" aria-label=\"Next\">
                              <span aria-hidden=\"true\">&raquo;</span>
                            </a>
                          </li>
                        </ul>
                      </nav>

                    <button id=\"btnAtras\" type=\"button\" class=\"btn btn-primary\" onclick=\"frmSubmit('0')\" style=\"display:none; float: left\"><< Volver al paso 1</button>
                    <button id=\"btnAtras2\" type=\"button\" class=\"btn btn-primary\" onclick=\"frmSubmit('1')\" style=\"display:none; float: left\"><< Volver al paso 2</button>
                    <button id=\"btnPaso1\" type=\"button\" class=\"btn btn-primary\" onclick=\"frmSubmit('1')\" style=\"display:block; float: right\">Avanzar al paso 2 >> </button>
                    <button id=\"btnPaso2\" type=\"button\" class=\"btn btn-primary\" onclick=\"frmSubmit('2')\" style=\"display:none; float: right\">Avanzar al paso 3 >> </button>
                    <button id=\"btnPaso3\" type=\"button\" class=\"btn btn-primary\" onclick=\"frmSubmit('3')\" style=\"display:none; float: right\">Finalizar</button>
                    
                </div>
            </div> <!-- /.modal-content -->
        </div> <!-- /.modal-dialog -->
    </div> <!-- /.modal -->
    
    
        ";
        // line 118
        echo "      ";
        echo "       
    <!-- start: Delete Coupon Modal -->
 ";
        // line 193
        echo "
</div>


";
        // line 198
        echo "
       

";
        
        $__internal_b8c2c0fd5970e0563d92935c3b374c8689b8ed237e35e546690f3356387dd228->leave($__internal_b8c2c0fd5970e0563d92935c3b374c8689b8ed237e35e546690f3356387dd228_prof);

    }

    // line 205
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_0056e11bfd6e6919fe138f85ba1496f2bf7e497f7001d43a074aa94962c31c01 = $this->env->getExtension("native_profiler");
        $__internal_0056e11bfd6e6919fe138f85ba1496f2bf7e497f7001d43a074aa94962c31c01->enter($__internal_0056e11bfd6e6919fe138f85ba1496f2bf7e497f7001d43a074aa94962c31c01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        echo "   

    <script type=\"text/javascript\">
        
        
        var wins;
        var wins2;
        var winId;
        function evaluacionParticipanteCompetencias(participanteId) {
                                                                                                                      
            var parametro = {'participanteId':participanteId};

            var url=Routing.generate('evaluacionPreguntaCompetenciaResumen', parametro);

            wins2 = new dhtmlXWindows();
            skin=\"dhx_terrace\";
            wins2.setSkin(skin);

            winId=\"winEvaluacionPreguntaCompetencia\";

            wins2.createWindow(winId, 1, 1, 780, 560);
            wins2.window(winId).setText(\"<h5>Evaluacion Paticipante - Competencias</h5>\");

            wins2.window(winId).setModal(true);
            wins2.window(winId).button(\"minmax\").disable();                   
            wins2.window(winId).centerOnScreen();                   
            wins2.window(winId).progressOn();

            wins2.window(winId).setIconCss(\"without_icon\");

            wins2.window(winId).attachURL(url);

            wins2.window(winId).attachEvent(\"onContentLoaded\", function(id){
               id.progressOff();        
               var ifr = id.getFrame();
               ifr.contentWindow.wins=wins;
            });     
        }
        
        function evaluacionParticipanteConocimientos(participanteId) {
                                                                                                                      
            var parametro = {'participanteId':participanteId};

            var url=Routing.generate('evaluacionPreguntaConocimientoResumen', parametro);

            wins2 = new dhtmlXWindows();
            skin=\"dhx_terrace\";
            wins2.setSkin(skin);

            winId=\"winEvaluacionPreguntaConocimiento\";

            wins2.createWindow(winId, 1, 1, 780, 560);
            wins2.window(winId).setText(\"<h5>Evaluacion Paticipante - Conocimientos</h5>\");

            wins2.window(winId).setModal(true);
            wins2.window(winId).button(\"minmax\").disable();                   
            wins2.window(winId).centerOnScreen();                   
            wins2.window(winId).progressOn();

            wins2.window(winId).setIconCss(\"without_icon\");

            wins2.window(winId).attachURL(url);

            wins2.window(winId).attachEvent(\"onContentLoaded\", function(id){
               id.progressOff();        
               var ifr = id.getFrame();
               ifr.contentWindow.wins=wins;
            });     
        }
        
        
        function evaluacionActividadClave(participanteId) {
                                                                                                                      
            var parametro = {'participanteId':participanteId};

            var url=Routing.generate('evaluacionUclResumen', parametro);

            wins2 = new dhtmlXWindows();
            skin=\"dhx_terrace\";
            wins2.setSkin(skin);

            winId=\"winEvaluacionCriterio\";

            wins2.createWindow(winId, 1, 1, 800, 600);
            wins2.window(winId).setText(\"<h5>Evaluacion Paticipante - Criterios</h5>\");

            wins2.window(winId).setModal(true);
            wins2.window(winId).button(\"minmax\").disable();                   
            wins2.window(winId).centerOnScreen();                   
            wins2.window(winId).progressOn();

            wins2.window(winId).setIconCss(\"without_icon\");

            wins2.window(winId).attachURL(url);

            wins2.window(winId).attachEvent(\"onContentLoaded\", function(id){
               id.progressOff();        
               var ifr = id.getFrame();
               ifr.contentWindow.wins=wins;
            });     
        }
        
        
        function evaluacionCc(participanteId) {
                                                                                                                      
            var parametro = {'participanteId':participanteId};

            var url=Routing.generate('evaluacionCcResumen', parametro);

            wins2 = new dhtmlXWindows();
            skin=\"dhx_terrace\";
            wins2.setSkin(skin);

            winId=\"winEvaluacionAprendizaje\";

            wins2.createWindow(winId, 1, 1, 800, 600);
            wins2.window(winId).setText(\"<h5>Evaluacion Paticipante - Competencia Conductual</h5>\");

            wins2.window(winId).setModal(true);
            wins2.window(winId).button(\"minmax\").disable();                   
            wins2.window(winId).centerOnScreen();                   
            wins2.window(winId).progressOn();

            wins2.window(winId).setIconCss(\"without_icon\");

            wins2.window(winId).attachURL(url);

            wins2.window(winId).attachEvent(\"onContentLoaded\", function(id){
               id.progressOff();        
               var ifr = id.getFrame();
               ifr.contentWindow.wins=wins;
            });     
        }
        
        
        function informeDnc(participanteId) {
        
            var parametro = {'informeTipo': '1', 'participanteId':participanteId};

            var url=Routing.generate('informePdf', parametro);

            wins2 = new dhtmlXWindows();
            skin=\"dhx_terrace\";
            wins2.setSkin(skin);

            winId=\"winInformeDnc\";

            wins2.createWindow(winId, 1, 1, 780, 560);
            wins2.window(winId).setText(\"<h5>Evaluacion Paticipante - Informe DNC</h5>\");

            wins2.window(winId).setModal(true);
            wins2.window(winId).button(\"minmax\").disable();                   
            wins2.window(winId).centerOnScreen();                   
            wins2.window(winId).progressOn();

            wins2.window(winId).setIconCss(\"without_icon\");

            wins2.window(winId).attachURL(url);

            wins2.window(winId).attachEvent(\"onContentLoaded\", function(id){
               id.progressOff();        
               var ifr = id.getFrame();
               ifr.contentWindow.wins=wins;
            });
            
            
        }
        
        function cerrar(winId) {
            //winId=\"winEvaluacionPreguntaCompetencia\";
            wins2.window(winId).close();
        }
        
        function progress(winId) {            
            wins2.window(winId).progressOn();
        }
        
        function refreshTabla() {
            //alert(\"aca\");
            var \$table = \$('#tblParticipante');
            \$table.bootstrapTable('refresh');
        }
        
      ";
        // line 397
        echo "        
        ";
        // line 402
        echo " 
        
        
       ";
        // line 418
        echo "    
    
        ";
        // line 437
        echo "                
       ";
        // line 446
        echo "            
       ";
        // line 450
        echo "        var myBackup = \$('#vtnParticipantes').clone();
        \$('#vtnParticipantes').on('hidden.bs.modal', function (e) {
            
                    //\$(e.target).removeData('bs.modal');
                    \$(this).removeData('bs.modal');
                    document.getElementById(\"btnAtras\").style.display=\"none\";
                    document.getElementById(\"btnAtras2\").style.display=\"none\";
                    document.getElementById(\"btnPaso2\").style.display=\"none\";
                    document.getElementById(\"btnPaso2\").style.display=\"none\";
                    document.getElementById(\"btnPaso1\").style.display=\"block\";
                    //alert(\"aca\");
                     //\$(this).data('bs.modal', null);
                   /* \$('#vtnParticipantes').modal('hide').remove();
                    var myClone = myBackup.clone();*/
                    //\$(this).removeData('bs.modal');
                    //\$(this).find('form')[0].reset();
                    //\$('body').append(myClone); 
                    \$(this).find('iframe').html(\"\");
                    \$(this).find('iframe').attr(\"src\", \"\");
                    // \$('#vtnParticipantes').removeData();
                     //\$(\"#vtnParticipantes\").remove();
                     //   \$('bs.modal-backdrop').remove();

                  })
                  
        function operateFormatter1(value, row, index) {
            return [
                '<button id=\"btnEvaluacionCompetencia\" name=\"btnEvaluacionCompetencia\" type=\"button\" class=\"evaluarCompetencia btn btn-primary btn-xs\">Evaluar Competencias</button>&nbsp;',
                '<button id=\"btnEvaluacionConocimiento\" name=\"btnEvaluacionConocimiento\" type=\"button\" class=\"evaluarConocimiento btn btn-primary btn-xs\">Evaluar Conocimientos</button>'
            ].join('');
        }
        
        function operateFormatter(value, row, index) {
            return [
                '<button id=\"btnEvaluacionCompetencia\" name=\"btnEvaluacionCompetencia\" type=\"button\" class=\"evaluarActividadClave btn btn-primary btn-xs\">UCLs</button>&nbsp;',
                '<button id=\"btnEvaluacionConocimiento\" name=\"btnEvaluacionConocimiento\" type=\"button\" class=\"evaluarCc btn btn-primary btn-xs\">Competencias Conductuales</button>'
            ].join('');
        }
        

        function operateAvance(value, row, index) {
            
            if (value==100) {                
                return ['<div class=\"progress\">',
                '<div class=\"progress-bar progress-bar-success\" role=\"progressbar\" aria-valuenow=\"',value,'\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: ',value,'%; min-width: 2em;\">',
                        value,'%',
                '</div>',
              '</div>'].join('');       
            } else if (value==0) {                          
                return ['<div class=\"progress\">',
              '<div class=\"progress-bar progress-bar-danger\" role=\"progressbar\" aria-valuenow=\"',value,'\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: ',value,'%; min-width: 2em;\">',
                      value,'%',
              '</div>',
            '</div>'].join('');        
            }  else  {                          
                return ['<div class=\"progress\">',
              '<div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"',value,'\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: ',value,'%; min-width: 2em;\">',
                      value,'%',
              '</div>',
                '</div>'].join('');        
            }       
        }

        function opcionesPdf(value, row, index) {
          return ['<a href=\"#\" class=\"pdf has-tooltip-bottom\" title=\"\" data-original-title=\"Tooltip\"  >',
                        '<img src=\"";
        // line 515
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/pdf.png"), "html", null, true);
        echo "\" >',
                    '</a>'
                ].join('');    
        }
        
        window.operateEvents = {
        
            'click .evaluarActividadClave': function (e, value, row, index) {
                 evaluacionActividadClave(row.participante_id);
                 
            },
            
             'click .evaluarCc': function (e, value, row, index) {
                 evaluacionCc(row.participante_id);
                 
            },
            
            
            'click .evaluarCompetencia': function (e, value, row, index) {
                 evaluacionParticipanteCompetencias(row.participante_id);
                 
            },
            
            'click .evaluarConocimiento': function (e, value, row, index) {
                 evaluacionParticipanteConocimientos(row.participante_id);
                 
            },
            
            'click .pdf': function (e, value, row, index) {
                 informeDnc(row.participante_id);
                 
            }
            
            
        };
    
    
    function evaluacionParticipante(evaluacionId, participanteId, perfilId, personaNombre, perfilNombre) {
        
        var parametro = {'evaluacionId':evaluacionId, 'participanteId':participanteId, 'perfilId': perfilId, 'competenciaId':'6'};
        //var url = Routing.generate('evaluacionParticipanteEvaluar', parametro);
        //alert(url);
        var url = Routing.generate('evaluacionPreguntaCompetencia', parametro);
        //alert(url);
        //document.location.href=url;        
        //\$('#myModalPersonas').val('');
        ";
        // line 562
        echo "        //\$(\"#myModalPersonas iframe\").attr({'src':''});
        //\$(\"#vtnParticipantes\").html('loading....');
        //\$(\".modal-body1\").html(\"Where did he go?!?!?!\");
        
        \$(\"#vtnParticipantes\").find('.modal-title').text('Evaluando a: ' + personaNombre + \"  [\" + perfilNombre + \"]\");
        \$(\"#vtnParticipantes iframe\").attr({'src':url,
                           'height': 450,
                           'width': '100%'});
        \$(\"#vtnParticipantes\").modal(\"hide\");    
        \$(\"#vtnParticipantes\").modal(\"show\");    

    }
    //document.getElementById('frmParticipante').contentWindow.laFuncion();
    
    function competenciaEvaluar(competenciaId) {
        var preguntaTipo=\"1\";
        alert(\"aca\");
        document.getElementById('frmParticipante').contentWindow.competenciaEvaluar(preguntaTipo, competenciaId);
        
    }
    
    function frmSubmit(accion) {

        switch (accion) {  
            case \"0\":  //Evaluacion de competencias y conocimientos
                document.getElementById(\"btnAtras\").style.display=\"none\";
                document.getElementById(\"btnPaso2\").style.display=\"none\";
                document.getElementById(\"btnPaso1\").style.display=\"block\";                
                document.getElementById('frmParticipante').contentWindow.frmSubmit(\"0\");
                break; 
            case \"1\": //Evaluacion de preguntas de competencias                             
                document.getElementById(\"btnPaso1\").style.display=\"none\";
                document.getElementById(\"btnAtras2\").style.display=\"none\";
                document.getElementById(\"btnPaso3\").style.display=\"none\";
                document.getElementById(\"btnAtras\").style.display=\"block\";
                document.getElementById(\"btnPaso2\").style.display=\"block\";
                document.getElementById('frmParticipante').contentWindow.frmSubmit(\"1\");
                break;
            case \"2\": //Evaluacion de preugntas de conocomiento
                document.getElementById(\"btnPaso1\").style.display=\"none\";
                document.getElementById(\"btnPaso2\").style.display=\"none\";
                document.getElementById(\"btnAtras\").style.display=\"none\";
                document.getElementById(\"btnPaso3\").style.display=\"block\";                
                document.getElementById(\"btnAtras2\").style.display=\"block\";
                document.getElementById('frmParticipante').contentWindow.frmSubmit(\"3\");
                break;
            case \"3\": //Finalizar evaluacion
                document.getElementById(\"btnPaso1\").style.display=\"none\";
                document.getElementById(\"btnPaso2\").style.display=\"none\";
                document.getElementById(\"btnPaso3\").style.display=\"none\";                    
                document.getElementById('frmParticipante').contentWindow.frmSubmit(\"3\");
                break;
            
        }
        
    }
        
    
           
    </script>
";
        
        $__internal_0056e11bfd6e6919fe138f85ba1496f2bf7e497f7001d43a074aa94962c31c01->leave($__internal_0056e11bfd6e6919fe138f85ba1496f2bf7e497f7001d43a074aa94962c31c01_prof);

    }

    public function getTemplateName()
    {
        return "GtSistemaBundle:Evaluacion:participantes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  516 => 562,  467 => 515,  400 => 450,  397 => 446,  394 => 437,  390 => 418,  385 => 402,  382 => 397,  192 => 205,  182 => 198,  176 => 193,  171 => 118,  132 => 80,  104 => 53,  100 => 50,  88 => 41,  76 => 31,  73 => 30,  62 => 13,  57 => 9,  54 => 6,  48 => 5,  36 => 2,  11 => 1,);
    }
}
/* {% extends 'GtSistemaBundle::base.html.twig' %}*/
/* {% block title %} Gestionatalento {% endblock %}*/
/* {#{% block dondeEstoy %}Empresa Cambiar{% endblock %}#}*/
/* */
/* {% block body %}*/
/* */
/*     {#<div class="container"> #}*/
/* {#        <div class="center-block" >#}*/
/* */
/* */
/*     <div class="container">     */
/* {#{{ form_start(form) }}#}*/
/* */
/*            */
/* <div class="center-block" >    */
/*         <div class="panel panel-primary">*/
/*             <div class="panel-heading">*/
/*                 <h3 class="panel-title">Participantes Evaluacion</h3>*/
/*             </div>*/
/*             <div class="panel-body"  >*/
/*       */
/*               {#  <div id="custom-toolbar2">*/
/*                     <button id='btnPersona' type="button" class="btn btn-primary" data-toggle="modal" data-target="#vtnPersona">*/
/*                         Nueva Persona*/
/*                     </button> */
/*                     */
/*                     <button id='btnPersonaImportar' type="button" class="btn btn-primary" data-toggle="modal" data-target="#vtnPersona">*/
/*                         Importar*/
/*                     </button>                                         */
/*                 </div>#}                             */
/*                 {{path('evaluacionParticipantesTabla', {'evaluacionId': evaluacionId })}}*/
/*                 <table id='tblParticipante' data-classes="table table-condensed" */
/*                        data-toggle="table" */
/*                        data-cache="false" */
/*                        data-height="400" */
/*                        data-striped="true"  */
/*                        data-pagination="true"*/
/*                        data-search="true" */
/*                        data-show-refresh="true"*/
/*                        {#data-toolbar="#custom-toolbar2"#}*/
/*                        data-url="{{path('evaluacionParticipantesTabla', {'evaluacionId': evaluacionId })}}">*/
/*                     <thead>*/
/*                     <tr>*/
/*                         <th data-field="id" data-sortable="true" data-visible="false">#</th>*/
/*                         <th data-field="empresa_id" data-visible="false">Emp</th>                        */
/*                         <th data-field="evaluacion_id" data-visible="false">Eva</th>*/
/*                         <th data-field="perfil_id" data-visible="false">Per</th>                        */
/*                         <th data-field="participante_id" data-visible="false">Par</th>   */
/*                         {#<th data-field="personaRut" data-sortable="true">Rut</th>#}*/
/*                         <th data-field="personaNombre" data-sortable="true">Nombre</th>                        */
/*                         <th data-field="perfilNombre" data-sortable="true">Cargo</th>                        */
/*                         {#<th data-field="personaId" data-visible="true">Superior</th>#}*/
/*                         <th data-field="evaluacionEstado" data-formatter="operateAvance"  data-visible="true" data-sortable="true" data-width="100">% Avance</th>*/
/*                         <th data-formatter="operateFormatter" data-events="operateEvents" data-width="300">Evaluaciones</th>*/
/*                         <th data-formatter="opcionesPdf" data-events="operateEvents" data-align="center" >Informe DNC</th>*/
/*                         */
/*                     </tr>*/
/*                     </thead>*/
/*                     */
/*                 </table>*/
/*                  */
/*                 */
/*            </div>*/
/*         </div>*/
/*                         */
/*                         */
/* <!-- window evaluacion participante -->*/
/*     <div class="modal fade" id="vtnParticipantes" tabindex="-1" role="dialog" aria-hidden="true">*/
/*         <div class="modal-dialog modal-lg">*/
/*             <div class="modal-content modal-lg" >*/
/*                 <div class="modal-header bg-info">*/
/*                     <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>*/
/*                     <h4 class="modal-title">Evaluando a: </h4>*/
/*                 </div>*/
/*                 <div class="modal-body" id="myModalPersonasBody" style="margin: 0px 0px 0px 0px;  padding: 0px 0px 0px 0px">*/
/*                     <iframe id="frmParticipante" src="" frameborder="0"  ></iframe>*/
/*                 </div>*/
/*                 <div class="modal-footer">*/
/*                     {#<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>#}*/
/*                     <nav>*/
/*                         <ul class="pagination">*/
/*                           <li>*/
/*                             <a href="#" aria-label="Previous">*/
/*                               <span aria-hidden="true">&laquo;</span>*/
/*                             </a>*/
/*                           </li>*/
/*                           <li><a href="#">Inicio</a></li>*/
/*                           <li class="active"><a href="#" onclick="competenciaEvaluar(6)">1</a></li>*/
/*                           <li><a href="#" onclick="competenciaEvaluar(7)">2</a></li>*/
/*                           <li><a href="#">3</a></li>*/
/*                           <li><a href="#">4</a></li>*/
/*                           <li><a href="#">5</a></li>*/
/*                           <li><a href="#">6</a></li>*/
/*                           <li><a href="#">7</a></li>*/
/*                           <li><a href="#">8</a></li>*/
/*                           <li><a href="#">9</a></li>*/
/*                           <li>*/
/*                             <a href="#" aria-label="Next">*/
/*                               <span aria-hidden="true">&raquo;</span>*/
/*                             </a>*/
/*                           </li>*/
/*                         </ul>*/
/*                       </nav>*/
/* */
/*                     <button id="btnAtras" type="button" class="btn btn-primary" onclick="frmSubmit('0')" style="display:none; float: left"><< Volver al paso 1</button>*/
/*                     <button id="btnAtras2" type="button" class="btn btn-primary" onclick="frmSubmit('1')" style="display:none; float: left"><< Volver al paso 2</button>*/
/*                     <button id="btnPaso1" type="button" class="btn btn-primary" onclick="frmSubmit('1')" style="display:block; float: right">Avanzar al paso 2 >> </button>*/
/*                     <button id="btnPaso2" type="button" class="btn btn-primary" onclick="frmSubmit('2')" style="display:none; float: right">Avanzar al paso 3 >> </button>*/
/*                     <button id="btnPaso3" type="button" class="btn btn-primary" onclick="frmSubmit('3')" style="display:none; float: right">Finalizar</button>*/
/*                     */
/*                 </div>*/
/*             </div> <!-- /.modal-content -->*/
/*         </div> <!-- /.modal-dialog -->*/
/*     </div> <!-- /.modal -->*/
/*     */
/*     */
/*         {#</div>          #}*/
/*       {#</div>#}       */
/*     <!-- start: Delete Coupon Modal -->*/
/*  {#   <div class="modal fade" id="vtnPersonaBorrar" tabindex="-1" role="dialog" aria-labelledby="vtnPersonaLabel" aria-hidden="true">*/
/*         <div class="modal-dialog">*/
/*             <div class="modal-content">*/
/*                 <div class="modal-header bg-danger">*/
/*                     <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>*/
/*                      <h3 class="modal-title" id="myModaBorrarlLabel">Atencion!</h3>*/
/* */
/*                 </div>*/
/*                 <div class="modal-body" id="vtnPersonaBodyBorrar">*/
/*                      <h4> Esta seguro de borrar?</h4>*/
/*                      <input type="hidden" name="tbxPersonaId" id="tbxPersonaId">*/
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
/*     <div class="modal fade" id="vtnPersona" tabindex="-1" role="dialog" aria-labelledby="vtnPersonaLabel">*/
/*         <div class="modal-dialog modal-lg" role="document">*/
/*             <div class="modal-content modal-lg">*/
/*                 <div class="modal-header bg-primary">*/
/*                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>*/
/*                     <h4 class="modal-title" id="vtnPersonaLabel">Nueva Persona</h4>*/
/*                 </div>*/
/*                 <div class="modal-body" id="vtnPersonaBody">                */
/*                     {{ form_widget(form.id) }}*/
/*                     {{ form_errors(form.id) }}*/
/*                    */
/*                     <p>*/
/*                         <label>Rut</label>*/
/*                         {{ form_widget(form.personaRut) }} */
/*                         {{ form_errors(form.personaRut) }}*/
/*                     </p>*/
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
/*                     */
/*                     <p>*/
/*                        <label>Superior</label>    */
/*                        {{ form_widget(form.personaId) }} */
/*                        {{ form_errors(form.personaId) }}*/
/*                     </p>*/
/*                     */
/*                 </div>*/
/*                 <div class="modal-footer">*/
/*                     <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>*/
/*                     <button type="submit" class="btn btn-primary" >Guardar Persona</button>*/
/*                 </div>*/
/*             </div> <!-- /.modal-content -->*/
/*         </div> <!-- /.modal-dialog -->*/
/*     </div> <!-- /.modal -->*/
/* */
/*     </div>*/
/*                        */
/* {{ form_rest(form) }}*/
/* {{ form_end(form) }}#}*/
/* */
/* </div>*/
/* */
/* */
/* {#       </div>#}*/
/* */
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
/*         */
/*         var wins;*/
/*         var wins2;*/
/*         var winId;*/
/*         function evaluacionParticipanteCompetencias(participanteId) {*/
/*                                                                                                                       */
/*             var parametro = {'participanteId':participanteId};*/
/* */
/*             var url=Routing.generate('evaluacionPreguntaCompetenciaResumen', parametro);*/
/* */
/*             wins2 = new dhtmlXWindows();*/
/*             skin="dhx_terrace";*/
/*             wins2.setSkin(skin);*/
/* */
/*             winId="winEvaluacionPreguntaCompetencia";*/
/* */
/*             wins2.createWindow(winId, 1, 1, 780, 560);*/
/*             wins2.window(winId).setText("<h5>Evaluacion Paticipante - Competencias</h5>");*/
/* */
/*             wins2.window(winId).setModal(true);*/
/*             wins2.window(winId).button("minmax").disable();                   */
/*             wins2.window(winId).centerOnScreen();                   */
/*             wins2.window(winId).progressOn();*/
/* */
/*             wins2.window(winId).setIconCss("without_icon");*/
/* */
/*             wins2.window(winId).attachURL(url);*/
/* */
/*             wins2.window(winId).attachEvent("onContentLoaded", function(id){*/
/*                id.progressOff();        */
/*                var ifr = id.getFrame();*/
/*                ifr.contentWindow.wins=wins;*/
/*             });     */
/*         }*/
/*         */
/*         function evaluacionParticipanteConocimientos(participanteId) {*/
/*                                                                                                                       */
/*             var parametro = {'participanteId':participanteId};*/
/* */
/*             var url=Routing.generate('evaluacionPreguntaConocimientoResumen', parametro);*/
/* */
/*             wins2 = new dhtmlXWindows();*/
/*             skin="dhx_terrace";*/
/*             wins2.setSkin(skin);*/
/* */
/*             winId="winEvaluacionPreguntaConocimiento";*/
/* */
/*             wins2.createWindow(winId, 1, 1, 780, 560);*/
/*             wins2.window(winId).setText("<h5>Evaluacion Paticipante - Conocimientos</h5>");*/
/* */
/*             wins2.window(winId).setModal(true);*/
/*             wins2.window(winId).button("minmax").disable();                   */
/*             wins2.window(winId).centerOnScreen();                   */
/*             wins2.window(winId).progressOn();*/
/* */
/*             wins2.window(winId).setIconCss("without_icon");*/
/* */
/*             wins2.window(winId).attachURL(url);*/
/* */
/*             wins2.window(winId).attachEvent("onContentLoaded", function(id){*/
/*                id.progressOff();        */
/*                var ifr = id.getFrame();*/
/*                ifr.contentWindow.wins=wins;*/
/*             });     */
/*         }*/
/*         */
/*         */
/*         function evaluacionActividadClave(participanteId) {*/
/*                                                                                                                       */
/*             var parametro = {'participanteId':participanteId};*/
/* */
/*             var url=Routing.generate('evaluacionUclResumen', parametro);*/
/* */
/*             wins2 = new dhtmlXWindows();*/
/*             skin="dhx_terrace";*/
/*             wins2.setSkin(skin);*/
/* */
/*             winId="winEvaluacionCriterio";*/
/* */
/*             wins2.createWindow(winId, 1, 1, 800, 600);*/
/*             wins2.window(winId).setText("<h5>Evaluacion Paticipante - Criterios</h5>");*/
/* */
/*             wins2.window(winId).setModal(true);*/
/*             wins2.window(winId).button("minmax").disable();                   */
/*             wins2.window(winId).centerOnScreen();                   */
/*             wins2.window(winId).progressOn();*/
/* */
/*             wins2.window(winId).setIconCss("without_icon");*/
/* */
/*             wins2.window(winId).attachURL(url);*/
/* */
/*             wins2.window(winId).attachEvent("onContentLoaded", function(id){*/
/*                id.progressOff();        */
/*                var ifr = id.getFrame();*/
/*                ifr.contentWindow.wins=wins;*/
/*             });     */
/*         }*/
/*         */
/*         */
/*         function evaluacionCc(participanteId) {*/
/*                                                                                                                       */
/*             var parametro = {'participanteId':participanteId};*/
/* */
/*             var url=Routing.generate('evaluacionCcResumen', parametro);*/
/* */
/*             wins2 = new dhtmlXWindows();*/
/*             skin="dhx_terrace";*/
/*             wins2.setSkin(skin);*/
/* */
/*             winId="winEvaluacionAprendizaje";*/
/* */
/*             wins2.createWindow(winId, 1, 1, 800, 600);*/
/*             wins2.window(winId).setText("<h5>Evaluacion Paticipante - Competencia Conductual</h5>");*/
/* */
/*             wins2.window(winId).setModal(true);*/
/*             wins2.window(winId).button("minmax").disable();                   */
/*             wins2.window(winId).centerOnScreen();                   */
/*             wins2.window(winId).progressOn();*/
/* */
/*             wins2.window(winId).setIconCss("without_icon");*/
/* */
/*             wins2.window(winId).attachURL(url);*/
/* */
/*             wins2.window(winId).attachEvent("onContentLoaded", function(id){*/
/*                id.progressOff();        */
/*                var ifr = id.getFrame();*/
/*                ifr.contentWindow.wins=wins;*/
/*             });     */
/*         }*/
/*         */
/*         */
/*         function informeDnc(participanteId) {*/
/*         */
/*             var parametro = {'informeTipo': '1', 'participanteId':participanteId};*/
/* */
/*             var url=Routing.generate('informePdf', parametro);*/
/* */
/*             wins2 = new dhtmlXWindows();*/
/*             skin="dhx_terrace";*/
/*             wins2.setSkin(skin);*/
/* */
/*             winId="winInformeDnc";*/
/* */
/*             wins2.createWindow(winId, 1, 1, 780, 560);*/
/*             wins2.window(winId).setText("<h5>Evaluacion Paticipante - Informe DNC</h5>");*/
/* */
/*             wins2.window(winId).setModal(true);*/
/*             wins2.window(winId).button("minmax").disable();                   */
/*             wins2.window(winId).centerOnScreen();                   */
/*             wins2.window(winId).progressOn();*/
/* */
/*             wins2.window(winId).setIconCss("without_icon");*/
/* */
/*             wins2.window(winId).attachURL(url);*/
/* */
/*             wins2.window(winId).attachEvent("onContentLoaded", function(id){*/
/*                id.progressOff();        */
/*                var ifr = id.getFrame();*/
/*                ifr.contentWindow.wins=wins;*/
/*             });*/
/*             */
/*             */
/*         }*/
/*         */
/*         function cerrar(winId) {*/
/*             //winId="winEvaluacionPreguntaCompetencia";*/
/*             wins2.window(winId).close();*/
/*         }*/
/*         */
/*         function progress(winId) {            */
/*             wins2.window(winId).progressOn();*/
/*         }*/
/*         */
/*         function refreshTabla() {*/
/*             //alert("aca");*/
/*             var $table = $('#tblParticipante');*/
/*             $table.bootstrapTable('refresh');*/
/*         }*/
/*         */
/*       {#  function cerrar() {*/
/*             winId="winEvaluacionPreguntaCompetencia";*/
/*             wins2.window(winId).close();*/
/*         }*/
/*         */
/*         function progress() {*/
/*             winId="winEvaluacionPreguntaCompetencia";*/
/*             wins2.window(winId).progressOn();*/
/*         }#}*/
/*         */
/*         {#function refreshTabla() {*/
/*             //alert("aca");*/
/*             var $table = $('#tblPregunta');*/
/*             $table.bootstrapTable('refresh');*/
/*         } #} */
/*         */
/*         */
/*        {# var id = 0,*/
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
/*         }#}*/
/*     */
/*     */
/*         {#function personaNuevo() {*/
/*             document.getElementById("dvPersona").style.display="block";*/
/*             {#var parametro = {'empresaId': '1', 'clienteId':'1'};*/
/*             var url = Routing.generate('personaRegistrar', parametro);*/
/*                     */
/*             BootstrapDialog.show({*/
/*                 message: $('<div></div>').load(url),*/
/*                 animate: false,*/
/*                 cssClass: 'login-dialog',*/
/*                 buttons: [{*/
/*                     label: 'Close the dialog',*/
/*                     action: function(dialogRef){*/
/*                         dialogRef.close();*/
/*                     }*/
/*                 }]*/
/*                 */
/*             });#}*/
/*                 */
/*        {# function frmBorrar() {            */
/*             //var objPanelFiltroAno = document.querySelector("#panelFiltroAno");            */
/*             var personaId= document.getElementById("tbxPersonaId").value ;            */
/*             var url = Routing.generate('personaBorrar',{"personaId": personaId});*/
/*                       */
/*             document.thisform.action=url*/
/*             document.thisform.submit();            */
/*         }#}*/
/*             */
/*        {# $("#mimodal").on('hidden.bs.modal', function () {*/
/*             $(this).data('bs.modal', null);*/
/*         });#}*/
/*         var myBackup = $('#vtnParticipantes').clone();*/
/*         $('#vtnParticipantes').on('hidden.bs.modal', function (e) {*/
/*             */
/*                     //$(e.target).removeData('bs.modal');*/
/*                     $(this).removeData('bs.modal');*/
/*                     document.getElementById("btnAtras").style.display="none";*/
/*                     document.getElementById("btnAtras2").style.display="none";*/
/*                     document.getElementById("btnPaso2").style.display="none";*/
/*                     document.getElementById("btnPaso2").style.display="none";*/
/*                     document.getElementById("btnPaso1").style.display="block";*/
/*                     //alert("aca");*/
/*                      //$(this).data('bs.modal', null);*/
/*                    /* $('#vtnParticipantes').modal('hide').remove();*/
/*                     var myClone = myBackup.clone();*//* */
/*                     //$(this).removeData('bs.modal');*/
/*                     //$(this).find('form')[0].reset();*/
/*                     //$('body').append(myClone); */
/*                     $(this).find('iframe').html("");*/
/*                     $(this).find('iframe').attr("src", "");*/
/*                     // $('#vtnParticipantes').removeData();*/
/*                      //$("#vtnParticipantes").remove();*/
/*                      //   $('bs.modal-backdrop').remove();*/
/* */
/*                   })*/
/*                   */
/*         function operateFormatter1(value, row, index) {*/
/*             return [*/
/*                 '<button id="btnEvaluacionCompetencia" name="btnEvaluacionCompetencia" type="button" class="evaluarCompetencia btn btn-primary btn-xs">Evaluar Competencias</button>&nbsp;',*/
/*                 '<button id="btnEvaluacionConocimiento" name="btnEvaluacionConocimiento" type="button" class="evaluarConocimiento btn btn-primary btn-xs">Evaluar Conocimientos</button>'*/
/*             ].join('');*/
/*         }*/
/*         */
/*         function operateFormatter(value, row, index) {*/
/*             return [*/
/*                 '<button id="btnEvaluacionCompetencia" name="btnEvaluacionCompetencia" type="button" class="evaluarActividadClave btn btn-primary btn-xs">UCLs</button>&nbsp;',*/
/*                 '<button id="btnEvaluacionConocimiento" name="btnEvaluacionConocimiento" type="button" class="evaluarCc btn btn-primary btn-xs">Competencias Conductuales</button>'*/
/*             ].join('');*/
/*         }*/
/*         */
/* */
/*         function operateAvance(value, row, index) {*/
/*             */
/*             if (value==100) {                */
/*                 return ['<div class="progress">',*/
/*                 '<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="',value,'" aria-valuemin="0" aria-valuemax="100" style="width: ',value,'%; min-width: 2em;">',*/
/*                         value,'%',*/
/*                 '</div>',*/
/*               '</div>'].join('');       */
/*             } else if (value==0) {                          */
/*                 return ['<div class="progress">',*/
/*               '<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="',value,'" aria-valuemin="0" aria-valuemax="100" style="width: ',value,'%; min-width: 2em;">',*/
/*                       value,'%',*/
/*               '</div>',*/
/*             '</div>'].join('');        */
/*             }  else  {                          */
/*                 return ['<div class="progress">',*/
/*               '<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="',value,'" aria-valuemin="0" aria-valuemax="100" style="width: ',value,'%; min-width: 2em;">',*/
/*                       value,'%',*/
/*               '</div>',*/
/*                 '</div>'].join('');        */
/*             }       */
/*         }*/
/* */
/*         function opcionesPdf(value, row, index) {*/
/*           return ['<a href="#" class="pdf has-tooltip-bottom" title="" data-original-title="Tooltip"  >',*/
/*                         '<img src="{{ asset('images/pdf.png') }}" >',*/
/*                     '</a>'*/
/*                 ].join('');    */
/*         }*/
/*         */
/*         window.operateEvents = {*/
/*         */
/*             'click .evaluarActividadClave': function (e, value, row, index) {*/
/*                  evaluacionActividadClave(row.participante_id);*/
/*                  */
/*             },*/
/*             */
/*              'click .evaluarCc': function (e, value, row, index) {*/
/*                  evaluacionCc(row.participante_id);*/
/*                  */
/*             },*/
/*             */
/*             */
/*             'click .evaluarCompetencia': function (e, value, row, index) {*/
/*                  evaluacionParticipanteCompetencias(row.participante_id);*/
/*                  */
/*             },*/
/*             */
/*             'click .evaluarConocimiento': function (e, value, row, index) {*/
/*                  evaluacionParticipanteConocimientos(row.participante_id);*/
/*                  */
/*             },*/
/*             */
/*             'click .pdf': function (e, value, row, index) {*/
/*                  informeDnc(row.participante_id);*/
/*                  */
/*             }*/
/*             */
/*             */
/*         };*/
/*     */
/*     */
/*     function evaluacionParticipante(evaluacionId, participanteId, perfilId, personaNombre, perfilNombre) {*/
/*         */
/*         var parametro = {'evaluacionId':evaluacionId, 'participanteId':participanteId, 'perfilId': perfilId, 'competenciaId':'6'};*/
/*         //var url = Routing.generate('evaluacionParticipanteEvaluar', parametro);*/
/*         //alert(url);*/
/*         var url = Routing.generate('evaluacionPreguntaCompetencia', parametro);*/
/*         //alert(url);*/
/*         //document.location.href=url;        */
/*         //$('#myModalPersonas').val('');*/
/*         {#$('#winParticipantes').find('.modal-body #myModalPersonasProgres').attr("style", "display:block");#}*/
/*         //$("#myModalPersonas iframe").attr({'src':''});*/
/*         //$("#vtnParticipantes").html('loading....');*/
/*         //$(".modal-body1").html("Where did he go?!?!?!");*/
/*         */
/*         $("#vtnParticipantes").find('.modal-title').text('Evaluando a: ' + personaNombre + "  [" + perfilNombre + "]");*/
/*         $("#vtnParticipantes iframe").attr({'src':url,*/
/*                            'height': 450,*/
/*                            'width': '100%'});*/
/*         $("#vtnParticipantes").modal("hide");    */
/*         $("#vtnParticipantes").modal("show");    */
/* */
/*     }*/
/*     //document.getElementById('frmParticipante').contentWindow.laFuncion();*/
/*     */
/*     function competenciaEvaluar(competenciaId) {*/
/*         var preguntaTipo="1";*/
/*         alert("aca");*/
/*         document.getElementById('frmParticipante').contentWindow.competenciaEvaluar(preguntaTipo, competenciaId);*/
/*         */
/*     }*/
/*     */
/*     function frmSubmit(accion) {*/
/* */
/*         switch (accion) {  */
/*             case "0":  //Evaluacion de competencias y conocimientos*/
/*                 document.getElementById("btnAtras").style.display="none";*/
/*                 document.getElementById("btnPaso2").style.display="none";*/
/*                 document.getElementById("btnPaso1").style.display="block";                */
/*                 document.getElementById('frmParticipante').contentWindow.frmSubmit("0");*/
/*                 break; */
/*             case "1": //Evaluacion de preguntas de competencias                             */
/*                 document.getElementById("btnPaso1").style.display="none";*/
/*                 document.getElementById("btnAtras2").style.display="none";*/
/*                 document.getElementById("btnPaso3").style.display="none";*/
/*                 document.getElementById("btnAtras").style.display="block";*/
/*                 document.getElementById("btnPaso2").style.display="block";*/
/*                 document.getElementById('frmParticipante').contentWindow.frmSubmit("1");*/
/*                 break;*/
/*             case "2": //Evaluacion de preugntas de conocomiento*/
/*                 document.getElementById("btnPaso1").style.display="none";*/
/*                 document.getElementById("btnPaso2").style.display="none";*/
/*                 document.getElementById("btnAtras").style.display="none";*/
/*                 document.getElementById("btnPaso3").style.display="block";                */
/*                 document.getElementById("btnAtras2").style.display="block";*/
/*                 document.getElementById('frmParticipante').contentWindow.frmSubmit("3");*/
/*                 break;*/
/*             case "3": //Finalizar evaluacion*/
/*                 document.getElementById("btnPaso1").style.display="none";*/
/*                 document.getElementById("btnPaso2").style.display="none";*/
/*                 document.getElementById("btnPaso3").style.display="none";                    */
/*                 document.getElementById('frmParticipante').contentWindow.frmSubmit("3");*/
/*                 break;*/
/*             */
/*         }*/
/*         */
/*     }*/
/*         */
/*     */
/*            */
/*     </script>*/
/* {% endblock %}*/
/* */
/* */
