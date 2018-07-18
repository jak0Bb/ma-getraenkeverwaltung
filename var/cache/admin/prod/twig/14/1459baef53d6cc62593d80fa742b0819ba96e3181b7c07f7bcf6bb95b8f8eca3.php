<?php

/* SuluContentBundle:Template:content.html.twig */
class __TwigTemplate_32d61d32abf93d0e96a2e65028b0b8c82cc05a3b0bec2899ff6bf369dacfbd3c extends Twig_Template
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
        echo "<form id=\"content-form\" class=\"form grid\">

    ";
        // line 4
        echo "    ";
        $context["firstSection"] = null;
        // line 5
        echo "    ";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["template"] ?? null), "properties", array())) > 0)) {
            // line 6
            echo "        ";
            $context["firstProperty"] = twig_first($this->env, twig_get_attribute($this->env, $this->source, ($context["template"] ?? null), "properties", array()));
            // line 7
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, ($context["firstProperty"] ?? null), "contentTypeName", array()) == "section")) {
                // line 8
                echo "            ";
                $context["firstSection"] = twig_first($this->env, twig_get_attribute($this->env, $this->source, ($context["template"] ?? null), "properties", array()));
                // line 9
                echo "            <div class=\"highlight-section\">
                <div class=\"fixed-width\">
                    <div class=\"content\">
                        ";
                // line 12
                $this->loadTemplate("SuluContentBundle:Template:macros/section.html.twig", "SuluContentBundle:Template:content.html.twig", 12)->display(array("property" =>                 // line 13
($context["firstProperty"] ?? null), "params" => $this->extensions['Sulu\Bundle\ContentBundle\Twig\ContentTwigExtension']->getParamsFunction(                // line 14
($context["firstProperty"] ?? null)), "id" => twig_get_attribute($this->env, $this->source,                 // line 15
($context["firstProperty"] ?? null), "name", array()), "webspaceKey" =>                 // line 16
($context["webspaceKey"] ?? null), "languageCode" =>                 // line 17
($context["languageCode"] ?? null), "userLocale" =>                 // line 18
($context["userLocale"] ?? null), "title" => false, "uuid" =>                 // line 20
($context["uuid"] ?? null), "excludedProperties" =>                 // line 21
($context["excludedProperties"] ?? null)));
                // line 23
                echo "                    </div>
                </div>
            </div>
        ";
            }
            // line 27
            echo "    ";
        }
        // line 28
        echo "
    <div class=\"fixed-width\">
        ";
        // line 30
        $this->loadTemplate("SuluContentBundle:Template:macros/properties.html.twig", "SuluContentBundle:Template:content.html.twig", 30)->display(array_merge($context, array("properties" => ((        // line 31
($context["firstSection"] ?? null)) ? (twig_slice($this->env, twig_get_attribute($this->env, $this->source, ($context["template"] ?? null), "properties", array()), 1)) : (twig_get_attribute($this->env, $this->source, ($context["template"] ?? null), "properties", array()))), "excludedProperties" =>         // line 32
($context["excludedProperties"] ?? null))));
        // line 34
        echo "    </div>
</form>

<script type=\"text/javascript\">
    (function() {
        ";
        // line 39
        if (($context["fireEvent"] ?? null)) {
            // line 40
            echo "        App.emit('sulu.content.contents.default-template', '";
            echo twig_escape_filter($this->env, ($context["templateKey"] ?? null), "html", null, true);
            echo "');
        ";
        }
        // line 42
        echo "    })();
</script>
";
    }

    public function getTemplateName()
    {
        return "SuluContentBundle:Template:content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 42,  83 => 40,  81 => 39,  74 => 34,  72 => 32,  71 => 31,  70 => 30,  66 => 28,  63 => 27,  57 => 23,  55 => 21,  54 => 20,  53 => 18,  52 => 17,  51 => 16,  50 => 15,  49 => 14,  48 => 13,  47 => 12,  42 => 9,  39 => 8,  36 => 7,  33 => 6,  30 => 5,  27 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SuluContentBundle:Template:content.html.twig", "C:\\Users\\Lorenz\\Desktop\\MASSIVEART\\ma-getraenkeverwaltung\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\ContentBundle/Resources/views/Template/content.html.twig");
    }
}
