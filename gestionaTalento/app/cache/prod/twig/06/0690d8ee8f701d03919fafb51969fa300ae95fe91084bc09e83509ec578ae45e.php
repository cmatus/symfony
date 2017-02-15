<?php

/* ::base.html.twig */
class __TwigTemplate_3b08abe1595276d2bcbf28e3bc62025f52c166471ddca57736b94e71e7b7559c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "

<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"Content-Language\" content=\"es\"/> 
    <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo " \"/>
";
        // line 13
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap-table.css"), "html", null, true);
        echo " \"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap-dialog.min.css"), "html", null, true);
        echo " \"/>
    
    ";
        // line 17
        echo "    
    
    ";
        // line 21
        echo "    ";
        // line 22
        echo "    ";
        // line 23
        echo "    ";
        // line 26
        echo "    ";
        // line 27
        echo "    ";
        // line 28
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/skins/terrace/dhtmlx.css"), "html", null, true);
        echo " \"/>
    ";
        // line 30
        echo "    
    ";
        // line 36
        echo "    
    
    
";
        // line 40
        echo "    
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    
    <script type=\"text/javascript\" src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    
    ";
        // line 53
        echo "    
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\" integrity=\"sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS\" crossorigin=\"anonymous\"></script>
    
    
    <script src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap-table.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap-dialog.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap-table-export.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 61
        echo "    ";
        // line 67
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/suitestd/codebase/dhtmlx.js"), "html", null, true);
        echo "\"></script>
    
    ";
        // line 70
        echo "    
    ";
        // line 72
        echo "    
    
    
";
        // line 78
        echo "    
    
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    
    <!-- Bootstrap -->
       
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
      <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
    
    <style>
        
        .dhx_cell_wins {
         left:3px;   
        }
    </style>
    
    <style>
            #recuadro{
        position:absolute;
        height: 280px;
        width: 480px;
        border: 1px solid #999999;
        display: table;
    }
            
    #foto {
        position:relative;
        display: table-cell;
        vertical-align:middle;
        text-align:center;
    }
        
    .resize2 {
  border: 3px double #333;
  float: left;
  height: 12em;
  margin: .2em 1em 1em 0;
  overflow: hidden;
  width: 12em;
}

.resize2 img {
  margin: -220px 0 0 -210px;
  padding: 6em 0 0 6em;
}

.delimitador{
\twidth:250px;\t/* Ancho máximo */
\tmargin:auto;\t/* Centramos el vídeo */
}
.contenedor{
\theight:60px;
\twidth:100%;
\t//padding-top:56.25%; /* Relación: 16/9 = 56.25% */
\tposition:relative;
}

.contenedor img{
\tposition:absolute;
\theight:60px;
\t//width:100%;
\ttop:0px;
\tleft:0px;        
        max-height: 50px
}
.empresaImagen {
    width:200px; 
    background-color: #ffffff; 
    border:2px solid #3da0e3    
}

.outer-container {
    border: 2px solid black;
    height: 100px;
    width: 300px;
    display: inline-block;    
}

.bottom-section {
    background: lightblue;
    height:100%;
    marin:8px;    
}

.bottom-aligner {
    display: inline-block;
    height: 50%;
    vertical-align: bottom;
    width:3px;
    background: red;
    float: left
}

.bottom-content {
    display: inline-block;
}

.column {
  width: 30%;
  height: 55px;
  float: right;
  //padding: 1em;
  background: white;
}

.container1 {
  background: #ccc;
  text-align: center;
  height: 55px;
  padding: 0px;
  position: relative;
}

.right .container {
  height: 55px;
}

.vertical-align-wrap {
  position: absolute;
  width: 100%;
  height: 100%;
  display: table;
}

.vertical-align {
  background: white;
  display: table-cell;
}

.vertical-align--middle {
  vertical-align: middle;
}

.vertical-align--bottom {
  vertical-align: bottom;
  text-align:right;
  line-height: 18px;
  padding-right: 5px;
}

    </style>
    
    
    <style type='text/css'>
