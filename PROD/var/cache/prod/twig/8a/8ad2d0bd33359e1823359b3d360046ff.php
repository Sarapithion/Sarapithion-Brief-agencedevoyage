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
class __TwigTemplate_726c8552e1bb4e006fd03da43dd22280 extends Template
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
        yield "Voyages";
        return; yield '';
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        yield "
<nav class=\"bg-violet-500 w-auto h-auto\">
  <div class=\"w-auto h-auto\">
    <div class=\"relative flex h-16 items-center justify-between\">
      <div class=\"absolute inset-y-0 left-0 flex items-center sm:hidden\">
        <button type=\"button\" class=\"relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white\" aria-controls=\"mobile-menu\" aria-expanded=\"false\">
          <span class=\"absolute -inset-0.5\"></span>
          <svg class=\"block h-6 w-6\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" aria-hidden=\"true\">
            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5\" />
          </svg>
    
          <svg class=\"hidden h-6 w-6\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" aria-hidden=\"true\">
            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M6 18L18 6M6 6l12 12\" />
          </svg>
        </button>
      </div>
      <div class=\"flex flex-1 items-center justify-center sm:items-stretch sm:justify-start\">
        <div class=\"flex flex-shrink-0 items-center\">
          <img class=\"h-16 w-auto\" src=\"https://cdn-icons-png.flaticon.com/128/3811/3811676.png\" alt=\"Logo de \"/> 
        </div>
        <div class=\"hidden w-full sm:ml-6 sm:block\">
          <div class=\"flex justify-between space-x-20\">
            <a href=\"#\" class=\"text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium\">Voyages</a>
            <a href=\"#\" class=\"text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium\">Utilisateurs</a>
            <a href=\"#\" class=\"text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium\">Prises de contact</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class=\"sm:hidden\" id=\"mobile-menu\">
    <div class=\"space-y-1 px-2 pb-3 pt-2\">
      <a href=\"#\" class=\"text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium\">Voyages</a>
      <a href=\"#\" class=\"text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium\">Utilisateurs</a>
      <a href=\"#\" class=\"text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium\">Prises de contact</a>
    </div>
  </div>
</nav>
<h1>Bienvenue administrateur <br>
    <br> Liste des voyages </h1>

   <table class=\"table-auto border-x border-b w-full\">
    <thead>
        <tr>
            <th class=\"border px-4 py-2\">Id</th>
            <th class=\"border px-4 py-2\">Durée</th>
            <th class=\"border px-4 py-2\">Date_départ</th>
            <th class=\"border px-4 py-2\">Date_fin</th>
            <th class=\"border break-words px-4 py-2 whitespace-no-wrap\">Url_image</th>
            <th class=\"border px-4 py-2\">Résumé</th>
            <th class=\"border px-4 py-2\">Nombre_pers_min</th>
            <th class=\"border px-4 py-2\">Nombre_pers_max</th>
            <th class=\"border px-4 py-2\">Prix</th>
            <th class=\"border px-4 py-2\">actions</th>
        </thead>
        <tbody>
        ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["adv_voyages"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["adv_voyage"]) {
            // line 63
            yield "            <tr>
                <td>";
            // line 64
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["adv_voyage"], "id", [], "any", false, false, false, 64), "html", null, true);
            yield "</td>
                <td class=\"example-wrapper\">";
            // line 65
            ((CoreExtension::getAttribute($this->env, $this->source, $context["adv_voyage"], "Duree", [], "any", false, false, false, 65)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["adv_voyage"], "Duree", [], "any", false, false, false, 65), "html", null, true)) : (yield ""));
            yield "</td>
                <td>";
            // line 66
            ((CoreExtension::getAttribute($this->env, $this->source, $context["adv_voyage"], "DateDepart", [], "any", false, false, false, 66)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["adv_voyage"], "DateDepart", [], "any", false, false, false, 66), "d-m-Y"), "html", null, true)) : (yield ""));
            yield "</td>
                <td>";
            // line 67
            ((CoreExtension::getAttribute($this->env, $this->source, $context["adv_voyage"], "DateFin", [], "any", false, false, false, 67)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["adv_voyage"], "DateFin", [], "any", false, false, false, 67), "d-m-Y"), "html", null, true)) : (yield ""));
            yield "</td>
                <td class=\"\">";
            // line 68
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["adv_voyage"], "UrlImage", [], "any", false, false, false, 68), "html", null, true);
            yield "</td>
                <td>";
            // line 69
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["adv_voyage"], "Resume", [], "any", false, false, false, 69), "html", null, true);
            yield "</td>
                <td>";
            // line 70
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["adv_voyage"], "NombrePersMin", [], "any", false, false, false, 70), "html", null, true);
            yield "</td>
                <td>";
            // line 71
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["adv_voyage"], "NombrePersMax", [], "any", false, false, false, 71), "html", null, true);
            yield "</td>
                <td>";
            // line 72
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["adv_voyage"], "Prix", [], "any", false, false, false, 72), "html", null, true);
            yield "</td>
                <td>
                    <a href=\"";
            // line 74
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_adv_voyage_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["adv_voyage"], "id", [], "any", false, false, false, 74)]), "html", null, true);
            yield "\">show</a>
                    <a href=\"";
            // line 75
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_adv_voyage_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["adv_voyage"], "id", [], "any", false, false, false, 75)]), "html", null, true);
            yield "\">edit</a>
                    <a href=\"";
            // line 76
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_adv_voyage_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["adv_voyage"], "id", [], "any", false, false, false, 76)]), "html", null, true);
            yield "\">delete</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 80
            yield "            <tr>
                <td colspan=\"10\">Pas de réservation</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['adv_voyage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        yield "        </tbody>
    </table>

    <a href=\"";
        // line 87
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_adv_voyage_new");
        yield "\">Créer un nouveau voyage</a>
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
        return array (  194 => 87,  189 => 84,  180 => 80,  171 => 76,  167 => 75,  163 => 74,  158 => 72,  154 => 71,  150 => 70,  146 => 69,  142 => 68,  138 => 67,  134 => 66,  130 => 65,  126 => 64,  123 => 63,  118 => 62,  60 => 6,  56 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "adv_voyage/index.html.twig", "C:\\Users\\Utilisateur\\Documents\\Formation Dev web\\Briefs\\Brief-agencedevoyage\\PROD\\templates\\adv_voyage\\index.html.twig");
    }
}
