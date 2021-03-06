<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'twig' shared service.

$this->services['twig'] = $instance = new \Twig\Environment(${($_ = isset($this->services['twig.loader']) ? $this->services['twig.loader'] : $this->load('getTwig_LoaderService.php')) && false ?: '_'}, array('debug' => false, 'strict_variables' => false, 'exception_controller' => 'twig.controller.exception:showAction', 'form_themes' => $this->parameters['twig.form.resources'], 'autoescape' => 'name', 'cache' => ($this->targetDirs[0].'/twig'), 'charset' => 'UTF-8', 'default_path' => ($this->targetDirs[4].'/templates'), 'paths' => array(), 'date' => array('format' => 'F j, Y H:i', 'interval_format' => '%d days', 'timezone' => NULL), 'number_format' => array('decimals' => 0, 'decimal_point' => '.', 'thousands_separator' => ',')));

$a = ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()) && false ?: '_'};

$b = new \Symfony\Bridge\Twig\AppVariable();
$b->setEnvironment('prod');
$b->setDebug(false);
if ($this->has('security.token_storage')) {
    $b->setTokenStorage(${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage()) && false ?: '_'});
}
if ($this->has('request_stack')) {
    $b->setRequestStack($a);
}

$instance->addExtension(new \Symfony\Bridge\Twig\Extension\TranslationExtension(${($_ = isset($this->services['sulu_website.translator.request_analyzer']) ? $this->services['sulu_website.translator.request_analyzer'] : $this->getSuluWebsite_Translator_RequestAnalyzerService()) && false ?: '_'}));
$instance->addExtension(new \Symfony\Bridge\Twig\Extension\AssetExtension(${($_ = isset($this->services['assets.packages']) ? $this->services['assets.packages'] : $this->load('getAssets_PackagesService.php')) && false ?: '_'}));
$instance->addExtension(new \Symfony\Bridge\Twig\Extension\CodeExtension(${($_ = isset($this->services['debug.file_link_formatter']) ? $this->services['debug.file_link_formatter'] : $this->services['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL)) && false ?: '_'}, ($this->targetDirs[4].'\\app'), 'UTF-8'));
$instance->addExtension(new \Symfony\Bridge\Twig\Extension\RoutingExtension(${($_ = isset($this->services['router']) ? $this->services['router'] : $this->getRouterService()) && false ?: '_'}));
$instance->addExtension(new \Symfony\Bridge\Twig\Extension\YamlExtension());
$instance->addExtension(new \Symfony\Bridge\Twig\Extension\StopwatchExtension(${($_ = isset($this->services['debug.stopwatch']) ? $this->services['debug.stopwatch'] : $this->services['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true)) && false ?: '_'}, false));
$instance->addExtension(new \Symfony\Bridge\Twig\Extension\ExpressionExtension());
$instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpKernelExtension());
$instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpFoundationExtension($a, ${($_ = isset($this->services['router.request_context']) ? $this->services['router.request_context'] : $this->getRouter_RequestContextService()) && false ?: '_'}));
$instance->addExtension(new \Symfony\Bridge\Twig\Extension\FormExtension(array(0 => $this, 1 => 'twig.form.renderer')));
$instance->addExtension(new \Symfony\Bridge\Twig\Extension\LogoutUrlExtension(${($_ = isset($this->services['security.logout_url_generator']) ? $this->services['security.logout_url_generator'] : $this->getSecurity_LogoutUrlGeneratorService()) && false ?: '_'}));
$instance->addExtension(new \Symfony\Bridge\Twig\Extension\SecurityExtension(${($_ = isset($this->services['security.authorization_checker']) ? $this->services['security.authorization_checker'] : $this->getSecurity_AuthorizationCheckerService()) && false ?: '_'}));
$instance->addExtension(new \Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension());
$instance->addExtension(new \JMS\Serializer\Twig\SerializerRuntimeExtension());
$instance->addExtension(${($_ = isset($this->services['hateoas.twig.link']) ? $this->services['hateoas.twig.link'] : $this->load('getHateoas_Twig_LinkService.php')) && false ?: '_'});
$instance->addExtension(${($_ = isset($this->services['sulu_contact.twig']) ? $this->services['sulu_contact.twig'] : $this->load('getSuluContact_TwigService.php')) && false ?: '_'});
$instance->addExtension(${($_ = isset($this->services['sulu_media.twig_extension.disposition_type']) ? $this->services['sulu_media.twig_extension.disposition_type'] : $this->services['sulu_media.twig_extension.disposition_type'] = new \Sulu\Bundle\MediaBundle\Twig\DispositionTypeTwigExtension()) && false ?: '_'});
$instance->addExtension(${($_ = isset($this->services['sulu_media.twig_extension.media']) ? $this->services['sulu_media.twig_extension.media'] : $this->load('getSuluMedia_TwigExtension_MediaService.php')) && false ?: '_'});
$instance->addExtension(${($_ = isset($this->services['sulu_security.twig_extension.user']) ? $this->services['sulu_security.twig_extension.user'] : $this->load('getSuluSecurity_TwigExtension_UserService.php')) && false ?: '_'});
$instance->addExtension(${($_ = isset($this->services['sulu_category.twig_extension']) ? $this->services['sulu_category.twig_extension'] : $this->load('getSuluCategory_TwigExtensionService.php')) && false ?: '_'});
$instance->addExtension(${($_ = isset($this->services['sulu_snippet.twig.snippet.memoized']) ? $this->services['sulu_snippet.twig.snippet.memoized'] : $this->load('getSuluSnippet_Twig_Snippet_MemoizedService.php')) && false ?: '_'});
$instance->addExtension(${($_ = isset($this->services['sulu_snippet.twig.default_snippet']) ? $this->services['sulu_snippet.twig.default_snippet'] : $this->load('getSuluSnippet_Twig_DefaultSnippetService.php')) && false ?: '_'});
$instance->addExtension(${($_ = isset($this->services['sulu_snippet.twig.area_snippet']) ? $this->services['sulu_snippet.twig.area_snippet'] : $this->load('getSuluSnippet_Twig_AreaSnippetService.php')) && false ?: '_'});
$instance->addExtension(${($_ = isset($this->services['sulu_content.twig_extension']) ? $this->services['sulu_content.twig_extension'] : $this->load('getSuluContent_TwigExtensionService.php')) && false ?: '_'});
$instance->addExtension(${($_ = isset($this->services['sulu_content.export_twig_extension']) ? $this->services['sulu_content.export_twig_extension'] : $this->load('getSuluContent_ExportTwigExtensionService.php')) && false ?: '_'});
$instance->addExtension(${($_ = isset($this->services['sulu_tag.twig_extension']) ? $this->services['sulu_tag.twig_extension'] : $this->load('getSuluTag_TwigExtensionService.php')) && false ?: '_'});
$instance->addExtension(${($_ = isset($this->services['sulu_website.twig.content_path']) ? $this->services['sulu_website.twig.content_path'] : $this->load('getSuluWebsite_Twig_ContentPathService.php')) && false ?: '_'});
$instance->addExtension(${($_ = isset($this->services['sulu_website.twig.navigation.memoized']) ? $this->services['sulu_website.twig.navigation.memoized'] : $this->load('getSuluWebsite_Twig_Navigation_MemoizedService.php')) && false ?: '_'});
$instance->addExtension(${($_ = isset($this->services['sulu_website.twig.sitemap.memoized']) ? $this->services['sulu_website.twig.sitemap.memoized'] : $this->load('getSuluWebsite_Twig_Sitemap_MemoizedService.php')) && false ?: '_'});
$instance->addExtension(${($_ = isset($this->services['sulu_website.twig.content.memoized']) ? $this->services['sulu_website.twig.content.memoized'] : $this->load('getSuluWebsite_Twig_Content_MemoizedService.php')) && false ?: '_'});
$instance->addExtension(${($_ = isset($this->services['sulu_website.twig.meta']) ? $this->services['sulu_website.twig.meta'] : $this->load('getSuluWebsite_Twig_MetaService.php')) && false ?: '_'});
$instance->addExtension(${($_ = isset($this->services['sulu_website.twig.seo']) ? $this->services['sulu_website.twig.seo'] : $this->load('getSuluWebsite_Twig_SeoService.php')) && false ?: '_'});
$instance->addExtension(${($_ = isset($this->services['sulu_website.twig.util']) ? $this->services['sulu_website.twig.util'] : $this->services['sulu_website.twig.util'] = new \Sulu\Bundle\WebsiteBundle\Twig\Core\UtilTwigExtension()) && false ?: '_'});
$instance->addGlobal('app', $b);
$instance->addRuntimeLoader(new \Twig\RuntimeLoader\ContainerRuntimeLoader(new \Symfony\Component\DependencyInjection\ServiceLocator(array('JMS\\Serializer\\Twig\\SerializerRuntimeHelper' => function () {
    return ${($_ = isset($this->services['jms_serializer.twig_extension.serializer_runtime_helper']) ? $this->services['jms_serializer.twig_extension.serializer_runtime_helper'] : $this->load('getJmsSerializer_TwigExtension_SerializerRuntimeHelperService.php')) && false ?: '_'};
}, 'Symfony\\Bridge\\Twig\\Extension\\HttpKernelRuntime' => function () {
    return ${($_ = isset($this->services['twig.runtime.httpkernel']) ? $this->services['twig.runtime.httpkernel'] : $this->load('getTwig_Runtime_HttpkernelService.php')) && false ?: '_'};
}, 'Symfony\\Component\\Form\\FormRenderer' => function () {
    return ${($_ = isset($this->services['twig.form.renderer']) ? $this->services['twig.form.renderer'] : $this->load('getTwig_Form_RendererService.php')) && false ?: '_'};
}))));
(new \Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator('F j, Y H:i', '%d days', NULL, 0, '.', ','))->configure($instance);

return $instance;
