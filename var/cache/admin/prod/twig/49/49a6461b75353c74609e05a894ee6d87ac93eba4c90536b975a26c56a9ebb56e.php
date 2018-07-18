<?php

/* SuluContentBundle:Template:content-types/text_line.html.twig */
class __TwigTemplate_d75ce7e43b4bf56817c36603e51b11ee8f527d8ac251e61231c09c75ec8c00e5 extends Twig_Template
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
        echo "<input id=\"";
        echo ($context["id"] ?? null);
        echo "\"
       data-property='";
        // line 2
        echo twig_escape_filter($this->env, json_encode(($context["property"] ?? null)), "html", null, true);
        echo "'
       type=\"text\"
       class=\"form-element preview-update trigger-save-button";
        // line 4
        echo (((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "headline", array()) == "true")) ? (" input-bold") : (""));
        echo "\"
       data-mapper-property=\"";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["property"] ?? null), "name", array()), "html", null, true);
        echo "\"
       placeholder=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["property"] ?? null), "getPlaceholder", array(0 => ($context["userLocale"] ?? null)), "method"), "html", null, true);
        echo "\"
       ";
        // line 7
        if (twig_get_attribute($this->env, $this->source, ($context["property"] ?? null), "mandatory", array())) {
            echo "data-validation-required=\"true\"";
        }
        echo "/>

<div class=\"block-content\" data-sort-mode-id=\"";
        // line 9
        echo ($context["id"] ?? null);
        echo "\"></div>
";
    }

    public function getTemplateName()
    {
        return "SuluContentBundle:Template:content-types/text_line.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 9,  45 => 7,  41 => 6,  37 => 5,  33 => 4,  28 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SuluContentBundle:Template:content-types/text_line.html.twig", "C:\\Users\\Lorenz\\Desktop\\MASSIVEART\\ma-getraenkeverwaltung\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\ContentBundle/Resources/views/Template/content-types/text_line.html.twig");
    }
}
