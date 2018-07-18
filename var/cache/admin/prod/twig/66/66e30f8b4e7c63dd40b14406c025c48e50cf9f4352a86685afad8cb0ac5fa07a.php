<?php

/* SuluContentBundle:Template:macros/properties.html.twig */
class __TwigTemplate_dc6ecf6b9ecc4e672b1a916bcdb401fca3c02d48b0206c3baf3435ed930217c4 extends Twig_Template
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
        echo "<div class=\"grid-row\">
";
        // line 3
        $context["columns"] = 0;
        // line 4
        $context["lastProperty"] = null;
        // line 5
        echo "
";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["properties"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["property"]) {
            // line 7
            echo "    ";
            if (!twig_in_filter(twig_get_attribute($this->env, $this->source, $context["property"], "name", array()), ($context["excludedProperties"] ?? null))) {
                // line 8
                echo "        ";
                // line 9
                echo "        ";
                $context["propertyColspan"] = (((twig_get_attribute($this->env, $this->source, $context["property"], "colspan", array()) != "")) ? (twig_get_attribute($this->env, $this->source, $context["property"], "colspan", array())) : (12));
                // line 10
                echo "
        ";
                // line 12
                echo "        ";
                if (((($context["columns"] ?? null) + ($context["propertyColspan"] ?? null)) <= 12)) {
                    // line 13
                    echo "            ";
                    // line 14
                    echo "            ";
                    $context["columns"] = (($context["columns"] ?? null) + ($context["propertyColspan"] ?? null));
                    // line 15
                    echo "        ";
                } else {
                    // line 16
                    echo "            </div>

            ";
                    // line 18
                    $context["gridRowClass"] = "";
                    // line 19
                    echo "            ";
                    if (((twig_get_attribute($this->env, $this->source, $context["property"], "contentTypeName", array()) == "section") && (((twig_get_attribute($this->env, $this->source, ($context["lastProperty"] ?? null), "contentTypeName", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["lastProperty"] ?? null), "contentTypeName", array()))) : ("")) != "section"))) {
                        // line 20
                        echo "                ";
                        $context["gridRowClass"] = " m-top-40";
                        // line 21
                        echo "            ";
                    }
                    // line 22
                    echo "            <div class=\"grid-row";
                    echo twig_escape_filter($this->env, ($context["gridRowClass"] ?? null), "html", null, true);
                    echo "\">
            ";
                    // line 24
                    echo "            ";
                    $context["columns"] = ($context["propertyColspan"] ?? null);
                    // line 25
                    echo "        ";
                }
                // line 26
                echo "
        ";
                // line 28
                echo "        ";
                $context["params"] = $this->extensions['Sulu\Bundle\ContentBundle\Twig\ContentTwigExtension']->getParamsFunction($context["property"]);
                // line 29
                echo "        ";
                $context["id"] = (((((isset($context["propertyPrefix"]) || array_key_exists("propertyPrefix", $context))) ? (_twig_default_filter(($context["propertyPrefix"] ?? null), "")) : ("")) . twig_get_attribute($this->env, $this->source, $context["property"], "name", array())) . (((isset($context["propertyPostfix"]) || array_key_exists("propertyPostfix", $context))) ? (_twig_default_filter(($context["propertyPostfix"] ?? null), "")) : ("")));
                // line 30
                echo "
        ";
                // line 31
                if ((twig_get_attribute($this->env, $this->source, $context["property"], "contentTypeName", array()) == "section")) {
                    // line 32
                    echo "            ";
                    $this->loadTemplate("SuluContentBundle:Template:macros/section.html.twig", "SuluContentBundle:Template:macros/properties.html.twig", 32)->display(array("property" =>                     // line 33
$context["property"], "excludedProperties" =>                     // line 34
($context["excludedProperties"] ?? null), "params" =>                     // line 35
($context["params"] ?? null), "id" =>                     // line 36
($context["id"] ?? null), "webspaceKey" =>                     // line 37
($context["webspaceKey"] ?? null), "languageCode" =>                     // line 38
($context["languageCode"] ?? null), "userLocale" =>                     // line 39
($context["userLocale"] ?? null), "title" => true, "uuid" =>                     // line 41
($context["uuid"] ?? null)));
                    // line 43
                    echo "        ";
                } else {
                    // line 44
                    echo "            ";
                    // line 45
                    echo "            ";
                    $context["type"] = $this->extensions['Sulu\Bundle\ContentBundle\Twig\ContentTwigExtension']->getTypeFunction(twig_get_attribute($this->env, $this->source, $context["property"], "contentTypeName", array()));
                    // line 46
                    echo "
            ";
                    // line 47
                    if ((twig_get_attribute($this->env, $this->source, $context["property"], "contentTypeName", array()) == "block")) {
                        // line 48
                        echo "                ";
                        $this->loadTemplate(twig_get_attribute($this->env, $this->source, ($context["type"] ?? null), "template", array()), "SuluContentBundle:Template:macros/properties.html.twig", 48)->display(array("property" =>                         // line 49
$context["property"], "params" =>                         // line 50
($context["params"] ?? null), "type" =>                         // line 51
($context["type"] ?? null), "id" =>                         // line 52
($context["id"] ?? null), "webspaceKey" =>                         // line 53
($context["webspaceKey"] ?? null), "languageCode" =>                         // line 54
($context["languageCode"] ?? null), "userLocale" =>                         // line 55
($context["userLocale"] ?? null), "uuid" =>                         // line 56
($context["uuid"] ?? null)));
                        // line 58
                        echo "            ";
                    } elseif ($this->extensions['Sulu\Bundle\ContentBundle\Twig\ContentTwigExtension']->isMultipleTest($context["property"])) {
                        // line 59
                        echo "                ";
                        $this->loadTemplate("SuluContentBundle:Template:macros/multiple.html.twig", "SuluContentBundle:Template:macros/properties.html.twig", 59)->display(array("property" =>                         // line 60
$context["property"], "params" =>                         // line 61
($context["params"] ?? null), "type" =>                         // line 62
($context["type"] ?? null), "id" =>                         // line 63
($context["id"] ?? null), "webspaceKey" =>                         // line 64
($context["webspaceKey"] ?? null), "languageCode" =>                         // line 65
($context["languageCode"] ?? null), "userLocale" =>                         // line 66
($context["userLocale"] ?? null), "uuid" =>                         // line 67
($context["uuid"] ?? null)));
                        // line 69
                        echo "            ";
                    } else {
                        // line 70
                        echo "                ";
                        $this->loadTemplate("SuluContentBundle:Template:macros/single.html.twig", "SuluContentBundle:Template:macros/properties.html.twig", 70)->display(array("property" =>                         // line 71
$context["property"], "params" =>                         // line 72
($context["params"] ?? null), "type" =>                         // line 73
($context["type"] ?? null), "id" =>                         // line 74
($context["id"] ?? null), "webspaceKey" =>                         // line 75
($context["webspaceKey"] ?? null), "languageCode" =>                         // line 76
($context["languageCode"] ?? null), "userLocale" =>                         // line 77
($context["userLocale"] ?? null), "uuid" =>                         // line 78
($context["uuid"] ?? null)));
                        // line 80
                        echo "            ";
                    }
                    // line 81
                    echo "        ";
                }
                // line 82
                echo "    ";
            }
            // line 83
            echo "
    ";
            // line 84
            $context["lastProperty"] = $context["property"];
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['property'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "SuluContentBundle:Template:macros/properties.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 86,  174 => 84,  171 => 83,  168 => 82,  165 => 81,  162 => 80,  160 => 78,  159 => 77,  158 => 76,  157 => 75,  156 => 74,  155 => 73,  154 => 72,  153 => 71,  151 => 70,  148 => 69,  146 => 67,  145 => 66,  144 => 65,  143 => 64,  142 => 63,  141 => 62,  140 => 61,  139 => 60,  137 => 59,  134 => 58,  132 => 56,  131 => 55,  130 => 54,  129 => 53,  128 => 52,  127 => 51,  126 => 50,  125 => 49,  123 => 48,  121 => 47,  118 => 46,  115 => 45,  113 => 44,  110 => 43,  108 => 41,  107 => 39,  106 => 38,  105 => 37,  104 => 36,  103 => 35,  102 => 34,  101 => 33,  99 => 32,  97 => 31,  94 => 30,  91 => 29,  88 => 28,  85 => 26,  82 => 25,  79 => 24,  74 => 22,  71 => 21,  68 => 20,  65 => 19,  63 => 18,  59 => 16,  56 => 15,  53 => 14,  51 => 13,  48 => 12,  45 => 10,  42 => 9,  40 => 8,  37 => 7,  33 => 6,  30 => 5,  28 => 4,  26 => 3,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SuluContentBundle:Template:macros/properties.html.twig", "C:\\Users\\Lorenz\\Desktop\\MASSIVEART\\ma-getraenkeverwaltung\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\ContentBundle/Resources/views/Template/macros/properties.html.twig");
    }
}
