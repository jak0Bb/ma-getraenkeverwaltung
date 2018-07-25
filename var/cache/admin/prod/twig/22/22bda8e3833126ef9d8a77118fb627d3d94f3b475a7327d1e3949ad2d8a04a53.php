<?php

/* SuluContactBundle:Template:account.list.html.twig */
class __TwigTemplate_477e334e28a374f6227ff60655f6db0ca73b1d927b1614f8b0bfc120e5759f59 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("SuluContactBundle:Template:base.list.html.twig", "SuluContactBundle:Template:account.list.html.twig", 1);
        $this->blocks = array(
            'list' => array($this, 'block_list'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SuluContactBundle:Template:base.list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_list($context, array $blocks = array())
    {
        // line 4
        echo "    <div id=\"companies-list-info\"></div>
    <div id=\"companies-list\" class=\"datagrid-container\"></div>
";
    }

    public function getTemplateName()
    {
        return "SuluContactBundle:Template:account.list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SuluContactBundle:Template:account.list.html.twig", "C:\\Users\\Lorenz\\Desktop\\Node\\ma-getraenkeverwaltung\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\ContactBundle/Resources/views/Template/account.list.html.twig");
    }
}
