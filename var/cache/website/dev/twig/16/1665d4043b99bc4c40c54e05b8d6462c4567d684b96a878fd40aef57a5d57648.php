<?php

/* SuluWebsiteBundle:Extension:seo.html.twig */
class __TwigTemplate_3267789bde8b640fa48366a659f58341cf678852183f0cd0fdc1d70b80271143 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SuluWebsiteBundle:Extension:seo.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SuluWebsiteBundle:Extension:seo.html.twig"));

        // line 10
        $context["seo"] = twig_array_merge((((isset($context["seo"]) || array_key_exists("seo", $context))) ? (_twig_default_filter((isset($context["seo"]) || array_key_exists("seo", $context) ? $context["seo"] : (function () { throw new Twig_Error_Runtime('Variable "seo" does not exist.', 10, $this->source); })()), array())) : (array())), ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array(), "any", false, true), "attributes", array(), "any", false, true), "get", array(0 => "_seo", 1 => array()), "method", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array(), "any", false, true), "attributes", array(), "any", false, true), "get", array(0 => "_seo", 1 => array()), "method"), array())) : (array())));
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
            $context["seoRobots"] = ((isset($context["seoRobots"]) || array_key_exists("seoRobots", $context) ? $context["seoRobots"] : (function () { throw new Twig_Error_Runtime('Variable "seoRobots" does not exist.', 19, $this->source); })()) . "noIndex");
        } else {
            // line 21
            $context["seoRobots"] = ((isset($context["seoRobots"]) || array_key_exists("seoRobots", $context) ? $context["seoRobots"] : (function () { throw new Twig_Error_Runtime('Variable "seoRobots" does not exist.', 21, $this->source); })()) . "index");
        }
        // line 23
        if (((twig_get_attribute($this->env, $this->source, ($context["seo"] ?? null), "noFollow", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["seo"] ?? null), "noFollow", array()), false)) : (false))) {
            // line 24
            $context["seoRobots"] = ((isset($context["seoRobots"]) || array_key_exists("seoRobots", $context) ? $context["seoRobots"] : (function () { throw new Twig_Error_Runtime('Variable "seoRobots" does not exist.', 24, $this->source); })()) . ",noFollow");
        } else {
            // line 26
            $context["seoRobots"] = ((isset($context["seoRobots"]) || array_key_exists("seoRobots", $context) ? $context["seoRobots"] : (function () { throw new Twig_Error_Runtime('Variable "seoRobots" does not exist.', 26, $this->source); })()) . ",follow");
        }
        // line 29
        $context["seoCanonical"] = ((twig_get_attribute($this->env, $this->source, ($context["seo"] ?? null), "canonicalUrl", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["seo"] ?? null), "canonicalUrl", array()))) : (""));
        // line 31
        if ((( !(isset($context["seoCanonical"]) || array_key_exists("seoCanonical", $context) ? $context["seoCanonical"] : (function () { throw new Twig_Error_Runtime('Variable "seoCanonical" does not exist.', 31, $this->source); })()) && (isset($context["shadowBaseLocale"]) || array_key_exists("shadowBaseLocale", $context) ? $context["shadowBaseLocale"] : (function () { throw new Twig_Error_Runtime('Variable "shadowBaseLocale" does not exist.', 31, $this->source); })())) && ((twig_get_attribute($this->env, $this->source, ($context["urls"] ?? null), (isset($context["shadowBaseLocale"]) || array_key_exists("shadowBaseLocale", $context) ? $context["shadowBaseLocale"] : (function () { throw new Twig_Error_Runtime('Variable "shadowBaseLocale" does not exist.', 31, $this->source); })()), array(), "array", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["urls"] ?? null), (isset($context["shadowBaseLocale"]) || array_key_exists("shadowBaseLocale", $context) ? $context["shadowBaseLocale"] : (function () { throw new Twig_Error_Runtime('Variable "shadowBaseLocale" does not exist.', 31, $this->source); })()), array(), "array"))) : ("")))) {
            // line 32
            echo "    ";
            $context["seoCanonical"] = $this->extensions['Sulu\Bundle\WebsiteBundle\Twig\Content\ContentPathTwigExtension']->getContentPath(twig_get_attribute($this->env, $this->source, (isset($context["urls"]) || array_key_exists("urls", $context) ? $context["urls"] : (function () { throw new Twig_Error_Runtime('Variable "urls" does not exist.', 32, $this->source); })()), (isset($context["shadowBaseLocale"]) || array_key_exists("shadowBaseLocale", $context) ? $context["shadowBaseLocale"] : (function () { throw new Twig_Error_Runtime('Variable "shadowBaseLocale" does not exist.', 32, $this->source); })()), array(), "array"), null, (isset($context["shadowBaseLocale"]) || array_key_exists("shadowBaseLocale", $context) ? $context["shadowBaseLocale"] : (function () { throw new Twig_Error_Runtime('Variable "shadowBaseLocale" does not exist.', 32, $this->source); })()));
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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 37
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 38
        if ((isset($context["seoTitle"]) || array_key_exists("seoTitle", $context) ? $context["seoTitle"] : (function () { throw new Twig_Error_Runtime('Variable "seoTitle" does not exist.', 38, $this->source); })())) {
            // line 39
            echo "<title>";
            echo twig_escape_filter($this->env, (isset($context["seoTitle"]) || array_key_exists("seoTitle", $context) ? $context["seoTitle"] : (function () { throw new Twig_Error_Runtime('Variable "seoTitle" does not exist.', 39, $this->source); })()), "html", null, true);
            echo "</title>";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 43
    public function block_description($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        // line 44
        if ((isset($context["seoDescription"]) || array_key_exists("seoDescription", $context) ? $context["seoDescription"] : (function () { throw new Twig_Error_Runtime('Variable "seoDescription" does not exist.', 44, $this->source); })())) {
            // line 45
            echo "<meta name=\"description\" content=\"";
            echo twig_escape_filter($this->env, (isset($context["seoDescription"]) || array_key_exists("seoDescription", $context) ? $context["seoDescription"] : (function () { throw new Twig_Error_Runtime('Variable "seoDescription" does not exist.', 45, $this->source); })()), "html", null, true);
            echo "\"/>";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 49
    public function block_keywords($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "keywords"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "keywords"));

        // line 50
        if ((isset($context["seoKeywords"]) || array_key_exists("seoKeywords", $context) ? $context["seoKeywords"] : (function () { throw new Twig_Error_Runtime('Variable "seoKeywords" does not exist.', 50, $this->source); })())) {
            // line 51
            echo "<meta name=\"keywords\" content=\"";
            echo twig_escape_filter($this->env, (isset($context["seoKeywords"]) || array_key_exists("seoKeywords", $context) ? $context["seoKeywords"] : (function () { throw new Twig_Error_Runtime('Variable "seoKeywords" does not exist.', 51, $this->source); })()), "html", null, true);
            echo "\"/>";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 55
    public function block_robots($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "robots"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "robots"));

        // line 56
        if ((isset($context["seoRobots"]) || array_key_exists("seoRobots", $context) ? $context["seoRobots"] : (function () { throw new Twig_Error_Runtime('Variable "seoRobots" does not exist.', 56, $this->source); })())) {
            // line 57
            echo "<meta name=\"robots\" content=\"";
            echo twig_escape_filter($this->env, (isset($context["seoRobots"]) || array_key_exists("seoRobots", $context) ? $context["seoRobots"] : (function () { throw new Twig_Error_Runtime('Variable "seoRobots" does not exist.', 57, $this->source); })()), "html", null, true);
            echo "\"/>";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 61
    public function block_urls($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "urls"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "urls"));

        // line 63
        if ((twig_length_filter($this->env, (isset($context["urls"]) || array_key_exists("urls", $context) ? $context["urls"] : (function () { throw new Twig_Error_Runtime('Variable "urls" does not exist.', 63, $this->source); })())) > 1)) {
            // line 64
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["urls"]) || array_key_exists("urls", $context) ? $context["urls"] : (function () { throw new Twig_Error_Runtime('Variable "urls" does not exist.', 64, $this->source); })()));
            foreach ($context['_seq'] as $context["locale"] => $context["url"]) {
                // line 65
                if (((isset($context["defaultLocale"]) || array_key_exists("defaultLocale", $context) ? $context["defaultLocale"] : (function () { throw new Twig_Error_Runtime('Variable "defaultLocale" does not exist.', 65, $this->source); })()) == $context["locale"])) {
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 73
    public function block_canonical($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "canonical"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "canonical"));

        // line 75
        echo "<link rel=\"canonical\" href=\"";
        echo twig_escape_filter($this->env, (((isset($context["seoCanonical"]) || array_key_exists("seoCanonical", $context))) ? (_twig_default_filter((isset($context["seoCanonical"]) || array_key_exists("seoCanonical", $context) ? $context["seoCanonical"] : (function () { throw new Twig_Error_Runtime('Variable "seoCanonical" does not exist.', 75, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 75, $this->source); })()), "request", array()), "uri", array()))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 75, $this->source); })()), "request", array()), "uri", array()))), "html", null, true);
        echo "\"/>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  238 => 75,  229 => 73,  210 => 68,  205 => 66,  203 => 65,  199 => 64,  197 => 63,  188 => 61,  175 => 57,  173 => 56,  164 => 55,  151 => 51,  149 => 50,  140 => 49,  127 => 45,  125 => 44,  116 => 43,  103 => 39,  101 => 38,  92 => 37,  82 => 73,  80 => 61,  78 => 55,  76 => 49,  74 => 43,  72 => 37,  68 => 32,  66 => 31,  64 => 29,  61 => 26,  58 => 24,  56 => 23,  53 => 21,  50 => 19,  48 => 18,  46 => 17,  43 => 16,  41 => 15,  39 => 14,  37 => 13,  35 => 10,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#-
 # content array
 # defaultLocale string
 # seo array
 # shadowBaseLocale string
 # urls array