#parentMenu {
  display: block;
  top: 0;
}
/* Helps position submenu */
.dropdown-submenu {
  position: relative;
}
/* Menus under the submenu should show up on the right of the parent */
.dropdown-submenu>.dropdown-menu {
  top: 0;
  left: 100%;
  margin-top: -6px;
  margin-left: -1px;
  -webkit-border-radius: 0 6px 6px 6px;
  -moz-border-radius: 0 6px 6px 6px;
  border-radius: 0 6px 6px 6px;
}
/* Make submenu visible when hovering on link */
.dropdown-submenu:hover>.dropdown-menu {
  display: block;
}
/* Add carot to submenu links */
.dropdown-submenu>a:after {
  display: block;
  float: right;
  /*simple */
  content: \"?\";
  color: #cccccc;
  /* looks a little better */
  content: \" \";
  width: 0;
  height: 0;
  border-color: transparent;
  border-style: solid;
  border-width: 5px 0 5px 5px;
  border-left-color: #cccccc;
  margin-top: 5px;
  margin-right: -10px;
}
/* Change carot color on hover */
.dropdown-submenu:hover>a:after {
  border-left-color: #ffffff;
}
</style>


  </head>
  <body>
   ";
        // line 281
        echo "\t";
        // line 283
        echo "      
    ";
        // line 285
        echo "    <div style=\"padding:5px\" >
        <div style=\"display: inline; height: 100px; border: 0px solid #000000; vertical-align:middle; border: 0px solid #000000; padding-left: 10px\" > 
            <img src=\"";
        // line 287
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/clientes/logo_gestionaTalento.png"), "html", null, true);
        echo "\"  style=\" height: 50px\" >
        </div>
        
      ";
        // line 293
        echo "        
      <div class=\"column right\">
        <div class=\"container1\">
          <div class=\"vertical-align-wrap\">
            <div class=\"vertical-align vertical-align--bottom\">
                <b>";
        // line 298
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "username", array()), "html", null, true);
        echo "</b><br/>
                <b>";
        // line 299
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "get", array(0 => "empresaRazonSocial"), "method"), "html", null, true);
        echo "</b><br/>
                <a href=\"#\">Cambiar Empresa</a>
            </div>
          </div>
        </div>
      </div>
                                            
    </div>
    <nav class=\"navbar navbar-default\">
  <div class=\"container-fluid\" style=\"margin-left: 0px; margin-right: 0px; padding-left: 0px; padding-right: 0px\">
    <!-- Brand and toggle get grouped for better mobile display -->
   ";
        // line 318
        echo "
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\" style=\"margin-left: 0px; margin-right: 5px; padding-left: 0px; padding-right: 5px\">
";
        // line 337
        echo "          
          
      <ul class=\"nav navbar-nav\">
        ";
        // line 340
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "get", array(0 => "usuarioTipoId"), "method") == 1)) {
            // line 341
            echo "            <li><a href=\"#\">Inicio</a></li>        
            <li><a href=\"";
            // line 342
            echo $this->env->getExtension('routing')->getPath("maestroMenu");
            echo "\">Maestros</a></li>
        ";
        }
        // line 344
        echo "        
        <li><a href=\"";
        // line 345
        echo $this->env->getExtension('routing')->getPath("evaluacionParticipantes", array("evaluacionId" => "6"));
        echo "\">Evaluaciones</a></li>
";
        // line 350
        echo "            ";
        // line 373
        echo "      ";
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "get", array(0 => "usuarioTipoId"), "method") == 1)) {
            echo "  
        <li class=\"dropdown\"><a href=\"#\">Informes</a></li>                                   
        ";
        }
        // line 375
        echo "  
      </ul>
      ";
        // line 383
        echo "      
      
      
      <ul class=\"nav navbar-nav navbar-right\">
        ";
        // line 388
        echo "        
        <li class=\"dropdown\">
            
          <a href=\"#\" class=\"dropdown-toggle navbar-brand\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Mi cuenta <span class=\"caret\"></span></a>
          <ul class=\"dropdown-menu\">
            <li><a href=\"#\">Mis Datos</a></li>            
            <li role=\"separator\" class=\"divider\"></li>
            ";
        // line 397
        echo "            <li><a href=\"#\">Reportar un Problema</a></li>
            <li role=\"separator\" class=\"divider\"></li>
            <li><a href=\"#\">Cambiar Contraseña</a></li>
            <li><a href=\"";
        // line 400
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\">Cerrar Sesion</a></li>
          </ul>
          ";
        // line 403
        echo "        </li>
        
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
    
        
   
        
        
    ";
        // line 414
        $this->displayBlock('body', $context, $blocks);
        // line 416
        echo "    ";
        $this->displayBlock('javascript', $context, $blocks);
        // line 417
        echo "        
        
  </body>
