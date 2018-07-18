<?php

/* SuluWebsiteBundle:Extension:seo.html.twig */
class __TwigTemplate_0e74bdc59cc90c5e8eac26232c40fd6f4e8837917d6a359ab46c3dd6c44a6e92 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'description' => array($this, 'block_description'),
            'keywords' => array($this, 'block_keywords'),
            'robots' => array($this, 'block_robots'),
            'urls' => array($this, 'block_urls'),
            'canonical' => array($this, 'block_canonical'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 10
        $context["seo"] = twig_array_merge((((isset($context["seo"]) || array_key_exists("seo", $context))) ? (_twig_default_filter(($context["seo"] ?? null), array())) : (array())), ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array(), "any", false, true), "attributes", array(), "any", false, true), "get", array(0 => "_seo", 1 => array()), "method", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array(), "any", false, true), "attributes", array(), "any", false, true), "get", array(0 => "_seo", 1 => array()), "method"), array())) : (array())));
        // line 13
        $context["seoTitle"] = ((twig_get_attribute($this->env, $this->source, ($context["seo"] ?? null), "title", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["seo"] ?? null), "title", array()), ((twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "title", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "title", array()))) : ("")))) : (((twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "title", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "title", array()))) : (""))));
        // line 14
        $context["seoDescription"] = ((twig_get_attribute($this->env, $this->source, ($context["seo"] ?? null), "description", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["seo"] ?? null), "description", array()))) : (""));
        // line 15
        $context["seoKeywords"] = ((twig_get_attribute($this->env, $this->source, ($context["seo"] ?? null), "keywords", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["seo"] ?? null), "keywords", array()))) : (""));
        // line 16
        echo "
