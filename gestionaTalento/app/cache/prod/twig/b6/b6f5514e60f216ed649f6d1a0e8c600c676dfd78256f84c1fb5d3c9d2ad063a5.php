<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_bcf79e87ee783232f32d70e7b48aa01f31d30db2219f9acb26c78f7ac33512ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 6
        echo "
    <style>
        .login-container {
            margin: 0 auto;
            width: 310px; /* Whatever exact width you are looking for (not bound by preset bootstrap widths) */
        }
    </style>
    
   


<form action=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : null), "html", null, true);
        echo "\" />

    <br><br><br><br>
    <center>
        <img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/clientes/logo_gestionaTalento.png"), "html", null, true);
        echo "\"  style=\" height: 45px\" >
    </center>
    <br/>
    <div class=\"login-container\" >
                
        <div class=\"panel panel-primary\" >            
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\">Acceso Clientes</h3>
            </div>
            <div class=\"panel-body\" >
                
                
                 ";
        // line 34
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 35
            echo "                    <div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                        <div>";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["error"]) ? $context["error"] : null), array(), "FOSUserBundle"), "html", null, true);
            echo "</div>
                    </div>      
                ";
        }
        // line 40
        echo "

                ";
        // line 50
        echo "
                ";
        // line 58
        echo "                            
                
                    <div class=\"form-group\">
                        <label for=\"username\">";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                        ";
        // line 63
        echo "                        <input type=\"email\" id=\"username\" name=\"_username\" class=\"form-control\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null), "html", null, true);
        echo "\" required=\"required\" />
                    </div>
                    <div class=\"form-group\">
                        <label for=\"password\">";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                        ";
        // line 68
        echo "                        <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\" required=\"required\" />
                    </div>
                    <div class=\"form-group\">
                        <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                        <label for=\"remember_me\">";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                    </div>
    
                    <button type=\"submit\" class=\"btn btn-primary\" id=\"_submit\" name=\"_submit\">";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "</button>
                    <button type=\"button\" class=\"btn btn-link\" style=\"margin: 0; padding: 0; \">Olvidaste tu contraseña?</button>
                    
                    ";
        // line 79
        echo "                    

            </div>
        </div>
    </div>

                    
                    
    ";
        // line 97
        echo "  
        
      
        
    
</form>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 97,  127 => 79,  121 => 75,  115 => 72,  109 => 68,  105 => 66,  98 => 63,  94 => 61,  89 => 58,  86 => 50,  82 => 40,  76 => 37,  72 => 35,  70 => 34,  55 => 22,  48 => 18,  44 => 17,  31 => 6,  28 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/*     */
/*     */
/* {% block fos_user_content %}*/
/* */
/*     <style>*/
/*         .login-container {*/
/*             margin: 0 auto;*/
/*             width: 310px; /* Whatever exact width you are looking for (not bound by preset bootstrap widths) *//* */
/*         }*/
/*     </style>*/
/*     */
/*    */
/* */
/* */
/* <form action="{{ path("fos_user_security_check") }}" method="post">*/
/*     <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/* */
/*     <br><br><br><br>*/
/*     <center>*/
/*         <img src="{{ asset('images/clientes/logo_gestionaTalento.png') }}"  style=" height: 45px" >*/
/*     </center>*/
/*     <br/>*/
/*     <div class="login-container" >*/
/*                 */
/*         <div class="panel panel-primary" >            */
/*             <div class="panel-heading">*/
/*                 <h3 class="panel-title">Acceso Clientes</h3>*/
/*             </div>*/
/*             <div class="panel-body" >*/
/*                 */
/*                 */
/*                  {% if error %}*/
/*                     <div class="alert alert-danger alert-dismissible" role="alert">*/
/*                     <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>*/
/*                         <div>{{ error|trans({}, 'FOSUserBundle') }}</div>*/
/*                     </div>      */
/*                 {% endif %}*/
/* */
/* */
/*                 {#{% for flashMessage in app.session.flashbag.get('notice') %}*/
/*                     <div class="flash-notice" id='flash-notice'>*/
/*                         {{ flashMessage }}*/
/*                     </div>*/
/*                 {% endfor %}*/
/*                 {% if error %}*/
/*                     <div>{{ error.message }}</div>*/
/*                 {% endif %}#}*/
/* */
/*                 {#{% if error %}*/
/*                     {{error.message}}*/
/*                     <div class="alert alert-danger alert-dismissible" role="alert">*/
/*                         <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>*/
/*                         Correo o contraseña incorrectos.*/
/*                       </div>                    */
/*                 {% endif %}#}*/
/*                             */
/*                 */
/*                     <div class="form-group">*/
/*                         <label for="username">{{ 'security.login.username'|trans({}, 'FOSUserBundle') }}</label>*/
/*                         {#<input type="email" class="form-control" id="username" name="_username" required='required' placeholder="Correo electronico">#}*/
/*                         <input type="email" id="username" name="_username" class="form-control" value="{{ last_username }}" required="required" />*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         <label for="password">{{ 'security.login.password'|trans({}, 'FOSUserBundle') }}</label>*/
/*                         {#<input type="password" class="form-control" id="password" name="_password" required='required' placeholder="Contraseña">#}*/
/*                         <input type="password" id="password" name="_password" class="form-control" required="required" />*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         <input type="checkbox" id="remember_me" name="_remember_me" value="on" />*/
/*                         <label for="remember_me">{{ 'security.login.remember_me'|trans({}, 'FOSUserBundle') }}</label>*/
/*                     </div>*/
/*     */
/*                     <button type="submit" class="btn btn-primary" id="_submit" name="_submit">{{ 'security.login.submit'|trans({}, 'FOSUserBundle') }}</button>*/
/*                     <button type="button" class="btn btn-link" style="margin: 0; padding: 0; ">Olvidaste tu contraseña?</button>*/
/*                     */
/*                     {#<input type="submit" id="_submit" name="_submit" value="{{ 'security.login.submit'|trans({}, 'FOSUserBundle') }}" />#}*/
/*                     */
/* */
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*                     */
/*                     */
/*     {#<div>*/
/*         <label for="username">{{ 'security.login.username'|trans({}, 'FOSUserBundle') }}</label>*/
/*         */
/*     </div>*/
/* */
/*     <div>    */
/*         */
/*         */
/*     </div>*/
/*     */
/*     <div>  #}  */
/*         */
/*       */
/*         */
/*     */
/* </form>*/
/* {% endblock fos_user_content %}*/
/* */
