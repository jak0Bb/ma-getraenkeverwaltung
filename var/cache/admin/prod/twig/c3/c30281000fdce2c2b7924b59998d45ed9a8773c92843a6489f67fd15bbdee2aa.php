<?php

/* SuluContentBundle:Template:content-types/text_editor.html.twig */
class __TwigTemplate_4001f7c86bf0176b7f5ef6aad8aa3bcbfba9bdc016ee2960e84e708e619815c2 extends Twig_Template
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
        echo "<p class=\"input-description validate-error\">
    <span class=\"unpublished\" style=\"display: none;\"></span>
    <span class=\"removed\" style=\"display: none;\"></span>
</p>

<textarea id=\"";
        // line 6
        echo ($context["id"] ?? null);
        echo "\"
        data-property='";
        // line 7
        echo twig_escape_filter($this->env, json_encode(($context["property"] ?? null)), "html", null, true);
        echo "'
        class=\"form-element hidden\"
        data-type=\"textEditor\"
        data-type-instance-name=\"";
        // line 10
        echo ($context["id"] ?? null);
        echo "\"
        data-aura-component=\"ckeditor@husky\"
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["params"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["param"]) {
            // line 13
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, $context["param"], "value", array(), "any", true, true)) {
                // line 14
                echo "                ";
                $context["value"] = twig_get_attribute($this->env, $this->source, $context["param"], "value", array());
                // line 15
                echo "                ";
                if ((($context["value"] ?? null) === true)) {
                    // line 16
                    echo "                    ";
                    $context["value"] = "true";
                    // line 17
                    echo "                ";
                } elseif ((($context["value"] ?? null) === false)) {
                    // line 18
                    echo "                    ";
                    $context["value"] = "false";
                    // line 19
                    echo "                ";
                }
                // line 20
                echo "        data-aura-";
                echo twig_escape_filter($this->env, twig_replace_filter($context["key"], array("_" => "-")), "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
                echo "\"
            ";
            }
            // line 22
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['param'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "        data-mapper-property=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["property"] ?? null), "name", array()), "html", null, true);
        echo "\"
        data-aura-instance-name=\"";
        // line 24
        echo ($context["id"] ?? null);
        echo "\"
        data-aura-auto-start=\"false\"
        placeholder=\"";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["property"] ?? null), "getPlaceholder", array(0 => ($context["userLocale"] ?? null)), "method"), "html", null, true);
        echo "\"
        ";
        // line 27
        if (twig_get_attribute($this->env, $this->source, ($context["property"] ?? null), "mandatory", array())) {
            // line 28
            echo "            data-validation-required=\"true\"
        ";
        }
        // line 30
        echo "        data-aura-webspace=\"";
        echo twig_escape_filter($this->env, ($context["webspaceKey"] ?? null), "html", null, true);
        echo "\"
        data-aura-locale=\"";
        // line 31
        echo twig_escape_filter($this->env, ($context["languageCode"] ?? null), "html", null, true);
        echo "\"
></textarea>

<div class=\"block-content\" data-sort-mode-id=\"";
        // line 34
        echo ($context["id"] ?? null);
        echo "\"></div>
";
    }

    public function getTemplateName()
    {
        return "SuluContentBundle:Template:content-types/text_editor.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 34,  109 => 31,  104 => 30,  100 => 28,  98 => 27,  94 => 26,  89 => 24,  84 => 23,  78 => 22,  70 => 20,  67 => 19,  64 => 18,  61 => 17,  58 => 16,  55 => 15,  52 => 14,  49 => 13,  45 => 12,  40 => 10,  34 => 7,  30 => 6,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SuluContentBundle:Template:content-types/text_editor.html.twig", "C:\\Users\\Lorenz\\Desktop\\MASSIVEART\\ma-getraenkeverwaltung\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\ContentBundle/Resources/views/Template/content-types/text_editor.html.twig");
    }
}
