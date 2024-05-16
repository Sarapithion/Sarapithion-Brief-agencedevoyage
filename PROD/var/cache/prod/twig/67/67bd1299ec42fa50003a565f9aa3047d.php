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

/* adv_reservation/_delete_form.html.twig */
class __TwigTemplate_15064cc16dc122e9946d578c90492343 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        yield "<form method=\"post\" action=\"";
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_adv_reservation_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["adv_reservation"] ?? null), "id", [], "any", false, false, false, 1)]), "html", null, true);
        yield "\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 2
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, ($context["adv_reservation"] ?? null), "id", [], "any", false, false, false, 2))), "html", null, true);
        yield "\">
    <button class=\"btn\">Delete</button>
</form>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "adv_reservation/_delete_form.html.twig";
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
        return array (  43 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "adv_reservation/_delete_form.html.twig", "C:\\Users\\Utilisateur\\Documents\\Formation Dev web\\Briefs\\Sarapithion-Brief-agencedevoyage\\Symfony\\PROD\\templates\\adv_reservation\\_delete_form.html.twig");
    }
}
