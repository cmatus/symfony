<?php

/* ::basePop.html.twig */
class __TwigTemplate_cef04d10ca20ee71d98fdbd43b32dee607063277e3c0a1acd95d91346f14d083 extends Twig_Template
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
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap-table.css"), "html", null, true);
        echo " \"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap-dialog.min.css"), "html", null, true);
        echo " \"/>    
    ";
        // line 14
        echo "    ";
        // line 15
        echo "    ";
        // line 16
        echo "    ";
        // line 19
        echo "    
    ";
        // line 21
        echo "    ";
        // line 22
        echo "    ";
        // line 23
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/skins/terrace/dhtmlx.css"), "html", null, true);
        echo "\"/>
";
        // line 25
        echo "    
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    
    <script type=\"text/javascript\" src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    
    <script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap-table.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap-dialog.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap-table-export.js"), "html", null, true);
        echo "\"></script>

    <script type=\"text/javascript\" src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/suitestd/codebase/dhtmlx.js"), "html", null, true);
        echo "\"></script>
    
    
";
        // line 48
        echo "    
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    
    <!-- Bootstrap -->
       
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
      <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
    

  </head>
  <body>                  
    
    ";
        // line 64
        $this->displayBlock('body', $context, $blocks);
        // line 65
        echo "    ";
        $this->displayBlock('javascript', $context, $blocks);
        // line 66
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

    // line 64
    public function block_body($context, array $blocks = array())
    {
    }

    // line 65
    public function block_javascript($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::basePop.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 65,  158 => 64,  153 => 9,  147 => 8,  138 => 66,  135 => 65,  133 => 64,  115 => 48,  109 => 42,  104 => 40,  100 => 39,  96 => 38,  92 => 37,  83 => 31,  79 => 30,  72 => 26,  69 => 25,  64 => 23,  62 => 22,  60 => 21,  57 => 19,  55 => 16,  53 => 15,  51 => 14,  47 => 12,  43 => 11,  38 => 10,  36 => 9,  32 => 8,  23 => 1,);
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
/*     <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-table.css') }} "/>*/
/*     <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-dialog.min.css') }} "/>    */
/*     {#<link rel="stylesheet" type="text/css" href="{{ asset('js/DhtmlWindow/codebase/dhtmlxwindows.css') }} "/>    #}*/
/*     {#<link rel="stylesheet" type="text/css" href="{{ asset('css/dhtmlx.css') }} "/>     #}*/
/*     {#<link rel="stylesheet" type="text/css" href="{{ asset('css/skins/terrace/dhtmlx.css') }} "/>#}*/
/*     {#<link rel="stylesheet" type="text/css" href="{{ asset('css/skins/web/dhtmlx.css') }} "/>*/
/*     <link rel="stylesheet" type="text/css" href="{{ asset('css/skins/skyblue/dhtmlx.css') }} "/>*/
/*     <link rel="stylesheet" type="text/css" href="{{ asset('css/skins/material/dhtmlx.css') }} "/>#}*/
/*     */
/*     {#<link rel="stylesheet" type="text/css" href="{{ asset('css/dhtmlx.css') }} "/>#}*/
/*     {#<link rel="stylesheet" type="text/css" href="{{ asset('css/skins/skyblue/dhtmlx.css') }} "/>#}*/
/*     {#<link rel="stylesheet" type="text/css" href="{{ asset('css/skins/material/dhtmlx.css') }} "/>#}*/
/*     <link rel="stylesheet" type="text/css" href="{{ asset('css/skins/terrace/dhtmlx.css') }}"/>*/
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
/*     <script src="{{ asset('js/bootstrap.min.js') }}"></script>*/
/*     <script src="{{ asset('js/bootstrap-table.js') }}"></script>*/
/*     <script src="{{ asset('js/bootstrap-dialog.min.js') }}"></script>*/
/*     <script src="{{ asset('js/bootstrap-table-export.js') }}"></script>*/
/* */
/*     <script type="text/javascript" src="{{ asset('js/suitestd/codebase/dhtmlx.js') }}"></script>*/
/*     */
/*     */
/* {#    <script src="{{ asset('js/DhtmlWindow/codebase/dhtmlxwindows.js') }}"></script>*/
/*     <script src="{{ asset('js/DhtmlWindow/codebase/dhtmlxcommon.js') }}"></script>*/
/*     <script src="{{ asset('js/DhtmlWindow/codebase/dhtmlxcontainer.js') }}"></script>*/
/* #}    */
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
/* */
/*   </head>*/
/*   <body>                  */
/*     */
/*     {% block body %}{% endblock %}*/
/*     {% block javascript %}{% endblock %}*/
/*         */
/*         */
/*   </body>*/
/* </html>*/
/* */
/* */
