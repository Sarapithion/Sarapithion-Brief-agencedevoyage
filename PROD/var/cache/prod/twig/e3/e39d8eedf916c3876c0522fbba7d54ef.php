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

/* adv_reservation/show.html.twig */
class __TwigTemplate_1a97f27196e8b3a34a24108af36f7197 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "adv_reservation/show.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "AdvReservation";
        return; yield '';
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        yield "    <h1>AdvReservation</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["adv_reservation"] ?? null), "id", [], "any", false, false, false, 12), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Message</th>
                <td>";
        // line 16
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["adv_reservation"] ?? null), "Message", [], "any", false, false, false, 16), "html", null, true);
        yield "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 21
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_adv_reservation_index");
        yield "\">back to list</a>

    <a href=\"";
        // line 23
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_adv_reservation_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["adv_reservation"] ?? null), "id", [], "any", false, false, false, 23)]), "html", null, true);
        yield "\">edit</a>

    ";
        // line 25
        yield Twig\Extension\CoreExtension::include($this->env, $context, "adv_reservation/_delete_form.html.twig");
        yield "
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "adv_reservation/show.html.twig";
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
        return array (  93 => 25,  88 => 23,  83 => 21,  75 => 16,  68 => 12,  60 => 6,  56 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "adv_reservation/show.html.twig", "C:\\Users\\Utilisateur\\Documents\\Formation Dev web\\Briefs\\Sarapithion-Brief-agencedevoyage\\Symfony\\PROD\\templates\\adv_reservation\\show.html.twig");
    }
}
