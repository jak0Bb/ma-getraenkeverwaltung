<?php

/* SuluCommunityBundle:Login:login-embed.html.twig */
class __TwigTemplate_ae6f9bc814763a1309d2ac391764b271cb048a39c077469d790cfaaf4dac420c extends Twig_Template
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
        // line 1
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", array())) {
            // line 2
            echo "    ";
            $context["media"] = null;
            // line 3
            echo "    ";
            if ( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", array()), "contact", array()), "avatar", array()))) {
                // line 4
                echo "        ";
                $context["media"] = $this->extensions['Sulu\Bundle\MediaBundle\Twig\MediaTwigExtension']->resolveMediaFunction(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", array()), "contact", array()), "avatar", array()), twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "locale", array()));
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
            if ( !(null === ($context["media"] ?? null))) {
                // line 9
                echo "            <img src=\"";
                echo twig_escape_filter($this->env, (($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = twig_get_attribute($this->env, $this->source, ($context["media"] ?? null), "thumbnails", array())) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5["50x50"] ?? null) : null), "html", null, true);
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
        return array (  61 => 15,  55 => 12,  52 => 11,  46 => 9,  44 => 8,  40 => 7,  37 => 6,  34 => 5,  31 => 4,  28 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SuluCommunityBundle:Login:login-embed.html.twig", "C:\\xampp\\htdocs\\ma-getraenkeverwaltung\\vendor\\sulu\\community-bundle/Resources/views/Login/login-embed.html.twig");
    }
}
