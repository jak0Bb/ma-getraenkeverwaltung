<?php

/* SuluCommunityBundle:Login:login.html.twig */
class __TwigTemplate_bd2b727288a0c4f7b3d8c34416aadaf361582f50b32815565f84cfb5ce744f47 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("SuluCommunityBundle::master.html.twig", "SuluCommunityBundle:Login:login.html.twig", 1);
        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SuluCommunityBundle::master.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_javascripts($context, array $blocks = array())
    {
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "
\t<h1 property=\"title\">Welcome</h1>
\t<img src=\"/bundles/app/img/logo-login.png\" />
    <form action=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sulu_community.login");
        echo "\" method=\"post\">
        <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
        echo "\" placeholder=\"Username\"/>

        <input type=\"password\" id=\"password\" name=\"_password\" placeholder=\"Password\"/>
\t\t";
        // line 18
        echo "        ";
        // line 22
        echo "\t\t";
        if (($context["error"] ?? null)) {
            // line 23
            echo "\t\t\t<script>doShake();</script>
\t\t\t<div class=\"box-alert\">";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", array()), twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageData", array()), "security"), "html", null, true);
            echo "</div>
\t\t";
        }
        // line 26
        echo "        <button type=\"submit\" name=\"submit\">Login</button>
    </form>

    <a href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sulu_community.password_forget");
        echo "\">
        Forgot password
    </a> <br/>
";
    }

    public function getTemplateName()
    {
        return "SuluCommunityBundle:Login:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 29,  69 => 26,  64 => 24,  61 => 23,  58 => 22,  56 => 18,  50 => 11,  46 => 10,  41 => 7,  38 => 6,  33 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SuluCommunityBundle:Login:login.html.twig", "C:\\xampp\\htdocs\\ma-getraenkeverwaltung\\vendor\\sulu\\community-bundle/Resources/views/Login/login.html.twig");
    }
}
