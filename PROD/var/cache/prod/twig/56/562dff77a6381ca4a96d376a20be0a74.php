<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* adv_user/edit.html.twig */
class __TwigTemplate_3c86d536ef9bc0589ecefa5a0bd463e7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "adv_user/edit.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "Edit AdvUser";
        return; yield '';
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        yield "    <h1>Edit AdvUser</h1>

    ";
        // line 8
        yield Twig\Extension\CoreExtension::include($this->env, $context, "adv_user/_form.html.twig", ["button_label" => "Update"]);
        yield "

    <a href=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_adv_user_index");
        yield "\">back to list</a>

    ";
        // line 12
        yield Twig\Extension\CoreExtension::include($this->env, $context, "adv_user/_delete_form.html.twig");
        yield "
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "adv_user/edit.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  74 => 12,  69 => 10,  64 => 8,  60 => 6,  56 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "adv_user/edit.html.twig", "C:\\Users\\Utilisateur\\Documents\\Formation Dev web\\Briefs\\Sarapithion-Brief-agencedevoyage\\Symfony\\PROD\\templates\\adv_user\\edit.html.twig");
    }
}
