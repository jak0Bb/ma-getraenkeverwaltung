<?php

/* SuluContentBundle:Template:macros/single.html.twig */
class __TwigTemplate_8d80c6ca86374c4a20b8286d1f268d245f2c5c6f7113c6e4e37ee6f632be42f1 extends Twig_Template
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
        echo " floating form-group\">
    <label for=\"";
        // line 2
        echo ($context["id"] ?? null);
        echo "\" class=\"pointer ";
        echo ((twig_get_attribute($this->env, $this->source, ($context["property"] ?? null), "mandatory", array())) ? ("required") : (""));
        echo "\"
           title=\"";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["property"] ?? null), "getInfoText", array(0 => ($context["userLocale"] ?? null)), "method"), "html", null, true);
        echo "\">
        ";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["property"] ?? null), "getTitle", array(0 => ($context["userLocale"] ?? null)), "method"), "html", null, true);
        echo "
    </label>

    ";
        // line 7
        $this->loadTemplate(twig_get_attribute($this->env, $this->source, ($context["type"] ?? null), "template", array()), "SuluContentBundle:Template:macros/single.html.twig", 7)->display($context);
        // line 8
        echo "
    ";
        // line 9
        if (twig_get_attribute($this->env, $this->source, ($context["property"] ?? null), "getInfoText", array(0 => ($context["userLocale"] ?? null)), "method")) {
            // line 10
            echo "        <div class=\"input-description\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["property"] ?? null), "getInfoText", array(0 => ($context["userLocale"] ?? null)), "method"), "html", null, true);
            echo "</div>
    ";
        }
        // line 12
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "SuluContentBundle:Template:macros/single.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 12,  51 => 10,  49 => 9,  46 => 8,  44 => 7,  38 => 4,  34 => 3,  28 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SuluContentBundle:Template:macros/single.html.twig", "C:\\Users\\Lorenz\\Desktop\\MASSIVEART\\ma-getraenkeverwaltung\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\ContentBundle/Resources/views/Template/macros/single.html.twig");
    }
}
