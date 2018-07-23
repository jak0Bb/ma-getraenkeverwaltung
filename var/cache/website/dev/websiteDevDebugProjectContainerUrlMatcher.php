<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class websiteDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        // _wdt
        if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',  '_requestAnalyzer' => false,));
        }

        if (0 === strpos($pathinfo, '/_profiler')) {
            // _profiler_home
            if ('/_profiler' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_requestAnalyzer' => false,  '_route' => '_profiler_home',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not__profiler_home;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', '_profiler_home'));
                }

                return $ret;
            }
            not__profiler_home:

            if (0 === strpos($pathinfo, '/_profiler/search')) {
                // _profiler_search
                if ('/_profiler/search' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_requestAnalyzer' => false,  '_route' => '_profiler_search',);
                }

                // _profiler_search_bar
                if ('/_profiler/search_bar' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_requestAnalyzer' => false,  '_route' => '_profiler_search_bar',);
                }

            }

            // _profiler_phpinfo
            if ('/_profiler/phpinfo' === $pathinfo) {
                return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_requestAnalyzer' => false,  '_route' => '_profiler_phpinfo',);
            }

            // _profiler_search_results
            if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',  '_requestAnalyzer' => false,));
            }

            // _profiler_open_file
            if ('/_profiler/open' === $pathinfo) {
                return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_requestAnalyzer' => false,  '_route' => '_profiler_open_file',);
            }

            // _profiler
            if (preg_match('#^/_profiler/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',  '_requestAnalyzer' => false,));
            }

            // _profiler_router
            if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',  '_requestAnalyzer' => false,));
            }

            // _profiler_exception
            if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',  '_requestAnalyzer' => false,));
            }

            // _profiler_exception_css
            if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',  '_requestAnalyzer' => false,));
            }

        }

        // sulu_media.website.image.proxy
        if (0 === strpos($pathinfo, '/uploads/media') && preg_match('#^/uploads/media/(?P<slug>.*)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sulu_media.website.image.proxy')), array (  '_controller' => 'Sulu\\Bundle\\MediaBundle\\Controller\\MediaStreamController::getImageAction',  '_requestAnalyzer' => false,));
        }

        // sulu_media.website.media.download
        if (0 === strpos($pathinfo, '/media') && preg_match('#^/media/(?P<id>[^/]++)/download/(?P<slug>.*)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sulu_media.website.media.download')), array (  '_controller' => 'Sulu\\Bundle\\MediaBundle\\Controller\\MediaStreamController::downloadAction',  '_requestAnalyzer' => false,));
        }

        $host = $context->getHost();

        if (preg_match('#^(?P<host>.+)$#sDi', $host, $hostMatches)) {
            // sulu_search.website_search
            if (preg_match('#^(?P<prefix>.*)/search$#sD', $pathinfo, $matches) && (($request->get("_sulu")->getAttribute("portalInformation") !== null) && ($request->get("_sulu")->getAttribute("portalInformation")->getType() === 1))) {
                return $this->mergeDefaults(array_replace($hostMatches, $matches, array('_route' => 'sulu_search.website_search')), array (  '_controller' => 'sulu_search.controller.website_search:queryAction',));
            }

        }

        // sulu_website.sitemap_index
        if ('/sitemap.xml' === $pathinfo) {
            return array (  '_controller' => 'Sulu\\Bundle\\WebsiteBundle\\Controller\\SitemapController::indexAction',  '_route' => 'sulu_website.sitemap_index',);
        }

        if (0 === strpos($pathinfo, '/sitemaps')) {
            // sulu_website.paginated_sitemap
            if (preg_match('#^/sitemaps/(?P<alias>[^/\\-]++)\\-(?P<page>\\d+)\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sulu_website.paginated_sitemap')), array (  '_controller' => 'Sulu\\Bundle\\WebsiteBundle\\Controller\\SitemapController::sitemapPaginatedAction',));
            }

            // sulu_website.sitemap
            if (preg_match('#^/sitemaps/(?P<alias>[^/\\.]++)\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sulu_website.sitemap')), array (  '_controller' => 'Sulu\\Bundle\\WebsiteBundle\\Controller\\SitemapController::sitemapAction',));
            }

        }

        // sulu_community.registration
        if ('/registration' === $pathinfo) {
            return array (  '_controller' => 'Sulu\\Bundle\\CommunityBundle\\Controller\\RegistrationController::indexAction',  'host' => 'getraenkeverwaltung.lo',  '_route' => 'sulu_community.registration',);
        }

        // sulu_community.confirmation
        if (0 === strpos($pathinfo, '/confirmation') && preg_match('#^/confirmation/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sulu_community.confirmation')), array (  '_controller' => 'Sulu\\Bundle\\CommunityBundle\\Controller\\ConfirmationController::indexAction',  'host' => 'getraenkeverwaltung.lo',));
        }

        // sulu_community.completion
        if ('/completion' === $pathinfo) {
            return array (  '_controller' => 'Sulu\\Bundle\\CommunityBundle\\Controller\\CompletionController::indexAction',  'host' => 'getraenkeverwaltung.lo',  '_route' => 'sulu_community.completion',);
        }

        if (0 === strpos($pathinfo, '/p')) {
            // sulu_community.password_forget
            if ('/password-forget' === $pathinfo) {
                return array (  '_controller' => 'Sulu\\Bundle\\CommunityBundle\\Controller\\PasswordController::forgetAction',  'host' => 'getraenkeverwaltung.lo',  '_route' => 'sulu_community.password_forget',);
            }

            // sulu_community.password_reset
            if (0 === strpos($pathinfo, '/password-reset') && preg_match('#^/password\\-reset/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sulu_community.password_reset')), array (  '_controller' => 'Sulu\\Bundle\\CommunityBundle\\Controller\\PasswordController::resetAction',  'host' => 'getraenkeverwaltung.lo',));
            }

            if (0 === strpos($pathinfo, '/profile')) {
                // sulu_community.profile
                if ('/profile' === $pathinfo) {
                    return array (  '_controller' => 'Sulu\\Bundle\\CommunityBundle\\Controller\\ProfileController::indexAction',  'host' => 'getraenkeverwaltung.lo',  '_route' => 'sulu_community.profile',);
                }

                // sulu_community.email_confirmation
                if ('/profile/email-confirmation' === $pathinfo) {
                    return array (  '_controller' => 'Sulu\\Bundle\\CommunityBundle\\Controller\\EmailConfirmationController::indexAction',  'host' => 'getraenkeverwaltung.lo',  '_route' => 'sulu_community.email_confirmation',);
                }

            }

        }

        // sulu_community.user_confirm
        if ('/_community/confirm' === $pathinfo) {
            return array (  '_controller' => 'Sulu\\Bundle\\CommunityBundle\\Controller\\BlacklistConfirmationController::confirmAction',  'host' => 'getraenkeverwaltung.lo',  '_route' => 'sulu_community.user_confirm',);
        }

        // sulu_community.user_deny
        if ('/_community/deny' === $pathinfo) {
            return array (  '_controller' => 'Sulu\\Bundle\\CommunityBundle\\Controller\\BlacklistConfirmationController::denyAction',  'host' => 'getraenkeverwaltung.lo',  '_route' => 'sulu_community.user_deny',);
        }

        // sulu_community.login
        if ('/login' === $pathinfo) {
            return array (  '_controller' => 'Sulu\\Bundle\\CommunityBundle\\Controller\\LoginController::indexAction',  'host' => 'getraenkeverwaltung.lo',  '_route' => 'sulu_community.login',);
        }

        // sulu_community.logout
        if ('/logout' === $pathinfo) {
            return array (  'host' => 'getraenkeverwaltung.lo',  '_route' => 'sulu_community.logout',);
        }

        if (preg_match('#^(?P<host>.+)$#sDi', $host, $hostMatches)) {
            // _twig_error_test
            if (preg_match('#^(?P<prefix>.*)/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches) && (($request->get("_sulu")->getAttribute("portalInformation") !== null) && ($request->get("_sulu")->getAttribute("portalInformation")->getType() === 1))) {
                return $this->mergeDefaults(array_replace($hostMatches, $matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
