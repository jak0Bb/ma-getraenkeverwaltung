<?php

/* SuluCommunityBundle::master-email.html.twig */
class __TwigTemplate_282a0dd25c276db950f858b440e9138983457d1da8e69a1f0164217ad426272b extends Twig_Template
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
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional //EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html>
<head>
    <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
</head>
<body>
    ";
        // line 7
        $this->displayBlock('content', $context, $blocks);
        // line 8
        echo "</body>
</html>";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "SuluCommunityBundle::master-email.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  48 => 7,  43 => 4,  38 => 8,  36 => 7,  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SuluCommunityBundle::master-email.html.twig", "C:\\xampp\\htdocs\\ma-getraenkeverwaltung\\vendor\\sulu\\community-bundle/Resources/views/master-email.html.twig");
    }
}