";
        // line 17
        $context["seoRobots"] = "";
        // line 18
        if (((twig_get_attribute($this->env, $this->source, ($context["seo"] ?? null), "noIndex", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["seo"] ?? null), "noIndex", array()), false)) : (false))) {
            // line 19
            $context["seoRobots"] = (($context["seoRobots"] ?? null) . "noIndex");
        } else {
            // line 21
            $context["seoRobots"] = (($context["seoRobots"] ?? null) . "index");
        }
        // line 23
        if (((twig_get_attribute($this->env, $this->source, ($context["seo"] ?? null), "noFollow", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["seo"] ?? null), "noFollow", array()), false)) : (false))) {
            // line 24
            $context["seoRobots"] = (($context["seoRobots"] ?? null) . ",noFollow");
        } else {
            // line 26
            $context["seoRobots"] = (($context["seoRobots"] ?? null) . ",follow");
        }
        // line 29
        $context["seoCanonical"] = ((twig_get_attribute($this->env, $this->source, ($context["seo"] ?? null), "canonicalUrl", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["seo"] ?? null), "canonicalUrl", array()))) : (""));
        // line 31
        if ((( !($context["seoCanonical"] ?? null) && ($context["shadowBaseLocale"] ?? null)) && ((twig_get_attribute($this->env, $this->source, ($context["urls"] ?? null), ($context["shadowBaseLocale"] ?? null), array(), "array", true, true)) ? (_twig_default_filter((($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = ($context["urls"] ?? null)) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5[($context["shadowBaseLocale"] ?? null)] ?? null) : null))) : ("")))) {
            // line 32
            echo "    ";
            $context["seoCanonical"] = $this->extensions['Sulu\Bundle\WebsiteBundle\Twig\Content\ContentPathTwigExtension']->getContentPath((($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = ($context["urls"] ?? null)) && is_array($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a) || $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a instanceof ArrayAccess ? ($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a[($context["shadowBaseLocale"] ?? null)] ?? null) : null), null, ($context["shadowBaseLocale"] ?? null));
        }
        // line 37
        $this->displayBlock('title', $context, $blocks);
        // line 43
        $this->displayBlock('description', $context, $blocks);
        // line 49
        $this->displayBlock('keywords', $context, $blocks);
        // line 55
        $this->displayBlock('robots', $context, $blocks);
        // line 61
        $this->displayBlock('urls', $context, $blocks);
        // line 73
        $this->displayBlock('canonical', $context, $blocks);
    }

    // line 37
    public function block_title($context, array $blocks = array())
    {
        // line 38
        if (($context["seoTitle"] ?? null)) {
            // line 39
            echo "<title>";
            echo twig_escape_filter($this->env, ($context["seoTitle"] ?? null), "html", null, true);
            echo "</title>";
        }
    }

    // line 43
    public function block_description($context, array $blocks = array())
    {
        // line 44
        if (($context["seoDescription"] ?? null)) {
            // line 45
            echo "<meta name=\"description\" content=\"";
            echo twig_escape_filter($this->env, ($context["seoDescription"] ?? null), "html", null, true);
            echo "\"/>";
        }
    }

    // line 49
    public function block_keywords($context, array $blocks = array())
    {
        // line 50
        if (($context["seoKeywords"] ?? null)) {
            // line 51
            echo "<meta name=\"keywords\" content=\"";
            echo twig_escape_filter($this->env, ($context["seoKeywords"] ?? null), "html", null, true);
            echo "\"/>";
        }
    }

    // line 55
    public function block_robots($context, array $blocks = array())
    {
        // line 56
        if (($context["seoRobots"] ?? null)) {
            // line 57
            echo "<meta name=\"robots\" content=\"";
            echo twig_escape_filter($this->env, ($context["seoRobots"] ?? null), "html", null, true);
            echo "\"/>";
        }
    }

    // line 61
    public function block_urls($context, array $blocks = array())
    {
        // line 63
        if ((twig_length_filter($this->env, ($context["urls"] ?? null)) > 1)) {
            // line 64
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["urls"] ?? null));
            foreach ($context['_seq'] as $context["locale"] => $context["url"]) {
                // line 65
                if ((($context["defaultLocale"] ?? null) == $context["locale"])) {
                    // line 66
                    echo "<link rel=\"alternate\" href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Sulu\Bundle\WebsiteBundle\Twig\Content\ContentPathTwigExtension']->getContentPath($context["url"], null, $context["locale"]), "html", null, true);
                    echo "\" hreflang=\"x-default\"/>";
                }
                // line 68
                echo "<link rel=\"alternate\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Sulu\Bundle\WebsiteBundle\Twig\Content\ContentPathTwigExtension']->getContentPath($context["url"], null, $context["locale"]), "html", null, true);
                echo "\" hreflang=\"";
                echo twig_escape_filter($this->env, twig_replace_filter($context["locale"], array("_" => "-")), "html", null, true);
                echo "\"/>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['locale'], $context['url'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    // line 73
    public function block_canonical($context, array $blocks = array())
    {
        // line 75
        echo "<link rel=\"canonical\" href=\"";
        echo twig_escape_filter($this->env, (((isset($context["seoCanonical"]) || array_key_exists("seoCanonical", $context))) ? (_twig_default_filter(($context["seoCanonical"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "uri", array()))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "uri", array()))), "html", null, true);
        echo "\"/>";
    }

    public function getTemplateName()
    {
        return "SuluWebsiteBundle:Extension:seo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 75,  157 => 73,  144 => 68,  139 => 66,  137 => 65,  133 => 64,  131 => 63,  128 => 61,  121 => 57,  119 => 56,  116 => 55,  109 => 51,  107 => 50,  104 => 49,  97 => 45,  95 => 44,  92 => 43,  85 => 39,  83 => 38,  80 => 37,  76 => 73,  74 => 61,  72 => 55,  70 => 49,  68 => 43,  66 => 37,  62 => 32,  60 => 31,  58 => 29,  55 => 26,  52 => 24,  50 => 23,  47 => 21,  44 => 19,  42 => 18,  40 => 17,  37 => 16,  35 => 15,  33 => 14,  31 => 13,  29 => 10,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SuluWebsiteBundle:Extension:seo.html.twig", "C:\\Users\\Lorenz\\Desktop\\MASSIVEART\\ma-getraenkeverwaltung\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\WebsiteBundle/Resources/views/Extension/seo.html.twig");
    }
}
