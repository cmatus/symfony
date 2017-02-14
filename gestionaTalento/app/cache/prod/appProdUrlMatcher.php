<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // fos_js_routing_js
        if (0 === strpos($pathinfo, '/js/routing') && preg_match('#^/js/routing(?:\\.(?P<_format>js|json))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_js_routing_js')), array (  '_controller' => 'fos_js_routing.controller:indexAction',  '_format' => 'js',));
        }

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not__welcome;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Gt\\SistemaBundle\\Controller\\MainController::indexAction',  '_route' => '_welcome',);
        }
        not__welcome:

        // inicio
        if ($pathinfo === '/inicio') {
            return array (  '_controller' => 'Gt\\SistemaBundle\\Controller\\InicioController::inicioAction',  '_route' => 'inicio',);
        }

        if (0 === strpos($pathinfo, '/maestro')) {
            // maestroMenu
            if ($pathinfo === '/maestros/menu') {
                return array (  '_controller' => 'Gt\\SistemaBundle\\Controller\\MaestroController::maestroMenuAction',  '_route' => 'maestroMenu',);
            }

            // maestro
            if (preg_match('#^/maestro/(?P<maeTipoId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'maestro')), array (  '_controller' => 'Gt\\SistemaBundle\\Controller\\MaestroController::maestroAction',));
            }

            // maestroTabla
            if (0 === strpos($pathinfo, '/maestro/tabla') && preg_match('#^/maestro/tabla/(?P<maeTipoId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'maestroTabla')), array (  '_controller' => 'Gt\\SistemaBundle\\Controller\\MaestroController::maestroTablaAction',));
            }

            // maestroRegistrar
            if (0 === strpos($pathinfo, '/maestro/registrar') && preg_match('#^/maestro/registrar/(?P<maeParametros>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'maestroRegistrar')), array (  '_controller' => 'Gt\\SistemaBundle\\Controller\\MaestroController::maestroRegistrarAction',));
            }

            // maestroBorrar
            if (0 === strpos($pathinfo, '/maestro/borrar') && preg_match('#^/maestro/borrar/(?P<maeParametros>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'maestroBorrar')), array (  '_controller' => 'Gt\\SistemaBundle\\Controller\\MaestroController::maestroBorrarAction',));
            }

        }

        if (0 === strpos($pathinfo, '/competencia')) {
            // competencia
            if ($pathinfo === '/competencia') {
                return array (  '_controller' => 'Gt\\SistemaBundle\\Controller\\CompetenciaController::competenciaAction',  '_route' => 'competencia',);
            }

            // competenciaRegistrar
            if (0 === strpos($pathinfo, '/competenciaRegistrar') && preg_match('#^/competenciaRegistrar/(?P<competenciaId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'competenciaRegistrar')), array (  '_controller' => 'Gt\\SistemaBundle\\Controller\\CompetenciaController::competenciaRegistrarAction',));
            }

            // competenciaTabla
            if ($pathinfo === '/competenciaTabla') {
                return array (  '_controller' => 'Gt\\SistemaBundle\\Controller\\CompetenciaController::competenciaTablaAction',  '_route' => 'competenciaTabla',);
            }

            // competenciaBorrar
            if (0 === strpos($pathinfo, '/competenciaBorrar') && preg_match('#^/competenciaBorrar/(?P<competenciaId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'competenciaBorrar')), array (  '_controller' => 'Gt\\SistemaBundle\\Controller\\CompetenciaController::competenciaBorrarAction',));
            }

        }

        if (0 === strpos($pathinfo, '/actividadClave')) {
            // actividadClave
            if (preg_match('#^/actividadClave/(?P<competenciaId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'actividadClave')), array (  '_controller' => 'Gt\\SistemaBundle\\Controller\\ActividadClaveController::actividadClaveAction',));
            }

            // actividadClaveTabla
            if (0 === strpos($pathinfo, '/actividadClaveTabla') && preg_match('#^/actividadClaveTabla/(?P<competenciaId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'actividadClaveTabla')), array (  '_controller' => 'Gt\\SistemaBundle\\Controller\\ActividadClaveController::actividadClaveTablaAction',));
            }

            // actividadClaveRegistrar
            if (0 === strpos($pathinfo, '/actividadClaveRegistrar') && preg_match('#^/actividadClaveRegistrar/(?P<competenciaId>[^/]++)/(?P<actividadClaveId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'actividadClaveRegistrar')), array (  '_controller' => 'Gt\\SistemaBundle\\Controller\\ActividadClaveController::actividadClaveRegistrarAction',));
            }

            // actividadClaveBorrar
            if (0 === strpos($pathinfo, '/actividadClaveBorrar') && preg_match('#^/actividadClaveBorrar/(?P<actividadClaveId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'actividadClaveBorrar')), array (  '_controller' => 'Gt\\SistemaBundle\\Controller\\ActividadClaveController::actividadClaveBorrarAction',));
            }

        }

        if (0 === strpos($pathinfo, '/criterio')) {
            // criterio
            if (preg_match('#^/criterio/(?P<actividadClaveId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'criterio')), array (  '_controller' => 'Gt\\SistemaBundle\\Controller\\ActividadClaveController::criterioAction',));
            }

            // criterioTabla
            if (0 === strpos($pathinfo, '/criterioTabla') && preg_match('#^/criterioTabla/(?P<actividadClaveId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'criterioTabla')), array (  '_controller' => 'Gt\\SistemaBundle\\Controller\\ActividadClaveController::criterioTablaAction',));
            }

            // criterioRegistrar
            if (0 === strpos($pathinfo, '/criterioRegistrar') && preg_match('#^/criterioRegistrar/(?P<actividadClaveId>[^/]++)/(?P<criterioId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'criterioRegistrar')), array (  '_controller' => 'Gt\\SistemaBundle\\Controller\\ActividadClaveController::criterioRegistrarAction',));
            }

            // criterioBorrar
            if (0 === strpos($pathinfo, '/criterioBorrar') && preg_match('#^/criterioBorrar/(?P<criterioId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'criterioBorrar')), array (  '_controller' => 'Gt\\SistemaBundle\\Controller\\ActividadClaveController::criterioBorrarAction',));
            }

        }

        if (0 === strpos($pathinfo, '/pregunta')) {
            // pregunta
            if (preg_match('#^/pregunta/(?P<preguntaTipoId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pregunta')), array (  '_controller' => 'Gt\\SistemaBundle\\Controller\\PreguntaController::preguntaAction',));
            }

            // preguntaRegistrar
            if (0 === strpos($pathinfo, '/preguntaRegistrar') && preg_match('#^/preguntaRegistrar/(?P<preguntaId>[^/]++)/(?P<preguntaTipoId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'preguntaRegistrar')), array (  '_controller' => 'Gt\\SistemaBundle\\Controller\\PreguntaController::preguntaRegistrarAction',));
            }

            // preguntaConocimientoRegistrar
            if (0 === strpos($pathinfo, '/preguntaConocimientoRegistrar') && preg_match('#^/preguntaConocimientoRegistrar/(?P<preguntaId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'preguntaConocimientoRegistrar')), array (  '_controller' => 'Gt\\SistemaBundle\\Controller\\PreguntaController::preguntaConocimientoRegistrarAction',));
            }

            if (0 === strpos($pathinfo, '/preguntaTabla')) {
                // preguntaTabla
                if (preg_match('#^/preguntaTabla/(?P<preguntaTipoId>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'preguntaTabla')), array (  '_controller' => 'Gt\\SistemaBundle\\Controller\\PreguntaController::preguntaTablaAction',));
                }

                if (0 === strpos($pathinfo, '/preguntaTablaA')) {
                    // preguntaTablaActividadClave
                    if (0 === strpos($pathinfo, '/preguntaTablaActividadClave') && preg_match('#^/preguntaTablaActividadClave/(?P<competenciaId>[^/]++)/(?P<preguntaId>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'preguntaTablaActividadClave')), array (  '_controller' => 'Gt\\SistemaBundle\\Controller\\PreguntaController::preguntaTablaActividadClaveAction',));
                    }

                    // preguntaTablaAprendizaje
                    if (0 === strpos($pathinfo, '/preguntaTablaAprendizaje') && preg_match('#^/preguntaTablaAprendizaje/(?P<conocimientoId>[^/]++)/(?P<preguntaId>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'preguntaTablaAprendizaje')), array (  '_controller' => 'Gt\\SistemaBundle\\Controller\\PreguntaController::preguntaTablaAprendizajeAction',));
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/conocimiento')) {
            // conocimiento
            if ($pathinfo === '/conocimiento') {
                return array (  '_controller' => 'Gt\\SistemaBundle\\Controller\\ConocimientoController::conocimientoAction',  '_route' => 'conocimiento',);
            }

            // conocimientoRegistrar
            if (0 === strpos($pathinfo, '/conocimientoRegistrar') && preg_match('#^/conocimientoRegistrar/(?P<conocimientoId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'conocimientoRegistrar')), array (  '_controller' => 'Gt\\SistemaBundle\\Controller\\ConocimientoController::conocimientoRegistrarAction',));
            }

            // conocimientoTabla
            if ($pathinfo === '/conocimientoTabla') {
                return array (  '_controller' => 'Gt\\SistemaBundle\\Controller\\ConocimientoController::conocimientoTablaAction',  '_route' => 'conocimientoTabla',);
            }

        }

        if (0 === strpos($pathinfo, '/aprendizaje')) {
            // aprendizaje
            if (preg_match('#^/aprendizaje/(?P<conocimientoId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'aprendizaje')), array (  '_controller' => 'Gt\\SistemaBundle\\Controller\\ConocimientoController::aprendizajeAction',));
            }

            // aprendizajeTabla
            if (0 === strpos($pathinfo, '/aprendizajeTabla') && preg_match('#^/aprendizajeTabla/(?P<conocimientoId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'aprendizajeTabla')), array (  '_controller' => 'Gt\\SistemaBundle\\Controller\\ConocimientoController::aprendizajeTablaAction',));
            }

            // aprendizajeRegistrar
            if (0 === strpos($pathinfo, '/aprendizajeRegistrar') && preg_match('#^/aprendizajeRegistrar/(?P<conocimientoId>[^/]++)/(?P<aprendizajeId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'aprendizajeRegistrar')), array (  '_controller' => 'Gt\\SistemaBundle\\Controller\\ConocimientoController::aprendizajeRegistrarAction',));
            }

            // aprendizajeBorrar
            if (0 === strpos($pathinfo, '/aprendizajeBorrar') && preg_match('#^/aprendizajeBorrar/(?P<aprendizajeId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'aprendizajeBorrar')), array (  '_controller' => 'Gt\\SistemaBundle\\Controller\\ConocimientoController::aprendizajeBorrarAction',));
            }

        }

        if (0 === strpos($pathinfo, '/perfil')) {
            // perfil
            if ($pathinfo === '/perfil') {
                return array (  '_controller' => 'Gt\\SistemaBundle\\Controller\\PerfilController::perfilAction',  '_route' => 'perfil',);
            }

            // perfilRegistrar
            if (0 === strpos($pathinfo, '/perfilRegistrar') && preg_match('#^/perfilRegistrar/(?P<perfilId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'perfilRegistrar')), array (  '_controller' => 'Gt\\SistemaBundle\\Controller\\PerfilController::perfilRegistrarAction',));
            }

            // perfilTabla
            if ($pathinfo === '/perfilTabla') {
                return array (  '_controller' => 'Gt\\SistemaBundle\\Controller\\PerfilController::perfilTablaAction',  '_route' => 'perfilTabla',);
            }

            if (0 === strpos($pathinfo, '/perfilCo')) {
                // perfilCompetenciaTabla
                if (0 === strpos($pathinfo, '/perfilCompetenciaTabla') && preg_match('#^/perfilCompetenciaTabla/(?P<perfilId>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'perfilCompetenciaTabla')), array (  '_controller' => 'Gt\\SistemaBundle\\Controller\\PerfilController::perfilCompetenciaTablaAction',));
                }

                // perfilConocimientoTabla
                if (0 === strpos($pathinfo, '/perfilConocimientoTabla') && preg_match('#^/perfilConocimientoTabla/(?P<perfilId>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'perfilConocimientoTabla')), array (  '_controller' => 'Gt\\SistemaBundle\\Controller\\PerfilController::perfilConocimientoTablaAction',));
                }

            }

        }

        if (0 === strpos($pathinfo, '/clientePerfil')) {
            // clientePerfilRegistrar
            if ($pathinfo === '/clientePerfilRegistrar') {
                return array (  '_controller' => 'Gt\\SistemaBundle\\Controller\\ClientePerfilController::clientePerfilRegistrarAction',  '_route' => 'clientePerfilRegistrar',);
            }

            // clientePerfilTabla
            if ($pathinfo === '/clientePerfilTabla') {
                return array (  '_controller' => 'Gt\\SistemaBundle\\Controller\\ClientePerfilController::clientePerfilTablaAction',  '_route' => 'clientePerfilTabla',);
            }

            if (0 === strpos($pathinfo, '/clientePerfilCo')) {
                // clientePerfilCompetenciaTabla
                if (0 === strpos($pathinfo, '/clientePerfilCompetenciaTabla') && preg_match('#^/clientePerfilCompetenciaTabla/(?P<clientePerfilId>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'clientePerfilCompetenciaTabla')), array (  '_controller' => 'Gt\\SistemaBundle\\Controller\\ClientePerfilController::clientePerfilCompetenciaTablaAction',));
                }

                // clientePerfilConocimientoTabla
                if (0 === strpos($pathinfo, '/clientePerfilConocimientoTabla') && preg_match('#^/clientePerfilConocimientoTabla/(?P<clientePerfilId>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'clientePerfilConocimientoTabla')), array (  '_controller' => 'Gt\\SistemaBundle\\Controller\\ClientePerfilController::clientePerfilConocimientoTablaAction',));
                }

            }

        }

        if (0 === strpos($pathinfo, '/emp')) {
            if (0 === strpos($pathinfo, '/empresa')) {
                // empresa
                if ($pathinfo === '/empresa') {
                    return array (  '_controller' => 'Gt\\SistemaBundle\\Controller\\EmpresaController::empresaAction',  '_route' => 'empresa',);
                }

                // empresaRegistrar
                if (0 === strpos($pathinfo, '/empresaRegistrar') && preg_match('#^/empresaRegistrar/(?P<empresaId>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'empresaRegistrar')), array (  '_controller' => 'Gt\\SistemaBundle\\Controller\\EmpresaController::empresaRegistrarAction',));
                }

            }

            // empresaTabla
            if ($pathinfo === '/empersaClienteTabla') {
                return array (  '_controller' => 'Gt\\SistemaBundle\\Controller\\EmpresaController::empresaTablaAction',  '_route' => 'empresaTabla',);
            }

        }

        if (0 === strpos($pathinfo, '/persona')) {
            // persona
            if ($pathinfo === '/persona') {
                return array (  '_controller' => 'Gt\\SistemaBundle\\Controller\\PersonaController::personaAction',  '_route' => 'persona',);
            }

            // personaRegistrar
            if (0 === strpos($pathinfo, '/personaRegistrar') && preg_match('#^/personaRegistrar/(?P<personaId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'personaRegistrar')), array (  '_controller' => 'Gt\\SistemaBundle\\Controller\\PersonaController::personaRegistrarAction',));
            }

            // personaTabla
            if ($pathinfo === '/personaTabla') {
                return array (  '_controller' => 'Gt\\SistemaBundle\\Controller\\PersonaController::personaTablaAction',  '_route' => 'personaTabla',);
            }

        }

        if (0 === strpos($pathinfo, '/cliente')) {
            if (0 === strpos($pathinfo, '/clienteCo')) {
                if (0 === strpos($pathinfo, '/clienteCompetencia')) {
                    // clienteCompetenciaRegistrar
                    if ($pathinfo === '/clienteCompetenciaRegistrar') {
                        return array (  '_controller' => 'Gt\\SistemaBundle\\Controller\\ClienteCompetenciaController::clienteCompetenciaRegistrarAction',  '_route' => 'clienteCompetenciaRegistrar',);
                    }

                    // clienteCompetenciaTabla
                    if ($pathinfo === '/clienteCompetenciaTabla') {
                        return array (  '_controller' => 'Gt\\SistemaBundle\\Controller\\ClienteCompetenciaController::clienteCompetenciaTablaAction',  '_route' => 'clienteCompetenciaTabla',);
                    }

                }

                if (0 === strpos($pathinfo, '/clienteConocimiento')) {
                    // clienteConocimientoRegistrar
                    if ($pathinfo === '/clienteConocimientoRegistrar') {
                        return array (  '_controller' => 'GtSistemaBundle:ClienteConocimiento:clienteConocimientoRegistrar',  '_route' => 'clienteConocimientoRegistrar',);
                    }

                    // clienteConocimientoTabla
                    if ($pathinfo === '/clienteConocimientoTabla') {
                        return array (  '_controller' => 'GtSistemaBundle:ClienteConocimiento:clienteConocimientoTabla',  '_route' => 'clienteConocimientoTabla',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/clientePregunta')) {
                // clientePreguntaRegistrar
                if ($pathinfo === '/clientePreguntaRegistrar') {
                    return array (  '_controller' => 'GtSistemaBundle:ClientePregunta:clientePreguntaRegistrar',  '_route' => 'clientePreguntaRegistrar',);
                }

                if (0 === strpos($pathinfo, '/clientePreguntaTabla')) {
                    // clientePreguntaTabla
                    if ($pathinfo === '/clientePreguntaTabla') {
                        return array (  '_controller' => 'GtSistemaBundle:ClientePregunta:clientePreguntaTabla',  '_route' => 'clientePreguntaTabla',);
                    }

                    if (0 === strpos($pathinfo, '/clientePreguntaTablaA')) {
                        // clientePreguntaTablaActividadClave
                        if (0 === strpos($pathinfo, '/clientePreguntaTablaActividadClave') && preg_match('#^/clientePreguntaTablaActividadClave/(?P<competenciaId>[^/]++)/(?P<preguntaId>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'clientePreguntaTablaActividadClave')), array (  '_controller' => 'GtSistemaBundle:ClientePregunta:clientePreguntaTablaActividadClave',));
                        }

                        // clientePreguntaTablaAprendizaje
                        if (0 === strpos($pathinfo, '/clientePreguntaTablaAprendizaje') && preg_match('#^/clientePreguntaTablaAprendizaje/(?P<conocimientoId>[^/]++)/(?P<preguntaId>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'clientePreguntaTablaAprendizaje')), array (  '_controller' => 'GtSistemaBundle:ClientePregunta:clientePreguntaTablaAprendizaje',));
                        }

                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/evaluacion')) {
            // evaluacion
            if ($pathinfo === '/evaluacion') {
                return array (  '_controller' => 'Gt\\SistemaBundle\\Controller\\EvaluacionController::evaluacionAction',  '_route' => 'evaluacion',);
            }

            // evaluacionRegistrar
            if (0 === strpos($pathinfo, '/evaluacionRegistrar') && preg_match('#^/evaluacionRegistrar/(?P<evaluacionId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'evaluacionRegistrar')), array (  '_controller' => 'Gt\\SistemaBundle\\Controller\\EvaluacionController::evaluacionRegistrarAction',));
            }

            // evaluacionTabla
            if ($pathinfo === '/evaluacionTabla') {
                return array (  '_controller' => 'Gt\\SistemaBundle\\Controller\\EvaluacionController::evaluacionTablaAction',  '_route' => 'evaluacionTabla',);
            }

        }

        if (0 === strpos($pathinfo, '/participante')) {
            // participanteRegistrar
            if (0 === strpos($pathinfo, '/participanteRegistrar') && preg_match('#^/participanteRegistrar/(?P<evaluacionId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'participanteRegistrar')), array (  '_controller' => 'Gt\\SistemaBundle\\Controller\\ParticipanteController::participanteRegistrarAction',));
            }

            // participanteTabla
            if (0 === strpos($pathinfo, '/participanteTabla') && preg_match('#^/participanteTabla/(?P<evaluacionId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'participanteTabla')), array (  '_controller' => 'Gt\\SistemaBundle\\Controller\\ParticipanteController::participanteTablaAction',));
            }

        }

        if (0 === strpos($pathinfo, '/evaluacion')) {
            if (0 === strpos($pathinfo, '/evaluacionP')) {
                if (0 === strpos($pathinfo, '/evaluacionParticipantes')) {
                    // evaluacionParticipantes
                    if (preg_match('#^/evaluacionParticipantes/(?P<evaluacionId>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'evaluacionParticipantes')), array (  '_controller' => 'Gt\\SistemaBundle\\Controller\\EvaluacionController::evaluacionParticipantesAction',));
                    }

                    // evaluacionParticipantesTabla
                    if (0 === strpos($pathinfo, '/evaluacionParticipantesTabla') && preg_match('#^/evaluacionParticipantesTabla/(?P<evaluacionId>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'evaluacionParticipantesTabla')), array (  '_controller' => 'Gt\\SistemaBundle\\Controller\\EvaluacionController::evaluacionParticipantesTablaAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/evaluacionPreguntaCo')) {
                    // evaluacionPreguntaCompetencia
                    if (0 === strpos($pathinfo, '/evaluacionPreguntaCompetencia') && preg_match('#^/evaluacionPreguntaCompetencia/(?P<participanteId>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'evaluacionPreguntaCompetencia')), array (  '_controller' => 'Gt\\SistemaBundle\\Controller\\EvaluacionController::evaluacionPreguntaCompetenciaAction',));
                    }

                    // evaluacionPreguntaConocimiento
                    if (0 === strpos($pathinfo, '/evaluacionPreguntaConocimiento') && preg_match('#^/evaluacionPreguntaConocimiento/(?P<participanteId>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'evaluacionPreguntaConocimiento')), array (  '_controller' => 'Gt\\SistemaBundle\\Controller\\EvaluacionController::evaluacionPreguntaConocimientoAction',));
                    }

                    // evaluacionPreguntaCompetenciaResumen
                    if (0 === strpos($pathinfo, '/evaluacionPreguntaCompetenciaResumen') && preg_match('#^/evaluacionPreguntaCompetenciaResumen/(?P<participanteId>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'evaluacionPreguntaCompetenciaResumen')), array (  '_controller' => 'Gt\\SistemaBundle\\Controller\\EvaluacionController::evaluacionPreguntaCompetenciaResumenAction',));
                    }

                    // evaluacionPreguntaConocimientoResumen
                    if (0 === strpos($pathinfo, '/evaluacionPreguntaConocimientoResumen') && preg_match('#^/evaluacionPreguntaConocimientoResumen/(?P<participanteId>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'evaluacionPreguntaConocimientoResumen')), array (  '_controller' => 'Gt\\SistemaBundle\\Controller\\EvaluacionController::evaluacionPreguntaConocimientoResumenAction',));
                    }

                }

            }

            // evaluacionUclResumen
            if (0 === strpos($pathinfo, '/evaluacionUclResumen') && preg_match('#^/evaluacionUclResumen/(?P<participanteId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'evaluacionUclResumen')), array (  '_controller' => 'Gt\\SistemaBundle\\Controller\\EvaluacionController::evaluacionUclResumenAction',));
            }

            // evaluacionCcResumen
            if (0 === strpos($pathinfo, '/evaluacionCcResumen') && preg_match('#^/evaluacionCcResumen/(?P<participanteId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'evaluacionCcResumen')), array (  '_controller' => 'Gt\\SistemaBundle\\Controller\\EvaluacionController::evaluacionCcResumenAction',));
            }

            if (0 === strpos($pathinfo, '/evaluacionP')) {
                if (0 === strpos($pathinfo, '/evaluacionParticipanteListado')) {
                    // evaluacionParticipanteListado
                    if (preg_match('#^/evaluacionParticipanteListado/(?P<evaluacionId>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'evaluacionParticipanteListado')), array (  '_controller' => 'Gt\\SistemaBundle\\Controller\\ParticipanteController::evaluacionParticipanteListadoAction',));
                    }

                    // evaluacionParticipanteListadoTabla
                    if (0 === strpos($pathinfo, '/evaluacionParticipanteListadoTabla') && preg_match('#^/evaluacionParticipanteListadoTabla/(?P<evaluacionId>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'evaluacionParticipanteListadoTabla')), array (  '_controller' => 'Gt\\SistemaBundle\\Controller\\ParticipanteController::participanteTablaAction',));
                    }

                }

                // evaluacionPersonaTabla
                if (0 === strpos($pathinfo, '/evaluacionPersonaTabla') && preg_match('#^/evaluacionPersonaTabla/(?P<evaluacionId>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'evaluacionPersonaTabla')), array (  '_controller' => 'Gt\\SistemaBundle\\Controller\\EvaluacionController::personaTablaAction',));
                }

                if (0 === strpos($pathinfo, '/evaluacionParticipante')) {
                    // evaluacionParticipanteEvaluar
                    if (0 === strpos($pathinfo, '/evaluacionParticipanteEvaluar') && preg_match('#^/evaluacionParticipanteEvaluar/(?P<evaluacionId>[^/]++)/(?P<participanteId>[^/]++)/(?P<perfilId>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'evaluacionParticipanteEvaluar')), array (  '_controller' => 'Gt\\SistemaBundle\\Controller\\ParticipanteController::evaluacionParticipanteEvaluarAction',));
                    }

                    // evaluacionParticipanteRegistrar
                    if (0 === strpos($pathinfo, '/evaluacionParticipanteRegistrar') && preg_match('#^/evaluacionParticipanteRegistrar/(?P<evaluacionId>[^/]++)/(?P<participanteId>[^/]++)/(?P<perfilId>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'evaluacionParticipanteRegistrar')), array (  '_controller' => 'Gt\\SistemaBundle\\Controller\\ParticipanteController::evaluacionParticipanteRegistrarAction',));
                    }

                    if (0 === strpos($pathinfo, '/evaluacionParticipanteEvaluarCo')) {
                        // evaluacionParticipanteEvaluarCompetenciaTabla
                        if (0 === strpos($pathinfo, '/evaluacionParticipanteEvaluarCompetenciaTabla') && preg_match('#^/evaluacionParticipanteEvaluarCompetenciaTabla/(?P<evaluacionId>[^/]++)/(?P<participanteId>[^/]++)/(?P<perfilId>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'evaluacionParticipanteEvaluarCompetenciaTabla')), array (  '_controller' => 'Gt\\SistemaBundle\\Controller\\ParticipanteController::evaluacionParticipanteEvaluarCompetenciaTablaAction',));
                        }

                        // evaluacionParticipanteEvaluarConocimientoTabla
                        if (0 === strpos($pathinfo, '/evaluacionParticipanteEvaluarConocimientoTabla') && preg_match('#^/evaluacionParticipanteEvaluarConocimientoTabla/(?P<evaluacionId>[^/]++)/(?P<participanteId>[^/]++)/(?P<perfilId>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'evaluacionParticipanteEvaluarConocimientoTabla')), array (  '_controller' => 'Gt\\SistemaBundle\\Controller\\ParticipanteController::evaluacionParticipanteEvaluarConocimientoTablaAction',));
                        }

                    }

                }

            }

            // evaluacionCriterio
            if (0 === strpos($pathinfo, '/evaluacionCriterio') && preg_match('#^/evaluacionCriterio/(?P<participanteId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'evaluacionCriterio')), array (  '_controller' => 'Gt\\SistemaBundle\\Controller\\EvaluacionController::evaluacionCriterioAction',));
            }

            // evaluacionAprendizaje
            if (0 === strpos($pathinfo, '/evaluacionAprendizaje') && preg_match('#^/evaluacionAprendizaje/(?P<participanteId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'evaluacionAprendizaje')), array (  '_controller' => 'Gt\\SistemaBundle\\Controller\\EvaluacionController::evaluacionAprendizajeAction',));
            }

        }

        // informePdf
        if (0 === strpos($pathinfo, '/informePdf') && preg_match('#^/informePdf/(?P<informeTipo>[^/]++)/(?P<participanteId>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'informePdf')), array (  '_controller' => 'Gt\\SistemaBundle\\Controller\\InformeController::informePdfAction',));
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
