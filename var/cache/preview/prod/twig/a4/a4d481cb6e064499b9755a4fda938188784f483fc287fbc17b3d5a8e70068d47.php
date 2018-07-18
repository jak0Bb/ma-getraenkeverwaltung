<?php

/* templates/default.html.twig */
class __TwigTemplate_1f7a0e01a8e87e0b73e986f0b14e615933f58d4bcb45f4e4efa349e1c2b17605 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("master.html.twig", "templates/default.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->loadTemplate("SuluWebsiteBundle:Extension:seo.html.twig", "templates/default.html.twig", 4)->display(array_merge($context, array("seo" => ((twig_get_attribute($this->env, $this->source,         // line 5
($context["extension"] ?? null), "seo", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["extension"] ?? null), "seo", array()), array())) : (array())), "content" => ((        // line 6
(isset($context["content"]) || array_key_exists("content", $context))) ? (_twig_default_filter(($context["content"] ?? null), array())) : (array())), "urls" => ((        // line 7
(isset($context["urls"]) || array_key_exists("urls", $context))) ? (_twig_default_filter(($context["urls"] ?? null), array())) : (array())), "shadowBaseLocale" => ((        // line 8
(isset($context["shadowBaseLocale"]) || array_key_exists("shadowBaseLocale", $context))) ? (_twig_default_filter(($context["shadowBaseLocale"] ?? null))) : ("")), "defaultLocale" => ((twig_get_attribute($this->env, $this->source,         // line 9
($context["request"] ?? null), "defaultLocale", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "defaultLocale", array()), "de")) : ("de")))));
    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        // line 14
        echo "    <h1 property=\"title\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "title", array()), "html", null, true);
        echo "</h1>

    <div property=\"article\">
        ";
        // line 17
        echo twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "article", array());
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "templates/default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 17,  49 => 14,  46 => 13,  42 => 9,  41 => 8,  40 => 7,  39 => 6,  38 => 5,  36 => 4,  33 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "templates/default.html.twig", "C:\\Users\\Lorenz\\Desktop\\MASSIVEART\\ma-getraenkeverwaltung\\app\\Resources\\views\\templates\\default.html.twig");
    }
}
