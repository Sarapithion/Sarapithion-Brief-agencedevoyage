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

/* adv_voyage/show.html.twig */
class __TwigTemplate_a8519c97806e865018d54acf56c1acf4 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "adv_voyage/show.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "AdvVoyage";
        return; yield '';
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        yield "    <h1>AdvVoyage</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["adv_voyage"] ?? null), "id", [], "any", false, false, false, 12), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Durée</th>
                <td>";
        // line 16
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["adv_voyage"] ?? null), "Durée", [], "any", false, false, false, 16), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Date_départ</th>
                <td>";
        // line 20
        ((CoreExtension::getAttribute($this->env, $this->source, ($context["adv_voyage"] ?? null), "DateDépart", [], "any", false, false, false, 20)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["adv_voyage"] ?? null), "DateDépart", [], "any", false, false, false, 20), "Y-m-d H:i:s"), "html", null, true)) : (yield ""));
        yield "</td>
            </tr>
            <tr>
                <th>Date_fin</th>
                <td>";
        // line 24
        ((CoreExtension::getAttribute($this->env, $this->source, ($context["adv_voyage"] ?? null), "DateFin", [], "any", false, false, false, 24)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["adv_voyage"] ?? null), "DateFin", [], "any", false, false, false, 24), "Y-m-d H:i:s"), "html", null, true)) : (yield ""));
        yield "</td>
            </tr>
            <tr>
                <th>Url_image</th>
                <td>";
        // line 28
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["adv_voyage"] ?? null), "UrlImage", [], "any", false, false, false, 28), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Résumé</th>
                <td>";
        // line 32
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["adv_voyage"] ?? null), "Résumé", [], "any", false, false, false, 32), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Nombre_pers_min</th>
                <td>";
        // line 36
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["adv_voyage"] ?? null), "NombrePersMin", [], "any", false, false, false, 36), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Nombre_pers_max</th>
                <td>";
        // line 40
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["adv_voyage"] ?? null), "NombrePersMax", [], "any", false, false, false, 40), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Prix</th>
                <td>";
        // line 44
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["adv_voyage"] ?? null), "Prix", [], "any", false, false, false, 44), "html", null, true);
        yield "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 49
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_adv_voyage_index");
        yield "\">back to list</a>

    <a href=\"";
        // line 51
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_adv_voyage_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["adv_voyage"] ?? null), "id", [], "any", false, false, false, 51)]), "html", null, true);
        yield "\">edit</a>

    ";
        // line 53
        yield Twig\Extension\CoreExtension::include($this->env, $context, "adv_voyage/_delete_form.html.twig");
        yield "
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "adv_voyage/show.html.twig";
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
        return array (  142 => 53,  137 => 51,  132 => 49,  124 => 44,  117 => 40,  110 => 36,  103 => 32,  96 => 28,  89 => 24,  82 => 20,  75 => 16,  68 => 12,  60 => 6,  56 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "adv_voyage/show.html.twig", "C:\\Users\\Utilisateur\\Documents\\Formation Dev web\\Briefs\\Sarapithion-Brief-agencedevoyage\\Symfony\\PROD\\templates\\adv_voyage\\show.html.twig");
    }
}
