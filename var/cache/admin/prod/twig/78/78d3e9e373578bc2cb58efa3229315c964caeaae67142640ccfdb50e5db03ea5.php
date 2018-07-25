<?php

/* SuluContactBundle:Template:contact.form.html.twig */
class __TwigTemplate_d6a8d1ed44a212abb23f11edea1dccb8ff31b90a0f5f7696c1a4d94da0ab939d extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("SuluContactBundle:Template:base.form.html.twig", "SuluContactBundle:Template:contact.form.html.twig", 1);
        $this->blocks = array(
            'highlight' => array($this, 'block_highlight'),
            'static' => array($this, 'block_static'),
            'tags' => array($this, 'block_tags'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SuluContactBundle:Template:base.form.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["formId"] = "contact-form";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_highlight($context, array $blocks = array())
    {
        // line 5
        echo "    <div class=\"fixed-width no-left-space no-right-space\">
        <div class=\"image\">
            <span class=\"fa-user image-default\"></span>
            <div id=\"image-content\"></div>
            <div id=\"image-dropzone\"></div>
            <div id=\"image-delete\" class=\"fa-trash-o\"></div>
            <a href=\"#\" id=\"image-download\" class=\"fa-cloud-download\"></a>
        </div>
        <div class=\"content\">
            <div class=\"grid-row\">
                <div class=\"grid-col-6\">
                    <div class=\"form-group\">
                        <label for=\"first-name\" class=\"required\"><%=translate('contact.contacts.firstName')%></label>
                        <input class=\"form-element input-bold\" type=\"text\" id=\"first-name\"
                               data-validation-required=\"true\"
                               data-mapper-property=\"firstName\" value=\"\"/>
                    </div>
                </div>
                <div class=\"grid-col-6\">
                    <div class=\"form-group\">
                        <label for=\"last-name\" class=\"required\"><%=translate('contact.contacts.lastName')%></label>
                        <input class=\"form-element input-bold\" type=\"text\" id=\"last-name\" data-trigger=\"focusout\"
                               data-validation-required=\"true\" data-mapper-property=\"lastName\"
                               value=\"\"/>
                    </div>
                </div>
            </div>
            <div class=\"grid-row\">
                <div class=\"grid-col-6\">
                    <div class=\"grid-col-6\">
                        <div class=\"form-group\">
                            <label for=\"form-of-address\"
                                   class=\"required\"><%=translate('contact.contacts.formOfAddress')%></label>

                            <div id=\"form-of-address\"
                                 data-aura-component=\"select@husky\"
                                 data-aura-data=\"";
        // line 41
        echo twig_escape_filter($this->env, json_encode(($context["form_of_address"] ?? null)), "html", null, true);
        echo "\"
                                 data-aura-default-label=\"<%=translate('contact.contacts.formOfAddress.select')%>\"
                                 data-aura-value-name=\"translation\"
                                 data-aura-multiple-select=\"false\"
                                 data-aura-instance-name=\"form-of-address\"
                                 data-type-label=\"translation\"
                                 data-type-required=\"translation\"
                                 data-mapper-property=\"formOfAddress\"
                                 data-type=\"husky-select\"
                                 data-validation-required=\"true\"
                                 data-aura-pre-selected-elements=\"[]\"
                                 data-form=\"true\">
                            </div>
                        </div>
                    </div>
                    <div class=\"grid-col-6\">
                        <div class=\"form-group\">
                            <label for=\"contact-title\"><%=translate('contact.contacts.contactTitle')%></label>

                            <div id=\"contact-title\"
                                 data-form=\"true\"
                                 data-aura-default-label=\"<%=translate('public.please-choose')%>\"
                                 data-aura-url=\"/admin/api/contact/titles\"
                                 data-aura-result-key=\"contactTitles\"
                                 data-aura-component=\"select@husky\"
                                 data-aura-instance-name=\"title-select\"
                                 data-aura-editable=\"true\"
                                 data-aura-direction=\"bottom\"
                                 data-aura-value-name=\"title\"
                                 data-aura-deselect-field=\"select.no-choice\"
                                 data-type=\"husky-select\"
                                 data-mapper-return-value=\"id\"
                                 data-aura-pre-selected-elements=\"[]\"
                                 data-mapper-property=\"title\"></div>
                        </div>
                    </div>
                </div>
                <div class=\"grid-col-6\">
                    <div class=\"form-group\">
                        <label for=\"birthday\"><%=translate('contact.contacts.birthday')%></label>

                        <div id=\"birthday\"
                             data-form=\"true\"
                             data-type=\"husky-input\"
                             data-aura-component=\"input@husky\"
                             data-aura-datepicker-options='{\"endDate\": \"<%= new Date() %>\"}'
                             data-aura-skin=\"date\"
                             data-aura-instance-name=\"birthday\"
                             data-aura-input-id=\"input-birthday\"
                             data-aura-input-name=\"input-birthday\"
                             data-mapper-property=\"birthday\"></div>

                    </div>
                </div>
            </div>
            <div class=\"grid-row\">
                <div class=\"grid-col-6\">
                    <div class=\"form-group\">
                        <label for=\"company-input\"><%=translate('contact.contacts.company')%></label>

                        <div id=\"company\"></div>
                    </div>
                </div>
                <div class=\"grid-col-6\">
                    <div class=\"form-group\">
                        <label for=\"contact-position\"><%=translate('contact.contacts.position')%></label>

                        <div id=\"contact-position\"
                             data-form=\"true\"
                             data-aura-url=\"/admin/api/contact/positions\"
                             data-aura-result-key=\"positions\"
                             data-aura-default-label=\"<%=translate('public.please-choose')%>\"
                             data-aura-component=\"select@husky\"
                             data-aura-instance-name=\"position-select\"
                             data-aura-editable=\"true\"
                             data-aura-direction=\"bottom\"
                             data-aura-value-name=\"position\"
                             data-aura-deselect-field=\"select.no-choice\"
                             data-type=\"husky-select\"
                             data-type-label=\"position\"
                             data-aura-pre-selected-elements=\"[]\"
                             data-mapper-property=\"position\"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
    }

    // line 130
    public function block_static($context, array $blocks = array())
    {
        // line 131
        echo "    <div class=\"grid-row form-horizontal\">
        <div class=\"form-group\">
            <label for=\"salutation\"><%=translate('contact.contacts.salutation')%></label>
            <input class=\"form-element\" type=\"text\" id=\"salutation\" data-trigger=\"focusout\"
                   data-mapper-property=\"salutation\"/>
        </div>
    </div>
";
    }

    // line 140
    public function block_tags($context, array $blocks = array())
    {
        // line 141
        echo "
    ";
        // line 142
        $this->displayParentBlock("tags", $context, $blocks);
        echo "

    <div class=\"grid-row form-horizontal\">
        <div class=\"form-group\">
            <label class=\"top p-top-10\"><%= translate('contact.contacts.categories.label') %></label>

            <div id=\"categories\">
                <div data-aura-component=\"datagrid@husky\"
                     data-aura-url=\"";
        // line 150
        echo twig_escape_filter($this->env, ($context["categoryUrl"] ?? null), "html", null, true);
        echo "&locale=<%= categoryLocale %>\"
                     data-aura-result-key=\"categories\"
                     data-aura-pagination=\"false\"
                     data-aura-instance-name=\"categories\"
                     data-aura-children-property-name=\"hasChildren\"
                     data-aura-resize-listeners=\"false\"
                     data-aura-view-options='{\"table\":{\"cropContents\":false,\"noItemsText\":\"sulu.category.no-categories-available\",\"showHead\":false,\"cssClass\":\"white-box\",\"selectItem\":{\"type\":\"checkbox\",\"inFirstCell\":true}}}'
                     data-aura-matchings='[{\"name\":\"name\",\"content\":\"Name\"},{\"name\":\"id\",\"disabled\":true},{\"name\":\"children\",\"disabled\":true},{\"name\":\"parent\",\"disabled\":true}]'
                     data-form=\"true\"
                     data-type=\"categoryList\"
                     data-mapper-property=\"categories\"
                     data-aura-only-select-leaves=\"false\"
                     data-aura-selected-counter=\"true\"
                     id=\"categoriesList\">
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "SuluContactBundle:Template:contact.form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 150,  190 => 142,  187 => 141,  184 => 140,  173 => 131,  170 => 130,  78 => 41,  40 => 5,  37 => 4,  33 => 1,  31 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SuluContactBundle:Template:contact.form.html.twig", "C:\\Users\\Lorenz\\Desktop\\Node\\ma-getraenkeverwaltung\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\ContactBundle/Resources/views/Template/contact.form.html.twig");
    }
}
