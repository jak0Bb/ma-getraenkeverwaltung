<?php

/* SuluCommunityBundle::master.html.twig */
class __TwigTemplate_ceb95ab8403451fccf6aa012185c74f5d1f2f7334c622d99f7586eca0ff94f54 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t
\t<meta charset=\"utf-8\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

\t<link href=\"/bundles/app/css/style.css\" rel=\"stylesheet\">
\t<link href=\"/bundles/app/css/bootstrap.min.css\" rel=\"stylesheet\">
\t<link href=\"https://fonts.googleapis.com/css?family=Roboto\" rel=\"stylesheet\">\t
\t<script src=\"/bundles/app/js/shake.js\" type=\"text/javascript\"></script>

</head>
<body>
\t<header>
\t\t<nav class=\"navbar navbar-expand-lg navbar-dark navbar-custom fixed-top\">
\t\t   <div class=\"container\">
\t\t\t   <a class=\"navbar-brand\" href=\"#\"><img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/bundles/app/img/logo.png"), "html", null, true);
        echo "\"></a>
\t\t   </div>
        </nav>
\t</header>
\t
\t<section id=\"content\" vocab=\"http://schema.org/\" typeof=\"Content\">
\t\t<div class=\"form-login\">
\t\t\t";
        // line 27
        $this->displayBlock('content', $context, $blocks);
        // line 28
        echo "\t\t</div>
\t</section>
\t
<footer>
\t";
        // line 32
        $this->displayBlock('footer', $context, $blocks);
        // line 35
        echo "</footer>

\t";
        // line 37
        $this->displayBlock('javascripts', $context, $blocks);
        // line 42
        echo "\t</body>
</html>
";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
    }

    // line 27
    public function block_content($context, array $blocks = array())
    {
    }

    // line 32
    public function block_footer($context, array $blocks = array())
    {
        // line 33
        echo "\t\t<p>Copyright ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " SULU</p>
\t";
    }

    // line 37
    public function block_javascripts($context, array $blocks = array())
    {
        // line 38
        echo "
\t\t<script src=\"/bundles/app/js/jquery.min.js\"></script>
\t\t<script src=\"/bundles/app/js/bootstrap.min.js\"></script>
\t";
    }

    public function getTemplateName()
    {
        return "SuluCommunityBundle::master.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 38,  103 => 37,  96 => 33,  93 => 32,  88 => 27,  83 => 4,  77 => 42,  75 => 37,  71 => 35,  69 => 32,  63 => 28,  61 => 27,  51 => 20,  32 => 4,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SuluCommunityBundle::master.html.twig", "C:\\xampp\\htdocs\\ma-getraenkeverwaltung\\vendor\\sulu\\community-bundle/Resources/views/master.html.twig");
    }
}
