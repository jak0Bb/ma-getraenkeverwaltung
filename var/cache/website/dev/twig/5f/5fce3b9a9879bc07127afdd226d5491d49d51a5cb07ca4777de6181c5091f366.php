<?php

/* templates/homepage.html.twig */
class __TwigTemplate_26e1a34e839f406363ade1b66868706bcc23c2b768d5541ea02dec881d1468ab extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("master.html.twig", "templates/homepage.html.twig", 1);
        $this->blocks = array(
            'meta' => array($this, 'block_meta'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "master.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "templates/homepage.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "templates/homepage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_meta($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta"));

        // line 4
        echo "    ";
        $this->loadTemplate("SuluWebsiteBundle:Extension:seo.html.twig", "templates/homepage.html.twig", 4)->display(array_merge($context, array("seo" => ((twig_get_attribute($this->env, $this->source,         // line 5
($context["extension"] ?? null), "seo", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["extension"] ?? null), "seo", array()), array())) : (array())), "content" => ((        // line 6
(isset($context["content"]) || array_key_exists("content", $context))) ? (_twig_default_filter((isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new Twig_Error_Runtime('Variable "content" does not exist.', 6, $this->source); })()), array())) : (array())), "urls" => ((        // line 7
(isset($context["urls"]) || array_key_exists("urls", $context))) ? (_twig_default_filter((isset($context["urls"]) || array_key_exists("urls", $context) ? $context["urls"] : (function () { throw new Twig_Error_Runtime('Variable "urls" does not exist.', 7, $this->source); })()), array())) : (array())), "shadowBaseLocale" => ((        // line 8
(isset($context["shadowBaseLocale"]) || array_key_exists("shadowBaseLocale", $context))) ? (_twig_default_filter((isset($context["shadowBaseLocale"]) || array_key_exists("shadowBaseLocale", $context) ? $context["shadowBaseLocale"] : (function () { throw new Twig_Error_Runtime('Variable "shadowBaseLocale" does not exist.', 8, $this->source); })()))) : ("")), "defaultLocale" => ((twig_get_attribute($this->env, $this->source,         // line 9
($context["request"] ?? null), "defaultLocale", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "defaultLocale", array()), "de")) : ("de")))));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 14
        echo "\t";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragmentStrategy("esi", Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("SuluCommunityBundle:Login:embed", array("_portal" => ((twig_get_attribute($this->env, $this->source,         // line 15
($context["request"] ?? null), "portalKey", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "portalKey", array()), "default_portal_key")) : ("default_portal_key")), "_locale" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 16
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 16, $this->source); })()), "request", array()), "locale", array()))));
        // line 17
        echo "
    <h1 property=\"title\">";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new Twig_Error_Runtime('Variable "content" does not exist.', 18, $this->source); })()), "title", array()), "html", null, true);
        echo "</h1>

    <div property=\"article\">
        ";
        // line 21
        echo twig_get_attribute($this->env, $this->source, (isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new Twig_Error_Runtime('Variable "content" does not exist.', 21, $this->source); })()), "article", array());
        echo "
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "templates/homepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 21,  87 => 18,  84 => 17,  82 => 16,  81 => 15,  79 => 14,  70 => 13,  60 => 9,  59 => 8,  58 => 7,  57 => 6,  56 => 5,  54 => 4,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"master.html.twig\" %}

{% block meta %}
    {% include \"SuluWebsiteBundle:Extension:seo.html.twig\" with {
        \"seo\": extension.seo|default([]),
        \"content\": content|default([]),
        \"urls\": urls|default([]),
        \"shadowBaseLocale\": shadowBaseLocale|default(),
        \"defaultLocale\": request.defaultLocale|default('de')
    } %}
{% endblock %}

{% block content %}
\t{{ render_esi(controller('SuluCommunityBundle:Login:embed', {
\t\t'_portal' : request.portalKey|default('default_portal_key'),
\t\t'_locale' : app.request.locale
\t})) }}
    <h1 property=\"title\">{{ content.title }}</h1>

    <div property=\"article\">
        {{ content.article|raw }}
    </div>
{% endblock %}
", "templates/homepage.html.twig", "C:\\Users\\imsyn\\Desktop\\MASSIVEART\\sulu2\\sulu-minimal\\ma-getraenkeverwaltung\\app\\Resources\\views\\templates\\homepage.html.twig");
    }
}
