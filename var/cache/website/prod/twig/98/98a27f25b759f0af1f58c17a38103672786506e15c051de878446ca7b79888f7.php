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
            echo "    <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
            // line 7
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sulu_community.profile");
            echo "\">
            ";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", array()), "contact", array()), "firstname", array()), "html", null, true);
            echo "
        </a>
    </li>
    <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
            // line 12
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sulu_community.logout");
            echo "\">
            Logout
        </a>
    </li>
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
        return array (  51 => 12,  44 => 8,  40 => 7,  37 => 6,  34 => 5,  31 => 4,  28 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SuluCommunityBundle:Login:login-embed.html.twig", "C:\\Users\\Lorenz\\Desktop\\Node\\ma-getraenkeverwaltung\\vendor\\sulu\\community-bundle/Resources/views/Login/login-embed.html.twig");
    }
}
