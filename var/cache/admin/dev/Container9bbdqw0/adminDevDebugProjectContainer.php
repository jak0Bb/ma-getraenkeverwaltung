<?php

namespace Container9bbdqw0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;

/**
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 *
 * @final since Symfony 3.3
 */
class adminDevDebugProjectContainer extends Container
{
    private $buildParameters;
    private $containerDir;
    private $parameters;
    private $targetDirs = array();

    public function __construct(array $buildParameters = array(), $containerDir = __DIR__)
    {
        $dir = $this->targetDirs[0] = \dirname($containerDir);
        for ($i = 1; $i <= 5; ++$i) {
            $this->targetDirs[$i] = $dir = \dirname($dir);
        }
        $this->buildParameters = $buildParameters;
        $this->containerDir = $containerDir;
        $this->parameters = $this->getDefaultParameters();

        $this->services = array();
        $this->normalizedIds = array(
            'jms\\serializer\\arraytransformerinterface' => 'JMS\\Serializer\\ArrayTransformerInterface',
            'jms\\serializer\\serializerinterface' => 'JMS\\Serializer\\SerializerInterface',
            'sulu_navigationcontext.document.subscriber.navigation_context' => 'sulu_navigationContext.document.subscriber.navigation_context',
            'symfony\\bundle\\frameworkbundle\\controller\\redirectcontroller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController',
            'symfony\\bundle\\frameworkbundle\\controller\\templatecontroller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController',
        );
        $this->syntheticIds = array(
            'kernel' => true,
        );
        $this->methodMap = array(
            'annotation_reader' => 'getAnnotationReaderService',
            'annotations.reader' => 'getAnnotations_ReaderService',
            'assets.context' => 'getAssets_ContextService',
            'assets.packages' => 'getAssets_PackagesService',
            'bazinga_hateoas.expression_language' => 'getBazingaHateoas_ExpressionLanguageService',
            'cache.annotations' => 'getCache_AnnotationsService',
            'cache.app' => 'getCache_AppService',
            'cache.serializer' => 'getCache_SerializerService',
            'cache.system' => 'getCache_SystemService',
            'cache.validator' => 'getCache_ValidatorService',
            'config_cache_factory' => 'getConfigCacheFactoryService',
            'controller_name_converter' => 'getControllerNameConverterService',
            'data_collector.dump' => 'getDataCollector_DumpService',
            'data_collector.form' => 'getDataCollector_FormService',
            'data_collector.form.extractor' => 'getDataCollector_Form_ExtractorService',
            'data_collector.request' => 'getDataCollector_RequestService',
            'data_collector.router' => 'getDataCollector_RouterService',
            'data_collector.translation' => 'getDataCollector_TranslationService',
            'debug.argument_resolver' => 'getDebug_ArgumentResolverService',
            'debug.controller_resolver' => 'getDebug_ControllerResolverService',
            'debug.debug_handlers_listener' => 'getDebug_DebugHandlersListenerService',
            'debug.event_dispatcher' => 'getDebug_EventDispatcherService',
            'debug.file_link_formatter' => 'getDebug_FileLinkFormatterService',
            'debug.log_processor' => 'getDebug_LogProcessorService',
            'debug.security.access.decision_manager' => 'getDebug_Security_Access_DecisionManagerService',
            'debug.stopwatch' => 'getDebug_StopwatchService',
            'doctrine' => 'getDoctrineService',
            'doctrine.dbal.connection_factory' => 'getDoctrine_Dbal_ConnectionFactoryService',
            'doctrine.dbal.default_connection' => 'getDoctrine_Dbal_DefaultConnectionService',
            'doctrine.dbal.logger.profiling.default' => 'getDoctrine_Dbal_Logger_Profiling_DefaultService',
            'doctrine.orm.default_entity_listener_resolver' => 'getDoctrine_Orm_DefaultEntityListenerResolverService',
            'doctrine.orm.default_entity_manager' => 'getDoctrine_Orm_DefaultEntityManagerService',
            'doctrine.orm.default_listeners.attach_entity_listeners' => 'getDoctrine_Orm_DefaultListeners_AttachEntityListenersService',
            'doctrine.orm.default_manager_configurator' => 'getDoctrine_Orm_DefaultManagerConfiguratorService',
            'doctrine.orm.validator_initializer' => 'getDoctrine_Orm_ValidatorInitializerService',
            'doctrine_cache.providers.doctrine.orm.default_metadata_cache' => 'getDoctrineCache_Providers_Doctrine_Orm_DefaultMetadataCacheService',
            'doctrine_cache.providers.doctrine.orm.default_query_cache' => 'getDoctrineCache_Providers_Doctrine_Orm_DefaultQueryCacheService',
            'doctrine_cache.providers.doctrine.orm.default_result_cache' => 'getDoctrineCache_Providers_Doctrine_Orm_DefaultResultCacheService',
            'doctrine_phpcr' => 'getDoctrinePhpcrService',
            'doctrine_phpcr.jackalope.repository.default' => 'getDoctrinePhpcr_Jackalope_Repository_DefaultService',
            'doctrine_phpcr.jackalope.repository.factory.service.doctrinedbal' => 'getDoctrinePhpcr_Jackalope_Repository_Factory_Service_DoctrinedbalService',
            'doctrine_phpcr.jackalope.repository.live' => 'getDoctrinePhpcr_Jackalope_Repository_LiveService',
            'dubture_ffmpeg.ffmpeg' => 'getDubtureFfmpeg_FfmpegService',
            'dubture_ffmpeg.ffprobe' => 'getDubtureFfmpeg_FfprobeService',
            'file_locator' => 'getFileLocatorService',
            'filesystem' => 'getFilesystemService',
            'form.factory' => 'getForm_FactoryService',
            'form.registry' => 'getForm_RegistryService',
            'form.resolved_type_factory' => 'getForm_ResolvedTypeFactoryService',
            'fos_rest.body_listener' => 'getFosRest_BodyListenerService',
            'fos_rest.decoder_provider' => 'getFosRest_DecoderProviderService',
            'fragment.listener' => 'getFragment_ListenerService',
            'hateoas.configuration.provider.resolver' => 'getHateoas_Configuration_Provider_ResolverService',
            'hateoas.configuration.relations_repository' => 'getHateoas_Configuration_RelationsRepositoryService',
            'hateoas.expression.evaluator' => 'getHateoas_Expression_EvaluatorService',
            'hateoas.generator.registry' => 'getHateoas_Generator_RegistryService',
            'hateoas.generator.symfony' => 'getHateoas_Generator_SymfonyService',
            'hateoas.helper.link' => 'getHateoas_Helper_LinkService',
            'hateoas.link_factory' => 'getHateoas_LinkFactoryService',
            'hateoas.twig.link' => 'getHateoas_Twig_LinkService',
            'http_kernel' => 'getHttpKernelService',
            'jms_serializer' => 'getJmsSerializerService',
            'jms_serializer.accessor_strategy' => 'getJmsSerializer_AccessorStrategyService',
            'jms_serializer.deserialization_context_factory' => 'getJmsSerializer_DeserializationContextFactoryService',
            'jms_serializer.expression_evaluator' => 'getJmsSerializer_ExpressionEvaluatorService',
            'jms_serializer.handler_registry' => 'getJmsSerializer_HandlerRegistryService',
            'jms_serializer.json_deserialization_visitor' => 'getJmsSerializer_JsonDeserializationVisitorService',
            'jms_serializer.json_serialization_visitor' => 'getJmsSerializer_JsonSerializationVisitorService',
            'jms_serializer.metadata.file_locator' => 'getJmsSerializer_Metadata_FileLocatorService',
            'jms_serializer.metadata_factory' => 'getJmsSerializer_MetadataFactoryService',
            'jms_serializer.naming_strategy' => 'getJmsSerializer_NamingStrategyService',
            'jms_serializer.serialization_context_factory' => 'getJmsSerializer_SerializationContextFactoryService',
            'jms_serializer.unserialize_object_constructor' => 'getJmsSerializer_UnserializeObjectConstructorService',
            'jms_serializer.xml_deserialization_visitor' => 'getJmsSerializer_XmlDeserializationVisitorService',
            'jms_serializer.xml_serialization_visitor' => 'getJmsSerializer_XmlSerializationVisitorService',
            'jms_serializer.yaml_serialization_visitor' => 'getJmsSerializer_YamlSerializationVisitorService',
            'locale_listener' => 'getLocaleListenerService',
            'logger' => 'getLoggerService',
            'massive_search.search.event_subscriber.doctrine_orm' => 'getMassiveSearch_Search_EventSubscriber_DoctrineOrmService',
            'monolog.handler.console' => 'getMonolog_Handler_ConsoleService',
            'monolog.handler.console_very_verbose' => 'getMonolog_Handler_ConsoleVeryVerboseService',
            'monolog.handler.main' => 'getMonolog_Handler_MainService',
            'monolog.logger.cache' => 'getMonolog_Logger_CacheService',
            'monolog.logger.doctrine' => 'getMonolog_Logger_DoctrineService',
            'monolog.logger.event' => 'getMonolog_Logger_EventService',
            'monolog.logger.php' => 'getMonolog_Logger_PhpService',
            'monolog.logger.profiler' => 'getMonolog_Logger_ProfilerService',
            'monolog.logger.request' => 'getMonolog_Logger_RequestService',
            'monolog.logger.translation' => 'getMonolog_Logger_TranslationService',
            'monolog.processor.psr_log_message' => 'getMonolog_Processor_PsrLogMessageService',
            'profiler' => 'getProfilerService',
            'profiler_listener' => 'getProfilerListenerService',
            'request_stack' => 'getRequestStackService',
            'resolve_controller_name_subscriber' => 'getResolveControllerNameSubscriberService',
            'response_listener' => 'getResponseListenerService',
            'router' => 'getRouterService',
            'router.request_context' => 'getRouter_RequestContextService',
            'security.authentication.manager' => 'getSecurity_Authentication_ManagerService',
            'security.authentication.trust_resolver' => 'getSecurity_Authentication_TrustResolverService',
            'security.authorization_checker' => 'getSecurity_AuthorizationCheckerService',
            'security.firewall' => 'getSecurity_FirewallService',
            'security.firewall.map' => 'getSecurity_Firewall_MapService',
            'security.logout_url_generator' => 'getSecurity_LogoutUrlGeneratorService',
            'security.rememberme.response_listener' => 'getSecurity_Rememberme_ResponseListenerService',
            'security.role_hierarchy' => 'getSecurity_RoleHierarchyService',
            'security.token_storage' => 'getSecurity_TokenStorageService',
            'sensio_framework_extra.cache.listener' => 'getSensioFrameworkExtra_Cache_ListenerService',
            'sensio_framework_extra.controller.listener' => 'getSensioFrameworkExtra_Controller_ListenerService',
            'sensio_framework_extra.converter.datetime' => 'getSensioFrameworkExtra_Converter_DatetimeService',
            'sensio_framework_extra.converter.doctrine.orm' => 'getSensioFrameworkExtra_Converter_Doctrine_OrmService',
            'sensio_framework_extra.converter.listener' => 'getSensioFrameworkExtra_Converter_ListenerService',
            'sensio_framework_extra.converter.manager' => 'getSensioFrameworkExtra_Converter_ManagerService',
            'sensio_framework_extra.security.listener' => 'getSensioFrameworkExtra_Security_ListenerService',
            'sensio_framework_extra.view.listener' => 'getSensioFrameworkExtra_View_ListenerService',
            'service_locator.sr6ctxe' => 'getServiceLocator_Sr6ctxeService',
            'session.save_listener' => 'getSession_SaveListenerService',
            'session_listener' => 'getSessionListenerService',
            'streamed_response_listener' => 'getStreamedResponseListenerService',
            'sulu.content.localization_finder' => 'getSulu_Content_LocalizationFinderService',
            'sulu.content.mapper' => 'getSulu_Content_MapperService',
            'sulu.content.path_cleaner' => 'getSulu_Content_PathCleanerService',
            'sulu.content.query_executor' => 'getSulu_Content_QueryExecutorService',
            'sulu.content.resource_locator.strategy.tree_full_edit' => 'getSulu_Content_ResourceLocator_Strategy_TreeFullEditService',
            'sulu.content.resource_locator.strategy.tree_generator' => 'getSulu_Content_ResourceLocator_Strategy_TreeGeneratorService',
            'sulu.content.resource_locator.strategy.tree_leaf_edit' => 'getSulu_Content_ResourceLocator_Strategy_TreeLeafEditService',
            'sulu.content.resource_locator.strategy_pool' => 'getSulu_Content_ResourceLocator_StrategyPoolService',
            'sulu.content.rlp.mapper.phpcr' => 'getSulu_Content_Rlp_Mapper_PhpcrService',
            'sulu.content.structure_manager' => 'getSulu_Content_StructureManagerService',
            'sulu.content.type_manager' => 'getSulu_Content_TypeManagerService',
            'sulu.persistence.event_subscriber.orm.metadata' => 'getSulu_Persistence_EventSubscriber_Orm_MetadataService',
            'sulu.persistence.event_subscriber.orm.timestampable' => 'getSulu_Persistence_EventSubscriber_Orm_TimestampableService',
            'sulu.persistence.event_subscriber.orm.user_blame' => 'getSulu_Persistence_EventSubscriber_Orm_UserBlameService',
            'sulu.phpcr.session' => 'getSulu_Phpcr_SessionService',
            'sulu.repository.category' => 'getSulu_Repository_CategoryService',
            'sulu.repository.category_meta' => 'getSulu_Repository_CategoryMetaService',
            'sulu.repository.category_translation' => 'getSulu_Repository_CategoryTranslationService',
            'sulu.repository.contact' => 'getSulu_Repository_ContactService',
            'sulu.repository.keyword' => 'getSulu_Repository_KeywordService',
            'sulu.repository.media' => 'getSulu_Repository_MediaService',
            'sulu.repository.tag' => 'getSulu_Repository_TagService',
            'sulu.repository.user' => 'getSulu_Repository_UserService',
            'sulu.util.node_helper' => 'getSulu_Util_NodeHelperService',
            'sulu_category.category_manager' => 'getSuluCategory_CategoryManagerService',
            'sulu_category.category_request_handler' => 'getSuluCategory_CategoryRequestHandlerService',
            'sulu_category.keyword_manager' => 'getSuluCategory_KeywordManagerService',
            'sulu_category.twig_extension' => 'getSuluCategory_TwigExtensionService',
            'sulu_contact.account_listener' => 'getSuluContact_AccountListenerService',
            'sulu_contact.doctrine.invalidation_listener' => 'getSuluContact_Doctrine_InvalidationListenerService',
            'sulu_contact.twig' => 'getSuluContact_TwigService',
            'sulu_contact.twig.cache' => 'getSuluContact_Twig_CacheService',
            'sulu_content.compat.structure.legacy_property_factory' => 'getSuluContent_Compat_Structure_LegacyPropertyFactoryService',
            'sulu_content.content_repository' => 'getSuluContent_ContentRepositoryService',
            'sulu_content.export.manager' => 'getSuluContent_Export_ManagerService',
            'sulu_content.export_twig_extension' => 'getSuluContent_ExportTwigExtensionService',
            'sulu_content.extension.excerpt' => 'getSuluContent_Extension_ExcerptService',
            'sulu_content.extension.manager' => 'getSuluContent_Extension_ManagerService',
            'sulu_content.extension.seo' => 'getSuluContent_Extension_SeoService',
            'sulu_content.import.manager' => 'getSuluContent_Import_ManagerService',
            'sulu_content.link_tag' => 'getSuluContent_LinkTagService',
            'sulu_content.link_tag.page_provider' => 'getSuluContent_LinkTag_PageProviderService',
            'sulu_content.link_tag.provider_pool' => 'getSuluContent_LinkTag_ProviderPoolService',
            'sulu_content.structure.factory' => 'getSuluContent_Structure_FactoryService',
            'sulu_content.twig_extension' => 'getSuluContent_TwigExtensionService',
            'sulu_core.array_serialization_visitor' => 'getSuluCore_ArraySerializationVisitorService',
            'sulu_core.cache.memoize' => 'getSuluCore_Cache_MemoizeService',
            'sulu_core.cache.memoize.cache' => 'getSuluCore_Cache_Memoize_CacheService',
            'sulu_core.doctrine.references' => 'getSuluCore_Doctrine_ReferencesService',
            'sulu_core.proxy_manager.configuration' => 'getSuluCore_ProxyManager_ConfigurationService',
            'sulu_core.request_processor.admin' => 'getSuluCore_RequestProcessor_AdminService',
            'sulu_core.webspace.loader.delegator' => 'getSuluCore_Webspace_Loader_DelegatorService',
            'sulu_core.webspace.loader.resolver' => 'getSuluCore_Webspace_Loader_ResolverService',
            'sulu_core.webspace.loader.xml.1.0' => 'getSuluCore_Webspace_Loader_Xml_1_0Service',
            'sulu_core.webspace.loader.xml.1.1' => 'getSuluCore_Webspace_Loader_Xml_1_1Service',
            'sulu_core.webspace.request_analyzer' => 'getSuluCore_Webspace_RequestAnalyzerService',
            'sulu_core.webspace.settings_manager' => 'getSuluCore_Webspace_SettingsManagerService',
            'sulu_core.webspace.webspace_manager' => 'getSuluCore_Webspace_WebspaceManagerService',
            'sulu_core.webspace.webspace_manager.url_replacer' => 'getSuluCore_Webspace_WebspaceManager_UrlReplacerService',
            'sulu_document_manager.decorated_default_session' => 'getSuluDocumentManager_DecoratedDefaultSessionService',
            'sulu_document_manager.decorated_live_session' => 'getSuluDocumentManager_DecoratedLiveSessionService',
            'sulu_document_manager.document_inspector' => 'getSuluDocumentManager_DocumentInspectorService',
            'sulu_document_manager.document_manager' => 'getSuluDocumentManager_DocumentManagerService',
            'sulu_document_manager.document_registry' => 'getSuluDocumentManager_DocumentRegistryService',
            'sulu_document_manager.event_dispatcher' => 'getSuluDocumentManager_EventDispatcherService',
            'sulu_document_manager.metadata_factory' => 'getSuluDocumentManager_MetadataFactoryService',
            'sulu_document_manager.metadata_factory.base' => 'getSuluDocumentManager_MetadataFactory_BaseService',
            'sulu_document_manager.namespace_registry' => 'getSuluDocumentManager_NamespaceRegistryService',
            'sulu_document_manager.node_manager' => 'getSuluDocumentManager_NodeManagerService',
            'sulu_document_manager.path_segment_registry' => 'getSuluDocumentManager_PathSegmentRegistryService',
            'sulu_document_manager.property_encoder' => 'getSuluDocumentManager_PropertyEncoderService',
            'sulu_document_manager.proxy_factory' => 'getSuluDocumentManager_ProxyFactoryService',
            'sulu_document_manager.proxy_manager.factory.ghost' => 'getSuluDocumentManager_ProxyManager_Factory_GhostService',
            'sulu_document_manager.session_manager' => 'getSuluDocumentManager_SessionManagerService',
            'sulu_http_cache.cache_lifetime.resolver' => 'getSuluHttpCache_CacheLifetime_ResolverService',
            'sulu_http_cache.event_subscriber.update_response' => 'getSuluHttpCache_EventSubscriber_UpdateResponseService',
            'sulu_http_cache.handler.aggregate' => 'getSuluHttpCache_Handler_AggregateService',
            'sulu_http_cache.handler.debug' => 'getSuluHttpCache_Handler_DebugService',
            'sulu_markup.parser' => 'getSuluMarkup_ParserService',
            'sulu_markup.parser.delegating_html_extractor' => 'getSuluMarkup_Parser_DelegatingHtmlExtractorService',
            'sulu_markup.parser.html_extractor' => 'getSuluMarkup_Parser_HtmlExtractorService',
            'sulu_markup.response_listener' => 'getSuluMarkup_ResponseListenerService',
            'sulu_markup.tag.registry' => 'getSuluMarkup_Tag_RegistryService',
            'sulu_media.adapter' => 'getSuluMedia_AdapterService',
            'sulu_media.collection_repository' => 'getSuluMedia_CollectionRepositoryService',
            'sulu_media.doctrine.invalidation_listener' => 'getSuluMedia_Doctrine_InvalidationListenerService',
            'sulu_media.file_validator' => 'getSuluMedia_FileValidatorService',
            'sulu_media.format_cache' => 'getSuluMedia_FormatCacheService',
            'sulu_media.format_manager' => 'getSuluMedia_FormatManagerService',
            'sulu_media.image.converter' => 'getSuluMedia_Image_ConverterService',
            'sulu_media.image.cropper' => 'getSuluMedia_Image_CropperService',
            'sulu_media.image.focus' => 'getSuluMedia_Image_FocusService',
            'sulu_media.image.media_extractor' => 'getSuluMedia_Image_MediaExtractorService',
            'sulu_media.image.scaler' => 'getSuluMedia_Image_ScalerService',
            'sulu_media.image.transformation.blur' => 'getSuluMedia_Image_Transformation_BlurService',
            'sulu_media.image.transformation.crop' => 'getSuluMedia_Image_Transformation_CropService',
            'sulu_media.image.transformation.gamma' => 'getSuluMedia_Image_Transformation_GammaService',
            'sulu_media.image.transformation.grayscale' => 'getSuluMedia_Image_Transformation_GrayscaleService',
            'sulu_media.image.transformation.negative' => 'getSuluMedia_Image_Transformation_NegativeService',
            'sulu_media.image.transformation.paste' => 'getSuluMedia_Image_Transformation_PasteService',
            'sulu_media.image.transformation.sharpen' => 'getSuluMedia_Image_Transformation_SharpenService',
            'sulu_media.image.transformation_pool' => 'getSuluMedia_Image_TransformationPoolService',
            'sulu_media.markup' => 'getSuluMedia_MarkupService',
            'sulu_media.media_manager' => 'getSuluMedia_MediaManagerService',
            'sulu_media.storage' => 'getSuluMedia_StorageService',
            'sulu_media.storage.file_system' => 'getSuluMedia_Storage_FileSystemService',
            'sulu_media.twig_extension.disposition_type' => 'getSuluMedia_TwigExtension_DispositionTypeService',
            'sulu_media.twig_extension.media' => 'getSuluMedia_TwigExtension_MediaService',
            'sulu_media.type_manager' => 'getSuluMedia_TypeManagerService',
            'sulu_media.video_thumbnail_generator' => 'getSuluMedia_VideoThumbnailGeneratorService',
            'sulu_search.search.factory' => 'getSuluSearch_Search_FactoryService',
            'sulu_security.event_listener.security' => 'getSuluSecurity_EventListener_SecurityService',
            'sulu_security.security_checker' => 'getSuluSecurity_SecurityCheckerService',
            'sulu_security.twig_extension.user' => 'getSuluSecurity_TwigExtension_UserService',
            'sulu_security.twig_extension.user.cache' => 'getSuluSecurity_TwigExtension_User_CacheService',
            'sulu_security.user_locale_listener' => 'getSuluSecurity_UserLocaleListenerService',
            'sulu_snippet.default_snippet.manager' => 'getSuluSnippet_DefaultSnippet_ManagerService',
            'sulu_snippet.resolver' => 'getSuluSnippet_ResolverService',
            'sulu_snippet.twig.area_snippet' => 'getSuluSnippet_Twig_AreaSnippetService',
            'sulu_snippet.twig.default_snippet' => 'getSuluSnippet_Twig_DefaultSnippetService',
            'sulu_snippet.twig.snippet' => 'getSuluSnippet_Twig_SnippetService',
            'sulu_snippet.twig.snippet.memoized' => 'getSuluSnippet_Twig_Snippet_MemoizedService',
            'sulu_tag.tag_manager' => 'getSuluTag_TagManagerService',
            'sulu_tag.tag_request_handler' => 'getSuluTag_TagRequestHandlerService',
            'sulu_tag.twig_extension' => 'getSuluTag_TwigExtensionService',
            'sulu_website.navigation_mapper' => 'getSuluWebsite_NavigationMapperService',
            'sulu_website.resolver.structure' => 'getSuluWebsite_Resolver_StructureService',
            'sulu_website.router_listener' => 'getSuluWebsite_RouterListenerService',
            'sulu_website.routing.request_listener' => 'getSuluWebsite_Routing_RequestListenerService',
            'sulu_website.sitemap' => 'getSuluWebsite_SitemapService',
            'sulu_website.translator.request_analyzer' => 'getSuluWebsite_Translator_RequestAnalyzerService',
            'sulu_website.twig.content' => 'getSuluWebsite_Twig_ContentService',
            'sulu_website.twig.content.memoized' => 'getSuluWebsite_Twig_Content_MemoizedService',
            'sulu_website.twig.content_path' => 'getSuluWebsite_Twig_ContentPathService',
            'sulu_website.twig.meta' => 'getSuluWebsite_Twig_MetaService',
            'sulu_website.twig.navigation' => 'getSuluWebsite_Twig_NavigationService',
            'sulu_website.twig.navigation.memoized' => 'getSuluWebsite_Twig_Navigation_MemoizedService',
            'sulu_website.twig.seo' => 'getSuluWebsite_Twig_SeoService',
            'sulu_website.twig.sitemap' => 'getSuluWebsite_Twig_SitemapService',
            'sulu_website.twig.sitemap.memoized' => 'getSuluWebsite_Twig_Sitemap_MemoizedService',
            'sulu_website.twig.util' => 'getSuluWebsite_Twig_UtilService',
            'templating.locator' => 'getTemplating_LocatorService',
            'templating.name_parser' => 'getTemplating_NameParserService',
            'translator.data_collector' => 'getTranslator_DataCollectorService',
            'translator.default' => 'getTranslator_DefaultService',
            'translator_listener' => 'getTranslatorListenerService',
            'twig' => 'getTwigService',
            'twig.loader' => 'getTwig_LoaderService',
            'twig.profile' => 'getTwig_ProfileService',
            'uri_signer' => 'getUriSignerService',
            'validate_request_listener' => 'getValidateRequestListenerService',
            'validator' => 'getValidatorService',
            'validator.builder' => 'getValidator_BuilderService',
            'var_dumper.cloner' => 'getVarDumper_ClonerService',
            'web_profiler.csp.handler' => 'getWebProfiler_Csp_HandlerService',
            'web_profiler.debug_toolbar' => 'getWebProfiler_DebugToolbarService',
        );
        $this->fileMap = array(
            'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController' => 'getRedirectControllerService.php',
            'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController' => 'getTemplateControllerService.php',
            'annotations.cache' => 'getAnnotations_CacheService.php',
            'annotations.cache_warmer' => 'getAnnotations_CacheWarmerService.php',
            'argument_resolver.default' => 'getArgumentResolver_DefaultService.php',
            'argument_resolver.request' => 'getArgumentResolver_RequestService.php',
            'argument_resolver.request_attribute' => 'getArgumentResolver_RequestAttributeService.php',
            'argument_resolver.service' => 'getArgumentResolver_ServiceService.php',
            'argument_resolver.session' => 'getArgumentResolver_SessionService.php',
            'argument_resolver.variadic' => 'getArgumentResolver_VariadicService.php',
            'cache.default_clearer' => 'getCache_DefaultClearerService.php',
            'cache.global_clearer' => 'getCache_GlobalClearerService.php',
            'cache.system_clearer' => 'getCache_SystemClearerService.php',
            'cache_clearer' => 'getCacheClearerService.php',
            'cache_warmer' => 'getCacheWarmerService.php',
            'config.resource.self_checking_resource_checker' => 'getConfig_Resource_SelfCheckingResourceCheckerService.php',
            'console.command.about' => 'getConsole_Command_AboutService.php',
            'console.command.assets_install' => 'getConsole_Command_AssetsInstallService.php',
            'console.command.cache_clear' => 'getConsole_Command_CacheClearService.php',
            'console.command.cache_pool_clear' => 'getConsole_Command_CachePoolClearService.php',
            'console.command.cache_pool_prune' => 'getConsole_Command_CachePoolPruneService.php',
            'console.command.cache_warmup' => 'getConsole_Command_CacheWarmupService.php',
            'console.command.config_debug' => 'getConsole_Command_ConfigDebugService.php',
            'console.command.config_dump_reference' => 'getConsole_Command_ConfigDumpReferenceService.php',
            'console.command.container_debug' => 'getConsole_Command_ContainerDebugService.php',
            'console.command.debug_autowiring' => 'getConsole_Command_DebugAutowiringService.php',
            'console.command.event_dispatcher_debug' => 'getConsole_Command_EventDispatcherDebugService.php',
            'console.command.form_debug' => 'getConsole_Command_FormDebugService.php',
            'console.command.router_debug' => 'getConsole_Command_RouterDebugService.php',
            'console.command.router_match' => 'getConsole_Command_RouterMatchService.php',
            'console.command.translation_debug' => 'getConsole_Command_TranslationDebugService.php',
            'console.command.translation_update' => 'getConsole_Command_TranslationUpdateService.php',
            'console.command.xliff_lint' => 'getConsole_Command_XliffLintService.php',
            'console.command.yaml_lint' => 'getConsole_Command_YamlLintService.php',
            'console.command_loader' => 'getConsole_CommandLoaderService.php',
            'console.error_listener' => 'getConsole_ErrorListenerService.php',
            'debug.dump_listener' => 'getDebug_DumpListenerService.php',
            'debug.file_link_formatter.url_format' => 'getDebug_FileLinkFormatter_UrlFormatService.php',
            'dependency_injection.config.container_parameters_resource_checker' => 'getDependencyInjection_Config_ContainerParametersResourceCheckerService.php',
            'deprecated.form.registry' => 'getDeprecated_Form_RegistryService.php',
            'deprecated.form.registry.csrf' => 'getDeprecated_Form_Registry_CsrfService.php',
            'doctrine.cache_clear_metadata_command' => 'getDoctrine_CacheClearMetadataCommandService.php',
            'doctrine.cache_clear_query_cache_command' => 'getDoctrine_CacheClearQueryCacheCommandService.php',
            'doctrine.cache_clear_result_command' => 'getDoctrine_CacheClearResultCommandService.php',
            'doctrine.cache_collection_region_command' => 'getDoctrine_CacheCollectionRegionCommandService.php',
            'doctrine.clear_entity_region_command' => 'getDoctrine_ClearEntityRegionCommandService.php',
            'doctrine.clear_query_region_command' => 'getDoctrine_ClearQueryRegionCommandService.php',
            'doctrine.database_create_command' => 'getDoctrine_DatabaseCreateCommandService.php',
            'doctrine.database_drop_command' => 'getDoctrine_DatabaseDropCommandService.php',
            'doctrine.database_import_command' => 'getDoctrine_DatabaseImportCommandService.php',
            'doctrine.ensure_production_settings_command' => 'getDoctrine_EnsureProductionSettingsCommandService.php',
            'doctrine.fixtures_load_command' => 'getDoctrine_FixturesLoadCommandService.php',
            'doctrine.generate_entities_command' => 'getDoctrine_GenerateEntitiesCommandService.php',
            'doctrine.mapping_convert_command' => 'getDoctrine_MappingConvertCommandService.php',
            'doctrine.mapping_import_command' => 'getDoctrine_MappingImportCommandService.php',
            'doctrine.mapping_info_command' => 'getDoctrine_MappingInfoCommandService.php',
            'doctrine.orm.default_entity_manager.property_info_extractor' => 'getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService.php',
            'doctrine.orm.proxy_cache_warmer' => 'getDoctrine_Orm_ProxyCacheWarmerService.php',
            'doctrine.orm.validator.unique' => 'getDoctrine_Orm_Validator_UniqueService.php',
            'doctrine.query_dql_command' => 'getDoctrine_QueryDqlCommandService.php',
            'doctrine.query_sql_command' => 'getDoctrine_QuerySqlCommandService.php',
            'doctrine.schema_create_command' => 'getDoctrine_SchemaCreateCommandService.php',
            'doctrine.schema_drop_command' => 'getDoctrine_SchemaDropCommandService.php',
            'doctrine.schema_update_command' => 'getDoctrine_SchemaUpdateCommandService.php',
            'doctrine.schema_validate_command' => 'getDoctrine_SchemaValidateCommandService.php',
            'doctrine_cache.contains_command' => 'getDoctrineCache_ContainsCommandService.php',
            'doctrine_cache.delete_command' => 'getDoctrineCache_DeleteCommandService.php',
            'doctrine_cache.flush_command' => 'getDoctrineCache_FlushCommandService.php',
            'doctrine_cache.providers.phpcr_meta' => 'getDoctrineCache_Providers_PhpcrMetaService.php',
            'doctrine_cache.providers.phpcr_nodes' => 'getDoctrineCache_Providers_PhpcrNodesService.php',
            'doctrine_cache.providers.sulu_collaboration_connection' => 'getDoctrineCache_Providers_SuluCollaborationConnectionService.php',
            'doctrine_cache.providers.sulu_collaboration_entity' => 'getDoctrineCache_Providers_SuluCollaborationEntityService.php',
            'doctrine_cache.providers.sulu_preview' => 'getDoctrineCache_Providers_SuluPreviewService.php',
            'doctrine_cache.providers.sulu_websocket' => 'getDoctrineCache_Providers_SuluWebsocketService.php',
            'doctrine_cache.stats_command' => 'getDoctrineCache_StatsCommandService.php',
            'doctrine_phpcr.admin.default_session' => 'getDoctrinePhpcr_Admin_DefaultSessionService.php',
            'doctrine_phpcr.admin.jackalope.repository.default' => 'getDoctrinePhpcr_Admin_Jackalope_Repository_DefaultService.php',
            'doctrine_phpcr.admin.jackalope.repository.live' => 'getDoctrinePhpcr_Admin_Jackalope_Repository_LiveService.php',
            'doctrine_phpcr.admin.live_session' => 'getDoctrinePhpcr_Admin_LiveSessionService.php',
            'doctrine_phpcr.console_dumper' => 'getDoctrinePhpcr_ConsoleDumperService.php',
            'doctrine_phpcr.initializer_manager' => 'getDoctrinePhpcr_InitializerManagerService.php',
            'doctrine_phpcr.jackalope.repository.factory.doctrinedbal' => 'getDoctrinePhpcr_Jackalope_Repository_Factory_DoctrinedbalService.php',
            'doctrine_phpcr.jackalope.repository.factory.jackrabbit' => 'getDoctrinePhpcr_Jackalope_Repository_Factory_JackrabbitService.php',
            'doctrine_phpcr.jackalope.repository.factory.prismic' => 'getDoctrinePhpcr_Jackalope_Repository_Factory_PrismicService.php',
            'doctrine_phpcr.jackalope.repository.factory.service.jackrabbit' => 'getDoctrinePhpcr_Jackalope_Repository_Factory_Service_JackrabbitService.php',
            'doctrine_phpcr.jackalope.repository.factory.service.prismic' => 'getDoctrinePhpcr_Jackalope_Repository_Factory_Service_PrismicService.php',
            'doctrine_phpcr.jackalope_doctrine_dbal.schema_listener' => 'getDoctrinePhpcr_JackalopeDoctrineDbal_SchemaListenerService.php',
            'dtl_content.form.factory.document_type' => 'getDtlContent_Form_Factory_DocumentTypeService.php',
            'dtl_content.form.type.home' => 'getDtlContent_Form_Type_HomeService.php',
            'dtl_content.form.type.page' => 'getDtlContent_Form_Type_PageService.php',
            'form.server_params' => 'getForm_ServerParamsService.php',
            'form.type.birthday' => 'getForm_Type_BirthdayService.php',
            'form.type.button' => 'getForm_Type_ButtonService.php',
            'form.type.checkbox' => 'getForm_Type_CheckboxService.php',
            'form.type.choice' => 'getForm_Type_ChoiceService.php',
            'form.type.collection' => 'getForm_Type_CollectionService.php',
            'form.type.country' => 'getForm_Type_CountryService.php',
            'form.type.currency' => 'getForm_Type_CurrencyService.php',
            'form.type.date' => 'getForm_Type_DateService.php',
            'form.type.datetime' => 'getForm_Type_DatetimeService.php',
            'form.type.email' => 'getForm_Type_EmailService.php',
            'form.type.entity' => 'getForm_Type_EntityService.php',
            'form.type.file' => 'getForm_Type_FileService.php',
            'form.type.form' => 'getForm_Type_FormService.php',
            'form.type.hidden' => 'getForm_Type_HiddenService.php',
            'form.type.integer' => 'getForm_Type_IntegerService.php',
            'form.type.language' => 'getForm_Type_LanguageService.php',
            'form.type.locale' => 'getForm_Type_LocaleService.php',
            'form.type.money' => 'getForm_Type_MoneyService.php',
            'form.type.number' => 'getForm_Type_NumberService.php',
            'form.type.password' => 'getForm_Type_PasswordService.php',
            'form.type.percent' => 'getForm_Type_PercentService.php',
            'form.type.phpcr.reference' => 'getForm_Type_Phpcr_ReferenceService.php',
            'form.type.radio' => 'getForm_Type_RadioService.php',
            'form.type.range' => 'getForm_Type_RangeService.php',
            'form.type.repeated' => 'getForm_Type_RepeatedService.php',
            'form.type.reset' => 'getForm_Type_ResetService.php',
            'form.type.search' => 'getForm_Type_SearchService.php',
            'form.type.submit' => 'getForm_Type_SubmitService.php',
            'form.type.text' => 'getForm_Type_TextService.php',
            'form.type.textarea' => 'getForm_Type_TextareaService.php',
            'form.type.time' => 'getForm_Type_TimeService.php',
            'form.type.timezone' => 'getForm_Type_TimezoneService.php',
            'form.type.url' => 'getForm_Type_UrlService.php',
            'form.type_extension.csrf' => 'getForm_TypeExtension_CsrfService.php',
            'form.type_extension.form.data_collector' => 'getForm_TypeExtension_Form_DataCollectorService.php',
            'form.type_extension.form.http_foundation' => 'getForm_TypeExtension_Form_HttpFoundationService.php',
            'form.type_extension.form.validator' => 'getForm_TypeExtension_Form_ValidatorService.php',
            'form.type_extension.repeated.validator' => 'getForm_TypeExtension_Repeated_ValidatorService.php',
            'form.type_extension.submit.validator' => 'getForm_TypeExtension_Submit_ValidatorService.php',
            'form.type_extension.upload.validator' => 'getForm_TypeExtension_Upload_ValidatorService.php',
            'form.type_guesser.doctrine' => 'getForm_TypeGuesser_DoctrineService.php',
            'form.type_guesser.validator' => 'getForm_TypeGuesser_ValidatorService.php',
            'fos_rest.controller.exception' => 'getFosRest_Controller_ExceptionService.php',
            'fos_rest.decoder.json' => 'getFosRest_Decoder_JsonService.php',
            'fos_rest.decoder.jsontoform' => 'getFosRest_Decoder_JsontoformService.php',
            'fos_rest.decoder.xml' => 'getFosRest_Decoder_XmlService.php',
            'fos_rest.exception_format_negotiator' => 'getFosRest_ExceptionFormatNegotiatorService.php',
            'fos_rest.exception_listener' => 'getFosRest_ExceptionListenerService.php',
            'fos_rest.format_negotiator' => 'getFosRest_FormatNegotiatorService.php',
            'fos_rest.inflector.doctrine' => 'getFosRest_Inflector_DoctrineService.php',
            'fos_rest.normalizer.camel_keys' => 'getFosRest_Normalizer_CamelKeysService.php',
            'fos_rest.normalizer.camel_keys_with_leading_underscore' => 'getFosRest_Normalizer_CamelKeysWithLeadingUnderscoreService.php',
            'fos_rest.request.param_fetcher' => 'getFosRest_Request_ParamFetcherService.php',
            'fos_rest.request.param_fetcher.reader' => 'getFosRest_Request_ParamFetcher_ReaderService.php',
            'fos_rest.routing.loader.controller' => 'getFosRest_Routing_Loader_ControllerService.php',
            'fos_rest.routing.loader.processor' => 'getFosRest_Routing_Loader_ProcessorService.php',
            'fos_rest.routing.loader.reader.action' => 'getFosRest_Routing_Loader_Reader_ActionService.php',
            'fos_rest.routing.loader.reader.controller' => 'getFosRest_Routing_Loader_Reader_ControllerService.php',
            'fos_rest.routing.loader.xml_collection' => 'getFosRest_Routing_Loader_XmlCollectionService.php',
            'fos_rest.routing.loader.yaml_collection' => 'getFosRest_Routing_Loader_YamlCollectionService.php',
            'fos_rest.serializer.exception_wrapper_normalizer' => 'getFosRest_Serializer_ExceptionWrapperNormalizerService.php',
            'fos_rest.serializer.exception_wrapper_serialize_handler' => 'getFosRest_Serializer_ExceptionWrapperSerializeHandlerService.php',
            'fos_rest.view.exception_wrapper_handler' => 'getFosRest_View_ExceptionWrapperHandlerService.php',
            'fos_rest.view_handler' => 'getFosRest_ViewHandlerService.php',
            'fos_rest.violation_formatter' => 'getFosRest_ViolationFormatterService.php',
            'fragment.handler' => 'getFragment_HandlerService.php',
            'fragment.renderer.hinclude' => 'getFragment_Renderer_HincludeService.php',
            'fragment.renderer.inline' => 'getFragment_Renderer_InlineService.php',
            'hateoas.embeds_factory' => 'getHateoas_EmbedsFactoryService.php',
            'hateoas.event_subscriber.json' => 'getHateoas_EventSubscriber_JsonService.php',
            'hateoas.event_subscriber.xml' => 'getHateoas_EventSubscriber_XmlService.php',
            'hateoas.expression.link' => 'getHateoas_Expression_LinkService.php',
            'hateoas.links_factory' => 'getHateoas_LinksFactoryService.php',
            'hateoas.serializer.exclusion_manager' => 'getHateoas_Serializer_ExclusionManagerService.php',
            'jms_serializer.array_collection_handler' => 'getJmsSerializer_ArrayCollectionHandlerService.php',
            'jms_serializer.constraint_violation_handler' => 'getJmsSerializer_ConstraintViolationHandlerService.php',
            'jms_serializer.datetime_handler' => 'getJmsSerializer_DatetimeHandlerService.php',
            'jms_serializer.doctrine_proxy_subscriber' => 'getJmsSerializer_DoctrineProxySubscriberService.php',
            'jms_serializer.form_error_handler' => 'getJmsSerializer_FormErrorHandlerService.php',
            'jms_serializer.metadata_driver' => 'getJmsSerializer_MetadataDriverService.php',
            'jms_serializer.object_constructor' => 'getJmsSerializer_ObjectConstructorService.php',
            'jms_serializer.php_collection_handler' => 'getJmsSerializer_PhpCollectionHandlerService.php',
            'jms_serializer.stopwatch_subscriber' => 'getJmsSerializer_StopwatchSubscriberService.php',
            'jms_serializer.templating.helper.serializer' => 'getJmsSerializer_Templating_Helper_SerializerService.php',
            'jms_serializer.twig_extension.serializer_runtime_helper' => 'getJmsSerializer_TwigExtension_SerializerRuntimeHelperService.php',
            'kernel.class_cache.cache_warmer' => 'getKernel_ClassCache_CacheWarmerService.php',
            'massive_build.build.registry' => 'getMassiveBuild_Build_RegistryService.php',
            'massive_build.builder.virtual.dev' => 'getMassiveBuild_Builder_Virtual_DevService.php',
            'massive_build.builder.virtual.maintain' => 'getMassiveBuild_Builder_Virtual_MaintainService.php',
            'massive_build.builder.virtual.prod' => 'getMassiveBuild_Builder_Virtual_ProdService.php',
            'massive_build.command.build' => 'getMassiveBuild_Command_BuildService.php',
            'massive_search.adapter.test' => 'getMassiveSearch_Adapter_TestService.php',
            'massive_search.adapter.zend_lucene' => 'getMassiveSearch_Adapter_ZendLuceneService.php',
            'massive_search.command.index_rebuild_deprecated' => 'getMassiveSearch_Command_IndexRebuildDeprecatedService.php',
            'massive_search.command.init' => 'getMassiveSearch_Command_InitService.php',
            'massive_search.command.purge' => 'getMassiveSearch_Command_PurgeService.php',
            'massive_search.command.query' => 'getMassiveSearch_Command_QueryService.php',
            'massive_search.command.reindex' => 'getMassiveSearch_Command_ReindexService.php',
            'massive_search.command.status' => 'getMassiveSearch_Command_StatusService.php',
            'massive_search.converter' => 'getMassiveSearch_ConverterService.php',
            'massive_search.converter.date_converter' => 'getMassiveSearch_Converter_DateConverterService.php',
            'massive_search.converter.json_converter' => 'getMassiveSearch_Converter_JsonConverterService.php',
            'massive_search.events.deindex_listener' => 'getMassiveSearch_Events_DeindexListenerService.php',
            'massive_search.events.index_listener' => 'getMassiveSearch_Events_IndexListenerService.php',
            'massive_search.events.zend_rebuild' => 'getMassiveSearch_Events_ZendRebuildService.php',
            'massive_search.expression_language' => 'getMassiveSearch_ExpressionLanguageService.php',
            'massive_search.factory_default' => 'getMassiveSearch_FactoryDefaultService.php',
            'massive_search.index_name_decorator' => 'getMassiveSearch_IndexNameDecoratorService.php',
            'massive_search.localization_decorator' => 'getMassiveSearch_LocalizationDecoratorService.php',
            'massive_search.metadata.cache.file_cache' => 'getMassiveSearch_Metadata_Cache_FileCacheService.php',
            'massive_search.metadata.driver.chain' => 'getMassiveSearch_Metadata_Driver_ChainService.php',
            'massive_search.metadata.driver.xml' => 'getMassiveSearch_Metadata_Driver_XmlService.php',
            'massive_search.metadata.factory' => 'getMassiveSearch_Metadata_FactoryService.php',
            'massive_search.metadata.field_evaluator' => 'getMassiveSearch_Metadata_FieldEvaluatorService.php',
            'massive_search.metadata.file_locator' => 'getMassiveSearch_Metadata_FileLocatorService.php',
            'massive_search.metadata.provider.chain' => 'getMassiveSearch_Metadata_Provider_ChainService.php',
            'massive_search.metadata.provider.default' => 'getMassiveSearch_Metadata_Provider_DefaultService.php',
            'massive_search.object_to_document_converter' => 'getMassiveSearch_ObjectToDocumentConverterService.php',
            'massive_search.prefix_decorator' => 'getMassiveSearch_PrefixDecoratorService.php',
            'massive_search.reindex.provider.doctrine_orm' => 'getMassiveSearch_Reindex_Provider_DoctrineOrmService.php',
            'massive_search.reindex.provider_registry' => 'getMassiveSearch_Reindex_ProviderRegistryService.php',
            'massive_search.reindex.resume_manager' => 'getMassiveSearch_Reindex_ResumeManagerService.php',
            'massive_search.search.event_subscriber.purge_subscriber' => 'getMassiveSearch_Search_EventSubscriber_PurgeSubscriberService.php',
            'massive_search.search_manager' => 'getMassiveSearch_SearchManagerService.php',
            'monolog.handler.null_internal' => 'getMonolog_Handler_NullInternalService.php',
            'monolog.logger.console' => 'getMonolog_Logger_ConsoleService.php',
            'monolog.logger.doctrine_phpcr' => 'getMonolog_Logger_DoctrinePhpcrService.php',
            'monolog.logger.security' => 'getMonolog_Logger_SecurityService.php',
            'monolog.logger.sulu_document_manager' => 'getMonolog_Logger_SuluDocumentManagerService.php',
            'monolog.logger.templating' => 'getMonolog_Logger_TemplatingService.php',
            'phpcr_migrations.command.initialize' => 'getPhpcrMigrations_Command_InitializeService.php',
            'phpcr_migrations.command.migrate' => 'getPhpcrMigrations_Command_MigrateService.php',
            'phpcr_migrations.command.status' => 'getPhpcrMigrations_Command_StatusService.php',
            'phpcr_migrations.migrator_factory' => 'getPhpcrMigrations_MigratorFactoryService.php',
            'phpcr_migrations.version_finder' => 'getPhpcrMigrations_VersionFinderService.php',
            'phpcr_migrations.version_storage' => 'getPhpcrMigrations_VersionStorageService.php',
            'property_accessor' => 'getPropertyAccessorService.php',
            'router.cache_warmer' => 'getRouter_CacheWarmerService.php',
            'routing.loader' => 'getRouting_LoaderService.php',
            'security.access.authenticated_voter' => 'getSecurity_Access_AuthenticatedVoterService.php',
            'security.access.expression_voter' => 'getSecurity_Access_ExpressionVoterService.php',
            'security.access.simple_role_voter' => 'getSecurity_Access_SimpleRoleVoterService.php',
            'security.access_listener' => 'getSecurity_AccessListenerService.php',
            'security.access_map' => 'getSecurity_AccessMapService.php',
            'security.authentication.guard_handler' => 'getSecurity_Authentication_GuardHandlerService.php',
            'security.authentication.listener.anonymous.admin' => 'getSecurity_Authentication_Listener_Anonymous_AdminService.php',
            'security.authentication.listener.form.admin' => 'getSecurity_Authentication_Listener_Form_AdminService.php',
            'security.authentication.provider.anonymous.admin' => 'getSecurity_Authentication_Provider_Anonymous_AdminService.php',
            'security.authentication.provider.dao.admin' => 'getSecurity_Authentication_Provider_Dao_AdminService.php',
            'security.authentication.session_strategy.admin' => 'getSecurity_Authentication_SessionStrategy_AdminService.php',
            'security.authentication_utils' => 'getSecurity_AuthenticationUtilsService.php',
            'security.channel_listener' => 'getSecurity_ChannelListenerService.php',
            'security.command.user_password_encoder' => 'getSecurity_Command_UserPasswordEncoderService.php',
            'security.context_listener.0' => 'getSecurity_ContextListener_0Service.php',
            'security.csrf.token_manager' => 'getSecurity_Csrf_TokenManagerService.php',
            'security.csrf.token_storage' => 'getSecurity_Csrf_TokenStorageService.php',
            'security.encoder_factory' => 'getSecurity_EncoderFactoryService.php',
            'security.firewall.map.context.admin' => 'getSecurity_Firewall_Map_Context_AdminService.php',
            'security.http_utils' => 'getSecurity_HttpUtilsService.php',
            'security.password_encoder' => 'getSecurity_PasswordEncoderService.php',
            'security.request_matcher.00qf1z7' => 'getSecurity_RequestMatcher_00qf1z7Service.php',
            'security.user_value_resolver' => 'getSecurity_UserValueResolverService.php',
            'security.validator.user_password' => 'getSecurity_Validator_UserPasswordService.php',
            'sensio_distribution.security_checker' => 'getSensioDistribution_SecurityCheckerService.php',
            'sensio_distribution.security_checker.command' => 'getSensioDistribution_SecurityChecker_CommandService.php',
            'sensio_framework_extra.view.guesser' => 'getSensioFrameworkExtra_View_GuesserService.php',
            'services_resetter' => 'getServicesResetterService.php',
            'session' => 'getSessionService.php',
            'session.handler' => 'getSession_HandlerService.php',
            'session.storage.filesystem' => 'getSession_Storage_FilesystemService.php',
            'session.storage.metadata_bag' => 'getSession_Storage_MetadataBagService.php',
            'session.storage.native' => 'getSession_Storage_NativeService.php',
            'session.storage.php_bridge' => 'getSession_Storage_PhpBridgeService.php',
            'sulu.cache.warmer.structure' => 'getSulu_Cache_Warmer_StructureService.php',
            'sulu.content.path_cleaner.replacer_loader' => 'getSulu_Content_PathCleaner_ReplacerLoaderService.php',
            'sulu.content.path_cleaner.replacer_loader.file_locator' => 'getSulu_Content_PathCleaner_ReplacerLoader_FileLocatorService.php',
            'sulu.content.type.block' => 'getSulu_Content_Type_BlockService.php',
            'sulu.content.type.checkbox' => 'getSulu_Content_Type_CheckboxService.php',
            'sulu.content.type.color' => 'getSulu_Content_Type_ColorService.php',
            'sulu.content.type.date' => 'getSulu_Content_Type_DateService.php',
            'sulu.content.type.email' => 'getSulu_Content_Type_EmailService.php',
            'sulu.content.type.internal_links' => 'getSulu_Content_Type_InternalLinksService.php',
            'sulu.content.type.multiple_select' => 'getSulu_Content_Type_MultipleSelectService.php',
            'sulu.content.type.password' => 'getSulu_Content_Type_PasswordService.php',
            'sulu.content.type.phone' => 'getSulu_Content_Type_PhoneService.php',
            'sulu.content.type.resource_locator' => 'getSulu_Content_Type_ResourceLocatorService.php',
            'sulu.content.type.single_internal_link' => 'getSulu_Content_Type_SingleInternalLinkService.php',
            'sulu.content.type.single_select' => 'getSulu_Content_Type_SingleSelectService.php',
            'sulu.content.type.text_area' => 'getSulu_Content_Type_TextAreaService.php',
            'sulu.content.type.text_editor' => 'getSulu_Content_Type_TextEditorService.php',
            'sulu.content.type.text_line' => 'getSulu_Content_Type_TextLineService.php',
            'sulu.content.type.time' => 'getSulu_Content_Type_TimeService.php',
            'sulu.content.type.url' => 'getSulu_Content_Type_UrlService.php',
            'sulu.content.webspace_structure_provider' => 'getSulu_Content_WebspaceStructureProviderService.php',
            'sulu.content.webspace_structure_provider.cache' => 'getSulu_Content_WebspaceStructureProvider_CacheService.php',
            'sulu.core.localization_manager' => 'getSulu_Core_LocalizationManagerService.php',
            'sulu.repository.access_control' => 'getSulu_Repository_AccessControlService.php',
            'sulu.repository.role' => 'getSulu_Repository_RoleService.php',
            'sulu.repository.role_setting' => 'getSulu_Repository_RoleSettingService.php',
            'sulu.repository.route' => 'getSulu_Repository_RouteService.php',
            'sulu_admin.admin_controller' => 'getSuluAdmin_AdminControllerService.php',
            'sulu_admin.admin_pool' => 'getSuluAdmin_AdminPoolService.php',
            'sulu_admin.content_navigation_controller' => 'getSuluAdmin_ContentNavigationControllerService.php',
            'sulu_admin.content_navigation_registry' => 'getSuluAdmin_ContentNavigationRegistryService.php',
            'sulu_admin.js_config' => 'getSuluAdmin_JsConfigService.php',
            'sulu_admin.js_config_pool' => 'getSuluAdmin_JsConfigPoolService.php',
            'sulu_admin.template_controller' => 'getSuluAdmin_TemplateControllerService.php',
            'sulu_admin.widgets_handler' => 'getSuluAdmin_WidgetsHandlerService.php',
            'sulu_category.admin' => 'getSuluCategory_AdminService.php',
            'sulu_category.content.type.category_list' => 'getSuluCategory_Content_Type_CategoryListService.php',
            'sulu_category.content_navigation_provider' => 'getSuluCategory_ContentNavigationProviderService.php',
            'sulu_category.reference_store.category' => 'getSuluCategory_ReferenceStore_CategoryService.php',
            'sulu_collaboration.admin' => 'getSuluCollaboration_AdminService.php',
            'sulu_collaboration.jsconfig' => 'getSuluCollaboration_JsconfigService.php',
            'sulu_collaboration.message_handler' => 'getSuluCollaboration_MessageHandlerService.php',
            'sulu_contact.account_content_navigation_provider' => 'getSuluContact_AccountContentNavigationProviderService.php',
            'sulu_contact.account_factory' => 'getSuluContact_AccountFactoryService.php',
            'sulu_contact.account_manager' => 'getSuluContact_AccountManagerService.php',
            'sulu_contact.account_repository' => 'getSuluContact_AccountRepositoryService.php',
            'sulu_contact.admin' => 'getSuluContact_AdminService.php',
            'sulu_contact.contact_content_navigation_provider' => 'getSuluContact_ContactContentNavigationProviderService.php',
            'sulu_contact.contact_manager' => 'getSuluContact_ContactManagerService.php',
            'sulu_contact.contact_repository' => 'getSuluContact_ContactRepositoryService.php',
            'sulu_contact.contact_title_repository' => 'getSuluContact_ContactTitleRepositoryService.php',
            'sulu_contact.content.contact' => 'getSuluContact_Content_ContactService.php',
            'sulu_contact.country_repository' => 'getSuluContact_CountryRepositoryService.php',
            'sulu_contact.customer_manager' => 'getSuluContact_CustomerManagerService.php',
            'sulu_contact.js_config' => 'getSuluContact_JsConfigService.php',
            'sulu_contact.reference_store.account' => 'getSuluContact_ReferenceStore_AccountService.php',
            'sulu_contact.reference_store.contact' => 'getSuluContact_ReferenceStore_ContactService.php',
            'sulu_contact.smart_content.data_provider.account' => 'getSuluContact_SmartContent_DataProvider_AccountService.php',
            'sulu_contact.smart_content.data_provider.contact' => 'getSuluContact_SmartContent_DataProvider_ContactService.php',
            'sulu_contact.util.id_converter' => 'getSuluContact_Util_IdConverterService.php',
            'sulu_contact.util.index_comparator' => 'getSuluContact_Util_IndexComparatorService.php',
            'sulu_content.admin' => 'getSuluContent_AdminService.php',
            'sulu_content.command.cleanup_history' => 'getSuluContent_Command_CleanupHistoryService.php',
            'sulu_content.command.maintain_resource_locator' => 'getSuluContent_Command_MaintainResourceLocatorService.php',
            'sulu_content.compat.serializer.handler.page_bridge' => 'getSuluContent_Compat_Serializer_Handler_PageBridgeService.php',
            'sulu_content.content_navigation_provider' => 'getSuluContent_ContentNavigationProviderService.php',
            'sulu_content.content_repository.event_subscriber' => 'getSuluContent_ContentRepository_EventSubscriberService.php',
            'sulu_content.document.serializer.handler.extension_container' => 'getSuluContent_Document_Serializer_Handler_ExtensionContainerService.php',
            'sulu_content.document.serializer.handler.structure' => 'getSuluContent_Document_Serializer_Handler_StructureService.php',
            'sulu_content.document.serializer.subscriber.extension_container' => 'getSuluContent_Document_Serializer_Subscriber_ExtensionContainerService.php',
            'sulu_content.document.serializer.subscriber.locale' => 'getSuluContent_Document_Serializer_Subscriber_LocaleService.php',
            'sulu_content.document.serializer.subscriber.parent_behavior' => 'getSuluContent_Document_Serializer_Subscriber_ParentBehaviorService.php',
            'sulu_content.document.serializer.subscriber.path_behavior' => 'getSuluContent_Document_Serializer_Subscriber_PathBehaviorService.php',
            'sulu_content.document.serializer.subscriber.redirect_type_behavior' => 'getSuluContent_Document_Serializer_Subscriber_RedirectTypeBehaviorService.php',
            'sulu_content.document.serializer.subscriber.shadow_locale_behavior' => 'getSuluContent_Document_Serializer_Subscriber_ShadowLocaleBehaviorService.php',
            'sulu_content.document.serializer.subscriber.structure_behavior' => 'getSuluContent_Document_Serializer_Subscriber_StructureBehaviorService.php',
            'sulu_content.document.serializer.subscriber.workflow_stage_behavior' => 'getSuluContent_Document_Serializer_Subscriber_WorkflowStageBehaviorService.php',
            'sulu_content.document.subscriber.content' => 'getSuluContent_Document_Subscriber_ContentService.php',
            'sulu_content.document_manager.content_initializer' => 'getSuluContent_DocumentManager_ContentInitializerService.php',
            'sulu_content.export.webspace' => 'getSuluContent_Export_WebspaceService.php',
            'sulu_content.import.webspace' => 'getSuluContent_Import_WebspaceService.php',
            'sulu_content.import.webspace.xliff12' => 'getSuluContent_Import_Webspace_Xliff12Service.php',
            'sulu_content.js_config.server' => 'getSuluContent_JsConfig_ServerService.php',
            'sulu_content.js_config.webspace_input_types' => 'getSuluContent_JsConfig_WebspaceInputTypesService.php',
            'sulu_content.jsconfig' => 'getSuluContent_JsconfigService.php',
            'sulu_content.jsconfig.apps' => 'getSuluContent_Jsconfig_AppsService.php',
            'sulu_content.jsconfig.texteditor_toolbar' => 'getSuluContent_Jsconfig_TexteditorToolbarService.php',
            'sulu_content.link_tag.js_config' => 'getSuluContent_LinkTag_JsConfigService.php',
            'sulu_content.node_repository' => 'getSuluContent_NodeRepositoryService.php',
            'sulu_content.permission_listener' => 'getSuluContent_PermissionListenerService.php',
            'sulu_content.preview.defaults_provider' => 'getSuluContent_Preview_DefaultsProviderService.php',
            'sulu_content.preview.object_provider' => 'getSuluContent_Preview_ObjectProviderService.php',
            'sulu_content.reference_store.content' => 'getSuluContent_ReferenceStore_ContentService.php',
            'sulu_content.rl_repository' => 'getSuluContent_RlRepositoryService.php',
            'sulu_content.roles_content_navigation_provider' => 'getSuluContent_RolesContentNavigationProviderService.php',
            'sulu_content.search.event_subscriber.blame_timestamp' => 'getSuluContent_Search_EventSubscriber_BlameTimestampService.php',
            'sulu_content.search.event_subscriber.structure' => 'getSuluContent_Search_EventSubscriber_StructureService.php',
            'sulu_content.search.metadata.provider.structure' => 'getSuluContent_Search_Metadata_Provider_StructureService.php',
            'sulu_content.search.reindex.structure_provider' => 'getSuluContent_Search_Reindex_StructureProviderService.php',
            'sulu_content.smart_content.content_type' => 'getSuluContent_SmartContent_ContentTypeService.php',
            'sulu_content.smart_content.data_provider.content' => 'getSuluContent_SmartContent_DataProvider_ContentService.php',
            'sulu_content.smart_content.data_provider.content.proxy_factory' => 'getSuluContent_SmartContent_DataProvider_Content_ProxyFactoryService.php',
            'sulu_content.smart_content.data_provider.content.query_builder' => 'getSuluContent_SmartContent_DataProvider_Content_QueryBuilderService.php',
            'sulu_content.smart_content.data_provider_pool' => 'getSuluContent_SmartContent_DataProviderPoolService.php',
            'sulu_content.teaser.content_type' => 'getSuluContent_Teaser_ContentTypeService.php',
            'sulu_content.teaser.manager' => 'getSuluContent_Teaser_ManagerService.php',
            'sulu_content.teaser.provider.content' => 'getSuluContent_Teaser_Provider_ContentService.php',
            'sulu_content.teaser.provider_pool' => 'getSuluContent_Teaser_ProviderPoolService.php',
            'sulu_content.teaser.serializer.event_subscriber' => 'getSuluContent_Teaser_Serializer_EventSubscriberService.php',
            'sulu_content.webspace.serializer.event_subscriber' => 'getSuluContent_Webspace_Serializer_EventSubscriberService.php',
            'sulu_content.webspace_navigation_provider' => 'getSuluContent_WebspaceNavigationProviderService.php',
            'sulu_core.build.builder.cache' => 'getSuluCore_Build_Builder_CacheService.php',
            'sulu_core.build.builder.database' => 'getSuluCore_Build_Builder_DatabaseService.php',
            'sulu_core.build.builder.fixtures' => 'getSuluCore_Build_Builder_FixturesService.php',
            'sulu_core.build.builder.node_order' => 'getSuluCore_Build_Builder_NodeOrderService.php',
            'sulu_core.build.builder.phpcr' => 'getSuluCore_Build_Builder_PhpcrService.php',
            'sulu_core.build.builder.phpcr_migrations' => 'getSuluCore_Build_Builder_PhpcrMigrationsService.php',
            'sulu_core.doctrine_list_builder_factory' => 'getSuluCore_DoctrineListBuilderFactoryService.php',
            'sulu_core.doctrine_rest_helper' => 'getSuluCore_DoctrineRestHelperService.php',
            'sulu_core.list_builder.field_descriptor_factory' => 'getSuluCore_ListBuilder_FieldDescriptorFactoryService.php',
            'sulu_core.list_builder.metadata.file_locator' => 'getSuluCore_ListBuilder_Metadata_FileLocatorService.php',
            'sulu_core.list_builder.metadata.parameter_bag' => 'getSuluCore_ListBuilder_Metadata_ParameterBagService.php',
            'sulu_core.list_builder.metadata.provider.chain' => 'getSuluCore_ListBuilder_Metadata_Provider_ChainService.php',
            'sulu_core.list_builder.metadata.provider.doctrine' => 'getSuluCore_ListBuilder_Metadata_Provider_DoctrineService.php',
            'sulu_core.list_builder.metadata.provider.doctrine.cache' => 'getSuluCore_ListBuilder_Metadata_Provider_Doctrine_CacheService.php',
            'sulu_core.list_builder.metadata.provider.doctrine.driver.xml' => 'getSuluCore_ListBuilder_Metadata_Provider_Doctrine_Driver_XmlService.php',
            'sulu_core.list_builder.metadata.provider.doctrine.factory' => 'getSuluCore_ListBuilder_Metadata_Provider_Doctrine_FactoryService.php',
            'sulu_core.list_builder.metadata.provider.general' => 'getSuluCore_ListBuilder_Metadata_Provider_GeneralService.php',
            'sulu_core.list_builder.metadata.provider.general.cache' => 'getSuluCore_ListBuilder_Metadata_Provider_General_CacheService.php',
            'sulu_core.list_builder.metadata.provider.general.driver.xml' => 'getSuluCore_ListBuilder_Metadata_Provider_General_Driver_XmlService.php',
            'sulu_core.list_builder.metadata.provider.general.event_subscriber' => 'getSuluCore_ListBuilder_Metadata_Provider_General_EventSubscriberService.php',
            'sulu_core.list_builder.metadata.provider.general.factory' => 'getSuluCore_ListBuilder_Metadata_Provider_General_FactoryService.php',
            'sulu_core.list_rest_helper' => 'getSuluCore_ListRestHelperService.php',
            'sulu_core.rest.datetime_handler' => 'getSuluCore_Rest_DatetimeHandlerService.php',
            'sulu_core.rest.exception_wrapper_handler' => 'getSuluCore_Rest_ExceptionWrapperHandlerService.php',
            'sulu_core.rest.view_handler.csv' => 'getSuluCore_Rest_ViewHandler_CsvService.php',
            'sulu_core.rest_helper' => 'getSuluCore_RestHelperService.php',
            'sulu_core.webspace.document_manager.webspace_initializer' => 'getSuluCore_Webspace_DocumentManager_WebspaceInitializerService.php',
            'sulu_core.webspace.url_provider' => 'getSuluCore_Webspace_UrlProviderService.php',
            'sulu_core.webspace.url_provider.default' => 'getSuluCore_Webspace_UrlProvider_DefaultService.php',
            'sulu_custom_urls.admin' => 'getSuluCustomUrls_AdminService.php',
            'sulu_custom_urls.domain_generator' => 'getSuluCustomUrls_DomainGeneratorService.php',
            'sulu_custom_urls.initializer' => 'getSuluCustomUrls_InitializerService.php',
            'sulu_custom_urls.invalidate.subscriber' => 'getSuluCustomUrls_Invalidate_SubscriberService.php',
            'sulu_custom_urls.manager' => 'getSuluCustomUrls_ManagerService.php',
            'sulu_custom_urls.repository' => 'getSuluCustomUrls_RepositoryService.php',
            'sulu_custom_urls.serializer.event_subscriber' => 'getSuluCustomUrls_Serializer_EventSubscriberService.php',
            'sulu_custom_urls.subscriber' => 'getSuluCustomUrls_SubscriberService.php',
            'sulu_custom_urls.url_provider' => 'getSuluCustomUrls_UrlProviderService.php',
            'sulu_custom_urls.webspace_navigation_provider' => 'getSuluCustomUrls_WebspaceNavigationProviderService.php',
            'sulu_document_manager.admin' => 'getSuluDocumentManager_AdminService.php',
            'sulu_document_manager.command.fixtures_load' => 'getSuluDocumentManager_Command_FixturesLoadService.php',
            'sulu_document_manager.command.initialize' => 'getSuluDocumentManager_Command_InitializeService.php',
            'sulu_document_manager.data_fixtures.executor' => 'getSuluDocumentManager_DataFixtures_ExecutorService.php',
            'sulu_document_manager.data_fixtures.loader' => 'getSuluDocumentManager_DataFixtures_LoaderService.php',
            'sulu_document_manager.document.subscriber.compat.content_mapper' => 'getSuluDocumentManager_Document_Subscriber_Compat_ContentMapperService.php',
            'sulu_document_manager.document.subscriber.extension' => 'getSuluDocumentManager_Document_Subscriber_ExtensionService.php',
            'sulu_document_manager.document.subscriber.fallback_localization' => 'getSuluDocumentManager_Document_Subscriber_FallbackLocalizationService.php',
            'sulu_document_manager.document.subscriber.order' => 'getSuluDocumentManager_Document_Subscriber_OrderService.php',
            'sulu_document_manager.document.subscriber.publish' => 'getSuluDocumentManager_Document_Subscriber_PublishService.php',
            'sulu_document_manager.document.subscriber.robot' => 'getSuluDocumentManager_Document_Subscriber_RobotService.php',
            'sulu_document_manager.document.subscriber.route' => 'getSuluDocumentManager_Document_Subscriber_RouteService.php',
            'sulu_document_manager.document.subscriber.security' => 'getSuluDocumentManager_Document_Subscriber_SecurityService.php',
            'sulu_document_manager.document.subscriber.shadow_copy_properties' => 'getSuluDocumentManager_Document_Subscriber_ShadowCopyPropertiesService.php',
            'sulu_document_manager.document.subscriber.shadow_locale' => 'getSuluDocumentManager_Document_Subscriber_ShadowLocaleService.php',
            'sulu_document_manager.document.subscriber.target' => 'getSuluDocumentManager_Document_Subscriber_TargetService.php',
            'sulu_document_manager.document.subscriber.title' => 'getSuluDocumentManager_Document_Subscriber_TitleService.php',
            'sulu_document_manager.document.subscriber.webspace' => 'getSuluDocumentManager_Document_Subscriber_WebspaceService.php',
            'sulu_document_manager.document.subscriber.workflow_stage' => 'getSuluDocumentManager_Document_Subscriber_WorkflowStageService.php',
            'sulu_document_manager.initializer' => 'getSuluDocumentManager_InitializerService.php',
            'sulu_document_manager.initializer.root_path_purge_initializer' => 'getSuluDocumentManager_Initializer_RootPathPurgeInitializerService.php',
            'sulu_document_manager.initializer.workspace' => 'getSuluDocumentManager_Initializer_WorkspaceService.php',
            'sulu_document_manager.node_helper' => 'getSuluDocumentManager_NodeHelperService.php',
            'sulu_document_manager.path_builder' => 'getSuluDocumentManager_PathBuilderService.php',
            'sulu_document_manager.routing.version_loader' => 'getSuluDocumentManager_Routing_VersionLoaderService.php',
            'sulu_document_manager.serializer.handler.children_collection' => 'getSuluDocumentManager_Serializer_Handler_ChildrenCollectionService.php',
            'sulu_document_manager.serializer.subscriber.children_behavior' => 'getSuluDocumentManager_Serializer_Subscriber_ChildrenBehaviorService.php',
            'sulu_document_manager.serializer.subscriber.document' => 'getSuluDocumentManager_Serializer_Subscriber_DocumentService.php',
            'sulu_document_manager.serializer.subscriber.proxy' => 'getSuluDocumentManager_Serializer_Subscriber_ProxyService.php',
            'sulu_document_manager.slugifier' => 'getSuluDocumentManager_SlugifierService.php',
            'sulu_document_manager.subscriber.behavior.alias' => 'getSuluDocumentManager_Subscriber_Behavior_AliasService.php',
            'sulu_document_manager.subscriber.behavior.auto_name' => 'getSuluDocumentManager_Subscriber_Behavior_AutoNameService.php',
            'sulu_document_manager.subscriber.behavior.base_path' => 'getSuluDocumentManager_Subscriber_Behavior_BasePathService.php',
            'sulu_document_manager.subscriber.behavior.filing' => 'getSuluDocumentManager_Subscriber_Behavior_FilingService.php',
            'sulu_document_manager.subscriber.behavior.path' => 'getSuluDocumentManager_Subscriber_Behavior_PathService.php',
            'sulu_document_manager.subscriber.behavior.path.explicit' => 'getSuluDocumentManager_Subscriber_Behavior_Path_ExplicitService.php',
            'sulu_document_manager.subscriber.behavior.remove_content' => 'getSuluDocumentManager_Subscriber_Behavior_RemoveContentService.php',
            'sulu_document_manager.subscriber.core.instantiator' => 'getSuluDocumentManager_Subscriber_Core_InstantiatorService.php',
            'sulu_document_manager.subscriber.core.mapping' => 'getSuluDocumentManager_Subscriber_Core_MappingService.php',
            'sulu_document_manager.subscriber.core.registrator' => 'getSuluDocumentManager_Subscriber_Core_RegistratorService.php',
            'sulu_document_manager.subscriber.phpcr.find' => 'getSuluDocumentManager_Subscriber_Phpcr_FindService.php',
            'sulu_document_manager.subscriber.phpcr.general' => 'getSuluDocumentManager_Subscriber_Phpcr_GeneralService.php',
            'sulu_document_manager.subscriber.phpcr.mixin' => 'getSuluDocumentManager_Subscriber_Phpcr_MixinService.php',
            'sulu_document_manager.subscriber.phpcr.query' => 'getSuluDocumentManager_Subscriber_Phpcr_QueryService.php',
            'sulu_document_manager.subscriber.phpcr.refresh' => 'getSuluDocumentManager_Subscriber_Phpcr_RefreshService.php',
            'sulu_document_manager.subscriber.phpcr.remove' => 'getSuluDocumentManager_Subscriber_Phpcr_RemoveService.php',
            'sulu_document_manager.subscriber.phpcr.reorder' => 'getSuluDocumentManager_Subscriber_Phpcr_ReorderService.php',
            'sulu_document_manager.subscriber.security' => 'getSuluDocumentManager_Subscriber_SecurityService.php',
            'sulu_document_manager.suscriber.behavior.author' => 'getSuluDocumentManager_Suscriber_Behavior_AuthorService.php',
            'sulu_document_manager.suscriber.behavior.blame' => 'getSuluDocumentManager_Suscriber_Behavior_BlameService.php',
            'sulu_document_manager.suscriber.behavior.children' => 'getSuluDocumentManager_Suscriber_Behavior_ChildrenService.php',
            'sulu_document_manager.suscriber.behavior.locale' => 'getSuluDocumentManager_Suscriber_Behavior_LocaleService.php',
            'sulu_document_manager.suscriber.behavior.node_name' => 'getSuluDocumentManager_Suscriber_Behavior_NodeNameService.php',
            'sulu_document_manager.suscriber.behavior.parent' => 'getSuluDocumentManager_Suscriber_Behavior_ParentService.php',
            'sulu_document_manager.suscriber.behavior.timestamp' => 'getSuluDocumentManager_Suscriber_Behavior_TimestampService.php',
            'sulu_document_manager.suscriber.behavior.uuid' => 'getSuluDocumentManager_Suscriber_Behavior_UuidService.php',
            'sulu_hash.auditable_hasher' => 'getSuluHash_AuditableHasherService.php',
            'sulu_hash.event_subscriber.serializer' => 'getSuluHash_EventSubscriber_SerializerService.php',
            'sulu_hash.request_hash_checker' => 'getSuluHash_RequestHashCheckerService.php',
            'sulu_http_cache.event_subscriber.flush' => 'getSuluHttpCache_EventSubscriber_FlushService.php',
            'sulu_http_cache.event_subscriber.invalidation' => 'getSuluHttpCache_EventSubscriber_InvalidationService.php',
            'sulu_http_cache.proxy_client.symfony' => 'getSuluHttpCache_ProxyClient_SymfonyService.php',
            'sulu_http_cache.proxy_client.varnish' => 'getSuluHttpCache_ProxyClient_VarnishService.php',
            'sulu_location.admin' => 'getSuluLocation_AdminService.php',
            'sulu_location.content.type.location' => 'getSuluLocation_Content_Type_LocationService.php',
            'sulu_location.controller.geoloactor' => 'getSuluLocation_Controller_GeoloactorService.php',
            'sulu_location.gelocator.service.nominatim' => 'getSuluLocation_Gelocator_Service_NominatimService.php',
            'sulu_location.geolocator.guzzle.client' => 'getSuluLocation_Geolocator_Guzzle_ClientService.php',
            'sulu_location.geolocator.manager' => 'getSuluLocation_Geolocator_ManagerService.php',
            'sulu_location.geolocator.service.google' => 'getSuluLocation_Geolocator_Service_GoogleService.php',
            'sulu_location.map_manager' => 'getSuluLocation_MapManagerService.php',
            'sulu_media.admin' => 'getSuluMedia_AdminService.php',
            'sulu_media.admin.content_navigation_provider' => 'getSuluMedia_Admin_ContentNavigationProviderService.php',
            'sulu_media.collection_manager' => 'getSuluMedia_CollectionManagerService.php',
            'sulu_media.disposition_type.resolver' => 'getSuluMedia_DispositionType_ResolverService.php',
            'sulu_media.file_version_meta_repository' => 'getSuluMedia_FileVersionMetaRepositoryService.php',
            'sulu_media.format_cache_clearer' => 'getSuluMedia_FormatCacheClearerService.php',
            'sulu_media.format_options_manager' => 'getSuluMedia_FormatOptionsManagerService.php',
            'sulu_media.format_options_repository' => 'getSuluMedia_FormatOptionsRepositoryService.php',
            'sulu_media.js_config' => 'getSuluMedia_JsConfigService.php',
            'sulu_media.permission_listener' => 'getSuluMedia_PermissionListenerService.php',
            'sulu_media.reference_store.media' => 'getSuluMedia_ReferenceStore_MediaService.php',
            'sulu_media.search.subscriber.media' => 'getSuluMedia_Search_Subscriber_MediaService.php',
            'sulu_media.search.subscriber.structure_media' => 'getSuluMedia_Search_Subscriber_StructureMediaService.php',
            'sulu_media.security_context' => 'getSuluMedia_SecurityContextService.php',
            'sulu_media.smart_content.data_provider.media' => 'getSuluMedia_SmartContent_DataProvider_MediaService.php',
            'sulu_media.smart_content.data_provider.media.repository' => 'getSuluMedia_SmartContent_DataProvider_Media_RepositoryService.php',
            'sulu_media.system_collections.builder' => 'getSuluMedia_SystemCollections_BuilderService.php',
            'sulu_media.system_collections.cache' => 'getSuluMedia_SystemCollections_CacheService.php',
            'sulu_media.system_collections.manager' => 'getSuluMedia_SystemCollections_ManagerService.php',
            'sulu_media.type.media_selection' => 'getSuluMedia_Type_MediaSelectionService.php',
            'sulu_navigationContext.document.subscriber.navigation_context' => 'getSuluNavigationContext_Document_Subscriber_NavigationContextService.php',
            'sulu_preview.admin' => 'getSuluPreview_AdminService.php',
            'sulu_preview.js_config' => 'getSuluPreview_JsConfigService.php',
            'sulu_preview.preview' => 'getSuluPreview_PreviewService.php',
            'sulu_preview.preview.kernel_factory' => 'getSuluPreview_Preview_KernelFactoryService.php',
            'sulu_preview.preview.message_component' => 'getSuluPreview_Preview_MessageComponentService.php',
            'sulu_preview.preview.renderer' => 'getSuluPreview_Preview_RendererService.php',
            'sulu_redirect_type.document.subscriber.redirect_type' => 'getSuluRedirectType_Document_Subscriber_RedirectTypeService.php',
            'sulu_resource_segment.document.subscriber.resource_segment' => 'getSuluResourceSegment_Document_Subscriber_ResourceSegmentService.php',
            'sulu_route.chain_generator' => 'getSuluRoute_ChainGeneratorService.php',
            'sulu_route.content_type' => 'getSuluRoute_ContentTypeService.php',
            'sulu_route.generator.expression_token_provider' => 'getSuluRoute_Generator_ExpressionTokenProviderService.php',
            'sulu_route.generator.route_generator' => 'getSuluRoute_Generator_RouteGeneratorService.php',
            'sulu_route.manager.conflict_resolver.auto_increment' => 'getSuluRoute_Manager_ConflictResolver_AutoIncrementService.php',
            'sulu_route.manager.route_manager' => 'getSuluRoute_Manager_RouteManagerService.php',
            'sulu_route.routing.defaults_provider' => 'getSuluRoute_Routing_DefaultsProviderService.php',
            'sulu_route.routing.proxy_factory' => 'getSuluRoute_Routing_ProxyFactoryService.php',
            'sulu_search.admin' => 'getSuluSearch_AdminService.php',
            'sulu_search.build.index' => 'getSuluSearch_Build_IndexService.php',
            'sulu_search.controller.search' => 'getSuluSearch_Controller_SearchService.php',
            'sulu_search.index_configuration_provider' => 'getSuluSearch_IndexConfigurationProviderService.php',
            'sulu_security.access_control_manager' => 'getSuluSecurity_AccessControlManagerService.php',
            'sulu_security.admin' => 'getSuluSecurity_AdminService.php',
            'sulu_security.authentication_entry_point' => 'getSuluSecurity_AuthenticationEntryPointService.php',
            'sulu_security.authentication_handler' => 'getSuluSecurity_AuthenticationHandlerService.php',
            'sulu_security.build.user' => 'getSuluSecurity_Build_UserService.php',
            'sulu_security.contacts_content_navigation_provider' => 'getSuluSecurity_ContactsContentNavigationProviderService.php',
            'sulu_security.doctrine_access_control_provider' => 'getSuluSecurity_DoctrineAccessControlProviderService.php',
            'sulu_security.document.serializer.subscriber.security' => 'getSuluSecurity_Document_Serializer_Subscriber_SecurityService.php',
            'sulu_security.group_repository' => 'getSuluSecurity_GroupRepositoryService.php',
            'sulu_security.js_config' => 'getSuluSecurity_JsConfigService.php',
            'sulu_security.last_login_listener' => 'getSuluSecurity_LastLoginListenerService.php',
            'sulu_security.mask_converter' => 'getSuluSecurity_MaskConverterService.php',
            'sulu_security.permission_controller' => 'getSuluSecurity_PermissionControllerService.php',
            'sulu_security.phpcr_access_control_provider' => 'getSuluSecurity_PhpcrAccessControlProviderService.php',
            'sulu_security.profile_controller' => 'getSuluSecurity_ProfileControllerService.php',
            'sulu_security.roles_content_navigation_provider' => 'getSuluSecurity_RolesContentNavigationProviderService.php',
            'sulu_security.salt_generator' => 'getSuluSecurity_SaltGeneratorService.php',
            'sulu_security.security_context_voter' => 'getSuluSecurity_SecurityContextVoterService.php',
            'sulu_security.serializer.handler.secured_entity' => 'getSuluSecurity_Serializer_Handler_SecuredEntityService.php',
            'sulu_security.token_generator' => 'getSuluSecurity_TokenGeneratorService.php',
            'sulu_security.user_manager' => 'getSuluSecurity_UserManagerService.php',
            'sulu_security.user_provider' => 'getSuluSecurity_UserProviderService.php',
            'sulu_security.user_repository' => 'getSuluSecurity_UserRepositoryService.php',
            'sulu_security.user_setting_repository' => 'getSuluSecurity_UserSettingRepositoryService.php',
            'sulu_snippet.admin' => 'getSuluSnippet_AdminService.php',
            'sulu_snippet.content.snippet' => 'getSuluSnippet_Content_SnippetService.php',
            'sulu_snippet.content_navigation_provider' => 'getSuluSnippet_ContentNavigationProviderService.php',
            'sulu_snippet.controller.snippet' => 'getSuluSnippet_Controller_SnippetService.php',
            'sulu_snippet.document.snippet_initializer' => 'getSuluSnippet_Document_SnippetInitializerService.php',
            'sulu_snippet.export.snippet' => 'getSuluSnippet_Export_SnippetService.php',
            'sulu_snippet.form.snippet' => 'getSuluSnippet_Form_SnippetService.php',
            'sulu_snippet.import.snippet' => 'getSuluSnippet_Import_SnippetService.php',
            'sulu_snippet.import.webspace.xliff12' => 'getSuluSnippet_Import_Webspace_Xliff12Service.php',
            'sulu_snippet.jsconfig' => 'getSuluSnippet_JsconfigService.php',
            'sulu_snippet.reference_store.snippet' => 'getSuluSnippet_ReferenceStore_SnippetService.php',
            'sulu_snippet.repository' => 'getSuluSnippet_RepositoryService.php',
            'sulu_snippet.smart_content.snippet_data_provider' => 'getSuluSnippet_SmartContent_SnippetDataProviderService.php',
            'sulu_snippet.webspace_navigation_provider' => 'getSuluSnippet_WebspaceNavigationProviderService.php',
            'sulu_tag.admin' => 'getSuluTag_AdminService.php',
            'sulu_tag.content.type.tag_list' => 'getSuluTag_Content_Type_TagListService.php',
            'sulu_tag.reference_store.tag' => 'getSuluTag_ReferenceStore_TagService.php',
            'sulu_tag.search.tags_converter' => 'getSuluTag_Search_TagsConverterService.php',
            'sulu_tag.tag_repository' => 'getSuluTag_TagRepositoryService.php',
            'sulu_translate.export' => 'getSuluTranslate_ExportService.php',
            'sulu_website.admin' => 'getSuluWebsite_AdminService.php',
            'sulu_website.analytics.event_subscriber' => 'getSuluWebsite_Analytics_EventSubscriberService.php',
            'sulu_website.analytics.manager' => 'getSuluWebsite_Analytics_ManagerService.php',
            'sulu_website.analytics.repository' => 'getSuluWebsite_Analytics_RepositoryService.php',
            'sulu_website.domains.repository' => 'getSuluWebsite_Domains_RepositoryService.php',
            'sulu_website.event_listener.translator' => 'getSuluWebsite_EventListener_TranslatorService.php',
            'sulu_website.http_cache.clearer' => 'getSuluWebsite_HttpCache_ClearerService.php',
            'sulu_website.reference_store_pool' => 'getSuluWebsite_ReferenceStorePoolService.php',
            'sulu_website.resolver.parameter' => 'getSuluWebsite_Resolver_ParameterService.php',
            'sulu_website.resolver.request_analyzer' => 'getSuluWebsite_Resolver_RequestAnalyzerService.php',
            'sulu_website.resolver.template_attribute' => 'getSuluWebsite_Resolver_TemplateAttributeService.php',
            'sulu_website.routing.portal_loader' => 'getSuluWebsite_Routing_PortalLoaderService.php',
            'sulu_website.sitemap.pages_provider' => 'getSuluWebsite_Sitemap_PagesProviderService.php',
            'sulu_website.sitemap.pool' => 'getSuluWebsite_Sitemap_PoolService.php',
            'sulu_website.sitemap.xml_dumper' => 'getSuluWebsite_Sitemap_XmlDumperService.php',
            'sulu_website.sitemap.xml_renderer' => 'getSuluWebsite_Sitemap_XmlRendererService.php',
            'sulu_website.webspace_navigation_provider' => 'getSuluWebsite_WebspaceNavigationProviderService.php',
            'sulu_websocket.admin' => 'getSuluWebsocket_AdminService.php',
            'sulu_websocket.admin.message_builder' => 'getSuluWebsocket_Admin_MessageBuilderService.php',
            'sulu_websocket.admin.message_dispatcher.app' => 'getSuluWebsocket_Admin_MessageDispatcher_AppService.php',
            'sulu_websocket.fallback_controller' => 'getSuluWebsocket_FallbackControllerService.php',
            'sulu_websocket.manager' => 'getSuluWebsocket_ManagerService.php',
            'swiftmailer.email_sender.listener' => 'getSwiftmailer_EmailSender_ListenerService.php',
            'swiftmailer.mailer.default' => 'getSwiftmailer_Mailer_DefaultService.php',
            'swiftmailer.mailer.default.plugin.messagelogger' => 'getSwiftmailer_Mailer_Default_Plugin_MessageloggerService.php',
            'swiftmailer.mailer.default.spool' => 'getSwiftmailer_Mailer_Default_SpoolService.php',
            'swiftmailer.mailer.default.transport' => 'getSwiftmailer_Mailer_Default_TransportService.php',
            'swiftmailer.mailer.default.transport.eventdispatcher' => 'getSwiftmailer_Mailer_Default_Transport_EventdispatcherService.php',
            'swiftmailer.mailer.default.transport.real' => 'getSwiftmailer_Mailer_Default_Transport_RealService.php',
            'templating' => 'getTemplatingService.php',
            'templating.cache_warmer.template_paths' => 'getTemplating_CacheWarmer_TemplatePathsService.php',
            'templating.filename_parser' => 'getTemplating_FilenameParserService.php',
            'templating.finder' => 'getTemplating_FinderService.php',
            'templating.helper.logout_url' => 'getTemplating_Helper_LogoutUrlService.php',
            'templating.helper.security' => 'getTemplating_Helper_SecurityService.php',
            'templating.loader' => 'getTemplating_LoaderService.php',
            'translation.dumper.csv' => 'getTranslation_Dumper_CsvService.php',
            'translation.dumper.ini' => 'getTranslation_Dumper_IniService.php',
            'translation.dumper.json' => 'getTranslation_Dumper_JsonService.php',
            'translation.dumper.mo' => 'getTranslation_Dumper_MoService.php',
            'translation.dumper.php' => 'getTranslation_Dumper_PhpService.php',
            'translation.dumper.po' => 'getTranslation_Dumper_PoService.php',
            'translation.dumper.qt' => 'getTranslation_Dumper_QtService.php',
            'translation.dumper.res' => 'getTranslation_Dumper_ResService.php',
            'translation.dumper.xliff' => 'getTranslation_Dumper_XliffService.php',
            'translation.dumper.yml' => 'getTranslation_Dumper_YmlService.php',
            'translation.extractor' => 'getTranslation_ExtractorService.php',
            'translation.extractor.php' => 'getTranslation_Extractor_PhpService.php',
            'translation.loader' => 'getTranslation_LoaderService.php',
            'translation.loader.csv' => 'getTranslation_Loader_CsvService.php',
            'translation.loader.dat' => 'getTranslation_Loader_DatService.php',
            'translation.loader.ini' => 'getTranslation_Loader_IniService.php',
            'translation.loader.json' => 'getTranslation_Loader_JsonService.php',
            'translation.loader.mo' => 'getTranslation_Loader_MoService.php',
            'translation.loader.php' => 'getTranslation_Loader_PhpService.php',
            'translation.loader.po' => 'getTranslation_Loader_PoService.php',
            'translation.loader.qt' => 'getTranslation_Loader_QtService.php',
            'translation.loader.res' => 'getTranslation_Loader_ResService.php',
            'translation.loader.xliff' => 'getTranslation_Loader_XliffService.php',
            'translation.loader.yml' => 'getTranslation_Loader_YmlService.php',
            'translation.reader' => 'getTranslation_ReaderService.php',
            'translation.warmer' => 'getTranslation_WarmerService.php',
            'translation.writer' => 'getTranslation_WriterService.php',
            'twig.cache_warmer' => 'getTwig_CacheWarmerService.php',
            'twig.command.debug' => 'getTwig_Command_DebugService.php',
            'twig.command.lint' => 'getTwig_Command_LintService.php',
            'twig.controller.exception' => 'getTwig_Controller_ExceptionService.php',
            'twig.controller.preview_error' => 'getTwig_Controller_PreviewErrorService.php',
            'twig.form.renderer' => 'getTwig_Form_RendererService.php',
            'twig.runtime.httpkernel' => 'getTwig_Runtime_HttpkernelService.php',
            'twig.template_cache_warmer' => 'getTwig_TemplateCacheWarmerService.php',
            'twig.translation.extractor' => 'getTwig_Translation_ExtractorService.php',
            'validator.email' => 'getValidator_EmailService.php',
            'validator.expression' => 'getValidator_ExpressionService.php',
            'validator.mapping.cache_warmer' => 'getValidator_Mapping_CacheWarmerService.php',
            'var_dumper.cli_dumper' => 'getVarDumper_CliDumperService.php',
            'web_profiler.controller.exception' => 'getWebProfiler_Controller_ExceptionService.php',
            'web_profiler.controller.profiler' => 'getWebProfiler_Controller_ProfilerService.php',
            'web_profiler.controller.router' => 'getWebProfiler_Controller_RouterService.php',
            'web_server.command.server_log' => 'getWebServer_Command_ServerLogService.php',
            'web_server.command.server_run' => 'getWebServer_Command_ServerRunService.php',
            'web_server.command.server_start' => 'getWebServer_Command_ServerStartService.php',
            'web_server.command.server_status' => 'getWebServer_Command_ServerStatusService.php',
            'web_server.command.server_stop' => 'getWebServer_Command_ServerStopService.php',
        );
        $this->privates = array(
            'JMS\\Serializer\\ArrayTransformerInterface' => true,
            'JMS\\Serializer\\SerializerInterface' => true,
            'doctrine_phpcr.default_session' => true,
            'doctrine_phpcr.live_session' => true,
            'doctrine_phpcr.session' => true,
            'fos_rest.exception_handler' => true,
            'fos_rest.inflector' => true,
            'fos_rest.router' => true,
            'fos_rest.serializer' => true,
            'fos_rest.templating' => true,
            'jms_serializer.cache_naming_strategy' => true,
            'massive_search.adapter' => true,
            'massive_search.factory' => true,
            'massive_search.index_name_decorator.default' => true,
            'router_listener' => true,
            'serializer' => true,
            'session.storage' => true,
            'sulu.content.rlp.strategy.tree' => true,
            'sulu_category.category_repository' => true,
            'sulu_category.keyword_repository' => true,
            'sulu_collaboration.connection_cache' => true,
            'sulu_collaboration.entity_cache' => true,
            'sulu_document_manager.default_session' => true,
            'sulu_document_manager.live_session' => true,
            'sulu_http_cache.handler' => true,
            'sulu_http_cache.proxy_client' => true,
            'sulu_website.exception.controller' => true,
            'swiftmailer.mailer' => true,
            'swiftmailer.plugin.messagelogger' => true,
            'swiftmailer.spool' => true,
            'swiftmailer.transport' => true,
            'swiftmailer.transport.real' => true,
            'annotation_reader' => true,
            'annotations.cache' => true,
            'annotations.cache_warmer' => true,
            'annotations.reader' => true,
            'argument_resolver.default' => true,
            'argument_resolver.request' => true,
            'argument_resolver.request_attribute' => true,
            'argument_resolver.service' => true,
            'argument_resolver.session' => true,
            'argument_resolver.variadic' => true,
            'assets.context' => true,
            'assets.packages' => true,
            'bazinga_hateoas.expression_language' => true,
            'cache.annotations' => true,
            'cache.default_clearer' => true,
            'cache.serializer' => true,
            'cache.validator' => true,
            'config.resource.self_checking_resource_checker' => true,
            'config_cache_factory' => true,
            'console.command.about' => true,
            'console.command.assets_install' => true,
            'console.command.cache_clear' => true,
            'console.command.cache_pool_clear' => true,
            'console.command.cache_pool_prune' => true,
            'console.command.cache_warmup' => true,
            'console.command.config_debug' => true,
            'console.command.config_dump_reference' => true,
            'console.command.container_debug' => true,
            'console.command.debug_autowiring' => true,
            'console.command.event_dispatcher_debug' => true,
            'console.command.form_debug' => true,
            'console.command.router_debug' => true,
            'console.command.router_match' => true,
            'console.command.translation_debug' => true,
            'console.command.translation_update' => true,
            'console.command.xliff_lint' => true,
            'console.command.yaml_lint' => true,
            'console.error_listener' => true,
            'controller_name_converter' => true,
            'data_collector.form' => true,
            'data_collector.form.extractor' => true,
            'data_collector.request' => true,
            'data_collector.router' => true,
            'data_collector.translation' => true,
            'debug.argument_resolver' => true,
            'debug.controller_resolver' => true,
            'debug.debug_handlers_listener' => true,
            'debug.dump_listener' => true,
            'debug.event_dispatcher' => true,
            'debug.file_link_formatter' => true,
            'debug.file_link_formatter.url_format' => true,
            'debug.log_processor' => true,
            'debug.security.access.decision_manager' => true,
            'debug.stopwatch' => true,
            'dependency_injection.config.container_parameters_resource_checker' => true,
            'deprecated.form.registry' => true,
            'deprecated.form.registry.csrf' => true,
            'doctrine.cache_clear_metadata_command' => true,
            'doctrine.cache_clear_query_cache_command' => true,
            'doctrine.cache_clear_result_command' => true,
            'doctrine.cache_collection_region_command' => true,
            'doctrine.clear_entity_region_command' => true,
            'doctrine.clear_query_region_command' => true,
            'doctrine.database_create_command' => true,
            'doctrine.database_drop_command' => true,
            'doctrine.database_import_command' => true,
            'doctrine.dbal.connection_factory' => true,
            'doctrine.dbal.logger.profiling.default' => true,
            'doctrine.ensure_production_settings_command' => true,
            'doctrine.fixtures_load_command' => true,
            'doctrine.generate_entities_command' => true,
            'doctrine.mapping_convert_command' => true,
            'doctrine.mapping_import_command' => true,
            'doctrine.mapping_info_command' => true,
            'doctrine.orm.default_entity_listener_resolver' => true,
            'doctrine.orm.default_entity_manager.property_info_extractor' => true,
            'doctrine.orm.default_listeners.attach_entity_listeners' => true,
            'doctrine.orm.default_manager_configurator' => true,
            'doctrine.orm.proxy_cache_warmer' => true,
            'doctrine.orm.validator.unique' => true,
            'doctrine.orm.validator_initializer' => true,
            'doctrine.query_dql_command' => true,
            'doctrine.query_sql_command' => true,
            'doctrine.schema_create_command' => true,
            'doctrine.schema_drop_command' => true,
            'doctrine.schema_update_command' => true,
            'doctrine.schema_validate_command' => true,
            'doctrine_cache.contains_command' => true,
            'doctrine_cache.delete_command' => true,
            'doctrine_cache.flush_command' => true,
            'doctrine_cache.stats_command' => true,
            'doctrine_phpcr' => true,
            'doctrine_phpcr.admin.default_session' => true,
            'doctrine_phpcr.admin.jackalope.repository.default' => true,
            'doctrine_phpcr.admin.jackalope.repository.live' => true,
            'doctrine_phpcr.admin.live_session' => true,
            'doctrine_phpcr.console_dumper' => true,
            'doctrine_phpcr.initializer_manager' => true,
            'doctrine_phpcr.jackalope.repository.default' => true,
            'doctrine_phpcr.jackalope.repository.factory.doctrinedbal' => true,
            'doctrine_phpcr.jackalope.repository.factory.jackrabbit' => true,
            'doctrine_phpcr.jackalope.repository.factory.prismic' => true,
            'doctrine_phpcr.jackalope.repository.factory.service.doctrinedbal' => true,
            'doctrine_phpcr.jackalope.repository.factory.service.jackrabbit' => true,
            'doctrine_phpcr.jackalope.repository.factory.service.prismic' => true,
            'doctrine_phpcr.jackalope.repository.live' => true,
            'dtl_content.form.factory.document_type' => true,
            'dtl_content.form.type.home' => true,
            'dtl_content.form.type.page' => true,
            'dubture_ffmpeg.ffmpeg' => true,
            'dubture_ffmpeg.ffprobe' => true,
            'file_locator' => true,
            'form.registry' => true,
            'form.resolved_type_factory' => true,
            'form.server_params' => true,
            'form.type.choice' => true,
            'form.type.entity' => true,
            'form.type.form' => true,
            'form.type.phpcr.reference' => true,
            'form.type_extension.csrf' => true,
            'form.type_extension.form.data_collector' => true,
            'form.type_extension.form.http_foundation' => true,
            'form.type_extension.form.validator' => true,
            'form.type_extension.repeated.validator' => true,
            'form.type_extension.submit.validator' => true,
            'form.type_extension.upload.validator' => true,
            'form.type_guesser.doctrine' => true,
            'form.type_guesser.validator' => true,
            'fos_rest.body_listener' => true,
            'fos_rest.controller.exception' => true,
            'fos_rest.decoder.json' => true,
            'fos_rest.decoder.jsontoform' => true,
            'fos_rest.decoder.xml' => true,
            'fos_rest.decoder_provider' => true,
            'fos_rest.exception_format_negotiator' => true,
            'fos_rest.exception_listener' => true,
            'fos_rest.format_negotiator' => true,
            'fos_rest.inflector.doctrine' => true,
            'fos_rest.normalizer.camel_keys' => true,
            'fos_rest.normalizer.camel_keys_with_leading_underscore' => true,
            'fos_rest.request.param_fetcher' => true,
            'fos_rest.request.param_fetcher.reader' => true,
            'fos_rest.routing.loader.controller' => true,
            'fos_rest.routing.loader.processor' => true,
            'fos_rest.routing.loader.reader.action' => true,
            'fos_rest.routing.loader.reader.controller' => true,
            'fos_rest.routing.loader.xml_collection' => true,
            'fos_rest.routing.loader.yaml_collection' => true,
            'fos_rest.serializer.exception_wrapper_normalizer' => true,
            'fos_rest.serializer.exception_wrapper_serialize_handler' => true,
            'fos_rest.view.exception_wrapper_handler' => true,
            'fos_rest.view_handler' => true,
            'fos_rest.violation_formatter' => true,
            'fragment.handler' => true,
            'fragment.listener' => true,
            'fragment.renderer.hinclude' => true,
            'fragment.renderer.inline' => true,
            'hateoas.configuration.provider.resolver' => true,
            'hateoas.configuration.relations_repository' => true,
            'hateoas.embeds_factory' => true,
            'hateoas.expression.evaluator' => true,
            'hateoas.generator.symfony' => true,
            'hateoas.link_factory' => true,
            'hateoas.links_factory' => true,
            'hateoas.serializer.exclusion_manager' => true,
            'hateoas.twig.link' => true,
            'jms_serializer' => true,
            'jms_serializer.accessor_strategy' => true,
            'jms_serializer.array_collection_handler' => true,
            'jms_serializer.constraint_violation_handler' => true,
            'jms_serializer.datetime_handler' => true,
            'jms_serializer.deserialization_context_factory' => true,
            'jms_serializer.doctrine_proxy_subscriber' => true,
            'jms_serializer.expression_evaluator' => true,
            'jms_serializer.form_error_handler' => true,
            'jms_serializer.handler_registry' => true,
            'jms_serializer.json_deserialization_visitor' => true,
            'jms_serializer.json_serialization_visitor' => true,
            'jms_serializer.metadata.file_locator' => true,
            'jms_serializer.metadata_driver' => true,
            'jms_serializer.metadata_factory' => true,
            'jms_serializer.naming_strategy' => true,
            'jms_serializer.object_constructor' => true,
            'jms_serializer.php_collection_handler' => true,
            'jms_serializer.serialization_context_factory' => true,
            'jms_serializer.stopwatch_subscriber' => true,
            'jms_serializer.templating.helper.serializer' => true,
            'jms_serializer.unserialize_object_constructor' => true,
            'jms_serializer.xml_deserialization_visitor' => true,
            'jms_serializer.xml_serialization_visitor' => true,
            'jms_serializer.yaml_serialization_visitor' => true,
            'kernel.class_cache.cache_warmer' => true,
            'locale_listener' => true,
            'logger' => true,
            'massive_build.build.registry' => true,
            'massive_build.builder.virtual.dev' => true,
            'massive_build.builder.virtual.maintain' => true,
            'massive_build.builder.virtual.prod' => true,
            'massive_build.command.build' => true,
            'massive_search.adapter.test' => true,
            'massive_search.adapter.zend_lucene' => true,
            'massive_search.command.index_rebuild_deprecated' => true,
            'massive_search.command.init' => true,
            'massive_search.command.purge' => true,
            'massive_search.command.query' => true,
            'massive_search.command.reindex' => true,
            'massive_search.command.status' => true,
            'massive_search.converter' => true,
            'massive_search.converter.date_converter' => true,
            'massive_search.converter.json_converter' => true,
            'massive_search.events.deindex_listener' => true,
            'massive_search.events.index_listener' => true,
            'massive_search.events.zend_rebuild' => true,
            'massive_search.expression_language' => true,
            'massive_search.factory_default' => true,
            'massive_search.index_name_decorator' => true,
            'massive_search.localization_decorator' => true,
            'massive_search.metadata.cache.file_cache' => true,
            'massive_search.metadata.driver.chain' => true,
            'massive_search.metadata.driver.xml' => true,
            'massive_search.metadata.factory' => true,
            'massive_search.metadata.field_evaluator' => true,
            'massive_search.metadata.file_locator' => true,
            'massive_search.metadata.provider.chain' => true,
            'massive_search.metadata.provider.default' => true,
            'massive_search.object_to_document_converter' => true,
            'massive_search.prefix_decorator' => true,
            'massive_search.reindex.provider.doctrine_orm' => true,
            'massive_search.reindex.provider_registry' => true,
            'massive_search.reindex.resume_manager' => true,
            'massive_search.search.event_subscriber.doctrine_orm' => true,
            'massive_search.search.event_subscriber.purge_subscriber' => true,
            'massive_search.search_manager' => true,
            'monolog.handler.console' => true,
            'monolog.handler.console_very_verbose' => true,
            'monolog.handler.main' => true,
            'monolog.handler.null_internal' => true,
            'monolog.logger.cache' => true,
            'monolog.logger.console' => true,
            'monolog.logger.doctrine' => true,
            'monolog.logger.doctrine_phpcr' => true,
            'monolog.logger.event' => true,
            'monolog.logger.php' => true,
            'monolog.logger.profiler' => true,
            'monolog.logger.request' => true,
            'monolog.logger.security' => true,
            'monolog.logger.sulu_document_manager' => true,
            'monolog.logger.templating' => true,
            'monolog.logger.translation' => true,
            'monolog.processor.psr_log_message' => true,
            'phpcr_migrations.command.initialize' => true,
            'phpcr_migrations.command.migrate' => true,
            'phpcr_migrations.command.status' => true,
            'phpcr_migrations.migrator_factory' => true,
            'phpcr_migrations.version_finder' => true,
            'phpcr_migrations.version_storage' => true,
            'profiler_listener' => true,
            'property_accessor' => true,
            'resolve_controller_name_subscriber' => true,
            'response_listener' => true,
            'router.cache_warmer' => true,
            'router.request_context' => true,
            'security.access.authenticated_voter' => true,
            'security.access.expression_voter' => true,
            'security.access.simple_role_voter' => true,
            'security.access_listener' => true,
            'security.access_map' => true,
            'security.authentication.guard_handler' => true,
            'security.authentication.listener.anonymous.admin' => true,
            'security.authentication.listener.form.admin' => true,
            'security.authentication.manager' => true,
            'security.authentication.provider.anonymous.admin' => true,
            'security.authentication.provider.dao.admin' => true,
            'security.authentication.session_strategy.admin' => true,
            'security.authentication.trust_resolver' => true,
            'security.channel_listener' => true,
            'security.command.user_password_encoder' => true,
            'security.context_listener.0' => true,
            'security.csrf.token_storage' => true,
            'security.encoder_factory' => true,
            'security.firewall' => true,
            'security.firewall.map' => true,
            'security.firewall.map.context.admin' => true,
            'security.http_utils' => true,
            'security.logout_url_generator' => true,
            'security.rememberme.response_listener' => true,
            'security.request_matcher.00qf1z7' => true,
            'security.role_hierarchy' => true,
            'security.user_value_resolver' => true,
            'security.validator.user_password' => true,
            'sensio_distribution.security_checker' => true,
            'sensio_distribution.security_checker.command' => true,
            'sensio_framework_extra.cache.listener' => true,
            'sensio_framework_extra.controller.listener' => true,
            'sensio_framework_extra.converter.datetime' => true,
            'sensio_framework_extra.converter.doctrine.orm' => true,
            'sensio_framework_extra.converter.listener' => true,
            'sensio_framework_extra.converter.manager' => true,
            'sensio_framework_extra.security.listener' => true,
            'sensio_framework_extra.view.listener' => true,
            'service_locator.sr6ctxe' => true,
            'session.handler' => true,
            'session.save_listener' => true,
            'session.storage.filesystem' => true,
            'session.storage.metadata_bag' => true,
            'session.storage.native' => true,
            'session.storage.php_bridge' => true,
            'session_listener' => true,
            'streamed_response_listener' => true,
            'sulu.cache.warmer.structure' => true,
            'sulu.content.localization_finder' => true,
            'sulu.content.mapper' => true,
            'sulu.content.path_cleaner' => true,
            'sulu.content.path_cleaner.replacer_loader' => true,
            'sulu.content.path_cleaner.replacer_loader.file_locator' => true,
            'sulu.content.query_executor' => true,
            'sulu.content.resource_locator.strategy.tree_full_edit' => true,
            'sulu.content.resource_locator.strategy.tree_generator' => true,
            'sulu.content.resource_locator.strategy.tree_leaf_edit' => true,
            'sulu.content.resource_locator.strategy_pool' => true,
            'sulu.content.rlp.mapper.phpcr' => true,
            'sulu.content.structure_manager' => true,
            'sulu.content.type.block' => true,
            'sulu.content.type.checkbox' => true,
            'sulu.content.type.color' => true,
            'sulu.content.type.date' => true,
            'sulu.content.type.email' => true,
            'sulu.content.type.internal_links' => true,
            'sulu.content.type.multiple_select' => true,
            'sulu.content.type.password' => true,
            'sulu.content.type.phone' => true,
            'sulu.content.type.resource_locator' => true,
            'sulu.content.type.single_internal_link' => true,
            'sulu.content.type.single_select' => true,
            'sulu.content.type.text_area' => true,
            'sulu.content.type.text_editor' => true,
            'sulu.content.type.text_line' => true,
            'sulu.content.type.time' => true,
            'sulu.content.type.url' => true,
            'sulu.content.type_manager' => true,
            'sulu.content.webspace_structure_provider' => true,
            'sulu.content.webspace_structure_provider.cache' => true,
            'sulu.core.localization_manager' => true,
            'sulu.persistence.event_subscriber.orm.metadata' => true,
            'sulu.persistence.event_subscriber.orm.timestampable' => true,
            'sulu.persistence.event_subscriber.orm.user_blame' => true,
            'sulu.phpcr.session' => true,
            'sulu.repository.access_control' => true,
            'sulu.repository.category' => true,
            'sulu.repository.category_meta' => true,
            'sulu.repository.category_translation' => true,
            'sulu.repository.contact' => true,
            'sulu.repository.keyword' => true,
            'sulu.repository.media' => true,
            'sulu.repository.role' => true,
            'sulu.repository.role_setting' => true,
            'sulu.repository.route' => true,
            'sulu.repository.tag' => true,
            'sulu.repository.user' => true,
            'sulu.util.node_helper' => true,
            'sulu_admin.admin_controller' => true,
            'sulu_admin.admin_pool' => true,
            'sulu_admin.content_navigation_controller' => true,
            'sulu_admin.content_navigation_registry' => true,
            'sulu_admin.js_config' => true,
            'sulu_admin.js_config_pool' => true,
            'sulu_admin.template_controller' => true,
            'sulu_admin.widgets_handler' => true,
            'sulu_category.admin' => true,
            'sulu_category.category_manager' => true,
            'sulu_category.category_request_handler' => true,
            'sulu_category.content.type.category_list' => true,
            'sulu_category.content_navigation_provider' => true,
            'sulu_category.keyword_manager' => true,
            'sulu_category.reference_store.category' => true,
            'sulu_category.twig_extension' => true,
            'sulu_collaboration.admin' => true,
            'sulu_collaboration.jsconfig' => true,
            'sulu_collaboration.message_handler' => true,
            'sulu_contact.account_content_navigation_provider' => true,
            'sulu_contact.account_factory' => true,
            'sulu_contact.account_listener' => true,
            'sulu_contact.account_manager' => true,
            'sulu_contact.account_repository' => true,
            'sulu_contact.admin' => true,
            'sulu_contact.contact_content_navigation_provider' => true,
            'sulu_contact.contact_manager' => true,
            'sulu_contact.contact_repository' => true,
            'sulu_contact.contact_title_repository' => true,
            'sulu_contact.content.contact' => true,
            'sulu_contact.country_repository' => true,
            'sulu_contact.customer_manager' => true,
            'sulu_contact.doctrine.invalidation_listener' => true,
            'sulu_contact.js_config' => true,
            'sulu_contact.reference_store.account' => true,
            'sulu_contact.reference_store.contact' => true,
            'sulu_contact.smart_content.data_provider.account' => true,
            'sulu_contact.smart_content.data_provider.contact' => true,
            'sulu_contact.twig' => true,
            'sulu_contact.twig.cache' => true,
            'sulu_contact.util.id_converter' => true,
            'sulu_contact.util.index_comparator' => true,
            'sulu_content.admin' => true,
            'sulu_content.command.cleanup_history' => true,
            'sulu_content.command.maintain_resource_locator' => true,
            'sulu_content.compat.serializer.handler.page_bridge' => true,
            'sulu_content.compat.structure.legacy_property_factory' => true,
            'sulu_content.content_navigation_provider' => true,
            'sulu_content.content_repository' => true,
            'sulu_content.content_repository.event_subscriber' => true,
            'sulu_content.document.serializer.handler.extension_container' => true,
            'sulu_content.document.serializer.handler.structure' => true,
            'sulu_content.document.serializer.subscriber.extension_container' => true,
            'sulu_content.document.serializer.subscriber.locale' => true,
            'sulu_content.document.serializer.subscriber.parent_behavior' => true,
            'sulu_content.document.serializer.subscriber.path_behavior' => true,
            'sulu_content.document.serializer.subscriber.redirect_type_behavior' => true,
            'sulu_content.document.serializer.subscriber.shadow_locale_behavior' => true,
            'sulu_content.document.serializer.subscriber.structure_behavior' => true,
            'sulu_content.document.serializer.subscriber.workflow_stage_behavior' => true,
            'sulu_content.document.subscriber.content' => true,
            'sulu_content.document_manager.content_initializer' => true,
            'sulu_content.export.manager' => true,
            'sulu_content.export.webspace' => true,
            'sulu_content.export_twig_extension' => true,
            'sulu_content.extension.excerpt' => true,
            'sulu_content.extension.manager' => true,
            'sulu_content.extension.seo' => true,
            'sulu_content.import.manager' => true,
            'sulu_content.import.webspace' => true,
            'sulu_content.import.webspace.xliff12' => true,
            'sulu_content.js_config.server' => true,
            'sulu_content.js_config.webspace_input_types' => true,
            'sulu_content.jsconfig' => true,
            'sulu_content.jsconfig.apps' => true,
            'sulu_content.jsconfig.texteditor_toolbar' => true,
            'sulu_content.link_tag' => true,
            'sulu_content.link_tag.js_config' => true,
            'sulu_content.link_tag.page_provider' => true,
            'sulu_content.link_tag.provider_pool' => true,
            'sulu_content.node_repository' => true,
            'sulu_content.permission_listener' => true,
            'sulu_content.preview.defaults_provider' => true,
            'sulu_content.preview.object_provider' => true,
            'sulu_content.reference_store.content' => true,
            'sulu_content.rl_repository' => true,
            'sulu_content.roles_content_navigation_provider' => true,
            'sulu_content.search.event_subscriber.blame_timestamp' => true,
            'sulu_content.search.event_subscriber.structure' => true,
            'sulu_content.search.metadata.provider.structure' => true,
            'sulu_content.search.reindex.structure_provider' => true,
            'sulu_content.smart_content.content_type' => true,
            'sulu_content.smart_content.data_provider.content' => true,
            'sulu_content.smart_content.data_provider.content.proxy_factory' => true,
            'sulu_content.smart_content.data_provider.content.query_builder' => true,
            'sulu_content.smart_content.data_provider_pool' => true,
            'sulu_content.structure.factory' => true,
            'sulu_content.teaser.content_type' => true,
            'sulu_content.teaser.manager' => true,
            'sulu_content.teaser.provider.content' => true,
            'sulu_content.teaser.provider_pool' => true,
            'sulu_content.teaser.serializer.event_subscriber' => true,
            'sulu_content.twig_extension' => true,
            'sulu_content.webspace.serializer.event_subscriber' => true,
            'sulu_content.webspace_navigation_provider' => true,
            'sulu_core.array_serialization_visitor' => true,
            'sulu_core.build.builder.cache' => true,
            'sulu_core.build.builder.database' => true,
            'sulu_core.build.builder.fixtures' => true,
            'sulu_core.build.builder.node_order' => true,
            'sulu_core.build.builder.phpcr' => true,
            'sulu_core.build.builder.phpcr_migrations' => true,
            'sulu_core.cache.memoize' => true,
            'sulu_core.cache.memoize.cache' => true,
            'sulu_core.doctrine.references' => true,
            'sulu_core.doctrine_list_builder_factory' => true,
            'sulu_core.doctrine_rest_helper' => true,
            'sulu_core.list_builder.field_descriptor_factory' => true,
            'sulu_core.list_builder.metadata.file_locator' => true,
            'sulu_core.list_builder.metadata.parameter_bag' => true,
            'sulu_core.list_builder.metadata.provider.chain' => true,
            'sulu_core.list_builder.metadata.provider.doctrine' => true,
            'sulu_core.list_builder.metadata.provider.doctrine.cache' => true,
            'sulu_core.list_builder.metadata.provider.doctrine.driver.xml' => true,
            'sulu_core.list_builder.metadata.provider.doctrine.factory' => true,
            'sulu_core.list_builder.metadata.provider.general' => true,
            'sulu_core.list_builder.metadata.provider.general.cache' => true,
            'sulu_core.list_builder.metadata.provider.general.driver.xml' => true,
            'sulu_core.list_builder.metadata.provider.general.event_subscriber' => true,
            'sulu_core.list_builder.metadata.provider.general.factory' => true,
            'sulu_core.list_rest_helper' => true,
            'sulu_core.proxy_manager.configuration' => true,
            'sulu_core.request_processor.admin' => true,
            'sulu_core.rest.datetime_handler' => true,
            'sulu_core.rest.exception_wrapper_handler' => true,
            'sulu_core.rest.view_handler.csv' => true,
            'sulu_core.rest_helper' => true,
            'sulu_core.webspace.document_manager.webspace_initializer' => true,
            'sulu_core.webspace.loader.delegator' => true,
            'sulu_core.webspace.loader.resolver' => true,
            'sulu_core.webspace.loader.xml.1.0' => true,
            'sulu_core.webspace.loader.xml.1.1' => true,
            'sulu_core.webspace.request_analyzer' => true,
            'sulu_core.webspace.settings_manager' => true,
            'sulu_core.webspace.url_provider' => true,
            'sulu_core.webspace.url_provider.default' => true,
            'sulu_core.webspace.webspace_manager' => true,
            'sulu_core.webspace.webspace_manager.url_replacer' => true,
            'sulu_custom_urls.admin' => true,
            'sulu_custom_urls.domain_generator' => true,
            'sulu_custom_urls.initializer' => true,
            'sulu_custom_urls.invalidate.subscriber' => true,
            'sulu_custom_urls.manager' => true,
            'sulu_custom_urls.repository' => true,
            'sulu_custom_urls.serializer.event_subscriber' => true,
            'sulu_custom_urls.subscriber' => true,
            'sulu_custom_urls.url_provider' => true,
            'sulu_custom_urls.webspace_navigation_provider' => true,
            'sulu_document_manager.admin' => true,
            'sulu_document_manager.command.fixtures_load' => true,
            'sulu_document_manager.command.initialize' => true,
            'sulu_document_manager.data_fixtures.executor' => true,
            'sulu_document_manager.data_fixtures.loader' => true,
            'sulu_document_manager.decorated_default_session' => true,
            'sulu_document_manager.decorated_live_session' => true,
            'sulu_document_manager.document.subscriber.compat.content_mapper' => true,
            'sulu_document_manager.document.subscriber.extension' => true,
            'sulu_document_manager.document.subscriber.fallback_localization' => true,
            'sulu_document_manager.document.subscriber.order' => true,
            'sulu_document_manager.document.subscriber.publish' => true,
            'sulu_document_manager.document.subscriber.robot' => true,
            'sulu_document_manager.document.subscriber.route' => true,
            'sulu_document_manager.document.subscriber.security' => true,
            'sulu_document_manager.document.subscriber.shadow_copy_properties' => true,
            'sulu_document_manager.document.subscriber.shadow_locale' => true,
            'sulu_document_manager.document.subscriber.target' => true,
            'sulu_document_manager.document.subscriber.title' => true,
            'sulu_document_manager.document.subscriber.webspace' => true,
            'sulu_document_manager.document.subscriber.workflow_stage' => true,
            'sulu_document_manager.document_inspector' => true,
            'sulu_document_manager.document_manager' => true,
            'sulu_document_manager.document_registry' => true,
            'sulu_document_manager.event_dispatcher' => true,
            'sulu_document_manager.initializer' => true,
            'sulu_document_manager.initializer.root_path_purge_initializer' => true,
            'sulu_document_manager.initializer.workspace' => true,
            'sulu_document_manager.metadata_factory' => true,
            'sulu_document_manager.metadata_factory.base' => true,
            'sulu_document_manager.namespace_registry' => true,
            'sulu_document_manager.node_helper' => true,
            'sulu_document_manager.node_manager' => true,
            'sulu_document_manager.path_builder' => true,
            'sulu_document_manager.path_segment_registry' => true,
            'sulu_document_manager.property_encoder' => true,
            'sulu_document_manager.proxy_factory' => true,
            'sulu_document_manager.proxy_manager.factory.ghost' => true,
            'sulu_document_manager.routing.version_loader' => true,
            'sulu_document_manager.serializer.handler.children_collection' => true,
            'sulu_document_manager.serializer.subscriber.children_behavior' => true,
            'sulu_document_manager.serializer.subscriber.document' => true,
            'sulu_document_manager.serializer.subscriber.proxy' => true,
            'sulu_document_manager.session_manager' => true,
            'sulu_document_manager.slugifier' => true,
            'sulu_document_manager.subscriber.behavior.alias' => true,
            'sulu_document_manager.subscriber.behavior.auto_name' => true,
            'sulu_document_manager.subscriber.behavior.base_path' => true,
            'sulu_document_manager.subscriber.behavior.filing' => true,
            'sulu_document_manager.subscriber.behavior.path' => true,
            'sulu_document_manager.subscriber.behavior.path.explicit' => true,
            'sulu_document_manager.subscriber.behavior.remove_content' => true,
            'sulu_document_manager.subscriber.core.instantiator' => true,
            'sulu_document_manager.subscriber.core.mapping' => true,
            'sulu_document_manager.subscriber.core.registrator' => true,
            'sulu_document_manager.subscriber.phpcr.find' => true,
            'sulu_document_manager.subscriber.phpcr.general' => true,
            'sulu_document_manager.subscriber.phpcr.mixin' => true,
            'sulu_document_manager.subscriber.phpcr.query' => true,
            'sulu_document_manager.subscriber.phpcr.refresh' => true,
            'sulu_document_manager.subscriber.phpcr.remove' => true,
            'sulu_document_manager.subscriber.phpcr.reorder' => true,
            'sulu_document_manager.subscriber.security' => true,
            'sulu_document_manager.suscriber.behavior.author' => true,
            'sulu_document_manager.suscriber.behavior.blame' => true,
            'sulu_document_manager.suscriber.behavior.children' => true,
            'sulu_document_manager.suscriber.behavior.locale' => true,
            'sulu_document_manager.suscriber.behavior.node_name' => true,
            'sulu_document_manager.suscriber.behavior.parent' => true,
            'sulu_document_manager.suscriber.behavior.timestamp' => true,
            'sulu_document_manager.suscriber.behavior.uuid' => true,
            'sulu_hash.auditable_hasher' => true,
            'sulu_hash.event_subscriber.serializer' => true,
            'sulu_hash.request_hash_checker' => true,
            'sulu_http_cache.cache_lifetime.resolver' => true,
            'sulu_http_cache.event_subscriber.invalidation' => true,
            'sulu_http_cache.proxy_client.symfony' => true,
            'sulu_http_cache.proxy_client.varnish' => true,
            'sulu_location.admin' => true,
            'sulu_location.content.type.location' => true,
            'sulu_location.controller.geoloactor' => true,
            'sulu_location.gelocator.service.nominatim' => true,
            'sulu_location.geolocator.guzzle.client' => true,
            'sulu_location.geolocator.manager' => true,
            'sulu_location.geolocator.service.google' => true,
            'sulu_location.map_manager' => true,
            'sulu_markup.parser' => true,
            'sulu_markup.parser.delegating_html_extractor' => true,
            'sulu_markup.parser.html_extractor' => true,
            'sulu_markup.response_listener' => true,
            'sulu_markup.tag.registry' => true,
            'sulu_media.adapter' => true,
            'sulu_media.admin' => true,
            'sulu_media.admin.content_navigation_provider' => true,
            'sulu_media.collection_manager' => true,
            'sulu_media.collection_repository' => true,
            'sulu_media.disposition_type.resolver' => true,
            'sulu_media.doctrine.invalidation_listener' => true,
            'sulu_media.file_validator' => true,
            'sulu_media.file_version_meta_repository' => true,
            'sulu_media.format_cache' => true,
            'sulu_media.format_cache_clearer' => true,
            'sulu_media.format_manager' => true,
            'sulu_media.format_options_manager' => true,
            'sulu_media.format_options_repository' => true,
            'sulu_media.image.converter' => true,
            'sulu_media.image.cropper' => true,
            'sulu_media.image.focus' => true,
            'sulu_media.image.media_extractor' => true,
            'sulu_media.image.scaler' => true,
            'sulu_media.image.transformation.blur' => true,
            'sulu_media.image.transformation.crop' => true,
            'sulu_media.image.transformation.gamma' => true,
            'sulu_media.image.transformation.grayscale' => true,
            'sulu_media.image.transformation.negative' => true,
            'sulu_media.image.transformation.paste' => true,
            'sulu_media.image.transformation.sharpen' => true,
            'sulu_media.image.transformation_pool' => true,
            'sulu_media.js_config' => true,
            'sulu_media.markup' => true,
            'sulu_media.media_manager' => true,
            'sulu_media.permission_listener' => true,
            'sulu_media.reference_store.media' => true,
            'sulu_media.search.subscriber.media' => true,
            'sulu_media.search.subscriber.structure_media' => true,
            'sulu_media.security_context' => true,
            'sulu_media.smart_content.data_provider.media' => true,
            'sulu_media.smart_content.data_provider.media.repository' => true,
            'sulu_media.storage' => true,
            'sulu_media.storage.file_system' => true,
            'sulu_media.system_collections.builder' => true,
            'sulu_media.system_collections.cache' => true,
            'sulu_media.system_collections.manager' => true,
            'sulu_media.twig_extension.disposition_type' => true,
            'sulu_media.twig_extension.media' => true,
            'sulu_media.type.media_selection' => true,
            'sulu_media.type_manager' => true,
            'sulu_media.video_thumbnail_generator' => true,
            'sulu_navigationContext.document.subscriber.navigation_context' => true,
            'sulu_preview.admin' => true,
            'sulu_preview.js_config' => true,
            'sulu_preview.preview' => true,
            'sulu_preview.preview.kernel_factory' => true,
            'sulu_preview.preview.message_component' => true,
            'sulu_preview.preview.renderer' => true,
            'sulu_redirect_type.document.subscriber.redirect_type' => true,
            'sulu_resource_segment.document.subscriber.resource_segment' => true,
            'sulu_route.chain_generator' => true,
            'sulu_route.content_type' => true,
            'sulu_route.generator.expression_token_provider' => true,
            'sulu_route.generator.route_generator' => true,
            'sulu_route.manager.conflict_resolver.auto_increment' => true,
            'sulu_route.manager.route_manager' => true,
            'sulu_route.routing.defaults_provider' => true,
            'sulu_route.routing.proxy_factory' => true,
            'sulu_search.admin' => true,
            'sulu_search.build.index' => true,
            'sulu_search.controller.search' => true,
            'sulu_search.index_configuration_provider' => true,
            'sulu_search.search.factory' => true,
            'sulu_security.access_control_manager' => true,
            'sulu_security.admin' => true,
            'sulu_security.authentication_entry_point' => true,
            'sulu_security.authentication_handler' => true,
            'sulu_security.build.user' => true,
            'sulu_security.contacts_content_navigation_provider' => true,
            'sulu_security.doctrine_access_control_provider' => true,
            'sulu_security.document.serializer.subscriber.security' => true,
            'sulu_security.event_listener.security' => true,
            'sulu_security.group_repository' => true,
            'sulu_security.js_config' => true,
            'sulu_security.last_login_listener' => true,
            'sulu_security.mask_converter' => true,
            'sulu_security.permission_controller' => true,
            'sulu_security.phpcr_access_control_provider' => true,
            'sulu_security.profile_controller' => true,
            'sulu_security.roles_content_navigation_provider' => true,
            'sulu_security.salt_generator' => true,
            'sulu_security.security_checker' => true,
            'sulu_security.security_context_voter' => true,
            'sulu_security.serializer.handler.secured_entity' => true,
            'sulu_security.token_generator' => true,
            'sulu_security.twig_extension.user' => true,
            'sulu_security.twig_extension.user.cache' => true,
            'sulu_security.user_locale_listener' => true,
            'sulu_security.user_manager' => true,
            'sulu_security.user_provider' => true,
            'sulu_security.user_repository' => true,
            'sulu_security.user_setting_repository' => true,
            'sulu_snippet.admin' => true,
            'sulu_snippet.content.snippet' => true,
            'sulu_snippet.content_navigation_provider' => true,
            'sulu_snippet.controller.snippet' => true,
            'sulu_snippet.default_snippet.manager' => true,
            'sulu_snippet.document.snippet_initializer' => true,
            'sulu_snippet.export.snippet' => true,
            'sulu_snippet.form.snippet' => true,
            'sulu_snippet.import.snippet' => true,
            'sulu_snippet.import.webspace.xliff12' => true,
            'sulu_snippet.jsconfig' => true,
            'sulu_snippet.reference_store.snippet' => true,
            'sulu_snippet.repository' => true,
            'sulu_snippet.resolver' => true,
            'sulu_snippet.smart_content.snippet_data_provider' => true,
            'sulu_snippet.twig.area_snippet' => true,
            'sulu_snippet.twig.default_snippet' => true,
            'sulu_snippet.twig.snippet' => true,
            'sulu_snippet.twig.snippet.memoized' => true,
            'sulu_snippet.webspace_navigation_provider' => true,
            'sulu_tag.admin' => true,
            'sulu_tag.content.type.tag_list' => true,
            'sulu_tag.reference_store.tag' => true,
            'sulu_tag.search.tags_converter' => true,
            'sulu_tag.tag_manager' => true,
            'sulu_tag.tag_repository' => true,
            'sulu_tag.tag_request_handler' => true,
            'sulu_tag.twig_extension' => true,
            'sulu_translate.export' => true,
            'sulu_website.admin' => true,
            'sulu_website.analytics.event_subscriber' => true,
            'sulu_website.analytics.manager' => true,
            'sulu_website.analytics.repository' => true,
            'sulu_website.domains.repository' => true,
            'sulu_website.event_listener.translator' => true,
            'sulu_website.http_cache.clearer' => true,
            'sulu_website.navigation_mapper' => true,
            'sulu_website.reference_store_pool' => true,
            'sulu_website.resolver.parameter' => true,
            'sulu_website.resolver.request_analyzer' => true,
            'sulu_website.resolver.structure' => true,
            'sulu_website.resolver.template_attribute' => true,
            'sulu_website.router_listener' => true,
            'sulu_website.routing.portal_loader' => true,
            'sulu_website.routing.request_listener' => true,
            'sulu_website.sitemap' => true,
            'sulu_website.sitemap.pages_provider' => true,
            'sulu_website.sitemap.pool' => true,
            'sulu_website.sitemap.xml_dumper' => true,
            'sulu_website.sitemap.xml_renderer' => true,
            'sulu_website.translator.request_analyzer' => true,
            'sulu_website.twig.content' => true,
            'sulu_website.twig.content.memoized' => true,
            'sulu_website.twig.content_path' => true,
            'sulu_website.twig.meta' => true,
            'sulu_website.twig.navigation' => true,
            'sulu_website.twig.navigation.memoized' => true,
            'sulu_website.twig.seo' => true,
            'sulu_website.twig.sitemap' => true,
            'sulu_website.twig.sitemap.memoized' => true,
            'sulu_website.twig.util' => true,
            'sulu_website.webspace_navigation_provider' => true,
            'sulu_websocket.admin' => true,
            'sulu_websocket.admin.message_builder' => true,
            'sulu_websocket.admin.message_dispatcher.app' => true,
            'sulu_websocket.fallback_controller' => true,
            'sulu_websocket.manager' => true,
            'swiftmailer.email_sender.listener' => true,
            'swiftmailer.mailer.default.spool' => true,
            'swiftmailer.mailer.default.transport' => true,
            'swiftmailer.mailer.default.transport.eventdispatcher' => true,
            'templating.cache_warmer.template_paths' => true,
            'templating.filename_parser' => true,
            'templating.finder' => true,
            'templating.helper.logout_url' => true,
            'templating.helper.security' => true,
            'templating.locator' => true,
            'templating.name_parser' => true,
            'translation.dumper.csv' => true,
            'translation.dumper.ini' => true,
            'translation.dumper.json' => true,
            'translation.dumper.mo' => true,
            'translation.dumper.php' => true,
            'translation.dumper.po' => true,
            'translation.dumper.qt' => true,
            'translation.dumper.res' => true,
            'translation.dumper.xliff' => true,
            'translation.dumper.yml' => true,
            'translation.extractor' => true,
            'translation.extractor.php' => true,
            'translation.loader' => true,
            'translation.loader.csv' => true,
            'translation.loader.dat' => true,
            'translation.loader.ini' => true,
            'translation.loader.json' => true,
            'translation.loader.mo' => true,
            'translation.loader.php' => true,
            'translation.loader.po' => true,
            'translation.loader.qt' => true,
            'translation.loader.res' => true,
            'translation.loader.xliff' => true,
            'translation.loader.yml' => true,
            'translation.reader' => true,
            'translation.warmer' => true,
            'translation.writer' => true,
            'translator.data_collector' => true,
            'translator.default' => true,
            'translator_listener' => true,
            'twig.cache_warmer' => true,
            'twig.command.debug' => true,
            'twig.command.lint' => true,
            'twig.form.renderer' => true,
            'twig.loader' => true,
            'twig.profile' => true,
            'twig.runtime.httpkernel' => true,
            'twig.template_cache_warmer' => true,
            'twig.translation.extractor' => true,
            'uri_signer' => true,
            'validate_request_listener' => true,
            'validator.builder' => true,
            'validator.email' => true,
            'validator.expression' => true,
            'validator.mapping.cache_warmer' => true,
            'var_dumper.cli_dumper' => true,
            'web_profiler.csp.handler' => true,
            'web_profiler.debug_toolbar' => true,
            'web_server.command.server_log' => true,
            'web_server.command.server_run' => true,
            'web_server.command.server_start' => true,
            'web_server.command.server_status' => true,
            'web_server.command.server_stop' => true,
        );
        $this->aliases = array(
            'JMS\\Serializer\\ArrayTransformerInterface' => 'jms_serializer',
            'JMS\\Serializer\\SerializerInterface' => 'jms_serializer',
            'cache.app_clearer' => 'cache.default_clearer',
            'console.command.doctrine_bundle_doctrinecachebundle_command_containscommand' => 'doctrine_cache.contains_command',
            'console.command.doctrine_bundle_doctrinecachebundle_command_deletecommand' => 'doctrine_cache.delete_command',
            'console.command.doctrine_bundle_doctrinecachebundle_command_flushcommand' => 'doctrine_cache.flush_command',
            'console.command.doctrine_bundle_doctrinecachebundle_command_statscommand' => 'doctrine_cache.stats_command',
            'console.command.dtl_bundle_phpcrmigrations_command_initializecommand' => 'phpcr_migrations.command.initialize',
            'console.command.dtl_bundle_phpcrmigrations_command_migratecommand' => 'phpcr_migrations.command.migrate',
            'console.command.dtl_bundle_phpcrmigrations_command_statuscommand' => 'phpcr_migrations.command.status',
            'console.command.massive_bundle_searchbundle_command_indexrebuildcommand' => 'massive_search.command.index_rebuild_deprecated',
            'console.command.massive_bundle_searchbundle_command_initcommand' => 'massive_search.command.init',
            'console.command.massive_bundle_searchbundle_command_purgecommand' => 'massive_search.command.purge',
            'console.command.massive_bundle_searchbundle_command_querycommand' => 'massive_search.command.query',
            'console.command.massive_bundle_searchbundle_command_reindexcommand' => 'massive_search.command.reindex',
            'console.command.massive_bundle_searchbundle_command_statuscommand' => 'massive_search.command.status',
            'console.command.sulu_bundle_contentbundle_command_cleanuphistorycommand' => 'sulu_content.command.cleanup_history',
            'console.command.sulu_bundle_contentbundle_command_maintainresourcelocatorcommand' => 'sulu_content.command.maintain_resource_locator',
            'console.command.sulu_bundle_corebundle_commandoptional_sulubuildcommand' => 'massive_build.command.build',
            'console.command.sulu_bundle_documentmanagerbundle_command_fixturesloadcommand' => 'sulu_document_manager.command.fixtures_load',
            'console.command.sulu_bundle_documentmanagerbundle_command_initializecommand' => 'sulu_document_manager.command.initialize',
            'database_connection' => 'doctrine.dbal.default_connection',
            'doctrine.orm.default_metadata_cache' => 'doctrine_cache.providers.doctrine.orm.default_metadata_cache',
            'doctrine.orm.default_query_cache' => 'doctrine_cache.providers.doctrine.orm.default_query_cache',
            'doctrine.orm.default_result_cache' => 'doctrine_cache.providers.doctrine.orm.default_result_cache',
            'doctrine.orm.entity_manager' => 'doctrine.orm.default_entity_manager',
            'doctrine_phpcr.admin.jackalope_doctrine_dbal.default_connection' => 'doctrine.dbal.default_connection',
            'doctrine_phpcr.admin.jackalope_doctrine_dbal.live_connection' => 'doctrine.dbal.default_connection',
            'doctrine_phpcr.default_session' => 'sulu_document_manager.decorated_default_session',
            'doctrine_phpcr.jackalope_doctrine_dbal.default_connection' => 'doctrine.dbal.default_connection',
            'doctrine_phpcr.jackalope_doctrine_dbal.live_connection' => 'doctrine.dbal.default_connection',
            'doctrine_phpcr.live_session' => 'sulu_document_manager.decorated_live_session',
            'doctrine_phpcr.session' => 'sulu_document_manager.decorated_default_session',
            'event_dispatcher' => 'debug.event_dispatcher',
            'fos_rest.exception_handler' => 'sulu_core.rest.exception_wrapper_handler',
            'fos_rest.inflector' => 'fos_rest.inflector.doctrine',
            'fos_rest.router' => 'router',
            'fos_rest.serializer' => 'jms_serializer',
            'fos_rest.templating' => 'templating',
            'jms_serializer.cache_naming_strategy' => 'jms_serializer.naming_strategy',
            'mailer' => 'swiftmailer.mailer.default',
            'massive_search.adapter' => 'massive_search.adapter.zend_lucene',
            'massive_search.factory' => 'sulu_search.search.factory',
            'massive_search.index_name_decorator.default' => 'massive_search.prefix_decorator',
            'router_listener' => 'sulu_website.router_listener',
            'serializer' => 'jms_serializer',
            'session.storage' => 'session.storage.native',
            'sulu.content.rlp.strategy.tree' => 'sulu.content.resource_locator.strategy.tree_leaf_edit',
            'sulu_category.category_repository' => 'sulu.repository.category',
            'sulu_category.keyword_repository' => 'sulu.repository.keyword',
            'sulu_collaboration.connection_cache' => 'doctrine_cache.providers.sulu_collaboration_connection',
            'sulu_collaboration.entity_cache' => 'doctrine_cache.providers.sulu_collaboration_entity',
            'sulu_document_manager.default_session' => 'sulu_document_manager.decorated_default_session',
            'sulu_document_manager.live_session' => 'sulu_document_manager.decorated_live_session',
            'sulu_http_cache.handler' => 'sulu_http_cache.handler.aggregate',
            'sulu_http_cache.proxy_client' => 'sulu_http_cache.proxy_client.symfony',
            'sulu_preview.preview.cache' => 'doctrine_cache.providers.sulu_preview',
            'sulu_website.exception.controller' => 'twig.controller.exception',
            'sulu_websocket.websocket.cache' => 'doctrine_cache.providers.sulu_websocket',
            'swiftmailer.mailer' => 'swiftmailer.mailer.default',
            'swiftmailer.plugin.messagelogger' => 'swiftmailer.mailer.default.plugin.messagelogger',
            'swiftmailer.spool' => 'swiftmailer.mailer.default.spool',
            'swiftmailer.transport' => 'swiftmailer.mailer.default.transport',
            'swiftmailer.transport.real' => 'swiftmailer.mailer.default.transport.real',
            'translator' => 'sulu_website.translator.request_analyzer',
        );
    }

    public function getRemovedIds()
    {
        return require $this->containerDir.\DIRECTORY_SEPARATOR.'removed-ids.php';
    }

    public function compile()
    {
        throw new LogicException('You cannot compile a dumped container that was already compiled.');
    }

    public function isCompiled()
    {
        return true;
    }

    public function isFrozen()
    {
        @trigger_error(sprintf('The %s() method is deprecated since Symfony 3.3 and will be removed in 4.0. Use the isCompiled() method instead.', __METHOD__), E_USER_DEPRECATED);

        return true;
    }

    protected function load($file, $lazyLoad = true)
    {
        return require $this->containerDir.\DIRECTORY_SEPARATOR.$file;
    }

    protected function createProxy($class, \Closure $factory)
    {
        class_exists($class, false) || $this->load("{$class}.php");

        return $factory();
    }

    /**
     * Gets the public 'cache.app' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_AppService()
    {
        $a = new \Symfony\Component\Cache\Adapter\FilesystemAdapter('wSwyqqc5In', 0, ($this->targetDirs[0].'/pools'));
        $a->setLogger(${($_ = isset($this->services['monolog.logger.cache']) ? $this->services['monolog.logger.cache'] : $this->getMonolog_Logger_CacheService()) && false ?: '_'});

        return $this->services['cache.app'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter($a);
    }

    /**
     * Gets the public 'cache.system' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_SystemService()
    {
        return $this->services['cache.system'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('2HWJhk2Xjr', 0, $this->getParameter('container.build_id'), ($this->targetDirs[0].'/pools'), ${($_ = isset($this->services['monolog.logger.cache']) ? $this->services['monolog.logger.cache'] : $this->getMonolog_Logger_CacheService()) && false ?: '_'}));
    }

    /**
     * Gets the public 'data_collector.dump' shared service.
     *
     * @return \Symfony\Component\HttpKernel\DataCollector\DumpDataCollector
     */
    protected function getDataCollector_DumpService()
    {
        return $this->services['data_collector.dump'] = new \Symfony\Component\HttpKernel\DataCollector\DumpDataCollector(${($_ = isset($this->services['debug.stopwatch']) ? $this->services['debug.stopwatch'] : $this->services['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true)) && false ?: '_'}, ${($_ = isset($this->services['debug.file_link_formatter']) ? $this->services['debug.file_link_formatter'] : $this->getDebug_FileLinkFormatterService()) && false ?: '_'}, 'UTF-8', ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()) && false ?: '_'}, NULL);
    }

    /**
     * Gets the public 'doctrine' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Registry
     */
    protected function getDoctrineService()
    {
        return $this->services['doctrine'] = new \Doctrine\Bundle\DoctrineBundle\Registry($this, $this->parameters['doctrine.connections'], $this->parameters['doctrine.entity_managers'], 'default', 'default');
    }

    /**
     * Gets the public 'doctrine.dbal.default_connection' shared service.
     *
     * @return \Doctrine\DBAL\Connection
     */
    protected function getDoctrine_Dbal_DefaultConnectionService()
    {
        $a = ${($_ = isset($this->services['sulu_contact.doctrine.invalidation_listener']) ? $this->services['sulu_contact.doctrine.invalidation_listener'] : $this->getSuluContact_Doctrine_InvalidationListenerService()) && false ?: '_'};
        $b = ${($_ = isset($this->services['sulu_media.doctrine.invalidation_listener']) ? $this->services['sulu_media.doctrine.invalidation_listener'] : $this->getSuluMedia_Doctrine_InvalidationListenerService()) && false ?: '_'};

        $c = new \Doctrine\DBAL\Logging\LoggerChain();
        $c->addLogger(new \Symfony\Bridge\Doctrine\Logger\DbalLogger(${($_ = isset($this->services['monolog.logger.doctrine']) ? $this->services['monolog.logger.doctrine'] : $this->getMonolog_Logger_DoctrineService()) && false ?: '_'}, ${($_ = isset($this->services['debug.stopwatch']) ? $this->services['debug.stopwatch'] : $this->services['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true)) && false ?: '_'}));
        $c->addLogger(${($_ = isset($this->services['doctrine.dbal.logger.profiling.default']) ? $this->services['doctrine.dbal.logger.profiling.default'] : $this->services['doctrine.dbal.logger.profiling.default'] = new \Doctrine\DBAL\Logging\DebugStack()) && false ?: '_'});

        $d = new \Doctrine\DBAL\Configuration();
        $d->setSQLLogger($c);

        $e = new \Doctrine\ORM\Tools\ResolveTargetEntityListener();
        $e->addResolveTargetEntity('Sulu\\Bundle\\MediaBundle\\Entity\\CollectionInterface', 'Sulu\\Bundle\\MediaBundle\\Entity\\Collection', array());
        $e->addResolveTargetEntity('Sulu\\Bundle\\ContactBundle\\Entity\\AccountInterface', 'Sulu\\Bundle\\ContactBundle\\Entity\\Account', array());
        $e->addResolveTargetEntity('Sulu\\Component\\Contact\\Model\\ContactInterface', 'Sulu\\Bundle\\ContactBundle\\Entity\\Contact', array());
        $e->addResolveTargetEntity('Sulu\\Bundle\\MediaBundle\\Entity\\MediaInterface', 'Sulu\\Bundle\\MediaBundle\\Entity\\Media', array());
        $e->addResolveTargetEntity('Sulu\\Component\\Security\\Authentication\\UserInterface', 'Sulu\\Bundle\\SecurityBundle\\Entity\\User', array());
        $e->addResolveTargetEntity('Sulu\\Component\\Security\\Authentication\\RoleInterface', 'Sulu\\Bundle\\SecurityBundle\\Entity\\Role', array());
        $e->addResolveTargetEntity('Sulu\\Component\\Security\\Authentication\\RoleSettingInterface', 'Sulu\\Bundle\\SecurityBundle\\Entity\\RoleSetting', array());
        $e->addResolveTargetEntity('Sulu\\Component\\Security\\Authorization\\AccessControl\\AccessControlInterface', 'Sulu\\Bundle\\SecurityBundle\\Entity\\AccessControl', array());
        $e->addResolveTargetEntity('Sulu\\Bundle\\CategoryBundle\\Entity\\CategoryInterface', 'Sulu\\Bundle\\CategoryBundle\\Entity\\Category', array());
        $e->addResolveTargetEntity('Sulu\\Bundle\\CategoryBundle\\Entity\\CategoryMetaInterface', 'Sulu\\Bundle\\CategoryBundle\\Entity\\CategoryMeta', array());
        $e->addResolveTargetEntity('Sulu\\Bundle\\CategoryBundle\\Entity\\CategoryTranslationInterface', 'Sulu\\Bundle\\CategoryBundle\\Entity\\CategoryTranslation', array());
        $e->addResolveTargetEntity('Sulu\\Bundle\\CategoryBundle\\Entity\\KeywordInterface', 'Sulu\\Bundle\\CategoryBundle\\Entity\\Keyword', array());
        $e->addResolveTargetEntity('Sulu\\Bundle\\TagBundle\\Tag\\TagInterface', 'Sulu\\Bundle\\TagBundle\\Entity\\Tag', array());
        $e->addResolveTargetEntity('Sulu\\Bundle\\RouteBundle\\Model\\RouteInterface', 'Sulu\\Bundle\\RouteBundle\\Entity\\Route', array());

        $f = new \Gedmo\Tree\TreeListener();
        $f->setAnnotationReader(${($_ = isset($this->services['annotation_reader']) ? $this->services['annotation_reader'] : $this->getAnnotationReaderService()) && false ?: '_'});

        $g = new \Symfony\Bridge\Doctrine\ContainerAwareEventManager($this);
        $g->addEventSubscriber(${($_ = isset($this->services['sulu.persistence.event_subscriber.orm.metadata']) ? $this->services['sulu.persistence.event_subscriber.orm.metadata'] : $this->getSulu_Persistence_EventSubscriber_Orm_MetadataService()) && false ?: '_'});
        $g->addEventSubscriber(${($_ = isset($this->services['sulu_core.doctrine.references']) ? $this->services['sulu_core.doctrine.references'] : $this->getSuluCore_Doctrine_ReferencesService()) && false ?: '_'});
        $g->addEventSubscriber($e);
        $g->addEventSubscriber($f);
        $g->addEventSubscriber(${($_ = isset($this->services['massive_search.search.event_subscriber.doctrine_orm']) ? $this->services['massive_search.search.event_subscriber.doctrine_orm'] : $this->getMassiveSearch_Search_EventSubscriber_DoctrineOrmService()) && false ?: '_'});
        $g->addEventSubscriber(${($_ = isset($this->services['sulu.persistence.event_subscriber.orm.timestampable']) ? $this->services['sulu.persistence.event_subscriber.orm.timestampable'] : $this->services['sulu.persistence.event_subscriber.orm.timestampable'] = new \Sulu\Component\Persistence\EventSubscriber\ORM\TimestampableSubscriber()) && false ?: '_'});
        $g->addEventSubscriber(${($_ = isset($this->services['sulu.persistence.event_subscriber.orm.user_blame']) ? $this->services['sulu.persistence.event_subscriber.orm.user_blame'] : $this->getSulu_Persistence_EventSubscriber_Orm_UserBlameService()) && false ?: '_'});
        $g->addEventListener(array(0 => 'loadClassMetadata'), ${($_ = isset($this->services['doctrine.orm.default_listeners.attach_entity_listeners']) ? $this->services['doctrine.orm.default_listeners.attach_entity_listeners'] : $this->services['doctrine.orm.default_listeners.attach_entity_listeners'] = new \Doctrine\ORM\Tools\AttachEntityListenersListener()) && false ?: '_'});
        $g->addEventListener(array(0 => 'postGenerateSchema'), 'doctrine_phpcr.jackalope_doctrine_dbal.schema_listener');
        $g->addEventListener(array(0 => 'postGenerateSchema'), 'doctrine_phpcr.jackalope_doctrine_dbal.schema_listener');
        $g->addEventListener(array(0 => 'postGenerateSchema'), 'doctrine_phpcr.jackalope_doctrine_dbal.schema_listener');
        $g->addEventListener(array(0 => 'postGenerateSchema'), 'doctrine_phpcr.jackalope_doctrine_dbal.schema_listener');
        $g->addEventListener(array(0 => 'postPersist'), ${($_ = isset($this->services['sulu_contact.account_listener']) ? $this->services['sulu_contact.account_listener'] : $this->services['sulu_contact.account_listener'] = new \Sulu\Bundle\ContactBundle\EventListener\AccountListener()) && false ?: '_'});
        $g->addEventListener(array(0 => 'postPersist'), $a);
        $g->addEventListener(array(0 => 'postUpdate'), $a);
        $g->addEventListener(array(0 => 'preRemove'), $a);
        $g->addEventListener(array(0 => 'postPersist'), $b);
        $g->addEventListener(array(0 => 'postUpdate'), $b);
        $g->addEventListener(array(0 => 'preRemove'), $b);

        return $this->services['doctrine.dbal.default_connection'] = ${($_ = isset($this->services['doctrine.dbal.connection_factory']) ? $this->services['doctrine.dbal.connection_factory'] : $this->services['doctrine.dbal.connection_factory'] = new \Doctrine\Bundle\DoctrineBundle\ConnectionFactory(array())) && false ?: '_'}->createConnection(array('driver' => 'pdo_mysql', 'host' => '127.0.0.1', 'port' => NULL, 'dbname' => 'sulu', 'user' => 'root', 'password' => NULL, 'charset' => 'UTF8', 'driverOptions' => array(), 'serverVersion' => 5.5, 'defaultTableOptions' => array()), $d, $g, array());
    }

    /**
     * Gets the public 'doctrine.orm.default_entity_manager' shared service.
     *
     * @return \Doctrine\ORM\EntityManager
     */
    protected function getDoctrine_Orm_DefaultEntityManagerService($lazyLoad = true)
    {
        if ($lazyLoad) {
            return $this->services['doctrine.orm.default_entity_manager'] = $this->createProxy('EntityManager_9a5be93', function () {
                return \EntityManager_9a5be93::staticProxyConstructor(function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
                    $wrappedInstance = $this->getDoctrine_Orm_DefaultEntityManagerService(false);

                    $proxy->setProxyInitializer(null);

                    return true;
                });
            });
        }

        $a = new \Doctrine\ORM\Mapping\Driver\SimplifiedXmlDriver(array(($this->targetDirs[4].'\\vendor\\gedmo\\doctrine-extensions\\lib\\Gedmo\\Tree\\Entity') => 'Gedmo\\Tree\\Entity', ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\ContactBundle\\Resources\\config\\doctrine') => 'Sulu\\Bundle\\ContactBundle\\Entity', ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\MediaBundle\\Resources\\config\\doctrine') => 'Sulu\\Bundle\\MediaBundle\\Entity', ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\SecurityBundle\\Resources\\config\\doctrine') => 'Sulu\\Bundle\\SecurityBundle\\Entity', ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\CategoryBundle\\Resources\\config\\doctrine') => 'Sulu\\Bundle\\CategoryBundle\\Entity', ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\TagBundle\\Resources\\config\\doctrine') => 'Sulu\\Bundle\\TagBundle\\Entity', ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\WebsiteBundle\\Resources\\config\\doctrine') => 'Sulu\\Bundle\\WebsiteBundle\\Entity', ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\RouteBundle\\Resources\\config\\doctrine') => 'Sulu\\Bundle\\RouteBundle\\Entity'));
        $a->setGlobalBasename('mapping');

        $b = new \Doctrine\Common\Persistence\Mapping\Driver\MappingDriverChain();
        $b->addDriver($a, 'Gedmo\\Tree\\Entity');
        $b->addDriver($a, 'Sulu\\Bundle\\ContactBundle\\Entity');
        $b->addDriver($a, 'Sulu\\Bundle\\MediaBundle\\Entity');
        $b->addDriver($a, 'Sulu\\Bundle\\SecurityBundle\\Entity');
        $b->addDriver($a, 'Sulu\\Bundle\\CategoryBundle\\Entity');
        $b->addDriver($a, 'Sulu\\Bundle\\TagBundle\\Entity');
        $b->addDriver($a, 'Sulu\\Bundle\\WebsiteBundle\\Entity');
        $b->addDriver($a, 'Sulu\\Bundle\\RouteBundle\\Entity');
        $b->addDriver(new \Doctrine\ORM\Mapping\Driver\AnnotationDriver(${($_ = isset($this->services['annotation_reader']) ? $this->services['annotation_reader'] : $this->getAnnotationReaderService()) && false ?: '_'}, array(0 => ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\CoreBundle\\Entity'))), 'Sulu\\Bundle\\CoreBundle\\Entity');

        $c = new \Doctrine\ORM\Configuration();
        $c->setEntityNamespaces(array('GedmoTree' => 'Gedmo\\Tree\\Entity', 'SuluCoreBundle' => 'Sulu\\Bundle\\CoreBundle\\Entity', 'SuluContactBundle' => 'Sulu\\Bundle\\ContactBundle\\Entity', 'SuluMediaBundle' => 'Sulu\\Bundle\\MediaBundle\\Entity', 'SuluSecurityBundle' => 'Sulu\\Bundle\\SecurityBundle\\Entity', 'SuluCategoryBundle' => 'Sulu\\Bundle\\CategoryBundle\\Entity', 'SuluTagBundle' => 'Sulu\\Bundle\\TagBundle\\Entity', 'SuluWebsiteBundle' => 'Sulu\\Bundle\\WebsiteBundle\\Entity', 'SuluRouteBundle' => 'Sulu\\Bundle\\RouteBundle\\Entity'));
        $c->setMetadataCacheImpl(${($_ = isset($this->services['doctrine_cache.providers.doctrine.orm.default_metadata_cache']) ? $this->services['doctrine_cache.providers.doctrine.orm.default_metadata_cache'] : $this->getDoctrineCache_Providers_Doctrine_Orm_DefaultMetadataCacheService()) && false ?: '_'});
        $c->setQueryCacheImpl(${($_ = isset($this->services['doctrine_cache.providers.doctrine.orm.default_query_cache']) ? $this->services['doctrine_cache.providers.doctrine.orm.default_query_cache'] : $this->getDoctrineCache_Providers_Doctrine_Orm_DefaultQueryCacheService()) && false ?: '_'});
        $c->setResultCacheImpl(${($_ = isset($this->services['doctrine_cache.providers.doctrine.orm.default_result_cache']) ? $this->services['doctrine_cache.providers.doctrine.orm.default_result_cache'] : $this->getDoctrineCache_Providers_Doctrine_Orm_DefaultResultCacheService()) && false ?: '_'});
        $c->setMetadataDriverImpl($b);
        $c->setProxyDir(($this->targetDirs[0].'/doctrine/orm/Proxies'));
        $c->setProxyNamespace('Proxies');
        $c->setAutoGenerateProxyClasses(true);
        $c->setClassMetadataFactoryName('Doctrine\\ORM\\Mapping\\ClassMetadataFactory');
        $c->setDefaultRepositoryClassName('Doctrine\\ORM\\EntityRepository');
        $c->setNamingStrategy(new \Doctrine\ORM\Mapping\UnderscoreNamingStrategy());
        $c->setQuoteStrategy(new \Doctrine\ORM\Mapping\DefaultQuoteStrategy());
        $c->setEntityListenerResolver(${($_ = isset($this->services['doctrine.orm.default_entity_listener_resolver']) ? $this->services['doctrine.orm.default_entity_listener_resolver'] : $this->services['doctrine.orm.default_entity_listener_resolver'] = new \Doctrine\Bundle\DoctrineBundle\Mapping\ContainerAwareEntityListenerResolver($this)) && false ?: '_'});
        $c->setRepositoryFactory(new \Doctrine\Bundle\DoctrineBundle\Repository\ContainerRepositoryFactory(${($_ = isset($this->services['service_locator.sr6ctxe']) ? $this->services['service_locator.sr6ctxe'] : $this->services['service_locator.sr6ctxe'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array())) && false ?: '_'}));
        $c->addCustomStringFunction('group_concat', 'Oro\\ORM\\Query\\AST\\Functions\\String\\GroupConcat');
        $c->addCustomStringFunction('CAST', 'Sulu\\Component\\Rest\\DQL\\Cast');

        $instance = \Doctrine\ORM\EntityManager::create(${($_ = isset($this->services['doctrine.dbal.default_connection']) ? $this->services['doctrine.dbal.default_connection'] : $this->getDoctrine_Dbal_DefaultConnectionService()) && false ?: '_'}, $c);

        ${($_ = isset($this->services['doctrine.orm.default_manager_configurator']) ? $this->services['doctrine.orm.default_manager_configurator'] : $this->services['doctrine.orm.default_manager_configurator'] = new \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator(array(), array())) && false ?: '_'}->configure($instance);

        return $instance;
    }

    /**
     * Gets the public 'doctrine_cache.providers.doctrine.orm.default_metadata_cache' shared service.
     *
     * @return \Doctrine\Common\Cache\ArrayCache
     */
    protected function getDoctrineCache_Providers_Doctrine_Orm_DefaultMetadataCacheService()
    {
        $this->services['doctrine_cache.providers.doctrine.orm.default_metadata_cache'] = $instance = new \Doctrine\Common\Cache\ArrayCache();

        $instance->setNamespace('sf_orm_default_bb3d532aad4eead6979bd47c00929d0980d1730d76adf50b9d02827cff283714');

        return $instance;
    }

    /**
     * Gets the public 'doctrine_cache.providers.doctrine.orm.default_query_cache' shared service.
     *
     * @return \Doctrine\Common\Cache\ArrayCache
     */
    protected function getDoctrineCache_Providers_Doctrine_Orm_DefaultQueryCacheService()
    {
        $this->services['doctrine_cache.providers.doctrine.orm.default_query_cache'] = $instance = new \Doctrine\Common\Cache\ArrayCache();

        $instance->setNamespace('sf_orm_default_bb3d532aad4eead6979bd47c00929d0980d1730d76adf50b9d02827cff283714');

        return $instance;
    }

    /**
     * Gets the public 'doctrine_cache.providers.doctrine.orm.default_result_cache' shared service.
     *
     * @return \Doctrine\Common\Cache\ArrayCache
     */
    protected function getDoctrineCache_Providers_Doctrine_Orm_DefaultResultCacheService()
    {
        $this->services['doctrine_cache.providers.doctrine.orm.default_result_cache'] = $instance = new \Doctrine\Common\Cache\ArrayCache();

        $instance->setNamespace('sf_orm_default_bb3d532aad4eead6979bd47c00929d0980d1730d76adf50b9d02827cff283714');

        return $instance;
    }

    /**
     * Gets the public 'filesystem' shared service.
     *
     * @return \Symfony\Component\Filesystem\Filesystem
     */
    protected function getFilesystemService()
    {
        return $this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem();
    }

    /**
     * Gets the public 'form.factory' shared service.
     *
     * @return \Symfony\Component\Form\FormFactory
     */
    protected function getForm_FactoryService()
    {
        return $this->services['form.factory'] = new \Symfony\Component\Form\FormFactory(${($_ = isset($this->services['form.registry']) ? $this->services['form.registry'] : $this->getForm_RegistryService()) && false ?: '_'}, ${($_ = isset($this->services['form.resolved_type_factory']) ? $this->services['form.resolved_type_factory'] : $this->getForm_ResolvedTypeFactoryService()) && false ?: '_'});
    }

    /**
     * Gets the public 'hateoas.generator.registry' shared service.
     *
     * @return \Hateoas\UrlGenerator\UrlGeneratorRegistry
     */
    protected function getHateoas_Generator_RegistryService()
    {
        return $this->services['hateoas.generator.registry'] = new \Hateoas\UrlGenerator\UrlGeneratorRegistry(${($_ = isset($this->services['hateoas.generator.symfony']) ? $this->services['hateoas.generator.symfony'] : $this->getHateoas_Generator_SymfonyService()) && false ?: '_'});
    }

    /**
     * Gets the public 'hateoas.helper.link' shared service.
     *
     * @return \Hateoas\Helper\LinkHelper
     */
    protected function getHateoas_Helper_LinkService()
    {
        return $this->services['hateoas.helper.link'] = new \Hateoas\Helper\LinkHelper(${($_ = isset($this->services['hateoas.link_factory']) ? $this->services['hateoas.link_factory'] : $this->getHateoas_LinkFactoryService()) && false ?: '_'}, ${($_ = isset($this->services['hateoas.configuration.relations_repository']) ? $this->services['hateoas.configuration.relations_repository'] : $this->getHateoas_Configuration_RelationsRepositoryService()) && false ?: '_'});
    }

    /**
     * Gets the public 'http_kernel' shared service.
     *
     * @return \Symfony\Component\HttpKernel\HttpKernel
     */
    protected function getHttpKernelService()
    {
        return $this->services['http_kernel'] = new \Symfony\Component\HttpKernel\HttpKernel(${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->getDebug_EventDispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['debug.controller_resolver']) ? $this->services['debug.controller_resolver'] : $this->getDebug_ControllerResolverService()) && false ?: '_'}, ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()) && false ?: '_'}, ${($_ = isset($this->services['debug.argument_resolver']) ? $this->services['debug.argument_resolver'] : $this->getDebug_ArgumentResolverService()) && false ?: '_'});
    }

    /**
     * Gets the public 'profiler' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Profiler\Profiler
     */
    protected function getProfilerService()
    {
        $a = ${($_ = isset($this->services['monolog.logger.profiler']) ? $this->services['monolog.logger.profiler'] : $this->getMonolog_Logger_ProfilerService()) && false ?: '_'};

        $this->services['profiler'] = $instance = new \Symfony\Component\HttpKernel\Profiler\Profiler(new \Symfony\Component\HttpKernel\Profiler\FileProfilerStorage(('file:'.$this->targetDirs[0].'/profiler')), $a, true);

        $b = ${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'};

        $c = new \Symfony\Component\Cache\DataCollector\CacheDataCollector();
        $c->addInstance('cache.app', ${($_ = isset($this->services['cache.app']) ? $this->services['cache.app'] : $this->getCache_AppService()) && false ?: '_'});
        $c->addInstance('cache.system', ${($_ = isset($this->services['cache.system']) ? $this->services['cache.system'] : $this->getCache_SystemService()) && false ?: '_'});
        $c->addInstance('cache.validator', ${($_ = isset($this->services['cache.validator']) ? $this->services['cache.validator'] : $this->getCache_ValidatorService()) && false ?: '_'});
        $c->addInstance('cache.serializer', ${($_ = isset($this->services['cache.serializer']) ? $this->services['cache.serializer'] : $this->getCache_SerializerService()) && false ?: '_'});
        $c->addInstance('cache.annotations', ${($_ = isset($this->services['cache.annotations']) ? $this->services['cache.annotations'] : $this->getCache_AnnotationsService()) && false ?: '_'});

        $d = new \Doctrine\Bundle\DoctrineBundle\DataCollector\DoctrineDataCollector(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->getDoctrineService()) && false ?: '_'});
        $d->addLogger('default', ${($_ = isset($this->services['doctrine.dbal.logger.profiling.default']) ? $this->services['doctrine.dbal.logger.profiling.default'] : $this->services['doctrine.dbal.logger.profiling.default'] = new \Doctrine\DBAL\Logging\DebugStack()) && false ?: '_'});

        $e = new \Symfony\Component\HttpKernel\DataCollector\ConfigDataCollector();
        if ($this->has('kernel')) {
            $e->setKernel($b);
        }

        $instance->add(${($_ = isset($this->services['data_collector.request']) ? $this->services['data_collector.request'] : $this->services['data_collector.request'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RequestDataCollector()) && false ?: '_'});
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\TimeDataCollector($b, ${($_ = isset($this->services['debug.stopwatch']) ? $this->services['debug.stopwatch'] : $this->services['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true)) && false ?: '_'}));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\MemoryDataCollector());
        $instance->add(new \Symfony\Component\Validator\DataCollector\ValidatorDataCollector(${($_ = isset($this->services['validator']) ? $this->services['validator'] : $this->getValidatorService()) && false ?: '_'}));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\AjaxDataCollector());
        $instance->add(${($_ = isset($this->services['data_collector.form']) ? $this->services['data_collector.form'] : $this->getDataCollector_FormService()) && false ?: '_'});
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\ExceptionDataCollector());
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\LoggerDataCollector($a, ($this->targetDirs[0].'/adminDevDebugProjectContainer')));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\EventDataCollector(${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->getDebug_EventDispatcherService()) && false ?: '_'}));
        $instance->add(${($_ = isset($this->services['data_collector.router']) ? $this->services['data_collector.router'] : $this->services['data_collector.router'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector()) && false ?: '_'});
        $instance->add($c);
        $instance->add(${($_ = isset($this->services['data_collector.translation']) ? $this->services['data_collector.translation'] : $this->getDataCollector_TranslationService()) && false ?: '_'});
        $instance->add(new \Symfony\Bundle\SecurityBundle\DataCollector\SecurityDataCollector(${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage()) && false ?: '_'}, ${($_ = isset($this->services['security.role_hierarchy']) ? $this->services['security.role_hierarchy'] : $this->services['security.role_hierarchy'] = new \Symfony\Component\Security\Core\Role\RoleHierarchy(array())) && false ?: '_'}, ${($_ = isset($this->services['security.logout_url_generator']) ? $this->services['security.logout_url_generator'] : $this->getSecurity_LogoutUrlGeneratorService()) && false ?: '_'}, ${($_ = isset($this->services['debug.security.access.decision_manager']) ? $this->services['debug.security.access.decision_manager'] : $this->getDebug_Security_Access_DecisionManagerService()) && false ?: '_'}, ${($_ = isset($this->services['security.firewall.map']) ? $this->services['security.firewall.map'] : $this->getSecurity_Firewall_MapService()) && false ?: '_'}, ${($_ = isset($this->services['security.firewall']) ? $this->services['security.firewall'] : $this->getSecurity_FirewallService()) && false ?: '_'}));
        $instance->add(new \Symfony\Bridge\Twig\DataCollector\TwigDataCollector(${($_ = isset($this->services['twig.profile']) ? $this->services['twig.profile'] : $this->services['twig.profile'] = new \Twig\Profiler\Profile()) && false ?: '_'}, ${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->getTwigService()) && false ?: '_'}));
        $instance->add($d);
        $instance->add(new \Doctrine\Bundle\PHPCRBundle\DataCollector\PHPCRDataCollector(${($_ = isset($this->services['doctrine_phpcr']) ? $this->services['doctrine_phpcr'] : $this->getDoctrinePhpcrService()) && false ?: '_'}));
        $instance->add(new \Symfony\Bundle\SwiftmailerBundle\DataCollector\MessageDataCollector($this));
        $instance->add(${($_ = isset($this->services['data_collector.dump']) ? $this->services['data_collector.dump'] : $this->getDataCollector_DumpService()) && false ?: '_'});
        $instance->add($e);

        return $instance;
    }

    /**
     * Gets the public 'request_stack' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\RequestStack
     */
    protected function getRequestStackService()
    {
        return $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack();
    }

    /**
     * Gets the public 'router' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\Router
     */
    protected function getRouterService()
    {
        $this->services['router'] = $instance = new \Symfony\Bundle\FrameworkBundle\Routing\Router($this, ($this->targetDirs[4].'\\app/config/admin/routing_dev.yml'), array('cache_dir' => $this->targetDirs[0], 'debug' => true, 'generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper', 'generator_cache_class' => 'adminDevDebugProjectContainerUrlGenerator', 'matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper', 'matcher_cache_class' => 'adminDevDebugProjectContainerUrlMatcher', 'strict_requirements' => true), ${($_ = isset($this->services['router.request_context']) ? $this->services['router.request_context'] : $this->getRouter_RequestContextService()) && false ?: '_'});

        $instance->setConfigCacheFactory(${($_ = isset($this->services['config_cache_factory']) ? $this->services['config_cache_factory'] : $this->getConfigCacheFactoryService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'security.authorization_checker' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\AuthorizationChecker
     */
    protected function getSecurity_AuthorizationCheckerService()
    {
        return $this->services['security.authorization_checker'] = new \Symfony\Component\Security\Core\Authorization\AuthorizationChecker(${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage()) && false ?: '_'}, ${($_ = isset($this->services['security.authentication.manager']) ? $this->services['security.authentication.manager'] : $this->getSecurity_Authentication_ManagerService()) && false ?: '_'}, ${($_ = isset($this->services['debug.security.access.decision_manager']) ? $this->services['debug.security.access.decision_manager'] : $this->getDebug_Security_Access_DecisionManagerService()) && false ?: '_'}, false);
    }

    /**
     * Gets the public 'security.token_storage' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage
     */
    protected function getSecurity_TokenStorageService()
    {
        return $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage();
    }

    /**
     * Gets the public 'sulu_http_cache.event_subscriber.update_response' shared service.
     *
     * @return \Sulu\Component\HttpCache\EventSubscriber\UpdateResponseSubscriber
     */
    protected function getSuluHttpCache_EventSubscriber_UpdateResponseService()
    {
        return $this->services['sulu_http_cache.event_subscriber.update_response'] = new \Sulu\Component\HttpCache\EventSubscriber\UpdateResponseSubscriber(${($_ = isset($this->services['sulu_http_cache.handler.aggregate']) ? $this->services['sulu_http_cache.handler.aggregate'] : $this->getSuluHttpCache_Handler_AggregateService()) && false ?: '_'});
    }

    /**
     * Gets the public 'sulu_http_cache.handler.aggregate' shared service.
     *
     * @return \Sulu\Component\HttpCache\Handler\AggregateHandler
     */
    protected function getSuluHttpCache_Handler_AggregateService()
    {
        return $this->services['sulu_http_cache.handler.aggregate'] = new \Sulu\Component\HttpCache\Handler\AggregateHandler(array(0 => ${($_ = isset($this->services['sulu_http_cache.handler.debug']) ? $this->services['sulu_http_cache.handler.debug'] : $this->getSuluHttpCache_Handler_DebugService()) && false ?: '_'}), ${($_ = isset($this->services['logger']) ? $this->services['logger'] : $this->getLoggerService()) && false ?: '_'});
    }

    /**
     * Gets the public 'sulu_http_cache.handler.debug' shared service.
     *
     * @return \Sulu\Component\HttpCache\Handler\DebugHandler
     */
    protected function getSuluHttpCache_Handler_DebugService()
    {
        return $this->services['sulu_http_cache.handler.debug'] = new \Sulu\Component\HttpCache\Handler\DebugHandler(${($_ = isset($this->services['sulu_http_cache.cache_lifetime.resolver']) ? $this->services['sulu_http_cache.cache_lifetime.resolver'] : $this->services['sulu_http_cache.cache_lifetime.resolver'] = new \Sulu\Component\HttpCache\CacheLifetimeResolver()) && false ?: '_'}, $this->parameters['sulu_http_cache.handler.aggregate.handlers'], 'symfony');
    }

    /**
     * Gets the public 'twig' shared service.
     *
     * @return \Twig\Environment
     */
    protected function getTwigService()
    {
        $this->services['twig'] = $instance = new \Twig\Environment(${($_ = isset($this->services['twig.loader']) ? $this->services['twig.loader'] : $this->getTwig_LoaderService()) && false ?: '_'}, array('debug' => true, 'strict_variables' => true, 'exception_controller' => 'twig.controller.exception:showAction', 'form_themes' => $this->parameters['twig.form.resources'], 'autoescape' => 'name', 'cache' => ($this->targetDirs[0].'/twig'), 'charset' => 'UTF-8', 'default_path' => ($this->targetDirs[4].'/templates'), 'paths' => array(), 'date' => array('format' => 'F j, Y H:i', 'interval_format' => '%d days', 'timezone' => NULL), 'number_format' => array('decimals' => 0, 'decimal_point' => '.', 'thousands_separator' => ',')));

        $a = ${($_ = isset($this->services['debug.stopwatch']) ? $this->services['debug.stopwatch'] : $this->services['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true)) && false ?: '_'};
        $b = ${($_ = isset($this->services['debug.file_link_formatter']) ? $this->services['debug.file_link_formatter'] : $this->getDebug_FileLinkFormatterService()) && false ?: '_'};
        $c = ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()) && false ?: '_'};

        $d = new \Symfony\Component\VarDumper\Dumper\HtmlDumper(NULL, 'UTF-8', 0);
        $d->setDisplayOptions(array('fileLinkFormat' => $b));

        $e = new \Symfony\Component\VarDumper\Dumper\HtmlDumper(NULL, 'UTF-8', 1);
        $e->setDisplayOptions(array('maxStringLength' => 4096, 'fileLinkFormat' => $b));

        $f = new \Symfony\Bridge\Twig\AppVariable();
        $f->setEnvironment('dev');
        $f->setDebug(true);
        if ($this->has('security.token_storage')) {
            $f->setTokenStorage(${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage()) && false ?: '_'});
        }
        if ($this->has('request_stack')) {
            $f->setRequestStack($c);
        }

        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\ProfilerExtension(${($_ = isset($this->services['twig.profile']) ? $this->services['twig.profile'] : $this->services['twig.profile'] = new \Twig\Profiler\Profile()) && false ?: '_'}, $a));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\TranslationExtension(${($_ = isset($this->services['sulu_website.translator.request_analyzer']) ? $this->services['sulu_website.translator.request_analyzer'] : $this->getSuluWebsite_Translator_RequestAnalyzerService()) && false ?: '_'}));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\AssetExtension(${($_ = isset($this->services['assets.packages']) ? $this->services['assets.packages'] : $this->getAssets_PackagesService()) && false ?: '_'}));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\CodeExtension($b, ($this->targetDirs[4].'\\app'), 'UTF-8'));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\RoutingExtension(${($_ = isset($this->services['router']) ? $this->services['router'] : $this->getRouterService()) && false ?: '_'}));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\YamlExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\StopwatchExtension($a, true));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\ExpressionExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpKernelExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpFoundationExtension($c, ${($_ = isset($this->services['router.request_context']) ? $this->services['router.request_context'] : $this->getRouter_RequestContextService()) && false ?: '_'}));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\FormExtension(array(0 => $this, 1 => 'twig.form.renderer')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\DumpExtension(${($_ = isset($this->services['var_dumper.cloner']) ? $this->services['var_dumper.cloner'] : $this->getVarDumper_ClonerService()) && false ?: '_'}, $d));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\LogoutUrlExtension(${($_ = isset($this->services['security.logout_url_generator']) ? $this->services['security.logout_url_generator'] : $this->getSecurity_LogoutUrlGeneratorService()) && false ?: '_'}));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\SecurityExtension(${($_ = isset($this->services['security.authorization_checker']) ? $this->services['security.authorization_checker'] : $this->getSecurity_AuthorizationCheckerService()) && false ?: '_'}));
        $instance->addExtension(new \Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension());
        $instance->addExtension(new \JMS\Serializer\Twig\SerializerRuntimeExtension());
        $instance->addExtension(${($_ = isset($this->services['hateoas.twig.link']) ? $this->services['hateoas.twig.link'] : $this->getHateoas_Twig_LinkService()) && false ?: '_'});
        $instance->addExtension(${($_ = isset($this->services['sulu_contact.twig']) ? $this->services['sulu_contact.twig'] : $this->getSuluContact_TwigService()) && false ?: '_'});
        $instance->addExtension(${($_ = isset($this->services['sulu_media.twig_extension.disposition_type']) ? $this->services['sulu_media.twig_extension.disposition_type'] : $this->services['sulu_media.twig_extension.disposition_type'] = new \Sulu\Bundle\MediaBundle\Twig\DispositionTypeTwigExtension()) && false ?: '_'});
        $instance->addExtension(${($_ = isset($this->services['sulu_media.twig_extension.media']) ? $this->services['sulu_media.twig_extension.media'] : $this->getSuluMedia_TwigExtension_MediaService()) && false ?: '_'});
        $instance->addExtension(${($_ = isset($this->services['sulu_security.twig_extension.user']) ? $this->services['sulu_security.twig_extension.user'] : $this->getSuluSecurity_TwigExtension_UserService()) && false ?: '_'});
        $instance->addExtension(${($_ = isset($this->services['sulu_category.twig_extension']) ? $this->services['sulu_category.twig_extension'] : $this->getSuluCategory_TwigExtensionService()) && false ?: '_'});
        $instance->addExtension(${($_ = isset($this->services['sulu_snippet.twig.snippet.memoized']) ? $this->services['sulu_snippet.twig.snippet.memoized'] : $this->getSuluSnippet_Twig_Snippet_MemoizedService()) && false ?: '_'});
        $instance->addExtension(${($_ = isset($this->services['sulu_snippet.twig.default_snippet']) ? $this->services['sulu_snippet.twig.default_snippet'] : $this->getSuluSnippet_Twig_DefaultSnippetService()) && false ?: '_'});
        $instance->addExtension(${($_ = isset($this->services['sulu_snippet.twig.area_snippet']) ? $this->services['sulu_snippet.twig.area_snippet'] : $this->getSuluSnippet_Twig_AreaSnippetService()) && false ?: '_'});
        $instance->addExtension(${($_ = isset($this->services['sulu_content.twig_extension']) ? $this->services['sulu_content.twig_extension'] : $this->getSuluContent_TwigExtensionService()) && false ?: '_'});
        $instance->addExtension(${($_ = isset($this->services['sulu_content.export_twig_extension']) ? $this->services['sulu_content.export_twig_extension'] : $this->getSuluContent_ExportTwigExtensionService()) && false ?: '_'});
        $instance->addExtension(${($_ = isset($this->services['sulu_tag.twig_extension']) ? $this->services['sulu_tag.twig_extension'] : $this->getSuluTag_TwigExtensionService()) && false ?: '_'});
        $instance->addExtension(${($_ = isset($this->services['sulu_website.twig.content_path']) ? $this->services['sulu_website.twig.content_path'] : $this->getSuluWebsite_Twig_ContentPathService()) && false ?: '_'});
        $instance->addExtension(${($_ = isset($this->services['sulu_website.twig.navigation.memoized']) ? $this->services['sulu_website.twig.navigation.memoized'] : $this->getSuluWebsite_Twig_Navigation_MemoizedService()) && false ?: '_'});
        $instance->addExtension(${($_ = isset($this->services['sulu_website.twig.sitemap.memoized']) ? $this->services['sulu_website.twig.sitemap.memoized'] : $this->getSuluWebsite_Twig_Sitemap_MemoizedService()) && false ?: '_'});
        $instance->addExtension(${($_ = isset($this->services['sulu_website.twig.content.memoized']) ? $this->services['sulu_website.twig.content.memoized'] : $this->getSuluWebsite_Twig_Content_MemoizedService()) && false ?: '_'});
        $instance->addExtension(${($_ = isset($this->services['sulu_website.twig.meta']) ? $this->services['sulu_website.twig.meta'] : $this->getSuluWebsite_Twig_MetaService()) && false ?: '_'});
        $instance->addExtension(${($_ = isset($this->services['sulu_website.twig.seo']) ? $this->services['sulu_website.twig.seo'] : $this->getSuluWebsite_Twig_SeoService()) && false ?: '_'});
        $instance->addExtension(${($_ = isset($this->services['sulu_website.twig.util']) ? $this->services['sulu_website.twig.util'] : $this->services['sulu_website.twig.util'] = new \Sulu\Bundle\WebsiteBundle\Twig\Core\UtilTwigExtension()) && false ?: '_'});
        $instance->addExtension(new \Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension($e));
        $instance->addGlobal('app', $f);
        $instance->addRuntimeLoader(new \Twig\RuntimeLoader\ContainerRuntimeLoader(new \Symfony\Component\DependencyInjection\ServiceLocator(array('JMS\\Serializer\\Twig\\SerializerRuntimeHelper' => function () {
            return ${($_ = isset($this->services['jms_serializer.twig_extension.serializer_runtime_helper']) ? $this->services['jms_serializer.twig_extension.serializer_runtime_helper'] : $this->load('getJmsSerializer_TwigExtension_SerializerRuntimeHelperService.php')) && false ?: '_'};
        }, 'Symfony\\Bridge\\Twig\\Extension\\HttpKernelRuntime' => function () {
            return ${($_ = isset($this->services['twig.runtime.httpkernel']) ? $this->services['twig.runtime.httpkernel'] : $this->load('getTwig_Runtime_HttpkernelService.php')) && false ?: '_'};
        }, 'Symfony\\Component\\Form\\FormRenderer' => function () {
            return ${($_ = isset($this->services['twig.form.renderer']) ? $this->services['twig.form.renderer'] : $this->load('getTwig_Form_RendererService.php')) && false ?: '_'};
        }))));
        (new \Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator('F j, Y H:i', '%d days', NULL, 0, '.', ','))->configure($instance);

        return $instance;
    }

    /**
     * Gets the public 'validator' shared service.
     *
     * @return \Symfony\Component\Validator\Validator\TraceableValidator
     */
    protected function getValidatorService()
    {
        return $this->services['validator'] = new \Symfony\Component\Validator\Validator\TraceableValidator(${($_ = isset($this->services['validator.builder']) ? $this->services['validator.builder'] : $this->getValidator_BuilderService()) && false ?: '_'}->getValidator());
    }

    /**
     * Gets the public 'var_dumper.cloner' shared service.
     *
     * @return \Symfony\Component\VarDumper\Cloner\VarCloner
     */
    protected function getVarDumper_ClonerService()
    {
        $this->services['var_dumper.cloner'] = $instance = new \Symfony\Component\VarDumper\Cloner\VarCloner();

        $instance->setMaxItems(2500);
        $instance->setMinDepth(1);
        $instance->setMaxString(-1);

        return $instance;
    }

    /**
     * Gets the private 'annotation_reader' shared service.
     *
     * @return \Doctrine\Common\Annotations\CachedReader
     */
    protected function getAnnotationReaderService()
    {
        return $this->services['annotation_reader'] = new \Doctrine\Common\Annotations\CachedReader(${($_ = isset($this->services['annotations.reader']) ? $this->services['annotations.reader'] : $this->getAnnotations_ReaderService()) && false ?: '_'}, ${($_ = isset($this->services['annotations.cache']) ? $this->services['annotations.cache'] : $this->load('getAnnotations_CacheService.php')) && false ?: '_'}, true);
    }

    /**
     * Gets the private 'annotations.reader' shared service.
     *
     * @return \Doctrine\Common\Annotations\AnnotationReader
     */
    protected function getAnnotations_ReaderService()
    {
        $this->services['annotations.reader'] = $instance = new \Doctrine\Common\Annotations\AnnotationReader();

        $a = new \Doctrine\Common\Annotations\AnnotationRegistry();
        $a->registerUniqueLoader('class_exists');

        $instance->addGlobalIgnoredName('required', $a);

        return $instance;
    }

    /**
     * Gets the private 'assets.context' shared service.
     *
     * @return \Symfony\Component\Asset\Context\RequestStackContext
     */
    protected function getAssets_ContextService()
    {
        return $this->services['assets.context'] = new \Symfony\Component\Asset\Context\RequestStackContext(${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()) && false ?: '_'}, '', false);
    }

    /**
     * Gets the private 'assets.packages' shared service.
     *
     * @return \Symfony\Component\Asset\Packages
     */
    protected function getAssets_PackagesService()
    {
        return $this->services['assets.packages'] = new \Symfony\Component\Asset\Packages(new \Symfony\Component\Asset\PathPackage('', new \Symfony\Component\Asset\VersionStrategy\EmptyVersionStrategy(), ${($_ = isset($this->services['assets.context']) ? $this->services['assets.context'] : $this->getAssets_ContextService()) && false ?: '_'}), array());
    }

    /**
     * Gets the private 'bazinga_hateoas.expression_language' shared service.
     *
     * @return \Bazinga\Bundle\HateoasBundle\ExpressionLanguage\ExpressionLanguage
     */
    protected function getBazingaHateoas_ExpressionLanguageService()
    {
        return $this->services['bazinga_hateoas.expression_language'] = new \Bazinga\Bundle\HateoasBundle\ExpressionLanguage\ExpressionLanguage();
    }

    /**
     * Gets the private 'cache.annotations' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_AnnotationsService()
    {
        return $this->services['cache.annotations'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('2YTmV2Wecq', 0, $this->getParameter('container.build_id'), ($this->targetDirs[0].'/pools'), ${($_ = isset($this->services['monolog.logger.cache']) ? $this->services['monolog.logger.cache'] : $this->getMonolog_Logger_CacheService()) && false ?: '_'}));
    }

    /**
     * Gets the private 'cache.serializer' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_SerializerService()
    {
        return $this->services['cache.serializer'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('fhh-NUOlBu', 0, $this->getParameter('container.build_id'), ($this->targetDirs[0].'/pools'), ${($_ = isset($this->services['monolog.logger.cache']) ? $this->services['monolog.logger.cache'] : $this->getMonolog_Logger_CacheService()) && false ?: '_'}));
    }

    /**
     * Gets the private 'cache.validator' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_ValidatorService()
    {
        return $this->services['cache.validator'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('US9ZRlp5tM', 0, $this->getParameter('container.build_id'), ($this->targetDirs[0].'/pools'), ${($_ = isset($this->services['monolog.logger.cache']) ? $this->services['monolog.logger.cache'] : $this->getMonolog_Logger_CacheService()) && false ?: '_'}));
    }

    /**
     * Gets the private 'config_cache_factory' shared service.
     *
     * @return \Symfony\Component\Config\ResourceCheckerConfigCacheFactory
     */
    protected function getConfigCacheFactoryService()
    {
        return $this->services['config_cache_factory'] = new \Symfony\Component\Config\ResourceCheckerConfigCacheFactory(new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['dependency_injection.config.container_parameters_resource_checker']) ? $this->services['dependency_injection.config.container_parameters_resource_checker'] : $this->services['dependency_injection.config.container_parameters_resource_checker'] = new \Symfony\Component\DependencyInjection\Config\ContainerParametersResourceChecker($this)) && false ?: '_'};
            yield 1 => ${($_ = isset($this->services['config.resource.self_checking_resource_checker']) ? $this->services['config.resource.self_checking_resource_checker'] : $this->services['config.resource.self_checking_resource_checker'] = new \Symfony\Component\Config\Resource\SelfCheckingResourceChecker()) && false ?: '_'};
        }, 2));
    }

    /**
     * Gets the private 'controller_name_converter' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser
     */
    protected function getControllerNameConverterService()
    {
        return $this->services['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'});
    }

    /**
     * Gets the private 'data_collector.form' shared service.
     *
     * @return \Symfony\Component\Form\Extension\DataCollector\FormDataCollector
     */
    protected function getDataCollector_FormService()
    {
        return $this->services['data_collector.form'] = new \Symfony\Component\Form\Extension\DataCollector\FormDataCollector(${($_ = isset($this->services['data_collector.form.extractor']) ? $this->services['data_collector.form.extractor'] : $this->services['data_collector.form.extractor'] = new \Symfony\Component\Form\Extension\DataCollector\FormDataExtractor()) && false ?: '_'});
    }

    /**
     * Gets the private 'data_collector.form.extractor' shared service.
     *
     * @return \Symfony\Component\Form\Extension\DataCollector\FormDataExtractor
     */
    protected function getDataCollector_Form_ExtractorService()
    {
        return $this->services['data_collector.form.extractor'] = new \Symfony\Component\Form\Extension\DataCollector\FormDataExtractor();
    }

    /**
     * Gets the private 'data_collector.request' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\DataCollector\RequestDataCollector
     */
    protected function getDataCollector_RequestService()
    {
        return $this->services['data_collector.request'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RequestDataCollector();
    }

    /**
     * Gets the private 'data_collector.router' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector
     */
    protected function getDataCollector_RouterService()
    {
        return $this->services['data_collector.router'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector();
    }

    /**
     * Gets the private 'data_collector.translation' shared service.
     *
     * @return \Symfony\Component\Translation\DataCollector\TranslationDataCollector
     */
    protected function getDataCollector_TranslationService()
    {
        return $this->services['data_collector.translation'] = new \Symfony\Component\Translation\DataCollector\TranslationDataCollector(${($_ = isset($this->services['translator.data_collector']) ? $this->services['translator.data_collector'] : $this->getTranslator_DataCollectorService()) && false ?: '_'});
    }

    /**
     * Gets the private 'debug.argument_resolver' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\TraceableArgumentResolver
     */
    protected function getDebug_ArgumentResolverService()
    {
        return $this->services['debug.argument_resolver'] = new \Symfony\Component\HttpKernel\Controller\TraceableArgumentResolver(new \Symfony\Component\HttpKernel\Controller\ArgumentResolver(new \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory(), new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['argument_resolver.request_attribute']) ? $this->services['argument_resolver.request_attribute'] : $this->services['argument_resolver.request_attribute'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver()) && false ?: '_'};
            yield 1 => ${($_ = isset($this->services['argument_resolver.request']) ? $this->services['argument_resolver.request'] : $this->services['argument_resolver.request'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver()) && false ?: '_'};
            yield 2 => ${($_ = isset($this->services['argument_resolver.session']) ? $this->services['argument_resolver.session'] : $this->services['argument_resolver.session'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver()) && false ?: '_'};
            yield 3 => ${($_ = isset($this->services['security.user_value_resolver']) ? $this->services['security.user_value_resolver'] : $this->load('getSecurity_UserValueResolverService.php')) && false ?: '_'};
            yield 4 => ${($_ = isset($this->services['argument_resolver.service']) ? $this->services['argument_resolver.service'] : $this->load('getArgumentResolver_ServiceService.php')) && false ?: '_'};
            yield 5 => ${($_ = isset($this->services['argument_resolver.default']) ? $this->services['argument_resolver.default'] : $this->services['argument_resolver.default'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver()) && false ?: '_'};
            yield 6 => ${($_ = isset($this->services['argument_resolver.variadic']) ? $this->services['argument_resolver.variadic'] : $this->services['argument_resolver.variadic'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver()) && false ?: '_'};
        }, 7)), ${($_ = isset($this->services['debug.stopwatch']) ? $this->services['debug.stopwatch'] : $this->services['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true)) && false ?: '_'});
    }

    /**
     * Gets the private 'debug.controller_resolver' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\TraceableControllerResolver
     */
    protected function getDebug_ControllerResolverService()
    {
        return $this->services['debug.controller_resolver'] = new \Symfony\Component\HttpKernel\Controller\TraceableControllerResolver(new \Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver($this, ${($_ = isset($this->services['controller_name_converter']) ? $this->services['controller_name_converter'] : $this->services['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'})) && false ?: '_'}, ${($_ = isset($this->services['monolog.logger.request']) ? $this->services['monolog.logger.request'] : $this->getMonolog_Logger_RequestService()) && false ?: '_'}), ${($_ = isset($this->services['debug.stopwatch']) ? $this->services['debug.stopwatch'] : $this->services['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true)) && false ?: '_'}, ${($_ = isset($this->services['debug.argument_resolver']) ? $this->services['debug.argument_resolver'] : $this->getDebug_ArgumentResolverService()) && false ?: '_'});
    }

    /**
     * Gets the private 'debug.debug_handlers_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener
     */
    protected function getDebug_DebugHandlersListenerService()
    {
        return $this->services['debug.debug_handlers_listener'] = new \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener(NULL, ${($_ = isset($this->services['monolog.logger.php']) ? $this->services['monolog.logger.php'] : $this->getMonolog_Logger_PhpService()) && false ?: '_'}, -1, -1, true, ${($_ = isset($this->services['debug.file_link_formatter']) ? $this->services['debug.file_link_formatter'] : $this->getDebug_FileLinkFormatterService()) && false ?: '_'}, true);
    }

    /**
     * Gets the private 'debug.event_dispatcher' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher
     */
    protected function getDebug_EventDispatcherService()
    {
        $this->services['debug.event_dispatcher'] = $instance = new \Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher(new \Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher($this), ${($_ = isset($this->services['debug.stopwatch']) ? $this->services['debug.stopwatch'] : $this->services['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true)) && false ?: '_'}, ${($_ = isset($this->services['monolog.logger.event']) ? $this->services['monolog.logger.event'] : $this->getMonolog_Logger_EventService()) && false ?: '_'});

        $instance->addListener('kernel.controller', array(0 => function () {
            return ${($_ = isset($this->services['data_collector.router']) ? $this->services['data_collector.router'] : $this->services['data_collector.router'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector()) && false ?: '_'};
        }, 1 => 'onKernelController'), 0);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['fos_rest.body_listener']) ? $this->services['fos_rest.body_listener'] : $this->getFosRest_BodyListenerService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 10);
        $instance->addListener('massive_search.index', array(0 => function () {
            return ${($_ = isset($this->services['massive_search.events.index_listener']) ? $this->services['massive_search.events.index_listener'] : $this->load('getMassiveSearch_Events_IndexListenerService.php')) && false ?: '_'};
        }, 1 => 'onIndex'), 0);
        $instance->addListener('massive_search.deindex', array(0 => function () {
            return ${($_ = isset($this->services['massive_search.events.deindex_listener']) ? $this->services['massive_search.events.deindex_listener'] : $this->load('getMassiveSearch_Events_DeindexListenerService.php')) && false ?: '_'};
        }, 1 => 'onDeindex'), 0);
        $instance->addListener('massive_search.index_rebuild', array(0 => function () {
            return ${($_ = isset($this->services['massive_search.events.zend_rebuild']) ? $this->services['massive_search.events.zend_rebuild'] : $this->load('getMassiveSearch_Events_ZendRebuildService.php')) && false ?: '_'};
        }, 1 => 'onIndexRebuild'), -999);
        $instance->addListener('sulu_security.permission_update', array(0 => function () {
            return ${($_ = isset($this->services['sulu_media.permission_listener']) ? $this->services['sulu_media.permission_listener'] : $this->load('getSuluMedia_PermissionListenerService.php')) && false ?: '_'};
        }, 1 => 'onPermissionUpdate'), 0);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['sulu_security.user_locale_listener']) ? $this->services['sulu_security.user_locale_listener'] : $this->getSuluSecurity_UserLocaleListenerService()) && false ?: '_'};
        }, 1 => 'copyUserLocaleToRequest'), 0);
        $instance->addListener('kernel.controller', array(0 => function () {
            return ${($_ = isset($this->services['sulu_security.event_listener.security']) ? $this->services['sulu_security.event_listener.security'] : $this->getSuluSecurity_EventListener_SecurityService()) && false ?: '_'};
        }, 1 => 'onKernelController'), 0);
        $instance->addListener('sulu_security.permission_update', array(0 => function () {
            return ${($_ = isset($this->services['sulu_content.permission_listener']) ? $this->services['sulu_content.permission_listener'] : $this->load('getSuluContent_PermissionListenerService.php')) && false ?: '_'};
        }, 1 => 'onPermissionUpdate'), 0);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['sulu_website.routing.request_listener']) ? $this->services['sulu_website.routing.request_listener'] : $this->getSuluWebsite_Routing_RequestListenerService()) && false ?: '_'};
        }, 1 => 'onRequest'), 0);
        $instance->addListener('sulu.preview.pre-render', array(0 => function () {
            return ${($_ = isset($this->services['sulu_website.event_listener.translator']) ? $this->services['sulu_website.event_listener.translator'] : $this->load('getSuluWebsite_EventListener_TranslatorService.php')) && false ?: '_'};
        }, 1 => 'setLocaleOnPreviewPreRender'), 0);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['sulu_markup.response_listener']) ? $this->services['sulu_markup.response_listener'] : $this->getSuluMarkup_ResponseListenerService()) && false ?: '_'};
        }, 1 => 'replaceMarkup'), -10);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['response_listener']) ? $this->services['response_listener'] : $this->services['response_listener'] = new \Symfony\Component\HttpKernel\EventListener\ResponseListener('UTF-8')) && false ?: '_'};
        }, 1 => 'onKernelResponse'), 0);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['streamed_response_listener']) ? $this->services['streamed_response_listener'] : $this->services['streamed_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener()) && false ?: '_'};
        }, 1 => 'onKernelResponse'), -1024);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['locale_listener']) ? $this->services['locale_listener'] : $this->getLocaleListenerService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 16);
        $instance->addListener('kernel.finish_request', array(0 => function () {
            return ${($_ = isset($this->services['locale_listener']) ? $this->services['locale_listener'] : $this->getLocaleListenerService()) && false ?: '_'};
        }, 1 => 'onKernelFinishRequest'), 0);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['validate_request_listener']) ? $this->services['validate_request_listener'] : $this->services['validate_request_listener'] = new \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener()) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 256);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['resolve_controller_name_subscriber']) ? $this->services['resolve_controller_name_subscriber'] : $this->getResolveControllerNameSubscriberService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 24);
        $instance->addListener('console.error', array(0 => function () {
            return ${($_ = isset($this->services['console.error_listener']) ? $this->services['console.error_listener'] : $this->load('getConsole_ErrorListenerService.php')) && false ?: '_'};
        }, 1 => 'onConsoleError'), -128);
        $instance->addListener('console.terminate', array(0 => function () {
            return ${($_ = isset($this->services['console.error_listener']) ? $this->services['console.error_listener'] : $this->load('getConsole_ErrorListenerService.php')) && false ?: '_'};
        }, 1 => 'onConsoleTerminate'), -128);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['session_listener']) ? $this->services['session_listener'] : $this->getSessionListenerService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 128);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['session_listener']) ? $this->services['session_listener'] : $this->getSessionListenerService()) && false ?: '_'};
        }, 1 => 'onKernelResponse'), -1000);
        $instance->addListener('kernel.finish_request', array(0 => function () {
            return ${($_ = isset($this->services['session_listener']) ? $this->services['session_listener'] : $this->getSessionListenerService()) && false ?: '_'};
        }, 1 => 'onFinishRequest'), 0);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['session.save_listener']) ? $this->services['session.save_listener'] : $this->services['session.save_listener'] = new \Symfony\Component\HttpKernel\EventListener\SaveSessionListener()) && false ?: '_'};
        }, 1 => 'onKernelResponse'), -1000);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['fragment.listener']) ? $this->services['fragment.listener'] : $this->getFragment_ListenerService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 48);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['translator_listener']) ? $this->services['translator_listener'] : $this->getTranslatorListenerService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 10);
        $instance->addListener('kernel.finish_request', array(0 => function () {
            return ${($_ = isset($this->services['translator_listener']) ? $this->services['translator_listener'] : $this->getTranslatorListenerService()) && false ?: '_'};
        }, 1 => 'onKernelFinishRequest'), 0);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['profiler_listener']) ? $this->services['profiler_listener'] : $this->getProfilerListenerService()) && false ?: '_'};
        }, 1 => 'onKernelResponse'), -100);
        $instance->addListener('kernel.exception', array(0 => function () {
            return ${($_ = isset($this->services['profiler_listener']) ? $this->services['profiler_listener'] : $this->getProfilerListenerService()) && false ?: '_'};
        }, 1 => 'onKernelException'), 0);
        $instance->addListener('kernel.terminate', array(0 => function () {
            return ${($_ = isset($this->services['profiler_listener']) ? $this->services['profiler_listener'] : $this->getProfilerListenerService()) && false ?: '_'};
        }, 1 => 'onKernelTerminate'), -1024);
        $instance->addListener('kernel.controller', array(0 => function () {
            return ${($_ = isset($this->services['data_collector.request']) ? $this->services['data_collector.request'] : $this->services['data_collector.request'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RequestDataCollector()) && false ?: '_'};
        }, 1 => 'onKernelController'), 0);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['data_collector.request']) ? $this->services['data_collector.request'] : $this->services['data_collector.request'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RequestDataCollector()) && false ?: '_'};
        }, 1 => 'onKernelResponse'), 0);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['debug.debug_handlers_listener']) ? $this->services['debug.debug_handlers_listener'] : $this->getDebug_DebugHandlersListenerService()) && false ?: '_'};
        }, 1 => 'configure'), 2048);
        $instance->addListener('console.command', array(0 => function () {
            return ${($_ = isset($this->services['debug.debug_handlers_listener']) ? $this->services['debug.debug_handlers_listener'] : $this->getDebug_DebugHandlersListenerService()) && false ?: '_'};
        }, 1 => 'configure'), 2048);
        $instance->addListener('console.command', array(0 => function () {
            return ${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->getMonolog_Handler_ConsoleService()) && false ?: '_'};
        }, 1 => 'onCommand'), 255);
        $instance->addListener('console.terminate', array(0 => function () {
            return ${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->getMonolog_Handler_ConsoleService()) && false ?: '_'};
        }, 1 => 'onTerminate'), -255);
        $instance->addListener('console.command', array(0 => function () {
            return ${($_ = isset($this->services['monolog.handler.console_very_verbose']) ? $this->services['monolog.handler.console_very_verbose'] : $this->getMonolog_Handler_ConsoleVeryVerboseService()) && false ?: '_'};
        }, 1 => 'onCommand'), 255);
        $instance->addListener('console.terminate', array(0 => function () {
            return ${($_ = isset($this->services['monolog.handler.console_very_verbose']) ? $this->services['monolog.handler.console_very_verbose'] : $this->getMonolog_Handler_ConsoleVeryVerboseService()) && false ?: '_'};
        }, 1 => 'onTerminate'), -255);
        $instance->addListener('kernel.exception', array(0 => function () {
            return ${($_ = isset($this->services['swiftmailer.email_sender.listener']) ? $this->services['swiftmailer.email_sender.listener'] : $this->load('getSwiftmailer_EmailSender_ListenerService.php')) && false ?: '_'};
        }, 1 => 'onException'), 0);
        $instance->addListener('kernel.terminate', array(0 => function () {
            return ${($_ = isset($this->services['swiftmailer.email_sender.listener']) ? $this->services['swiftmailer.email_sender.listener'] : $this->load('getSwiftmailer_EmailSender_ListenerService.php')) && false ?: '_'};
        }, 1 => 'onTerminate'), 0);
        $instance->addListener('console.error', array(0 => function () {
            return ${($_ = isset($this->services['swiftmailer.email_sender.listener']) ? $this->services['swiftmailer.email_sender.listener'] : $this->load('getSwiftmailer_EmailSender_ListenerService.php')) && false ?: '_'};
        }, 1 => 'onException'), 0);
        $instance->addListener('console.terminate', array(0 => function () {
            return ${($_ = isset($this->services['swiftmailer.email_sender.listener']) ? $this->services['swiftmailer.email_sender.listener'] : $this->load('getSwiftmailer_EmailSender_ListenerService.php')) && false ?: '_'};
        }, 1 => 'onTerminate'), 0);
        $instance->addListener('kernel.controller', array(0 => function () {
            return ${($_ = isset($this->services['sensio_framework_extra.controller.listener']) ? $this->services['sensio_framework_extra.controller.listener'] : $this->getSensioFrameworkExtra_Controller_ListenerService()) && false ?: '_'};
        }, 1 => 'onKernelController'), 0);
        $instance->addListener('kernel.controller', array(0 => function () {
            return ${($_ = isset($this->services['sensio_framework_extra.converter.listener']) ? $this->services['sensio_framework_extra.converter.listener'] : $this->getSensioFrameworkExtra_Converter_ListenerService()) && false ?: '_'};
        }, 1 => 'onKernelController'), 0);
        $instance->addListener('kernel.controller', array(0 => function () {
            return ${($_ = isset($this->services['sensio_framework_extra.view.listener']) ? $this->services['sensio_framework_extra.view.listener'] : $this->services['sensio_framework_extra.view.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener($this)) && false ?: '_'};
        }, 1 => 'onKernelController'), -128);
        $instance->addListener('kernel.view', array(0 => function () {
            return ${($_ = isset($this->services['sensio_framework_extra.view.listener']) ? $this->services['sensio_framework_extra.view.listener'] : $this->services['sensio_framework_extra.view.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener($this)) && false ?: '_'};
        }, 1 => 'onKernelView'), 0);
        $instance->addListener('kernel.controller', array(0 => function () {
            return ${($_ = isset($this->services['sensio_framework_extra.cache.listener']) ? $this->services['sensio_framework_extra.cache.listener'] : $this->services['sensio_framework_extra.cache.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener()) && false ?: '_'};
        }, 1 => 'onKernelController'), 0);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['sensio_framework_extra.cache.listener']) ? $this->services['sensio_framework_extra.cache.listener'] : $this->services['sensio_framework_extra.cache.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener()) && false ?: '_'};
        }, 1 => 'onKernelResponse'), 0);
        $instance->addListener('kernel.controller', array(0 => function () {
            return ${($_ = isset($this->services['sensio_framework_extra.security.listener']) ? $this->services['sensio_framework_extra.security.listener'] : $this->getSensioFrameworkExtra_Security_ListenerService()) && false ?: '_'};
        }, 1 => 'onKernelController'), 0);
        $instance->addListener('kernel.exception', array(0 => function () {
            return ${($_ = isset($this->services['fos_rest.exception_listener']) ? $this->services['fos_rest.exception_listener'] : $this->load('getFosRest_ExceptionListenerService.php')) && false ?: '_'};
        }, 1 => 'onKernelException'), -128);
        $instance->addListener('massive_search.index_rebuild', array(0 => function () {
            return ${($_ = isset($this->services['massive_search.search.event_subscriber.purge_subscriber']) ? $this->services['massive_search.search.event_subscriber.purge_subscriber'] : $this->load('getMassiveSearch_Search_EventSubscriber_PurgeSubscriberService.php')) && false ?: '_'};
        }, 1 => 'purgeIndexes'), 500);
        $instance->addListener('massive_search.pre_index', array(0 => function () {
            return ${($_ = isset($this->services['sulu_media.search.subscriber.structure_media']) ? $this->services['sulu_media.search.subscriber.structure_media'] : $this->load('getSuluMedia_Search_Subscriber_StructureMediaService.php')) && false ?: '_'};
        }, 1 => 'handlePreIndex'), 0);
        $instance->addListener('massive_search.pre_index', array(0 => function () {
            return ${($_ = isset($this->services['sulu_media.search.subscriber.media']) ? $this->services['sulu_media.search.subscriber.media'] : $this->load('getSuluMedia_Search_Subscriber_MediaService.php')) && false ?: '_'};
        }, 1 => 'handlePreIndex'), 0);
        $instance->addListener('security.interactive_login', array(0 => function () {
            return ${($_ = isset($this->services['sulu_security.last_login_listener']) ? $this->services['sulu_security.last_login_listener'] : $this->load('getSuluSecurity_LastLoginListenerService.php')) && false ?: '_'};
        }, 1 => 'onSecurityInteractiveLogin'), 0);
        $instance->addListener('massive_search.pre_index', array(0 => function () {
            return ${($_ = isset($this->services['sulu_content.search.event_subscriber.blame_timestamp']) ? $this->services['sulu_content.search.event_subscriber.blame_timestamp'] : $this->load('getSuluContent_Search_EventSubscriber_BlameTimestampService.php')) && false ?: '_'};
        }, 1 => 'handleBlameTimestamp'), 0);
        $instance->addListener('massive_search.hit', array(0 => function () {
            return ${($_ = isset($this->services['sulu_content.search.event_subscriber.blame_timestamp']) ? $this->services['sulu_content.search.event_subscriber.blame_timestamp'] : $this->load('getSuluContent_Search_EventSubscriber_BlameTimestampService.php')) && false ?: '_'};
        }, 1 => 'handleBlameTimestampHitMapping'), 0);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['sulu_website.router_listener']) ? $this->services['sulu_website.router_listener'] : $this->getSuluWebsite_RouterListenerService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 32);
        $instance->addListener('kernel.finish_request', array(0 => function () {
            return ${($_ = isset($this->services['sulu_website.router_listener']) ? $this->services['sulu_website.router_listener'] : $this->getSuluWebsite_RouterListenerService()) && false ?: '_'};
        }, 1 => 'onKernelFinishRequest'), 0);
        $instance->addListener('kernel.terminate', array(0 => function () {
            return ${($_ = isset($this->services['sulu_http_cache.event_subscriber.flush']) ? $this->services['sulu_http_cache.event_subscriber.flush'] : $this->load('getSuluHttpCache_EventSubscriber_FlushService.php')) && false ?: '_'};
        }, 1 => 'onTerminate'), 0);
        $instance->addListener('console.terminate', array(0 => function () {
            return ${($_ = isset($this->services['sulu_http_cache.event_subscriber.flush']) ? $this->services['sulu_http_cache.event_subscriber.flush'] : $this->load('getSuluHttpCache_EventSubscriber_FlushService.php')) && false ?: '_'};
        }, 1 => 'onTerminate'), 0);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['sulu_http_cache.event_subscriber.update_response']) ? $this->services['sulu_http_cache.event_subscriber.update_response'] : $this->getSuluHttpCache_EventSubscriber_UpdateResponseService()) && false ?: '_'};
        }, 1 => 'onResponse'), 10);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['web_profiler.debug_toolbar']) ? $this->services['web_profiler.debug_toolbar'] : $this->getWebProfiler_DebugToolbarService()) && false ?: '_'};
        }, 1 => 'onKernelResponse'), -128);
        $instance->addListener('console.command', array(0 => function () {
            return ${($_ = isset($this->services['debug.dump_listener']) ? $this->services['debug.dump_listener'] : $this->load('getDebug_DumpListenerService.php')) && false ?: '_'};
        }, 1 => 'configure'), 1024);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['security.rememberme.response_listener']) ? $this->services['security.rememberme.response_listener'] : $this->services['security.rememberme.response_listener'] = new \Symfony\Component\Security\Http\RememberMe\ResponseListener()) && false ?: '_'};
        }, 1 => 'onKernelResponse'), 0);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['security.firewall']) ? $this->services['security.firewall'] : $this->getSecurity_FirewallService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 8);
        $instance->addListener('kernel.finish_request', array(0 => function () {
            return ${($_ = isset($this->services['security.firewall']) ? $this->services['security.firewall'] : $this->getSecurity_FirewallService()) && false ?: '_'};
        }, 1 => 'onKernelFinishRequest'), 0);

        return $instance;
    }

    /**
     * Gets the private 'debug.file_link_formatter' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Debug\FileLinkFormatter
     */
    protected function getDebug_FileLinkFormatterService()
    {
        return $this->services['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL, ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()) && false ?: '_'}, $this->targetDirs[4], function () {
            return ${($_ = isset($this->services['debug.file_link_formatter.url_format']) ? $this->services['debug.file_link_formatter.url_format'] : $this->load('getDebug_FileLinkFormatter_UrlFormatService.php')) && false ?: '_'};
        });
    }

    /**
     * Gets the private 'debug.log_processor' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Processor\DebugProcessor
     */
    protected function getDebug_LogProcessorService()
    {
        return $this->services['debug.log_processor'] = new \Symfony\Bridge\Monolog\Processor\DebugProcessor();
    }

    /**
     * Gets the private 'debug.security.access.decision_manager' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\TraceableAccessDecisionManager
     */
    protected function getDebug_Security_Access_DecisionManagerService()
    {
        return $this->services['debug.security.access.decision_manager'] = new \Symfony\Component\Security\Core\Authorization\TraceableAccessDecisionManager(new \Symfony\Component\Security\Core\Authorization\AccessDecisionManager(new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['security.access.authenticated_voter']) ? $this->services['security.access.authenticated_voter'] : $this->load('getSecurity_Access_AuthenticatedVoterService.php')) && false ?: '_'};
            yield 1 => ${($_ = isset($this->services['security.access.simple_role_voter']) ? $this->services['security.access.simple_role_voter'] : $this->services['security.access.simple_role_voter'] = new \Symfony\Component\Security\Core\Authorization\Voter\RoleVoter()) && false ?: '_'};
            yield 2 => ${($_ = isset($this->services['security.access.expression_voter']) ? $this->services['security.access.expression_voter'] : $this->load('getSecurity_Access_ExpressionVoterService.php')) && false ?: '_'};
            yield 3 => ${($_ = isset($this->services['sulu_security.security_context_voter']) ? $this->services['sulu_security.security_context_voter'] : $this->load('getSuluSecurity_SecurityContextVoterService.php')) && false ?: '_'};
        }, 4), 'unanimous', true, true));
    }

    /**
     * Gets the private 'debug.stopwatch' shared service.
     *
     * @return \Symfony\Component\Stopwatch\Stopwatch
     */
    protected function getDebug_StopwatchService()
    {
        return $this->services['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true);
    }

    /**
     * Gets the private 'doctrine.dbal.connection_factory' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\ConnectionFactory
     */
    protected function getDoctrine_Dbal_ConnectionFactoryService()
    {
        return $this->services['doctrine.dbal.connection_factory'] = new \Doctrine\Bundle\DoctrineBundle\ConnectionFactory(array());
    }

    /**
     * Gets the private 'doctrine.dbal.logger.profiling.default' shared service.
     *
     * @return \Doctrine\DBAL\Logging\DebugStack
     */
    protected function getDoctrine_Dbal_Logger_Profiling_DefaultService()
    {
        return $this->services['doctrine.dbal.logger.profiling.default'] = new \Doctrine\DBAL\Logging\DebugStack();
    }

    /**
     * Gets the private 'doctrine.orm.default_entity_listener_resolver' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Mapping\ContainerAwareEntityListenerResolver
     */
    protected function getDoctrine_Orm_DefaultEntityListenerResolverService()
    {
        return $this->services['doctrine.orm.default_entity_listener_resolver'] = new \Doctrine\Bundle\DoctrineBundle\Mapping\ContainerAwareEntityListenerResolver($this);
    }

    /**
     * Gets the private 'doctrine.orm.default_listeners.attach_entity_listeners' shared service.
     *
     * @return \Doctrine\ORM\Tools\AttachEntityListenersListener
     */
    protected function getDoctrine_Orm_DefaultListeners_AttachEntityListenersService()
    {
        return $this->services['doctrine.orm.default_listeners.attach_entity_listeners'] = new \Doctrine\ORM\Tools\AttachEntityListenersListener();
    }

    /**
     * Gets the private 'doctrine.orm.default_manager_configurator' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator
     */
    protected function getDoctrine_Orm_DefaultManagerConfiguratorService()
    {
        return $this->services['doctrine.orm.default_manager_configurator'] = new \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator(array(), array());
    }

    /**
     * Gets the private 'doctrine.orm.validator_initializer' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Validator\DoctrineInitializer
     */
    protected function getDoctrine_Orm_ValidatorInitializerService()
    {
        return $this->services['doctrine.orm.validator_initializer'] = new \Symfony\Bridge\Doctrine\Validator\DoctrineInitializer(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->getDoctrineService()) && false ?: '_'});
    }

    /**
     * Gets the private 'doctrine_phpcr' shared service.
     *
     * @return \Doctrine\Bundle\PHPCRBundle\ManagerRegistry
     */
    protected function getDoctrinePhpcrService()
    {
        $this->services['doctrine_phpcr'] = $instance = new \Doctrine\Bundle\PHPCRBundle\ManagerRegistry('PHPCR', $this->parameters['doctrine_phpcr.sessions'], array(), 'default', '', 'Doctrine\\Common\\Proxy\\Proxy');

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the private 'doctrine_phpcr.jackalope.repository.default' shared service.
     *
     * @return \Jackalope\Repository
     */
    protected function getDoctrinePhpcr_Jackalope_Repository_DefaultService()
    {
        return $this->services['doctrine_phpcr.jackalope.repository.default'] = ${($_ = isset($this->services['doctrine_phpcr.jackalope.repository.factory.service.doctrinedbal']) ? $this->services['doctrine_phpcr.jackalope.repository.factory.service.doctrinedbal'] : $this->services['doctrine_phpcr.jackalope.repository.factory.service.doctrinedbal'] = new \Jackalope\RepositoryFactoryDoctrineDBAL()) && false ?: '_'}->getRepository(array('jackalope.doctrine_dbal_connection' => ${($_ = isset($this->services['doctrine.dbal.default_connection']) ? $this->services['doctrine.dbal.default_connection'] : $this->getDoctrine_Dbal_DefaultConnectionService()) && false ?: '_'}, 'jackalope.check_login_on_server' => false));
    }

    /**
     * Gets the private 'doctrine_phpcr.jackalope.repository.factory.service.doctrinedbal' shared service.
     *
     * @return \Jackalope\RepositoryFactoryDoctrineDBAL
     */
    protected function getDoctrinePhpcr_Jackalope_Repository_Factory_Service_DoctrinedbalService()
    {
        return $this->services['doctrine_phpcr.jackalope.repository.factory.service.doctrinedbal'] = new \Jackalope\RepositoryFactoryDoctrineDBAL();
    }

    /**
     * Gets the private 'doctrine_phpcr.jackalope.repository.live' shared service.
     *
     * @return \Jackalope\Repository
     */
    protected function getDoctrinePhpcr_Jackalope_Repository_LiveService()
    {
        return $this->services['doctrine_phpcr.jackalope.repository.live'] = ${($_ = isset($this->services['doctrine_phpcr.jackalope.repository.factory.service.doctrinedbal']) ? $this->services['doctrine_phpcr.jackalope.repository.factory.service.doctrinedbal'] : $this->services['doctrine_phpcr.jackalope.repository.factory.service.doctrinedbal'] = new \Jackalope\RepositoryFactoryDoctrineDBAL()) && false ?: '_'}->getRepository(array('jackalope.doctrine_dbal_connection' => ${($_ = isset($this->services['doctrine.dbal.default_connection']) ? $this->services['doctrine.dbal.default_connection'] : $this->getDoctrine_Dbal_DefaultConnectionService()) && false ?: '_'}, 'jackalope.check_login_on_server' => false));
    }

    /**
     * Gets the private 'dubture_ffmpeg.ffmpeg' shared service.
     *
     * @return \FFMpeg\FFMpeg
     */
    protected function getDubtureFfmpeg_FfmpegService($lazyLoad = true)
    {
        if ($lazyLoad) {
            return $this->privates['dubture_ffmpeg.ffmpeg'] = $this->createProxy('FFMpeg_9c4575a', function () {
                return \FFMpeg_9c4575a::staticProxyConstructor(function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
                    $wrappedInstance = $this->getDubtureFfmpeg_FfmpegService(false);

                    $proxy->setProxyInitializer(null);

                    return true;
                });
            });
        }

        return \FFMpeg\FFMpeg::create(array('ffmpeg.binaries' => '/usr/local/bin/ffmpeg', 'ffprobe.binaries' => '/usr/local/bin/ffprobe', 'timeout' => 300, 'ffmpeg.threads' => 4), ${($_ = isset($this->services['logger']) ? $this->services['logger'] : $this->getLoggerService()) && false ?: '_'});
    }

    /**
     * Gets the private 'dubture_ffmpeg.ffprobe' shared service.
     *
     * @return \FFMpeg\FFProbe
     */
    protected function getDubtureFfmpeg_FfprobeService($lazyLoad = true)
    {
        if ($lazyLoad) {
            return $this->privates['dubture_ffmpeg.ffprobe'] = $this->createProxy('FFProbe_1c1a61a', function () {
                return \FFProbe_1c1a61a::staticProxyConstructor(function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
                    $wrappedInstance = $this->getDubtureFfmpeg_FfprobeService(false);

                    $proxy->setProxyInitializer(null);

                    return true;
                });
            });
        }

        return \FFMpeg\FFProbe::create(array('ffmpeg.binaries' => '/usr/local/bin/ffmpeg', 'ffprobe.binaries' => '/usr/local/bin/ffprobe'), ${($_ = isset($this->services['logger']) ? $this->services['logger'] : $this->getLoggerService()) && false ?: '_'});
    }

    /**
     * Gets the private 'file_locator' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Config\FileLocator
     */
    protected function getFileLocatorService()
    {
        return $this->services['file_locator'] = new \Symfony\Component\HttpKernel\Config\FileLocator(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'}, ($this->targetDirs[4].'\\app/Resources'), array(0 => ($this->targetDirs[4].'\\app')));
    }

    /**
     * Gets the private 'form.registry' shared service.
     *
     * @return \Symfony\Component\Form\FormRegistry
     */
    protected function getForm_RegistryService()
    {
        return $this->services['form.registry'] = new \Symfony\Component\Form\FormRegistry(array(0 => new \Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension(new \Symfony\Component\DependencyInjection\ServiceLocator(array('Doctrine\\Bundle\\PHPCRBundle\\Form\\Type\\PHPCRReferenceType' => function () {
            return ${($_ = isset($this->services['form.type.phpcr.reference']) ? $this->services['form.type.phpcr.reference'] : $this->load('getForm_Type_Phpcr_ReferenceService.php')) && false ?: '_'};
        }, 'Sulu\\Bundle\\SnippetBundle\\Form\\SnippetType' => function () {
            return ${($_ = isset($this->services['sulu_snippet.form.snippet']) ? $this->services['sulu_snippet.form.snippet'] : $this->services['sulu_snippet.form.snippet'] = new \Sulu\Bundle\SnippetBundle\Form\SnippetType()) && false ?: '_'};
        }, 'Sulu\\Bundle\\ContentBundle\\Form\\Type\\HomeDocumentType' => function () {
            return ${($_ = isset($this->services['dtl_content.form.type.home']) ? $this->services['dtl_content.form.type.home'] : $this->services['dtl_content.form.type.home'] = new \Sulu\Bundle\ContentBundle\Form\Type\HomeDocumentType()) && false ?: '_'};
        }, 'Sulu\\Bundle\\ContentBundle\\Form\\Type\\PageDocumentType' => function () {
            return ${($_ = isset($this->services['dtl_content.form.type.page']) ? $this->services['dtl_content.form.type.page'] : $this->load('getDtlContent_Form_Type_PageService.php')) && false ?: '_'};
        }, 'Sulu\\Component\\Content\\Form\\Type\\DocumentObjectType' => function () {
            return ${($_ = isset($this->services['dtl_content.form.factory.document_type']) ? $this->services['dtl_content.form.factory.document_type'] : $this->load('getDtlContent_Form_Factory_DocumentTypeService.php')) && false ?: '_'};
        }, 'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType' => function () {
            return ${($_ = isset($this->services['form.type.entity']) ? $this->services['form.type.entity'] : $this->load('getForm_Type_EntityService.php')) && false ?: '_'};
        }, 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType' => function () {
            return ${($_ = isset($this->services['form.type.choice']) ? $this->services['form.type.choice'] : $this->load('getForm_Type_ChoiceService.php')) && false ?: '_'};
        }, 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => function () {
            return ${($_ = isset($this->services['form.type.form']) ? $this->services['form.type.form'] : $this->load('getForm_Type_FormService.php')) && false ?: '_'};
        })), array('Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['form.type_extension.form.http_foundation']) ? $this->services['form.type_extension.form.http_foundation'] : $this->load('getForm_TypeExtension_Form_HttpFoundationService.php')) && false ?: '_'};
            yield 1 => ${($_ = isset($this->services['form.type_extension.form.validator']) ? $this->services['form.type_extension.form.validator'] : $this->load('getForm_TypeExtension_Form_ValidatorService.php')) && false ?: '_'};
            yield 2 => ${($_ = isset($this->services['form.type_extension.upload.validator']) ? $this->services['form.type_extension.upload.validator'] : $this->load('getForm_TypeExtension_Upload_ValidatorService.php')) && false ?: '_'};
            yield 3 => ${($_ = isset($this->services['form.type_extension.csrf']) ? $this->services['form.type_extension.csrf'] : $this->load('getForm_TypeExtension_CsrfService.php')) && false ?: '_'};
            yield 4 => ${($_ = isset($this->services['form.type_extension.form.data_collector']) ? $this->services['form.type_extension.form.data_collector'] : $this->load('getForm_TypeExtension_Form_DataCollectorService.php')) && false ?: '_'};
        }, 5), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\RepeatedType' => new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['form.type_extension.repeated.validator']) ? $this->services['form.type_extension.repeated.validator'] : $this->services['form.type_extension.repeated.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension()) && false ?: '_'};
        }, 1), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\SubmitType' => new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['form.type_extension.submit.validator']) ? $this->services['form.type_extension.submit.validator'] : $this->services['form.type_extension.submit.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension()) && false ?: '_'};
        }, 1)), new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['form.type_guesser.validator']) ? $this->services['form.type_guesser.validator'] : $this->load('getForm_TypeGuesser_ValidatorService.php')) && false ?: '_'};
            yield 1 => ${($_ = isset($this->services['form.type_guesser.doctrine']) ? $this->services['form.type_guesser.doctrine'] : $this->load('getForm_TypeGuesser_DoctrineService.php')) && false ?: '_'};
        }, 2), NULL)), ${($_ = isset($this->services['form.resolved_type_factory']) ? $this->services['form.resolved_type_factory'] : $this->getForm_ResolvedTypeFactoryService()) && false ?: '_'});
    }

    /**
     * Gets the private 'form.resolved_type_factory' shared service.
     *
     * @return \Symfony\Component\Form\Extension\DataCollector\Proxy\ResolvedTypeFactoryDataCollectorProxy
     */
    protected function getForm_ResolvedTypeFactoryService()
    {
        return $this->services['form.resolved_type_factory'] = new \Symfony\Component\Form\Extension\DataCollector\Proxy\ResolvedTypeFactoryDataCollectorProxy(new \Symfony\Component\Form\ResolvedFormTypeFactory(), ${($_ = isset($this->services['data_collector.form']) ? $this->services['data_collector.form'] : $this->getDataCollector_FormService()) && false ?: '_'});
    }

    /**
     * Gets the private 'fos_rest.body_listener' shared service.
     *
     * @return \FOS\RestBundle\EventListener\BodyListener
     */
    protected function getFosRest_BodyListenerService()
    {
        $this->services['fos_rest.body_listener'] = $instance = new \FOS\RestBundle\EventListener\BodyListener(${($_ = isset($this->services['fos_rest.decoder_provider']) ? $this->services['fos_rest.decoder_provider'] : $this->getFosRest_DecoderProviderService()) && false ?: '_'}, false);

        $instance->setDefaultFormat(NULL);

        return $instance;
    }

    /**
     * Gets the private 'fos_rest.decoder_provider' shared service.
     *
     * @return \FOS\RestBundle\Decoder\ContainerDecoderProvider
     */
    protected function getFosRest_DecoderProviderService()
    {
        $this->services['fos_rest.decoder_provider'] = $instance = new \FOS\RestBundle\Decoder\ContainerDecoderProvider($this->parameters['fos_rest.decoders']);

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the private 'fragment.listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\FragmentListener
     */
    protected function getFragment_ListenerService()
    {
        return $this->services['fragment.listener'] = new \Symfony\Component\HttpKernel\EventListener\FragmentListener(${($_ = isset($this->services['uri_signer']) ? $this->services['uri_signer'] : $this->services['uri_signer'] = new \Symfony\Component\HttpKernel\UriSigner('ThisTokenIsNotSoSecretChangeIt')) && false ?: '_'}, '/admin/_fragments');
    }

    /**
     * Gets the private 'hateoas.configuration.provider.resolver' shared service.
     *
     * @return \Hateoas\Configuration\Provider\Resolver\ChainResolver
     */
    protected function getHateoas_Configuration_Provider_ResolverService()
    {
        return $this->services['hateoas.configuration.provider.resolver'] = new \Hateoas\Configuration\Provider\Resolver\ChainResolver(array(0 => new \Hateoas\Configuration\Provider\Resolver\MethodResolver(), 1 => new \Hateoas\Configuration\Provider\Resolver\StaticMethodResolver(), 2 => new \Hateoas\Configuration\Provider\Resolver\SymfonyContainerResolver($this)));
    }

    /**
     * Gets the private 'hateoas.configuration.relations_repository' shared service.
     *
     * @return \Hateoas\Configuration\RelationsRepository
     */
    protected function getHateoas_Configuration_RelationsRepositoryService()
    {
        $a = ${($_ = isset($this->services['jms_serializer.metadata.file_locator']) ? $this->services['jms_serializer.metadata.file_locator'] : $this->getJmsSerializer_Metadata_FileLocatorService()) && false ?: '_'};

        $b = new \Metadata\MetadataFactory(new \Metadata\Driver\DriverChain(array(0 => new \Hateoas\Configuration\Metadata\Driver\YamlDriver($a), 1 => new \Hateoas\Configuration\Metadata\Driver\XmlDriver($a), 2 => new \Hateoas\Configuration\Metadata\Driver\ExtensionDriver(new \Hateoas\Configuration\Metadata\Driver\AnnotationDriver(${($_ = isset($this->services['annotation_reader']) ? $this->services['annotation_reader'] : $this->getAnnotationReaderService()) && false ?: '_'})))), 'Metadata\\ClassHierarchyMetadata', true);
        $b->setCache(new \Metadata\Cache\FileCache(($this->targetDirs[0].'/hateoas')));

        return $this->services['hateoas.configuration.relations_repository'] = new \Hateoas\Configuration\RelationsRepository($b, new \Hateoas\Configuration\Provider\RelationProvider($b, ${($_ = isset($this->services['hateoas.configuration.provider.resolver']) ? $this->services['hateoas.configuration.provider.resolver'] : $this->getHateoas_Configuration_Provider_ResolverService()) && false ?: '_'}));
    }

    /**
     * Gets the private 'hateoas.expression.evaluator' shared service.
     *
     * @return \Bazinga\Bundle\HateoasBundle\Hateoas\Expression\LazyFunctionExpressionEvaluator
     */
    protected function getHateoas_Expression_EvaluatorService()
    {
        $this->services['hateoas.expression.evaluator'] = $instance = new \Bazinga\Bundle\HateoasBundle\Hateoas\Expression\LazyFunctionExpressionEvaluator(${($_ = isset($this->services['bazinga_hateoas.expression_language']) ? $this->services['bazinga_hateoas.expression_language'] : $this->services['bazinga_hateoas.expression_language'] = new \Bazinga\Bundle\HateoasBundle\ExpressionLanguage\ExpressionLanguage()) && false ?: '_'}, array(), $this);

        $instance->setContextVariable('container', $this);
        $instance->registerFunctionId('hateoas.expression.link');

        return $instance;
    }

    /**
     * Gets the private 'hateoas.generator.symfony' shared service.
     *
     * @return \Hateoas\UrlGenerator\SymfonyUrlGenerator
     */
    protected function getHateoas_Generator_SymfonyService()
    {
        return $this->services['hateoas.generator.symfony'] = new \Hateoas\UrlGenerator\SymfonyUrlGenerator(${($_ = isset($this->services['router']) ? $this->services['router'] : $this->getRouterService()) && false ?: '_'});
    }

    /**
     * Gets the private 'hateoas.link_factory' shared service.
     *
     * @return \Hateoas\Factory\LinkFactory
     */
    protected function getHateoas_LinkFactoryService()
    {
        return $this->services['hateoas.link_factory'] = new \Hateoas\Factory\LinkFactory(${($_ = isset($this->services['hateoas.expression.evaluator']) ? $this->services['hateoas.expression.evaluator'] : $this->getHateoas_Expression_EvaluatorService()) && false ?: '_'}, ${($_ = isset($this->services['hateoas.generator.registry']) ? $this->services['hateoas.generator.registry'] : $this->getHateoas_Generator_RegistryService()) && false ?: '_'});
    }

    /**
     * Gets the private 'hateoas.twig.link' shared service.
     *
     * @return \Hateoas\Twig\Extension\LinkExtension
     */
    protected function getHateoas_Twig_LinkService()
    {
        return $this->services['hateoas.twig.link'] = new \Hateoas\Twig\Extension\LinkExtension(${($_ = isset($this->services['hateoas.helper.link']) ? $this->services['hateoas.helper.link'] : $this->getHateoas_Helper_LinkService()) && false ?: '_'});
    }

    /**
     * Gets the private 'jms_serializer' shared service.
     *
     * @return \JMS\Serializer\Serializer
     */
    protected function getJmsSerializerService()
    {
        $a = new \JMS\Serializer\EventDispatcher\LazyEventDispatcher($this);
        $a->setListeners(array('serializer.post_serialize' => array(0 => array(0 => array(0 => 'sulu_core.list_builder.metadata.provider.general.event_subscriber', 1 => 'onPostSerialize'), 1 => NULL, 2 => 'json'), 1 => array(0 => array(0 => 'hateoas.event_subscriber.xml', 1 => 'onPostSerialize'), 1 => NULL, 2 => 'xml'), 2 => array(0 => array(0 => 'hateoas.event_subscriber.json', 1 => 'onPostSerialize'), 1 => NULL, 2 => 'json'), 3 => array(0 => array(0 => 'sulu_security.serializer.handler.secured_entity', 1 => 'onPostSerialize'), 1 => NULL, 2 => NULL), 4 => array(0 => array(0 => 'sulu_security.document.serializer.subscriber.security', 1 => 'onPostSerialize'), 1 => NULL, 2 => 'json'), 5 => array(0 => array(0 => 'sulu_content.webspace.serializer.event_subscriber', 1 => 'onPostSerialize'), 1 => NULL, 2 => 'json'), 6 => array(0 => array(0 => 'sulu_content.content_repository.event_subscriber', 1 => 'onPostSerialize'), 1 => NULL, 2 => 'json'), 7 => array(0 => array(0 => 'sulu_content.teaser.serializer.event_subscriber', 1 => 'onPostSerialize'), 1 => NULL, 2 => 'json'), 8 => array(0 => array(0 => 'sulu_content.document.serializer.subscriber.structure_behavior', 1 => 'onPostSerialize'), 1 => NULL, 2 => 'json'), 9 => array(0 => array(0 => 'sulu_content.document.serializer.subscriber.path_behavior', 1 => 'onPostSerialize'), 1 => NULL, 2 => 'json'), 10 => array(0 => array(0 => 'sulu_content.document.serializer.subscriber.parent_behavior', 1 => 'onPostSerialize'), 1 => NULL, 2 => 'json'), 11 => array(0 => array(0 => 'sulu_content.document.serializer.subscriber.locale', 1 => 'onPostSerialize'), 1 => NULL, 2 => 'json'), 12 => array(0 => array(0 => 'sulu_content.document.serializer.subscriber.shadow_locale_behavior', 1 => 'onPostSerialize'), 1 => NULL, 2 => 'json'), 13 => array(0 => array(0 => 'sulu_content.document.serializer.subscriber.redirect_type_behavior', 1 => 'onPostSerialize'), 1 => NULL, 2 => 'json'), 14 => array(0 => array(0 => 'sulu_content.document.serializer.subscriber.workflow_stage_behavior', 1 => 'onPostSerialize'), 1 => NULL, 2 => 'json'), 15 => array(0 => array(0 => 'sulu_website.analytics.event_subscriber', 1 => 'onPostSerialize'), 1 => NULL, 2 => 'json'), 16 => array(0 => array(0 => 'sulu_document_manager.serializer.subscriber.children_behavior', 1 => 'onPostSerialize'), 1 => NULL, 2 => 'json'), 17 => array(0 => array(0 => 'sulu_hash.event_subscriber.serializer', 1 => 'onPostSerialize'), 1 => NULL, 2 => NULL), 18 => array(0 => array(0 => 'sulu_custom_urls.serializer.event_subscriber', 1 => 'onPostSerialize'), 1 => NULL, 2 => 'json'), 19 => array(0 => array(0 => 'jms_serializer.stopwatch_subscriber', 1 => 'onPostSerialize'), 1 => NULL, 2 => NULL)), 'serializer.pre_serialize' => array(0 => array(0 => array(0 => 'jms_serializer.stopwatch_subscriber', 1 => 'onPreSerialize'), 1 => NULL, 2 => NULL), 1 => array(0 => array(0 => 'jms_serializer.doctrine_proxy_subscriber', 1 => 'onPreSerializeTypedProxy'), 1 => NULL, 2 => NULL), 2 => array(0 => array(0 => 'jms_serializer.doctrine_proxy_subscriber', 1 => 'onPreSerialize'), 1 => NULL, 2 => NULL), 3 => array(0 => array(0 => 'sulu_content.document.serializer.subscriber.structure_behavior', 1 => 'onPreSerialize'), 1 => NULL, 2 => NULL), 4 => array(0 => array(0 => 'sulu_content.document.serializer.subscriber.extension_container', 1 => 'onPreSerialize'), 1 => NULL, 2 => NULL), 5 => array(0 => array(0 => 'sulu_document_manager.serializer.subscriber.proxy', 1 => 'onPreSerialize'), 1 => NULL, 2 => NULL)), 'serializer.post_deserialize' => array(0 => array(0 => array(0 => 'sulu_document_manager.serializer.subscriber.document', 1 => 'onPostDeserialize'), 1 => NULL, 2 => NULL))));

        $this->services['jms_serializer'] = $instance = new \JMS\Serializer\Serializer(${($_ = isset($this->services['jms_serializer.metadata_factory']) ? $this->services['jms_serializer.metadata_factory'] : $this->getJmsSerializer_MetadataFactoryService()) && false ?: '_'}, ${($_ = isset($this->services['jms_serializer.handler_registry']) ? $this->services['jms_serializer.handler_registry'] : $this->getJmsSerializer_HandlerRegistryService()) && false ?: '_'}, ${($_ = isset($this->services['jms_serializer.unserialize_object_constructor']) ? $this->services['jms_serializer.unserialize_object_constructor'] : $this->services['jms_serializer.unserialize_object_constructor'] = new \JMS\Serializer\Construction\UnserializeObjectConstructor()) && false ?: '_'}, new \PhpCollection\Map(array('array' => ${($_ = isset($this->services['sulu_core.array_serialization_visitor']) ? $this->services['sulu_core.array_serialization_visitor'] : $this->getSuluCore_ArraySerializationVisitorService()) && false ?: '_'}, 'json' => ${($_ = isset($this->services['jms_serializer.json_serialization_visitor']) ? $this->services['jms_serializer.json_serialization_visitor'] : $this->getJmsSerializer_JsonSerializationVisitorService()) && false ?: '_'}, 'xml' => ${($_ = isset($this->services['jms_serializer.xml_serialization_visitor']) ? $this->services['jms_serializer.xml_serialization_visitor'] : $this->getJmsSerializer_XmlSerializationVisitorService()) && false ?: '_'}, 'yml' => ${($_ = isset($this->services['jms_serializer.yaml_serialization_visitor']) ? $this->services['jms_serializer.yaml_serialization_visitor'] : $this->getJmsSerializer_YamlSerializationVisitorService()) && false ?: '_'})), new \PhpCollection\Map(array('json' => ${($_ = isset($this->services['jms_serializer.json_deserialization_visitor']) ? $this->services['jms_serializer.json_deserialization_visitor'] : $this->getJmsSerializer_JsonDeserializationVisitorService()) && false ?: '_'}, 'xml' => ${($_ = isset($this->services['jms_serializer.xml_deserialization_visitor']) ? $this->services['jms_serializer.xml_deserialization_visitor'] : $this->getJmsSerializer_XmlDeserializationVisitorService()) && false ?: '_'})), $a, NULL, ${($_ = isset($this->services['jms_serializer.expression_evaluator']) ? $this->services['jms_serializer.expression_evaluator'] : $this->getJmsSerializer_ExpressionEvaluatorService()) && false ?: '_'});

        $instance->setSerializationContextFactory(${($_ = isset($this->services['jms_serializer.serialization_context_factory']) ? $this->services['jms_serializer.serialization_context_factory'] : $this->services['jms_serializer.serialization_context_factory'] = new \JMS\SerializerBundle\ContextFactory\ConfiguredContextFactory()) && false ?: '_'});
        $instance->setDeserializationContextFactory(${($_ = isset($this->services['jms_serializer.deserialization_context_factory']) ? $this->services['jms_serializer.deserialization_context_factory'] : $this->services['jms_serializer.deserialization_context_factory'] = new \JMS\SerializerBundle\ContextFactory\ConfiguredContextFactory()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'jms_serializer.accessor_strategy' shared service.
     *
     * @return \JMS\Serializer\Accessor\ExpressionAccessorStrategy
     */
    protected function getJmsSerializer_AccessorStrategyService()
    {
        return $this->services['jms_serializer.accessor_strategy'] = new \JMS\Serializer\Accessor\ExpressionAccessorStrategy(${($_ = isset($this->services['jms_serializer.expression_evaluator']) ? $this->services['jms_serializer.expression_evaluator'] : $this->getJmsSerializer_ExpressionEvaluatorService()) && false ?: '_'}, new \JMS\Serializer\Accessor\DefaultAccessorStrategy());
    }

    /**
     * Gets the private 'jms_serializer.deserialization_context_factory' shared service.
     *
     * @return \JMS\SerializerBundle\ContextFactory\ConfiguredContextFactory
     */
    protected function getJmsSerializer_DeserializationContextFactoryService()
    {
        return $this->services['jms_serializer.deserialization_context_factory'] = new \JMS\SerializerBundle\ContextFactory\ConfiguredContextFactory();
    }

    /**
     * Gets the private 'jms_serializer.expression_evaluator' shared service.
     *
     * @return \JMS\Serializer\Expression\ExpressionEvaluator
     */
    protected function getJmsSerializer_ExpressionEvaluatorService()
    {
        $a = new \Symfony\Component\ExpressionLanguage\ExpressionLanguage();
        $a->registerProvider(new \JMS\SerializerBundle\ExpressionLanguage\BasicSerializerFunctionsProvider());

        return $this->services['jms_serializer.expression_evaluator'] = new \JMS\Serializer\Expression\ExpressionEvaluator($a, array('container' => $this));
    }

    /**
     * Gets the private 'jms_serializer.handler_registry' shared service.
     *
     * @return \JMS\Serializer\Handler\LazyHandlerRegistry
     */
    protected function getJmsSerializer_HandlerRegistryService()
    {
        return $this->services['jms_serializer.handler_registry'] = new \JMS\Serializer\Handler\LazyHandlerRegistry($this, array(2 => array('DateTime' => array('array' => array(0 => 'sulu_core.rest.datetime_handler', 1 => 'deserialize'), 'json' => array(0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateTimeFromjson'), 'xml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateTimeFromxml'), 'yml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateTimeFromyml')), 'DateTimeImmutable' => array('json' => array(0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateTimeImmutableFromjson'), 'xml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateTimeImmutableFromxml'), 'yml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateTimeImmutableFromyml')), 'DateInterval' => array('json' => array(0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateIntervalFromjson'), 'xml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateIntervalFromxml'), 'yml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateIntervalFromyml')), 'ArrayCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection')), 'Doctrine\\Common\\Collections\\ArrayCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection')), 'Doctrine\\ORM\\PersistentCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection')), 'Doctrine\\ODM\\MongoDB\\PersistentCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection')), 'Doctrine\\ODM\\PHPCR\\PersistentCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection')), 'PhpCollection\\Sequence' => array('json' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'deserializeSequence'), 'xml' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'deserializeSequence'), 'yml' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'deserializeSequence')), 'PhpCollection\\Map' => array('json' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'deserializeMap'), 'xml' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'deserializeMap'), 'yml' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'deserializeMap')), 'Sulu\\Component\\Content\\Document\\Structure\\Structure' => array('json' => array(0 => 'sulu_content.document.serializer.handler.structure', 1 => 'doDeserialize')), 'Sulu\\Component\\Content\\Document\\Extension\\ExtensionContainer' => array('json' => array(0 => 'sulu_content.document.serializer.handler.extension_container', 1 => 'doDeserialize')), 'Sulu\\Component\\Content\\Compat\\Structure\\PageBridge' => array('json' => array(0 => 'sulu_content.compat.serializer.handler.page_bridge', 1 => 'doDeserialize'))), 1 => array('DateTime' => array('array' => array(0 => 'sulu_core.rest.datetime_handler', 1 => 'serialize'), 'json' => array(0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateTime'), 'xml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateTime'), 'yml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateTime')), 'FOS\\RestBundle\\Util\\ExceptionWrapper' => array('json' => array(0 => 'fos_rest.serializer.exception_wrapper_serialize_handler', 1 => 'serializeToJson'), 'xml' => array(0 => 'fos_rest.serializer.exception_wrapper_serialize_handler', 1 => 'serializeToXml')), 'DateTimeImmutable' => array('json' => array(0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateTimeImmutable'), 'xml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateTimeImmutable'), 'yml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateTimeImmutable')), 'DateInterval' => array('json' => array(0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateInterval'), 'xml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateInterval'), 'yml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateInterval')), 'ArrayCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection')), 'Doctrine\\Common\\Collections\\ArrayCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection')), 'Doctrine\\ORM\\PersistentCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection')), 'Doctrine\\ODM\\MongoDB\\PersistentCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection')), 'Doctrine\\ODM\\PHPCR\\PersistentCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection')), 'PhpCollection\\Sequence' => array('json' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'serializeSequence'), 'xml' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'serializeSequence'), 'yml' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'serializeSequence')), 'PhpCollection\\Map' => array('json' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'serializeMap'), 'xml' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'serializeMap'), 'yml' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'serializeMap')), 'Symfony\\Component\\Form\\Form' => array('xml' => array(0 => 'jms_serializer.form_error_handler', 1 => 'serializeFormToxml'), 'json' => array(0 => 'jms_serializer.form_error_handler', 1 => 'serializeFormTojson'), 'yml' => array(0 => 'jms_serializer.form_error_handler', 1 => 'serializeFormToyml')), 'Symfony\\Component\\Form\\FormError' => array('xml' => array(0 => 'jms_serializer.form_error_handler', 1 => 'serializeFormErrorToxml'), 'json' => array(0 => 'jms_serializer.form_error_handler', 1 => 'serializeFormErrorTojson'), 'yml' => array(0 => 'jms_serializer.form_error_handler', 1 => 'serializeFormErrorToyml')), 'Symfony\\Component\\Validator\\ConstraintViolationList' => array('xml' => array(0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeListToxml'), 'json' => array(0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeListTojson'), 'yml' => array(0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeListToyml')), 'Symfony\\Component\\Validator\\ConstraintViolation' => array('xml' => array(0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeViolationToxml'), 'json' => array(0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeViolationTojson'), 'yml' => array(0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeViolationToyml')), 'Sulu\\Component\\Content\\Document\\Structure\\Structure' => array('json' => array(0 => 'sulu_content.document.serializer.handler.structure', 1 => 'doSerialize')), 'Sulu\\Component\\Content\\Document\\Extension\\ExtensionContainer' => array('json' => array(0 => 'sulu_content.document.serializer.handler.extension_container', 1 => 'doSerialize')), 'Sulu\\Component\\Content\\Compat\\Structure\\PageBridge' => array('json' => array(0 => 'sulu_content.compat.serializer.handler.page_bridge', 1 => 'doSerialize')), 'Sulu\\Component\\DocumentManager\\Collection\\ChildrenCollection' => array('json' => array(0 => 'sulu_document_manager.serializer.handler.children_collection', 1 => 'doSerialize')))));
    }

    /**
     * Gets the private 'jms_serializer.json_deserialization_visitor' shared service.
     *
     * @return \JMS\Serializer\JsonDeserializationVisitor
     */
    protected function getJmsSerializer_JsonDeserializationVisitorService()
    {
        return $this->services['jms_serializer.json_deserialization_visitor'] = new \JMS\Serializer\JsonDeserializationVisitor(${($_ = isset($this->services['jms_serializer.naming_strategy']) ? $this->services['jms_serializer.naming_strategy'] : $this->getJmsSerializer_NamingStrategyService()) && false ?: '_'});
    }

    /**
     * Gets the private 'jms_serializer.json_serialization_visitor' shared service.
     *
     * @return \JMS\Serializer\JsonSerializationVisitor
     */
    protected function getJmsSerializer_JsonSerializationVisitorService()
    {
        $this->services['jms_serializer.json_serialization_visitor'] = $instance = new \JMS\Serializer\JsonSerializationVisitor(${($_ = isset($this->services['jms_serializer.naming_strategy']) ? $this->services['jms_serializer.naming_strategy'] : $this->getJmsSerializer_NamingStrategyService()) && false ?: '_'}, ${($_ = isset($this->services['jms_serializer.accessor_strategy']) ? $this->services['jms_serializer.accessor_strategy'] : $this->getJmsSerializer_AccessorStrategyService()) && false ?: '_'});

        $instance->setOptions(0);

        return $instance;
    }

    /**
     * Gets the private 'jms_serializer.metadata.file_locator' shared service.
     *
     * @return \Metadata\Driver\FileLocator
     */
    protected function getJmsSerializer_Metadata_FileLocatorService()
    {
        return $this->services['jms_serializer.metadata.file_locator'] = new \Metadata\Driver\FileLocator(array('Symfony\\Bundle\\FrameworkBundle' => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle/Resources/config/serializer'), 'Symfony\\Bundle\\TwigBundle' => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/config/serializer'), 'Symfony\\Bundle\\MonologBundle' => ($this->targetDirs[4].'\\vendor\\symfony\\monolog-bundle/Resources/config/serializer'), 'Symfony\\Bundle\\SwiftmailerBundle' => ($this->targetDirs[4].'\\vendor\\symfony\\swiftmailer-bundle/Resources/config/serializer'), 'Sensio\\Bundle\\FrameworkExtraBundle' => ($this->targetDirs[4].'\\vendor\\sensio\\framework-extra-bundle/Resources/config/serializer'), 'Sulu\\Bundle\\CoreBundle' => ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\CoreBundle/Resources/config/serializer'), 'Doctrine\\Bundle\\DoctrineBundle' => ($this->targetDirs[4].'\\vendor\\doctrine\\doctrine-bundle/Resources/config/serializer'), 'Doctrine\\Bundle\\DoctrineCacheBundle' => ($this->targetDirs[4].'\\vendor\\doctrine\\doctrine-cache-bundle/Resources/config/serializer'), 'Doctrine\\Bundle\\FixturesBundle' => ($this->targetDirs[4].'\\vendor\\doctrine\\doctrine-fixtures-bundle/Resources/config/serializer'), 'Doctrine\\Bundle\\PHPCRBundle' => ($this->targetDirs[4].'\\vendor\\doctrine\\phpcr-bundle/Resources/config/serializer'), 'Stof\\DoctrineExtensionsBundle' => ($this->targetDirs[4].'\\vendor\\stof\\doctrine-extensions-bundle/Resources/config/serializer'), 'FOS\\RestBundle' => ($this->targetDirs[4].'\\vendor\\friendsofsymfony\\rest-bundle\\FOS\\RestBundle/Resources/config/serializer'), 'JMS\\SerializerBundle' => ($this->targetDirs[4].'\\vendor\\jms\\serializer-bundle\\JMS\\SerializerBundle/Resources/config/serializer'), 'Bazinga\\Bundle\\HateoasBundle' => ($this->targetDirs[4].'\\vendor\\willdurand\\hateoas-bundle/Resources/config/serializer'), 'Massive\\Bundle\\SearchBundle' => ($this->targetDirs[4].'\\vendor\\massive\\search-bundle/Resources/config/serializer'), 'Sulu\\Bundle\\SearchBundle' => ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\SearchBundle/Resources/config/serializer'), 'Sulu\\Bundle\\PersistenceBundle' => ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\PersistenceBundle/Resources/config/serializer'), 'Sulu\\Bundle\\ContactBundle' => ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\ContactBundle/Resources/config/serializer'), 'Sulu\\Bundle\\MediaBundle' => ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\MediaBundle/Resources/config/serializer'), 'Sulu\\Bundle\\SecurityBundle' => ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\SecurityBundle/Resources/config/serializer'), 'Sulu\\Bundle\\CategoryBundle' => ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\CategoryBundle/Resources/config/serializer'), 'Sulu\\Bundle\\SnippetBundle' => ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\SnippetBundle/Resources/config/serializer'), 'Sulu\\Bundle\\ContentBundle' => 'C:/Users/Lorenz/Desktop/MASSIVEART/ma-getraenkeverwaltung/vendor/sulu/sulu/src/Sulu/Bundle/ContentBundle/DependencyInjection/../Resources/config/serializer', 'Sulu\\Bundle\\TagBundle' => ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\TagBundle/Resources/config/serializer'), 'Sulu\\Bundle\\WebsiteBundle' => ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\WebsiteBundle/Resources/config/serializer'), 'Sulu\\Bundle\\LocationBundle' => ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\LocationBundle/Resources/config/serializer'), 'Sulu\\Bundle\\HttpCacheBundle' => ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\HttpCacheBundle/Resources/config/serializer'), 'Sulu\\Bundle\\WebsocketBundle' => ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\WebsocketBundle/Resources/config/serializer'), 'Sulu\\Bundle\\TranslateBundle' => ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\TranslateBundle/Resources/config/serializer'), 'Sulu\\Bundle\\DocumentManagerBundle' => ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\DocumentManagerBundle/Resources/config/serializer'), 'Sulu\\Bundle\\HashBundle' => ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\HashBundle/Resources/config/serializer'), 'Sulu\\Bundle\\CustomUrlBundle' => ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\CustomUrlBundle/Resources/config/serializer'), 'Sulu\\Bundle\\RouteBundle' => ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\RouteBundle/Resources/config/serializer'), 'Sulu\\Bundle\\MarkupBundle' => ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\MarkupBundle/Resources/config/serializer'), 'DTL\\Bundle\\PhpcrMigrations' => ($this->targetDirs[4].'\\vendor\\dantleech\\phpcr-migrations-bundle/Resources/config/serializer'), 'Dubture\\FFmpegBundle' => ($this->targetDirs[4].'\\vendor\\pulse00\\ffmpeg-bundle/Resources/config/serializer'), 'Massive\\Bundle\\BuildBundle' => ($this->targetDirs[4].'\\vendor\\massive\\build-bundle/Resources/config/serializer'), 'Symfony\\Bundle\\WebProfilerBundle' => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/config/serializer'), 'Sensio\\Bundle\\DistributionBundle' => ($this->targetDirs[4].'\\vendor\\sensio\\distribution-bundle/Resources/config/serializer'), 'Sensio\\Bundle\\GeneratorBundle' => ($this->targetDirs[4].'\\vendor\\sensio\\generator-bundle/Resources/config/serializer'), 'Symfony\\Bundle\\WebServerBundle' => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebServerBundle/Resources/config/serializer'), 'Sulu\\Bundle\\TestBundle' => ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\TestBundle/Resources/config/serializer'), 'Symfony\\Bundle\\DebugBundle' => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\DebugBundle/Resources/config/serializer'), 'Symfony\\Bundle\\SecurityBundle' => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\SecurityBundle/Resources/config/serializer'), 'Sulu\\Bundle\\AdminBundle' => ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\AdminBundle/Resources/config/serializer'), 'Sulu\\Bundle\\CollaborationBundle' => ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\CollaborationBundle/Resources/config/serializer'), 'Sulu\\Bundle\\PreviewBundle' => ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\PreviewBundle/Resources/config/serializer'), 'Sulu\\Component\\CustomUrl' => 'C:/Users/Lorenz/Desktop/MASSIVEART/ma-getraenkeverwaltung/vendor/sulu/sulu/src/Sulu/Bundle/CustomUrlBundle/DependencyInjection/../Resources/config/serializer', 'Sulu\\Component\\DocumentManager' => 'C:/Users/Lorenz/Desktop/MASSIVEART/ma-getraenkeverwaltung/vendor/sulu/sulu/src/Sulu/Bundle/DocumentManagerBundle/DependencyInjection/../Resources/config/serializer', 'Sulu\\Component\\Content' => 'C:/Users/Lorenz/Desktop/MASSIVEART/ma-getraenkeverwaltung/vendor/sulu/sulu/src/Sulu/Bundle/ContentBundle/DependencyInjection/../Resources/config/serializer', 'Sulu\\Component\\Webspace' => 'C:/Users/Lorenz/Desktop/MASSIVEART/ma-getraenkeverwaltung/vendor/sulu/sulu/src/Sulu/Bundle/ContentBundle/DependencyInjection/../Resources/config/serializer', 'Sulu\\Bundle\\CategoryBundle\\Entity' => 'C:/Users/Lorenz/Desktop/MASSIVEART/ma-getraenkeverwaltung/vendor/sulu/sulu/src/Sulu/Bundle/CategoryBundle/DependencyInjection/../Resources/config/serializer', 'Massive\\Bundle\\SearchBundle\\Search' => 'C:/Users/Lorenz/Desktop/MASSIVEART/ma-getraenkeverwaltung/vendor/sulu/sulu/src/Sulu/Bundle/SearchBundle/Resources/config/serializer/massive', 'Sulu\\Bundle\\SearchBundle\\Search' => 'C:/Users/Lorenz/Desktop/MASSIVEART/ma-getraenkeverwaltung/vendor/sulu/sulu/src/Sulu/Bundle/SearchBundle/Resources/config/serializer/sulu'));
    }

    /**
     * Gets the private 'jms_serializer.metadata_factory' shared service.
     *
     * @return \Metadata\MetadataFactory
     */
    protected function getJmsSerializer_MetadataFactoryService()
    {
        $this->services['jms_serializer.metadata_factory'] = $instance = new \Metadata\MetadataFactory(new \Metadata\Driver\LazyLoadingDriver($this, 'jms_serializer.metadata_driver'), 'Metadata\\ClassHierarchyMetadata', true);

        $instance->setCache(new \Metadata\Cache\FileCache(($this->targetDirs[0].'/jms_serializer')));

        return $instance;
    }

    /**
     * Gets the private 'jms_serializer.naming_strategy' shared service.
     *
     * @return \JMS\Serializer\Naming\CacheNamingStrategy
     */
    protected function getJmsSerializer_NamingStrategyService()
    {
        return $this->services['jms_serializer.naming_strategy'] = new \JMS\Serializer\Naming\CacheNamingStrategy(new \JMS\Serializer\Naming\SerializedNameAnnotationStrategy(new \JMS\Serializer\Naming\IdenticalPropertyNamingStrategy()));
    }

    /**
     * Gets the private 'jms_serializer.serialization_context_factory' shared service.
     *
     * @return \JMS\SerializerBundle\ContextFactory\ConfiguredContextFactory
     */
    protected function getJmsSerializer_SerializationContextFactoryService()
    {
        return $this->services['jms_serializer.serialization_context_factory'] = new \JMS\SerializerBundle\ContextFactory\ConfiguredContextFactory();
    }

    /**
     * Gets the private 'jms_serializer.unserialize_object_constructor' shared service.
     *
     * @return \JMS\Serializer\Construction\UnserializeObjectConstructor
     */
    protected function getJmsSerializer_UnserializeObjectConstructorService()
    {
        return $this->services['jms_serializer.unserialize_object_constructor'] = new \JMS\Serializer\Construction\UnserializeObjectConstructor();
    }

    /**
     * Gets the private 'jms_serializer.xml_deserialization_visitor' shared service.
     *
     * @return \JMS\Serializer\XmlDeserializationVisitor
     */
    protected function getJmsSerializer_XmlDeserializationVisitorService()
    {
        $this->services['jms_serializer.xml_deserialization_visitor'] = $instance = new \JMS\Serializer\XmlDeserializationVisitor(${($_ = isset($this->services['jms_serializer.naming_strategy']) ? $this->services['jms_serializer.naming_strategy'] : $this->getJmsSerializer_NamingStrategyService()) && false ?: '_'});

        $instance->setDoctypeWhitelist(array());

        return $instance;
    }

    /**
     * Gets the private 'jms_serializer.xml_serialization_visitor' shared service.
     *
     * @return \JMS\Serializer\XmlSerializationVisitor
     */
    protected function getJmsSerializer_XmlSerializationVisitorService()
    {
        $this->services['jms_serializer.xml_serialization_visitor'] = $instance = new \JMS\Serializer\XmlSerializationVisitor(${($_ = isset($this->services['jms_serializer.naming_strategy']) ? $this->services['jms_serializer.naming_strategy'] : $this->getJmsSerializer_NamingStrategyService()) && false ?: '_'}, ${($_ = isset($this->services['jms_serializer.accessor_strategy']) ? $this->services['jms_serializer.accessor_strategy'] : $this->getJmsSerializer_AccessorStrategyService()) && false ?: '_'});

        $instance->setFormatOutput(true);

        return $instance;
    }

    /**
     * Gets the private 'jms_serializer.yaml_serialization_visitor' shared service.
     *
     * @return \JMS\Serializer\YamlSerializationVisitor
     */
    protected function getJmsSerializer_YamlSerializationVisitorService()
    {
        return $this->services['jms_serializer.yaml_serialization_visitor'] = new \JMS\Serializer\YamlSerializationVisitor(${($_ = isset($this->services['jms_serializer.naming_strategy']) ? $this->services['jms_serializer.naming_strategy'] : $this->getJmsSerializer_NamingStrategyService()) && false ?: '_'}, ${($_ = isset($this->services['jms_serializer.accessor_strategy']) ? $this->services['jms_serializer.accessor_strategy'] : $this->getJmsSerializer_AccessorStrategyService()) && false ?: '_'});
    }

    /**
     * Gets the private 'locale_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\LocaleListener
     */
    protected function getLocaleListenerService()
    {
        return $this->services['locale_listener'] = new \Symfony\Component\HttpKernel\EventListener\LocaleListener(${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()) && false ?: '_'}, 'en', ${($_ = isset($this->services['router']) ? $this->services['router'] : $this->getRouterService()) && false ?: '_'});
    }

    /**
     * Gets the private 'logger' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getLoggerService()
    {
        $this->services['logger'] = $instance = new \Symfony\Bridge\Monolog\Logger('app');

        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : $this->services['debug.log_processor'] = new \Symfony\Bridge\Monolog\Processor\DebugProcessor()) && false ?: '_'});
        $instance->useMicrosecondTimestamps(true);
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->getMonolog_Handler_ConsoleService()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->getMonolog_Handler_MainService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'massive_search.search.event_subscriber.doctrine_orm' shared service.
     *
     * @return \Massive\Bundle\SearchBundle\Search\EventSubscriber\DoctrineOrmSubscriber
     */
    protected function getMassiveSearch_Search_EventSubscriber_DoctrineOrmService()
    {
        return $this->services['massive_search.search.event_subscriber.doctrine_orm'] = new \Massive\Bundle\SearchBundle\Search\EventSubscriber\DoctrineOrmSubscriber(${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->getDebug_EventDispatcherService()) && false ?: '_'});
    }

    /**
     * Gets the private 'monolog.handler.console' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Handler\ConsoleHandler
     */
    protected function getMonolog_Handler_ConsoleService()
    {
        $this->services['monolog.handler.console'] = $instance = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, false, array(64 => 200, 128 => 100, 16 => 400, 32 => 300, 256 => 100));

        $instance->pushProcessor(${($_ = isset($this->services['monolog.processor.psr_log_message']) ? $this->services['monolog.processor.psr_log_message'] : $this->services['monolog.processor.psr_log_message'] = new \Monolog\Processor\PsrLogMessageProcessor()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'monolog.handler.console_very_verbose' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Handler\ConsoleHandler
     */
    protected function getMonolog_Handler_ConsoleVeryVerboseService()
    {
        $this->services['monolog.handler.console_very_verbose'] = $instance = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, false, array(64 => 250, 128 => 250, 256 => 100, 16 => 400, 32 => 300));

        $instance->pushProcessor(${($_ = isset($this->services['monolog.processor.psr_log_message']) ? $this->services['monolog.processor.psr_log_message'] : $this->services['monolog.processor.psr_log_message'] = new \Monolog\Processor\PsrLogMessageProcessor()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'monolog.handler.main' shared service.
     *
     * @return \Monolog\Handler\StreamHandler
     */
    protected function getMonolog_Handler_MainService()
    {
        $this->services['monolog.handler.main'] = $instance = new \Monolog\Handler\StreamHandler(($this->targetDirs[3].'\\logs\\admin/dev.log'), 100, true, NULL);

        $instance->pushProcessor(${($_ = isset($this->services['monolog.processor.psr_log_message']) ? $this->services['monolog.processor.psr_log_message'] : $this->services['monolog.processor.psr_log_message'] = new \Monolog\Processor\PsrLogMessageProcessor()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'monolog.logger.cache' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_CacheService()
    {
        $this->services['monolog.logger.cache'] = $instance = new \Symfony\Bridge\Monolog\Logger('cache');

        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : $this->services['debug.log_processor'] = new \Symfony\Bridge\Monolog\Processor\DebugProcessor()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->getMonolog_Handler_ConsoleService()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->getMonolog_Handler_MainService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'monolog.logger.doctrine' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_DoctrineService()
    {
        $this->services['monolog.logger.doctrine'] = $instance = new \Symfony\Bridge\Monolog\Logger('doctrine');

        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : $this->services['debug.log_processor'] = new \Symfony\Bridge\Monolog\Processor\DebugProcessor()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.console_very_verbose']) ? $this->services['monolog.handler.console_very_verbose'] : $this->getMonolog_Handler_ConsoleVeryVerboseService()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->getMonolog_Handler_MainService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'monolog.logger.event' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_EventService()
    {
        $this->services['monolog.logger.event'] = $instance = new \Symfony\Bridge\Monolog\Logger('event');

        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : $this->services['debug.log_processor'] = new \Symfony\Bridge\Monolog\Processor\DebugProcessor()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->getMonolog_Handler_ConsoleService()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->getMonolog_Handler_MainService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'monolog.logger.php' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_PhpService()
    {
        $this->services['monolog.logger.php'] = $instance = new \Symfony\Bridge\Monolog\Logger('php');

        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : $this->services['debug.log_processor'] = new \Symfony\Bridge\Monolog\Processor\DebugProcessor()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->getMonolog_Handler_ConsoleService()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->getMonolog_Handler_MainService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'monolog.logger.profiler' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_ProfilerService()
    {
        $this->services['monolog.logger.profiler'] = $instance = new \Symfony\Bridge\Monolog\Logger('profiler');

        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : $this->services['debug.log_processor'] = new \Symfony\Bridge\Monolog\Processor\DebugProcessor()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->getMonolog_Handler_ConsoleService()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->getMonolog_Handler_MainService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'monolog.logger.request' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_RequestService()
    {
        $this->services['monolog.logger.request'] = $instance = new \Symfony\Bridge\Monolog\Logger('request');

        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : $this->services['debug.log_processor'] = new \Symfony\Bridge\Monolog\Processor\DebugProcessor()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->getMonolog_Handler_ConsoleService()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->getMonolog_Handler_MainService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'monolog.logger.translation' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_TranslationService()
    {
        $this->services['monolog.logger.translation'] = $instance = new \Symfony\Bridge\Monolog\Logger('translation');

        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : $this->services['debug.log_processor'] = new \Symfony\Bridge\Monolog\Processor\DebugProcessor()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->getMonolog_Handler_ConsoleService()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->getMonolog_Handler_MainService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'monolog.processor.psr_log_message' shared service.
     *
     * @return \Monolog\Processor\PsrLogMessageProcessor
     */
    protected function getMonolog_Processor_PsrLogMessageService()
    {
        return $this->services['monolog.processor.psr_log_message'] = new \Monolog\Processor\PsrLogMessageProcessor();
    }

    /**
     * Gets the private 'profiler_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ProfilerListener
     */
    protected function getProfilerListenerService()
    {
        return $this->services['profiler_listener'] = new \Symfony\Component\HttpKernel\EventListener\ProfilerListener(${($_ = isset($this->services['profiler']) ? $this->services['profiler'] : $this->getProfilerService()) && false ?: '_'}, ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()) && false ?: '_'}, NULL, false, false);
    }

    /**
     * Gets the private 'resolve_controller_name_subscriber' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\EventListener\ResolveControllerNameSubscriber
     */
    protected function getResolveControllerNameSubscriberService()
    {
        return $this->services['resolve_controller_name_subscriber'] = new \Symfony\Bundle\FrameworkBundle\EventListener\ResolveControllerNameSubscriber(${($_ = isset($this->services['controller_name_converter']) ? $this->services['controller_name_converter'] : $this->services['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'})) && false ?: '_'});
    }

    /**
     * Gets the private 'response_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ResponseListener
     */
    protected function getResponseListenerService()
    {
        return $this->services['response_listener'] = new \Symfony\Component\HttpKernel\EventListener\ResponseListener('UTF-8');
    }

    /**
     * Gets the private 'router.request_context' shared service.
     *
     * @return \Symfony\Component\Routing\RequestContext
     */
    protected function getRouter_RequestContextService()
    {
        return $this->services['router.request_context'] = new \Symfony\Component\Routing\RequestContext('', 'GET', 'localhost', 'http', 80, 443);
    }

    /**
     * Gets the private 'security.authentication.manager' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager
     */
    protected function getSecurity_Authentication_ManagerService()
    {
        $this->services['security.authentication.manager'] = $instance = new \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager(new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['security.authentication.provider.dao.admin']) ? $this->services['security.authentication.provider.dao.admin'] : $this->load('getSecurity_Authentication_Provider_Dao_AdminService.php')) && false ?: '_'};
            yield 1 => ${($_ = isset($this->services['security.authentication.provider.anonymous.admin']) ? $this->services['security.authentication.provider.anonymous.admin'] : $this->services['security.authentication.provider.anonymous.admin'] = new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider($this->getParameter('container.build_hash'))) && false ?: '_'};
        }, 2), true);

        $instance->setEventDispatcher(${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->getDebug_EventDispatcherService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'security.authentication.trust_resolver' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver
     */
    protected function getSecurity_Authentication_TrustResolverService()
    {
        return $this->services['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver('Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken', 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken');
    }

    /**
     * Gets the private 'security.firewall' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Debug\TraceableFirewallListener
     */
    protected function getSecurity_FirewallService()
    {
        return $this->services['security.firewall'] = new \Symfony\Bundle\SecurityBundle\Debug\TraceableFirewallListener(${($_ = isset($this->services['security.firewall.map']) ? $this->services['security.firewall.map'] : $this->getSecurity_Firewall_MapService()) && false ?: '_'}, ${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->getDebug_EventDispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['security.logout_url_generator']) ? $this->services['security.logout_url_generator'] : $this->getSecurity_LogoutUrlGeneratorService()) && false ?: '_'});
    }

    /**
     * Gets the private 'security.firewall.map' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallMap
     */
    protected function getSecurity_Firewall_MapService()
    {
        return $this->services['security.firewall.map'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallMap(new \Symfony\Component\DependencyInjection\ServiceLocator(array('security.firewall.map.context.admin' => function () {
            return ${($_ = isset($this->services['security.firewall.map.context.admin']) ? $this->services['security.firewall.map.context.admin'] : $this->load('getSecurity_Firewall_Map_Context_AdminService.php')) && false ?: '_'};
        })), new RewindableGenerator(function () {
            yield 'security.firewall.map.context.admin' => ${($_ = isset($this->services['security.request_matcher.00qf1z7']) ? $this->services['security.request_matcher.00qf1z7'] : $this->services['security.request_matcher.00qf1z7'] = new \Symfony\Component\HttpFoundation\RequestMatcher('^/')) && false ?: '_'};
        }, 1));
    }

    /**
     * Gets the private 'security.logout_url_generator' shared service.
     *
     * @return \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator
     */
    protected function getSecurity_LogoutUrlGeneratorService()
    {
        $this->services['security.logout_url_generator'] = $instance = new \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator(${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()) && false ?: '_'}, ${($_ = isset($this->services['router']) ? $this->services['router'] : $this->getRouterService()) && false ?: '_'}, ${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage()) && false ?: '_'});

        $instance->registerListener('admin', '/admin/logout', 'logout', '_csrf_token', NULL, NULL);

        return $instance;
    }

    /**
     * Gets the private 'security.rememberme.response_listener' shared service.
     *
     * @return \Symfony\Component\Security\Http\RememberMe\ResponseListener
     */
    protected function getSecurity_Rememberme_ResponseListenerService()
    {
        return $this->services['security.rememberme.response_listener'] = new \Symfony\Component\Security\Http\RememberMe\ResponseListener();
    }

    /**
     * Gets the private 'security.role_hierarchy' shared service.
     *
     * @return \Symfony\Component\Security\Core\Role\RoleHierarchy
     */
    protected function getSecurity_RoleHierarchyService()
    {
        return $this->services['security.role_hierarchy'] = new \Symfony\Component\Security\Core\Role\RoleHierarchy(array());
    }

    /**
     * Gets the private 'sensio_framework_extra.cache.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener
     */
    protected function getSensioFrameworkExtra_Cache_ListenerService()
    {
        return $this->services['sensio_framework_extra.cache.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener();
    }

    /**
     * Gets the private 'sensio_framework_extra.controller.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener
     */
    protected function getSensioFrameworkExtra_Controller_ListenerService()
    {
        return $this->services['sensio_framework_extra.controller.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener(${($_ = isset($this->services['annotation_reader']) ? $this->services['annotation_reader'] : $this->getAnnotationReaderService()) && false ?: '_'});
    }

    /**
     * Gets the private 'sensio_framework_extra.converter.datetime' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter
     */
    protected function getSensioFrameworkExtra_Converter_DatetimeService()
    {
        return $this->services['sensio_framework_extra.converter.datetime'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter();
    }

    /**
     * Gets the private 'sensio_framework_extra.converter.doctrine.orm' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter
     */
    protected function getSensioFrameworkExtra_Converter_Doctrine_OrmService()
    {
        return $this->services['sensio_framework_extra.converter.doctrine.orm'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->getDoctrineService()) && false ?: '_'});
    }

    /**
     * Gets the private 'sensio_framework_extra.converter.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener
     */
    protected function getSensioFrameworkExtra_Converter_ListenerService()
    {
        return $this->services['sensio_framework_extra.converter.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener(${($_ = isset($this->services['sensio_framework_extra.converter.manager']) ? $this->services['sensio_framework_extra.converter.manager'] : $this->getSensioFrameworkExtra_Converter_ManagerService()) && false ?: '_'}, true);
    }

    /**
     * Gets the private 'sensio_framework_extra.converter.manager' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager
     */
    protected function getSensioFrameworkExtra_Converter_ManagerService()
    {
        $this->services['sensio_framework_extra.converter.manager'] = $instance = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager();

        $instance->add(${($_ = isset($this->services['sensio_framework_extra.converter.doctrine.orm']) ? $this->services['sensio_framework_extra.converter.doctrine.orm'] : $this->getSensioFrameworkExtra_Converter_Doctrine_OrmService()) && false ?: '_'}, 0, 'doctrine.orm');
        $instance->add(${($_ = isset($this->services['sensio_framework_extra.converter.datetime']) ? $this->services['sensio_framework_extra.converter.datetime'] : $this->services['sensio_framework_extra.converter.datetime'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter()) && false ?: '_'}, 0, 'datetime');

        return $instance;
    }

    /**
     * Gets the private 'sensio_framework_extra.security.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener
     */
    protected function getSensioFrameworkExtra_Security_ListenerService()
    {
        return $this->services['sensio_framework_extra.security.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener(NULL, new \Sensio\Bundle\FrameworkExtraBundle\Security\ExpressionLanguage(), ${($_ = isset($this->services['security.authentication.trust_resolver']) ? $this->services['security.authentication.trust_resolver'] : $this->services['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver('Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken', 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken')) && false ?: '_'}, ${($_ = isset($this->services['security.role_hierarchy']) ? $this->services['security.role_hierarchy'] : $this->services['security.role_hierarchy'] = new \Symfony\Component\Security\Core\Role\RoleHierarchy(array())) && false ?: '_'}, ${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage()) && false ?: '_'}, ${($_ = isset($this->services['security.authorization_checker']) ? $this->services['security.authorization_checker'] : $this->getSecurity_AuthorizationCheckerService()) && false ?: '_'});
    }

    /**
     * Gets the private 'sensio_framework_extra.view.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener
     */
    protected function getSensioFrameworkExtra_View_ListenerService()
    {
        return $this->services['sensio_framework_extra.view.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener($this);
    }

    /**
     * Gets the private 'service_locator.sr6ctxe' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function getServiceLocator_Sr6ctxeService()
    {
        return $this->services['service_locator.sr6ctxe'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array());
    }

    /**
     * Gets the private 'session.save_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\SaveSessionListener
     */
    protected function getSession_SaveListenerService()
    {
        return $this->services['session.save_listener'] = new \Symfony\Component\HttpKernel\EventListener\SaveSessionListener();
    }

    /**
     * Gets the private 'session_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\SessionListener
     */
    protected function getSessionListenerService()
    {
        return $this->services['session_listener'] = new \Symfony\Component\HttpKernel\EventListener\SessionListener(new \Symfony\Component\DependencyInjection\ServiceLocator(array('session' => function () {
            return ${($_ = isset($this->services['session']) ? $this->services['session'] : $this->load('getSessionService.php')) && false ?: '_'};
        })));
    }

    /**
     * Gets the private 'streamed_response_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener
     */
    protected function getStreamedResponseListenerService()
    {
        return $this->services['streamed_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener();
    }

    /**
     * Gets the private 'sulu.content.localization_finder' shared service.
     *
     * @return \Sulu\Component\Content\Compat\LocalizationFinder
     */
    protected function getSulu_Content_LocalizationFinderService()
    {
        return $this->services['sulu.content.localization_finder'] = new \Sulu\Component\Content\Compat\LocalizationFinder(${($_ = isset($this->services['sulu_core.webspace.webspace_manager']) ? $this->services['sulu_core.webspace.webspace_manager'] : $this->getSuluCore_Webspace_WebspaceManagerService()) && false ?: '_'});
    }

    /**
     * Gets the private 'sulu.content.mapper' shared service.
     *
     * @return \Sulu\Component\Content\Mapper\ContentMapper
     */
    protected function getSulu_Content_MapperService()
    {
        return $this->services['sulu.content.mapper'] = new \Sulu\Component\Content\Mapper\ContentMapper(${($_ = isset($this->services['sulu_document_manager.document_manager']) ? $this->services['sulu_document_manager.document_manager'] : $this->getSuluDocumentManager_DocumentManagerService()) && false ?: '_'}, ${($_ = isset($this->services['sulu_core.webspace.webspace_manager']) ? $this->services['sulu_core.webspace.webspace_manager'] : $this->getSuluCore_Webspace_WebspaceManagerService()) && false ?: '_'}, ${($_ = isset($this->services['form.factory']) ? $this->services['form.factory'] : $this->getForm_FactoryService()) && false ?: '_'}, ${($_ = isset($this->services['sulu_document_manager.document_inspector']) ? $this->services['sulu_document_manager.document_inspector'] : $this->getSuluDocumentManager_DocumentInspectorService()) && false ?: '_'}, ${($_ = isset($this->services['sulu_document_manager.property_encoder']) ? $this->services['sulu_document_manager.property_encoder'] : $this->getSuluDocumentManager_PropertyEncoderService()) && false ?: '_'}, ${($_ = isset($this->services['sulu.content.structure_manager']) ? $this->services['sulu.content.structure_manager'] : $this->getSulu_Content_StructureManagerService()) && false ?: '_'}, ${($_ = isset($this->services['sulu_content.extension.manager']) ? $this->services['sulu_content.extension.manager'] : $this->getSuluContent_Extension_ManagerService()) && false ?: '_'}, ${($_ = isset($this->services['sulu.content.type_manager']) ? $this->services['sulu.content.type_manager'] : $this->getSulu_Content_TypeManagerService()) && false ?: '_'}, ${($_ = isset($this->services['sulu.phpcr.session']) ? $this->services['sulu.phpcr.session'] : $this->getSulu_Phpcr_SessionService()) && false ?: '_'}, ${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->getDebug_EventDispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['sulu.content.resource_locator.strategy_pool']) ? $this->services['sulu.content.resource_locator.strategy_pool'] : $this->getSulu_Content_ResourceLocator_StrategyPoolService()) && false ?: '_'}, ${($_ = isset($this->services['sulu_document_manager.namespace_registry']) ? $this->services['sulu_document_manager.namespace_registry'] : $this->getSuluDocumentManager_NamespaceRegistryService()) && false ?: '_'});
    }

    /**
     * Gets the private 'sulu.content.path_cleaner' shared service.
     *
     * @return \Sulu\Component\PHPCR\PathCleanup
     */
    protected function getSulu_Content_PathCleanerService()
    {
        return $this->services['sulu.content.path_cleaner'] = new \Sulu\Component\PHPCR\PathCleanup(array('default' => array(' ' => '-', '+' => '-', '.' => '-', '^' => '-', '~' => '-', '[' => '-', ']' => '-', '(' => '-', ')' => '-', '{' => '-', '}' => '-', 'Á' => 'A', 'á' => 'a', 'Ć' => 'C', 'ć' => 'c', 'É' => 'E', 'é' => 'e', 'Í' => 'I', 'í' => 'i', 'Ĺ' => 'L', 'ĺ' => 'l', 'Ń' => 'N', 'ń' => 'n', 'Ó' => 'O', 'ó' => 'o', 'Ő' => 'O', 'ő' => 'o', 'Ŕ' => 'R', 'ŕ' => 'r', 'Ś' => 'S', 'ś' => 's', 'Ú' => 'U', 'ú' => 'u', 'Ű' => 'U', 'ű' => 'u', 'Ý' => 'Y', 'ý' => 'y', 'Ź' => 'Z', 'ź' => 'z', 'Ă' => 'A', 'ă' => 'a', 'Ĕ' => 'E', 'ĕ' => 'e', 'Ğ' => 'G', 'ğ' => 'g', 'Ĭ' => 'I', 'ĭ' => 'i', 'Ŏ' => 'o', 'ŏ' => 'o', 'Ŭ' => 'U', 'ŭ' => 'u', 'Č' => 'C', 'č' => 'c', 'Ď' => 'D', 'Ě' => 'E', 'ě' => 'e', 'Ň' => 'N', 'ň' => 'n', 'Ř' => 'R', 'ř' => 'r', 'Š' => 'S', 'š' => 's', 'Ť' => 'T', 'Ž' => 'Z', 'ž' => 'z', 'Ç' => 'C', 'ç' => 'c', 'Ģ' => 'G', 'ģ' => 'g', 'Ķ' => 'K', 'ķ' => 'k', 'Ļ' => 'L', 'ļ' => 'l', 'Ņ' => 'N', 'ņ' => 'n', 'Ŗ' => 'R', 'ŗ' => 'r', 'Ş' => 'S', 'ş' => 's', 'Ţ' => 'T', 'ţ' => 't', 'Ä' => 'Ae', 'ä' => 'ae', 'Ë' => 'E', 'ë' => 'e', 'Ï' => 'I', 'ï' => 'i', 'Ö' => 'Oe', 'ö' => 'oe', 'Ü' => 'Ue', 'ü' => 'ue', 'Ÿ' => 'Y', 'ÿ' => 'y', 'À' => 'A', 'à' => 'a', 'È' => 'E', 'è' => 'e', 'Ì' => 'I', 'ì' => 'i', 'Ò' => 'O', 'ò' => 'o', 'Ù' => 'U', 'ù' => 'u', 'Ā' => 'A', 'ā' => 'a', 'Ē' => 'E', 'ē' => 'e', 'Ī' => 'I', 'ī' => 'i', 'Ō' => 'O', 'ō' => 'o', 'Ū' => 'U', 'ū' => 'u', 'Ą' => 'A', 'ą' => 'a', 'Ę' => 'E', 'ę' => 'e', 'Į' => 'I', 'į' => 'i', 'Ų' => 'U', 'ų' => 'u', 'Ḃ' => 'B', 'ḃ' => 'b', 'Ċ' => 'C', 'ċ' => 'c', 'Ḋ' => 'D', 'ḋ' => 'd', 'Ė' => 'E', 'ė' => 'e', 'Ḟ' => 'F', 'Ġ' => 'G', 'ġ' => 'g', 'Ḣ' => 'H', 'ḣ' => 'h', 'İ' => 'I', 'Ṁ' => 'M', 'ṁ' => 'm', 'Ṅ' => 'N', 'ṅ' => 'n', 'Ṗ' => 'P', 'ṗ' => 'p', 'Ṙ' => 'R', 'ṙ' => 'r', 'Ṡ' => 'S', 'ṡ' => 's', 'Ṫ' => 'T', 'ṫ' => 't', 'Ż' => 'Z', 'ż' => 'z', 'Ḍ' => 'D', 'ḍ' => 'd', 'Ḥ' => 'H', 'ḥ' => 'h', 'Ḳ' => 'K', 'ḳ' => 'k', 'Ḷ' => 'L', 'ḷ' => 'l', 'Ṃ' => 'M', 'ṃ' => 'm', 'Ṛ' => 'R', 'ṛ' => 'r', 'Ṣ' => 'S', 'ṣ' => 's', 'Ṭ' => 'T', 'ṭ' => 't', 'Ṿ' => 'V', 'ṿ' => 'v', 'Đ' => 'D', 'đ' => 'd', 'Ħ' => 'H', 'ħ' => 'h', 'Ŧ' => 'T', 'ŧ' => 't', 'Å' => 'A', 'å' => 'a', 'Ů' => 'U', 'ů' => 'u', 'Ł' => 'L', 'ł' => 'l', 'Ø' => 'O', 'ø' => 'o', 'Ã' => 'A', 'ã' => 'a', 'Ĩ' => 'I', 'ĩ' => 'i', 'Ñ' => 'N', 'ñ' => 'n', 'Õ' => 'O', 'õ' => 'o', 'Ũ' => 'U', 'ũ' => 'u', 'Â' => 'A', 'â' => 'a', 'Ĉ' => 'C', 'ĉ' => 'c', 'Ê' => 'E', 'ê' => 'e', 'Ĝ' => 'G', 'ĝ' => 'g', 'Ĥ' => 'H', 'ĥ' => 'h', 'Î' => 'I', 'î' => 'i', 'Ĵ' => 'J', 'ĵ' => 'j', 'Ô' => 'O', 'ô' => 'o', 'Ŝ' => 'S', 'ŝ' => 's', 'Û' => 'U', 'û' => 'u', 'Ŵ' => 'W', 'ŵ' => 'w', 'Ŷ' => 'Y', 'ŷ' => 'y', 'Æ' => 'AE', 'æ' => 'ae', 'ß' => 'ss', 'Œ' => 'OE', 'œ' => 'oe', 'Ĳ' => 'IJ', 'ª' => 'a', 'º' => 'o'), 'de' => array('&' => 'und'), 'en' => array('&' => 'and'), 'fr' => array('&' => 'et'), 'it' => array('&' => 'e'), 'nl' => array('&' => 'en'), 'es' => array('&' => 'y')));
    }

    /**
     * Gets the private 'sulu.content.query_executor' shared service.
     *
     * @return \Sulu\Component\Content\Query\ContentQueryExecutor
     */
    protected function getSulu_Content_QueryExecutorService()
    {
        return $this->services['sulu.content.query_executor'] = new \Sulu\Component\Content\Query\ContentQueryExecutor(${($_ = isset($this->services['sulu.phpcr.session']) ? $this->services['sulu.phpcr.session'] : $this->getSulu_Phpcr_SessionService()) && false ?: '_'}, ${($_ = isset($this->services['sulu.content.mapper']) ? $this->services['sulu.content.mapper'] : $this->getSulu_Content_MapperService()) && false ?: '_'}, ${($_ = isset($this->services['debug.stopwatch']) ? $this->services['debug.stopwatch'] : $this->services['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true)) && false ?: '_'});
    }

    /**
     * Gets the private 'sulu.content.resource_locator.strategy.tree_full_edit' shared service.
     *
     * @return \Sulu\Component\Content\Types\ResourceLocator\Strategy\TreeFullEditStrategy
     */
    protected function getSulu_Content_ResourceLocator_Strategy_TreeFullEditService()
    {
        return $this->services['sulu.content.resource_locator.strategy.tree_full_edit'] = new \Sulu\Component\Content\Types\ResourceLocator\Strategy\TreeFullEditStrategy(${($_ = isset($this->services['sulu.content.rlp.mapper.phpcr']) ? $this->services['sulu.content.rlp.mapper.phpcr'] : $this->getSulu_Content_Rlp_Mapper_PhpcrService()) && false ?: '_'}, ${($_ = isset($this->services['sulu.content.path_cleaner']) ? $this->services['sulu.content.path_cleaner'] : $this->getSulu_Content_PathCleanerService()) && false ?: '_'}, ${($_ = isset($this->services['sulu.content.structure_manager']) ? $this->services['sulu.content.structure_manager'] : $this->getSulu_Content_StructureManagerService()) && false ?: '_'}, ${($_ = isset($this->services['sulu.content.type_manager']) ? $this->services['sulu.content.type_manager'] : $this->getSulu_Content_TypeManagerService()) && false ?: '_'}, ${($_ = isset($this->services['sulu.util.node_helper']) ? $this->services['sulu.util.node_helper'] : $this->getSulu_Util_NodeHelperService()) && false ?: '_'}, ${($_ = isset($this->services['sulu_document_manager.document_inspector']) ? $this->services['sulu_document_manager.document_inspector'] : $this->getSuluDocumentManager_DocumentInspectorService()) && false ?: '_'}, ${($_ = isset($this->services['sulu_document_manager.document_manager']) ? $this->services['sulu_document_manager.document_manager'] : $this->getSuluDocumentManager_DocumentManagerService()) && false ?: '_'}, ${($_ = isset($this->services['sulu.content.resource_locator.strategy.tree_generator']) ? $this->services['sulu.content.resource_locator.strategy.tree_generator'] : $this->services['sulu.content.resource_locator.strategy.tree_generator'] = new \Sulu\Component\Content\Types\ResourceLocator\Strategy\TreeGenerator()) && false ?: '_'});
    }

    /**
     * Gets the private 'sulu.content.resource_locator.strategy.tree_generator' shared service.
     *
     * @return \Sulu\Component\Content\Types\ResourceLocator\Strategy\TreeGenerator
     */
    protected function getSulu_Content_ResourceLocator_Strategy_TreeGeneratorService()
    {
        return $this->services['sulu.content.resource_locator.strategy.tree_generator'] = new \Sulu\Component\Content\Types\ResourceLocator\Strategy\TreeGenerator();
    }

    /**
     * Gets the private 'sulu.content.resource_locator.strategy.tree_leaf_edit' shared service.
     *
     * @return \Sulu\Component\Content\Types\ResourceLocator\Strategy\TreeLeafEditStrategy
     */
    protected function getSulu_Content_ResourceLocator_Strategy_TreeLeafEditService()
    {
        $a = ${($_ = isset($this->services['sulu.content.rlp.mapper.phpcr']) ? $this->services['sulu.content.rlp.mapper.phpcr'] : $this->getSulu_Content_Rlp_Mapper_PhpcrService()) && false ?: '_'};

        if (isset($this->services['sulu.content.resource_locator.strategy.tree_leaf_edit'])) {
            return $this->services['sulu.content.resource_locator.strategy.tree_leaf_edit'];
        }

        return $this->services['sulu.content.resource_locator.strategy.tree_leaf_edit'] = new \Sulu\Component\Content\Types\ResourceLocator\Strategy\TreeLeafEditStrategy($a, ${($_ = isset($this->services['sulu.content.path_cleaner']) ? $this->services['sulu.content.path_cleaner'] : $this->getSulu_Content_PathCleanerService()) && false ?: '_'}, ${($_ = isset($this->services['sulu.content.structure_manager']) ? $this->services['sulu.content.structure_manager'] : $this->getSulu_Content_StructureManagerService()) && false ?: '_'}, ${($_ = isset($this->services['sulu.content.type_manager']) ? $this->services['sulu.content.type_manager'] : $this->getSulu_Content_TypeManagerService()) && false ?: '_'}, ${($_ = isset($this->services['sulu.util.node_helper']) ? $this->services['sulu.util.node_helper'] : $this->getSulu_Util_NodeHelperService()) && false ?: '_'}, ${($_ = isset($this->services['sulu_document_manager.document_inspector']) ? $this->services['sulu_document_manager.document_inspector'] : $this->getSuluDocumentManager_DocumentInspectorService()) && false ?: '_'}, ${($_ = isset($this->services['sulu_document_manager.document_manager']) ? $this->services['sulu_document_manager.document_manager'] : $this->getSuluDocumentManager_DocumentManagerService()) && false ?: '_'}, ${($_ = isset($this->services['sulu.content.resource_locator.strategy.tree_generator']) ? $this->services['sulu.content.resource_locator.strategy.tree_generator'] : $this->services['sulu.content.resource_locator.strategy.tree_generator'] = new \Sulu\Component\Content\Types\ResourceLocator\Strategy\TreeGenerator()) && false ?: '_'});
    }

    /**
     * Gets the private 'sulu.content.resource_locator.strategy_pool' shared service.
     *
     * @return \Sulu\Component\Content\Types\ResourceLocator\Strategy\ResourceLocatorStrategyPool
     */
    protected function getSulu_Content_ResourceLocator_StrategyPoolService()
    {
        return $this->services['sulu.content.resource_locator.strategy_pool'] = new \Sulu\Component\Content\Types\ResourceLocator\Strategy\ResourceLocatorStrategyPool(array('tree_leaf_edit' => ${($_ = isset($this->services['sulu.content.resource_locator.strategy.tree_leaf_edit']) ? $this->services['sulu.content.resource_locator.strategy.tree_leaf_edit'] : $this->getSulu_Content_ResourceLocator_Strategy_TreeLeafEditService()) && false ?: '_'}, 'tree_full_edit' => ${($_ = isset($this->services['sulu.content.resource_locator.strategy.tree_full_edit']) ? $this->services['sulu.content.resource_locator.strategy.tree_full_edit'] : $this->getSulu_Content_ResourceLocator_Strategy_TreeFullEditService()) && false ?: '_'}), ${($_ = isset($this->services['sulu_core.webspace.webspace_manager']) ? $this->services['sulu_core.webspace.webspace_manager'] : $this->getSuluCore_Webspace_WebspaceManagerService()) && false ?: '_'});
    }

    /**
     * Gets the private 'sulu.content.rlp.mapper.phpcr' shared service.
     *
     * @return \Sulu\Component\Content\Types\ResourceLocator\Mapper\PhpcrMapper
     */
    protected function getSulu_Content_Rlp_Mapper_PhpcrService()
    {
        $a = ${($_ = isset($this->services['sulu_document_manager.document_inspector']) ? $this->services['sulu_document_manager.document_inspector'] : $this->getSuluDocumentManager_DocumentInspectorService()) && false ?: '_'};

        if (isset($this->services['sulu.content.rlp.mapper.phpcr'])) {
            return $this->services['sulu.content.rlp.mapper.phpcr'];
        }

        return $this->services['sulu.content.rlp.mapper.phpcr'] = new \Sulu\Component\Content\Types\ResourceLocator\Mapper\PhpcrMapper(${($_ = isset($this->services['sulu.phpcr.session']) ? $this->services['sulu.phpcr.session'] : $this->getSulu_Phpcr_SessionService()) && false ?: '_'}, ${($_ = isset($this->services['sulu_document_manager.document_manager']) ? $this->services['sulu_document_manager.document_manager'] : $this->getSuluDocumentManager_DocumentManagerService()) && false ?: '_'}, $a);
    }

    /**
     * Gets the private 'sulu.content.structure_manager' shared service.
     *
     * @return \Sulu\Component\Content\Compat\StructureManager
     */
    protected function getSulu_Content_StructureManagerService()
    {
        return $this->services['sulu.content.structure_manager'] = new \Sulu\Component\Content\Compat\StructureManager(${($_ = isset($this->services['sulu_content.structure.factory']) ? $this->services['sulu_content.structure.factory'] : $this->getSuluContent_Structure_FactoryService()) && false ?: '_'}, ${($_ = isset($this->services['sulu_document_manager.document_inspector']) ? $this->services['sulu_document_manager.document_inspector'] : $this->getSuluDocumentManager_DocumentInspectorService()) && false ?: '_'}, ${($_ = isset($this->services['sulu_content.compat.structure.legacy_property_factory']) ? $this->services['sulu_content.compat.structure.legacy_property_factory'] : $this->getSuluContent_Compat_Structure_LegacyPropertyFactoryService()) && false ?: '_'}, $this->parameters['sulu.content.structure.type_map']);
    }

    /**
     * Gets the private 'sulu.content.type_manager' shared service.
     *
     * @return \Sulu\Component\Content\ContentTypeManager
     */
    protected function getSulu_Content_TypeManagerService()
    {
        $this->services['sulu.content.type_manager'] = $instance = new \Sulu\Component\Content\ContentTypeManager($this);

        $instance->mapAliasToServiceId('text_line', 'sulu.content.type.text_line');
        $instance->mapAliasToServiceId('text_area', 'sulu.content.type.text_area');
        $instance->mapAliasToServiceId('text_editor', 'sulu.content.type.text_editor');
        $instance->mapAliasToServiceId('resource_locator', 'sulu.content.type.resource_locator');
        $instance->mapAliasToServiceId('block', 'sulu.content.type.block');
        $instance->mapAliasToServiceId('contact', 'sulu_contact.content.contact');
        $instance->mapAliasToServiceId('media_selection', 'sulu_media.type.media_selection');
        $instance->mapAliasToServiceId('category_list', 'sulu_category.content.type.category_list');
        $instance->mapAliasToServiceId('snippet', 'sulu_snippet.content.snippet');
        $instance->mapAliasToServiceId('smart_content', 'sulu_content.smart_content.content_type');
        $instance->mapAliasToServiceId('teaser_selection', 'sulu_content.teaser.content_type');
        $instance->mapAliasToServiceId('internal_links', 'sulu.content.type.internal_links');
        $instance->mapAliasToServiceId('single_internal_link', 'sulu.content.type.single_internal_link');
        $instance->mapAliasToServiceId('phone', 'sulu.content.type.phone');
        $instance->mapAliasToServiceId('password', 'sulu.content.type.password');
        $instance->mapAliasToServiceId('url', 'sulu.content.type.url');
        $instance->mapAliasToServiceId('email', 'sulu.content.type.email');
        $instance->mapAliasToServiceId('date', 'sulu.content.type.date');
        $instance->mapAliasToServiceId('time', 'sulu.content.type.time');
        $instance->mapAliasToServiceId('color', 'sulu.content.type.color');
        $instance->mapAliasToServiceId('checkbox', 'sulu.content.type.checkbox');
        $instance->mapAliasToServiceId('multiple_select', 'sulu.content.type.multiple_select');
        $instance->mapAliasToServiceId('single_select', 'sulu.content.type.single_select');
        $instance->mapAliasToServiceId('tag_list', 'sulu_tag.content.type.tag_list');
        $instance->mapAliasToServiceId('location', 'sulu_location.content.type.location');
        $instance->mapAliasToServiceId('route', 'sulu_route.content_type');

        return $instance;
    }

    /**
     * Gets the private 'sulu.persistence.event_subscriber.orm.metadata' shared service.
     *
     * @return \Sulu\Component\Persistence\EventSubscriber\ORM\MetadataSubscriber
     */
    protected function getSulu_Persistence_EventSubscriber_Orm_MetadataService()
    {
        return $this->services['sulu.persistence.event_subscriber.orm.metadata'] = new \Sulu\Component\Persistence\EventSubscriber\ORM\MetadataSubscriber($this->parameters['sulu.persistence.objects']);
    }

    /**
     * Gets the private 'sulu.persistence.event_subscriber.orm.timestampable' shared service.
     *
     * @return \Sulu\Component\Persistence\EventSubscriber\ORM\TimestampableSubscriber
     */
    protected function getSulu_Persistence_EventSubscriber_Orm_TimestampableService()
    {
        return $this->services['sulu.persistence.event_subscriber.orm.timestampable'] = new \Sulu\Component\Persistence\EventSubscriber\ORM\TimestampableSubscriber();
    }

    /**
     * Gets the private 'sulu.persistence.event_subscriber.orm.user_blame' shared service.
     *
     * @return \Sulu\Component\Persistence\EventSubscriber\ORM\UserBlameSubscriber
     */
    protected function getSulu_Persistence_EventSubscriber_Orm_UserBlameService()
    {
        return $this->services['sulu.persistence.event_subscriber.orm.user_blame'] = new \Sulu\Component\Persistence\EventSubscriber\ORM\UserBlameSubscriber(${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage()) && false ?: '_'}, 'Sulu\\Bundle\\SecurityBundle\\Entity\\User');
    }

    /**
     * Gets the private 'sulu.phpcr.session' shared service.
     *
     * @return \Sulu\Component\PHPCR\SessionManager\SessionManager
     */
    protected function getSulu_Phpcr_SessionService()
    {
        return $this->services['sulu.phpcr.session'] = new \Sulu\Component\PHPCR\SessionManager\SessionManager(${($_ = isset($this->services['sulu_document_manager.decorated_default_session']) ? $this->services['sulu_document_manager.decorated_default_session'] : $this->getSuluDocumentManager_DecoratedDefaultSessionService()) && false ?: '_'}, array('base' => 'cmf', 'content' => 'contents', 'route' => 'routes', 'snippet' => 'snippets'));
    }

    /**
     * Gets the private 'sulu.repository.category' shared service.
     *
     * @return \Sulu\Bundle\CategoryBundle\Entity\CategoryRepository
     */
    protected function getSulu_Repository_CategoryService()
    {
        $a = ${($_ = isset($this->services['doctrine.orm.default_entity_manager']) ? $this->services['doctrine.orm.default_entity_manager'] : $this->getDoctrine_Orm_DefaultEntityManagerService()) && false ?: '_'};

        return $this->services['sulu.repository.category'] = new \Sulu\Bundle\CategoryBundle\Entity\CategoryRepository($a, $a->getClassMetadata('Sulu\\Bundle\\CategoryBundle\\Entity\\Category'));
    }

    /**
     * Gets the private 'sulu.repository.category_meta' shared service.
     *
     * @return \Sulu\Bundle\CategoryBundle\Entity\CategoryMetaRepository
     */
    protected function getSulu_Repository_CategoryMetaService()
    {
        $a = ${($_ = isset($this->services['doctrine.orm.default_entity_manager']) ? $this->services['doctrine.orm.default_entity_manager'] : $this->getDoctrine_Orm_DefaultEntityManagerService()) && false ?: '_'};

        return $this->services['sulu.repository.category_meta'] = new \Sulu\Bundle\CategoryBundle\Entity\CategoryMetaRepository($a, $a->getClassMetadata('Sulu\\Bundle\\CategoryBundle\\Entity\\CategoryMeta'));
    }

    /**
     * Gets the private 'sulu.repository.category_translation' shared service.
     *
     * @return \Sulu\Bundle\CategoryBundle\Entity\CategoryTranslationRepository
     */
    protected function getSulu_Repository_CategoryTranslationService()
    {
        $a = ${($_ = isset($this->services['doctrine.orm.default_entity_manager']) ? $this->services['doctrine.orm.default_entity_manager'] : $this->getDoctrine_Orm_DefaultEntityManagerService()) && false ?: '_'};

        return $this->services['sulu.repository.category_translation'] = new \Sulu\Bundle\CategoryBundle\Entity\CategoryTranslationRepository($a, $a->getClassMetadata('Sulu\\Bundle\\CategoryBundle\\Entity\\CategoryTranslation'));
    }

    /**
     * Gets the private 'sulu.repository.contact' shared service.
     *
     * @return \Sulu\Bundle\ContactBundle\Entity\ContactRepository
     */
    protected function getSulu_Repository_ContactService()
    {
        $a = ${($_ = isset($this->services['doctrine.orm.default_entity_manager']) ? $this->services['doctrine.orm.default_entity_manager'] : $this->getDoctrine_Orm_DefaultEntityManagerService()) && false ?: '_'};

        return $this->services['sulu.repository.contact'] = new \Sulu\Bundle\ContactBundle\Entity\ContactRepository($a, $a->getClassMetadata('Sulu\\Bundle\\ContactBundle\\Entity\\Contact'));
    }

    /**
     * Gets the private 'sulu.repository.keyword' shared service.
     *
     * @return \Sulu\Bundle\CategoryBundle\Entity\KeywordRepository
     */
    protected function getSulu_Repository_KeywordService()
    {
        $a = ${($_ = isset($this->services['doctrine.orm.default_entity_manager']) ? $this->services['doctrine.orm.default_entity_manager'] : $this->getDoctrine_Orm_DefaultEntityManagerService()) && false ?: '_'};

        return $this->services['sulu.repository.keyword'] = new \Sulu\Bundle\CategoryBundle\Entity\KeywordRepository($a, $a->getClassMetadata('Sulu\\Bundle\\CategoryBundle\\Entity\\Keyword'));
    }

    /**
     * Gets the private 'sulu.repository.media' shared service.
     *
     * @return \Sulu\Bundle\MediaBundle\Entity\MediaRepository
     */
    protected function getSulu_Repository_MediaService()
    {
        $a = ${($_ = isset($this->services['doctrine.orm.default_entity_manager']) ? $this->services['doctrine.orm.default_entity_manager'] : $this->getDoctrine_Orm_DefaultEntityManagerService()) && false ?: '_'};

        return $this->services['sulu.repository.media'] = new \Sulu\Bundle\MediaBundle\Entity\MediaRepository($a, $a->getClassMetadata('Sulu\\Bundle\\MediaBundle\\Entity\\Media'));
    }

    /**
     * Gets the private 'sulu.repository.tag' shared service.
     *
     * @return \Sulu\Bundle\TagBundle\Entity\TagRepository
     */
    protected function getSulu_Repository_TagService()
    {
        $a = ${($_ = isset($this->services['doctrine.orm.default_entity_manager']) ? $this->services['doctrine.orm.default_entity_manager'] : $this->getDoctrine_Orm_DefaultEntityManagerService()) && false ?: '_'};

        return $this->services['sulu.repository.tag'] = new \Sulu\Bundle\TagBundle\Entity\TagRepository($a, $a->getClassMetadata('Sulu\\Bundle\\TagBundle\\Entity\\Tag'));
    }

    /**
     * Gets the private 'sulu.repository.user' shared service.
     *
     * @return \Sulu\Bundle\SecurityBundle\Entity\UserRepository
     */
    protected function getSulu_Repository_UserService()
    {
        $a = ${($_ = isset($this->services['doctrine.orm.default_entity_manager']) ? $this->services['doctrine.orm.default_entity_manager'] : $this->getDoctrine_Orm_DefaultEntityManagerService()) && false ?: '_'};

        return $this->services['sulu.repository.user'] = new \Sulu\Bundle\SecurityBundle\Entity\UserRepository($a, $a->getClassMetadata('Sulu\\Bundle\\SecurityBundle\\Entity\\User'));
    }

    /**
     * Gets the private 'sulu.util.node_helper' shared service.
     *
     * @return \Sulu\Component\Util\SuluNodeHelper
     */
    protected function getSulu_Util_NodeHelperService()
    {
        return $this->services['sulu.util.node_helper'] = new \Sulu\Component\Util\SuluNodeHelper(${($_ = isset($this->services['sulu_document_manager.decorated_default_session']) ? $this->services['sulu_document_manager.decorated_default_session'] : $this->getSuluDocumentManager_DecoratedDefaultSessionService()) && false ?: '_'}, 'i18n', array('base' => 'cmf', 'content' => 'contents', 'route' => 'routes', 'snippet' => 'snippets'), ${($_ = isset($this->services['sulu_content.structure.factory']) ? $this->services['sulu_content.structure.factory'] : $this->getSuluContent_Structure_FactoryService()) && false ?: '_'});
    }

    /**
     * Gets the private 'sulu_category.category_manager' shared service.
     *
     * @return \Sulu\Bundle\CategoryBundle\Category\CategoryManager
     */
    protected function getSuluCategory_CategoryManagerService()
    {
        return $this->services['sulu_category.category_manager'] = new \Sulu\Bundle\CategoryBundle\Category\CategoryManager(${($_ = isset($this->services['sulu.repository.category']) ? $this->services['sulu.repository.category'] : $this->getSulu_Repository_CategoryService()) && false ?: '_'}, ${($_ = isset($this->services['sulu.repository.category_meta']) ? $this->services['sulu.repository.category_meta'] : $this->getSulu_Repository_CategoryMetaService()) && false ?: '_'}, ${($_ = isset($this->services['sulu.repository.category_translation']) ? $this->services['sulu.repository.category_translation'] : $this->getSulu_Repository_CategoryTranslationService()) && false ?: '_'}, ${($_ = isset($this->services['sulu.repository.user']) ? $this->services['sulu.repository.user'] : $this->getSulu_Repository_UserService()) && false ?: '_'}, ${($_ = isset($this->services['sulu_category.keyword_manager']) ? $this->services['sulu_category.keyword_manager'] : $this->getSuluCategory_KeywordManagerService()) && false ?: '_'}, ${($_ = isset($this->services['doctrine.orm.default_entity_manager']) ? $this->services['doctrine.orm.default_entity_manager'] : $this->getDoctrine_Orm_DefaultEntityManagerService()) && false ?: '_'}, ${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->getDebug_EventDispatcherService()) && false ?: '_'});
    }

    /**
     * Gets the private 'sulu_category.category_request_handler' shared service.
     *
     * @return \Sulu\Component\Category\Request\CategoryRequestHandler
     */
    protected function getSuluCategory_CategoryRequestHandlerService()
    {
        return $this->services['sulu_category.category_request_handler'] = new \Sulu\Component\Category\Request\CategoryRequestHandler(${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()) && false ?: '_'});
    }

    /**
     * Gets the private 'sulu_category.keyword_manager' shared service.
     *
     * @return \Sulu\Bundle\CategoryBundle\Category\KeywordManager
     */
    protected function getSuluCategory_KeywordManagerService()
    {
        return $this->services['sulu_category.keyword_manager'] = new \Sulu\Bundle\CategoryBundle\Category\KeywordManager(${($_ = isset($this->services['sulu.repository.keyword']) ? $this->services['sulu.repository.keyword'] : $this->getSulu_Repository_KeywordService()) && false ?: '_'}, ${($_ = isset($this->services['sulu.repository.category_translation']) ? $this->services['sulu.repository.category_translation'] : $this->getSulu_Repository_CategoryTranslationService()) && false ?: '_'}, ${($_ = isset($this->services['doctrine.orm.default_entity_manager']) ? $this->services['doctrine.orm.default_entity_manager'] : $this->getDoctrine_Orm_DefaultEntityManagerService()) && false ?: '_'});
    }

    /**
     * Gets the private 'sulu_category.twig_extension' shared service.
     *
     * @return \Sulu\Bundle\CategoryBundle\Twig\CategoryTwigExtension
     */
    protected function getSuluCategory_TwigExtensionService()
    {
        return $this->services['sulu_category.twig_extension'] = new \Sulu\Bundle\CategoryBundle\Twig\CategoryTwigExtension(${($_ = isset($this->services['sulu_category.category_manager']) ? $this->services['sulu_category.category_manager'] : $this->getSuluCategory_CategoryManagerService()) && false ?: '_'}, ${($_ = isset($this->services['sulu_category.category_request_handler']) ? $this->services['sulu_category.category_request_handler'] : $this->getSuluCategory_CategoryRequestHandlerService()) && false ?: '_'}, ${($_ = isset($this->services['jms_serializer']) ? $this->services['jms_serializer'] : $this->getJmsSerializerService()) && false ?: '_'}, ${($_ = isset($this->services['sulu_core.cache.memoize']) ? $this->services['sulu_core.cache.memoize'] : $this->getSuluCore_Cache_MemoizeService()) && false ?: '_'});
    }

    /**
     * Gets the private 'sulu_contact.account_listener' shared service.
     *
     * @return \Sulu\Bundle\ContactBundle\EventListener\AccountListener
     */
    protected function getSuluContact_AccountListenerService()
    {
        return $this->services['sulu_contact.account_listener'] = new \Sulu\Bundle\ContactBundle\EventListener\AccountListener();
    }

    /**
     * Gets the private 'sulu_contact.doctrine.invalidation_listener' shared service.
     *
     * @return \Sulu\Bundle\ContactBundle\EventListener\CacheInvalidationListener
     */
    protected function getSuluContact_Doctrine_InvalidationListenerService()
    {
        return $this->services['sulu_contact.doctrine.invalidation_listener'] = new \Sulu\Bundle\ContactBundle\EventListener\CacheInvalidationListener(${($_ = isset($this->services['sulu_http_cache.handler.aggregate']) ? $this->services['sulu_http_cache.handler.aggregate'] : $this->getSuluHttpCache_Handler_AggregateService()) && false ?: '_'});
    }

    /**
     * Gets the private 'sulu_contact.twig' shared service.
     *
     * @return \Sulu\Bundle\ContactBundle\Twig\ContactTwigExtension
     */
    protected function getSuluContact_TwigService()
    {
        return $this->services['sulu_contact.twig'] = new \Sulu\Bundle\ContactBundle\Twig\ContactTwigExtension(${($_ = isset($this->services['sulu_contact.twig.cache']) ? $this->services['sulu_contact.twig.cache'] : $this->services['sulu_contact.twig.cache'] = new \Doctrine\Common\Cache\ArrayCache()) && false ?: '_'}, ${($_ = isset($this->services['sulu.repository.contact']) ? $this->services['sulu.repository.contact'] : $this->getSulu_Repository_ContactService()) && false ?: '_'});
    }

    /**
     * Gets the private 'sulu_contact.twig.cache' shared service.
     *
     * @return \Doctrine\Common\Cache\ArrayCache
     */
    protected function getSuluContact_Twig_CacheService()
    {
        return $this->services['sulu_contact.twig.cache'] = new \Doctrine\Common\Cache\ArrayCache();
    }

    /**
     * Gets the private 'sulu_content.compat.structure.legacy_property_factory' shared service.
     *
     * @return \Sulu\Component\Content\Compat\Structure\LegacyPropertyFactory
     */
    protected function getSuluContent_Compat_Structure_LegacyPropertyFactoryService()
    {
        return $this->services['sulu_content.compat.structure.legacy_property_factory'] = new \Sulu\Component\Content\Compat\Structure\LegacyPropertyFactory(${($_ = isset($this->services['sulu_document_manager.namespace_registry']) ? $this->services['sulu_document_manager.namespace_registry'] : $this->getSuluDocumentManager_NamespaceRegistryService()) && false ?: '_'});
    }

    /**
     * Gets the private 'sulu_content.content_repository' shared service.
     *
     * @return \Sulu\Component\Content\Repository\ContentRepository
     */
    protected function getSuluContent_ContentRepositoryService()
    {
        return $this->services['sulu_content.content_repository'] = new \Sulu\Component\Content\Repository\ContentRepository(${($_ = isset($this->services['sulu.phpcr.session']) ? $this->services['sulu.phpcr.session'] : $this->getSulu_Phpcr_SessionService()) && false ?: '_'}, ${($_ = isset($this->services['sulu_document_manager.property_encoder']) ? $this->services['sulu_document_manager.property_encoder'] : $this->getSuluDocumentManager_PropertyEncoderService()) && false ?: '_'}, ${($_ = isset($this->services['sulu_core.webspace.webspace_manager']) ? $this->services['sulu_core.webspace.webspace_manager'] : $this->getSuluCore_Webspace_WebspaceManagerService()) && false ?: '_'}, ${($_ = isset($this->services['sulu.content.localization_finder']) ? $this->services['sulu.content.localization_finder'] : $this->getSulu_Content_LocalizationFinderService()) && false ?: '_'}, ${($_ = isset($this->services['sulu.content.structure_manager']) ? $this->services['sulu.content.structure_manager'] : $this->getSulu_Content_StructureManagerService()) && false ?: '_'}, ${($_ = isset($this->services['sulu.util.node_helper']) ? $this->services['sulu.util.node_helper'] : $this->getSulu_Util_NodeHelperService()) && false ?: '_'});
    }

    /**
     * Gets the private 'sulu_content.export.manager' shared service.
     *
     * @return \Sulu\Component\Export\Manager\ExportManager
     */
    protected function getSuluContent_Export_ManagerService()
    {
        $this->services['sulu_content.export.manager'] = $instance = new \Sulu\Component\Export\Manager\ExportManager(${($_ = isset($this->services['sulu.content.type_manager']) ? $this->services['sulu.content.type_manager'] : $this->getSulu_Content_TypeManagerService()) && false ?: '_'});

        $instance->add('text_line', '1.2.xliff', array('translate' => true));
        $instance->add('text_area', '1.2.xliff', array('translate' => true));
        $instance->add('text_editor', '1.2.xliff', array('translate' => true));
        $instance->add('resource_locator', '1.2.xliff', array('translate' => false));
        $instance->add('block', '1.2.xliff', array('translate' => false));
        $instance->add('contact', '1.2.xliff', array('translate' => false));
        $instance->add('media_selection', '1.2.xliff', array('translate' => false));
        $instance->add('category_list', '1.2.xliff', array('translate' => false));
        $instance->add('snippet', '1.2.xliff', array('translate' => false));
        $instance->add('smart_content', '1.2.xliff', array('translate' => false));
        $instance->add('teaser_selection', '1.2.xliff', array('translate' => false));
        $instance->add('internal_links', '1.2.xliff', array('translate' => false));
        $instance->add('single_internal_link', '1.2.xliff', array('translate' => false));
        $instance->add('phone', '1.2.xliff', array('translate' => false));
        $instance->add('password', '1.2.xliff', array('translate' => false));
        $instance->add('url', '1.2.xliff', array('translate' => false));
        $instance->add('email', '1.2.xliff', array('translate' => false));
        $instance->add('date', '1.2.xliff', array('translate' => false));
        $instance->add('time', '1.2.xliff', array('translate' => false));
        $instance->add('color', '1.2.xliff', array('translate' => false));
        $instance->add('checkbox', '1.2.xliff', array('translate' => false));
        $instance->add('multiple_select', '1.2.xliff', array('translate' => false));
        $instance->add('single_select', '1.2.xliff', array('translate' => false));
        $instance->add('tag_list', '1.2.xliff', array('translate' => false));
        $instance->add('location', '1.2.xliff', array('translate' => false));

        return $instance;
    }

    /**
     * Gets the private 'sulu_content.export_twig_extension' shared service.
     *
     * @return \Sulu\Bundle\ContentBundle\Twig\ExportTwigExtension
     */
    protected function getSuluContent_ExportTwigExtensionService()
    {
        return $this->services['sulu_content.export_twig_extension'] = new \Sulu\Bundle\ContentBundle\Twig\ExportTwigExtension(${($_ = isset($this->services['sulu_content.export.manager']) ? $this->services['sulu_content.export.manager'] : $this->getSuluContent_Export_ManagerService()) && false ?: '_'});
    }

    /**
     * Gets the private 'sulu_content.extension.excerpt' shared service.
     *
     * @return \Sulu\Bundle\ContentBundle\Content\Structure\ExcerptStructureExtension
     */
    protected function getSuluContent_Extension_ExcerptService()
    {
        return $this->services['sulu_content.extension.excerpt'] = new \Sulu\Bundle\ContentBundle\Content\Structure\ExcerptStructureExtension(${($_ = isset($this->services['sulu.content.structure_manager']) ? $this->services['sulu.content.structure_manager'] : $this->getSulu_Content_StructureManagerService()) && false ?: '_'}, ${($_ = isset($this->services['sulu.content.type_manager']) ? $this->services['sulu.content.type_manager'] : $this->getSulu_Content_TypeManagerService()) && false ?: '_'}, ${($_ = isset($this->services['sulu_content.export.manager']) ? $this->services['sulu_content.export.manager'] : $this->getSuluContent_Export_ManagerService()) && false ?: '_'}, ${($_ = isset($this->services['sulu_content.import.manager']) ? $this->services['sulu_content.import.manager'] : $this->getSuluContent_Import_ManagerService()) && false ?: '_'}, ${($_ = isset($this->services['sulu_search.search.factory']) ? $this->services['sulu_search.search.factory'] : $this->services['sulu_search.search.factory'] = new \Sulu\Bundle\SearchBundle\Search\Factory()) && false ?: '_'});
    }

    /**
     * Gets the private 'sulu_content.extension.manager' shared service.
     *
     * @return \Sulu\Component\Content\Extension\ExtensionManager
     */
    protected function getSuluContent_Extension_ManagerService()
    {
        $this->services['sulu_content.extension.manager'] = $instance = new \Sulu\Component\Content\Extension\ExtensionManager();

        $instance->addExtension(${($_ = isset($this->services['sulu_content.extension.seo']) ? $this->services['sulu_content.extension.seo'] : $this->services['sulu_content.extension.seo'] = new \Sulu\Bundle\ContentBundle\Content\Structure\SeoStructureExtension()) && false ?: '_'});
        $instance->addExtension(${($_ = isset($this->services['sulu_content.extension.excerpt']) ? $this->services['sulu_content.extension.excerpt'] : $this->getSuluContent_Extension_ExcerptService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'sulu_content.extension.seo' shared service.
     *
     * @return \Sulu\Bundle\ContentBundle\Content\Structure\SeoStructureExtension
     */
    protected function getSuluContent_Extension_SeoService()
    {
        return $this->services['sulu_content.extension.seo'] = new \Sulu\Bundle\ContentBundle\Content\Structure\SeoStructureExtension();
    }

    /**
     * Gets the private 'sulu_content.import.manager' shared service.
     *
     * @return \Sulu\Component\Import\Manager\ImportManager
     */
    protected function getSuluContent_Import_ManagerService()
    {
        return $this->services['sulu_content.import.manager'] = new \Sulu\Component\Import\Manager\ImportManager(${($_ = isset($this->services['sulu.content.type_manager']) ? $this->services['sulu.content.type_manager'] : $this->getSulu_Content_TypeManagerService()) && false ?: '_'});
    }

    /**
     * Gets the private 'sulu_content.link_tag' shared service.
     *
     * @return \Sulu\Bundle\ContentBundle\Markup\LinkTag
     */
    protected function getSuluContent_LinkTagService()
    {
        return $this->services['sulu_content.link_tag'] = new \Sulu\Bundle\ContentBundle\Markup\LinkTag(${($_ = isset($this->services['sulu_content.link_tag.provider_pool']) ? $this->services['sulu_content.link_tag.provider_pool'] : $this->getSuluContent_LinkTag_ProviderPoolService()) && false ?: '_'});
    }

    /**
     * Gets the private 'sulu_content.link_tag.page_provider' shared service.
     *
     * @return \Sulu\Bundle\ContentBundle\Markup\Link\PageLinkProvider
     */
    protected function getSuluContent_LinkTag_PageProviderService()
    {
        return $this->services['sulu_content.link_tag.page_provider'] = new \Sulu\Bundle\ContentBundle\Markup\Link\PageLinkProvider(${($_ = isset($this->services['sulu_content.content_repository']) ? $this->services['sulu_content.content_repository'] : $this->getSuluContent_ContentRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['sulu_core.webspace.webspace_manager']) ? $this->services['sulu_core.webspace.webspace_manager'] : $this->getSuluCore_Webspace_WebspaceManagerService()) && false ?: '_'}, ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()) && false ?: '_'}, 'dev');
    }

    /**
     * Gets the private 'sulu_content.link_tag.provider_pool' shared service.
     *
     * @return \Sulu\Bundle\ContentBundle\Markup\Link\LinkProviderPool
     */
    protected function getSuluContent_LinkTag_ProviderPoolService()
    {
        return $this->services['sulu_content.link_tag.provider_pool'] = new \Sulu\Bundle\ContentBundle\Markup\Link\LinkProviderPool(array('page' => ${($_ = isset($this->services['sulu_content.link_tag.page_provider']) ? $this->services['sulu_content.link_tag.page_provider'] : $this->getSuluContent_LinkTag_PageProviderService()) && false ?: '_'}));
    }

    /**
     * Gets the private 'sulu_content.structure.factory' shared service.
     *
     * @return \Sulu\Component\Content\Metadata\Factory\StructureMetadataFactory
     */
    protected function getSuluContent_Structure_FactoryService()
    {
        return $this->services['sulu_content.structure.factory'] = new \Sulu\Component\Content\Metadata\Factory\StructureMetadataFactory(new \Sulu\Component\Content\Metadata\Loader\XmlLoader(${($_ = isset($this->services['sulu.content.type_manager']) ? $this->services['sulu.content.type_manager'] : $this->getSulu_Content_TypeManagerService()) && false ?: '_'}, ${($_ = isset($this->services['sulu_http_cache.cache_lifetime.resolver']) ? $this->services['sulu_http_cache.cache_lifetime.resolver'] : $this->services['sulu_http_cache.cache_lifetime.resolver'] = new \Sulu\Component\HttpCache\CacheLifetimeResolver()) && false ?: '_'}), $this->getParameter('sulu.content.structure.paths'), $this->parameters['sulu.content.structure.default_types'], ($this->targetDirs[0].'/sulu/structures'), true);
    }

    /**
     * Gets the private 'sulu_content.twig_extension' shared service.
     *
     * @return \Sulu\Bundle\ContentBundle\Twig\ContentTwigExtension
     */
    protected function getSuluContent_TwigExtensionService()
    {
        return $this->services['sulu_content.twig_extension'] = new \Sulu\Bundle\ContentBundle\Twig\ContentTwigExtension(${($_ = isset($this->services['sulu.content.type_manager']) ? $this->services['sulu.content.type_manager'] : $this->getSulu_Content_TypeManagerService()) && false ?: '_'});
    }

    /**
     * Gets the private 'sulu_core.array_serialization_visitor' shared service.
     *
     * @return \Sulu\Component\Serializer\ArraySerializationVisitor
     */
    protected function getSuluCore_ArraySerializationVisitorService()
    {
        return $this->services['sulu_core.array_serialization_visitor'] = new \Sulu\Component\Serializer\ArraySerializationVisitor(${($_ = isset($this->services['jms_serializer.naming_strategy']) ? $this->services['jms_serializer.naming_strategy'] : $this->getJmsSerializer_NamingStrategyService()) && false ?: '_'});
    }

    /**
     * Gets the private 'sulu_core.cache.memoize' shared service.
     *
     * @return \Sulu\Component\Cache\Memoize
     */
    protected function getSuluCore_Cache_MemoizeService()
    {
        return $this->services['sulu_core.cache.memoize'] = new \Sulu\Component\Cache\Memoize(${($_ = isset($this->services['sulu_core.cache.memoize.cache']) ? $this->services['sulu_core.cache.memoize.cache'] : $this->services['sulu_core.cache.memoize.cache'] = new \Doctrine\Common\Cache\ArrayCache()) && false ?: '_'}, 1);
    }

    /**
     * Gets the private 'sulu_core.cache.memoize.cache' shared service.
     *
     * @return \Doctrine\Common\Cache\ArrayCache
     */
    protected function getSuluCore_Cache_Memoize_CacheService()
    {
        return $this->services['sulu_core.cache.memoize.cache'] = new \Doctrine\Common\Cache\ArrayCache();
    }

    /**
     * Gets the private 'sulu_core.doctrine.references' shared service.
     *
     * @return \Sulu\Component\Doctrine\ReferencesOption
     */
    protected function getSuluCore_Doctrine_ReferencesService()
    {
        return $this->services['sulu_core.doctrine.references'] = new \Sulu\Component\Doctrine\ReferencesOption(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->getDoctrineService()) && false ?: '_'});
    }

    /**
     * Gets the private 'sulu_core.proxy_manager.configuration' shared service.
     *
     * @return \ProxyManager\Configuration
     */
    protected function getSuluCore_ProxyManager_ConfigurationService()
    {
        $this->services['sulu_core.proxy_manager.configuration'] = $instance = new \ProxyManager\Configuration();

        $instance->setProxiesTargetDir(($this->targetDirs[0].'/sulu/proxies'));
        $instance->setGeneratorStrategy(new \ProxyManager\GeneratorStrategy\FileWriterGeneratorStrategy(new \ProxyManager\FileLocator\FileLocator(${($_ = isset($this->services['sulu_core.proxy_manager.configuration']) ? $this->services['sulu_core.proxy_manager.configuration'] : $this->getSuluCore_ProxyManager_ConfigurationService()) && false ?: '_'}->getProxiesTargetDir())));

        return $instance;
    }

    /**
     * Gets the private 'sulu_core.request_processor.admin' shared service.
     *
     * @return \Sulu\Component\Webspace\Analyzer\Attributes\AdminRequestProcessor
     */
    protected function getSuluCore_RequestProcessor_AdminService()
    {
        return $this->services['sulu_core.request_processor.admin'] = new \Sulu\Component\Webspace\Analyzer\Attributes\AdminRequestProcessor(${($_ = isset($this->services['sulu_core.webspace.webspace_manager']) ? $this->services['sulu_core.webspace.webspace_manager'] : $this->getSuluCore_Webspace_WebspaceManagerService()) && false ?: '_'}, 'dev');
    }

    /**
     * Gets the private 'sulu_core.webspace.loader.delegator' shared service.
     *
     * @return \Symfony\Component\Config\Loader\DelegatingLoader
     */
    protected function getSuluCore_Webspace_Loader_DelegatorService()
    {
        return $this->services['sulu_core.webspace.loader.delegator'] = new \Symfony\Component\Config\Loader\DelegatingLoader(${($_ = isset($this->services['sulu_core.webspace.loader.resolver']) ? $this->services['sulu_core.webspace.loader.resolver'] : $this->getSuluCore_Webspace_Loader_ResolverService()) && false ?: '_'});
    }

    /**
     * Gets the private 'sulu_core.webspace.loader.resolver' shared service.
     *
     * @return \Symfony\Component\Config\Loader\LoaderResolver
     */
    protected function getSuluCore_Webspace_Loader_ResolverService()
    {
        return $this->services['sulu_core.webspace.loader.resolver'] = new \Symfony\Component\Config\Loader\LoaderResolver(array(0 => ${($_ = isset($this->services['sulu_core.webspace.loader.xml.1.1']) ? $this->services['sulu_core.webspace.loader.xml.1.1'] : $this->getSuluCore_Webspace_Loader_Xml_1_1Service()) && false ?: '_'}, 1 => ${($_ = isset($this->services['sulu_core.webspace.loader.xml.1.0']) ? $this->services['sulu_core.webspace.loader.xml.1.0'] : $this->getSuluCore_Webspace_Loader_Xml_1_0Service()) && false ?: '_'}));
    }

    /**
     * Gets the private 'sulu_core.webspace.loader.xml.1.0' shared service.
     *
     * @return \Sulu\Component\Webspace\Loader\XmlFileLoader10
     */
    protected function getSuluCore_Webspace_Loader_Xml_1_0Service()
    {
        return $this->services['sulu_core.webspace.loader.xml.1.0'] = new \Sulu\Component\Webspace\Loader\XmlFileLoader10(${($_ = isset($this->services['file_locator']) ? $this->services['file_locator'] : $this->services['file_locator'] = new \Symfony\Component\HttpKernel\Config\FileLocator(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'}, ($this->targetDirs[4].'\\app/Resources'), array(0 => ($this->targetDirs[4].'\\app')))) && false ?: '_'});
    }

    /**
     * Gets the private 'sulu_core.webspace.loader.xml.1.1' shared service.
     *
     * @return \Sulu\Component\Webspace\Loader\XmlFileLoader11
     */
    protected function getSuluCore_Webspace_Loader_Xml_1_1Service()
    {
        return $this->services['sulu_core.webspace.loader.xml.1.1'] = new \Sulu\Component\Webspace\Loader\XmlFileLoader11(${($_ = isset($this->services['file_locator']) ? $this->services['file_locator'] : $this->services['file_locator'] = new \Symfony\Component\HttpKernel\Config\FileLocator(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'}, ($this->targetDirs[4].'\\app/Resources'), array(0 => ($this->targetDirs[4].'\\app')))) && false ?: '_'});
    }

    /**
     * Gets the private 'sulu_core.webspace.request_analyzer' shared service.
     *
     * @return \Sulu\Component\Webspace\Analyzer\RequestAnalyzer
     */
    protected function getSuluCore_Webspace_RequestAnalyzerService()
    {
        return $this->services['sulu_core.webspace.request_analyzer'] = new \Sulu\Component\Webspace\Analyzer\RequestAnalyzer(${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()) && false ?: '_'}, array(0 => ${($_ = isset($this->services['sulu_core.request_processor.admin']) ? $this->services['sulu_core.request_processor.admin'] : $this->getSuluCore_RequestProcessor_AdminService()) && false ?: '_'}));
    }

    /**
     * Gets the private 'sulu_core.webspace.settings_manager' shared service.
     *
     * @return \Sulu\Component\Webspace\Settings\SettingsManager
     */
    protected function getSuluCore_Webspace_SettingsManagerService()
    {
        return $this->services['sulu_core.webspace.settings_manager'] = new \Sulu\Component\Webspace\Settings\SettingsManager(${($_ = isset($this->services['sulu_document_manager.session_manager']) ? $this->services['sulu_document_manager.session_manager'] : $this->getSuluDocumentManager_SessionManagerService()) && false ?: '_'}, ${($_ = isset($this->services['sulu.phpcr.session']) ? $this->services['sulu.phpcr.session'] : $this->getSulu_Phpcr_SessionService()) && false ?: '_'});
    }

    /**
     * Gets the private 'sulu_core.webspace.webspace_manager' shared service.
     *
     * @return \Sulu\Component\Webspace\Manager\WebspaceManager
     */
    protected function getSuluCore_Webspace_WebspaceManagerService()
    {
        return $this->services['sulu_core.webspace.webspace_manager'] = new \Sulu\Component\Webspace\Manager\WebspaceManager(${($_ = isset($this->services['sulu_core.webspace.loader.delegator']) ? $this->services['sulu_core.webspace.loader.delegator'] : $this->getSuluCore_Webspace_Loader_DelegatorService()) && false ?: '_'}, ${($_ = isset($this->services['sulu_core.webspace.webspace_manager.url_replacer']) ? $this->services['sulu_core.webspace.webspace_manager.url_replacer'] : $this->services['sulu_core.webspace.webspace_manager.url_replacer'] = new \Sulu\Component\Webspace\Url\Replacer()) && false ?: '_'}, array('config_dir' => ($this->targetDirs[4].'\\app/Resources/webspaces'), 'cache_dir' => ($this->targetDirs[0].'/sulu'), 'debug' => true, 'cache_class' => 'adminWebspaceCollectionCache', 'base_class' => 'WebspaceCollection'));
    }

    /**
     * Gets the private 'sulu_core.webspace.webspace_manager.url_replacer' shared service.
     *
     * @return \Sulu\Component\Webspace\Url\Replacer
     */
    protected function getSuluCore_Webspace_WebspaceManager_UrlReplacerService()
    {
        return $this->services['sulu_core.webspace.webspace_manager.url_replacer'] = new \Sulu\Component\Webspace\Url\Replacer();
    }

    /**
     * Gets the private 'sulu_document_manager.decorated_default_session' shared service.
     *
     * @return \Sulu\Bundle\DocumentManagerBundle\Session\Session
     */
    protected function getSuluDocumentManager_DecoratedDefaultSessionService()
    {
        return $this->services['sulu_document_manager.decorated_default_session'] = new \Sulu\Bundle\DocumentManagerBundle\Session\Session(${($_ = isset($this->services['doctrine_phpcr.jackalope.repository.default']) ? $this->services['doctrine_phpcr.jackalope.repository.default'] : $this->getDoctrinePhpcr_Jackalope_Repository_DefaultService()) && false ?: '_'}->login(new \PHPCR\SimpleCredentials('admin', 'admin'), 'default'));
    }

    /**
     * Gets the private 'sulu_document_manager.decorated_live_session' shared service.
     *
     * @return \Sulu\Bundle\DocumentManagerBundle\Session\Session
     */
    protected function getSuluDocumentManager_DecoratedLiveSessionService()
    {
        return $this->services['sulu_document_manager.decorated_live_session'] = new \Sulu\Bundle\DocumentManagerBundle\Session\Session(${($_ = isset($this->services['doctrine_phpcr.jackalope.repository.live']) ? $this->services['doctrine_phpcr.jackalope.repository.live'] : $this->getDoctrinePhpcr_Jackalope_Repository_LiveService()) && false ?: '_'}->login(new \PHPCR\SimpleCredentials('admin', 'admin'), 'default_live'));
    }

    /**
     * Gets the private 'sulu_document_manager.document_inspector' shared service.
     *
     * @return \Sulu\Bundle\DocumentManagerBundle\Bridge\DocumentInspector
     */
    protected function getSuluDocumentManager_DocumentInspectorService()
    {
        $a = ${($_ = isset($this->services['sulu_document_manager.proxy_factory']) ? $this->services['sulu_document_manager.proxy_factory'] : $this->getSuluDocumentManager_ProxyFactoryService()) && false ?: '_'};

        if (isset($this->services['sulu_document_manager.document_inspector'])) {
            return $this->services['sulu_document_manager.document_inspector'];
        }

        return $this->services['sulu_document_manager.document_inspector'] = new \Sulu\Bundle\DocumentManagerBundle\Bridge\DocumentInspector(${($_ = isset($this->services['sulu_document_manager.document_registry']) ? $this->services['sulu_document_manager.document_registry'] : $this->services['sulu_document_manager.document_registry'] = new \Sulu\Component\DocumentManager\DocumentRegistry('en')) && false ?: '_'}, ${($_ = isset($this->services['sulu_document_manager.path_segment_registry']) ? $this->services['sulu_document_manager.path_segment_registry'] : $this->getSuluDocumentManager_PathSegmentRegistryService()) && false ?: '_'}, ${($_ = isset($this->services['sulu_document_manager.namespace_registry']) ? $this->services['sulu_document_manager.namespace_registry'] : $this->getSuluDocumentManager_NamespaceRegistryService()) && false ?: '_'}, $a, ${($_ = isset($this->services['sulu_document_manager.metadata_factory']) ? $this->services['sulu_document_manager.metadata_factory'] : $this->getSuluDocumentManager_MetadataFactoryService()) && false ?: '_'}, ${($_ = isset($this->services['sulu_content.structure.factory']) ? $this->services['sulu_content.structure.factory'] : $this->getSuluContent_Structure_FactoryService()) && false ?: '_'}, ${($_ = isset($this->services['sulu_document_manager.property_encoder']) ? $this->services['sulu_document_manager.property_encoder'] : $this->getSuluDocumentManager_PropertyEncoderService()) && false ?: '_'}, ${($_ = isset($this->services['sulu_core.webspace.webspace_manager']) ? $this->services['sulu_core.webspace.webspace_manager'] : $this->getSuluCore_Webspace_WebspaceManagerService()) && false ?: '_'});
    }

    /**
     * Gets the private 'sulu_document_manager.document_manager' shared service.
     *
     * @return \Sulu\Component\DocumentManager\DocumentManager
     */
    protected function getSuluDocumentManager_DocumentManagerService()
    {
        return $this->services['sulu_document_manager.document_manager'] = new \Sulu\Component\DocumentManager\DocumentManager(${($_ = isset($this->services['sulu_document_manager.event_dispatcher']) ? $this->services['sulu_document_manager.event_dispatcher'] : $this->getSuluDocumentManager_EventDispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['sulu_document_manager.node_manager']) ? $this->services['sulu_document_manager.node_manager'] : $this->getSuluDocumentManager_NodeManagerService()) && false ?: '_'});
    }

    /**
     * Gets the private 'sulu_document_manager.document_registry' shared service.
     *
     * @return \Sulu\Component\DocumentManager\DocumentRegistry
     */
    protected function getSuluDocumentManager_DocumentRegistryService()
    {
        return $this->services['sulu_document_manager.document_registry'] = new \Sulu\Component\DocumentManager\DocumentRegistry('en');
    }

    /**
     * Gets the private 'sulu_document_manager.event_dispatcher' shared service.
     *
     * @return \Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher
     */
    protected function getSuluDocumentManager_EventDispatcherService()
    {
        $this->services['sulu_document_manager.event_dispatcher'] = $instance = new \Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher($this);

        $instance->addListener('sulu_document_manager.persist', array(0 => function () {
            return ${($_ = isset($this->services['sulu_content.search.event_subscriber.structure']) ? $this->services['sulu_content.search.event_subscriber.structure'] : $this->load('getSuluContent_Search_EventSubscriber_StructureService.php')) && false ?: '_'};
        }, 1 => 'indexPersistedDocument'), -10);
        $instance->addListener('sulu_document_manager.publish', array(0 => function () {
            return ${($_ = isset($this->services['sulu_content.search.event_subscriber.structure']) ? $this->services['sulu_content.search.event_subscriber.structure'] : $this->load('getSuluContent_Search_EventSubscriber_StructureService.php')) && false ?: '_'};
        }, 1 => 'indexPublishedDocument'), -256);
        $instance->addListener('sulu_document_manager.remove', array(0 => function () {
            return ${($_ = isset($this->services['sulu_content.search.event_subscriber.structure']) ? $this->services['sulu_content.search.event_subscriber.structure'] : $this->load('getSuluContent_Search_EventSubscriber_StructureService.php')) && false ?: '_'};
        }, 1 => 'deindexRemovedDocument'), 600);
        $instance->addListener('sulu_document_manager.unpublish', array(0 => function () {
            return ${($_ = isset($this->services['sulu_content.search.event_subscriber.structure']) ? $this->services['sulu_content.search.event_subscriber.structure'] : $this->load('getSuluContent_Search_EventSubscriber_StructureService.php')) && false ?: '_'};
        }, 1 => 'deindexUnpublishedDocument'), -1024);
        $instance->addListener('sulu_document_manager.remove_draft', array(0 => function () {
            return ${($_ = isset($this->services['sulu_content.search.event_subscriber.structure']) ? $this->services['sulu_content.search.event_subscriber.structure'] : $this->load('getSuluContent_Search_EventSubscriber_StructureService.php')) && false ?: '_'};
        }, 1 => 'indexDocumentAfterRemoveDraft'), -1024);
        $instance->addListener('sulu_document_manager.persist', array(0 => function () {
            return ${($_ = isset($this->services['sulu_content.document.subscriber.content']) ? $this->services['sulu_content.document.subscriber.content'] : $this->load('getSuluContent_Document_Subscriber_ContentService.php')) && false ?: '_'};
        }, 1 => 'saveStructureData'), 0);
        $instance->addListener('sulu_document_manager.persist', array(0 => function () {
            return ${($_ = isset($this->services['sulu_content.document.subscriber.content']) ? $this->services['sulu_content.document.subscriber.content'] : $this->load('getSuluContent_Document_Subscriber_ContentService.php')) && false ?: '_'};
        }, 1 => 'handlePersistStagedProperties'), 50);
        $instance->addListener('sulu_document_manager.persist', array(0 => function () {
            return ${($_ = isset($this->services['sulu_content.document.subscriber.content']) ? $this->services['sulu_content.document.subscriber.content'] : $this->load('getSuluContent_Document_Subscriber_ContentService.php')) && false ?: '_'};
        }, 1 => 'handlePersistStructureType'), 100);
        $instance->addListener('sulu_document_manager.publish', array(0 => function () {
            return ${($_ = isset($this->services['sulu_content.document.subscriber.content']) ? $this->services['sulu_content.document.subscriber.content'] : $this->load('getSuluContent_Document_Subscriber_ContentService.php')) && false ?: '_'};
        }, 1 => 'saveStructureData'), 0);
        $instance->addListener('sulu_document_manager.hydrate', array(0 => function () {
            return ${($_ = isset($this->services['sulu_content.document.subscriber.content']) ? $this->services['sulu_content.document.subscriber.content'] : $this->load('getSuluContent_Document_Subscriber_ContentService.php')) && false ?: '_'};
        }, 1 => 'handleHydrate'), 0);
        $instance->addListener('sulu_document_manager.configure_options', array(0 => function () {
            return ${($_ = isset($this->services['sulu_content.document.subscriber.content']) ? $this->services['sulu_content.document.subscriber.content'] : $this->load('getSuluContent_Document_Subscriber_ContentService.php')) && false ?: '_'};
        }, 1 => 'configureOptions'), 0);
        $instance->addListener('sulu_document_manager.metadata_load', array(0 => function () {
            return ${($_ = isset($this->services['sulu_navigationContext.document.subscriber.navigation_context']) ? $this->services['sulu_navigationContext.document.subscriber.navigation_context'] : $this->services['sulu_navigationContext.document.subscriber.navigation_context'] = new \Sulu\Component\Content\Document\Subscriber\NavigationContextSubscriber()) && false ?: '_'};
        }, 1 => 'handleMetadataLoad'), 0);
        $instance->addListener('sulu_document_manager.metadata_load', array(0 => function () {
            return ${($_ = isset($this->services['sulu_redirect_type.document.subscriber.redirect_type']) ? $this->services['sulu_redirect_type.document.subscriber.redirect_type'] : $this->services['sulu_redirect_type.document.subscriber.redirect_type'] = new \Sulu\Component\Content\Document\Subscriber\RedirectTypeSubscriber()) && false ?: '_'};
        }, 1 => 'handleMetadataLoad'), 0);
        $instance->addListener('sulu_document_manager.persist', array(0 => function () {
            return ${($_ = isset($this->services['sulu_redirect_type.document.subscriber.redirect_type']) ? $this->services['sulu_redirect_type.document.subscriber.redirect_type'] : $this->services['sulu_redirect_type.document.subscriber.redirect_type'] = new \Sulu\Component\Content\Document\Subscriber\RedirectTypeSubscriber()) && false ?: '_'};
        }, 1 => 'handlePersist'), 15);
        $instance->addListener('sulu_document_manager.persist', array(0 => function () {
            return ${($_ = isset($this->services['sulu_resource_segment.document.subscriber.resource_segment']) ? $this->services['sulu_resource_segment.document.subscriber.resource_segment'] : $this->load('getSuluResourceSegment_Document_Subscriber_ResourceSegmentService.php')) && false ?: '_'};
        }, 1 => 'handlePersistDocument'), 10);
        $instance->addListener('sulu_document_manager.hydrate', array(0 => function () {
            return ${($_ = isset($this->services['sulu_resource_segment.document.subscriber.resource_segment']) ? $this->services['sulu_resource_segment.document.subscriber.resource_segment'] : $this->load('getSuluResourceSegment_Document_Subscriber_ResourceSegmentService.php')) && false ?: '_'};
        }, 1 => 'handleHydrate'), -200);
        $instance->addListener('sulu_document_manager.move', array(0 => function () {
            return ${($_ = isset($this->services['sulu_resource_segment.document.subscriber.resource_segment']) ? $this->services['sulu_resource_segment.document.subscriber.resource_segment'] : $this->load('getSuluResourceSegment_Document_Subscriber_ResourceSegmentService.php')) && false ?: '_'};
        }, 1 => 'updateMovedDocument'), -128);
        $instance->addListener('sulu_document_manager.copy', array(0 => function () {
            return ${($_ = isset($this->services['sulu_resource_segment.document.subscriber.resource_segment']) ? $this->services['sulu_resource_segment.document.subscriber.resource_segment'] : $this->load('getSuluResourceSegment_Document_Subscriber_ResourceSegmentService.php')) && false ?: '_'};
        }, 1 => 'updateCopiedDocument'), -128);
        $instance->addListener('sulu_document_manager.publish', array(0 => function () {
            return ${($_ = isset($this->services['sulu_resource_segment.document.subscriber.resource_segment']) ? $this->services['sulu_resource_segment.document.subscriber.resource_segment'] : $this->load('getSuluResourceSegment_Document_Subscriber_ResourceSegmentService.php')) && false ?: '_'};
        }, 1 => 'handlePersistRoute'), -128);
        $instance->addListener('sulu_document_manager.hydrate', array(0 => function () {
            return ${($_ = isset($this->services['sulu_document_manager.document.subscriber.workflow_stage']) ? $this->services['sulu_document_manager.document.subscriber.workflow_stage'] : $this->load('getSuluDocumentManager_Document_Subscriber_WorkflowStageService.php')) && false ?: '_'};
        }, 1 => 'setWorkflowStageOnDocument'), 0);
        $instance->addListener('sulu_document_manager.persist', array(0 => function () {
            return ${($_ = isset($this->services['sulu_document_manager.document.subscriber.workflow_stage']) ? $this->services['sulu_document_manager.document.subscriber.workflow_stage'] : $this->load('getSuluDocumentManager_Document_Subscriber_WorkflowStageService.php')) && false ?: '_'};
        }, 1 => 'setWorkflowStageToTest'), 0);
        $instance->addListener('sulu_document_manager.publish', array(0 => function () {
            return ${($_ = isset($this->services['sulu_document_manager.document.subscriber.workflow_stage']) ? $this->services['sulu_document_manager.document.subscriber.workflow_stage'] : $this->load('getSuluDocumentManager_Document_Subscriber_WorkflowStageService.php')) && false ?: '_'};
        }, 1 => 'setWorkflowStageToPublished'), 0);
        $instance->addListener('sulu_document_manager.unpublish', array(0 => function () {
            return ${($_ = isset($this->services['sulu_document_manager.document.subscriber.workflow_stage']) ? $this->services['sulu_document_manager.document.subscriber.workflow_stage'] : $this->load('getSuluDocumentManager_Document_Subscriber_WorkflowStageService.php')) && false ?: '_'};
        }, 1 => 'setWorkflowStageToTestAndResetPublishedDate'), 0);
        $instance->addListener('sulu_document_manager.copy', array(0 => function () {
            return ${($_ = isset($this->services['sulu_document_manager.document.subscriber.workflow_stage']) ? $this->services['sulu_document_manager.document.subscriber.workflow_stage'] : $this->load('getSuluDocumentManager_Document_Subscriber_WorkflowStageService.php')) && false ?: '_'};
        }, 1 => 'setWorkflowStageToTestForCopy'), 0);
        $instance->addListener('sulu_document_manager.restore', array(0 => function () {
            return ${($_ = isset($this->services['sulu_document_manager.document.subscriber.workflow_stage']) ? $this->services['sulu_document_manager.document.subscriber.workflow_stage'] : $this->load('getSuluDocumentManager_Document_Subscriber_WorkflowStageService.php')) && false ?: '_'};
        }, 1 => 'setWorkflowStageToTestForRestore'), -32);
        $instance->addListener('sulu_document_manager.metadata_load', array(0 => function () {
            return ${($_ = isset($this->services['sulu_document_manager.document.subscriber.shadow_locale']) ? $this->services['sulu_document_manager.document.subscriber.shadow_locale'] : $this->load('getSuluDocumentManager_Document_Subscriber_ShadowLocaleService.php')) && false ?: '_'};
        }, 1 => 'handleMetadataLoad'), 0);
        $instance->addListener('sulu_document_manager.persist', array(0 => function () {
            return ${($_ = isset($this->services['sulu_document_manager.document.subscriber.shadow_locale']) ? $this->services['sulu_document_manager.document.subscriber.shadow_locale'] : $this->load('getSuluDocumentManager_Document_Subscriber_ShadowLocaleService.php')) && false ?: '_'};
        }, 1 => 'handlePersistUpdateUrl'), 20);
        $instance->addListener('sulu_document_manager.persist', array(0 => function () {
            return ${($_ = isset($this->services['sulu_document_manager.document.subscriber.shadow_locale']) ? $this->services['sulu_document_manager.document.subscriber.shadow_locale'] : $this->load('getSuluDocumentManager_Document_Subscriber_ShadowLocaleService.php')) && false ?: '_'};
        }, 1 => 'saveShadowProperties'), 15);
        $instance->addListener('sulu_document_manager.hydrate', array(0 => function () {
            return ${($_ = isset($this->services['sulu_document_manager.document.subscriber.shadow_locale']) ? $this->services['sulu_document_manager.document.subscriber.shadow_locale'] : $this->load('getSuluDocumentManager_Document_Subscriber_ShadowLocaleService.php')) && false ?: '_'};
        }, 1 => 'handleHydrate'), 390);
        $instance->addListener('sulu_document_manager.publish', array(0 => function () {
            return ${($_ = isset($this->services['sulu_document_manager.document.subscriber.shadow_locale']) ? $this->services['sulu_document_manager.document.subscriber.shadow_locale'] : $this->load('getSuluDocumentManager_Document_Subscriber_ShadowLocaleService.php')) && false ?: '_'};
        }, 1 => 'saveShadowProperties'), 15);
        $instance->addListener('sulu_document_manager.configure_options', array(0 => function () {
            return ${($_ = isset($this->services['sulu_document_manager.document.subscriber.shadow_locale']) ? $this->services['sulu_document_manager.document.subscriber.shadow_locale'] : $this->load('getSuluDocumentManager_Document_Subscriber_ShadowLocaleService.php')) && false ?: '_'};
        }, 1 => 'handleConfigureOptions'), 0);
        $instance->addListener('sulu_document_manager.persist', array(0 => function () {
            return ${($_ = isset($this->services['sulu_document_manager.document.subscriber.shadow_copy_properties']) ? $this->services['sulu_document_manager.document.subscriber.shadow_copy_properties'] : $this->load('getSuluDocumentManager_Document_Subscriber_ShadowCopyPropertiesService.php')) && false ?: '_'};
        }, 1 => 'copyShadowProperties'), -256);
        $instance->addListener('sulu_document_manager.publish', array(0 => function () {
            return ${($_ = isset($this->services['sulu_document_manager.document.subscriber.shadow_copy_properties']) ? $this->services['sulu_document_manager.document.subscriber.shadow_copy_properties'] : $this->load('getSuluDocumentManager_Document_Subscriber_ShadowCopyPropertiesService.php')) && false ?: '_'};
        }, 1 => 'copyShadowProperties'), 0);
        $instance->addListener('sulu_document_manager.hydrate', array(0 => function () {
            return ${($_ = isset($this->services['sulu_document_manager.document.subscriber.title']) ? $this->services['sulu_document_manager.document.subscriber.title'] : $this->load('getSuluDocumentManager_Document_Subscriber_TitleService.php')) && false ?: '_'};
        }, 1 => 'setTitleOnDocument'), -10);
        $instance->addListener('sulu_document_manager.persist', array(0 => function () {
            return ${($_ = isset($this->services['sulu_document_manager.document.subscriber.title']) ? $this->services['sulu_document_manager.document.subscriber.title'] : $this->load('getSuluDocumentManager_Document_Subscriber_TitleService.php')) && false ?: '_'};
        }, 1 => 'setTitleOnNode'), 10);
        $instance->addListener('sulu_document_manager.publish', array(0 => function () {
            return ${($_ = isset($this->services['sulu_document_manager.document.subscriber.title']) ? $this->services['sulu_document_manager.document.subscriber.title'] : $this->load('getSuluDocumentManager_Document_Subscriber_TitleService.php')) && false ?: '_'};
        }, 1 => 'setTitleOnNode'), 10);
        $instance->addListener('sulu_document_manager.hydrate', array(0 => function () {
            return ${($_ = isset($this->services['sulu_document_manager.document.subscriber.fallback_localization']) ? $this->services['sulu_document_manager.document.subscriber.fallback_localization'] : $this->load('getSuluDocumentManager_Document_Subscriber_FallbackLocalizationService.php')) && false ?: '_'};
        }, 1 => 'handleHydrate'), 400);
        $instance->addListener('sulu_document_manager.persist', array(0 => function () {
            return ${($_ = isset($this->services['sulu_document_manager.document.subscriber.extension']) ? $this->services['sulu_document_manager.document.subscriber.extension'] : $this->load('getSuluDocumentManager_Document_Subscriber_ExtensionService.php')) && false ?: '_'};
        }, 1 => 'saveExtensionData'), 10);
        $instance->addListener('sulu_document_manager.publish', array(0 => function () {
            return ${($_ = isset($this->services['sulu_document_manager.document.subscriber.extension']) ? $this->services['sulu_document_manager.document.subscriber.extension'] : $this->load('getSuluDocumentManager_Document_Subscriber_ExtensionService.php')) && false ?: '_'};
        }, 1 => 'saveExtensionData'), 10);
        $instance->addListener('sulu_document_manager.hydrate', array(0 => function () {
            return ${($_ = isset($this->services['sulu_document_manager.document.subscriber.extension']) ? $this->services['sulu_document_manager.document.subscriber.extension'] : $this->load('getSuluDocumentManager_Document_Subscriber_ExtensionService.php')) && false ?: '_'};
        }, 1 => 'handleHydrate'), -10);
        $instance->addListener('sulu_document_manager.persist', array(0 => function () {
            return ${($_ = isset($this->services['sulu_document_manager.document.subscriber.order']) ? $this->services['sulu_document_manager.document.subscriber.order'] : $this->load('getSuluDocumentManager_Document_Subscriber_OrderService.php')) && false ?: '_'};
        }, 1 => 'handlePersist'), 0);
        $instance->addListener('sulu_document_manager.metadata_load', array(0 => function () {
            return ${($_ = isset($this->services['sulu_document_manager.document.subscriber.order']) ? $this->services['sulu_document_manager.document.subscriber.order'] : $this->load('getSuluDocumentManager_Document_Subscriber_OrderService.php')) && false ?: '_'};
        }, 1 => 'handleMetadataLoad'), 0);
        $instance->addListener('sulu_document_manager.reorder', array(0 => function () {
            return ${($_ = isset($this->services['sulu_document_manager.document.subscriber.order']) ? $this->services['sulu_document_manager.document.subscriber.order'] : $this->load('getSuluDocumentManager_Document_Subscriber_OrderService.php')) && false ?: '_'};
        }, 1 => 'handleReorder'), 0);
        $instance->addListener('sulu_document_manager.persist', array(0 => function () {
            return ${($_ = isset($this->services['sulu_document_manager.document.subscriber.security']) ? $this->services['sulu_document_manager.document.subscriber.security'] : $this->load('getSuluDocumentManager_Document_Subscriber_SecurityService.php')) && false ?: '_'};
        }, 1 => 'handlePersist'), 0);
        $instance->addListener('sulu_document_manager.hydrate', array(0 => function () {
            return ${($_ = isset($this->services['sulu_document_manager.document.subscriber.security']) ? $this->services['sulu_document_manager.document.subscriber.security'] : $this->load('getSuluDocumentManager_Document_Subscriber_SecurityService.php')) && false ?: '_'};
        }, 1 => 'handleHydrate'), 0);
        $instance->addListener('sulu_document_manager.persist', array(0 => function () {
            return ${($_ = isset($this->services['sulu_document_manager.document.subscriber.webspace']) ? $this->services['sulu_document_manager.document.subscriber.webspace'] : $this->load('getSuluDocumentManager_Document_Subscriber_WebspaceService.php')) && false ?: '_'};
        }, 1 => 'handleWebspace'), 0);
        $instance->addListener('sulu_document_manager.hydrate', array(0 => function () {
            return ${($_ = isset($this->services['sulu_document_manager.document.subscriber.webspace']) ? $this->services['sulu_document_manager.document.subscriber.webspace'] : $this->load('getSuluDocumentManager_Document_Subscriber_WebspaceService.php')) && false ?: '_'};
        }, 1 => 'handleWebspace'), -10);
        $instance->addListener('sulu_document_manager.persist', array(0 => function () {
            return ${($_ = isset($this->services['sulu_document_manager.document.subscriber.route']) ? $this->services['sulu_document_manager.document.subscriber.route'] : $this->load('getSuluDocumentManager_Document_Subscriber_RouteService.php')) && false ?: '_'};
        }, 1 => 'handleSetNodeOnPersist'), 490);
        $instance->addListener('sulu_document_manager.persist', array(0 => function () {
            return ${($_ = isset($this->services['sulu_document_manager.document.subscriber.route']) ? $this->services['sulu_document_manager.document.subscriber.route'] : $this->load('getSuluDocumentManager_Document_Subscriber_RouteService.php')) && false ?: '_'};
        }, 1 => 'handlePersist'), 5);
        $instance->addListener('sulu_document_manager.hydrate', array(0 => function () {
            return ${($_ = isset($this->services['sulu_document_manager.document.subscriber.route']) ? $this->services['sulu_document_manager.document.subscriber.route'] : $this->load('getSuluDocumentManager_Document_Subscriber_RouteService.php')) && false ?: '_'};
        }, 1 => 'handleHydrate'), 0);
        $instance->addListener('sulu_document_manager.remove', array(0 => function () {
            return ${($_ = isset($this->services['sulu_document_manager.document.subscriber.route']) ? $this->services['sulu_document_manager.document.subscriber.route'] : $this->load('getSuluDocumentManager_Document_Subscriber_RouteService.php')) && false ?: '_'};
        }, 1 => 'handleRemove'), 550);
        $instance->addListener('sulu_document_manager.publish', array(0 => function () {
            return ${($_ = isset($this->services['sulu_document_manager.document.subscriber.route']) ? $this->services['sulu_document_manager.document.subscriber.route'] : $this->load('getSuluDocumentManager_Document_Subscriber_RouteService.php')) && false ?: '_'};
        }, 1 => 'handlePublish'), 0);
        $instance->addListener('sulu_document_manager.metadata_load', array(0 => function () {
            return ${($_ = isset($this->services['sulu_document_manager.document.subscriber.target']) ? $this->services['sulu_document_manager.document.subscriber.target'] : $this->services['sulu_document_manager.document.subscriber.target'] = new \Sulu\Component\Content\Document\Subscriber\TargetSubscriber()) && false ?: '_'};
        }, 1 => 'handleMetadataLoad'), 0);
        $instance->addListener('sulu_document_manager.metadata_load', array(0 => function () {
            return ${($_ = isset($this->services['sulu_document_manager.document.subscriber.robot']) ? $this->services['sulu_document_manager.document.subscriber.robot'] : $this->services['sulu_document_manager.document.subscriber.robot'] = new \Sulu\Component\Content\Document\Subscriber\RobotSubscriber()) && false ?: '_'};
        }, 1 => 'handleMetadataLoad'), 0);
        $instance->addListener('sulu_document_manager.persist', array(0 => function () {
            return ${($_ = isset($this->services['sulu_document_manager.document.subscriber.publish']) ? $this->services['sulu_document_manager.document.subscriber.publish'] : $this->load('getSuluDocumentManager_Document_Subscriber_PublishService.php')) && false ?: '_'};
        }, 1 => 'createNodeInPublicWorkspace'), -490);
        $instance->addListener('sulu_document_manager.remove', array(0 => function () {
            return ${($_ = isset($this->services['sulu_document_manager.document.subscriber.publish']) ? $this->services['sulu_document_manager.document.subscriber.publish'] : $this->load('getSuluDocumentManager_Document_Subscriber_PublishService.php')) && false ?: '_'};
        }, 1 => 'removeNodeFromPublicWorkspace'), 0);
        $instance->addListener('sulu_document_manager.move', array(0 => function () {
            return ${($_ = isset($this->services['sulu_document_manager.document.subscriber.publish']) ? $this->services['sulu_document_manager.document.subscriber.publish'] : $this->load('getSuluDocumentManager_Document_Subscriber_PublishService.php')) && false ?: '_'};
        }, 1 => 'moveNodeInPublicWorkspace'), 0);
        $instance->addListener('sulu_document_manager.copy', array(0 => function () {
            return ${($_ = isset($this->services['sulu_document_manager.document.subscriber.publish']) ? $this->services['sulu_document_manager.document.subscriber.publish'] : $this->load('getSuluDocumentManager_Document_Subscriber_PublishService.php')) && false ?: '_'};
        }, 1 => 'copyNodeInPublicWorkspace'), 0);
        $instance->addListener('sulu_document_manager.reorder', array(0 => function () {
            return ${($_ = isset($this->services['sulu_document_manager.document.subscriber.publish']) ? $this->services['sulu_document_manager.document.subscriber.publish'] : $this->load('getSuluDocumentManager_Document_Subscriber_PublishService.php')) && false ?: '_'};
        }, 1 => 'reorderNodeInPublicWorkspace'), 0);
        $instance->addListener('sulu_document_manager.publish', array(0 => function () {
            return ${($_ = isset($this->services['sulu_document_manager.document.subscriber.publish']) ? $this->services['sulu_document_manager.document.subscriber.publish'] : $this->load('getSuluDocumentManager_Document_Subscriber_PublishService.php')) && false ?: '_'};
        }, 1 => 'setNodeFromPublicWorkspaceForPublishing'), 512);
        $instance->addListener('sulu_document_manager.unpublish', array(0 => function () {
            return ${($_ = isset($this->services['sulu_document_manager.document.subscriber.publish']) ? $this->services['sulu_document_manager.document.subscriber.publish'] : $this->load('getSuluDocumentManager_Document_Subscriber_PublishService.php')) && false ?: '_'};
        }, 1 => 'setNodeFromPublicWorkspaceForUnpublishing'), 512);
        $instance->addListener('sulu_document_manager.unpublish', array(0 => function () {
            return ${($_ = isset($this->services['sulu_document_manager.document.subscriber.publish']) ? $this->services['sulu_document_manager.document.subscriber.publish'] : $this->load('getSuluDocumentManager_Document_Subscriber_PublishService.php')) && false ?: '_'};
        }, 1 => 'removePropertiesFromPublicWorkspace'), 0);
        $instance->addListener('sulu_document_manager.remove_draft', array(0 => function () {
            return ${($_ = isset($this->services['sulu_document_manager.document.subscriber.publish']) ? $this->services['sulu_document_manager.document.subscriber.publish'] : $this->load('getSuluDocumentManager_Document_Subscriber_PublishService.php')) && false ?: '_'};
        }, 1 => 'copyPropertiesFromPublicWorkspace'), 0);
        $instance->addListener('sulu_document_manager.flush', array(0 => function () {
            return ${($_ = isset($this->services['sulu_document_manager.document.subscriber.publish']) ? $this->services['sulu_document_manager.document.subscriber.publish'] : $this->load('getSuluDocumentManager_Document_Subscriber_PublishService.php')) && false ?: '_'};
        }, 1 => 'flushPublicWorkspace'), 0);
        $instance->addListener('sulu_document_manager.remove', array(0 => function () {
            return ${($_ = isset($this->services['sulu_document_manager.document.subscriber.compat.content_mapper']) ? $this->services['sulu_document_manager.document.subscriber.compat.content_mapper'] : $this->load('getSuluDocumentManager_Document_Subscriber_Compat_ContentMapperService.php')) && false ?: '_'};
        }, 1 => 'handlePreRemove'), 500);
        $instance->addListener('sulu_document_manager.remove', array(0 => function () {
            return ${($_ = isset($this->services['sulu_document_manager.document.subscriber.compat.content_mapper']) ? $this->services['sulu_document_manager.document.subscriber.compat.content_mapper'] : $this->load('getSuluDocumentManager_Document_Subscriber_Compat_ContentMapperService.php')) && false ?: '_'};
        }, 1 => 'handlePostRemove'), -100);
        $instance->addListener('sulu_document_manager.persist', array(0 => function () {
            return ${($_ = isset($this->services['sulu_document_manager.document.subscriber.compat.content_mapper']) ? $this->services['sulu_document_manager.document.subscriber.compat.content_mapper'] : $this->load('getSuluDocumentManager_Document_Subscriber_Compat_ContentMapperService.php')) && false ?: '_'};
        }, 1 => 'handlePersist'), 0);
        $instance->addListener('sulu_document_manager.flush', array(0 => function () {
            return ${($_ = isset($this->services['sulu_document_manager.document.subscriber.compat.content_mapper']) ? $this->services['sulu_document_manager.document.subscriber.compat.content_mapper'] : $this->load('getSuluDocumentManager_Document_Subscriber_Compat_ContentMapperService.php')) && false ?: '_'};
        }, 1 => 'handleFlush'), 0);
        $instance->addListener('sulu_document_manager.remove', array(0 => function () {
            return ${($_ = isset($this->services['sulu_document_manager.subscriber.behavior.remove_content']) ? $this->services['sulu_document_manager.subscriber.behavior.remove_content'] : $this->load('getSuluDocumentManager_Subscriber_Behavior_RemoveContentService.php')) && false ?: '_'};
        }, 1 => 'handleRemove'), 550);
        $instance->addListener('sulu_document_manager.publish', array(0 => function () {
            return ${($_ = isset($this->services['sulu_http_cache.event_subscriber.invalidation']) ? $this->services['sulu_http_cache.event_subscriber.invalidation'] : $this->load('getSuluHttpCache_EventSubscriber_InvalidationService.php')) && false ?: '_'};
        }, 1 => 'invalidateDocumentBeforePublishing'), 1024);
        $instance->addListener('sulu_document_manager.unpublish', array(0 => function () {
            return ${($_ = isset($this->services['sulu_http_cache.event_subscriber.invalidation']) ? $this->services['sulu_http_cache.event_subscriber.invalidation'] : $this->load('getSuluHttpCache_EventSubscriber_InvalidationService.php')) && false ?: '_'};
        }, 1 => 'invalidateDocumentBeforeUnpublishing'), 1024);
        $instance->addListener('sulu_document_manager.remove', array(0 => function () {
            return ${($_ = isset($this->services['sulu_http_cache.event_subscriber.invalidation']) ? $this->services['sulu_http_cache.event_subscriber.invalidation'] : $this->load('getSuluHttpCache_EventSubscriber_InvalidationService.php')) && false ?: '_'};
        }, 1 => 'invalidateDocumentBeforeRemoving'), 1024);
        $instance->addListener('sulu_document_manager.hydrate', array(0 => function () {
            return ${($_ = isset($this->services['sulu_document_manager.subscriber.core.instantiator']) ? $this->services['sulu_document_manager.subscriber.core.instantiator'] : $this->load('getSuluDocumentManager_Subscriber_Core_InstantiatorService.php')) && false ?: '_'};
        }, 1 => 'handleHydrate'), 500);
        $instance->addListener('sulu_document_manager.create', array(0 => function () {
            return ${($_ = isset($this->services['sulu_document_manager.subscriber.core.instantiator']) ? $this->services['sulu_document_manager.subscriber.core.instantiator'] : $this->load('getSuluDocumentManager_Subscriber_Core_InstantiatorService.php')) && false ?: '_'};
        }, 1 => 'handleCreate'), 500);
        $instance->addListener('sulu_document_manager.hydrate', array(0 => function () {
            return ${($_ = isset($this->services['sulu_document_manager.subscriber.core.registrator']) ? $this->services['sulu_document_manager.subscriber.core.registrator'] : $this->load('getSuluDocumentManager_Subscriber_Core_RegistratorService.php')) && false ?: '_'};
        }, 1 => 'handleDefaultLocale'), 520);
        $instance->addListener('sulu_document_manager.hydrate', array(0 => function () {
            return ${($_ = isset($this->services['sulu_document_manager.subscriber.core.registrator']) ? $this->services['sulu_document_manager.subscriber.core.registrator'] : $this->load('getSuluDocumentManager_Subscriber_Core_RegistratorService.php')) && false ?: '_'};
        }, 1 => 'handleDocumentFromRegistry'), 510);
        $instance->addListener('sulu_document_manager.hydrate', array(0 => function () {
            return ${($_ = isset($this->services['sulu_document_manager.subscriber.core.registrator']) ? $this->services['sulu_document_manager.subscriber.core.registrator'] : $this->load('getSuluDocumentManager_Subscriber_Core_RegistratorService.php')) && false ?: '_'};
        }, 1 => 'handleStopPropagationAndResetLocale'), 509);
        $instance->addListener('sulu_document_manager.hydrate', array(0 => function () {
            return ${($_ = isset($this->services['sulu_document_manager.subscriber.core.registrator']) ? $this->services['sulu_document_manager.subscriber.core.registrator'] : $this->load('getSuluDocumentManager_Subscriber_Core_RegistratorService.php')) && false ?: '_'};
        }, 1 => 'handleHydrate'), 490);
        $instance->addListener('sulu_document_manager.hydrate', array(0 => function () {
            return ${($_ = isset($this->services['sulu_document_manager.subscriber.core.registrator']) ? $this->services['sulu_document_manager.subscriber.core.registrator'] : $this->load('getSuluDocumentManager_Subscriber_Core_RegistratorService.php')) && false ?: '_'};
        }, 1 => 'handleEndHydrate'), -500);
        $instance->addListener('sulu_document_manager.persist', array(0 => function () {
            return ${($_ = isset($this->services['sulu_document_manager.subscriber.core.registrator']) ? $this->services['sulu_document_manager.subscriber.core.registrator'] : $this->load('getSuluDocumentManager_Subscriber_Core_RegistratorService.php')) && false ?: '_'};
        }, 1 => 'handlePersist'), 450);
        $instance->addListener('sulu_document_manager.persist', array(0 => function () {
            return ${($_ = isset($this->services['sulu_document_manager.subscriber.core.registrator']) ? $this->services['sulu_document_manager.subscriber.core.registrator'] : $this->load('getSuluDocumentManager_Subscriber_Core_RegistratorService.php')) && false ?: '_'};
        }, 1 => 'handleNodeFromRegistry'), 510);
        $instance->addListener('sulu_document_manager.persist', array(0 => function () {
            return ${($_ = isset($this->services['sulu_document_manager.subscriber.core.registrator']) ? $this->services['sulu_document_manager.subscriber.core.registrator'] : $this->load('getSuluDocumentManager_Subscriber_Core_RegistratorService.php')) && false ?: '_'};
        }, 1 => 'handleEndPersist'), -500);
        $instance->addListener('sulu_document_manager.remove', array(0 => function () {
            return ${($_ = isset($this->services['sulu_document_manager.subscriber.core.registrator']) ? $this->services['sulu_document_manager.subscriber.core.registrator'] : $this->load('getSuluDocumentManager_Subscriber_Core_RegistratorService.php')) && false ?: '_'};
        }, 1 => 'handleRemove'), 490);
        $instance->addListener('sulu_document_manager.clear', array(0 => function () {
            return ${($_ = isset($this->services['sulu_document_manager.subscriber.core.registrator']) ? $this->services['sulu_document_manager.subscriber.core.registrator'] : $this->load('getSuluDocumentManager_Subscriber_Core_RegistratorService.php')) && false ?: '_'};
        }, 1 => 'handleClear'), 500);
        $instance->addListener('sulu_document_manager.reorder', array(0 => function () {
            return ${($_ = isset($this->services['sulu_document_manager.subscriber.core.registrator']) ? $this->services['sulu_document_manager.subscriber.core.registrator'] : $this->load('getSuluDocumentManager_Subscriber_Core_RegistratorService.php')) && false ?: '_'};
        }, 1 => 'handleNodeFromRegistry'), 510);
        $instance->addListener('sulu_document_manager.configure_options', array(0 => function () {
            return ${($_ = isset($this->services['sulu_document_manager.subscriber.core.registrator']) ? $this->services['sulu_document_manager.subscriber.core.registrator'] : $this->load('getSuluDocumentManager_Subscriber_Core_RegistratorService.php')) && false ?: '_'};
        }, 1 => 'configureOptions'), 0);
        $instance->addListener('sulu_document_manager.remove_draft', array(0 => function () {
            return ${($_ = isset($this->services['sulu_document_manager.subscriber.core.registrator']) ? $this->services['sulu_document_manager.subscriber.core.registrator'] : $this->load('getSuluDocumentManager_Subscriber_Core_RegistratorService.php')) && false ?: '_'};
        }, 1 => 'handleNodeFromRegistry'), 512);
        $instance->addListener('sulu_document_manager.restore', array(0 => function () {
            return ${($_ = isset($this->services['sulu_document_manager.subscriber.core.registrator']) ? $this->services['sulu_document_manager.subscriber.core.registrator'] : $this->load('getSuluDocumentManager_Subscriber_Core_RegistratorService.php')) && false ?: '_'};
        }, 1 => 'handleNodeFromRegistry'), 512);
        $instance->addListener('sulu_document_manager.reorder', array(0 => function () {
            return ${($_ = isset($this->services['sulu_document_manager.subscriber.phpcr.reorder']) ? $this->services['sulu_document_manager.subscriber.phpcr.reorder'] : $this->load('getSuluDocumentManager_Subscriber_Phpcr_ReorderService.php')) && false ?: '_'};
        }, 1 => 'handleReorder'), 500);
        $instance->addListener('sulu_document_manager.persist', array(0 => function () {
            return ${($_ = isset($this->services['sulu_document_manager.subscriber.phpcr.mixin']) ? $this->services['sulu_document_manager.subscriber.phpcr.mixin'] : $this->load('getSuluDocumentManager_Subscriber_Phpcr_MixinService.php')) && false ?: '_'};
        }, 1 => 'setDocumentMixinsOnNode'), 468);
        $instance->addListener('sulu_document_manager.publish', array(0 => function () {
            return ${($_ = isset($this->services['sulu_document_manager.subscriber.phpcr.mixin']) ? $this->services['sulu_document_manager.subscriber.phpcr.mixin'] : $this->load('getSuluDocumentManager_Subscriber_Phpcr_MixinService.php')) && false ?: '_'};
        }, 1 => 'setDocumentMixinsOnNode'), 468);
        $instance->addListener('sulu_document_manager.find', array(0 => function () {
            return ${($_ = isset($this->services['sulu_document_manager.subscriber.phpcr.find']) ? $this->services['sulu_document_manager.subscriber.phpcr.find'] : $this->load('getSuluDocumentManager_Subscriber_Phpcr_FindService.php')) && false ?: '_'};
        }, 1 => 'handleFind'), 500);
        $instance->addListener('sulu_document_manager.configure_options', array(0 => function () {
            return ${($_ = isset($this->services['sulu_document_manager.subscriber.phpcr.find']) ? $this->services['sulu_document_manager.subscriber.phpcr.find'] : $this->load('getSuluDocumentManager_Subscriber_Phpcr_FindService.php')) && false ?: '_'};
        }, 1 => 'configureOptions'), 0);
        $instance->addListener('sulu_document_manager.query.create', array(0 => function () {
            return ${($_ = isset($this->services['sulu_document_manager.subscriber.phpcr.query']) ? $this->services['sulu_document_manager.subscriber.phpcr.query'] : $this->load('getSuluDocumentManager_Subscriber_Phpcr_QueryService.php')) && false ?: '_'};
        }, 1 => 'handleCreate'), 500);
        $instance->addListener('sulu_document_manager.query.create_builder', array(0 => function () {
            return ${($_ = isset($this->services['sulu_document_manager.subscriber.phpcr.query']) ? $this->services['sulu_document_manager.subscriber.phpcr.query'] : $this->load('getSuluDocumentManager_Subscriber_Phpcr_QueryService.php')) && false ?: '_'};
        }, 1 => 'handleCreateBuilder'), 500);
        $instance->addListener('sulu_document_manager.query.execute', array(0 => function () {
            return ${($_ = isset($this->services['sulu_document_manager.subscriber.phpcr.query']) ? $this->services['sulu_document_manager.subscriber.phpcr.query'] : $this->load('getSuluDocumentManager_Subscriber_Phpcr_QueryService.php')) && false ?: '_'};
        }, 1 => 'handleQueryExecute'), 500);
        $instance->addListener('sulu_document_manager.move', array(0 => function () {
            return ${($_ = isset($this->services['sulu_document_manager.subscriber.phpcr.general']) ? $this->services['sulu_document_manager.subscriber.phpcr.general'] : $this->load('getSuluDocumentManager_Subscriber_Phpcr_GeneralService.php')) && false ?: '_'};
        }, 1 => 'handleMove'), 400);
        $instance->addListener('sulu_document_manager.copy', array(0 => function () {
            return ${($_ = isset($this->services['sulu_document_manager.subscriber.phpcr.general']) ? $this->services['sulu_document_manager.subscriber.phpcr.general'] : $this->load('getSuluDocumentManager_Subscriber_Phpcr_GeneralService.php')) && false ?: '_'};
        }, 1 => 'handleCopy'), 400);
        $instance->addListener('sulu_document_manager.clear', array(0 => function () {
            return ${($_ = isset($this->services['sulu_document_manager.subscriber.phpcr.general']) ? $this->services['sulu_document_manager.subscriber.phpcr.general'] : $this->load('getSuluDocumentManager_Subscriber_Phpcr_GeneralService.php')) && false ?: '_'};
        }, 1 => 'handleClear'), 500);
        $instance->addListener('sulu_document_manager.flush', array(0 => function () {
            return ${($_ = isset($this->services['sulu_document_manager.subscriber.phpcr.general']) ? $this->services['sulu_document_manager.subscriber.phpcr.general'] : $this->load('getSuluDocumentManager_Subscriber_Phpcr_GeneralService.php')) && false ?: '_'};
        }, 1 => 'handleFlush'), 500);
        $instance->addListener('sulu_document_manager.remove', array(0 => function () {
            return ${($_ = isset($this->services['sulu_document_manager.subscriber.phpcr.remove']) ? $this->services['sulu_document_manager.subscriber.phpcr.remove'] : $this->load('getSuluDocumentManager_Subscriber_Phpcr_RemoveService.php')) && false ?: '_'};
        }, 1 => 'handleRemove'), 500);
        $instance->addListener('sulu_document_manager.hydrate', array(0 => function () {
            return ${($_ = isset($this->services['sulu_document_manager.subscriber.core.mapping']) ? $this->services['sulu_document_manager.subscriber.core.mapping'] : $this->load('getSuluDocumentManager_Subscriber_Core_MappingService.php')) && false ?: '_'};
        }, 1 => 'handleHydrate'), -100);
        $instance->addListener('sulu_document_manager.persist', array(0 => function () {
            return ${($_ = isset($this->services['sulu_document_manager.subscriber.core.mapping']) ? $this->services['sulu_document_manager.subscriber.core.mapping'] : $this->load('getSuluDocumentManager_Subscriber_Core_MappingService.php')) && false ?: '_'};
        }, 1 => 'handleMapping'), -100);
        $instance->addListener('sulu_document_manager.publish', array(0 => function () {
            return ${($_ = isset($this->services['sulu_document_manager.subscriber.core.mapping']) ? $this->services['sulu_document_manager.subscriber.core.mapping'] : $this->load('getSuluDocumentManager_Subscriber_Core_MappingService.php')) && false ?: '_'};
        }, 1 => 'handleMapping'), -128);
        $instance->addListener('sulu_document_manager.refresh', array(0 => function () {
            return ${($_ = isset($this->services['sulu_document_manager.subscriber.phpcr.refresh']) ? $this->services['sulu_document_manager.subscriber.phpcr.refresh'] : $this->load('getSuluDocumentManager_Subscriber_Phpcr_RefreshService.php')) && false ?: '_'};
        }, 1 => 'refreshDocument'), 0);
        $instance->addListener('sulu_document_manager.remove_draft', array(0 => function () {
            return ${($_ = isset($this->services['sulu_document_manager.subscriber.phpcr.refresh']) ? $this->services['sulu_document_manager.subscriber.phpcr.refresh'] : $this->load('getSuluDocumentManager_Subscriber_Phpcr_RefreshService.php')) && false ?: '_'};
        }, 1 => 'refreshDocumentForDeleteDraft'), -512);
        $instance->addListener('sulu_document_manager.configure_options', array(0 => function () {
            return ${($_ = isset($this->services['sulu_document_manager.subscriber.security']) ? $this->services['sulu_document_manager.subscriber.security'] : $this->load('getSuluDocumentManager_Subscriber_SecurityService.php')) && false ?: '_'};
        }, 1 => 'setDefaultUser'), 0);
        $instance->addListener('sulu_document_manager.configure_options', array(0 => function () {
            return ${($_ = isset($this->services['sulu_document_manager.subscriber.behavior.auto_name']) ? $this->services['sulu_document_manager.subscriber.behavior.auto_name'] : $this->load('getSuluDocumentManager_Subscriber_Behavior_AutoNameService.php')) && false ?: '_'};
        }, 1 => 'configureOptions'), 0);
        $instance->addListener('sulu_document_manager.persist', array(0 => function () {
            return ${($_ = isset($this->services['sulu_document_manager.subscriber.behavior.auto_name']) ? $this->services['sulu_document_manager.subscriber.behavior.auto_name'] : $this->load('getSuluDocumentManager_Subscriber_Behavior_AutoNameService.php')) && false ?: '_'};
        }, 1 => 'handleScheduleRename'), 0);
        $instance->addListener('sulu_document_manager.persist', array(0 => function () {
            return ${($_ = isset($this->services['sulu_document_manager.subscriber.behavior.auto_name']) ? $this->services['sulu_document_manager.subscriber.behavior.auto_name'] : $this->load('getSuluDocumentManager_Subscriber_Behavior_AutoNameService.php')) && false ?: '_'};
        }, 1 => 'handlePersist'), 480);
        $instance->addListener('sulu_document_manager.move', array(0 => function () {
            return ${($_ = isset($this->services['sulu_document_manager.subscriber.behavior.auto_name']) ? $this->services['sulu_document_manager.subscriber.behavior.auto_name'] : $this->load('getSuluDocumentManager_Subscriber_Behavior_AutoNameService.php')) && false ?: '_'};
        }, 1 => 'handleMove'), 480);
        $instance->addListener('sulu_document_manager.copy', array(0 => function () {
            return ${($_ = isset($this->services['sulu_document_manager.subscriber.behavior.auto_name']) ? $this->services['sulu_document_manager.subscriber.behavior.auto_name'] : $this->load('getSuluDocumentManager_Subscriber_Behavior_AutoNameService.php')) && false ?: '_'};
        }, 1 => 'handleCopy'), 480);
        $instance->addListener('sulu_document_manager.flush', array(0 => function () {
            return ${($_ = isset($this->services['sulu_document_manager.subscriber.behavior.auto_name']) ? $this->services['sulu_document_manager.subscriber.behavior.auto_name'] : $this->load('getSuluDocumentManager_Subscriber_Behavior_AutoNameService.php')) && false ?: '_'};
        }, 1 => 'handleRename'), 510);
        $instance->addListener('sulu_document_manager.persist', array(0 => function () {
            return ${($_ = isset($this->services['sulu_document_manager.subscriber.behavior.path.explicit']) ? $this->services['sulu_document_manager.subscriber.behavior.path.explicit'] : $this->load('getSuluDocumentManager_Subscriber_Behavior_Path_ExplicitService.php')) && false ?: '_'};
        }, 1 => 'handlePersist'), 485);
        $instance->addListener('sulu_document_manager.configure_options', array(0 => function () {
            return ${($_ = isset($this->services['sulu_document_manager.subscriber.behavior.path.explicit']) ? $this->services['sulu_document_manager.subscriber.behavior.path.explicit'] : $this->load('getSuluDocumentManager_Subscriber_Behavior_Path_ExplicitService.php')) && false ?: '_'};
        }, 1 => 'configureOptions'), 0);
        $instance->addListener('sulu_document_manager.hydrate', array(0 => function () {
            return ${($_ = isset($this->services['sulu_document_manager.suscriber.behavior.blame']) ? $this->services['sulu_document_manager.suscriber.behavior.blame'] : $this->load('getSuluDocumentManager_Suscriber_Behavior_BlameService.php')) && false ?: '_'};
        }, 1 => 'setBlamesOnDocument'), 0);
        $instance->addListener('sulu_document_manager.persist', array(0 => function () {
            return ${($_ = isset($this->services['sulu_document_manager.suscriber.behavior.blame']) ? $this->services['sulu_document_manager.suscriber.behavior.blame'] : $this->load('getSuluDocumentManager_Suscriber_Behavior_BlameService.php')) && false ?: '_'};
        }, 1 => 'setBlamesOnNodeForPersist'), 0);
        $instance->addListener('sulu_document_manager.publish', array(0 => function () {
            return ${($_ = isset($this->services['sulu_document_manager.suscriber.behavior.blame']) ? $this->services['sulu_document_manager.suscriber.behavior.blame'] : $this->load('getSuluDocumentManager_Suscriber_Behavior_BlameService.php')) && false ?: '_'};
        }, 1 => 'setBlamesOnNodeForPublish'), 0);
        $instance->addListener('sulu_document_manager.restore', array(0 => function () {
            return ${($_ = isset($this->services['sulu_document_manager.suscriber.behavior.blame']) ? $this->services['sulu_document_manager.suscriber.behavior.blame'] : $this->load('getSuluDocumentManager_Suscriber_Behavior_BlameService.php')) && false ?: '_'};
        }, 1 => 'setChangerForRestore'), -32);
        $instance->addListener('sulu_document_manager.hydrate', array(0 => function () {
            return ${($_ = isset($this->services['sulu_document_manager.suscriber.behavior.author']) ? $this->services['sulu_document_manager.suscriber.behavior.author'] : $this->load('getSuluDocumentManager_Suscriber_Behavior_AuthorService.php')) && false ?: '_'};
        }, 1 => 'setAuthorOnDocument'), 0);
        $instance->addListener('sulu_document_manager.persist', array(0 => function () {
            return ${($_ = isset($this->services['sulu_document_manager.suscriber.behavior.author']) ? $this->services['sulu_document_manager.suscriber.behavior.author'] : $this->load('getSuluDocumentManager_Suscriber_Behavior_AuthorService.php')) && false ?: '_'};
        }, 1 => 'setAuthorOnNode'), 0);
        $instance->addListener('sulu_document_manager.publish', array(0 => function () {
            return ${($_ = isset($this->services['sulu_document_manager.suscriber.behavior.author']) ? $this->services['sulu_document_manager.suscriber.behavior.author'] : $this->load('getSuluDocumentManager_Suscriber_Behavior_AuthorService.php')) && false ?: '_'};
        }, 1 => 'setAuthorOnNode'), 0);
        $instance->addListener('sulu_document_manager.persist', array(0 => function () {
            return ${($_ = isset($this->services['sulu_document_manager.suscriber.behavior.timestamp']) ? $this->services['sulu_document_manager.suscriber.behavior.timestamp'] : $this->load('getSuluDocumentManager_Suscriber_Behavior_TimestampService.php')) && false ?: '_'};
        }, 1 => 'setTimestampsOnNodeForPersist'), 0);
        $instance->addListener('sulu_document_manager.publish', array(0 => function () {
            return ${($_ = isset($this->services['sulu_document_manager.suscriber.behavior.timestamp']) ? $this->services['sulu_document_manager.suscriber.behavior.timestamp'] : $this->load('getSuluDocumentManager_Suscriber_Behavior_TimestampService.php')) && false ?: '_'};
        }, 1 => 'setTimestampsOnNodeForPublish'), 0);
        $instance->addListener('sulu_document_manager.restore', array(0 => function () {
            return ${($_ = isset($this->services['sulu_document_manager.suscriber.behavior.timestamp']) ? $this->services['sulu_document_manager.suscriber.behavior.timestamp'] : $this->load('getSuluDocumentManager_Suscriber_Behavior_TimestampService.php')) && false ?: '_'};
        }, 1 => 'setChangedForRestore'), -32);
        $instance->addListener('sulu_document_manager.hydrate', array(0 => function () {
            return ${($_ = isset($this->services['sulu_document_manager.suscriber.behavior.timestamp']) ? $this->services['sulu_document_manager.suscriber.behavior.timestamp'] : $this->load('getSuluDocumentManager_Suscriber_Behavior_TimestampService.php')) && false ?: '_'};
        }, 1 => 'setTimestampsOnDocument'), 0);
        $instance->addListener('sulu_document_manager.hydrate', array(0 => function () {
            return ${($_ = isset($this->services['sulu_document_manager.suscriber.behavior.node_name']) ? $this->services['sulu_document_manager.suscriber.behavior.node_name'] : $this->services['sulu_document_manager.suscriber.behavior.node_name'] = new \Sulu\Component\DocumentManager\Subscriber\Behavior\Mapping\NodeNameSubscriber()) && false ?: '_'};
        }, 1 => 'setFinalNodeName'), 0);
        $instance->addListener('sulu_document_manager.persist', array(0 => function () {
            return ${($_ = isset($this->services['sulu_document_manager.suscriber.behavior.node_name']) ? $this->services['sulu_document_manager.suscriber.behavior.node_name'] : $this->services['sulu_document_manager.suscriber.behavior.node_name'] = new \Sulu\Component\DocumentManager\Subscriber\Behavior\Mapping\NodeNameSubscriber()) && false ?: '_'};
        }, 1 => 'setInitialNodeName'), 0);
        $instance->addListener('sulu_document_manager.persist', array(0 => function () {
            return ${($_ = isset($this->services['sulu_document_manager.suscriber.behavior.node_name']) ? $this->services['sulu_document_manager.suscriber.behavior.node_name'] : $this->services['sulu_document_manager.suscriber.behavior.node_name'] = new \Sulu\Component\DocumentManager\Subscriber\Behavior\Mapping\NodeNameSubscriber()) && false ?: '_'};
        }, 1 => 'setFinalNodeName'), -480);
        $instance->addListener('sulu_document_manager.hydrate', array(0 => function () {
            return ${($_ = isset($this->services['sulu_document_manager.suscriber.behavior.uuid']) ? $this->services['sulu_document_manager.suscriber.behavior.uuid'] : $this->services['sulu_document_manager.suscriber.behavior.uuid'] = new \Sulu\Component\DocumentManager\Subscriber\Behavior\Mapping\UuidSubscriber()) && false ?: '_'};
        }, 1 => 'handleUuid'), 0);
        $instance->addListener('sulu_document_manager.persist', array(0 => function () {
            return ${($_ = isset($this->services['sulu_document_manager.suscriber.behavior.uuid']) ? $this->services['sulu_document_manager.suscriber.behavior.uuid'] : $this->services['sulu_document_manager.suscriber.behavior.uuid'] = new \Sulu\Component\DocumentManager\Subscriber\Behavior\Mapping\UuidSubscriber()) && false ?: '_'};
        }, 1 => 'handleUuid'), 0);
        $instance->addListener('sulu_document_manager.hydrate', array(0 => function () {
            return ${($_ = isset($this->services['sulu_document_manager.suscriber.behavior.locale']) ? $this->services['sulu_document_manager.suscriber.behavior.locale'] : $this->load('getSuluDocumentManager_Suscriber_Behavior_LocaleService.php')) && false ?: '_'};
        }, 1 => 'handleLocale'), 410);
        $instance->addListener('sulu_document_manager.persist', array(0 => function () {
            return ${($_ = isset($this->services['sulu_document_manager.suscriber.behavior.locale']) ? $this->services['sulu_document_manager.suscriber.behavior.locale'] : $this->load('getSuluDocumentManager_Suscriber_Behavior_LocaleService.php')) && false ?: '_'};
        }, 1 => 'handleLocale'), 410);
        $instance->addListener('sulu_document_manager.hydrate', array(0 => function () {
            return ${($_ = isset($this->services['sulu_document_manager.suscriber.behavior.parent']) ? $this->services['sulu_document_manager.suscriber.behavior.parent'] : $this->load('getSuluDocumentManager_Suscriber_Behavior_ParentService.php')) && false ?: '_'};
        }, 1 => 'handleHydrate'), 0);
        $instance->addListener('sulu_document_manager.persist', array(0 => function () {
            return ${($_ = isset($this->services['sulu_document_manager.suscriber.behavior.parent']) ? $this->services['sulu_document_manager.suscriber.behavior.parent'] : $this->load('getSuluDocumentManager_Suscriber_Behavior_ParentService.php')) && false ?: '_'};
        }, 1 => 'handleChangeParent'), 0);
        $instance->addListener('sulu_document_manager.persist', array(0 => function () {
            return ${($_ = isset($this->services['sulu_document_manager.suscriber.behavior.parent']) ? $this->services['sulu_document_manager.suscriber.behavior.parent'] : $this->load('getSuluDocumentManager_Suscriber_Behavior_ParentService.php')) && false ?: '_'};
        }, 1 => 'handleSetParentNodeFromDocument'), 490);
        $instance->addListener('sulu_document_manager.move', array(0 => function () {
            return ${($_ = isset($this->services['sulu_document_manager.suscriber.behavior.parent']) ? $this->services['sulu_document_manager.suscriber.behavior.parent'] : $this->load('getSuluDocumentManager_Suscriber_Behavior_ParentService.php')) && false ?: '_'};
        }, 1 => 'handleMove'), 0);
        $instance->addListener('sulu_document_manager.hydrate', array(0 => function () {
            return ${($_ = isset($this->services['sulu_document_manager.suscriber.behavior.children']) ? $this->services['sulu_document_manager.suscriber.behavior.children'] : $this->load('getSuluDocumentManager_Suscriber_Behavior_ChildrenService.php')) && false ?: '_'};
        }, 1 => 'handleHydrate'), 0);
        $instance->addListener('sulu_document_manager.persist', array(0 => function () {
            return ${($_ = isset($this->services['sulu_document_manager.subscriber.behavior.path']) ? $this->services['sulu_document_manager.subscriber.behavior.path'] : $this->load('getSuluDocumentManager_Subscriber_Behavior_PathService.php')) && false ?: '_'};
        }, 1 => 'setInitialPath'), 0);
        $instance->addListener('sulu_document_manager.persist', array(0 => function () {
            return ${($_ = isset($this->services['sulu_document_manager.subscriber.behavior.path']) ? $this->services['sulu_document_manager.subscriber.behavior.path'] : $this->load('getSuluDocumentManager_Subscriber_Behavior_PathService.php')) && false ?: '_'};
        }, 1 => 'setFinalPath'), -495);
        $instance->addListener('sulu_document_manager.hydrate', array(0 => function () {
            return ${($_ = isset($this->services['sulu_document_manager.subscriber.behavior.path']) ? $this->services['sulu_document_manager.subscriber.behavior.path'] : $this->load('getSuluDocumentManager_Subscriber_Behavior_PathService.php')) && false ?: '_'};
        }, 1 => 'setFinalPath'), 0);
        $instance->addListener('sulu_document_manager.persist', array(0 => function () {
            return ${($_ = isset($this->services['sulu_document_manager.subscriber.behavior.filing']) ? $this->services['sulu_document_manager.subscriber.behavior.filing'] : $this->load('getSuluDocumentManager_Subscriber_Behavior_FilingService.php')) && false ?: '_'};
        }, 1 => 'handlePersist'), 485);
        $instance->addListener('sulu_document_manager.persist', array(0 => function () {
            return ${($_ = isset($this->services['sulu_document_manager.subscriber.behavior.alias']) ? $this->services['sulu_document_manager.subscriber.behavior.alias'] : $this->load('getSuluDocumentManager_Subscriber_Behavior_AliasService.php')) && false ?: '_'};
        }, 1 => 'handlePersist'), 490);
        $instance->addListener('sulu_document_manager.persist', array(0 => function () {
            return ${($_ = isset($this->services['sulu_document_manager.subscriber.behavior.base_path']) ? $this->services['sulu_document_manager.subscriber.behavior.base_path'] : $this->load('getSuluDocumentManager_Subscriber_Behavior_BasePathService.php')) && false ?: '_'};
        }, 1 => 'handlePersist'), 500);
        $instance->addListener('sulu_document_manager.persist', array(0 => function () {
            return ${($_ = isset($this->services['sulu_custom_urls.subscriber']) ? $this->services['sulu_custom_urls.subscriber'] : $this->load('getSuluCustomUrls_SubscriberService.php')) && false ?: '_'};
        }, 1 => 'handlePersist'), 0);
        $instance->addListener('sulu_document_manager.hydrate', array(0 => function () {
            return ${($_ = isset($this->services['sulu_custom_urls.subscriber']) ? $this->services['sulu_custom_urls.subscriber'] : $this->load('getSuluCustomUrls_SubscriberService.php')) && false ?: '_'};
        }, 1 => 'handleHydrate'), 0);
        $instance->addListener('sulu_document_manager.remove', array(0 => function () {
            return ${($_ = isset($this->services['sulu_custom_urls.subscriber']) ? $this->services['sulu_custom_urls.subscriber'] : $this->load('getSuluCustomUrls_SubscriberService.php')) && false ?: '_'};
        }, 1 => 'handleRemove'), 550);
        $instance->addListener('sulu_document_manager.persist', array(0 => function () {
            return ${($_ = isset($this->services['sulu_custom_urls.invalidate.subscriber']) ? $this->services['sulu_custom_urls.invalidate.subscriber'] : $this->load('getSuluCustomUrls_Invalidate_SubscriberService.php')) && false ?: '_'};
        }, 1 => 'handlePersist'), 0);

        return $instance;
    }

    /**
     * Gets the private 'sulu_document_manager.metadata_factory' shared service.
     *
     * @return \Sulu\Component\DocumentManager\Metadata\MetadataFactory
     */
    protected function getSuluDocumentManager_MetadataFactoryService()
    {
        return $this->services['sulu_document_manager.metadata_factory'] = new \Sulu\Component\DocumentManager\Metadata\MetadataFactory(${($_ = isset($this->services['sulu_document_manager.metadata_factory.base']) ? $this->services['sulu_document_manager.metadata_factory.base'] : $this->getSuluDocumentManager_MetadataFactory_BaseService()) && false ?: '_'});
    }

    /**
     * Gets the private 'sulu_document_manager.metadata_factory.base' shared service.
     *
     * @return \Sulu\Component\DocumentManager\Metadata\BaseMetadataFactory
     */
    protected function getSuluDocumentManager_MetadataFactory_BaseService()
    {
        return $this->services['sulu_document_manager.metadata_factory.base'] = new \Sulu\Component\DocumentManager\Metadata\BaseMetadataFactory(${($_ = isset($this->services['sulu_document_manager.event_dispatcher']) ? $this->services['sulu_document_manager.event_dispatcher'] : $this->getSuluDocumentManager_EventDispatcherService()) && false ?: '_'}, $this->parameters['sulu_document_manager.mapping']);
    }

    /**
     * Gets the private 'sulu_document_manager.namespace_registry' shared service.
     *
     * @return \Sulu\Component\DocumentManager\NamespaceRegistry
     */
    protected function getSuluDocumentManager_NamespaceRegistryService()
    {
        return $this->services['sulu_document_manager.namespace_registry'] = new \Sulu\Component\DocumentManager\NamespaceRegistry($this->parameters['sulu_document_manager.namespace_mapping']);
    }

    /**
     * Gets the private 'sulu_document_manager.node_manager' shared service.
     *
     * @return \Sulu\Component\DocumentManager\NodeManager
     */
    protected function getSuluDocumentManager_NodeManagerService()
    {
        return $this->services['sulu_document_manager.node_manager'] = new \Sulu\Component\DocumentManager\NodeManager(${($_ = isset($this->services['sulu_document_manager.decorated_default_session']) ? $this->services['sulu_document_manager.decorated_default_session'] : $this->getSuluDocumentManager_DecoratedDefaultSessionService()) && false ?: '_'});
    }

    /**
     * Gets the private 'sulu_document_manager.path_segment_registry' shared service.
     *
     * @return \Sulu\Component\DocumentManager\PathSegmentRegistry
     */
    protected function getSuluDocumentManager_PathSegmentRegistryService()
    {
        return $this->services['sulu_document_manager.path_segment_registry'] = new \Sulu\Component\DocumentManager\PathSegmentRegistry($this->parameters['sulu_document_manager.segments']);
    }

    /**
     * Gets the private 'sulu_document_manager.property_encoder' shared service.
     *
     * @return \Sulu\Bundle\DocumentManagerBundle\Bridge\PropertyEncoder
     */
    protected function getSuluDocumentManager_PropertyEncoderService()
    {
        return $this->services['sulu_document_manager.property_encoder'] = new \Sulu\Bundle\DocumentManagerBundle\Bridge\PropertyEncoder(${($_ = isset($this->services['sulu_document_manager.namespace_registry']) ? $this->services['sulu_document_manager.namespace_registry'] : $this->getSuluDocumentManager_NamespaceRegistryService()) && false ?: '_'});
    }

    /**
     * Gets the private 'sulu_document_manager.proxy_factory' shared service.
     *
     * @return \Sulu\Component\DocumentManager\ProxyFactory
     */
    protected function getSuluDocumentManager_ProxyFactoryService()
    {
        $a = ${($_ = isset($this->services['sulu_document_manager.proxy_manager.factory.ghost']) ? $this->services['sulu_document_manager.proxy_manager.factory.ghost'] : $this->getSuluDocumentManager_ProxyManager_Factory_GhostService()) && false ?: '_'};

        if (isset($this->services['sulu_document_manager.proxy_factory'])) {
            return $this->services['sulu_document_manager.proxy_factory'];
        }

        return $this->services['sulu_document_manager.proxy_factory'] = new \Sulu\Component\DocumentManager\ProxyFactory($a, ${($_ = isset($this->services['sulu_document_manager.event_dispatcher']) ? $this->services['sulu_document_manager.event_dispatcher'] : $this->getSuluDocumentManager_EventDispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['sulu_document_manager.document_registry']) ? $this->services['sulu_document_manager.document_registry'] : $this->services['sulu_document_manager.document_registry'] = new \Sulu\Component\DocumentManager\DocumentRegistry('en')) && false ?: '_'}, ${($_ = isset($this->services['sulu_document_manager.metadata_factory']) ? $this->services['sulu_document_manager.metadata_factory'] : $this->getSuluDocumentManager_MetadataFactoryService()) && false ?: '_'});
    }

    /**
     * Gets the private 'sulu_document_manager.proxy_manager.factory.ghost' shared service.
     *
     * @return \ProxyManager\Factory\LazyLoadingGhostFactory
     */
    protected function getSuluDocumentManager_ProxyManager_Factory_GhostService()
    {
        $a = ${($_ = isset($this->services['sulu_core.proxy_manager.configuration']) ? $this->services['sulu_core.proxy_manager.configuration'] : $this->getSuluCore_ProxyManager_ConfigurationService()) && false ?: '_'};

        if (isset($this->services['sulu_document_manager.proxy_manager.factory.ghost'])) {
            return $this->services['sulu_document_manager.proxy_manager.factory.ghost'];
        }

        return $this->services['sulu_document_manager.proxy_manager.factory.ghost'] = new \ProxyManager\Factory\LazyLoadingGhostFactory($a);
    }

    /**
     * Gets the private 'sulu_document_manager.session_manager' shared service.
     *
     * @return \Sulu\Bundle\DocumentManagerBundle\Session\SessionManager
     */
    protected function getSuluDocumentManager_SessionManagerService()
    {
        return $this->services['sulu_document_manager.session_manager'] = new \Sulu\Bundle\DocumentManagerBundle\Session\SessionManager(${($_ = isset($this->services['sulu_document_manager.decorated_default_session']) ? $this->services['sulu_document_manager.decorated_default_session'] : $this->getSuluDocumentManager_DecoratedDefaultSessionService()) && false ?: '_'}, ${($_ = isset($this->services['sulu_document_manager.decorated_live_session']) ? $this->services['sulu_document_manager.decorated_live_session'] : $this->getSuluDocumentManager_DecoratedLiveSessionService()) && false ?: '_'});
    }

    /**
     * Gets the private 'sulu_http_cache.cache_lifetime.resolver' shared service.
     *
     * @return \Sulu\Component\HttpCache\CacheLifetimeResolver
     */
    protected function getSuluHttpCache_CacheLifetime_ResolverService()
    {
        return $this->services['sulu_http_cache.cache_lifetime.resolver'] = new \Sulu\Component\HttpCache\CacheLifetimeResolver();
    }

    /**
     * Gets the private 'sulu_markup.parser' shared service.
     *
     * @return \Sulu\Bundle\MarkupBundle\Markup\HtmlMarkupParser
     */
    protected function getSuluMarkup_ParserService()
    {
        return $this->services['sulu_markup.parser'] = new \Sulu\Bundle\MarkupBundle\Markup\HtmlMarkupParser(${($_ = isset($this->services['sulu_markup.tag.registry']) ? $this->services['sulu_markup.tag.registry'] : $this->getSuluMarkup_Tag_RegistryService()) && false ?: '_'}, ${($_ = isset($this->services['sulu_markup.parser.delegating_html_extractor']) ? $this->services['sulu_markup.parser.delegating_html_extractor'] : $this->getSuluMarkup_Parser_DelegatingHtmlExtractorService()) && false ?: '_'});
    }

    /**
     * Gets the private 'sulu_markup.parser.delegating_html_extractor' shared service.
     *
     * @return \Sulu\Bundle\MarkupBundle\Markup\DelegatingTagExtractor
     */
    protected function getSuluMarkup_Parser_DelegatingHtmlExtractorService()
    {
        return $this->services['sulu_markup.parser.delegating_html_extractor'] = new \Sulu\Bundle\MarkupBundle\Markup\DelegatingTagExtractor(array(0 => ${($_ = isset($this->services['sulu_markup.parser.html_extractor']) ? $this->services['sulu_markup.parser.html_extractor'] : $this->services['sulu_markup.parser.html_extractor'] = new \Sulu\Bundle\MarkupBundle\Markup\HtmlTagExtractor('sulu')) && false ?: '_'}));
    }

    /**
     * Gets the private 'sulu_markup.parser.html_extractor' shared service.
     *
     * @return \Sulu\Bundle\MarkupBundle\Markup\HtmlTagExtractor
     */
    protected function getSuluMarkup_Parser_HtmlExtractorService()
    {
        return $this->services['sulu_markup.parser.html_extractor'] = new \Sulu\Bundle\MarkupBundle\Markup\HtmlTagExtractor('sulu');
    }

    /**
     * Gets the private 'sulu_markup.response_listener' shared service.
     *
     * @return \Sulu\Bundle\MarkupBundle\Listener\MarkupListener
     */
    protected function getSuluMarkup_ResponseListenerService()
    {
        return $this->services['sulu_markup.response_listener'] = new \Sulu\Bundle\MarkupBundle\Listener\MarkupListener(array('html' => ${($_ = isset($this->services['sulu_markup.parser']) ? $this->services['sulu_markup.parser'] : $this->getSuluMarkup_ParserService()) && false ?: '_'}));
    }

    /**
     * Gets the private 'sulu_markup.tag.registry' shared service.
     *
     * @return \Sulu\Bundle\MarkupBundle\Tag\TagRegistry
     */
    protected function getSuluMarkup_Tag_RegistryService()
    {
        return $this->services['sulu_markup.tag.registry'] = new \Sulu\Bundle\MarkupBundle\Tag\TagRegistry(array('html' => array('sulu' => array('media' => ${($_ = isset($this->services['sulu_media.markup']) ? $this->services['sulu_media.markup'] : $this->getSuluMedia_MarkupService()) && false ?: '_'}, 'link' => ${($_ = isset($this->services['sulu_content.link_tag']) ? $this->services['sulu_content.link_tag'] : $this->getSuluContent_LinkTagService()) && false ?: '_'}))));
    }

    /**
     * Gets the private 'sulu_media.adapter' shared service.
     *
     * @return \Imagine\Gd\Imagine
     */
    protected function getSuluMedia_AdapterService()
    {
        return $this->services['sulu_media.adapter'] = new \Imagine\Gd\Imagine();
    }

    /**
     * Gets the private 'sulu_media.collection_repository' shared service.
     *
     * @return \Sulu\Bundle\MediaBundle\Entity\CollectionRepository
     */
    protected function getSuluMedia_CollectionRepositoryService()
    {
        return $this->services['sulu_media.collection_repository'] = ${($_ = isset($this->services['doctrine.orm.default_entity_manager']) ? $this->services['doctrine.orm.default_entity_manager'] : $this->getDoctrine_Orm_DefaultEntityManagerService()) && false ?: '_'}->getRepository('SuluMediaBundle:Collection');
    }

    /**
     * Gets the private 'sulu_media.doctrine.invalidation_listener' shared service.
     *
     * @return \Sulu\Bundle\MediaBundle\EventListener\CacheInvalidationListener
     */
    protected function getSuluMedia_Doctrine_InvalidationListenerService()
    {
        return $this->services['sulu_media.doctrine.invalidation_listener'] = new \Sulu\Bundle\MediaBundle\EventListener\CacheInvalidationListener(${($_ = isset($this->services['sulu_http_cache.handler.aggregate']) ? $this->services['sulu_http_cache.handler.aggregate'] : $this->getSuluHttpCache_Handler_AggregateService()) && false ?: '_'});
    }

    /**
     * Gets the private 'sulu_media.file_validator' shared service.
     *
     * @return \Sulu\Bundle\MediaBundle\Media\FileValidator\FileValidator
     */
    protected function getSuluMedia_FileValidatorService()
    {
        return $this->services['sulu_media.file_validator'] = new \Sulu\Bundle\MediaBundle\Media\FileValidator\FileValidator();
    }

    /**
     * Gets the private 'sulu_media.format_cache' shared service.
     *
     * @return \Sulu\Bundle\MediaBundle\Media\FormatCache\LocalFormatCache
     */
    protected function getSuluMedia_FormatCacheService()
    {
        return $this->services['sulu_media.format_cache'] = new \Sulu\Bundle\MediaBundle\Media\FormatCache\LocalFormatCache(${($_ = isset($this->services['filesystem']) ? $this->services['filesystem'] : $this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem()) && false ?: '_'}, ($this->targetDirs[4].'\\app/../web/uploads/media'), '/uploads/media/{slug}', 10, $this->parameters['sulu_media.image.formats']);
    }

    /**
     * Gets the private 'sulu_media.format_manager' shared service.
     *
     * @return \Sulu\Bundle\MediaBundle\Media\FormatManager\FormatManager
     */
    protected function getSuluMedia_FormatManagerService()
    {
        return $this->services['sulu_media.format_manager'] = new \Sulu\Bundle\MediaBundle\Media\FormatManager\FormatManager(${($_ = isset($this->services['sulu.repository.media']) ? $this->services['sulu.repository.media'] : $this->getSulu_Repository_MediaService()) && false ?: '_'}, ${($_ = isset($this->services['sulu_media.format_cache']) ? $this->services['sulu_media.format_cache'] : $this->getSuluMedia_FormatCacheService()) && false ?: '_'}, ${($_ = isset($this->services['sulu_media.image.converter']) ? $this->services['sulu_media.image.converter'] : $this->getSuluMedia_Image_ConverterService()) && false ?: '_'}, true, $this->parameters['sulu_media.format_manager.response_headers'], $this->parameters['sulu_media.image.formats'], $this->parameters['sulu_media.format_manager.mime_types']);
    }

    /**
     * Gets the private 'sulu_media.image.converter' shared service.
     *
     * @return \Sulu\Bundle\MediaBundle\Media\ImageConverter\ImagineImageConverter
     */
    protected function getSuluMedia_Image_ConverterService()
    {
        return $this->services['sulu_media.image.converter'] = new \Sulu\Bundle\MediaBundle\Media\ImageConverter\ImagineImageConverter(${($_ = isset($this->services['sulu_media.adapter']) ? $this->services['sulu_media.adapter'] : $this->services['sulu_media.adapter'] = new \Imagine\Gd\Imagine()) && false ?: '_'}, ${($_ = isset($this->services['sulu_media.storage']) ? $this->services['sulu_media.storage'] : $this->getSuluMedia_StorageService()) && false ?: '_'}, ${($_ = isset($this->services['sulu_media.image.media_extractor']) ? $this->services['sulu_media.image.media_extractor'] : $this->getSuluMedia_Image_MediaExtractorService()) && false ?: '_'}, ${($_ = isset($this->services['sulu_media.image.transformation_pool']) ? $this->services['sulu_media.image.transformation_pool'] : $this->getSuluMedia_Image_TransformationPoolService()) && false ?: '_'}, ${($_ = isset($this->services['sulu_media.image.focus']) ? $this->services['sulu_media.image.focus'] : $this->services['sulu_media.image.focus'] = new \Sulu\Bundle\MediaBundle\Media\ImageConverter\Focus\Focus()) && false ?: '_'}, ${($_ = isset($this->services['sulu_media.image.scaler']) ? $this->services['sulu_media.image.scaler'] : $this->services['sulu_media.image.scaler'] = new \Sulu\Bundle\MediaBundle\Media\ImageConverter\Scaler\Scaler()) && false ?: '_'}, ${($_ = isset($this->services['sulu_media.image.cropper']) ? $this->services['sulu_media.image.cropper'] : $this->services['sulu_media.image.cropper'] = new \Sulu\Bundle\MediaBundle\Media\ImageConverter\Cropper\Cropper()) && false ?: '_'}, $this->parameters['sulu_media.image.formats']);
    }

    /**
     * Gets the private 'sulu_media.image.cropper' shared service.
     *
     * @return \Sulu\Bundle\MediaBundle\Media\ImageConverter\Cropper\Cropper
     */
    protected function getSuluMedia_Image_CropperService()
    {
        return $this->services['sulu_media.image.cropper'] = new \Sulu\Bundle\MediaBundle\Media\ImageConverter\Cropper\Cropper();
    }

    /**
     * Gets the private 'sulu_media.image.focus' shared service.
     *
     * @return \Sulu\Bundle\MediaBundle\Media\ImageConverter\Focus\Focus
     */
    protected function getSuluMedia_Image_FocusService()
    {
        return $this->services['sulu_media.image.focus'] = new \Sulu\Bundle\MediaBundle\Media\ImageConverter\Focus\Focus();
    }

    /**
     * Gets the private 'sulu_media.image.media_extractor' shared service.
     *
     * @return \Sulu\Bundle\MediaBundle\Media\ImageConverter\MediaImageExtractor
     */
    protected function getSuluMedia_Image_MediaExtractorService()
    {
        return $this->services['sulu_media.image.media_extractor'] = new \Sulu\Bundle\MediaBundle\Media\ImageConverter\MediaImageExtractor(${($_ = isset($this->services['sulu_media.adapter']) ? $this->services['sulu_media.adapter'] : $this->services['sulu_media.adapter'] = new \Imagine\Gd\Imagine()) && false ?: '_'}, ${($_ = isset($this->services['sulu_media.video_thumbnail_generator']) ? $this->services['sulu_media.video_thumbnail_generator'] : $this->getSuluMedia_VideoThumbnailGeneratorService()) && false ?: '_'}, 'gs');
    }

    /**
     * Gets the private 'sulu_media.image.scaler' shared service.
     *
     * @return \Sulu\Bundle\MediaBundle\Media\ImageConverter\Scaler\Scaler
     */
    protected function getSuluMedia_Image_ScalerService()
    {
        return $this->services['sulu_media.image.scaler'] = new \Sulu\Bundle\MediaBundle\Media\ImageConverter\Scaler\Scaler();
    }

    /**
     * Gets the private 'sulu_media.image.transformation.blur' shared service.
     *
     * @return \Sulu\Bundle\MediaBundle\Media\ImageConverter\Transformation\BlurTransformation
     */
    protected function getSuluMedia_Image_Transformation_BlurService()
    {
        return $this->services['sulu_media.image.transformation.blur'] = new \Sulu\Bundle\MediaBundle\Media\ImageConverter\Transformation\BlurTransformation();
    }

    /**
     * Gets the private 'sulu_media.image.transformation.crop' shared service.
     *
     * @return \Sulu\Bundle\MediaBundle\Media\ImageConverter\Transformation\CropTransformation
     */
    protected function getSuluMedia_Image_Transformation_CropService()
    {
        return $this->services['sulu_media.image.transformation.crop'] = new \Sulu\Bundle\MediaBundle\Media\ImageConverter\Transformation\CropTransformation();
    }

    /**
     * Gets the private 'sulu_media.image.transformation.gamma' shared service.
     *
     * @return \Sulu\Bundle\MediaBundle\Media\ImageConverter\Transformation\GammaTransformation
     */
    protected function getSuluMedia_Image_Transformation_GammaService()
    {
        return $this->services['sulu_media.image.transformation.gamma'] = new \Sulu\Bundle\MediaBundle\Media\ImageConverter\Transformation\GammaTransformation();
    }

    /**
     * Gets the private 'sulu_media.image.transformation.grayscale' shared service.
     *
     * @return \Sulu\Bundle\MediaBundle\Media\ImageConverter\Transformation\GrayscaleTransformation
     */
    protected function getSuluMedia_Image_Transformation_GrayscaleService()
    {
        return $this->services['sulu_media.image.transformation.grayscale'] = new \Sulu\Bundle\MediaBundle\Media\ImageConverter\Transformation\GrayscaleTransformation();
    }

    /**
     * Gets the private 'sulu_media.image.transformation.negative' shared service.
     *
     * @return \Sulu\Bundle\MediaBundle\Media\ImageConverter\Transformation\NegativeTransformation
     */
    protected function getSuluMedia_Image_Transformation_NegativeService()
    {
        return $this->services['sulu_media.image.transformation.negative'] = new \Sulu\Bundle\MediaBundle\Media\ImageConverter\Transformation\NegativeTransformation();
    }

    /**
     * Gets the private 'sulu_media.image.transformation.paste' shared service.
     *
     * @return \Sulu\Bundle\MediaBundle\Media\ImageConverter\Transformation\PasteTransformation
     */
    protected function getSuluMedia_Image_Transformation_PasteService()
    {
        return $this->services['sulu_media.image.transformation.paste'] = new \Sulu\Bundle\MediaBundle\Media\ImageConverter\Transformation\PasteTransformation(${($_ = isset($this->services['sulu_media.adapter']) ? $this->services['sulu_media.adapter'] : $this->services['sulu_media.adapter'] = new \Imagine\Gd\Imagine()) && false ?: '_'}, ${($_ = isset($this->services['file_locator']) ? $this->services['file_locator'] : $this->services['file_locator'] = new \Symfony\Component\HttpKernel\Config\FileLocator(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'}, ($this->targetDirs[4].'\\app/Resources'), array(0 => ($this->targetDirs[4].'\\app')))) && false ?: '_'});
    }

    /**
     * Gets the private 'sulu_media.image.transformation.sharpen' shared service.
     *
     * @return \Sulu\Bundle\MediaBundle\Media\ImageConverter\Transformation\SharpenTransformation
     */
    protected function getSuluMedia_Image_Transformation_SharpenService()
    {
        return $this->services['sulu_media.image.transformation.sharpen'] = new \Sulu\Bundle\MediaBundle\Media\ImageConverter\Transformation\SharpenTransformation();
    }

    /**
     * Gets the private 'sulu_media.image.transformation_pool' shared service.
     *
     * @return \Sulu\Bundle\MediaBundle\Media\ImageConverter\TransformationPool
     */
    protected function getSuluMedia_Image_TransformationPoolService()
    {
        $this->services['sulu_media.image.transformation_pool'] = $instance = new \Sulu\Bundle\MediaBundle\Media\ImageConverter\TransformationPool();

        $instance->add(${($_ = isset($this->services['sulu_media.image.transformation.crop']) ? $this->services['sulu_media.image.transformation.crop'] : $this->services['sulu_media.image.transformation.crop'] = new \Sulu\Bundle\MediaBundle\Media\ImageConverter\Transformation\CropTransformation()) && false ?: '_'}, 'crop');
        $instance->add(${($_ = isset($this->services['sulu_media.image.transformation.paste']) ? $this->services['sulu_media.image.transformation.paste'] : $this->getSuluMedia_Image_Transformation_PasteService()) && false ?: '_'}, 'paste');
        $instance->add(${($_ = isset($this->services['sulu_media.image.transformation.blur']) ? $this->services['sulu_media.image.transformation.blur'] : $this->services['sulu_media.image.transformation.blur'] = new \Sulu\Bundle\MediaBundle\Media\ImageConverter\Transformation\BlurTransformation()) && false ?: '_'}, 'blur');
        $instance->add(${($_ = isset($this->services['sulu_media.image.transformation.gamma']) ? $this->services['sulu_media.image.transformation.gamma'] : $this->services['sulu_media.image.transformation.gamma'] = new \Sulu\Bundle\MediaBundle\Media\ImageConverter\Transformation\GammaTransformation()) && false ?: '_'}, 'gamma');
        $instance->add(${($_ = isset($this->services['sulu_media.image.transformation.grayscale']) ? $this->services['sulu_media.image.transformation.grayscale'] : $this->services['sulu_media.image.transformation.grayscale'] = new \Sulu\Bundle\MediaBundle\Media\ImageConverter\Transformation\GrayscaleTransformation()) && false ?: '_'}, 'grayscale');
        $instance->add(${($_ = isset($this->services['sulu_media.image.transformation.negative']) ? $this->services['sulu_media.image.transformation.negative'] : $this->services['sulu_media.image.transformation.negative'] = new \Sulu\Bundle\MediaBundle\Media\ImageConverter\Transformation\NegativeTransformation()) && false ?: '_'}, 'negative');
        $instance->add(${($_ = isset($this->services['sulu_media.image.transformation.sharpen']) ? $this->services['sulu_media.image.transformation.sharpen'] : $this->services['sulu_media.image.transformation.sharpen'] = new \Sulu\Bundle\MediaBundle\Media\ImageConverter\Transformation\SharpenTransformation()) && false ?: '_'}, 'sharpen');

        return $instance;
    }

    /**
     * Gets the private 'sulu_media.markup' shared service.
     *
     * @return \Sulu\Bundle\MediaBundle\Markup\MediaTag
     */
    protected function getSuluMedia_MarkupService()
    {
        return $this->services['sulu_media.markup'] = new \Sulu\Bundle\MediaBundle\Markup\MediaTag(${($_ = isset($this->services['sulu.repository.media']) ? $this->services['sulu.repository.media'] : $this->getSulu_Repository_MediaService()) && false ?: '_'}, ${($_ = isset($this->services['sulu_media.media_manager']) ? $this->services['sulu_media.media_manager'] : $this->getSuluMedia_MediaManagerService()) && false ?: '_'});
    }

    /**
     * Gets the private 'sulu_media.media_manager' shared service.
     *
     * @return \Sulu\Bundle\MediaBundle\Media\Manager\MediaManager
     */
    protected function getSuluMedia_MediaManagerService()
    {
        return $this->services['sulu_media.media_manager'] = new \Sulu\Bundle\MediaBundle\Media\Manager\MediaManager(${($_ = isset($this->services['sulu.repository.media']) ? $this->services['sulu.repository.media'] : $this->getSulu_Repository_MediaService()) && false ?: '_'}, ${($_ = isset($this->services['sulu_media.collection_repository']) ? $this->services['sulu_media.collection_repository'] : $this->getSuluMedia_CollectionRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['sulu.repository.user']) ? $this->services['sulu.repository.user'] : $this->getSulu_Repository_UserService()) && false ?: '_'}, ${($_ = isset($this->services['sulu.repository.category']) ? $this->services['sulu.repository.category'] : $this->getSulu_Repository_CategoryService()) && false ?: '_'}, ${($_ = isset($this->services['doctrine.orm.default_entity_manager']) ? $this->services['doctrine.orm.default_entity_manager'] : $this->getDoctrine_Orm_DefaultEntityManagerService()) && false ?: '_'}, ${($_ = isset($this->services['sulu_media.storage']) ? $this->services['sulu_media.storage'] : $this->getSuluMedia_StorageService()) && false ?: '_'}, ${($_ = isset($this->services['sulu_media.file_validator']) ? $this->services['sulu_media.file_validator'] : $this->services['sulu_media.file_validator'] = new \Sulu\Bundle\MediaBundle\Media\FileValidator\FileValidator()) && false ?: '_'}, ${($_ = isset($this->services['sulu_media.format_manager']) ? $this->services['sulu_media.format_manager'] : $this->getSuluMedia_FormatManagerService()) && false ?: '_'}, ${($_ = isset($this->services['sulu_tag.tag_manager']) ? $this->services['sulu_tag.tag_manager'] : $this->getSuluTag_TagManagerService()) && false ?: '_'}, ${($_ = isset($this->services['sulu_media.type_manager']) ? $this->services['sulu_media.type_manager'] : $this->getSuluMedia_TypeManagerService()) && false ?: '_'}, ${($_ = isset($this->services['sulu.content.path_cleaner']) ? $this->services['sulu.content.path_cleaner'] : $this->getSulu_Content_PathCleanerService()) && false ?: '_'}, ${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage()) && false ?: '_'}, ${($_ = isset($this->services['sulu_security.security_checker']) ? $this->services['sulu_security.security_checker'] : $this->getSuluSecurity_SecurityCheckerService()) && false ?: '_'}, ${($_ = isset($this->services['dubture_ffmpeg.ffprobe']) ? $this->services['dubture_ffmpeg.ffprobe'] : $this->getDubtureFfmpeg_FfprobeService()) && false ?: '_'}, $this->parameters['sulu_security.permissions'], '/media/{id}/download/{slug}', '16MB', NULL);
    }

    /**
     * Gets the private 'sulu_media.storage' shared service.
     *
     * @return \Sulu\Bundle\MediaBundle\Media\Storage\LocalStorage
     */
    protected function getSuluMedia_StorageService()
    {
        return $this->services['sulu_media.storage'] = new \Sulu\Bundle\MediaBundle\Media\Storage\LocalStorage(($this->targetDirs[3].'/uploads/media'), 10, ${($_ = isset($this->services['sulu_media.storage.file_system']) ? $this->services['sulu_media.storage.file_system'] : $this->services['sulu_media.storage.file_system'] = new \Symfony\Component\Filesystem\Filesystem()) && false ?: '_'}, ${($_ = isset($this->services['logger']) ? $this->services['logger'] : $this->getLoggerService()) && false ?: '_'});
    }

    /**
     * Gets the private 'sulu_media.storage.file_system' shared service.
     *
     * @return \Symfony\Component\Filesystem\Filesystem
     */
    protected function getSuluMedia_Storage_FileSystemService()
    {
        return $this->services['sulu_media.storage.file_system'] = new \Symfony\Component\Filesystem\Filesystem();
    }

    /**
     * Gets the private 'sulu_media.twig_extension.disposition_type' shared service.
     *
     * @return \Sulu\Bundle\MediaBundle\Twig\DispositionTypeTwigExtension
     */
    protected function getSuluMedia_TwigExtension_DispositionTypeService()
    {
        return $this->services['sulu_media.twig_extension.disposition_type'] = new \Sulu\Bundle\MediaBundle\Twig\DispositionTypeTwigExtension();
    }

    /**
     * Gets the private 'sulu_media.twig_extension.media' shared service.
     *
     * @return \Sulu\Bundle\MediaBundle\Twig\MediaTwigExtension
     */
    protected function getSuluMedia_TwigExtension_MediaService()
    {
        return $this->services['sulu_media.twig_extension.media'] = new \Sulu\Bundle\MediaBundle\Twig\MediaTwigExtension(${($_ = isset($this->services['sulu_media.media_manager']) ? $this->services['sulu_media.media_manager'] : $this->getSuluMedia_MediaManagerService()) && false ?: '_'});
    }

    /**
     * Gets the private 'sulu_media.type_manager' shared service.
     *
     * @return \Sulu\Bundle\MediaBundle\Media\TypeManager\TypeManager
     */
    protected function getSuluMedia_TypeManagerService()
    {
        return $this->services['sulu_media.type_manager'] = new \Sulu\Bundle\MediaBundle\Media\TypeManager\TypeManager(${($_ = isset($this->services['doctrine.orm.default_entity_manager']) ? $this->services['doctrine.orm.default_entity_manager'] : $this->getDoctrine_Orm_DefaultEntityManagerService()) && false ?: '_'}, $this->parameters['sulu_media.media.types'], $this->parameters['sulu_media.media.blocked_file_types']);
    }

    /**
     * Gets the private 'sulu_media.video_thumbnail_generator' shared service.
     *
     * @return \Sulu\Bundle\MediaBundle\Media\Video\VideoThumbnailService
     */
    protected function getSuluMedia_VideoThumbnailGeneratorService()
    {
        return $this->services['sulu_media.video_thumbnail_generator'] = new \Sulu\Bundle\MediaBundle\Media\Video\VideoThumbnailService(${($_ = isset($this->services['dubture_ffmpeg.ffmpeg']) ? $this->services['dubture_ffmpeg.ffmpeg'] : $this->getDubtureFfmpeg_FfmpegService()) && false ?: '_'});
    }

    /**
     * Gets the private 'sulu_search.search.factory' shared service.
     *
     * @return \Sulu\Bundle\SearchBundle\Search\Factory
     */
    protected function getSuluSearch_Search_FactoryService()
    {
        return $this->services['sulu_search.search.factory'] = new \Sulu\Bundle\SearchBundle\Search\Factory();
    }

    /**
     * Gets the private 'sulu_security.event_listener.security' shared service.
     *
     * @return \Sulu\Bundle\SecurityBundle\EventListener\SuluSecurityListener
     */
    protected function getSuluSecurity_EventListener_SecurityService()
    {
        return $this->services['sulu_security.event_listener.security'] = new \Sulu\Bundle\SecurityBundle\EventListener\SuluSecurityListener(${($_ = isset($this->services['sulu_security.security_checker']) ? $this->services['sulu_security.security_checker'] : $this->getSuluSecurity_SecurityCheckerService()) && false ?: '_'});
    }

    /**
     * Gets the private 'sulu_security.security_checker' shared service.
     *
     * @return \Sulu\Component\Security\Authorization\SecurityChecker
     */
    protected function getSuluSecurity_SecurityCheckerService()
    {
        return $this->services['sulu_security.security_checker'] = new \Sulu\Component\Security\Authorization\SecurityChecker(${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage()) && false ?: '_'}, ${($_ = isset($this->services['security.authorization_checker']) ? $this->services['security.authorization_checker'] : $this->getSecurity_AuthorizationCheckerService()) && false ?: '_'});
    }

    /**
     * Gets the private 'sulu_security.twig_extension.user' shared service.
     *
     * @return \Sulu\Bundle\SecurityBundle\Twig\UserTwigExtension
     */
    protected function getSuluSecurity_TwigExtension_UserService()
    {
        return $this->services['sulu_security.twig_extension.user'] = new \Sulu\Bundle\SecurityBundle\Twig\UserTwigExtension(${($_ = isset($this->services['sulu_security.twig_extension.user.cache']) ? $this->services['sulu_security.twig_extension.user.cache'] : $this->services['sulu_security.twig_extension.user.cache'] = new \Doctrine\Common\Cache\ArrayCache()) && false ?: '_'}, ${($_ = isset($this->services['sulu.repository.user']) ? $this->services['sulu.repository.user'] : $this->getSulu_Repository_UserService()) && false ?: '_'});
    }

    /**
     * Gets the private 'sulu_security.twig_extension.user.cache' shared service.
     *
     * @return \Doctrine\Common\Cache\ArrayCache
     */
    protected function getSuluSecurity_TwigExtension_User_CacheService()
    {
        return $this->services['sulu_security.twig_extension.user.cache'] = new \Doctrine\Common\Cache\ArrayCache();
    }

    /**
     * Gets the private 'sulu_security.user_locale_listener' shared service.
     *
     * @return \Sulu\Bundle\SecurityBundle\EventListener\UserLocaleListener
     */
    protected function getSuluSecurity_UserLocaleListenerService()
    {
        return $this->services['sulu_security.user_locale_listener'] = new \Sulu\Bundle\SecurityBundle\EventListener\UserLocaleListener(${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage()) && false ?: '_'}, ${($_ = isset($this->services['sulu_website.translator.request_analyzer']) ? $this->services['sulu_website.translator.request_analyzer'] : $this->getSuluWebsite_Translator_RequestAnalyzerService()) && false ?: '_'});
    }

    /**
     * Gets the private 'sulu_snippet.default_snippet.manager' shared service.
     *
     * @return \Sulu\Bundle\SnippetBundle\Snippet\DefaultSnippetManager
     */
    protected function getSuluSnippet_DefaultSnippet_ManagerService()
    {
        return $this->services['sulu_snippet.default_snippet.manager'] = new \Sulu\Bundle\SnippetBundle\Snippet\DefaultSnippetManager(${($_ = isset($this->services['sulu_core.webspace.settings_manager']) ? $this->services['sulu_core.webspace.settings_manager'] : $this->getSuluCore_Webspace_SettingsManagerService()) && false ?: '_'}, ${($_ = isset($this->services['sulu_document_manager.document_manager']) ? $this->services['sulu_document_manager.document_manager'] : $this->getSuluDocumentManager_DocumentManagerService()) && false ?: '_'}, ${($_ = isset($this->services['sulu_core.webspace.webspace_manager']) ? $this->services['sulu_core.webspace.webspace_manager'] : $this->getSuluCore_Webspace_WebspaceManagerService()) && false ?: '_'}, ${($_ = isset($this->services['sulu_document_manager.document_registry']) ? $this->services['sulu_document_manager.document_registry'] : $this->services['sulu_document_manager.document_registry'] = new \Sulu\Component\DocumentManager\DocumentRegistry('en')) && false ?: '_'}, $this->parameters['sulu_snippet.areas']);
    }

    /**
     * Gets the private 'sulu_snippet.resolver' shared service.
     *
     * @return \Sulu\Bundle\SnippetBundle\Snippet\SnippetResolver
     */
    protected function getSuluSnippet_ResolverService()
    {
        return $this->services['sulu_snippet.resolver'] = new \Sulu\Bundle\SnippetBundle\Snippet\SnippetResolver(${($_ = isset($this->services['sulu.content.mapper']) ? $this->services['sulu.content.mapper'] : $this->getSulu_Content_MapperService()) && false ?: '_'}, ${($_ = isset($this->services['sulu_website.resolver.structure']) ? $this->services['sulu_website.resolver.structure'] : $this->getSuluWebsite_Resolver_StructureService()) && false ?: '_'});
    }

    /**
     * Gets the private 'sulu_snippet.twig.area_snippet' shared service.
     *
     * @return \Sulu\Bundle\SnippetBundle\Twig\SnippetAreaTwigExtension
     */
    protected function getSuluSnippet_Twig_AreaSnippetService()
    {
        return $this->services['sulu_snippet.twig.area_snippet'] = new \Sulu\Bundle\SnippetBundle\Twig\SnippetAreaTwigExtension(${($_ = isset($this->services['sulu_snippet.default_snippet.manager']) ? $this->services['sulu_snippet.default_snippet.manager'] : $this->getSuluSnippet_DefaultSnippet_ManagerService()) && false ?: '_'}, ${($_ = isset($this->services['sulu_core.webspace.request_analyzer']) ? $this->services['sulu_core.webspace.request_analyzer'] : $this->getSuluCore_Webspace_RequestAnalyzerService()) && false ?: '_'}, ${($_ = isset($this->services['sulu_snippet.resolver']) ? $this->services['sulu_snippet.resolver'] : $this->getSuluSnippet_ResolverService()) && false ?: '_'});
    }

    /**
     * Gets the private 'sulu_snippet.twig.default_snippet' shared service.
     *
     * @return \Sulu\Bundle\SnippetBundle\Twig\DefaultSnippetTwigExtension
     */
    protected function getSuluSnippet_Twig_DefaultSnippetService()
    {
        return $this->services['sulu_snippet.twig.default_snippet'] = new \Sulu\Bundle\SnippetBundle\Twig\DefaultSnippetTwigExtension(${($_ = isset($this->services['sulu_snippet.default_snippet.manager']) ? $this->services['sulu_snippet.default_snippet.manager'] : $this->getSuluSnippet_DefaultSnippet_ManagerService()) && false ?: '_'}, ${($_ = isset($this->services['sulu_core.webspace.request_analyzer']) ? $this->services['sulu_core.webspace.request_analyzer'] : $this->getSuluCore_Webspace_RequestAnalyzerService()) && false ?: '_'}, ${($_ = isset($this->services['sulu_snippet.resolver']) ? $this->services['sulu_snippet.resolver'] : $this->getSuluSnippet_ResolverService()) && false ?: '_'});
    }

    /**
     * Gets the private 'sulu_snippet.twig.snippet' shared service.
     *
     * @return \Sulu\Bundle\SnippetBundle\Twig\SnippetTwigExtension
     */
    protected function getSuluSnippet_Twig_SnippetService()
    {
        return $this->services['sulu_snippet.twig.snippet'] = new \Sulu\Bundle\SnippetBundle\Twig\SnippetTwigExtension(${($_ = isset($this->services['sulu.content.mapper']) ? $this->services['sulu.content.mapper'] : $this->getSulu_Content_MapperService()) && false ?: '_'}, ${($_ = isset($this->services['sulu_core.webspace.request_analyzer']) ? $this->services['sulu_core.webspace.request_analyzer'] : $this->getSuluCore_Webspace_RequestAnalyzerService()) && false ?: '_'}, ${($_ = isset($this->services['sulu_website.resolver.structure']) ? $this->services['sulu_website.resolver.structure'] : $this->getSuluWebsite_Resolver_StructureService()) && false ?: '_'});
    }

    /**
     * Gets the private 'sulu_snippet.twig.snippet.memoized' shared service.
     *
     * @return \Sulu\Bundle\SnippetBundle\Twig\MemoizedSnippetTwigExtension
     */
    protected function getSuluSnippet_Twig_Snippet_MemoizedService()
    {
        return $this->services['sulu_snippet.twig.snippet.memoized'] = new \Sulu\Bundle\SnippetBundle\Twig\MemoizedSnippetTwigExtension(${($_ = isset($this->services['sulu_snippet.twig.snippet']) ? $this->services['sulu_snippet.twig.snippet'] : $this->getSuluSnippet_Twig_SnippetService()) && false ?: '_'}, ${($_ = isset($this->services['sulu_core.cache.memoize']) ? $this->services['sulu_core.cache.memoize'] : $this->getSuluCore_Cache_MemoizeService()) && false ?: '_'}, 1);
    }

    /**
     * Gets the private 'sulu_tag.tag_manager' shared service.
     *
     * @return \Sulu\Bundle\TagBundle\Tag\TagManager
     */
    protected function getSuluTag_TagManagerService()
    {
        return $this->services['sulu_tag.tag_manager'] = new \Sulu\Bundle\TagBundle\Tag\TagManager(${($_ = isset($this->services['sulu.repository.tag']) ? $this->services['sulu.repository.tag'] : $this->getSulu_Repository_TagService()) && false ?: '_'}, ${($_ = isset($this->services['sulu.repository.user']) ? $this->services['sulu.repository.user'] : $this->getSulu_Repository_UserService()) && false ?: '_'}, ${($_ = isset($this->services['doctrine.orm.default_entity_manager']) ? $this->services['doctrine.orm.default_entity_manager'] : $this->getDoctrine_Orm_DefaultEntityManagerService()) && false ?: '_'}, ${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->getDebug_EventDispatcherService()) && false ?: '_'});
    }

    /**
     * Gets the private 'sulu_tag.tag_request_handler' shared service.
     *
     * @return \Sulu\Component\Tag\Request\TagRequestHandler
     */
    protected function getSuluTag_TagRequestHandlerService()
    {
        return $this->services['sulu_tag.tag_request_handler'] = new \Sulu\Component\Tag\Request\TagRequestHandler(${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()) && false ?: '_'});
    }

    /**
     * Gets the private 'sulu_tag.twig_extension' shared service.
     *
     * @return \Sulu\Bundle\TagBundle\Twig\TagTwigExtension
     */
    protected function getSuluTag_TwigExtensionService()
    {
        return $this->services['sulu_tag.twig_extension'] = new \Sulu\Bundle\TagBundle\Twig\TagTwigExtension(${($_ = isset($this->services['sulu_tag.tag_manager']) ? $this->services['sulu_tag.tag_manager'] : $this->getSuluTag_TagManagerService()) && false ?: '_'}, ${($_ = isset($this->services['sulu_tag.tag_request_handler']) ? $this->services['sulu_tag.tag_request_handler'] : $this->getSuluTag_TagRequestHandlerService()) && false ?: '_'}, ${($_ = isset($this->services['jms_serializer']) ? $this->services['jms_serializer'] : $this->getJmsSerializerService()) && false ?: '_'}, ${($_ = isset($this->services['sulu_core.cache.memoize']) ? $this->services['sulu_core.cache.memoize'] : $this->getSuluCore_Cache_MemoizeService()) && false ?: '_'});
    }

    /**
     * Gets the private 'sulu_website.navigation_mapper' shared service.
     *
     * @return \Sulu\Bundle\WebsiteBundle\Navigation\NavigationMapper
     */
    protected function getSuluWebsite_NavigationMapperService()
    {
        return $this->services['sulu_website.navigation_mapper'] = new \Sulu\Bundle\WebsiteBundle\Navigation\NavigationMapper(${($_ = isset($this->services['sulu.content.mapper']) ? $this->services['sulu.content.mapper'] : $this->getSulu_Content_MapperService()) && false ?: '_'}, ${($_ = isset($this->services['sulu.content.query_executor']) ? $this->services['sulu.content.query_executor'] : $this->getSulu_Content_QueryExecutorService()) && false ?: '_'}, new \Sulu\Bundle\WebsiteBundle\Navigation\NavigationQueryBuilder(${($_ = isset($this->services['sulu.content.structure_manager']) ? $this->services['sulu.content.structure_manager'] : $this->getSulu_Content_StructureManagerService()) && false ?: '_'}, ${($_ = isset($this->services['sulu_content.extension.manager']) ? $this->services['sulu_content.extension.manager'] : $this->getSuluContent_Extension_ManagerService()) && false ?: '_'}, 'i18n'), ${($_ = isset($this->services['sulu.phpcr.session']) ? $this->services['sulu.phpcr.session'] : $this->getSulu_Phpcr_SessionService()) && false ?: '_'}, ${($_ = isset($this->services['debug.stopwatch']) ? $this->services['debug.stopwatch'] : $this->services['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true)) && false ?: '_'});
    }

    /**
     * Gets the private 'sulu_website.resolver.structure' shared service.
     *
     * @return \Sulu\Bundle\WebsiteBundle\Resolver\StructureResolver
     */
    protected function getSuluWebsite_Resolver_StructureService()
    {
        return $this->services['sulu_website.resolver.structure'] = new \Sulu\Bundle\WebsiteBundle\Resolver\StructureResolver(${($_ = isset($this->services['sulu.content.type_manager']) ? $this->services['sulu.content.type_manager'] : $this->getSulu_Content_TypeManagerService()) && false ?: '_'}, ${($_ = isset($this->services['sulu_content.extension.manager']) ? $this->services['sulu_content.extension.manager'] : $this->getSuluContent_Extension_ManagerService()) && false ?: '_'});
    }

    /**
     * Gets the private 'sulu_website.router_listener' shared service.
     *
     * @return \Sulu\Bundle\WebsiteBundle\EventListener\RouterListener
     */
    protected function getSuluWebsite_RouterListenerService()
    {
        return $this->services['sulu_website.router_listener'] = new \Sulu\Bundle\WebsiteBundle\EventListener\RouterListener(new \Symfony\Component\HttpKernel\EventListener\RouterListener(${($_ = isset($this->services['router']) ? $this->services['router'] : $this->getRouterService()) && false ?: '_'}, ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()) && false ?: '_'}, ${($_ = isset($this->services['router.request_context']) ? $this->services['router.request_context'] : $this->getRouter_RequestContextService()) && false ?: '_'}, ${($_ = isset($this->services['monolog.logger.request']) ? $this->services['monolog.logger.request'] : $this->getMonolog_Logger_RequestService()) && false ?: '_'}, $this->targetDirs[4], true), ${($_ = isset($this->services['sulu_core.webspace.request_analyzer']) ? $this->services['sulu_core.webspace.request_analyzer'] : $this->getSuluCore_Webspace_RequestAnalyzerService()) && false ?: '_'});
    }

    /**
     * Gets the private 'sulu_website.routing.request_listener' shared service.
     *
     * @return \Sulu\Bundle\WebsiteBundle\Routing\RequestListener
     */
    protected function getSuluWebsite_Routing_RequestListenerService()
    {
        return $this->services['sulu_website.routing.request_listener'] = new \Sulu\Bundle\WebsiteBundle\Routing\RequestListener(${($_ = isset($this->services['router']) ? $this->services['router'] : $this->getRouterService()) && false ?: '_'}, ${($_ = isset($this->services['sulu_core.webspace.request_analyzer']) ? $this->services['sulu_core.webspace.request_analyzer'] : $this->getSuluCore_Webspace_RequestAnalyzerService()) && false ?: '_'});
    }

    /**
     * Gets the private 'sulu_website.sitemap' shared service.
     *
     * @return \Sulu\Bundle\WebsiteBundle\Sitemap\SitemapGenerator
     */
    protected function getSuluWebsite_SitemapService()
    {
        return $this->services['sulu_website.sitemap'] = new \Sulu\Bundle\WebsiteBundle\Sitemap\SitemapGenerator(${($_ = isset($this->services['sulu.content.query_executor']) ? $this->services['sulu.content.query_executor'] : $this->getSulu_Content_QueryExecutorService()) && false ?: '_'}, ${($_ = isset($this->services['sulu_core.webspace.webspace_manager']) ? $this->services['sulu_core.webspace.webspace_manager'] : $this->getSuluCore_Webspace_WebspaceManagerService()) && false ?: '_'}, new \Sulu\Bundle\WebsiteBundle\Sitemap\SitemapContentQueryBuilder(${($_ = isset($this->services['sulu.content.structure_manager']) ? $this->services['sulu.content.structure_manager'] : $this->getSulu_Content_StructureManagerService()) && false ?: '_'}, ${($_ = isset($this->services['sulu_content.extension.manager']) ? $this->services['sulu_content.extension.manager'] : $this->getSuluContent_Extension_ManagerService()) && false ?: '_'}, 'i18n'), 'dev');
    }

    /**
     * Gets the private 'sulu_website.translator.request_analyzer' shared service.
     *
     * @return \Sulu\Bundle\WebsiteBundle\Translator\RequestAnalyzerTranslator
     */
    protected function getSuluWebsite_Translator_RequestAnalyzerService()
    {
        return $this->services['sulu_website.translator.request_analyzer'] = new \Sulu\Bundle\WebsiteBundle\Translator\RequestAnalyzerTranslator(${($_ = isset($this->services['translator.data_collector']) ? $this->services['translator.data_collector'] : $this->getTranslator_DataCollectorService()) && false ?: '_'}, ${($_ = isset($this->services['sulu_core.webspace.request_analyzer']) ? $this->services['sulu_core.webspace.request_analyzer'] : $this->getSuluCore_Webspace_RequestAnalyzerService()) && false ?: '_'});
    }

    /**
     * Gets the private 'sulu_website.twig.content' shared service.
     *
     * @return \Sulu\Bundle\WebsiteBundle\Twig\Content\ContentTwigExtension
     */
    protected function getSuluWebsite_Twig_ContentService()
    {
        return $this->services['sulu_website.twig.content'] = new \Sulu\Bundle\WebsiteBundle\Twig\Content\ContentTwigExtension(${($_ = isset($this->services['sulu.content.mapper']) ? $this->services['sulu.content.mapper'] : $this->getSulu_Content_MapperService()) && false ?: '_'}, ${($_ = isset($this->services['sulu_website.resolver.structure']) ? $this->services['sulu_website.resolver.structure'] : $this->getSuluWebsite_Resolver_StructureService()) && false ?: '_'}, ${($_ = isset($this->services['sulu.phpcr.session']) ? $this->services['sulu.phpcr.session'] : $this->getSulu_Phpcr_SessionService()) && false ?: '_'}, ${($_ = isset($this->services['sulu_core.webspace.request_analyzer']) ? $this->services['sulu_core.webspace.request_analyzer'] : $this->getSuluCore_Webspace_RequestAnalyzerService()) && false ?: '_'}, ${($_ = isset($this->services['logger']) ? $this->services['logger'] : $this->getLoggerService()) && false ?: '_'});
    }

    /**
     * Gets the private 'sulu_website.twig.content.memoized' shared service.
     *
     * @return \Sulu\Bundle\WebsiteBundle\Twig\Content\MemoizedContentTwigExtension
     */
    protected function getSuluWebsite_Twig_Content_MemoizedService()
    {
        return $this->services['sulu_website.twig.content.memoized'] = new \Sulu\Bundle\WebsiteBundle\Twig\Content\MemoizedContentTwigExtension(${($_ = isset($this->services['sulu_website.twig.content']) ? $this->services['sulu_website.twig.content'] : $this->getSuluWebsite_Twig_ContentService()) && false ?: '_'}, ${($_ = isset($this->services['sulu_core.cache.memoize']) ? $this->services['sulu_core.cache.memoize'] : $this->getSuluCore_Cache_MemoizeService()) && false ?: '_'}, 1);
    }

    /**
     * Gets the private 'sulu_website.twig.content_path' shared service.
     *
     * @return \Sulu\Bundle\WebsiteBundle\Twig\Content\ContentPathTwigExtension
     */
    protected function getSuluWebsite_Twig_ContentPathService()
    {
        return $this->services['sulu_website.twig.content_path'] = new \Sulu\Bundle\WebsiteBundle\Twig\Content\ContentPathTwigExtension(${($_ = isset($this->services['sulu_core.webspace.webspace_manager']) ? $this->services['sulu_core.webspace.webspace_manager'] : $this->getSuluCore_Webspace_WebspaceManagerService()) && false ?: '_'}, 'dev', ${($_ = isset($this->services['sulu_core.webspace.request_analyzer']) ? $this->services['sulu_core.webspace.request_analyzer'] : $this->getSuluCore_Webspace_RequestAnalyzerService()) && false ?: '_'});
    }

    /**
     * Gets the private 'sulu_website.twig.meta' shared service.
     *
     * @return \Sulu\Bundle\WebsiteBundle\Twig\Meta\MetaTwigExtension
     */
    protected function getSuluWebsite_Twig_MetaService()
    {
        return $this->services['sulu_website.twig.meta'] = new \Sulu\Bundle\WebsiteBundle\Twig\Meta\MetaTwigExtension(${($_ = isset($this->services['sulu_core.webspace.request_analyzer']) ? $this->services['sulu_core.webspace.request_analyzer'] : $this->getSuluCore_Webspace_RequestAnalyzerService()) && false ?: '_'}, ${($_ = isset($this->services['sulu_website.twig.content_path']) ? $this->services['sulu_website.twig.content_path'] : $this->getSuluWebsite_Twig_ContentPathService()) && false ?: '_'});
    }

    /**
     * Gets the private 'sulu_website.twig.navigation' shared service.
     *
     * @return \Sulu\Bundle\WebsiteBundle\Twig\Navigation\NavigationTwigExtension
     */
    protected function getSuluWebsite_Twig_NavigationService()
    {
        return $this->services['sulu_website.twig.navigation'] = new \Sulu\Bundle\WebsiteBundle\Twig\Navigation\NavigationTwigExtension(${($_ = isset($this->services['sulu.content.mapper']) ? $this->services['sulu.content.mapper'] : $this->getSulu_Content_MapperService()) && false ?: '_'}, ${($_ = isset($this->services['sulu_website.navigation_mapper']) ? $this->services['sulu_website.navigation_mapper'] : $this->getSuluWebsite_NavigationMapperService()) && false ?: '_'}, ${($_ = isset($this->services['sulu_core.webspace.request_analyzer']) ? $this->services['sulu_core.webspace.request_analyzer'] : $this->getSuluCore_Webspace_RequestAnalyzerService()) && false ?: '_'});
    }

    /**
     * Gets the private 'sulu_website.twig.navigation.memoized' shared service.
     *
     * @return \Sulu\Bundle\WebsiteBundle\Twig\Navigation\MemoizedNavigationTwigExtension
     */
    protected function getSuluWebsite_Twig_Navigation_MemoizedService()
    {
        return $this->services['sulu_website.twig.navigation.memoized'] = new \Sulu\Bundle\WebsiteBundle\Twig\Navigation\MemoizedNavigationTwigExtension(${($_ = isset($this->services['sulu_website.twig.navigation']) ? $this->services['sulu_website.twig.navigation'] : $this->getSuluWebsite_Twig_NavigationService()) && false ?: '_'}, ${($_ = isset($this->services['sulu_core.cache.memoize']) ? $this->services['sulu_core.cache.memoize'] : $this->getSuluCore_Cache_MemoizeService()) && false ?: '_'}, 1);
    }

    /**
     * Gets the private 'sulu_website.twig.seo' shared service.
     *
     * @return \Sulu\Bundle\WebsiteBundle\Twig\Seo\SeoTwigExtension
     */
    protected function getSuluWebsite_Twig_SeoService()
    {
        return $this->services['sulu_website.twig.seo'] = new \Sulu\Bundle\WebsiteBundle\Twig\Seo\SeoTwigExtension(${($_ = isset($this->services['sulu_core.webspace.request_analyzer']) ? $this->services['sulu_core.webspace.request_analyzer'] : $this->getSuluCore_Webspace_RequestAnalyzerService()) && false ?: '_'}, ${($_ = isset($this->services['sulu_website.twig.content_path']) ? $this->services['sulu_website.twig.content_path'] : $this->getSuluWebsite_Twig_ContentPathService()) && false ?: '_'}, ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()) && false ?: '_'});
    }

    /**
     * Gets the private 'sulu_website.twig.sitemap' shared service.
     *
     * @return \Sulu\Bundle\WebsiteBundle\Twig\Sitemap\SitemapTwigExtension
     */
    protected function getSuluWebsite_Twig_SitemapService()
    {
        return $this->services['sulu_website.twig.sitemap'] = new \Sulu\Bundle\WebsiteBundle\Twig\Sitemap\SitemapTwigExtension(${($_ = isset($this->services['sulu_website.sitemap']) ? $this->services['sulu_website.sitemap'] : $this->getSuluWebsite_SitemapService()) && false ?: '_'}, ${($_ = isset($this->services['sulu_core.webspace.webspace_manager']) ? $this->services['sulu_core.webspace.webspace_manager'] : $this->getSuluCore_Webspace_WebspaceManagerService()) && false ?: '_'}, 'dev', ${($_ = isset($this->services['sulu_core.webspace.request_analyzer']) ? $this->services['sulu_core.webspace.request_analyzer'] : $this->getSuluCore_Webspace_RequestAnalyzerService()) && false ?: '_'});
    }

    /**
     * Gets the private 'sulu_website.twig.sitemap.memoized' shared service.
     *
     * @return \Sulu\Bundle\WebsiteBundle\Twig\Sitemap\MemoizedSitemapTwigExtension
     */
    protected function getSuluWebsite_Twig_Sitemap_MemoizedService()
    {
        return $this->services['sulu_website.twig.sitemap.memoized'] = new \Sulu\Bundle\WebsiteBundle\Twig\Sitemap\MemoizedSitemapTwigExtension(${($_ = isset($this->services['sulu_website.twig.sitemap']) ? $this->services['sulu_website.twig.sitemap'] : $this->getSuluWebsite_Twig_SitemapService()) && false ?: '_'}, ${($_ = isset($this->services['sulu_core.cache.memoize']) ? $this->services['sulu_core.cache.memoize'] : $this->getSuluCore_Cache_MemoizeService()) && false ?: '_'}, 1);
    }

    /**
     * Gets the private 'sulu_website.twig.util' shared service.
     *
     * @return \Sulu\Bundle\WebsiteBundle\Twig\Core\UtilTwigExtension
     */
    protected function getSuluWebsite_Twig_UtilService()
    {
        return $this->services['sulu_website.twig.util'] = new \Sulu\Bundle\WebsiteBundle\Twig\Core\UtilTwigExtension();
    }

    /**
     * Gets the private 'templating.locator' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator
     */
    protected function getTemplating_LocatorService()
    {
        return $this->services['templating.locator'] = new \Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator(${($_ = isset($this->services['file_locator']) ? $this->services['file_locator'] : $this->services['file_locator'] = new \Symfony\Component\HttpKernel\Config\FileLocator(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'}, ($this->targetDirs[4].'\\app/Resources'), array(0 => ($this->targetDirs[4].'\\app')))) && false ?: '_'}, $this->targetDirs[0]);
    }

    /**
     * Gets the private 'templating.name_parser' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser
     */
    protected function getTemplating_NameParserService()
    {
        return $this->services['templating.name_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'});
    }

    /**
     * Gets the private 'translator.data_collector' shared service.
     *
     * @return \Symfony\Component\Translation\DataCollectorTranslator
     */
    protected function getTranslator_DataCollectorService()
    {
        return $this->services['translator.data_collector'] = new \Symfony\Component\Translation\DataCollectorTranslator(new \Symfony\Component\Translation\LoggingTranslator(${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->getTranslator_DefaultService()) && false ?: '_'}, ${($_ = isset($this->services['monolog.logger.translation']) ? $this->services['monolog.logger.translation'] : $this->getMonolog_Logger_TranslationService()) && false ?: '_'}));
    }

    /**
     * Gets the private 'translator.default' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Translation\Translator
     */
    protected function getTranslator_DefaultService()
    {
        $this->services['translator.default'] = $instance = new \Symfony\Bundle\FrameworkBundle\Translation\Translator(new \Symfony\Component\DependencyInjection\ServiceLocator(array('translation.loader.csv' => function () {
            return ${($_ = isset($this->services['translation.loader.csv']) ? $this->services['translation.loader.csv'] : $this->services['translation.loader.csv'] = new \Symfony\Component\Translation\Loader\CsvFileLoader()) && false ?: '_'};
        }, 'translation.loader.dat' => function () {
            return ${($_ = isset($this->services['translation.loader.dat']) ? $this->services['translation.loader.dat'] : $this->services['translation.loader.dat'] = new \Symfony\Component\Translation\Loader\IcuDatFileLoader()) && false ?: '_'};
        }, 'translation.loader.ini' => function () {
            return ${($_ = isset($this->services['translation.loader.ini']) ? $this->services['translation.loader.ini'] : $this->services['translation.loader.ini'] = new \Symfony\Component\Translation\Loader\IniFileLoader()) && false ?: '_'};
        }, 'translation.loader.json' => function () {
            return ${($_ = isset($this->services['translation.loader.json']) ? $this->services['translation.loader.json'] : $this->services['translation.loader.json'] = new \Symfony\Component\Translation\Loader\JsonFileLoader()) && false ?: '_'};
        }, 'translation.loader.mo' => function () {
            return ${($_ = isset($this->services['translation.loader.mo']) ? $this->services['translation.loader.mo'] : $this->services['translation.loader.mo'] = new \Symfony\Component\Translation\Loader\MoFileLoader()) && false ?: '_'};
        }, 'translation.loader.php' => function () {
            return ${($_ = isset($this->services['translation.loader.php']) ? $this->services['translation.loader.php'] : $this->services['translation.loader.php'] = new \Symfony\Component\Translation\Loader\PhpFileLoader()) && false ?: '_'};
        }, 'translation.loader.po' => function () {
            return ${($_ = isset($this->services['translation.loader.po']) ? $this->services['translation.loader.po'] : $this->services['translation.loader.po'] = new \Symfony\Component\Translation\Loader\PoFileLoader()) && false ?: '_'};
        }, 'translation.loader.qt' => function () {
            return ${($_ = isset($this->services['translation.loader.qt']) ? $this->services['translation.loader.qt'] : $this->services['translation.loader.qt'] = new \Symfony\Component\Translation\Loader\QtFileLoader()) && false ?: '_'};
        }, 'translation.loader.res' => function () {
            return ${($_ = isset($this->services['translation.loader.res']) ? $this->services['translation.loader.res'] : $this->services['translation.loader.res'] = new \Symfony\Component\Translation\Loader\IcuResFileLoader()) && false ?: '_'};
        }, 'translation.loader.xliff' => function () {
            return ${($_ = isset($this->services['translation.loader.xliff']) ? $this->services['translation.loader.xliff'] : $this->services['translation.loader.xliff'] = new \Symfony\Component\Translation\Loader\XliffFileLoader()) && false ?: '_'};
        }, 'translation.loader.yml' => function () {
            return ${($_ = isset($this->services['translation.loader.yml']) ? $this->services['translation.loader.yml'] : $this->services['translation.loader.yml'] = new \Symfony\Component\Translation\Loader\YamlFileLoader()) && false ?: '_'};
        })), new \Symfony\Component\Translation\Formatter\MessageFormatter(new \Symfony\Component\Translation\MessageSelector()), 'en', array('translation.loader.php' => array(0 => 'php'), 'translation.loader.yml' => array(0 => 'yaml', 1 => 'yml'), 'translation.loader.xliff' => array(0 => 'xlf', 1 => 'xliff'), 'translation.loader.po' => array(0 => 'po'), 'translation.loader.mo' => array(0 => 'mo'), 'translation.loader.qt' => array(0 => 'ts'), 'translation.loader.csv' => array(0 => 'csv'), 'translation.loader.res' => array(0 => 'res'), 'translation.loader.dat' => array(0 => 'dat'), 'translation.loader.ini' => array(0 => 'ini'), 'translation.loader.json' => array(0 => 'json')), array('cache_dir' => ($this->targetDirs[0].'/translations'), 'debug' => true, 'resource_files' => array('af' => array(0 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.af.xlf')), 'ar' => array(0 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.ar.xlf'), 1 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.ar.xlf'), 2 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.ar.xlf')), 'az' => array(0 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.az.xlf'), 1 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.az.xlf'), 2 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.az.xlf')), 'bg' => array(0 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.bg.xlf'), 1 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.bg.xlf'), 2 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.bg.xlf')), 'ca' => array(0 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.ca.xlf'), 1 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.ca.xlf'), 2 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.ca.xlf')), 'cs' => array(0 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.cs.xlf'), 1 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.cs.xlf'), 2 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.cs.xlf')), 'cy' => array(0 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.cy.xlf')), 'da' => array(0 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.da.xlf'), 1 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.da.xlf'), 2 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.da.xlf')), 'de' => array(0 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.de.xlf'), 1 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.de.xlf'), 2 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.de.xlf'), 3 => ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\SearchBundle/Resources/translations\\sulu\\backend.de.xlf'), 4 => ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\ContactBundle/Resources/translations\\sulu\\backend.de.xlf'), 5 => ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\MediaBundle/Resources/translations\\sulu\\backend.de.xlf'), 6 => ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\SecurityBundle/Resources/translations\\sulu\\backend.de.xlf'), 7 => ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\CategoryBundle/Resources/translations\\sulu\\backend.de.xlf'), 8 => ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\SnippetBundle/Resources/translations\\sulu\\backend.de.xlf'), 9 => ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\ContentBundle/Resources/translations\\sulu\\backend.de.xlf'), 10 => ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\TagBundle/Resources/translations\\sulu\\backend.de.xlf'), 11 => ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\WebsiteBundle/Resources/translations\\sulu\\backend.de.xlf'), 12 => ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\LocationBundle/Resources/translations\\sulu\\backend.de.xlf'), 13 => ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\DocumentManagerBundle/Resources/translations\\sulu\\backend.de.xlf'), 14 => ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\CustomUrlBundle/Resources/translations\\sulu\\backend.de.xlf'), 15 => ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\AdminBundle/Resources/translations\\sulu\\backend.de.xlf'), 16 => ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\CollaborationBundle/Resources/translations\\sulu\\backend.de.xlf'), 17 => ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\PreviewBundle/Resources/translations\\sulu\\backend.de.xlf')), 'el' => array(0 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.el.xlf'), 1 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.el.xlf'), 2 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.el.xlf')), 'en' => array(0 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.en.xlf'), 1 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.en.xlf'), 2 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.en.xlf'), 3 => ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\SearchBundle/Resources/translations\\sulu\\backend.en.xlf'), 4 => ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\ContactBundle/Resources/translations\\sulu\\backend.en.xlf'), 5 => ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\MediaBundle/Resources/translations\\sulu\\backend.en.xlf'), 6 => ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\SecurityBundle/Resources/translations\\sulu\\backend.en.xlf'), 7 => ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\CategoryBundle/Resources/translations\\sulu\\backend.en.xlf'), 8 => ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\SnippetBundle/Resources/translations\\sulu\\backend.en.xlf'), 9 => ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\ContentBundle/Resources/translations\\sulu\\backend.en.xlf'), 10 => ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\TagBundle/Resources/translations\\sulu\\backend.en.xlf'), 11 => ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\WebsiteBundle/Resources/translations\\sulu\\backend.en.xlf'), 12 => ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\LocationBundle/Resources/translations\\sulu\\backend.en.xlf'), 13 => ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\DocumentManagerBundle/Resources/translations\\sulu\\backend.en.xlf'), 14 => ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\CustomUrlBundle/Resources/translations\\sulu\\backend.en.xlf'), 15 => ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\AdminBundle/Resources/translations\\sulu\\backend.en.xlf'), 16 => ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\CollaborationBundle/Resources/translations\\sulu\\backend.en.xlf'), 17 => ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\PreviewBundle/Resources/translations\\sulu\\backend.en.xlf')), 'es' => array(0 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.es.xlf'), 1 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.es.xlf'), 2 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.es.xlf')), 'et' => array(0 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.et.xlf'), 1 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.et.xlf')), 'eu' => array(0 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.eu.xlf'), 1 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.eu.xlf')), 'fa' => array(0 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.fa.xlf'), 1 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.fa.xlf'), 2 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.fa.xlf')), 'fi' => array(0 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.fi.xlf'), 1 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.fi.xlf')), 'fr' => array(0 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.fr.xlf'), 1 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.fr.xlf'), 2 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.fr.xlf'), 3 => ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\SearchBundle/Resources/translations\\sulu\\backend.fr.xlf'), 4 => ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\ContactBundle/Resources/translations\\sulu\\backend.fr.xlf'), 5 => ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\MediaBundle/Resources/translations\\sulu\\backend.fr.xlf'), 6 => ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\SecurityBundle/Resources/translations\\sulu\\backend.fr.xlf'), 7 => ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\CategoryBundle/Resources/translations\\sulu\\backend.fr.xlf'), 8 => ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\SnippetBundle/Resources/translations\\sulu\\backend.fr.xlf'), 9 => ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\ContentBundle/Resources/translations\\sulu\\backend.fr.xlf'), 10 => ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\TagBundle/Resources/translations\\sulu\\backend.fr.xlf'), 11 => ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\WebsiteBundle/Resources/translations\\sulu\\backend.fr.xlf'), 12 => ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\LocationBundle/Resources/translations\\sulu\\backend.fr.xlf'), 13 => ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\DocumentManagerBundle/Resources/translations\\sulu\\backend.fr.xlf'), 14 => ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\CustomUrlBundle/Resources/translations\\sulu\\backend.fr.xlf'), 15 => ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\AdminBundle/Resources/translations\\sulu\\backend.fr.xlf'), 16 => ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\CollaborationBundle/Resources/translations\\sulu\\backend.fr.xlf'), 17 => ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\PreviewBundle/Resources/translations\\sulu\\backend.fr.xlf')), 'gl' => array(0 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.gl.xlf'), 1 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.gl.xlf'), 2 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.gl.xlf')), 'he' => array(0 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.he.xlf'), 1 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.he.xlf'), 2 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.he.xlf')), 'hr' => array(0 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.hr.xlf'), 1 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.hr.xlf'), 2 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.hr.xlf')), 'hu' => array(0 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.hu.xlf'), 1 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.hu.xlf'), 2 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.hu.xlf')), 'hy' => array(0 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.hy.xlf'), 1 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.hy.xlf')), 'id' => array(0 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.id.xlf'), 1 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.id.xlf'), 2 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.id.xlf')), 'it' => array(0 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.it.xlf'), 1 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.it.xlf'), 2 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.it.xlf')), 'ja' => array(0 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.ja.xlf'), 1 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.ja.xlf'), 2 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.ja.xlf')), 'lb' => array(0 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.lb.xlf'), 1 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.lb.xlf'), 2 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.lb.xlf')), 'lt' => array(0 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.lt.xlf'), 1 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.lt.xlf'), 2 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.lt.xlf')), 'lv' => array(0 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.lv.xlf'), 1 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.lv.xlf'), 2 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.lv.xlf')), 'mn' => array(0 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.mn.xlf'), 1 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.mn.xlf')), 'nb' => array(0 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.nb.xlf'), 1 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.nb.xlf'), 2 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.nb.xlf')), 'nl' => array(0 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.nl.xlf'), 1 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.nl.xlf'), 2 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.nl.xlf'), 3 => ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\SearchBundle/Resources/translations\\sulu\\backend.nl.xlf'), 4 => ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\ContactBundle/Resources/translations\\sulu\\backend.nl.xlf'), 5 => ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\MediaBundle/Resources/translations\\sulu\\backend.nl.xlf'), 6 => ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\SecurityBundle/Resources/translations\\sulu\\backend.nl.xlf'), 7 => ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\CategoryBundle/Resources/translations\\sulu\\backend.nl.xlf'), 8 => ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\SnippetBundle/Resources/translations\\sulu\\backend.nl.xlf'), 9 => ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\ContentBundle/Resources/translations\\sulu\\backend.nl.xlf'), 10 => ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\TagBundle/Resources/translations\\sulu\\backend.nl.xlf'), 11 => ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\WebsiteBundle/Resources/translations\\sulu\\backend.nl.xlf'), 12 => ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\LocationBundle/Resources/translations\\sulu\\backend.nl.xlf'), 13 => ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\DocumentManagerBundle/Resources/translations\\sulu\\backend.nl.xlf'), 14 => ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\CustomUrlBundle/Resources/translations\\sulu\\backend.nl.xlf'), 15 => ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\AdminBundle/Resources/translations\\sulu\\backend.nl.xlf'), 16 => ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\CollaborationBundle/Resources/translations\\sulu\\backend.nl.xlf'), 17 => ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\PreviewBundle/Resources/translations\\sulu\\backend.nl.xlf')), 'nn' => array(0 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.nn.xlf'), 1 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.nn.xlf'), 2 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.nn.xlf')), 'no' => array(0 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.no.xlf'), 1 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.no.xlf'), 2 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.no.xlf')), 'pl' => array(0 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.pl.xlf'), 1 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.pl.xlf'), 2 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.pl.xlf')), 'pt' => array(0 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.pt.xlf'), 1 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.pt.xlf')), 'pt_BR' => array(0 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.pt_BR.xlf'), 1 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.pt_BR.xlf'), 2 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.pt_BR.xlf')), 'ro' => array(0 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.ro.xlf'), 1 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.ro.xlf'), 2 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.ro.xlf')), 'ru' => array(0 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.ru.xlf'), 1 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.ru.xlf'), 2 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.ru.xlf')), 'sk' => array(0 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.sk.xlf'), 1 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.sk.xlf'), 2 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.sk.xlf')), 'sl' => array(0 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.sl.xlf'), 1 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.sl.xlf'), 2 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.sl.xlf')), 'sq' => array(0 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.sq.xlf')), 'sr_Cyrl' => array(0 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.sr_Cyrl.xlf'), 1 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.sr_Cyrl.xlf'), 2 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.sr_Cyrl.xlf')), 'sr_Latn' => array(0 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.sr_Latn.xlf'), 1 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.sr_Latn.xlf'), 2 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.sr_Latn.xlf')), 'sv' => array(0 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.sv.xlf'), 1 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.sv.xlf'), 2 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.sv.xlf')), 'th' => array(0 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.th.xlf'), 1 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.th.xlf')), 'tl' => array(0 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.tl.xlf'), 1 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.tl.xlf'), 2 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.tl.xlf')), 'tr' => array(0 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.tr.xlf'), 1 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.tr.xlf')), 'uk' => array(0 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.uk.xlf'), 1 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.uk.xlf')), 'vi' => array(0 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.vi.xlf'), 1 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.vi.xlf')), 'zh_CN' => array(0 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.zh_CN.xlf'), 1 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.zh_CN.xlf'), 2 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.zh_CN.xlf')), 'zh_TW' => array(0 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.zh_TW.xlf')), 'pt_PT' => array(0 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.pt_PT.xlf')), 'ua' => array(0 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.ua.xlf')))));

        $instance->setConfigCacheFactory(${($_ = isset($this->services['config_cache_factory']) ? $this->services['config_cache_factory'] : $this->getConfigCacheFactoryService()) && false ?: '_'});
        $instance->setFallbackLocales(array(0 => 'en'));

        return $instance;
    }

    /**
     * Gets the private 'translator_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\TranslatorListener
     */
    protected function getTranslatorListenerService()
    {
        return $this->services['translator_listener'] = new \Symfony\Component\HttpKernel\EventListener\TranslatorListener(${($_ = isset($this->services['sulu_website.translator.request_analyzer']) ? $this->services['sulu_website.translator.request_analyzer'] : $this->getSuluWebsite_Translator_RequestAnalyzerService()) && false ?: '_'}, ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()) && false ?: '_'});
    }

    /**
     * Gets the private 'twig.loader' shared service.
     *
     * @return \Symfony\Bundle\TwigBundle\Loader\FilesystemLoader
     */
    protected function getTwig_LoaderService()
    {
        $this->services['twig.loader'] = $instance = new \Symfony\Bundle\TwigBundle\Loader\FilesystemLoader(${($_ = isset($this->services['templating.locator']) ? $this->services['templating.locator'] : $this->getTemplating_LocatorService()) && false ?: '_'}, ${($_ = isset($this->services['templating.name_parser']) ? $this->services['templating.name_parser'] : $this->services['templating.name_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'})) && false ?: '_'}, $this->targetDirs[4]);

        $instance->addPath(($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle/Resources/views'), 'Framework');
        $instance->addPath(($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle/Resources/views'), '!Framework');
        $instance->addPath(($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views'), 'Twig');
        $instance->addPath(($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views'), '!Twig');
        $instance->addPath(($this->targetDirs[4].'\\vendor\\symfony\\swiftmailer-bundle/Resources/views'), 'Swiftmailer');
        $instance->addPath(($this->targetDirs[4].'\\vendor\\symfony\\swiftmailer-bundle/Resources/views'), '!Swiftmailer');
        $instance->addPath(($this->targetDirs[4].'\\vendor\\doctrine\\doctrine-bundle/Resources/views'), 'Doctrine');
        $instance->addPath(($this->targetDirs[4].'\\vendor\\doctrine\\doctrine-bundle/Resources/views'), '!Doctrine');
        $instance->addPath(($this->targetDirs[4].'\\vendor\\doctrine\\phpcr-bundle/Resources/views'), 'DoctrinePHPCR');
        $instance->addPath(($this->targetDirs[4].'\\vendor\\doctrine\\phpcr-bundle/Resources/views'), '!DoctrinePHPCR');
        $instance->addPath(($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\ContactBundle/Resources/views'), 'SuluContact');
        $instance->addPath(($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\ContactBundle/Resources/views'), '!SuluContact');
        $instance->addPath(($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\MediaBundle/Resources/views'), 'SuluMedia');
        $instance->addPath(($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\MediaBundle/Resources/views'), '!SuluMedia');
        $instance->addPath(($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\SecurityBundle/Resources/views'), 'SuluSecurity');
        $instance->addPath(($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\SecurityBundle/Resources/views'), '!SuluSecurity');
        $instance->addPath(($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\CategoryBundle/Resources/views'), 'SuluCategory');
        $instance->addPath(($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\CategoryBundle/Resources/views'), '!SuluCategory');
        $instance->addPath(($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\SnippetBundle/Resources/views'), 'SuluSnippet');
        $instance->addPath(($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\SnippetBundle/Resources/views'), '!SuluSnippet');
        $instance->addPath(($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\ContentBundle/Resources/views'), 'SuluContent');
        $instance->addPath(($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\ContentBundle/Resources/views'), '!SuluContent');
        $instance->addPath(($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\TagBundle/Resources/views'), 'SuluTag');
        $instance->addPath(($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\TagBundle/Resources/views'), '!SuluTag');
        $instance->addPath(($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\WebsiteBundle/Resources/views'), 'SuluWebsite');
        $instance->addPath(($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\WebsiteBundle/Resources/views'), '!SuluWebsite');
        $instance->addPath(($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\LocationBundle/Resources/views'), 'SuluLocation');
        $instance->addPath(($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\LocationBundle/Resources/views'), '!SuluLocation');
        $instance->addPath(($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\RouteBundle/Resources/views'), 'SuluRoute');
        $instance->addPath(($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\RouteBundle/Resources/views'), '!SuluRoute');
        $instance->addPath(($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views'), 'WebProfiler');
        $instance->addPath(($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views'), '!WebProfiler');
        $instance->addPath(($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\TestBundle/Resources/views'), 'SuluTest');
        $instance->addPath(($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\TestBundle/Resources/views'), '!SuluTest');
        $instance->addPath(($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\DebugBundle/Resources/views'), 'Debug');
        $instance->addPath(($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\DebugBundle/Resources/views'), '!Debug');
        $instance->addPath(($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\SecurityBundle/Resources/views'), 'Security');
        $instance->addPath(($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\SecurityBundle/Resources/views'), '!Security');
        $instance->addPath(($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\AdminBundle/Resources/views'), 'SuluAdmin');
        $instance->addPath(($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\AdminBundle/Resources/views'), '!SuluAdmin');
        $instance->addPath(($this->targetDirs[4].'\\app/Resources/views'));
        $instance->addPath(($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig/Resources/views/Form'));

        return $instance;
    }

    /**
     * Gets the private 'twig.profile' shared service.
     *
     * @return \Twig\Profiler\Profile
     */
    protected function getTwig_ProfileService()
    {
        return $this->services['twig.profile'] = new \Twig\Profiler\Profile();
    }

    /**
     * Gets the private 'uri_signer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\UriSigner
     */
    protected function getUriSignerService()
    {
        return $this->services['uri_signer'] = new \Symfony\Component\HttpKernel\UriSigner('ThisTokenIsNotSoSecretChangeIt');
    }

    /**
     * Gets the private 'validate_request_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener
     */
    protected function getValidateRequestListenerService()
    {
        return $this->services['validate_request_listener'] = new \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener();
    }

    /**
     * Gets the private 'validator.builder' shared service.
     *
     * @return \Symfony\Component\Validator\ValidatorBuilderInterface
     */
    protected function getValidator_BuilderService()
    {
        $this->services['validator.builder'] = $instance = \Symfony\Component\Validator\Validation::createValidatorBuilder();

        $instance->setConstraintValidatorFactory(new \Symfony\Component\Validator\ContainerConstraintValidatorFactory(new \Symfony\Component\DependencyInjection\ServiceLocator(array('Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator' => function () {
            return ${($_ = isset($this->services['doctrine.orm.validator.unique']) ? $this->services['doctrine.orm.validator.unique'] : $this->load('getDoctrine_Orm_Validator_UniqueService.php')) && false ?: '_'};
        }, 'Symfony\\Component\\Security\\Core\\Validator\\Constraints\\UserPasswordValidator' => function () {
            return ${($_ = isset($this->services['security.validator.user_password']) ? $this->services['security.validator.user_password'] : $this->load('getSecurity_Validator_UserPasswordService.php')) && false ?: '_'};
        }, 'Symfony\\Component\\Validator\\Constraints\\EmailValidator' => function () {
            return ${($_ = isset($this->services['validator.email']) ? $this->services['validator.email'] : $this->services['validator.email'] = new \Symfony\Component\Validator\Constraints\EmailValidator(false)) && false ?: '_'};
        }, 'Symfony\\Component\\Validator\\Constraints\\ExpressionValidator' => function () {
            return ${($_ = isset($this->services['validator.expression']) ? $this->services['validator.expression'] : $this->services['validator.expression'] = new \Symfony\Component\Validator\Constraints\ExpressionValidator()) && false ?: '_'};
        }, 'doctrine.orm.validator.unique' => function () {
            return ${($_ = isset($this->services['doctrine.orm.validator.unique']) ? $this->services['doctrine.orm.validator.unique'] : $this->load('getDoctrine_Orm_Validator_UniqueService.php')) && false ?: '_'};
        }, 'security.validator.user_password' => function () {
            return ${($_ = isset($this->services['security.validator.user_password']) ? $this->services['security.validator.user_password'] : $this->load('getSecurity_Validator_UserPasswordService.php')) && false ?: '_'};
        }, 'validator.expression' => function () {
            return ${($_ = isset($this->services['validator.expression']) ? $this->services['validator.expression'] : $this->services['validator.expression'] = new \Symfony\Component\Validator\Constraints\ExpressionValidator()) && false ?: '_'};
        }))));
        $instance->setTranslator(${($_ = isset($this->services['sulu_website.translator.request_analyzer']) ? $this->services['sulu_website.translator.request_analyzer'] : $this->getSuluWebsite_Translator_RequestAnalyzerService()) && false ?: '_'});
        $instance->setTranslationDomain('validators');
        $instance->addXmlMappings(array(0 => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/config/validation.xml')));
        $instance->enableAnnotationMapping(${($_ = isset($this->services['annotation_reader']) ? $this->services['annotation_reader'] : $this->getAnnotationReaderService()) && false ?: '_'});
        $instance->addMethodMapping('loadValidatorMetadata');
        $instance->addObjectInitializers(array(0 => ${($_ = isset($this->services['doctrine.orm.validator_initializer']) ? $this->services['doctrine.orm.validator_initializer'] : $this->getDoctrine_Orm_ValidatorInitializerService()) && false ?: '_'}));

        return $instance;
    }

    /**
     * Gets the private 'web_profiler.csp.handler' shared service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\Csp\ContentSecurityPolicyHandler
     */
    protected function getWebProfiler_Csp_HandlerService()
    {
        return $this->services['web_profiler.csp.handler'] = new \Symfony\Bundle\WebProfilerBundle\Csp\ContentSecurityPolicyHandler(new \Symfony\Bundle\WebProfilerBundle\Csp\NonceGenerator());
    }

    /**
     * Gets the private 'web_profiler.debug_toolbar' shared service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener
     */
    protected function getWebProfiler_DebugToolbarService()
    {
        return $this->services['web_profiler.debug_toolbar'] = new \Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener(${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->getTwigService()) && false ?: '_'}, false, 2, 'bottom', ${($_ = isset($this->services['router']) ? $this->services['router'] : $this->getRouterService()) && false ?: '_'}, '^/((index|app(_[\\w]+)?)\\.php/)?_wdt', ${($_ = isset($this->services['web_profiler.csp.handler']) ? $this->services['web_profiler.csp.handler'] : $this->getWebProfiler_Csp_HandlerService()) && false ?: '_'});
    }

    public function getParameter($name)
    {
        $name = (string) $name;
        if (isset($this->buildParameters[$name])) {
            return $this->buildParameters[$name];
        }
        if (!(isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters))) {
            $name = $this->normalizeParameterName($name);

            if (!(isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters))) {
                throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
            }
        }
        if (isset($this->loadedDynamicParameters[$name])) {
            return $this->loadedDynamicParameters[$name] ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
        }

        return $this->parameters[$name];
    }

    public function hasParameter($name)
    {
        $name = (string) $name;
        if (isset($this->buildParameters[$name])) {
            return true;
        }
        $name = $this->normalizeParameterName($name);

        return isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters);
    }

    public function setParameter($name, $value)
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    public function getParameterBag()
    {
        if (null === $this->parameterBag) {
            $parameters = $this->parameters;
            foreach ($this->loadedDynamicParameters as $name => $loaded) {
                $parameters[$name] = $loaded ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
            }
            foreach ($this->buildParameters as $name => $value) {
                $parameters[$name] = $value;
            }
            $this->parameterBag = new FrozenParameterBag($parameters);
        }

        return $this->parameterBag;
    }

    private $loadedDynamicParameters = array(
        'kernel.root_dir' => false,
        'kernel.project_dir' => false,
        'kernel.cache_dir' => false,
        'kernel.logs_dir' => false,
        'kernel.bundles_metadata' => false,
        'kernel.var_dir' => false,
        'session.save_path' => false,
        'validator.mapping.cache.file' => false,
        'translator.default_path' => false,
        'profiler.storage.dsn' => false,
        'debug.container.dump' => false,
        'router.resource' => false,
        'twig.default_path' => false,
        'swiftmailer.spool.default.memory.path' => false,
        'sulu.cache_dir' => false,
        'sulu_core.proxy_cache_dir' => false,
        'sulu.content.structure.paths' => false,
        'sulu_core.webspace.config_dir' => false,
        'sulu_core.list_builder.metadata.provider.general.cache_dir' => false,
        'sulu_core.list_builder.metadata.provider.doctrine.cache_dir' => false,
        'doctrine.orm.proxy_dir' => false,
        'fos_rest.cache_dir' => false,
        'massive_search.adapter.zend_lucene.basepath' => false,
        'massive_search.metadata.cache_dir' => false,
        'sulu_media.image_format_files' => false,
        'sulu_media.format_cache.path' => false,
        'sulu_media.media.storage.local.path' => false,
        'sulu_security.security_types.fixture' => false,
        'sulu_website.sitemap.dump_dir' => false,
        'phpcr_migrations.paths' => false,
    );
    private $dynamicParameters = array();

    /**
     * Computes a dynamic parameter.
     *
     * @param string The name of the dynamic parameter to load
     *
     * @return mixed The value of the dynamic parameter
     *
     * @throws InvalidArgumentException When the dynamic parameter does not exist
     */
    private function getDynamicParameter($name)
    {
        switch ($name) {
            case 'kernel.root_dir': $value = ($this->targetDirs[4].'\\app'); break;
            case 'kernel.project_dir': $value = $this->targetDirs[4]; break;
            case 'kernel.cache_dir': $value = $this->targetDirs[0]; break;
            case 'kernel.logs_dir': $value = ($this->targetDirs[3].'\\logs\\admin'); break;
            case 'kernel.bundles_metadata': $value = array(
                'FrameworkBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle'),
                    'namespace' => 'Symfony\\Bundle\\FrameworkBundle',
                ),
                'TwigBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle'),
                    'namespace' => 'Symfony\\Bundle\\TwigBundle',
                ),
                'MonologBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[4].'\\vendor\\symfony\\monolog-bundle'),
                    'namespace' => 'Symfony\\Bundle\\MonologBundle',
                ),
                'SwiftmailerBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[4].'\\vendor\\symfony\\swiftmailer-bundle'),
                    'namespace' => 'Symfony\\Bundle\\SwiftmailerBundle',
                ),
                'SensioFrameworkExtraBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[4].'\\vendor\\sensio\\framework-extra-bundle'),
                    'namespace' => 'Sensio\\Bundle\\FrameworkExtraBundle',
                ),
                'SuluCoreBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\CoreBundle'),
                    'namespace' => 'Sulu\\Bundle\\CoreBundle',
                ),
                'DoctrineBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[4].'\\vendor\\doctrine\\doctrine-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\DoctrineBundle',
                ),
                'DoctrineCacheBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[4].'\\vendor\\doctrine\\doctrine-cache-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\DoctrineCacheBundle',
                ),
                'DoctrineFixturesBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[4].'\\vendor\\doctrine\\doctrine-fixtures-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\FixturesBundle',
                ),
                'DoctrinePHPCRBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[4].'\\vendor\\doctrine\\phpcr-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\PHPCRBundle',
                ),
                'StofDoctrineExtensionsBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[4].'\\vendor\\stof\\doctrine-extensions-bundle'),
                    'namespace' => 'Stof\\DoctrineExtensionsBundle',
                ),
                'FOSRestBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[4].'\\vendor\\friendsofsymfony\\rest-bundle\\FOS\\RestBundle'),
                    'namespace' => 'FOS\\RestBundle',
                ),
                'JMSSerializerBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[4].'\\vendor\\jms\\serializer-bundle\\JMS\\SerializerBundle'),
                    'namespace' => 'JMS\\SerializerBundle',
                ),
                'BazingaHateoasBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[4].'\\vendor\\willdurand\\hateoas-bundle'),
                    'namespace' => 'Bazinga\\Bundle\\HateoasBundle',
                ),
                'MassiveSearchBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[4].'\\vendor\\massive\\search-bundle'),
                    'namespace' => 'Massive\\Bundle\\SearchBundle',
                ),
                'SuluSearchBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\SearchBundle'),
                    'namespace' => 'Sulu\\Bundle\\SearchBundle',
                ),
                'SuluPersistenceBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\PersistenceBundle'),
                    'namespace' => 'Sulu\\Bundle\\PersistenceBundle',
                ),
                'SuluContactBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\ContactBundle'),
                    'namespace' => 'Sulu\\Bundle\\ContactBundle',
                ),
                'SuluMediaBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\MediaBundle'),
                    'namespace' => 'Sulu\\Bundle\\MediaBundle',
                ),
                'SuluSecurityBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\SecurityBundle'),
                    'namespace' => 'Sulu\\Bundle\\SecurityBundle',
                ),
                'SuluCategoryBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\CategoryBundle'),
                    'namespace' => 'Sulu\\Bundle\\CategoryBundle',
                ),
                'SuluSnippetBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\SnippetBundle'),
                    'namespace' => 'Sulu\\Bundle\\SnippetBundle',
                ),
                'SuluContentBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\ContentBundle'),
                    'namespace' => 'Sulu\\Bundle\\ContentBundle',
                ),
                'SuluTagBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\TagBundle'),
                    'namespace' => 'Sulu\\Bundle\\TagBundle',
                ),
                'SuluWebsiteBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\WebsiteBundle'),
                    'namespace' => 'Sulu\\Bundle\\WebsiteBundle',
                ),
                'SuluLocationBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\LocationBundle'),
                    'namespace' => 'Sulu\\Bundle\\LocationBundle',
                ),
                'SuluHttpCacheBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\HttpCacheBundle'),
                    'namespace' => 'Sulu\\Bundle\\HttpCacheBundle',
                ),
                'SuluWebsocketBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\WebsocketBundle'),
                    'namespace' => 'Sulu\\Bundle\\WebsocketBundle',
                ),
                'SuluTranslateBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\TranslateBundle'),
                    'namespace' => 'Sulu\\Bundle\\TranslateBundle',
                ),
                'SuluDocumentManagerBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\DocumentManagerBundle'),
                    'namespace' => 'Sulu\\Bundle\\DocumentManagerBundle',
                ),
                'SuluHashBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\HashBundle'),
                    'namespace' => 'Sulu\\Bundle\\HashBundle',
                ),
                'SuluCustomUrlBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\CustomUrlBundle'),
                    'namespace' => 'Sulu\\Bundle\\CustomUrlBundle',
                ),
                'SuluRouteBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\RouteBundle'),
                    'namespace' => 'Sulu\\Bundle\\RouteBundle',
                ),
                'SuluMarkupBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\MarkupBundle'),
                    'namespace' => 'Sulu\\Bundle\\MarkupBundle',
                ),
                'PhpcrMigrationsBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[4].'\\vendor\\dantleech\\phpcr-migrations-bundle'),
                    'namespace' => 'DTL\\Bundle\\PhpcrMigrations',
                ),
                'DubtureFFmpegBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[4].'\\vendor\\pulse00\\ffmpeg-bundle'),
                    'namespace' => 'Dubture\\FFmpegBundle',
                ),
                'MassiveBuildBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[4].'\\vendor\\massive\\build-bundle'),
                    'namespace' => 'Massive\\Bundle\\BuildBundle',
                ),
                'WebProfilerBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle'),
                    'namespace' => 'Symfony\\Bundle\\WebProfilerBundle',
                ),
                'SensioDistributionBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[4].'\\vendor\\sensio\\distribution-bundle'),
                    'namespace' => 'Sensio\\Bundle\\DistributionBundle',
                ),
                'SensioGeneratorBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[4].'\\vendor\\sensio\\generator-bundle'),
                    'namespace' => 'Sensio\\Bundle\\GeneratorBundle',
                ),
                'WebServerBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebServerBundle'),
                    'namespace' => 'Symfony\\Bundle\\WebServerBundle',
                ),
                'SuluTestBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\TestBundle'),
                    'namespace' => 'Sulu\\Bundle\\TestBundle',
                ),
                'DebugBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\DebugBundle'),
                    'namespace' => 'Symfony\\Bundle\\DebugBundle',
                ),
                'SecurityBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\SecurityBundle'),
                    'namespace' => 'Symfony\\Bundle\\SecurityBundle',
                ),
                'SuluAdminBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\AdminBundle'),
                    'namespace' => 'Sulu\\Bundle\\AdminBundle',
                ),
                'SuluCollaborationBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\CollaborationBundle'),
                    'namespace' => 'Sulu\\Bundle\\CollaborationBundle',
                ),
                'SuluPreviewBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\PreviewBundle'),
                    'namespace' => 'Sulu\\Bundle\\PreviewBundle',
                ),
            ); break;
            case 'kernel.var_dir': $value = $this->targetDirs[3]; break;
            case 'session.save_path': $value = ($this->targetDirs[3].'/sessions/admin/dev'); break;
            case 'validator.mapping.cache.file': $value = ($this->targetDirs[0].'/validation.php'); break;
            case 'translator.default_path': $value = ($this->targetDirs[4].'/translations'); break;
            case 'profiler.storage.dsn': $value = ('file:'.$this->targetDirs[0].'/profiler'); break;
            case 'debug.container.dump': $value = ($this->targetDirs[0].'/adminDevDebugProjectContainer.xml'); break;
            case 'router.resource': $value = ($this->targetDirs[4].'\\app/config/admin/routing_dev.yml'); break;
            case 'twig.default_path': $value = ($this->targetDirs[4].'/templates'); break;
            case 'swiftmailer.spool.default.memory.path': $value = ($this->targetDirs[0].'/swiftmailer/spool/default'); break;
            case 'sulu.cache_dir': $value = ($this->targetDirs[0].'/sulu'); break;
            case 'sulu_core.proxy_cache_dir': $value = ($this->targetDirs[0].'/sulu/proxies'); break;
            case 'sulu.content.structure.paths': $value = array(
                'page' => array(
                    0 => array(
                        'path' => ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\ContentBundle\\DependencyInjection/../Content/templates'),
                        'type' => 'page',
                    ),
                    1 => array(
                        'path' => ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\SnippetBundle\\DependencyInjection/../Content/templates'),
                        'type' => 'page',
                    ),
                    2 => array(
                        'path' => ($this->targetDirs[4].'\\app/../vendor/sulu/sulu/src/Sulu/Bundle/CoreBundle/Content/templates'),
                        'type' => 'page',
                    ),
                    3 => array(
                        'path' => ($this->targetDirs[4].'\\app/Resources/templates/pages'),
                        'type' => 'page',
                    ),
                ),
                'home' => array(
                    0 => array(
                        'path' => ($this->targetDirs[4].'\\app/Resources/templates/pages'),
                        'type' => 'home',
                    ),
                ),
                'snippet' => array(
                    0 => array(
                        'path' => ($this->targetDirs[4].'\\app/Resources/templates/snippets'),
                        'type' => 'snippet',
                    ),
                ),
            ); break;
            case 'sulu_core.webspace.config_dir': $value = ($this->targetDirs[4].'\\app/Resources/webspaces'); break;
            case 'sulu_core.list_builder.metadata.provider.general.cache_dir': $value = ($this->targetDirs[0].'/sulu/list-builder/general'); break;
            case 'sulu_core.list_builder.metadata.provider.doctrine.cache_dir': $value = ($this->targetDirs[0].'/sulu/list-builder/doctrine'); break;
            case 'doctrine.orm.proxy_dir': $value = ($this->targetDirs[0].'/doctrine/orm/Proxies'); break;
            case 'fos_rest.cache_dir': $value = ($this->targetDirs[0].'/fos_rest'); break;
            case 'massive_search.adapter.zend_lucene.basepath': $value = ($this->targetDirs[3].'/indexes'); break;
            case 'massive_search.metadata.cache_dir': $value = ($this->targetDirs[0].'/massive-search'); break;
            case 'sulu_media.image_format_files': $value = array(
                0 => ($this->targetDirs[4].'\\app/config/image-formats.xml'),
                1 => ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\MediaBundle\\DependencyInjection/../Resources/config/image-formats.xml'),
            ); break;
            case 'sulu_media.format_cache.path': $value = ($this->targetDirs[4].'\\app/../web/uploads/media'); break;
            case 'sulu_media.media.storage.local.path': $value = ($this->targetDirs[3].'/uploads/media'); break;
            case 'sulu_security.security_types.fixture': $value = ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\SecurityBundle\\DependencyInjection/../DataFixtures/security-types.xml'); break;
            case 'sulu_website.sitemap.dump_dir': $value = ($this->targetDirs[3].'/sitemaps'); break;
            case 'phpcr_migrations.paths': $value = array(
                0 => ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\ContentBundle/Resources/phpcr-migrations'),
            ); break;
            default: throw new InvalidArgumentException(sprintf('The dynamic parameter "%s" must be defined.', $name));
        }
        $this->loadedDynamicParameters[$name] = true;

        return $this->dynamicParameters[$name] = $value;
    }

    private $normalizedParameterNames = array(
        'sulu_website.twig.meta.class' => 'sulu_website.twig.Meta.class',
    );

    private function normalizeParameterName($name)
    {
        if (isset($this->normalizedParameterNames[$normalizedName = strtolower($name)]) || isset($this->parameters[$normalizedName]) || array_key_exists($normalizedName, $this->parameters)) {
            $normalizedName = isset($this->normalizedParameterNames[$normalizedName]) ? $this->normalizedParameterNames[$normalizedName] : $normalizedName;
            if ((string) $name !== $normalizedName) {
                @trigger_error(sprintf('Parameter names will be made case sensitive in Symfony 4.0. Using "%s" instead of "%s" is deprecated since Symfony 3.4.', $name, $normalizedName), E_USER_DEPRECATED);
            }
        } else {
            $normalizedName = $this->normalizedParameterNames[$normalizedName] = (string) $name;
        }

        return $normalizedName;
    }

    /**
     * Gets the default parameters.
     *
     * @return array An array of the default parameters
     */
    protected function getDefaultParameters()
    {
        return array(
            'kernel.environment' => 'dev',
            'kernel.debug' => true,
            'kernel.name' => 'admin',
            'kernel.bundles' => array(
                'FrameworkBundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle',
                'TwigBundle' => 'Symfony\\Bundle\\TwigBundle\\TwigBundle',
                'MonologBundle' => 'Symfony\\Bundle\\MonologBundle\\MonologBundle',
                'SwiftmailerBundle' => 'Symfony\\Bundle\\SwiftmailerBundle\\SwiftmailerBundle',
                'SensioFrameworkExtraBundle' => 'Sensio\\Bundle\\FrameworkExtraBundle\\SensioFrameworkExtraBundle',
                'SuluCoreBundle' => 'Sulu\\Bundle\\CoreBundle\\SuluCoreBundle',
                'DoctrineBundle' => 'Doctrine\\Bundle\\DoctrineBundle\\DoctrineBundle',
                'DoctrineCacheBundle' => 'Doctrine\\Bundle\\DoctrineCacheBundle\\DoctrineCacheBundle',
                'DoctrineFixturesBundle' => 'Doctrine\\Bundle\\FixturesBundle\\DoctrineFixturesBundle',
                'DoctrinePHPCRBundle' => 'Doctrine\\Bundle\\PHPCRBundle\\DoctrinePHPCRBundle',
                'StofDoctrineExtensionsBundle' => 'Stof\\DoctrineExtensionsBundle\\StofDoctrineExtensionsBundle',
                'FOSRestBundle' => 'FOS\\RestBundle\\FOSRestBundle',
                'JMSSerializerBundle' => 'JMS\\SerializerBundle\\JMSSerializerBundle',
                'BazingaHateoasBundle' => 'Bazinga\\Bundle\\HateoasBundle\\BazingaHateoasBundle',
                'MassiveSearchBundle' => 'Massive\\Bundle\\SearchBundle\\MassiveSearchBundle',
                'SuluSearchBundle' => 'Sulu\\Bundle\\SearchBundle\\SuluSearchBundle',
                'SuluPersistenceBundle' => 'Sulu\\Bundle\\PersistenceBundle\\SuluPersistenceBundle',
                'SuluContactBundle' => 'Sulu\\Bundle\\ContactBundle\\SuluContactBundle',
                'SuluMediaBundle' => 'Sulu\\Bundle\\MediaBundle\\SuluMediaBundle',
                'SuluSecurityBundle' => 'Sulu\\Bundle\\SecurityBundle\\SuluSecurityBundle',
                'SuluCategoryBundle' => 'Sulu\\Bundle\\CategoryBundle\\SuluCategoryBundle',
                'SuluSnippetBundle' => 'Sulu\\Bundle\\SnippetBundle\\SuluSnippetBundle',
                'SuluContentBundle' => 'Sulu\\Bundle\\ContentBundle\\SuluContentBundle',
                'SuluTagBundle' => 'Sulu\\Bundle\\TagBundle\\SuluTagBundle',
                'SuluWebsiteBundle' => 'Sulu\\Bundle\\WebsiteBundle\\SuluWebsiteBundle',
                'SuluLocationBundle' => 'Sulu\\Bundle\\LocationBundle\\SuluLocationBundle',
                'SuluHttpCacheBundle' => 'Sulu\\Bundle\\HttpCacheBundle\\SuluHttpCacheBundle',
                'SuluWebsocketBundle' => 'Sulu\\Bundle\\WebsocketBundle\\SuluWebsocketBundle',
                'SuluTranslateBundle' => 'Sulu\\Bundle\\TranslateBundle\\SuluTranslateBundle',
                'SuluDocumentManagerBundle' => 'Sulu\\Bundle\\DocumentManagerBundle\\SuluDocumentManagerBundle',
                'SuluHashBundle' => 'Sulu\\Bundle\\HashBundle\\SuluHashBundle',
                'SuluCustomUrlBundle' => 'Sulu\\Bundle\\CustomUrlBundle\\SuluCustomUrlBundle',
                'SuluRouteBundle' => 'Sulu\\Bundle\\RouteBundle\\SuluRouteBundle',
                'SuluMarkupBundle' => 'Sulu\\Bundle\\MarkupBundle\\SuluMarkupBundle',
                'PhpcrMigrationsBundle' => 'DTL\\Bundle\\PhpcrMigrations\\PhpcrMigrationsBundle',
                'DubtureFFmpegBundle' => 'Dubture\\FFmpegBundle\\DubtureFFmpegBundle',
                'MassiveBuildBundle' => 'Massive\\Bundle\\BuildBundle\\MassiveBuildBundle',
                'WebProfilerBundle' => 'Symfony\\Bundle\\WebProfilerBundle\\WebProfilerBundle',
                'SensioDistributionBundle' => 'Sensio\\Bundle\\DistributionBundle\\SensioDistributionBundle',
                'SensioGeneratorBundle' => 'Sensio\\Bundle\\GeneratorBundle\\SensioGeneratorBundle',
                'WebServerBundle' => 'Symfony\\Bundle\\WebServerBundle\\WebServerBundle',
                'SuluTestBundle' => 'Sulu\\Bundle\\TestBundle\\SuluTestBundle',
                'DebugBundle' => 'Symfony\\Bundle\\DebugBundle\\DebugBundle',
                'SecurityBundle' => 'Symfony\\Bundle\\SecurityBundle\\SecurityBundle',
                'SuluAdminBundle' => 'Sulu\\Bundle\\AdminBundle\\SuluAdminBundle',
                'SuluCollaborationBundle' => 'Sulu\\Bundle\\CollaborationBundle\\SuluCollaborationBundle',
                'SuluPreviewBundle' => 'Sulu\\Bundle\\PreviewBundle\\SuluPreviewBundle',
            ),
            'kernel.charset' => 'UTF-8',
            'kernel.container_class' => 'adminDevDebugProjectContainer',
            'sulu.context' => 'admin',
            'database_driver' => 'pdo_mysql',
            'database_host' => '127.0.0.1',
            'database_port' => NULL,
            'database_name' => 'sulu',
            'database_user' => 'root',
            'database_password' => NULL,
            'database_version' => 5.5,
            'mailer_transport' => 'smtp',
            'mailer_host' => '127.0.0.1',
            'mailer_user' => NULL,
            'mailer_password' => NULL,
            'secret' => 'ThisTokenIsNotSoSecretChangeIt',
            'sulu_admin.name' => 'Sulu',
            'sulu_admin.email' => NULL,
            'websocket_port' => 9876,
            'websocket_url' => 'sulu.lo',
            'phpcr_backend' => array(
                'type' => 'doctrinedbal',
            ),
            'phpcr_workspace' => 'default',
            'phpcr_user' => 'admin',
            'phpcr_pass' => 'admin',
            'phpcr_cache' => 'file_system',
            'locale' => 'en',
            'fragment.renderer.hinclude.global_template' => NULL,
            'fragment.path' => '/admin/_fragments',
            'kernel.secret' => 'ThisTokenIsNotSoSecretChangeIt',
            'kernel.http_method_override' => true,
            'kernel.trusted_hosts' => array(

            ),
            'kernel.default_locale' => 'en',
            'templating.helper.code.file_link_format' => NULL,
            'debug.file_link_format' => NULL,
            'session.metadata.storage_key' => '_sf2_meta',
            'session.storage.options' => array(
                'cache_limiter' => '0',
                'cookie_path' => '/admin',
                'cookie_httponly' => true,
                'gc_probability' => 1,
                'use_strict_mode' => true,
            ),
            'session.metadata.update_threshold' => '0',
            'form.type_extension.csrf.enabled' => true,
            'form.type_extension.csrf.field_name' => '_token',
            'asset.request_context.base_path' => '',
            'asset.request_context.secure' => false,
            'templating.loader.cache.path' => NULL,
            'templating.engines' => array(
                0 => 'twig',
            ),
            'validator.mapping.cache.prefix' => '',
            'validator.translation_domain' => 'validators',
            'translator.logging' => true,
            'profiler_listener.only_exceptions' => false,
            'profiler_listener.only_master_requests' => false,
            'debug.error_handler.throw_at' => -1,
            'router.options.generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
            'router.options.generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
            'router.options.generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper',
            'router.options.matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher',
            'router.options.matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher',
            'router.options.matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper',
            'router.options.matcher.cache_class' => 'adminDevDebugProjectContainerUrlMatcher',
            'router.options.generator.cache_class' => 'adminDevDebugProjectContainerUrlGenerator',
            'router.request_context.host' => 'localhost',
            'router.request_context.scheme' => 'http',
            'router.request_context.base_url' => '',
            'router.cache_class_prefix' => 'adminDevDebugProjectContainer',
            'request_listener.http_port' => 80,
            'request_listener.https_port' => 443,
            'twig.exception_listener.controller' => 'twig.controller.exception:showAction',
            'twig.form.resources' => array(
                0 => 'form_div_layout.html.twig',
            ),
            'monolog.use_microseconds' => true,
            'monolog.swift_mailer.handlers' => array(

            ),
            'monolog.handlers_to_channels' => array(
                'monolog.handler.console_very_verbose' => array(
                    'type' => 'inclusive',
                    'elements' => array(
                        0 => 'doctrine',
                    ),
                ),
                'monolog.handler.console' => array(
                    'type' => 'exclusive',
                    'elements' => array(
                        0 => 'doctrine',
                    ),
                ),
                'monolog.handler.main' => NULL,
            ),
            'swiftmailer.class' => 'Swift_Mailer',
            'swiftmailer.transport.sendmail.class' => 'Swift_Transport_SendmailTransport',
            'swiftmailer.transport.mail.class' => 'Swift_Transport_MailTransport',
            'swiftmailer.transport.failover.class' => 'Swift_Transport_FailoverTransport',
            'swiftmailer.plugin.redirecting.class' => 'Swift_Plugins_RedirectingPlugin',
            'swiftmailer.plugin.impersonate.class' => 'Swift_Plugins_ImpersonatePlugin',
            'swiftmailer.plugin.messagelogger.class' => 'Swift_Plugins_MessageLogger',
            'swiftmailer.plugin.antiflood.class' => 'Swift_Plugins_AntiFloodPlugin',
            'swiftmailer.transport.smtp.class' => 'Swift_Transport_EsmtpTransport',
            'swiftmailer.plugin.blackhole.class' => 'Swift_Plugins_BlackholePlugin',
            'swiftmailer.spool.file.class' => 'Swift_FileSpool',
            'swiftmailer.spool.memory.class' => 'Swift_MemorySpool',
            'swiftmailer.email_sender.listener.class' => 'Symfony\\Bundle\\SwiftmailerBundle\\EventListener\\EmailSenderListener',
            'swiftmailer.data_collector.class' => 'Symfony\\Bundle\\SwiftmailerBundle\\DataCollector\\MessageDataCollector',
            'swiftmailer.mailer.default.transport.name' => 'smtp',
            'swiftmailer.mailer.default.transport.smtp.encryption' => NULL,
            'swiftmailer.mailer.default.transport.smtp.port' => 25,
            'swiftmailer.mailer.default.transport.smtp.host' => '127.0.0.1',
            'swiftmailer.mailer.default.transport.smtp.username' => NULL,
            'swiftmailer.mailer.default.transport.smtp.password' => NULL,
            'swiftmailer.mailer.default.transport.smtp.auth_mode' => NULL,
            'swiftmailer.mailer.default.transport.smtp.timeout' => 30,
            'swiftmailer.mailer.default.transport.smtp.source_ip' => NULL,
            'swiftmailer.mailer.default.transport.smtp.local_domain' => NULL,
            'swiftmailer.mailer.default.spool.enabled' => true,
            'swiftmailer.mailer.default.plugin.impersonate' => NULL,
            'swiftmailer.mailer.default.single_address' => NULL,
            'swiftmailer.mailer.default.delivery.enabled' => true,
            'swiftmailer.spool.enabled' => true,
            'swiftmailer.delivery.enabled' => true,
            'swiftmailer.single_address' => NULL,
            'swiftmailer.mailers' => array(
                'default' => 'swiftmailer.mailer.default',
            ),
            'swiftmailer.default_mailer' => 'default',
            'sensio_framework_extra.view.guesser.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Templating\\TemplateGuesser',
            'sensio_framework_extra.controller.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ControllerListener',
            'sensio_framework_extra.routing.loader.annot_dir.class' => 'Symfony\\Component\\Routing\\Loader\\AnnotationDirectoryLoader',
            'sensio_framework_extra.routing.loader.annot_file.class' => 'Symfony\\Component\\Routing\\Loader\\AnnotationFileLoader',
            'sensio_framework_extra.routing.loader.annot_class.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Routing\\AnnotatedRouteControllerLoader',
            'sensio_framework_extra.converter.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ParamConverterListener',
            'sensio_framework_extra.converter.manager.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\ParamConverterManager',
            'sensio_framework_extra.converter.doctrine.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\DoctrineParamConverter',
            'sensio_framework_extra.converter.datetime.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\DateTimeParamConverter',
            'sensio_framework_extra.view.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\TemplateListener',
            'sulu_core.locales' => array(
                0 => 'de',
                1 => 'en',
                2 => 'fr',
                3 => 'nl',
            ),
            'sulu_core.translated_locales' => array(
                'de' => 'Deutsch',
                'en' => 'English',
                'fr' => 'Français',
                'nl' => 'Nederlands',
            ),
            'sulu_core.translations' => array(
                0 => 'de',
                1 => 'en',
                2 => 'fr',
                3 => 'nl',
            ),
            'sulu_core.fallback_locale' => 'en',
            'sulu.content.language.namespace' => 'i18n',
            'sulu.content.language.default' => 'en',
            'sulu.content.node_names.base' => 'cmf',
            'sulu.content.node_names.content' => 'contents',
            'sulu.content.node_names.route' => 'routes',
            'sulu.content.node_names.snippet' => 'snippets',
            'sulu.content.type.text_line.template' => 'SuluContentBundle:Template:content-types/text_line.html.twig',
            'sulu.content.type.text_area.template' => 'SuluContentBundle:Template:content-types/text_area.html.twig',
            'sulu.content.type.text_editor.template' => 'SuluContentBundle:Template:content-types/text_editor.html.twig',
            'sulu.content.type.resource_locator.template' => 'SuluContentBundle:Template:content-types/resource_locator.html.twig',
            'sulu.content.type.block.template' => 'SuluContentBundle:Template:content-types/block.html.twig',
            'sulu.content.structure.default_types' => array(
                'snippet' => 'default',
            ),
            'sulu.content.structure.default_type.snippet' => 'default',
            'sulu.content.internal_prefix' => '',
            'sulu.content.structure.type_map' => array(
                'page' => 'Sulu\\Component\\Content\\Compat\\Structure\\PageBridge',
                'home' => 'Sulu\\Component\\Content\\Compat\\Structure\\PageBridge',
                'snippet' => 'Sulu\\Component\\Content\\Compat\\Structure\\SnippetBridge',
            ),
            'sulu.content.path_cleaner.replacer_loader.file_locator.class' => 'Symfony\\Component\\Config\\FileLocator',
            'sulu.content.path_cleaner.replacer_loader.class' => 'Sulu\\Bundle\\CoreBundle\\DataFixtures\\ReplacerXmlLoader',
            'sulu.content.path_cleaner.class' => 'Sulu\\Component\\PHPCR\\PathCleanup',
            'sulu.content.template_resolver.class' => 'Sulu\\Component\\Content\\Template\\TemplateResolver',
            'sulu.content.mapper.class' => 'Sulu\\Component\\Content\\Mapper\\ContentMapper',
            'sulu.content.structure_manager.class' => 'Sulu\\Component\\Content\\Compat\\StructureManager',
            'sulu.content.webspace_structure_provider.cache.class' => 'Doctrine\\Common\\Cache\\FilesystemCache',
            'sulu.content.webspace_structure_provider.class' => 'Sulu\\Component\\Webspace\\StructureProvider\\WebspaceStructureProvider',
            'sulu.content.type_manager.class' => 'Sulu\\Component\\Content\\ContentTypeManager',
            'sulu.content.type.text_line.class' => 'Sulu\\Component\\Content\\Types\\TextLine',
            'sulu.content.type.text_area.class' => 'Sulu\\Component\\Content\\Types\\TextArea',
            'sulu.content.type.text_editor.class' => 'Sulu\\Component\\Content\\Types\\TextEditor',
            'sulu.content.type.resource_locator.class' => 'Sulu\\Component\\Content\\Types\\ResourceLocator',
            'sulu.content.type.block.class' => 'Sulu\\Component\\Content\\Types\\BlockContentType',
            'sulu.content.resource_locator.mapper.phpcr.class' => 'Sulu\\Component\\Content\\Types\\ResourceLocator\\Mapper\\PhpcrMapper',
            'sulu.content.query_executor.class' => 'Sulu\\Component\\Content\\Query\\ContentQueryExecutor',
            'sulu.cache.warmer.structure.class' => 'Sulu\\Bundle\\CoreBundle\\Cache\\StructureWarmer',
            'sulu.util.node_helper.class' => 'Sulu\\Component\\Util\\SuluNodeHelper',
            'sulu_core.webspace.webspace_manager.class' => 'Sulu\\Component\\Webspace\\Manager\\WebspaceManager',
            'sulu_core.webspace.cache_class' => 'adminWebspaceCollectionCache',
            'sulu_core.webspace.base_class' => 'WebspaceCollection',
            'sulu_core.webspace.document_manager.webspace_initializer.class' => 'Sulu\\Component\\Webspace\\Document\\Initializer\\WebspaceInitializer',
            'sulu_core.cache.memoize.default_lifetime' => 1,
            'sulu_core.cache.memoize.cache.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'sulu_core.cache.memoize.class' => 'Sulu\\Component\\Cache\\Memoize',
            'sulu.fields_defaults.translations' => array(
                'id' => 'public.id',
                'title' => 'public.title',
                'name' => 'public.name',
                'created' => 'public.created',
                'changed' => 'public.changed',
            ),
            'sulu.fields_defaults.widths' => array(
                'id' => '50px',
            ),
            'sulu.phpcr.session.class' => 'Sulu\\Component\\PHPCR\\SessionManager\\SessionManager',
            'sulu_core.rest_helper.class' => 'Sulu\\Component\\Rest\\RestHelper',
            'sulu_core.doctrine_rest_helper.class' => 'Sulu\\Component\\Rest\\DoctrineRestHelper',
            'sulu_core.list_rest_helper.class' => 'Sulu\\Component\\Rest\\ListBuilder\\ListRestHelper',
            'sulu_core.doctrine_list_builder_factory.class' => 'Sulu\\Component\\Rest\\ListBuilder\\Doctrine\\DoctrineListBuilderFactory',
            'sulu_core.rest.datetime_handler.class' => 'Sulu\\Component\\Rest\\Handler\\DateHandler',
            'sulu_core.build.builder.database.class' => 'Sulu\\Bundle\\CoreBundle\\Build\\DatabaseBuilder',
            'sulu_core.build.builder.phpcr.class' => 'Sulu\\Bundle\\CoreBundle\\Build\\PhpcrBuilder',
            'sulu_core.build.builder.phpcr_migrations.class' => 'Sulu\\Bundle\\CoreBundle\\Build\\PhpcrMigrationsBuilder',
            'sulu_core.build.builder.fixtures.class' => 'Sulu\\Bundle\\CoreBundle\\Build\\FixturesBuilder',
            'sulu_core.build.builder.cache.class' => 'Sulu\\Bundle\\CoreBundle\\Build\\CacheBuilder',
            'sulu.core.localization_manager.class' => 'Sulu\\Component\\Localization\\Manager\\LocalizationManager',
            'sulu.core.localization_manager.core_provider.class' => 'Sulu\\Component\\Localization\\Provider\\LocalizationProvider',
            'sulu_core.array_serialization_visitor.class' => 'Sulu\\Component\\Serializer\\ArraySerializationVisitor',
            'doctrine_cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine_cache.apcu.class' => 'Doctrine\\Common\\Cache\\ApcuCache',
            'doctrine_cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine_cache.chain.class' => 'Doctrine\\Common\\Cache\\ChainCache',
            'doctrine_cache.couchbase.class' => 'Doctrine\\Common\\Cache\\CouchbaseCache',
            'doctrine_cache.couchbase.connection.class' => 'Couchbase',
            'doctrine_cache.couchbase.hostnames' => 'localhost:8091',
            'doctrine_cache.file_system.class' => 'Doctrine\\Common\\Cache\\FilesystemCache',
            'doctrine_cache.php_file.class' => 'Doctrine\\Common\\Cache\\PhpFileCache',
            'doctrine_cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine_cache.memcache.connection.class' => 'Memcache',
            'doctrine_cache.memcache.host' => 'localhost',
            'doctrine_cache.memcache.port' => 11211,
            'doctrine_cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine_cache.memcached.connection.class' => 'Memcached',
            'doctrine_cache.memcached.host' => 'localhost',
            'doctrine_cache.memcached.port' => 11211,
            'doctrine_cache.mongodb.class' => 'Doctrine\\Common\\Cache\\MongoDBCache',
            'doctrine_cache.mongodb.collection.class' => 'MongoCollection',
            'doctrine_cache.mongodb.connection.class' => 'MongoClient',
            'doctrine_cache.mongodb.server' => 'localhost:27017',
            'doctrine_cache.predis.client.class' => 'Predis\\Client',
            'doctrine_cache.predis.scheme' => 'tcp',
            'doctrine_cache.predis.host' => 'localhost',
            'doctrine_cache.predis.port' => 6379,
            'doctrine_cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine_cache.redis.connection.class' => 'Redis',
            'doctrine_cache.redis.host' => 'localhost',
            'doctrine_cache.redis.port' => 6379,
            'doctrine_cache.riak.class' => 'Doctrine\\Common\\Cache\\RiakCache',
            'doctrine_cache.riak.bucket.class' => 'Riak\\Bucket',
            'doctrine_cache.riak.connection.class' => 'Riak\\Connection',
            'doctrine_cache.riak.bucket_property_list.class' => 'Riak\\BucketPropertyList',
            'doctrine_cache.riak.host' => 'localhost',
            'doctrine_cache.riak.port' => 8087,
            'doctrine_cache.sqlite3.class' => 'Doctrine\\Common\\Cache\\SQLite3Cache',
            'doctrine_cache.sqlite3.connection.class' => 'SQLite3',
            'doctrine_cache.void.class' => 'Doctrine\\Common\\Cache\\VoidCache',
            'doctrine_cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine_cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine_cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine_cache.security.acl.cache.class' => 'Doctrine\\Bundle\\DoctrineCacheBundle\\Acl\\Model\\AclCache',
            'doctrine.dbal.logger.chain.class' => 'Doctrine\\DBAL\\Logging\\LoggerChain',
            'doctrine.dbal.logger.profiling.class' => 'Doctrine\\DBAL\\Logging\\DebugStack',
            'doctrine.dbal.logger.class' => 'Symfony\\Bridge\\Doctrine\\Logger\\DbalLogger',
            'doctrine.dbal.configuration.class' => 'Doctrine\\DBAL\\Configuration',
            'doctrine.data_collector.class' => 'Doctrine\\Bundle\\DoctrineBundle\\DataCollector\\DoctrineDataCollector',
            'doctrine.dbal.connection.event_manager.class' => 'Symfony\\Bridge\\Doctrine\\ContainerAwareEventManager',
            'doctrine.dbal.connection_factory.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ConnectionFactory',
            'doctrine.dbal.events.mysql_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\MysqlSessionInit',
            'doctrine.dbal.events.oracle_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\OracleSessionInit',
            'doctrine.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Registry',
            'doctrine.entity_managers' => array(
                'default' => 'doctrine.orm.default_entity_manager',
            ),
            'doctrine.default_entity_manager' => 'default',
            'doctrine.dbal.connection_factory.types' => array(

            ),
            'doctrine.connections' => array(
                'default' => 'doctrine.dbal.default_connection',
            ),
            'doctrine.default_connection' => 'default',
            'doctrine.orm.configuration.class' => 'Doctrine\\ORM\\Configuration',
            'doctrine.orm.entity_manager.class' => 'Doctrine\\ORM\\EntityManager',
            'doctrine.orm.manager_configurator.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ManagerConfigurator',
            'doctrine.orm.cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine.orm.cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine.orm.cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine.orm.cache.memcache_host' => 'localhost',
            'doctrine.orm.cache.memcache_port' => 11211,
            'doctrine.orm.cache.memcache_instance.class' => 'Memcache',
            'doctrine.orm.cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine.orm.cache.memcached_host' => 'localhost',
            'doctrine.orm.cache.memcached_port' => 11211,
            'doctrine.orm.cache.memcached_instance.class' => 'Memcached',
            'doctrine.orm.cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine.orm.cache.redis_host' => 'localhost',
            'doctrine.orm.cache.redis_port' => 6379,
            'doctrine.orm.cache.redis_instance.class' => 'Redis',
            'doctrine.orm.cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine.orm.cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine.orm.cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine.orm.metadata.driver_chain.class' => 'Doctrine\\Common\\Persistence\\Mapping\\Driver\\MappingDriverChain',
            'doctrine.orm.metadata.annotation.class' => 'Doctrine\\ORM\\Mapping\\Driver\\AnnotationDriver',
            'doctrine.orm.metadata.xml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedXmlDriver',
            'doctrine.orm.metadata.yml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedYamlDriver',
            'doctrine.orm.metadata.php.class' => 'Doctrine\\ORM\\Mapping\\Driver\\PHPDriver',
            'doctrine.orm.metadata.staticphp.class' => 'Doctrine\\ORM\\Mapping\\Driver\\StaticPHPDriver',
            'doctrine.orm.proxy_cache_warmer.class' => 'Symfony\\Bridge\\Doctrine\\CacheWarmer\\ProxyCacheWarmer',
            'form.type_guesser.doctrine.class' => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser',
            'doctrine.orm.validator.unique.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator',
            'doctrine.orm.validator_initializer.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\DoctrineInitializer',
            'doctrine.orm.security.user.provider.class' => 'Symfony\\Bridge\\Doctrine\\Security\\User\\EntityUserProvider',
            'doctrine.orm.listeners.resolve_target_entity.class' => 'Doctrine\\ORM\\Tools\\ResolveTargetEntityListener',
            'doctrine.orm.listeners.attach_entity_listeners.class' => 'Doctrine\\ORM\\Tools\\AttachEntityListenersListener',
            'doctrine.orm.naming_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultNamingStrategy',
            'doctrine.orm.naming_strategy.underscore.class' => 'Doctrine\\ORM\\Mapping\\UnderscoreNamingStrategy',
            'doctrine.orm.quote_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultQuoteStrategy',
            'doctrine.orm.quote_strategy.ansi.class' => 'Doctrine\\ORM\\Mapping\\AnsiQuoteStrategy',
            'doctrine.orm.entity_listener_resolver.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Mapping\\ContainerAwareEntityListenerResolver',
            'doctrine.orm.second_level_cache.default_cache_factory.class' => 'Doctrine\\ORM\\Cache\\DefaultCacheFactory',
            'doctrine.orm.second_level_cache.default_region.class' => 'Doctrine\\ORM\\Cache\\Region\\DefaultRegion',
            'doctrine.orm.second_level_cache.filelock_region.class' => 'Doctrine\\ORM\\Cache\\Region\\FileLockRegion',
            'doctrine.orm.second_level_cache.logger_chain.class' => 'Doctrine\\ORM\\Cache\\Logging\\CacheLoggerChain',
            'doctrine.orm.second_level_cache.logger_statistics.class' => 'Doctrine\\ORM\\Cache\\Logging\\StatisticsCacheLogger',
            'doctrine.orm.second_level_cache.cache_configuration.class' => 'Doctrine\\ORM\\Cache\\CacheConfiguration',
            'doctrine.orm.second_level_cache.regions_configuration.class' => 'Doctrine\\ORM\\Cache\\RegionsConfiguration',
            'doctrine.orm.auto_generate_proxy_classes' => true,
            'doctrine.orm.proxy_namespace' => 'Proxies',
            'doctrine_phpcr.credentials.class' => 'PHPCR\\SimpleCredentials',
            'doctrine_phpcr.class' => 'Doctrine\\Bundle\\PHPCRBundle\\ManagerRegistry',
            'doctrine_phpcr.proxy.class' => 'Doctrine\\Common\\Proxy\\Proxy',
            'doctrine_phpcr.sessions' => array(
                'default' => 'doctrine_phpcr.default_session',
                'live' => 'doctrine_phpcr.live_session',
            ),
            'doctrine_phpcr.odm.document_managers' => array(

            ),
            'doctrine_phpcr.default_session' => 'default',
            'doctrine_phpcr.odm.default_document_manager' => '',
            'doctrine_phpcr.console_dumper.class' => 'PHPCR\\Util\\Console\\Helper\\PhpcrConsoleDumperHelper',
            'doctrine_phpcr.initializer_manager.class' => 'Doctrine\\Bundle\\PHPCRBundle\\Initializer\\InitializerManager',
            'doctrine_phpcr.form.type.phpcr_reference.class' => 'Doctrine\\Bundle\\PHPCRBundle\\Form\\Type\\PHPCRReferenceType',
            'doctrine_phpcr.logger.chain.class' => 'Jackalope\\Transport\\Logging\\LoggerChain',
            'doctrine_phpcr.logger.class' => 'Jackalope\\Transport\\Logging\\Psr3Logger',
            'doctrine_phpcr.logger.profiling.class' => 'Jackalope\\Transport\\Logging\\DebugStack',
            'doctrine_phpcr.logger.stop_watch.class' => 'Doctrine\\Bundle\\PHPCRBundle\\DataCollector\\StopWatchLogger',
            'doctrine_phpcr.data_collector.class' => 'Doctrine\\Bundle\\PHPCRBundle\\DataCollector\\PHPCRDataCollector',
            'doctrine_phpcr.session.event_manager.class' => 'Symfony\\Bridge\\Doctrine\\ContainerAwareEventManager',
            'doctrine_phpcr.dump_max_line_length' => 120,
            'doctrine_phpcr.jackalope_doctrine_dbal.schema_listener.class' => 'Doctrine\\Bundle\\PHPCRBundle\\EventListener\\JackalopeDoctrineDbalSchemaListener',
            'doctrine_phpcr.jackalope_doctrine_dbal.repository_schema.class' => 'Jackalope\\Transport\\DoctrineDBAL\\RepositorySchema',
            'doctrine_phpcr.form.type_guess' => array(

            ),
            'stof_doctrine_extensions.listener.tree.class' => 'Gedmo\\Tree\\TreeListener',
            'stof_doctrine_extensions.default_locale' => 'en',
            'stof_doctrine_extensions.translation_fallback' => false,
            'stof_doctrine_extensions.persist_default_translation' => false,
            'stof_doctrine_extensions.skip_translation_on_load' => false,
            'stof_doctrine_extensions.listener.translatable.class' => 'Gedmo\\Translatable\\TranslatableListener',
            'stof_doctrine_extensions.listener.timestampable.class' => 'Gedmo\\Timestampable\\TimestampableListener',
            'stof_doctrine_extensions.listener.blameable.class' => 'Gedmo\\Blameable\\BlameableListener',
            'stof_doctrine_extensions.listener.sluggable.class' => 'Gedmo\\Sluggable\\SluggableListener',
            'stof_doctrine_extensions.listener.loggable.class' => 'Gedmo\\Loggable\\LoggableListener',
            'stof_doctrine_extensions.listener.sortable.class' => 'Gedmo\\Sortable\\SortableListener',
            'stof_doctrine_extensions.listener.softdeleteable.class' => 'Gedmo\\SoftDeleteable\\SoftDeleteableListener',
            'stof_doctrine_extensions.listener.uploadable.class' => 'Gedmo\\Uploadable\\UploadableListener',
            'stof_doctrine_extensions.listener.reference_integrity.class' => 'Gedmo\\ReferenceIntegrity\\ReferenceIntegrityListener',
            'fos_rest.serializer.exclusion_strategy.version' => '',
            'fos_rest.serializer.exclusion_strategy.groups' => '',
            'fos_rest.view_handler.jsonp.callback_param' => '',
            'fos_rest.view.exception_wrapper_handler' => 'FOS\\RestBundle\\View\\ExceptionWrapperHandler',
            'fos_rest.view_handler.default.class' => 'FOS\\RestBundle\\View\\ViewHandler',
            'fos_rest.view_handler.jsonp.class' => 'FOS\\RestBundle\\View\\JsonpHandler',
            'fos_rest.serializer.exception_wrapper_serialize_handler.class' => 'FOS\\RestBundle\\Serializer\\ExceptionWrapperSerializeHandler',
            'fos_rest.routing.loader.controller.class' => 'FOS\\RestBundle\\Routing\\Loader\\RestRouteLoader',
            'fos_rest.routing.loader.yaml_collection.class' => 'FOS\\RestBundle\\Routing\\Loader\\RestYamlCollectionLoader',
            'fos_rest.routing.loader.xml_collection.class' => 'FOS\\RestBundle\\Routing\\Loader\\RestXmlCollectionLoader',
            'fos_rest.routing.loader.processor.class' => 'FOS\\RestBundle\\Routing\\Loader\\RestRouteProcessor',
            'fos_rest.routing.loader.reader.controller.class' => 'FOS\\RestBundle\\Routing\\Loader\\Reader\\RestControllerReader',
            'fos_rest.routing.loader.reader.action.class' => 'FOS\\RestBundle\\Routing\\Loader\\Reader\\RestActionReader',
            'fos_rest.format_negotiator.class' => 'FOS\\RestBundle\\Util\\FormatNegotiator',
            'fos_rest.inflector.class' => 'FOS\\RestBundle\\Util\\Inflector\\DoctrineInflector',
            'fos_rest.request_matcher.class' => 'Symfony\\Component\\HttpFoundation\\RequestMatcher',
            'fos_rest.violation_formatter.class' => 'FOS\\RestBundle\\Util\\ViolationFormatter',
            'fos_rest.request.param_fetcher.class' => 'FOS\\RestBundle\\Request\\ParamFetcher',
            'fos_rest.request.param_fetcher.reader.class' => 'FOS\\RestBundle\\Request\\ParamReader',
            'fos_rest.routing.loader.default_format' => 'json',
            'fos_rest.routing.loader.include_format' => true,
            'fos_rest.serializer.serialize_null' => false,
            'fos_rest.exception_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\ExceptionListener',
            'fos_rest.controller.exception.class' => 'FOS\\RestBundle\\Controller\\ExceptionController',
            'fos_rest.exception_listener.controller' => 'fos_rest.controller.exception:showAction',
            'fos_rest.exception.codes' => array(
                'Sulu\\Component\\DocumentManager\\Exception\\DocumentNotFoundException' => 404,
                'Sulu\\Component\\CustomUrl\\Manager\\TitleAlreadyExistsException' => 400,
                'Sulu\\Component\\CustomUrl\\Generator\\MissingDomainPartException' => 400,
                'Sulu\\Component\\CustomUrl\\Manager\\RouteNotRemovableException' => 420,
                'Sulu\\Component\\DocumentManager\\Exception\\VersionNotFoundException' => 404,
                'Sulu\\Component\\Content\\Exception\\MandatoryPropertyException' => 400,
                'Sulu\\Component\\Content\\Exception\\ResourceLocatorAlreadyExistsException' => 409,
                'Sulu\\Bundle\\CategoryBundle\\Exception\\CategoryIdNotFoundException' => 404,
                'Sulu\\Bundle\\CategoryBundle\\Exception\\CategoryKeyNotFoundException' => 404,
                'Sulu\\Bundle\\CategoryBundle\\Exception\\CategoryKeyNotUniqueException' => 409,
                'Sulu\\Bundle\\CategoryBundle\\Exception\\CategoryNameMissingException' => 400,
                'Sulu\\Bundle\\CategoryBundle\\Exception\\KeywordIsMultipleReferencedException' => 409,
                'Sulu\\Bundle\\CategoryBundle\\Exception\\KeywordNotUniqueException' => 409,
                'Sulu\\Bundle\\SecurityBundle\\Exception\\RoleNameAlreadyExistsException' => 409,
                'Sulu\\Bundle\\MediaBundle\\Media\\Exception\\MediaNotFoundException' => 404,
                'Sulu\\Bundle\\MediaBundle\\Media\\Exception\\FileVersionNotFoundException' => 404,
                'Sulu\\Bundle\\MediaBundle\\Media\\Exception\\FormatNotFoundException' => 404,
                'Sulu\\Bundle\\MediaBundle\\Media\\Exception\\FormatOptionsMissingParameterException' => 400,
                'Sulu\\Component\\Rest\\Exception\\MissingParameterException' => 400,
                'Sulu\\Component\\Rest\\Exception\\InvalidHashException' => 409,
                'Sulu\\Component\\Rest\\Csv\\ObjectNotSupportedException' => 406,
            ),
            'fos_rest.exception.messages' => array(

            ),
            'fos_rest.converter.request_body.validation_errors_argument' => 'validationErrors',
            'fos_rest.mime_types' => array(

            ),
            'fos_rest.formats' => array(
                'json' => false,
                'csv' => false,
                'html' => true,
            ),
            'fos_rest.force_redirects' => array(
                'html' => 302,
            ),
            'fos_rest.failed_validation' => 400,
            'fos_rest.empty_content' => 204,
            'fos_rest.serialize_null' => false,
            'fos_rest.default_engine' => 'twig',
            'fos_rest.normalizer.camel_keys.class' => 'FOS\\RestBundle\\Normalizer\\CamelKeysNormalizer',
            'fos_rest.decoder.json.class' => 'FOS\\RestBundle\\Decoder\\JsonDecoder',
            'fos_rest.decoder.jsontoform.class' => 'FOS\\RestBundle\\Decoder\\JsonToFormDecoder',
            'fos_rest.decoder.xml.class' => 'FOS\\RestBundle\\Decoder\\XmlDecoder',
            'fos_rest.decoder_provider.class' => 'FOS\\RestBundle\\Decoder\\ContainerDecoderProvider',
            'fos_rest.body_listener.class' => 'FOS\\RestBundle\\EventListener\\BodyListener',
            'fos_rest.throw_exception_on_unsupported_content_type' => false,
            'fos_rest.body_default_format' => NULL,
            'fos_rest.decoders' => array(
                'json' => 'fos_rest.decoder.json',
                'xml' => 'fos_rest.decoder.xml',
            ),
            'jms_serializer.metadata.file_locator.class' => 'Metadata\\Driver\\FileLocator',
            'jms_serializer.metadata.annotation_driver.class' => 'JMS\\Serializer\\Metadata\\Driver\\AnnotationDriver',
            'jms_serializer.metadata.chain_driver.class' => 'Metadata\\Driver\\DriverChain',
            'jms_serializer.metadata.yaml_driver.class' => 'JMS\\Serializer\\Metadata\\Driver\\YamlDriver',
            'jms_serializer.metadata.xml_driver.class' => 'JMS\\Serializer\\Metadata\\Driver\\XmlDriver',
            'jms_serializer.metadata.php_driver.class' => 'JMS\\Serializer\\Metadata\\Driver\\PhpDriver',
            'jms_serializer.metadata.doctrine_type_driver.class' => 'JMS\\Serializer\\Metadata\\Driver\\DoctrineTypeDriver',
            'jms_serializer.metadata.doctrine_phpcr_type_driver.class' => 'JMS\\Serializer\\Metadata\\Driver\\DoctrinePHPCRTypeDriver',
            'jms_serializer.metadata.lazy_loading_driver.class' => 'Metadata\\Driver\\LazyLoadingDriver',
            'jms_serializer.metadata.metadata_factory.class' => 'Metadata\\MetadataFactory',
            'jms_serializer.metadata.cache.file_cache.class' => 'Metadata\\Cache\\FileCache',
            'jms_serializer.event_dispatcher.class' => 'JMS\\Serializer\\EventDispatcher\\LazyEventDispatcher',
            'jms_serializer.camel_case_naming_strategy.class' => 'JMS\\Serializer\\Naming\\CamelCaseNamingStrategy',
            'jms_serializer.identical_property_naming_strategy.class' => 'JMS\\Serializer\\Naming\\IdenticalPropertyNamingStrategy',
            'jms_serializer.serialized_name_annotation_strategy.class' => 'JMS\\Serializer\\Naming\\SerializedNameAnnotationStrategy',
            'jms_serializer.cache_naming_strategy.class' => 'JMS\\Serializer\\Naming\\CacheNamingStrategy',
            'jms_serializer.doctrine_object_constructor.class' => 'JMS\\Serializer\\Construction\\DoctrineObjectConstructor',
            'jms_serializer.unserialize_object_constructor.class' => 'JMS\\Serializer\\Construction\\UnserializeObjectConstructor',
            'jms_serializer.version_exclusion_strategy.class' => 'JMS\\Serializer\\Exclusion\\VersionExclusionStrategy',
            'jms_serializer.serializer.class' => 'JMS\\Serializer\\Serializer',
            'jms_serializer.twig_extension.class' => 'JMS\\Serializer\\Twig\\SerializerExtension',
            'jms_serializer.twig_runtime_extension.class' => 'JMS\\Serializer\\Twig\\SerializerRuntimeExtension',
            'jms_serializer.twig_runtime_extension_helper.class' => 'JMS\\Serializer\\Twig\\SerializerRuntimeHelper',
            'jms_serializer.templating.helper.class' => 'JMS\\SerializerBundle\\Templating\\SerializerHelper',
            'jms_serializer.json_serialization_visitor.class' => 'JMS\\Serializer\\JsonSerializationVisitor',
            'jms_serializer.json_serialization_visitor.options' => 0,
            'jms_serializer.json_deserialization_visitor.class' => 'JMS\\Serializer\\JsonDeserializationVisitor',
            'jms_serializer.xml_serialization_visitor.class' => 'JMS\\Serializer\\XmlSerializationVisitor',
            'jms_serializer.xml_deserialization_visitor.class' => 'JMS\\Serializer\\XmlDeserializationVisitor',
            'jms_serializer.xml_deserialization_visitor.doctype_whitelist' => array(

            ),
            'jms_serializer.xml_serialization_visitor.format_output' => true,
            'jms_serializer.yaml_serialization_visitor.class' => 'JMS\\Serializer\\YamlSerializationVisitor',
            'jms_serializer.handler_registry.class' => 'JMS\\Serializer\\Handler\\LazyHandlerRegistry',
            'jms_serializer.datetime_handler.class' => 'JMS\\Serializer\\Handler\\DateHandler',
            'jms_serializer.array_collection_handler.class' => 'JMS\\Serializer\\Handler\\ArrayCollectionHandler',
            'jms_serializer.php_collection_handler.class' => 'JMS\\Serializer\\Handler\\PhpCollectionHandler',
            'jms_serializer.form_error_handler.class' => 'JMS\\Serializer\\Handler\\FormErrorHandler',
            'jms_serializer.constraint_violation_handler.class' => 'JMS\\Serializer\\Handler\\ConstraintViolationHandler',
            'jms_serializer.doctrine_proxy_subscriber.class' => 'JMS\\Serializer\\EventDispatcher\\Subscriber\\DoctrineProxySubscriber',
            'jms_serializer.stopwatch_subscriber.class' => 'JMS\\SerializerBundle\\Serializer\\StopwatchEventSubscriber',
            'jms_serializer.configured_context_factory.class' => 'JMS\\SerializerBundle\\ContextFactory\\ConfiguredContextFactory',
            'jms_serializer.expression_evaluator.class' => 'JMS\\Serializer\\Expression\\ExpressionEvaluator',
            'jms_serializer.expression_language.class' => 'Symfony\\Component\\ExpressionLanguage\\ExpressionLanguage',
            'jms_serializer.expression_language.function_provider.class' => 'JMS\\SerializerBundle\\ExpressionLanguage\\BasicSerializerFunctionsProvider',
            'jms_serializer.accessor_strategy.default.class' => 'JMS\\Serializer\\Accessor\\DefaultAccessorStrategy',
            'jms_serializer.accessor_strategy.expression.class' => 'JMS\\Serializer\\Accessor\\ExpressionAccessorStrategy',
            'hateoas.link_factory.class' => 'Hateoas\\Factory\\LinkFactory',
            'hateoas.links_factory.class' => 'Hateoas\\Factory\\LinksFactory',
            'hateoas.embeds_factory.class' => 'Hateoas\\Factory\\EmbeddedsFactory',
            'hateoas.expression.evaluator.class' => 'Bazinga\\Bundle\\HateoasBundle\\Hateoas\\Expression\\LazyFunctionExpressionEvaluator',
            'bazinga_hateoas.expression_language.class' => 'Bazinga\\Bundle\\HateoasBundle\\ExpressionLanguage\\ExpressionLanguage',
            'hateoas.expression.link.class' => 'Hateoas\\Expression\\LinkExpressionFunction',
            'hateoas.serializer.xml.class' => 'Hateoas\\Serializer\\XmlSerializer',
            'hateoas.serializer.json_hal.class' => 'Hateoas\\Serializer\\JsonHalSerializer',
            'hateoas.serializer.exclusion_manager.class' => 'Hateoas\\Serializer\\ExclusionManager',
            'hateoas.event_subscriber.xml.class' => 'Hateoas\\Serializer\\EventSubscriber\\XmlEventSubscriber',
            'hateoas.event_subscriber.json.class' => 'Hateoas\\Serializer\\EventSubscriber\\JsonEventSubscriber',
            'hateoas.inline_deferrer.embeds.class' => 'Hateoas\\Serializer\\Metadata\\InlineDeferrer',
            'hateoas.inline_deferrer.links.class' => 'Hateoas\\Serializer\\Metadata\\InlineDeferrer',
            'hateoas.configuration.provider.resolver.chain.class' => 'Hateoas\\Configuration\\Provider\\Resolver\\ChainResolver',
            'hateoas.configuration.provider.resolver.method.class' => 'Hateoas\\Configuration\\Provider\\Resolver\\MethodResolver',
            'hateoas.configuration.provider.resolver.static_method.class' => 'Hateoas\\Configuration\\Provider\\Resolver\\StaticMethodResolver',
            'hateoas.configuration.provider.resolver.symfony_container.class' => 'Hateoas\\Configuration\\Provider\\Resolver\\SymfonyContainerResolver',
            'hateoas.configuration.relation_provider.class' => 'Hateoas\\Configuration\\Provider\\RelationProvider',
            'hateoas.configuration.relations_repository.class' => 'Hateoas\\Configuration\\RelationsRepository',
            'hateoas.configuration.metadata.yaml_driver.class' => 'Hateoas\\Configuration\\Metadata\\Driver\\YamlDriver',
            'hateoas.configuration.metadata.xml_driver.class' => 'Hateoas\\Configuration\\Metadata\\Driver\\XmlDriver',
            'hateoas.configuration.metadata.annotation_driver.class' => 'Hateoas\\Configuration\\Metadata\\Driver\\AnnotationDriver',
            'hateoas.configuration.metadata.extension_driver.class' => 'Hateoas\\Configuration\\Metadata\\Driver\\ExtensionDriver',
            'hateoas.generator.registry.class' => 'Hateoas\\UrlGenerator\\UrlGeneratorRegistry',
            'hateoas.generator.symfony.class' => 'Hateoas\\UrlGenerator\\SymfonyUrlGenerator',
            'hateoas.helper.link.class' => 'Hateoas\\Helper\\LinkHelper',
            'hateoas.twig.link.class' => 'Hateoas\\Twig\\Extension\\LinkExtension',
            'massive_search.search_manager.class' => 'Massive\\Bundle\\SearchBundle\\Search\\SearchManager',
            'massive_search.object_to_document_converter.class' => 'Massive\\Bundle\\SearchBundle\\Search\\ObjectToDocumentConverter',
            'massive_search.expression_language.class' => 'Massive\\Bundle\\SearchBundle\\Search\\ExpressionLanguage\\MassiveSearchExpressionLanguage',
            'massive_search.search.adapter.zend_lucene.class' => 'Massive\\Bundle\\SearchBundle\\Search\\Adapter\\ZendLuceneAdapter',
            'massive_search.search.adapter.test.class' => 'Massive\\Bundle\\SearchBundle\\Search\\Adapter\\TestAdapter',
            'massive_search.factory_default.class' => 'Massive\\Bundle\\SearchBundle\\Search\\Factory',
            'massive_search.controller.rest.class' => 'Massive\\Bundle\\SearchBundle\\Controller\\SearchController',
            'massive_search.events.index' => 'massive_search.index',
            'massive_search.events.deindex' => 'massive_search.deindex',
            'massive_search.adapter.zend_lucene.hide_index_exception' => false,
            'massive_search.adapter.zend_lucene.encoding' => 'UTF-8',
            'massive_search.metadata.prefix' => 'massive',
            'massive_search.metadata.debug' => true,
            'massive_search.metadata.driver.xml.class' => 'Massive\\Bundle\\SearchBundle\\Search\\Metadata\\Driver\\XmlDriver',
            'massive_search.metadata.driver.annotation.class' => 'Symfony\\Cmf\\Bundle\\TreeUiBundle\\Tree\\Metadata\\Driver\\AnnotationDriver',
            'massive_search.metadata.driver.chain.class' => 'Metadata\\Driver\\DriverChain',
            'massive_search.metadata.file_locator.class' => 'Metadata\\Driver\\FileLocator',
            'massive_search.metadata.factory.class' => 'Metadata\\MetadataFactory',
            'massive_search.metadata.field_evaluator.class' => 'Massive\\Bundle\\SearchBundle\\Search\\Metadata\\FieldEvaluator',
            'massive_search.metadata.cache.file_cache.class' => 'Metadata\\Cache\\FileCache',
            'massive_search.metadata.provider.default.class' => 'Massive\\Bundle\\SearchBundle\\Search\\Metadata\\Provider\\DefaultProvider',
            'massive_search.metadata.provider.chain.class' => 'Massive\\Bundle\\SearchBundle\\Search\\Metadata\\Provider\\ChainProvider',
            'sulu_search.indexes' => array(
                'snippet' => array(
                    'security_context' => 'sulu.global.snippets',
                    'contexts' => array(

                    ),
                ),
                'media' => array(
                    'security_context' => 'sulu.media.collections',
                    'contexts' => array(

                    ),
                ),
                'contact' => array(
                    'security_context' => 'sulu.contact.people',
                    'contexts' => array(

                    ),
                ),
                'account' => array(
                    'security_context' => 'sulu.contact.organizations',
                    'contexts' => array(

                    ),
                ),
                'page_example' => array(
                    'security_context' => 'sulu.webspaces.example',
                    'name' => 'example.com',
                ),
                'page_example_published' => array(
                    'security_context' => 'sulu.webspaces.example',
                    'name' => 'example.com',
                    'contexts' => array(
                        0 => 'website',
                    ),
                ),
            ),
            'sulu_search.controller.search.class' => 'Sulu\\Bundle\\SearchBundle\\Controller\\SearchController',
            'sulu_search.search.factory.class' => 'Sulu\\Bundle\\SearchBundle\\Search\\Factory',
            'sulu_search.admin.class' => 'Sulu\\Bundle\\SearchBundle\\Admin\\SuluSearchAdmin',
            'sulu_search.build.index.class' => 'Sulu\\Bundle\\SearchBundle\\Build\\IndexBuilder',
            'sulu.persistence.event_subscriber.orm.timestampable.class' => 'Sulu\\Component\\Persistence\\EventSubscriber\\ORM\\TimestampableSubscriber',
            'sulu.persistence.event_subscriber.orm.user_blame.class' => 'Sulu\\Component\\Persistence\\EventSubscriber\\ORM\\UserBlameSubscriber',
            'sulu.persistence.event_subscriber.orm.metadata.class' => 'Sulu\\Component\\Persistence\\EventSubscriber\\ORM\\MetadataSubscriber',
            'sulu_contact.admin.class' => 'Sulu\\Bundle\\ContactBundle\\Admin\\ContactAdmin',
            'sulu_contact.contact_content_navigation_provider.class' => 'Sulu\\Bundle\\ContactBundle\\Admin\\ContactContentNavigationProvider',
            'sulu_contact.account_content_navigation_provider.class' => 'Sulu\\Bundle\\ContactBundle\\Admin\\AccountContentNavigationProvider',
            'sulu_contact.account_listener.class' => 'Sulu\\Bundle\\ContactBundle\\EventListener\\AccountListener',
            'sulu_contact.contact_manager.class' => 'Sulu\\Bundle\\ContactBundle\\Contact\\ContactManager',
            'sulu_contact.account_manager.class' => 'Sulu\\Bundle\\ContactBundle\\Contact\\AccountManager',
            'sulu_contact.customer_manager.class' => 'Sulu\\Bundle\\ContactBundle\\Contact\\CustomerManager',
            'sulu_contact.twig.class' => 'Sulu\\Bundle\\ContactBundle\\Twig\\ContactTwigExtension',
            'sulu_contact.twig.cache.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'sulu_contact.account.entity' => 'SuluContactBundle:Account',
            'sulu_contact.country.entity' => 'SuluContactBundle:Country',
            'sulu_contact.account_repository.class' => 'Sulu\\Bundle\\ContactBundle\\Entity\\AccountRepository',
            'sulu_contact.contact_repository.class' => 'Sulu\\Bundle\\ContactBundle\\Entity\\ContactRepository',
            'sulu_contact.account_factory.class' => 'Sulu\\Bundle\\ContactBundle\\Contact\\AccountFactory',
            'sulu_contact.contact.entity' => 'SuluContactBundle:Contact',
            'sulu_contact.contact_title.entity' => 'SuluContactBundle:ContactTitle',
            'sulu_contact.contact_title_repository.class' => 'Sulu\\Bundle\\ContactBundle\\Entity\\ContactTitleRepository',
            'sulu_contact.smart_content.data_provider.contact.class' => 'Sulu\\Component\\Contact\\SmartContent\\ContactDataProvider',
            'sulu_contact.smart_content.data_provider.account.class' => 'Sulu\\Component\\Contact\\SmartContent\\AccountDataProvider',
            'sulu_contact.util.index_comparator.class' => 'Sulu\\Bundle\\ContactBundle\\Util\\IndexComparator',
            'sulu_contact.util.id_converter.class' => 'Sulu\\Bundle\\ContactBundle\\Util\\CustomerIdConverter',
            'sulu_contact.content.contact.class' => 'Sulu\\Bundle\\ContactBundle\\Content\\Types\\ContactSelectionContentType',
            'sulu_contact.defaults' => array(
                'phoneType' => '1',
                'phoneTypeMobile' => '3',
                'phoneTypeIsdn' => '1',
                'emailType' => '1',
                'addressType' => '1',
                'urlType' => '1',
                'faxType' => '1',
                'socialMediaProfileType' => '1',
                'country' => 'AT',
            ),
            'sulu_contact.form_of_address' => array(
                'male' => array(
                    'id' => 0,
                    'name' => 'male',
                    'translation' => 'contact.contacts.formOfAddress.male',
                ),
                'female' => array(
                    'id' => 1,
                    'name' => 'female',
                    'translation' => 'contact.contacts.formOfAddress.female',
                ),
            ),
            'sulu_contact.contact_form.category_root' => NULL,
            'sulu_contact.account_form.category_root' => NULL,
            'sulu_contact.content-type.contact.template' => 'SuluContactBundle:Template:content-types/contact-selection.html.twig',
            'sulu.model.contact.class' => 'Sulu\\Bundle\\ContactBundle\\Entity\\Contact',
            'sulu.repository.contact.class' => 'Sulu\\Bundle\\ContactBundle\\Entity\\ContactRepository',
            'sulu.persistence.objects' => array(
                'sulu' => array(
                    'route' => array(
                        'model' => 'Sulu\\Bundle\\RouteBundle\\Entity\\Route',
                        'repository' => 'Sulu\\Bundle\\RouteBundle\\Entity\\RouteRepository',
                    ),
                    'tag' => array(
                        'model' => 'Sulu\\Bundle\\TagBundle\\Entity\\Tag',
                        'repository' => 'Sulu\\Bundle\\TagBundle\\Entity\\TagRepository',
                    ),
                    'category' => array(
                        'model' => 'Sulu\\Bundle\\CategoryBundle\\Entity\\Category',
                        'repository' => 'Sulu\\Bundle\\CategoryBundle\\Entity\\CategoryRepository',
                    ),
                    'category_meta' => array(
                        'model' => 'Sulu\\Bundle\\CategoryBundle\\Entity\\CategoryMeta',
                        'repository' => 'Sulu\\Bundle\\CategoryBundle\\Entity\\CategoryMetaRepository',
                    ),
                    'category_translation' => array(
                        'model' => 'Sulu\\Bundle\\CategoryBundle\\Entity\\CategoryTranslation',
                        'repository' => 'Sulu\\Bundle\\CategoryBundle\\Entity\\CategoryTranslationRepository',
                    ),
                    'keyword' => array(
                        'model' => 'Sulu\\Bundle\\CategoryBundle\\Entity\\Keyword',
                        'repository' => 'Sulu\\Bundle\\CategoryBundle\\Entity\\KeywordRepository',
                    ),
                    'user' => array(
                        'model' => 'Sulu\\Bundle\\SecurityBundle\\Entity\\User',
                        'repository' => 'Sulu\\Bundle\\SecurityBundle\\Entity\\UserRepository',
                    ),
                    'role' => array(
                        'model' => 'Sulu\\Bundle\\SecurityBundle\\Entity\\Role',
                        'repository' => 'Sulu\\Bundle\\SecurityBundle\\Entity\\RoleRepository',
                    ),
                    'role_setting' => array(
                        'model' => 'Sulu\\Bundle\\SecurityBundle\\Entity\\RoleSetting',
                        'repository' => 'Sulu\\Bundle\\SecurityBundle\\Entity\\RoleSettingRepository',
                    ),
                    'access_control' => array(
                        'model' => 'Sulu\\Bundle\\SecurityBundle\\Entity\\AccessControl',
                        'repository' => 'Sulu\\Bundle\\SecurityBundle\\Entity\\AccessControlRepository',
                    ),
                    'media' => array(
                        'model' => 'Sulu\\Bundle\\MediaBundle\\Entity\\Media',
                        'repository' => 'Sulu\\Bundle\\MediaBundle\\Entity\\MediaRepository',
                    ),
                    'contact' => array(
                        'model' => 'Sulu\\Bundle\\ContactBundle\\Entity\\Contact',
                        'repository' => 'Sulu\\Bundle\\ContactBundle\\Entity\\ContactRepository',
                    ),
                ),
            ),
            'sulu_media.system_collections' => array(
                'sulu_media' => array(
                    'meta_title' => array(
                        'en' => 'Sulu media',
                        'de' => 'Sulu Medien',
                    ),
                    'collections' => array(
                        'preview_image' => array(
                            'meta_title' => array(
                                'en' => 'Preview images',
                                'de' => 'Vorschaubilder',
                            ),
                        ),
                    ),
                ),
                'sulu_contact' => array(
                    'meta_title' => array(
                        'en' => 'Sulu contacts',
                        'de' => 'Sulu Kontakte',
                    ),
                    'collections' => array(
                        'contact' => array(
                            'meta_title' => array(
                                'en' => 'People',
                                'de' => 'Personen',
                            ),
                        ),
                        'account' => array(
                            'meta_title' => array(
                                'en' => 'Organizations',
                                'de' => 'Organisationen',
                            ),
                        ),
                    ),
                ),
            ),
            'sulu_media.format_cache.media_proxy_path' => '/uploads/media/{slug}',
            'sulu_media.media_manager.media_download_path' => '/media/{id}/download/{slug}',
            'sulu_media.format_manager.response_headers' => array(
                'Expires' => '+1 month',
                'Pragma' => 'public',
                'Cache-Control' => 'public',
            ),
            'sulu_media.format_manager.default_imagine_options' => array(

            ),
            'sulu_media.format_manager.mime_types' => array(
                0 => 'image/*',
                1 => 'video/*',
                2 => 'application/pdf',
            ),
            'sulu_media.format_cache.save_image' => true,
            'sulu_media.format_cache.segments' => 10,
            'sulu_media.ghost_script.path' => 'gs',
            'sulu_media.media.max_file_size' => '16MB',
            'sulu_media.media.blocked_file_types' => array(
                0 => 'file/exe',
            ),
            'sulu_media.media.storage.local.segments' => 10,
            'sulu_media.collection.type.default' => array(
                'id' => 1,
            ),
            'sulu_media.collection.previews.format' => 'sulu-50x50',
            'sulu_media.media.types' => array(
                0 => array(
                    'type' => 'document',
                    'mimeTypes' => array(
                        0 => '*',
                    ),
                ),
                1 => array(
                    'type' => 'image',
                    'mimeTypes' => array(
                        0 => 'image/*',
                    ),
                ),
                2 => array(
                    'type' => 'video',
                    'mimeTypes' => array(
                        0 => 'video/*',
                    ),
                ),
                3 => array(
                    'type' => 'audio',
                    'mimeTypes' => array(
                        0 => 'audio/*',
                    ),
                ),
            ),
            'sulu_media.search.default_image_format' => 'sulu-170x170',
            'sulu_media.disposition_type.default' => 'attachment',
            'sulu_media.disposition_type.mime_types_inline' => array(

            ),
            'sulu_media.disposition_type.mime_types_attachment' => array(

            ),
            'sulu_media.upload.max_filesize' => 256,
            'sulu_media.adobe_creative_key' => NULL,
            'sulu_media.admin.class' => 'Sulu\\Bundle\\MediaBundle\\Admin\\MediaAdmin',
            'sulu_media.media_manager.class' => 'Sulu\\Bundle\\MediaBundle\\Media\\Manager\\MediaManager',
            'sulu_media.admin.content_navigation_provider.class' => 'Sulu\\Bundle\\MediaBundle\\Admin\\MediaContentNavigationProvider',
            'sulu_media.collection_repository.class' => 'Sulu\\Bundle\\MediaBundle\\Entity\\CollectionRepository',
            'sulu_media.storage.class' => 'Sulu\\Bundle\\MediaBundle\\Media\\Storage\\LocalStorage',
            'sulu_media.file_validator.class' => 'Sulu\\Bundle\\MediaBundle\\Media\\FileValidator\\FileValidator',
            'sulu_media.format_manager.class' => 'Sulu\\Bundle\\MediaBundle\\Media\\FormatManager\\FormatManager',
            'sulu_media.format_cache_clearer.class' => 'Sulu\\Bundle\\MediaBundle\\Media\\FormatCache\\FormatCacheClearer',
            'sulu_media.format_cache.class' => 'Sulu\\Bundle\\MediaBundle\\Media\\FormatCache\\LocalFormatCache',
            'sulu_media.image.converter.class' => 'Sulu\\Bundle\\MediaBundle\\Media\\ImageConverter\\ImagineImageConverter',
            'sulu_media.image.scaler.class' => 'Sulu\\Bundle\\MediaBundle\\Media\\ImageConverter\\Scaler\\Scaler',
            'sulu_media.image.cropper.class' => 'Sulu\\Bundle\\MediaBundle\\Media\\ImageConverter\\Cropper\\Cropper',
            'sulu_media.image.transformation_pool.class' => 'Sulu\\Bundle\\MediaBundle\\Media\\ImageConverter\\TransformationPool',
            'sulu_media.image.transformation.crop.class' => 'Sulu\\Bundle\\MediaBundle\\Media\\ImageConverter\\Transformation\\CropTransformation',
            'sulu_media.media_selection.class' => 'Sulu\\Bundle\\MediaBundle\\Content\\Types\\MediaSelectionContentType',
            'sulu_media.media_selection.template' => 'SuluMediaBundle:Template:content-types/media-selection.html.twig',
            'sulu_media.collection_manager.class' => 'Sulu\\Bundle\\MediaBundle\\Collection\\Manager\\CollectionManager',
            'sulu_media.type_manager.class' => 'Sulu\\Bundle\\MediaBundle\\Media\\TypeManager\\TypeManager',
            'sulu_media.format_options_manager.class' => 'Sulu\\Bundle\\MediaBundle\\Media\\FormatOptions\\FormatOptionsManager',
            'sulu_media.collection_entity' => 'SuluMediaBundle:Collection',
            'sulu_media.format_options_entity' => 'SuluMediaBundle:FormatOptions',
            'sulu_media.entity.file_version_meta' => 'SuluMediaBundle:FileVersionMeta',
            'sulu_media.twig_extension.disposition_type.class' => 'Sulu\\Bundle\\MediaBundle\\Twig\\DispositionTypeTwigExtension',
            'sulu_media.twig_extension.media.class' => 'Sulu\\Bundle\\MediaBundle\\Twig\\MediaTwigExtension',
            'tmp' => 'Sulu\\Bundle\\MediaBundle\\Twig\\MediaTwigExtension',
            'sulu_media.video_thumbnail_generator.class' => 'Sulu\\Bundle\\MediaBundle\\Media\\Video\\VideoThumbnailService',
            'sulu_media.search.subscriber.structure_media.class' => 'Sulu\\Bundle\\MediaBundle\\Search\\Subscriber\\StructureMediaSearchSubscriber',
            'sulu_media.search.subscriber.media.class' => 'Sulu\\Bundle\\MediaBundle\\Search\\Subscriber\\MediaSearchSubscriber',
            'sulu.model.media.class' => 'Sulu\\Bundle\\MediaBundle\\Entity\\Media',
            'sulu.repository.media.class' => 'Sulu\\Bundle\\MediaBundle\\Entity\\MediaRepository',
            'sulu_security.system' => 'Sulu',
            'sulu_security.reset_password.mail.token_send_limit' => 3,
            'sulu_security.reset_password.mail.sender' => '',
            'sulu_security.reset_password.mail.subject' => 'security.reset.mail-subject',
            'sulu_security.reset_password.mail.template' => 'SuluSecurityBundle:mail_templates:reset_password.html.twig',
            'sulu_security.reset_password.mail.translation_domain' => 'backend',
            'sulu_security.permissions' => array(
                'view' => 64,
                'add' => 32,
                'edit' => 16,
                'delete' => 8,
                'archive' => 4,
                'live' => 2,
                'security' => 1,
            ),
            'permissions' => array(
                'view' => 64,
                'add' => 32,
                'edit' => 16,
                'delete' => 8,
                'archive' => 4,
                'live' => 2,
                'security' => 1,
            ),
            'sulu_security.admin.class' => 'Sulu\\Bundle\\SecurityBundle\\Admin\\SecurityAdmin',
            'sulu_security.authentication_entry_point.class' => 'Sulu\\Bundle\\SecurityBundle\\Security\\AuthenticationEntryPoint',
            'sulu_security.authentication_handler.class' => 'Sulu\\Bundle\\SecurityBundle\\Security\\AuthenticationHandler',
            'sulu_security.mask_converter.class' => 'Sulu\\Component\\Security\\Authorization\\MaskConverter',
            'sulu_security.salt_generator.class' => 'Sulu\\Component\\Security\\Authentication\\SaltGenerator',
            'sulu_security.token_generator.class' => 'Sulu\\Bundle\\SecurityBundle\\Util\\TokenGenerator',
            'sulu_security.contacts_content_navigation_provider.class' => 'Sulu\\Bundle\\SecurityBundle\\Admin\\ContactsContentNavigationProvider',
            'sulu_security.roles_content_navigation_provider.class' => 'Sulu\\Bundle\\SecurityBundle\\Admin\\RolesContentNavigationProvider',
            'sulu_security.security_context_voter.class' => 'Sulu\\Component\\Security\\Authorization\\SecurityContextVoter',
            'sulu_security.access_control_manager.class' => 'Sulu\\Component\\Security\\Authorization\\AccessControl\\AccessControlManager',
            'sulu_security.phpcr_access_control_provider.class' => 'Sulu\\Component\\Security\\Authorization\\AccessControl\\PhpcrAccessControlProvider',
            'sulu_security.doctrine_access_control_provider.class' => 'Sulu\\Component\\Security\\Authorization\\AccessControl\\DoctrineAccessControlProvider',
            'sulu_security.permission_controller.class' => 'Sulu\\Bundle\\SecurityBundle\\Controller\\PermissionController',
            'sulu_security.group_repository.class' => 'Sulu\\Bundle\\SecurityBundle\\Entity\\GroupRepository',
            'sulu_security.user_repository.class' => 'Sulu\\Component\\Security\\Authentication\\UserRepository',
            'sulu_security.user_setting_repository.class' => 'Sulu\\Component\\Security\\Authentication\\UserSettingRepository',
            'sulu_security.user_repository_factory.class' => 'Sulu\\Component\\Security\\Authentication\\UserRepositoryFactory',
            'sulu_security.build.user.class' => 'Sulu\\Bundle\\SecurityBundle\\Build\\UserBuilder',
            'sulu_security.entity.role' => 'SuluSecurityBundle:Role',
            'sulu_security.entity.group' => 'SuluSecurityBundle:Group',
            'sulu_security.entity.user_setting' => 'SuluSecurityBundle:UserSetting',
            'sulu_security.profile_controller.class' => 'Sulu\\Bundle\\SecurityBundle\\Controller\\ProfileController',
            'sulu_security.security_checker.class' => 'Sulu\\Component\\Security\\Authorization\\SecurityChecker',
            'sulu_security.event_listener.security.class' => 'Sulu\\Bundle\\SecurityBundle\\EventListener\\SuluSecurityListener',
            'sulu.model.user.class' => 'Sulu\\Bundle\\SecurityBundle\\Entity\\User',
            'sulu.repository.user.class' => 'Sulu\\Bundle\\SecurityBundle\\Entity\\UserRepository',
            'sulu.model.role.class' => 'Sulu\\Bundle\\SecurityBundle\\Entity\\Role',
            'sulu.repository.role.class' => 'Sulu\\Bundle\\SecurityBundle\\Entity\\RoleRepository',
            'sulu.model.role_setting.class' => 'Sulu\\Bundle\\SecurityBundle\\Entity\\RoleSetting',
            'sulu.repository.role_setting.class' => 'Sulu\\Bundle\\SecurityBundle\\Entity\\RoleSettingRepository',
            'sulu.model.access_control.class' => 'Sulu\\Bundle\\SecurityBundle\\Entity\\AccessControl',
            'sulu.repository.access_control.class' => 'Sulu\\Bundle\\SecurityBundle\\Entity\\AccessControlRepository',
            'sulu_category.content.type.category_list.template' => 'SuluCategoryBundle:Template:content-types/category_list.html.twig',
            'sulu_category.admin.class' => 'Sulu\\Bundle\\CategoryBundle\\Admin\\CategoryAdmin',
            'sulu_category.category_manager.class' => 'Sulu\\Bundle\\CategoryBundle\\Category\\CategoryManager',
            'sulu_category.content_navigation_provider.class' => 'Sulu\\Bundle\\CategoryBundle\\Admin\\CategoryContentNavigationProvider',
            'sulu_category.content.type.category_list.class' => 'Sulu\\Bundle\\CategoryBundle\\Content\\Types\\CategoryList',
            'sulu_category.category_request_handler.class' => 'Sulu\\Component\\Category\\Request\\CategoryRequestHandler',
            'sulu_category.twig_extension.class' => 'Sulu\\Bundle\\CategoryBundle\\Twig\\CategoryTwigExtension',
            'sulu.model.category.class' => 'Sulu\\Bundle\\CategoryBundle\\Entity\\Category',
            'sulu.repository.category.class' => 'Sulu\\Bundle\\CategoryBundle\\Entity\\CategoryRepository',
            'sulu.model.category_meta.class' => 'Sulu\\Bundle\\CategoryBundle\\Entity\\CategoryMeta',
            'sulu.repository.category_meta.class' => 'Sulu\\Bundle\\CategoryBundle\\Entity\\CategoryMetaRepository',
            'sulu.model.category_translation.class' => 'Sulu\\Bundle\\CategoryBundle\\Entity\\CategoryTranslation',
            'sulu.repository.category_translation.class' => 'Sulu\\Bundle\\CategoryBundle\\Entity\\CategoryTranslationRepository',
            'sulu.model.keyword.class' => 'Sulu\\Bundle\\CategoryBundle\\Entity\\Keyword',
            'sulu.repository.keyword.class' => 'Sulu\\Bundle\\CategoryBundle\\Entity\\KeywordRepository',
            'sulu_snippet.content-type.template' => 'SuluSnippetBundle:Template:content-types/snippet.html.twig',
            'sulu_snippet.content-type.default_enabled' => true,
            'sulu_snippet.twig.snippet.cache_lifetime' => 1,
            'sulu_snippet.repository.class' => 'Sulu\\Bundle\\SnippetBundle\\Snippet\\SnippetRepository',
            'sulu_snippet.controller.snippet.class' => 'Sulu\\Bundle\\SnippetBundle\\Controller\\SnippetController',
            'sulu_snippet.twig.snippet.class' => 'Sulu\\Bundle\\SnippetBundle\\Twig\\SnippetTwigExtension',
            'sulu_snippet.twig.snippet.memoized.class' => 'Sulu\\Bundle\\SnippetBundle\\Twig\\MemoizedSnippetTwigExtension',
            'sulu_snippet.form.snippet.class' => 'Sulu\\Bundle\\SnippetBundle\\Form\\SnippetType',
            'sulu_snippet.document.snippet_initializer.class' => 'Sulu\\Bundle\\SnippetBundle\\Document\\SnippetInitializer',
            'sulu_snippet.export.snippet.formats' => array(
                '1.2.xliff' => 'SuluContentBundle:Export:Snippet/1.2.xliff.twig',
            ),
            'sulu_snippet.admin.class' => 'Sulu\\Bundle\\SnippetBundle\\Admin\\SnippetAdmin',
            'sulu_snippet.content_navigation_provider.class' => 'Sulu\\Bundle\\SnippetBundle\\Admin\\SnippetContentNavigationProvider',
            'sulu_snippet.jsconfig.class' => 'Sulu\\Bundle\\AdminBundle\\Admin\\JsConfig',
            'sulu.content.type.smart_content.template' => 'SuluContentBundle:Template:content-types/smart_content.html.twig',
            'sulu.content.type.internal_links.template' => 'SuluContentBundle:Template:content-types/internal_links.html.twig',
            'sulu.content.type.single_internal_link.template' => 'SuluContentBundle:Template:content-types/single_internal_link.html.twig',
            'sulu.content.type.phone.template' => 'SuluContentBundle:Template:content-types/phone.html.twig',
            'sulu.content.type.password.template' => 'SuluContentBundle:Template:content-types/password.html.twig',
            'sulu.content.type.url.template' => 'SuluContentBundle:Template:content-types/url.html.twig',
            'sulu.content.type.email.template' => 'SuluContentBundle:Template:content-types/email.html.twig',
            'sulu.content.type.date.template' => 'SuluContentBundle:Template:content-types/date.html.twig',
            'sulu.content.type.time.template' => 'SuluContentBundle:Template:content-types/time.html.twig',
            'sulu.content.type.color.template' => 'SuluContentBundle:Template:content-types/color.html.twig',
            'sulu.content.type.checkbox.template' => 'SuluContentBundle:Template:content-types/checkbox.html.twig',
            'sulu.content.type.multiple_select.template' => 'SuluContentBundle:Template:content-types/multiple_select.html.twig',
            'sulu.content.type.single_select.template' => 'SuluContentBundle:Template:content-types/single_select.html.twig',
            'sulu.content.type.teaser_selection.template' => 'SuluContentBundle:Template:content-types/teaser-selection.html.twig',
            'sulu_content.search.mapping' => array(
                'Sulu\\Bundle\\ContentBundle\\Document\\PageDocument' => array(
                    'index' => 'page',
                    'decorate_index' => true,
                ),
                'Sulu\\Bundle\\SnippetBundle\\Document\\SnippetDocument' => array(
                    'index' => 'snippet',
                    'decorate_index' => false,
                ),
            ),
            'sulu_content.search.metadata.provider.structure.class' => 'Sulu\\Bundle\\ContentBundle\\Search\\Metadata\\StructureProvider',
            'sulu_content.search.event_subscriber.blame_timestamp.class' => 'Sulu\\Bundle\\ContentBundle\\Search\\EventSubscriber\\BlameTimestampSubscriber',
            'sulu_content.search.event_subscriber.structure.class' => 'Sulu\\Bundle\\ContentBundle\\Search\\EventSubscriber\\StructureSubscriber',
            'sulu_search.event_listener.hit.class' => 'Sulu\\Bundle\\ContentBundle\\Search\\EventListener\\HitListener',
            'sulu_content.admin.class' => 'Sulu\\Bundle\\ContentBundle\\Admin\\ContentAdmin',
            'sulu_content.twig_extension.class' => 'Sulu\\Bundle\\ContentBundle\\Twig\\ContentTwigExtension',
            'sulu_content.content_navigation_provider.class' => 'Sulu\\Bundle\\ContentBundle\\Admin\\ContentContentNavigationProvider',
            'sulu_content.node_repository.class' => 'Sulu\\Bundle\\ContentBundle\\Repository\\NodeRepository',
            'sulu_content.rl_repository.class' => 'Sulu\\Bundle\\ContentBundle\\Repository\\ResourceLocatorRepository',
            'sulu_content.extension.seo.class' => 'Sulu\\Bundle\\ContentBundle\\Content\\Structure\\SeoStructureExtension',
            'sulu_content.extension.excerpt.class' => 'Sulu\\Bundle\\ContentBundle\\Content\\Structure\\ExcerptStructureExtension',
            'sulu_content.smart_content.data_provider_pool.class' => 'Sulu\\Component\\SmartContent\\DataProviderPool',
            'sulu_content.smart_content.data_provider.content.query_builder.class' => 'Sulu\\Component\\Content\\SmartContent\\QueryBuilder',
            'sulu_content.smart_content.data_provider.content.class' => 'Sulu\\Component\\Content\\SmartContent\\ContentDataProvider',
            'sulu_content.smart_content.data_provider.content.proxy_factory.class' => 'ProxyManager\\Factory\\LazyLoadingValueHolderFactory',
            'sulu_content.smart_content.content_type.class' => 'Sulu\\Component\\SmartContent\\ContentType',
            'sulu.content.type.internal_links.class' => 'Sulu\\Bundle\\ContentBundle\\Content\\Types\\InternalLinks',
            'sulu.content.type.single_internal_link.class' => 'Sulu\\Bundle\\ContentBundle\\Content\\Types\\SingleInternalLink',
            'sulu.content.type.phone.class' => 'Sulu\\Bundle\\ContentBundle\\Content\\Types\\Phone',
            'sulu.content.type.password.class' => 'Sulu\\Bundle\\ContentBundle\\Content\\Types\\Password',
            'sulu.content.type.url.class' => 'Sulu\\Bundle\\ContentBundle\\Content\\Types\\Url',
            'sulu.content.type.email.class' => 'Sulu\\Bundle\\ContentBundle\\Content\\Types\\Email',
            'sulu.content.type.date.class' => 'Sulu\\Bundle\\ContentBundle\\Content\\Types\\Date',
            'sulu.content.type.time.class' => 'Sulu\\Bundle\\ContentBundle\\Content\\Types\\Time',
            'sulu.content.type.color.class' => 'Sulu\\Bundle\\ContentBundle\\Content\\Types\\Color',
            'sulu.content.type.checkbox.class' => 'Sulu\\Bundle\\ContentBundle\\Content\\Types\\Checkbox',
            'sulu_content.structure.factory.class' => 'Sulu\\Component\\Content\\Metadata\\Factory\\StructureMetadataFactory',
            'sulu_content.structure.loader.xml.class' => 'Sulu\\Component\\Content\\Metadata\\Loader\\XmlLoader',
            'sulu_content.extension.manager.class' => 'Sulu\\Component\\Content\\Extension\\ExtensionManager',
            'sulu_content.export.webspace.formats' => array(
                '1.2.xliff' => 'SuluContentBundle:Export:Webspace/1.2.xliff.twig',
            ),
            'sulu_content.default_author' => true,
            'sulu_content.seo' => array(
                'max_title_length' => 70,
                'max_description_length' => 320,
                'max_keywords' => 5,
                'keywords_separator' => ',',
                'url_prefix' => 'www.yoursite.com/{locale}',
            ),
            'sulu.model.tag.class' => 'Sulu\\Bundle\\TagBundle\\Entity\\Tag',
            'sulu.repository.tag.class' => 'Sulu\\Bundle\\TagBundle\\Entity\\TagRepository',
            'sulu_tag.content.type.tag_list.template' => 'SuluTagBundle:Template:content-types/tag_list.html.twig',
            'sulu_tag.admin.class' => 'Sulu\\Bundle\\TagBundle\\Admin\\TagAdmin',
            'sulu_tag.tag_manager.class' => 'Sulu\\Bundle\\TagBundle\\Tag\\TagManager',
            'sulu_tag.tag_repository.class' => 'Sulu\\Bundle\\TagBundle\\Entity\\TagRepository',
            'sulu_tag.content.type.tag_list.class' => 'Sulu\\Bundle\\TagBundle\\Content\\Types\\TagList',
            'sulu_tag.tag_request_handler.class' => 'Sulu\\Component\\Tag\\Request\\TagRequestHandler',
            'sulu_tag.twig_extension.class' => 'Sulu\\Bundle\\TagBundle\\Twig\\TagTwigExtension',
            'sulu_tag.entity.tag' => 'SuluTagBundle:Tag',
            'sulu_website.navigation.cache.lifetime' => 1,
            'sulu_website.content.cache.lifetime' => 1,
            'sulu_website.sitemap.cache.lifetime' => 1,
            'sulu_website.sitemap.default_host' => NULL,
            'sulu_website.admin.class' => 'Sulu\\Bundle\\WebsiteBundle\\Admin\\WebsiteAdmin',
            'sulu_website.navigation_mapper.class' => 'Sulu\\Bundle\\WebsiteBundle\\Navigation\\NavigationMapper',
            'sulu_website.sitemap.class' => 'Sulu\\Bundle\\WebsiteBundle\\Sitemap\\SitemapGenerator',
            'sulu_website.twig.content_path.class' => 'Sulu\\Bundle\\WebsiteBundle\\Twig\\Content\\ContentPathTwigExtension',
            'sulu_website.twig.navigation.class' => 'Sulu\\Bundle\\WebsiteBundle\\Twig\\Navigation\\NavigationTwigExtension',
            'sulu_website.twig.navigation.memoized.class' => 'Sulu\\Bundle\\WebsiteBundle\\Twig\\Navigation\\MemoizedNavigationTwigExtension',
            'sulu_website.twig.sitemap.class' => 'Sulu\\Bundle\\WebsiteBundle\\Twig\\Sitemap\\SitemapTwigExtension',
            'sulu_website.twig.sitemap.memoized.class' => 'Sulu\\Bundle\\WebsiteBundle\\Twig\\Sitemap\\MemoizedSitemapTwigExtension',
            'sulu_website.twig.content.class' => 'Sulu\\Bundle\\WebsiteBundle\\Twig\\Content\\ContentTwigExtension',
            'sulu_website.twig.content.memoized.class' => 'Sulu\\Bundle\\WebsiteBundle\\Twig\\Content\\MemoizedContentTwigExtension',
            'sulu_website.twig.Meta.class' => 'Sulu\\Bundle\\WebsiteBundle\\Twig\\Meta\\MetaTwigExtension',
            'sulu_website.twig.seo.class' => 'Sulu\\Bundle\\WebsiteBundle\\Twig\\Seo\\SeoTwigExtension',
            'sulu_website.twig.util.class' => 'Sulu\\Bundle\\WebsiteBundle\\Twig\\Core\\UtilTwigExtension',
            'sulu_website.routing.portal_loader.class' => 'Sulu\\Bundle\\WebsiteBundle\\Routing\\PortalLoader',
            'sulu_website.exception.controller.class' => 'Sulu\\Bundle\\WebsiteBundle\\Controller\\ExceptionController',
            'sulu_website.resolver.request_analyzer.class' => 'Sulu\\Bundle\\WebsiteBundle\\Resolver\\RequestAnalyzerResolver',
            'sulu_website.resolver.structure.class' => 'Sulu\\Bundle\\WebsiteBundle\\Resolver\\StructureResolver',
            'sulu_website.resolver.parameter.class' => 'Sulu\\Bundle\\WebsiteBundle\\Resolver\\ParameterResolver',
            'sulu_website.navigation_mapper.query_builder.class' => 'Sulu\\Bundle\\WebsiteBundle\\Navigation\\NavigationQueryBuilder',
            'sulu_website.sitemap.query_builder.class' => 'Sulu\\Bundle\\WebsiteBundle\\Sitemap\\SitemapContentQueryBuilder',
            'sulu_location.content.type.location.class' => 'Sulu\\Bundle\\LocationBundle\\Content\\Types\\LocationContentType',
            'sulu_location.admin.class' => 'Sulu\\Bundle\\LocationBundle\\Admin\\LocationAdmin',
            'sulu_location.map_manager.class' => 'Sulu\\Bundle\\LocationBundle\\Map\\MapManager',
            'sulu_location.guzzle.client.class' => 'GuzzleHttp\\Client',
            'sulu_location.geolocator.manager.class' => 'Sulu\\Bundle\\LocationBundle\\Geolocator\\GeolocatorManager',
            'sulu_location.geolocator.nominatim.class' => 'Sulu\\Bundle\\LocationBundle\\Geolocator\\Service\\NominatimGeolocator',
            'sulu_location.geolocator.google.class' => 'Sulu\\Bundle\\LocationBundle\\Geolocator\\Service\\GoogleGeolocator',
            'sulu.content.type.location.template' => 'SuluLocationBundle:Template:content-types/location.html.twig',
            'sulu_location.geolocator.name' => 'nominatim',
            'sulu_location.geolocator.service.nominatim.endpoint' => 'http://open.mapquestapi.com/nominatim/v1/search.php',
            'sulu_location.geolocator.service.google.api_key' => '',
            'sulu_http_cache.event_subscriber.flush_subscriber.class' => 'Sulu\\Component\\HttpCache\\EventSubscriber\\FlushSubscriber',
            'sulu_http_cache.event_subscriber.update_response_subscriber.class' => 'Sulu\\Component\\HttpCache\\EventSubscriber\\UpdateResponseSubscriber',
            'sulu_http_cache.proxy_client.varnish.class' => 'FOS\\HttpCache\\ProxyClient\\Varnish',
            'sulu_http_cache.proxy_client.symfony.class' => 'Sulu\\Component\\HttpCache\\ProxyClient\\Symfony',
            'sulu_http_cache.proxy_client.varnish.enabled' => false,
            'sulu_http_cache.proxy_client.varnish.servers' => array(

            ),
            'sulu_http_cache.proxy_client.varnish.base_url' => NULL,
            'sulu_http_cache.proxy_client.name' => 'symfony',
            'sulu_http_cache.handler.public.max_age' => 240,
            'sulu_http_cache.handler.public.shared_max_age' => 240,
            'sulu_http_cache.handler.public.use_page_ttl' => true,
            'sulu_http_cache.handler.aggregate.handlers' => array(
                0 => 'debug',
            ),
            'sulu_websocket.enabled' => false,
            'sulu_websocket.server.ip_address' => '0.0.0.0',
            'sulu_websocket.server.port' => 9876,
            'sulu_websocket.server.http_host' => 'sulu.lo',
            'sulu_websocket.manager.class' => 'Sulu\\Component\\Websocket\\RatchetAppManager',
            'sulu_websocket.admin.class' => 'Sulu\\Bundle\\WebsocketBundle\\Admin\\WebsocketAdmin',
            'sulu_websocket.jsconfig.class' => 'Sulu\\Bundle\\WebsocketBundle\\Admin\\AppJsConfig',
            'sulu_websocket.admin.message_dispatcher.app.class' => 'Sulu\\Component\\Websocket\\MessageDispatcher\\MessageDispatcherApp',
            'sulu_websocket.admin.message_dispatcher.app.cache.class' => 'Doctrine\\Common\\Cache\\FilesystemCache',
            'sulu_websocket.admin.message_dispatcher.class' => 'Sulu\\Component\\Websocket\\MessageDispatcher\\MessageDispatcher',
            'sulu_websocket.fallback_controller.class' => 'Sulu\\Bundle\\WebsocketBundle\\Controller\\FallbackController',
            'sulu_document_manager.mapping' => array(
                0 => array(
                    'alias' => 'custom_url',
                    'class' => 'Sulu\\Component\\CustomUrl\\Document\\CustomUrlDocument',
                    'phpcr_type' => 'sulu:custom_url',
                    'mapping' => array(
                        'published' => array(
                            'property' => 'published',
                            'encoding' => 'content',
                            'mapped' => true,
                            'multiple' => false,
                            'default' => NULL,
                        ),
                        'baseDomain' => array(
                            'property' => 'baseDomain',
                            'encoding' => 'content',
                            'mapped' => true,
                            'multiple' => false,
                            'default' => NULL,
                        ),
                        'domainParts' => array(
                            'property' => 'domainParts',
                            'type' => 'json_array',
                            'encoding' => 'content',
                            'mapped' => true,
                            'multiple' => false,
                            'default' => NULL,
                        ),
                        'canonical' => array(
                            'property' => 'canonical',
                            'encoding' => 'content',
                            'mapped' => true,
                            'multiple' => false,
                            'default' => NULL,
                        ),
                        'redirect' => array(
                            'property' => 'redirect',
                            'encoding' => 'content',
                            'mapped' => true,
                            'multiple' => false,
                            'default' => NULL,
                        ),
                        'targetLocale' => array(
                            'property' => 'targetLocale',
                            'encoding' => 'content',
                            'mapped' => true,
                            'multiple' => false,
                            'default' => NULL,
                        ),
                    ),
                ),
                1 => array(
                    'alias' => 'custom_url_route',
                    'class' => 'Sulu\\Component\\CustomUrl\\Document\\RouteDocument',
                    'phpcr_type' => 'sulu:custom_url_route',
                    'mapping' => array(
                        'locale' => array(
                            'property' => 'locale',
                            'encoding' => 'content',
                            'mapped' => true,
                            'multiple' => false,
                            'default' => NULL,
                        ),
                    ),
                ),
                2 => array(
                    'alias' => 'page',
                    'class' => 'Sulu\\Bundle\\ContentBundle\\Document\\PageDocument',
                    'phpcr_type' => 'sulu:page',
                    'form_type' => 'Sulu\\Bundle\\ContentBundle\\Form\\Type\\PageDocumentType',
                    'set_default_author' => true,
                    'mapping' => array(

                    ),
                ),
                3 => array(
                    'alias' => 'home',
                    'class' => 'Sulu\\Bundle\\ContentBundle\\Document\\HomeDocument',
                    'phpcr_type' => 'sulu:home',
                    'form_type' => 'Sulu\\Bundle\\ContentBundle\\Form\\Type\\HomeDocumentType',
                    'set_default_author' => true,
                    'mapping' => array(

                    ),
                ),
                4 => array(
                    'alias' => 'route',
                    'class' => 'Sulu\\Bundle\\ContentBundle\\Document\\RouteDocument',
                    'phpcr_type' => 'sulu:path',
                    'mapping' => array(

                    ),
                ),
                5 => array(
                    'alias' => 'snippet',
                    'class' => 'Sulu\\Bundle\\SnippetBundle\\Document\\SnippetDocument',
                    'phpcr_type' => 'sulu:snippet',
                    'form_type' => 'Sulu\\Bundle\\SnippetBundle\\Form\\SnippetType',
                    'mapping' => array(

                    ),
                ),
            ),
            'sulu_document_manager.namespace_mapping' => array(
                'extension_localized' => 'i18n',
                'system' => 'sulu',
                'system_localized' => 'i18n',
                'content' => NULL,
                'content_localized' => 'i18n',
            ),
            'sulu_document_manager.versioning.enabled' => false,
            'sulu_document_manager.show_drafts' => true,
            'sulu_document_manager.segments' => array(
                'custom_urls' => 'custom-urls',
                'custom_urls_items' => 'items',
                'custom_urls_routes' => 'routes',
                'base' => 'cmf',
                'content' => 'contents',
                'route' => 'routes',
                'snippet' => 'snippets',
            ),
            'sulu_custom_urls.uri_filter_regexp' => NULL,
            'sulu_route.mappings' => array(

            ),
            'sulu_route.content_types.route.template' => 'SuluRouteBundle:Template:content-types/route.html.twig',
            'sulu_route.routing.uri_filter_regexp' => NULL,
            'sulu.model.route.class' => 'Sulu\\Bundle\\RouteBundle\\Entity\\Route',
            'sulu.repository.route.class' => 'Sulu\\Bundle\\RouteBundle\\Entity\\RouteRepository',
            'phpcr_migrations.version_node_name' => 'jcr:versions',
            'dubture_ffmpeg.binary' => '/usr/local/bin/ffmpeg',
            'dubture_ffprobe.binary' => '/usr/local/bin/ffprobe',
            'dubture_ffmpeg.binary_timeout' => 300,
            'dubture_ffmpeg.threads_count' => 4,
            'massive_build.command.build.class' => 'Sulu\\Bundle\\CoreBundle\\CommandOptional\\SuluBuildCommand',
            'massive_build.build.registry.class' => 'Massive\\Bundle\\BuildBundle\\Build\\BuildRegistry',
            'web_profiler.debug_toolbar.position' => 'bottom',
            'web_profiler.debug_toolbar.intercept_redirects' => false,
            'web_profiler.debug_toolbar.mode' => 2,
            'security.authentication.trust_resolver.anonymous_class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken',
            'security.authentication.trust_resolver.rememberme_class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken',
            'security.role_hierarchy.roles' => array(

            ),
            'security.access.denied_url' => NULL,
            'security.authentication.manager.erase_credentials' => true,
            'security.authentication.session_strategy.strategy' => 'migrate',
            'security.access.always_authenticate_before_granting' => false,
            'security.authentication.hide_user_not_found' => true,
            'sulu_admin.user_data_service' => 'sulu_security.user_manager',
            'sulu_admin.widget_groups' => array(

            ),
            'sulu_admin.admin_controller.class' => 'Sulu\\Bundle\\AdminBundle\\Controller\\AdminController',
            'sulu_admin.admin_pool.class' => 'Sulu\\Bundle\\AdminBundle\\Admin\\AdminPool',
            'sulu_admin.content_navigation_registry.class' => 'Sulu\\Bundle\\AdminBundle\\Navigation\\ContentNavigationRegistry',
            'sulu_admin.js_config_pool.class' => 'Sulu\\Bundle\\AdminBundle\\Admin\\JsConfigPool',
            'sulu_admin.widgets_handler.class' => 'Sulu\\Bundle\\AdminBundle\\Widgets\\WidgetsHandler',
            'sulu_admin.js_config.class' => 'Sulu\\Bundle\\AdminBundle\\Admin\\JsConfig',
            'sulu_admin.content_navigation_controller.class' => 'Sulu\\Bundle\\AdminBundle\\Controller\\ContentNavigationController',
            'sulu_collaboration.interval' => 300000,
            'sulu_collaboration.threshold' => 10000,
            'sulu_preview.mode' => 'auto',
            'sulu_preview.delay' => 500,
            'sulu_preview.defaults.analytics_key' => 'UA-SULU-PREVIEW-KEY',
            'sulu_preview.events.pre-render' => 'sulu.preview.pre-render',
            'data_collector.templates' => array(
                'data_collector.request' => array(
                    0 => 'request',
                    1 => '@WebProfiler/Collector/request.html.twig',
                ),
                'data_collector.time' => array(
                    0 => 'time',
                    1 => '@WebProfiler/Collector/time.html.twig',
                ),
                'data_collector.memory' => array(
                    0 => 'memory',
                    1 => '@WebProfiler/Collector/memory.html.twig',
                ),
                'data_collector.validator' => array(
                    0 => 'validator',
                    1 => '@WebProfiler/Collector/validator.html.twig',
                ),
                'data_collector.ajax' => array(
                    0 => 'ajax',
                    1 => '@WebProfiler/Collector/ajax.html.twig',
                ),
                'data_collector.form' => array(
                    0 => 'form',
                    1 => '@WebProfiler/Collector/form.html.twig',
                ),
                'data_collector.exception' => array(
                    0 => 'exception',
                    1 => '@WebProfiler/Collector/exception.html.twig',
                ),
                'data_collector.logger' => array(
                    0 => 'logger',
                    1 => '@WebProfiler/Collector/logger.html.twig',
                ),
                'data_collector.events' => array(
                    0 => 'events',
                    1 => '@WebProfiler/Collector/events.html.twig',
                ),
                'data_collector.router' => array(
                    0 => 'router',
                    1 => '@WebProfiler/Collector/router.html.twig',
                ),
                'data_collector.cache' => array(
                    0 => 'cache',
                    1 => '@WebProfiler/Collector/cache.html.twig',
                ),
                'data_collector.translation' => array(
                    0 => 'translation',
                    1 => '@WebProfiler/Collector/translation.html.twig',
                ),
                'data_collector.security' => array(
                    0 => 'security',
                    1 => '@Security/Collector/security.html.twig',
                ),
                'data_collector.twig' => array(
                    0 => 'twig',
                    1 => '@WebProfiler/Collector/twig.html.twig',
                ),
                'data_collector.doctrine' => array(
                    0 => 'db',
                    1 => '@Doctrine/Collector/db.html.twig',
                ),
                'doctrine_phpcr.data_collector' => array(
                    0 => 'phpcr',
                    1 => 'DoctrinePHPCRBundle:Collector:phpcr',
                ),
                'swiftmailer.data_collector' => array(
                    0 => 'swiftmailer',
                    1 => '@Swiftmailer/Collector/swiftmailer.html.twig',
                ),
                'data_collector.dump' => array(
                    0 => 'dump',
                    1 => '@Debug/Profiler/dump.html.twig',
                ),
                'data_collector.config' => array(
                    0 => 'config',
                    1 => '@WebProfiler/Collector/config.html.twig',
                ),
            ),
            'doctrine_phpcr.migrate.migrators' => array(

            ),
            'sulu_media.image.formats' => array(
                'sulu-400x400' => array(
                    'key' => 'sulu-400x400',
                    'internal' => true,
                    'meta' => array(
                        'title' => array(
                            'en' => 'Contact avatar (Sulu)',
                            'de' => 'Kontaktavatar (Sulu)',
                            'fr' => 'Avatar du contact (Sulu)',
                            'nl' => 'Contact avatar (Sulu)',
                        ),
                    ),
                    'scale' => array(
                        'x' => 400,
                        'y' => 400,
                        'mode' => 'outbound',
                        'retina' => false,
                        'forceRatio' => true,
                    ),
                    'transformations' => array(

                    ),
                    'options' => array(

                    ),
                ),
                'sulu-400x400-inset' => array(
                    'key' => 'sulu-400x400-inset',
                    'internal' => true,
                    'meta' => array(
                        'title' => array(
                            'en' => 'Organization logo (Sulu)',
                            'de' => 'Organisationslogo (Sulu)',
                            'fr' => 'Logo d\'organisation (Sulu)',
                            'nl' => 'Organisatie logo (Sulu)',
                        ),
                    ),
                    'scale' => array(
                        'x' => 400,
                        'y' => 400,
                        'mode' => 'inset',
                        'retina' => false,
                        'forceRatio' => true,
                    ),
                    'transformations' => array(

                    ),
                    'options' => array(

                    ),
                ),
                'sulu-260x' => array(
                    'key' => 'sulu-260x',
                    'internal' => true,
                    'meta' => array(
                        'title' => array(
                            'en' => 'Masonry preview (Sulu)',
                            'de' => 'Masonry Vorschau (Sulu)',
                            'fr' => 'Prévisualisation maçonnerie (Sulu)',
                            'nl' => 'Masonry voorbeeld (Sulu)',
                        ),
                    ),
                    'scale' => array(
                        'x' => 260,
                        'y' => NULL,
                        'mode' => 'outbound',
                        'retina' => false,
                        'forceRatio' => true,
                    ),
                    'transformations' => array(

                    ),
                    'options' => array(

                    ),
                ),
                'sulu-170x170' => array(
                    'key' => 'sulu-170x170',
                    'internal' => true,
                    'meta' => array(
                        'title' => array(
                            'en' => 'Search (Sulu)',
                            'de' => 'Suche (Sulu)',
                            'fr' => 'Recherche (Sulu)',
                            'nl' => 'Zoeken (Sulu)',
                        ),
                    ),
                    'scale' => array(
                        'x' => 170,
                        'y' => 170,
                        'mode' => 'outbound',
                        'retina' => false,
                        'forceRatio' => true,
                    ),
                    'transformations' => array(

                    ),
                    'options' => array(

                    ),
                ),
                'sulu-100x100' => array(
                    'key' => 'sulu-100x100',
                    'internal' => true,
                    'meta' => array(
                        'title' => array(
                            'en' => 'Contact card (Sulu)',
                            'de' => 'Personenkarte (Sulu)',
                            'fr' => 'Carte personnelle (Sulu)',
                            'nl' => 'Contact kaart (Sulu)',
                        ),
                    ),
                    'scale' => array(
                        'x' => 100,
                        'y' => 100,
                        'mode' => 'outbound',
                        'retina' => false,
                        'forceRatio' => true,
                    ),
                    'transformations' => array(

                    ),
                    'options' => array(

                    ),
                ),
                'sulu-100x100-inset' => array(
                    'key' => 'sulu-100x100-inset',
                    'internal' => true,
                    'meta' => array(
                        'title' => array(
                            'en' => 'Organization card (Sulu)',
                            'de' => 'Organisationskarte (Sulu)',
                            'fr' => 'Carte d\'organisation (Sulu)',
                            'nl' => 'Organisatie kaart (Sulu)',
                        ),
                    ),
                    'scale' => array(
                        'x' => 100,
                        'y' => 100,
                        'mode' => 'inset',
                        'retina' => false,
                        'forceRatio' => true,
                    ),
                    'transformations' => array(

                    ),
                    'options' => array(

                    ),
                ),
                'sulu-50x50' => array(
                    'key' => 'sulu-50x50',
                    'internal' => true,
                    'meta' => array(
                        'title' => array(
                            'en' => 'Small thumbnail (Sulu)',
                            'de' => 'Kleines Thumbnail (Sulu)',
                            'fr' => 'Image miniature (Sulu)',
                            'nl' => 'Kleine thumbnail (Sulu)',
                        ),
                    ),
                    'scale' => array(
                        'x' => 50,
                        'y' => 50,
                        'mode' => 'outbound',
                        'retina' => false,
                        'forceRatio' => true,
                    ),
                    'transformations' => array(

                    ),
                    'options' => array(

                    ),
                ),
            ),
            'sulu_category.entity.category' => 'Sulu\\Bundle\\CategoryBundle\\Entity\\Category',
            'sulu_category.entity.keyword' => 'Sulu\\Bundle\\CategoryBundle\\Entity\\Keyword',
            'sulu_snippet.areas' => array(
                'default' => array(
                    'key' => 'default',
                    'template' => 'default',
                    'title' => array(
                        'de' => 'Standard',
                        'en' => 'Default',
                        'fr' => 'Default',
                        'nl' => 'Default',
                    ),
                ),
            ),
            'sulu.version' => '1.6.19',
            'app.version' => NULL,
            'console.command.ids' => array(
                'console.command.symfony_bundle_frameworkbundle_command_aboutcommand' => 'console.command.about',
                'console.command.symfony_bundle_frameworkbundle_command_assetsinstallcommand' => 'console.command.assets_install',
                'console.command.symfony_bundle_frameworkbundle_command_cacheclearcommand' => 'console.command.cache_clear',
                'console.command.symfony_bundle_frameworkbundle_command_cachepoolclearcommand' => 'console.command.cache_pool_clear',
                'console.command.symfony_bundle_frameworkbundle_command_cachepoolprunecommand' => 'console.command.cache_pool_prune',
                'console.command.symfony_bundle_frameworkbundle_command_cachewarmupcommand' => 'console.command.cache_warmup',
                'console.command.symfony_bundle_frameworkbundle_command_configdebugcommand' => 'console.command.config_debug',
                'console.command.symfony_bundle_frameworkbundle_command_configdumpreferencecommand' => 'console.command.config_dump_reference',
                'console.command.symfony_bundle_frameworkbundle_command_containerdebugcommand' => 'console.command.container_debug',
                'console.command.symfony_bundle_frameworkbundle_command_debugautowiringcommand' => 'console.command.debug_autowiring',
                'console.command.symfony_bundle_frameworkbundle_command_eventdispatcherdebugcommand' => 'console.command.event_dispatcher_debug',
                'console.command.symfony_bundle_frameworkbundle_command_routerdebugcommand' => 'console.command.router_debug',
                'console.command.symfony_bundle_frameworkbundle_command_routermatchcommand' => 'console.command.router_match',
                'console.command.symfony_bundle_frameworkbundle_command_translationdebugcommand' => 'console.command.translation_debug',
                'console.command.symfony_bundle_frameworkbundle_command_translationupdatecommand' => 'console.command.translation_update',
                'console.command.symfony_bundle_frameworkbundle_command_xlifflintcommand' => 'console.command.xliff_lint',
                'console.command.symfony_bundle_frameworkbundle_command_yamllintcommand' => 'console.command.yaml_lint',
                'console.command.symfony_component_form_command_debugcommand' => 'console.command.form_debug',
                'console.command.symfony_bridge_twig_command_debugcommand' => 'twig.command.debug',
                'console.command.symfony_bundle_twigbundle_command_lintcommand' => 'twig.command.lint',
                'console.command.doctrine_bundle_doctrinecachebundle_command_containscommand' => 'console.command.doctrine_bundle_doctrinecachebundle_command_containscommand',
                'console.command.doctrine_bundle_doctrinecachebundle_command_deletecommand' => 'console.command.doctrine_bundle_doctrinecachebundle_command_deletecommand',
                'console.command.doctrine_bundle_doctrinecachebundle_command_flushcommand' => 'console.command.doctrine_bundle_doctrinecachebundle_command_flushcommand',
                'console.command.doctrine_bundle_doctrinecachebundle_command_statscommand' => 'console.command.doctrine_bundle_doctrinecachebundle_command_statscommand',
                'console.command.doctrine_bundle_doctrinebundle_command_createdatabasedoctrinecommand' => 'doctrine.database_create_command',
                'console.command.doctrine_bundle_doctrinebundle_command_dropdatabasedoctrinecommand' => 'doctrine.database_drop_command',
                'console.command.doctrine_bundle_doctrinebundle_command_generateentitiesdoctrinecommand' => 'doctrine.generate_entities_command',
                'console.command.doctrine_bundle_doctrinebundle_command_importmappingdoctrinecommand' => 'doctrine.mapping_import_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_clearmetadatacachedoctrinecommand' => 'doctrine.cache_clear_metadata_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_clearquerycachedoctrinecommand' => 'doctrine.cache_clear_query_cache_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_clearresultcachedoctrinecommand' => 'doctrine.cache_clear_result_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_collectionregiondoctrinecommand' => 'doctrine.cache_collection_region_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_convertmappingdoctrinecommand' => 'doctrine.mapping_convert_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_createschemadoctrinecommand' => 'doctrine.schema_create_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_dropschemadoctrinecommand' => 'doctrine.schema_drop_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_ensureproductionsettingsdoctrinecommand' => 'doctrine.ensure_production_settings_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_entityregioncachedoctrinecommand' => 'doctrine.clear_entity_region_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_importdoctrinecommand' => 'doctrine.database_import_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_infodoctrinecommand' => 'doctrine.mapping_info_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_queryregioncachedoctrinecommand' => 'doctrine.clear_query_region_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_rundqldoctrinecommand' => 'doctrine.query_dql_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_runsqldoctrinecommand' => 'doctrine.query_sql_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_updateschemadoctrinecommand' => 'doctrine.schema_update_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_validateschemacommand' => 'doctrine.schema_validate_command',
                'console.command.doctrine_bundle_fixturesbundle_command_loaddatafixturesdoctrinecommand' => 'doctrine.fixtures_load_command',
                'console.command.massive_bundle_searchbundle_command_initcommand' => 'console.command.massive_bundle_searchbundle_command_initcommand',
                'console.command.massive_bundle_searchbundle_command_statuscommand' => 'console.command.massive_bundle_searchbundle_command_statuscommand',
                'console.command.massive_bundle_searchbundle_command_querycommand' => 'console.command.massive_bundle_searchbundle_command_querycommand',
                'console.command.massive_bundle_searchbundle_command_reindexcommand' => 'console.command.massive_bundle_searchbundle_command_reindexcommand',
                'console.command.massive_bundle_searchbundle_command_indexrebuildcommand' => 'console.command.massive_bundle_searchbundle_command_indexrebuildcommand',
                'console.command.massive_bundle_searchbundle_command_purgecommand' => 'console.command.massive_bundle_searchbundle_command_purgecommand',
                'console.command.sulu_bundle_contentbundle_command_maintainresourcelocatorcommand' => 'console.command.sulu_bundle_contentbundle_command_maintainresourcelocatorcommand',
                'console.command.sulu_bundle_contentbundle_command_cleanuphistorycommand' => 'console.command.sulu_bundle_contentbundle_command_cleanuphistorycommand',
                'console.command.sulu_bundle_documentmanagerbundle_command_fixturesloadcommand' => 'console.command.sulu_bundle_documentmanagerbundle_command_fixturesloadcommand',
                'console.command.sulu_bundle_documentmanagerbundle_command_initializecommand' => 'console.command.sulu_bundle_documentmanagerbundle_command_initializecommand',
                'console.command.dtl_bundle_phpcrmigrations_command_statuscommand' => 'console.command.dtl_bundle_phpcrmigrations_command_statuscommand',
                'console.command.dtl_bundle_phpcrmigrations_command_migratecommand' => 'console.command.dtl_bundle_phpcrmigrations_command_migratecommand',
                'console.command.dtl_bundle_phpcrmigrations_command_initializecommand' => 'console.command.dtl_bundle_phpcrmigrations_command_initializecommand',
                'console.command.sulu_bundle_corebundle_commandoptional_sulubuildcommand' => 'console.command.sulu_bundle_corebundle_commandoptional_sulubuildcommand',
                'console.command.sensiolabs_security_command_securitycheckercommand' => 'sensio_distribution.security_checker.command',
                'console.command.symfony_bundle_webserverbundle_command_serverruncommand' => 'web_server.command.server_run',
                'console.command.symfony_bundle_webserverbundle_command_serverstartcommand' => 'web_server.command.server_start',
                'console.command.symfony_bundle_webserverbundle_command_serverstopcommand' => 'web_server.command.server_stop',
                'console.command.symfony_bundle_webserverbundle_command_serverstatuscommand' => 'web_server.command.server_status',
                'console.command.symfony_bundle_webserverbundle_command_serverlogcommand' => 'web_server.command.server_log',
                'console.command.symfony_bundle_securitybundle_command_userpasswordencodercommand' => 'security.command.user_password_encoder',
            ),
            'console.lazy_command.ids' => array(
                'console.command.about' => true,
                'console.command.assets_install' => true,
                'console.command.cache_clear' => true,
                'console.command.cache_pool_clear' => true,
                'console.command.cache_pool_prune' => true,
                'console.command.cache_warmup' => true,
                'console.command.config_debug' => true,
                'console.command.config_dump_reference' => true,
                'console.command.container_debug' => true,
                'console.command.debug_autowiring' => true,
                'console.command.event_dispatcher_debug' => true,
                'console.command.router_debug' => true,
                'console.command.router_match' => true,
                'console.command.translation_debug' => true,
                'console.command.translation_update' => true,
                'console.command.xliff_lint' => true,
                'console.command.yaml_lint' => true,
                'console.command.form_debug' => true,
                'twig.command.debug' => true,
                'twig.command.lint' => true,
                'doctrine.database_create_command' => true,
                'doctrine.database_drop_command' => true,
                'doctrine.generate_entities_command' => true,
                'doctrine.mapping_import_command' => true,
                'doctrine.cache_clear_metadata_command' => true,
                'doctrine.cache_clear_query_cache_command' => true,
                'doctrine.cache_clear_result_command' => true,
                'doctrine.cache_collection_region_command' => true,
                'doctrine.mapping_convert_command' => true,
                'doctrine.schema_create_command' => true,
                'doctrine.schema_drop_command' => true,
                'doctrine.ensure_production_settings_command' => true,
                'doctrine.clear_entity_region_command' => true,
                'doctrine.database_import_command' => true,
                'doctrine.mapping_info_command' => true,
                'doctrine.clear_query_region_command' => true,
                'doctrine.query_dql_command' => true,
                'doctrine.query_sql_command' => true,
                'doctrine.schema_update_command' => true,
                'doctrine.schema_validate_command' => true,
                'doctrine.fixtures_load_command' => true,
                'sensio_distribution.security_checker.command' => true,
                'web_server.command.server_run' => true,
                'web_server.command.server_start' => true,
                'web_server.command.server_stop' => true,
                'web_server.command.server_status' => true,
                'web_server.command.server_log' => true,
                'security.command.user_password_encoder' => true,
            ),
        );
    }
}