-#}

{#- merge seo data with _seo from attributes for custom urls -#}
{% set seo = seo|default([])|merge(app.request.attributes.get('_seo', [])|default([])) %}

{#- fallback to content title when no seo title is set -#}
{% set seoTitle = seo.title|default(content.title|default()) %}
{% set seoDescription = seo.description|default() %}
{% set seoKeywords = seo.keywords|default() %}

{% set seoRobots = '' %}
{%- if seo.noIndex|default(false) -%}
    {% set seoRobots = seoRobots ~ 'noIndex' -%}
{%- else -%}
    {% set seoRobots = seoRobots ~ 'index' -%}
{%- endif -%}
{%- if seo.noFollow|default(false) -%}
    {% set seoRobots = seoRobots ~ ',noFollow' -%}
{%- else -%}
    {% set seoRobots = seoRobots ~ ',follow' -%}
{%- endif -%}

{% set seoCanonical = seo.canonicalUrl|default() %}

{%- if not seoCanonical and shadowBaseLocale and urls[shadowBaseLocale]|default() %}
    {% set seoCanonical = sulu_content_path(urls[shadowBaseLocale], null, shadowBaseLocale) %}
{%- endif -%}

{#- render blocks -#}

{%- block title -%}
    {%- if seoTitle -%}
        <title>{{ seoTitle }}</title>
    {%- endif -%}
{%- endblock -%}

{%- block description -%}
    {%- if seoDescription -%}
        <meta name=\"description\" content=\"{{ seoDescription }}\"/>
    {%- endif -%}
{%- endblock -%}

{%- block keywords -%}
    {%- if seoKeywords -%}
        <meta name=\"keywords\" content=\"{{ seoKeywords }}\"/>
    {%- endif -%}
{%- endblock -%}

{%- block robots -%}
    {%- if seoRobots -%}
        <meta name=\"robots\" content=\"{{ seoRobots }}\"/>
    {%- endif -%}
{%- endblock -%}

{%- block urls -%}
    {#- when only one language do not show alternative -#}
    {%- if urls|length > 1 -%}
        {%- for locale, url in urls -%}
            {%- if defaultLocale == locale -%}
                <link rel=\"alternate\" href=\"{{ sulu_content_path(url, null, locale) }}\" hreflang=\"x-default\"/>
            {%- endif -%}
            <link rel=\"alternate\" href=\"{{ sulu_content_path(url, null, locale) }}\" hreflang=\"{{ locale|replace({'_': '-'}) }}\"/>
        {%- endfor -%}
    {%- endif -%}
{%- endblock -%}

{%- block canonical -%}
    {#- Set canonical to itself if a bot clone the page -#}
    <link rel=\"canonical\" href=\"{{ seoCanonical|default(app.request.uri) }}\"/>
{%- endblock -%}
", "SuluWebsiteBundle:Extension:seo.html.twig", "C:\\Users\\imsyn\\Desktop\\MASSIVEART\\sulu2\\sulu-minimal\\ma-getraenkeverwaltung\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\WebsiteBundle/Resources/views/Extension/seo.html.twig");
    }
}
