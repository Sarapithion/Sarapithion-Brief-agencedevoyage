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

/* adv_voyage/index.html.twig */
class __TwigTemplate_e69b21c71b37e3c63b19f647c51e1638 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "adv_voyage/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "AdvVoyage index";
        return; yield '';
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        yield "

    <h1>Liste des voyages réservés</h1>

   <table class=\"table-auto border-x border-b w-full\">
    <thead>
        <tr>
            <th class=\"border px-4 py-2\">Id</th>
            <th class=\"border px-4 py-2\">Durée</th>
            <th class=\"border px-4 py-2\">Date_départ</th>
            <th class=\"border px-4 py-2\">Date_fin</th>
            <th class=\"border px-4 py-2\">Url_image</th>
            <th class=\"border px-4 py-2\">Résumé</th>
            <th class=\"border px-4 py-2\">Nombre_pers_min</th>
            <th class=\"border px-4 py-2\">Nombre_pers_max</th>
            <th class=\"border px-4 py-2\">Prix</th>
            <th class=\"border px-4 py-2\">actions</th>
        </thead>
        <tbody>
        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["adv_voyages"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["adv_voyage"]) {
            // line 26
            yield "            <tr>
                <td>";
            // line 27
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["adv_voyage"], "id", [], "any", false, false, false, 27), "html", null, true);
            yield "</td>
                <td class=\"example-wrapper\">";
            // line 28
            ((CoreExtension::getAttribute($this->env, $this->source, $context["adv_voyage"], "Duree", [], "any", false, false, false, 28)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["adv_voyage"], "Duree", [], "any", false, false, false, 28), "html", null, true)) : (yield ""));
            yield "</td>
                <td>";
            // line 29
            ((CoreExtension::getAttribute($this->env, $this->source, $context["adv_voyage"], "DateDepart", [], "any", false, false, false, 29)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["adv_voyage"], "DateDepart", [], "any", false, false, false, 29), "d-m-Y"), "html", null, true)) : (yield ""));
            yield "</td>
                <td>";
            // line 30
            ((CoreExtension::getAttribute($this->env, $this->source, $context["adv_voyage"], "DateFin", [], "any", false, false, false, 30)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["adv_voyage"], "DateFin", [], "any", false, false, false, 30), "d-m-Y"), "html", null, true)) : (yield ""));
            yield "</td>
                <td>";
            // line 31
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["adv_voyage"], "UrlImage", [], "any", false, false, false, 31), "html", null, true);
            yield "</td>
                <td>";
            // line 32
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["adv_voyage"], "Resume", [], "any", false, false, false, 32), "html", null, true);
            yield "</td>
                <td>";
            // line 33
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["adv_voyage"], "NombrePersMin", [], "any", false, false, false, 33), "html", null, true);
            yield "</td>
                <td>";
            // line 34
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["adv_voyage"], "NombrePersMax", [], "any", false, false, false, 34), "html", null, true);
            yield "</td>
                <td>";
            // line 35
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["adv_voyage"], "Prix", [], "any", false, false, false, 35), "html", null, true);
            yield "</td>
                <td>
                    <a href=\"";
            // line 37
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_adv_voyage_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["adv_voyage"], "id", [], "any", false, false, false, 37)]), "html", null, true);
            yield "\">show</a>
                    <a href=\"";
            // line 38
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_adv_voyage_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["adv_voyage"], "id", [], "any", false, false, false, 38)]), "html", null, true);
            yield "\">edit</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 42
            yield "            <tr>
                <td colspan=\"10\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['adv_voyage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        yield "        </tbody>
    </table>

    <a href=\"";
        // line 49
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_adv_voyage_new");
        yield "\">Create new</a>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "adv_voyage/index.html.twig";
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
        return array (  153 => 49,  148 => 46,  139 => 42,  130 => 38,  126 => 37,  121 => 35,  117 => 34,  113 => 33,  109 => 32,  105 => 31,  101 => 30,  97 => 29,  93 => 28,  89 => 27,  86 => 26,  81 => 25,  60 => 6,  56 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "adv_voyage/index.html.twig", "C:\\Users\\Utilisateur\\Documents\\Formation Dev web\\Briefs\\Sarapithion-Brief-agencedevoyage\\Symfony\\PROD\\templates\\adv_voyage\\index.html.twig");
    }
}
