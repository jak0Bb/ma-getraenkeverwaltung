<?php

/* SuluContentBundle:Template:column.html.twig */
class __TwigTemplate_988b41493ddc1a73862b5318e9d3058430a0afc16aca8c332ed0d7e787c376f1 extends Twig_Template
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
        echo "<script type=\"text/javascript\">
    (function() {
        ";
        // line 4
        echo "        App.emit('sulu.content.localizations', ";
        echo json_encode(($context["localizations"] ?? null));
        echo ");
        ";
        // line 6
        echo "    })();
</script>
";
    }

    public function getTemplateName()
    {
        return "SuluContentBundle:Template:column.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 6,  27 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SuluContentBundle:Template:column.html.twig", "C:\\Users\\Lorenz\\Desktop\\Node\\ma-getraenkeverwaltung\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\ContentBundle/Resources/views/Template/column.html.twig");
    }
}
