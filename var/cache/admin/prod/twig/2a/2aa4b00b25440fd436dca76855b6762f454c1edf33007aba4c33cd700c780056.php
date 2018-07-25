<?php

/* SuluContactBundle:Template:base.form.html.twig */
class __TwigTemplate_58a514ecefd1f0a8d402fe1413c6be1ceb848e3001c0233b267e2e0a97864f15 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'highlight' => array($this, 'block_highlight'),
            'static' => array($this, 'block_static'),
            'contact' => array($this, 'block_contact'),
            'tags' => array($this, 'block_tags'),
            'data' => array($this, 'block_data'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<form id=\"";
        echo twig_escape_filter($this->env, ($context["formId"] ?? null), "html", null, true);
        echo "\" class=\"grid\">
    <input type=\"hidden\" data-mapper-property=\"id\"/>

    <div class=\"highlight-section\">
        ";
        // line 5
        $this->displayBlock('highlight', $context, $blocks);
        // line 7
        echo "    </div>

    <div class=\"fixed-width\">
        ";
        // line 10
        $this->displayBlock('static', $context, $blocks);
        // line 12
        echo "
        ";
        // line 13
        $this->displayBlock('contact', $context, $blocks);
        // line 304
        echo "
        ";
        // line 305
        $this->displayBlock('tags', $context, $blocks);
        // line 316
        echo "    </div>
</form>

";
        // line 319
        $this->displayBlock('data', $context, $blocks);
    }

    // line 5
    public function block_highlight($context, array $blocks = array())
    {
        // line 6
        echo "        ";
    }

    // line 10
    public function block_static($context, array $blocks = array())
    {
        // line 11
        echo "        ";
    }

    // line 13
    public function block_contact($context, array $blocks = array())
    {
        // line 14
        echo "            <div id=\"contact-edit-form\">
                <div class=\"pos-rel\">
                    <h2 class=\"divider\"><%=translate('contact.contacts.details')%></h2>
                    <span id=\"contact-options-dropdown\" class=\"options-dropdown-container\">
                        <a class=\"contact-options-toggle options-toggle\"><span class=\"fa-gear\"></span></a>
                    </span>
                </div>

                <div class=\"grid-row form-horizontal small\" id=\"addresses\" data-type=\"collection\" data-mapper-property='[{\"data\":\"addresses\",\"tpl\":\"address-tpl\",\"empty-tpl\":\"address-empty-tpl\"}]'>

                    <script type=\"text/template\" id=\"address-empty-tpl\">
                        <div class=\"grid-col-12 floating\">
                            <div class=\"form-group\">
                                <label class=\"visible\"></label>
                                <label class=\"hidden\">
                                    <%=translate('contact.address.add.label')%>
                                </label>
                                <div class=\"grid-col-12 m-top-5\">
                                    <div class=\"addButton address-add\"></div>
                                </div>
                            </div>
                        </div>
                    </script>

                    <script type=\"text/template\" id=\"address-tpl\">
                        <div class=\"grid-col-12 floating m-top-0 address-component\">
                            <~ var uid = _.uniqueId('address_'), first = true; ~>
                            <~ var lines = []; ~>
                            <~ if (typeof title !== 'undefined' && title !== '') { lines.push(title); } ~>
                            <~ var streetAndNumber = (street + ' ' + number).trim(); if (streetAndNumber !== '') { lines.push(streetAndNumber); } ~>
                            <~ var zipAndCity = (zip + ' ' + city).trim(); if (zipAndCity !== '') { lines.push(zipAndCity); } ~>
                            <~ lines.push(country.name); ~>
                            <~ var addressString = lines.join(', '); ~>
                            <div class=\"form-group\">

                                <label class=\"visible\"></label>
                                <label class=\"hidden\">
                                    <~ if(primaryAddress) { ~>
                                        <%=translate('contact.address.primaryAddress')%>
                                    <~ } else { ~>
                                        <%=translate('public.address')%>
                                    <~ } ~>
                                    <span class=\"label-container\">
                                        (<span class=\"type-value\" data-form=\"true\" data-mapper-property=\"addressType\" data-type=\"label\" data-type-label=\"name\" data-type-id=\"id\" data-id=\"";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["defaultAddressType"] ?? null), "id", array()), "html", null, true);
        echo "\">
                                            <%= translate('";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["defaultAddressType"] ?? null), "name", array()), "html", null, true);
        echo "') %>
                                        </span>)
                                    </span>
                                </label>

                                <div class=\"address-row clickable pointer\">

                                    <span><~= addressString ~></span>

                                    <div class=\"hidden\">
                                        <input type=\"hidden\" data-mapper-property=\"id\" class=\"id-value\"/>
                                        <input type=\"hidden\" data-mapper-property=\"title\" data-form=\"true\"/>
                                        <input type=\"hidden\" data-mapper-property=\"street\" data-form=\"true\"/>
                                        <input type=\"hidden\" data-mapper-property=\"number\" data-form=\"true\"/>
                                        <input type=\"hidden\" data-mapper-property=\"zip\" data-form=\"true\"/>
                                        <input type=\"hidden\" data-mapper-property=\"city\" data-form=\"true\"/>
                                        <input type=\"hidden\" data-mapper-property=\"country\" data-form=\"true\" data-type=\"readonly-select\" data-type-id-property=\"id\" data-type-output-property=\"name\" data-type-data=\"";
        // line 74
        echo twig_escape_filter($this->env, json_encode(($context["countries"] ?? null)), "html", null, true);
        echo "\"/>
                                        <input type=\"hidden\" data-mapper-property=\"state\" data-form=\"true\"/>
                                        <input type=\"hidden\" data-mapper-property=\"addition\" data-form=\"true\"/>
                                        <input type=\"hidden\" data-mapper-property=\"postboxNumber\" data-form=\"true\"/>
                                        <input type=\"hidden\" data-mapper-property=\"postboxPostcode\" data-form=\"true\"/>
                                        <input type=\"hidden\" data-mapper-property=\"postboxCity\" data-form=\"true\"/>
                                        <input type=\"hidden\" data-mapper-property=\"latitude\" data-form=\"true\"/>
                                        <input type=\"hidden\" data-mapper-property=\"longitude\" data-form=\"true\"/>
                                    </div>

                                    <~ if(billingAddress && deliveryAddress) { ~>
                                    <span>(<%=translate('contact.address.billingAddress')%>, <%=translate('contact.address.deliveryAddress')%>)</span>
                                    <~ } if (deliveryAddress && !billingAddress) { ~>
                                    <span>(<%=translate('contact.address.deliveryAddress')%>)</span>
                                    <~ } if (!deliveryAddress && billingAddress) { ~>
                                    <span>(<%=translate('contact.address.billingAddress')%>)</span>
                                    <~ }  ~>

                                    <div class=\"hidden\">
                                        <span data-mapper-property=\"primaryAddress\" data-form=\"true\"></span>
                                        <span data-mapper-property=\"billingAddress\" data-form=\"true\"></span>
                                        <span data-mapper-property=\"deliveryAddress\" data-form=\"true\"></span>
                                        <span data-mapper-property=\"note\" data-form=\"true\"></span>
                                    </div>

                                    <span class=\"fa-times icon address-remove\"></span>
                                </div>
                            </div>
                        </div>
                    </script>
                </div>

                <div class=\"grid-row form-horizontal small\" id=\"contact-fields\" data-type=\"collection\" data-mapper-property='[{\"data\":\"emails\",\"tpl\":\"email-tpl\"},{\"data\":\"phones\",\"tpl\":\"phone-tpl\"},{\"data\":\"urls\",\"tpl\":\"url-tpl\"},{\"data\":\"faxes\",\"tpl\":\"fax-tpl\"},{\"data\":\"socialMediaProfiles\",\"tpl\":\"social-media-profile-tpl\"}]'>
                    <script type=\"text/template\" id=\"email-tpl\">
                        <div class=\"grid-col-6 floating\">
                            <~ var uid = _.uniqueId('email_') ~>
                            <div class=\"form-group\">
                                <label for=\"<~= uid ~>\" class=\"visible\"></label>
                                <label for=\"<~= uid ~>\" class=\"hidden\">
                                    <%=translate('public.email')%>
                                    <span class=\"label-container\">
                                        (<span class=\"type-value\" data-form=\"true\" data-mapper-property=\"emailType\" data-type=\"label\" data-type-label=\"name\" data-type-id=\"id\" data-id=\"";
        // line 115
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["defaultEmailType"] ?? null), "id", array()), "html", null, true);
        echo "\">
                                            <%=translate('";
        // line 116
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["defaultEmailType"] ?? null), "name", array()), "html", null, true);
        echo "')%>
                                        </span>)
                                    </span>
                                </label>

                                <div data-form=\"true\"
                                     data-type=\"husky-input\"
                                     data-aura-component=\"input@husky\"
                                     data-aura-skin=\"email\"
                                     data-aura-instance-name=\"email\"
                                     data-aura-input-id=\"<~= uid ~>\"
                                     data-aura-input-name=\"<~= uid ~>\"
                                     data-mapper-property=\"email\"></div>
                                <span class=\"hidden\" data-mapper-property=\"attributes\" data-form=\"true\" data-type=\"attributes\"></span>
                                <input type=\"hidden\" data-mapper-property=\"id\" class=\"id-value\"/>
                            </div>
                        </div>
                    </script>
                    <script type=\"text/template\" id=\"fax-tpl\">
                        <div class=\"grid-col-6 floating\">
                            <~ var uid = _.uniqueId('fax_') ~>
                            <div class=\"form-group\">
                                <label for=\"<~= uid ~>\" class=\"visible\"></label>
                                <label for=\"<~= uid ~>\" class=\"hidden\">
                                    <%=translate('public.fax')%>
                                    <span class=\"label-container\">
                                        (<span class=\"type-value\" data-form=\"true\" data-mapper-property=\"faxType\" data-type=\"label\" data-type-label=\"name\" data-type-id=\"id\" data-id=\"";
        // line 142
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["defaultFaxType"] ?? null), "id", array()), "html", null, true);
        echo "\">
                                            (<%=translate('";
        // line 143
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["defaultFaxType"] ?? null), "name", array()), "html", null, true);
        echo "')%>)
                                        </span>)
                                    </span>
                                </label>

                                <div data-form=\"true\"
                                     data-type=\"husky-input\"
                                     data-aura-component=\"input@husky\"
                                     data-aura-skin=\"phone\"
                                     data-aura-front-icon=\"fax\"
                                     data-aura-instance-name=\"fax\"
                                     data-aura-input-id=\"<~= uid ~>\"
                                     data-aura-input-name=\"<~= uid ~>\"
                                     data-mapper-property=\"fax\"></div>
                                <span class=\"hidden\" data-mapper-property=\"attributes\" data-form=\"true\" data-type=\"attributes\"></span>
                                <input type=\"hidden\" data-mapper-property=\"id\" class=\"id-value\"/>
                            </div>
                        </div>
                    </script>
                    <script type=\"text/template\" id=\"phone-tpl\">
                        <div class=\"grid-col-6 floating\">
                            <~ var uid = _.uniqueId('phone_') ~>
                            <div class=\"form-group\">
                                <label for=\"<~= uid ~>\" class=\"visible\"></label>
                                <label for=\"<~= uid ~>\" class=\"hidden\">
                                    <%=translate('public.phone')%>
                                    <span class=\"label-container\">
                                        (<span class=\"type-value\" data-form=\"true\" data-mapper-property=\"phoneType\" data-type=\"label\" data-type-label=\"name\" data-type-id=\"id\" data-id=\"";
        // line 170
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["defaultPhoneType"] ?? null), "id", array()), "html", null, true);
        echo "\">
                                        <%= translate('";
        // line 171
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["defaultPhoneType"] ?? null), "name", array()), "html", null, true);
        echo "') %>
                                        </span>)
                                    </span>
                                </label>

                                <div data-form=\"true\"
                                     data-type=\"husky-input\"
                                     data-aura-component=\"input@husky\"
                                     data-aura-skin=\"phone\"
                                     data-aura-instance-name=\"phone\"
                                     data-aura-input-id=\"<~= uid ~>\"
                                     data-aura-input-name=\"<~= uid ~>\"
                                     data-mapper-property=\"phone\"></div>
                                <span class=\"hidden\" data-mapper-property=\"attributes\" data-form=\"true\" data-type=\"attributes\"></span>
                                <input type=\"hidden\" data-mapper-property=\"id\" class=\"id-value\"/>
                            </div>
                        </div>
                    </script>
                    <script type=\"text/template\" id=\"url-tpl\">
                        <div class=\"grid-col-6 floating\">
                            <~ var uid = _.uniqueId('url_') ~>
                            <div class=\"form-group\">
                                <label for=\"<~= uid ~>\" class=\"visible\"></label>
                                <label for=\"<~= uid ~>\" class=\"hidden\">
                                    <%= translate('contact.accounts.website') %>
                                    <span class=\"label-container\">
                                        (<span class=\"type-value\" data-form=\"true\" data-mapper-property=\"urlType\" data-type=\"label\" data-type-label=\"name\" data-type-id=\"id\" data-id=\"";
        // line 197
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["defaultUrlType"] ?? null), "id", array()), "html", null, true);
        echo "\"><%= translate('";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["defaultUrlType"] ?? null), "name", array()), "html", null, true);
        echo "') %></span>)
                                    </span>
                                </label>

                                <div data-form=\"true\"
                                     data-type=\"url-input\"
                                     data-aura-component=\"url-input@husky\"
                                     data-aura-instance-name=\"url\"
                                     data-mapper-property=\"url\"
                                     class=\"trigger-save-button\"></div>
                                <span class=\"hidden\" data-mapper-property=\"attributes\" data-form=\"true\" data-type=\"attributes\"></span>
                                <input type=\"hidden\" data-mapper-property=\"id\" class=\"id-value\"/>
                            </div>
                        </div>
                    </script>
                    <script type=\"text/template\" id=\"social-media-profile-tpl\">
                        <div class=\"grid-col-6 floating\">
                            <~ var uid = _.uniqueId('social_media_profile_') ~>
                            <div class=\"form-group\">
                                <label for=\"<~= uid ~>\" class=\"visible\"></label>
                                <label for=\"<~= uid ~>\" class=\"hidden\">
                                    <%=translate('public.socialMediaProfile')%>
                                    <span class=\"label-container\">
                                        (<span class=\"type-value\"
                                               data-form=\"true\"
                                               data-mapper-property=\"socialMediaProfileType\"
                                               data-type=\"label\"
                                               data-type-label=\"name\"
                                               data-type-id=\"id\"
                                               data-id=\"";
        // line 226
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["defaultSocialMediaProfileType"] ?? null), "id", array()), "html", null, true);
        echo "\">
                                            (<%=translate('";
        // line 227
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["defaultSocialMediaProfileType"] ?? null), "name", array()), "html", null, true);
        echo "')%>)
                                        </span>)
                                    </span>
                                </label>

                                <div data-form=\"true\"
                                     data-type=\"husky-input\"
                                     data-aura-component=\"input@husky\"
                                     data-aura-front-icon=\"user\"
                                     data-aura-instance-name=\"social-media-profile\"
                                     data-aura-input-id=\"<~= uid ~>\"
                                     data-aura-input-name=\"<~= uid ~>\"
                                     data-mapper-property=\"username\"></div>
                                <span class=\"hidden\"
                                      data-mapper-property=\"attributes\"
                                      data-form=\"true\"
                                      data-type=\"attributes\"></span>
                                <input type=\"hidden\" data-mapper-property=\"id\" class=\"id-value\"/>
                            </div>
                        </div>
                    </script>
                </div>

                <div class=\"grid-row form-horizontal\" data-type=\"collection\" data-mapper-property='{\"data\":\"notes\",\"tpl\":\"note-tpl\"}'>
                    <script type=\"text/template\" id=\"note-tpl\">
                        <div class=\"grid-col-12 floating\">
                            <~ var uid = _.uniqueId('note_') ~>
                            <div class=\"form-group\">
                                <label for=\"<~= uid ~>\" class=\"top visible\"></label>
                                <label class=\"top hidden\" for=\"<~= uid ~>\"><%= translate('public.note') %></label>
                                <input type=\"hidden\" data-mapper-property=\"id\" class=\"id-value\"/>
                                <textarea id=\"<~= uid ~>\" data-form=\"true\" class=\"form-element\" data-mapper-property=\"value\"> </textarea>
                            </div>
                        </div>
                    </script>
                </div>

                <h2 class=\"divider\"><%=translate('contact.accounts.bank-accounts')%></h2>

                <div class=\"grid-row small form-horizontal\" id=\"bankAccounts\" data-type=\"collection\" data-mapper-property='[{\"data\":\"bankAccounts\",\"tpl\":\"bank-account-tpl\",\"empty-tpl\":\"bank-account-empty-tpl\"}]'>
                    <script type=\"text/template\" id=\"bank-account-empty-tpl\">
                        <div class=\"grid-col-12 m-bottom-5 floating\">
                            <div class=\"form-group\">
                                <label>
                                    <%=translate('contact.accounts.bankAccounts.add.label')%>
                                </label>
                                <div class=\"m-top-5\">
                                    <div class=\"addButton bank-account-add\"></div>
                                </div>
                            </div>
                        </div>
                    </script>

                    <script type=\"text/template\" id=\"bank-account-tpl\">
                        <div class=\"grid-col-12 floating m-top-0 bank-account-component\">
                            <div class=\"\">
                                <div class=\"form-group\">
                                    <label><%=translate('contact.accounts.bankAccount.label')%></label>

                                    <div class=\"bank-account-row clickable pointer\">
                                        <span data-mapper-property=\"id\" data-form=\"true\" class=\"hidden\"></span>

                                        <span data-mapper-property=\"bankName\" data-form=\"true\"></span>
                                        <span><%=translate('public.bic')%></span>
                                        <span data-mapper-property=\"bic\" data-form=\"true\"></span>
                                        <span><%=translate('public.iban')%></span>
                                        <span data-mapper-property=\"iban\" data-form=\"true\"></span>
                                        <span class=\"fa-times icon bank-account-remove\"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </script>

                </div>
            </div>
        ";
    }

    // line 305
    public function block_tags($context, array $blocks = array())
    {
        // line 306
        echo "            <div class=\"grid-row\">
                <h2 class=\"divider\"><%= translate('contact.contacts.assignment') %></h2>
            </div>
            <div class=\"grid-row form-horizontal\">
                <div class=\"form-group\">
                    <label><%= translate('tag.tags.title') %></label>
                    <div id=\"tags\"></div>
                </div>
            </div>
        ";
    }

    // line 319
    public function block_data($context, array $blocks = array())
    {
        // line 320
        echo "    <script type=\"text/javascript\">
        (function() {
            var defaults = {
                        emailType: {
                            'id': ";
        // line 324
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["defaultEmailType"] ?? null), "id", array()), "html", null, true);
        echo ",
                            'name': '";
        // line 325
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["defaultEmailType"] ?? null), "name", array()), "html", null, true);
        echo "'
                        },
                        phoneType: {
                            'id': ";
        // line 328
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["defaultPhoneType"] ?? null), "id", array()), "html", null, true);
        echo ",
                            'name': '";
        // line 329
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["defaultPhoneType"] ?? null), "name", array()), "html", null, true);
        echo "'
                        },
                        addressType: {
                            'id': ";
        // line 332
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["defaultAddressType"] ?? null), "id", array()), "html", null, true);
        echo ",
                            'name': '";
        // line 333
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["defaultAddressType"] ?? null), "name", array()), "html", null, true);
        echo "'
                        },
                        urlType: {
                            'id': ";
        // line 336
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["defaultUrlType"] ?? null), "id", array()), "html", null, true);
        echo ",
                            'name': '";
        // line 337
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["defaultUrlType"] ?? null), "name", array()), "html", null, true);
        echo "'
                        },
                        faxType: {
                            'id': ";
        // line 340
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["defaultFaxType"] ?? null), "id", array()), "html", null, true);
        echo ",
                            'name': '";
        // line 341
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["defaultFaxType"] ?? null), "name", array()), "html", null, true);
        echo "'
                        },
                        socialMediaProfileType: {
                            'id': ";
        // line 344
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["defaultSocialMediaProfileType"] ?? null), "id", array()), "html", null, true);
        echo ",
                            'name': '";
        // line 345
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["defaultSocialMediaProfileType"] ?? null), "name", array()), "html", null, true);
        echo "'
                        },
                        country: {
                            'id': ";
        // line 348
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["defaultCountry"] ?? null), "id", array()), "html", null, true);
        echo ",
                            'name': '";
        // line 349
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["defaultCountry"] ?? null), "name", array()), "html", null, true);
        echo "'
                        }
                    },
                    types = {
                        'email': ";
        // line 353
        echo json_encode(($context["emailTypes"] ?? null));
        echo ",
                        'phone': ";
        // line 354
        echo json_encode(($context["phoneTypes"] ?? null));
        echo ",
                        'address': ";
        // line 355
        echo json_encode(($context["addressTypes"] ?? null));
        echo ",
                        'url': ";
        // line 356
        echo json_encode(($context["urlTypes"] ?? null));
        echo ",
                        'fax': ";
        // line 357
        echo json_encode(($context["faxTypes"] ?? null));
        echo ",
                        'socialMediaProfile': ";
        // line 358
        echo json_encode(($context["socialMediaProfileTypes"] ?? null));
        echo ",
                        'countries': ";
        // line 359
        echo json_encode(($context["countries"] ?? null));
        echo "
                    };
            App.emit('sulu.contacts.set-types', types);
            App.emit('sulu.contacts.set-defaults', defaults);
        })();
    </script>
";
    }

    public function getTemplateName()
    {
        return "SuluContactBundle:Template:base.form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  532 => 359,  528 => 358,  524 => 357,  520 => 356,  516 => 355,  512 => 354,  508 => 353,  501 => 349,  497 => 348,  491 => 345,  487 => 344,  481 => 341,  477 => 340,  471 => 337,  467 => 336,  461 => 333,  457 => 332,  451 => 329,  447 => 328,  441 => 325,  437 => 324,  431 => 320,  428 => 319,  415 => 306,  412 => 305,  331 => 227,  327 => 226,  293 => 197,  264 => 171,  260 => 170,  230 => 143,  226 => 142,  197 => 116,  193 => 115,  149 => 74,  130 => 58,  126 => 57,  81 => 14,  78 => 13,  74 => 11,  71 => 10,  67 => 6,  64 => 5,  60 => 319,  55 => 316,  53 => 305,  50 => 304,  48 => 13,  45 => 12,  43 => 10,  38 => 7,  36 => 5,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SuluContactBundle:Template:base.form.html.twig", "C:\\Users\\Lorenz\\Desktop\\Node\\ma-getraenkeverwaltung\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\ContactBundle/Resources/views/Template/base.form.html.twig");
    }
}
