<?php

/* ::basePop.html.twig */
class __TwigTemplate_149c78eaa8a630f39438101fd3e20808f66f8812504fe9efe005027d125b2365 extends Twig_Template
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
        $__internal_94b3bae82f2361771483ccd2ed9503a7b84ae16d132dbb40394caca0dcd9af05 = $this->env->getExtension("native_profiler");
        $__internal_94b3bae82f2361771483ccd2ed9503a7b84ae16d132dbb40394caca0dcd9af05->enter($__internal_94b3bae82f2361771483ccd2ed9503a7b84ae16d132dbb40394caca0dcd9af05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::basePop.html.twig"));

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
        
        $__internal_94b3bae82f2361771483ccd2ed9503a7b84ae16d132dbb40394caca0dcd9af05->leave($__internal_94b3bae82f2361771483ccd2ed9503a7b84ae16d132dbb40394caca0dcd9af05_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_fd044211dc201b6d9ee85a4d61f2693afe852995e0e4516d44d3de4b7e5d488d = $this->env->getExtension("native_profiler");
        $__internal_fd044211dc201b6d9ee85a4d61f2693afe852995e0e4516d44d3de4b7e5d488d->enter($__internal_fd044211dc201b6d9ee85a4d61f2693afe852995e0e4516d44d3de4b7e5d488d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Gestionatalento";
        
        $__internal_fd044211dc201b6d9ee85a4d61f2693afe852995e0e4516d44d3de4b7e5d488d->leave($__internal_fd044211dc201b6d9ee85a4d61f2693afe852995e0e4516d44d3de4b7e5d488d_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_00dddd7ac8901665ee97aec4b9fc1bea1a6e6eaa3ee76d6b4da5d9825a8f9f29 = $this->env->getExtension("native_profiler");
        $__internal_00dddd7ac8901665ee97aec4b9fc1bea1a6e6eaa3ee76d6b4da5d9825a8f9f29->enter($__internal_00dddd7ac8901665ee97aec4b9fc1bea1a6e6eaa3ee76d6b4da5d9825a8f9f29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_00dddd7ac8901665ee97aec4b9fc1bea1a6e6eaa3ee76d6b4da5d9825a8f9f29->leave($__internal_00dddd7ac8901665ee97aec4b9fc1bea1a6e6eaa3ee76d6b4da5d9825a8f9f29_prof);

    }

    // line 64
    public function block_body($context, array $blocks = array())
    {
        $__internal_fea614f2ff994a0509513edd0211acb32d3865bf50115c8c9805316d474e916c = $this->env->getExtension("native_profiler");
        $__internal_fea614f2ff994a0509513edd0211acb32d3865bf50115c8c9805316d474e916c->enter($__internal_fea614f2ff994a0509513edd0211acb32d3865bf50115c8c9805316d474e916c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_fea614f2ff994a0509513edd0211acb32d3865bf50115c8c9805316d474e916c->leave($__internal_fea614f2ff994a0509513edd0211acb32d3865bf50115c8c9805316d474e916c_prof);

    }

    // line 65
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_460de1f4aa35d1e58d8e4184fcbcaa2ab352628bbd42a7778873f41e04788a00 = $this->env->getExtension("native_profiler");
        $__internal_460de1f4aa35d1e58d8e4184fcbcaa2ab352628bbd42a7778873f41e04788a00->enter($__internal_460de1f4aa35d1e58d8e4184fcbcaa2ab352628bbd42a7778873f41e04788a00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        
        $__internal_460de1f4aa35d1e58d8e4184fcbcaa2ab352628bbd42a7778873f41e04788a00->leave($__internal_460de1f4aa35d1e58d8e4184fcbcaa2ab352628bbd42a7778873f41e04788a00_prof);

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
        return array (  187 => 65,  176 => 64,  165 => 9,  153 => 8,  141 => 66,  138 => 65,  136 => 64,  118 => 48,  112 => 42,  107 => 40,  103 => 39,  99 => 38,  95 => 37,  86 => 31,  82 => 30,  75 => 26,  72 => 25,  67 => 23,  65 => 22,  63 => 21,  60 => 19,  58 => 16,  56 => 15,  54 => 14,  50 => 12,  46 => 11,  41 => 10,  39 => 9,  35 => 8,  26 => 1,);
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
