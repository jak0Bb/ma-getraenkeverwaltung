<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class websiteProdProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'sulu_media.website.image.proxy' => array (  0 =>   array (    0 => 'slug',  ),  1 =>   array (    '_controller' => 'Sulu\\Bundle\\MediaBundle\\Controller\\MediaStreamController::getImageAction',    '_requestAnalyzer' => false,  ),  2 =>   array (    'slug' => '.*',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '.*',      3 => 'slug',    ),    1 =>     array (      0 => 'text',      1 => '/uploads/media',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sulu_media.website.media.download' => array (  0 =>   array (    0 => 'id',    1 => 'slug',  ),  1 =>   array (    '_controller' => 'Sulu\\Bundle\\MediaBundle\\Controller\\MediaStreamController::downloadAction',    '_requestAnalyzer' => false,  ),  2 =>   array (    'slug' => '.*',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '.*',      3 => 'slug',    ),    1 =>     array (      0 => 'text',      1 => '/download',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    3 =>     array (      0 => 'text',      1 => '/media',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sulu_search.website_search' => array (  0 =>   array (    0 => 'host',    1 => 'prefix',  ),  1 =>   array (    '_controller' => 'sulu_search.controller.website_search:queryAction',  ),  2 =>   array (    'prefix' => '.*',    'host' => '.+',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search',    ),    1 =>     array (      0 => 'variable',      1 => '',      2 => '.*',      3 => 'prefix',    ),  ),  4 =>   array (    0 =>     array (      0 => 'variable',      1 => '',      2 => '.+',      3 => 'host',    ),  ),  5 =>   array (  ),),
        'sulu_website.sitemap_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sulu\\Bundle\\WebsiteBundle\\Controller\\SitemapController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/sitemap.xml',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sulu_website.paginated_sitemap' => array (  0 =>   array (    0 => 'alias',    1 => 'page',  ),  1 =>   array (    '_controller' => 'Sulu\\Bundle\\WebsiteBundle\\Controller\\SitemapController::sitemapPaginatedAction',  ),  2 =>   array (    'page' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '.xml',    ),    1 =>     array (      0 => 'variable',      1 => '-',      2 => '\\d+',      3 => 'page',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/\\-]++',      3 => 'alias',    ),    3 =>     array (      0 => 'text',      1 => '/sitemaps',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sulu_website.sitemap' => array (  0 =>   array (    0 => 'alias',  ),  1 =>   array (    '_controller' => 'Sulu\\Bundle\\WebsiteBundle\\Controller\\SitemapController::sitemapAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '.xml',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/\\.]++',      3 => 'alias',    ),    2 =>     array (      0 => 'text',      1 => '/sitemaps',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
