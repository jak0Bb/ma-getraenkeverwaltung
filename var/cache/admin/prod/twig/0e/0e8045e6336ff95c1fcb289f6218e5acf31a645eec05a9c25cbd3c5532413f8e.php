<?php

/* SuluContentBundle:Template:macros/section.html.twig */
class __TwigTemplate_211371df566f0cc3b8766c3aa1b1cb2e8e09be3786d28626cfb5ac5e8b6f2a29 extends Twig_Template
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
        echo "<div class=\"grid-col-";
        echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, ($context["property"] ?? null), "colspan", array()) != "")) ? (twig_get_attribute($this->env, $this->source, ($context["property"] ?? null), "colspan", array())) : ("12")), "html", null, true);
        echo " floating section section-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["property"] ?? null), "name", array()), "html", null, true);
        echo "\">
    ";
        // line 2
        if ((($context["title"] ?? null) == true)) {
            // line 3
            echo "        <h2 class=\"divider m-bottom-20\"
            title=\"";
            // line 4
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["property"] ?? null), "getInfoText", array(0 => ($context["userLocale"] ?? null)), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["property"] ?? null), "getTitle", array(0 => ($context["userLocale"] ?? null)), "method"), "html", null, true);
            echo "</h2>

        ";
            // line 6
            if (twig_get_attribute($this->env, $this->source, ($context["property"] ?? null), "getInfoText", array(0 => ($context["userLocale"] ?? null)), "method")) {
                // line 7
                echo "            <div class=\"input-description\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["property"] ?? null), "getInfoText", array(0 => ($context["userLocale"] ?? null)), "method"), "html", null, true);
                echo "</div>
        ";
            }
            // line 9
            echo "    ";
        }
        // line 10
        echo "
    <div class=\"grid\">
        ";
        // line 12
        $this->loadTemplate("SuluContentBundle:Template:macros/properties.html.twig", "SuluContentBundle:Template:macros/section.html.twig", 12)->display(array_merge($context, array("properties" => twig_get_attribute($this->env, $this->source,         // line 13
($context["property"] ?? null), "childProperties", array()), "excludedProperties" =>         // line 14
($context["excludedProperties"] ?? null))));
        // line 16
        echo "    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "SuluContentBundle:Template:macros/section.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 16,  59 => 14,  58 => 13,  57 => 12,  53 => 10,  50 => 9,  44 => 7,  42 => 6,  35 => 4,  32 => 3,  30 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SuluContentBundle:Template:macros/section.html.twig", "C:\\Users\\Lorenz\\Desktop\\MASSIVEART\\ma-getraenkeverwaltung\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\ContentBundle/Resources/views/Template/macros/section.html.twig");
    }
}
