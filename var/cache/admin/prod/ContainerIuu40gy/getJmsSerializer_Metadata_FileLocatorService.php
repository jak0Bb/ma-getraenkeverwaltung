<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'jms_serializer.metadata.file_locator' shared service.

return $this->services['jms_serializer.metadata.file_locator'] = new \Metadata\Driver\FileLocator(array('Symfony\\Bundle\\FrameworkBundle' => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle/Resources/config/serializer'), 'Symfony\\Bundle\\TwigBundle' => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/config/serializer'), 'Symfony\\Bundle\\MonologBundle' => ($this->targetDirs[4].'\\vendor\\symfony\\monolog-bundle/Resources/config/serializer'), 'Symfony\\Bundle\\SwiftmailerBundle' => ($this->targetDirs[4].'\\vendor\\symfony\\swiftmailer-bundle/Resources/config/serializer'), 'Sensio\\Bundle\\FrameworkExtraBundle' => ($this->targetDirs[4].'\\vendor\\sensio\\framework-extra-bundle/Resources/config/serializer'), 'Sulu\\Bundle\\CoreBundle' => ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\CoreBundle/Resources/config/serializer'), 'Doctrine\\Bundle\\DoctrineBundle' => ($this->targetDirs[4].'\\vendor\\doctrine\\doctrine-bundle/Resources/config/serializer'), 'Doctrine\\Bundle\\DoctrineCacheBundle' => ($this->targetDirs[4].'\\vendor\\doctrine\\doctrine-cache-bundle/Resources/config/serializer'), 'Doctrine\\Bundle\\FixturesBundle' => ($this->targetDirs[4].'\\vendor\\doctrine\\doctrine-fixtures-bundle/Resources/config/serializer'), 'Doctrine\\Bundle\\PHPCRBundle' => ($this->targetDirs[4].'\\vendor\\doctrine\\phpcr-bundle/Resources/config/serializer'), 'Stof\\DoctrineExtensionsBundle' => ($this->targetDirs[4].'\\vendor\\stof\\doctrine-extensions-bundle/Resources/config/serializer'), 'FOS\\RestBundle' => ($this->targetDirs[4].'\\vendor\\friendsofsymfony\\rest-bundle\\FOS\\RestBundle/Resources/config/serializer'), 'JMS\\SerializerBundle' => ($this->targetDirs[4].'\\vendor\\jms\\serializer-bundle\\JMS\\SerializerBundle/Resources/config/serializer'), 'Bazinga\\Bundle\\HateoasBundle' => ($this->targetDirs[4].'\\vendor\\willdurand\\hateoas-bundle/Resources/config/serializer'), 'Massive\\Bundle\\SearchBundle' => ($this->targetDirs[4].'\\vendor\\massive\\search-bundle/Resources/config/serializer'), 'Sulu\\Bundle\\SearchBundle' => ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\SearchBundle/Resources/config/serializer'), 'Sulu\\Bundle\\PersistenceBundle' => ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\PersistenceBundle/Resources/config/serializer'), 'Sulu\\Bundle\\ContactBundle' => ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\ContactBundle/Resources/config/serializer'), 'Sulu\\Bundle\\MediaBundle' => ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\MediaBundle/Resources/config/serializer'), 'Sulu\\Bundle\\SecurityBundle' => ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\SecurityBundle/Resources/config/serializer'), 'Sulu\\Bundle\\CategoryBundle' => ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\CategoryBundle/Resources/config/serializer'), 'Sulu\\Bundle\\SnippetBundle' => ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\SnippetBundle/Resources/config/serializer'), 'Sulu\\Bundle\\ContentBundle' => 'C:/Users/Lorenz/Desktop/MASSIVEART/ma-getraenkeverwaltung/vendor/sulu/sulu/src/Sulu/Bundle/ContentBundle/DependencyInjection/../Resources/config/serializer', 'Sulu\\Bundle\\TagBundle' => ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\TagBundle/Resources/config/serializer'), 'Sulu\\Bundle\\WebsiteBundle' => ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\WebsiteBundle/Resources/config/serializer'), 'Sulu\\Bundle\\LocationBundle' => ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\LocationBundle/Resources/config/serializer'), 'Sulu\\Bundle\\HttpCacheBundle' => ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\HttpCacheBundle/Resources/config/serializer'), 'Sulu\\Bundle\\WebsocketBundle' => ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\WebsocketBundle/Resources/config/serializer'), 'Sulu\\Bundle\\TranslateBundle' => ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\TranslateBundle/Resources/config/serializer'), 'Sulu\\Bundle\\DocumentManagerBundle' => ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\DocumentManagerBundle/Resources/config/serializer'), 'Sulu\\Bundle\\HashBundle' => ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\HashBundle/Resources/config/serializer'), 'Sulu\\Bundle\\CustomUrlBundle' => ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\CustomUrlBundle/Resources/config/serializer'), 'Sulu\\Bundle\\RouteBundle' => ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\RouteBundle/Resources/config/serializer'), 'Sulu\\Bundle\\MarkupBundle' => ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\MarkupBundle/Resources/config/serializer'), 'DTL\\Bundle\\PhpcrMigrations' => ($this->targetDirs[4].'\\vendor\\dantleech\\phpcr-migrations-bundle/Resources/config/serializer'), 'Dubture\\FFmpegBundle' => ($this->targetDirs[4].'\\vendor\\pulse00\\ffmpeg-bundle/Resources/config/serializer'), 'Massive\\Bundle\\BuildBundle' => ($this->targetDirs[4].'\\vendor\\massive\\build-bundle/Resources/config/serializer'), 'Symfony\\Bundle\\SecurityBundle' => ($this->targetDirs[4].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\SecurityBundle/Resources/config/serializer'), 'Sulu\\Bundle\\AdminBundle' => ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\AdminBundle/Resources/config/serializer'), 'Sulu\\Bundle\\CollaborationBundle' => ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\CollaborationBundle/Resources/config/serializer'), 'Sulu\\Bundle\\PreviewBundle' => ($this->targetDirs[4].'\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\PreviewBundle/Resources/config/serializer'), 'Sulu\\Component\\CustomUrl' => 'C:/Users/Lorenz/Desktop/MASSIVEART/ma-getraenkeverwaltung/vendor/sulu/sulu/src/Sulu/Bundle/CustomUrlBundle/DependencyInjection/../Resources/config/serializer', 'Sulu\\Component\\DocumentManager' => 'C:/Users/Lorenz/Desktop/MASSIVEART/ma-getraenkeverwaltung/vendor/sulu/sulu/src/Sulu/Bundle/DocumentManagerBundle/DependencyInjection/../Resources/config/serializer', 'Sulu\\Component\\Content' => 'C:/Users/Lorenz/Desktop/MASSIVEART/ma-getraenkeverwaltung/vendor/sulu/sulu/src/Sulu/Bundle/ContentBundle/DependencyInjection/../Resources/config/serializer', 'Sulu\\Component\\Webspace' => 'C:/Users/Lorenz/Desktop/MASSIVEART/ma-getraenkeverwaltung/vendor/sulu/sulu/src/Sulu/Bundle/ContentBundle/DependencyInjection/../Resources/config/serializer', 'Sulu\\Bundle\\CategoryBundle\\Entity' => 'C:/Users/Lorenz/Desktop/MASSIVEART/ma-getraenkeverwaltung/vendor/sulu/sulu/src/Sulu/Bundle/CategoryBundle/DependencyInjection/../Resources/config/serializer', 'Massive\\Bundle\\SearchBundle\\Search' => 'C:/Users/Lorenz/Desktop/MASSIVEART/ma-getraenkeverwaltung/vendor/sulu/sulu/src/Sulu/Bundle/SearchBundle/Resources/config/serializer/massive', 'Sulu\\Bundle\\SearchBundle\\Search' => 'C:/Users/Lorenz/Desktop/MASSIVEART/ma-getraenkeverwaltung/vendor/sulu/sulu/src/Sulu/Bundle/SearchBundle/Resources/config/serializer/sulu'));
