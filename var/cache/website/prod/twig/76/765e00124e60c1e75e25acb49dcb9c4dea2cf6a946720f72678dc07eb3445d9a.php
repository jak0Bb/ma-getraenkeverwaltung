<?php

/* SuluCommunityBundle:Password:forget-email.html.twig */
class __TwigTemplate_31382cb6d54d5280511c4a2d630f37e0b93a5afff4eb1c339c1c8d9b325eb7da extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("SuluCommunityBundle::master-email.html.twig", "SuluCommunityBundle:Password:forget-email.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SuluCommunityBundle::master-email.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "\t<h2> To reset your password, click the link below. </h2>
    ";
        // line 5
        $context["url"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("sulu_community.password_reset", array("token" => twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "passwordResetToken", array())));
        // line 6
        echo "
    <a href=\"";
        // line 7
        echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
        echo "\">
        ";
        // line 8
        echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
        echo "
    </a>
";
    }

    public function getTemplateName()
    {
        return "SuluCommunityBundle:Password:forget-email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  43 => 7,  40 => 6,  38 => 5,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SuluCommunityBundle:Password:forget-email.html.twig", "C:\\xampp\\htdocs\\ma-getraenkeverwaltung\\vendor\\sulu\\community-bundle/Resources/views/Password/forget-email.html.twig");
    }
}