</html>

";
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        echo "Gestionatalento";
    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 414
    public function block_body($context, array $blocks = array())
    {
        echo "            
    ";
    }

    // line 416
    public function block_javascript($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  486 => 416,  479 => 414,  474 => 9,  468 => 8,  459 => 417,  456 => 416,  454 => 414,  441 => 403,  436 => 400,  431 => 397,  422 => 388,  416 => 383,  412 => 375,  405 => 373,  403 => 350,  399 => 345,  396 => 344,  391 => 342,  388 => 341,  386 => 340,  381 => 337,  376 => 318,  362 => 299,  358 => 298,  351 => 293,  345 => 287,  341 => 285,  338 => 283,  336 => 281,  137 => 78,  132 => 72,  129 => 70,  123 => 67,  121 => 61,  117 => 59,  113 => 58,  109 => 57,  103 => 53,  94 => 46,  90 => 45,  83 => 41,  80 => 40,  75 => 36,  72 => 30,  67 => 28,  65 => 27,  63 => 26,  61 => 23,  59 => 22,  57 => 21,  53 => 17,  48 => 14,  43 => 13,  38 => 10,  36 => 9,  32 => 8,  23 => 1,);
    }
}
/* */
/* */
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/*   <head>*/
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="Content-Language" content="es"/> */
/*     <title>{% block title %}Gestionatalento{% endblock %}</title>*/
/*     {% block stylesheets %}{% endblock %}*/
/*     <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }} "/>*/
/* {#    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">*/
/*     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">*/
/* #}    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-table.css') }} "/>*/
/*     <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-dialog.min.css') }} "/>*/
/*     */
/*     {#<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-submenu.min.css') }} "/>#}*/
/*     */
/*     */
/*     {#<link rel="stylesheet" type="text/css" href="{{ asset('js/dhtmlxWindows_std/codebase/dhtmlxwindows.css') }} "/>*/
/*     <link rel="stylesheet" type="text/css" href="{{ asset('js/dhtmlxWindows_std/skins/web/dhtmlxwindows.css') }} "/>#}*/
/*     {#<link rel="stylesheet" type="text/css" href="{{ asset('js/dhtmlx/skins/web/dhtmlx.css') }} "/>#}*/
/*     {#<link rel="stylesheet" type="text/css" href="{{ asset('css/dhtmlx.css') }} "/>#}*/
/*     {#<link rel="stylesheet" type="text/css" href="{{ asset('css/skins/terrace/dhtmlx.css') }} "/>*/
/*     <link rel="stylesheet" type="text/css" href="{{ asset('css/skins/web/dhtmlx.css') }} "/>*/
/*     <link rel="stylesheet" type="text/css" href="{{ asset('css/skins/skyblue/dhtmlx.css') }} "/>#}*/
/*     {#<link rel="stylesheet" type="text/css" href="{{ asset('css/skins/material/dhtmlx.css') }} "/>#}*/
/*     {#<link rel="stylesheet" type="text/css" href="{{ asset('css/dhtmlx.css') }} "/>#}*/
/*     <link rel="stylesheet" type="text/css" href="{{ asset('css/skins/terrace/dhtmlx.css') }} "/>*/
/*     {#<link rel="stylesheet" type="text/css" href="{{ asset('css/skins/material/dhtmlx.css') }} "/>#}*/
/*     */
/*     {#<link rel="stylesheet" type="text/css" href="{{ asset('js/DhtmlWindow/codebase/dhtmlxwindows.css') }} "/>    */
/*     <link rel="stylesheet" type="text/css" href="{{ asset('js/DhtmlWindow/codebase/skins/dhtmlxwindows_dhx_skyblue.css') }} "/>    */
/*     <link rel="stylesheet" type="text/css" href="{{ asset('js/DhtmlWindow/codebase/skins/dhtmlxwindows_dhx_black.css') }} "/>    */
/*     <link rel="stylesheet" type="text/css" href="{{ asset('js/DhtmlWindow/codebase/skins/dhtmlxwindows_dhx_web.css') }} "/>    */
/*     <link rel="stylesheet" type="text/css" href="{{ asset('js/DhtmlWindow/codebase/skins/dhtmlxwindows_dhx_blue.css') }} "/>    #}*/
/*     */
/*     */
/*     */
/* {#    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }} "/>#}*/
/*     */
/*     <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     */
/*     <script type="text/javascript" src="{{ asset('bundles/fosjsrouting/js/router.js') }}"></script>*/
/*     <script type="text/javascript" src="{{ path('fos_js_routing_js', {"callback": "fos.Router.setData"}) }}"></script>*/
/* */
/*     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->*/
/*     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>*/
/*     <!-- Include all compiled plugins (below), or include individual files as needed -->*/
/*     */
/*     {#<script src="{{ asset('js/bootstrap.min.js') }}"></script>#}*/
/*     */
/*     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>*/
/*     */
/*     */
/*     <script src="{{ asset('js/bootstrap-table.js') }}"></script>*/
/*     <script src="{{ asset('js/bootstrap-dialog.min.js') }}"></script>*/
/*     <script src="{{ asset('js/bootstrap-table-export.js') }}"></script>*/
/*     {#<script src="{{ asset('js/bootstrap-submenu.min.js') }}"></script>#}*/
/*     {#<script>*/
/*         $(document).ready(function() {*/
/*             $('.dropdown-submenu > a').submenupicker();*/
/*             //$('[data-submenu]').submenupicker();*/
/*         });*/
/*     </script>#}*/
/*     <script type="text/javascript" src="{{ asset('js/suitestd/codebase/dhtmlx.js') }}"></script>*/
/*     */
/*     {#<script type="text/javascript" src="{{ asset('js/dhtmlx/codebase/dhtmlx.js') }}" ></script>#}*/
/*     */
/*     {#<script src="{{ asset('js/dhtmlxWindows_std/codebase/dhtmlxwindows.js') }}"></script>#}*/
/*     */
/*     */
/*     */
/* {#    <script src="{{ asset('js/DhtmlWindow/codebase/dhtmlxwindows.js') }}"></script>*/
/*     <script src="{{ asset('js/DhtmlWindow/codebase/dhtmlxcommon.js') }}"></script>*/
/*     <script src="{{ asset('js/DhtmlWindow/codebase/dhtmlxcontainer.js') }}"></script>#}*/
/*     */
/*     */
/*     <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->*/
/*     */
/*     <!-- Bootstrap -->*/
/*        */
/*     <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->*/
/*     <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->*/
/*     <!--[if lt IE 9]>*/
/*       <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>*/
/*       <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>*/
/*     <![endif]-->*/
/*     */
/*     <style>*/
/*         */
/*         .dhx_cell_wins {*/
/*          left:3px;   */
/*         }*/
/*     </style>*/
/*     */
/*     <style>*/
/*             #recuadro{*/
/*         position:absolute;*/
/*         height: 280px;*/
/*         width: 480px;*/
/*         border: 1px solid #999999;*/
/*         display: table;*/
/*     }*/
/*             */
/*     #foto {*/
/*         position:relative;*/
/*         display: table-cell;*/
/*         vertical-align:middle;*/
/*         text-align:center;*/
/*     }*/
/*         */
/*     .resize2 {*/
/*   border: 3px double #333;*/
/*   float: left;*/
/*   height: 12em;*/
/*   margin: .2em 1em 1em 0;*/
/*   overflow: hidden;*/
/*   width: 12em;*/
/* }*/
/* */
/* .resize2 img {*/
/*   margin: -220px 0 0 -210px;*/
/*   padding: 6em 0 0 6em;*/
/* }*/
/* */
/* .delimitador{*/
/* 	width:250px;	/* Ancho máximo *//* */
/* 	margin:auto;	/* Centramos el vídeo *//* */
/* }*/
/* .contenedor{*/
/* 	height:60px;*/
/* 	width:100%;*/
/* 	//padding-top:56.25%; /* Relación: 16/9 = 56.25% *//* */
/* 	position:relative;*/
/* }*/
/* */
/* .contenedor img{*/
/* 	position:absolute;*/
/* 	height:60px;*/
/* 	//width:100%;*/
/* 	top:0px;*/
/* 	left:0px;        */
/*         max-height: 50px*/
/* }*/
/* .empresaImagen {*/
/*     width:200px; */
/*     background-color: #ffffff; */
/*     border:2px solid #3da0e3    */
/* }*/
/* */
/* .outer-container {*/
/*     border: 2px solid black;*/
/*     height: 100px;*/
/*     width: 300px;*/
/*     display: inline-block;    */
/* }*/
/* */
/* .bottom-section {*/
/*     background: lightblue;*/
/*     height:100%;*/
/*     marin:8px;    */
/* }*/
/* */
/* .bottom-aligner {*/
/*     display: inline-block;*/
/*     height: 50%;*/
/*     vertical-align: bottom;*/
/*     width:3px;*/
/*     background: red;*/
/*     float: left*/
/* }*/
/* */
/* .bottom-content {*/
/*     display: inline-block;*/
/* }*/
/* */
/* .column {*/
/*   width: 30%;*/
/*   height: 55px;*/
/*   float: right;*/
/*   //padding: 1em;*/
/*   background: white;*/
/* }*/
/* */
/* .container1 {*/
/*   background: #ccc;*/
/*   text-align: center;*/
/*   height: 55px;*/
/*   padding: 0px;*/
/*   position: relative;*/
/* }*/
/* */
/* .right .container {*/
/*   height: 55px;*/
/* }*/
/* */
/* .vertical-align-wrap {*/
/*   position: absolute;*/
/*   width: 100%;*/
/*   height: 100%;*/
/*   display: table;*/
/* }*/
/* */
/* .vertical-align {*/
/*   background: white;*/
/*   display: table-cell;*/
/* }*/
/* */
/* .vertical-align--middle {*/
/*   vertical-align: middle;*/
/* }*/
/* */
/* .vertical-align--bottom {*/
/*   vertical-align: bottom;*/
/*   text-align:right;*/
/*   line-height: 18px;*/
/*   padding-right: 5px;*/
/* }*/
/* */
/*     </style>*/
/*     */
/*     */
/*     <style type='text/css'>*/
/* #parentMenu {*/
/*   display: block;*/
/*   top: 0;*/
/* }*/
/* /* Helps position submenu *//* */
/* .dropdown-submenu {*/
/*   position: relative;*/
/* }*/
/* /* Menus under the submenu should show up on the right of the parent *//* */
/* .dropdown-submenu>.dropdown-menu {*/
/*   top: 0;*/
/*   left: 100%;*/
/*   margin-top: -6px;*/
/*   margin-left: -1px;*/
/*   -webkit-border-radius: 0 6px 6px 6px;*/
/*   -moz-border-radius: 0 6px 6px 6px;*/
/*   border-radius: 0 6px 6px 6px;*/
/* }*/
/* /* Make submenu visible when hovering on link *//* */
/* .dropdown-submenu:hover>.dropdown-menu {*/
/*   display: block;*/
/* }*/
/* /* Add carot to submenu links *//* */
/* .dropdown-submenu>a:after {*/
/*   display: block;*/
/*   float: right;*/
/*   /*simple *//* */
/*   content: "?";*/
/*   color: #cccccc;*/
/*   /* looks a little better *//* */
/*   content: " ";*/
/*   width: 0;*/
/*   height: 0;*/
/*   border-color: transparent;*/
/*   border-style: solid;*/
/*   border-width: 5px 0 5px 5px;*/
/*   border-left-color: #cccccc;*/
/*   margin-top: 5px;*/
/*   margin-right: -10px;*/
/* }*/
/* /* Change carot color on hover *//* */
/* .dropdown-submenu:hover>a:after {*/
/*   border-left-color: #ffffff;*/
/* }*/
/* </style>*/
/* */
/* */
/*   </head>*/
/*   <body>*/
/*    {# <img height="40px" src="{{ asset('images/clientes/logo_gestionatalento.png') }}"  >*/
/*     */
/*       <div class="delimitador" style="border: 1px solid black">*/
/* 	<div class="contenedor">*/
/*             <img height="50px" src="{{ asset('images/clientes/logo_gestionatalento.png') }}"  >*/
/*                 {#<img src="{{ asset('images/clientes/logo_aporta.jpg') }}"  >#}*/
/* 	{#</div>	*/
/*     </div>#}*/
/*       */
/*     {#<img src="{{ asset('images/clientes/logo_gestionatalento.png') }}"  style=" height: 50px"  >#}*/
/*     <div style="padding:5px" >*/
/*         <div style="display: inline; height: 100px; border: 0px solid #000000; vertical-align:middle; border: 0px solid #000000; padding-left: 10px" > */
/*             <img src="{{ asset('images/clientes/logo_gestionaTalento.png') }}"  style=" height: 50px" >*/
/*         </div>*/
/*         */
/*       {#  <div style="display: inline-block; height: 55px; line-height: 15px; vertical-align: bottom; text-align:  right; float: right; border: 1px solid #000000  ">*/
/*             */
/*         </div>#}*/
/*         */
/*       <div class="column right">*/
/*         <div class="container1">*/
/*           <div class="vertical-align-wrap">*/
/*             <div class="vertical-align vertical-align--bottom">*/
/*                 <b>{{ app.user.username }}</b><br/>*/
/*                 <b>{{app.session.get('empresaRazonSocial')}}</b><br/>*/
/*                 <a href="#">Cambiar Empresa</a>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*                                             */
/*     </div>*/
/*     <nav class="navbar navbar-default">*/
/*   <div class="container-fluid" style="margin-left: 0px; margin-right: 0px; padding-left: 0px; padding-right: 0px">*/
/*     <!-- Brand and toggle get grouped for better mobile display -->*/
/*    {# <div class="navbar-header">*/
/*       <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">*/
/*         <span class="sr-only">Toggle navigation</span>*/
/*         <span class="icon-bar"></span>*/
/*         <span class="icon-bar"></span>*/
/*         <span class="icon-bar"></span>*/
/*       </button>*/
/*     </div>#}*/
/* */
/*     <!-- Collect the nav links, forms, and other content for toggling -->*/
/*     <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="margin-left: 0px; margin-right: 5px; padding-left: 0px; padding-right: 5px">*/
/* {#     <ul class="nav navbar-nav">        */
/*         <li class="dropdown">*/
/*           <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">GestionaTalento<span class="caret"></span></a>*/
/*           <ul class="dropdown-menu">*/
/*             <li><a href="{{path('competenciaRegistrar')}}">Competencias</a></li>*/
/*             <li><a href="{{path('conocimientoRegistrar')}}">Conocimientos</a></li>*/
/*             <li><a href="{{path('perfilRegistrar')}}">Perfiles</a></li>*/
/*             <li role="separator" class="divider"></li>*/
/*             <li><a href="{{path('preguntaRegistrar')}}">Preguntas</a></li>*/
/*             <li role="separator" class="divider"></li>*/
/*             <li><a href="{{path('clienteRegistrar')}}">Clientes</a></li>                 */
/*             <li role="separator" class="divider"></li>*/
/*             <li><a href="{{path('dncProcesoRegistrar')}}">Procesos DNC</a></li>*/
/*           </ul>*/
/*         </li>*/
/*       </ul>#}*/
/*           */
/*           */
/*       <ul class="nav navbar-nav">*/
/*         {% if app.session.get('usuarioTipoId') == 1 %}*/
/*             <li><a href="#">Inicio</a></li>        */
/*             <li><a href="{{path('maestroMenu')}}">Maestros</a></li>*/
/*         {% endif %}*/
/*         */
/*         <li><a href="{{path('evaluacionParticipantes', {'evaluacionId':'6'})}}">Evaluaciones</a></li>*/
/* {#        <li class="dropdown" >*/
/*           <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Registrar <span class="caret"></span></a>*/
/*           <ul class="dropdown-menu" role="menu">              */
/*             {#<li><a href="{{path('regisrarPerfil',{'sistema':'cobranza'})}}">Perfiles</a></li>#}*/
/*             {#<li><a href="{{path('competenciaRegistrar')}}">Competencias</a></li>*/
/*             <li><a href="{{path('conocimientoRegistrar')}}">Conocimientos</a></li>*/
/*             <li><a href="{{path('perfilRegistrar')}}">Perfiles</a></li>*/
/*             <li role="separator" class="divider"></li>*/
/*             <li class="dropdown-submenu"><a href="#">Preguntas</a>*/
/*                 <ul class="dropdown-menu" role="menu">*/
/*                     <li><a href="{{path('pregunta', {'preguntaTipoId':'1'})}}">Competencias</a></li>    */
/*                     <li><a href="{{path('pregunta', {'preguntaTipoId':'2'})}}">Conocimientos</a></li>*/
/*                 </ul>*/
/*             </li>*/
/*             <li role="separator" class="divider"></li>*/
/*             <li><a href="{{path('personaRegistrar')}}">Personas</a></li>*/
/*             <li role="separator" class="divider"></li>*/
/*             <li><a href="{{path('evaluacionRegistrar')}}">Evaluacion</a></li> */
/*           </ul>*/
/*         </li>       #}*/
/* {#        <li class="dropdown">*/
/*             <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Panel <span class="caret"></span></a>*/
/*             <ul class="dropdown-menu">*/
/*             <li><a href="{{path('evaluacionParticipanteListado', {'evaluacionId':'3'})}}">Evaluacion</a></li>    */
/*             </ul>*/
/*         </li>*/
/* */
/* #}      {% if app.session.get('usuarioTipoId') == 1 %}  */
/*         <li class="dropdown"><a href="#">Informes</a></li>                                   */
/*         {% endif %}  */
/*       </ul>*/
/*       {#<form class="navbar-form navbar-left" role="search">*/
/*         <div class="form-group">*/
/*           <input type="text" class="form-control" placeholder="Search">*/
/*         </div>*/
/*         <button type="submit" class="btn btn-default">Submit</button>*/
/*       </form>#}*/
/*       */
/*       */
/*       */
/*       <ul class="nav navbar-nav navbar-right">*/
/*         {#<li><a href="#">  <span class="glyphicon glyphicon-th" aria-hidden="true"></span></a></li>#}*/
/*         */
/*         <li class="dropdown">*/
/*             */
/*           <a href="#" class="dropdown-toggle navbar-brand" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Mi cuenta <span class="caret"></span></a>*/
/*           <ul class="dropdown-menu">*/
/*             <li><a href="#">Mis Datos</a></li>            */
/*             <li role="separator" class="divider"></li>*/
/*             {#<li><a href="#">Cambiar Empresa</a></li>        */
/*             <li role="separator" class="divider"></li>#}*/
/*             <li><a href="#">Reportar un Problema</a></li>*/
/*             <li role="separator" class="divider"></li>*/
/*             <li><a href="#">Cambiar Contraseña</a></li>*/
/*             <li><a href="{{ path("fos_user_security_logout") }}">Cerrar Sesion</a></li>*/
/*           </ul>*/
/*           {#<li><span class="navbar-brand">Alex Mellado</span></li>#}*/
/*         </li>*/
/*         */
/*       </ul>*/
/*     </div><!-- /.navbar-collapse -->*/
/*   </div><!-- /.container-fluid -->*/
/* </nav>*/
/*     */
/*         */
/*    */
/*         */
/*         */
/*     {% block body %}            */
/*     {% endblock %}*/
/*     {% block javascript %}{% endblock %}*/
/*         */
/*         */
/*   </body>*/
/* </html>*/
/* */
/* */
