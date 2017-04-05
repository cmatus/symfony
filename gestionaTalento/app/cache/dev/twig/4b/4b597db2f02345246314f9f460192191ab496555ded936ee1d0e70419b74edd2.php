<?php

/* GtSistemaBundle:Main:index.html.twig */
class __TwigTemplate_872c0360bece2178ff69808189feaee3fe85c78bbebe2b016460694fac8837a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_55eb581e8eb77f0a4481f7852ce0b966ffdab92846b6674f99a3fc2de3dd81a4 = $this->env->getExtension("native_profiler");
        $__internal_55eb581e8eb77f0a4481f7852ce0b966ffdab92846b6674f99a3fc2de3dd81a4->enter($__internal_55eb581e8eb77f0a4481f7852ce0b966ffdab92846b6674f99a3fc2de3dd81a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GtSistemaBundle:Main:index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"Content-Language\" content=\"es\"/> 
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" integrity=\"sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css\" integrity=\"sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r\" crossorigin=\"anonymous\">


    </head>

    <style>
        .container {
            width: 550px;
            margin: 0 auto;            
        }
    </style>
    <body>  
        
            <br/>       
            <br/>
            <br/>
            <br/>

            <img src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/clientes/logo_gestionaTalento.png"), "html", null, true);
        echo "\" class=\"img-responsive center-block\"  >

            <br/>
        <div class=\"text-center\">
            <button id='btnPregunta' type=\"button\" class=\"btn btn-primary\" onclick=\"clientes()\">Acceso Clientes</button>
            <button id='btnPregunta' type=\"button\" class=\"btn btn-info\">Acceso DEMO</button>
            </center>
        </div>

        <script type=\"text/javascript\">

            function clientes() {
                document.location.target = \"_blank\";
                document.location.href = \"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\";

            }
        </script>
    </body>
</html>
";
        
        $__internal_55eb581e8eb77f0a4481f7852ce0b966ffdab92846b6674f99a3fc2de3dd81a4->leave($__internal_55eb581e8eb77f0a4481f7852ce0b966ffdab92846b6674f99a3fc2de3dd81a4_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_8e24d2e3cf4eb4f7d491a98fa6768e750abec315c66f6274255e6c372d09e7d2 = $this->env->getExtension("native_profiler");
        $__internal_8e24d2e3cf4eb4f7d491a98fa6768e750abec315c66f6274255e6c372d09e7d2->enter($__internal_8e24d2e3cf4eb4f7d491a98fa6768e750abec315c66f6274255e6c372d09e7d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "gestionaTalento";
        
        $__internal_8e24d2e3cf4eb4f7d491a98fa6768e750abec315c66f6274255e6c372d09e7d2->leave($__internal_8e24d2e3cf4eb4f7d491a98fa6768e750abec315c66f6274255e6c372d09e7d2_prof);

    }

    public function getTemplateName()
    {
        return "GtSistemaBundle:Main:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 6,  69 => 39,  53 => 26,  30 => 6,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/*     <head>*/
/*         <meta charset="utf-8">*/
/*         <meta http-equiv="Content-Language" content="es"/> */
/*         <title>{% block title %}gestionaTalento{% endblock %}</title>*/
/*         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">*/
/*         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">*/
/* */
/* */
/*     </head>*/
/* */
/*     <style>*/
/*         .container {*/
/*             width: 550px;*/
/*             margin: 0 auto;            */
/*         }*/
/*     </style>*/
/*     <body>  */
/*         */
/*             <br/>       */
/*             <br/>*/
/*             <br/>*/
/*             <br/>*/
/* */
/*             <img src="{{ asset('images/clientes/logo_gestionaTalento.png') }}" class="img-responsive center-block"  >*/
/* */
/*             <br/>*/
/*         <div class="text-center">*/
/*             <button id='btnPregunta' type="button" class="btn btn-primary" onclick="clientes()">Acceso Clientes</button>*/
/*             <button id='btnPregunta' type="button" class="btn btn-info">Acceso DEMO</button>*/
/*             </center>*/
/*         </div>*/
/* */
/*         <script type="text/javascript">*/
/* */
/*             function clientes() {*/
/*                 document.location.target = "_blank";*/
/*                 document.location.href = "{{ path("fos_user_security_login") }}";*/
/* */
/*             }*/
/*         </script>*/
/*     </body>*/
/* </html>*/
/* */
