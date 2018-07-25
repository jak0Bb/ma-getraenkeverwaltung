<?php

/* SuluSecurityBundle:Template:role.form.html.twig */
class __TwigTemplate_4b4142d2ba6bda9a83ad77bb0ceec4f0c5d902a696139a4e347eccfeb9faa4a6 extends Twig_Template
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
        echo "<form class=\"form-horizontal\" id=\"role-form\">
    <% if(!!data.id) { %>
    <input id=\"id\" type=\"hidden\" value=\"<%= data.id %>\"/>
    <% } %>
    <div class=\"grid-row small\">
        <div class=\"grid-col-12\">
            <div class=\"form-group\">
                <label for=\"name\" class=\"required\"><%= translate('security.roles.name') %></label>
                <input class=\"form-element input-bold\" type=\"text\" id=\"name\" value=\"<%= data.name %>\"
                       data-validation-required=\"true\"/>
            </div>
        </div>
    </div>
    <div class=\"grid-row small\">
        <div class=\"grid-col-6\">
            <div class=\"form-group\">
                <label for=\"system\" class=\"required\"><%= translate('security.roles.system') %></label>
                <div id=\"system\"
                     data-aura-component=\"select@husky\"
                     data-aura-instance-name=\"system\"
                     data-aura-default-label=\"<%=translate('dropdown.please-choose')%>\"
                     data-aura-data='";
        // line 22
        echo twig_escape_filter($this->env, json_encode(($context["systems"] ?? null)), "html", null, true);
        echo "'
                    <% if(data.system == '') { %>
                     data-aura-pre-selected-elements='[\"";
        // line 24
        echo twig_escape_filter($this->env, (($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = ($context["systems"] ?? null)) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5[0] ?? null) : null), "html", null, true);
        echo "\"]'
                    <% } else { %>
                     data-aura-pre-selected-elements='[\"<%= data.system %>\"]'
                    <% } %>
                     ></div>
            </div>
        </div>

        ";
        // line 32
        if (($context["security_types"] ?? null)) {
            // line 33
            echo "        <div class=\"grid-col-6\">
            <div class=\"form-group\">
                <label for=\"security-type\"><%= translate('security.roles.security-type') %></label>
                <div id=\"security-type\"
                     data-aura-component=\"select@husky\"
                     data-aura-instance-name=\"security-type\"
                     data-aura-default-label=\"<%=translate('dropdown.please-choose')%>\"
                     data-aura-data='";
            // line 40
            echo twig_escape_filter($this->env, json_encode(($context["security_types"] ?? null)), "html", null, true);
            echo "'
                    <% if(data.securityType) { %>
                    data-aura-pre-selected-elements='[\"<%= data.securityType.name %>\"]'
                    <% } %>
                ></div>
            </div>
        </div>
        ";
        }
        // line 48
        echo "    </div>

    <div class=\"grid-row\">
        <h2 class=\"divider\"><%= translate('security.roles.permissions') %></h2>

        <div id=\"change-all\" class=\"btn fit m-bottom-20\">
            <%= translate('security.roles.none') %>
        </div>

        <div id=\"matrix-container\"></div>
    </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "SuluSecurityBundle:Template:role.form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 48,  73 => 40,  64 => 33,  62 => 32,  51 => 24,  46 => 22,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SuluSecurityBundle:Template:role.form.html.twig", "C:\\Users\\Lorenz\\Desktop\\Node\\ma-getraenkeverwaltung\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\SecurityBundle/Resources/views/Template/role.form.html.twig");
    }
}
