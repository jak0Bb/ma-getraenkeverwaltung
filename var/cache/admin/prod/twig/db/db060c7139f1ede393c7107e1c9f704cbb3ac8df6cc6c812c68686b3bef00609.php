<?php

/* SuluContentBundle:Template:content-types/resource_locator.html.twig */
class __TwigTemplate_7dd9587ad8f5fd2da0bfc33916b07665d5689074e2a9740503ec61217821f8c5 extends Twig_Template
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
        echo "<div id=\"";
        echo ($context["id"] ?? null);
        echo "\"
     class=\"preview-update trigger-save-button\"
     data-property='";
        // line 3
        echo twig_escape_filter($this->env, json_encode(($context["property"] ?? null)), "html", null, true);
        echo "'
     data-mapper-property=\"";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["property"] ?? null), "name", array()), "html", null, true);
        echo "\"
     data-form=\"true\"
     data-type=\"resourceLocator\"
     data-aura-component=\"resource-locator@sulucontent\"
     data-type-instance-name=\"";
        // line 8
        echo ($context["id"] ?? null);
        echo "\"
     data-aura-history-api=\"/admin/api/nodes/<%=content.id%>/resourcelocators?language=";
        // line 9
        echo twig_escape_filter($this->env, ($context["languageCode"] ?? null), "html", null, true);
        echo "&webspace=";
        echo twig_escape_filter($this->env, ($context["webspaceKey"] ?? null), "html", null, true);
        echo "\"
     data-aura-content-id=\"<%=options.id%>\"
     data-aura-webspace-key=\"";
        // line 11
        echo twig_escape_filter($this->env, ($context["webspaceKey"] ?? null), "html", null, true);
        echo "\"
     data-type-webspace-key=\"";
        // line 12
        echo twig_escape_filter($this->env, ($context["webspaceKey"] ?? null), "html", null, true);
        echo "\"
     ";
        // line 13
        if (twig_get_attribute($this->env, $this->source, ($context["property"] ?? null), "mandatory", array())) {
            echo "data-validation-required=\"true\"";
        }
        echo " ></div>
";
    }

    public function getTemplateName()
    {
        return "SuluContentBundle:Template:content-types/resource_locator.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 13,  55 => 12,  51 => 11,  44 => 9,  40 => 8,  33 => 4,  29 => 3,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SuluContentBundle:Template:content-types/resource_locator.html.twig", "C:\\Users\\Lorenz\\Desktop\\MASSIVEART\\ma-getraenkeverwaltung\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\ContentBundle/Resources/views/Template/content-types/resource_locator.html.twig");
    }
}
