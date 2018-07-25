<?php

/* SuluSecurityBundle:Template:role.list.html.twig */
class __TwigTemplate_bcebff2fcf558d4fb486fb5a59ad5dad02704d0d4cdf6c02710ec72134e10b6f extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'options' => array($this, 'block_options'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('options', $context, $blocks);
        // line 4
        echo "
<div id=\"roles-list-info\"></div>
<div id=\"roles-list\" class=\"datagrid-container\"></div>

<div id=\"dialog\"></div>
";
    }

    // line 1
    public function block_options($context, array $blocks = array())
    {
        // line 2
        echo "    <div id=\"list-toolbar-container\" class=\"list-toolbar-container\"></div>
";
    }

    public function getTemplateName()
    {
        return "SuluSecurityBundle:Template:role.list.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  38 => 2,  35 => 1,  26 => 4,  24 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SuluSecurityBundle:Template:role.list.html.twig", "C:\\Users\\Lorenz\\Desktop\\Node\\ma-getraenkeverwaltung\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\SecurityBundle/Resources/views/Template/role.list.html.twig");
    }
}
