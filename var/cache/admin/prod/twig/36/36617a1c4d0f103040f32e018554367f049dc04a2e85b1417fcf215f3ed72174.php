<?php

/* SuluContactBundle:Template:contact.list.html.twig */
class __TwigTemplate_980fbd52c60170f55910dadfdf7308fd208440060092c307a7dec8f905fb1707 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("SuluContactBundle:Template:base.list.html.twig", "SuluContactBundle:Template:contact.list.html.twig", 1);
        $this->blocks = array(
            'list' => array($this, 'block_list'),
            'data' => array($this, 'block_data'),
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
        echo "    <div id=\"people-list-info\"></div>
    <div id=\"people-list\" class=\"datagrid-container\"></div>
";
    }

    // line 8
    public function block_data($context, array $blocks = array())
    {
        // line 9
        echo "    ";
        // line 10
        echo "    <script type=\"text/javascript\">
        (function() {
            var types = {
                formOfAddress: ";
        // line 13
        echo json_encode(($context["form_of_address"] ?? null));
        echo ",
                emailTypes: ";
        // line 14
        echo json_encode(($context["email_types"] ?? null));
        echo "
            };
            App.emit('sulu.contacts.set-types', types);
        })();
    </script>
";
    }

    public function getTemplateName()
    {
        return "SuluContactBundle:Template:contact.list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 14,  52 => 13,  47 => 10,  45 => 9,  42 => 8,  36 => 4,  33 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SuluContactBundle:Template:contact.list.html.twig", "C:\\xampp\\htdocs\\ma-getraenkeverwaltung\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\ContactBundle/Resources/views/Template/contact.list.html.twig");
    }
}
