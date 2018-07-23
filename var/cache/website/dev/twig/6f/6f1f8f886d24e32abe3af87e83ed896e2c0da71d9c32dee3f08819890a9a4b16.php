<?php

/* SuluCommunityBundle:Login:login-embed.html.twig */
class __TwigTemplate_b7ca31838a3c9b82ec8c04ac88f2a1e28641e77a283dbcfa259b5294ec95c951 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SuluCommunityBundle:Login:login-embed.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SuluCommunityBundle:Login:login-embed.html.twig"));

        // line 1
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 1, $this->source); })()), "user", array())) {
            // line 2
            echo "    ";
            $context["media"] = null;
            // line 3
            echo "    ";
            if ( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 3, $this->source); })()), "user", array()), "contact", array()), "avatar", array()))) {
                // line 4
                echo "        ";
                $context["media"] = $this->extensions['Sulu\Bundle\MediaBundle\Twig\MediaTwigExtension']->resolveMediaFunction(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 4, $this->source); })()), "user", array()), "contact", array()), "avatar", array()), twig_get_attribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new Twig_Error_Runtime('Variable "request" does not exist.', 4, $this->source); })()), "locale", array()));
                // line 5
                echo "    ";
            }
            // line 6
            echo "
    <a href=\"";
            // line 7
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sulu_community.profile");
            echo "\">
        ";
            // line 8
            if ( !(null === (isset($context["media"]) || array_key_exists("media", $context) ? $context["media"] : (function () { throw new Twig_Error_Runtime('Variable "media" does not exist.', 8, $this->source); })()))) {
                // line 9
                echo "            <img src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["media"]) || array_key_exists("media", $context) ? $context["media"] : (function () { throw new Twig_Error_Runtime('Variable "media" does not exist.', 9, $this->source); })()), "thumbnails", array()), "50x50", array(), "array"), "html", null, true);
                echo "\"/>
        ";
            }
            // line 11
            echo "
        ";
            // line 12
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", array(), "any", false, true), "username", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", array(), "any", false, true), "username", array()), "Profile")) : ("Profile")), "html", null, true);
            echo "
    </a>

    <a href=\"";
            // line 15
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sulu_community.logout");
            echo "\">
        Logout
    </a>
";
        } else {
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "SuluCommunityBundle:Login:login-embed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 15,  61 => 12,  58 => 11,  52 => 9,  50 => 8,  46 => 7,  43 => 6,  40 => 5,  37 => 4,  34 => 3,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if app.user %}
    {% set media = null %}
    {% if app.user.contact.avatar is not null %}
        {% set media = sulu_resolve_media(app.user.contact.avatar, request.locale) %}
    {% endif %}

    <a href=\"{{ path('sulu_community.profile') }}\">
        {% if media is not null %}
            <img src=\"{{ media.thumbnails['50x50'] }}\"/>
        {% endif %}

        {{ app.user.username|default('Profile') }}
    </a>

    <a href=\"{{ path('sulu_community.logout') }}\">
        Logout
    </a>
{% else %}
{% endif %}", "SuluCommunityBundle:Login:login-embed.html.twig", "C:\\Users\\imsyn\\Desktop\\MASSIVEART\\sulu2\\sulu-minimal\\ma-getraenkeverwaltung\\vendor\\sulu\\community-bundle/Resources/views/Login/login-embed.html.twig");
    }
}
